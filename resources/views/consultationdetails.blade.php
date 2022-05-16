@extends('layouts.masterpage')
@section('content')
    <div class="pagetitle">
        <h1>Consultation Information</h1>

    </div><!-- End Page Title -->
    <section class="section profile">
        <!-- Card with header and footer -->
        @foreach($consultation as $row)
        <div class="card">
            <div class="alert alert-info  fade show" role="alert">
                <?php
                $staff = \App\Models\Staff::find($row->staff_id);
                ?>
                <h4 class="alert-heading">This semester</h4>
                <hr>
                <div class="row">
                    <div class="col-3"><h5>Day :</h5></div> <div class="col-3"><h5>{{$row->day}}</h5></div>
                    <div class="col-3"><h5>Start Time :</h5></div> <div class="col-3"><h5>{{$row->start}}</h5></div>
                </div>
                <div class="row">
                    <div class="col-3"><h5>Staff :</h5></div> <div class="col-3"><a href="{{route('staffdetails',['id'=>$row->staff_id])}}"> <h5>{{$staff->given_name}} {{$staff->family_name}}</h5></a></div>
                    <div class="col-3"><h5>End Time :</h5></div> <div class="col-3"><h5>{{$row->end}}</h5></div>
                </div>
                <hr>
            </div>
        </div><!-- End Card with header and footer -->
        @endforeach
    </section>
@endsection
