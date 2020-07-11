<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Chart\ChartContract;
use Sentinel;

class ChartController extends Controller
{
    protected $repo;
    public function __construct(ChartContract $chartContract) {
        $this->repo = $chartContract;
    }
    
    public function index()
    {
        $dataList = $this->repo->findAll();
        // dd($chartList);
        return view('chart.index')->with('dataList', $dataList);
    }
    
    public function create()
    {
        return view('chart.create');
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show($id)
    {
        $questionToResponses = $this->repo->mapQuestionToResponse($id);
        return view('chart.show')->with('questionToResponses', $questionToResponses);
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
