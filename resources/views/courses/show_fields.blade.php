<!-- User Id Field -->
<div class="col-sm-6">
    {!! Form::label('user_id', 'Author:') !!}
    <p><a href="/users/{{ $course->user['id'] }}">{{ $course->user['name'] }}</a></p>
</div>

<!-- Category Id Field -->
<div class="col-sm-6">
    {!! Form::label('category_id', 'Category:') !!}
    <p><a href="/categories/{{$course->category['id']}}">{{ $course->category['name'] }}</a></p>
</div>

<!-- Title Field -->
<div class="col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $course->title }}</p>
    {!! Form::label('sub_title', 'Sub Title:') !!}
    <p>{{ $course->sub_title }}</p>
</div>

<!-- Discount Price Field -->
<div class="col-sm-6">
    {!! Form::label('actual_price', 'Price:') !!}
    <p style="font-size:28px; font-weight:bold;"><del style="text-decoration-style: double;">N </del>{{ $course->discount_price }}</p>
    <p style="font-size:20px;"><del style="text-decoration-style:double;">N {{ $course->actual_price }}</del></p>
    <a href="#" class="btn btn-lg btn-success">Buy Now <del style="text-decoration-style: double;">N </del>{{ $course->discount_price }}</a>

</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $course->description }}</p>
</div>

<!-- About Instructor Field -->
<div class="col-sm-12">
    {!! Form::label('about_instructor', 'About Instructor:') !!}
    <p>{{ $course->about_instructor }}</p>
</div>

<!-- Playlist Url Field -->
<div class="col-sm-6">
    {!! Form::label('playlist_url', 'Playlist Url:') !!}
    <p>{{ $course->playlist_url }}</p>
</div>

<!-- Tags Field -->
<div class="col-sm-6">
    {!! Form::label('tags', 'Tags:') !!}
    <p>{{ $course->tags }}</p>
</div>


<!-- Photo Field -->
<div class="col-sm-6">
    {!! Form::label('photo', 'Photo:') !!}
    <p>{{ $course->photo }}</p>
</div>

<!-- Promo Video Url Field -->
<div class="col-sm-6">
    {!! Form::label('promo_video_url', 'Promo Video Url:') !!}
    <p>{{ $course->promo_video_url }}</p>
</div>

@if(Auth::check() AND (Auth::user()->role_id < 3 || Auth::user()->id == $course->user_id))

    <!-- Creator Status Field -->
    <div class="col-sm-6">
        {!! Form::label('creator_status', 'Creator Status:') !!}
        <p>
            @if($course->creator_status == 1)
                published 
                {!! Form::open(['route' => ['courses.unpublishCourse', $course->id], 'method' => 'post']) !!}
                    <input type="hidden" name="course_id" value="{{$course->id}}" />
                    {!! Form::button('<i class="far fa-thumbs-up-alt"></i>Unpublish', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure you want to Unpublish?')"]) !!}
                {!! Form::close() !!}
            @else
                Unpublished 
                {!! Form::open(['route' => ['courses.publishCourse', $course->id], 'method' => 'post']) !!}
                    <input type="hidden" name="course_id" value="{{$course->id}}" />
                    {!! Form::button('<i class="far fa-thumbs-down-alt"></i>Publish', ['type' => 'submit', 'class' => 'btn btn-success btn-xs', 'onclick' => "return confirm('Are you sure you want to publish?')"]) !!}
                {!! Form::close() !!}
            @endif
        </p>
    </div>

    <!-- Admin Status Field -->
    <div class="col-sm-6">
        {!! Form::label('admin_status', 'Admin Status:') !!}
        <p>
            @if($course->admin_status == 1)
                Approved 
                    @if(Auth::user()->role_id < 3)
                    
                    {!! Form::open(['route' => ['courses.disapprove', $course->id], 'method' => 'post']) !!}
                        <input type="hidden" name="course_id" value="{{$course->id}}" />
                        {!! Form::button('<i class="far fa-thumbs-down-alt"></i>Disapprove', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure you want to disapprove?')"]) !!}
                    {!! Form::close() !!}
                @endif
            @else
                Pending 
                    @if(Auth::user()->role_id < 3)
                    |
                    {!! Form::open(['route' => ['courses.approve', $course->id], 'method' => 'post']) !!}
                        <input type="hidden" name="course_id" value="{{$course->id}}" />
                        {!! Form::button('<i class="far fa-thumbs-up-alt"></i>Approve', ['type' => 'submit', 'class' => 'btn btn-success btn-xs', 'onclick' => "return confirm('Are you sure you want to approve?')"]) !!}
                    {!! Form::close() !!}
                    @endif
            @endif
        </p>
    </div>

@endif

<!-- What Will Students Learn Field -->
<div class="col-sm-12">
    {!! Form::label('what_will_students_learn', 'What Will Students Learn:') !!}
    <p>{{ $course->what_will_students_learn }}</p>
</div>

<!-- Target Students Field -->
<div class="col-sm-12">
    {!! Form::label('target_students', 'Target Students:') !!}
    <p>{{ $course->target_students }}</p>
</div>

<!-- Requirements Field -->
<div class="col-sm-12">
    {!! Form::label('requirements', 'Requirements:') !!}
    <p>{{ $course->requirements }}</p>
</div>

<!-- View Count Field -->
<div class="col-sm-6">
    {!! Form::label('view_count', 'View Count:') !!}
    <p>{{ $course->view_count }}</p>
</div>

<!-- Subscriber Count Field -->
<div class="col-sm-6">
    {!! Form::label('subscriber_count', 'Subscriber Count:') !!}
    <p>{{ $course->subscriber_count }}</p>
</div>

