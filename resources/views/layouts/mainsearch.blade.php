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
                <form action="{{route('searchClass')}}">

                    <legend class="col-form-label">Search Class by</legend>
                    <fieldset class="row mb-3">

                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="classitem" id="gridRadios1" value="1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Staff member's ID or Staff's Name
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="classitem" id="gridRadios2" value="2">
                                <label class="form-check-label" for="gridRadios2">
                                    Unit Code or Unit Title
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="cltext">
                        </div>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </form><!-- End Horizontal Form -->
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <form action="{{route('searchconsultation')}}">

                    <legend class="col-form-label">Search Consultation by</legend>
                    <fieldset class="row mb-3">

                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="consultation" id="gridRadios1" value="1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Staff member's ID or Staff's Name
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="consultation" id="gridRadios2" value="2">
                                <label class="form-check-label" for="gridRadios2">
                                    Class Unit Code
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="cstext">
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
