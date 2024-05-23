@extends('layouts.admin.master.b-master')

@section('title', 'Data Hak Atas Informasi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Hak Atas Informasi</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($hak->isEmpty())
                        <a href="{{route('hak.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($hak as $haks)
                        <a href="{{route('hak.edit', $haks->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($hak as $haks)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$haks->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$haks->body!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection
