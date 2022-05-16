@extends('layouts.masterpage')
@section('content')
    <div class="pagetitle">
        <button type="button" class="btn btn-primary" disabled><i class="bi bi-person-plus-fill me-1"></i> Consultation</button>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Consultation</h5>

                            <!-- Table with stripped rows -->
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
                                    <td scope="row"><a href="{{route('consultationdetails', ['id' => $row->staff_id,'day' => $row->day])}}" >{{$row->staff_id}}</a></td>
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

            </div>

        </div>
    </section>
@endsection
