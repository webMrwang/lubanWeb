<html>
<head>
<title>upu demo page</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<script type="text/javascript" src="upu/misc/upu.js"></script>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="test.php" onsubmit="return upuInit(this)">
<input type="file" name="file1" size="40"/>
<br />
<input type="file" name="file2" size="40"/>
<br />
<textarea name="text1"  cols="40" rows="5"></textarea>
<br /><input type="submit"/>
</body>
</html>