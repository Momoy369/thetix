@extends('layouts.dashboard')

@section('title')
    TheTix - Dashboard Transactions
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
                <div class="col-12 mt-2">

                    @foreach ($buyTransactions as $transaction)
                        <a href="{{ route('dashboard-my-ticket-details', $transaction->id) }}" class="card card-list d-block">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-1">
                              <img src="{{ Storage::url($transaction->product->galleries->first()->photo ?? '') }}" alt="" class="w-50">
                            </div>
                            <div class="col-md-4">
                              {{ $transaction->product->name }}
                            </div>
                            <div class="col-md-3">
                              {{ $transaction->product->store_name }}
                            </div>
                            <div class="col-md-3">
                              {{ $transaction->created_at }}
                            </div>
                            <div class="col-md-1 d-none d-md-block">
                              <img src="/images/dashboard-arrow-right.svg" alt="">
                            </div>
                          </div>
                        </div>
                      </a>
                      @endforeach

                </div>
              </div>
        </div>
    </div>
</div>
@endsection