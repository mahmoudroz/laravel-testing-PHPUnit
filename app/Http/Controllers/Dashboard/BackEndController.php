<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;


class BackEndController extends Controller
{
    protected $model;
    ############################ START CONSTRUCTOR ######################
    public function __construct(Model $model)
    {
        $this->model = $model;
        // $this->middleware(['permission:read-'   . $this->getClassNameFromModel()])->only('index');
        // $this->middleware(['permission:create-' . $this->getClassNameFromModel()])->only('create');
        // $this->middleware(['permission:update-' . $this->getClassNameFromModel()])->only('update');
        // $this->middleware(['permission:delete-' . $this->getClassNameFromModel()])->only('destroy');
    }
    ############################ END CONSTRUCTOR ########################
    ############################ START INDEX ############################
    public function index(Request $request)
    {
        //get all data of Model
        $rows = $this->model;
        $rows = $this->filter($rows,$request);
        $module_name_plural = $this->getClassNameFromModel();
        $module_name_singular = $this->getSingularModelName();
        // return $module_name_plural;
        return view('dashboard.' . $module_name_plural . '.index', compact('rows', 'module_name_singular', 'module_name_plural'));
    }
    ############################ END INDEX   ############################
    //START CREATE
    public function create(Request $request)
    {
        $module_name_plural = $this->getClassNameFromModel();
        $module_name_singular = $this->getSingularModelName();
        $append = $this->append();

        return view('dashboard.' . $this->getClassNameFromModel() . '.create', compact('module_name_singular', 'module_name_plural'))->with($append);
    }
    //END CREATE
    //START EDIT
    public function edit($id)
    {
        $module_name_plural = $this->getClassNameFromModel();
        $module_name_singular = $this->getSingularModelName();
        $append = $this->append();
        $row = $this->model->findOrFail($id);
        return view('dashboard.' . $this->getClassNameFromModel() . '.edit', compact('row', 'module_name_singular', 'module_name_plural'))->with($append);
    }
    //END EDIT
       //START EDIT
    public function show($id)
    {
        $module_name_plural = $this->getClassNameFromModel();
        $module_name_singular = $this->getSingularModelName();
        $append = $this->append();
        $row = $this->model->findOrFail($id);
        return view('dashboard.' . $this->getClassNameFromModel() . '.show', compact('row', 'module_name_singular', 'module_name_plural'))->with($append);
    }
       //END EDIT

    ############################ START DESTROY   ########################
    public function destroy($id, Request $request)
    {
        $this->model->findOrFail($id)->delete();

        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route($this->getClassNameFromModel() . '.index');
    }
    ############################ END DESTROY   ##########################
    ############################ START FILTER  ##########################
    protected function filter($rows,$request){

        $rows = $rows->orderByDesc('id')->paginate(25);
        return $rows;
    }
    ############################ END FILTER  ############################
    ################## START GET CLASS NAME FROM MODEL  #################
    public function getClassNameFromModel()
    {
        return Str::plural($this->getSingularModelName());
    }
    ################## END GET CLASS NAME FROM MODEL  ####################
    ################## START GET SINGLE MODEL NAME    ####################
    public function getSingularModelName()
    {

        return strtolower(class_basename($this->model));
    }
    ################## End GET SINGLE MODEL NAME    ######################
    ############################  START APPEND  ##########################
    protected function append()
    {
        return [];
    }
    ############################  END APPEND    ##########################
    ############################  START UPLOAD IMAGE    ##################
    public function uploadImage($image, $path)
    {
        $imageName = rand(1000000,100000000) .time().'.'.$image->extension();
        Image::make($image)->save(public_path('uploads/' . $path . '/' . $imageName),100)->resize(500, 200);
        return $imageName;
    }
    protected function uploadImage1($image, $path)
    {
        $imageName = $image->hashName();
        Image::make($image)->save(public_path('uploads/' . $path . '/' . $imageName),100)->resize(500, 200);
        return $imageName;
    }
    ############################  END UPLOAD IMAGE    ####################
}
