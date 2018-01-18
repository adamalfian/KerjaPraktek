<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  
  <title>SOA Portal</title>

  <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/swfobject/swfobject.js"></script>
  
  <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * 
    {
      box-sizing: border-box;
    }

    .slider {
        width: 100%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
  </style>
        
  <script type="text/javascript">
    var flashvars = {};
    flashvars.cssSource = "css/piecemaker.css";
    flashvars.xmlSource = "piecemaker.xml";

    var params = {};
    params.play = "true";
    params.menu = "false";
    params.scale = "showall";
    params.wmode = "transparent";
    params.allowfullscreen = "true";
    params.allowscriptaccess = "always";
    params.allownetworking = "all";

    swfobject.embedSWF('piecemaker.swf', 'piecemaker', '960', '440', '10', null, flashvars,    
    params, null);
  </script>

  <script language="javascript" type="text/javascript">
    function clearText(field){
        if (field.defaultValue == field.value) field.value = '';
        else if (field.value == '') field.value = field.defaultValue;
    }
  </script>

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/ddsmoothmenu.js">
    /***********************************************
    * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
    * This notice MUST stay intact for legal use
    * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
    ***********************************************/
  </script>

  <script type="text/javascript">
    ddsmoothmenu.init({
      mainmenuid: "templatemo_menu", //menu DIV id
      orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
      classname: 'ddsmoothmenu', //class added to menu's outer DIV
      //customtheme: ["#1c5a80", "#18374a"],
      contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
    })
  </script> 

  <script id="chatBroEmbedCode">
    /* Chatbro Widget Embed Code Start */
    function ChatbroLoader(chats,async){async=!1!==async;var params={embedChatsParameters:chats instanceof Array?chats:[chats],lang:navigator.language||navigator.userLanguage,needLoadCode:'undefined'==typeof Chatbro,embedParamsVersion:localStorage.embedParamsVersion,chatbroScriptVersion:localStorage.chatbroScriptVersion},xhr=new XMLHttpRequest;xhr.withCredentials=!0,xhr.onload=function(){eval(xhr.responseText)},xhr.onerror=function(){console.error('Chatbro loading error')},xhr.open('GET','https://www.chatbro.com/embed.js?'+btoa(unescape(encodeURIComponent(JSON.stringify(params)))),async),xhr.send()}
    /* Chatbro Widget Embed Code End */
    ChatbroLoader({encodedChatId: '1gbE'});
  </script>
</head>

<body>
<!-- NAVBAR -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid" id="templatemo_navbar">
    <a class="navbar-brand" href="#"><img src="images/LogoSOAPortal/LogoSOA-warna-merahbgt.png" width="200px"></a>
    <ul class="nav navbar-nav navbar-right" style="padding-right: 40px">
      <li class="li_nav">
        <a href="#" data-toggle="modal" data-target="#myModal">Upload File</a>
      </li>
      <li class="li_nav">
        <a href="https://docs.google.com/spreadsheets/d/16zmsnK-yCQSDDR4l2Wi0Q4JDvJsmr6ljtJACRPFTZ4U/edit#gid=0" target="blank">Daftar Requirement</a>
      </li>
      <li class="li_nav">
        <a href="https://docs.google.com/spreadsheets/d/110zSWm-pK67-EUFdE7MTeyw9Hg0YJyfccFgoVALUwqk/edit#gid=0" target="blank">Daftar Dev-to-Prod</a>
      </li>
    </ul>
  </div>
</nav>

<!-- modal -->
<div id="myModal" class="modal fade" role="dialog" style="display: none">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4 class="modal-title">Upload File</h4>
      </div>
      <div class="modal-body">
        <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <input type="submit" value="Upload" name="submit">
        </form>
      </div>
    </div>
  </div>
</div>

<!-- BODY -->
<div id="templatemo_middle_wrapper2"></div>
<div id="templatemo_middle_wrapper" style="padding-top: 40px;">
  <div id="templatemo_middle_wrapper_all">
    <!-- Frame Works 1-->
    <div id="templatemo_middle_l" >
        <img id="map" src="images/SOA_MAP.jpg">
    </div>
    <!-- Frame Works 2-->
    <div id="templatemo_middle_r">
      <div id="chatbroHistory"></div>
    </div>
  </div>
</div> <!-- END of slider -->

<div id="templatemo_main">
  <div class="col_12 float_l">
      <h2><b>Operational Support</b></h2>
  </div>
  <div class="cleaner h20"></div>
  <div class="fp_box5">
    <a href="http://soaportal.telkom.co.id/tenossBBDev/index.php" target="blank">
      <img src="images/tennos_BB_development.jpg" alt="Image 01" />
    </a>
  </div>
  <div class="fp_box5">
    <a href="http://soaportal.telkom.co.id/infusionDev/index.php" target="blank">
      <img src="images/infusion_development.jpg" alt="Image 05" />
    </a>
  </div>
  <div class="fp_box5">
    <a href="http://soaportal.telkom.co.id/flexiMon/index.php" target="blank">
      <img src="images/flexi_production.jpg" alt="Image 03" />
    </a>
  </div>
  <div class="fp_box5 no_margin_right">
    <a href="http://soaportal.telkom.co.id/eaiops/index.php" target="blank">
      <img src="images/EAIO.jpg" alt="Image 04" />
    </a>
  </div>

  <div class="cleaner h50"></div>
  <div class="fp_box5">
    <a href="http://mws.telkom.co.id:8585/">
      <img src="images/tennos_BB_production.jpg" alt="Image 02" />
    </a>
  </div>
  <div class="fp_box5">
    <a href="http://soaportal.telkom.co.id/infusionProd/index.php">
      <img src="images/infusion_production.jpg" alt="Image 06" />
    </a>
  </div>
  <div class="fp_box5">
    <a href="http://soaportal.telkom.co.id/sgwMon/index.php">
      <img src="images/EAI.jpg" alt="Image 07" />
    </a>
  </div>
  <div class="fp_box5 no_margin_right">
    <a href="http://soaportal.telkom.co.id/sap-crm/index.php">
      <img src="images/SAP_CRM.jpg" alt="Image 08" />
    </a>
  </div>

  <div class="cleaner h20"></div>
  <div class="cleaner"></div>

  <section class="regular slider">
    <div>
      <a href="https://www.google.co.id/" target="blank">
        <img src="images/LogoSOAPortal/1-DaftarPlatformSDP.png">
      </a>
    </div>
    <div>
      <a href="https://www.google.co.id/" target="blank">
        <img src="images/LogoSOAPortal/2-DaftarPlatformEAI.png">
      </a>
    </div>
    <div>
      <a href="https://www.google.co.id/" target="blank">
        <img src="images/LogoSOAPortal/3-DaftarPlatformWSO2.png">
      </a>
    </div>
    <div>
      <a href="https://www.google.co.id/" target="blank">
        <img src="images/LogoSOAPortal/4-WikiDevSOA.png">
      </a>
    </div>
    <div>
      <a href="https://www.google.co.id/" target="blank">
        <img src="images/LogoSOAPortal/5-WikiD2PSOA.png">
      </a>
    </div>
    <div>
      <a href="https://www.google.co.id/" target="blank">
        <img src="images/LogoSOAPortal/6-WikiArtikelSOA.png">
      </a>
    </div>
  </section>
</div> <!-- END of main -->

<div id="templatemo_footer_wrapper">
  <div id="templatemo_footer">
    <iframe style="width: 100% " height="300px" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vReZX-4J6DS9EETOR1gHUXnkD7CGVvCVCnPbPUOTY1KU_pJi6STf52dVUYCGLYz0FdZleqo1thpqZ9k/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe> 
     <div class="cleaner h50"></div>     
      <iframe style="width: 100% " height="300px" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRPp1rCShOrWfTtrYIXwxnpUrKIVW2dUqOD97k-SHA9fLfpcUywwNCM3EaMd_Hf5mv9S19PKO5LOm_R/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>       
  </div>
</div>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
  $(document).on('ready', function() {
    $(".regular").slick({
      dots: true, 
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1
    });
  });
</script>

</body>
</html>