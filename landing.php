<?php
    
    $server = $_SERVER['SERVER_NAME'] == 'tripwire.eve-apps.com' ? 'static.eve-apps.com' : $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $server == 'static.eve-apps.com' ? 'Nescitvm' : 'Nescitvm-Dev' ?></title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scaleable=no" />
    <meta name="description" content="" />

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="//<?= $server ?>/css/landing/base.css" />
    <link rel="stylesheet" type="text/css" href="//<?= $server ?>/css/landing/dark.css" />
    <link rel="stylesheet" type="text/css" href="//<?= $server ?>/css/landing/media.queries.css" />
    <link rel="stylesheet" type="text/css" href="//<?= $server ?>/css/landing/tipsy.css " />
    <link rel="stylesheet" type="text/css" href="//<?= $server ?>/js/landing/fancybox/jquery.fancybox-1.3.4.css" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do|Quicksand:400,700,300">

    <!-- Favicons -->
    <link rel="shortcut icon" href="//<?= $server ?>/images/favicon.png" />
</head>
<body>
    <!-- Start Wrapper -->

    <div id="page_wrapper">

        <!-- Start Header -->
        <header>
            <div class="container">
                <!-- Start social icons -->
                <aside>
                    <ul class="social">
                        <li class="google"><a href="https://www.google.com">Google</a></li>
                        <li class="twitter"><a href="https://twitter.com/jjoesten">Twitter</a></li>
                        <li class="email"><a href="mailto:joshua.joesten@gmail.com" title="joshua.joesten@mail.com">Email</a></li>
                    </ul>
                </aside>
                <!-- End social icons -->

                <!-- Start Navigation -->
                <nav>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#login">Login</a></li>
                        <li><a href="#register">Register</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="https://github.com/jjoesten/nescitvm/issues" target="_blank">Issue/Idea Tracker</a></li>
                    </ul>
                    <span class="arrow"></span>
                </nav>
                <!-- End Navigation -->
            </div>
        </header>
        <!-- End Header -->

        <section class="container">

            <!-- Start App Info -->
            <div id="app_info">
                <!-- Start Logo -->
                <h1 style="font-size: 4.3em;"><img src="//<?= $server ?>/images/landing/whicon12.png" alt="Nescitvm" style="vertical-align: text-top;width: 64px; height: 64px;" />NESCITVM</h1>
                <!-- End Logo -->

                <span class="tagline">Wormhole Mapping and Intelligence</span>
                <p>Description goes here...</p>

                <div class="buttons">
                        <a href="#register#corp" class="large_button" id="corp">
                            <span class="icon-corp"></span>
                            <em>Register now as</em> Admin
                        </a>
                        <a href="#register#user" class="large_button" id="user">
                            <span class="icon-player"></span>
                            <em>Register now as</em> User
                        </a>
                    </div>
    
    <?php if(!isset($_SESSION['userID'])) { ?>
                    <h1>Have an account?<br/><a href="#login#reg">Log into Tripwire now!</a></h1>
    <?php } else { ?>
                    <h1>You're logged in...<br/><a href="?system=">Go to Tripwire now!</a></h1>
    <?php } ?>
    
                </div>
                <!-- End App Info -->
    
                <!-- Start Pages -->
                <div id="pages">
                    <div class="top_shadow"></div>
    
                    <!-- Start Home -->
                    <div id="home" class="page">
                        <!--<div id="slider">
                            <div class="slide" data-effect-out="slide">
                                <div class="background screenshot">
                                    <img src="images/landing/devices/igb.jpg" alt="" width="100%" />
                                </div>
                            </div>
                            <div class="slide" data-effect-out="slide">
                                <div class="background screenshot">
                                    <img src="images/landing/devices/chrome.jpg" alt="" width="100%" />
                                </div>
                            </div>
                            <div class="slide">
                                <div class="background android">
                                    <img src="images/landing/devices/droid.jpg" alt="" />
                                </div>
                                <div class="foreground android">
                                    <img src="images/landing/devices/droid.jpg" alt="" />
                                </div>
                            </div>
                            <div class="slide">
                                <div class="background ipad-black">
                                    <img src="images/landing/devices/ipad.jpg" alt="" width="100%" />
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <!-- End Home -->
    
                    <!-- Start Login -->
                    <div id="login" class="page">
                        
    <?php if (isset($_SESSION['userID'])) { ?>
                    <h1>You're currently logged in as...</h1>
                    <div style="text-align: center;">
                        <img src="//image.eveonline.com/Character/<?= $_SESSION['characterID'] ?>_128.jpg" />
                        <p><?= $_SESSION['characterName'] ?></p>
                        <p style="padding-top: 25px;">
                            <a href="logout.php" class="large_button" style="text-align: center;" id="windows">
                                <span>Logout</span>
                            </a>
                        </p>
                    </div>
    <?php } else { ?>
                    <h1>Login</h1>
                    <div class="tabs" style="width: 525px;">
                        <ul class="nav">
                            <li class="current">
                                <a href="javascript:;" class="reg">Tripwire</a>
                            </li>
                            <li>
                                <a href="javascript:;" class="api">EVE API</a>
                            </li>
                            <li>
                                <a href="javascript:;" class="sso">EVE SSO</a>
                            </li>
                        </ul>
                        <div id="reg" class="pane">
                            <form method="POST">
                                <input type="hidden" name="mode" value="login" />
                                <!-- fake fields are a workaround for chrome autofill -->
                                <input class="hidden" type="text" name="fakeusernameremembered" />
                                <input class="hidden" type="password" name="fakepasswordremembered" autocomplete="off" />
                                <p>
                                    This login method requires that you first create a Tripwire account via <a href="#register#user">User Registration</a>.
                                </p>
                                <br/>
                                <p><em>Forgot your login? <a href="#login#api">Use API method instead</a>.</em></p>
                                <br/>
                                <div class="row">
                                    <p class="left">
                                        <label for="login_username" class="infield">Username</label>
                                        <input type="text" name="username" id="login_username" class="focus" autocomplete="off" />
                                    </p>
                                </div>
                                <p id="userError" class="error hidden"></p>
                                <p>Username can contain spaces</p>
                                <div class="row">
                                    <p class="left">
                                        <label for="login_password" class="infield">Password</label>
                                        <input type="password" name="password" id="login_password" autocomplete="off" />
                                    </p>
                                </div>
                                <p>Password is case sensitive</p>
                                <br/>
                                <p><input type="checkbox" id="remember" name="remember" /><label for="remember">Remember me</label></p>
                                <div style="padding-top: 25px;">
                                    <button type="submit" class="button white">Login</button>
                                    <span style="position: absolute; padding-left: 15px;" class="hidden" id="spinner">
                                        <!-- Loading animation container -->
                                        <div class="loading">
                                            <!-- we make this div spin -->
                                            <div class="spinner">
                                                <!-- Mask of the quarter circle -->
                                                <div class="mask">
                                                    <!-- Inner masked circle -->
                                                    <div class="maskedCircle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div id="api" class="pane">
                            <form method="POST">
                                <input type="hidden" name="mode" value="api" />
                                <p>This login method requires that you first create a Tripwire account via <a href="#register#user">User Registration</a>.</p>
                                <br/>
                                <p>Use any old or new API key to log into an existing Tripwire account with that character.</p>
                                <p><em style="color: burlywood">API needs to be character type and only needs Account Status enabled.</em></p>
                                <p><a href="https://community.eveonline.com/support/api-key/CreatePredefined?accessMask=33554432" target="_blank" tabindex="-1">Create EVE API Key</a></p>
                                <p><a href="https://community.eveonline.com/support/api-key/" target="_blank" tabindex="-1">View your EVE API keys</a></p>
                                <br/>
                                <div class="row">
                                    <p class="left">
                                        <label for="api_api_key" class="infield">API Key ID</label>
                                        <input type="text" name="api_key" id="api_api_key" />
                                    </p>
                                    <p class="right">
                                        <label for="api_api_code" class="infield">API vCode</label>
                                        <input type="text" name="api_code" id="api_api_code" />
                                    </p>
                                </div>
                                <p id="apiError" class="error hidden"></p>
                                <p></p>
                                <div id="api_select" class="row hidden" style="padding-top: 8px;">
                                    <p id="selectError" class="error hidden"></p>
                                    <p>Pleas select which character</p>
                                </div>
                                <div style="padding-top: 25px;">
                                    <button type="submit" class="button white">Login</button>
                                    <span style="position: absolute; padding-left: 15px;" class="hidden" id="spinner">
                                        <!-- Loading animation container -->
                                        <div class="loading">
                                            <!-- We make this div spin -->
                                            <div class="spinner">
                                                <!-- Mask of the quarter of circle -->
                                                <div class="mask">
                                                    <!-- Inner masked circle -->
                                                    <div class="maskedCircle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div id="sso" class="pane">
                            <center>
                                <p>This login method requires that you first create a Tripwire account via <a href="#register#user">User Registration</a>.</p>
                                <br/>
                                <?= isset($_REQUEST['error']) && $_REQUEST['error'] == 'account' ? '<p class="error">No Tripwire account for that character</p><br/>' : '' ?>
                                <?= isset($_REQUEST['error']) && $_REQUEST['error'] == 'unknown' ? '<p class="error">Unknown error processing EVE SSO login</p><br/>' : '' ?>
                                <a href="login.php?mode=sso&login=sso"><img src="//<?= $server ?>/images/landing/eve_sso.png"/></a>
                            </center>
                        </div>
                    </div>
    <?php } ?>
    
                    </div>
                    <!-- End Login -->
    
                    
                    <!-- Start Register -->
                    <div id="register" class="page">
                        <h1>Register</h1>
                        <div class="tabs" style="width: 525px;">
                            <ul class="nav">
                                <li class="current">
                                    <a href="javascript:;" class="user">User</a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="corp">Admin</a>
                                </li>
                            </ul>
                            <div id="user" class="pane">
                                <form method="POST">
                                    <input type="hidden" name="mode" value="user" />
                                    <!-- fake fields are a workaround for chrome autofill -->
                                    <input class="hidden" type="text" name="fakeusernameremembered" />
                                    <input class="hidden" type="password" name="fakepasswordremembered" autocomplete="off" />
                                    <p>
                                        A Tripwire account requires an EVE character to be associated with it. This character is used to determine who's signature data you can see. <a href="https://community.eveonline.com/support/api-key/" target="_blank" tabindex="-1">View your EVE API keys</a>
                                    </p>
                                    <br/>
                                    <p><em style="color: burlywood;">API needs to be character type and only needs Account Status enabled.</em></p>
                                    <p><a href="https://community.eveonline.com/support/api-key/CreatePredefined?accessMask=33554432" target="_blank" tabindex="-1">Create EVE API key</a></p>
                                    <br/>
                                    <p><em style="color: burlywood;">The API will not be stored and can be deleted after successful registration.</em></p>
                                    <div class="row">
                                        <p class="left">
                                            <label for="reg_username" class="infield">Username</label>
                                            <input type="text" name="username" id="reg_username" class="focus" autocomplete="off" />
                                        </p>
                                    </div>
                                    <p id="userError" class="error hidden"></p>
                                    <p>Username can contain spaces</p>
                                    <div class="row">
                                        <p class="left">
                                            <label for="reg_password" class="infield">Password</label>
                                            <input type="password" name="password" id="reg_password" autocomplete="off" />
                                        </p>
                                        <p class="right">
                                            <label for="reg_confirm" class="infield">Confirm</label>
                                            <input type="password" name="confirm" id="reg_confirm" autocomplete="off" />
                                        </p>
                                    </div>
                                    <p id="passError" class="error hidden"></p>
                                    <p>Passwords must match</p>
                                    <div class="row">
                                        <p class="left">
                                            <label for="reg_api_key" class="infield">API Key ID</label>
                                            <input type="text" name="api_key" id="reg_api_key" />
                                        </p>
                                        <p class="right">
                                            <label for="reg_api_code" class="infield">API vCode</label>
                                            <input type="text" name="api_code" id="reg_api_code" />
                                        </p>
                                    </div>
                                    <p id="apiError" class="error hidden"></p>
                                    <p></p>
                                    <div id="api_select" class="row hidden" style="padding-top: 8px;">
                                        <p id="selectError" class="error hidden"></p>
                                        <p>Please select which character</p>
                                    </div>
                                    <div style="padding-top: 25px;">
                                        <button type="submit" class="button white">Next</button>
                                        <span style="position: absolute; padding-left: 15px;" class="hidden" id="spinner">
                                            <!-- Loading animation container -->
                                            <div class="loading">
                                                <!-- We make this div spin -->
                                                <div class="spinner">
                                                    <!-- Mask of the quarter of circle -->
                                                    <div class="mask">
                                                        <!-- Inner masked circle -->
                                                        <div class="maskedCircle"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                </form>
                                <div id="success" class="hidden">
                                    <center>
                                        <h1>
                                            Congratulations
                                            <br/>
                                            Your account was created
                                            <br/>
                                            <a href="#login#reg">Log into Tripwire now!</a>
                                        </h1>
                                    </center>
                                </div>
                            </div>
                            <div id="corp" class="pane">
                                <form method="POST">
                                    <input type="hidden" name="mode" value="corp" />
                                    <p>
                                        This simply enables corporate Tripwire administration for your character. You must first complete <a href="#register#user">User Registration</a>.
                                    </p>
                                    <br/>
                                    <p><em style="color: burlywood;">Character must be a Director or CEO.</em></p>
                                    <p><em style="color: burlywood;">API needs to be character type and only needs Character Sheet enabled.</em></p>
                                    <p><a href="https://community.eveonline.com/support/api-key/CreatePredefined?accessMask=8" target="_blank" tabindex="-1">Create EVE API key</a></p>
                                    <br/>
                                    <p><em style="color: burlywood;">The API will not be stored and can be deleted after successful registration.</em></p>
                                    <div class="row">
                                        <p class="left">
                                            <label for="corp_api_key" class="infield">API Key ID</label>
                                            <input type="text" name="api_key" id="corp_api_key">
                                        </p>
                                        <p class="right">
                                            <label for="corp_api_code" class="infield">API vCode</label>
                                            <input type="text" name="api_code" id="corp_api_code">
                                        </p>
                                    </div>
                                    <p id="apiError" class="error hidden"></p>
                                    <p></p>
                                    <div id="api_select" class="row hidden" style="padding-top: 8px;">
                                        <p id="selectError" class="error hidden"></p>
                                        <p>Please select which character</p>
                                    </div>
                                    <div style="padding-top: 25px;">
                                        <button type="submit" class="button white">Next</button>
                                        <span style="position: absolute; padding-left: 15px;" class="hidden" id="spinner">
                                            <!-- Loading animation container -->
                                            <div class="loading">
                                                <!-- We make this div spin -->
                                                <div class="spinner">
                                                    <!-- Mask of the quarter of circle -->
                                                    <div class="mask">
                                                        <!-- Inner masked circle -->
                                                        <div class="maskedCircle"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                </form>
                                <div id="success" class="hidden">
                                    <center>
                                        <h1>
                                            Congratulations
                                            <br/>
                                            <span id="name"></span> is now a corp admin.
                                        </h1>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Register -->
    
                    <!-- Start Features -->
                    <div id="features" class="page">
                        <h1>Features</h1>
    
                        <div class="feature_list content_box">
                            <div class="one_half">
                                <h2 class="icon chart">Clean Fast Pretty</h2>
                                <p>With a careful balance between a clean and beautiful interface, and speed that pushes the limits of the internet - its hard not to want to use it</p>
                            </div>
                            <div class="one_half column_last">
                                <h2 class="icon settings">Customizable</h2>
                                <p>The entire layout can be resized and moved around in order to give you the ultimate in customizable experiences</p>
                            </div>
                            <div class="one_half">
                                <h2 class="icon pencil">Shared Information</h2>
                                <p>Everything entered from signatures to system notes; from your ship to your location; even flares to draw attention to a system is instantly syncronized with your friends</p>
                            </div>
                            <div class="one_half column_last">
                                <h2 class="icon graph">Detailed Intel</h2>
                                <p>System information like activity (jumps, kills), static wormholes, security, and local pirates are at your fingertips</p>
                            </div>
                            <div class="one_half">
                                <h2 class="icon professional">Professionally Secure</h2>
                                <p>Secured with an A+ rated e-commerce SSL certificate and the latest internet security standards, you can be sure your intel is safe and Secure</p>
                            </div>
                            <div class="one_half column_last">
                                <h2 class="icon help">Help &amp; Support</h2>
                                <p>Help is just around the corner via the "Tripwire Public" EVE channel, <a href="https://bitbucket.org/daimian/tripwire/issues?status=new&status=open" target="_blank">Issue/Idea Tracker</a>, Twitter @DaimianMercer, and email <a href="mailto: daimian.mercer@gmail.com">daimian.mercer@gmail.com</a>.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Features -->
    
                    <div id="ccp_copyright" class="page">
                        <p>
                            All Eve Related Materials are Property Of CCP Games
                            EVE Online and the EVE logo are the registered trademarks of CCP hf. All rights are reserved worldwide. All other trademarks are the property of their respective owners. EVE Online, the EVE logo, EVE and all associated logos and designs are the intellectual property of CCP hf. All artwork, screenshots, characters, vehicles, storylines, world facts or other recognizable features of the intellectual property relating to these trademarks are likewise the intellectual property of CCP hf. CCP is in no way responsible for the content on or functioning of this website, nor can it be liable for any damage arising from the use of this website.
                        </p>
                    </div>
        
                    <div id="privacy" class="page">
                        <p>
                            This Privacy Policy governs the manner in which Tripwire collects, uses, maintains and discloses information collected from users (each, a "User") of the <a href="http://tripwire.eve-apps.com">tripwire.eve-apps.com</a> website ("Site"). This privacy policy applies to the Site and all products and services offered by Eon Studios.<br><br>
        
                            <b>Personal identification information</b><br><br>
        
                            We may collect personal identification information from Users in a variety of ways, including, but not limited to, when Users visit our site, register on the site, and in connection with other activities, services, features or resources we make available on our Site. Users may be asked for, as appropriate, name. We will collect personal identification information from Users only if they voluntarily submit such information to us. Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related activities.<br><br>
        
                            <b>Non-personal identification information</b><br><br>
        
                            We may collect non-personal identification information about Users whenever they interact with our Site. Non-personal identification information may include the browser name, the type of computer and technical information about Users means of connection to our Site, such as the operating system and the Internet service providers utilized and other similar information.<br><br>
        
                            <b>Web browser cookies</b><br><br>
        
                            Our Site may use "cookies" to enhance User experience. User's web browser places cookies on their hard drive for record-keeping purposes and sometimes to track information about them. User may choose to set their web browser to refuse cookies, or to alert you when cookies are being sent. If they do so, note that some parts of the Site may not function properly.<br><br>
        
                            <b>How we use collected information</b><br><br>
        
                            Tripwire may collect and use Users personal information for the following purposes:<br>
                        </p>
                        <br/>
                        <ul style="padding-left: 40px;">
                            <li><i>- To improve customer service</i><br>
                                Information you provide helps us respond to your customer service requests and support needs more efficiently.</li>
                            <li><i>- To personalize user experience</i><br>
                                We may use information in the aggregate to understand how our Users as a group use the services and resources provided on our Site.</li>
                            <li><i>- To improve our Site</i><br>
                                We may use feedback you provide to improve our products and services.</li>
                            <li><i>- To send periodic emails</i><br>
                                We may use the email address to respond to their inquiries, questions, and/or other requests. </li>
                        </ul>
                        <br/>
                        <p>
                            <b>How we protect your information</b><br><br>
        
                            We adopt appropriate data collection, storage and processing practices and security measures to protect against unauthorized access, alteration, disclosure or destruction of your personal information, username, password, transaction information and data stored on our Site.<br><br>
        
                            Sensitive and private data exchange between the Site and its Users happens over a SSL secured communication channel and is encrypted and protected with digital signatures.<br><br>
        
                            <b>Sharing your personal information</b><br><br>
        
                            We do not sell, trade, or rent Users personal identification information to others. We may share generic aggregated demographic information not linked to any personal identification information regarding visitors and users with our business partners, trusted affiliates and advertisers for the purposes outlined above.<br><br>
        
                            <b>Third party websites</b><br><br>
        
                            Users may find advertising or other content on our Site that link to the sites and services of our partners, suppliers, advertisers, sponsors, licensors and other third parties. We do not control the content or links that appear on these sites and are not responsible for the practices employed by websites linked to or from our Site. In addition, these sites or services, including their content and links, may be constantly changing. These sites and services may have their own privacy policies and customer service policies. Browsing and interaction on any other website, including websites which have a link to our Site, is subject to that website's own terms and policies.<br><br>
        
                            <b>Changes to this privacy policy</b><br><br>
        
                            Tripwire has the discretion to update this privacy policy at any time. When we do, we will revise the updated date at the bottom of this page. We encourage Users to frequently check this page for any changes to stay informed about how we are helping to protect the personal information we collect. You acknowledge and agree that it is your responsibility to review this privacy policy periodically and become aware of modifications.<br><br>
        
                            <b>Your acceptance of these terms</b><br><br>
        
                            By using this Site, you signify your acceptance of this policy. If you do not agree to this policy, please do not use our Site. Your continued use of the Site following the posting of changes to this policy will be deemed your acceptance of those changes.<br><br>
        
                            <b>Contacting us</b><br><br>
        
                            If you have any questions about this Privacy Policy, the practices of this site, or your dealings with this site, please contact us at:<br>
                            <a href="mailto: daimian.mercer@gmail.com">daimian.mercer@gmail.com</a><br>
                            <br>
                            This document was last updated on January 27, 2017
                        </p>
                    </div>
    
                    <div class="bottom_shadow"></div>
                </div>
                <!-- End Pages -->
    
                <div class="clear"></div>
            </section>
    
            <!-- Start Footer -->
    
            <footer class="container">
                <p><a href="#privacy">Privacy Policy</a> | <a href="#ccp_copyright">CCP Copyright</a></p>
                <form id="donate_form" action="https://www.paypal.com/cgi-bin/webscr" method="POST" target="_blank" style="padding: 15px 0;">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="encrypted" value="">
                    <img id="donate" src="//<?= $server ?>/images/landing/donate.jpg" onclick="document.getElementById('donate_form').submit();" alt="PayPal - The safer, easier way to pay online!">
                </form>
            </footer>
    
            <!-- End Footer -->
        </div>
    
    
    
        <!-- Javascripts -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="//<?= $server ?>/js/landing/html5shiv.js"></script>
        <script type="text/javascript" src="//<?= $server ?>/js/landing/jquery.tipsy.js"></script>
        <script type="text/javascript" src="//<?= $server ?>/js/landing/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <script type="text/javascript" src="//<?= $server ?>/js/landing/fancybox/jquery.easing-1.3.pack.js"></script>
        <script type="text/javascript" src="//<?= $server ?>/js/landing/jquery.touchSwipe.js"></script>
        <script type="text/javascript" src="//<?= $server ?>/js/landing/jquery.mobilemenu.js"></script>
        <script type="text/javascript" src="//<?= $server ?>/js/landing/jquery.infieldlabel.js"></script>
        <script type="text/javascript" src="//<?= $server ?>/js/landing/jquery.echoslider.js"></script>
        <script type="text/javascript" src="//<?= $server ?>/js/landing/landing.js"></script>

        <!-- Twitter Feed -->
        <script type="text/javascript">
            $('#home').tweetie({
                "apiPath": "tweetie.php",
                "type": "hashtag",
                "params": {"count": 1, "q": "evenescitum"}
            });
        </script>
    </body>
    </html>