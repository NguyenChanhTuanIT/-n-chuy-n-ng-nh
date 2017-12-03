$(document).ready(function () {
			$('.spamqq').hide();
			$('.tieudeloaiphim').hide();
			$('#tieudephimle').html("TUYỂN TẬP PHIM").addClass("cssphim");
			$('.class1').hide();

	// body...
	 $(document).ready(function(){
          $('#p01').mouseenter(function(){

              $('#gl01').show();
            });
           $('#p01').click(function(){

              $('#gl01').show();
            });
           $('#p02').mouseenter(function(){

              $('#gl02').show();
            });
           $('#p02').click(function(){

              $('#gl02').show();
            });
      });
});

		var element =document.getElementById("toption");
    	 element.innerHTML = "";
		for(let i = 1 ; i<=10;i++){

        var elmp = document.createElement("p");
        elmp.innerHTML = i;
        elmp.onclick = function(){

        		alert("Chưa có sắn");

        }
        element.appendChild(elmp);
}

	// body...