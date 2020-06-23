<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Response\ResponseContract;
use Sentinel;

class ResponseController extends Controller
{
    protected $repo;
    public function __construct(ResponseContract $responseContract) {
        $this->repo = $responseContract;
    }
    
    public function index()
    {
        return view('response.index');
    }
    
    public function create()
    {
        return view('response.create');
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
