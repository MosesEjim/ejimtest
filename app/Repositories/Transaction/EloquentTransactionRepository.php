<?php
namespace App\Repositories\Transaction;
use App\Repositories\Transaction\TransactionContract;
use App\Transaction;
use Sentinel;
use App\Product;
use App\Partner;
use App\Vendor;
use App\Stock;

class EloquentTransactionRepository implements TransactionContract {

    public function create($request) {
      
        $product = Product::where('id', $request->product_id)->first();
        $partner = Partner::where('id', $request->partner_id)->first();
        $vendor = Vendor::where('id', $request->vendor_id)->first();
        $stock = Stock::where('product_id', $request->vendor_id)->decrement('in_stock', $request->quantity);
        
        // dd($stock);
       $transaction = new Transaction();
       $transaction->quantity_dispatched = $request->quantity;
       $transaction->product_name = $product->product_name;
       
       $transaction->partner_name = $partner->partner_name;
       $transaction->partner_telephone1 = $partner->telephone1;
       
       $transaction->vendor_name = $vendor->name;
       $transaction->vendor_phone = $vendor->phone;
       $transaction->vendor_plate_number = $vendor->plate_number;

       $transaction->transaction_ref = 'trf'.str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);
       $transaction->product_id = $request->product_id;
       $transaction->user_id = Sentinel::getUser()->id;
       
       $transaction->partner_id = $request->partner_id;
       
       $transaction->state_dispatched_to = $partner->state;
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
    
    // return a Transaction by ID
    public function findByPartner($id) {
        return Transaction::where('partner_id', $id)->get();
    }
    
    // return a Transaction by ID
    public function findByPartnerId($id) {
        return Transaction::where('partner_id', $id)->first();
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
