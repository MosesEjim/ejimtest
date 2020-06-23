<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Survey\SurveyContract;
use Sentinel;

class SurveyController extends Controller
{
    protected $repo;
    public function __construct(SurveyContract $surveyContract) {
        $this->repo = $surveyContract;
    }
    
    public function index()
    {
        return view('survey.index');
    }
    
    public function create()
    {
        return view('survey.create');
    }
    
    public function store(Request $request)
    {
        //
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
