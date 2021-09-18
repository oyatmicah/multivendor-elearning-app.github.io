<div class="table-responsive">
    <table class="table" id="courses-table">
        <thead>
            <tr>
        <th></th>
        <th></th>
        <th></th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{ $course->photo }}</td>
            <td>
                <h4>
                    <a href="{{ route('courses.show', [$course->id]) }}" style="color:black;">
                        {{ $course->title }}
                    </a>
                </h4>
               {{ $course->sub_title }}
               <div class="text-muted">Author: {{$course->user['name']}}
                   @if($course->subscriber_count > 0)
                    | Students: {{number_format($course->subscriber_count)}}
                   @endif
                   @if($course->view_count > 0)
                    | views: {{number_format($course->view_count)}}
                   @endif
               </div>
            </td>            
            <td>
                <h3><del style="text-decoration-style: double;">N</del> {{ $course->discount_price }}</h3>
                <div style=" padding-left:20px; color:red;"><del style="text-decoration-style: double;">N </del><del>{{ $course->actual_price }}</del></div>
            </td>
                <td width="120">
                    @if(Auth::check() AND (Auth::user()->role_id < 3 || $course->user_id == Auth::user()->id))
                        {!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('courses.show', [$course->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('courses.edit', [$course->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
