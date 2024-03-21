@extends(config('restaurant.layout'))

@section(config('restaurant.content'))
@php
    $currentRoute = Route::currentRouteName();
    $includeForm = 'restaurant::restaurant-detail.forms.basic-form';
    if ($currentRoute == 'restaurant.images.index') {
        $includeForm = 'restaurant::restaurant-detail.forms.images';
    }
@endphp
    @if (isset($model))
        @include('restaurant::restaurant-detail.forms.form')
    @else
        <h4>Restaurant Not Found</h4>
    @endif

@endsection
