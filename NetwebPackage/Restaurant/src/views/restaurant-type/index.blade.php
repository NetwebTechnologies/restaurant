@extends(config('restaurant.layout'))

@section(config('restaurant.content'))
    <h2>Restaurant Type</h2>
    <hr>
    <div class="alert-message"></div>

    <div class="add-record-btn">
        <button class="btn btn-sm btn-primary" onclick="modalShow(`{{ route('restaurant_types.create') }}`, 'get', 'Add New Restaurant Type')">+ Add</button>
    </div>

    <div class="row">
        @if (isset($modelRecords) && ($modelRecords->count()))
            <table class="table table-stripped">
                <thead>
                    <th>Actions</th>
                    <th>Restaurant Type</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    @foreach ($modelRecords as $model)
                        <tr>
                            <td class="action-td">
                                @include('restaurant::restaurant-type.action')
                            </td>
                            <td>{{ $model->name }}</td>
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

