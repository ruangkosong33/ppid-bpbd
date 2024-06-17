@extends('layouts.admin.master.b-master')

@section('title', 'Data Surat Keputusan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('keputusan.index')}}">Surat Keputusan</a></li>
    <li class="breadcrumb-item active">Edit Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('keputusan.update', $keputusan->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Surat Keputusan"
                        value="{{old('title') ?? $keputusan->title}}">
                    </div>

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="date">Tanggal Di Tetapkan</label>
                                <input type="date" class="form-control" name="date"
                                value="{{old('date') ?? $keputusan->date}}">

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="file">File</label>
                                <input type="file" class="form-control" name="file">
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="file">File (Existing)</label>
                        <input type="text" class="form-control" value="{{ $keputusan->file }}" readonly>
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
