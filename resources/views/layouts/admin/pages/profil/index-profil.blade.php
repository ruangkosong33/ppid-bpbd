@extends('layouts.admin.master.b-master')

@section('title', 'Profil PPID')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Profil PPID</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($profil->isEmpty())
                        <a href="{{route('profil.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($profil as $profils)
                        <a href="{{route('profil.edit', $profils->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($profil as $profils)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$profils->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$profils->body!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection
