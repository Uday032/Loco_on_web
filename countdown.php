<!doctype html>
<html>
<head>
    <style type="text/css">
        h1 {
            position:absolute;
            top:10px;
            left:600px;
            color:red;
            font-size:30px;
        }
    </style>
    <script type="text/javascript">
        function countdowntimer(){
                var timeleft = 16;
                var downloadTimer = setInterval(function(){
                timeleft--;
                document.getElementById("countdowntimer").textContent = timeleft;
                if(timeleft==0){
                //yha pr apni saari conditions daal de aur neeche wali line mein a.html ki jagah vhi page daal de jis pr ye code hai
                                window.location.href="Users_digi.php";
                }
                if(timeleft <= 0)
                                clearInterval(downloadTimer);
                                },1000);
            }

    </script>
</head>
<body>
<script type="text/javascript">
                countdowntimer();
</script>
<h1 id="countdowntimer" ></h1>
</body>
</html>