(function( $ ) {
 
    $.fn.deleteRow = function() {
        var id = this.data('id');
		var url = this.data('link');
		
		$.ajax({
			method: "POST",
			url: url,
			data: { id : id },
			dataType: "json",
			success: function(data){
				this.parent().hide("slow");
			}
		});
    };
 
}( jQuery ));

$(document).ready(function(){
	$("body").on('click','.del_msg',function(){
		$(this).deleteRow();
	});

});