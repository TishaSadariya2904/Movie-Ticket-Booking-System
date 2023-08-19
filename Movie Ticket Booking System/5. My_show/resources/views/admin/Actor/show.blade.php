@extends('admin/layouts/app')
@section('headSection')
    <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">

    <link rel="stylesheet" href="{{asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">


    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

@endsection
@section('main-content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-6">
                        <ol class="breadcrumb ">
                            <li class="breadcrumb-item" style="font-size: 25px"><a href="#">Actor Details</a></li>

                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    {{--                    <h3 class="card-title">Cast</h3>--}}


                    <div class="text-center">
                        <a class='col-lg-offset-5 btn btn-success' href="{{route('actor-create')}}" style="font-size: 15px;border-radius: 10px"> Add New Actor</a>
                        <a class='col-lg-offset-5 btn btn-success' href="{{route('actor-export')}}" style="font-size: 15px;border-radius: 10px">Export Data</a>
                    </div>

                    {{--  <div class="text-center">
                        <a class='col-lg-offset-5 btn btn-success' href="{{route('actor-create')}}" style="font-size: 15px;border-radius: 10px"> Downlode Actor file</a>
                    </div>  --}}

                </div>
                <div class="card-body">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr style="font-size: 15px">
                                    <th>Sr. No</th>
                                    <th>Actor Name</th>
                                    <th>Actor Image</th>
                                    <th>Actor Bio</th>
                                    <th>Birth Date</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($actor as $cast)
                                    <tr>
                                        <td style="font-size: 14px">{{$loop->index +1}}</td>
                                        <td style="font-size: 14px">{{$cast->name}}</td>
                                        <td> <img src="data:image/png;base64, {{$cast->image}}" alt="image" width="150px" height="200px"></td>
                                        <td style="font-size: 14px">{{$cast->bio}}</td>
                                        <td style="font-size: 14px">{{$cast->birth_date}}</td>
                                        <td>
                                            <a href="{{ route('actor-edit',$cast->id) }}">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('actor-delete',$cast->id) }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>

        </section>
    </div>
@endsection
