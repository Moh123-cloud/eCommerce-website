@extends('master');

@section('content')
    <div class="custom-product">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-item corousel-inner">
                    @foreach ($products as $item)
                        <div class="item {{ $item['id'] == 1 ? 'active' : '' }}">

                            <a href="detail/{{ $item['id'] }}">
                                <img src="{{ $item['gallery'] }}" class="d-block w-100 slider-img" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{ $item['name'] }}</h5>
                                    <p>{{ $item['description'] }}</p>
                                </div>
                            </a>

                        </div>
                    @endforeach
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="trending-header">
            <h3>Trending Products</h3>
        </div>
        @foreach ($products as $item)
            <div class="trending-wrapper">

                <div class="trending-item">
                    <a href="detail/{{ $item['id'] }}">
                        <img src="{{ $item['gallery'] }}" class="trending-image" alt="...">
                        <div class="">
                            <h4>{{ $item['name'] }}</h4>
                        </div>
                    </a>
                </div>

            </div>
        @endforeach
    </div>
    </div>
@endsection
