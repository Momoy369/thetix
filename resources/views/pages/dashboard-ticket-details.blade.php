@extends('layouts.dashboard')

@section('title')
    TheTix - Dashboard Transactions
@endsection

@section('content')

<div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">
                #STORE0839
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
                          <img src="/images/product-details-dashboard.png" alt="" class="w-100 mb-3">
                        </div>
                        <div class="col-12 col-md-8">
                          <div class="row">
                            <div class="col-12 col-md-6">
                              <div class="product-title">
                                Visitor Name
                              </div>
                              <div class="product-subtitle">
                                Marion D'rossi
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">
                                Event Name
                              </div>
                              <div class="product-subtitle">
                                Dream Theater
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">
                                Transaction Date
                              </div>
                              <div class="product-subtitle">
                                12 Januari 2023
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">
                                Status
                              </div>
                              <div class="product-subtitle text-danger">
                                Pending
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">
                                Total Amount
                              </div>
                              <div class="product-subtitle">
                                $280,409
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">
                                Mobile
                              </div>
                              <div class="product-subtitle">
                                +628 2020 11111
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-4 mb-3">
                      <div class="col-12 text-right">
                        <button type="submit" class="btn btn-success btn-lg mt-4">
                          Check-In
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection