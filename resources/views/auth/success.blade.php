@extends('layouts.success')

@section('title')
    TheTix - Register Success
@endsection

@section('content')
    <div class="page-content page-success">
        <div class="section-success" data-aos="zoom-in">
            <div class="container">
                <div class="row align-item-center row-login justify-content-center">
                    <div class="col-lg-6 text-center">
                        <img src="/images/success.svg" alt="" class="mb-4">
                        <h2>
                            Welcome to LaraShop
                        </h2>
                        <p>
                            Kamu sudah berhasil terdaftar
                            <br> bersama kami. Let’s grow up now.
                        </p>
                        <div>
                            <a href="/dashboard.html" class="btn btn-success w-50 mt-4">
                                Welcome to LaraShop
                            </a>
                            <a href="{{ route('home') }}" class="btn btn-signup w-50 mt-2">
                                Search Event Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
