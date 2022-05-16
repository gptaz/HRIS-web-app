@extends('layouts.masterpage')
@section('content')
    <!-- Left side columns -->
    <div class="col-lg-8">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Consultation</h5>

                    <!-- Table with stripped rows -->
                    <table class="table datatable table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Staff Name</th>
                            <th scope="col">Day</th>
                            <th scope="col">Start Time</th>
                            <th scope="col">End Time</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($consultations as $row)
                            <?php
                            $staff = \App\Models\Staff::find($row->staff_id);
                            ?>
                            <tr>
                                <td scope="row"><a href="{{route('consultationdetails', ['id' => $row->staff_id,'day' => $row->day])}}" >{{$staff->given_name}} {{$staff->family_name}}</a></td>
                                <td>{{$row->day}}</td>
                                <td>{{$row->start}}</td>
                                <td>{{$row->end}}</td>

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
