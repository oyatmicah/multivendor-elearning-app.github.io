
<!-- View Count Field -->
<div class="col-sm-12 text-muted text-right">
    <p>Profile Viewed:  {{ $user->view_count }} times</p>
</div>

<!-- Name Field -->
<div class="col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- First Name Field -->
<div class="col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $user->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="col-sm-6">
    {!! Form::label('Last_name', 'Last Name:') !!}
    <p>{{ $user->Last_name }}</p>
</div>

<!-- Gender Field -->
<div class="col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ $user->gender }}</p>
</div>

<!-- Account Created At Field -->
<div class="col-sm-6">
    {!! Form::label('created_at', 'Joined:') !!}
    <p>{{ $user->created_at->format('h:i a - D d M Y') }}</p>
</div>

<!-- Account Updated At Field -->
<div class="col-sm-6">
        {!! Form::label('updated_at', 'Last Updated:') !!}
        <p>{{ $user->updated_at->format('h:i a - D d M Y') }}</p>
</div>

<!-- Only Admin and current logged in user can view -->
@if(Auth::check() AND (Auth::user()->user_id == $user->id || Auth::user()->role_id < 3 ))
    <!-- Date Of Birth Field -->
    <div class="col-sm-6">
        {!! Form::label('date_of_birth', 'Date Of Birth:') !!}
        <p>{{ $user->date_of_birth }}</p>
    </div>
    
    <!-- Role Id Field -->
    <div class="col-sm-6">
        {!! Form::label('role_id', 'Role:') !!}
        <p>{{ $user->role['name'] }}</p>
    </div>
@endif

<!-- Only Admin can view -->
@if(Auth::check() AND Auth::user()->role_id < 3)
    <!-- Account Deleted At Field -->
    <div class="col-sm-6">
        {!! Form::label('deleted_at', 'Account Deleted At:') !!}
        <p>{{ $user->deleted_at }}</p>
    </div>

    <!-- Email Verified At Field -->
    <div class="col-sm-6">
        {!! Form::label('email_verified_at', 'Email Verified At:') !!}
        <p>{{ $user->email_verified_at }}</p>
    </div>
    
    <!-- Is Subscribed Field -->
    <div class="col-sm-6">
        {!! Form::label('is_subscribed', 'Is Subscribed:') !!}
        <p>{{ $user->is_subscribed }}</p>
    </div>
@endif
