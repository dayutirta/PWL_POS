@extends('layout.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('transaksi/create') }}">Tambah</a>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Filter:</label>
                        <div class="col-3">
                            <select class="form-control" id="user_id" nama="user_id" required>
                                <option value="">-- Semua --</option>
                                @foreach ($user as $item)
                                    <option value="{{$item->user_id}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Level Pengguna</small>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-bordered table-striped table-hover table-sm" id="table_transaksi">
                <thead>
                    <tr><th>ID</th><th>Penjualan Kode</th><th>Nama</th><th>Pembeli</th><th>Harga</th><th>Aksi</th></tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('css')
@endpush

@push('js')
    <script>
         $(document).ready(function() {
            var dataUser = $('#table_transaksi').DataTable({
                serverSide: true,
                ajax: {
                    "url": "{{ url('/transaksi/list') }}",
                    "dataType": "json",
                    "type": "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    "data": function (d){
                        d.user_id =$('#user_id').val();
                    }
                },
                columns: [
                    { data: 'penjualan_id', className: 'text-center', orderable: true, searchable: false },
                    { data: 'penjualan_kode', className: '', orderable: true, searchable: true },
                    { data: 'user.nama', className: '', orderable: true, searchable: true },
                    { data: 'pembeli', className: '', orderable: false, searchable: false },
                    { data: 'detail.harga', className: '', orderable: true,searchable: true,
                            render: function (data, type, row) {
                            // Menggunakan fungsi Number.toLocaleString() untuk memformat harga
                            return Number(data).toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
                    }},
                    { data: 'aksi', className: '', orderable: false, searchable: false }
                ]
            });
            $('#user_id').on('change',function(){
                dataUser.ajax.reload();
            });
        });
    </script>
@endpush 