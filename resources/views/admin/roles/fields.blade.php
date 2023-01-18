<!-- Name Field -->
<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('name', 'Name :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    {!! Form::text('name', null, ['class' => 'form-control form-control-lg form-control-solid']) !!}
</div>

<!-- Permissions Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::label('name', 'Administrator Access', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Allows a full access to the system" aria-label="Allows a full access to the system"></i></td>

    <div class="row fv-row mb-10 fv-plugins-icon-container">
        <div class="col-sm-3 mb-2">
            <label class="form-check form-check-sm form-check-custom form-check-solid">
                {!! Form::checkbox('cs_select_all', null, null, ['id' => 'cs_select_all', 'class' => 'form-check-input']) !!}
                {!! Form::label('cs_select_all', 'Select All', ['class' => 'form-check-label fw-bold text-gray-700']) !!}
            </label>
        </div>    
    </div>   

    <div class="row fv-row mb-10 fv-plugins-icon-container">
        @foreach ($permissions as $permission)
        <div class="col-sm-3 mb-2">
            <label class="form-check form-check-sm form-check-custom form-check-solid">
                {!! Form::checkbox('permissions[]', $permission->id, null, ['id' => 'permission-' . $permission->id, 'class' => 'form-check-input']) !!}
                {!! Form::label('permission-' . $permission->id, $permission->name, ['class' => 'form-check-label fw-bold text-gray-700']) !!}
            </label>
        </div>    
        @endforeach
    </div>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    {{-- <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary">Cancel</a> --}}
</div>
