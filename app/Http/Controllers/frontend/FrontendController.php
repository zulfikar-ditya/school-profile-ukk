<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Extracurricular;
use App\Models\LearningOportunity;
use App\Models\LearningProcess;
use App\Models\Message;
use App\Models\Program;
use App\Models\Quote;
use App\Models\SchoolInformation;
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
     * blogs page
     * @return \Illuminate\Http\Response
     */
    public function blogs()
    {
        $blogs = Blog::orderByDesc('created_at')->paginate(12);
        $category = [];
        return view('frontend.blog.blogs', compact('blogs', 'category'));
    }

    /**
     * blogs by category
     * @return \Illuminate\Http\Response
     */
    public function blogsByCategory($id)
    {
        $category = BlogCategory::findOrFail($id);
        $blogs = Blog::orderByDesc('created_at')->where('blog_category_id', $id)->paginate(12);
        return view('frontend.blog.blogs', compact('blogs', 'category'));
    }

    /**
     * blog detail page
     * @param int $id for blog id
     * @param string $slug for blog slug
     * @return \Illuminate\Http\Response
     */
    public function blog($id, $slug)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->slug != $slug) return abort(404);
        $blogs = Blog::orderByDesc('created_at')->where('blog_category_id', $blog->blog_category_id)->paginate(2);
        return view('frontend.blog.blog', compact('blog', 'blogs'));
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
     * success story page
     * @return \Illuminate\Http\Response
     */
    public function successStories()
    {
        $success_stories = SuccessStory::orderByDesc('created_at')->paginate(12);
        return view('frontend.success-story.success-stories', compact('success_stories'));
    }

    /**
     * detail success Story
     * @param int $id for success story id
     * @param string $name for success story name
     * @return \Illuminate\Http\Response
     */
    public function successStory($id, $name)
    {
        $success_story = SuccessStory::findOrFail($id);
        if ($success_story->name != $name) return abort(404);
        return view('frontend.success-story.success-story', compact('success_story'));
    }

    /**
     * programs page
     * @return \Illuminate\Http\Response
     */
    public function programs()
    {
        $programs = Program::orderByDesc('created_at')->paginate(12);
        return view('frontend.program.programs', compact('programs'));
    }

    /**
     * detail program page
     * @param int  $id for program id
     * @param string $title for program title
     * @return \Illuminate\Http\Response
     */
    public function program($id, $title)
    {
        $program = Program::findOrFail($id);
        if ($program->title != $title) return abort(404);
        return view('frontend.program.program', compact('program'));
    }

    /**
     * form message
     * @return \Illuminate\Http\Response
     */
    public function message()
    {
        return view('frontend.message.message');
    }

    /**
     * store message
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storeMessage(Request $request)
    {
        $model = new Message();
        $this->validate($request, $model->validateData());
        $model->loadModel($request->all());
        try {
            $model->save();
        } catch (\Throwable $th) {
            return redirect()->back()->with($this->messageRedirectCRUD(false, 'create', $th->getMessage()));
        }
        return redirect()->back()->with($this->messageRedirectCRUD());
    }

    /**
     * dispay vission mission school
     * @return \Illuminate\Http\Response
     */
    public function vissionMission()
    {
        $school_information = SchoolInformation::orderByDesc('created_at')->limit(1)->get()[0];
        $vission = $school_information->vission;
        $mission = $school_information->mission;
        $logo = $school_information->logo;
        return view('frontend.vission-mission.vission-mission', compact('vission', 'mission', 'logo'));
    }

    /**
     * extracurriculars page
     * @return \Illuminate\Http\Response
     */
    public function extracurriculars()
    {
        $extracurriculars = Extracurricular::orderByDesc('created_at')->paginate(12);
        return view('frontend.extracurricular.extracurriculars', compact('extracurriculars'));
    }

    /**
     * extracurricular detail
     * @param int $id extracurricular id
     * @param string $name extracurricular name
     * @return \Illuminate\Http\Response
     */
    public function extracurricular($id, $name)
    {
        $extracurricular = Extracurricular::findOrFail($id);
        if ($extracurricular->name != $name) return abort(404);
        return view('frontend.extracurricular.extracurricular', compact('extracurricular'));
    }
}
