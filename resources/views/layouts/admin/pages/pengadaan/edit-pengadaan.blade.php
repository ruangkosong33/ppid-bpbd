@extends('layouts.admin.master.b-master')

@section('title', 'Data Pengadaan Barang & Jasa')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{ route('pengadaan.index') }}">Pengadaan Barang & Jasa</a></li>
    <li class="breadcrumb-item active">Edit Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('pengadaan.update', $pengadaan->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') ?? is-invalid @enderror" name="title" placeholder="Pengadaan Barang & Jasa"
                        value="{{old('title') ?? $pengadaan->title}}">

                        @error('title')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="date">Tanggal & Tahun</label>
                        <input type="date" class="form-control" name="date"
                        value="{{old('date') ?? $pengadaan->date}}">

                    </div>

                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" class="form-control" id="image" name="image"
                        onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                    </div>

                    <div class="mt-3"><img src="{{asset('storage/image-pengadaan/'. $pengadaan->image)}}" id="output" width="150"></div>
            
                    <div class="form-group">
                        <label for="link">Link URL</label>
                        <input type="text" class="form-control" name="link"
                        value="{{old('link') ?? $pengadaan->link}}">

                    </div>

                    <x-slot name="footer">
                        <button type="button" onclick="history.back()" class="btn btn-dark" >Kembali</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </x-slot>

                </x-card>
            </form>
        </div>
    </div>
@endsection
