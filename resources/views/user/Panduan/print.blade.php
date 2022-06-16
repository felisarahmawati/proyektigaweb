@extends('layouts.base')

@section('title', 'Pilih Materi')

@section('content')
    
<div class="row">
    <!-- /.col -->
    <div class="container-fluid">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Panduan Kesehatan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th style="text-align: center;">#</th>
                            <th style="text-align: center;">Judul</th>
                            <th style="text-align: center;">Kategori</th>
                            <th style="text-align: center;">Isi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($dataPanduan as $datas)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $datas->judul}}</td>
                            <td>{{ $datas->kategori}}</td>
                            <td>{!! $datas->isi !!}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

@endsection
