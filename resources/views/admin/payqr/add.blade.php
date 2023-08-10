@extends('layouts.master')
@section('content')
    <div class="container text-capitalize">
        <h3>cài đặt qr </h3>
        <form action="{{ route('store-add-qr') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label>Image QR</label>
            <input class="form form-control" type="file" name="image_qr">

            <label>SĐT QR</label>
            <input class="form form-control" type="text" name="sdt">

            <button class="btn btn-info mt-3">tạo</button>
        </form>
    </div>
@endsection
