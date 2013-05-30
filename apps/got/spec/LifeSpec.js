/**
 * @author Chris
 */

describe('Conway\'s Game of Life, a zero player game',function(){

  it('makes the board',function(){
	  var life   = new Life(5);
	  expect(life.getBoardSize()).toEqual(5);
  });
  
  it('cell can tell if it is alive', function(){
	  var cell = new Cell();
	  expect(cell.isAlive()).toEqual(false);
  });
  
  it('has cells in the board', function(){
	  var life   = new Life(5);
	  life.makeBoard();
	  expect(life.board[1][1].isAlive()).toEqual(false);
  });
  
  it('cell with < 2 neighbors will die', function(){
	  var cell   = new Cell();
	  cell.alive = true;
	  cell.liveNeighbors(0);
	  expect(cell.nextAlive).toEqual(false);
  });
  
  it('live cell with 3 neighbors will continue to live', function(){
	  var cell = new Cell();
	  cell.alive = true;
	  cell.liveNeighbors(3);
	  expect(cell.nextAlive).toEqual(true);
  });

  it('live cell with 2 neighbors will continue to live', function(){
	  var cell = new Cell();
	  cell.alive = true;
	  cell.liveNeighbors(2);
	  expect(cell.nextAlive).toEqual(true);
  });

  it('live cell with 4 or more neighbors will die', function(){
	  var cell = new Cell();
	  cell.alive = true;
	  cell.liveNeighbors(4);
	  expect(cell.nextAlive).toEqual(false);
  });
  
  it('dead cell with 3 neighbors will become alive', function(){
	  var cell = new Cell();
	  cell.alive = false;
	  cell.liveNeighbors(3);
	  expect(cell.nextAlive).toEqual(true);
  });

  it('Life returns the correct number of live neighbors for cell [2][2] in life board', function(){
  	  var life   = new Life(5);
	  life.makeBoard();
	  for (var x=0; x<3;x++){
	  	for (var y=0; y<3;y++){
	  		life.board[x][y].alive = true;	
	  	}	
	  }
	  var numOfNbrs = life.getNeighbors(1,1);
	  expect(numOfNbrs).toEqual(8);	
  });

  it('Life returns the correct number of live neighbors for cell [0][0] in life board', function(){
  	  var life   = new Life(5);
	  life.makeBoard();
	  life.board[0][1].alive = true;
	  life.board[1][0].alive = true;
	  life.board[1][1].alive = true;
	  var numOfNbrs = life.getNeighbors(0,0);
	  expect(numOfNbrs).toEqual(3);	
  });  

  it('Life returns the correct number of live neighbors for cell [4][4] in life board', function(){
  	  var life   = new Life(5);
	  life.makeBoard();
	  life.board[3][3].alive = true;
	  life.board[3][4].alive = true;
	  life.board[4][3].alive = true;
	  var numOfNbrs = life.getNeighbors(4,4);
	  expect(numOfNbrs).toEqual(3);	
  });  
  
});