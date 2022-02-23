<?php

namespace App\Http\Controllers\admin;

use App\Models\SchoolInformation as model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SchoolInformationController extends Controller
{
    public function __construct()
    {
        $init = $this->init('school-information');
        $this->files = $init['files'];
        $this->routes = $init['routes'];
    }

    /**
     * @param array  $arr
     * @return array
     */
    public function pack($arr = []): array
    {
        return array_merge($arr, ['files' => $this->files], ['routes' => $this->routes]);
    }

    /**
     * data validation
     * 
     * @param $request
     * @param string $method for method we use now
     * @param bool $hasUnique if the table has unique value or image or file validation
     * @param int $id for if $hasUnique true, this for the exception while updating data
     * 
     */
    public function validateData($request, $method = 'create', bool $hasUnique = false, int $id = null)
    {
        $this->validate($request, model::validateData($method, $hasUnique, $id));
    }

    /**
     * for storing any files you upload
     */
    public string $folder = 'school-information';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = model::orderByDesc('created_at')->limit(1)->get();
        if ($model) {
            return redirect()->route($this->routes['show'], $model[0]->id);
        } else {
            return redirect()->route($this->routes['create']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = model::orderByDesc('created_at')->limit(1)->get();
        if ($model) {
            return redirect()->route($this->routes['show'], $model[0]->id);
        }
        $model = [];
        return view($this->files['create'], $this->pack(compact('model')));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateData($request);
        $model = new model();
        $model->loadModel($request->all());
        if ($request->hasFile('logo')) {
            $model->logo = $this->uploadFile($request->file('logo'), $this->folder);
        }
        try {
            $model->save();
        } catch (\Throwable $th) {
            return redirect()->back()->with($this->messageRedirectCRUD(false, 'create', $th->getMessage()));
        }
        return redirect()->route($this->routes['show'], $model)->with($this->messageRedirectCRUD());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = model::findOrFail($id);
        $fields =  $model->fields;
        return view($this->files['show'], $this->pack(compact('model', 'fields')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = model::findOrFail($id);
        return view($this->files['edit'], $this->pack(compact('model')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = model::findOrFail($id);
        $oldFile =  $model->logo;
        $model->loadModel($request->all());
        if ($request->hasFile('logo')) {
            $this->deleteOne($oldFile);
            $model->logo = $this->uploadFile($request->file('logo'), $this->folder);
        }
        try {
            $model->save();
        } catch (\Throwable $th) {
            return redirect()->back()->with($this->messageRedirectCRUD(false, 'update', $th->getMessage()));
        }
        return redirect()->route($this->routes['show'], $model)->with($this->messageRedirectCRUD(true, 'update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = model::findOrFail($id);
        $this->deleteOne($model->logo);
        try {
            $model->delete();
        } catch (\Throwable $th) {
            return redirect()->route($this->routes['show'], $id)->with($this->messageRedirectCRUD(false, 'delete', $th->getMessage()));
        }
        return redirect()->route($this->routes['index'])->with($this->messageRedirectCRUD(true, 'delete'));
    }
}
