<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Submission\SubmissionContract;
use Sentinel;

class SubmissionController extends Controller
{
    protected $repo;
    public function __construct(SubmissionContract $submissionContract) {
        $this->repo = $submissionContract;
    }
    
    public function index()
    {
        return view('submission.index');
    }
    
    public function create()
    {
        return view('submission.create');
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
