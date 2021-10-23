@extends('layout.tables')
@section('tables')
<h1 class="h3 mb-2 text-gray-800">Tables Balita</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahBalita">Tambah</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID_Balita</th>
                                            <th>ID_Posyandu</th>
                                            <th>Nama_Balita</th>
                                            <th>NIK_Orang_Tua</th>
                                            <th>Nama_Orang_Tua</th>
                                            <th>Tgl_Lahir_Balita</th>
                                            <th>Jenis_Kelamin_Balita</th>
                                            <th>Status</th>
                                            <th>Created_at</th>
                                            <th>Update_at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($balita as $item)
                                        <tr>
                                            <td>{{ $item->ID_BALITA }}</td>
                                            <td>{{ $item->ID_POSYANDU }}</td>
                                            <td>{{ $item->NAMA_BALITA }}</td>
                                            <td>{{ $item->NIK_ORANG_TUA }}</td>
                                            <td>{{ $item->NAMA_ORANG_TUA }}</td>
                                            <td>{{ $item->TGL_LAHIR_BALITA }}</td>
                                            <td>{{ $item->JENIS_KELAMIN_BALITA }}</td>
                                            <td>{{ $item->STATUS }}</td>
                                            <td>{{ $item->CREATED_AT }}</td>
                                            <td>{{ $item->UPDATED_AT }}</td>
                                            <td>
                                                <a href="/balita/edit/{{ $item->ID_BALITA }}"> <img src="assets/img/edit.svg" alt="edit" style="max-width: 27%;"></a> |
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