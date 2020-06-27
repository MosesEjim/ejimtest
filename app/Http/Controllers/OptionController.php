<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Option\OptionContract;
use App\Repositories\Question\QuestionContract;
use App\Repositories\QuestionType\QuestionTypeContract;
use Sentinel;

class OptionController extends Controller
{
    protected $repo;
    protected $questionRepo;
    protected $questionTypeRepo;

    public function __construct(
        QuestionContract $questionContract, 
        OptionContract $optionContract,
        QuestionTypeContract $questionTypeContract
        ) {
        $this->repo = $optionContract;
        $this->questionRepo = $questionContract;
        $this->questionTypeRepo = $questionTypeContract;
    }
    
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        return view('option.index');
    }
    
    public function create($slug)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $question = $this->questionRepo->findBySlug($slug);
        $questionTypes = $this->questionTypeRepo->findAll();
        // dd($question);
        return view('option.create')->with('question', $question)->with('questionTypes', $questionTypes);
    }
    
    public function store(Request $request, $slug)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        try{

            $option = $this->repo->create($request);
            if($option){
                $notification = array(
                    'message' => "Option Added successfully!",
                    'alert-type' => 'success'
                );

                if($request->save_record){
                    return redirect()->back()->with('success', 'Option Created successfully!')->with($notification);
                }
                return redirect()->route('dashboard.eum.surveytype.index')->with('success', 'Product Created successfully!')->with($notification);
            }else {
 
                $notificationErr = array(
                'message' => "Could not Add Partner. Try again!",
                'alert-type' => 'error'
                );
                return back()
                 ->withInput()
                 ->with('error', 'Could not add partner. Try again!')->with($notificationErr);
            }
            
         
        }catch(QueryException $e){
 
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $notification = array(
                    'message' => "OPS... A Option already exists!",
                    'alert-type' => 'error'
                );
                return back()->withInput()->with('error', 'OPS... A Option already exists!')->with($notification);
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
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
    }
}
