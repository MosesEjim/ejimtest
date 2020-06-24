<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Question\QuestionContract;
use Sentinel;

class QuestionController extends Controller
{
    protected $repo;
    public function __construct(QuestionContract $questionContract) {
        $this->repo = $questionContract;
    }
    
    public function index()
    {
        return view('question.index');
    }
    
    public function create()
    {
        return view('question.create');
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
