@include('layouts.header', ['title' => $title])

<div class="container mt-6">

    @include('layouts.alert')

    <div class="row">

        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 mx-auto">
            <div class="">


                <div class="box">
                    <h2 class="fs-1 text-left mb-4">Sign Up For Franchise</h2>

                    <form action="{{ route('franchise.signup.post') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label class="mb-2">Name*</label>
                            <input type="text" placeholder="Name" id="parent_name" class="form-control @error('name') is-invalid @enderror" name="name" required autofocus value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="form-group mb-3">
                            <label class="mb-2">Business Name*</label>
                            <input type="text" placeholder="Business Name" id="business_name" class="form-control @error('business_name') is-invalid @enderror" name="business_name" value="{{ old('business_name') ?? $business_name ?? '' }}" required autofocus autocomplete="off">
                            @if ($errors->has('business_name'))
                                <span class="text-danger">{{ $errors->first('business_name') }}</span>
                            @endif
                        </div>

                        <div class="form-group mb-3">
                            <label class="mb-2">Your Email*</label>
                            <input type="email" placeholder="Email" id="email_address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $email ?? '' }}" required autofocus autocomplete="off">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="form-group mb-3">
                            <label class="mb-2">Phone Number*</label>
                            <input type="text" placeholder="Phone Number" id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}">
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>

{{--                        <div class="form-group mb-3">--}}
{{--                            <label class="mb-2">Your Password*</label>--}}
{{--                            <input type="password" placeholder="Password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" {{ old('password') }} required autocomplete="offf">--}}
{{--                            @if ($errors->has('password'))--}}
{{--                                <span class="text-danger">{{ $errors->first('password') }}</span>--}}
{{--                            @endif--}}
{{--                        </div>--}}

{{--                        <div class="form-group mb-3">--}}
{{--                            <label class="mb-2">Confirm Password*</label>--}}
{{--                            <input type="password" placeholder="Confirm Password" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}" required autocomplete="offf">--}}
{{--                            @if ($errors->has('password_confirmation'))--}}
{{--                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>--}}
{{--                            @endif--}}
{{--                        </div>--}}


                        <div class="form-check mb-3">
                            <input required class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <p class="form-check-label" for="flexCheckDefault">
                                I agree with the <a class="text-dark text-decoration-underline" target="_blank" href="{{ route('terms') }}">terms & conditions</a>.
                            </p>
                        </div>


                        <div class="d-grid mx-auto">
                            <button type="submit" class="btn btn-dark big-btn">Sign up</button>
                            <a class="btn text-dark text-decoration-underline fw-bold mt-3" href="{{ route('franchise.login') }}">Already Have A Franchise Account? <u>Login</u></a>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
</div>



@include('layouts.footer')
