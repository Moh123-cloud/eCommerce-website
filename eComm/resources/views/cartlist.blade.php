@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4>Result for Product</h4>
                @foreach ($products as $item)
                    <div class="row searched-item cart-list-divider">

                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <img class="trending-image" src="{{ $item->gallery }}" alt="">

                            </a>
                        </div>

                        <div class="col-sm-4">
                            <div>
                                <h2>{{ $item->name }}</h2>
                                <h5>{{ $item->description }}</h5>
                            </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <button class="btn btn-warning">Remove from Cart</button>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
