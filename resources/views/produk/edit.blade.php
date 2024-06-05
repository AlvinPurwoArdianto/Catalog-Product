<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>produk</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{ asset('admin/css/metisMenu.min.css') }}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{ asset('admin/css/timeline.css') }}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset('admin/css/startmin.css') }}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{ asset('admin/css/morris.css') }}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

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

            {{-- CONTENT --}}
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Selamat Datang di produk</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Tambah Data produk
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form action="{{ route('produk.update', $produk->id) }}" method="POST" role="form" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label>Nama produk</label>
                                                    <input type="text" class="form-control" name="nama_produk" placeholder="Nama produk" value="{{$produk->nama_produk}}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Deskripsi</label>
                                                    <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" value="{{$produk->deskripsi}}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Harga</label>
                                                    <input type="number" class="form-control" name="harga" placeholder="Harga" value="{{$produk->harga}}">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Kategori</label>
                                                    <select class="form-control" name="id_kategori">
                                                        @foreach ($kategori as $data)
                                                            <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Supplier</label>
                                                    <select class="form-control" name="id_supplier">
                                                        @foreach ($supplier as $data)
                                                            <option value="{{ $data->id }}">{{ $data->nama_supplier }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Brand</label>
                                                    <select class="form-control" name="nama_brand">
                                                        @foreach ($supplier as $data)
                                                            <option value="{{ $data->id }}">{{ $data->nama_brand }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Gambar</label>
                                                    <img src="{{ asset('/images/produk/' . $produk->cover) }}" width="100">
                                                    <input type="file" class="form-control" name="cover">
                                                </div>
                                                <a href="{{route('produk.index')}}"class="btn btn-default">Kembali</a>
                                                <button type="submit" class="btn btn-default">Edit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset('admin/js/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('admin/js/metisMenu.min.js') }}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{ asset('admin/js/raphael.min.js') }}"></script>
        <script src="{{ asset('admin/js/morris.min.js') }}"></script>
        <script src="{{ asset('admin/js/morris-data.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('admin/js/startmin.js')}}"></script>

    </body>
</html>
