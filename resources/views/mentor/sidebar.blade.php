<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                        {{ Auth::user()->name }}
                            <span class="user-level">{{ Auth::user()->role }}</span>
                            <!-- <span class="caret"></span> -->
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <!-- <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a href="/mentor-dashboard">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="badge badge-success"></span>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span><hr><hr>
                    {{-- <h4 class="text-section">Components</h4> --}}
                </li>
                <li class="nav-item">
                    <a href="{{route('mentor.profile.index')}}">
                        <i class="fas fa-id-card"></i>
                        <p>Data Diri</p>
                        <span class="badge badge-success"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/datamentoring">
                        <i class="fas fa-file"></i>
                        <p>Daftar Peserta Bimbingan</p>
                        <span class="badge badge-success"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="">
                        <i class="fas fa-envelope"></i>
                        <p>Laporan Tugas</p>
                        <span class="badge badge-success"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
