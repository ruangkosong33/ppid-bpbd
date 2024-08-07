@extends('layouts.guest.master.f-master')

@push('css_vendor')

    <style>
        .bg {
            background-color: #1e6c6e;
            border-radius: 10px 10px 0 0;
            background-image: linear-gradient(to bottom right, #1e6c6e, #2b8a8c);
        }

        .table {
            margin-bottom: 0;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 10px;
            overflow: hidden;
        }

        .table thead th {
            background-color: #0f58b8;
            color: white;
            padding: 15px;
            border: none;
        }

        .table tbody tr {
            background-color: #ffffff;
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
            border-radius: 10px;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
            transform: scale(1.01);
            box-shadow: 0 4px 10px rgba(13, 13, 203, 0.3), 0 4px 20px rgba(0, 255, 0, 0.3), 0 4px 30px rgba(0, 0, 255, 0.3);
        }

        .table td, .table th {
            vertical-align: middle;
            border: none;
        }

        .table td {
            padding: 15px;
        }

        .table-responsive {
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(3, 212, 52, 0.3), 0 4px 20px rgba(106, 255, 0, 0.3), 0 4px 30px rgba(0, 0, 255, 0.3);
        }

        .btn-info {
            background-color: #1e6c6e;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
        }

        .btn-info:hover {
            background-color: #155354;
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(255, 0, 0, 0.3), 0 4px 20px rgba(0, 255, 0, 0.3), 0 4px 30px rgba(0, 0, 255, 0.3);
        }

        .btn-info:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
    </style>
    
@endpush

@section('title', 'Surat Keputusan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{route('beranda')}}">Beranda</a></li>
    <li class="breadcrumb-item">Profil</li>
    <li class="breadcrumb-item active" aria-current="page">Surat Keputusan</li>
@endsection

@section('content')

    <section class="project-details-area pt-50 pb-120">
        <div class="container">

            <div class="section-title-two text-center mb-50">
                <span class="sub-title">Surat Keputusan PPID</span>
            </div>

            <div class="col-12 col-md-12 order-md-0">
                <div class="result_content">
                    <div class="row justify-content-center">
                        <div class="col-md-11">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead class="bg text-white">
                                        <tr>
                                            <th class="text-center">NO</th>
                                            <th class="text-center">JUDUL</th>
                                            <th class="text-center">TANGGAL DI TETAPKAN</th>
                                            <th class="text-center">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($keputusans as $key=>$k)
                                        <tr>
                                            <td class="text-center">{{ $key+1 }}</td>
                                            <td class="text-center">{{ $k->title }}</td>
                                            <td class="text-center">{{ date('d-m-Y', strtotime($k->date)) }}</td>
                                            <td class="text-center"><a href="{{ route('detail.keputusan', $k->slug) }}" class="btn btn-info btn-sm">Lihat</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        {{-- {{ $keputusans->links() }} --}}
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
