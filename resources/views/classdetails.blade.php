@extends('layouts.masterpage')
@section('content')
    <div class="pagetitle">
        <h1>Class Information</h1>

    </div><!-- End Page Title -->
    <section class="section profile">
        <!-- Card with header and footer -->
        @foreach($class as $row)
        <div class="card">
            <div class="alert alert-info  fade show" role="alert">

                <h4 class="alert-heading">This semester</h4>
                <hr>
                <div class="row">
                    <div class="col-3"><h5>Unit Code :</h5></div> <div class="col-3"><h5>{{$row->unit_code}}</h5></div>
                    <div class="col-3"><h5>Day :</h5></div> <div class="col-3"><h5>{{$row->day}}</h5></div>
                </div>
                <div class="row">
                    <div class="col-3"><h5>Campus :</h5></div> <div class="col-3"><h5>{{$row->campus}}</h5></div>
                    <div class="col-3"><h5>Start Time :</h5></div> <div class="col-3"><h5>{{$row->start}}</h5></div>
                </div>

                <div class="row">
                    <div class="col-3"><h5>Type :</h5></div> <div class="col-3"><h5>{{$row->type}}</h5></div>
                    <div class="col-3"><h5>End Time :</h5></div> <div class="col-3"><h5>{{$row->end}}</h5></div>
                </div>
                <?php
                $staff = \App\Models\Staff::find($row->staff);
                ?>
                <div class="row">
                    <div class="col-3"><h5>Room :</h5></div> <div class="col-3"><h5>{{$row->room}}</h5></div>
                    <div class="col-3"><h5>Staff :</h5></div> <div class="col-3"><a href="{{route('staffdetails',['id'=>$row->staff])}}"> <h5>{{$staff->given_name}} {{$staff->family_name}}</h5></a></div>
                </div>

                <hr>
            </div>
            <h4>Consultation</h4>
            <br>
            <?php
            $consultations = \App\Models\Consultation::where('staff_id',$row->staff)->get();
            ?>
            <table class="table datatable table-striped">
                <thead>
                <tr>
                    <th scope="col">Day</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">End Time</th>
                </tr>
                </thead>
                <tbody>
                @foreach($consultations as $consultation)
                    <tr>
                        <td>{{$consultation->day}}</td>
                        <td>{{$consultation->start}}</td>
                        <td>{{$consultation->end}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div><!-- End Card with header and footer -->
        @endforeach
    </section>
@endsection
