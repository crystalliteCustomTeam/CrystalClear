<nav class="sidebar">
            <div class="sidebar-header">
                <a href="#" class="sidebar-brand">
                    Noble<span>UI</span>
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav">
                    <li class="nav-item nav-category">Main</li>
                    <li class="nav-item">
                        <a href="{{url('/admin/dashboard')}}" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="link-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Brands</li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin/allbrands')}}">
                            <i class="link-icon" data-feather="mail"></i>
                            <span class="link-title">All Brands</span>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="{{url('/admin/reports')}}" class="nav-link">
                            <i class="link-icon" data-feather="message-square"></i>
                            <span class="link-title">Reports</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">User</li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin/adduser')}}">
                            <i class="link-icon" data-feather="user-plus"></i>
                            <span class="link-title">Add User</span>
                           
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin/request')}}">
                            <i class="link-icon" data-feather="message-square"></i>
                            <span class="link-title">Requests</span>
                           
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin/allUser')}}">
                            <i class="link-icon" data-feather="users"></i>
                            <span class="link-title">All Users</span>
                           
                        </a>
                    </li>

                    <li class="nav-item nav-category">Pages</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button" aria-expanded="false" aria-controls="authPages">
                            <i class="link-icon" data-feather="unlock"></i>
                            <span class="link-title">Authentication</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="authPages">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="pages/auth/login.html" class="nav-link">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/auth/register.html" class="nav-link">Register</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        