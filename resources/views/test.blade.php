<html>
<head>
    <title> test </title>
    <link rel="stylesheet" type="text/css" href="{{ url('/test.css') }}" />
</head>

<body>

<ul class="sidenav">
    <li><a href= " {{ url('/') }} " > Home </a></li>
    <li><a href= " {{ url('/article/empty') }} " > Article view </a></li>
    <li><a href= " {{ url('/category/empty') }} " > Category view </a></li>
    <li><a href= " {{ url('/tag/empty') }} " > Tag view </a></li>
    <li><a href= " {{ url('/legal') }} " > Legal view </a></li>
    <li><a href= " {{ url('/search') }} " > Search Data </a></li>
</ul>

<div class="content">
    <h1> test </h1>

    <br>
    <br>

    <h1>Storing Form data in Database</h1>

    <form method="get">
        <label for="idNum">ID:</label>
        <input type="text" name="id" id="idNum">
        <input type="submit" value="Submit">
    </form>



    <h3>Test results</h3>
    @foreach( $posts as $post )
        <p>{{ $post -> id }}</p>
        <p>{{ $post -> title }}</p>
        <p>{{ $post -> content }}</p>
        <p>{{ $post -> created }}</p>
        <p>{{ $post -> category }}</p>
        <p>{{ $post -> tags }}</p>
        <hr class="hrLine">
    @endforeach

</div>

</body >

</html >
