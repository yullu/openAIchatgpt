<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>e Char GPT</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
        }
        .title:empty:before {
            content:attr(data-placeholder);
            color:gray
        }

    </style>

    <script src="https://unpkg.com/marked" defer></script>

</head>
<nav class="navbar fixed-top navbar-light bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" style="color: #ffffff;">Chat GPT Clone</a>
    </div>
</nav>

<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <h3>Welcome to Chat GPT Clone</h3>
    <p>&nbsp;<a href="{{ url('/text/generate') }}" class="btn btn-primary">Start Chat</a></p>
</div>

</body>
</html>
