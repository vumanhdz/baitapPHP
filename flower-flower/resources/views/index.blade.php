@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Quản Lý Nghệ Sĩ</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('flower.create')}}" class="btn btn-primary float-end">Them moi</a>
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
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Img-url</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($flowers as $ar)
                        <tr>
                            <td>{{$ar->id}}</td>
                            <td>{{$ar->name}}</td>
                            <td>{{$ar->description}}</td>
                            <td>{{$ar->image_url}}</td>
                            <td>
                                <form action="{{route('flower.destroy', $ar->id)}}" method="POST">                                    
                                    <a href="{{route('flower.edit', $ar->id)}}" class="btn btn-info">edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">delete</button>
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