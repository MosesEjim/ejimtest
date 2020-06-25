<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Form\FormContract;
use Sentinel;
use App\SurveyType;

class FormController extends Controller
{
    protected $repo;
    public function __construct(FormContract $formContract) {
        $this->repo = $formContract;
    }
    
    public function index()
    {
        return view('form.index');
    }
    
    public function create($id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');

        }
        $survey = SurveyType::find($id);
        return view('form.create')->with('survey', $survey);
    }
    
    public function store(Request $request, $id)
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
