<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- URL Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'URL:') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<!-- Desktop Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desktop_image', 'Desktop Image:') !!}
    {!! Form::file('desktop_image', null, ['class' => 'form-control']) !!}
</div>

<!-- Mob Image Field -->
<div class="form-group col-sm-12 col-lg-6">
    {!! Form::label('mob_image', 'Mob Image:') !!}
    {!! Form::file('mob_image', null, ['class' => 'form-control']) !!}
</div>

<!-- placeField -->
<div class="form-group col-sm-6">
    {!! Form::label('place', 'Place:') !!}
    {!! Form::select('place', ['1' => 'Main Banner', '2' => 'Top Sidebar banner', '3' => 'Bottom sidebar banner'], null, ['class' => 'form-control', 'placeholder' => 'Select Ads place']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.announcements.index') }}" class="btn btn-secondary">Cancel</a>
</div>
