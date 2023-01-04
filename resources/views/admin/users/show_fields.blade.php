<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    <div class="d-flex flex-column gap-1">
        <div class="fw-bolder text-muted">Name</div>
        <div class="fw-bolder fs-5">{{$user->first_name}} {{$user->last_name}}</div>
    </div>
</div>

<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    <div class="d-flex flex-column gap-1">
        <div class="fw-bolder text-muted">Email</div>
        <div class="fw-bolder fs-5">{{$user->email}}</div>
    </div>
</div>

<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    <div class="d-flex flex-column gap-1">
        <div class="fw-bolder text-muted">Phone</div>
        <div class="fw-bolder fs-5">{{$user->phone}}</div>
    </div>
</div>

<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    <div class="d-flex flex-column gap-1">
        <div class="fw-bolder text-muted">Country</div>
        <div class="fw-bolder fs-5">{{$user->country}}</div>
    </div>
</div>

<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    <div class="d-flex flex-column gap-1">
        <div class="fw-bolder text-muted">Governorate</div>
        <div class="fw-bolder fs-5">{{$user->governorate ?? ''}}</div>
        <div class="fw-bolder fs-5">{{$user->other_governorate ?? ''}}</div>
    </div>
</div>

<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    <div class="d-flex flex-column gap-1">
        <div class="fw-bolder text-muted">Affiliation</div>
        <div class="fw-bolder fs-5">{{$user->affiliation}}</div>
    </div>
</div>

<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    <div class="d-flex flex-column gap-1">
        <div class="fw-bolder text-muted">Speciality</div>
        <div class="fw-bolder fs-5">{{$user->speciality}}</div>
    </div>
</div>

<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    <div class="d-flex flex-column gap-1">
        <div class="fw-bolder text-muted">Accept Newsletter Emails</div>
        <div class="fw-bolder fs-5">{{($user->accept_newsletter_emails) == 1 ? 'Yes' : 'No' }}</div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Back</a>
</div>