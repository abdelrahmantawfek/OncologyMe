<!-- Name Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('title', 'Title :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::text('title', null, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- slug Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('slug', 'Slug :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::text('slug', null, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('featured_image', 'Featured Image :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::file('featured_image', null, ['class' => 'form-control form-control-lg form-control-solid']) !!}
    @isset($category->featured_image)
        <img src="{{ asset('uploads/' . $category->featured_image) }}" alt="image" width="250">
    @endisset
    <br><small>Image size: 1280x720px</small><br>
    <small>Image maximum size: 5MB</small>
</div>


<!-- is main Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('is_main', 'Show in Navbar Dropdown :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    <label class="form-check form-check-sm form-check-custom form-check-solid">
        {!! Form::radio('is_main', "1", null, ['class' => 'form-check-label fw-bold text-gray-700 mx-2']) !!} Yes
        {!! Form::radio('is_main', "0", null, ['class' => 'form-check-label fw-bold text-gray-700 mx-2']) !!} No
    </label>
    <small>please select Yes to add category in the menu under videos tab</small>
</div>

<!-- Meta title Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('meta_title', 'Meta title :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::text('meta_title', null, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>


<!-- Meta description Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('meta_desc', 'Meta description :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::text('meta_desc', null, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.videoscategories.index') }}" class="btn btn-secondary">Cancel</a>
</div>
