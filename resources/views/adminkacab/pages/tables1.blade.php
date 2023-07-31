@extends('layouts.app')
@section('content')

<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>

<div class="container-fluid py-4">
    <div class="row">
    <div class="col-12">
        <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h5 class="text-white text-capitalize ps-3">Data Anak</h5>
            </div>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
            <table class="table align-items-center mb-0" id="tables">
                <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tempat Lahir</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Lahir</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Kelamin</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Create At</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                    <th class="text-secondary opacity-7"></th>
                </tr>
                </thead>
            </table>
            </div>
        </div>
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


<script type="text/javascript">
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

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

    $('#DataForm').submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: "{{ url('/store')}}",
            data : formData,
            cache:false,
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
</script>

@endsection