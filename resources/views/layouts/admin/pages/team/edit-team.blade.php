@extends('layouts.admin.master.b-master')

@section('title', 'Data Tim PPID')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('team.index')}}">Tim PPID</a></li>
    <li class="breadcrumb-item active">Edit Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('team.update', $team->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" name="name" placeholder="Nama Lengkap"
                                value="{{old('name') ?? $team->name}}">

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="job">Jabatan</label>
                                <input type="text" class="form-control" name="job" placeholder="Jabatan"
                                value="{{old('job') ?? $team->job}}">

                            </div>
                        </div>

                    </div>

                    <div class="row">   
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control" id="image" name="image"
                                onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                            </div>

                            <div class="mt-3"><img src="{{asset('storage/image-team/' . $team->image)}}" id="output" width="150"></div>

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
