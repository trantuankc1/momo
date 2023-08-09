@extends('layouts.master')
@section('content')
    <div class="container text-capitalize">
        <h3>cài đặt tài xỉu</h3>
        <a href="{{ route('add-tai-xiu') }}" class="btn btn-primary">thêm</a>
        <table class="table table-bordered table-hover">
            <tr>
                <td>hạn mức min</td>
                <td>hạn mức max</td>
                <td>tỉ lệ</td>
            </tr>
            <tbody>
                @foreach($tx as $taixiu)
                    <tr>
                        <td>{{ $taixiu->price_min }}</td>
                        <td>{{ $taixiu->price_max }}</td>
                        <td>{{ $taixiu->tile }}</td>
                        <td><a href="{{ route('edit-tai-xiu', ['id' => $taixiu->id]) }}" class="btn btn-primary">sửa</a></td>
                        <td>
                            <form action="{{ route('tai-xiu-destroy', ['id' => $taixiu->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
