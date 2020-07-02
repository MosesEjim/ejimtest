<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Category\CategoryContract;
use Illuminate\Database\QueryException;
use Sentinel;

class CategoryController extends Controller
{
    protected $repo;
    public function __construct(CategoryContract $categoryContract) {
        $this->repo = $categoryContract;
    }
    
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $categories = $this->repo->findAll();
        return view('category.index')->with('categories', $categories);
    }
    
    public function create()
    {
        return view('category.create');
    }
    
    public function store(Request $request)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $this->validate($request, [
            'title' => 'required'
        ]);

        try {
            $cat = $this->repo->create($request);
            if($cat) {
                $notification = array(
                    'message' => "Category Created successfully!",
                    'alert-type' => 'success'
                );
                return redirect()->route('dashboard.category.index')->with('success', 'Category Created successfully!')->with($notification);
            } else {

                $notificationErr = array(
                  'message' => "Could not create Category. Try again!",
                  'alert-type' => 'error'
                );
                return back()
                    ->withInput()
                    ->with('error', 'Could not create Category. Try again!')->with($notificationErr);
            }
        } catch(QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $notification = array(
                    'message' => "OPS... A Category with title $request->title already exists!",
                    'alert-type' => 'error'
                );
                return back()->withInput()->with('error', 'OPS... A Category with title '.$request->title.' already exists!')->with($notification);
            }
        }
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $category = $this->repo->findById($id);
        return view('category.edit')->with('category', $category);
    }
    
    public function update(Request $request, $id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $this->validate($request, [
            'title' => 'required'
        ]);

        try {
            $cat = $this->repo->update($request, $id);
            if($cat) {
                $notification = array(
                    'message' => "Category Updated successfully!",
                    'alert-type' => 'success'
                );
                return redirect()->route('dashboard.category.index')->with('success', 'Category Updated successfully!')->with($notification);
            } else {

                $notificationErr = array(
                  'message' => "Could not Update Category. Try again!",
                  'alert-type' => 'error'
                );
                return back()
                    ->withInput()
                    ->with('error', 'Could not update Category. Try again!')->with($notificationErr);
            }
        } catch(QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $notification = array(
                    'message' => "OPS... A Category with title $request->title already exists!",
                    'alert-type' => 'error'
                );
                return back()->withInput()->with('error', 'OPS... A Category with title '.$request->title.' already exists!')->with($notification);
            }
        }
    }
    
    public function delete($id)
    {
        //
    }

    public function disableStatus($id){
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $category = $this->repo->findById($id);
        $category->active_status = 0;
        $category->save();
        return redirect()->back()->with('success', 'Category successfully disabled');
    }


    public function enableStatus($id){
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $category = $this->repo->findById($id);
        $category->active_status = 1;
        $category->save();
        return redirect()->back()->with('success', 'category successfully enabled');
    }
    public function disabled(){
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $categories = $this->repo->findAllDisabled();
        return view('category.disable')->with('categories', $categories);
    }
}