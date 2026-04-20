<?php include 'ini.inc.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="INSPIRO"/>
    <meta name="description" content="Protasco Berhad">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>Protasco Berhad</title>
    <meta name="keywords" content="Protasco Berhad Home Page Keywords">
    <meta name="description" content="Protasco Berhad">

    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/customize.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<?php include 'analytic.php';?>
</head>

<style>
#dark .dark #header .header-inner .lines, .dark #header .header-inner .lines:before, .dark #header .header-inner .lines:after, .dark #header #header-wrap .lines, .dark #header #header-wrap .lines:before, .dark #header #header-wrap .lines:after, #header.dark .header-inner .lines, #header.dark .header-inner .lines:before, #header.dark .header-inner .lines:after, #header.dark #header-wrap .lines, #header.dark #header-wrap .lines:before, #header.dark #header-wrap .lines:after{
background-color: darkblue;

}


 @media (max-width: 992px){
 .hddsss{
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
 }
</style>
<body>

<div class="body-inner">
    <header id="header" data-transparent="true" data-fullwidth="true" class="dark submenu-light">
    	<div class="header-inner">
        	<div class="container">
            	<div id="logo">
					<a href="<?=$co_link?>index.php" target="_parent" class="header-logo-mb">
                        <img class="p-5 logo-dark" src="img/logo.png" style="object-fit: contain;">
                        <img class="p-5 logo-default" src="img/logo.png" style="object-fit: contain;">
                   	</a>
               </div>
				<div id="mainMenu-trigger">
                    <a class="lines-button x"><span class="lines"></span></a>
                </div>
                <div id="mainMenu">
                    <div class="container">
                        <nav>
                            <ul>
                                <li>
									<a href="<?=$co_link?>index.php" target="_parent">Home</a>
                                </li>
                                <li class="dropdown">
                                	<a class="dropdown-toggle" data-toggle="dropdown" href="#"  style="  text-underline-offset: 10px;">Discover Us</a>
                                	 <ul class="dropdown-menu">
                                	 	 <li><a href="<?=$co_link?>corporate-profile.php" target="_parent">Corporate Profile</a></li>
                                	 	<li class="dropdown-submenu">
                                          <a tabindex="-1" href="#">Business Division</a>
                                          <ul class="dropdown-menu">
                                          <li><a href="<?=$co_link?>agriventure.php" target="_parent">Agriventure</a></li>
                                    	 	<li><a href="<?=$co_link?>maintenance.php" target="_parent">Maintenance</a></li>
                                    	 	<li><a href="<?=$co_link?>construction.php" target="_parent">Construction</a></li>
                                    	 	<li><a href="<?=$co_link?>engineering.php" target="_parent">Engineering &amp; Consultancy Services</a></li>
                                    	 	<li><a href="<?=$co_link?>property.php" target="_parent">Property</a></li>
                                    	 	<li><a href="<?=$co_link?>trading.php" target="_parent">Trading &amp; Manufacturing</a></li>
                                    	 	<li><a href="<?=$co_link?>energy.php" target="_parent">Energy</a></li>
                                    	 	<li><a href="<?=$co_link?>hospitality.php" target="_parent">Hospitality</a></li>
                                          </ul>
                                        </li>
                                	 	<li><a href="<?=$co_link?>corporate-structure.php" target="_parent">Corporate Structure</a></li>
                                	 	<li><a href="<?=$co_link?>bod.php" target="_parent">Board of Directors</a></li>
                                	 	<li><a href="<?=$co_link?>management.php" target="_parent">Senior Management Team</a></li>
                                	 	<li><a href="<?=$co_link?>accreditations-accolades.php" target="_parent">Accreditations & Accolades</a></li>
                                	 </ul>
                                </li>
                                <li class="dropdown">
                                	<a class="dropdown-toggle" data-toggle="dropdown" href="#"  style="  text-underline-offset: 10px;">Investor Relations</a>
                                	 <ul class="dropdown-menu">
                                	 	<li><a href="<?=$co_link?>investor-relations/ir-home.php" target="_parent">IR Home</a></li>
                                	 	<li class="dropdown-submenu">
                                          <a tabindex="-1" href="#">Financial Reports</a>
                                          <ul class="dropdown-menu">
                                            <li><a href="<?=$co_link?>investor-relations/annual-reports.php" target="_parent">Annual Report</a></li>
                                    	 	<li><a href="<?=$co_link?>investor-relations/quarterly-reports.php" target="_parent">Quarterly Report</a></li>
                                          </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                          <a tabindex="-1" href="#">Financial Information</a>
                                          <ul class="dropdown-menu">
                                     <!--  <li><a href="<?=$ir_link?>investor-relations/financial-calendar.php" target="_parent">Financial Calendar</a></li> -->
                                    	 	<li><a href="<?=$co_link?>investor-relations/latest-annual-financial.php" target="_parent">Latest Annual Financials</a></li>
                                    	 	<li><a href="<?=$co_link?>investor-relations/latest-quarterly-financial.php" target="_parent">Latest Quarterly Financials</a></li>
                                    	 	<li><a href="<?=$co_link?>investor-relations/financial-highlights.php" target="_parent">Financial Highlights</a></li>
                                    	 	<li><a href="<?=$co_link?>investor-relations/shareholdings.php" target="_parent">Shareholdings</a></li>
                                          </ul>
                                        </li>
                                        <li><a href="<?=$co_link?>investor-relations/corporate-governance.php" target="_parent">Corporate Governance</a></li>
                                        <li><a href="<?=$co_link?>investor-relations/announcement.php" target="_parent">Bursa Announcements</a></li>
                                        <li class="dropdown-submenu">
                                          <a tabindex="-1" href="#">Stock Information</a>
                                          <ul class="dropdown-menu">
                                            <li><a href="<?=$co_link?>investor-relations/stock-information.php" target="_parent">Stock Quotes &amp; Interactive Chart</a></li>
                                    	 	<li><a href="<?=$co_link?>investor-relations/historical-price.php" target="_parent">Historical Price</a></li>
                                    	 	<li><a href="<?=$co_link?>investor-relations/calculator.php">Investment Calculator</a></li>
                                          </ul>
                                        </li>
                                         <li><a href="<?=$co_link?>investor-relations/information-request.php" target="_parent">Information Request</a></li>
                                	 </ul>
                                </li>
                                <li class="dropdown">
                                	<a class="dropdown-toggle" data-toggle="dropdown" href="#"  style=" text-underline-offset: 10px;">Publications</a>
                                	 <ul class="dropdown-menu">
                                	 	<li><a href="<?=$ir_link?>investor-relations/annual-reports.php" target="_parent">Annual Reports</a></li>
                                	 </ul>
                                </li>
                                <li class="dropdown">
                                	<a class="dropdown-toggle" data-toggle="dropdown" href="<?=$co_link?>sustainability.php"  target="_parent"style=" text-underline-offset: 10px;">Sustainability</a>
                                	 <ul class="dropdown-menu">
                                	 	<li><a href="<?=$co_link?>sustainability.php" target="_parent">Sustainability</a></li>
                                	 	<li class="dropdown-submenu">
                                          <a tabindex="-1" href="#">Our Sustainability Story</a>
                                          <ul class="dropdown-menu">
                                            <li><a href="<?=$co_link?>sustainability-commitment.php" target="_parent">Sustainability Commitment</a></li>
                                            <li><a href="<?=$co_link?>sustainability-engagement.php" target="_parent">Sustainability Engagement</a></li>
                                            <li><a href="<?=$co_link?>esg-related-policies.php" target="_parent">ESG-Related Policies</a></li>
                                            <li><a href="<?=$co_link?>sustainability-practices.php" target="_parent">Sustainability Practices</a></li>
                                            <li><a href="<?=$co_link?>i-am-protasco-IAP.php" target="_parent">IAP 3.0</a></li>
                                          </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                          <a tabindex="-1" href="#">Environmental</a>
                                          <ul class="dropdown-menu">
                                            <li><a href="<?=$co_link?>preservation-and-conservation.php" target="_parent">Preservation and Conservation</a></li>
                                    	 	<li><a href="<?=$co_link?>road-towards-net-zero-ghg-emissions.php" target="_parent">Road Towards Net Zero GHG Emissions</a></li>
                                    	 	<li><a href="<?=$co_link?>sectoral-practices.php" target="_parent">Sectoral Practices</a></li>
                                          </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                          <a tabindex="-1" href="#">Social</a>
                                          <ul class="dropdown-menu">
                                            <li><a href="<?=$co_link?>human-capital-and-development.php" target="_parent">Human Capital and Development</a></li>
                                    	 	<li><a href="<?=$co_link?>digitalisation.php" target="_parent">Digitalisation</a></li>
                                          </ul>
                                        </li>
                                	 	<!--
                                	 	<li><a href="<?=$co_link?>sustainability-policies.php" target="_parent">Sustainability Policies</a></li>
										-->
									 </ul>
                                </li>
                            	 <li>
                                	<a href="<?=$co_link?>agm/2025/" target="_parent">AGM</a>
                            	</li>
                            	 <li>
                                	<a href="https://careers.protasco.com.my/" target="_blank">Careers</a>
                            	</li>
                            	 <li>
                                	<a href="<?=$co_link?>contact.php" target="_parent">Contact Us</a>
                            	</li>

                            </ul>
                        </nav>
                    </div>
                </div>

        </div>
    </div>
</header>
