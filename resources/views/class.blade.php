@extends('layouts.masterpage')
@section('content')
    <div class="pagetitle">
        <button type="button" class="btn btn-primary" disabled><i class="bi bi-person-plus-fill me-1"></i> Class</button>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
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
                                <tr>
                                    <td scope="row"><a href="{{route('classdetails', ['id' => $row->unit_code,'campus' => $row->campus,'day' => $row->day])}}" >{{$row->unit_code}}</a></td>
                                    <td>{{$row->campus}}</td>
                                    <td>{{$row->day}}</td>
                                    <td>{{$row->start}}</td>
                                    <td>{{$row->end}}</td>
                                    <td>{{$row->type}}</td>
                                    <td>{{$row->room}}</td>
                                    <td>{{$row->staff}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>


                </div>

            </div>

        </div>
    </section>
@endsection
