@extends('layouts.appuser')

@section('content')
    <!-- partial:index.partial.html -->
    <div class="pt-5">
        <h1 class="text-center">Register Account</h1>

        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="card card-body">

                        <form id="submitForm" action="/admin/register" method="post" data-parsley-validate=""
                            data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1"><input type="hidden"
                                name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">
                            @csrf
                            <div class="form-group required">
                                <label>Username</label>
                                <input type="text" class="form-control text-lowercase" id="name" required=""
                                    name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                            <div class="form-group required">
                                <label>Email</label>
                                <input type="text" class="form-control text-lowercase" id="email" required=""
                                    name="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group required">
                                <label>Password</label>
                                <input type="password" class="form-control text-lowercase" id="password" required=""
                                    name="password" required>
                            </div>
                            <div class="form-group required">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control text-lowercase" id="password_confirmation"
                                    required="" name="password_confirmation" required>
                            </div>
                            <div class="form-group mt-4 mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="remember-me" name="remember-me"
                                        data-parsley-multiple="remember-me">
                                    <label class="custom-control-label" for="remember-me">Remember me?</label>
                                </div>
                            </div>
                            <div class="form-group pt-1">
                                <button class="btn btn-primary btn-block" type="submit">Submit</button>
                            </div>
                        </form>
                        <p class="small-xl pt-3 text-center">
                            <span class="text-muted">Not a member?</span>
                            <a href="/admin/login">Sign in</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
