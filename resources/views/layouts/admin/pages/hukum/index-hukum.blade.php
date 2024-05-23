@extends('layouts.admin.master.b-master')

@section('title', 'Data Produk Hukum')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Produk Hukum</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('hukum.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>File</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($hukum as $key=>$hukums)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{Str::limit($hukums->title, '15', '...')}}</td>
                            <td><a href="{{ asset('storage/file-hukum/' . $hukums->file) }}" download>{{$hukums->file}}</a></td>
                            <td>{{ \Carbon\Carbon::parse($hukums->date)->format('d-m-Y') }}</td>
                            <td>
                                <a href="{{route('hukum.edit', $hukums->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('hukum.destroy', $hukums->id)}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{route('hukum.show', $hukums->id)}}" class="btn btn-info btn-sm">
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
