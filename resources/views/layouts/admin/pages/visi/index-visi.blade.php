@extends('layouts.admin.master.b-master')

@section('title', 'Visi & Misi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Visi & Misi</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($visi->isEmpty())
                        <a href="{{route('visi.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($visi as $visis)
                        <a href="{{route('visi.edit', $visis->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($visi as $visis)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$visis->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$visis->body!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection
