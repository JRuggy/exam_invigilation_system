<?php
//including the database connection file
include("../../db/config.php");

$re = "SELECT * FROM timer ORDER BY id DESC;";
$result = mysqli_query($mysqli, $re);

// $fo = 1;
while ($res = mysqli_fetch_array($result)) {
    // echo $ret;
    // $id = $res['id'];
    $date = $res['date'];
    $h = $res['h'];
    $m = $res['m'];
    $s = $res['s'];
?>

    <tr>
        <td><?php echo $date; ?></td>
        <td><?php echo $h; ?></td>
        <td><?php echo $m; ?></td>
        <td><?php echo $s; ?></td>
    </tr>

<?php
}

?>

<p id="demo"></p>

<script>
    var countDownDate = <?php
                        echo strtotime("$date $h:$m:$s") ?> * 1000;
    var now = <?php echo time() ?> * 1000;

    // Update the count down every 1 second
    var x = setInterval(function() {
        now = now + 1000;
        // Find the distance between now an the count down date
        var distance = countDownDate - now;
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }

    }, 1000);
</script>