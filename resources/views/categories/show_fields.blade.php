<!-- Description Field -->
<div class="col-sm-12">
     <p>{{ $category->description }}</p>
</div>

<!-- View Count Field -->
<div class="col-sm-12 d-flex py-3 small text-muted">
    {!! Form::label('view_count', 'View Count:') !!}
    <p class="ml-2">{{ $category->view_count }}</p>
</div>

<div class="row mb-2">
<!-- Created at Field -->
		<div class="col-sm-12 d-flex small text-muted">
		    {!! Form::label('created_at', 'Created_At:') !!}
		    <p class="ml-2">{{ $category->created_at->format('h:m a - D d M Y') }}</p>
		</div>

		<!-- Updated at Field -->
		<div class="col-sm-12 d-flex small text-muted">
		    {!! Form::label('updated_at', 'Updated_At:') !!}
		    <p class="ml-2">{{ $category->updated_at->format('h:m a - D d M Y') }}</p>
		</div>
</div>
