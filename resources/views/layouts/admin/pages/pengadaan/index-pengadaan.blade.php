@extends('layouts.admin.master.b-master')

@section('title', 'Data Pengadaan Barang & Jasa')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Pengadaan Barang & Jasa</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('pengadaan.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>File</th>
                        <th>Tanggal & Tahun</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($pengadaan as $key=>$pengadaans)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{Str::limit($pengadaans->title, '15', '...')}}</td>
                            <td><a href="{{ asset('storage/file-pengadaan/' . $pengadaans->file) }}" download>{{$pengadaans->file}}</a></td>
                            <td>{{ \Carbon\Carbon::parse($pengadaans->date)->format('d-m-Y') }}</td>
                            <td>
                                <a href="{{route('pengadaan.edit', $pengadaans->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('pengadaan.destroy', $pengadaans->id)}}" class="d-inline">
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
