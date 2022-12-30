<!-- Name Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('name', 'Name :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::text('name', null, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('email', 'Email :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::email('email', null, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('password', 'Password :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::password('password', ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- Password Confirmation Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('password', 'Password Confirmation :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- Roles Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('roles', 'Roles :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::select('roles[]', $roles, null, ['class' => 'form-control form-control-lg form-control-solid form-select'], ['required' => 'required']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.admins.index') }}" class="btn btn-secondary">Cancel</a>
</div>
