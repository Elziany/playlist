<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
    @if($errors->any())
    @foreach ($errors->all() as $error )
    <alert>{{$error}}</alert>
    @endforeach
    @endif

<form method='post' action="{{route('addCategory')}}">
    @csrf
   <lable>Name of Category :</lable>
    <input name='name' type='text'><br>

    <button type='submit'>create Category</button>
</form>
</body>
</html>
