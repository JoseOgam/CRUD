@extends('layouts.base')

@section('content')
    <section class="site-section bg-dark" id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5 position-relative">
                    <h3 class="section-title text-center text-white mb-5">Patient information</h3>
                </div>
            </div>
            @if(\Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    <strong>{{ \Session::get('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if($errors->any())
                <div>
                    @foreach($errors->all() as $error)
                        <div class="alert alert-warning alert-dismissible fade show">
                            <strong>{{ $error }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                </div>
            @endif
            <form action="{{action('PatientController@store')}}" method="post" class="md-form">
                {{ csrf_field() }}
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

                <div class="row mb-4">
                    <div class="form-group col-12">
                        <label for="patient id">Patient ID</label>
                        <input type="number" class="form-control" placeholder="Patient ID" name="patient_id">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="form-group col-12">
                        <label for="DOB">Patient DOB</label>
                        <input type="date" class="form-control" placeholder="DOB" name="DoB">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="form-group col-12">
                        <label for="gender">Patient gender</label>
                        <label>
                            <select class="custom-select" name="gender">
                                <option selected>choose gender</option>
                                <option>female</option>
                                <option>male</option>
                                <option>others</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="form-group col-12">
                        <label for="tel">Mobile number</label>
                        <input type="tel" class="form-control" placeholder="phone number" name="phone_no">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <input type="submit" class="btn btn-info" value="submit">
                    </div>
                </div>

            </form>
        </div>
    </section>
@endsection