<?php

include("dbs.php");

$query = "select june,july,august from  saleschart";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) >= 1) {
    while ($row = mysqli_fetch_assoc($result)) {

        $june = $row['june'];
        $july = $row['july'];
		$august = $row['august'];
    }
}
    else
    {
    echo "somting went wrong";

    }
?>

<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css" />
 <link rel="stylesheet" href=<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css" />

</head>
<h1>Welcome to <?php echo $_settings->info('name') ?> - Admin Panel</h1>
<hr class="border-info">
<div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-warning elevation-1"><i class="fas fa-train"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Total Trains</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `train_list` where delete_flag = 0 ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-info elevation-1"><i class="fas fa-calendar"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Daily Schedules</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `schedule_list` where `type` = 1 and delete_flag=0 ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fa-calendar-day"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">One-Time Schedules</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `schedule_list` where `type` = 2 and delete_flag=0 ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-teal elevation-1"><i class="fas fa-ticket-alt"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Reserved Passengers</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `reservation_list` where  unix_timestamp(schedule) >= '".(time())."' ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
</div>

<canvas id="myChart" style="height: 300px; width: 800px;"></canvas>

<?php
echo "<input type='hidden' id= 'june' value ='$june'>"; 
echo "<input type='hidden' id= 'july' value ='$july'>"; 
echo "<input type='hidden' id= 'august' value ='$august' >";

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js" integrity="sha512-U3hGSfg6tQWADDQL2TUZwdVSVDxUt2HZ6IMEIskuBizSDzoe65K3ZwEybo0JOcEjZWtWY3OJzouhmlGop+/dBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha512-60KwWtZOhzgr840mc57MV8JqDZHAws3w61mhK45KsYHmhyNFJKmfg4M7/s2Jsn4PgtQ4Uhr9xItS+HCbGTIRYQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js" integrity="sha512-OD9Gn6cAUQezuljS6411uRFr84pkrCtw23Hl5TYzmGyD0YcunJIPSBDzrV8EeCiFxGWWvtJOfVo5pOgB++Jsag==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" integrity="sha512-mf78KukU/a8rjr7aBRvCa2Vwg/q0tUjJhLtcK53PHEbFwCEqQ5durlzvVTgQgKpv+fyNMT6ZQT1Aq6tpNqf1mg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    var june = document.getElementById("june").value;
    var july = document.getElementById("july").value;
    var august = document.getElementById("august").value;
    

    window.onload = function()
    {
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };
        var config = {
            type: 'bar',
            data: {
                borderColor : "#00000",
				
                datasets: [{
                    data: [
                        june,
                        july,
						august,
                    ],
                    borderColor :"#4500",
                    borderWidth : "1",
                    hoverBorderColor : "#000",
					

                    label: 'Monthly Sales Report',

                    backgroundColor: [
                       
                        "#ff0060",
                        "#fffff"

                    ],
                    hoverBackgroundColor: [
                       
                        "#12ffa7",
                        "#ffe400"
                    ]
                }],

                labels: [
				
                    'june',
                    'July',
					'august'
                ]
            },

            options: {
                responsive: true
				

            }
        };
        var ctx = document.getElementById('myChart').getContext('2d');
        window.myPie = new Chart(ctx, config);


    };
</script>

<hr>
