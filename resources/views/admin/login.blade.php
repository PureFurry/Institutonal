@extends('layout.layout')
@section('content')
<div role="main" class="main shop py-4">

    <div class="container py-4">

        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
                <h2 class="font-weight-bold text-5 mb-0">Login</h2>
                <form action="{{route('admin.login')}}" id="frmSignIn" method="post" class="needs-validation">
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="text-color-dark text-3">Email address <span class="text-color-danger">*</span></label>
                            <input type="text" value="" class="form-control form-control-lg text-4" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="text-color-dark text-3">Password <span class="text-color-danger">*</span></label>
                            <input type="password" value="" class="form-control form-control-lg text-4" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <button type="submit" class="btn btn-dark btn-modern btn-block text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">Login</button>
                                                   </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

</div>
@endsection
