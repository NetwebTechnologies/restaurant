@extends(config('restaurant.layout'))

@section(config('restaurant.content'))
    <h2>Restaurant Food</h2>
    <hr>
    <div class="alert-message"></div>

    <div class="add-record-btn">
        <button class="btn btn-sm btn-primary" onclick="modalShow(`{{ route('restaurant_foods.create') }}`, 'get', 'Add New Restaurant Food')">+ Add</button>
    </div>

    <div class="row">
        @if (isset($modelRecords) && ($modelRecords->count()))
            <table class="table table-stripped">
                <thead>
                    <th>Actions</th>
                    <th>Food Name</th>
                    <th>Image</th>
                    <th>Restauarnt Type</th>
                    <th>Food Category</th>
                    <th>Food Type</th>
                    <th>Price</th>
                    <th>Unit</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    @foreach ($modelRecords as $model)
                        <tr>
                            <td>
                                @include('restaurant::restaurant-food.action')
                            </td>
                            <td>{{ $model->name }}</td>
                            <td>
                                <img src="{{ asset($model->image_url) }}" alt="{{ $model->name }} Image" height="100" width="100">
                            </td>
                            <td>{{ isset($model->restaurantType) ? $model->restaurantType->name : '' }}</td>
                            <td>{{ isset($model->foodCategory) ? $model->foodCategory->name : '' }}</td>
                            <td>{{ ucwords($model->food_type) }}</td>
                            <td>{{ $model->price }}</td>
                            <td>{{ ucwords($model->unit_specification) }}</td>
                            <td class="status-column">
                                @if ($model->status == 1)
                                    <span class="status bg-success">Active</span>
                                @else
                                    <span class="status bg-danger">In Active</span>
                                @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection

