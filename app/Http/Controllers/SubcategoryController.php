<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Subcategory\SubcategoryContract;
use Sentinel;
use App\Program;

class SubcategoryController extends Controller
{
    protected $repo;
    public function __construct(SubcategoryContract $subcategoryContract) {
        $this->repo = $subcategoryContract;
    }
    
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $subprograms = $this->repo->findAll();
        return view('subcategory.index')->with('subprograms', $subprograms);
    }
    
    public function create()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $programs = Program::all();
        return view('subcategory.create')->with('programs', $programs);
    }
    
    public function store(Request $request)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $request->validate([
            'name'=>'required',
            'program_id'=>'required',
        ]);

        try{
            $subprogram = $this->repo->create($request);
            if($subprogram){

                return redirect()->route('dashboard.eum.subprogram.index')->with('success', 'subprogram created Successfully');
            }else{
                return back()->withInput()->with('error', 'failed to create Subprogram, try again');
            }
        }catch(QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $notification = array(
                    'message' => "OPS... A SubProgram with title $request->name already exists!",
                    'alert-type' => 'error'
                );
                return back()->withInput()->with('error', 'OPS... A SubProgram with title '.$request->name.' already exists!')->with($notification);
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