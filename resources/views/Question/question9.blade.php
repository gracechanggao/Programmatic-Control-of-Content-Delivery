<!DOCTYPE html>
<html>
<head>
<style> 
.flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
    background: AliceBlue 
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

.article {
    text-align: center;
}

header { 
    font-family: "Arial Black", Gadget, sans-serif;
     
     color:black;}


footer {

 font-family: "Comic Sans MS", cursive, sans-serif;
 color:black;
 text-align: right;}



@media all and (min-width: 768px) {

    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;}
}
</style>
</head>
<body>

<div class="flex-container">
<header>
  <h1>Question One</h1>
</header>


<article class="article">
  <h1>What is your gender?</h1>
  <form >
      
  <input type="radio" name="gender" value="male" checked>Male<br>
  <input type="radio" name="gender" value="female" > Female<br>
  <input type="radio" name="gender" value="other" > Other
</form>

</article>

<footer>Eye Tracking</footer>
</div>

</body>
</html>