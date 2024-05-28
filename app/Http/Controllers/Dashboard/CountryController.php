<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\BackEndController;
use App\Models\Client;
use App\Models\Country;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Events\CreateCountryEvent;

class CountryController extends BackEndController
{

    public function __construct(Country $model)
    {
        parent::__construct($model);
    }
    public function index(Request $request)
    {
        // return "لا حول ولا قوة الا بالله العلي العظيم";
        $rows = $this->model->when($request->search,function($q) use ($request){
            $q->whereTranslationLike('name','%' .$request->search. '%');
        });
        $rows = $this->filter($rows,$request);
        $module_name_plural = $this->getClassNameFromModel();
        $module_name_singular = $this->getSingularModelName();
        return view('dashboard.' . $module_name_plural . '.index', compact('rows', 'module_name_singular', 'module_name_plural'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'ar.name'          => 'required|min:3|max:60|unique:country_translations,name',
            'en.name'          => 'required|min:3|max:60|unique:country_translations,name',
        ]);
        $request_data = $request->except(['_token']);
        $country = Country::create($request_data);
        session()->flash('success', __('site.add_successfully'));
        return redirect()->route('dashboard.'.$this->getClassNameFromModel().'.index');
    }
    public function update(Request $request, $id)
    {
        $country = $this->model->findOrFail($id);
        $request->validate([
            'ar.name'          => ['required', 'min:3','max:60', Rule::unique('country_translations','name')->ignore($country->id, 'country_id') ],
            'en.name'          => ['required', 'min:3','max:60', Rule::unique('country_translations','name')->ignore($country->id, 'country_id') ],
        ]);
        $request_data = $request->except(['_token']);

        $country->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.'.$this->getClassNameFromModel().'.index');


    }
    public function destroy($id, Request $request)
    {
        $country = $this->model->findOrFail($id);
        $country->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.'.$this->getClassNameFromModel().'.index');
    }
    ####################### START CHANGE STATUS   #######################
    protected function changeStatus( $id ){
        $row = $this->model->findOrFail( $id );
        $row['status'] = ! $row['status'];
        $row->save();
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.' . $this->getClassNameFromModel() . '.index');
    }
    #######################  END CHANGE STATUS    #######################
}
