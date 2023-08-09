@extends('layouts.master')
@section('content')
    <div class="container text-capitalize">
        <h3>cài đặt một phần ba</h3>
        <a href="{{ route('add-mot-phan-ba') }}" class="btn btn-info">thêm</a>
        <table class="table table-bordered table-hover">
            <tr>
                <td>hạn mức min</td>
                <td>hạn mức max</td>
                <td>tỉ lệ</td>
            </tr>
            <tbody>
                @foreach($mpb as $motpb)
                    <tr>
                        <td>{{ $motpb->price_min }}</td>
                        <td>{{ $motpb->price_max }}</td>
                        <td>{{ $motpb->tile }}</td>
                        <td><a href="{{ route('mot-phan-ba-edit', ['id' => $motpb->id]) }}" class="btn btn-info">sửa</a></td>
                        <td>
                            <form action="{{ route('delete-mot-phan-ba', $motpb->id) }}" method="post">
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
