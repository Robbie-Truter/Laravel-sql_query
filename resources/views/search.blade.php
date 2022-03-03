<html>
<head>
    <title> Search </title>
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

    <p style="color: white;padding:10px;margin-left: 20px;">Placeholder text:<br>
        I use Lorem Ipsum for the article content.<br><br>What is Lorem Ipsum?:
        <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        <br><br>Copyright &copy; 2011-<?php echo date("Y"); ?> Laravel LLC.</p>

    @component('components/cookie')
    @endcomponent
</ul>


<div class="content">
    <h2> Search: </h2>

    <form method="get">
        <label for="idNum">Search by ID: <br></label>
        <input name="id" placeholder="Enter ID" type="number">
        <button type="submit" value="Submit">Search</button>
        <hr>
    </form>

    <form method="get">
        <label for="Tag">Search by tag: <br></label>
        <input name="tags" id="Tag" placeholder="Enter Tag" type="text">
        <button type="submit" value="Submit">Search</button>
        <hr>
    </form>

    <form method="get">
        <label for="Cat">Search by category: <br></label>
        <input name="category" id="Cat" placeholder="Enter Category" type="text">
        <button type="submit" value="Submit">Search</button>
        <hr>
    </form>

@foreach( $posts as $post )
        <p>{{ $post -> id }}</p>
        <p>{{ $post -> title }}</p>
        <p>{{ $post -> content }}</p>
        <p>{{ $post -> created }}</p>
        <p>{{ $post -> category }}</p>
        <p>{{ $post -> tags }}</p>
        <hr class="hrLine">
    @endforeach

    @foreach( $posts2 as $post2 )
        <p>{{ $post2 -> id }}</p>
        <p>{{ $post2 -> title }}</p>
        <p>{{ $post2 -> content }}</p>
        <p>{{ $post2 -> created }}</p>
        <p>{{ $post2 -> category }}</p>
        <p>{{ $post2 -> tags }}</p>
        <hr class="hrLine">
    @endforeach

    @foreach( $posts3 as $post3 )
        <p>{{ $post3 -> id }}</p>
        <p>{{ $post3 -> title }}</p>
        <p>{{ $post3 -> content }}</p>
        <p>{{ $post3 -> created }}</p>
        <p>{{ $post3 -> category }}</p>
        <p>{{ $post3 -> tags }}</p>
        <hr class="hrLine">
    @endforeach


</div>

</body >

</html >
