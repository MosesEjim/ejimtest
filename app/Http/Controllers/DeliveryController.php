<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Delivery\DeliveryContract;
use Sentinel;

class DeliveryController extends Controller
{
    protected $repo;
    public function __construct(DeliveryContract $deliveryContract) {
        $this->repo = $deliveryContract;
    }
    
    public function index()
    {
        return view('delivery.index');
    }
    
    public function create()
    {
        return view('delivery.create');
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
