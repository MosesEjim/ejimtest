<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Question\QuestionContract;
use App\Repositories\QuestionType\QuestionTypeContract;
use App\Repositories\SurveyType\SurveyTypeContract;
use Sentinel;

class QuestionController extends Controller
{
    protected $repo;
    protected $questionTypeRepo;
    protected $surveyTypeRepo;

    public function __construct(
        QuestionTypeContract $questionTypeContract, 
        QuestionContract $questionContract, 
        SurveyTypeContract $surveyTypeContract
        ) {
        $this->repo = $questionContract;
        $this->questionTypeRepo = $questionTypeContract;
        $this->surveyTypeRepo = $surveyTypeContract;
    }
    
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        return view('question.index');
    }
    
    public function create($slug)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $surveyType = $this->surveyTypeRepo->findBySlug($slug);
        $questionTypes = $this->questionTypeRepo->findAll();
        // dd($questionTypes);
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
        //
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function delete($id)
    {
        //
    }
}
