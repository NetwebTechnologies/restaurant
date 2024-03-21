<?php

namespace Netweb\CommonServices\Repositories;

use Netweb\CommonServices\Models\ServiceImages;

class ServiceImagesRepository
{
    public $model;
    public function __construct()
    {
        $this->model = new ServiceImages;
    }

    public function store($files, $service_type, $service_id, $path)
    {
        try{
            foreach($files as $key => $file){
                $this->model->create([
                    'service_type' => $service_type,
                    'service_id' => $service_id,
                    'image' => $file,
                    'path' => $path,
                ]);
            }
            return ['status' => 'success','message' => 'uploaded successfully'];
        }
        catch(\Exception $err){
            return ['status' => 'error','message' => $err->getMessage()];
        }
    }

    public function fetchimages($service_type, $service_id)
    {
        try{
            return $this->model->where(['service_type' => $service_type, 'service_id' => $service_id])->get();
        }
        catch(\Exception $err){
            return $err->getMessage();
        }
    }

    public function delete($id)
    {
        try{
            $this->model->where('id',$id)->delete();
            return ['status' => 'success','message' => 'image got deleted'];
        }
        catch(\Exception $err){
            return ['status' => 'error','message' => 'failed: '.$err->getMessage()];
        }
    }
}
