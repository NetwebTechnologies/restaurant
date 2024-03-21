<?php

namespace Netweb\CommonServices\Traits;

use Illuminate\Support\Facades\Storage;

Trait MyUpload
{
    public static function singleFile($file, $path){
      $fileName = self::generateFileName($file->getClientOriginalName());
        if($file->isValid()){
            $file->storeAs('uploads/'.$path, $fileName);
            return $fileName;
        }
        return null;
    }
    public static function multipleFile($files, $path){
      $myFiles = [];
      foreach ($files as $key => $file) {
        $myFiles[$key] = self::singleFile($file, $path);
      }
      return array_filter($myFiles);
    }
    public static function generateFileName($name){
        $name = str_replace([' ', '&', '|'], ['', '_and_', '_or_'], $name);
        $name = 'img__'.time().rand(9,99).$name;
        return strtolower($name);
    }

    public static function deleteFile($path){
        if (str_contains($path, url()->to('/') . '/storage')) {
            $path = trim(str_replace(url()->to('/') . '/storage', '', $path));
        }
        if(!str_contains($path,'/uploads')){
            $path = 'uploads/'.$path;
        }
        if(Storage::exists($path)){
            Storage::delete([$path]);
        }
    }
}
?>
