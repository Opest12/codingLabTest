@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="border">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post -> name}}</td>
                                    <td>{{$post -> name}}</td>
                                    <td>{{$post -> description}}</td>
                                </tr>
                            @endforeach
                        </table>
                        <form method="POST" action="{{url('post')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <label>Name: </label><input type="text" name="name" vlaue=""/>{{$errors->first('name')}}<br>
                            <label>Description: </label><input type="text" name="description"
                                                               vlaue=""/>{{$errors->first('description')}}<br>
                            <input type="submit" value="Save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
