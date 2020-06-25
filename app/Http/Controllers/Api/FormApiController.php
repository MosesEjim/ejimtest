<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\Form\FormContract;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use App\Form;

class FormApiController extends Controller
{
    protected $repo;
    public function __construct(FormContract $formContract) {
        $this->repo = $formContract;
    }

    public function index() {
        $forms = $this->repo->findAll();
        // $data = unserialize($forms);
        return response()->json([
            'data' => json_decode($forms),
            'succces' => true,
        ], Response::HTTP_OK);
    }

    public function store(Request $request) {
        // dd($request->all());
        $form = new Form();
        $form->content = serialize($request->all());
        $form->save();

        return response()->json([
            'data' => $form,
            'succces' => true,
        ], 201);
    }
}
