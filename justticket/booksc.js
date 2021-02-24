
		<script type="text/javascript">
			var total=0;
			var count=new Array(48);
		    for(var i=0;i<count.length;i++){
		    	count[i]=0;
		    }
			var button=document.querySelectorAll(".seatmatrix");
			var pchan=document.querySelector("#pricechange");
			function myfun(x,y){

			// for(var i=0;i<button.length;i++){
			//button.addEventListener("click", function(){
				button[y].classList.toggle("change");
			}

		
		
		function price(m,n){
			count[n]=count[n]+1;
			var check=count[n];
			if(check%2==0){
				total=total-m;
				// button[y].classList.remove("change")
			}
			else{
				total=total+m;
				// button[y].classList.add("change");
			}
			  // alert(total);
			 pchan.innerHTML=total;	   
		}

		</script>
