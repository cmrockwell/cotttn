/**
 * @author Chris
 */

Life = function(number) {
  var myself ={  	
    board : new Array(number),
    makeBoard : function(){
      for (var i=0; i < number; i++){
          this.board[i] =new Array(number);
          for (var j=0; j < number; j++){
            this.board[i][j] = new Cell();
          }
        }
    },
    getBoardSize :function(){
      return this.board.length;
    },
    getNeighbors : function( x ,y){ // returns the number of live neighbors
    	var count =0;
    	var xMin , xMax, yMin, yMax;
    	// refactor that?
    	if (x-1 >=0){
    		xMin = x-1;
    	}
    	else{
    		xMin =0;
    	}
    	if (y-1 >=0){
    		yMin = y-1;
    	}
    	else{
    		yMin =0;
    	}
    	if (x+1 < this.board.length){
    		xMax = x+1;
    	}
    	else{
    		xMax = this.board.length-1;
    	}
    	if (y+1 < this.board.length){
    		yMax = y+1;
    	}
    	else{
    		yMax = this.board.length-1;
    	}
    	        	   
    	//alert("("+xMin+", "+xMax+"), ("+yMin+", "+yMax+")");
    	for (var i=xMin; i<=xMax; i++ ){
    		for (var j=yMin; j<=yMax; j++ ){
    			if (i===x && j==y){
    				;// skip ths cell, this is the cell, not a neighbor
    			}
    			else if (this.board[i][j].isAlive()===true){
    				count++;
    			};
    		};
    	};
    	
    	
    	
    	return count;
    },
    start : function(interval){
    	//setInterval with some ms interval calling tick
    },
    
    tick : function(){
    	// loop thru the cells calling chgAlive
    	for (var u= 0; u<this.board.length; u++){// yo clean code,  make it explicit
    		for (var v= 0; v<this.board.length; v++){
    			this.board[u][v].chgAlive();//
    		}	
    	}
    	// loop thru the cells calling getNeighbors
    	//myself.life.getNeighbors();
    	for (var u= 0; u<this.board.length; u++){// yo clean code,  make it explicit
    		for (var v= 0; v<this.board.length; v++){
    			
    			var count = this.getNeighbors(u,v);// get the number of live neightbors
    			this.board[u][v].liveNeighbors(count); // decide if the cell should live or die
    			if(this.board[u][v].alive != this.board[u][v].nextAlive){
    				//alert(u+" "+v);
    			}
    		}	
    	}
    }
    
  }
  return myself;
};

Cell = function() {
  var cell = {
  	nextAlive: false,
    alive : false,
    isAlive : function(){
      return this.alive;
    },
    liveNeighbors : function(num){
      if (num<2 && this.alive){
        this.nextAlive = false;
      }
      if (num>3 && this.alive){
        this.nextAlive = false;
      }
      if (num===3 && !this.alive){
        this.nextAlive = true;
      }
      if ((num===3 ||num===2) && this.alive){
        this.nextAlive = true;
      }
      
    },
    chgAlive : function(){
    	this.alive = this.nextAlive;
    	this.nextAlive = false;
    }
  }
  return cell;
};
