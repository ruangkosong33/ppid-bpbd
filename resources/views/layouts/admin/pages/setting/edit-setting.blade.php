@extends('layouts.admin.master.b-master')

@section('title', 'Data Pengaturan Umum')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('setting.index')}}">Pengaturan Umum</a></li>
    <li class="breadcrumb-item active">Edit Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('setting.update', $setting->id)}}" method="POST">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="row">
        
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Alamat Email"
                                value="{{old('email') ?? $setting->email}}">

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Alamat Kantor</label>
                                <input type="text" class="form-control" name="address" placeholder="Alamat Kantor"
                                value="{{old('address') ?? $setting->address}}">

                            </div>
                        </div>
                    
                    </div>

                    <div class="row">
        
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phone">Nomor Telepon</label>
                                <input type="number" class="form-control" name="phone" placeholder="Nomor Telepon"
                                value="{{old('phone') ?? $setting->phone}}">

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="link_ig">Link Facebook</label>
                                <input type="text" class="form-control" name="link_fb" placeholder="Link Facebook"
                                value="{{old('link_fb') ?? $setting->link_fb}}">

                            </div>
                        </div>
                    
                    </div>

                    <div class="row">
        
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="link_ig">Link Instagram</label>
                                <input type="text" class="form-control" name="link_ig" placeholder="Link Instagram"
                                value="{{old('link_ig') ?? $setting->link_ig}}">

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="link_ig">Link X Twitter</label>
                                <input type="text" class="form-control" name="link_x" placeholder="Link X Twitter"
                                value="{{old('link_x') ?? $setting->link_x}}">

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
