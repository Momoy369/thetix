@extends('layouts.dashboard')

@section('title')
    TheTix - Dashboard
@endsection

@section('content')

<!-- Section Content -->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">
                Dashboard
              </h2>
              <p class="dashboard-subtitle">
                Stay cheers, stay happy!
              </p>
            </div>
            <div class="dashboard-content">
              <div class="row">
              </div>
              <div class="row mt-3">
                <div class="col-12 mt-2">
                  <h5 class="mb-3">
                    Recent Tickets
                  </h5>
                  <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-1">
                          <img src="/images/concert-1.jpg" class="w-50" alt="">
                        </div>
                        <div class="col-md-4">
                          Dream Theater
                        </div>
                        <div class="col-md-3">
                          Used
                        </div>
                        <div class="col-md-3">
                          31 Januari 2023
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                          <img src="/images/dashboard-arrow-right.svg" alt="">
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection