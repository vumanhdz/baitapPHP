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
                        <a href="{{route('artist.create')}}" class="btn btn-primary float-end">Them moi</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection