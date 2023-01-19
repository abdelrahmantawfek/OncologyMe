<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- slug Field -->
<div class="form-group col-sm-12">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-12">
    {!! Form::label('featured_image', 'Featured Image:') !!}
    {!! Form::file('featured_image', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('meta_title', 'Meta title:') !!}
    {!! Form::text('meta_title', null, ['class' => 'form-control']) !!}
</div>


<!-- Meta description Field -->
<div class="form-group col-sm-12">
    {!! Form::label('meta_desc', 'Meta description:') !!}
    {!! Form::text('meta_desc', null, ['class' => 'form-control']) !!}
</div>

{{-- <!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta_keywords', 'Keywords:') !!}
    {!! Form::text('meta_keywords', null, ['class' => 'form-control']) !!}
</div> --}}

{{-- <!-- is parent Field -->
<div class="form-group col-sm-12">
    {!! Form::label('is_main', 'Is parent category:') !!}
    <label class="radio-inline">
        {!! Form::radio('is_parent', "1", null) !!} Yes
    </label>

    <label class="radio-inline">
        {!! Form::radio('is_parent', "0", null) !!} No
    </label>
</div>

<!--  parent Field -->
<div class="form-group col-sm-12">
    {!! Form::label('parent_id', 'Select parent:') !!}
    {!! Form::select('parent_id', $parent_category, $parent_category, ['class' => 'form-control form-select', 'placeholder' => 'Select parent category']) !!}

</div> --}}

<!--  Post Type Field -->
{{-- <div class="form-group col-sm-12">
    {!! Form::label('post_type', 'Post Type:') !!}
    {!! Form::select('post_type', $parent_category, $parent_category, ['class' => 'form-control form-select', 'placeholder' => 'Select post type']) !!}

</div> --}}



<!-- is main Field -->
<div class="form-group col-sm-12">
    {!! Form::label('is_main', 'Show in Navbar Dropdown:') !!}
    <label class="radio-inline">
        {!! Form::radio('is_main', "1", null) !!} Yes
    </label>

    <label class="radio-inline">
        {!! Form::radio('is_main', "0", null) !!} No
    </label>

    <br>
    <small>please select Yes to add category in the menu</small>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    {{-- <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a> --}}
</div>
