 $( function() {

    $( "#sortable" ).sortable();

    $( "#sortable" ).disableSelection();

    $(".btnfinish ").click(function(event) {
    	/* Act on the event */
    	var test = $(this).text();
    	var id = $(this).attr('data-raw');
    	var keme = $(this).parent().parent();

    	switch(test.trim())
    	{
    		case "Approved" :
    			$.ajax({
    				type : "POST",
    				url  : $("base").attr('href') + "index.php/common/approved",
    				data : { issueid : id },
    				success : function(data){
    					if(data == "success")
    					{
    					keme.hide();
    					}
    				},
    				error  : function(){

    			}
    	 		});
     		break;

     		case "Finish" :
     			$.ajax({
    				type : "POST",
    				url  : $("base").attr('href') + "index.php/common/done",
    				data : { issueid : id },
    				success : function(data)
    					{
    					if(data == "success")
    					{
    					keme.hide();
    					}
    				},
    				error  : function(){

    			}
    	 		});
     			break;

        case "Dev" :
        window.location = $("base").attr('href') + "index.php/createissue/createWithTrackId/" + id;
        keme.hide();
        return false;
      break;

      case "Dev" :
      var post = $(this).closest("div").prev().closest('div').parent().parent().parent();
  		$.get($("base").attr('href') + "index.php/listofissue/history/" + id, function(data){
  			post.prepend(data);
  		});
  		return false;
    break;


     }

    });
});
