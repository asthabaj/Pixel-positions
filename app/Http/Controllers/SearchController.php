<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public function jobs()
    {
        $jobs = Job::with(['employer','tags'])->where('title', 'LIKE', '%'.request('q').'%')-> get();
        $query = request('q');
        // return view('results',compact('jobs','query')); this does same associative array wala kaam
        return view('results', ['query' => $query,
        'jobs'=> $jobs,
        'searchType'=> 'job']);
    }

    public function companies()
    {
        $employers = Employer::where('name', 'LIKE', '%' . request('q') . '%')->get();
        $query = request('q');
        
        return view('companies.search-results', [
            'employers' => $employers,
            'query' => $query,
            'searchType' => 'company',
        ]);
    }
}
