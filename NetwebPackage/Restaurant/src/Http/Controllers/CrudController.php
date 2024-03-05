<?php

namespace Netweb\Restaurant\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\Eloquent\Model;
use Netweb\Restaurant\Interfaces\CrudControllerInterface;

abstract class CrudController implements CrudControllerInterface
{
    protected Model $model;
    protected $service, $createForm, $editForm, $indexFile, $setRequest;

    abstract function setModel();
    abstract function setService();
    abstract function createForm();
    abstract function editForm();
    abstract function indexFile();
    abstract function setRequest();

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : Response
    {
        $modelRecords = collect([]);
        $modelRecords = $this->model::get();
        return response()->view($this->indexFile, compact('modelRecords'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() : Response
    {
        return response()->view($this->createForm);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) : Response
    {
        // Validation Check
        if (!($request instanceof $this->setRequest))
        {
            $request = app($this->setRequest);
        }
        return $this->service->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id (encrypted)
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id (encrypted)
     * @return \Illuminate\Http\Response
     */
    public function edit( string $id) : Response
    {
        $model = null;
        if (!empty($id))
        {
            $id = decrypt($id);
            $model = $this->model::find($id);
            if (isset($model)) $model = $model;
        }
        return response()->view($this->editForm, ['model' => $model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id) : Response
    {
        // Validation Check
        if (!($request instanceof $this->setRequest))
        {
            $request = app($this->setRequest);
        }
        return $this->service->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id (encrypted)
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id) : Response
    {
        return $this->service->destroy($id);
    }

}
