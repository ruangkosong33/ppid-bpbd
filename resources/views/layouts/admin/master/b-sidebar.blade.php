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
            {{request()->is('admin/struktur*') ? 'menu-open' : ''}}
            {{request()->is('admin/fungsi*') ? 'menu-open' : ''}}
            {{request()->is('admin/team*') ? 'menu-open' : ''}}
            {{request()->is('admin/keputusan*') ? 'menu-open' : ''}}
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
                <a href="{{route('fungsi.index')}}" class="nav-link {{request()->is('admin/fungsi*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tugas Pokok & Fungsi</p>
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
                <a href="{{route('keputusan.index')}}" class="nav-link {{request()->is('admin/keputusan*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Keputusan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('team.index')}}" class="nav-link {{request()->is('admin/team*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tim PPID</p>
                </a>
              </li>
            </ul>

          </li>

          <li class="nav-item
            {{request()->is('admin/definisi*') ? 'menu-open' : ''}}
            {{request()->is('admin/dip*') ? 'menu-open' : ''}}
            {{request()->is('admin/katdip*') ? 'menu-open' : ''}}
            {{request()->is('admin/anggaran*') ? 'menu-open' : ''}}
            {{request()->is('admin/laporan*') ? 'menu-open' : ''}}
            {{request()->is('admin/filelaporan*') ? 'menu-open' : ''}}
            {{request()->is('admin/formpermohonan*') ? 'menu-open' : ''}}
            {{request()->is('admin/formpengajuan*') ? 'menu-open' : ''}}
            {{request()->is('admin/notulen*') ? 'menu-open' : ''}}
            {{request()->is('admin/pengadaan*') ? 'menu-open' : ''}}
                                                                                    ">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-folder-open"></i>
                <p>
                Data Informasi Publik
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('definisi.index')}}" class="nav-link {{request()->is('admin/definisi*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Definsi Informasi</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('anggaran.index')}}" class="nav-link {{request()->is('admin/anggaran*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Anggaran Kegiatan</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('laporan.index')}}" class="nav-link {{request()->is('admin/laporan*') || request()->is('admin/filelaporan*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Laporan Tahunan</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('katdip.index')}}" class="nav-link {{request()->is('admin/katdip*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kategori DIP</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('dip.index')}}" class="nav-link {{request()->is('admin/dip*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>File DIP</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('formpermohonan.index')}}" class="nav-link {{request()->is('admin/formpermohonan*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Form Permohonan</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('formpengajuan.index')}}" class="nav-link {{request()->is('admin/formpengajuan*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Form Pengajuan</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('notulen.index')}}" class="nav-link {{request()->is('admin/notulen*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>File Notulen</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('pengadaan.index')}}" class="nav-link {{request()->is('admin/pengadaan*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Barang & Jasa</p>
                  </a>
                </li>
            </ul>

          </li>

          <li class="nav-item
            {{request()->is('admin/etik*') ? 'menu-open' : ''}}
            {{request()->is('admin/hukum*') ? 'menu-open' : ''}}
            {{request()->is('admin/sarana*') ? 'menu-open' : ''}}
            {{request()->is('admin/sop*') ? 'menu-open' : ''}}
            {{request()->is('admin/filesop*') ? 'menu-open' : ''}}
            {{request()->is('admin/hak*') ? 'menu-open' : ''}}
            {{request()->is('admin/standar*') ? 'menu-open' : ''}}
            {{request()->is('admin/maklumat*') ? 'menu-open' : ''}}
            {{request()->is('admin/waktu*') ? 'menu-open' : ''}}
                                                                        ">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-wallet"></i>
                <p>
                Data Layanan
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
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
                <a href="{{route('etik.index')}}" class="nav-link {{request()->is('admin/etik*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kode Etik</p>
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
                <a href="{{route('sarana.index')}}" class="nav-link {{request()->is('admin/sarana*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sarana & Prasarana</p>
                </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('hak.index')}}" class="nav-link {{request()->is('admin/hak*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Hak Atas Informasi</p>
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
                <a href="{{route('hukum.index')}}" class="nav-link {{request()->is('admin/hukum*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Produk Hukum</p>
                </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('sop.index')}}" class="nav-link {{ request()->is('admin/sop*') || request()->is('admin/filesop*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SOP</p>
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
                    <p>Kategori Berita</p>
                </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('post.index')}}" class="nav-link {{request()->is('admin/post*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Post Berita</p>
                </a>
                </li>
            </ul>
          </li>

          <li class="nav-item
            {{request()->is('admin/banner*') ? 'menu-open' : ''}}
            {{request()->is('admin/foto*') ? 'menu-open' : ''}}
            {{request()->is('admin/video*') ? 'menu-open' : ''}}
            {{request()->is('admin/partner*') ? 'menu-open' : ''}}
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
                <a href="{{route('banner.index')}}" class="nav-link {{request()->is('admin/banner*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Banner</p>
                </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('foto.index')}}" class="nav-link {{request()->is('admin/foto*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Galeri Foto</p>
                </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('video.index')}}" class="nav-link {{request()->is('admin/video*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Galeri Video</p>
                </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('partner.index')}}" class="nav-link {{request()->is('admin/partner*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Link Partner</p>
              </a>
              </li>
            </ul>
          </li>

          <li class="nav-header"><strong>Setting</strong></li>

          <li class="nav-item">
            <a href="{{route('setting.index')}}" class="nav-link {{request()->is('admin/setting*') ? 'active' : ''}}">
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
