<?php
//...get the timestamp from the db

//$hours = date("h", $timestamp);
//$minutes = date("m", $timestamp);
//$seconds = date("s", $timestamp); 
date_default_timezone_set("Asia/Hong_Kong");
$t2 = StrToTime (date("d-m-Y H:i:s"));
$t1 = StrToTime ( '2015-09-18 16:00:00' );
$diff = $t1 - $t2;

$hours = floor ($diff / ( 60 * 60 ));
$minutes = floor (($diff - ($hours * 60 * 60))/60) ;
$seconds = floor ($diff - ($hours * 60 * 60) - ($minutes * 60));

?>

<html>
<head>
<script type  = 'text/javascript'>

        var hours, minutes, seconds, timer, count;
        count = 1;
        hours = <?php echo $hours; ?>;
        minutes = <?php echo $minutes; ?>;
        seconds = <?php echo $seconds; ?>;

</script>
<style>
html, body {
        margin: 0;
        height: 100%;
}
body {
     background: url('bg4.png') no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
}
</style>
<audio src="music.mp3" autoplay loop>
  Your browser does not support the <code>audio</code> element.
</audio>
<script type  = 'text/javascript'>
        function countDownTime(){
                if(hours >= 0 && minutes >= 0 && seconds >= 0){
                        document.getElementById("time").innerHTML = "Breaking news : Volcom staff reward dalam " + hours + " jam " + minutes + " menit " + seconds + " detik lagi"; 
                        if(seconds == 0){
                                hours = hours;
                                minutes = minutes - 1;
                                seconds = 59;
                        
                                if(minutes == 0){
                                        hours = hours - 1;
                                        minutes = 59;
                                        seconds = 59;
                                }
                        }else{
                                hours = hours;
                                minutes = minutes;
                                seconds = seconds - 1 ;
                        }
                        //document.write(hours + ":" + minutes + ":" + seconds + "<br>");
                        timer = setTimeout("countDownTime()", 1000);

                }else{
                        clearTimeout(timer);
                        document.getElementById("time").innerHTML = "Breaking news : Volcom staff reward telah dimulai."
                }
                
        }

</script>
</head>
<body>
<div style="
background: #000000;
    line-height: 2;
    text-align: center;
    color: #FFFFFF;
    font-size: 15px;
    font-family: sans-serif;
    
    position: fixed;
    bottom: 0;
    width: 100%;
    "><marquee><div id = 'time'></div></marquee></div>

<?php
        echo "<script type = 'text/javascript'>countDownTime();</script>";
?>
</body>
</html>