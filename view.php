<!DOCTYPE html>
<html>
<head>
	<style>
	html, body {
		padding:0;
		margin:0;
		font-family: Generis Sans Com;
		color: #5C6971;
	}
	html{
		background:#E2001A;
	}
	body {
		background: white;
	}
	h1 {
		font-family: Generis Serif Com;
		font-size: 4em;
		text-align: center;
	}
	canvas {
		padding-left: 0;
		padding-right: 0;
		margin-top: 40px;
		margin-left: auto;
		margin-right: auto;
		display: block;
		background: #FFF;
	}
	#controllRobot{
		margin-top: 40px;
		margin-left: auto;
		margin-right: auto;
	}
	#notOnTrack{
		margin-top: 40px;
		text-align: center;
		visibility: hidden;
	}
	button{
		width: 100px;
	}
	p {
		margin:0;
	}
	</style>
	<script src="jquery-3.1.1.min.js"></script>	
	<script src="view.js"></script> 
</head>
<body>
<p align="right"><img src="DHBWKA-Logo.jpg" width="300" style="margin:40px 40px 0 0;"></p>

<h1>Robovison</h1>


<canvas id="currentPhoto" width="640" height="40"; background: no-repeat;"></canvas>
<p style="text-align: center;">Taken: <b id="taken"></b></p>

<br><br><br><br><br><br><br><br><br><br><br><br>
<p align="center"><i>Simulation von Fahrassistentsystemen mit dem Kleinroboter von Lego</i><br>
von<br>
Stefan Stegm&uuml;ller, Lukas Nonnenmacher und Fabian Leinen</p>
<br><br>
<p style="background:#5C6971;"><br><br><br><br><br></p>
<p style="background:#8d0415;"><br><br><br><br></p>


<!--
<table id="controllRobot">
<tr>
  <td></td>
  <td><button onClick="setControllSignal(1, 0)" id="forward">gogogo</button></td>
  <td></td>
</tr>
<tr>
  <td><button onClick="setControllSignal(1, -1)" id="turnLeft">turn left</button></td>
  <td><button onClick="setControllSignal(0, 0)" id="stop">stop</button></td>
  <td><button onClick="setControllSignal(1, 1)" id="turnRight">turn right</button></td>
</tr>
</table>
-->

</body>
</html>