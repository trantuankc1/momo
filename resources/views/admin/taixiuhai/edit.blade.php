@extends('layouts.master')
@section('content')
    <div class="container text-capitalize">
        <h3 class="text-capitalize text-center">cài đặt tài xỉu hai</h3>
        <form method="post" action="{{ route('update-tai-xiu-hai', $taixiu->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>hạn mức Min</label>
                <input type="text" class="form-control"  placeholder="giá min" name="price_min" value="{{ $taixiu->price_min }}">
            </div>
            <div class="form-group">
                <label>hạn mức max</label>
                <input type="text" class="form-control"  placeholder="giá max" name="price_max" value="{{ $taixiu->price_max }}">
            </div>

            <div class="form-group">
                <label>tỉ lệ</label>
                <input type="text" class="form-control"  placeholder="tỉ lệ" name="tile" value="{{ $taixiu->tile }}">
            </div>

            <button type="submit" class="btn btn-primary text-capitalize">update</button>
        </form>
    </div>
@endsection
