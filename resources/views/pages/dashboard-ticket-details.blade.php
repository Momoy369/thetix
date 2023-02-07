@extends('layouts.dashboard')

@section('title')
    TheTix - Dashboard Transactions
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">
                    {{ $transaction->code }}
                </h2>
                <p class="dashboard-subtitle">
                    Ticket Details
                </p>
            </div>
            <div class="dashboard-content" id="transactionDetails">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img src="{{ Storage::url($transaction->product->galleries->first()->photo ?? '') }}"
                                            alt="" class="w-100 mb-3">
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">
                                                    Customer Name
                                                </div>
                                                <div class="product-subtitle">
                                                    {{ $transaction->transaction->user->name }}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">
                                                    Product Name
                                                </div>
                                                <div class="product-subtitle">
                                                    {{ $transaction->product->name }}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">
                                                    Transaction Date
                                                </div>
                                                <div class="product-subtitle">
                                                    {{ $transaction->created_at }}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">
                                                    Payment Status
                                                </div>
                                                <div class="product-subtitle text-danger">
                                                    {{ $transaction->transaction->transaction_status }}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">
                                                    Total Amount
                                                </div>
                                                <div class="product-subtitle">
                                                    Rp. {{ number_format($transaction->transaction->total_price) }}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">
                                                    Mobile
                                                </div>
                                                <div class="product-subtitle">
                                                    {{ $transaction->transaction->user->phone_number }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-12 text-right">
                                                <a href="check-in" class="btn btn-success btn-lg mt-4">
                                                Check-In
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
