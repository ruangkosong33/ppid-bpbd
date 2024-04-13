<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link bg-primary">
      <img src="{{asset('bk/dist/img/kaltim.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>Sysadmin-Web</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            @php
            $splitName = explode(' ',Auth::user()->name);
            @endphp
            <img src="https://ui-avatars.com/api/?name={{$splitName[0]}}&background=random" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{route('home.admin')}}" class="nav-link {{request()->is('admin/home*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-header"><strong>Menu</strong></li>

          <li class="nav-item
            {{request()->is('admin/dasar*') ? 'menu-open' : ''}}
            {{request()->is('admin/visi*') ? 'menu-open' : ''}}
            {{request()->is('admin/maklumat*') ? 'menu-open' : ''}}
            {{request()->is('admin/struktur*') ? 'menu-open' : ''}}
            
                                                                        ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Tentang Kami
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('dasar.index')}}" class="nav-link {{request()->is('admin/dasar*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dasar Hukum</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('visi.index')}}" class="nav-link {{request()->is('admin/visi*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visi & Misi</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('maklumat.index')}}" class="nav-link {{request()->is('admin/maklumat*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Maklumat Pelayanan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('struktur.index')}}" class="nav-link {{request()->is('admin/struktur*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Struktur Organisasi</p>
                  </a>
                </li>
              </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('standar.index')}}" class="nav-link {{request()->is('admin/standar*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Standar Biaya</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('waktu.index')}}" class="nav-link {{request()->is('admin/waktu*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Waktu Layanan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('keputusan.index')}}" class="nav-link {{request()->is('admin/keputusan*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Keputusan</p>
                </a>
              </li>
            </ul>

          </li>

          <li class="nav-item
            {{request()->is('admin/kategori*') ? 'menu-open' : ''}} --}}
            {{request()->is('admin/post*') ? 'menu-open' : ''}} --}}
                                                                      ">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-newspaper"></i>
                <p>
                Data Artikel
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('kategori.index')}}" class="nav-link {{request()->is('admin/kategori*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Kategori</p>
                </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('post.index')}}" class="nav-link {{request()->is('admin/post*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Berita</p>
                </a>
                </li>
            </ul>
          </li>

          <li class="nav-item
            {{-- {{request()->is('admin/banner*') ? 'menu-open' : ''}}
            {{request()->is('admin/foto*') ? 'menu-open' : ''}}
            {{request()->is('admin/video*') ? 'menu-open' : ''}}
            {{request()->is('admin/partner*') ? 'menu-open' : ''}} --}}
                                                                        ">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-video"></i>
                <p>
                Data Media
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                {{-- <a href="{{route('banner.index')}}" class="nav-link {{request()->is('admin/banner*') ? 'active' : ''}}"> --}}
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Banner</p>
                </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                {{-- <a href="{{route('foto.index')}}" class="nav-link {{request()->is('admin/foto*') ? 'active' : ''}}"> --}}
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Foto</p>
                </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                {{-- <a href="{{route('video.index')}}" class="nav-link {{request()->is('admin/video*') ? 'active' : ''}}"> --}}
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Video</p>
                </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              {{-- <a href="{{route('partner.index')}}" class="nav-link {{request()->is('admin/partner*') ? 'active' : ''}}"> --}}
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Partner</p>
              </a>
              </li>
          </ul>
          </li>

          <li class="nav-item
            {{-- {{request()->is('admin/bidang*') ? 'menu-open' : ''}}
            {{request()->is('admin/pegawai*') ? 'menu-open' : ''}} --}}
                                                                    ">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-building"></i>
                <p>
                Data Organisasi
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                {{-- <a href="{{route('bidang.index')}}" class="nav-link {{request()->is('admin/bidang*') ? 'active' : ''}}"> --}}
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Bidang</p>
                </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                {{-- <a href="{{route('pegawai.index')}}" class="nav-link {{request()->is('admin/pegawai*') ? 'active' : ''}}"> --}}
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Pegawai</p>
                </a>
                </li>
            </ul>
          </li>

          <li class="nav-item
            {{-- {{request()->is('admin/download*') ? 'menu-open' : ''}}
            {{request()->is('admin/filedownload*') ? 'menu-open' : ''}} --}}
                                                                                ">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-folder-open"></i>
                <p>
                Informasi Publik
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                {{-- <a href="{{route('download.index')}}" class="nav-link {{ request()->is('admin/download*') ? 'active' : '' }}"> --}}
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kategori Informasi</p>
                </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                {{-- <a href="{{route('filedownload.index')}}" class="nav-link {{ request()->is('admin/filedownload*') ? 'active' : ''}}"> --}}
                    <i class="far fa-circle nav-icon"></i>
                    <p>File Informasi</p>
                </a>
                </li>
            </ul>
          </li>

          <li class="nav-item
            {{-- {{request()->is('admin/agenda*') ? 'menu-open' : ''}}
            {{request()->is('admin/form*') ? 'menu-open' : ''}} --}}
                                                                    ">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-wallet"></i>
                <p>
                Data Kegiatan
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                {{-- <a href="{{route('agenda.index')}}" class="nav-link {{request()->is('admin/agenda*') ? 'active' : ''}}"> --}}
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Agenda</p>
                </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                {{-- <a href="{{route('form.index')}}" class="nav-link {{request()->is('admin/form*') ? 'active' : ''}}"> --}}
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Form</p>
                </a>
                </li>
            </ul>
          </li>

          <li class="nav-header"><strong>Setting</strong></li>

          <li class="nav-item">
            {{-- <a href="{{route('setting.index')}}" class="nav-link {{request()->is('admin/setting*') ? 'active' : ''}}"> --}}
              <i class="nav-icon fas fa-snowflake"></i>
              <p>
                Pengaturan
              </p>
            </a>
          </li>

          <!-- -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
