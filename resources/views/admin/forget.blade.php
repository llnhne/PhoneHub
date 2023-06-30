@extends('layouts.appuser')

@section('content')
    <!-- partial:index.partial.html -->
    <div class="pt-5">
        <h1 class="text-center">Forget Password</h1>

        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="card card-body">

                        <form id="submitForm" action="/admin/forget" method="post" data-parsley-validate=""
                            data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1"><input type="hidden"
                                name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">
                            @csrf
                            <div class="form-group required">
                                <p class="text-center">Lost your password? Please enter your email address.</br> You will
                                    receive a link to create a new password.
                                <p>
                            </div>
                            <div class="form-group required">
                                <label>Email</label>
                                <input type="text" class="form-control text-lowercase" id="email" required=""
                                    name="email" value="">
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
