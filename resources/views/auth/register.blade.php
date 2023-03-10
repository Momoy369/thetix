@extends('layouts.auth')

@section('title')
  TheTix - Register New Account
@endsection

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
            <form method="POST" action="{{ route('register') }}">
              @csrf
              <div class="form-group">
                  <label for="">Fullname</label>
                  <input id="name" v-model="name" type="text"
                      class="form-control @error('name') is-invalid @enderror" name="name"
                      value="{{ old('name') }}" required autocomplete="name" autofocus>
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="">Email Address</label>
                  <input id="email" type="email" v-model="email"
                      @change="checkEmail()"
                      class="form-control @error('email') is-invalid @enderror" :class="{ 'is-invalid' : this.email_unavailable }" name="email"
                      value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="">Password</label>
                  <input id="password" type="password"
                      class="form-control @error('password') is-invalid @enderror" name="password" required
                      autocomplete="new-password">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="">Password Confirmation</label>
                  <input id="password-confirm" type="password"
                      class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required
                      autocomplete="new-password">
                  @error('password_confirmation')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <button type="submit" class="btn btn-success btn-block mt-4"
                :disabled="this.email_unavailable">
                    Sign Up Now
                </button>
                <a href="{{ route('login') }}" class="btn btn-signup btn-block mt-2">
                    Back To Sign In
                </a>
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
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  <script>
    Vue.use(Toasted);

        var register = new Vue({
            el: '#register',
            mounted() {
                AOS.init();
            },
            methods: {
                checkEmail: function() {
                    var self = this;
                    axios.get('{{ route('api-register-check') }}', {
                        params: {
                            email: this.email
                        }
                    })
                    .then(function (response) {

                        if(response.data == 'Available')
                        {
                            self.$toasted.show(
                            "Email address is available to signing up!",
                            {
                            position: "top-center",
                            className: "rounded",
                            duration: 3000,
                        });
                        self.email_unavailable = false;

                        } else {
                            self.$toasted.error(
                            "Sorry, your email address is already signed up in our database!",
                            {
                            position: "top-center",
                            className: "rounded",
                            duration: 3000,
                        });
                        self.email_unavailable = true;

                        }

                        console.log(response);
                    });
                }
            },
            data() {
                return {
                name: "",
                email: "",
                email_unavailable: false,
                }
            },
        });
  </script>
@endpush