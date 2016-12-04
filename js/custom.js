function flag_it(thread_id,current_flag,thread_comment,url){
	
   
   
   if(thread_comment ==1){
   	
   		comment_id = thread_id;
   	
   	
	   	id = "#like"+comment_id;
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
	      		
	      		
	      		$(id).removeClass('fa-star');
	      		$(id).addClass('fa-star-o');	
	      		$(id).attr('onClick', "flag_it(" + thread_id + ",0,'"+url+"')");
	      		
	      	}else{
	      	
	      		$(id).removeClass('fa-star-o');
	      		$(id).addClass('fa-star');
	      		$(id).attr('onClick', "flag_it(" + thread_id + ",1,'"+url+"')");
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
      		$(id).attr('onClick', "flag_it(" + thread_id + ",0,'"+url+"')");
      		
      	}else{
      	
      		$(id).removeClass('fa-star-o');
      		$(id).addClass('fa-star');
      		$(id).attr('onClick', "flag_it(" + thread_id + ",1,'"+url+"')");
      	}
      },
   });
   
   }
}
