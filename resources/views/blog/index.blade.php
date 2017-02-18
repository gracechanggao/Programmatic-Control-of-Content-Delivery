<!DOCTYPE html>
<html>
<head>
<style> 
.flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
/*    font-weight: bold;*/
    text-align: center;

}

.flex-container > * {
    padding: 10px;
    flex: 1 100%;
/*    background: AliceBlue;*/
}

.main {
    text-align: left;
    
    font-family:"Comic Sans MS", cursive, sans-serif;
    
}

.header {
 font-family: "Arial Black", Gadget, sans-serif;
     font-size: 200%;
}


.aside {}
.button {
    background-color: threedface; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align:center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    
}

.button1 {border-radius: 2px;
          
     
}
footer {
  font-family: "Comic Sans MS", cursive, sans-serif;
  color:black;
 text-align: right;}

@media all and (min-width: 768px) {
    .aside { flex: 1 auto; }
    .main    { flex: 3 0px; }
    .aside { order: 1; } 
    .main    { order: 2; }
  
}
</style>

<head>
  <title>{{ config('blog.title') }}</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1>{{ config('blog.title') }}</h1>
    <h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
    <hr>
    <ul>
      @foreach ($posts as $post)
        <li>
          <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
          <em>({{ $post->published_at->format('M jS Y g:ia') }})</em>
          <p>
            {{ str_limit($post->content) }}
          </p>
        </li>
      @endforeach
    </ul>
    <hr>
    {!! $posts->render() !!}
  </div>
</body>

</html>