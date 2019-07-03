@extends('layouts.base')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            <h1 class="text-center"> Edit patient info</h1>
        </div>
        <div class="card-body container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
            @endif
            <form class="font-reduce h-50" method="post" action="{{ url('PatientController@edit') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <div class="row mb-4">
                        <div class="form-group col-6">
                            <label for="first name">First name</label>
                            <input type="text" class="form-control" placeholder="First name" name="first_name">
                        </div>
                        <div class="form-group col-6">
                            <label for="last name">Last name</label>
                            <input type="text" class="form-control" placeholder="Last name" name="last_name">
                        </div>
                    </div>
                    <hr>
                    <label for="name">Patient id:</label>
                    <input type="text" class="form-control" name="first_name" value="">
                    <hr>
                    <label for="name">Patient DoB:</label>
                    <input type="text" class="form-control" name="first_name" value="">
                    <hr>
                    <label for="name">Patient gender:</label>
                    <input type="text" class="form-control" name="first_name" value="">
                    <hr>
                    <label for="name">Patient phone number:</label>
                    <input type="text" class="form-control" name="first_name" value="">

                </div>
                <button type="submit" class="btn btn-primary">Update</button>

            </form>
        </div>
    </div>
@endsection