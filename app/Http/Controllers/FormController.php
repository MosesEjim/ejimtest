<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Form\FormContract;
use Sentinel;

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
    
    public function create()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        return view('form.create');
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
