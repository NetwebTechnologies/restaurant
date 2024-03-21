<?php

namespace Netweb\CommonServices\Services;

use Netweb\CommonServices\Traits\MyUpload;
use Netweb\CommonServices\Repositories\ServiceImagesRepository;

class ServiceImagesServices
{
    use MyUpload;

    protected $repo;
    public function __construct()
    {
        $this->repo = new ServiceImagesRepository;
    }

    public function uploadImages($request)
    {
        if($request->hasFile('images')){
            $path = $request->path ?? 'services/'.$request->service;
            $service_id = decrypt($request->service_id);
            $files = self::multipleFile( $request->file('images'), $path);
            return $this->repo->store($files, $request->service, $service_id, $path);
        }
    }

    public function fetchimages($request)
    {
        $path = $request->path ?? 'services/'.$request->service;
        $service_id = decrypt($request->service_id);
        $object = $this->repo->fetchimages($request->service, $service_id);
        if(gettype($object) == 'object' && $object->count() > 0){
            foreach($object as $key => $imageObject){
                $files[] = [
                    'id' => $imageObject->id,
                    'image' => $imageObject->image_url,
                ];
            }
            return $files;
        }
        else{
            return $object;
        }
    }

    public function deleteImage($request)
    {
        $id = $request->id;
        if ($id !== null) {

        }
    }
}
