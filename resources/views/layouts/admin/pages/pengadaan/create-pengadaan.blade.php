@extends('layouts.admin.master.b-master')

@section('title', 'Data Pengadaan Barang & Jasa')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('pengadaan.index')}}">Pengadaan Barang & Jasa</a></li>
    <li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('pengadaan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Judul Pengadaan Barang & Jasa">

                    </div>

                    <div class="form-group">
                        <label for="date">Tanggal</label>
                        <input type="date" class="form-control" name="date">

                    </div>

                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" class="form-control" id="image" name="image"
                        onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                    </div>

                    <div class="mt-3"><img src="" id="output" width="150"></div>

                    <div class="form-group">
                        <label for="link">Link URL</label>
                        <input type="text" class="form-control" name="link" placeholder="Link URL">

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
