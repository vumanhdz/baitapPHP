@extends('layout')

@section('content')
<div class="container">
        <h1>Thêm Nghệ Sĩ</h1>
        <form action="{{route('artist.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">ID:</label>
                <input type="text" class="form-control" name="id">
            </div>
            <div class="mb-3">
                <label for="artist_name" class="form-label">Artist_name:</label>
                <input type="text" class="form-control" name="artist_name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="mb-3">
                <select name="art_type" class="form-select">
                    <option value="hộ họa">hộ họa</option>
                    <option value="âm nhạc">âm nhạc</option>
                    <option value="văn học">văn học</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="media_link" class="form-label">Media_link:</label>
                <input type="text" class="form-control" name="media_link">
            </div>
            <div class="mb-3">
                <label for="cover_image" class="form-label">Cover_image</label>:</label>
                <input type="text" class="form-control" name="cover_image">
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a href="{{route('artist.index')}}" class="btn btn-primary">Quay lại</a>
        </form>
    </div>
@endsection