<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    <div class="d-flex flex-column gap-1">
        <div class="fw-bolder text-muted">Name</div>
        <div class="fw-bolder fs-5">{{$contact->name}}</div>
    </div>
</div>

<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    <div class="d-flex flex-column gap-1">
        <div class="fw-bolder text-muted">Email</div>
        <div class="fw-bolder fs-5">{{$contact->email}}</div>
    </div>
</div>

<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    <div class="d-flex flex-column gap-1">
        <div class="fw-bolder text-muted">Phone</div>
        <div class="fw-bolder fs-5">{{$contact->phone}}</div>
    </div>
</div>

<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    <div class="d-flex flex-column gap-1">
        <div class="fw-bolder text-muted">Subject</div>
        <div class="fw-bolder fs-5">{{$contact->subject}}</div>
    </div>
</div>

<div class="form-group col-sm-6 fv-row mb-10 fv-plugins-icon-container">
    <div class="d-flex flex-column gap-1">
        <div class="fw-bolder text-muted">Message</div>
        <div class="fw-bolder fs-5">{{$contact->message}}</div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
    <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">Back</a>
</div>