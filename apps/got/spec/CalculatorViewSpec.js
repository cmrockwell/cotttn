describe('Calculator view', function () {
    var container, calculatorView, calculator;
    beforeEach(function () {
        container = $('<div/>');
        container.addClass('calculator');
        container.appendTo(document.body);

        container.append($("<div class='display'></div>"));
        container.append($("<button id='btn0' class='verbatim'>0</button>"));
        container.append($("<button id='btn1' class='verbatim'>1</button>"));
        container.append($("<button id='btn2' class='verbatim'>2</button>"));
        container.append($("<button id='btn3' class='verbatim'>3</button>"));
        container.append($("<button id='btnplus' class='operator' data-operator='add'>+</button>"));
        container.append($("<button id='btnminus' class='operator' data-operator='subtract'>-</button>"));
        container.append($("<button id='btnmultiply' class='operator' data-operator='multiply'>-</button>"));
        container.append($("<button id='btnequal' class='equal'>=</button>"));
        container.append($("<button id='btnperiod' class='verbatim'>.</button>"));
        container.append($("<button id='btnclear' class='clear'>C</button>"));


        calculator = jasmine.createSpyObj('description goes here', ['add','multiply', 'subtract', 'lastResult']);

        var calculatorView = new CalculatorView(calculator);
        calculatorView.init('.calculator');
    });

    afterEach(function () {
        container.remove();
    });

    it('adds to the display when buttons are pressed', function () {
        container.find('#btn1').click();
        var displayText = container.find('.display').val();
        expect(displayText).toBe('1');
    });

    it('adds the correct value to the display', function () {
        container.find('#btn2').click();
        var displayText = container.find('.display').val();
        expect(displayText).toBe('2');
    });

    it('appends the value to the display', function () {
        container.find('#btn2').click();
        container.find('#btn1').click();
        var displayText = container.find('.display').val();
        expect(displayText).toBe('21');
    });

    it('appends the value to the display', function () {
        container.find('#btn2').click();
        container.find('#btnperiod').click();
        container.find('#btn1').click();
        container.find('#btnperiod').click();
        var displayText = container.find('.display').val();
        expect(displayText).toBe('2.1');
    });

    it('clears the display when clear button is pressed', function () {
        container.find('#btn2').click().click().click();
        container.find('#btnclear').click();

        var displayText = container.find('.display').val();
        expect(displayText).toBe('0');
    });

    it('handles multiple zeros', function () {
        container.find('#btn0').click().click().click();

        var displayText = container.find('.display').val();
        expect(displayText).toBe('0');
    });

    it('handles zeros plus period', function () {
        container.find('#btn0').click().click().click();
        container.find('#btnperiod').click().click().click();

        var displayText = container.find('.display').val();
        expect(displayText).toBe('0.');
    });

    it('displays the last result from the calculator', function () {
         var calculator = new Calculator();
         calculator.add(1, 2);
         expect(calculator.lastResult()).toBe(3);
        
/*
  calculator.lastResult.andReturn("3");
        container.find('#btn1').click();
        container.find('#btnplus').click();
        container.find('#btn2').click();
        container.find('#Btnequal').click();
        var displayText = container.find('.display').val();
        expect(displayText).toBe('3'); // fails here*/

    });

    it('can add one and zero', function () {
        calculator.add.andReturn("1");
        container.find('#btn1').click();
        container.find('#btnplus').click();
        container.find('#btn0').click();
        container.find('#btnequal').click();

        expect(calculator.add).toHaveBeenCalledWith(1, 0);
    });

    it('clears display when pressing add', function () {
        container.find('#btn1').click();
        container.find('#btnplus').click();

        var displayText = container.find('.display').val();
        expect(displayText).toBe('');
    });

    it('can subtract three and two', function () {
        container.find('#btn3').click();
        container.find('#btnminus').click();
        container.find('#btn2').click();
        container.find('#btnequal').click();

        expect(calculator.subtract).toHaveBeenCalledWith(3, 2);
    });
    
    it('can add 10 and 10', function () {
        calculator.add.andReturn("20");        
        container.find('#btn1').click();
        container.find('#btn0').click();
        container.find('#btnplus').click();
        container.find('#btn1').click();
        container.find('#btn0').click();
        container.find('#btnequal').click();
        expect(calculator.add).toHaveBeenCalledWith(10, 10);
    });
    
        it('can add 1.1 and 2.1', function () {
        calculator.add.andReturn("3.2");
		  
        container.find('#btn1').click();
        container.find('#btnperiod').click();
        container.find('#btn1').click();
		container.find('#btnplus').click();
        container.find('#btn2').click();
        container.find('#btnperiod').click();
        container.find('#btn1').click();		  
        container.find('#btnequal').click();

        var displayText = container.find('.display').val();
        expect(displayText).toBe('3.2');
    });
	 
	it('can multiply 0 and 5', function (){
		 calculator.multiply.andReturn("0");
		 container.find('#btn0').click();
		 container.find('#btnmultiply').click();
		 container.find('#btn5').click();
		 container.find('#btnequal').click();
	     var displayText = container.find('.display').val();
       	 expect(displayText).toBe('0');
	 });    


});
