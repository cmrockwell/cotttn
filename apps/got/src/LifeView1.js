/**
 * @author Chris
 */

var LifeView = function (life) {
    this.life = life;
};

LifeView.prototype.update = function(){
	
	
	var cells = $('td.cell');
	
	
	for(var l=0; l<size; l++){
		for(var m=0; m<size; m++){
			//alert(l +" "+m);    
			if(this.life.board[l][m].alive){
				$('td[x="'+l+'"][y="'+m+'"]').addClass('alive').removeClass('dead');	
				//alert( $('td[x="'+l+'"][y="'+m+'"]').value);  
			} 
			else {
				$('td[x="'+l+'"][y="'+m+'"]').addClass('dead').removeClass('alive');	
			}
			
		}
	}	
	//alert(sz);
}

LifeView.prototype.init = function (lifegrid) {
	wrapper = $(lifegrid);
	size = this.life.board.length;	
	this.life.makeBoard();
	self = this;
	var table = $('<table></table>').addClass('board');
	for(var i=0; i<size; i++){
    	var row = $('<tr></tr>');
    	for(var j=0; j<size; j++){
    		var cell = $('<td></td>').addClass('cell').addClass('dead').text(i+', ' +j).attr('x', i).attr('y', j);
    		row.append(cell);
    	}
    	table.append(row);
	}
	$('#lifegrid').append(table);
	
	
	$("td").click(function (ev) {
		$(this).toggleClass('alive').toggleClass('dead');
		var className = $(this).attr("class");
		if (className === "cell alive"){
			var x = $(this).attr('x');
			var y = $(this).attr('y');
			self.life.board[x][y].nextAlive= true;	
			//alert(self.life.board[x][y].nextAlive);
		}
	});

	

	$("button.goBtn").click(function (ev) {
        //alert("hello");
        self.life.tick();    	
    	//self.life.getNeighbors();
    	self.update();
    });
}
window.LifeView = LifeView;