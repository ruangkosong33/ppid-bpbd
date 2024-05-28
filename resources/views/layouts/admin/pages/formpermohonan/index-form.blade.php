@extends('layouts.admin.master.b-master')

@section('title', 'Data Formulir Permohonan Informasi Publik')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Formulir Permohonan</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('formpermohonan.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Nama Pemohon</th>
                        <th>Kategori DIP</th>
                        <th>Email</th>
                        <th>No-Telepon</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($formpermohonan as $key=>$p)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$p->name}}</td>
                            <td>{{$p->katdips->title}}</td>
                            <td>{{$p->email}}</td>
                            <td>{{$p->phone}}</td>
                            <td>
                                <a href="{{ route('formpermohonan.edit', $p->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{ route('formpermohonan.destroy', $p->id) }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{route('formpermohonan.show', $p->id)}}" class="btn btn-info btn-sm">
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
