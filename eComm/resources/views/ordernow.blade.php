@extends('master')
@section('content')
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                <tr>
                    <td>Item Price</td>
                    <td>{{ $total }}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$0</td>
                </tr>
                <tr>
                    <td>Deliveries</td>
                    <td>$10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>{{ $total + 10 }}</td>
                </tr>
            </tbody>
        </table>

        <div>
            <form action="orderplace" method="post">
                @csrf
                <div class="form-group">
                    <h4>Address: </h4>
                    <textarea name="address" cols="40" rows="1" placeholder="Enter your address"></textarea> <br><br>
                </div>

                <div class="form-group">
                    <label for="pwd">Payment Method</label><br><br>
                    <input type="radio" value="cash" name="payment"><span>Online Payment</span><br><br>
                    <input type="radio" value="cash" name="payment"><span>Mpesa</span><br><br>
                    <input type="radio" value="cash" name="payment"><span>Payment on Delivery</span><br>
                </div>

                <button type="submit" class="btn btn-primary">Order Now</button>
            </form>
        </div>
    </div>
@endsection
