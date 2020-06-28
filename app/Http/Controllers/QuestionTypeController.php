<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\QuestionType\QuestionTypeContract;
use Sentinel;
use App\QuestionType;

class QuestionTypeController extends Controller
{
    protected $repo;
    public function __construct(QuestionTypeContract $questionTypeContract) {
        $this->repo = $questionTypeContract;
    }
    
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $types = $this->repo->findAll();
        return view('questiontype.index')->with('types', $types);
    }
    
    public function create()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        return view('questiontype.create');
    }
    
    public function store(Request $request){

        // dd($request->all());
        $type = new QuestionType();
        $type->type = $request->type;
        $sluger = preg_replace('/\s/','-', $request->type);
        $type->slug = strtolower($sluger);
        $type->save();

        return redirect()->back()->with('success', 'Created successfully');
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
