@extends('layout')

@section('content')
<div class="container">
        <h1>Thêm bệnh nhân</h1>
        <form action="{{route('flower.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="mb-3">
                <label for="image_url" class="form-label">Img_url</label>:</label>
                <input type="text" class="form-control" name="image_url">
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a href="{{route('flower.index')}}" class="btn btn-primary">Quay lại</a>
        </form>
    </div>
@endsection