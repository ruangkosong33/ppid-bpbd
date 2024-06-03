@extends('layouts.admin.master.b-master')

@section('title', 'Data Galeri Foto')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('foto.index')}}">Galeri Foto</a></li>
    <li class="breadcrumb-item active">Edit Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('foto.update', $foto->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Judul"
                        value="{{old('title') ?? $foto->title}}">

                        @error('title')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="body">Deskripsi</label>

                        <textarea class="form-control" name="body" id="summernote">{{old('body', $foto->body ?? '')}}</textarea>

                    </div>

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="date">Tanggal Publish</label>
                                <input type="date" class="form-control" name="date"
                                value="{{old('date') ?? $foto->date}}">

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control" id="image" name="image"
                                onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                            </div>

                            <div class="mt-3"><img src="{{asset('storage/image-foto/'. $foto->image)}}" id="output" width="150"></div>

                        </div>

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

@push('script')
    @include('include.summernote')
@endpush
