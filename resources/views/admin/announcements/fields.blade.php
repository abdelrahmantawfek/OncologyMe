<!-- Title Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('title', 'Title :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::text('title', null, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- URL Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('url', 'URL :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::text('url', 'https://', ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- place Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('place', 'Place :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::select('place', ['1' => 'Main Banner', '2' => 'Top Sidebar banner', '3' => 'Bottom sidebar banner', '4' => 'Videos banner'], null, ['class' => 'form-control form-select form-control-lg form-control-solid', 'placeholder' => 'Select Ads place']) !!}
</div>

<!-- Desktop Image Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('desktop_image', 'Desktop Image :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}<br>
    @isset($announcement->desktop_image)
    <img src="{{ asset('uploads/' . $announcement->desktop_image) }}" alt="image" width="100%" class="my-5"><br>
    @endisset
    {!! Form::file('desktop_image', null, ['class' => 'form-control form-control-lg form-control-solid']) !!}<br>
    <small>recommended size : 730x90 px</small>
</div>

<!-- Mob Image Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('mob_image', 'Mob Image :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}<br>
    @isset($announcement->mob_image)
    <img src="{{ asset('uploads/' . $announcement->mob_image) }}" alt="image" width="250px" class="my-5"><br>
    @endisset
    {!! Form::file('mob_image', null, ['class' => 'form-control form-control-lg form-control-solid']) !!}<br>
    <small>recommended size : 350x224 px</small>
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.announcements.index') }}" class="btn btn-secondary">Cancel</a>
</div>
