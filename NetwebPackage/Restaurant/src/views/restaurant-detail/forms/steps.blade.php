@push('style')
    <style>
        .nav-tabs {
            display: flex;
            text-decoration: none;
            list-style: none;
            gap: 2px;
            padding-left: 0;
            border-bottom: 1px solid #dbdbdb;
        }
        .nav-tabs li {
            border: 1px solid #c5c5c5;
            padding: 5px 10px;
            border-radius: 5px 5px 0 0;
        }
        .nav-tabs .nav-link.active {
            background: #2900ff;
        }
        .nav-tabs .nav-link.active a {
            color: white;
        }
        .nav-tabs li a {
            text-decoration: none;
        }
        .tab-content {
            display: none;
        }
        .tab-content:target {
            display: block;
        }
    </style>
@endpush

@php
    $currentRoute = Route::currentRouteName();
    $basicNavRoutesArray=[
        'restaurants.create',
        'restaurants.edit',
        'restaurant.create',
        'restaurant.edit',
    ];
    $imagesNavRoutesArray=[
        'restaurant.images.index', // added
        'restaurant.images.create',
        'restaurant.images.edit',
        'supplier.restaurant.images.create',
        'supplier.restaurant.images.edit',
    ];
    $cancellationNavRoutesArray=[
        'restaurant.cancel-policy.create',
        'restaurant.cancel-policy.edit',
    ];
    $modelMenuNavRoutesArray=[
        'restaurant.menu.create',
        'restaurant.menu.edit',
    ];
@endphp

<div class="service-tab">
    <ul class="nav nav-tabs">
        <li class="nav-link {{ in_array($currentRoute, $basicNavRoutesArray) ? 'active' : '' }}">
            <a href="{{ isset($model) && $model != null ? ( isset($isSupplier) && $isSupplier != null ? route('restaurants.edit',  encrypt($model->id)) : route('restaurants.edit', encrypt($model->id)) ) : '#'  }}">Basic</a>
        </li>
        <li class="nav-link {{ in_array($currentRoute, $imagesNavRoutesArray) ? 'active' : '' }}">
            <a href="{{ isset($model) && $model != null ? (isset($isSupplier) && $isSupplier != null ? route('restaurant.images.index', encrypt($model->id)) : route('restaurant.images.index', encrypt($model->id))) : '#' }}">Images</a>
        </li>
        <li class="nav-link {{ in_array($currentRoute, $cancellationNavRoutesArray) ? 'active' : '' }}">
            <a href="{{ isset($model) && $model != null ? (isset($isSupplier) && $isSupplier != null ? '#' : '#') : '#' }}">Cancellation Policy</a>
        </li>
        <li class="nav-link {{ in_array($currentRoute, $modelMenuNavRoutesArray) ? 'active' : '' }}">
            <a href="{{ isset($model) && $model != null ? (isset($isSupplier) && $isSupplier != null ? '#' : '#') : '#' }}">Food Menu</a>
        </li>
    </ul>
</div>
