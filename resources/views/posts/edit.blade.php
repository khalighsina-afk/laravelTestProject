<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
</head>
<body>
    <h1>Edit post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT');

        <label>Title =</label>
        <input type="text" name="title" value="{{ old('title', $post->title) }}">
        <label>Body =</label>
        <textarea name="body" cols="30" rows="10">{{ old('body', $post->body) }}</textarea>
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
