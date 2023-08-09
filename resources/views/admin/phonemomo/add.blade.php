@extends('layouts.master')
@section('content')
    <div class="container text-capitalize">
        <form action="{{ route('store-add-momo') }}" method="post">
            @method('POST')
            @csrf
            <div class="form-group">
                <label>số điện thoại</label>
                <input type="text" class="form-control" aria-describedby="emailHelp"
                       name="sdt">
            </div>
            <div class="form-group">
                <label>trạng thái</label>
                <select class="form-select" aria-label="Default select example" name="status">
                    <option value="1">Active</option>
                    <option value="2">No Active</option>
                </select>
            </div>
            <div class="form-group">
                <label>số lượt</label>
                <input type="text" class="form-control" name="soluot">

            <div class="form-group">
                <label>tên chủ số momo</label>
                <input type="text" class="form-control" name="name">
            </div>

            <button type="submit" class="btn btn-primary">cập nhật</button>
        </form>
    </div>
@endsection
