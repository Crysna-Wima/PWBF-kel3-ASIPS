@extends('layout.tables')
@section('tables')
<h1 class="h3 mb-2 text-gray-800">Tables Kelurahan</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahKelurahan">Tambah</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID_Kelurahan</th>
                                            <th>ID_kecamatan</th>
                                            <th>Kelurahan</th>
                                            <th>Created_at</th>
                                            <th>Updated at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kelurahan as $item)
                                        <tr>
                                            <td>{{ $item->ID_KELURAHAN }}</td>
                                            <td>{{ $item->ID_KECAMATAN }}</td>
                                            <td>{{ $item->KELURAHAN }}</td>
                                            <td>{{ $item->CREATED_AT }}</td>
                                            <td>{{ $item->UPDATED1_AT }}</td>
                                            <td>
                                                <a href="/kelurahan/edit/{{ $item->ID_KELURAHAN }}"> <img src="assets/img/edit.svg" alt="edit" style="max-width: 27%;"></a> |
                                                <a href="#"> <img src="assets/img/delete.svg" alt="hapus" style="max-width: 25%;"></a>
                                            </td>                                         
                                        </tr>
                                        @endforeach                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection