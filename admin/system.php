
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <title>HRIS Admin System</title>
       <!-- <link rel="icon" type="image/x-icon" href="img/hricon.ico"> -->
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="icon" href="../image/hris.png" type="image/png">
       <!----======== CSS ======== -->
       <link rel="stylesheet" href="../admin/css/navb.css">
       <link rel="stylesheet" href="../admin/css/system.css">
        
        <!-- Glyp from git cdn JS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <script src="https://unpkg.com/phosphor-icons"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
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
                   <div class="textLabel"><i class="ph-gear icon"></i><a>Admin | System</a></div>
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
                    <div class="accessSide">
                        <div class="topWrap">
                            <div class="Boxsearch">
                                <div class="searchs">
                                    <input type="text" class="searchTerms" placeholder="Name / Company">
                                    <i class="fa fa-search"></i>
                                    </input>
                                </div>
                            </div>
                            <div class="companyCard">
                                <div class="cardTitle">
                                    <img src="../image/LogoWhite.png" >
                                    <label>Iconiqlast Studios</label>
                                </div>
                                <div class="subCard">
                                    <a class="numSub">2</a>
                                    <a class="labelSub"> Administrator/s</a>
                                </div>
                                <div class="subCard">
                                    <a class="numSub">4</a>
                                    <a class="labelSub">Qluster Heads</a>
                                </div>
                                <div class="subCard">
                                    <a class="numSub">8</a>
                                    <a class="labelSub">Marketing Qluster</a>
                                </div>
                                <div class="subCard">
                                    <a class="numSub">12</a>
                                    <a class="labelSub">Production Qluster</a>
                                </div>
                                <div class="subCard">
                                    <a class="numSub">5</a>
                                    <a class="labelSub">Design Qluster</a>
                                </div>
                                <div class="subCard">
                                    <a class="numSub">3</a>
                                    <a class="labelSub">Writing Qluster</a>
                                </div>
                                <div class="subCard">
                                    <a class="numSub">4</a>
                                    <a class="labelSub">Operations</a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="bottomCard">
                            <i data-feather="plus-square"></i>
                            <a >new</a>
                        </div> -->
                    </div>
                    <div class="wrapView" id="div1">
                        <div class="TopcontGrid">
                            <a class="edBTn"> <i data-feather="edit-3"></i> Edit / Delete</a>
                            <a class="addEntry"> <i data-feather="plus-square"></i> New Department Entry</a>
                        </div>
                        <div class="grid-container">
                            <div class="grid-item">
                                <div class="gridWrapTop">
                                    <label>Administrator/s</label>
                                    <i data-feather="edit-2" class="iconGrid"></i>
                                </div>
                                <div class="gridWrapBot">
                                    <label>2 users</label>
                                    <a class="tablink" onclick="openPage('div2', this )">View ...</a>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="gridWrapTop">
                                    <label>Design Qluster</label>
                                    <i data-feather="edit-2" class="iconGrid"></i>
                                </div>
                                <div class="gridWrapBot">
                                    <label>5 users</label>
                                    <a id="Button1" type="button" value="Click me">View ...</a>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="gridWrapTop">
                                    <label>Qluster Heads</label>
                                    <i data-feather="edit-2" class="iconGrid"></i>
                                </div>
                                <div class="gridWrapBot">
                                    <label>4 users</label>
                                    <a>View ...</a>
                                </div>
                            </div>  
                            <div class="grid-item">
                                <div class="gridWrapTop">
                                    <label>Writing Qluster</label>
                                    <i data-feather="edit-2" class="iconGrid"></i>
                                </div>
                                <div class="gridWrapBot">
                                    <label>3 users</label>
                                    <a>View ...</a>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="gridWrapTop">
                                    <label>Marketing Qluster</label>
                                    <i data-feather="edit-2" class="iconGrid"></i>
                                </div>
                                <div class="gridWrapBot">
                                    <label>8 users</label>
                                    <a>View ...</a>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="gridWrapTop">
                                    <label>Operations</label>
                                    <i data-feather="edit-2" class="iconGrid"></i>
                                </div>
                                <div class="gridWrapBot">
                                    <label>4 users</label>
                                    <a>View ...</a>
                                </div>
                            </div>  
                            <div class="grid-item">
                                <div class="gridWrapTop">
                                    <label>Production Qluster</label>
                                    <i data-feather="edit-2" class="iconGrid"></i>
                                </div>
                                <div class="gridWrapBot">
                                    <label>12 users</label>
                                    <a>View ...</a>
                                </div>
                            </div>
                            <!-- <div class="grid-item">8</div>
                            <div class="grid-item">9</div>   -->
                        </div>
                    </div>
                    <div class="wrapView" id="div2">
                        <div class="accessSideRight">
                            <button class="accordion"><label class="uName"> Vince Venturanza</label></button>
                                <div class="panel">
                                <div class="panelWrap">
                                    <div class="navAccordian">
                                        <a class="nav-item active" href="#access">Access</a>
                                        <a class="nav-item" href="#visibility">Visibility</a>
                                        <a class="nav-item" href="#scheduled">Scheduled</a>
                                    </div>
                                    <div class="accordionWrap" id="access">
                                    <div>
                                        <div class="permission">
                                            <a class="userbtn active" href="#user">User Permission</a>
                                            <a class="userbtn" href="#admin">Admin Permission</a>
                                        </div>
                                        <div class="treeWrap" id="user">
                                        <div class="tree">
                                            <ul>
                                            <li>
                                                <label>
                                                <input type="checkbox" class="checkbox">
                                                Full Access
                                                </label>
                                            </li>
                                            </ul>
            
                                            <ul>
                                            <li>
                                                <label>
                                                <input type="checkbox" class="checkbox">
                                                Workspace
                                                </label>
                                                <ul>
                                                <li>
                                                    <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Memos & Activity Log
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Members
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Calendar
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Payslip
                                                    </label>
                                                </li>
                                                </ul>
                                            </li>
            
                                            <li>
                                                <label>
                                                <input type="checkbox" class="checkbox">
                                                Questionnaires
                                                </label>
                                                <ul>
                                                <li>
                                                    <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Personality Tests
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Employee Valuation Index
                                                    </label>
                                                </li>
                                                </ul>
                                            </li>
                                            </ul>
                                        </div>
                                        <div class="tree two">
                                            <ul>
                                            <li>
                                                <label>
                                                <input type="checkbox" class="checkbox">
                                                My Account
                                                </label>
                                                <ul>
                                                <li>
                                                    <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Personal Information
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Background & Education
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Benefits
                                                    </label>
                                                </li>
                                                </ul>
                                            </li>
                                            </ul>
                                        </div>
                                        </div>
                                        <div class="treeWrap" id="admin">
                                        <div class="tree">
                                            <ul>
                                            <li>
                                                <label>
                                                <input type="checkbox" class="checkbox">
                                                Full Access
                                                </label>
                                            </li>
                                            </ul>
            
                                            <ul>
                                            <li>
                                                <label>
                                                <input type="checkbox" class="checkbox">
                                                Manage
                                                </label>
                                                <ul>
                                                <li>
                                                    <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Personal Request
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                    <input type="checkbox" class="checkbox">
                                                    daily Time Record
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Job Info
                                                    </label>
                                                </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <label>
                                                <input type="checkbox" class="checkbox">
                                                Database Tables
                                                </label>
                                                <ul>
                                                <li>
                                                    <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Profile
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Management
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Upkeep
                                                    </label>
                                                </li>
                                                </ul>
                                            </li>
                                            </ul>
                                        </div>
                                        <div class="tree two">
                                            <ul>
                                            <li>
                                                <label>
                                                <input type="checkbox" class="checkbox">
                                                Reports
                                                </label>
                                                <ul>
                                                <li>
                                                    <label>
                                                    <input type="checkbox" class="checkbox">
                                                    201 Files
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Retention Report
                                                    </label>
                                                </li>
                                                </ul>
                                            </li>
                                            </ul>
                                            <ul>
                                            <li>
                                                <label>
                                                <input type="checkbox" class="checkbox">
                                                System Access
                                                </label>
                                            </li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                
                                    <div class="accordionWrap" id="visibility">
                                        <div class="ui form" style="height: 540px;">
                                            <div class="inline field">
                                                <?php include 'visibility.php'?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordionWrap" id="scheduled">
                                    <div>
                                        <div class="dateCont">
                                        <div class="dateWrap">
                                            <div class="dateHeader">
                                            <p class="date" id="date"></p>
                                            <i class="ph-caret-circle-down iconDate"></i>
                                            </div>
                                            <div class="dateHeader">
                                            <i class="ph-caret-left iconDate"></i>
                                            <i class="ph-caret-right iconDate"></i>
                                            </div>
                                        </div>
                                        </div>
                                        <div class=schedCont>
                                        <div class="permission">
                                            <a class="schedbtn active" href="#userSched">User Permission</a>
                                            <a class="schedbtn" href="#adminSched">Admin Permission</a>
                                        </div>
                                        <div class="schedWrap" id="userSched">
                                            <div class="tree">
                                            <ul>
                                                <li>
                                                <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Full Access
                                                </label>
                                                </li>
                                            </ul>
            
                                            <ul>
                                                <li>
                                                <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Workspace
                                                </label>
                                                <ul>
                                                    <li>
                                                    <label>
                                                        <input type="checkbox" class="checkbox">
                                                        Memos & Activity Log
                                                    </label>
                                                    </li>
                                                    <li>
                                                    <label>
                                                        <input type="checkbox" class="checkbox">
                                                        Members
                                                    </label>
                                                    </li>
                                                    <li>
                                                    <label>
                                                        <input type="checkbox" class="checkbox">
                                                        Calendar
                                                    </label>
                                                    </li>
                                                    <li>
                                                    <label>
                                                        <input type="checkbox" class="checkbox">
                                                        Payslip
                                                    </label>
                                                    </li>
                                                </ul>
                                                </li>
            
                                                <li>
                                                <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Questionnaires
                                                </label>
                                                <ul>
                                                    <li>
                                                    <label>
                                                        <input type="checkbox" class="checkbox">
                                                        Personality Tests
                                                    </label>
                                                    </li>
                                                    <li>
                                                    <label>
                                                        <input type="checkbox" class="checkbox">
                                                        Employee Valuation Index
                                                    </label>
                                                    </li>
                                                </ul>
                                                </li>
                                            </ul>
                                            </div>
                                            <div class="tree two">
                                            <ul>
                                                <li>
                                                <label>
                                                    <input type="checkbox" class="checkbox">
                                                    My Account
                                                </label>
                                                <ul>
                                                    <li>
                                                    <label>
                                                        <input type="checkbox" class="checkbox">
                                                        Personal Information
                                                    </label>
                                                    </li>
                                                    <li>
                                                    <label>
                                                        <input type="checkbox" class="checkbox">
                                                        Background & Education
                                                    </label>
                                                    </li>
                                                    <li>
                                                    <label>
                                                        <input type="checkbox" class="checkbox">
                                                        Benefits
                                                    </label>
                                                    </li>
                                                </ul>
                                                </li>
                                            </ul>
                                            </div>
                                        </div>
                                        <div class="schedWrap" id="adminSched">
                                            <div class="tree">
                                            <ul>
                                                <li>
                                                <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Full Access
                                                </label>
                                                </li>
                                            </ul>
            
                                            <ul>
                                                <li>
                                                <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Manage
                                                </label>
                                                <ul>
                                                    <li>
                                                    <label>
                                                        <input type="checkbox" class="checkbox">
                                                        Personal Request
                                                    </label>
                                                    </li>
                                                    <li>
                                                    <label>
                                                        <input type="checkbox" class="checkbox">
                                                        daily Time Record
                                                    </label>
                                                    </li>
                                                    <li>
                                                    <label>
                                                        <input type="checkbox" class="checkbox">
                                                        Job Info
                                                    </label>
                                                    </li>
                                                </ul>
                                                </li>
                                                <li>
                                                <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Database Tables
                                                </label>
                                                <ul>
                                                    <li>
                                                    <label>
                                                        <input type="checkbox" class="checkbox">
                                                        Profile
                                                    </label>
                                                    </li>
                                                    <li>
                                                    <label>
                                                        <input type="checkbox" class="checkbox">
                                                        Management
                                                    </label>
                                                    </li>
                                                    <li>
                                                    <label>
                                                        <input type="checkbox" class="checkbox">
                                                        Upkeep
                                                    </label>
                                                    </li>
                                                </ul>
                                                </li>
                                            </ul>
                                            </div>
                                            <div class="tree two">
                                            <ul>
                                                <li>
                                                <label>
                                                    <input type="checkbox" class="checkbox">
                                                    Reports
                                                </label>
                                                <ul>
                                                    <li>
                                                    <label>
                                                        <input type="checkbox" class="checkbox">
                                                        201 Files
                                                    </label>
                                                    </li>
                                                    <li>
                                                    <label>
                                                        <input type="checkbox" class="checkbox">
                                                        Retention Report
                                                    </label>
                                                    </li>
                                                </ul>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                <label>
                                                    <input type="checkbox" class="checkbox">
                                                    System Access
                                                </label>
                                                </li>
                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
       
       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   -->
       <script src="../admin/function/slider.js"></script>
       <script src="../admin/function/script.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
        <script src="../admin/function/trees.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"> </script>
        
        <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
       <script>
           feather.replace()
       </script>
        <script>
            function openPage(pageName, evt) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("wrapView");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");

            document.getElementById(pageName).style.display = "flex";
            }
            
            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
        </script>
   </body>
   </html>
