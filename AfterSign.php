<!doctype html>
<html>
<head>
	<style type="text/css">
		body{
                background-image:url(money.jpeg);
                background-repeat: no-repeat;
                background-size: cover;
                margin: 0;
                padding: 0;
                height: 100%;
                width: 100%;

            
            }
		h1 {
			color:black;
			
            text-align: center;
			
            font-size: 50px;
            font-weight: bold;
		}
		h2 {
			
            text-align: center;
			color:black;
            font-size: 50px;
            font-weight: bold;
		}
		
		
		#timeleft{
			color:black;
            text-align: center;
			font-size:140px;
            font-weight: bold;
		}	
		#quiz_time {

			color:black;
            text-align: center;
			font-size:50px;
            font-weight: bold;
            
		}
		
	</style>
	
	<script type="text/javascript">
		
		function checkTime(i) {
			if (i < 10) {i = "0" + i};  
			return i;
			}
		function startTime(){
			var now = new Date();
			var hour = now.getHours();
			var minute = now.getMinutes();
			var seconds = now.getSeconds(); 
			
			if(hour<=13){
				var h=Math.abs(hour-12);
				var m=Math.abs(minute-59);
				var s=Math.abs(seconds-60);
				document.getElementById('quiz_time').innerHTML = "NEXT QUIZ AT: 1 PM";
			}
			else{
				var h=Math.abs(hour-20);
				var m=Math.abs(minute-59);
				var s=Math.abs(seconds-60);
				document.getElementById('quiz_time').innerHTML = "NEXT QUIZ AT: 9 PM";
			}
			m = checkTime(m);
			s = checkTime(s);
			document.getElementById('timeleft').innerHTML = h + ":" + m + ":" + s;
			var to = setTimeout(startTime, 500); 
			if(h==0 && m==0 && s==0){
				window.location.href= "Users_digi.php";
			}
			}
		function displayTime(){
			startTime();
		    }
		    
</script>
</head>

<body onload="displayTime()">


<h1><strong>WELCOME TO THE ADDICTO</strong></h1>
    <div id="quiz_time"></div>
<h2>The next quiz starts in:</h2>
    
    <div id="timeleft"></div>

    

</body>
</html>