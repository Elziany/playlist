<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>addSong</title>
</head>
<body>
<h1>addSongPage</h1>

<form method="post" action="{{route('addNewSong')}}" enctype="multipart/form-data">
    @csrf
    SongName: <input name="name" type="text"><br>
    SingerName: <input name="singerName" type="text"><br>
    Album_id: <input name="alum_id" type="number"><br>
    logo: <input name="logo" type="file" accept="image/*"><br>
    sound: <input name="sound" type="file" accept="audio/*"><br>

    <button type="submit">submit</button>

</form>


</body>

</html>
