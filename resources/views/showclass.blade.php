@extends('layouts.masterpage')
@section('content')
    <!-- Left side columns -->
    <div class="col-lg-8">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Class</h5>

                    <!-- Table with stripped rows -->
                    <table class="table datatable table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Unit Code</th>
                            <th scope="col">Campus</th>
                            <th scope="col">Day</th>
                            <th scope="col">Start Time</th>
                            <th scope="col">End Time</th>
                            <th scope="col">Type</th>
                            <th scope="col">Room</th>
                            <th scope="col">Staff</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($classes as $row)
                            <?php
                                $staff = \App\Models\Staff::find($row->staff);
                            ?>
                            <tr>
                                <td scope="row"><a href="{{route('classdetails', ['id' => $row->unit_code,'campus' => $row->campus,'day' => $row->day])}}" >{{$row->unit_code}}</a></td>
                                <td>{{$row->campus}}</td>
                                <td>{{$row->day}}</td>
                                <td>{{$row->start}}</td>
                                <td>{{$row->end}}</td>
                                <td>{{$row->type}}</td>
                                <td>{{$row->room}}</td>
                                <td>{{$staff->given_name}} {{$staff->family_name}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>
        </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4">
        @include('layouts.mainsearch')
    </div><!-- End Right side columns -->
@endsection
