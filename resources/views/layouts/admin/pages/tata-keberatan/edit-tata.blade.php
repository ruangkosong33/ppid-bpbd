@extends('layouts.admin.master.b-master')

@section('title', 'Data Tata Cara Keberatan Informasi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('tatakeberatan.index')}}">Tata Keberatan Informasi</a></li>
    <li class="breadcrumb-item active">Edit Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('tatakeberatan.update', $tatakeberatan->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Tata Cara Keberatan Informasi"
                        value="{{old('title') ?? $tatakeberatan->title}}">
                    </div>

                    <div class="form-group">
                        <label for="body">Deskripsi</label>
                        <textarea class="form-control" name="body" id="summernote">{{old('body', $tatakeberatan->body ?? '')}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" class="form-control" id="image" name="image"
                        onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                    </div>

                    <div class="mt-3"><img src="{{asset('storage/image-tata-keberatan/' . $tatakeberatan->image)}}" id="output" width="150"></div>

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
