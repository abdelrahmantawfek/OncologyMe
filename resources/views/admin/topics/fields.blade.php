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

<!-- is parent Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('is_parent', 'Main topic :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    <label class="form-check form-check-sm form-check-custom form-check-solid">
        {!! Form::radio('is_parent', "1", null, ['class' => 'form-check-label fw-bold text-gray-700 mx-2']) !!} Yes
        {!! Form::radio('is_parent', "0", null, ['class' => 'form-check-label fw-bold text-gray-700 mx-2']) !!} No
    </label>
</div>

<!--  parent Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container" id="parent_field">
    {!! Form::label('parent_id', 'Select the main topic :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::select('parent_id', $parent_topic, null, ['class' => 'form-control form-select form-control-lg form-control-solid', 'placeholder' => 'Select the main topic']) !!}
</div>

<!-- is main Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container" id="main_field">
    {!! Form::label('is_main', 'Show in Navbar Dropdown :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    <label class="form-check form-check-sm form-check-custom form-check-solid">
        {!! Form::radio('is_main', "1", null, ['class' => 'form-check-label fw-bold text-gray-700 mx-2']) !!} Yes
        {!! Form::radio('is_main', "0", null, ['class' => 'form-check-label fw-bold text-gray-700 mx-2']) !!} No
    </label>
    <small>please select Yes to add topic in the menu</small>
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
    <a href="{{ route('admin.topics.index') }}" class="btn btn-secondary">Cancel</a>
</div>

