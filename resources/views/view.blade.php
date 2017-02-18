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
  <header class="header">Predicting reading comprehension scores from eye movements using artificial neural networks and fuzzy output error</header>
  <aside class="aside">abstract
 
  
  </aside>
  <article class="main">
    <p>Predicting reading comprehension from eye gaze data is a difficult task. 
      We investigate the use of artificial neural networks (ANNs) to predict reading comprehension scores from eye gaze collected from participants who read and completed an online tutorial in our lab. Problems such as large feature sets and small highly imbalanced data sets compound to make this task even more complex. We propose using fuzzy output error (FOE) as an alternative performance function to mean square error (MSE) for training feed-forward neural networks to overcome these problems. We show that the use of FOE as the performance function for training ANNs provides significantly better classification of eye movements to reading comprehension scores. ANNs with three hidden layers of neurons gave the best classification results especially when FOE is used as the performance function for training. In these cases we found up to 50% reduction in misclassification rates compared to using MSE. We found that ANNs give optimal classification results in comparison to other classification techniques. When FOE is used as the performance function for training the ANNs the misclassification rates are halved compared to the other techniques. Cluster analysis was performed on one of the more complex data sets. Interesting reading behaviour properties were found within the data set. The intended use of this research is in the design of adaptive online learning environments that use eye gaze to predict user comprehension from reading behavior.</p>
    
        
   <button class="button button1"  onclick="window.location.href='question';"  >Start Questions</button>
        
   
<!--    <button class="button button1" onclick="alert('Hello World!')" >Start Question</button>-->
  </article>



</div>
    <footer>Eye Tracking</footer>
</body>


</html>