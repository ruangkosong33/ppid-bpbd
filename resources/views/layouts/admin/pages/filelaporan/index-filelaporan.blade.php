@extends('layouts.admin.master.b-master')

@section('title', 'Data File Laporan Tahunan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('laporan.index')}}">Laporan Tahunan</a></li>
    <li class="breadcrumb-item active">File Laporan Tahunan</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{ route('filelaporan.create', $laporan->id) }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>File</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($laporan->filelaporans as $key=>$filelaporans)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$filelaporans->title}}</td>
                            <td><a href="{{ asset('storage/file-laporan/' . $filelaporans->file) }}" download>{{$filelaporans->file}}</a></td>
                            <td>
                                <a href="{{route('filelaporan.edit', ['laporan'=>$laporan, 'filelaporan'=>$filelaporans])}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('filelaporan.destroy', ['laporan'=>$laporan, 'filelaporan'=>$filelaporans])}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection

@include('include.datatable')

    @push('script')

        <script>
            $('.table').DataTable();
        </script>

    @endpush
