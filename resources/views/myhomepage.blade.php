<!DOCTYPE html>
<html>
<head>
<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: rgb(88,133,191);
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
</style>
</head>
<body>

<div class="container">

<header>
   <h1>City Gallery</h1>
</header>

<nav>
  <ul>
    <li><a href="#">Profile</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">Message Board</a></li>
  </ul>
</nav>

<article>
    @foreach ($article_all as $article)
        <h3>{{$article->title}}</h3>
        <p>{{$article->content}}</p>
    @endforeach
</article>

<footer>Bill_WEB</footer>

</div>

</body>
</html>
