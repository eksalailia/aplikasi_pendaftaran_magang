<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('backend/assets/uploads/profile/'.Auth::user()->foto) }}" alt="..." class="avatar-img rounded-circle">
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
                    <a href="/applicant">
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
                    <a href="/applicant-datadiri">
                        <i class="fas fa-id-card"></i>
                        <p>Upload Data Diri</p>
                        <span class="badge badge-success"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/create-pendaftaran">
                        <i class="fas fa-file-contract"></i>
                        <p>Pendaftaran</p>
                        <span class="badge badge-success"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/create-kesanpesan">
                        <i class="fas fa-comments"></i>
                        <p>Kesan & Pesan</p>
                        <span class="badge badge-success"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/status-pendaftaran">
                        <i class="fas fa-bell"></i>
                        <p>Status Pendaftaran</p>
                        <span class="badge badge-success"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/laporantugas">
                        <i class="fas fa-envelope"></i>
                        <p>Laporan Tugas</p>
                        <span class="badge badge-success"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
