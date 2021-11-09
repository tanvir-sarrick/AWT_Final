<div>
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                     <li class="nav-item m-3 logo">ADMIN</li>
					</ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item">
                        
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item"><a href="" class="adminname"></a></li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item"><a href="{{route('profile')}}" class="btn btncustom">My profile</a></li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item"><a href="{{route('logout')}}" class="btn btncustom">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </header>
       <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul>
                        <li class="nav-devider mt-0" style="margin-bottom: 5px"></li>

                        <li> <a href="{{route('admindashboard')}}" ><span> <i class="fas fa-home"></i> </span><span class="hide-menu">Home</span></a></li>


                        <li> <a href="{{route('visitor')}}" ><span> <i class="fas fa-users"></i> </span><span class="hide-menu">Visitor</span></a></li>

                        <li> <a href="{{route('manageadmin')}}" ><span> <i class="fas fa-users-cog"></i> </span><span class="hide-menu">Manage Admin</span></a></li>
                        <li> <a href="{{route('managedoctor')}}" ><span> <i class="fas fa-users-cog"></i> </span><span class="hide-menu">Manage Doctor</span></a></li>
                        <li> <a href="{{route('managepharmacist')}}" ><span> <i class="fas fa-users-cog"></i> </span><span class="hide-menu">Manage Pharmacist</span></a></li>

        
                        <li> <a href="{{route('contactview')}}" ><span> <i class="far fa-envelope"></i> </span><span class="hide-menu">Contacts</span></a></li>

                        <li> <a href="{{route('chart')}}" ><span> <i class="far fa-comments"></i> </span><span class="hide-menu">Feadback Chart</span></a></li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
<div class="page-wrapper">