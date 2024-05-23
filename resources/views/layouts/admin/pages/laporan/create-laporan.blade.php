@extends('layouts.admin.master.b-master')

@section('title', 'Data Laporan Tahunan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{ route('laporan.index') }}">Laporan Tahunan</a></li>
    <li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('laporan.store')}}" method="POST">
                @csrf
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Laporan Tahunan">

                        @error('title')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="year">Tahun</label>
                        <input type="number" class="form-control @error('year') is-invalid @enderror" name="year" placeholder="Laporan Tahunan">

                        @error('year')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <x-slot name="footer">
                        <button type="reset" class="btn btn-dark">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </x-slot>

                </x-card>
            </form>
        </div>
    </div>
@endsection
