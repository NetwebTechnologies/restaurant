@php
    $currentRoute = Route::currentRouteName();
    $includeForm = 'restaurant::restaurant-detail.forms.basic-form';
    if ($currentRoute == 'restaurant.images.index') {
        $includeForm = 'restaurant::restaurant-detail.forms.images';
    }
@endphp

@include('restaurant::restaurant-detail.forms.steps')

@include($includeForm)
