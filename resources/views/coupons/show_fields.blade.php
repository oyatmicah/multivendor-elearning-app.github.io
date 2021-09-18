<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $coupon->user_id }}</p>
</div>

<!-- Student Id Field -->
<div class="col-sm-12">
    {!! Form::label('student_id', 'Student Id:') !!}
    <p>{{ $coupon->student_id }}</p>
</div>

<!-- Course Id Field -->
<div class="col-sm-12">
    {!! Form::label('course_id', 'Course Id:') !!}
    <p>{{ $coupon->course_id }}</p>
</div>

<!-- Category Id Field -->
<div class="col-sm-12">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $coupon->category_id }}</p>
</div>

<!-- User Account Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_account_id', 'User Account Id:') !!}
    <p>{{ $coupon->user_account_id }}</p>
</div>

<!-- Available On Course Page Field -->
<div class="col-sm-12">
    {!! Form::label('available_on_course_page', 'Available On Course Page:') !!}
    <p>{{ $coupon->available_on_course_page }}</p>
</div>

<!-- Type Field -->
<div class="col-sm-12">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $coupon->type }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $coupon->price }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $coupon->status }}</p>
</div>

<!-- Deadline Field -->
<div class="col-sm-12">
    {!! Form::label('deadline', 'Deadline:') !!}
    <p>{{ $coupon->deadline }}</p>
</div>

<!-- Countdown Timer Field -->
<div class="col-sm-12">
    {!! Form::label('countdown_timer', 'Countdown Timer:') !!}
    <p>{{ $coupon->countdown_timer }}</p>
</div>

<!-- Total Available Field -->
<div class="col-sm-12">
    {!! Form::label('total_available', 'Total Available:') !!}
    <p>{{ $coupon->total_available }}</p>
</div>

<!-- Total Remaining Field -->
<div class="col-sm-12">
    {!! Form::label('total_remaining', 'Total Remaining:') !!}
    <p>{{ $coupon->total_remaining }}</p>
</div>

