{{-- @include('restaurant::restaurant-detail.forms.steps') --}}

<div class="box-body pt-3">
    @if (isset($model) && $model != null)
        {!! Form::model($model, ['id' => 'restaurant_basic_form', 'route' =>  ['restaurants.update', $model->id], 'method' => 'put', 'onsubmit'=>'ajaxFormSubmission($(this))', 'autocomplete' => 'off', 'files' => true]) !!}
    @else
        {!! Form::open(['id' => 'restaurant_basic_form', 'route' => 'restaurants.store', 'method' => 'post', 'onsubmit'=>'ajaxFormSubmission($(this))', 'autocomplete' => 'off', 'files' => true]) !!}
    @endif
    @php
        $restaurantTypes = $suppliersList = [];
        $restaurantTypes = getRestaurantTypes()->pluck('name', 'id');
        $suppliersList = getSuppliersList()->pluck('name', 'id');
    @endphp
    @csrf
    <div class="row mb-10">
        {{-- Restaurant types --}}
        <div class="col-md-6">
            <div class="form-group">
                <label for="restaurant_type">Restaurant Type <span class="asterick">*</span></label>
                {!! Form::select('restaurant_type_id', $restaurantTypes, null,['id' => 'restaurant_type','class' => 'form-control','placeholder' => '--SELECT RESTAURANT TYPE--']) !!}
                <div class="invalid-feedback"></div>
            </div>
        </div>
        {{-- Restaurant Name --}}
        <div class="col-md-6">
            <div class="form-group">
                <label for="restaurant_name">Restaurant name <span class="asterick">*</span></label>
                {!! Form::text('name', null, ['id' => 'restaurant_name','class' => 'form-control isAlphaNumeric','placeholder' => 'RESTAURANT NAME']) !!}
                <div class="invalid-feedback">
                </div>
            </div>
        </div>
        {{-- Owner name --}}
        <div class="col-md-6">
            <div class="form-group">
                <label for="restaurant_owner_name">Owner Name<span class="asterick">*</span></label>
                {!! Form::text('owner_name', null, ['id' => 'restaurant_owner_name','class' => 'form-control isAlpha','placeholder' => 'RESTAURANT OWNER']) !!}
                <div class="invalid-feedback">
                </div>
            </div>
        </div>
        {{-- Restaurant Email Address --}}
        <div class="col-md-6">
            <div class="form-group">
                <label for="restaurant_email">Restaurant Email Address<small>(Optional)</small></label>
                {!! Form::email('email', null, ['id' => 'restaurant_email','class' => 'form-control','placeholder' => 'EMAIL ADDRESS']) !!}
            </div>
        </div>
        {{-- Restauarnt Contact Number --}}
        <div class="col-md-6">
            <div class="form-group">
                <label for="restaurant_contact">Restaurant Contact Number<span class="asterick">*</span></label>
                {!! Form::text('contact', null, ['id' => 'restaurant_contact','class' => 'form-control isNumeric','placeholder' => 'CONTACT NUMBER']) !!}
                <div class="invalid-feedback">
                </div>
            </div>
        </div>
        {{-- Restaurant Address --}}
        <div class="col-md-6">
            <div class="form-group">
                <label for="restaurant_address">Restaurant Address<span class="asterick">*</span></label>
                {!! Form::text('address', null, ['id' => 'restaurant_address','class' => 'form-control','placeholder' => 'RESTAURANT ADDRESS']) !!}
                <div class="invalid-feedback">
                </div>
            </div>
        </div>
        {{-- Suppliers List --}}
        <div class="col-md-6">
            <div class="form-group">
                <label for="restauarnt_supplier">Supplier <span class="asterick">*</span></label>
                {!! Form::select('supplier_id', $suppliersList, null, ['class' => 'form-control select2','id'=> 'restauarnt_supplier', 'placeholder' => 'Select Supplier']) !!}
                <div class="invalid-feedback">
                </div>
            </div>
        </div>
        {{-- Country --}}
        <div class="col-md-6 country_div" style="display:none">
            <div class="form-group" id="country_div">
                <label for="restaurant_country">Country <span class="asterick">*</span></label>
                <select name="country_id" id="sup_country_id" class="form-control"></select>
                <div id="getCountryHtml">
                </div>
                <div class="invalid-feedback">
                </div>
            </div>
        </div>
        {{-- City --}}
        <div class="col-md-6 city_div" style="display:none">
            <div class="form-group" id="city_div">
                <label for="restaurant_city">City <span class="asterick">*</span></label>
                <select name="city_id" id="sup_city_id" class="form-control"></select>
                <div id="getCityHtml">
                </div>
                <div class="invalid-feedback">
                </div>
            </div>
        </div>
        {{-- Restautant availability --}}
        <div class="col-md-6">
            <div class="form-group">
                <label>Restaurant Availablity<span class="asterick">*</span></label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group date">
                                {{-- {!! Form::text('valid_from_date', null, ['class' => 'form-control pull-right datepicker-future','placeholder' => 'FROM']) !!} --}}
                                {!! Form::text('valid_from_date', null, ['class' => 'form-control datepicker-future', 'placeholder' => 'From Date', 'readonly' => 'readonly']) !!}
                                <div class="input-group-addon">
                                    <em class="fa fa-calendar"></em>
                                </div>
                            </div>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group date">
                                {{-- {!! Form::text('valid_to_date',NULL, ['class' => 'form-control pull-right datepicker-future' , 'placeholder' => 'TO']) !!} --}}
                                {!! Form::text('valid_to_date', null, ['class' => 'form-control datepicker-future', 'placeholder' => 'To Date', 'readonly' => 'readonly']) !!}
                                <div class="input-group-addon">
                                    <em class="fa fa-calendar"></em>
                                </div>
                            </div>
                            <!-- /.input group -->
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Restaurant Timing --}}
        <div class="col-md-6">
            <div class="form-group">
                <label>Restaurant Timings<span class="asterick">*</span></label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="bootstrap-timepicker">
                                <div class="input-group">
                                    {{-- {!! Form::text('valid_from_time', isset($restaurant) ? TwelveHourTime($restaurant->valid_from_time): null, ['class' => 'form-control timePicker']) !!} --}}
                                    {!! Form::text('valid_from_time', null, ['class' => 'form-control timePicker', 'readonly' => 'readonly']) !!}
                                    <div class="input-group-addon">
                                        <em class="fa fa-clock-o"></em>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="bootstrap-timepicker">
                                <div class="input-group">
                                    {{-- {!! Form::text('valid_to_time', isset($restaurant) ? TwelveHourTime($restaurant->valid_to_time): null, ['class' => 'form-control timePicker']) !!} --}}
                                    {!! Form::text('valid_to_time', null, ['class' => 'form-control timePicker', 'readonly' => 'readonly']) !!}
                                    <div class="input-group-addon">
                                        <em class="fa fa-clock-o"></em>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- No. of tables --}}
        <div class="col-md-6">
            <div class="form-group">
                <label for="no_of_tables">Number of Tables<span class="asterick">*</span></label>
                {!! Form::text('no_of_tables', null, ['id' => 'no_of_tables', 'class' => 'form-control isNumeric']) !!}
                <div class="invalid-feedback">
                </div>
            </div>
        </div>
        {{-- Available for delivery --}}
        <div class="col-md-6 my-2">
            <div class="form-group">

                @if(isset($model['available_for_delivery']) && $model['available_for_delivery']==1)
                    {!! Form::checkbox('available_for_delivery', 1, true, ['id'=>'available_for_delivery_label', 'class'=>'form-input-check']) !!}
                @else
                    {!! Form::checkbox('available_for_delivery', 1, null, ['id'=>'available_for_delivery_label', 'class'=>'form-input-check']) !!}
                @endif

                <label for="available_for_delivery_label">Available for Delivery</label>
            </div>
        </div>
    </div>

    {{-- Available week days --}}
    @php
        if (isset($model)) {
            $weekdays = $model->restaurant_available_days;
        }
        $operatingWeekdays = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
    @endphp
    <div class="col-md-12">
        <h3 class="mb-3">Restaurant Available Days</h3>
        @foreach ($operatingWeekdays as $key => $operationWeek)
            @php
                $checkOprationWeekYes = 'checked';
                $checkOprationWeekNo = '';
            @endphp
            @isset($model)
                @php
                    if ($weekdays != null) {
                        if (isset($weekdays[$operationWeek]) && $weekdays[$operationWeek] == 'yes') {
                            $checkOprationWeekYes = 'checked';
                        }
                        if (isset($weekdays[$operationWeek]) && $weekdays[$operationWeek] == 'no') {
                            $checkOprationWeekNo = 'checked';
                        }
                    }
                @endphp
            @endisset
            <div class="row">
                <div class="col-md-2 col-5">
                    <label class="mb-2">{{ strtoupper($operationWeek) }} <span class="asterick">*</span></label>
                </div>
                <div class="col-md-10 col-7">
                    <input name="restaurant_available_days[{{ $operationWeek }}]" type="radio"
                        id="week_{{ $operationWeek }}_1" class="with-gap radio-col-primary" value="yes"
                        {{ $checkOprationWeekYes }}>
                    <label class="mr-4 mb-2" for="week_{{ $operationWeek }}_1">Yes </label>

                    <input name="restaurant_available_days[{{ $operationWeek }}]" type="radio"
                        id="week_{{ $operationWeek }}_2" class="with-gap radio-col-primary" value="no"
                        {{ $checkOprationWeekNo }}>
                    <label for="week_{{ $operationWeek }}_2">No</label>
                </div>
                <div class="invalid-feedback"></div>
            </div>
        @endforeach
    </div>

    {{-- BlackOut days --}}
    <div class="col-sm-6">
        <div class="form-group">
            <label for="blackout_days">Blackout Days</label>
            <div class="row">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-success add-blackout-days" style="font-size: 1rem;"><em
                            class="fa fa-plus" aria-hidden="true"></em> Blackout Days</button>
                </div>
                <div class="col-sm-8">
                    {!! Form::text('blackout_days', null, ['class' => 'form-control datepicker', 'id' => 'blackout_days','style' =>  isset($model->blackout) ? "display:block;" : "display:none;",'placeholder' => 'Select Dates', 'autocomplete' => 'off']) !!}

                </div>
            </div>
        </div>
    </div>

    {{-- Description --}}
    <div class="row">
        <div class="col-md-12">
            <div class="row mb-10">
                <div class="">
                    <div class="box-header with-border" style="padding: 10px;border-color: #c3c3c3;">

                    </div>
                    <h4 class="box-title" style="border-color: #c1c1c1;margin-top: 25px;">
                        <em class="fa fa-plus-circle"></em>Restaurant Description<span class="asterick">*</span></h4>
                </div>
                <div class="">
                    <div class="box">
                        <div class="box-body">
                            {!! Form::textarea('description', null, ['class'=>'form-control', 'id'=>'description']) !!}
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-warning my-3 float-end" type="submit">
        <em class="fa fa-arrow-circle-o-right" aria-hidden="true"></em> Next
    </button>
   {!! Form::close() !!}
