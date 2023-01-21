<!-- Title Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('title', 'Title :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::text('title', null, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- URL Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('url', 'URL :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::text('url', null, ['class' => 'form-control form-control-lg form-control-solid', 'placeholder' => 'https://']) !!}
    <br><small>Your link it must initially contain to <b style="color: #009ef7">https://</b></small>

</div>

<!-- place Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('place', 'Place :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::select('place', ['1' => 'Home', '2' => 'Top sidebar', '3' => 'Bottom sidebar', 'topics' => 'Topics', 'videos' => 'Videos', 'news' => 'News', 'articles' => 'Articles', 'podcasts' => 'Podcasts'], null, ['class' => 'form-control form-select form-control-lg form-control-solid', 'placeholder' => 'Select Ads place']) !!}
</div>

<!-- Desktop Image Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('desktop_image', 'Desktop Image :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}<br>
    @isset($announcement->desktop_image)
    <img src="{{ asset('uploads/' . $announcement->desktop_image) }}" alt="image" width="100%" class="my-5"><br>
    @endisset
    {!! Form::file('desktop_image', null, ['class' => 'form-control form-control-lg form-control-solid']) !!}<br>
    <small class="ma-banner">recommended size for home banners : 730x90 px, videos banners : 1000x124 px, sidebar banners: 300x192 px, pages banners 730x90 px</small><br>
    <small>Image maximum size: 5MB</small>

</div>

<!-- Mob Image Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('mob_image', 'Mob Image :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}<br>
    @isset($announcement->mob_image)
    <img src="{{ asset('uploads/' . $announcement->mob_image) }}" alt="image" width="250px" class="my-5"><br>
    @endisset
    {!! Form::file('mob_image', null, ['class' => 'form-control form-control-lg form-control-solid']) !!}<br>
    <small>recommended size : 350x224 px</small><br>
    <small>Image maximum size: 5MB</small>
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.announcements.index') }}" class="btn btn-secondary">Cancel</a>
</div>
