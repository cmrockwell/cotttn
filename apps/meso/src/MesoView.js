/**
 * @author Chris
 */

var MesoView = function (mesostic) {
    this.mesostic = mesostic;
    var spc = '&nbsp;';
    var wrapper ={};
    $.support.cors = true;
    extract="";
        
};


MesoView.prototype.init = function (c) {
	// get the default textbox values via ajax call
	this.getParams();

	mesoview = this;
	wrapper = c;

	var checkInput = function(){
		var spineWord = $('#spine').val(); 
		var seedText = $('div#inputText textarea').val();

		if(seedText!='' && spineWord!=''){
			$('#meso-error').hide();
			return true;
		} else { 
			$('#meso-error').show();
			return false;
		}
	}

	$('input#spine').blur(function(){
		mesoview.mesostic.setSpine($('input#spine').val());		
	});
	
	$('button#basicbtn').click(function(){
		if(checkInput()===true){
			mesoview.mesostic.reset();
			mesoview.mesostic.init($('#spine').val() , $('div#inputText textarea').val());
			mesoview.mesostic.makeNonPure();
			mesoview.display(true);
		}
	});
	
	$('button#btn50').click(function(){		
		if(checkInput()===true){
			mesoview.mesostic.reset();
			mesoview.mesostic.init($('#spine').val() , $('div#inputText textarea').val());
			//alert(mesoview.mesostic.getSpine());
			mesoview.mesostic.makePure(50);
			mesoview.display(true);
		}		
	});

	$('button#btn100').click(function(){
		if(checkInput()===true){
			mesoview.mesostic.reset();
			mesoview.mesostic.init($('#spine').val() , $('div#inputText textarea').val());
			//alert(mesoview.mesostic.getSpine());
			mesoview.mesostic.makePure(100);
			mesoview.display(true); 	
		}				
	});	

		
	$('a#controlform').click(function(e){
		e.preventDefault(); //
		extract="";
		mesoview.words = mesoview.mesostic.getSpine().replace(/(\s+|[^\w]+)/g, function($1){return " ";}).split(' '); // make array of just words
		mesoview.wordIndex =0;
		console.log('get phrase');
		mesoview.showSeedForm();
		
	});	

	$('#share').click(function(e){
 		e.preventDefault();
 		// open a window with the link and other options
 		mesoview.showShareWin();
 		
 	});
			
	$('a#next').click(function(e){
 		e.preventDefault();
 		Core.sendRequest('classes/Mesostics.php?see=next&id='+mesoview.urlParams['id'],defaultCallBack);
 		$('#save').removeClass('show').addClass('hide');
 	});

 	$('a#previous').click(function(e){
 		e.preventDefault();
		Core.sendRequest('classes/Mesostics.php?see=previous&id='+mesoview.urlParams['id'],defaultCallBack);
		$('#save').removeClass('show').addClass('hide');
 	});			
 	$('a#save').click(function(e){
 		e.preventDefault();
 		//uri encode the seed, string and type
 		//author and title? 
 		var seedText = "";//
 		var chars = new RegExp(/[\"\\\.(\n|\r|\r\n?)]/g);//(\n|\r|\r\n)
 		seedText = $('div#inputText textarea').val();
 		seedText = seedText.replace(chars," "); //string.replace(plus, " ")
 		//alert(seedText);
 		seedText = encodeURIComponent(seedText);
 		
 		var typeText = mesoview.mesostic.type;
 		var spineText = mesoview.mesostic.getSpine(); 
 		var poemToSave = {seed:seedText, type:typeText, spine:spineText};
 		
 		var jsonPoem = JSON.stringify(poemToSave);
 		
		
		$.ajax({
		  url:"classes/Mesostics.php?save",
		  type:"POST",
		  data:jsonPoem,
		  contentType:"application/json; charset=utf-8",
		  dataType:"json",
		  success: saveCallBack	}) 
 		});	

 	 $('button#getphrase').click(function(e){
 		e.preventDefault();
 		var phrase = encodeURIComponent($('#wordphrase').val()); 
 		startAjax(phrase);
 		//mesoview.closeSeedView('getSeedDiv');
 	});		
}

MesoView.prototype.showShareWin = function(){
	var headerHtml = $("<h1> Share this Mesostic </h1>	<p>Copy the link below, then paste it your facebook or whatever.</p>");
	//var linkA = $("<a href=\"http://localhost/mesostic/?id="+this.urlParams['id']+">mesostic\/\?id="+this.urlParams['id']+ "</a>");
	var linkA = $("<a href=\"http://while-1.com/mesostic/?id="+mesoview.urlParams['id']+"\">while-1.com/mesostic/?id="+mesoview.urlParams['id']+ "</a>");
	
	var tweetIt = '<a href="https://twitter.com/share" ' +
	'class="twitter-share-button" data-count="none">Tweet</a>'+
	' <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);'+
	'js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
	
	var cancelBtn =$("<br> <button id=\"cancel\">Close Window </button>");
 	var maskDiv = $('<div id="mask" height="'+ wrapper.offsetHeight+'" width="'+wrapper.offsetWidth+'">' +'</div>');
 	var shareDiv = $('<div id="shareDiv" class="getSeedDiv"></div>');
 	
 	shareDiv.append(headerHtml);
 	shareDiv.append(linkA);
 	shareDiv.append(cancelBtn);	
 	wrapper.append(maskDiv);
 	wrapper.append(shareDiv);
 	
 	$('button#cancel').click(function(e){
		mesoview.closeSeedView('shareDiv');
 	}); 	
}

MesoView.prototype.showSeedForm = function(){
	
	var headerHtml = "<h1> Seed Text Form</h1>	<p>Paste seed text directly. Or, Generate seed text by entering a search phrase.</p>";
	
	var formHtml = "<form id=\"getSeedForm\" class=\"getSeedForm\"> <label>Search Phrase: </label>" +
	"<input type=\"text\" name=\"wordphrase\" id=\"wordphrase\" \"/> "+ 	
	"<button type=\"submit\" id=\"getphrase\" name=\"getphrase\">Get Wikipedia Abstract</button> </form> "+
 	"<p>Or, you can choose one of these options.</p>"+
 	"<form id=\"getSpine\"> <button type=\"submit\" id=\"getword\" name=\"getword\">Get Abstract Using Spine Words</button></form>" +
 	"<button type=\"submit\" id=\"cancel\" name=\"cancel\">Cancel</button> "+
 	"<button id=\"randomize\">Randomize Current Seed Text</button>";
	
	var modal = headerHtml+formHtml;	

 	var getSeedElement = $(modal);
 	var maskDiv = $('<div id="mask" height="'+ wrapper.offsetHeight+'" width="'+wrapper.offsetWidth+'">' +'</div>');
 	var getSeedDiv = $('<div id="getSeedDiv" class="getSeedDiv"></div>');
 	// getSeedDiv.append(headerHtml);
 	getSeedDiv.append(modal);
 	// getSeedDiv.append(formHtml);	
 	wrapper.append(maskDiv);
 	wrapper.append(getSeedDiv);
 	//$('#myModal').modal('show');
 	
 	$('button#getphrase').click(function(e){
 		e.preventDefault();
 		var phrase = encodeURIComponent($('#wordphrase').val()); 
 		startAjax(phrase);
 		mesoview.closeSeedView('getSeedDiv');
 	});
 	
 	$('button#getword').click(function(e){
 		e.preventDefault();
 		startAjax(mesoview.words.shift(), true);
 		mesoview.closeSeedView('getSeedDiv');

 	});
 	
 	$('button#cancel').click(function(e){
		mesoview.closeSeedView('getSeedDiv');
 	});
 	 
 	$('button#randomize').click(function(e){
		mesoview.randomizeSeed();
		mesoview.closeSeedView('getSeedDiv');
 	});
 	
}

MesoView.prototype.closeSeedView = function(div){
 		var seedEle = document.getElementById(div);
 		var maskEle = document.getElementById('mask');
 		seedEle.parentNode.removeChild(seedEle);
 		maskEle.parentNode.removeChild(maskEle);	
}

MesoView.prototype.randomizeSeed = function(){
	var randArr = this.mesostic.textCopy;
	for (var i = randArr.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = randArr[i];
        randArr[i] = randArr[j];
        randArr[j] = temp;
    }
    //return randArr;
	$('div#inputText textarea').val(randArr);
}

MesoView.prototype.setDefault = function(){

	var idParm = "0";
	if(this.urlParams['id']!=null){
		idParm= this.urlParams['id'];
		}
	Core.sendRequest('classes/Mesostics.php?id='+idParm,defaultCallBack);

}

MesoView.prototype.getParams = function(){
	this.urlParams = {};
	var match;
	var plus = /\+/g;  // Regex for replacing addition symbol with a space
   	var search = /([^&=]+)=?([^&]*)/g;
   	var decode = function (string) { return decodeURIComponent(string.replace(plus, " ")); };
   	var query  = window.location.search.substring(1);
	//alert(query);
   	while (match = search.exec(query))
		{
			this.urlParams[decode(match[1])] = decode(match[2]);
		}
}

MesoView.prototype.display = function(isOriginal){
	var poem ="";

	for (var i=0; i<this.mesostic.poem.length; i++){
		// for each word, determine the number of spaces for spine word alignment
		var space = "";
		for(var s=0; s< (this.mesostic.maxIndexOfSpineLtr - this.mesostic.spineLtrs[i]); s++){
			space +=" ";
		}
		poem += space+this.mesostic.poem[i] + '\n';
	}
	//$('div#poem textarea')
	//$('div#poem textarea').val(poem);
	$('textarea#poem').attr('rows', this.mesostic.poem.length+2);
	$('textarea#poem').val(poem);
	//$('#meso-draft pre').text(poem);
  	$('#mesodraft textarea').text(poem);
  	$('#myModal').modal('show')
	
	if(isOriginal){
		$('#save').addClass('show').removeClass('hide');
		$('#share').addClass('hide').removeClass('show');
	}
		
}

function saveCallBack(req){
	
	alert("Saved");
	window.location.href = "http://while-1.com/mesostic/?id="+req.id;
	$('#share').addClass('show').removeClass('hide');
	
}

///////////this does not seem right. I wanted this function part of the mesoview prototype. but it didn't work with the parameter req.
function defaultCallBack(req){//response
	var json = JSON.parse(req.responseText);
	var seedDecoded = decodeURIComponent(json.seed);
	seedDecoded = seedDecoded.replace(/\+/g, " ");
	var spineDecoded = decodeURIComponent(json.spine); 
	spineDecoded = spineDecoded.replace(/\+/g, " ");
	var type = json.type; //json[0]['type'];
	$('#spine').val(spineDecoded);
	$('div#inputText textarea').val(seedDecoded);
	mesoview.urlParams['id']=json.id;	
	//console.log(mesoview.urlParams['id']);
	mesoview.mesostic.reset();
	mesoview.mesostic.init(spineDecoded, seedDecoded);
	if (type ==='basic'){
		mesoview.mesostic.makeNonPure();
	} else {
		mesoview.mesostic.makePure(type);
	}
	
	mesoview.display();
	$('#share').addClass('show').removeClass('hide');
}

function jsonpcallback(rtndata){
	//var extract="";
	for (var i in rtndata.query.pages) {
    	//console.log(rtndata.query.pages[i].extract); 
    	extract += rtndata.query.pages[i].extract;
	}
	
	
	$('div#inputText textarea').val(extract);
}

function startAjax(word, wordOrPhrase){
	
	$.ajax({
  		url: "http://en.wikipedia.org/w/api.php?action=query&prop=extracts&exintro&explaintext&titles="+word+"&format=json&redirects",
  		type: 'GET',
  		dataType: "jsonp",
	    jsonp : "callback",
	    jsonpCallback: "jsonpcallback",

	}).success(function() { 
				
		if (mesoview.words.length !==0 && wordOrPhrase){
			var nextWord = mesoview.words.shift(); 		
			startAjax(nextWord, true);
		}
		
	});	
}


window.MesoView = MesoView;
 