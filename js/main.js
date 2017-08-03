 function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}
		 $('#Open').click(function(){
			 lolks();
			  $.ajax({
                url: 'money.php',
                type: 'post',
                timeout: 10000, 
                success: function(data) {
					  if (data == 'OK') {
						   var lolka = getRandomInt(1,100);
			 if (lolka <= 100) {
				 $('.img_27').html('<img style="width:160px;border:5px solid black;"src="https://steamplay.ru/uploads/1676922.jpg">');
					var l = '1';
			 } /*else if (lolka > 80 && lolka <= 90) {
				 				 $('.img_27').html('<img style="width:160px;border:5px solid black;"src="http://cdn.edgecast.steamstatic.com/steam/apps/12120/header.jpg?t=1478119560">');
			var l = '2';
			 } else if (lolka > 90 && lolka <= 99) {
				 	 $('.img_27').html('<img style="width:160px;border:5px solid black;"src="http://cdn.edgecast.steamstatic.com/steam/apps/4000/header.jpg?t=1497714104">');
			var l = '3';
			 } else if (lolka == 100) {
				  $('.img_27').html('<img style="width:160px;border:5px solid black;"src="http://cdn.edgecast.steamstatic.com/steam/apps/578080/header.jpg?t=1499474448">');
			 var l = '4';
			 }
			 */
			 $('.img_27').html()
			 var lolka2 = getRandomInt(1,4);
			 if (lolka2 == 1) {
	
 $('#car').animate({
"margin-left":"-847%"
},3000)
			 } else if (lolka2 == 2) {

 $('#car').animate({
"margin-left":"-855%"
},3000)
			 } else if (lolka2 == 3) {

 $('#car').animate({
"margin-left":"-876%"
},3000)
			 }
			
function reset() {
	 $('#car').css({
"margin-left":"0%"
})
}
function present() {
		 var darkLayer = document.createElement('div'); 
                darkLayer.id = 'shadow'; 
                document.body.appendChild(darkLayer); 
 
                var modalWin = document.getElementById('popupWin'+l); 
                modalWin.style.display = 'block'; 
				var dakr = document.getElementById('shadow');
               
}
setTimeout(reset, 4100);
setTimeout(present, 4100);

					  } else {
						  function alertError() {
							  
							   $('.error').append('У вас не хватает средств!');
						    $('.error').css({
								"display":"block"
							});
							$('.error').animate({
								"opacity":"1"
							},1000);
						  }
						 alertError();
						  function closeError() {
							  
							   $('.error').html('');
						
						    $('.error').css({
								"display":"none"
							});
						
							$('.error').animate({
								"opacity":"0"
							},1000);
						  }
						  setInterval(closeError,5000);
					  }
                },
                error: function() {
						
                }
            });		
			
		 });
						
var lol = $('#email').val();	

