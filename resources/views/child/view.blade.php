

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
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

.article {
    text-align: left;
}

header {background: black;color:white;}
footer {background: #aaa;color:white;}
.nav {background:#eee;}

.nav ul {
    list-style-type: none;
    padding: 0;
}
.nav ul a {
    text-decoration: none;
}

@media all and (min-width: 768px) {
    .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;}
}
</style>
</head>
<body>

<div class="flex-container">
<header>
  <h1>Predicting reading comprehension scores from eye movements using artificial neural networks and fuzzy output error</h1>
</header>



<article class="article">
  <h1>abstract</h1>
  <p>Predicting reading comprehension from eye gaze data is a difficult task. 
      We investigate the use of artificial neural networks (ANNs) to predict reading comprehension scores from eye gaze collected from participants who read and completed an online tutorial in our lab. Problems such as large feature sets and small highly imbalanced data sets compound to make this task even more complex. We propose using fuzzy output error (FOE) as an alternative performance function to mean square error (MSE) for training feed-forward neural networks to overcome these problems. We show that the use of FOE as the performance function for training ANNs provides significantly better classification of eye movements to reading comprehension scores. ANNs with three hidden layers of neurons gave the best classification results especially when FOE is used as the performance function for training. In these cases we found up to 50% reduction in misclassification rates compared to using MSE. We found that ANNs give optimal classification results in comparison to other classification techniques. When FOE is used as the performance function for training the ANNs the misclassification rates are halved compared to the other techniques. Cluster analysis was performed on one of the more complex data sets. Interesting reading behaviour properties were found within the data set. The intended use of this research is in the design of adaptive online learning environments that use eye gaze to predict user comprehension from reading behavior.</p>
  
</article>


</div>

</body>
</html>
