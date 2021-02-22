
            <div class="sidebar" data-color="purple" data-image="{{ asset('asset/assets/img/sidebar-5.jpg') }}">
                @auth
                <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
                <div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="{{ route('home') }}" class="simple-text">
                            <img src="{{ asset('asset/school.png') }}" width="100" alt="">
                        </a>
                    </div>
                    <ul class="nav">
                        @if(Auth::user()->role == 'siswa')

                        <li class="nav-item{{ request()->is('menu/siswa/jadwalSholat') ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('menu.siswa.jadwalSholat') }}">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>Jadwal Sholat</p>
                            </a>
                        </li>

                        <li class="nav-item{{ request()->is('menu/siswa/rewardPunishment') ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('menu.siswa.rewardPunishment') }}">
                                <i class="nc-icon nc-icon nc-paper-2"></i>
                                <p>Reward & Punishment</p>
                            </a>
                        </li>

                        <li class="nav-item{{ request()->is('menu/siswa/rapot') ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('menu.siswa.rapot') }}">
                                <i class="nc-icon nc-icon nc-paper-2"></i>
                                <p>Rapot Nilai</p>
                            </a>
                        </li>

                        <li class="nav-item{{ request()->is('menu/siswa/tugasBK') ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('menu.siswa.tugasBK') }}">
                                <i class="nc-icon nc-icon nc-paper-2"></i>
                                <p>Belum Kompeten</p>
                            </a>
                        </li>
                        @elseif(Auth::user()->role == 'guru')

                        <li class="nav-item{{ request()->is('menu/guru/tugasBK') ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('menu.guru.tugasBK') }}">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>Belum Kompoten</p>
                            </a>
                        </li>
                        <li class="nav-item{{ request()->is('menu/guru/rewardPunishment') ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('menu.guru.rewardPunishment') }}">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>Reward & Punishment</p>
                            </a>
                        </li>
                        <li class="nav-item{{ request()->is('menu/guru/rapotSiswa') ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('menu.guru.rapotSiswa') }}">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>Rapot Siswa</p>
                            </a>
                        </li>
                        @elseif(Auth::user()->role == 'admin')
                        <li class="nav-item{{ request()->is('menu/admin/user/create') ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('menu.admin.user.create') }}">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>User</p>
                            </a>
                        </li>
                        <li class="nav-item{{ request()->is('menu/admin/siswa') ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('menu.admin.siswa.index') }}">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>Siswa</p>
                            </a>
                        </li>

                        <li class="nav-item{{ request()->is('menu/admin/guru') ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('menu.admin.guru.index') }}">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>Guru</p>
                            </a>
                        </li>

                        <li class="nav-item{{ request()->is('menu/admin/rewardPunishment') ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('menu.admin.rewardPunishment.index') }}">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>Reward Punishment</p>
                            </a>
                        </li>

                        @endif

                        <li class="nav-item active active-pro">
                            <a class="nav-link active" href="javascript:;">
                                <i class="nc-icon nc-alien-33"></i>
                                <p>{{ auth()->user()->role }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
                @endauth
            </div>
