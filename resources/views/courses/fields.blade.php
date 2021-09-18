<!-- Admin Status Field -->
@if(Auth::check() AND Auth::user()->role_id < 3)
    <div class="form-group col-sm-6">
        <label for="admin_status">Admin Status:</label>
            <select class="form-control" name="admin_status" id="admin_status">
                @if(isset($course))
                    <option value="{{$course->admin_status}}">
                        @if($course->admin_status == 1)
                            on
                        @else
                            off
                        @endif
                    </option>     
                @endif
                    <option value="1">On</option>
                    <option value="0">Off</option>
            </select>
    </div>
@endif

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
  <label for="category_id">Category:</label>
  <select class="form-control" name="category_id" id="category_id">
      
    @if(isset($course))
        <option value="{{ $course->category['id'] }}" > {{ $course->category['name'] }} </option>
    @endif
    @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
  </select>
</div>

<!-- main-course field -->
<div class="form-group  col-md-12">
  <label for="main_course_id">Select Main Course 
      (Assuming this course is a summary of another course):</label>
  <select class="form-control" name="main_course_id" id="main_course_id">
          @if(isset($course->main_course_id))
                <option value="{{ $mainCourse->id }}" > 
                {{ $mainCourse->title }}      
                </option>
                @else 
                <option value="" > 
                    None
                </option>  
           @endif 
           @foreach($mainCourses as $mainCourse)
               <option value="{{$mainCourse->id}}" > {{$mainCourse->title}} </option>
          @endforeach
  </select>
</div>

<!-- Sub Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_title', 'Sub Title:') !!}
    {!! Form::text('sub_title', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- About Instructor Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('about_instructor', 'About Instructor:') !!}
    {!! Form::textarea('about_instructor', null, ['class' => 'form-control']) !!}
</div>

<!-- Playlist Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('playlist_url', 'Playlist Url:') !!}
    {!! Form::text('playlist_url', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Tags Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tags', 'Tags:(seperate with comma)') !!}
    {!! Form::text('tags', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo', 'Photo:') !!}
    {!! Form::text('photo', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Promo Video Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('promo_video_url', 'Promo Video Url:') !!}
    {!! Form::text('promo_video_url', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Creator Status Field -->
@if(Auth::user()->role_id < 3)
    <div class="form-group col-sm-6">
        <label for="creator_status">Creator Status:</label>
            <select class="form-control" name="creator_status" id="creator_status">
                @if(isset($course))
                    <option value="{{$course->creator_status}}">
                        @if($course->creator_status == 1)
                            on
                        @else
                            off
                        @endif
                    </option>     
                @endif
                    <option value="0">Off</option>
                    <option value="1">On</option>
            </select>
    </div>
@endif

<!-- What Will Students Learn Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('what_will_students_learn', 'What Will Students Learn:') !!}
    {!! Form::textarea('what_will_students_learn', null, ['class' => 'form-control']) !!}
</div>

<!-- Target Students Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('target_students', 'Target Students:') !!}
    {!! Form::textarea('target_students', null, ['class' => 'form-control']) !!}
</div>

<!-- Requirements Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('requirements', 'Requirements:') !!}
    {!! Form::textarea('requirements', null, ['class' => 'form-control']) !!}
</div>

<!-- Requirements Field -->
<div class="form-group col-md-12 col-lg-12">
    {!! Form::label('faq', 'Frequently asked questions:') !!}
    {!! Form::textarea('faq', null, ['class' => 'form-control']) !!}
</div>

<!-- Requirements Field -->
<div class="form-group col-md-12 col-lg-12">
    {!! Form::label('refund_policy', 'Refund Policy:') !!}
    {!! Form::textarea('refund_policy', null, ['class' => 'form-control']) !!}
</div>

<!-- Discount Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discount_price', 'Discount Price:') !!}
    {!! Form::number('discount_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Actual Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('actual_price', 'Actual Price:') !!}
    {!! Form::number('actual_price', null, ['class' => 'form-control']) !!}
</div>
