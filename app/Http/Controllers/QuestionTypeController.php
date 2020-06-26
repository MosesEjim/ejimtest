<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\QuestionType\QuestionTypeContract;
use Sentinel;

class QuestionTypeController extends Controller
{
    protected $repo;
    public function __construct(QuestionTypeContract $questionTypeContract) {
        $this->repo = $questionTypeContract;
    }
    
    public function index()
    {
        return view('questiontype.index');
    }
    
    public function create()
    {
        return view('questiontype.create');
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
