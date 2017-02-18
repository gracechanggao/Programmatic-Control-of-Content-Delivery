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
</head >
<body >

<div class="flex-container">
  <header class="header">First Reading Material</header>
 
  <article class="main">
    <p>
    Digital cameras work by registering the light that falls on the camera sensor when the shutter button is pressed. Camera sensors are normally CCDs (Charge Coupled Devices) or CMOSs (Complementary Metal-Oxide Semiconductors). Together with other hardware and software within the camera, sensors record a series of bits known as pixels. Pixels (short for picture elements) store information about the light that fell on the sensor. The camera or your computer then assembles the pixels into an image that you can see.

    
    
    </p>
    
        
   <button class="button button1"  onclick="window.location.href='read1question1';"  >Start Questions</button>
        
   
<!--    <button class="button button1" onclick="alert('Hello World!')" >Start Question</button>-->
  </article>



</div>
    <footer>Eye Tracking</footer>
</body>


</html>