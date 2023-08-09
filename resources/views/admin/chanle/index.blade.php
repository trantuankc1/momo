@extends('layouts.master')
@section('content')
    <div class="container text-capitalize">
        <h3>cài đặt chẵn lẻ</h3>
        <a href="{{ route('add-chan-le') }}" class="btn btn-primary">thêm</a>
        <table class="table table-hover table-bordered">
            <tr>
                <td>hạn mức min</td>
                <td>hạn mức max</td>
                <td>tỉ lệ</td>
            </tr>
            <tbody>
                @foreach($chanle as $cl)
                    <tr>
                        <td>{{ $cl->price_min }}</td>
                        <td>{{ $cl->price_max }}</td>
                        <td>{{ $cl->tile }}</td>
                        <td><a href="{{ route('edit-chan-le', $cl->id) }}" class="btn btn-primary">sửa</a></td>
                        <td>
                            <form action="{{ route('chan-le-destroy', ['id' => $cl->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
