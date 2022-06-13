
<div class="card-columns">
    @foreach($categories as $category)

        <div class="card">
            <img src="https://ptsse.co.id/assets/gambar_galeri/images.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>{{ $category->name }}</strong></h5>
                <p class="card-text">
                    {{Str::limit($category->description, $limit = 150, $end = '...')}}
                </p>
            </div>
                <ul class="list-group list-group-flush"><hr>
                    <small class="text-muted">Views:  {{ number_format($category->view_count) }}</small> 
                </ul>
            <div class="card-footer d-flex">
                <a href="{{ route('categories.show', [$category->id]) }}" class="btn btn-primary">
                    <i class="far fa-eye"></i>View Category
                </a>

            @if(Auth::check() AND Auth::user()->role_id < 3)

                {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                <div class='btn-group col-sm-6 float-right'>
                    <a href="{{ route('categories.edit', [$category->id]) }}" class='btn btn-default mr-3'>
                        <i class="far fa-edit"></i>
                    </a>
                    {!! Form::button('<i class="far fa-trash-alt mr-3"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                    {!! Form::close() !!}
            @endif
            </div>
        </div>

    @endforeach
</div>



            
      
       
