<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $jobs = Job::where('title', 'LIKE', '%'.request('q').'%')-> get();
        $query = request('q');
        // return view('results',compact('jobs','query')); this does same associative array wala kaam
        return view('results', ['query' => $query,
        'jobs'=> $jobs,
        'searchType'=> 'job']);
        
    }
}
