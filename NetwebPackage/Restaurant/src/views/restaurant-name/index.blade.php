@extends(config('restaurant.layout'))

@section(config('restaurant.content'))
    <h2>Restaurant Name</h2>
    <div class="alert-message"></div>

    <div class="add-record-btn">
        <button class="btn btn-sm btn-primary" onclick="modalShow(`{{ route('restaurant-name.create') }}`, 'get', 'Add New Restaurant Name')">+ Add</button>
    </div>

    <div class="row">
        {{-- @if (isset($dataTable))
            {!! $dataTable->table() !!}
        @endif --}}
        @if (isset($modelRecords) && ($modelRecords->count()))
            <table class="table table-stripped">
                <thead>
                    <th>Actions</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    @foreach ($modelRecords as $model)
                        <tr>
                            <td class="action-td">
                                @include('restaurant::restaurant-name.action')
                            </td>
                            <td>{{ $model->restaurant_name }}</td>
                            <td>{{ $model->address }}</td>
                            <td>{{ $model->phone_number }}</td>
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
