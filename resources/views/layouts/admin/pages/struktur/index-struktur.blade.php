@extends('layouts.admin.master.b-master')

@section('title', 'Struktur Organisasi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Struktur Organisasi</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($struktur->isEmpty())
                        <a href="{{route('struktur.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($struktur as $strukturs)
                        <a href="{{route('struktur.edit', $strukturs->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($struktur as $strukturs)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$strukturs->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$strukturs->body!!}</td>
                        </tr>
                        <tr>
                            <td width="38%">Gambar</td>
                            <td>{{asset('storage/image-struktur/' . $strukturs->image)}}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection
