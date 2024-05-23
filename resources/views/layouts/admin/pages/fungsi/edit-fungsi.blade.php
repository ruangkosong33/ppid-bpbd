@extends('layouts.admin.master.b-master')

@section('title', 'Data Tugas Pokok & Fungsi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('fungsi.index')}}">Tugas Pokok & Fungsi</a></li>
    <li class="breadcrumb-item active">Edit Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('fungsi.update', $fungsi->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Tugas Pokok & Fungsi"
                        value="{{old('title') ?? $fungsi->title}}">
                    </div>

                    <div class="form-group">
                        <label for="body">Deskripsi</label>
                        <textarea class="form-control" name="body" id="summernote">{{old('body', $fungsi->body ?? '')}}</textarea>
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
