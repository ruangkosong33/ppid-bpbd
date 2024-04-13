@extends('layouts.admin.master.b-master')

@section('title', 'Waktu Layanan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Waktu Layanan</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($waktu->isEmpty())
                        <a href="{{route('waktu.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($waktu as $waktus)
                        <a href="{{route('waktu.edit', $waktus->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($waktu as $waktus)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$waktus->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$waktus->body!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection
