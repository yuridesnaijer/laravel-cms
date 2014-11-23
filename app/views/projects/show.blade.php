<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('projects') }}">Projects</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('projects') }}">View All Projects</a></li>
        <li><a href="{{ URL::to('projects/create') }}">Create a Project</a>
    </ul>
</nav>

<h1>Showing {{ $project->title }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $project->title }}</h2>
        <p>
            <strong>Title:</strong> {{ $project->title }}<br>
            <strong>Text:</strong> {{ $project->text }}
        </p>
    </div>

</div>
</body>
</html>