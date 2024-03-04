<div class="table-responsive">
    <table class="table" id="ordersdetails-table">
        <thead>
        <tr>
            <th>Productid</th>
        <th>Orderid</th>
        <th>Quantity</th>
        <th>Subtotal</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ordersdetails as $ordersdetail)
            <tr>
                <td>{{ $ordersdetail->productid }}</td>
            <td>{{ $ordersdetail->orderid }}</td>
            <td>{{ $ordersdetail->quantity }}</td>
            <td>{{ $ordersdetail->subtotal }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['ordersdetails.destroy', $ordersdetail->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ordersdetails.show', [$ordersdetail->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('ordersdetails.edit', [$ordersdetail->id]) }}"
                           class='btn btn-default btn-xs'>
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
