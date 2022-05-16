<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{route('main')}}">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('profile')}}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('allunit')}}" <?php if(session('staff')==0) echo "hidden" ?>>
                <i class="bi bi-menu-button-wide"></i><span>Unit</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('allstaff')}}" <?php if(session('staff')==0) echo "hidden" ?>>
                <i class="bi bi-people"></i><span>Staff</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('allclass')}}" <?php if(session('staff')==0) echo "hidden" ?>>
                <i class="bi bi-card-list"></i><span>Class</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('allconsultation')}}" <?php if(session('staff')==0) echo "hidden" ?>>
                <i class="bi bi-card-list"></i><span>Consultation</span>
            </a>
        </li>


</aside><!-- End Sidebar-->
