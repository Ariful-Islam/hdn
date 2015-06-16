(function( $ ) {
 
    $.fn.deleteRow = function() {
        var answer = confirm("Are you sure, you want to delete");
		if(!answer)
		{
			return false;
		}
		
		var elem = this;
		var id = this.data('id');
		var url = this.data('link');
		
		$.ajax({
			method: "POST",
			url: url,
			data: { id : id },
			dataType: "json",
			complete: function(){
				elem.parents("tr").hide("slow");
			}
		});
    };
 
}( jQuery ));

$(document).ready(function(){
	$("body").on('click','.del_msg',function(){
		$(this).deleteRow();
	});

});