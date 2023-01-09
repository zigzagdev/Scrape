<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchJob(Request  $request)
    {
        if($request->has('search')){
            $jobs = Job::search($request->get('search'))->get();
        }else{
            $jobs = Job::get();
        }
        return view('search/index', compact('jobs'));
    }
}

