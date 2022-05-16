@extends('layouts.masterpage')
@section('content')
    <div class="pagetitle">
        <h1>Staff Profile</h1>

    </div><!-- End Page Title -->
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="{{asset('/images/logo.png')}}" alt="Profile" class="rounded-circle">
                        <h2>{{$staff->given_name." ".$staff->family_name}}</h2>
                        <h3>{{$staff->title}}</h3>

                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">Profile Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                    <div class="col-lg-9 col-md-8">{{$staff->given_name." ".$staff->family_name}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Title</div>
                                    <div class="col-lg-9 col-md-8">{{$staff->title}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Campus</div>
                                    <div class="col-lg-9 col-md-8">{{$staff->campus}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Room</div>
                                    <div class="col-lg-9 col-md-8">{{$staff->room}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">{{$staff->email}}</div>
                                </div>

                            </div>



                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>

        </div>
        <div class="row">
            <div class="col-xl-4"></div>
            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Consultation</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                <?php
                                $consultations = \App\Models\Consultation::where('staff_id',$staff->id)->get();
                                ?>
                                <table class="table datatable table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">Staff ID</th>
                                        <th scope="col">Day</th>
                                        <th scope="col">Start Time</th>
                                        <th scope="col">End Time</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($consultations as $row)
                                        <tr>
                                            <td scope="row">{{$row->staff_id}}</td>
                                            <td>{{$row->day}}</td>
                                            <td>{{$row->start}}</td>
                                            <td>{{$row->end}}</td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>


                            </div>



                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-xl-4"></div>
            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Classes</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                <?php
                                $classes = \App\Models\Classes::where('staff',$staff->id)->get();
                                ?>
                                <table class="table datatable table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">Unit Code</th>
                                        <th scope="col">Campus</th>
                                        <th scope="col">Day</th>
                                        <th scope="col">Start Time</th>
                                        <th scope="col">End Time</th>
                                        <th scope="col">Type</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($classes as $class)
                                        <tr>
                                            <td scope="row"><a href="{{route('classdetails', ['id' => $class->unit_code,'campus' => $class->campus,'day' => $class->day])}}" >{{$class->unit_code}}</a></td>
                                            <td>{{$class->campus}}</td>
                                            <td>{{$class->day}}</td>
                                            <td>{{$class->start}}</td>
                                            <td>{{$class->end}}</td>
                                            <td>{{$class->type}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>


                            </div>



                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
