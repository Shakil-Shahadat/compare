<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Compare Strings</title>
	<link rel="shortcut icon" href="icon.ico">
	<style>
		.container
		{
			width: 960px;
			margin: auto;
			padding-top: 80px;
		}
		input
		{
			font-size: 22px;
			padding: 9px;
			margin: 10px;
		}
		button
		{
			float: right;
			position: relative;
			right: 110px;
			top: 10px;
		}
	</style>
</head>
<body>

<div class="container">
	<input type="text" class="text1" size="70" autofocus><br>
	<input type="text" class="text2" size="70" oninput="compare()"><br>
	<button onclick="empty()">Clear</button>
</div>

<script>
	function qs( cls )
	{
		return document.querySelector( cls );
	}
	function compare()
	{
		if ( qs( '.text1' ).value === qs( '.text2' ).value )
		{
			qs( '.text1' ).style.background = 'cyan';
			qs( '.text2' ).style.background = 'cyan';
		}
		else
		{
			qs( '.text1' ).style.background = 'tomato';
			qs( '.text2' ).style.background = 'tomato';
		}
	}
	function empty()
	{
		qs( '.text1' ).value = '';
		qs( '.text2' ).value = '';
		qs( '.text1' ).style.background = 'white';
		qs( '.text2' ).style.background = 'white';
		qs( '.text1' ).focus();
	}
</script>
</body>
</html>
