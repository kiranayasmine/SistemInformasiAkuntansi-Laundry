@extends('admin.main')

@section('css')
<link href="{{asset('vendor/datatables-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{asset('vendor/datatables-responsive/css/responsive.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('main-content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Input Transaksi</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @elseif (session('warning'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('warning') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @elseif (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="{{url('admin/tambah-transaksi')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="id-member" class="col-sm-2 col-form-label">ID Member</label>
                                <div class="col-sm-2">
                                    <input type="number" min="1" class="form-control" id="id-member" name="id_member"
                                        @if (isset($id_member_transaksi)) value="{{$id_member_transaksi}}" disabled
                                        title="Harap selesaikan transaksi yang ada untuk mengganti id member" @endif
                                        required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="barang" class="col-sm-2 col-form-label">Barang</label>
                                <div class="col-sm-4">
                                    <select class="form-control" id="barang" name="barang">
                                        @foreach ($barang as $item)
                                        <option value="{{$item->id_barang}}">{{$item->nama_barang}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="servis" class="col-sm-2 col-form-label">Servis</label>
                                <div class="col-sm-4">
                                    <select class="form-control" id="servis" name="servis">
                                        @foreach ($servis as $item)
                                        <option value="{{$item->id_servis}}">{{$item->nama_servis}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-4">
                                    <select class="form-control" id="kategori" name="kategori">
                                        @foreach ($kategori as $item)
                                        <option value="{{$item->id_kategori}}">{{$item->nama_kategori}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="banyak" class="col-sm-2 col-form-label">Banyak</label>
                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus" data-field="">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="banyak" class="form-control input-number"
                                            value="1" min="1" max="100">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                                data-type="plus" data-field="">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" id="tambah-transaksi" class="btn btn-primary">Tambah
                                        Transaksi</button>
                                </div>
                            </div>
                        </form>
                        <table id="tbl-input-transaksi" class="table mt-2 dt-responsive nowrap" style="width: 100%">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Barang</th>
                                    <th>Servis</th>
                                    <th>Kategori</th>
                                    <th>Banyak</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($transaksi))
                                @foreach ($transaksi as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item['nama_barang']}}</td>
                                    <td>{{$item['nama_servis']}}</td>
                                    <td>{{$item['nama_kategori']}}</td>
                                    <td>{{$item['banyak']}}</td>
                                    <td>{{$item['harga']}}</td>
                                    <td>
                                        <a href="{{url('admin/hapus-transaksi') . '/' . $item['row_id']}}"
                                            class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        @if (isset($transaksi))
                        <a href="{{url('admin/simpan-transaksi')}}" class="btn btn-success">Simpan Transaksi</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('scripts')
<script src="{{asset('js/quantity-increment.js')}}"></script>
<script src="{{asset('js/input-transaksi.js')}}"></script>
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendor/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendor/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tbl-input-transaksi').DataTable({
            "searching": false,
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": false,
            "bInfo": false
        });
    });
</script>

@if (session('id_trs'))
<script type="text/javascript">
    window.open('{{url('admin/cetak-transaksi' . '/' . session('id_trs'))}}', '_blank');
</script>
@endif
@endsection