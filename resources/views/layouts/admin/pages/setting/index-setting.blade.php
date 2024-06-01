@extends('layouts.admin.master.b-master')

@section('title', 'Data Pengaturan Umum')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Pengaturan Umum</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($setting->isEmpty())
                        <a href="{{route('setting.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($setting as $settings)
                        <a href="{{route('setting.edit', $settings->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($setting as $settings)
                        <tr>
                            <td width="38%">Alamat Email</td>
                            <td>{{$settings->email}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Alamat Kantor</td>
                            <td>{{$settings->address}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Telepon Kantor</td>
                            <td>{{$settings->phone}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Link Facebook</td>
                            <td>{{$settings->link_fb}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Link Instagram</td>
                            <td>{{$settings->link_ig}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Link X Twitter</td>
                            <td>{{$settings->link_x}}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection
