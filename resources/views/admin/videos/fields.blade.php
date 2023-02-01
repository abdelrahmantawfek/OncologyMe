<div class="col-xl-9">
    <div class="card">
        <div class="card-body">
            <!-- Name Field -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('title', 'Title :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!} <span>*</span>
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                <span class="cs-validate-title cs-error"></span>
            </div>

            <!-- slug Field -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('slug', 'Slug :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                {!! Form::text('slug', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Content Field -->
            <div class="form-group col-sm-12 col-lg-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('content', 'Content :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!} <span>*</span>
                {!! Form::textarea('content', null, ['class' => 'form-control ckeditor']) !!}
                <span class="cs-validate-content cs-error"></span>
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
                {!! Form::label('topics', 'Topics :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!} <span>*</span>
                <div class="row fv-row mb-10 fv-plugins-icon-container checkbox-container">

                    @if(!empty($selected_topics))
                    @foreach ($post->topics as $topic)
                    <div class="col-sm-12 mb-2">
                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                            {!! Form::checkbox('topic[]', $topic->id, $topic, ['id' => 'topic-' . $topic->id, 'class' => 'form-check-input cs-topics']) !!}
                            {!! Form::label('topic-' . $topic->id, $topic->title, ['class' => 'form-check-label fw-bold text-gray-700']) !!}
                        </label>
                    </div>    
                    @endforeach
                    @endif

                    @foreach ($all_topics as $topic)
                    @if(!empty($selected_topics))
                        @if(!in_array($topic->id, $selected_topics))
                        <div class="col-sm-12 mb-2">
                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                {!! Form::checkbox('topic[]', $topic->id, null, ['id' => 'topic-' . $topic->id, 'class' => 'form-check-input cs-topics']) !!}
                                {!! Form::label('topic-' . $topic->id, $topic->title, ['class' => 'form-check-label fw-bold text-gray-700']) !!}
                            </label>
                        </div>    
                        @endif
                    @else
                    <div class="col-sm-12 mb-2">
                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                            {!! Form::checkbox('topic[]', $topic->id, null, ['id' => 'topic-' . $topic->id, 'class' => 'form-check-input cs-topics']) !!}
                            {!! Form::label('topic-' . $topic->id, $topic->title, ['class' => 'form-check-label fw-bold text-gray-700']) !!}
                        </label>
                    </div>   
                    @endif
                    @endforeach
                </div>
                <span class="cs-validate-topic cs-error"></span>
            </div>
            @endif


            <!-- categories Field -->
            @if (count($categories)) 
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::label('categories', 'Categories :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!} <span>*</span>
                <div class="row fv-row mb-10 fv-plugins-icon-container checkbox-container">
                    {{-- {{$post->categories[0]->id}} --}}

                    @if(!empty($selected_cats))
                    @foreach ($post->categories as $category)
                    <div class="col-sm-12 mb-2">
                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                            {!! Form::checkbox('category[]', $category->id, $category, ['id' => 'category-' . $category->id, 'class' => 'form-check-input cs-categories']) !!}
                            {!! Form::label('category-' . $category->id, $category->title, ['class' => 'form-check-label fw-bold text-gray-700']) !!}
                        </label>
                    </div>    
                    @endforeach
                    @endif

                    @foreach ($categories as $category)
                    @if(!empty($selected_cats))
                        @if(!in_array($category->id, $selected_cats))
                        <div class="col-sm-12 mb-2">
                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                {!! Form::checkbox('category[]', $category->id, null, ['id' => 'category-' . $category->id, 'class' => 'form-check-input cs-categories']) !!}
                                {!! Form::label('category-' . $category->id, $category->title, ['class' => 'form-check-label fw-bold text-gray-700']) !!}
                            </label>
                        </div>    
                        @endif
                    @else
                    <div class="col-sm-12 mb-2">
                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                            {!! Form::checkbox('category[]', $category->id, null, ['id' => 'category-' . $category->id, 'class' => 'form-check-input cs-categories']) !!}
                            {!! Form::label('category-' . $category->id, $category->title, ['class' => 'form-check-label fw-bold text-gray-700']) !!}
                        </label>
                    </div>     
                    @endif
                    @endforeach
                </div>
                <span class="cs-validate-category cs-error"></span>
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
                <small>Image size: 1280x720px</small><br>
                <small>Image maximum size: 25MB</small>
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
                <br>
                <small>Pdf maximum size: 5MB</small>
            </div>

            <!-- video type -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container cs-vid-type">
                {!! Form::label('type', 'Select video type :', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                <label class="form-check form-check-sm form-check-custom form-check-solid">
                    {!! Form::radio('type', "youtube", null, ['class' => 'form-check-label fw-bold text-gray-700 mx-2']) !!} youtube
                    {!! Form::radio('type', "video", null, ['class' => 'form-check-label fw-bold text-gray-700 mx-2']) !!} video
                </label>
            </div>

            <!-- Video Field -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container cs-vid" style="display: none">
                {!! Form::label('video', 'Video', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                @isset($video)
                @if (count($video))
                <video src="{{ asset('uploads/' . $video[0]) }}" width="100%" class="mb-5 post_vid" controls></video>
                @endif
                @endisset
                {!! Form::file('video', null, ['class' => 'form-control']) !!}
                <small>video extention: mp4</small><br>
                <small>video maximum size: 25MB</small>

            </div>

            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container cs-youtube" style="display: none">
                {!! Form::label('youtube_video', 'Youtube ID', ['class' => 'form-label fs-6 fw-bolder text-dark']) !!}
                {!! Form::text('youtube_video', $youtube_video[0] ?? '', ['class' => 'form-control']) !!}
            </div>

            <!-- Submit Field -->
            <div class="form-group col-sm-12 fv-row mb-10 fv-plugins-icon-container">
                {!! Form::submit('Save', ['class' => 'btn btn-primary cs_save_btn']) !!}
                <a href="{{ route('admin.videos.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
            
        </div>
    </div>
</div>
