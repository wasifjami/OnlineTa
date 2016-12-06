function flag_it(thread_id,current_flag,thread_comment,url){
	
   
   
   if(thread_comment ==1){
   	
   		comment_id = thread_id;
   	   	id = "#like"+comment_id;
   	   	thumb = "#thumb"+comment_id;
   	   	point = "#points"+ comment_id;
   	   	
   	     //alert(thumb);
	   $.ajax({
	      		
	      type: 'POST',
	      datatype: 'JSON',
	      url: url,
	      data: {
	         current_flag: current_flag,
	         comment_id: comment_id
	      },
	      error: function() {
	         $('#info').html('<p>An error has occurred</p>');
	      },
	      success: function() {
	      	if(current_flag == 1){
	      		
	      		val = parseInt($(thumb).html()) - 1;
	      		$(point).html('Points: '+val*10);
	      		$(id).attr('onClick', "flag_it(" + thread_id + ",0,1,'"+url+"')");
	      		$(thumb).html(val);
	      		
	      	}else{
	      		
	      		val = parseInt($(thumb).html()) + 1;
	      		$(point).html('Points: '+val*10);
	      		$(id).attr('onClick', "flag_it(" + thread_id + ",1,1,'"+url+"')");
	      		$(thumb).html(val);
	      	}
	      },
	   });
	   
   	
   	
   	
   	
   	
   	
   	
   	
   	
   }else{   		 
   id = "#star"+thread_id;
   $.ajax({
      		
      type: 'POST',
      datatype: 'JSON',
      url: url,
      data: {
         current_flag: current_flag,
         thread_id:thread_id
      },
      error: function() {
         $('#info').html('<p>An error has occurred</p>');
      },
      success: function() {
      	if(current_flag == 1){
      		$(id).removeClass('fa-star');
      		$(id).addClass('fa-star-o');	
      		$(id).attr('onClick', "flag_it(" + thread_id + ",0,0,'"+url+"')");
      		
      	}else{
      	
      		$(id).removeClass('fa-star-o');
      		$(id).addClass('fa-star');
      		$(id).attr('onClick', "flag_it(" + thread_id + ",1,0,'"+url+"')");
      	}
      },
   });
   
   }
}
