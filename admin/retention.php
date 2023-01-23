<?php
    include "../conn.php";

    $percentage = 50;
    $totalWidth = 350;

    $new_width = ($percentage / 100) * $totalWidth;

    if (!$conn) {
        # code...
       echo "Problem in database connection! Contact administrator!" . mysqli_error();
    }else{
            $sql ="SELECT * FROM pie";
            $result = mysqli_query($conn,$sql);
            $chart_data="";
            while ($row = mysqli_fetch_array($result)) { 
    
               $productname[]  = $row['name']  ;
               $sales[] = $row['values'];
           }
    
    
    }
?>
   
   
   <!DOCTYPE html>
<html lang="en">
<head>
    <title>HRIS Admin Request</title>
    <!-- <link rel="icon" type="image/x-icon" href="img/hricon.ico"> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../image/hris.png" type="image/png">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../admin/css/navb.css">
    <link rel="stylesheet" href="../admin/css/retention.css">
     <!-- Glyp from git cdn JS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
     <script src="https://unpkg.com/phosphor-icons"></script>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<style>

</style>
<body>
    <nav class="sidebar close">

        <header>
            <div class="image">
                <div class="image">
                    <img src="../image/hris.png" alt="">
                </div>

                <div class="logo-text text">
                    <span class="profession">Hello</span>
                    <div class="name">Solomon</div>
                    <div class="name">Cabreza</div>
                    <span class="profession">Web developer</span>
                </div>
            </div>
            <i class='ph-caret-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <div class="title">
                    <i class="ph-chalkboard icon"></i>
                    <h5>Admin Dashboard<h5>
                </div>

                    <button data-toggle="collapse" class="ph-address-book dropdown-btn">Manges <i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-container">
                            <a href="request.php">Personnel Request</a>
                            <a href="timeRecord.html">Daily Time Record</a>
                            <a href="jobInfo.html">Job Info</a>
                        </div>

                    <button data-toggle="collapse" class="ph-newspaper-clipping dropdown-btn">Reports <i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-container">
                            <a href="201files.html">201 Files</a>
                            <a href="retention.php">Retention Report</a>
                            </div>

                    <button data-toggle="collapse" class="ph-list-plus dropdown-btn">Data Tables <i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-container">
                            <a href="dataTable.html">Profile</a>
                            <a href="#">Management</a>
                            <a href="#">Upkeep</a>
                        </div>

                    <button data-toggle="collapse" class="ph-gear dropdown-btn">Settings <i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-container">
                            <a href="system.php">System Access</a>
                            <a href="#">User List</a>
                        </div>
            </div>

            <div class="bottom-content">
                <div id="txt" class="toggle-switch"></div>
            </div>
        </div>
    </nav>

    <section class="home">
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="textLabel"><i class="ph-chalkboard icon"></i><a>Admin | Personal Request</a></div>
                <div class="userInfo">
                    <div class="info">
                        <div class="nameInfo">SolCabreza</div>
                        <div class="company">Iconiqlast</div>
                        <div class="position">Junior UX / UI Designer</div>
                    </div>
                    <div class="userImage">
                        <img src="../image/prof.png" alt="">
                        <a href="">Settings <i class="ph-gear"></i></a>
                    </div>
                </div> 
            </nav>

            <div class="formRequest">
                <div class="headPie">
                    <div class="CompanyNav">
                        <img src="../image/Logo.png" alt="">
                        <label class="companyName">Iconiqlast Studios</label>
                        <i class="ph-caret-circle-down phIcon"></i>
                    </div>
                    <div class="Boxsearch">
                        <div class="searchs">
                            <input type="text" class="searchTerms" placeholder="Name / Position / Code">
                            <i class="fa fa-search"></i>
                            </input>
                        </div>
                    </div>
                </div>
                <div class="wrapCard">

                    <div class="pieWrap">
                        <!--Pie Chart -->
                        <div style="width: 260px;height: 260px;text-align:center">
                            <canvas  id="chartjs_pie"></canvas> 
                        </div> 
                        <div class="pieDets">
                            <Label>Retention Rate</Label>
                            <div class="reportFrame">
                                <Label>115 Total employees this month</Label>
                                <Label>8 Resigned / Terminated</Label>
                                <Label>7 New Hires</Label>
                            </div>
                            <Label>114 Remaining</Label>
                        </div>
                    </div>

                    <div class="RetentionCard">
                        <div class="company-head">
                            <a>Head:</a>
                            <p>Ico Natividad</p>
                        </div>
                        <div class="Specialization">
                            <a>Company Specialization:</a>
                            <p>Graphic Design, Video Editing, Branding, etc</p>
                        </div>
                        <p>Lörem ipsum enkortsdator ångerrösta vulkanresa, kungspudel, för explainer. Mobilblottare flexitarian givomat. 
                            Plånboksbröllop julgranssyndrom. Kompetensväxling klimatvänlig möpare trafficking. Coronaanpassa karriärcoach dogmafilm.
                             Snurrmästare klimatflykting säpojogg fjärrnyckel. Medborgarforskning nätläkare social distansering transitflykting pappafeminist. 
                             Vandrande skolbuss en askstoppad, 
                            vinstvarning. Frisparkssprej nätpoker. Du kan vara drabbad. </p>
                        <p>Göra en labrador 24-timmarsmyndighet antivaxxare robotfälla. Nätdeklarant snippa, dygnis digifysisk. </p>
                    </div>
                </div>
        </div>
    </section>
    <script src="../admin/function/slider.js"></script>
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="../admin/function/script.js"></script>
    <script>
        feather.replace()
    </script>
    <script type="text/javascript">
      var ctx = document.getElementById("chartjs_pie").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels:<?php echo json_encode($productname); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#FA3E3E",
                                "#8ECC36",
                                "#FF9000",
                            ],
                            data:<?php echo json_encode($sales); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: false,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Montserrat',
                            fontSize: 12,
                        }
                    },
 
 
                }
                });
    </script>
   
</body>
</html>
