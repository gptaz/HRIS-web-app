@extends('layouts.masterpage')
@section('content')
    <!-- Left side columns -->
    <div class="col-lg-8">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Welcome</div>
                    <div class="card-body">
                        <h5 class="card-title">Leading the way for a sustainable future</h5>
                        Applying to study with us is simple and free. And it could change your life. Whether you're interested in studying full-time, part-time or online, we offer flexible courses to suit your lifestyle and commitments. We're also here to guide you through the entire application process.
                    </div>

                </div>
            </div>
        </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4">
        @include('layouts.mainsearch')
    </div><!-- End Right side columns -->
@endsection
