<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Question\QuestionContract;
use App\Repositories\QuestionType\QuestionTypeContract;
use App\Repositories\SurveyType\SurveyTypeContract;
use Illuminate\Database\QueryException;
use App\Repositories\Answer\AnswerContract;
use Sentinel;
use App\Program;
use App\Question;
use Exception;

class QuestionController extends Controller
{
    protected $repo;
    protected $questionTypeRepo;
    protected $surveyTypeRepo;
    protected $answerRepo;

    public function __construct(
        QuestionTypeContract $questionTypeContract, 
        QuestionContract $questionContract, 
        SurveyTypeContract $surveyTypeContract,
        AnswerContract $answerContract
        ) {
        $this->repo = $questionContract;
        $this->questionTypeRepo = $questionTypeContract;
        $this->surveyTypeRepo = $surveyTypeContract;
        $this->answerRepo = $answerContract;
    }
    
    public function all()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $questions = $this->repo->getAll();
        $programs = Program::all();
        // dd($questions);
        return view('question.index')->with('questions', $questions)->with('programs', $programs);
    }
    
    public function index($id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $questions = $this->repo->surveyQuestions($id);
        // dd($questions);
        return view('question.index')->with('questions', $questions);
    }
    
    public function create($slug)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $surveyType = $this->surveyTypeRepo->findBySlug($slug);
        $questionTypes = $this->questionTypeRepo->findAll();
        // dd($surveyType);
        return view('question.create')->with('questionTypes', $questionTypes)->with('surveyType', $surveyType);
    }
    
    public function store(Request $request, $slug)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        
        try{
            $question = $this->repo->create($request, $slug);
            
            if($question){
                $notification = array(
                    'message' => "Question Created successfully!",
                    'alert-type' => 'success'
                );
                return redirect()->route('dashboard.eum.option.create', $question->slug)->with('success', 'Question Created successfully!')->with($notification);
            } else { 
                $notificationErr = array(
                    'message' => "Could not create Question. Try again!",
                    'alert-type' => 'error'
                );
                return back()
                 ->withInput()
                 ->with('error', 'Could not create Question. Try again!')->with($notificationErr);
         }
            
         
        }catch(QueryException $e){
 
         $errorCode = $e->errorInfo[1];
             if($errorCode == 1062){
                 $notification = array(
                     'message' => "OPS... A Question with title $request->product_name already exists!",
                     'alert-type' => 'error'
                 );
                 return back()->withInput()->with('error', 'OPS... A Product with title '.$request->product_name.' already exists!')->with($notification);
             }
 
         }
    }
    
    public function show($id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        // dd($id);
        $question = $this->repo->findById($id);
        $answers = $this->answerRepo->findByQuestionId($question->id);
        // dd($answers);
        return view('question.show')->with('question', $question)->with('answers', $answers);
    }
    
    public function edit($q_id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $question = $this->repo->findById($q_id);
        $programs = Program::where('id', $question->program_id)->first();
        $surveyType = $this->surveyTypeRepo->findAll();
        $questionTypes = $this->questionTypeRepo->findAll();
        return view('question.edit')
            ->with('question', $question)
            ->with('questionTypes', $questionTypes)
            ->with('programs', $programs)
            ->with('surveyType', $surveyType);
    }
    
    public function update(Request $request, $slug)
    {   
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        try{

            $question = $this->repo->update($request, $slug);
            if($question){
                $notification = array(
                    'message' => "Question Updated successfully!",
                    'alert-type' => 'success'
                );
                return redirect()->back()->with('success', 'Question edited successfully!')->with($notification);
            } else {
 
                $notificationErr = array(
                    'message' => "Could not edited Question. Try again!",
                    'alert-type' => 'error'
                );
                return back()
                    ->withInput()
                    ->with('error', 'Could not edited Question. Try again!')
                    ->with($notificationErr);
            }
            
         
        } catch(QueryException $e){    
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $notification = array(
                    'message' => "OPS... Question already exist",
                    'alert-type' => 'error'
                );
                return back()->withInput()->with('error', 'OPS... Question already exist!')->with($notification);
            }    
        }
    }

    public function search(Request $request) {
        // dd($request->all());
        $q = $request->search;
        $questions = Question::where('question_text', 'LIKE', '%' . $q . '%')->orWhere('sub_category_name', 'LIKE', '%' . $q . '%')->get ();
        // dd($questions);

        if (count ( $questions ) > 0) {
            return view('question.search_result' )->with('questions', $questions )->with('q', $q);
        } 
        
        return view('question.search_result' )->with('questions', $questions )->with('error', 'No record found. Try to search another search string !')->with('q', $q);        
    }
    
    public function delete($id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        try {
            $this->repo->remove($id);
            return redirect()->route('dashboard.uem.question.index')
            // return redirect()->back()
                ->with('success', 'Question deleted successfully');
        } catch (QueryException $exception) {
            $errorCode = $exception->errorInfo[1];
            if($errorCode === 1451) {
                $notification = array(
                    'message' => "OPS... Question already exist",
                    'alert-type' => 'error'
                );
                return back()->withInput()->with('error', 'OPS... Can not delete this question, other options depends on it. Delete the options first')->with($notification);
            }
        }
        
    }
}
