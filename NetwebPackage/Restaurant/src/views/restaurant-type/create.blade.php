{!! Form::open(['route' => 'restaurant_types.store', 'method' => 'post', 'onSubmit="ajaxFormSubmission($(this))"']) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="restautant_type_name">Restaurant Type Name</label>
                {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'restautant_type_name']) !!}
                <div class="invalid-feedback"></div>
            </div>
        </div>
    </div>
    <div class="restaurant-submission mt-2">
        {!! Form::submit('Save', ['class' => 'btn btn-primary', 'id' => 'restaurant_submit']) !!}
    </div>
{!! Form::close() !!}
