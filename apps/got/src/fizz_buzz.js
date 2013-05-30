/**
 * @author Chris
 */

var fb = {
	init : function(){
		
	}		
}

fb.prototype.fizzBuzz(v){
	  if(v%15 ===0)
	    return 'fizzbuzz';
	  else if (v % 3 === 0)
	    return 'fizz'
	  else if (v % 5 ===0)
	    return 'buzz';
	  else return v;
}


fb.init();
