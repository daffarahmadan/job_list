<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function index()
    {
        $categories = Category::with('jobs')->get();
        $jobs = Job::where('active', true)->get();

        return view('frontend.homepage',  compact('categories','jobs'));
    }

    public function show(Job $job)
    {
        return view('frontend.detail',compact('job'));
    }

    public function contact(Job $job)
    {
        return view('frontend.contact',compact('job'));
    }

    public function byCategory(Category $category)
    {
        $jobs = Job::query()
                    ->join('category_job', 'jobs.id', '=','category_job.job_id')
                    ->where('category_job.category_id', '=', $category->id)
                    ->where('active', '=', true)
                    ->get();

        $categories = Category::with('jobs')->get();
            
        return view('frontend.homepage',  compact('categories','jobs','category'));
    }

    public function search(Request $request)
    {
        $q = $request->get('search');

        $jobs = Job::query()
                ->where('active','=',true)
                ->where(function ($query) use ($q) {
                    $query->where('title','like', "%$q%");
                })->get();

        $categories = Category::with('jobs')->get();
      
        
        return view('frontend.homepage',  compact('categories','jobs'));
    }
}
