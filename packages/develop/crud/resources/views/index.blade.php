@extends('viewpath::multiauth.layouts.app')


@section('content')
    <div class="container" style="text-align: center">
        <div class="row">

            <div class="col-md-12">

                <div>
                    <a href="{{route('create_data')}}"> <button class="btn btn-success" style="float: left;">Add Survey</button></a>

                    <h1><u>Listing of Survey</u></h1>
                </div>


                <br>
                <br>

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th style="text-align: center">Title</th>
                        <th  style="text-align: center">Published</th>
                        <th  style="text-align: center">Action</th>
                    </tr>
                    </thead>
                    <tbody style="text-align: center;">
                    @foreach($audit as $dataitem)

                        <tr>

                            <td>{{$dataitem->name}}</td>
                            <td>{{$dataitem->is_published == true ? 'Published': 'Unpublished'}}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#view/{{$dataitem->id}}">View
                                </button>
                                <a href="{{route('edit_data', $dataitem->id)}}">
                                    <button class="btn btn-warning">Update</button>
                                </a>

                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#delete/{{$dataitem->id}}">Delete
                                </button>
                            </td>
                        </tr>

                        @include('viewpath::delete_data')
                        @include('viewpath::view_data')

                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        <br>
    </div>
@endsection()
