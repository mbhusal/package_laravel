@extends('viewpath::temp.html')

@section('content')

    <h1><u>Update Data</u></h1>
    <br>
    <br>

    <form method="post" action="{{route('update_data', $audit->id)}}">
        {{csrf_field()}}
        <label for="name">Name:</label>
        <input type="text" class="form-group" id="name" placeholder="Enter Your Name" name="name"
               value="{{$audit->name}}">
        @if($errors->has('name'))
            <span class="error" style="color: red">{{$errors->first('name')}}</span>
        @endif()
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="is_published"> Publish the survey
            </label>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

@endsection