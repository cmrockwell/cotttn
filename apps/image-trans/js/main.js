//Chris Rockwell
//20NO2012
//
//step 1 initial ajax call, gets the paths.  OK
//step 2 load the image index  OK
//step 3 load the image index+1   OK
//step 4 display the first image in d image divs  OK
//step 5 display the second image in n image divs  OK
//step 6 animate d image divs down OK
//step 7 swap N a D div z-indexes OK
//step 8 Load next image
//step 9 set the background image of n or d divs
// repeat steps 6 thru 9 when button is pressed


var animPic={
	init : function(){
		var button = document.getElementById('next');
		// get the array of images paths from the serever
		Core.sendRequest('classes/Images.php',animPic.gotImagePaths);
		Core.addEventListener(button, 'click', animPic.nextSlide); 	
		animPic.imgSegWidth = Math.round(animPic.imgWidth / animPic.imgSegments);		
		var dimgDivs = document.getElementsByClassName("image");
		var nimgDivs = document.getElementsByClassName("nimage");
		for (var i=0; i<nimgDivs.length; i++) {
			nimgDivs[i].style.zIndex = 100;
			dimgDivs[i].style.zIndex = 200;
		}
	},
	// consider making an array of image objects to hold the images 
	//	instead trying to rely on browser cache
	index : 0, // index of the image array	, and image path array
	animIndex : 1,  // index used to manage the 5 div animations
	imgArr: new Array(), // array used to hold the path uri's
	dimg : {}, // the first image
	nimg: {}, //  used to load the rear image, 2dn, third etc
	nd: "d",
	imgWidth: 816, // set these programatically based on image sizes
	imgHeight: 488, //"816px 488px";
	imgSegments: 5,
	imgSegWidth: 0, 
	
	
	nextSlide : function(evt){ // triggered by button click
		evt = evt || window.event;
		animPic.animIndex = 1;		
		animPic.index = (animPic.index+1) % (animPic.imgArr.length); // increment the index limit to  lenght set
		animPic.loadNext();
		
		var d1 = document.getElementById("d1");
		var n1 = document.getElementById("n1");
		if (d1.style.zIndex > n1.style.zIndex){ // ensures we operate on the front set of divs
			animPic.nd ="d"
		} else{
			animPic.nd = "n";
		}		
		animPic.moveDivs();	
	},
	
	gotImagePaths : function(req){  // step 1, gets image paths from server
		animPic.imgArr = JSON.parse(req.responseText);

		for (var i=0; i<animPic.imgArr.length; i++){
			while (animPic.imgArr[i] ==="." || animPic.imgArr[i]===".."){
				animPic.imgArr.splice(i, 1);	
			}						
		}
		////////display the first image
		animPic.index =0;				
		var dimage = new Image(); 
		dimage.src = 'user-images/'+animPic.imgArr[animPic.index]; // preloads image
		animPic.dimg = dimage;
		animPic.displayImg();
		
		// load the next image
		animPic.index++;
		animPic.loadNext(); // load the second image
		animPic.displayRear(); // initial rear image
	},
	
	// load next image
	loadNext : function(){	
				
		var image = new Image(); // consider making this an array
		image.src = 'user-images/'+animPic.imgArr[animPic.index]; // preloads image
		animPic.nimg = image;
		
	},
	
	swapZ : function(){
		var nimgDivs = document.getElementsByClassName("nimage");			
		var dimgDivs = document.getElementsByClassName("image");
		
		for (var d=0; d<nimgDivs.length; d++){
			var zInd = nimgDivs[d].style.zIndex;
			nimgDivs[d].style.zIndex = dimgDivs[d].style.zIndex;
			dimgDivs[d].style.zIndex = zInd;
		}
	},
	
	displayRear : function(){
		var imgDivs = document.getElementsByClassName("image"); // gets the all the pieces
		var nimgDivs = document.getElementsByClassName("nimage");

		if (imgDivs[0].style.zIndex > nimgDivs[0].style.zIndex)
			{	// make sure we are working on the back set of divs
				imgDivs = nimgDivs;
			} 
		for (var i=0; i<nimgDivs.length; i++) {
			imgDivs[i].style.backgroundImage = "url("+animPic.nimg.src+")";
			imgDivs[i].style.backgroundSize = animPic.imgWidth+"px "+animPic.imgHeight+"px";	
			imgDivs[i].style.backgroundPosition = i*-1*animPic.imgSegWidth+"px 0px" ;	
			imgDivs[i].style.width = " "+animPic.imgSegWidth+"px";
			imgDivs[i].style.height = " "+animPic.imgHeight +"px";
			imgDivs[i].style.top = " 0";
			imgDivs[i].style.left = animPic.imgSegWidth*i+"px";
		}		
	},
	 
	displayImg : function(){ // This loads the first front image. 
	
		var imgDivs = document.getElementsByClassName("image"); // gets the all the pieces
		
		for (var i=0; i<imgDivs.length; i++) {
			imgDivs[i].style.backgroundImage = "url("+animPic.dimg.src+")";
			imgDivs[i].style.backgroundSize = animPic.imgWidth+"px "+animPic.imgHeight+"px";	
			imgDivs[i].style.backgroundPosition = i*-1*animPic.imgSegWidth+"px 0px" ;	
			imgDivs[i].style.width = " "+animPic.imgSegWidth+"px";
			imgDivs[i].style.height = " "+animPic.imgHeight +"px";
			imgDivs[i].style.top = " 0";
			imgDivs[i].style.left = animPic.imgSegWidth*i+"px";
		}

	},	
	
	moveDivs : function(){
		var div;	
		if (animPic.animIndex < animPic.imgSegments){					
			div = new Animate(document.getElementById( animPic.nd + animPic.animIndex));			
			div.animate2D(700,180,20,40,false); //(distance,heading,increment,speed,boundary
			animPic.animIndex++;
			setTimeout(function(){animPic.moveDivs();},250);	
			
		} else if (animPic.animIndex === animPic.imgSegments){
			div = new Animate(document.getElementById( animPic.nd + animPic.animIndex));			
			div.animate2D(700,180,20,40,true);//(distance,heading,increment,speed,boundary
			animPic.animIndex++;
			setTimeout(function(){animPic.moveDivs();},250);	
		}
	
	}
}

function callback(ele){
	animPic.swapZ();
	animPic.displayRear();
}

animPic.init();




