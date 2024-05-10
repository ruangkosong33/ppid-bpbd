@extends('layouts.admin.master.b-master')

@section('title', 'File Kategori Informasi Publik')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('dip.index')}}">Data File Kategori DIP</a></li>
    <li class="breadcrumb-item active">Edit Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('dip.update', $dip->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="katdip_id">Kategori</label>

                        <select name="katdip_id" class="form-control @error('katdip_id') is-invalid @enderror">
                            <option disabled selected>--Pilih--</option>
                            @foreach ($katdip as $katdips)
                                <option value="{{ $katdips->id }}" {{ $katdips->id == $dip->katdip_id ? 'selected' : '' }}>
                                    {{ $katdips->title }}
                                </option>
                            @endforeach
                        </select>
                        
                    </div>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') ?? is-invalid @enderror" name="title" placeholder="File Kategori Daftar Informasi Publik"
                        value="{{old('title') ?? $dip->title}}">

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

                    <div class="form-group">
                        <label for="file">File (Existing)</label>
                        <input type="text" class="form-control" value="{{ $dip->file }}" readonly>
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
