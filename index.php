
<html>
<body bgcolor = "aqua">
<h3>Hello! Welcome to the Multi Hybrid Cloud !!!</h3> 
<br/>
<pre>
<?php
   $cloudant_url=`head -n1 path.txt`;
   $img_path="https://".$cloudant_url."/Shreyas.jpeg";
   echo "<br>";
   echo "<img src='${img_path}' width=100 height=100>";
?>
</pre>
  </body>
</html>
