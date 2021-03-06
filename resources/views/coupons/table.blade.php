<div class="table-responsive">
    <table class="table" id="coupons-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Student Id</th>
        <th>Course Id</th>
        <th>Category Id</th>
        <th>User Account Id</th>
        <th>Available On Course Page</th>
        <th>Type</th>
        <th>Price</th>
        <th>Status</th>
        <th>Deadline</th>
        <th>Countdown Timer</th>
        <th>Total Available</th>
        <th>Total Remaining</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($coupons as $coupon)
            <tr>
                <td>{{ $coupon->user_id }}</td>
            <td>{{ $coupon->student_id }}</td>
            <td>{{ $coupon->course_id }}</td>
            <td>{{ $coupon->category_id }}</td>
            <td>{{ $coupon->user_account_id }}</td>
            <td>{{ $coupon->available_on_course_page }}</td>
            <td>{{ $coupon->type }}</td>
            <td>{{ $coupon->price }}</td>
            <td>{{ $coupon->status }}</td>
            <td>{{ $coupon->deadline }}</td>
            <td>{{ $coupon->countdown_timer }}</td>
            <td>{{ $coupon->total_available }}</td>
            <td>{{ $coupon->total_remaining }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['coupons.destroy', $coupon->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('coupons.show', [$coupon->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('coupons.edit', [$coupon->id]) }}" class='btn btn-default btn-xs'>
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
