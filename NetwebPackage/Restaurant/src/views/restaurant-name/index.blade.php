@extends('restaurant::layouts.app')
<style>
    td.action-td {
        display: flex;
        gap: 8px;
    }
    td.action-td .action-btn {
        padding: 1px 8px;
        height: 25px;
    }
    td.status-column .status {
        padding: 2px 8px;
        border-radius: 5px;
        color: white;
        box-shadow: 3px 3px 0px 1px #d1d1d1;
        cursor: pointer;
    }
</style>
@section('content')
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

@push('script')
    {{-- @isset($dataTable)
        {!! $dataTable->scripts() !!}
    @endisset --}}
@endpush
