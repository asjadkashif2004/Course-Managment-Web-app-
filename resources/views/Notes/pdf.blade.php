<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $note->title }}</title>
    <style>
        body {
            font-family: sans-serif;
            line-height: 1.5;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .content {
            white-space: pre-line;
        }
    </style>
</head>
<body>
    <h1>{{ $note->title }}</h1>
    <div class="content">
        {!! $note->content !!}
    </div>
</body>
</html>
