    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">


    <link href="scripts/carousel/style.css" rel="stylesheet" type="text/css" />
    <link href="scripts/camera/css/camera.css" rel="stylesheet" type="text/css" />

    <link href="scripts/wookmark/css/style.css" rel="stylesheet" type="text/css" /> <link href="scripts/yoxview/yoxview.css" rel="stylesheet" type="text/css" />

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />  
    
</head>
<body id="pageBody">

<div id="divBoxed" class="container">

<div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">					
                    <!--Edit Site Name and Slogan here-->
					<div id="divLogo">
                    <?php 
                    if(isset($_SESSION['user'])){
                        echo '<a class="btn btn-primary pull-right" href="logoutaction.php">Log Out</a>';
                    }
                    ?>
                        <img src="icons\siteicon.ico" style="height: 100px;width: 100px;">
                        <a href="Home.php" id="divSiteTitle">Calculate All</a><br />
                        <a href="Home.php" id="divTagLine">All types of converter & calculator including Income tax</a>
                    </div>

	            </div>
            </div> 
			
            