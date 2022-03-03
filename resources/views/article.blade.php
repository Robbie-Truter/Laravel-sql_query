<html>
<head>
    <title> Article </title>
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

    @if ($id === 'empty' )
        <h1>Replace empty field in url with id: 1-5.</h1>
        <h3>Available ID's:
            <ul>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
            </ul>
        </h3>
    @else
        <h2>Article</h2>

        <h3>You searched for id {{$id}}:</h3>
        @foreach( $posts as $post )
            <p>{{$post}}</p>
        @endforeach
        <hr class="hrLine">
    @endif

</div>

</body >

</html >
