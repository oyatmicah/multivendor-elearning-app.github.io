<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $courseUser->user_id }}</p>
</div>

<!-- Course Id Field -->
<div class="col-sm-12">
    {!! Form::label('course_id', 'Course Id:') !!}
    <p>{{ $courseUser->course_id }}</p>
</div>

<!-- User Account Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_account_id', 'User Account Id:') !!}
    <p>{{ $courseUser->user_account_id }}</p>
</div>

<!-- Paid Date Field -->
<div class="col-sm-12">
    {!! Form::label('paid_date', 'Paid Date:') !!}
    <p>{{ $courseUser->paid_date }}</p>
</div>

<!-- Expiry Date Field -->
<div class="col-sm-12">
    {!! Form::label('expiry_date', 'Expiry Date:') !!}
    <p>{{ $courseUser->expiry_date }}</p>
</div>

<!-- Plan Field -->
<div class="col-sm-12">
    {!! Form::label('plan', 'Plan:') !!}
    <p>{{ $courseUser->plan }}</p>
</div>

<!-- Paid Amount Field -->
<div class="col-sm-12">
    {!! Form::label('paid_amount', 'Paid Amount:') !!}
    <p>{{ $courseUser->paid_amount }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $courseUser->status }}</p>
</div>

