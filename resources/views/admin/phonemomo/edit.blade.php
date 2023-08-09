@extends('layouts.master')
@section('content')
    <div class="container text-capitalize">
        <form action="{{ route('update-phone', $phone->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label>số điện thoại</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" value="{{ $phone->sdt }}"
                       name="sdt">
            </div>
            <div class="form-group">
                <label>trạng thái</label>
                <select class="form-select" aria-label="Default select example" name="status">
                    <option value="1" @if($phone->status == 1) selected @endif>Active</option>
                    <option value="2" @if($phone->status == 2) selected @endif>No Active</option>
                </select>
            </div>
            <div class="form-group">
                <label>số lượt</label>
                <input type="text" class="form-control" value="{{ $phone->soluot }}" name="soluot">
            </div>

            <div class="form-group">
                <label>tên chủ số momo</label>
                <input type="text" class="form-control" value="{{ $phone->name }}" name="name">
            </div>

            <button type="submit" class="btn btn-primary">cập nhật</button>
        </form>
    </div>
@endsection
