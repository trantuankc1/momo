@extends('layouts.master')
@section('content')
    <div class="container  text-capitalize">
        <h3>cài đặt một phần ba</h3>
        <form method="post" action="{{ route('update-mot-phan-ba', $motphanba->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>hạn mức Min</label>
                <input type="text" class="form-control"  placeholder="hạn mức min" name="price_min" value="{{ $motphanba->price_min }}">
            </div>
            <div class="form-group">
                <label>hạn mức max</label>
                <input type="text" class="form-control"  placeholder="hạn mức max" name="price_max" value="{{ $motphanba->price_max }}">
            </div>

            <div class="form-group">
                <label>tỉ lệ</label>
                <input type="text" class="form-control"  placeholder="tỉ lệ" name="tile" value="{{ $motphanba->tile }}">
            </div>

            <button type="submit" class="btn btn-primary text-capitalize">update</button>
        </form>
    </div>
@endsection
