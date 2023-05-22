<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Dear User,</h3>
	<p>Your Bank Account Order Informtaion are given below</p>
	<table>
		<thead>
			<th>Card H.Name</th>
		    <th>Card Type</th>
		    <th>Country</th>
		    <th>Ex-date</th>
		    <th>Bank</th>
		    <th>Card Number</th>
		    <th>CCV</th>
		</thead>
	    <tbody>
   			@foreach($cardinfo as $item)
				<td>{{ $item->card_id }}</td>
                <td>{{ $item->card_type }}</td>
                <td>{{ $item->country }}</td>
                <td>{{ $item->ex_date }}</td>
                <td>{{ $item->bank_name }}</td>
                <td>{{ $item->card_number }}</td>
                <td>{{ $item->ccv  }}</td>
			@endforeach	
	    </tbody>
	</table>
	<p>Thanks being with us. Stay with us and enjoy your bank account shopping</p>
	<p>Carding Empire</p>
</body>
</html>