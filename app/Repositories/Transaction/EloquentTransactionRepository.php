<?php
namespace App\Repositories\Transaction;
use App\Repositories\Transaction\TransactionContract;
use App\Transaction;
use Sentinel;
class EloquentTransactionRepository implements TransactionContract {

    public function create($request) {
      dd($request->all());
       $transaction = new Transaction();
       $transaction->transaction_ref = 'trf'.str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);
       $transaction->product_id = $request->product_id;
       $transaction->user_id = Sentinel::getUser()->id;
       $transaction->quantity = $request->quantity;
       $transaction->partner_id = $request->partner_id;
       $transaction->save();
       return $transaction;
       
    }

      // return all Transaction
    public function findAll() {
        return Transaction::all();
    }

    public function getAll() {
        return Transaction::latest()->paginate(3);
    }

      // return a Transaction by ID
    public function findById($id) {
        return Transaction::where('id', $id)->first();
    }

      // return a Transaction by slug
    public function findBySlug($slug){
        return Transaction::where('slug', $slug)->first();
    }

      // Update a Transaction
    public function update($request, $id) {
       $updateTransaction = $this->findById($id);
       $updateTransaction->product_id = $request->product_id;
       $updateTransaction->user_id = Sentinel::getUser()->id; //should this be updated?
       $updateTransaction->quantity = $request->quantity;
       $updateTransaction->partner_id = $request->partner_id;
       $updateTransaction->save();
       return $updateTransaction;
      
    }

      // Remove a Transaction
    public function remove($slug) {
        // ${repoName,,} = $this->findBySlug($slug);
        // return ${repoName,,}->delete();
    }
}
