@extends('layouts.master')
@section('content')
    <div class="container text-capitalize">
        <h3>cài đặt telegram</h3>
        <a href="{{ route('telegram-create') }}" class="btn btn-info">thêm link</a>
        <table class="table table-bordered table-bordered">
            <tr>
                <td>link</td>
                <td>xóa</td>
            </tr>
            <tbody>
                @foreach($telegram as $tl)
                    <tr>
                        <td>{{ $tl->link }}</td>
                        <td>
                            <form action="{{ route('telegram-delete', $tl->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
