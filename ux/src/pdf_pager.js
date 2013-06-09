    
var pdf_pager = function(path, pages){
	
	var url = path; //;
	var page_count = 1;
	var page_max = pages; //15;
	var self = this;
	var prevBtn = $('<button>Previous Page</button>').addClass('btn').attr('id','prevPage').attr('disabled','disabled');
	var nextBtn = $('<button>Next Page</button>').addClass('btn').attr('id','nextPage');
	var pagerBtns = $('div.pager');
	    
	if (page_max>1){
		pagerBtns.append(prevBtn);
		pagerBtns.append(nextBtn);
	}
	    
	
	PDFJS.disableWorker = true;
	
	prevBtn.click(function(evt){
		self.getPage(--page_count);
		if (page_count <= 1) {page_count =1; }
		page_count === 1 ? 	prevBtn.attr('disabled','disabled') : 	prevBtn.removeAttr('disabled');    
		page_count === page_max ? nextBtn.attr('disabled', 'disabled') : nextBtn.removeAttr('disabled');
	});
	
	nextBtn.click(function(evt){
		self.getPage(++page_count);
		if (page_count >= page_max) {page_count =page_max; }
		page_count === 1 ? 	prevBtn.attr('disabled','disabled') : 	prevBtn.removeAttr('disabled');    
		page_count === page_max ? nextBtn.attr('disabled', 'disabled') : nextBtn.removeAttr('disabled');
	});
	
	this.getPage = function(page){
		page = page || 1;
		// Asynchronous download PDF as an ArrayBuffer
		PDFJS.getDocument(url).then(function getPdfHelloWorld(pdf) {
	      pdf.getPage(page_count).then(function getPageHelloWorld(page) {
	        var scale = 1.0;
	        var viewport = page.getViewport(scale);
	        var canvas = document.getElementById('the-canvas');
	        var context = canvas.getContext('2d');
	        canvas.height = viewport.height;
	        canvas.width = viewport.width;
	
	        page.render({canvasContext: context, viewport: viewport});
	      });
	    });
	}
	
}
window.pdf_pager = pdf_pager;
