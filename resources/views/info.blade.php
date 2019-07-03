@extends('layouts.app')

@section('content')
    <section class="content container">
        <div class="card-body">
            <div class="row">
                <h3 class="col-12 text-center card-header" style="text-decoration: blink">Patient info</h3>
                <table class="table table-bordered table-dark table-hover">
                    <div class="text-center card-tools">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Patient Id</th>
                            <th>DoB</th>
                            <th>Gender</th>
                            <th>Phone no</th>
                            <th width="#" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($patient as $info)
                            <tr>
                                <td>{{$info->id}}</td>
                                <td>{{$info->first_name}}</td>
                                <td>{{$info->last_name}}</td>
                                <td>{{$info->patient_id}}</td>
                                <td>{{$info->DoB}}</td>
                                <td>{{$info->gender}}</td>
                                <td>{{$info->phone_no}}</td>
                                <td>
                                    <form action="#" method="#">

                                        <a class="btn btn-success ui-icon-search" href="">Show</a>

                                        <a class="btn btn-primary" href="{{url('edit')}}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>

                            </tr>

                        @endforeach
                        </tbody>
                    </div>
                </table>

            </div>
        </div>
    </section>
@endsection
