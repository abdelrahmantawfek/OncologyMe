<div class="col-xl-9">
    <div class="card mb-10">
        <div class="cs-card-body">
            <!-- Title Field -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('page_title', 'Title:', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                {!! Form::text('page_title', null, ['class' => 'form-control form-control-lg form-control-solid']) !!}
            </div>
        </div>
    </div>

 
@foreach ($page->sections as $i => $section)
    <div class="card mb-10">
        <div class="cs-card-body">

            <h2 class="mb-10">Section {{$i+1}}</h2>
            <!-- Title Field -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('title', 'Title:', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                {!! Form::text('title['.$section->id.']', $section->title??'', ['class' => 'form-control form-control-lg form-control-solid']) !!}
            </div>

            <!-- Title Field -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('subtitle', 'Sub Title:', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                {!! Form::text('subtitle['.$section->id.']', $section->subtitle??'', ['class' => 'form-control form-control-lg form-control-solid']) !!}
            </div>

            <!-- Content Field -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('content', 'Content:', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                {!! Form::textarea('content['.$section->id.']', $section->content??null, ['class' => 'form-control ckeditor']) !!}
            </div>

            @isset($section->img)
            <img src="{{ asset('uploads/' . $section->img) }}" alt="image" width="200" class="mb-5">
            {!! Form::file('img['.$section->id.']', null, ['class' => 'form-control']) !!}
            @endisset

        </div>
    </div>
@endforeach

<div class="card">
    <div class="cs-card-body">
        <!-- Meta Title Field -->
        <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
            {!! Form::label('meta_title', 'Meta Title:', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
            {!! Form::text('meta_title', null, ['class' => 'form-control form-control-lg form-control-solid']) !!}
        </div>

        <!-- Meta Description Field -->
        <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
            {!! Form::label('meta_desc', 'Meta Description:', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
            {!! Form::text('meta_desc', null, ['class' => 'form-control form-control-lg form-control-solid']) !!}
        </div>
    
    </div>
</div>

</div>

<div class="col-xl-3">
    <div class="card">
        <div class="cs-card-body">
            <!-- Submit Field -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
            
        </div>
    </div>
</div>

