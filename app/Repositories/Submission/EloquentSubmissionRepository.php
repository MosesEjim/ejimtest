<?php
namespace App\Repositories\Submission;
use App\Repositories\Submission\SubmissionContract;
use App\Submission;
use Sentinel;
use App\Form;
class EloquentSubmissionRepository implements SubmissionContract {
    public function create($request) {
        $submission = new Submission();
        $submission->user_id = $request->user_id;
        $submission->response = $request->response;
        $submission->longitude = $request->longitude;
        $submission->latitude = $request->latitude;
        $form = Form::find($request->form_id);
        $submission->form()->associate($form);
        $submission->save();
        return $submission;
    }

      // return all Submission
    public function findAll() {
        return Submission::all();
    }

    public function getAll() {
        return Submission::latest()->paginate(3);
    }

      // return a Submission by ID
    public function findById($id) {
        return Submission::where('id', $id)->first();
    }

      // return a Submission by slug
    public function findBySlug($slug){
        return Submission::where('slug', $slug)->first();
    }

      // Update a Submission
    public function update($request, $slug) {
        // ${repoName,,} = $this->findBySlug($slug);
    }

      // Remove a Submission
    public function remove($slug) {
        // ${repoName,,} = $this->findBySlug($slug);
        // return ${repoName,,}->delete();
    }
}
