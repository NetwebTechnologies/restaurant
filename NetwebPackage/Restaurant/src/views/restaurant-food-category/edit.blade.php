@if (isset($model))
    {!! Form::model($model, ['route' => ['restaurant_food_categories.update', $model->id], 'method' => 'put', 'onSubmit="ajaxFormSubmission($(this))"']) !!}

    @include('restaurant::restaurant-food-category.form')

    <div class="restaurant-submission mt-2">
        {!! Form::submit('Update', ['class' => 'btn btn-primary', 'id' => 'restaurant_submit']) !!}
    </div>
    {!! Form::close() !!}
@else
    <h4 class="text-danger">Record Not Found</h4>
@endif
