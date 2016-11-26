function flag_it(thread_id,current_flag,url){
	
	alert(BASE_URL );
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
      	alert('okk');
      	if(current_flag == 1){
      		className = 'fa-star-o';
			style = 'color:gray';
      		$('#id').attr("class",className);
      		$('#id').attr("stype",style);
      	}else{
      		className = 'fa-star';
			style = 'color:red';
      		$('#id').attr("class",className);
      		$('#id').attr("stype",style);
      	}
      },
   });
}
