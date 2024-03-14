@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Quan Ly Sinh Vien</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('student.create')}}" class="btn btn-primary float-end">Them moi</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(Session::has('ThongBao'))
                <div class="alert alert-success">
                    {{Session::get('ThongBao')}}
                </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Ma SV</th>
                            <th scope="col">Ho Ten</th>
                            <th scope="col">Gioi Tinh</th>
                            <th scope="col">Ngay Sinh</th>
                            <th scope="col">So DT</th>
                            <th scope="col">Thao Tac</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $sv)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$sv->MaSV}}</td>
                            <td>{{$sv->HoTen}}</td>
                            <td>{{$sv->GioiTinh}}</td>
                            <td>{{$sv->NgaySinh}}</td>
                            <td>{{$sv->SoDT}}</td>
                            <td>
                                <form action="{{route('student.destroy', $sv->id)}}" method="POST">
                                    <a href="{{route('student.edit', $sv->id)}}" class="btn btn-info">Sua</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Xoa</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection