<div class="row">
    @if (isset($dataTable))
        {!! $dataTable->table() !!}
    @endif
</div>


@push('script')
@isset($dataTable)
    {!! $dataTable->scripts() !!}
@endisset
@endpush