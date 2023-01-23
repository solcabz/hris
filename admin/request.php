<?php 
   include "../conn.php";  
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
    <link rel="stylesheet" href="../admin/css/requests.css">
    <link rel="stylesheet" href="../admin/css/scroll.css">

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
                <div class="requestLeft">
                    <div class="Boxsearch">
                        <div class="searchs">
                            <input type="text" class="searchTerms" placeholder="Name / Position / Code">
                            <i class="fa fa-search"></i>
                            </input>
                        </div>
                    </div>
                    <div class="myRequest">
                        <label><i data-feather="user-check" class="feathers"></i> My Requests</label>
                        <a>8 New Applicants</a>
                        <a>2 Pending Request/s</a>
                    </div>
                    <div class="allRequest">
                        <label><i data-feather="users" class="feathers"></i> All Request</label>
                        <a>8 New Applicants</a>
                        <a>2 Pending Request/s</a>
                    </div>
                    <div class="requestMID">
                        <label><i data-feather="check-circle" class="feathers"></i> Approved Request</label>
                        <label><i class="ph-fire reqIcon"></i> Deleted Request</label>
                    </div>
                    <div class="botRequest">
                        <a><i data-feather="plus-square" class="feathers"></i> Add Employee</a>
                        <button><i data-feather="trash-2" class="feathers"></i> Delete</button>
                    </div>
                </div>
                <div class="requestRight cute_scroll">
                    <label class="titleLabel">Results for Data Admin...</label>
                        <!-- <div id="containers">
                            <div id="number">0</div>
                            <input type="range" min="0" max="100" value="0"  id="slider">
                        </div> -->
                    <div class="grid-container">
                    <?php
						$query=mysqli_query($conn, "SELECT * FROM `employeedeetails`") or die(mysqli_error());
						while($fetch=mysqli_fetch_array($query)){
					?>

                        <div class="applicantCard"  >
                            <div class="positionDetails">
                                <div class="posdet">
                                    <i data-feather="user-plus" class="feathers"></i>
                                    <a><?php echo $fetch['jobTitle']?></a>
                                </div>
                            </div>
                            <div class="nameDetails">
                                <div class="nameProfile">
                                    <label><?php echo $fetch['FirstName']?></label>
                                    <label><?php echo $fetch['DateHired']?></label>
                                </div>
                                <div class="nameProfile2"> 
                                    <label for=""><?php echo $fetch['code']?></label>
                                    <!-- <a id=" class="view" data-toggle="modal" href="#myModal">view ...</a> -->
                                    <a id="myBtn" class="view">view ...</a>
                                    <!-- <a class="view" id="myBtn" >view ...</a> -->
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    
                </div>
            </div>
              
        </div>
        
                <!-- The Modal -->
                <div id="myModal" class="modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <?php
						// $query=mysqli_query($conn, "SELECT * FROM `employeedeetails`") or die(mysqli_error());
						// while($fetch=mysqli_fetch_array($query)){
					?>
                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="posLeft">
                                    <i class="ph-list-plus listICN"></i>
                                    <a>open position</a>
                            </div>
                            <div class="posRight">
                                <a>View Applicants</a>
                                <i data-feather="edit-3" class="listICN"></i>
                                <i data-feather="trash-2" class="listICN"></i>
                                <span class="closed">&times;</span>
                            </div>
                        </div>
                        <div class="modal-body" id="detail">
                            <div class="compWrap">
                                <img src="../image/Logo.png" alt="">
                                <a>Iconiqlast Studios</a>
                            </div>
                            <h1>Senior Motion Graphics Artist</h1>
                            <div class="posDet">
                                <div class="posDet-left">
                                    <div class="posLeft">
                                        <i class="ph-money listICN"></i>
                                        <a>30,000 - 45,000php</a>
                                    </div>
                                    <div class="posLeft">
                                        <i class="ph-briefcase listICN"></i>
                                        <a>Fully remote</a>
                                    </div>
                                    <div class="posLeft">
                                        <i class="ph-clock listICN"></i>
                                        <a>45 Hours Weekly</a>
                                    </div>

                                        <div class="posLeft">
                                            <i data-feather="thumbs-up" class="listICN"></i>
                                            <a>Benefits</a>
                                        </div>
                                        <ul>
                                            <li>Free Internet Plan</li>
                                            <li>Free Company Phone</li>
                                        </ul>
                                </div>
                                <div class="posDet-right">
                                    <p>Lörem ipsum enkortsdator ångerrösta vulkanresa, kungspudel, för explainer. Mobilblottare flexitarian givomat. 
                                        Plånboksbröllop julgranssyndrom. Kompetensväxling klimatvänlig möpare trafficking. Coronaanpassa karriärcoach dogmafilm. 
                                        Snurrmästare klimatflykting säpojogg fjärrnyckel. Medborgarforskning nätläkare social distansering transitflykting pappafeminist.
                                        Vandrande skolbuss en askstoppad, vinstvarning. Frisparkssprej nätpoker. Du kan vara drabbad. 
                                    </p>
                                    <p>
                                        Göra en labrador 24-timmarsmyndighet antivaxxare robotfälla. Nätdeklarant snippa, dygnis digifysisk. 
                                        Foliehatt stafettläkare utan normcore än koldioxidsänka, i resultatvarna. Du kan vara drabbad. 
                                        Preppare wiki halvtaktsjobb. Temakonfirmation rödgrönrosa. Becknarväska R-tal nixa fast lyssna in. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php //} ?>
                </div>
    </div>
    </section>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   -->
    <script src="../admin/function/modalls.js"></script>
    <script src="../admin/function/slider.js"></script>
    <script src="../admin/function/script.js"></script>
    <script>
        feather.replace()
    </script>
    <!-- <script>
        $('.view').on('click',function(){
    $('.modal-body').load('getContent.php?id=2',function(){
        $('#myModal').modal({show:true});
    });
});
    </script> -->
   
</body>
</html>
