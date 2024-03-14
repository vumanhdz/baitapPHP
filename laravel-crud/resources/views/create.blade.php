@extends('layout')

@section('content')
<div class="container">
        <h1>Thêm bệnh nhân</h1>
        <form action="{{route('student.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="MaSV" class="form-label">MaSV:</label>
                <input type="text" class="form-control" name="MaSV">
            </div>
            <div class="mb-3">
                <label for="HoTen" class="form-label">HoTen:</label>
                <input type="text" class="form-control" name="HoTen">
            </div>
            <div class="mb-3">
                <select name="GioiTinh" class="form-select">
                    <option value="">Chon gioi tinh</option>
                    <option value="Nam">Nam</option>
                    <option value="Nu">Nu</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="NgaySinh" class="form-label">NgaySinh:</label>
                <input type="date" class="form-control" name="NgaySinh">
            </div>
            <div class="mb-3">
                <label for="SoDT" class="form-label">SoDT</label>:</label>
                <input type="text" class="form-control" name="SoDT">
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a href="{{route('student.index')}}" class="btn btn-primary">Quay lại</a>
        </form>
    </div>
@endsection