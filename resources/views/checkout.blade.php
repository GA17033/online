@extends('master')
@section('content')
<div class="container cartlist mt-3">
    <h3>Check Out</h3>
    <div class="row">
        <div class="col-md-9">
            <table class="table table-striped table-inverse table-responsive">
                <thead class="">
                    <tr>
                        <th>Amount</th>
                        <th>Tax</th>
                        <th>Delivery</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">{{$total}}</td>
                            <td>$10</td>
                            <td>0</td>
                            <td>{{$total+10}}</td>
                        </tr>
                    </tbody>
            </table>
            <form action="/ordernow" method="POST">
            <form action="{{ route('pay') }}" role="form" accept-charset="UTF-8" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="address">Your Address</label>
                        <textarea class="form-control" required name="address" id="" rows="3"></textarea>
                        <input type="text" name="estatus" value="otemuyiwa@gmail.com"> {{-- required --}}
                        <input type="text" name="payment_method" value="345">
                        <input type="hidden" name="amount" value="{{$total}}"> {{-- required in kobo --}}
                        <input type="hidden" name="payment_statusy" value="3">
                        <input type="hidden" name="currency" value="NGN">
                        <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                        {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                    </div>
                    <div class="form-group">
                    {{-- <div class="form-group">
                        <label for="payment"><b> Payment Method </b></label><br>
                        <div class="form-check">
                          <label class="form-check-label">
@@ -37,7 +46,7 @@
                                <input type="checkbox" value="cash"  name="payment" id=""> <span>Payment on delivery</span>
                            </label>
                        </div>
                    </div>
                    </div> --}}
                    <button type="submit" class="btn btn-primary mt-3 btn-sm">Order Now</button>
            </form>
        </div>
    </div>
</div>
@endsection