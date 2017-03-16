<!DOCTYPE html>
<html>
<head>
	<style>
	html, body {
		background: #000;
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
		background: #FFF;
	}
	#controllRobot{
		background: #F0F;
		margin-top: 40px;
		margin-left: auto;
		margin-right: auto;
		display: inline-block;
	}
	button{
		width: 100px;
	}
	</style>
	<script src="jquery-3.1.1.min.js"></script> 
	<script src="view.js"></script> 
</head>
<body>
<canvas id="currentPhoto" width="640" height="40"; background: no-repeat;"></canvas>
<p style="text-align: center;">Taken: <b id="taken"></b></p>

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
</body>
</html>