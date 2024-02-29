<?php

namespace Netweb\Restaurant\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Netweb\Restaurant\Interfaces\CrudControllerInterface;


abstract class CrudController implements CrudControllerInterface
{
    // protected $model, $editView;
    protected Model $model;
    protected $service, $createForm, $editForm, $indexFile;
    protected $setRequest;
    // protected $modelInstance2;

    abstract function setModel();
    abstract function setService();
    abstract function createForm();
    abstract function editForm();
    abstract function indexFile();
    abstract function setRequest();

    public function index()
    {
        $modelRecords = $this->model::get();
        return view($this->indexFile, compact('modelRecords'));
    }

    public function create()
    {
        return view($this->createForm);
    }

    public function store(Request $request)
    {
        if (!($request instanceof $this->setRequest)) {
            $request = app($this->setRequest);
        }
        $response = $this->service::store($request);
        return response($response, $response['code']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        if (!empty($id)) {
            $id = decrypt($id);
            $model = $this->model::find($id);
            if (isset($model)) {
                return view($this->editForm, ['model' => $model]);
            }
            return abort(403, 'Record not found');
        }
        return abort(403, 'Record ID not found');
    }

    public function update(Request $request, $id)
    {
        if (!($request instanceof $this->setRequest)) {
            $request = app($this->setRequest);
        }
        $response = $this->service::update($request, $id);
        if ($response['status']) {
            $response['modal'] = 'myModal';
        }
        return response($response, $response['code']);
    }

    public function destroy($id)
    {
        $response = ['status' => false, 'code' => 403, 'message' => 'something went wrong'];
        if (!empty($id)) {
            $id = decrypt($id);
            $model = $this->model::find($id);
            if (isset($model) && $this->model::destroy($id)) {
                $response = ['status' => true, 'code' => 200, 'message' => 'Record Deleted Successfully'];
            }
        }
        return response($response, $response['code']);
    }


}
