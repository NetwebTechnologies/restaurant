{!! Form::open(['route' => 'restaurant-name.store', 'method' => 'post', 'onSubmit="ajaxFormSubmission($(this))"']) !!}

    @include('restaurant::restaurant-name.form')

    <div class="restaurant-submission mt-2">
        {!! Form::submit('Save', ['class' => 'btn btn-primary', 'id' => 'restaurant_submit']) !!}
    </div>
{!! Form::close() !!}
