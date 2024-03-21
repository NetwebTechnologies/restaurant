{!! Form::open(['route' => 'restaurant_types.store', 'method' => 'post', 'onSubmit="ajaxFormSubmission($(this))"']) !!}

    @include('restaurant::restaurant-type.form')

    <div class="restaurant-submission mt-2">
        {!! Form::submit('Save', ['class' => 'btn btn-primary', 'id' => 'restaurant_submit']) !!}
    </div>
{!! Form::close() !!}
