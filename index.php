<html>
<head>
<body bgcolor='aqua'>
<h1>After completing the task i was like !</h1>

<img src="https://mytaskbucketshreyas12.s3.ap-south-1.amazonaws.com/Shreyas.jpg" alt="Girl in a jacket" width="200" height="200">
<pre>
<?php
$cloudant_url = `head -n1 path.txt`;
$img_path="https://".$cloudant_url."/Shreyas.jpeg";
echo "<br>";
echo "<img src='${img_path}' width=100 height=100>";
?>
</pre>
</body>
</head>
</html>
