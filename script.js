$( document ).ready(function() {
$("#services-form-page").submit(function(){ 		
		var str = $(this).serialize();					
		$.ajax({
			type: "POST",
			url: "/includes/forms/services-form-page/sendform.php",
			data: str,
			success: function(msg) {									        
				if(msg == 'spam'){					
					mess = 'Сообщение предположительно является спамом.';
				}else if(msg == 'ok'){
          mess = '<i class="far fa-check-circle text-success"></i>Сообщение успешно отправлено!';					
				}else{
          mess = '<i class="fas fa-exclamation-circle"></i>Произошла ошибка.';
        }
        $('.services-form-page-message').html('<p class="message">'+mess+'</p>');
        $('#services-form-page').remove();			
			}
		});
		return false;
  })
  }
