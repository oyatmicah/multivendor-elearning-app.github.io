<div class="table-responsive">
    <table class="table" id="courseUsers-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Course Id</th>
        <th>User Account Id</th>
        <th>Paid Date</th>
        <th>Expiry Date</th>
        <th>Plan</th>
        <th>Paid Amount</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courseUsers as $courseUser)
            <tr>
                <td>{{ $courseUser->user_id }}</td>
            <td>{{ $courseUser->course_id }}</td>
            <td>{{ $courseUser->user_account_id }}</td>
            <td>{{ $courseUser->paid_date }}</td>
            <td>{{ $courseUser->expiry_date }}</td>
            <td>{{ $courseUser->plan }}</td>
            <td>{{ $courseUser->paid_amount }}</td>
            <td>{{ $courseUser->status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['courseUsers.destroy', $courseUser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courseUsers.show', [$courseUser->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('courseUsers.edit', [$courseUser->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
