<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Restaurant Category</label>
            {!! Form::select('restaurant_type_id', getRestaurantTypes()->pluck('name', 'id'), null, ['class' => 'form-control', 'placeholder' => '--Select Restaurant Category--']) !!}
            <div class="invalid-feedback"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Food Category</label>
            {!! Form::select('food_category_id', getFoodCategories()->pluck('name', 'id'), null, ['class' => 'form-control', 'placeholder' => '--Select Food Category--']) !!}
            <div class="invalid-feedback"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Food/Drink Name</label>
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            <div class="invalid-feedback"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Price</label>
            {!! Form::text('price', null, ['class' => 'form-control']) !!}
            <div class="invalid-feedback"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Discount (If Available)</label>
            {!! Form::text('discount', null, ['class' => 'form-control', 'placeholder' => 'Discount %']) !!}
            <div class="invalid-feedback"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Surge (If Available)</label>
            {!! Form::text('surge', null, ['class' => 'form-control', 'placeholder' => 'Surge %']) !!}
            <div class="invalid-feedback"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Unit Specification</label>
            {!! Form::text('unit_specification', null, ['class' => 'form-control', 'placeholder' => 'e.g. kg, ml, l, plate, and so on']) !!}
            <div class="invalid-feedback"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Single Package Contains</label>
            {!! Form::text('package_contains', null, ['class' => 'form-control', 'placeholder' => 'No. of units contains on single package']) !!}
            <div class="invalid-feedback"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Ingerdients</label>
            {!! Form::text('ingredients', null, ['class' => 'form-control', 'placeholder' => 'For Example: Cheese, Cappsicum...']) !!}
            <div class="invalid-feedback"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Description</label>
            {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description for food']) !!}
            <div class="invalid-feedback"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Food Type</label>
            <div class="row">
                <div class="col-md-4">
                    {!! Form::radio('food_type', 'veg', true, ['class' => 'form-check-input', 'id' => 'food_type_veg']) !!}
                    <label for="food_type_veg">Veg</label>
                </div>
                <div class="col-md-4">
                    {!! Form::radio('food_type', 'non-veg', null, ['class' => 'form-check-input', 'id' => 'food_type_non_veg']) !!}
                    <label for="food_type_non_veg">Non-Veg</label>
                </div>
            </div>
            <div class="invalid-feedback"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Image</label>
            {!! Form::file('image', ['class' => 'form-control']) !!}
            <div class="invalid-feedback"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::checkbox('delivery_available', 1, null, ['class' => 'form-check-input', 'id' => 'delivery_available']) !!}
            <label for="delivery_available">Available for Delivery</label>
        </div>
        <div class="form-group">
            {!! Form::checkbox('featured', 1, null, ['class' => 'form-check-input', 'id' => 'featured']) !!}
            <label for="featured">Featured</label>
        </div>
    </div>
    @if ( isset($model) && $model->image_url !== null)
        <div class="col-md-6">
            <div class="form-group">
                <label for=""></label>
                <img class="mt-3" src="{{ asset($model->image_url) }}" alt="{{ $model->name }} Image" height="150" width="150">
            </div>

        </div>
    @endif

</div>
