<?php

use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav mr-auto ">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Order</a>
            </li>
        </ul>
        <form class="navbar-form navbar-left">
            <div class="form-group">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-default" type="submit">Submit</button>
            </div>
        </form>
        <ul class="nav navbar-nav mr-auto navbar-right">
            <li class="nav-item active">
                <a class="nav-link" href="#">Cart({{ $total }})</a>
            </li>
        </ul>
    </div>
</nav>
