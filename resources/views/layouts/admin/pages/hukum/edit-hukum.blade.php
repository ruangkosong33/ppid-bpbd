@extends('layouts.admin.master.b-master')

@section('title', 'Data Produk Hukum')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('hukum.index')}}">Produk Hukum</a></li>
    <li class="breadcrumb-item active">Edit Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('hukum.update', $hukum->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') ?? is-invalid @enderror" name="title" placeholder="Produk Hukum"
                        value="{{ old('title') ?? $hukum->title}}">

                        @error('title')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="date">Tanggal Publish</label>
                                <input type="date" class="form-control" name="date" value="{{ old('date') ?? $hukum->date }}">

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="file">File</label>
                                <input type="file" class="form-control @error('file') ?? is-invalid @enderror" name="file">
        
                                @error('file')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror
        
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="file">File (Existing)</label>
                        <input type="text" class="form-control" value="{{ $hukum->file }}" readonly>
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
