<!DOCTYPE html>
<html>
<head>
	<style>
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
		}

		li {
			float: left;
		}

		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		li a:hover:not(.active) {
			background-color: #111;
		}

		.active {
			background-color: green;
		}
	</style>
</head>
<body>
<br>
	<ul>
		<li><a href="cust.php">CUSTOMER ADD</a></li>
		<li><a href="deletecust.php">CUSTOMER REMOVE</a></li>
		<li><a href="customerlist.php">CUSTOMER LIST</a></li>
		<li><a href="credit-fund.php">DEPOSIT</a></li>
		<li><a href="debit-fund.php">WITHDRAWAL</a></li>
	

		<li style="float:right"><a class="active" href="logout.php">LOGOUT</a></li>
	</ul>

</body>
</html>
