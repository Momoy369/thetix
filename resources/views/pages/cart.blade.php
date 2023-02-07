@extends('layouts.app')

@section('title')
    TheTix - Cart
@endsection

@section('content')
<div class="page-content page-cart">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">
                  Cart
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <section class="store-cart">
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-12 table-responsive">
            <table class="table table-borderless table-cart">
              <thead>
                <tr>
                  <td>Image</td>
                  <td>Event Name</td>
                  <td>Price</td>
                  <td>Menu</td>
                </tr>
              </thead>
              <tbody>
                @php
                    $totalPrice = 0;
                @endphp
                @foreach ($carts as $cart)
                <tr>
                  <td style="width: 25%;">
                      @if ($cart->product->galleries)
                          <img src="{{ Storage::url($cart->product->galleries->first()->photo) }}"
                              class="cart-image" alt="">
                      @endif
                  </td>
                  <td style="width: 35%;">
                      <div class="product-title">{{ $cart->product->name }}</div>
                  </td>
                  <td style="width: 35%;">
                      <div class="product-title">Rp. {{ number_format($cart->product->price) }}</div>
                      <div class="product-subtitle">IDR</div>
                  </td>
                  <td style="width: 20%;">
                      <form action="{{ route('cart-delete', $cart->id) }}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-remove-cart">
                              Remove
                          </button>
                      </form>
                  </td>
              </tr>
              @php
                  $totalPrice += $cart->product->price;
              @endphp
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr>
          </div>
          <div class="col-12">
            <h2 class="mb-4">Visitor Information</h2>
          </div>
        </div>

        <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-6">
            <div class="form-group">
              <label for="mobile">Full Name</label>
              <input type="text" id="name" name="name" value="" class="form-control" placeholder="Enter your full name">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="mobile">Mobile</label>
              <input type="text" id="phone_number" name="phone_number" value="" class="form-control" placeholder="Enter phone number">
            </div>
          </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr>
          </div>
          <div class="col-12">
            <h2 class="mb-2">Payment Information</h2>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-4 col-md-2">
            <div class="product-title text-success">Rp. {{ number_format($totalPrice ?? 0) }}</div>
            <div class="product-subtitle">Total</div>
          </div>
          <div class="col-8 col-md-3">
            <a href="/success.html" class="btn btn-success mt-4 px-4 btn-block">
              Book Now
            </a>
          </div>
        </div>
      </div>

    </section>

  </div>
@endsection