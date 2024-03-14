@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Borrowing</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('book.edit')}}" class="btn btn-primary float-end">Add</a>
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
                            <th scope="col">BorrowingID</th>
                            <th scope="col">BookID</th>
                            <th scope="col">MemberID</th>
                            <th scope="col">BorrowDate</th>
                            <th scope="col">DueDate</th>
                            <th scope="col">ReturnedDate</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $ar)
                        <tr>
                            <td>{{$ar->BorrowingID}}</td>
                            <td>{{$ar->BookID}}</td>
                            <td>{{$ar->MemberID}}</td>
                            <td>{{$ar->BorrowDate}}</td>
                            <td>{{$ar->DueDate}}</td>
                            <td>{{$ar->ReturnedDate}}</td>
                            <td>
                                <form action="" method="POST"> 
                                   <a href="" class="btn btn-info">view</a>                                   
                                    <a href="" class="btn btn-info">edit</a>
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