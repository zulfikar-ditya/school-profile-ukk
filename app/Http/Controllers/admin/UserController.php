<?php

namespace App\Http\Controllers\admin;

use App\Models\User as model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $init = $this->init('user');
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

    public string $folder;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $model = new model();
        $dataTables = $model->dataTables;
        $field = $request->field;
        $value = $request->s;
        if ($field or $value) {
            $model = $model->search($value, $field);
        } else {
            $model = $model->getData();
        }
        return view($this->files['index'], $this->pack(compact('model', 'dataTables')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = [];
        $role = Role::all();
        return view($this->files['create'], $this->pack(compact('model', 'role')));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateData($request, 'create', true);
        $model = new model();
        $model->loadModel($request->all());
        $model->loadPassword($request->password);
        try {
            $model->save();
        } catch (\Throwable $th) {
            return redirect()->back()->with($this->messageRedirectCRUD(false, 'create', $th->getMessage()));
        }
        if ($request->role) {
            $role = $request->role;
            $get_role = Role::findOrFail($role);
            $model->syncRoles($get_role->name);
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
        $role = Role::all();
        return view($this->files['edit'], $this->pack(compact('model', 'role')));
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
        $this->validateData($request, 'update', true, $id);
        $model->loadModel($request->all());
        if ($request->old_password) {
            if ($model->checkPassword($request->old_password, $model->password)) {
                $model->loadPassword($request->password);
            }
        }
        $role = $request->role;
        if ($model->hasRole('superuser')) {
            return redirect()->route($this->routes['edit'], $id)->with($this->messageRedirectCRUD(false, 'delete', null, "can't update role user with role superuser"));
        }
        if ($request->role) {
            $get_role = Role::findOrFail($role);
            $model->syncRoles($get_role->name);
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
        if ($id == Auth::user()->id) {
            return redirect()->route($this->routes['show'], $id)->with($this->messageRedirectCRUD(false, 'delete', null, "can't delete this active user"));
        }
        $role = $model->getRoleNames()[0];
        if ($model->hasRole('superuser')) {
            return redirect()->route($this->routes['show'], $id)->with($this->messageRedirectCRUD(false, 'delete', null, "can't delete user with role superuser"));
        }
        $model->removeRole($role);
        try {
            $model->delete();
        } catch (\Throwable $th) {
            return redirect()->route($this->routes['show'], $id)->with($this->messageRedirectCRUD(false, 'delete', $th->getMessage()));
        }
        return redirect()->route($this->routes['index'])->with($this->messageRedirectCRUD(true, 'delete'));
    }
}
