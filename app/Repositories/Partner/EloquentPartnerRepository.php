<?php
namespace App\Repositories\Partner;
use App\Repositories\Partner\PartnerContract;
use App\Repositories\State\StateContract;
use App\Partner;
class EloquentPartnerRepository implements PartnerContract {

    protected $stateRepo;
    public function __construct(StateContract $stateContract) {
        $this->stateRepo = $stateContract;
    }

    public function create($request) {
      // dd($request->all());
      $state = $this->stateRepo->findByName($request->state);
      // dd($state);
      $partner = new Partner();
      $partner->partner_name = $request->partner_name;
      $partner->email = $request->email;
      $partner->payment_email = $request->payment_email;
      $partner->partner_type = $request->partner_type;
      $partner->type_description = $request->type_description;
      $partner->city = $request->state. ' '. $request->lga;
      $partner->state = $request->state;
      $partner->lga = $request->lga;
      $partner->address = $request->address;
      $partner->telephone1 = $request->telephone1;
      $partner->telephone2 = $request->telephone2;
      $partner->state_id = $state->id;
      $partner->save();
      // dd($partner);
      return $partner;
    }

      // return all Partner
    public function findAll() {
        return Partner::all();
    }

    public function getAll() {
        return Partner::latest()->paginate(3);
    }

      // return a Partner by ID
    public function findById($id) {
        return Partner::where('id', $id)->first();
    }

      // return a Partner by slug
    public function findBySlug($slug){
        return Partner::where('slug', $slug)->first();
    }

      // Update a Partner
    public function update($request, $id) {
      $partner = $this->findById($id);
      $partner->partner_name = $request->partner_name;
      $partner->email = $request->email;
      $partner->payment_email = $request->payment_email;
      $partner->partner_type = $request->partner_type;
      $partner->type_description = $request->type_description;
      $partner->city = $request->state. ' '. $request->lga;
      $partner->state = $request->state;
      $partner->lga = $request->lga;
      $partner->address = $request->address;
      $partner->telephone1 = $request->telephone1;
      $partner->telephone2 = $request->telephone2;
      $partner->save();
      return $partner;
    }

      // Remove a Partner
    public function remove($slug) {
        // ${repoName,,} = $this->findBySlug($slug);
        // return ${repoName,,}->delete();
    }
}
