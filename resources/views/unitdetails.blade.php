@extends('layouts.masterpage')
@section('content')
    <div class="pagetitle">
        <h1>Unit Information</h1>

    </div><!-- End Page Title -->
    <section class="section profile">
        <!-- Card with header and footer -->
        @foreach($unit as $row)
        <div class="card">
            <div class="card-body">
                <div class="alert alert-info  fade show" role="alert">

                    <h4 class="alert-heading">This semester</h4>
                    <hr>
                    <div class="row">
                        <div class="col-3"><h5>Unit Code :</h5></div> <div class="col-9"><h5>{{$row->code}}</h5></div>
                    </div>

                    <div class="row">
                        <div class="col-3"><h5>Unit Title :</h5></div> <div class="col-9"><h5>{{$row->title}}</h5></div>
                    </div>

                    <?php
                        $staff = \App\Models\Staff::find($row->coordinator);
                    ?>
                    <div class="row">
                        <div class="col-3"><h5>Unit Coordinator :</h5></div> <div class="col-9"><a href="{{route('staffdetails',['id'=>$staff->id])}}"> <h5>{{$staff->given_name}} {{$staff->family_name}}</h5></a></div>
                    </div>
                    <hr>
                </div>
                <h4>Classes</h4>
                <br>
                <?php
                    $classes = \App\Models\Classes::where('unit_code',$row->code)->get();
                ?>
                <table class="table datatable table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Campus</th>
                        <th scope="col">Day</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">End Time</th>
                        <th scope="col">Type</th>
                        <th scope="col">Room</th>
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
                            <td>{{$class->room}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div><!-- End Card with header and footer -->
        @endforeach
    </section>
@endsection
