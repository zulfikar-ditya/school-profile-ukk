<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * home page
     */
    public function index()
    {
        // slider
        // learning oportunity
        // program 3/4
        // about us
        // quote
        // why us
        // learning proccess 
        // one success story
        // success story 3/4
        // blogs
        return view('frontend.index');
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
