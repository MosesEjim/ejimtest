<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Program\ProgramContract;
use Sentinel;

class ProgramController extends Controller
{
    protected $repo;
    public function __construct(ProgramContract $programContract) {
        $this->repo = $programContract;
    }
    
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $programs = $this->repo->findAll();
        return view('program.index')->with('programs', $programs);
        
    }
    
    public function create()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        return view('program.create');
    }
    
    public function store(Request $request)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $request->validate([
            'name'=>'required',
        ]);

        try{
            $program = $this->repo->create($request);
            if($program){

                return redirect()->route('dashboard.eum.program.index')->with('success', 'program created Successfully');
            }else{
                return back()->withInput()->with('error', 'failed to create program, try again');
            }
        }catch(QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $notification = array(
                    'message' => "OPS... A Program with title $request->name already exists!",
                    'alert-type' => 'error'
                );
                return back()->withInput()->with('error', 'OPS... A Program with title '.$request->name.' already exists!')->with($notification);
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
        $program = $this->repo->findById($id);
        return view('program.edit')->with('program', $program);
    }
    
    public function update(Request $request, $id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $request->validate([
            'name'=>'required',
        ]);

        try{
            $program = $this->repo->update($request, $id);
            if($program){

                return redirect()->route('dashboard.eum.program.index')->with('success', 'program updated Successfully');
            }else{
                return back()->withInput()->with('error', 'failed to update program, try again');
            }
        }catch(QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $notification = array(
                    'message' => "OPS... A Program with title $request->name already exists!",
                    'alert-type' => 'error'
                );
                return back()->withInput()->with('error', 'OPS... A Program with title '.$request->name.' already exists!')->with($notification);
            }

        }
    }
    
    public function delete($id)
    {
        $this->repo->remove($id);
        return redirect()->route('dashboard.eum.program.index')
        ->withInput()
        ->with('success', 'program deleted successfully');
    }
}