</div>

<script>
    $(document).on('click', '.add-blackout-days', function() {
        $('#blackout_days').toggle();
    });

    $(document).on('change', '#restauarnt_supplier', function() {
        getSupplierCountry();
    });
    function getSupplierCountry() {
        let supplierID = $(document).find('#restauarnt_supplier').val();
        let token = $(document).find('[name="_token"]').val();
        $.ajax({
            url: `{{ route('ajax.suppliers.country') }}`,
            method: 'post',
            data: {
                supplier_id: supplierID,
                _token: token,
            },
            success: function(response) {
                console.log(response);
                if (response.status) {
                    let countries = response.countries;
                    $(document).find('.country_div').show()
                    $('#sup_country_id').empty();
                    $('#sup_country_id').append('<option value="">--Select Country--</option>')
                    $.each(countries, function(index, country) {
                        $('#sup_country_id').append('<option value="' + country.id + '" data-code="' + country.country_code+ '">' + country.country_name + '</option>');
                    });
                }
            },
            error: function (error) {
                console.log(error);
            }
        })
    }
    $(document).on('change', '#sup_country_id', function() {
        countryCities();
    });
    function countryCities() {
        let country_id = $(document).find('#sup_country_id').val();
        let token = $(document).find('[name="_token"]').val();
        $.ajax({
            url: `{{ route('ajax.country.cities') }}`,
            method: 'post',
            data: {
                country_id: country_id,
                _token: token,
            },
            success: function(response) {
                console.log(response);
                if (response.status) {
                    let cities = response.cities;
                    $(document).find('.city_div').show()
                    $('#sup_city_id').empty();
                    $('#sup_city_id').append('<option value="">--Select City--</option>')
                    $.each(cities, function(index, city) {
                        $('#sup_city_id').append('<option value="' + city.id + '">' + city.name + '</option>');
                    });
                }
            },
            error: function (error) {
                console.log(error);
            }
        })
    }
    $(document).ready(function(){
        $('#blackout_days').datepicker({
            multidate: true,
            todayHighlight: true,
            format: 'yyyy-mm-dd',
            startDate: new Date(),
        });

        $(".datepicker-future").datepicker({
            todayHighlight: true,
            format: "yyyy-mm-dd",
            autoclose: true,
            startDate: new Date(),
        });

        $(".timePicker").timepicker({
            defaultTime: "current",
            showInputs: false,
            minuteStep: 5,
            timeFormat: "HH:mm ss",
            template: "dropdown",
        });
    });
</script>
