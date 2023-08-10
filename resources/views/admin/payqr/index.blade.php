@extends('layouts.master')
@section('content')
    <div class="container text-capitalize">
        <h3>cài đặt qr </h3>
        <a href="{{ route('add-qr') }}" class="btn btn-info">tạo qr</a>

        <table class="table table-hover table-bordered">
            <tr>
                <td>SDT</td>
                <td>QR</td>
            </tr>
            <tbody>
                @foreach($payqr as $pay)
                    <tr>
                        <td>{{ $pay->sdt }}</td>
                        <td><img style="width: 50px; height: 50px" src="{{ Storage::url($pay->image_qr) }}" alt=""></td>
                        <td>
                            <form action="{{ route('destroy-pay-qr', ['id' => $pay->id]) }}" method="post">
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
