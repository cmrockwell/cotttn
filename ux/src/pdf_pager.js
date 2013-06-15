    
var pdf_pager = function(path, pages, pageDiv, can_id){
	
	this.can_id = can_id;
	var url = path; //;
	var page_count = 1;
	var page_max = pages; //15;
	var self = this;
	this.prevBtn = $('<button>Previous Page</button>').addClass('btn').attr('id','prevPage'+pageDiv.attr('id')).attr('disabled','disabled');
	this.nextBtn = $('<button>Next Page</button>').addClass('btn').attr('id','nextPage'+pageDiv.attr('id'));
	this.pagerBtns = pageDiv || $('div.pager');
	    
	if (page_max>1){
		this.pagerBtns.append(this.prevBtn);
		this.pagerBtns.append(this.nextBtn);
	}
	    
	
	PDFJS.disableWorker = true;
	
	this.prevBtn.click(function(evt){
		self.getPage(--page_count, self.can_id);
		if (page_count <= 1) {page_count =1; }
		page_count === 1 ? 	self.prevBtn.attr('disabled','disabled') : 	self.prevBtn.removeAttr('disabled');    
		page_count === page_max ? self.nextBtn.attr('disabled', 'disabled') : self.nextBtn.removeAttr('disabled');
	});
	
	this.nextBtn.click(function(evt){
		self.getPage(++page_count, self.can_id);
		if (page_count >= page_max) {page_count =page_max; }
		page_count === 1 ? 	self.prevBtn.attr('disabled','disabled') : 	self.prevBtn.removeAttr('disabled');    
		page_count === page_max ? self.nextBtn.attr('disabled', 'disabled') : self.nextBtn.removeAttr('disabled');
	});
	
	this.getPage = function(page, canvasID){
		page = page || 1;
		// Asynchronous download PDF as an ArrayBuffer
		PDFJS.getDocument(url).then(function getPdfHelloWorld(pdf) {
	      pdf.getPage(page_count).then(function getPageHelloWorld(page) {
	        var scale = 1.0;
	        var viewport = page.getViewport(scale);
	        var canvas =   document.getElementById(canvasID) ;//||document.getElementById('the-canvas');
	        var context = canvas.getContext('2d');
	        canvas.height = viewport.height;
	        canvas.width = viewport.width;
	
	        page.render({canvasContext: context, viewport: viewport});
	      });
	    });
	}
	
}
window.pdf_pager = pdf_pager;
