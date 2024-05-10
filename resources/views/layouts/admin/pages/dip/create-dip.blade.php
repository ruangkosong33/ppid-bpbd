@extends('layouts.admin.master.b-master')

@section('title', 'File Kategori Informasi Publik')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('dip.index')}}">Data File Kategori DIP</a></li>
    <li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('dip.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-card>

                    <div class="form-group">
                        <label for="katdip_id">Kategori</label>

                        <select name="katdip_id" class="form-control @error('katdip_id') is-invalid @enderror">

                            <option disabled selected>--Pilih--</option>
                                @foreach ($katdip as $katdips)
                            <option value={{$katdips->id}}>{{$katdips->title}}</option>
                                @endforeach

                        </select>

                        @error('katdip_id')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') ?? is-invalid @enderror" name="title" placeholder="File Kategori Daftar Informasi Publik">

                        @error('title')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="file">File</label>
                        <input type="file" class="form-control @error('file') ?? is-invalid @enderror" name="file">

                        @error('file')
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

@push('script')
    @include('include.summernote')
@endpush
