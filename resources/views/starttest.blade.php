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


@media all and (min-width: 768px) {
    .aside { flex: 1 auto; }
    .main    { flex: 3 0px; }
    .aside { order: 1; } 
    .main    { order: 2; }
  
}
</style>
</head >
<body >

<div class="flex-container">
  
    
      <header class="header">
         <h4>{{ $pages[0]->title }}</h4>
      </header>
<!--
   <div class="title">
				
	                             <h4>{{ $pages[0]->title }}</h4>
					
				</div>
				<div class="body">
					<p>{{ $pages[0]->body }}</p>
				</div>-->

  <article class="main">
    <p>
        <p>{{ $pages[0]->body }}</p>
    </p>
    
        
   
    <button class="button"  onclick="window.location.href='question';" >Start Questions</button>
        
   
<!--    <button class="button button1" onclick="alert('Hello World!')" >Start Question</button>-->
  </article>



</div>
  
</body>


</html>
