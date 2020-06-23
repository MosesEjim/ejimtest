<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Metric\MetricContract;
use Sentinel;

class MetricController extends Controller
{
    protected $repo;
    public function __construct(MetricContract $metricContract) {
        $this->repo = $metricContract;
    }
    
    public function index()
    {
        return view('metric.index');
    }
    
    public function create()
    {
        return view('metric.create');
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
