<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Answer\AnswerContract;
use Sentinel;

class AnswerController extends Controller
{
    protected $repo;
    public function __construct(AnswerContract $answerContract) {
        $this->repo = $answerContract;
    }
    
    public function index()
    {
        return view('answer.index');
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
