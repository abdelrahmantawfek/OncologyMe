<!-- Tagline Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('tagline', 'Tagline :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::text('tagline', $general_info[0]->tagline, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- About Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('about', 'About OncologyMe :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::textarea('about', $general_info[0]->about, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- Short Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('short_description', 'Short Description :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::text('short_description', $general_info[0]->short_description, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('email', 'Email :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::text('email', $general_info[0]->email, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('phone', 'Phone :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::text('phone', $general_info[0]->phone, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('location', 'Address :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::textarea('location', $general_info[0]->location, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- Map Link Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('map_link', 'Map URL :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::text('map_link', $general_info[0]->map_link, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- FB Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('feedback', 'Facebook URL :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::text('fb', $general_info[0]->fb, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- Youtube Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('youtube', 'Youtube URL:', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::text('youtube', $general_info[0]->youtube, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- Linkedin Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('linkedin', 'Linkedin URL :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::text('linkedin', $general_info[0]->linkedin, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- Feedback Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('feedback', 'Feedback URL :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::text('feedback', $general_info[0]->feedback, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
</div>