<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Is Subscribed</th>
        <th>View Count</th>
        <th>Role</th>
        <th>Email Verified At</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td><a href="{{ route('users.show', [$user->id]) }}" style="color:black; font-weight:bold;">{{ $user->name }}</a></td>
            <td><a href="{{ route('users.show', [$user->id]) }}" style="color:black;">{{ $user->email }}</a></td>
            <td>{{ $user->gender }}</td>
            <td>{{ $user->is_subscribed }}</td>
            <td>{{ $user->view_count }}</td>
            <td>{{ $user->role['name'] }}</td>
            <td>{{ $user->email_verified_at }}</td>

            @if(Auth::check() AND (Auth::user()->role_id < 3 || $user->user_id == Auth::user()->id))
                <td width="120">
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
                @endif 
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
