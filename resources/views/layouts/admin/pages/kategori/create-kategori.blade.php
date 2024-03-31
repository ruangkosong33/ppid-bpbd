@extends('layouts.admin.master.b-master')

@section('title', 'Kategori')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('kategori.index')}}">Data Kategori</a></li>
    <li class="breadcrumb-item active">Tambah Kategori</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('kategori.store')}}" method="POST">
                @csrf
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Kategori">

                        @error('title')
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
