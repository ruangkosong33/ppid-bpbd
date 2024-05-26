@extends('layouts.admin.master.b-master')

@section('title', 'Data Formulir Pengajuan Keberatan Informasi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Formulir Pengajuan</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('formpengajuan.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Nama Pemohon</th>
                        <th>Email</th>
                        <th>Nomor KTP</th>
                        <th>Telepon/HP</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($formpengajuan as $key=>$k)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$k->name}}</td>
                            <td>{{$k->email}}</td>
                            <td>{{$k->ktp}}</td>
                            <td>{{$k->phone}}</td>
                            <td>
                                <a href="{{route('formpengajuan.edit', $k->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('formpengajuan.destroy', $k->id)}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{route('formpengajuan.show', $k->id)}}" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
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
