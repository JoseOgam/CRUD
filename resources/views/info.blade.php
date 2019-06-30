@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3 class="col-12 text-center" style="text-decoration: blink">Patient info</h3>
            <table class="table table-striped table-dark table-hover">
                <div class="text-center card-tools">
                </div>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Patient Id</th>
                    <th>DoB</th>
                    <th>Gender</th>
                    <th>Phone no</th>
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

                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection
