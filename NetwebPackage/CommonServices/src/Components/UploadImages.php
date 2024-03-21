<?php

namespace Netweb\CommonServices\Components;

use Illuminate\View\Component;

class UploadImages extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $service, $serviceId, $path, $multiple;
    public function __construct($service, $serviceId, $path = null, $multiple = true)
    {
        $this->service      = $service;
        $this->serviceId    = encrypt($serviceId);
        $this->multiple     = $multiple;
        $this->path         = $path;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('common_services::components.upload-images');
    }
}
