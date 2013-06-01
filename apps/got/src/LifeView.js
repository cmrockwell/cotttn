/**
 * @author Chris
 */

var LifeView = function (life) {
    this.life = life;
    this.ltrArr = new Array('H','A','R','R','I','S','O','N','V');
};

LifeView.prototype.update = function(){
		
	for(var l=0; l<size/2; l++){
		for(var m=0; m<size; m++){
			//alert(l +" "+m);  
			if (this.life.board[l][m].alive !== this.life.board[l][m].nextAlive)  
			{				
				if(this.life.board[l][m].alive && !this.life.board[l][m].nextAlive){
					// hitting each cell.  use ID's instead
					//$('td[x="'+l+'"][y="'+m+'"]')
					this.tdArr[l][m].addClass('willDie').removeClass('alive').removeClass('willBeBorn');	
				}
				else if(!this.life.board[l][m].alive && this.life.board[l][m].nextAlive){
					this.tdArr[l][m].addClass('willBeBorn').removeClass('dead').removeClass('willDie');//.removeClass('willDie').removeClass('alive');
					//$('td[x="'+l+'"][y="'+m+'"]')	
				}
			} else if (this.life.board[l][m].alive){
				this.tdArr[l][m].addClass('alive').removeClass('willBeBorn');//removeClass('willDie').removeClass('dead');
				//$('td[x="'+l+'"][y="'+m+'"]')
			} else {// if (!this.life.board[l][m].alive){
				this.tdArr[l][m].addClass('dead').removeClass('willDie'); //$('td[x="'+l+'"][y="'+m+'"]')
			}
		}
	}	
}

LifeView.prototype.init = function (lifegrid) {
	wrapper = $(lifegrid);
	size = this.life.board.length;	
	this.life.makeBoard();
	this.tdArr =  []; //new Array(); // [] 
	this.select = false;
	self = this;
	var table = $('<table></table>').addClass('board');
	for(var i=0; i<size/2; i++){
    	var row = $('<tr></tr>');
    	this.tdArr[i]=[]; //new Array() 
    	for(var j=0; j<size; j++){
    		var index = Math.round(Math.random() * (this.ltrArr.length-1));
   			var letter = this.ltrArr[index]; 
    		var cell = $('<td></td>').addClass('cell').addClass('dead').attr('x', i).attr('y', j).attr('ltr', letter); //.text(letter+": "+i+', ' +j)
    		this.tdArr[i][j] = cell; 
    		row.append(cell);
    	}
    	table.append(row);
	}
	$('#lifegrid').append(table);
	this.cells = $('td.cell');	
	
	$("td").mousedown(function (ev) {
		self.select = true;
		ev.preventDefault();
		self.makeAlive( $(this));	
		//self.makeAlive( $(this));
	});

	$("td").mouseup(function (ev) {
		self.select = false;
				
		//self.makeAlive( $(this));
	});
	
	$("td").mouseenter(function (evt){
		if (self.select){
			self.makeAlive( $(this));	
		}
		ev.preventDefault();	
	} );

	$("button.goBtn").click(function (ev) {
    	//self.clickUpdate();
    	self.life.tick();    	
    	self.update();
    });
    
    this.timer;
    
    $("button.runBtn").click(function (ev) {
    	if( $(this).hasClass('stopped') ){
    		$(this).toggleClass('stopped').toggleClass('running');
			$(this).text("Stop");
    		self.startStopTimer($(this), ev);
    	} else if ($(this).hasClass('running')){
  			$(this).toggleClass('stopped').toggleClass('running');
    		clearInterval(self.timer);
    		$(this).text("Run");
  		}	 
    });
    
    //Gosper glider gun
	$("button.gunBtn").click(function (ev) {
		self.clear();
		self.makeAlive($('td[x="5"][y="1"]'));
		self.makeAlive($('td[x="5"][y="2"]'));
		self.makeAlive($('td[x="6"][y="1"]'));
		self.makeAlive($('td[x="6"][y="2"]'));
		self.makeAlive($('td[x="3"][y="13"]'));
		self.makeAlive($('td[x="3"][y="14"]'));
		self.makeAlive($('td[x="4"][y="12"]'));
		self.makeAlive($('td[x="4"][y="16"]'));
		self.makeAlive($('td[x="5"][y="11"]'));
		self.makeAlive($('td[x="5"][y="17"]'));
		self.makeAlive($('td[x="6"][y="11"]'));
		self.makeAlive($('td[x="6"][y="15"]'));
		self.makeAlive($('td[x="6"][y="17"]'));
		self.makeAlive($('td[x="6"][y="18"]'));
		self.makeAlive($('td[x="7"][y="11"]'));
		self.makeAlive($('td[x="7"][y="17"]'));
		self.makeAlive($('td[x="8"][y="12"]'));
		self.makeAlive($('td[x="8"][y="16"]'));
		self.makeAlive($('td[x="9"][y="13"]'));
		self.makeAlive($('td[x="9"][y="14"]'));
		self.makeAlive($('td[x="1"][y="25"]'));
		self.makeAlive($('td[x="2"][y="23"]'));
		self.makeAlive($('td[x="2"][y="25"]'));
		self.makeAlive($('td[x="3"][y="21"]'));
		self.makeAlive($('td[x="3"][y="22"]'));
		self.makeAlive($('td[x="4"][y="21"]'));
		self.makeAlive($('td[x="4"][y="22"]'));
		self.makeAlive($('td[x="5"][y="21"]'));
		self.makeAlive($('td[x="5"][y="22"]'));
		self.makeAlive($('td[x="6"][y="23"]'));
		self.makeAlive($('td[x="6"][y="25"]'));
		self.makeAlive($('td[x="7"][y="25"]'));
		self.makeAlive($('td[x="3"][y="35"]'));
		self.makeAlive($('td[x="3"][y="36"]'));
		self.makeAlive($('td[x="4"][y="35"]'));
		self.makeAlive($('td[x="4"][y="36"]'));
		
    });    
}

LifeView.prototype.makeAlive = function(cell){
	cell.toggleClass('willBeBorn').toggleClass('dead');
	var className = cell.attr("class");
		if (className === "cell willBeBorn"){
			var x = cell.attr('x');
			var y = cell.attr('y');
			self.life.board[x][y].nextAlive= true;		
		}
}	


LifeView.prototype.startStopTimer = function(button, ev){
	self.life.tick();    	
   	self.update();	
    self.timer = setTimeout(
    		function(){self.startStopTimer(button)}, 
    		100);
}

LifeView.prototype.clickUpdate = function(){//no need
	self.life.tick();    	
    self.update();
}

LifeView.prototype.clear =  function(){

	for(var row=0; row<size/2; row++){
		for(var col=0; col<size; col++){
			self.life.board[row][col].alive = false;	
			self.life.board[row][col].nextAlive = false;				
		}
	}	
	for( var ele=0; ele<self.cells.length;ele++){
		$(self.cells[ele]).addClass('dead').removeClass('alive').removeClass('willBeBorn').removeClass('willDie');
	}
}

window.LifeView = LifeView;