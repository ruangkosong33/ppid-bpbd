@extends('layouts.admin.master.b-master')

@section('title', 'Data Notulen')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Notulen</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('notulen.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>File</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($notulen as $key=>$notulens)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$notulens->title}}</td>
                            <td><a href="{{ asset('storage/file-anggaran/' . $notulens->file) }}" download>{{$notulens->file}}</a></td>
                            <td>
                                <a href="{{route('notulen.edit', $notulens->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('notulen.destroy', $notulens->id)}}" class="d-inline">
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
