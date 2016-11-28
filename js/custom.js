function flag_it(thread_id,current_flag,url){
	
	id = "#star"+thread_id;

      		 //alert(id);
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
      		$(id).removeClass('fa-star-o');
      		$(id).addClass('fa-star');
      		$(id).attr('onClick', "flag_it(" + thread_id + ",0,'"+url+"')");
      		
      	}else{
      		$(id).removeClass('fa-star');
      		$(id).addClass('fa-star-o');
      		$(id).attr('onClick', "flag_it(" + thread_id + ",1,'"+url+"')");
      	}
      },
   });
}
