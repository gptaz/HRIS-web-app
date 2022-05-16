@extends('layouts.masterpage')
@section('content')
    <div class="pagetitle">
        <button type="button" class="btn btn-primary" disabled><i class="bi bi-person-plus-fill me-1"></i> Unit</button>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Unit</h5>

                            <!-- Table with stripped rows -->
                            <table class="table datatable table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Code</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Coordinator</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($units as $row)
                                    <tr>
                                        <td scope="row"><a href="{{route('unitdetails',['id'=>$row->code])}}"> {{$row->code}}</a></td>
                                        <td>{{$row->title}}</td>
                                        <td>{{$row->coordinator}}</td>
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
