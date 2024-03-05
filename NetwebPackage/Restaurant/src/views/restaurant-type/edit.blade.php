@if (isset($model))
    {!! Form::model($model, ['route' => ['restaurant_types.update', $model->id], 'method' => 'put', 'onSubmit="ajaxFormSubmission($(this))"']) !!}
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
        {!! Form::submit('Update', ['class' => 'btn btn-primary', 'id' => 'restaurant_submit']) !!}
    </div>
    {!! Form::close() !!}
@else
    <h4 class="text-danger">Record Not Found</h4>
@endif
