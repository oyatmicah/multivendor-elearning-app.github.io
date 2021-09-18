<div class="table-responsive">
    <table class="table" id="payments-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Course Id</th>
        <th>Category Id</th>
        <th>Amount</th>
        <th>Status</th>
        <th>Mode Of Payment</th>
        <th>Payment Processor</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->user_id }}</td>
            <td>{{ $payment->course_id }}</td>
            <td>{{ $payment->category_id }}</td>
            <td>{{ $payment->amount }}</td>
            <td>{{ $payment->status }}</td>
            <td>{{ $payment->mode_of_payment }}</td>
            <td>{{ $payment->payment_processor }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['payments.destroy', $payment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('payments.show', [$payment->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('payments.edit', [$payment->id]) }}" class='btn btn-default btn-xs'>
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
