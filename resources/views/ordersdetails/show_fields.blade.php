<!-- Productid Field -->
<div class="col-sm-12">
    {!! Form::label('productid', 'Productid:') !!}
    <p>{{ $ordersdetail->productid }}</p>
</div>

<!-- Orderid Field -->
<div class="col-sm-12">
    {!! Form::label('orderid', 'Orderid:') !!}
    <p>{{ $ordersdetail->orderid }}</p>
</div>

<!-- Quantity Field -->
<div class="col-sm-12">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $ordersdetail->quantity }}</p>
</div>

<!-- Subtotal Field -->
<div class="col-sm-12">
    {!! Form::label('subtotal', 'Subtotal:') !!}
    <p>{{ $ordersdetail->subtotal }}</p>
</div>

