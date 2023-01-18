<div class="col-xl-9">
    <div class="card">
        <div class="card-body">
            <!-- Name Field -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('title', 'Title :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <!-- slug Field -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('slug', 'Slug :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                {!! Form::text('slug', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Content Field -->
            <div class="form-group col-sm-12 col-lg-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('content', 'Content :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                {!! Form::textarea('content', null, ['class' => 'form-control ckeditor']) !!}
            </div>

            <!-- Excerpt Field -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('excerpt', 'Excerpt :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                {!! Form::textarea('excerpt', null, ['class' => 'form-control cs-textarea-hight']) !!}
            </div>

            <!-- Author Field -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('author', 'Author :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                {!! Form::text('author', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Transcript Field -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('script', 'Transcript :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                {!! Form::textarea('script', $video_script[0] ??'', ['class' => 'form-control cs-textarea-hight']) !!}
            </div>

            <!-- Meta title Field -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('meta_title', 'Meta title :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                {!! Form::text('meta_title', null, ['class' => 'form-control']) !!}
            </div>


            <!-- Meta description Field -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('meta_desc', 'Meta description :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                {!! Form::textarea('meta_desc', null, ['class' => 'form-control cs-textarea-hight']) !!}
            </div>

    
        </div>
    </div>
</div>
<div class="col-xl-3">
    <div class="card">
        <div class="cs-card-body">

            <!-- Topics Field -->
            @if (count($all_topics))
            

            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('topics', 'Topics :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}

                <div class="row fv-row mb-10 fv-plugins-icon-container checkbox-container">

                    @foreach ($post->topics as $topic)
                    <div class="col-sm-12 mb-2">
                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                            {!! Form::checkbox('topic[]', $topic->id, $topic, ['id' => 'topic-' . $topic->id, 'class' => 'form-check-input']) !!}
                            {!! Form::label('topic-' . $topic->id, $topic->title, ['class' => 'form-check-label fw-bold text-gray-700']) !!}
                        </label>
                    </div>    
                    @endforeach

                    @foreach ($all_topics as $topic)
                    @if(!in_array($topic->id, $selected_topics))
                    <div class="col-sm-12 mb-2">
                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                            {!! Form::checkbox('topic[]', $topic->id, null, ['id' => 'topic-' . $topic->id, 'class' => 'form-check-input']) !!}
                            {!! Form::label('topic-' . $topic->id, $topic->title, ['class' => 'form-check-label fw-bold text-gray-700']) !!}
                        </label>
                    </div>    
                    @endif
                    @endforeach
                </div>
            </div>
            @endif


            <!-- categories Field -->
            @if (count($categories)) 
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('categories', 'Categories :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                <div class="row fv-row mb-10 fv-plugins-icon-container checkbox-container">
                    {{-- {{$post->categories[0]->id}} --}}

                    @foreach ($post->categories as $category)
                    <div class="col-sm-12 mb-2">
                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                            {!! Form::checkbox('category[]', $category->id, $category, ['id' => 'category-' . $category->id, 'class' => 'form-check-input']) !!}
                            {!! Form::label('category-' . $category->id, $category->title, ['class' => 'form-check-label fw-bold text-gray-700']) !!}
                        </label>
                    </div>    
                    @endforeach

                    @foreach ($categories as $category)
                    @if(!in_array($category->id, $selected_cats))
                    <div class="col-sm-12 mb-2">
                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                            {!! Form::checkbox('category[]', $category->id, null, ['id' => 'category-' . $category->id, 'class' => 'form-check-input']) !!}
                            {!! Form::label('category-' . $category->id, $category->title, ['class' => 'form-check-label fw-bold text-gray-700']) !!}
                        </label>
                    </div>    
                    @endif
                    @endforeach
                </div>
            </div>
            @endif

            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('image', 'Featured Image', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                @isset($featured_image)
                @if (count($featured_image))
                <img src="{{ asset('uploads/' . $featured_image[0]) }}" alt="image" width="100%" class="mb-5">
                @endisset
                @endif
                {!! Form::file('image', null, ['class' => 'form-control']) !!}
            </div>

            <!-- PDF Field -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('pdf', 'PDF file', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                @isset($pdf)
                @if (count($pdf))
                <div class="mb-5">
                    <a href="{{ asset('uploads/' . $pdf[0]) }}" target="_blank">{{$pdf[0]}} </a>
                </div>
                @endif
                @endisset
                {!! Form::file('pdf', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Video Field -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('video', 'Video', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                @isset($video)
                @if (count($video))
                <video src="{{ asset('uploads/' . $video[0]) }}" width="100%" class="mb-5" controls></video>
                @endif
                @endisset
                {!! Form::file('video', null, ['class' => 'form-control']) !!}
                <small>video extention: mp4</small><br>
                <small>video maximum size: 5MB</small>

            </div>

            <!-- Submit Field -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('admin.videos.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
            
        </div>
    </div>
</div>
