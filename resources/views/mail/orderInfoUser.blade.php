<!DOCTYPE html>
<html>
<head>
	<title>Your Order Information are Here</title>
</head>
<body>
	<p>Hi {{  $data->username  }},</p>
	<h4>Your Order Id: {{ $data->order_id }}</h4>
	<h4>Your Product Type: {{ $data->product }}</h4>
	<h4>Your Items: {{ $data->items }}</h4>
	<h4>Your Paid Amount: {{ $data->amount }}</h4>
	<h4>Your Order status: {{ $data->status }}</h4>
	<p>Within 10 to 20 minutes you will be get update. Thanks for staying with us</p><br>
	<p>Thanks</p>
	<P>Carding Empire</P>
</body>
</html>