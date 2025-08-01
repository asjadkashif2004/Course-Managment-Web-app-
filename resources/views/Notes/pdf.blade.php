<!DOCTYPE html>
<html>
<head>
    <title>{{ $note->title }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { text-align: center; }
        .content { margin-top: 20px; }
    </style>
</head>
<body>
    <h1>{{ $note->title }}</h1>
    <div class="content">{!! $note->content !!}</div>
</body>
</html>
