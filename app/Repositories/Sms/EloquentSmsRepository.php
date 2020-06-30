<?php
namespace App\Repositories\Sms;
use App\Repositories\Sms\SmsContract;
use App\Sms;
class EloquentSmsRepository implements SmsContract {
    public function create($request) {
      $message = urlencode('Test message from UNICEF');
      $senderid = urlencode('UNICEF EUM');
      $to = '080*********,081**********,070*********'; //each of the numbers are separated with a comma
      $token = 'El0NdpUmVcus4odZvbzYVh2AGwW1RVz0hS67Cx01E6tToCiGEoozhTj078z8axbPcRNFquGHHNrhy5aTaIOYePW2oDZ4LBNZm3Ue';
      $baseurl = 'https://smartsmssolutions.com/api/json.php?';
      
      $sms_array = array 
        (
        'sender' => $senderid,
        'to' => $to,
        'message' => $message,
        'type' => '0', 
        'routing' => 3,
        'token' => $token
      );
      
      $params = http_build_query($sms_array);
      $ch = curl_init(); 
      
      curl_setopt($ch, CURLOPT_URL,$baseurl);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $params); 
      
      $output=curl_exec($ch);
      
      curl_close($ch);
      
      return $output; // response code
    }

      // return all Sms
    public function findAll() {
        return Sms::all();
    }

    public function getAll() {
        return Sms::latest()->paginate(3);
    }

      // return a Sms by ID
    public function findById($id) {
        return Sms::where('id', $id)->first();
    }

      // return a Sms by slug
    public function findBySlug($slug){
        return Sms::where('slug', $slug)->first();
    }

      // Update a Sms
    public function update($request, $slug) {
        $sms = $this->findBySlug($slug);
    }

      // Remove a Sms
    public function remove($slug) {
        $sms = $this->findBySlug($slug);
        return $sms->delete();
    }
}
