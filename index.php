<html>
<head>
<body bgcolor='aqua'>
<h1>Welcome to Terraform !!!</h1>
<pre>
<?php
print `lscpu`;
print `free -m`;
$cloudant_url = `head -n1 path.txt`;
$img_path="https://".$cloudant_url."/Shreyas.jpeg";
echo "<br>";
echo "<img src='${img_path}' width=300 height=250>";
?>
</pre>
</body>
</head>
</html>
