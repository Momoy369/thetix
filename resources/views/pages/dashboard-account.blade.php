@extends('layouts.dashboard')

@section('title')
    TheTix - Dashboard Account
@endsection

@section('content')

<!-- Section Content -->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">
                My Account
              </h2>
              <p class="dashboard-subtitle">
                Update your current profile
              </p>
            </div>
            <div class="dashboard-content">
              <div class="row">
                <div class="col-12">
                  <form action="">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="addressOne">Your Name</label>
                              <input type="text" id="name" name="name" value="" class="form-control" placeholder="Enter your name">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="addressTwo">Your Email</label>
                              <input type="email" id="email" name="email" value="" class="form-control" placeholder="Enter your email address">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="addressOne">Address 1</label>
                              <input type="text" id="addressOne" name="addressOne" value="" class="form-control" placeholder="Enter address">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="addressTwo">Address 2</label>
                              <input type="text" id="addressTwo" name="addressTwo" value="" class="form-control" placeholder="Enter address">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="province">Province</label>
                              <select name="province" id="province" class="form-control">
                                <option value="West Java">West Java</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="city">City</label>
                              <select name="city" id="city" class="form-control">
                                <option value="Bandung">Bandung</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="postalCode">ZIP Code</label>
                              <input type="text" id="postalCode" name="postalCode" value="" class="form-control" placeholder="Enter Zip Code">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="country">Country</label>
                              <input type="text" id="country" name="country" value="" class="form-control" placeholder="Enter Country">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="mobile">Mobile</label>
                              <input type="text" id="mobile" name="mobile" value="" class="form-control" placeholder="Enter phone number">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col text-right">
                            <button type="submit" class="btn btn-success px-5">
                              Save Now
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection