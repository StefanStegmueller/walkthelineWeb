<!DOCTYPE html>
<html>
<head>
	<style>
	html, body {
		background-color: black;
		color: #FFF;
		padding: 0;
		margin: 0;
		font-family: Helvetica, Arial, Sans-Serif;
	}
	canvas {
		padding-left: 0;
		padding-right: 0;
		margin-top: 40px;
		margin-left: auto;
		margin-right: auto;
		display: block;
	}
	</style>
	<script src="jquery-3.1.1.min.js"></script> 
	<script src="view.js"></script> 
</head>
<body>
<canvas id="currentPhoto" width="640" height="480"></canvas>
<p style="text-align: center;">Taken: <b id="taken"></b></p>
</body>
</html>