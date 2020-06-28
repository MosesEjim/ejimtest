<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\SurveyType\SurveyTypeContract;
use Sentinel;
use App\Subcategory;
use App\SurveyType;

class SurveyTypeController extends Controller
{
    protected $repo;
    public function __construct(SurveyTypeContract $surveyTypeContract) {
        $this->repo = $surveyTypeContract;
    }
    
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        
        $surveytypes = SurveyType::all();
        return view('surveytype.index')->with('surveytypes', $surveytypes);
    }
    
    public function create()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $subprograms = Subcategory::all();
        return view('surveytype.create')->with('subprograms', $subprograms);
    }
    
    public function store(Request $request)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $request->validate([
            'name'=>'required',
            'sub_category_id'=>'required',
        ]);

        try{
            $surveytype = $this->repo->create($request);
            if($surveytype){

                return redirect()->route('dashboard.eum.surveytype.index')->with('success', 'surveytype created Successfully');
            }else{
                return back()->withInput()->with('error', 'failed to create surveytype, try again');
            }
        }catch(QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $notification = array(
                    'message' => "OPS... A surveytype with title $request->name already exists!",
                    'alert-type' => 'error'
                );
                return back()->withInput()->with('error', 'OPS... A surveytype with title '.$request->name.' already exists!')->with($notification);
            }

        }
        
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $surveytype = $this->repo->findById($id);
        $subprograms = Subcategory::all();
        return view('surveytype.edit')->with('surveytype', $surveytype)->with('subprograms', $subprograms);
    }
    
    public function update(Request $request, $id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $request->validate([
            'name'=>'required',
            'sub_category_id'=>'required',
        ]);

        try{
            $surveytype = $this->repo->update($request, $id);
            if($surveytype){

                return redirect()->route('dashboard.eum.surveytype.index')->with('success', 'Survey Type updated Successfully');
            }else{
                return back()->withInput()->with('error', 'failed to update Record, try again');
            }
        }catch(QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $notification = array(
                    'message' => "OPS... A Sub Program with title $request->name already exists!",
                    'alert-type' => 'error'
                );
                return back()->withInput()->with('error', 'OPS... A Program with title '.$request->name.' already exists!')->with($notification);
            }

        }
    }
    
    public function delete($id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $this->repo->remove($id);
        return redirect()->route('dashboard.eum.surveytype.index')
        ->with('success', 'Survey Type deleted successfully');
    }
}
