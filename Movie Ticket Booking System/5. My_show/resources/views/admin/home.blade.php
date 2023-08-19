@extends('admin/layouts/app')

@section('main-content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>My Show</h1>
                    </div>
                    <a style="margin-left: 1000px" class="btn btn-dark" href="{{ route('admin-logout') }}"
                               onclick="event.preventDefault();
                                                         document.getElementById('admin-logout-form').submit();">
                                Logout
                    </a>
                    <form id="admin-logout-form" action="{{ route('admin-logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>

            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Movie Show Website</h3>
                </div>
                <div class="image">
                    <center><img src="dist/img/My_show.png" height="35%" width="30%" style="margin-top: 10px; margin-bottom: 10px"></center>
                </div>
                <div class="card-footer">

                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
@endsection
