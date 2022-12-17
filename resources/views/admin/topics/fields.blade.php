<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Name:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta_title', 'Meta title:') !!}
    {!! Form::text('meta_title', null, ['class' => 'form-control']) !!}
</div>


<!-- Meta description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta_desc', 'Meta description:') !!}
    {!! Form::text('meta_desc', null, ['class' => 'form-control']) !!}
</div>

{{-- <!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta_keywords', 'Keywords:') !!}
    {!! Form::text('meta_keywords', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- is parent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_main', 'Is parent topic:') !!}
    <label class="radio-inline">
        {!! Form::radio('is_parent', "1", null) !!} Yes
    </label>

    <label class="radio-inline">
        {!! Form::radio('is_parent', "0", null) !!} No
    </label>
</div>

<!--  parent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parent_id', 'Select parent:') !!}
    {!! Form::select('parent_id', $parent_topic, $parent_topic, ['class' => 'form-control form-select', 'placeholder' => 'Select parent topic']) !!}

</div>



<!-- is main Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_main', 'Is main topic:') !!}
    <label class="radio-inline">
        {!! Form::radio('is_main', "1", null) !!} Yes
    </label>

    <label class="radio-inline">
        {!! Form::radio('is_main', "0", null) !!} No
    </label>

    <br>
    <small>please select Yes to add topic in the menu</small>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.topics.index') }}" class="btn btn-secondary">Cancel</a>
</div>
