<?php
namespace App\Repositories\Metric;
use App\Repositories\Metric\MetricContract;
use App\Metric;
class EloquentMetricRepository implements MetricContract {
    public function create($request) {
        // 
    }

      // return all Metric
    public function findAll() {
        return Metric::all();
    }

    public function getAll() {
        return Metric::latest()->paginate(3);
    }

      // return a Metric by ID
    public function findById($id) {
        return Metric::where('id', $id)->first();
    }

      // return a Metric by slug
    public function findBySlug($slug){
        return Metric::where('slug', $slug)->first();
    }

      // Update a Metric
    public function update($request, $slug) {
        $metric = $this->findBySlug($slug);
    }

      // Remove a Metric
    public function remove($slug) {
        $metric = $this->findBySlug($slug);
        return $metric->delete();
    }
}
