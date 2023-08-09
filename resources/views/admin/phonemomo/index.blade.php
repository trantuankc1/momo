@extends('layouts.master')
@section('content')
    <div class="container text-uppercase">
        <h3>danh sách momo</h3>
        <a href="{{ route('add-momo') }}" class="btn btn-primary">thêm momo</a>
        <table class="table table-bordered table-hover">
            <tr>
                <td>stt</td>
                <td>sđt</td>
                <td>số lượt</td>
                <td>tên momo</td>
                <td>thời gian tạo</td>
                <td>trạng thái</td>
                <td>sửa</td>
                <td>xóa</td>
            </tr>
            <tbody>
            <?php $stt = 1; ?>
                @foreach($phones as $phone)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $phone->sdt }}</td>
                        <td>{{ $phone->soluot }}</td>
                        <td>{{ $phone->name }}</td>
                        <td>{{ $phone->created_at }}</td>
                        <td>@if($phone->status == 1) <span class="btn btn-info">active</span>@else <span class="btn btn-danger">No Active</span> @endif</td>
                        <td><a href="{{ route('update-phone', $phone->id) }}" class="btn btn-primary">Sửa</a></td>
                        <td>
                            <form action="{{ route('destroy-sdt-momo', $phone->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('chắc chắn xóa')">xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
