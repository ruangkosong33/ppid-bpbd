@extends('layouts.admin.master.b-master')

@section('title', 'Data Link Partner')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('partner.index')}}">Link Partner</a></li>
    <li class="breadcrumb-item active">Edit Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('partner.update', $partner->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Judul Link Partner"
                        value="{{old('title') ?? $partner->title}}">

                        @error('title')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control" id="image" name="image"
                                onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                            </div>

                            <div class="mt-3"><img src="{{asset('storage/image-partner/'. $partner->image)}}" id="output" width="150"></div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="link">Link Url</label>
                                <input type="text" class="form-control" name="link" placeholder="Link Url"
                                value="{{old('link') ?? $partner->link}}">

                            </div>
                        </div>

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
