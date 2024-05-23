@extends('layouts.admin.master.b-master')

@section('title', 'Data Standar Operasional Prosedur')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">SOP</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('sop.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($sop as $key=>$sops)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$sops->title}}</td>
                            <td>
                                <a href="{{route('sop.edit', $sops->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('sop.destroy', $sops->id)}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{route('filesop.index', $sops->id)}}" class="btn btn-info btn-sm">
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
