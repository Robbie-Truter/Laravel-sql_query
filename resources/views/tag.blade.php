<html>
<head>
    <title> Tag </title>
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
    @if ($slug === 'empty' )
        <h1>Replace empty field in url with a tag.</h1>

        <h3>Available Tags:
            <ul>
                <li>AI</li>
                <li>Google</li>
                <li>High-Performance Computing</li>
                <li>Singularity</li>
            </ul>
        </h3>

    @else
        <h2>Tag:</h2>
        <h3>You searched for {{$slug}} Tag:</h3>
        @foreach( $posts as $post )
            <p>{{ $post -> id }}</p>
            <p>{{ $post -> title }}</p>
            <p>{{ $post -> content }}</p>
            <p>{{ $post -> created }}</p>
            <p>{{ $post -> category }}</p>
            <p>{{ $post -> tags }}</p>
            <hr class="hrLine">
        @endforeach
    @endif
</div>
</body >

</html >
