@extends('layouts.admin.master.b-master')

@section('title', 'Data Agenda Kegiatan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Agenda Kegiatan</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('agenda.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($agenda as $key=>$agendas)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{Str::limit($agendas->title, '15', '...')}}</td>
                            <td>{{ \Carbon\Carbon::parse($agendas->date)->format('d-m-Y') }}</td>
                            <td>{!!$agendas->body!!}</td>
                            <td>
                                <a href="{{route('agenda.edit', $agendas->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('agenda.destroy', $agendas->id)}}" class="d-inline">
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
