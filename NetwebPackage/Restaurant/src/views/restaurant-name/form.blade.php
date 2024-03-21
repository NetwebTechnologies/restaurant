<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="restaurant_name">Restaurant Name</label>
            {!! Form::text('restaurant_name', null, ['class' => 'form-control', 'id' => 'restaurant_name']) !!}
            <div class="invalid-feedback"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="restaurant_phone">Restaurant Phone Number</label>
            {!! Form::text('phone_number', null, ['class' => 'form-control', 'id' => 'restaurant_phone', 'maxLength' => 10]) !!}
            <div class="invalid-feedback"></div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="restaurant_address">Restaurant Address</label>
            {!! Form::text('address', null, ['class' => 'form-control', 'id' => 'restaurant_address']) !!}
            <div class="invalid-feedback"></div>
        </div>
    </div>
</div>
