<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Answer\AnswerContract;
use App\Repositories\SurveyType\SurveyTypeContract;
use Sentinel;

class AnswerController extends Controller
{
    protected $repo;
    protected $surveyTypeRepo;
    public function __construct(AnswerContract $answerContract, SurveyTypeContract $surveyTypeContract) {
        $this->repo = $answerContract;
        $this->surveyTypeRepo = $surveyTypeContract;
    }
    
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $responses = $this->repo->findAll();
        return view('answer.index')->with('responses', $responses);
    }
    
    
    public function create()
    {
        return view('answer.create');
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show($id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $responses = $this->repo->findByRefId($id);
        return view('answer.show')->with('responses', $responses);
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
