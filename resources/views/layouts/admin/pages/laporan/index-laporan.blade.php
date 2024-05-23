@extends('layouts.admin.master.b-master')

@section('title', 'Data Laporan Tahunan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Laporan Tahunan</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('laporan.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tahun</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($laporan as $key=>$laporans)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$laporans->title}}</td>
                            <td>{{$laporans->year}}</td>
                            <td>
                                <a href="{{ route('laporan.edit', $laporans->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{ route('laporan.destroy', $laporans->id) }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{route('filelaporan.index', $laporans->id)}}" class="btn btn-info btn-sm">
                                    <i class="fas fa-list"></i>
                                </a>
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
