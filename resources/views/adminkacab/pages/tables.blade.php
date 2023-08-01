@extends('layouts.app')
@section('content')

<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Datatables</h5>
                        <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->

                        <!-- Table with stripped rows -->
                        <table class="table datatable" id="tables">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tempat Lahir</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Create At</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                        </table>
                        <!-- End Table with stripped rows -->
                </div>
            </div>
        </div>
        <div class="pull-right mb-2">
            <a class="btn btn-primary" onClick="add()" href="javascript:void(0)"> Tambahkan Data Anak</a>
        </div>
            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    </div>
    </section>
</main> <!-- End #main -->

<!-- Modal -->
<div class="modal fade" id="dataanak-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" >Data Anak</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" id="DataForm" name="DataForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="nama" class="">Nama</label>
                                <div class="col-sm-12">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Isi Nama" maxlength="50" required="">
                            </div>
                        </div>  
                        <div class="form-group">
                            <label class="">Tempat Lahir</label>
                                <div class="col-sm-12">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Isi Tempat Lahir" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="">Tanggal Lahir</label>
                                <div class="col-sm-12">
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="">Jenis Kelamin</label>
                                <div class="col-sm-12">
                                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Isi Jenis Kelamin" required="">
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-10"><br/>
                            <button type="submit" class="btn btn-primary" id="btn-save">Simpan</button>
                        </div>
                    </form>
                    {{ csrf_field() }}
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>  
</div> <!-- End Modal -->


<script type="text/javascript">
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#DataForm').submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'post',
            url: "{{ url('/store')}}",
            data : formData,
            cache: false,
            contentType: false,
            processData:false,
            success: (data) => {
                console.log(data);
                $("#dataanak-modal").modal('hide');
                $("#btn-save").html('Submit');
                $("#btn-save").attr("disabled", false);
            },
            error: function(data){
                console.log(data);
            }
        })
    });

        $('#tables').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{url('/tables')}}",
            columns:[
                { data: 'id', name: 'id' },
                { data: 'nama', name: 'nama' },
                { data: 'tempat_lahir', name: 'tempat_lahir' },
                { data: 'tanggal_lahir', name: 'tanggal_lahir' },
                { data: 'jenis_kelamin', name: 'jenis_kelamin' },
                { data: 'action', name: 'action' }, 
            ],
            order: [[0, 'desc']]
        });
    });

    function add(){
        $('#DataForm').trigger("reset");
        $('#DataModal').html("Add Data")
        $('#dataanak-modal').modal('show');
        $('#id').val('');
    }

    
</script>

@endsection