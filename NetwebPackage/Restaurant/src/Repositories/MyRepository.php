<?php

namespace Netweb\Restaurant\Repositories;

use Netweb\Restaurant\Interfaces\CrudRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response as HttpResponse;
use Netweb\Restaurant\Helpers\Response;
use Netweb\Restaurant\Traits\Responses;

abstract class MyRepository implements CrudRepositoryInterface
{
    use Responses;

    protected Model $model;

    abstract function setRepoModel();

    /**
     * Store a newly created resource in DB.
     *
     * @param array $data
     */
    public function store(array $data)
    {
        try {
            $model = $this->model::create($data);
            if($model) {
                return $this->createResponse($model);

            }
            throw new \Exception('Something went wrong!', 1);
        } catch (\Throwable $th) {
            return $this->createErrorResponse($th);
        }
    }

    /**
     * Update specific resource.
     *
     * @param array $data
     * @param int $id
     */
    public function update(array $data, int $id)
    {
        try {
            if (!empty($id)) {
                $model = $this->model::find($id);
                if(isset($model) && $model->update($data)) {
                    return $this->createResponse($model);
                }
            }
            throw new \Exception('Something went wrong!', 1);
        } catch (\Exception $th) {
            return $this->createErrorResponse($th);
        }
    }

    public function destroy(string $id)
    {
        try {
            if (!empty($id)) {
                $id = decrypt($id);
                $resource = $this->model::find($id);
                if (isset($resource) && $this->model::destroy($id)) {
                    return $this->createResponse($resource);
                }
            }
            throw new \Exception('Something went wrong!', 1);
        } catch (\Throwable $th) {
            return $this->createErrorResponse($th);
        }
    }
}
