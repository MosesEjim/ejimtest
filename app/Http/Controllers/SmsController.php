<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Sms\SmsContract;
use Sentinel;

class SmsController extends Controller
{
    protected $repo;
    public function __construct(SmsContract $smsContract) {
        $this->repo = $smsContract;
    }
    
    public function index()
    {
        return view('sms.index');
    }
    
    public function create()
    {
        return view('sms.create');
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
