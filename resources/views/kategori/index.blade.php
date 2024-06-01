<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('admin/css/metisMenu.min.css')}}" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="{{ asset('admin/css/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('admin/css/dataTables/dataTables.responsive.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/startmin.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('admin/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                {{-- AWAL NAVBAR --}}
                @include('layouts.navbar')
                {{-- AKHIR NAVBAR --}}

                {{-- AWAL SIDEBAR --}}
                @include('layouts.sidebar')
                {{-- AKHIR SIDEBAR --}}
            </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Kategori</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Kategori
                                <a href="{{ route('kategori.create') }}" class="btn btn-primary ms-4" style="float: right; margin-top: -7px;"  >Tambah</a>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover"
                                        id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach($kategori as $data)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $data->nama_kategori }}</td>
                                                <td>
                                                    <form action=" {{route('kategori.destroy', $data->id)}}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{route('kategori.show', $data->id)}}"
                                                            class="btn btn-success m-1">Ubah</a>
                                                        <a href="{{route('kategori.edit', $data->id)}}"
                                                            class="btn btn-warning m-1">Detail</a>
                                                        <button type="submit" class="btn btn-danger m-1">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('admin/js/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('admin/js/metisMenu.min.js')}}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{ asset('admin/js/dataTables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('admin/js/dataTables/dataTables.bootstrap.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('admin/js/startmin.js')}}"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
