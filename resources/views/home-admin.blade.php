@extends('layouts.admin.master.b-master')

@section('title', 'Dashboard')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Dashboard </li>
@endsection

@section('content')

 <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{$sumkategori}}</h3>

              <p>Total Kategori Berita</p>
            </div>
            <div class="icon">
              <i class="ion ion-pricetag"></i>
            </div>
            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{$sumpost}}</h3>

              <p>Total Berita</p>
            </div>
            <div class="icon">
              <i class="ion ion-clipboard"></i>
            </div>
            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$sumteam}}</h3>

                <p>Total Tim PPID</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{$sumagenda}}</h3>

                <p>Total Agenda</p>
              </div>
              <div class="icon">
                <i class="ion ion-calendar"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-dark">
            <div class="inner">
              <h3>{{$sumsop}}</h3>

              <p>Total SOP</p>
            </div>
            <div class="icon">
              <i class="ion ion-bookmark"></i>
            </div>
            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{$sumhukum}}</h3>

              <p>Total Produk Hukum</p>
            </div>
            <div class="icon">
              <i class="ion ion-folder"></i>
            </div>
            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-light">
                <div class="inner">
                    <h3>{{$sumdip}}</h3>

                    <p>Total Informasi Publik</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>{{$sumlaporan}}</h3>

              <p>Total Laporan Tahunan</p>
            </div>
            <div class="icon">
              <i class="ion ion-checkmark-round"></i>
            </div>
            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-8 col-6">
            <div class="card">
                <div class="card-header">

                    <h5>Total Berita Berdasarkan Tahun</h5>
                </div>
                <div class="card-body">
                    <div id="post-chart">
                        {{-- {!! $charts['post']->container() !!} --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-6">
            <div class="card">
                <div class="card-header">

                    <h5>Total Kategori Berdasarkan Berita</h5>
                </div>
                <div class="card-body">
                    <div id="category-chart">
                        {{-- {!! $charts['category']->container() !!} --}}
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    <h5>Chart Tambahan</h5>
                </div>
                <div class="card-body">
                    <div id="additional-chart">
                        <!-- Tambahkan chart tambahan di sini -->

                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-8 col-6">
            <div class="card">
                <div class="card-header">

                    <h5>Total Agenda Kegiatan Berdasarkan Bulan</h5>
                </div>
                <div class="card-body">
                    <div id="event-chart">
                        {{-- {!! $charts['event']->container() !!} --}}
                    </div>
                </div>
            </div>
        </div>

      </div>
    </div>
  </section>

@endsection

{{-- @push('script')

    <script src="{{ $charts['category']->cdn() }}"></script>
    {!! $charts['category']->script() !!}

    <script src="{{ $charts['post']->cdn() }}"></script>
    {!! $charts['post']->script() !!}

    <script src="{{ $charts['event']->cdn() }}"></script>
    {!! $charts['event']->script() !!}

@endpush --}}


