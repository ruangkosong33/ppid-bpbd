@extends('layouts.admin.master.b-master')

@section('title', 'Definisi Informasi Publik')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Definisi Informasi Publik</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($definisi->isEmpty())
                        <a href="{{route('definisi.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($definisi as $definisis)
                        <a href="{{route('definisi.edit', $definisis->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($definisi as $definisis)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$definisis->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$definisis->body!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection
