<?php require_once('./config.php'); ?>
 <!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<head>
 <!-- Include Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <!-- Custom CSS -->
<style>
   body {
            padding: 20px;
            background-color: #8da1f8;
        }
    #train-status {
            margin-top: 30px;
            font-family: 'Times New Roman', Times, serif;
            color: #021b35;
        }
        h1 {
            margin-bottom: 30px;
            color: #021b35;
            font-family: 'Times New Roman', Times, serif;
            font-size: 40px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 10px;
        }
        .btn-primary {
            background-color: #0400ff;
            border-color: #11c6e6;
        }
        .btn-primary:hover {
            background-color: #b31b00;
            border-color: #0056b3;
        }
        .form-control {
            border-color: #012b58;
            color: #0f63bd;
        }
        .form-control:focus {
            border-color: #b30c00;
            box-shadow: none;
        }
        #train-status p {
            color: #1a1515;
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            width: 120px;
        }
        .container-box {
            background-color: #d3c2c2;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(240, 7, 7, 0.2);
        }
        #map {
            height: 350px;
            
        }


 

</style>
      </head>

<?php require_once('inc/header.php') ?>
  <body class="layout-top-nav layout-fixed layout-navbar-fixed" style="height: auto;">
    <div class="wrapper">
        
     <?php $page = isset($_GET['page']) ? $_GET['page'] : 'tracking';  ?>
     <?php require_once('inc/topBarNav.php') ?>
     <?php if($_settings->chk_flashdata('success')): ?>
      <script>
        alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
      </script> 
            </div>
            
     
          <?php endif; ?>
       
          <br>
          <br>
          <br>
          <br>
          <div class="container">
     
     
        <div class="container-box">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="train-select">Select Train:</label>
                        <select class="form-control" id="train-select">
                            <option value="udarata-menike">Udarata Menike</option>
                            <option value="podi-menike">Podi Menike</option>
                            <option value="uththaradevi-ice">Uththaradevi ICE</option>
                            <option value="yal-devi">Yal Devi</option>
                            <option value="udaya-devi">Udaya Devi (Night Mail)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary" onclick="trackTrain()">Track Train</button>
                    </div>
                    <div id="train-status" style="display: none;">
                        <h2>Train Status:</h2>
                        <p id="start-point"></p>
                        <p id="end-point"></p>
                        <p id="departure-time"></p>
                        <p id="arrival-time"></p>
                        <p id="current-location"></p>
                        <p id="delay-status"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="map"></div> <!-- Div to hold the map -->
                </div>
            </div>
        </div>
    </div>
    
          
    
      <!-- /.content-wrapper -->
      <?php require_once('inc/footer.php') ?>
          <!-- Include Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
