<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Extracurricular;
use App\Models\Facility;
use App\Models\LearningOportunity;
use App\Models\Program;
use App\Models\SuccessStory;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::all()->count();
        $blog = Blog::all()->count();
        $extracurricular = Extracurricular::all()->count();
        $facility = Facility::all()->count();
        $blog_category = BlogCategory::all()->count();
        $program = Program::all()->count();
        $learning_oportunities = LearningOportunity::all()->count();
        $success_stories = SuccessStory::all()->count();
        return view('admin.index', compact('user', 'blog', 'extracurricular', 'facility', 'blog_category', 'program', 'learning_oportunities', 'success_stories'));
    }
}
