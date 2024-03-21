{!! Form::open(['route' => 'restaurant_food_categories.store', 'method' => 'post', 'onSubmit="ajaxFormSubmission($(this))"']) !!}

    @include('restaurant::restaurant-food-category.form')

    <div class="restaurant-submission mt-2">
        {!! Form::submit('Save', ['class' => 'btn btn-primary', 'id' => 'restaurant_submit']) !!}
    </div>
{!! Form::close() !!}
