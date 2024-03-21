{!! Form::open(['route' => ['services.images.upload'],'onsubmit'=>'ajaxFormSubmission($(this))', 'method' => 'get',
    'autocomplete' => 'off', 'files' => true]) !!}

    <x-upload-images service='restaurant' :serviceId="$model->id ?? null" />

    <button class="btn btn-warning my-3 float-end" type="submit">
        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Next
    </button>
{!! Form::close() !!}
