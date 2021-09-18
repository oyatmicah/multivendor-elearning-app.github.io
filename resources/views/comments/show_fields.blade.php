<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $comment->user_id }}</p>
</div>

<!-- Course Id Field -->
<div class="col-sm-12">
    {!! Form::label('course_id', 'Course Id:') !!}
    <p>{{ $comment->course_id }}</p>
</div>

<!-- Category Id Field -->
<div class="col-sm-12">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $comment->category_id }}</p>
</div>

<!-- Body Field -->
<div class="col-sm-12">
    {!! Form::label('body', 'Body:') !!}
    <p>{{ $comment->body }}</p>
</div>

