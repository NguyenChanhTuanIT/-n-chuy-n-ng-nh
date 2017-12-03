function tatquangcao()
			{
				try {
			var input =[];
	   	 input[0] = "spamqq2";
	   	 input[1] = "spamqq3";
	     input[2] = "spamqq4";
           for(var i = 0; i<=input.length;i++){

               	let x = document.getElementById(input[i]);
               	x.innerHTML ="";

               }
           }
           catch(err){
                    console.log(err);
           }

			
			}
function batquangcao(){
	try {
	var input =[];
	    input[0] = "spamqq1";
	    input[1] = "spamqq2";
	    input[2] = "spamqq3";
	    input[3] = "spamqq4";
               for(var i = 0; i<=input.length;i++){

               	let x = document.getElementById(input[i]);
               	x.innerHTML = "<div class='col-12' ><p class = 'tittlequangcao'>Khu vực đặt Quảng cáo<p> </div>";

               }
           }
           catch(err){
                    console.log(err);
           }

}

$(document).ready(function(){



});
function tatden(){

 $('body').addClass("Demo");
 $('footer').addClass("footercss");
  
}
function batden(){

  $('body').removeClass("Demo");
  $('footer').removeClass("footercss");
}

//ahihi dang nhap
function loginfuntion(){


}

function dangnhapfun(){

  alert("ahihi");
}