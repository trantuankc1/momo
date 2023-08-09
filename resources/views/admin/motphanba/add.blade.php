@extends('layouts.master')
@section('content')
    <div class="container text-capitalize">
        <h3 class="text-capitalize text-center">cài đặt một phần ba</h3>
        <form method="post" action="{{ route('store-mot-phan-ba') }}">
            @csrf
            @method('POST')
            <div class="form-group">
                <label>hạn mức Min</label>
                <input type="text" class="form-control"  placeholder="hạn mức min" name="price_min">
            </div>
            <div class="form-group">
                <label>hạn mức max</label>
                <input type="text" class="form-control"  placeholder="hạn mức max" name="price_max">
            </div>

            <div class="form-group">
                <label>tỉ lệ</label>
                <input type="text" class="form-control"  placeholder="tỉ lệ" name="tile">
            </div>

            <button type="submit" class="btn btn-primary text-capitalize">tạo</button>
        </form>
    </div>
@endsection
