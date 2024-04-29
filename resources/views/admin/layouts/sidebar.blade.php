<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Caretaker</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{ route ('admin.caretaker.create')}}">Add Caretaker</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ route ('admin.caretaker.list')}}">Caretaker data</a></li>
                    </ul>
                </li>
                {{-- <li class="menu-item-has-children  dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Hospital</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route ('admin.hospital.store')}}">Add hospital</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route ('admin.hospital.list')}}">Hospital data</a></li>
                    </ul>
                </li> --}}

                {{-- <li class="menu-item-has-children  dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Staff</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route ('admin.staff.store')}}">Add Staff</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route ('admin.staff.list')}}">Staff data</a></li>
                    </ul>
                </li> --}}

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Dietician</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route ('admin.dietician.create')}}">Add Dietician</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route ('admin.dietician.list')}}">Dietician data</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children  dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Medical</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route ('admin.medical.medicalreport')}}">Medical Report</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route ('admin.medical.medicine')}}">Medicines purchased</a></li>
                    </ul>
                </li>

                          </ul>
        </div>
    </nav>
</aside>
