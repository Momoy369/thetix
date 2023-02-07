@extends('layouts.app')

@section('title')
    TheTix - Event Details
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
                  <a href="/index.html">Home</a>
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

    <section class="event-gallery" id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="zoom-in">
            <img src="/images/concert-1.jpg" class="w-100 main-image" alt="">
          </div>
        </div>
      </div>
    </section>

    <div class="store-details-container" data-aos="fade-up">
      <section class="event-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mt-4">
              <h1>Dream Theater</h1>
              <div class="price">Rp. 5.000.000 / pax</div>
            </div>
            <div class="col-lg-2 mt-4" data-aos="zoom-in">
              <a href="/cart.html" class="btn btn-success px-4 text-white btn-block mb-3">
                Book Now
              </a>
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
              <p>
                The Nike Air Max 720 SE goes bigger than ever before with Nike's tallest Air unit yet for unimaginable, all-day comfort.
                There's super breathable fabrics on the upper, while colours add a modern edge.
              </p>
              <p>
                Bring the past into the future with the Nike Air Max 2090, a bold look inspired by the DNA of the iconic Air Max 90.
                Brand-new Nike Air cushioning underfoot adds unparalleled comfort while transparent mesh and vibrantly coloured details
                on the upper are blended with timeless OG features for an edgy, modernised look.
              </p>
            </div>
          </div>
        </div>
      </section>

    </div>

  </div>
@endsection