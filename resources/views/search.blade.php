@extends('layouts.masterpage')
@section('content')
    <!-- Left side columns -->
    <div class="col-lg-8">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Customer</h5>

                    <!-- Table with stripped rows -->
                    <table class="table datatable table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Email</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Balance</th>
                            <th scope="col">Blacklist</th>
                            <th scope="col">Discount</th>
                            <th scope="col">Edit / Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Brandonjacob@gmail.com</td>
                            <td>Brandon Jacob</td>
                            <td>0414202921</td>
                            <td>50$</td>
                            <td><span class="badge bg-success">No</span></td>
                            <td>20%</td>
                            <td><a href="#">Edit</a> / <a href="#">Remove</a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Bridiekess@utas.edu.au</td>
                            <td>Bridie Kessler</td>
                            <td>0414202949</td>
                            <td>100$</td>
                            <td><span class="badge bg-success">No</span></td>
                            <td>15%</td>
                            <td><a href="#">Edit</a> / <a href="#">Remove</a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Ashleighlangosh@yahoo.com</td>
                            <td>Ashleigh Langosh</td>
                            <td>0414204928</td>
                            <td>250$</td>
                            <td><span class="badge bg-success">No</span></td>
                            <td>10%</td>
                            <td><a href="#">Edit</a> / <a href="#">Remove</a></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Angusgrady@hotmail.com</td>
                            <td>Angus Grady</td>
                            <td>0414202917</td>
                            <td>300$</td>
                            <td><span class="badge bg-success">No</span></td>
                            <td>30%</td>
                            <td><a href="#">Edit</a> / <a href="#">Remove</a></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Raheemlehner@utas.edu.au</td>
                            <td>Raheem Lehner</td>
                            <td>0429482841</td>
                            <td>600$</td>
                            <td><span class="badge bg-danger">Yes</span></td>
                            <td>15%</td>
                            <td><a href="#">Edit</a> / <a href="#">Remove</a></td>
                        </tr>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>
        </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Search for more information</h5>

                <!-- Default Tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Class</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Consultation</button>
                    </li>

                </ul>
                <div class="tab-content pt-2" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <form>

                            <legend class="col-form-label">Search Class by</legend>
                            <fieldset class="row mb-3">

                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="classitem" id="gridRadios1" value="1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Staff member's ID
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="classitem" id="gridRadios2" value="2">
                                        <label class="form-check-label" for="gridRadios2">
                                            Unit Code
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row mb-3">

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputText">
                                </div>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </div>
                        </form><!-- End Horizontal Form -->
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form>

                            <legend class="col-form-label">Search Consultation by</legend>
                            <fieldset class="row mb-3">

                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="consultation" id="gridRadios1" value="1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Staff member's ID
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="consultation" id="gridRadios2" value="2">
                                        <label class="form-check-label" for="gridRadios2">
                                            Class Day
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row mb-3">

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputText">
                                </div>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </div>
                        </form><!-- End Horizontal Form -->
                    </div>

                </div>
            </div>
        </div>





    </div><!-- End Right side columns -->
@endsection
