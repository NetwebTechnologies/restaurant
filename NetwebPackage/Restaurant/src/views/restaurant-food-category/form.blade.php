<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="restautant_category_name">Restaurant Category Name<span class="asterick">*</span></label>
            {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'restautant_category_name']) !!}
            <div class="invalid-feedback"></div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="restautant_category_desc">Description<span class="asterick">*</span></label>
            {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'restautant_category_desc', 'rows' => '2']) !!}
            <div class="invalid-feedback"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="upload_category_image">Upload Category Image<span class="asterick">*</span></label>
            {!! Form::file('image', ['class' => 'form-control', 'id' => 'upload_category_image', 'accept' => 'image/*',]) !!}
            <div class="invalid-feedback"></div>
        </div>
    </div>
    @if ( isset($model) && $model->image_url !== null)
        <div class="col-md-6">
            <div class="form-group">
                <label for=""></label>
                <img class="mt-3" src="{{ asset($model->image_url) }}" alt="{{ $model->name }} Image" height="150" width="150">
            </div>

        </div>
    @endif
</div>
