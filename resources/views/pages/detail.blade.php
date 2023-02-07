@extends('layouts.app')

@section('title')
    TheTix - Event Details | {{ $product->name }}
@endsection

@section('content')
    <div class="page-content page-details">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="breadcrumb-item active">
                  Event Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    @foreach ($product->galleries as $gallery)
      <section class="event-gallery" id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="zoom-in">
            <img src="{{ Storage::url($gallery->photo) }}" class="w-100 main-image" alt="">
          </div>
        </div>
      </div>
    </section>
    @endforeach

    <div class="store-details-container" data-aos="fade-up">
      <section class="event-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mt-4">
                            <h1>{{ $product->name }}</h1>
                            <div class="owner">By {{ $product->user->store_name }}</div>
                            <div class="price">Rp. {{ number_format($product->price) }}</div>
                        </div>
                        <div class="col-lg-2 mt-4" data-aos="zoom-in">
                            @auth
                                <form action="{{ route('detail-add', $product->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                  <button type="submit" class="btn btn-success px-4 text-white btn-block mb-3">
                                    Book Now
                                  </button>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-success px-4 text-white btn-block mb-3">
                                    Sign in to Add
                                </a>

                            @endauth
                        </div>
                    </div>
                </div>
            </section>

      <section class="event-location">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8 mt-3 mb-3">
              <h5>Event Location</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-8">
              <p style="color: blue;">Jakarta - Stadium Gelora Bungkarno</p>
            </div>
          </div>
        </div>
      </section>

      <section class="event-description">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8">
              <h5>Description</h5>
              {!! $product->description !!}
            </div>
          </div>
        </div>
      </section>

    </div>

  </div>
@endsection