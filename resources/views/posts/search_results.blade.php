<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h2>Search Results for "{{ $query }}"</h2>

    @if($posts->isEmpty())
        <p>No articles found.</p>
    @else
        <ul>
            @foreach($posts as $post)
                <li>
                    <a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
