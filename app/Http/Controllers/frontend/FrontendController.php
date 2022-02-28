<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\LearningOportunity;
use App\Models\LearningProcess;
use App\Models\Program;
use App\Models\Quote;
use App\Models\Sliders;
use App\Models\SuccessStory;
use App\Models\WhyUs;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * home page
     */
    public function index()
    {
        // slider
        $sliders = Sliders::orderByDesc('created_at')->limit(5)->get();
        // learning oportunity
        $learning_oportunities = LearningOportunity::orderByDesc('created_at')->limit(3)->get();
        // about us
        $about_us = AboutUs::orderByDesc('created_at')->limit(1)->get()[0];
        // program 3/4
        $programs = Program::orderByDesc('created_at')->limit(3)->get();
        // why us
        $why_us = WhyUs::orderByDesc('created_at')->limit(1)->get()[0];
        // quote
        $quote = Quote::orderByDesc('created_at')->limit(1)->get()[0];
        // learning proccess 
        $learning_process = LearningProcess::orderBy('order', 'asc')->get();
        // one success story
        $success_story = SuccessStory::orderByDesc('created_at')->limit(1)->get()[0];
        // success story 3/4
        $success_stories = SuccessStory::orderByDesc('created_at')->where([['id', '!=', $success_story->id]])->limit(2)->get();
        // blogs
        $blogs = Blog::orderByDesc('created_at')->limit(4)->get();
        return view('frontend.index', compact('sliders', 'learning_oportunities', 'about_us', 'programs', 'why_us', 'quote', 'learning_process', 'success_story', 'success_stories', 'blogs'));
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     */
    public function facilities()
    {
        return view('');
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     */
    public function blogs()
    {
        return view('');
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     */
    public function blogsByCategory($id)
    {
        return view('');
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     */
    public function blog($id, $slug)
    {
        return view('');
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     */
    public function testimonis()
    {
        return view('');
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     */
    public function testimoni($id)
    {
        return view('');
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     */
    public function successStories()
    {
        return view('');
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     */
    public function successStory($id)
    {
        return view('');
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     */
    public function programs()
    {
        return view('');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function message()
    {
        return view('');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function storeMessage()
    {
        return view('');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function vissionMission()
    {
        return view('');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function extracurriculars()
    {
        return view('');
    }
}
