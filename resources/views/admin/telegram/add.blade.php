@extends('layouts.master')
@section('content')
    <div class="container text-capitalize">
        <h3>tạo link</h3>
        <form action="{{ route('store-telegram') }}" method="post">
            @csrf
            <label>link</label>
            <input class="form form-control" type="text" name="link">
            <button class="btn btn-info mt-2">tạo</button>
        </form>
    </div>
@endsection
