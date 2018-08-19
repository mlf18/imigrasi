@extends('layouts.app')

@section('content')
    <center>  
        <h1>Cek Proses Pengaduan</h1>
        <p>Masukkan kode unik pengaduan pada nomer berikut</p>
    </center>
    <form action="{{url('/caripengaduan')}}" method="post">
        {{ csrf_field() }}
        Masukkan Kode Unik Pengaduan Anda (Kode dikirimkan oleh admin kami melalui email):
        <input type="text" name="kode_unik" id="kode_unik" class="form-control">
        <input type="submit" value="submit">
    </form>
    @if (session('hasil'))
        <table>
            <tr>
                <td>{{session('hasil')['nama']}}</td>
                <td>{{session('hasil')['judul']}}</td>
                <td>{{session('hasil')['created_at']}}</td>
                <td>{{session('hasil')['status']}}</td>
            </tr>
        </table>
    @endif
@endsection