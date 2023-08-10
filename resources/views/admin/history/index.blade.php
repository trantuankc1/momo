@extends('layouts.master')
@section('content')
    <div class="container text-capitalize">
        <h3>lịch sử giao dịch</h3>
        <table class="table table-bordered table-hover">
            <tr>
                <td>STT</td>
                <td>loại</td>
                <td>mã giao dịch</td>
                <td>trạng thái</td>
                <td>nội dung</td>
                <td>tiền nhận</td>
                <td>thời gian</td>
            </tr>
            <tbody>
            <?php $stt = 1; ?>
                @foreach($bill as $detail)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $detail->game }}</td>
                        <td>{{ $detail->tran_id }}</td>
                        <td>
                            <form action="{{ route('update.game', $detail->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <select class="form-select text-uppercase" aria-label="Default select example" name="status">
                                    <option value="1" @if($detail->status == 1) selected @endif>chưa xử lý</option>
                                    <option value="2" @if($detail->status == 2) selected @endif>đã xử lý</option>
                                    <option value="3" @if($detail->status == 3) selected @endif>lỗi</option>
                                </select>
                                    <button class="btn btn-info mt-3" type="submit">cập nhật</button>
                            </form>
                        </td>
                        <td>{{ $detail->note }}</td>
                        <td>{{ $detail->price }}</td>
                        <td>{{ $detail->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
