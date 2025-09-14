@extends('layouts.front.master')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 col-xl-8 mx-auto ">
                    @include('errors.errorMessage')
                    <div class="rounded custom-box-shadow rounded p-4 p-sm-5">
                        <h2>ثبت نام در سایت </h2>
                        <!-- Form START -->
                        <form action="{{ route('register') }}" class="mt-4" id="registerForm" method="POST">
                            @csrf
                            <!-- Name -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputName">نام و نام خانوادگی </label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                    class="form-control @error('name') border-danger

                            @enderror"
                                    id="exampleInputName" placeholder="نام و نام خانوادگی">
                                @error('name')
                                    <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">ایمیل</label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="form-control @error('email') border-danger

                            @enderror"
                                    id="exampleInputEmail1" placeholder="ایمیل">
                                @error('email')
                                    <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputPassword1">رمز عبور</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') border-danger

                            @enderror"
                                    id="exampleInputPassword1" placeholder="*********">
                                @error('password')
                                    <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputPassword2">تایید رمز عبور</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    id="exampleInputPassword2" placeholder="*********">
                            </div>
                            <!-- Button -->
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <button type="submit" class="g-recaptcha btn btn-success"
                                        data-sitekey="{{ config('services.google_recaptcha_v3.sitekey') }}"
                                        data-callback='onRegisterSubmit'
                                        data-action='submitRegister'>ثبت نام</button>
                                </div>
                                <div class="col-sm-8 text-sm-end">
                                    <span>آیا قبلا ثبت نام کرده اید؟ <a href="{{ route('login.form')}}"><u>ورود</u></a></span>
                                </div>
                            </div>
                        </form>
                        <!-- Form END -->
                        <hr>
                        <!-- Social-media btn -->
                        <div class="text-center">
                            <p>برای دسترسی سریع با شبکه اجتماعی خود وارد شوید</p>
                            <ul class="list-unstyled d-flex mt-3 justify-content-center">
                                <li class="mx-2">
                                    <a href="#" class="btn btn-light d-inline-block fs-6">github<i
                                            class="fab fa-github text-dark align-middle ms-2 fs-5"></i></a>
                                </li>
                                <li class="mx-2">
                                    <a href="#" class="btn btn-light d-inline-block fs-6">google<i
                                            class="fab fa-google text-danger align-middle ms-2 fs-5"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
