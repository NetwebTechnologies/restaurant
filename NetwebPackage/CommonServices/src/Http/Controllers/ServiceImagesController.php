<?php

namespace Netweb\CommonServices\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Netweb\CommonServices\Services\ServiceImagesServices;

class ServiceImagesController extends Controller
{
    protected $service;
    public function __construct()
    {
        $this->service = new ServiceImagesServices;
    }
    public function uploadImages(Request $request)
    {
        return $this->service->uploadImages($request);
    }
    public function fetchimages(Request $request)
    {
        return $this->service->fetchimages($request);
    }
    public function deleteImage(Request $request)
    {
        return $this->service->deleteImage($request);
    }
}
