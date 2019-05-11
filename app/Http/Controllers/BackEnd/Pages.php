<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\Pages\Store;
use App\Models\Page;

class Pages extends BackEndController
{
    public function __construct(Page $model)
    {
        parent::__construct($model);
    }

    public function store(Store $request){
        $this->model->create($request->all());

        return redirect()->route('pages.index');
    }

    public function update($id , Store $request){
        $row = $this->model->FindOrFail($id);
        $row->update($request->all());

        return redirect()->route('pages.edit' , ['id' => $row->id]);
    }
}
