<!DOCTYPE html>
<html>
<head>
	<title>From Suppout us Form</title>
</head>
<body>
	<h4>User Email: {{  $mailInfo['email']  }}</h4>
	<h4>Subject: {{  $mailInfo['subject']  }}</h4>
	<p>Hi, <br> {{  $mailInfo['message']  }}</p>
	<p>Thanks</p>
</body>
</html>