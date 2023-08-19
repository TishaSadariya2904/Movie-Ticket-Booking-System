@extends('user/app')
@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">User Profile</div>
                    <div class="card-body justify-content-center">
                            <form method="post" action="{{ route('profile-updat',$adminUser->id) }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-check" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-check" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-check" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                            </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
