@extends('layouts.masterpage')
@section('content')
    <div class="pagetitle">
        <button type="button" class="btn btn-primary" disabled><i class="bi bi-person-plus-fill me-1"></i> Staff</button>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Staff</h5>

                            <!-- Table with stripped rows -->
                            <table class="table datatable table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Given Name</th>
                                    <th scope="col">Family Name</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($staff as $row)
                                <tr>
                                    <td><a href="{{route('staffdetails',['id'=>$row->id])}}"> {{$row->given_name}}</a></td>
                                    <td>{{$row->family_name}}</td>

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
