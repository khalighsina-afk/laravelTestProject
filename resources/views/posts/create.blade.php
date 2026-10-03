<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create</title>
</head>
<body>
    <h1>Create</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <lable>Title:</lable>
        <input type="text" name="title" id=" {{ old('title') }}">
        <lable>Body:</lable>
        <textarea name="body" cols="30">{{ old('body') }}</textarea>
        <button type="submit">Save</button>
    </form>


    @if($errors -> any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
</body>
</html>
