<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Playlist</title>
</head>
<body>

@if($errors->any())
    @foreach ($errors->all() as $error )
    <alert>{{$error}}</alert>
    @endforeach
    @endif
<form method="post" action="{{route('addPlaylist')}}" enctype="multipart/form-data">
    @csrf
    PlaylistName: <input name="name" type="text"><br>
    SingerName: <input name="singerName" type="text"><br>
    Image: <input name="image" type="file" accept="image/*"><br>
    Category:
    <select name="category_id">
        @foreach ($categories as $category )
            <option value="{{$category->id}}">
                {{$category->name}}
            </option>
        @endforeach

    </select><br>

    <button type="submit">submit</button>

</form>
</body>
</html>
