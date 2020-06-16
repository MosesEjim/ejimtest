<?php
namespace App\Repositories\Partner;
use App\Repositories\Partner\PartnerContract;
use App\Partner;
class EloquentPartnerRepository implements PartnerContract {
    public function create($request) {

        $partner = new Partner();
        $partner->partner_id = $request->partner_id;
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
          $updatePartner = $this->findById($id);
          $updatePartner->partner_id = $request->partner_id;
          $updatePartner->partner_name = $request->partner_name;
          $updatePartner->email = $request->email;
          $updatePartner->payment_email = $request->payment_email;
          $updatePartner->partner_type = $request->partner_type;
          $updatePartner->type_description = $request->type_description;
          $updatePartner->city = $request->state. ' '. $request->lga;
          $updatePartner->state = $request->state;
          $updatePartner->lga = $request->lga;
          $updatePartner->address = $request->address;
          $updatePartner->telephone1 = $request->telephone1;
          $updatePartner->telephone2 = $request->telephone2;
          $updatePartner->save();
          return $updatePartner;
    }

      // Remove a Partner
    public function remove($slug) {
        // ${repoName,,} = $this->findBySlug($slug);
        // return ${repoName,,}->delete();
    }
}
