@extends('layouts.admin.master.b-master')

@section('title', 'Dashboard')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Master Panel</li>
@endsection

@section('content')

 <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              {{-- <h3>{{$sumkategori}}</h3> --}}

              <p>Jumlah Kategori</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            {{-- <a href="{{route('kategori.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>

        <div class="col-lg-6 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              {{-- <h3>{{$sumpost}}</h3> --}}

              <p>Jumlah Berita</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            {{-- <a href="{{route('post.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              {{-- <h3>{{$sumagenda}}</h3> --}}

              <p>Jumlah Agenda</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            {{-- <a href="{{route('agenda.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-secondary">
            <div class="inner">
              {{-- <h3>{{$sumbidang}}</h3> --}}

              <p>Jumlah Bidang</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            {{-- <a href="{{route('bidang.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              {{-- <h3>{{$sumpegawai}}</h3> --}}

              <p>Jumlah Pegawai</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            {{-- <a href="{{route('pegawai.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-primary">
            <div class="inner">
              {{-- <h3>{{$sumfoto}}</h3> --}}

              <p>Jumlah Media Foto</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            {{-- <a href="{{route('foto.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>

      </div>

    </div>

  </section>
 <!-- End Main Content -->

@endsection


