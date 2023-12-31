@extends('layouts.appadmin')

@section('content')
    <!-- partial:index.partial.html -->
    <div class="pt-5">
        <h1 class="text-center">Login Account</h1>

        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="card card-body">

                        <form id="submitForm" action="{{ route('admin.loginPost') }}" method="post" data-parsley-validate=""
                            data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1"><input type="hidden"
                                name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">
                            @csrf
                            <div class="form-group required">
                                <label>Username</label>
                                <input type="text" class="form-control text-lowercase" id="name" required=""
                                    name="email" value="">
                            </div>
                            <div class="form-group required">
                                <label class="d-flex flex-row align-items-center">Password
                                    <a class="ml-auto border-link small-xl" href="/admin/forget">Forget?</a></label>
                                <input type="password" class="form-control" required="" id="password" name="password"
                                    value="">
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
                            <a href="/admin/register">Sign up</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
