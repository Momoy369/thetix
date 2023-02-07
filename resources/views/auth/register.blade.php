@extends('layouts.auth')

@section('content')

    <div class="page-content page-auth" id="register">
    <div class="section-store-auth">
      <div class="container">
        <div class="row align-items-center justify-content-center row-login">
          <div class="col-lg-4">
            <h2>
              Mulai mencari event <br>
              dapatkan banyak diskon
            </h2>
            <form class="mt-3">
              <div class="form-group">
                <label for="">Fullname</label>
                <input type="text" class="form-control is-valid" v-model="name" autofocus>
              </div>
              <div class="form-group">
                <label for="">Email Address</label>
                <input type="email" class="form-control is-invalid" v-model="email">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control">
              </div>
              <a href="/dashboard.html" class="btn btn-success btn-block mt-4">
                Sign Up Now
              </a>
              <a href="/login.html" class="btn btn-signup btn-block mt-2">
                Back To Sign In
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="container" style="display: none;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
  <script src="https://unpkg.com/vue-toasted"></script>

  <script>
    Vue.use(Toasted);

    var register = new Vue({
      el: '#register',
      mounted() {
        AOS.init();
        this.$toasted.error(
          "Maaf, tampaknya email sudah terdaftar pada sistem kami.",
          {
            position: "top-center",
            className: "rounded",
            duration: 1000
          }
        );
      },
      data: {
        name: "Marion D'rossi",
        email: "ronijagat@gmail.com",
        password: "",
      }
    })
  </script>
@endpush