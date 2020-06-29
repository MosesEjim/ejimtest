<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\User\UserContract;
use App\Repositories\State\StateContract;
use App\Repositories\Question\QuestionContract;
use App\Repositories\Program\ProgramContract;
use Sentinel;

class UserController extends Controller
{
    protected $repo;
    protected $questionRepo;
    protected $programRepo;
    protected $stateRepo;

    public function __construct(
        UserContract $userContract,
        QuestionContract $questionContract, 
        ProgramContract $programContract,
        StateContract $stateContract
        ) {
        $this->repo = $userContract;
        $this->questionRepo = $questionContract;
        $this->programRepo = $programContract;
        $this->stateRepo = $stateContract;
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
        
        $users = $this->repo->findAll();
        return view('user.index')->with('users', $users);
    }
    
    public function create()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        return view('user.create');
    }
    
    public function store(Request $request)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        //
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
