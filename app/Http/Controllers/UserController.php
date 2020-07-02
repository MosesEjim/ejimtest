<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\User\UserContract;
use App\Repositories\State\StateContract;
use App\Repositories\Question\QuestionContract;
use App\Repositories\Program\ProgramContract;
use App\Repositories\Role\RoleContract;
use Sentinel;

class UserController extends Controller
{
    protected $repo;
    protected $questionRepo;
    protected $programRepo;
    protected $stateRepo;
    protected $roleRepo;

    public function __construct(
        UserContract $userContract,
        QuestionContract $questionContract, 
        ProgramContract $programContract,
        StateContract $stateContract,
        RoleContract $roleContract
        ) {
        $this->repo = $userContract;
        $this->questionRepo = $questionContract;
        $this->programRepo = $programContract;
        $this->stateRepo = $stateContract;
        $this->roleRepo = $roleContract;
    }
    
    public function adminDashboard(){
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $users = $this->repo->findAll();
        $states = $this->stateRepo->findAll();
        $questions = $this->questionRepo->findAll();
        $programs = $this->programRepo->findAll();
        return view('dashboard.index')
            ->with('users', $users)
            ->with('questions', $questions)
            ->with('programs', $programs)
            ->with('states', $states);
    }
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        
        $users = $this->repo->getAll();
        return view('user.index')->with('users', $users);
    }
    
    public function create()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $roles = $this->roleRepo->findAll();
        return view('user.create')->with('roles', $roles);
    }
    
    public function store(Request $request)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $request->validate([
            'first_name'=>'required|string',
            'last_name'=>'required|string',
            'email'=>'required|email',
            'phone'=>'required',
            'account_type'=>'required',
            'sex'=>'required'
        ]);
        try{

            $user = $this->repo->create($request);
            if($user){
             $notification = array(
                 'message' => "User Created successfully!",
                 'alert-type' => 'success'
             );
             return redirect()->route('dashboard.user.index')->with('success', 'User Created successfully!')->with($notification);
            }else {
 
             $notificationErr = array(
               'message' => "Could not create User. Try again!",
               'alert-type' => 'error'
             );
             return back()
                 ->withInput()
                 ->with('error', 'Could not create User. Try again!')->with($notificationErr);
         }
            
         
     }catch(QueryException $e){
        $errorCode = $e->errorInfo[1];
        if($errorCode == 1062){
            return back()->withInput()->with('error', 'user with '.$request->email.' already exist');
        }
        
     }

    }
    
    public function show($id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        //
    }
    
    public function edit($id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        //
    }
    
    public function update(Request $request, $id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        //
    }
    
    public function delete($id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        //
    }
}
