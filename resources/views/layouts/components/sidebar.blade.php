<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
    @if (auth()->user()->role == 'adminkacab')
    <li class="nav-item">
        <a class="nav-link " href="{{route('home')}}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->


    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{route('adminkacab.pages.tablesortu')}}">
            <i class="bi bi-circle"></i><span>Tables Orang Tua</span>
            </a>
        </li>
        <li>
            <a href="{{route('adminkacab.pages.tables')}}">
            <i class="bi bi-circle"></i><span>DataTables Anak</span>
            </a>
        </li>
        </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
        <i class="bi bi-person"></i>
        <span>Profile</span>
        </a>
    </li><!-- End Profile Page Nav -->

        @elseif (auth()->user()->role == 'adminpusat')
        <li class="nav-item">
            <a class="nav-link " href="{{route('home')}}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="#">
                <i class="bi bi-circle"></i><span>Tables Orang Tua</span>
                </a>
            </li>
            <li>
                <a href="{{route('adminkacab.pages.tables')}}">
                <i class="bi bi-circle"></i><span>DataTables Anak</span>
                </a>
            </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
            <i class="bi bi-person"></i>
            <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->
        @elseif (auth()->user()->role == 'shelter')

        @endif
    </ul>

</aside><!-- End Sidebar-->
