@php
        $method = 'post';
        $route = 'restaurant_types.store';
        $button = 'Save';
        if (isset($model)) {
            $method = 'put';
            $route = ['restaurant_types.update', $model->id];
            $button = 'Update';
        }
@endphp
{!! Form::model($model ?? [], ['route' => $route, 'method' => $method, 'onSubmit="ajaxFormSubmission($(this))"']) !!}
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
        {!! Form::submit($button, ['class' => 'btn btn-primary', 'id' => 'restaurant_submit']) !!}
    </div>
{!! Form::close() !!}
