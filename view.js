$( document ).ready(function() {
   getCurrentPhoto();
});

function getCurrentPhoto()
{
	console.log("Called getCurrentPhoto()");
	
	$.ajax({
		url:"getCurrentPhoto.php",  
		success:function(data) {
			updatePhoto(data);
//			getCurrentPhoto(); // Did you mean: Recursion
		}
	});
}

function updatePhoto(data)
{
	console.log("Called updatePhoto(" + data + ")");
	
	// Clear Canvas
	var c=document.getElementById("currentPhoto");
	var ctx=c.getContext("2d");
	ctx.clearRect(0, 0, c.width, c.height);
	
	var photoData = jQuery.parseJSON(data);
	
	console.log(photoData);
	
	$("#currentPhoto").css("background-image", "url(captures/" + photoData.id + ".jpg)");
	//drawRoi(photoData.roiHeight, photoData.roiPosition);
	drawPath(photoData.roiHeight, photoData.roiPosition, photoData.pathWidth, photoData.pathPosition);
	$("#taken").html(photoData.date);
}

function drawRoi(roiHeight, roiPosition)
{
	console.log("Called drawRoi(" + roiHeight + ", " + roiPosition + ")");
	
	var c=document.getElementById("currentPhoto");
	var ctx=c.getContext("2d");
	ctx.beginPath();
	ctx.lineWidth="6";
	ctx.strokeStyle="red";
	ctx.rect(0,roiPosition,640,roiHeight);
	ctx.stroke();
}

function drawPath(roiHeight, roiPosition, pathWidth, pathPosition)
{
	console.log("Called drawPath(" + pathWidth + ", " + pathPosition + ")");
	
	var c=document.getElementById("currentPhoto");
	var ctx=c.getContext("2d");
	ctx.beginPath();
	ctx.lineWidth="6";
	ctx.strokeStyle="red";
	rectPosition = (pathPosition + 1) * 320;
	console.log("------------------ " + pathPosition + " -- " + rectPosition)
	ctx.rect(rectPosition,0,0,100);
	ctx.stroke();
}

function setControllSignal(move, direction)
{
	console.log("Called setControllSignal(" + move + ", " + direction + ")");
	
	$.ajax({
		url:"setControllSignal.php?move=" + move + "&direction=" + direction,
		success:function(data){
		}
	});
}