<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Transaction\TransactionContract;
use Symfony\Component\HttpFoundation\Response;

class TransactionController extends Controller
{
    protected $repo;
    public function __construct(TransactionContract $transactionContract) {
        $this->repo = $transactionContract;
    }

    public function index()
    {
        
        $transactions = $this->repo->findAll();
        return response()->json([
            'data' => $transactions,
            'succces' => true,
        ], Response::HTTP_OK);
        
    }
}
