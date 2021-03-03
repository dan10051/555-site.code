<?php
function pager_num($all,$count,$page, $str="view"){
$min=7;$max=$min*2;

$result='';
$count_p=ceil($all / $count);
if ($count_p<=$max+1){
    for ($i=0;$i<=$count_p-1;$i++)
        if ($i == $page)
            $result .= '<span>'.($i+1).'</span> '."\n";
        else
            $result .= '<a href="/'.$str.'/'.($i).'">'.($i+1).'</a> '."\n";
}
else {
    if ($page<=$min+1){ // ����� ����
        for ($i=0;$i<=$max+1;$i++)
            if ($i == $page)
                $result .= '<span>'.($i+1).'</span> '."\n";
            else
                $result .= '<a href="/'.$str.'/'.$i.'">'.($i+1).'</a> '."\n";
        $result .= '<a href="/'.$str.'/'.($page+1).'">���������</a> '."\n";
    }
    else if ($page>=($count_p-$min)){ // ������ ����
        $result .= '<a href="/'.$str.'/'.($page-1).'">����������</a> '."\n";
        for ($i=($count_p-($max));$i<=$count_p;$i++)
            if ($i == $page)
                $result .= '<span>'.($i+1).'</span> '."\n";
            else
                $result .= '<a href="/'.$str.'/'.$i.'">'.($i+1).'</a> '."\n";
    }
    else { // ��������
        $result .= '<a href="/'.$str.'/'.($page-1).'">����������</a> '."\n";
        for ($i=$page-$min;$i<$page-$min+$max+1;$i++)
            if ($i == $page)
                $result .= '<span>'.($i+1).'</span> '."\n";
            else
                $result .= '<a href="/'.$str.'/'.$i.'">'.($i+1).'</a> '."\n";
        $result .= '<a href="/'.$str.'/'.($page+1).'">���������</a> '."\n";
    }
}
return $result;
}


	class viewTemplate {
		static function headerHTML($info = false) {
			global $STATIC;
			$result  = "";
			
			$result .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'."\n";
			$result .= '<html xmlns="http://www.w3.org/1999/xhtml">'."\n";
			$result .= '    <head>'."\n";
			$result .= '        <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />'."\n";
			$result .= '        <title>'.(isset($info['title'])? stripslashes($info['title']): $STATIC['name_syte']).'</title>'."\n";
                        $result .= '    <meta name="google-site-verification" content="_-nLjK9DsB5ww7XasixChzAlCOYLCKjE98qVVY1AYsE" />'."\n";
			$result .= '	<meta name="description" content="'.(isset($info['description'])? stripslashes($info['description']): "").'" >'."\n";
			$result .= '	<meta name="keywords" content="'.(isset($info['keywords'])? stripslashes($info['keywords']): "").'" >'."\n";
			$result .= '	<link rel="stylesheet" type="text/css" href="/css/css-core/css-core.css"/>'."\n";
			$result .= '<link rel="icon" href="/favicon.ico" type="image/x-icon">'."\n";
			$result .= '<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> '."\n";
			$result .= '        <link rel="stylesheet" type="text/css" href="/css/css-core/round.css"/>'."\n";
			$result .= '        <link rel="stylesheet" type="text/css" href="/css/snippet/equal-columns.css"/>'."\n";
			$result .= '        <link rel="stylesheet" type="text/css" href="/css/index.css"/>'."\n";
			$result .= '        <link rel="stylesheet" type="text/css" href="/css/header.css"/>'."\n";
			$result .= '        <link rel="stylesheet" type="text/css" href="/css/icons.css"/>'."\n";
			$result .= '        <link rel="stylesheet" type="text/css" href="/css/buttons.css"/>'."\n";
			$result .= '        <link rel="stylesheet" type="text/css" href="/css/video.css"/>'."\n";
			$result .= '        <link rel="stylesheet" type="text/css" href="/css/main.css"/>'."\n";
			$result .= '        <link rel="stylesheet" type="text/css" href="/css/footer.css"/>'."\n";
			$result .= '        <link rel="stylesheet" type="text/css" href="/css/equal-columns.css"/>'."\n";
			$result .= '        <link rel="stylesheet" type="text/css" href="/css/jgrowl.css"/>'."\n";
			$result .= '        <!--[if lt IE 7]>'."\n";
			$result .= '	    <link rel="stylesheet" href="/css/css-core/css-ie.css" type="text/css"/>'."\n";
			$result .= '            <script type="text/javascript" src="/class/js/iepngfix.js"></script>'."\n";
			$result .= '        <![endif]-->        '."\n";
			$result .= '<script type="text/javascript" src="/class/js/jquery.js"></script>'."\n";
			$result .= '<script type="text/javascript" src="/class/js/jquery.jcarousel.pack.js"></script>'."\n";
			$result .= '<script src="/class/js/operation.js"></script>'."\n";
			$result .= '<script src="/class/js/jquery.simplemodal.js"></script>'."\n";
			$result .= '<script src="/class/js/jquery.fancybox.pack.js"></script>'."\n";
			$result .= '<script src="/class/js/jquery.jgrowl.js"></script>'."\n";
			$result .= '<script src="/class/ajax/lib/JsHttpRequest/JsHttpRequest.js"></script>'."\n";
			$result .= '<script type="text/javascript" src="/class/js/swfobject.js"></script>'."\n";

                       $result .= ' <script src="video123.js"></script> '."\n";
		       $result .= ' <link href="video-js.css" rel="stylesheet" /> '."\n";

		       $result .= ' <script src="sldp-v2.17.3.min.js"></script>  '."\n";




$result .= "<script type='text/javascript'> var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-29058375-1']); _gaq.push(['_setDomainName', '555hf.tv']);  _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script>\n";
#$result .= '<script type="text/javascript" src="/class/js/cycle.js"></script>'."\n";
#$result .= '<script type="text/javascript" src="/class/js/slideshow.js"></script>'."\n";
/*
$result .= "<script language='JavaScript' type='text/javascript'>
<!--
$(document).ready(function()
{
    $('#slider').cycle({
    timeout: 10000,
    speed: 0
    });
});
-->
</script>\n";
*/
			$result .= '    </head>'."\n";


			$result .= '</head>'."\n";

			return $result;
		}

		static function topMenu($img="") {
			global $pagename;

			$result = '';

			$result .= '                         <div class="main-menu">'."\n";
			$result .= '                             <a class="first program-menu" href="/programguide">'."\n";
			$result .= '                                 <i class="tl"></i>'."\n";
			$result .= '                                 ��������� �������'."\n";
			$result .= '                             </a>'."\n";
			$result .= '                             <a class="club-menu" href="http://www.555hf.ru" target="_blank">555 ����</a>'."\n";
			$result .= '                             <a class="feder-menu" href="http://federationofsniping.ru/" target="_blank">��������� ���������</a>'."\n";
			$result .= '                             <a class="school-menu" href="http://www.555sh.ru" target="_blank">����� ��������</a>'."\n";
			$result .= '                             <a class="fisher" href="http://www.555sf.ru" target="_blank">����� ��������</a>'."\n";
			$result .= '                             <a class="forum-menu" href="/forum">�����</a>'."\n";
			$result .= '                             <a class="konk" href="/contest">'."\n";
			$result .= '                                <i class="tr"></i>'."\n";
			$result .= '                                ��������'."\n";
			$result .= '                            </a>'."\n";
			$result .= '                         </div>'."\n";

			
			return $result;
		}

		static function header($img, $info = false) {
			global $STATIC, $pagename;

			$result  = "";
#$result .= $_SERVER['SERVER_HOST'];
#print_r($_SERVER);
			$result .= viewTemplate::headerHTML($info);

			$result .= '<body>'."\n";
			$result .= '<div id="container">'."\n";
			$result .= '	<div id="header">'."\n";

			$result .= '    <body>'."\n";
			$result .= '        <div class="container-html">'."\n";
			$result .= '            <div class="container-body">'."\n";
			$result .= '              <div class="main container"> '."\n";
			$result .= '                  <div class="head-wood">'."\n";
			$result .= '                      <img src="/img/common/head-wood.png" width="1048" height="307" />'."\n";
			$result .= '                  </div>'."\n";
			$result .= '                     <div class="head">'."\n";
/*
			$result .= '			<div class="header">'."\n";
#width="966" height="288"
			$result .= '                          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="966" height="288" id="FlashID" title="tt">'."\n";
			$result .= '                            <param name="movie" value="/images/header.swf" />'."\n";
			$result .= '                            <param name="quality" value="high" />'."\n";
			$result .= '                            <param name="wmode" value="opaque" />'."\n";
			$result .= '                            <param name="swfversion" value="6.0.65.0" />'."\n";
			$result .= '                            <param name="expressinstall" value="Scripts/expressInstall.swf" />'."\n";
			$result .= '                            <!--[if !IE]>-->'."\n";
			$result .= '                            <object type="application/x-shockwave-flash" data="/images/header.swf" width="966" height="288">'."\n";
			$result .= '                              <!--<![endif]-->'."\n";
			$result .= '                              <param name="quality" value="high" />'."\n";
			$result .= '                              <param name="wmode" value="opaque" />'."\n";
			$result .= '                              <param name="swfversion" value="6.0.65.0" />'."\n";
			$result .= '                              <param name="expressinstall" value="Scripts/expressInstall.swf" />'."\n";
			$result .= '                              <div>'."\n";
			$result .= '                                <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>'."\n";
			$result .= '                                <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>'."\n";
			$result .= '                              </div>'."\n";
			$result .= '                              <!--[if !IE]>-->'."\n";
			$result .= '                            </object>'."\n";
			$result .= '                            <!--<![endif]-->'."\n";
			$result .= '                          </object>'."\n";

			$result .= '                  </div>'."\n";
*/
/*
                        $result .= '                            <div id="slider" class="header">'."\n";
                        $result .= '                                    <img src="/images/headers/11.jpg" width="966" height="288" />
                                                                        <img src="/images/headers/5.jpg" width="966" height="288" />
                                                                        <img src="/images/headers/9.jpg" width="966" height="288" />'."\n";
                        $result .= '                            </div>'."\n";
*/

			$arr_img_head_rand =array(0=>11,1=>5,2=>9);
			$result .= '                         <div class="header">'."\n";
                        $result .= '                                    <img src="/images/headers/'.$arr_img_head_rand[rand(0,2)].'.jpg" width="966" height="288" />'."\n";
			$result .= '                       </div>'."\n";

#			$result .= '                         <div class="header">'."\n";
#			$result .= '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="player" width="966" height="288" codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab" ><param name="movie" value="/images/header.swf" ></param><param name="quality" value="high"></param><embed src="/images/header.swf"  quality="high" bgcolor="#000000" width="966" height="288" name="player" align="middle" play="true" loop="true" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer"></embed></object>';
#			$result .= '                            <img src="/images/header/'.($img!="" && $img!=0 && file_exists("../images/header/{$img}.png")? $img: "header").'.png" width="966" height="288" />'."\n";
#			$result .= '                       </div>'."\n";


			$result .= '                         <div class="logo">'."\n";
			$result .= '                             <a href="/"><img src="/img/common/555hf-logo.png" width="247" height="154" alt="555hf.tv" /></a>'."\n";
			$result .= '                         </div>'."\n";
$result .= '                         <div class="logo1">'."\n";
$result .= '                             <img src="/images/headers/1.png" alt="18+" />'."\n";
$result .= '                         </div>'."\n";

			$result .= '                         <div class="avt-reg">'."\n";
			$result .= '                             <a href="/account">����</a> | <a href="/reg">�����������</a>'."\n";
			$result .= '                         </div>'."\n";

			$result .= viewTemplate::topMenu($img);

			$result .= '                  </div>'."\n";

			return $result;
		}	

		static function headerPrint($info = false) {
			global $STATIC, $pagename;

			$result  = "";
			$result .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">'."\n";
			$result .= '<html xmlns="http://www.w3.org/1999/xhtml">'."\n";
			$result .= '<head>'."\n";
			$result .= '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />'."\n";
			$result .= '<title>'.(isset($info['title'])? stripslashes($info['title']): $STATIC['name_syte']).'</title>'."\n";
			$result .= '<meta name="description" content="'.(isset($info['description'])? stripslashes($info['description']): "").'" >'."\n";
			$result .= '<meta name="keywords" content="'.(isset($info['keywords'])? stripslashes($info['keywords']): "").'" >'."\n";
			$result .= '<link rel="icon" href="/favicon.ico" type="image/x-icon">'."\n";
			$result .= '<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> '."\n";
			$result .= '<link rel="stylesheet" type="text/css" href="/style000.css" />'."\n";
			$result .= '<!--[if IE 6]>'."\n";
			$result .= '  <link rel="stylesheet" type="text/css" href="/ie6.css" />'."\n";
			$result .= '<![endif]-->'."\n";
			$result .= '<script type="text/javascript" src="/class/js/jquery.js"></script>'."\n";
			$result .= '</head>'."\n";

			$result .= '<body>'."\n";

			return $result;
		}	


		static function headerRecommend($img, $info) {
			global $STATIC;

			$result  = "";

			$result .= viewTemplate::headerHTML($info);

			$result .= '<body>'."\n";
			$result .= '<div id="container">'."\n";
			$result .= '	<div id="header">'."\n";
			$result .= viewTemplate::topMenu($img);
		
			$result .= '		<div id="header_find_friends"></div>'."\n";


			return $result;
		}
		
		static function headerFootstep($img, $info) {
			global $STATIC;

			$result  = "";

			$result .= viewTemplate::headerHTML($info);

			$result .= '<body>'."\n";
			$result .= '<div id="container">'."\n";
			$result .= '	<div id="header">'."\n";
			$result .= viewTemplate::topMenu($img);
		
			$result .= '		<div id="header_find_sled"></div>'."\n";

			return $result;
		}

		static function headerTest($img, $info) {
			global $STATIC;

			$result  = "";

			$result .= viewTemplate::headerHTML($info);

			$result .= '<body>'."\n";
			$result .= '<div id="container">'."\n";
			$result .= '	<div id="header">'."\n";
			$result .= viewTemplate::topMenu($img);
		
			$result .= '		<div id="header_find_test"></div>'."\n";


			return $result;
		}

		static function headerProgrammAll($img, $info) {
			global $STATIC;

			$result  = "";

			$result .= viewTemplate::headerHTML($info);

			$result .= '<body>'."\n";
			$result .= '<div id="container">'."\n";
			$result .= '	<div id="header">'."\n";
			$result .= viewTemplate::topMenu($img);
		
			$result .= '		<div id="header_find"><div id="header_find_layer"></div>'."\n";
			$result .= '			<form action="/search/" method="post">'."\n";
			$result .= '				<input type="text" class="find" name="searchtext"  />'."\n";
			$result .= '				<input type="image" src="/images/find.gif" class="button" />'."\n";
			$result .= '			</form>'."\n";
			$result .= '		</div>'."\n";
			$result .= '	</div>'."\n";

			return $result;
		}	
		
		static function headerReg($img, $info = false) {
			global $STATIC;

			$result  = "";

			$result .= viewTemplate::headerHTML($info);

			$result .= '<body>'."\n";
			$result .= '<div id="container">'."\n";
			$result .= '	<div id="header">'."\n";
			$result .= viewTemplate::topMenu($img);
		
			$result .= '		<div id="header_find_reg"></div>'."\n";
			$result .= '	</div>'."\n";

			return $result;
		}	
		
		static function headerProgramm($img) {
			global $STATIC, $pagename;

			$result  = "";

			$result .= viewTemplate::headerHTML();

			$result .= '<body>'."\n";
			$result .= '<div id="container">'."\n";
			$result .= '	<div id="header">'."\n";
			$result .= viewTemplate::topMenu($img);
				
			$result .= '		<div id="header_find_prog2">'."\n";
			$result .= '			<a href="/programm/'.$pagename[1].'/" title="� ������" class="vnachalo"></a>'."\n";
			$result .= '			<a href="#" title="5 ��������" class="zabros"></a>'."\n";
			$result .= '			<a href="/programm/'.$pagename[1].'/episode/" title="�������" class="epizod"></a>'."\n";
			$result .= '			<a href="/programm/'.$pagename[1].'/photos/" title="����������" class="fotografii"></a>'."\n";
			$result .= '			<a href="/programm/'.$pagename[1].'/bio/" title="���" class="bio"></a>'."\n";
			$result .= '			<a href="/programm/'.$pagename[1].'/blog/" title="����" class="blog"></a>'."\n";
			$result .= '		</div>'."\n";
		
			$result .= '	</div>'."\n";

			return $result;
		}	

		static function headerVideo($img) {
			global $STATIC;

			$result  = "";

			$result .= viewTemplate::headerHTML();

			$result .= '<body>'."\n";
			$result .= '<div id="container">'."\n";
			$result .= '    <div id="header">'."\n";
			$result .= viewTemplate::topMenu($img);
			$result .= '	<div id="header_find_prog2">'."\n";
			$result .= '	    <a href="#" title="� ������" class="vnachalo"></a>'."\n";
			$result .= '	    <a href="#" title="5 ��������" class="zabros_active"></a>'."\n";
			$result .= '	    <a href="#" title="�������" class="epizod"></a>'."\n";
			$result .= '	    <a href="#" title="����������" class="fotografii"></a>'."\n";
			$result .= '	    <a href="#" title="���" class="bio"></a>'."\n";
			$result .= '	    <a href="#" title="����" class="blog"></a>'."\n";
			$result .= '	</div>'."\n";
			$result .= '    </div>'."\n";
			return $result;
		}	

		static function footer($info = false) {
			global $STATIC, $modules;

  			$result  = '';

			if (isset($_SESSION['noReadMessagesCount']) and $_SESSION['noReadMessagesCount']>0 && $_SERVER['REQUEST_URI'] != "/account/forum") {
				$result .= '<script>'."\n";
				$result .= '$.jGrowl("� ��� ���� '.$_SESSION['noReadMessagesCount'].' ������������� ��������� �� ������. ����� ����������� ������, ��������� �� <a href=\'/account/forum\' style=\'color: white;\' onClick=\'jQuery(\"div.jGrowl\").trigger(\"jGrowl.close\");\'>������</a>", { sticky: true });'."\n";
				$result .= '</script>'."\n";
			}
			if (((isset($_SESSION['newMessages']) and $_SESSION['newMessages']>0) || (isset($_SESSION['newFriends']) and $_SESSION['newFriends']>0)) && $_SERVER['REQUEST_URI'] != "/account/friends") {
				$result .= '<script>'."\n";
				$result .= '$.jGrowl("� ��� ���� '.$_SESSION['newMessages'].' ������������� ������ ��������� � '.$_SESSION['newFriends'].' ������������, ������������ �������. ����� ����������� ������, ��������� �� <a href=\'/account/friends\' style=\'color: white;\' onClick=\'jQuery(\"div.jGrowl\").trigger(\"jGrowl.close\");\'>������</a>", { sticky: true });'."\n";
				$result .= '</script>'."\n";
			}

			if (((isset($_SESSION['ownArticles']) and $_SESSION['ownArticles']>0) || (isset($_SESSION['ownComments1']) and $_SESSION['ownComments1']>0)) && $_SERVER['REQUEST_URI'] != "/account/myblog") {
				$result .= '<script>'."\n";
				$result .= '$.jGrowl("� ��� ���� '.$_SESSION['ownArticles'].' ������������� ������������ � ����� ������� � '.$_SESSION['ownComments1'].' ������� �� ���� ����������� . ����� ����������� ������, ��������� �� <a href=\'/account/myblog\' style=\'color: white;\' onClick=\'jQuery(\"div.jGrowl\").trigger(\"jGrowl.close\");\'>������</a>", { sticky: true });'."\n";
				$result .= '</script>'."\n";
			}

			$result .= '                    <div class="footer">'."\n";
			$result .= '                        <div class="footer-wood">'."\n";
			$result .= '                            <img src="/img/common/footer-wood.png" width="1048" height="137" />'."\n";
			$result .= '                        </div>'."\n";
			$result .= '                        <div class="footer-box">'."\n";
			$result .= '                    	<div class="search-back">'."\n";
			$result .= '    <form action="/search/" method="post" id="formSearch"> '."\n";
			$result .= '                        	<a onClick="document.getElementById(\'formSearch\').submit()">�����</a>'."\n";
			$result .= '                        	<span>'."\n";
			$result .= '                    		<input type="text" class="find" name="searchtext"  />'."\n";

			$result .= '                                </span>'."\n";
			$result .= '    </form> '."\n";

			$result .= '                            </div>'."\n";
			$result .= '                    	<div>'."\n";
			$result .= '                                <ul class="bottom-menu">'."\n";
			$result .= '                                    <li>'."\n";
			$result .= '                                        <a href="/map">��������� �����</a>'."\n";
			$result .= '                                    </li>'."\n";
			$result .= '                                    <li>'."\n";
			$result .= '                                        <a href="/about">��� � 555hf.tv</a>'."\n";
			$result .= '                                    </li>'."\n";
			$result .= '                                    <li>'."\n";
			$result .= '                                        <a href="/rules">�������</a>'."\n";
			$result .= '                                    </li>'."\n";
			$result .= '                                    <li>'."\n";
			$result .= '                                        <a href="/cooperation">��������������</a>'."\n";
			$result .= '                                    </li>'."\n";
			$result .= '                                    <li>'."\n";
			$result .= '                                        <a href="/partners">��������</a>'."\n";
			$result .= '                                    </li>'."\n";
			$result .= '                                    <li>'."\n";
			$result .= '                                        <a href="/reg">��� ������������</a>'."\n";
			$result .= '                                    </li>'."\n";
			$result .= '                                    <li>'."\n";
			$result .= '                                        <a href="/faq">555 online �����</a>'."\n";
			$result .= '                                    </li>'."\n";
			$result .= '                                    <li>'."\n";
			$result .= '                                        <a href="/view">�������� �����</a>'."\n";
			$result .= '                                    </li>'."\n";
			$result .= '                                    <li>'."\n";
			$result .= '                                        <a href="/viewtv">�������� �� 555hf.tv</a>'."\n";
			$result .= '                                    </li>'."\n";
			$result .= '                                    <li>'."\n";
			$result .= '                                        <a href="/wantsee">���� �������</a>'."\n";
			$result .= '                                    </li>'."\n";
			$result .= '                                    <li>'."\n";
			$result .= '                                        <a href="/footstep">������ ���� ����</a>'."\n";
			$result .= '                                    </li>'."\n";
			$result .= '                                    <li>'."\n";
			$result .= '                                        <a href="/details">���������</a>'."\n";
			$result .= '                                    </li>'."\n";
#			$result .= '                                    <li>'."\n";
#			$result .= '                                        <a href="/lesson">������ �����</a>'."\n";
#			$result .= '                                    </li>'."\n";
			$result .= '                                </ul>'."\n";

			$result .= '                                <BR/><div class="copy">'."\n";
			$result .= '                                    <p>555hf.tv. ��������� - ���������� �������� �����.</p>'."\n";
			$result .= '                                    <p>� 2009-2019. ����������� ���������� � ����� ���������! ';
$result .= '<!--LiveInternet counter--><script type="text/javascript">document.write("<a href=\'http://www.liveinternet.ru/click\' target=_blank><img src=\'//counter.yadro.ru/hit?t44.3;r" + escape(document.referrer) + ((typeof(screen)=="undefined")?"":";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?screen.colorDepth:screen.pixelDepth)) + ";u" + escape(document.URL) + ";" + Math.random() + "\' border=0 width=16 height=16 alt=\'\' title=\'LiveInternet\'><\/a>")</script><!--/LiveInternet--></p>'."\n";

 $result .= '  <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>'."\n";
 $result .= '  <script src="//yastatic.net/share2/share.js"></script>'."\n";
 $result .= '  <div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir,gplus,twitter,linkedin,viber,whatsapp,skype,telegram"></div>'."\n";





$result .= '
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter42712404 = new Ya.Metrika({
                    id:42712404,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/42712404" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
';
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '                    </div>'."\n";

  			$result .= '              </div>'."\n";
  			$result .= '            </div>'."\n";
  			$result .= '        </div>'."\n";
  			$result .= '        <div class="box-fixed" style="display: none;">'."\n";
  			$result .= '            <div class="box-body"></div>'."\n";
  			$result .= '            <div class="wrapper">box fixed</div>'."\n";
  			$result .= '        </div>'."\n";
  			$result .= '    </body>'."\n";
  			$result .= '</html>'."\n";
			
			return $result;
		}

		static function footerPrint($info = false) {
 			$result  = '';

  			$result .= '</body>'."\n";
  			$result .= '</html>'."\n";
			
			return $result;
		}

		
		static function footerProgramm() {
  			$result  = '';
  			$result .= '<div id="footer">'."\n";
  			$result .= '	<form action="/search/" method="post">'."\n";
  			$result .= '		<input type="text" class="find" name="searchtext"  />'."\n";
  			$result .= '		<input type="image" src="/images/find.gif" class="button" />'."\n";
  			$result .= '	</form>'."\n";
	
  			$result .= '	<a href="/about">��� � 555huntfishing.TV</a><div class="footer_razdel"></div>'."\n";
  			$result .= '	<a href="/rules">�������</a><div class="footer_razdel"></div>'."\n";
  			$result .= '	<a href="/cooperation">��������������</a><div class="footer_razdel"></div>'."\n";
  			$result .= '	<a href="/partners/">��������</a><div class="footer_razdel"></div>'."\n";
  			$result .= '	<a href="/reg">��� ������������</a>'."\n";
  			$result .= '</div>'."\n";
  			$result .= '</body>'."\n";
  			$result .= '</html>'."\n";
			
			return $result;
		}

		static function footerReg() {
  			$result  = '';
  			$result .= '<div id="footer">'."\n";
  			$result .= '	<form action="/search/" method="post">'."\n";
  			$result .= '		<input type="text" class="find" name="searchtext"  />'."\n";
  			$result .= '		<input type="image" src="/images/find.gif" class="button" />'."\n";
  			$result .= '	</form>'."\n";
	
  			$result .= '	<a href="/about">��� � 555huntfishing.TV</a><div class="footer_razdel"></div>'."\n";
  			$result .= '	<a href="/reg">��� ������������</a><div class="footer_razdel"></div>'."\n";
  			$result .= '	<a href="/rules">�������</a><div class="footer_razdel"></div>'."\n";
  			$result .= '	<a href="/cooperation">��������������</a><div class="footer_razdel"></div>'."\n";
  			$result .= '	<a href="/partners">��������</a><div class="footer_razdel"></div>'."\n";
  			$result .= '</div>'."\n";
  			$result .= '</body>'."\n";
  			$result .= '</html>'."\n";
			
			return $result;
		}

		static function footerVideo() {
  			$result  = '';
                        $result .= '<div id="footer">'."\n";
                        $result .= '    <form action="/search/" method="post">'."\n";
                        $result .= '            <input type="text" class="find" name="searchtext"  />'."\n";
                        $result .= '            <input type="image" src="/images/find.gif" class="button" />'."\n";
                        $result .= '    </form>'."\n";

                        $result .= '    <a href="/about">��� � 555huntfishing.TV</a><div class="footer_razdel"></div>'."\n";
                        $result .= '    <a href="/reg">��� ������������</a><div class="footer_razdel"></div>'."\n";
                        $result .= '    <a href="/rules">�������</a><div class="footer_razdel"></div>'."\n";
                        $result .= '    <a href="/cooperation">��������������</a><div class="footer_razdel"></div>'."\n";
                        $result .= '    <a href="/faq">����</a>'."\n";
                        $result .= '    <a href="/map">����� �����</a>'."\n";
                        $result .= '</div>'."\n";
                        $result .= '</body>'."\n";
                        $result .= '</html>'."\n";

			return $result;
		}


		function mainArticlesView($mainArticles) {
			$full = 0;
			$small = 0;
			$result = '<div style="position: relative">'."\n";
			if (!empty($mainArticles) and count($mainArticles)>0) {
				$result .= '                                              <div class="jornal-list">'."\n";
				foreach ($mainArticles as $key=>$article) {
					if ($article['viewstate'] == "simple1") {
						$full++;
						$result .= '                                                <div class="jornal-big-prw">'."\n";
						$result .= '                                                    <div class="black-opacity">'."\n";
						$result .= '                                                        <p>'.stripslashes($article['comment']).'</p>'."\n";
						$result .= '                                                    </div>'."\n";
						$result .= '                                                    <a href="/blog/'.$article['id'].'">'."\n";
						$result .= '                                                        <img src="/images/articles/'.$article['id'].'m.jpg" width="396" height="242" alt="" title="" />'."\n";
						$result .= '                                                    </a>'."\n";
						$result .= '                                                </div>'."\n";
					}
					else if ($article['viewstate'] == "simple2") {
						if ($small == 0) 
							$result .= '                                                <div class="jornal-list-smals">'."\n";

						$result .= '                                                    <div class="jornal-small-prw">'."\n";
						$result .= '                                                        <div class="black-opacity">'."\n";
						$result .= '                                                            <p>'.stripslashes($article['comment']).'</p>'."\n";
						$result .= '                                                        </div>'."\n";
						$result .= '                                                        <a href="/blog/'.$article['id'].'">'."\n";
						$result .= '                                                            <img src="/images/articles/'.$article['id'].'n.jpg" width="188" height="115" alt="" title="" />'."\n";
						$result .= '                                                        </a>'."\n";
						$result .= '                                                    </div>'."\n";
						$small++;
					}
				}

				if ($small > 0) 
					$result .= '                                                </div>'."\n";
				$result .= '                                              </div>'."\n";
			}
			$result .= '                                              </div>'."\n";
			return $result;
		}


		static function templateMainOld($programms, $carusel, $rightBlock, $lastArticles, $mainArticles, $bigAnswerTopic, $oursAuthor, $lastAlbum, $currentVoting, $seesoon, $lastProgramm) {
			$result  = '';
			$result .= '	<div id="left">'."\n";
			$result .= '		<div id="video">'."\n";

			$result .= '<div class="pl" id="playerMain">'."\n";
			$result .= '    <a href="http://www.adobe.com/go/getflashplayer">'."\n";
			$result .= '	<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>'."\n";
			$result .= '    </a>'."\n";
			$result .= '</div>'."\n";
			$result .= '		<div class="clear"></div>'."\n";

			if (!empty($seesoon) and count($seesoon)>0) {
				$result .= '<div id="big_box"><div id="big_box_top"><div><span>�������� �����</span></div></div>'."\n";
				foreach ($seesoon as $key=>$programm) {
					$result .= '<div class="big_subbox">
						<div class="big_subbox_top"><p>'.$programm['nameType'].'</p></div>
						<a href="/trailer/'.$programm['id'].'"><img style="z-index:1; left:83px; top:80px; position:relative; margin-top:-22px;" src="/images/playbtn1.png" width="23" height="22"></a>
						<div class="big_subbox_foto">
						<a href="/trailer/'.$programm['id'].'"><img src="/images/video/'.$programm['id'].'.png"  alt="" /></a></div>
						<p>'.stripslashes($programm['small_text']).'</p>
						<div class="big_subbox_bottom"></div>
						<div class="clear"></div>
						</div>
					'."\n";

					if ($key % 3 == 2) 
						$result .= '<div class="clear" style="height: 15px;"></div>'."\n";
				}

				$result .= '<div class="clear"></div>'."\n";
				$result .= '<div id="big_box_bottom"></div></div>'."\n";
			}

			if (!empty($programms) and count($programms)>0) {
#				$result .= '<div id="big_box"><div id="big_box_top"></div>'."\n";
#				$result .= '<div id="big_box_bottom"></div></div>'."\n";
				$result .= '<div id="big_box"><div id="big_box_top"><div><span>����� ���������</span></div></div>'."\n";
				foreach ($programms as $key=>$programm) {
					$result .= '<div class="big_subbox">
						<div class="big_subbox_top"><p>'.$programm['nameType'].'</p></div>
						<a href="/trailer/'.$programm['id'].'"><img style="z-index:1; left:83px; top:80px; position:relative; margin-top:-22px;" src="/images/playbtn1.png" width="23" height="22"></a>
						<div class="big_subbox_foto">
						<a href="/trailer/'.$programm['id'].'"><img src="/images/video/'.$programm['id'].'.png"  alt="" /></a></div>
						<p>'.stripslashes($programm['small_text']).'</p>
						<div class="big_subbox_bottom"></div>
						<div class="clear"></div>
						</div>
					'."\n";

					if ($key % 3 == 2) 
						$result .= '<div class="clear" style="height: 15px;"></div>'."\n";
				}

				$result .= '<div class="clear"></div>'."\n";
				$result .= '<div id="big_box_bottom"></div></div>'."\n";
			}

			$result .= '	</div>'."\n";
	
			$result .= '	<div id="right_column"><div id="right_column_top"></div>'."\n";
			#$result .= '		<div class="count_video_exclus"><p>145</p></div>'."\n";
			$result .= '		<div class="count_video_exclus"><p><img src="/images/count1.png"></p></div>'."\n";

#			$result .= '		<a href="#"><img src="/images/]35new_videos.png" alt="145 ����� �����" /></a>'."\n";
			$result .= '		<a href="#"><img src="/images/banner-web.gif" alt="35 ����� �����"/></a><BR/>'."\n";

			$result .= '		<a href="'.$rightBlock[0]['url'].'"><img style="z-index:1; left:-10px; top:90px; position:relative; margin-top:-22px;" src="/images/playbtn2.png" width="23" height="22"></a>'."\n";
			$result .= '		<div class="right_big_box" onClick="window.location = \''.$rightBlock[0]['url'].'\';" style="cursor: pointer">'."\n";
			$result .= '			<img src="/images/main_right/'.$rightBlock[0]['id'].'.jpg" alt="" /><div class="right_big_box_border"></div>'."\n";
			$result .= '			<span>'.$rightBlock[0]['name'].'</span>'."\n";
			$result .= '			<p>'.$rightBlock[0]['text'].'</p>'."\n";
			$result .= '		</div>'."\n";
		
			$result .= '		<a href="'.$rightBlock[1]['url'].'"><img style="z-index:1; left:-70px; top:70px; position:relative; margin-top:-22px;" src="/images/playbtn2.png" width="23" height="22"></a>'."\n";
			$result .= '		<div class="right_small_box" onClick="window.location = \''.$rightBlock[1]['url'].'\';" style="cursor: pointer">'."\n";
			$result .= '			<img src="/images/main_right/'.$rightBlock[1]['id'].'.jpg" alt="" /><div class="right_small_box_border"></div>'."\n";
			$result .= '			<span>'.$rightBlock[1]['name'].'</span>'."\n";
			$result .= '			<p>'.$rightBlock[1]['text'].'</p>'."\n";
			$result .= '		</div>'."\n";

			$result .= '		<a href="'.$rightBlock[2]['url'].'"><img style="z-index:1; left:-70px; top:70px; position:relative; margin-top:-22px;" src="/images/playbtn2.png" width="23" height="22"></a>'."\n";
			$result .= '		<div class="right_small_box" onClick="window.location = \''.$rightBlock[2]['url'].'\';" style="cursor: pointer">'."\n";
			$result .= '			<img src="/images/main_right/'.$rightBlock[2]['id'].'.jpg" alt="" /><div class="right_small_box_border"></div>'."\n";
			$result .= '			<span>'.$rightBlock[2]['name'].'</span>'."\n";
			$result .= '			<p>'.$rightBlock[2]['text'].'</p>'."\n";
			$result .= '		</div>'."\n";

			if ($rightBlock[4]['url'] != "") {
				$result .= '		<a href="'.$rightBlock[4]['url'].'"><img style="z-index:1; left:-70px; top:70px; position:relative; margin-top:-22px;" src="/images/playbtn2.png" width="23" height="22"></a>'."\n";
				$result .= '		<div class="right_small_box" onClick="window.location = \''.$rightBlock[4]['url'].'\';" style="cursor: pointer">'."\n";
				$result .= '			<img src="/images/main_right/'.$rightBlock[4]['id'].'.jpg" alt="" /><div class="right_small_box_border"></div>'."\n";
				$result .= '			<span>'.$rightBlock[4]['name'].'</span>'."\n";
				$result .= '			<p>'.$rightBlock[4]['text'].'</p>'."\n";
				$result .= '		</div>'."\n";
			}

		
			$result .= '		<a href="/wantsee"><img src="/images/hochu_uvidet.jpg" alt="" /></a>'."\n";
			$result .= '		<a href="/footstep"><img src="/images/ostav_sled.jpg" alt="" /></a>'."\n";
			$result .= '		<a href="/contest"><img src="/images/konkurs.png" alt="" /></a>'."\n";
		
			$result .= '		<div class="clear"></div>'."\n";
			$result .= '	<div id="right_column_bottom"></div></div>'."\n";
	
			$result .= '	<div class="clear"></div>'."\n";

			$result .= '	<div id="lenta" >'."\n";
			$result .= '		<a title="������" class="sovet" id="asovet"></a>'."\n";
			$result .= '		<a title="������" class="syuzhet_mini" id="asyuzhet_mini"></a>'."\n";
			$result .= '		<a title="��������" class="trallers" id="atrallers"></a>'."\n";

			$result .= '		<div id="lenta_empty"></div>'."\n";
			$result .= '		<div>'."\n";



			$random = array();
			$count_carusel = 5;
			if (isset($carusel['video'])) {
				if (count($carusel['video'])>$count_carusel)
					$randC = $count_carusel;
				else
					$randC = count($carusel['video']);
				$rand_keys = array_rand($carusel['video'], $randC);
				foreach ($rand_keys as $key) {
#					$carusel['video'][$key]['color'] = "video";
					$random[] = $carusel['video'][$key];
					$random[count($random)-1]['color'] = "video";
				}
			}
			if (isset($carusel['story'])) {
				if (count($carusel['story'])>$count_carusel)
					$randC = $count_carusel;
				else
					$randC = count($carusel['story']);
				$rand_keys = array_rand($carusel['story'], $randC);
				foreach ($rand_keys as $key) {
#					$carusel['video'][$key]['color'] = "story";
					$random[] = $carusel['story'][$key];
					$random[count($random)-1]['color'] = "story";
				}
			}
			if (isset($carusel['trailer'])) {
				if (count($carusel['trailer'])>$count_carusel)
					$randC = $count_carusel;
				else
					$randC = count($carusel['trailer']);
				$rand_keys = array_rand($carusel['trailer'], $randC);
				foreach ($rand_keys as $key) {
#					$carusel['video'][$key]['color'] = "trailer";
					$random[] = $carusel['trailer'][$key];
					$random[count($random)-1]['color'] = "trailer";
				}
			}

			shuffle($random);


			foreach ($carusel as $key=>$c) {
				$result .= '		<div id="conteiner'.$key.'" style="visibility: hidden;">'."\n";
				$result .= '		<ul id="lenta_conteiner'.$key.'" class="jcarousel-skin">'."\n";

				if (!empty($c) and count($c)>0) {
					foreach ($c as $car) {
						$result .= '<li class="lenta_block">'."\n";
#						$result .= '<a href="/video/'.$car['id'].'"><img style="z-index:1; left:56px; top:50px; position:relative; margin-top:-22px;" src="/images/playbtn2.png" width="23" height="22"></a>'."\n";
						$result .= '<img src="/images/video/'.$car['id'].'s.png" alt="" border="0"/>';
						$result .= '<img style="z-index:1; left:47px; top:-47px; position:relative; margin-top:0px;" src="/images/playbtn2.png" width="23" height="22">'."\n";
						$result .= '<div class="lenta_'.($key=="trailer"? "green": ($key=="story"? "red": "blue")).'_block_border"></div>'."\n";
						$result .= '<span><a href="/programm/'.$car['id_typeprogramm'].'">'.($key=="trailer"? "�������": $car['typeName']).'</a></span>
							<p><a href="/'.($key=="trailer"? "trailer": "video").'/'.$car['id'].'">'.$car['name'].'</a></p>
							<div class="lenta_empty"></div></li>'."\n";
					}
				}
				$result .= '</ul>'."\n";
				$result .= '		</div>'."\n";
			}
			

			$result .= '		<div id="conteinercarusel">'."\n";
			$result .= '		<ul id="lenta_conteinercarusel" class="jcarousel-skin">'."\n";
										
			if (!empty($random) and count($random)>0) {
				foreach ($random as $car) {
					$result .= '<li class="lenta_block">'."\n";
					$result .= '<img src="/images/video/'.$car['id'].'s.png" alt="" border="0"/>'."\n";
#					$result .= '<img style="z-index:1; left:47px; top:-47px; position:relative; margin-top:0px;" src="/images/playbtn2.png" width="23" height="22">'."\n";
					$result .= '<img style="z-index:1; left:47px; top:-47px; position:relative; margin-top:0px;" src="/images/playbtn2.png" width="23" height="22">'."\n";
					$result .= '<div class="lenta_'.($car['color'] == "trailer"? "green": ($car['color'] == "story"? "red": "blue")).'_block_border"></div>'."\n";
#					$result .= '<span><a href="/programm/'.$car['id_typeprogramm'].'">'.($car['color']=="trailer"? "�������": $car['typeName']).'</a></span>
					$result .= '<span><a href="/programm/'.$car['id_typeprogramm'].'">'.$car['typeName'].'</a></span>
					<p><a href="/'.($car['id_typeprogramm']==4 || $car['id_typeprogramm']==8? "video": "trailer").'/'.$car['id'].'">'.$car['name'].'</a></p>
					<div class="lenta_empty"></div></li>'."\n";
				}
			}
			$result .= '</ul>'."\n";
			$result .= '		</div>'."\n";

			$result .= '		</div>'."\n";

			$result .= '<script type="text/javascript">'."\n";
			$result .= 'jQuery(document).ready(function() {'."\n";
			$result .= '    jQuery(\'#lenta_conteinervideo\').jcarousel();'."\n";
			$result .= '	jQuery(\'#lenta_conteinertrailer\').jcarousel();'."\n";
			$result .= '	jQuery(\'#lenta_conteinerstory\').jcarousel();'."\n";
			$result .= '	jQuery(\'#lenta_conteinercarusel\').jcarousel();'."\n";
			$result .= '	$("#atrallers").click(function() {'."\n";
			$result .= '		$("#atrallers").addClass("trallers_active");'."\n";
			$result .= '		$("#asovet").removeClass("sovet_active");'."\n";
			$result .= '		$("#asovet").addClass("sovet");'."\n";
			$result .= '		$("#asyuzhet_mini").removeClass("syuzhet_mini_active");'."\n";
			$result .= '		$("#asyuzhet_mini").addClass("syuzhet_mini");'."\n";
			$result .= '		$("#conteinertrailer").css("visibility", "visible");'."\n";
			$result .= '		$("#conteinervideo").css("visibility", "hidden");'."\n";
			$result .= '		$("#conteinerstory").css("visibility", "hidden");'."\n";
			$result .= '		$("#conteinercarusel").css("visibility", "hidden");'."\n";
			$result .= '	});'."\n";
			$result .= '	$("#asovet").click(function() {'."\n";
			$result .= '		$("#atrallers").removeClass("trallers_active");'."\n";
			$result .= '		$("#atrallers").addClass("trallers");'."\n";
			$result .= '		$("#asovet").addClass("sovet_active");'."\n";
			$result .= '		$("#asyuzhet_mini").removeClass("syuzhet_mini_active");'."\n";
			$result .= '		$("#asyuzhet_mini").addClass("syuzhet_mini");'."\n";
			$result .= '		$("#conteinertrailer").css("visibility", "hidden");'."\n";
			$result .= '		$("#conteinerstory").css("visibility", "hidden");'."\n";
			$result .= '		$("#conteinervideo").css("visibility", "visible");'."\n";
			$result .= '		$("#conteinercarusel").css("visibility", "hidden");'."\n";
			$result .= '	});'."\n";
			$result .= '	$("#asyuzhet_mini").click(function() {'."\n";
			$result .= '		$("#atrallers").removeClass("trallers_active");'."\n";
			$result .= '		$("#atrallers").addClass("trallers");'."\n";
			$result .= '		$("#asovet").removeClass("sovet_active");'."\n";
			$result .= '		$("#asovet").addClass("sovet");'."\n";
			$result .= '		$("#asyuzhet_mini").addClass("syuzhet_mini_active");'."\n";
			$result .= '		$("#conteinervideo").css("visibility", "hidden");'."\n";
			$result .= '		$("#conteinerstory").css("visibility", "visible");'."\n";
			$result .= '		$("#conteinertrailer").css("visibility", "hidden");'."\n";
			$result .= '		$("#conteinercarusel").css("visibility", "hidden");'."\n";
			$result .= '	});'."\n";
			
#			$result .= '$("#atrallers").click();'."\n";
			$result .= '});'."\n";
			$result .= '</script>'."\n";

			$result .= '    </div><div class="clear"></div>'."\n";
			$result .= '    <div id="down">'."\n";
			$result .= '    <div id="left_down_container">'."\n";
			$result .= '        <div id="left_down2">'."\n";
			$result .= '	<div id="left_down_top2"><p><B>����� ����������</B></p></div>'."\n";

			if (!empty($lastArticles) and count($lastArticles)>0) {
				foreach ($lastArticles as $article) {
					$result .= '	    <div id="zapis">'."\n";
					$result .= '	    <a href="/blog/'.$article['id'].'"><img src="/images/users/'.(file_exists($_SERVER['DOCUMENT_ROOT'].'images/users/'.$article['id_user'].'.jpg')===true? $article['id_user']: "nophoto").'.jpg" width="38" height="38"></a>'."\n";
					$result .= '	    <div id="autor"><a href="/profile/'.$article['id_user'].'">'.$article['author'].'</a></div>'."\n";
					list($date, $time) = explode(" ", date("d.m.Y H:i", $article['datetime']));
					if ($date == date("d.m.Y"))
						$date = "�������";
					else if ($date == date("d.m.Y", strtotime("NOW -1day")))
						$date = "�����";

					$result .= '	    <div id="date">'.$time.' / '.$date.'</div>'."\n";
					$result .= '	    <div class="clear"></div>'."\n";
					$result .= '	    <div id="text">'.stripslashes($article['name']).' <a href="/blog/'.$article['id'].'">�</a></div>'."\n";
					$result .= '	    </div><div class="clear"></div>'."\n";
				}
			}

			$result .= '        <div id="left_down_bottom2"></div>'."\n";
			$result .= '        </div>'."\n";
			$result .= '        <a href="/recommend"><img src="/images2/images/banner1.png" /></a>'."\n";
#			$result .= '        <a href="/lesson"><img src="/images/banner2-1.png" /></a>'."\n";
			$result .= '        <a href="/lesson"><img src="/images/banner2-1.png" /></a>'."\n";
			$result .= '        <a href="/shop"><img src="/images2/images/banner3.png" /></a>'."\n";
			$result .= '        <a href="/viewtv"><img src="/images2/images/banner4.png" /></a>'."\n";

			$result .= '    </div>'."\n";
			$result .= '<div id="right_down_container2">'."\n";
    
//bigAnswerTopic
			$result .= '        <div id="right_down2">'."\n";
			$result .= '	<div id="right_down_top2"><p>����� �������� ���� ������</p></div>'."\n";

			function cmp($a, $b) {
				if ($a['count'] == $b['count']) {
					return 0;
				}
				return ($a['count'] > $b['count']) ? -1 : 1;
			}

			if (!empty($bigAnswerTopic) and count($bigAnswerTopic)>0) {
				foreach ($bigAnswerTopic as $key=>$forum) {
					$result .= '	<div id="forum" '.($key+1 == count($bigAnswerTopic)? 'class="last"': "").'>'."\n";
					$result .= '	    <span id="zap1">����:</span> <span id="theme"><a href="/forum/forum'.$forum['id_forum'].'/topic'.$forum['id'].'.html">'.stripslashes($forum['name']).'</a></span><br />'."\n";
					$result .= '	    <span id="zap1">����� ������:</span> '.$forum['count_post'].'<br />'."\n";
					$result .= '	    <span id="zap1">����� ����������:</span> '.$forum['count_users'].'<br />'."\n";
					$temp = array();
					uasort($forum['users'], 'cmp');
					$i = 0;
					foreach ($forum['users'] as $user) {
						$temp[] = '<a href="/profile/'.$user['id_user'].'">'.$user['autor'].'</a>';
						if (++$i > 5) break;
					}
					$result .= implode(", ", $temp).($i>5? "�": "")."\n";
					$result .= '	</div>'."\n";
				}
			}

//oursAuthor
			$result .= '	<div id="right_down_bottom2">&nbsp;</div>'."\n";
			$result .= '        </div>'."\n";
			$result .= '        <div class="clear"></div>'."\n";
			$result .= '        <div id="right_down2">'."\n";
			$result .= '	<div id="right_down_top3"><p>���� ������</p></div>'."\n";

			if (!empty($oursAuthor) and count($oursAuthor)>0) {
				uasort($oursAuthor, 'cmp');
				foreach ($oursAuthor as $key=>$user) {
					$result .= '	<div id="author" '.($key==count($oursAuthor)? 'class="last"': "").'>'."\n";
					$result .= '	<a href="/profile/'.$user['id_user'].'"><img src="/images/users/'.(file_exists($_SERVER['DOCUMENT_ROOT'].'images/users/'.$user['id_user'].'.jpg')===true? $user['id_user']: "nophoto").'.jpg" width="38" height="38"></a>'."\n";
					$result .= '	<div><a href="/profile/'.$user['id_user'].'">'.str_replace(" ", "<BR />", $user['author']).'</a></div>'."\n";
					$result .= '	</div>'."\n";
				}
			}

			$result .= '	<div id="right_down_bottom2">&nbsp;</div>'."\n";
			$result .= '        </div>'."\n";
			$result .= '        <div class="clear"></div>'."\n";

			if (!empty($currentVoting) and count($currentVoting)>0) {
				$result .= '        <div id="right_down2"><form id="formVote" method="POST" enctype="multipart/form-data">'."\n";
				$result .= '	<div id="right_down_top4"><p>�����</p></div>'."\n";
				$result .= '	<div id="question">'.$currentVoting[0]['name'].'</div>'."\n";
				$result .= '	<div id="answer">'."\n";
				foreach ($currentVoting as $vote) {
					if ($vote['state'] == 'check')
						$result .= '	<input name="vote[]" value="'.$vote['id'].'" type="checkbox" id="vote'.$vote['id'].'"> <label for="vote'.$vote['id'].'">'.$vote['answer'].'</label>'."\n";
					else
						$result .= '	<input name="vote[]" value="'.$vote['id'].'" type="radio" id="vote'.$vote['id'].'"> <label for="vote'.$vote['id'].'">'.$vote['answer'].'</label>'."\n";
					$result .= '	<br><br>'."\n";
				}

				$result .= '	<a onclick="vote('.$currentVoting[0]['id_voting'].')">����������</a> | <a onclick="viewResult('.$currentVoting[0]['id_voting'].')">����������</a>'."\n";
				$result .= '	</div>'."\n";
				$result .= '	<div id="right_down_bottom2">&nbsp;</div>'."\n";
				$result .= '        </form></div>'."\n";
			}

			$result .= '    </div>'."\n";
			$result .= '    <div id="center_down_container">'."\n";
			$result .= '        <div id="center_down">'."\n";
			$result .= '	<div id="center_down_top"><p>'."\n";
			$result .= '	<ul>'."\n";

			$result .= '	<li class="current" id="allLink"><a>���</a></li>'."\n";
			$result .= '	<li id="fishingLink"><a>�������</a></li>'."\n";
			$result .= '	<li id="huntingLink"><a>�����</a></li>'."\n";
			$result .= '	<li id="underwaterLink"><a>��������� �����</a></li>'."\n";
			$result .= '	</ul>'."\n";
			$result .= '	</p>'."\n";
			$result .= '	</div>'."\n";

			$result .= '<div id="allTab">'."\n";
				$result .= viewTemplate::mainArticlesView($mainArticles['all']);
			$result .= '	<div style="width: 100%; visibility: hidden;">555huntfishing.tv</div>'."\n";
			$result .= '	<div id="center_down_bottom">&nbsp;</div>'."\n";
			$result .= '</div>'."\n";

                        $result .= '<div id="fishingTab" style="display: none">'."\n";
				$result .= viewTemplate::mainArticlesView($mainArticles['fish']);
                        $result .= '    <div style="width: 100%; visibility: hidden;">555huntfishing.tv</div>'."\n";
                        $result .= '    <div id="center_down_bottom">&nbsp;</div>'."\n";
                        $result .= '</div>'."\n";


                        $result .= '<div id="huntingTab" style="display: none">'."\n";
				$result .= viewTemplate::mainArticlesView($mainArticles['ohota']);
                        $result .= '    <div style="width: 100%; visibility: hidden; ">555huntfishing.tv</div>'."\n";
                        $result .= '    <div id="center_down_bottom">&nbsp;</div>'."\n";
                        $result .= '</div>'."\n";


                        $result .= '<div id="underwaterTab" style="display: none">'."\n";
				$result .= viewTemplate::mainArticlesView($mainArticles['waterfish']);
                        $result .= '    <div style="width: 100%; visibility: hidden;">555huntfishing.tv</div>'."\n";
                        $result .= '    <div id="center_down_bottom">&nbsp;</div>'."\n";
                        $result .= '</div>'."\n";


			$result .= '<script type="text/javascript">'."\n";
			$result .= 'jQuery(document).ready(function() {'."\n";
			$result .= '	$("#allLink").click(function() {'."\n";
			$result .= '		$("#allLink").removeClass("current");'."\n";
			$result .= '		$("#allLink").addClass("current");'."\n";
			$result .= '		$("#fishingLink").removeClass("current");'."\n";
			$result .= '		$("#huntingLink").removeClass("current");'."\n";
			$result .= '		$("#underwaterLink").removeClass("current");'."\n";
			$result .= '		$("#allTab").css("display", "block");'."\n";
			$result .= '		$("#fishingTab").css("display", "none");'."\n";
			$result .= '		$("#huntingTab").css("display", "none");'."\n";
			$result .= '		$("#underwaterTab").css("display", "none");'."\n";
			$result .= '	});'."\n";
			$result .= '	$("#fishingLink").click(function() {'."\n";
			$result .= '		$("#fishingLink").removeClass("current");'."\n";
			$result .= '		$("#fishingLink").addClass("current");'."\n";
			$result .= '		$("#allLink").removeClass("current");'."\n";
			$result .= '		$("#huntingLink").removeClass("current");'."\n";
			$result .= '		$("#underwaterLink").removeClass("current");'."\n";
			$result .= '		$("#fishingTab").css("display", "block");'."\n";
			$result .= '		$("#allTab").css("display", "none");'."\n";
			$result .= '		$("#huntingTab").css("display", "none");'."\n";
			$result .= '		$("#underwaterTab").css("display", "none");'."\n";
			$result .= '	});'."\n";
			$result .= '	$("#huntingLink").click(function() {'."\n";
			$result .= '		$("#huntingLink").removeClass("current");'."\n";
			$result .= '		$("#huntingLink").addClass("current");'."\n";
			$result .= '		$("#allLink").removeClass("current");'."\n";
			$result .= '		$("#fishingLink").removeClass("current");'."\n";
			$result .= '		$("#underwaterLink").removeClass("current");'."\n";
			$result .= '		$("#huntingTab").css("display", "block");'."\n";
			$result .= '		$("#allTab").css("display", "none");'."\n";
			$result .= '		$("#fishingTab").css("display", "none");'."\n";
			$result .= '		$("#underwaterTab").css("display", "none");'."\n";
			$result .= '	});'."\n";
			$result .= '	$("#underwaterLink").click(function() {'."\n";
			$result .= '		$("#underwaterLink").removeClass("current");'."\n";
			$result .= '		$("#underwaterLink").addClass("current");'."\n";
			$result .= '		$("#allLink").removeClass("current");'."\n";
			$result .= '		$("#fishingLink").removeClass("current");'."\n";
			$result .= '		$("#huntingLink").removeClass("current");'."\n";
			$result .= '		$("#underwaterTab").css("display", "block");'."\n";
			$result .= '		$("#allTab").css("display", "none");'."\n";
			$result .= '		$("#fishingTab").css("display", "none");'."\n";
			$result .= '		$("#huntingTab").css("display", "none");'."\n";
			$result .= '	});'."\n";
			$result .= '});'."\n";
			$result .= '</script>'."\n";

			$result .= '        </div><BR />'."\n";
#$result .= stripslashes($rightBlock[6]['text']);
#print_r($rightBlock[5]);
#			$result .= '        <div style="clear: both"></div>'."\n";
			$result .= stripslashes($rightBlock[3]['text']);
			$result .= '    </div>'."\n";
			if ($rightBlock[5]['text'] != "") {
			    $result .= stripslashes($rightBlock[5]['text']);
			}
			$result .= '    </div>'."\n";
			$result .= '    <div class="clear"></div>'."\n";



			$result .= '<div class="clear"></div>'."\n";
			$result .= '    <div class="clear"></div>'."\n";
			$result .= '    <div class="emptyMain"></div>'."\n";

			return $result;
		}



		static function templateMainNew($programms, $carusel, $rightBlock, $lastArticles, $mainArticles, $bigAnswerTopic, $oursAuthor, $lastAlbum, $currentVoting, $seesoon, $lastProgramm, $listBanners) {
			$result  = '';
			$result .= '<div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '            	    <div class="boxed mar-b10">'."\n";
			$result .= '                            <div class="left-menu">'."\n";
			$result .= '                                <div class="shadowed-dark">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                            <ul class="left-menu-main">'."\n";
			$result .= '                                                <li>'."\n";
			$result .= '                                                    <a href="/online">'."\n";
			$result .= '                                                        <i class="online"></i>'."\n";
			$result .= '                                                        ������'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </li>'."\n";
			$result .= '                                                <li>'."\n";
			$result .= '                                                    <a href="/myselection">'."\n";
			$result .= '                                                        <i class="playlist"></i>'."\n";
			$result .= '                                                        � ��������'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </li>'."\n";
			$result .= '                                                <li>'."\n";
			$result .= '                                                    <a href="/programm">'."\n";
			$result .= '                                                        <i class="progr"></i>'."\n";
			$result .= '                                                        ���������'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </li>'."\n";
			$result .= '                                                <li>'."\n";
			$result .= '                                                    <a href="/view">'."\n";
			$result .= '                                                        <i class="sequnce"></i>'."\n";
			$result .= '                                                        �����'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </li>'."\n";
			$result .= '                                                <li>'."\n";
			$result .= '                                                    <a href="/blog">'."\n";
			$result .= '                                                        <i class="jornal"></i>'."\n";
			$result .= '                                                        555 ������'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </li>'."\n";
			$result .= '                                            </ul>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                                <div>'."\n";
			$result .= '                            	<a class="sbscr" href="/reg"></a>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";

			$result .= '                            <div class="video-box">'."\n";
			$result .= '                                <div class="video" id="playerMain">'."\n";
			$result .= '                                	<div class="top-border">'."\n";
			$result .= '                                    	<div class="bot-border">'."\n";
			$result .= '                                        	<div class="left-border">'."\n";
			$result .= '                                            	<div class="right-border">'."\n";



# $result .= '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="player" width="610" height="374"  codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab" ><param name="movie" value="/images/player.swf" ></param><param name="quality" value="high"></param><param name="allowFullScreen" value="true"></param><param name="flashVars" value="showcase=true&local=true&online=true&autostart=true&id=/video/online&quality=sd"></param><param name="allowScriptAccess" value="sameDomain" /><embed src="/images/player.swf"  quality="high" bgcolor="#000000" width="610" height="374" name="player" align="middle"  allowFullScreen="true" play="true" loop="false" allo wScriptAccess="sameDomain" flashVars="showcase=true&local=true&online=true&autostart=true&id=/video/online&quality=sd" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer"></embed></object>';



$result .= '

 <video
    id=video-555-dan
    class="video-js"
    controls
    preload="auto"
    width="610"
    height="344"
    poster="../images/video/10012.jpg"
    data-setup="{}"
  >
    <source src="../content/video/10012hd1080.mp4" type="video/mp4" />
    </p>
  </video>

    <script>
            var player = videojs("video-555-dan");
            player.play();
    </script>


'."\n";


#player online dan  374 610

			$result .= '                                            </div>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";



			$result .= '                                <div class="program">'."\n";
			$result .= '                                    <div class="shadowed-dark">'."\n";
			$result .= '                                        <div class="border">'."\n";
			$result .= '                                            <div class="inner-border">'."\n";
			$result .= '                                        	  <h4 class="title">������ � �����</h4>'."\n";
			$result .= '                                                  <ul style="height: 340px; overflow-y: scroll;">'."\n";
			if (!empty($lastProgramm) and count($lastProgramm)>0) 
				foreach ($lastProgramm as $key=>$p)
					if ($key == 0)
						$result .= '        <li class="now"><strong>'.date("H:i", $p['datetime_begin']).'</strong> '.trim($p['name']).": ".$p['programmname'].'</li>'."\n";
					else
						$result .= '        <li><strong>'.date("H:i", $p['datetime_begin']).'</strong> '.trim($p['name']).": ".$p['programmname'].'</li>'."\n";
			else
				$result .= '        <li><strong>��� ��������</strong></li>'."\n";
			$result .= '                                                  </ul>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";

			$result .= '                        <div class="boxed mar-b20">'."\n";
			$result .= '                    	<div class="main-left">'."\n";
			$result .= '                        	<div class="left-block">'."\n";
			$result .= '                            	<div class="shadowed-light">'."\n";
			$result .= '                                        <div class="border">'."\n";
			$result .= '                                            <div class="inner-border">'."\n";
			$result .= '                                        	<h3 class="title2line">'."\n";
			$result .= '                                            	�������� �����'."\n";
			$result .= '                                                </h3>'."\n";
			$result .= '                                                <div class="video-list">'."\n";

			if (!empty($seesoon) and count($seesoon)>0) {
				foreach ($seesoon as $key=>$programm) {
					$result .= '                                                    <!-- VIDEO BLOCK -->'."\n";
					$result .= '                                                    <div class="video-item">'."\n";
					$result .= '                                                        <div class="prw-video">'."\n";
					$result .= '                                                            <a href="/trailer/'.$programm['id'].'">'."\n";
					$result .= '                                                                <i class="shadow-video"></i>'."\n";
					$result .= '                                                                <span class="play-btn"></span>'."\n";
					$result .= '                                                                <img src="/images/video/'.$programm['id'].'.jpg" width="196" height="120" align="" title="" />'."\n";
					$result .= '                                                            </a>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                        <div>'."\n";
					$result .= '                                                          <h5 class="titleoneline">'."\n";
					$result .= '                                                                <a href="/programm/'.$programm['id_typeprogramm'].'">'."\n";
					$result .= '                                                                    '.stripslashes($programm['nameType'])."\n";
					$result .= '                                                                </a>'."\n";
					$result .= '                                                            </h5>'."\n";
					$result .= '                                                            <p>'."\n";
					$result .= '                                                                '.stripslashes($programm['small_text'])."\n";
					$result .= '                                                            </p>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                    </div>'."\n";
					$result .= '                                                    <!-- END VIDEO BLOCK -->'."\n";
				}
			}

			$result .= '                                                </div>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";

			$result .= '                                <div class="center-block">'."\n";
			$result .= '                            	<div class="shadowed-light">'."\n";
			$result .= '                                        <div class="border">'."\n";
			$result .= '                                            <div class="inner-border">'."\n";
			$result .= '                                        	<h3 class="title2line">'."\n";
			$result .= '                                            	����� ���������'."\n";
			$result .= '                                                </h3>'."\n";
			$result .= '                                                <div class="video-list pad-side-10">'."\n";

			if (!empty($programms) and count($programms)>0) {
				foreach ($programms as $key=>$programm) {
					$result .= '                                                    <!-- VIDEO BLOCK -->'."\n";
					$result .= '                                                    <div class="video-item">'."\n";
					$result .= '                                                        <div class="prw-video">'."\n";
					$result .= '                                                            <a href="/trailer/'.$programm['id'].'">'."\n";
					$result .= '                                                                <i class="shadow-video"></i>'."\n";
					$result .= '                                                                <span class="play-btn"></span>'."\n";
					$result .= '                                                                <img src="/images/video/'.$programm['id'].'.jpg" width="196" height="120" align="" title="" />'."\n";
					$result .= '                                                            </a>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                        <div>'."\n";
					$result .= '                                                          <h5 class="titleoneline">'."\n";
					$result .= '                                                                <a href="/programm/'.$programm['id_typeprogramm'].'">'."\n";
					$result .= '                                                                    '.stripslashes($programm['nameType'])."\n";
					$result .= '                                                                </a>'."\n";
					$result .= '                                                            </h5>'."\n";
					$result .= '                                                            <p>'."\n";
					$result .= '                                                                '.stripslashes($programm['small_text'])."\n";
					$result .= '                                                            </p>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                    </div>'."\n";
					$result .= '                                                    <!-- END VIDEO BLOCK -->'."\n";

				}
			}

			$result .= '                                                </div>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";

			$result .= '                            <div class="main-right">'."\n";

			if (!empty($listBanners['up']) and count($listBanners['up'])>0) {
				foreach ($listBanners['up'] as $banner) {
					$result .= '                        	<div class="mar-b10">'."\n";
					if ($banner['url'] != "") 
						$result .= '                            	<a href="'.$banner['url'].'" '.(strpos($banner['url'], "555hf.tv")!==false? "": "target=\"_blank\"").'><img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" /></a>'."\n";
					else
						$result .= '                            	<img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" />'."\n";
					$result .= '                                </div>'."\n";
				}
			}

#			$result .= '                                <div class="mar-b10">'."\n";
#			$result .= '                            	<a href="#">'."\n";
#			$result .= '                            	    <img src="img/other/banners/2.png" width="221" height="85" alt="" title="" />'."\n";
#			$result .= '                                    </a>'."\n";
#			$result .= '                                </div>'."\n";
#			$result .= '                                <div class="mar-b10">'."\n";
#			$result .= '                            	<a href="#">'."\n";
#			$result .= '                            	    <img src="img/other/banners/3.png" width="221" height="85" alt="" title="" />'."\n";
#			$result .= '                                    </a>'."\n";
#			$result .= '                                </div>'."\n";
#			$result .= '                                <div>'."\n";
#			$result .= '                            	<a href="#">'."\n";
#			$result .= '                            	    <img src="img/other/banners/4.png" width="221" height="85" alt="" title="" />'."\n";
#			$result .= '                                    </a>'."\n";
#			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";

			// ��������
			$result .= '                        <div class="boxed mar-b20">'."\n";
			$result .= '                    	<div class="shadowed-light">'."\n";
			$result .= '                                <div class="border">'."\n";
			$result .= '                                    <div class="inner-border pad-10">'."\n";
			$result .= '                                	<div class="tabs-bar">'."\n";
			$result .= '                                    	<ul class="tabs-video boxed">'."\n";
			$result .= '                                                <li>'."\n";
			$result .= '                                                    <a style="cursor: pointer" id="asovet" class="corner-top-5 round border-light">'."\n";
			$result .= '                                                        <i class="tl"></i><i class="tr"></i>������'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </li>'."\n";
			$result .= '                                                <li>'."\n";
			$result .= '                                                    <a style="cursor: pointer" id="asyuzhet" class="corner-top-5 round border-light">'."\n";
			$result .= '                                                        <i class="tl"></i><i class="tr"></i>������'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </li>'."\n";
			$result .= '                                                 <li>'."\n";
			$result .= '                                                    <a style="cursor: pointer" id="atrallers" class="corner-top-5 round border-light select">'."\n";
			$result .= '                                                        <i class="tl"></i><i class="tr"></i>��������'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </li>'."\n";
			$result .= '                                            </ul>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                        <div class="scroll-video">'."\n";

unset($carusel['']);
			foreach ($carusel as $key=>$c) {
				$result .= '                                          <div id="conteiner'.$key.'" '.($key != "trailer"? 'style="visibility: hidden;"': "").'>'."\n";
				$result .= '                                          <div class="video-list" id="lenta_conteiner'.$key.'"><ul class="jcarousel-skin">'."\n";

				foreach ($c as $programm) {
#					$id_typevideo = split(",", $programm['id_typevideo']);
#					if (array_search("trailer", $id_typevideo)!==false)
#						$result .= '	    <a href="/trailer/'.$video['id'].'" title="�������� �������">�������</a>'."\n";

					$result .= '                                                    <!-- VIDEO BLOCK -->'."\n";
					$result .= '                                                    <li class="video-item">'."\n";
					$result .= '                                                        <div class="prw-video">'."\n";
					$result .= '                                                            <a href="/'.($key == "trailer"? "trailer": "video").'/'.$programm['id'].'">'."\n";
					$result .= '                                                                <i class="shadow-video"></i>'."\n";
					$result .= '                                                                <span class="play-btn"></span>'."\n";
					$result .= '                                                                <img src="/images/video/'.$programm['id'].'.jpg" width="196" height="120" align="" title="" />'."\n";
					$result .= '                                                            </a>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                        <div>'."\n";
					$result .= '                                                          <h5 class="titleoneline">'."\n";
					$result .= '                                                                <a href="/programm/'.$programm['id_typeprogramm'].'">'."\n";
					$result .= '                                                                    '.stripslashes($programm['typeName'])."\n";
					$result .= '                                                                </a>'."\n";
					$result .= '                                                            </h5>'."\n";
					$result .= '                                                            <p>'."\n";
					$result .= '                                                                '.stripslashes($programm['small_text'])."\n";
					$result .= '                                                            </p>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                    </li>'."\n";
					$result .= '                                                    <!-- END VIDEO BLOCK -->'."\n";
				}
				$result .= '                                                  </ul></div></div>'."\n";
			}

			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";

			$result .= '<script>
			jQuery(document).ready(function() {
			    jQuery(\'#lenta_conteinertrailer\').jcarousel({buttonPrevHTML: \'<div class="story_scroll-btn-l"><a class="#"></a></div>\', buttonNextHTML: \'<div class="story_scroll-btn-r"><a class="#"></a></div>\'});
			    jQuery(\'#lenta_conteinerstory\').jcarousel({buttonPrevHTML: \'<div class="story_scroll-btn-l"><a class="#"></a></div>\', buttonNextHTML: \'<div class="story_scroll-btn-r"><a class="#"></a></div>\'});
			    jQuery(\'#lenta_conteinervideo\').jcarousel({buttonPrevHTML: \'<div class="story_scroll-btn-l"><a class="#"></a></div>\', buttonNextHTML: \'<div class="story_scroll-btn-r"><a class="#"></a></div>\'});

			    $("#asovet").click(function() {
				$("#atrallers").removeClass("select");
				$("#asovet").addClass("select");
				$("#asyuzhet").removeClass("select");
				$("#conteinertrailer").css("visibility", "hidden");
				$("#conteinerstory").css("visibility", "hidden");
				$("#conteinervideo").css("visibility", "visible");
			    });
			    $("#atrallers").click(function() {
			            $("#atrallers").addClass("select");
			            $("#asovet").removeClass("select");
			            $("#asyuzhet").removeClass("select");
			            $("#conteinertrailer").css("visibility", "visible");
			            $("#conteinervideo").css("visibility", "hidden");
			            $("#conteinerstory").css("visibility", "hidden");
			    });
			    $("#asyuzhet").click(function() {
			            $("#atrallers").removeClass("select");
			            $("#asovet").removeClass("select");
			            $("#asyuzhet").addClass("select");
			            $("#conteinervideo").css("visibility", "hidden");
			            $("#conteinerstory").css("visibility", "visible");
			            $("#conteinertrailer").css("visibility", "hidden");
			    });
			});
			</script>'."\n";

			$result .= '                        <div class="boxed mar-b20">'."\n";
			$result .= '                    	<div class="main-left">'."\n";
			$result .= '                        	<div class="left-block">'."\n";
			$result .= '                            	<div>'."\n";

			if (!empty($listBanners['left_down']) and count($listBanners['left_down'])>0) {
				foreach ($listBanners['left_down'] as $banner) {
					$result .= '                        	<div class="mar-b10">'."\n";
					if ($banner['url'] != "") 
						$result .= '                            	<a href="'.$banner['url'].'" '.(strpos($banner['url'], "555hf.tv")!==false? "": "target=\"_blank\"").'><img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" /></a>'."\n";
					else
						$result .= '                            	<img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" />'."\n";
					$result .= '                                </div>'."\n";
				}
			}

#			$result .= '                                        <div class="mar-b10">'."\n";
#			$result .= '                                        <a href="#">'."\n";
#			$result .= '                                            <img src="/img/other/banners/5.png" width="221" height="202" alt="" title="" />'."\n";
#			$result .= '                                        </a>'."\n";
#			$result .= '                                        </div>'."\n";
/*
			$result .= '                                        <div class="video-rek-big">'."\n";
			$result .= '                                            <a href="'.$rightBlock[0]['url'].'">'."\n";
			$result .= '                                        	<div class="main-in">'."\n";
			$result .= '                                            	<span><strong>'.stripslashes($rightBlock[0]['name']).'</strong></span>'."\n";
			$result .= '                                                    '.stripslashes($rightBlock[0]['text'])."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <img class="back" src="/img/common/border_big_right.png" width="220" height="158" alt="" title="" />'."\n";
			$result .= '                                            <span class="rot-prw">'."\n";
			$result .= '                                            	<img class="play-small" src="/img/common/playbtn1.png" width="23" height="22" alt="" title="" />'."\n";
			$result .= '                                            	<img src="/images/main_right/'.$rightBlock[0]['id'].'.jpg" width="214" height="152" alt="" title="" />'."\n";
			$result .= '                                                </span>'."\n";
			$result .= '                                          </a>'."\n";
			$result .= '                                      </div>'."\n";

			$result .= '					<div class="video-rek">'."\n";
			$result .= '                                            <a href="'.$rightBlock[1]['url'].'">'."\n";
			$result .= '                                                <span>'."\n";
			$result .= '                                            	<img class="play-small" src="/img/common/playbtn1.png" width="23" height="22" alt="" title="" />'."\n";
			$result .= '                                            	<img src="/images/main_right/'.$rightBlock[1]['id'].'.jpg" width="90" height="84" alt="" title="" />'."\n";
			$result .= '                                                </span>'."\n";
			$result .= '                                                <div>'."\n";
			$result .= '                                        	    <p><strong>'.stripslashes($rightBlock[1]['name']).'</strong></p>'."\n";
			$result .= '                                                    '.stripslashes($rightBlock[1]['text'])."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                            </a>'."\n";
			$result .= '                                        </div>'."\n";

			$result .= '					<div class="video-rek">'."\n";
			$result .= '                                            <a href="'.$rightBlock[2]['url'].'">'."\n";
			$result .= '                                                <span>'."\n";
			$result .= '                                            	<img class="play-small" src="/img/common/playbtn1.png" width="23" height="22" alt="" title="" />'."\n";
			$result .= '                                            	<img src="/images/main_right/'.$rightBlock[2]['id'].'.jpg" width="90" height="84" alt="" title="" />'."\n";
			$result .= '                                                </span>'."\n";
			$result .= '                                                <div>'."\n";
			$result .= '                                        	    <p><strong>'.stripslashes($rightBlock[2]['name']).'</strong></p>'."\n";
			$result .= '                                                    '.stripslashes($rightBlock[2]['text'])."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                            </a>'."\n";
			$result .= '                                        </div>'."\n";

			if (isset($rightBlock[4]['url'])) {
				$result .= '					<div class="video-rek">'."\n";
				$result .= '                                            <a href="'.$rightBlock[4]['url'].'">'."\n";
				$result .= '                                                <span>'."\n";
				$result .= '                                            	<img class="play-small" src="/img/common/playbtn1.png" width="23" height="22" alt="" title="" />'."\n";
				$result .= '                                            	<img src="/images/main_right/'.$rightBlock[4]['id'].'.jpg" width="90" height="84" alt="" title="" />'."\n";
				$result .= '                                                </span>'."\n";
				$result .= '                                                <div>'."\n";
				$result .= '                                        	    <p><strong>'.stripslashes($rightBlock[4]['name']).'</strong></p>'."\n";
				$result .= '                                                    '.stripslashes($rightBlock[4]['text'])."\n";
				$result .= '                                                </div>'."\n";
				$result .= '                                            </a>'."\n";
				$result .= '                                        </div>'."\n";
			}
*/



			$result .= '                            </div>'."\n";


                        if (!empty($lastArticles) and count($lastArticles)>0) {
				$result .= '                                    <div class="shadowed-dark statistics">'."\n";
				$result .= '                                        <div class="border"><div class="inner-border">'."\n";
				$result .= '                                	<h4 class="title">����� ����������</h4>'."\n";
				$result .= '                                        <ul>'."\n";

                                foreach ($lastArticles as $article) {
					$result .= '                                    	<li>'."\n";
					$result .= '                                        	<span>'."\n";
					$result .= '                                                    <img src="/images/users/'.(file_exists($_SERVER['DOCUMENT_ROOT'].'images/users/'.$article['id_user'].'.jpg')===true? $article['id_user']: "nophoto").'.jpg" width="43" height="43" alt="" title="" />'."\n";
					$result .= '                                                </span>'."\n";
					$result .= '                                                <p>'."\n";
					$result .= '                                            	<strong>'.$article['author'].'</strong>'."\n";
                                        list($date, $time) = explode(" ", date("d.m.Y H:i", $article['datetime']));
                                        if ($date == date("d.m.Y"))
                                                $date = "�������";
                                        else if ($date == date("d.m.Y", strtotime("NOW -1day")))
                                                $date = "�����";
					$result .= '                                                    <span>'.$time.' / '.$date."</span>\n";
					$result .= '                                                </p>'."\n";
					$result .= '                                                <br/><p class="descr">'."\n";
					$result .= '                                            	'.stripslashes($article['name']).' <a href="/blog/'.$article['id'].'">�</a>'."\n";
					$result .= '                                                </p>'."\n";
					$result .= '                                            </li>'."\n";
                                }

				$result .= '                                        </ul>'."\n";
				$result .= '                                    </div>'."\n";
				$result .= '                                    </div>'."\n";
				$result .= '                                    </div>'."\n";
                        }

                        if (!empty($oursAuthor) and count($oursAuthor)>0) {
				$result .= '                                    <div class="shadowed-dark statistics">'."\n";
				$result .= '                                        <div class="border"><div class="inner-border">'."\n";
				$result .= '                                	<h4 class="title">���� ������</h4>'."\n";
				$result .= '                                        <ul>'."\n";

                                uasort($oursAuthor, 'cmp');
                                foreach ($oursAuthor as $key=>$user) {
					$result .= '                                    	<li>'."\n";
					$result .= '                                        	<span>'."\n";
					$result .= '                                                    <a href="/profile/'.$user['id_user'].'"><img src="/images/users/'.(file_exists($_SERVER['DOCUMENT_ROOT'].'images/users/'.$user['id_user'].'.jpg')===true? $user['id_user']: "nophoto").'.jpg" width="43" height="43" alt="" title="" border="0" /></a>'."\n";
					$result .= '                                                </span>'."\n";
					$result .= '                                                <p>'."\n";
					$result .= '                                            	<strong>'.str_replace(" ", "<BR />", $user['author']).'</strong>'."\n";
					$result .= '                                                </p>'."\n";
					$result .= '                                            </li>'."\n";
                                }
				$result .= '                                        </ul>'."\n";
				$result .= '                                    </div>'."\n";
				$result .= '                                    </div>'."\n";
				$result .= '                                    </div>'."\n";
                        }

                        if (!empty($bigAnswerTopic) and count($bigAnswerTopic)>0) {
				$result .= '                                     <div class="statistics">'."\n";
				$result .= '                                	<h4 class="title">�������� ���� ������</h4>'."\n";
				$result .= '                                        <ul>'."\n";

                                foreach ($bigAnswerTopic as $key=>$forum) {
					$result .= '                                    	<li>'."\n";
					$result .= '                                                <p class="theme">'."\n";
					$result .= '                                            	<a href="/forum/forum'.$forum['id_forum'].'/topic'.$forum['id'].'.html">'.stripslashes($forum['name']).'</a>'."\n";
					$result .= '                                                    <a class="icon comments" href="/forum/form'.$forum['id_forum'].'/topic'.$forum['id'].'.htm">'.$forum['count_post'].'</a>'."\n";
					$result .= '                                                </p>'."\n";
					$result .= '                                            </li>'."\n";
                                }
				$result .= '                                        </ul>'."\n";
				$result .= '                                    </div>'."\n";
                        }



			$result .= '                                </div>'."\n";
			$result .= '                                <div class="center-block">'."\n";
			$result .= '                                        <div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border pad-10">'."\n";
			$result .= '                                          <h3 class="title2line">'."\n";
			$result .= '                                              555 hunt fishing ������'."\n";
			$result .= '                                          </h3>'."\n";
			$result .= '                                          <div>'."\n";
			$result .= '                                               <div class="tabs-bar">'."\n";
			$result .= '                                                    <ul class="tabs-video boxed">'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light select" style="cursor: pointer" id="aBlogAll">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>���'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" style="cursor: pointer" id="aBlogFish">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>�������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                         <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" style="cursor: pointer" id="aBlogWHunt">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>��������� �����'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" style="cursor: pointer" id="aBlogHunt">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>�����'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                    </ul>'."\n";
			$result .= '                                                </div>'."\n";

                        $result .= '<div id="allTab">'."\n";
                                $result .= viewTemplate::mainArticlesView($mainArticles['all']);
                        $result .= '</div>'."\n";

                        $result .= '<div id="fishingTab" style="display: none">'."\n";
                        $result .= viewTemplate::mainArticlesView($mainArticles['fish']);
                        $result .= '</div>'."\n";

                        $result .= '<div id="huntingTab" style="display: none">'."\n";
                        $result .= viewTemplate::mainArticlesView($mainArticles['ohota']);
                        $result .= '</div>'."\n";

                        $result .= '<div id="underwaterTab" style="display: none">'."\n";
                        $result .= viewTemplate::mainArticlesView($mainArticles['waterfish']);
                        $result .= '</div>'."\n";

                        $result .= '<script type="text/javascript">'."\n";
                        $result .= 'jQuery(document).ready(function() {'."\n";
                        $result .= '    $("#aBlogAll").click(function() {'."\n";
                        $result .= '            $("#aBlogAll").removeClass("select");'."\n";
                        $result .= '            $("#aBlogFish").removeClass("select");'."\n";
                        $result .= '            $("#aBlogHunt").removeClass("select");'."\n";
                        $result .= '            $("#aBlogWHunt").removeClass("select");'."\n";
                        $result .= '            $("#aBlogAll").addClass("select");'."\n";

                        $result .= '            $("#allTab").css("display", "block");'."\n";
                        $result .= '            $("#fishingTab").css("display", "none");'."\n";
                        $result .= '            $("#huntingTab").css("display", "none");'."\n";
                        $result .= '            $("#underwaterTab").css("display", "none");'."\n";
                        $result .= '    });'."\n";
                        $result .= '    $("#aBlogFish").click(function() {'."\n";
                        $result .= '            $("#aBlogAll").removeClass("select");'."\n";
                        $result .= '            $("#aBlogFish").removeClass("select");'."\n";
                        $result .= '            $("#aBlogHunt").removeClass("select");'."\n";
                        $result .= '            $("#aBlogWHunt").removeClass("select");'."\n";
                        $result .= '            $("#aBlogFish").addClass("select");'."\n";

                        $result .= '            $("#fishingTab").css("display", "block");'."\n";
                        $result .= '            $("#allTab").css("display", "none");'."\n";
                        $result .= '            $("#huntingTab").css("display", "none");'."\n";
                        $result .= '            $("#underwaterTab").css("display", "none");'."\n";
                        $result .= '    });'."\n";
                        $result .= '    $("#aBlogHunt").click(function() {'."\n";
                        $result .= '            $("#aBlogAll").removeClass("select");'."\n";
                        $result .= '            $("#aBlogFish").removeClass("select");'."\n";
                        $result .= '            $("#aBlogHunt").removeClass("select");'."\n";
                        $result .= '            $("#aBlogWHunt").removeClass("select");'."\n";
                        $result .= '            $("#aBlogHunt").addClass("select");'."\n";

                        $result .= '            $("#huntingTab").css("display", "block");'."\n";
                        $result .= '            $("#allTab").css("display", "none");'."\n";
                        $result .= '            $("#fishingTab").css("display", "none");'."\n";
                        $result .= '            $("#underwaterTab").css("display", "none");'."\n";
                        $result .= '    });'."\n";
                        $result .= '    $("#aBlogWHunt").click(function() {'."\n";
                        $result .= '            $("#aBlogAll").removeClass("select");'."\n";
                        $result .= '            $("#aBlogFish").removeClass("select");'."\n";
                        $result .= '            $("#aBlogHunt").removeClass("select");'."\n";
                        $result .= '            $("#aBlogWHunt").removeClass("select");'."\n";
                        $result .= '            $("#aBlogWHunt").addClass("select");'."\n";

                        $result .= '            $("#underwaterTab").css("display", "block");'."\n";
                        $result .= '            $("#allTab").css("display", "none");'."\n";
                        $result .= '            $("#fishingTab").css("display", "none");'."\n";
                        $result .= '            $("#huntingTab").css("display", "none");'."\n";
                        $result .= '    });'."\n";
                        $result .= '});'."\n";
                        $result .= '</script>'."\n";

			$result .= '                                            </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                            <div class="main-right">'."\n";
			if (!empty($listBanners['right_down']) and count($listBanners['right_down'])>0) {
				foreach ($listBanners['right_down'] as $banner) {
					$result .= '                        	<div class="mar-b10">'."\n";
					if ($banner['url'] != "") 
						$result .= '                            	<a href="'.$banner['url'].'" '.(strpos($banner['url'], "555hf.tv")!==false? "": "target=\"_blank\"").'><img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" /></a>'."\n";
					else
						$result .= '                            	<img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" />'."\n";
					$result .= '                                </div>'."\n";
				}
			}

/*			$result .= '                        	<div class="mar-b10">'."\n";
			$result .= '                                    <a href="#">'."\n";
			$result .= '                                        <img src="img/other/banners/9.png" width="221" height="164" alt="" title="" />'."\n";
			$result .= '                                    </a>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                                <div class="mar-b10">'."\n";
			$result .= '                                    <a href="#">'."\n";
			$result .= '                                        <img src="img/other/banners/10.png" width="221" height="164" alt="" title="" />'."\n";
			$result .= '                                    </a>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                                <div class="mar-b10">'."\n";
			$result .= '                                    <a href="#">'."\n";
			$result .= '                                        <img src="img/other/banners/11.png" width="221" height="164" alt="" title="" />'."\n";
			$result .= '                                    </a>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                                <div class="mar-b10">'."\n";
			$result .= '                                    <a href="#">'."\n";
			$result .= '                                        <img src="img/other/banners/12.png" width="221" height="164" alt="" title="" />'."\n";
			$result .= '                                    </a>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                                <div class="mar-b10">'."\n";
			$result .= '                                    <a href="#">'."\n";
			$result .= '                                        <img src="img/other/banners/9.png" width="221" height="164" alt="" title="" />'."\n";
			$result .= '                                    </a>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                                <div>'."\n";
			$result .= '                                    <a href="#">'."\n";
			$result .= '                                        <img src="img/other/banners/13.png" width="221" height="164" alt="" title="" />'."\n";
			$result .= '                                    </a>'."\n";
			$result .= '                                </div>'."\n";
*/
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '                    </div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}



		function mainArticlesView2($mainArticles) {
			$result = '<div style="position: relative">'."\n";
			if (!empty($mainArticles) and count($mainArticles)>0) {
				foreach ($mainArticles as $article) {
					if ($article['viewstate'] == "simple11" or $article['viewstate'] == "simple12" or $article['viewstate'] == "simple13" or $article['viewstate'] == "quote2" or $article['viewstate'] == "text2") {
						$result .= '<div class="blockmainarticle2" onClick="window.location = \'/blog/'.$article['id'].'\';">';
						if ($article['viewstate'] == "simple1") {
							$result .= '<div class="block11_1">'.$article['comment'].'</div>'."\n";
							$result .= '<div class="block11_2">'.$article['rubrika'].'</div>'."\n";
						}
						if ($article['viewstate'] == "simple2") {
							$result .= '<div class="block11_1">'.$article['comment'].'</div>'."\n";
							$result .= '<div class="block12_2">'.$article['rubrika'].'</div>'."\n";
						}
						if ($article['viewstate'] == "simple3") {
							$result .= '<div class="block11_1">'.$article['comment'].'</div>'."\n";
							$result .= '<div class="block13_2">'.$article['rubrika'].'</div>'."\n";
						}

						if ($article['viewstate'] == "quote") {
							$result .= '<div class="block14_1"></div>'."\n";
							$result .= '<div class="block14_2">'."\n";
							$result .= '	<div class="block14_3"><a href="/profile/'.$article['id_user'].'"><img src="/images/users/'.(file_exists($_SERVER['DOCUMENT_ROOT'].'images/users/'.$article['id_user'].'.jpg')===true? $article['id_user']: "nophoto").'.jpg" width="41" height="41" align="absmiddle"></a></div>'."\n";
							$result .= "<div class='block14_4'><B>".str_replace(" ", "<BR />", $article['author']).'</B></div></div>';
							$result .= '<div class="block14_5">'.$article['comment'].'</div>'."\n";
							$result .= '<div class="block14_6"><b>'.$article['rubrika'].'</b></div>'."\n";
						}

						if ($article['viewstate'] == "text") {
							$result .= '<div class="block15_1"><b>'.$article['rubrika'].'</b></div>'."\n";
							$result .= '<div class="block15_2">'.$article['comment'].'</div>'."\n";
						}


						$result .= '<div style="position: absolute;"><img src="/images/ramkamainbig.png"></div>'."\n";
						$result .= '<img src="/images/articles/'.$article['id'].'m.jpg" />'."\n";
						$result .= '</div>'."\n";
					}
				}

#				if (count($mainArticles) % 2 != 0 and count($mainArticles)!=0)
#					$result .= '<div class="blockmainarticle"><img src="/images/ramkamain_empty.png" /></div>'."\n";
			}
			else {
				$result .= '<div align="center"><BR />��� ������ � ���� ���������</div>';
			}
			$result .= '</div>';
			return $result;
		}


		static function templateMainNew2($programms, $carusel, $rightBlock, $lastArticles, $mainArticles, $bigAnswerTopic, $oursAuthor, $lastAlbum, $currentVoting) {
			$result  = '';
			$result .= '	<div id="left">'."\n";
			$result .= '		<div id="video">'."\n";

			$result .= '<div class="pl" id="playerMain">'."\n";
			$result .= '    <a href="http://www.adobe.com/go/getflashplayer">'."\n";
			$result .= '	<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>'."\n";
			$result .= '    </a>'."\n";
			$result .= '</div>'."\n";
$result .= '
    <script type="text/javascript">
	var flashvars = {\'showcase\': true, \'id\':\'/video/0\'};
	var params = {};
	params.bgcolor = "#F2EEE9";
	params.allowFullscreen = true;

	var attributes = {};
	swfobject.embedSWF("/images/player.swf", "playerMain", "100%", "100%", "10.0.0", false, flashvars, params, attributes);
    </script>';


			$result .= '			<div class="clear"></div>'."\n";
			$result .= '		</div>'."\n";

			$result .= '			<div class="clear"></div>'."\n";

			$result .= '		<div id="tv_is_t">'."\n";
			$result .= '		<img src="/images/podpbanner.png" alt="" />'."\n";
			#$result .= '			<div id="tv_is_t_top"><p>����������� �����</p></div>'."\n";
			#$result .= '			<p>��������� ��������� ����������� ����� � �������, ����� � ��������� ����� ���������� ����� 500 ������ � �����!</p>'."\n";
			$result .= '		</div>'."\n";

			$result .= '		<div id="tv_is_t">'."\n";
			$result .= '		<a href="/reg/"><img src="/images/preimbanner.png" alt="" /></a>'."\n";
			#$result .= '			<div id="tv_is_t_top"><p>�������</p></div>'."\n";
			#$result .= '			<p>�������� �� �������. ������� ���� E-mail � ����� ����. <input id="emailSubscribe" type="text"><a onClick="subscribe()"> ��</a></p>'."\n";
			$result .= '		</div>'."\n";

			$result .= '		<div id="small_box"><div id="small_box_top"></div>'."\n";
			$result .= '		<a href="http://www.podsekai.ru"><img border="0" src="/images/mainlogo.jpg" alt="" /></a>'."\n";
			$result .= '		<div class="clear"></div>'."\n";
			$result .= '		<div id="small_box_bottom"></div></div>'."\n";

			$result .= '		<div class="clear"></div>'."\n";

			if (!empty($programms) and count($programms)>0) {
				$result .= '<div id="big_box"><div id="big_box_top"></div>'."\n";
				foreach ($programms as $key=>$programm) {
					$result .= '<div class="big_subbox">
						<div class="big_subbox_top"><p>'.$programm['nameType'].'</p></div>
						<a href="/video/'.$programm['id'].'"><img style="z-index:1; left:83px; top:80px; position:relative; margin-top:-22px;" src="/images/playbtn1.png" width="23" height="22"></a>
						<div class="big_subbox_foto">
						<a href="/video/'.$programm['id'].'"><img src="/images/video/'.$programm['id'].'.png"  alt="" /></a></div>
						<p>'.stripslashes($programm['small_text']).'</p>
						<div class="big_subbox_bottom"></div>
						<div class="clear"></div>
						</div>
					'."\n";

					if ($key % 3 == 2) 
						$result .= '<div class="clear"></div>'."\n";
				}

				$result .= '<div class="clear"></div>'."\n";
				$result .= '<div id="big_box_bottom"></div></div>'."\n";
			}

			$result .= '	</div>'."\n";
	
			$result .= '	<div id="right_column"><div id="right_column_top"></div>'."\n";
			#$result .= '		<div class="count_video_exclus"><p>145</p></div>'."\n";
			$result .= '		<div class="count_video_exclus"><p><img src="/images/count1.png"></p></div>'."\n";

			$result .= '		<a href="#"><img src="/images/banner-web.gif" alt="145 ����� �����" /></a><BR/>'."\n";

			$result .= '		<a href="'.$rightBlock[0]['url'].'"><img style="z-index:1; left:-10px; top:90px; position:relative; margin-top:-22px;" src="/images/playbtn2.png" width="23" height="22"></a>'."\n";
			$result .= '		<div class="right_big_box" onClick="window.location = \''.$rightBlock[0]['url'].'\';" style="cursor: pointer">'."\n";
			$result .= '			<img src="/images/main_right/'.$rightBlock[0]['id'].'.jpg" alt="" /><div class="right_big_box_border"></div>'."\n";
			$result .= '			<span>'.$rightBlock[0]['name'].'</span>'."\n";
			$result .= '			<p>'.$rightBlock[0]['text'].'</p>'."\n";
			$result .= '		</div>'."\n";
		
			$result .= '		<a href="'.$rightBlock[1]['url'].'"><img style="z-index:1; left:-70px; top:70px; position:relative; margin-top:-22px;" src="/images/playbtn2.png" width="23" height="22"></a>'."\n";
			$result .= '		<div class="right_small_box" onClick="window.location = \''.$rightBlock[1]['url'].'\';" style="cursor: pointer">'."\n";
			$result .= '			<img src="/images/main_right/'.$rightBlock[1]['id'].'.jpg" alt="" /><div class="right_small_box_border"></div>'."\n";
			$result .= '			<span>'.$rightBlock[1]['name'].'</span>'."\n";
			$result .= '			<p>'.$rightBlock[1]['text'].'</p>'."\n";
			$result .= '		</div>'."\n";

			$result .= '		<a href="'.$rightBlock[2]['url'].'"><img style="z-index:1; left:-70px; top:70px; position:relative; margin-top:-22px;" src="/images/playbtn2.png" width="23" height="22"></a>'."\n";
			$result .= '		<div class="right_small_box" onClick="window.location = \''.$rightBlock[2]['url'].'\';" style="cursor: pointer">'."\n";
			$result .= '			<img src="/images/main_right/'.$rightBlock[2]['id'].'.jpg" alt="" /><div class="right_small_box_border"></div>'."\n";
			$result .= '			<span>'.$rightBlock[2]['name'].'</span>'."\n";
			$result .= '			<p>'.$rightBlock[2]['text'].'</p>'."\n";
			$result .= '		</div>'."\n";
		
			$result .= '		<a href="/wantsee"><img src="/images/hochu_uvidet.jpg" alt="" /></a>'."\n";
			$result .= '		<a href="/footstep"><img src="/images/ostav_sled.jpg" alt="" /></a>'."\n";
			$result .= '		<a href="/contest"><img src="/images/konkurs.png" alt="" /></a>'."\n";
		
			$result .= '		<div class="clear"></div>'."\n";
			$result .= '	<div id="right_column_bottom"></div></div>'."\n";
	
			$result .= '	<div class="clear"></div>'."\n";

			$result .= '	<div id="lenta" >'."\n";
			$result .= '		<a title="������" class="sovet" id="asovet"></a>'."\n";
			$result .= '		<a title="������" class="syuzhet_mini" id="asyuzhet_mini"></a>'."\n";
			$result .= '		<a title="��������" class="trallers" id="atrallers"></a>'."\n";

			$result .= '		<div id="lenta_empty"></div>'."\n";
			$result .= '		<div>'."\n";



			$random = array();
			$count_carusel = 5;
			if (isset($carusel['video'])) {
				if (count($carusel['video'])>$count_carusel)
					$randC = $count_carusel;
				else
					$randC = count($carusel['video']);
				$rand_keys = array_rand($carusel['video'], $randC);
				foreach ($rand_keys as $key) {
#					$carusel['video'][$key]['color'] = "video";
					$random[] = $carusel['video'][$key];
					$random[count($random)-1]['color'] = "video";
				}
			}
			if (isset($carusel['story'])) {
				if (count($carusel['story'])>$count_carusel)
					$randC = $count_carusel;
				else
					$randC = count($carusel['story']);
				$rand_keys = array_rand($carusel['story'], $randC);
				foreach ($rand_keys as $key) {
#					$carusel['video'][$key]['color'] = "story";
					$random[] = $carusel['story'][$key];
					$random[count($random)-1]['color'] = "story";
				}
			}
			if (isset($carusel['trailer'])) {
				if (count($carusel['trailer'])>$count_carusel)
					$randC = $count_carusel;
				else
					$randC = count($carusel['trailer']);
				$rand_keys = array_rand($carusel['trailer'], $randC);
				foreach ($rand_keys as $key) {
#					$carusel['video'][$key]['color'] = "trailer";
					$random[] = $carusel['trailer'][$key];
					$random[count($random)-1]['color'] = "trailer";
				}
			}

			shuffle($random);


			foreach ($carusel as $key=>$c) {
				$result .= '		<div id="conteiner'.$key.'" style="visibility: hidden;">'."\n";
				$result .= '		<ul id="lenta_conteiner'.$key.'" class="jcarousel-skin">'."\n";

				if (!empty($c) and count($c)>0) {
					foreach ($c as $car) {
						$result .= '<li class="lenta_block">'."\n";
#						$result .= '<a href="/video/'.$car['id'].'"><img style="z-index:1; left:56px; top:50px; position:relative; margin-top:-22px;" src="/images/playbtn2.png" width="23" height="22"></a>'."\n";
						$result .= '<img src="/images/video/'.$car['id'].'s.png" alt="" border="0"/>';
						$result .= '<img style="z-index:1; left:47px; top:-47px; position:relative; margin-top:0px;" src="/images/playbtn2.png" width="23" height="22">'."\n";
						$result .= '<div class="lenta_'.($key=="trailer"? "green": ($key=="story"? "red": "blue")).'_block_border"></div>'."\n";
						$result .= '<span><a href="/programm/'.$car['id_typeprogramm'].'">'.($key=="trailer"? "�������": $car['typeName']).'</a></span>
							<p><a href="/video/'.$car['id'].'">'.$car['name'].'</a></p>
							<div class="lenta_empty"></div></li>'."\n";
					}
				}
				$result .= '</ul>'."\n";
				$result .= '		</div>'."\n";
			}
			

			$result .= '		<div id="conteinercarusel">'."\n";
			$result .= '		<ul id="lenta_conteinercarusel" class="jcarousel-skin">'."\n";
										
			if (!empty($random) and count($random)>0) {
				foreach ($random as $car) {
					$result .= '<li class="lenta_block">'."\n";
					$result .= '<img src="/images/video/'.$car['id'].'s.png" alt="" border="0"/>'."\n";
#					$result .= '<img style="z-index:1; left:47px; top:-47px; position:relative; margin-top:0px;" src="/images/playbtn2.png" width="23" height="22">'."\n";
					$result .= '<img style="z-index:1; left:47px; top:-47px; position:relative; margin-top:0px;" src="/images/playbtn2.png" width="23" height="22">'."\n";
					$result .= '<div class="lenta_'.($car['color'] == "trailer"? "green": ($car['color'] == "story"? "red": "blue")).'_block_border"></div>'."\n";
#					$result .= '<span><a href="/programm/'.$car['id_typeprogramm'].'">'.($car['color']=="trailer"? "�������": $car['typeName']).'</a></span>
					$result .= '<span><a href="/programm/'.$car['id_typeprogramm'].'">'.$car['typeName'].'</a></span>
					<p><a href="/video/'.$car['id'].'">'.$car['name'].'</a></p>
					<div class="lenta_empty"></div></li>'."\n";
				}
			}
			$result .= '</ul>'."\n";
			$result .= '		</div>'."\n";

			$result .= '		</div>'."\n";

			$result .= '<script type="text/javascript">'."\n";
			$result .= 'jQuery(document).ready(function() {'."\n";
			$result .= '    jQuery(\'#lenta_conteinervideo\').jcarousel();'."\n";
			$result .= '	jQuery(\'#lenta_conteinertrailer\').jcarousel();'."\n";
			$result .= '	jQuery(\'#lenta_conteinerstory\').jcarousel();'."\n";
			$result .= '	jQuery(\'#lenta_conteinercarusel\').jcarousel();'."\n";
			$result .= '	$("#atrallers").click(function() {'."\n";
			$result .= '		$("#atrallers").addClass("trallers_active");'."\n";
			$result .= '		$("#asovet").removeClass("sovet_active");'."\n";
			$result .= '		$("#asovet").addClass("sovet");'."\n";
			$result .= '		$("#asyuzhet_mini").removeClass("syuzhet_mini_active");'."\n";
			$result .= '		$("#asyuzhet_mini").addClass("syuzhet_mini");'."\n";
			$result .= '		$("#conteinertrailer").css("visibility", "visible");'."\n";
			$result .= '		$("#conteinervideo").css("visibility", "hidden");'."\n";
			$result .= '		$("#conteinerstory").css("visibility", "hidden");'."\n";
			$result .= '		$("#conteinercarusel").css("visibility", "hidden");'."\n";
			$result .= '	});'."\n";
			$result .= '	$("#asovet").click(function() {'."\n";
			$result .= '		$("#atrallers").removeClass("trallers_active");'."\n";
			$result .= '		$("#atrallers").addClass("trallers");'."\n";
			$result .= '		$("#asovet").addClass("sovet_active");'."\n";
			$result .= '		$("#asyuzhet_mini").removeClass("syuzhet_mini_active");'."\n";
			$result .= '		$("#asyuzhet_mini").addClass("syuzhet_mini");'."\n";
			$result .= '		$("#conteinertrailer").css("visibility", "hidden");'."\n";
			$result .= '		$("#conteinerstory").css("visibility", "hidden");'."\n";
			$result .= '		$("#conteinervideo").css("visibility", "visible");'."\n";
			$result .= '		$("#conteinercarusel").css("visibility", "hidden");'."\n";
			$result .= '	});'."\n";
			$result .= '	$("#asyuzhet_mini").click(function() {'."\n";
			$result .= '		$("#atrallers").removeClass("trallers_active");'."\n";
			$result .= '		$("#atrallers").addClass("trallers");'."\n";
			$result .= '		$("#asovet").removeClass("sovet_active");'."\n";
			$result .= '		$("#asovet").addClass("sovet");'."\n";
			$result .= '		$("#asyuzhet_mini").addClass("syuzhet_mini_active");'."\n";
			$result .= '		$("#conteinervideo").css("visibility", "hidden");'."\n";
			$result .= '		$("#conteinerstory").css("visibility", "visible");'."\n";
			$result .= '		$("#conteinertrailer").css("visibility", "hidden");'."\n";
			$result .= '		$("#conteinercarusel").css("visibility", "hidden");'."\n";
			$result .= '	});'."\n";
			
#			$result .= '$("#atrallers").click();'."\n";
			$result .= '});'."\n";
			$result .= '</script>'."\n";

			$result .= '    </div><div class="clear"></div>'."\n";
			$result .= '    <div id="down">'."\n";
			$result .= '    <div id="left_down_container">'."\n";
			$result .= '        <div id="left_down2">'."\n";
			$result .= '	<div id="left_down_top2"><p>����� ����������</p></div>'."\n";

			if (!empty($lastArticles) and count($lastArticles)>0) {
				foreach ($lastArticles as $article) {
					$result .= '	    <div id="zapis">'."\n";
					$result .= '	    <a href="/blog/'.$article['id'].'"><img src="/images/users/'.(file_exists($_SERVER['DOCUMENT_ROOT'].'images/users/'.$article['id_user'].'.jpg')===true? $article['id_user']: "nophoto").'.jpg" width="38" height="38"></a>'."\n";
					$result .= '	    <div id="autor"><a href="/profile/'.$article['id_user'].'">'.$article['author'].'</a></div>'."\n";
					list($date, $time) = explode(" ", date("d.m.Y H:i", $article['datetime']));
					if ($date == date("d.m.Y"))
						$date = "�������";
					else if ($date == date("d.m.Y", strtotime("NOW -1day")))
						$date = "�����";

					$result .= '	    <div id="date">'.$time.' / '.$date.'</div>'."\n";
					$result .= '	    <div class="clear"></div>'."\n";
					$result .= '	    <div id="text">'.stripslashes($article['name']).' <a href="/blog/'.$article['id'].'">�</a></div>'."\n";
					$result .= '	    </div><div class="clear"></div>'."\n";
				}
			}

			$result .= '        <div id="left_down_bottom2"></div>'."\n";
			$result .= '        </div>'."\n";
			$result .= '        <a href="/recommend"><img src="/images2/images/banner1.png" /></a>'."\n";
			$result .= '        <a href="/lesson"><img src="/images/banner2-1.png" /></a>'."\n";
			$result .= '        <a href="/shop"><img src="/images2/images/banner3.png" /></a>'."\n";
			$result .= '        <a href="/viewtv"><img src="/images2/images/banner4.png" /></a>'."\n";

			$result .= '    </div>'."\n";
			$result .= '<div id="right_down_container2">'."\n";
    
//bigAnswerTopic
			$result .= '        <div id="right_down2">'."\n";
			$result .= '	<div id="right_down_top2"><p>����� �������� ���� ������</p></div>'."\n";

			function cmp($a, $b) {
				if ($a['count'] == $b['count']) {
					return 0;
				}
				return ($a['count'] > $b['count']) ? -1 : 1;
			}

			if (!empty($bigAnswerTopic) and count($bigAnswerTopic)>0) {
				foreach ($bigAnswerTopic as $key=>$forum) {
					$result .= '	<div id="forum" '.($key+1 == count($bigAnswerTopic)? 'class="last"': "").'>'."\n";
					$result .= '	    <span id="zap1">����:</span> <span id="theme"><a href="/forum/forum'.$forum['id_forum'].'/topic'.$forum['id'].'.html">'.stripslashes($forum['name']).'</a></span><br />'."\n";
					$result .= '	    <span id="zap1">����� ������:</span> '.$forum['count_post'].'<br />'."\n";
					$result .= '	    <span id="zap1">����� ����������:</span> '.$forum['count_users'].'<br />'."\n";
					$temp = array();
					uasort($forum['users'], 'cmp');
					$i = 0;
					foreach ($forum['users'] as $user) {
						$temp[] = '<a href="/profile/'.$user['id_user'].'">'.$user['autor'].'</a>';
						if (++$i > 5) break;
					}
					$result .= implode(", ", $temp).($i>5? "�": "")."\n";
					$result .= '	</div>'."\n";
				}
			}

//oursAuthor
			$result .= '	<div id="right_down_bottom2">&nbsp;</div>'."\n";
			$result .= '        </div>'."\n";
			$result .= '        <div class="clear"></div>'."\n";
			$result .= '        <div id="right_down2">'."\n";
			$result .= '	<div id="right_down_top3"><p>���� ������</p></div>'."\n";

			if (!empty($oursAuthor) and count($oursAuthor)>0) {
				uasort($oursAuthor, 'cmp');
				foreach ($oursAuthor as $key=>$user) {
					$result .= '	<div id="author" '.($key==count($oursAuthor)? 'class="last"': "").'>'."\n";
					$result .= '	<a href="/profile/'.$user['id_user'].'"><img src="/images/users/'.(file_exists($_SERVER['DOCUMENT_ROOT'].'images/users/'.$user['id_user'].'.jpg')===true? $user['id_user']: "nophoto").'.jpg" width="38" height="38"></a>'."\n";
					$result .= '	<div><a href="/profile/'.$user['id_user'].'">'.str_replace(" ", "<BR />", $user['author']).'</a></div>'."\n";
					$result .= '	</div>'."\n";
				}
			}

			$result .= '	<div id="right_down_bottom2">&nbsp;</div>'."\n";
			$result .= '        </div>'."\n";
			$result .= '        <div class="clear"></div>'."\n";

			if (!empty($currentVoting) and count($currentVoting)>0) {
				$result .= '        <div id="right_down2"><form id="formVote" method="POST" enctype="multipart/form-data">'."\n";
				$result .= '	<div id="right_down_top4"><p>�����</p></div>'."\n";
				$result .= '	<div id="question">'.$currentVoting[0]['name'].'</div>'."\n";
				$result .= '	<div id="answer">'."\n";
				foreach ($currentVoting as $vote) {
					if ($vote['state'] == 'check')
						$result .= '	<input name="vote[]" value="'.$vote['id'].'" type="checkbox" id="vote'.$vote['id'].'"> <label for="vote'.$vote['id'].'">'.$vote['answer'].'</label>'."\n";
					else
						$result .= '	<input name="vote[]" value="'.$vote['id'].'" type="radio" id="vote'.$vote['id'].'"> <label for="vote'.$vote['id'].'">'.$vote['answer'].'</label>'."\n";
					$result .= '	<br><br>'."\n";
				}

				$result .= '	<a onclick="vote('.$currentVoting[0]['id_voting'].')">����������</a> | <a onclick="viewResult('.$currentVoting[0]['id_voting'].')">����������</a>'."\n";
				$result .= '	</div>'."\n";
				$result .= '	<div id="right_down_bottom2">&nbsp;</div>'."\n";
				$result .= '        </form></div>'."\n";
			}

			$result .= '    </div>'."\n";
			$result .= '    <div id="center_down_container">'."\n";
			$result .= '        <div id="center_down">'."\n";
			$result .= '	<div id="center_down_top"><p>'."\n";
			$result .= '	<ul>'."\n";

			$result .= '	<li class="current" id="allLink"><a>���</a></li>'."\n";
			$result .= '	<li id="fishingLink"><a>�������</a></li>'."\n";
			$result .= '	<li id="huntingLink"><a>�����</a></li>'."\n";
			$result .= '	<li id="underwaterLink"><a>��������� �����</a></li>'."\n";
			$result .= '	</ul>'."\n";
			$result .= '	</p>'."\n";
			$result .= '	</div>'."\n";

			$result .= '<div id="allTab">'."\n";
				$result .= viewTemplate::mainArticlesView($mainArticles['all']);
			$result .= '	<div style="width: 100%; visibility: hidden;">555huntfishing.tv</div>'."\n";
			$result .= '	<div id="center_down_bottom">&nbsp;</div>'."\n";
			$result .= '</div>'."\n";

                        $result .= '<div id="fishingTab" style="display: none">'."\n";
				$result .= viewTemplate::mainArticlesView($mainArticles['fish']);
                        $result .= '    <div style="width: 100%; visibility: hidden;">555huntfishing.tv</div>'."\n";
                        $result .= '    <div id="center_down_bottom">&nbsp;</div>'."\n";
                        $result .= '</div>'."\n";


                        $result .= '<div id="huntingTab" style="display: none">'."\n";
				$result .= viewTemplate::mainArticlesView($mainArticles['ohota']);
                        $result .= '    <div style="width: 100%; visibility: hidden; ">555huntfishing.tv</div>'."\n";
                        $result .= '    <div id="center_down_bottom">&nbsp;</div>'."\n";
                        $result .= '</div>'."\n";


                        $result .= '<div id="underwaterTab" style="display: none">'."\n";
				$result .= viewTemplate::mainArticlesView($mainArticles['waterfish']);
                        $result .= '    <div style="width: 100%; visibility: hidden;">555huntfishing.tv</div>'."\n";
                        $result .= '    <div id="center_down_bottom">&nbsp;</div>'."\n";
                        $result .= '</div>'."\n";


			$result .= '<script type="text/javascript">'."\n";
			$result .= 'jQuery(document).ready(function() {'."\n";
			$result .= '	$("#allLink").click(function() {'."\n";
			$result .= '		$("#allLink").removeClass("current");'."\n";
			$result .= '		$("#allLink").addClass("current");'."\n";
			$result .= '		$("#fishingLink").removeClass("current");'."\n";
			$result .= '		$("#huntingLink").removeClass("current");'."\n";
			$result .= '		$("#underwaterLink").removeClass("current");'."\n";
			$result .= '		$("#allTab").css("display", "block");'."\n";
			$result .= '		$("#fishingTab").css("display", "none");'."\n";
			$result .= '		$("#huntingTab").css("display", "none");'."\n";
			$result .= '		$("#underwaterTab").css("display", "none");'."\n";
			$result .= '	});'."\n";
			$result .= '	$("#fishingLink").click(function() {'."\n";
			$result .= '		$("#fishingLink").removeClass("current");'."\n";
			$result .= '		$("#fishingLink").addClass("current");'."\n";
			$result .= '		$("#allLink").removeClass("current");'."\n";
			$result .= '		$("#huntingLink").removeClass("current");'."\n";
			$result .= '		$("#underwaterLink").removeClass("current");'."\n";
			$result .= '		$("#fishingTab").css("display", "block");'."\n";
			$result .= '		$("#allTab").css("display", "none");'."\n";
			$result .= '		$("#huntingTab").css("display", "none");'."\n";
			$result .= '		$("#underwaterTab").css("display", "none");'."\n";
			$result .= '	});'."\n";
			$result .= '	$("#huntingLink").click(function() {'."\n";
			$result .= '		$("#huntingLink").removeClass("current");'."\n";
			$result .= '		$("#huntingLink").addClass("current");'."\n";
			$result .= '		$("#allLink").removeClass("current");'."\n";
			$result .= '		$("#fishingLink").removeClass("current");'."\n";
			$result .= '		$("#underwaterLink").removeClass("current");'."\n";
			$result .= '		$("#huntingTab").css("display", "block");'."\n";
			$result .= '		$("#allTab").css("display", "none");'."\n";
			$result .= '		$("#fishingTab").css("display", "none");'."\n";
			$result .= '		$("#underwaterTab").css("display", "none");'."\n";
			$result .= '	});'."\n";
			$result .= '	$("#underwaterLink").click(function() {'."\n";
			$result .= '		$("#underwaterLink").removeClass("current");'."\n";
			$result .= '		$("#underwaterLink").addClass("current");'."\n";
			$result .= '		$("#allLink").removeClass("current");'."\n";
			$result .= '		$("#fishingLink").removeClass("current");'."\n";
			$result .= '		$("#huntingLink").removeClass("current");'."\n";
			$result .= '		$("#underwaterTab").css("display", "block");'."\n";
			$result .= '		$("#allTab").css("display", "none");'."\n";
			$result .= '		$("#fishingTab").css("display", "none");'."\n";
			$result .= '		$("#huntingTab").css("display", "none");'."\n";
			$result .= '	});'."\n";
			$result .= '});'."\n";
			$result .= '</script>'."\n";

			$result .= '        </div><BR />'."\n";
#			$result .= '        <div style="clear: both"></div>'."\n";
			$result .= stripslashes($rightBlock[3]['text']);
			$result .= '    </div>'."\n";
			$result .= '    </div>'."\n";
			$result .= '    <div class="clear"></div>'."\n";

/*
			$result .= '    <div id="lenta2" >'."\n";
			$result .= '    <div id="lenta_empty"></div>'."\n";
			$result .= '    <div>'."\n";
			$result .= '    <div id="conteinercarusel">'."\n";
			$result .= '    <ul id="lenta_conteinercarusel2" class="jcarousel-skin3">'."\n";
			if (!empty($lastAlbum) and count($lastAlbum)>0) {
				foreach ($lastAlbum as $album) {
					$result .= '		<li class="lenta_block3"><a href="/images/albums/'.$album['id'].'b.jpg" rel="lastAlbum"><img src="/images/albums/'.$album['id'].'.jpg" alt="'.stripslashes($album['description']).'" border="0"/></a><div class="lenta_empty"></div></li>'."\n";
				}
			}
			$result .= '	</ul>'."\n";
			$result .= '    </div>'."\n";
			$result .= '    </div>'."\n";

			$result .= '<script type="text/javascript">'."\n";
			$result .= 'jQuery(document).ready(function() {'."\n";
			$result .= '    jQuery(\'#lenta_conteinercarusel2\').jcarousel();'."\n";
			$result .= '	$("a[rel=lastAlbum]").fancybox({'."\n";
			$result .= "	    'transitionIn'          : 'none',\n";
			$result .= "	    'transitionOut'         : 'none',\n";
			$result .= "	    'titlePosition'         : 'over'\n";
			$result .= '	});'."\n";
			$result .= '});'."\n";
			$result .= '</script>'."\n";
			$result .= '</div>';
*/

			$result .= '<div class="clear"></div>'."\n";
			$result .= '    <div class="clear"></div>'."\n";
			$result .= '    <div class="empty"></div>'."\n";

			return $result;
		}



		static function templateCity($citys, $count) {
			$result = "";
			foreach ($citys as $key=>$city) {
				if (isset($city['sub'])) {
					$result .= '<optgroup label="'.str_repeat("&nbsp;", $count).$city['name'].'">'."\n";
					$result .= viewTemplate::templateCity($city['sub'], $count+4);
					$result .= '</optgroup>'."\n";
				}
				else {
					$result .= '<option value="'.$key.'" '.(isset($_POST['id_city']) && $_POST['id_city'] == $key? "SELECTED": "").'>'.str_repeat("&nbsp;", $count).$city['name'].'</option>'."\n";
				}
			}
			return $result;
		}

		static function templateCityWantSee($citys, $count) {
			$result = "";
			foreach ($citys as $key=>$city) {
				if (isset($city['sub'])) {
					$result .= '<optgroup label="'.str_repeat("&nbsp;", $count).$city['name'].'">'."\n";
					$result .= viewTemplate::templateCityWantSee($city['sub'], $count+4);
					$result .= '</optgroup>'."\n";
				}
				else {
					$result .= '<option value="'.$city['name'].'" '.(isset($_POST['id_city']) && $_POST['id_city'] == $key? "SELECTED": "").'>'.str_repeat("&nbsp;", $count).$city['name'].'</option>'."\n";
				}
			}
			return $result;
		}

		static function templateReg($listCountry, $listCity, $listWho, $listFish, $rulesText) {
			$result  = '';
			$result .= '	<div id="reg_container">'."\n";
			$result .= '		<p class="sled_titles">��������������� � ���!  <strong>����������� �� 555huntfishing.TV.</strong></p><br />'."\n";
			$result .= '		<p class="sled_mini_text">������, ��� �� ������� ��������� ���� ��������� � ������������ ��� ����������� �����. <strong>��� ���������� ��������� ����� ����.</strong></p><br />'."\n";
			$result .= '		<div class="friends_line"></div>'."\n";
			$result .= '		<form id="formRegUser" enctype="multipart/form-data">'."\n";

			$result .= '			<div class="reg_left">'."\n";
			$result .= '				<div id="sled_right_title">���� �������� ������...</div>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="firstname" /><p class="sled_input_title"><span class="red_star">&lowast;</span> ���:</p></div>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="lastname" /><p class="sled_input_title"><span class="red_star">&lowast;</span> �������:</p></div>'."\n";

			$result .= '				<div class="sled_select"><p class="sled_input_title"><span class="red_star">&lowast;</span> ���� ��������:</p>'."\n";
			$result .= '					<select name="birthday">'."\n";

			for ($day = 1; $day<=31; $day++)
				$result .= '						<option value="'.(strlen($day)<2? "0".$day: $day).'">'.(strlen($day)<2? "0".$day: $day).'</option>'."\n";


			$result .= '					</select>'."\n";	
			$result .= '					<select name="birthmonth">'."\n";

			for ($month = 1; $month<=12; $month++)
				$result .= '						<option value="'.(strlen($month)<2? "0".$month: $month).'">'.(strlen($month)<2? "0".$month: $month).'</option>'."\n";

			$result .= '					</select>'."\n";			
			$result .= '					<select name="birthyear">'."\n";

			for ($year = 1920; $year<=2010; $year++)
			$result .= '						<option value="'.$year.'" '.($year == 1980? "SELECTED": "").'>'.$year.'</option>'."\n";
			$result .= '					</select>'."\n";
			$result .= '				</div>'."\n";

			$result .= '				<div class="sled_input"><input type="hidden" id="city" name="city"><input type="text" class="sled_text" name="field_city" id="field_city" onkeyup="if(this.value.length>=3) searchCity(this.value);" /><p class="sled_input_title"><span class="red_star">&lowast;</span> �����:</p><ul id="ulCity"></ul></div>'."\n";

#			$result .= '				<div class="sled_select"><p class="sled_input_title"><span class="red_star">&lowast;</span> ������:</p>'."\n";
#			$result .= '					<select class="sled_gorod" name="country" onChange="listCity(this.value)">'."\n";
#			if (!empty($listCountry) and count($listCountry)>0) {
#				foreach ($listCountry as $country)
#					$result .= '<option value="'.$country['id'].'">'.$country['name'].'</option>'."\n";
#			}
#			$result .= '					</select>'."\n";			
#			$result .= '				</div>'."\n";

#			$result .= '				<div class="sled_select"><p class="sled_input_title"><span class="red_star">&lowast;</span> �����:</p>'."\n";
#			$result .= '					<select class="sled_gorod" id="city" name="city">'."\n";
#
#			if (!empty($listCity) and count($listCity)>0) {
#				$result .= viewTemplate::templateCity($listCity, 0);
#			}
#			$result .= '					</select>'."\n";
#			$result .= '				</div>'."\n";
#
			$result .= '				<div class="sled_select"><p class="sled_input_title"><span class="red_star">&lowast;</span> ��� �� � ��� ������:</p>'."\n";
			$result .= '					<select class="sled_gorod" name="who">'."\n";
			if (!empty($listWho) and count($listWho)>0) {
				foreach ($listWho as $who)
					$result .= '<option value="'.$who['id'].'">'.$who['name'].'</option>'."\n";
			}
			$result .= '					</select>'."\n";			
			$result .= '				</div>'."\n";
			$result .= '			</div>'."\n";
			
			$result .= '			<div class="reg_right">'."\n";
			$result .= '				<div id="sled_right_title">...</div>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="email" /><p class="sled_input_title"><span class="red_star">&lowast;</span> E-mail:</p></div>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="email_repeat" /><p class="sled_input_title"><span class="red_star">&lowast;</span> ��������� E-mail:</p></div>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="password" /><p class="sled_input_title"><span class="red_star">&lowast;</span> ������:</p></div>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="password_repeat" /><p class="sled_input_title"><span class="red_star">&lowast;</span> ��������� ������:</p></div>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="maidenname" /><p class="sled_input_title"><span class="red_star">&lowast;</span> ������� ������� ������:</p></div>'."\n";
			$result .= '				<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="red_star">&lowast;</span> ���������� �� ������, ���� �� �����-���� �������� ������������<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ���� ������������, �� ������� � ��� ������� ������� ����� ������.'."\n";
			$result .= '			</div>'."\n";

			$result .= '			<div class="clear"></div><br />'."\n";
			$result .= '			<div class="friends_line"></div>'."\n";
			
			$result .= '			<div class="reg_left">'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="login" /><p class="sled_input_title"><span class="red_star">&lowast;</span> �������� ���������:</p></div>'."\n";
			$result .= '			</div>'."\n";
			
			$result .= '			<div class="reg_right">'."\n";
			$result .= '				<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="red_star">&lowast;</span>  ��� ��������� ����� �������������� �������� ����� �� �����, ������ <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;������ ��������� �����.'."\n";
			$result .= '			</div>'."\n";

			$result .= '			<div class="clear"></div>'."\n";
			$result .= '			<div class="friends_line"></div>'."\n";
			
			$result .= '			<div class="reg_left">'."\n";
			$result .= '				<div id="sled_right_title">����� ������ ����� �� �������������?</div>'."\n";
			$result .= '			</div><div class="clear"></div><br />'."\n";
			
			if (!empty($listFish) and count($listFish)>0) {
				$columnsCount = ceil(count($listFish)/4);

				$result .= '			<div class="reg_mini_column">'."\n";
				foreach ($listFish as $key=>$fish) {
					if ($key % $columnsCount == 0 and $key!=0) {
						$result .= '			</div>'."\n";
						$result .= '			<div class="reg_mini_column">'."\n";
					}

					$result .= '				<input type="checkbox" id="fish['.$fish['id'].']" name="fish['.$fish['id'].']" value="1" /><label for="fish['.$fish['id'].']">'.$fish['name'].'</label><br />'."\n";
				}
				$result .= '			</div>'."\n";
			}


			$result .= '			<div class="clear"></div><br />'."\n";
			$result .= '			<div class="friends_line"></div>'."\n";

			$result .= '			<div class="reg_left">'."\n";
			$result .= '				<div id="sled_right_title">���������������� ����������</div>'."\n";
			$result .= '			</div><div class="clear"></div><br /><div id="rulesText2">
��������� ���������������� ���������� (����� "���������������� ����������" ��� "��") ��������� ����� �������������� ������� 
www.555hf.tv (����� "555hf.tv") � ���������� ����� (����� "������������"), ���������� ������� 
�������������������� � ������������ �� �������� 3 � 4 ���������� ��, � ���������� ��������� �� ����������� WEB-������ 
� ���� �������� (����� "����") � ������� http://www.555hf.tv
<br><br>
<strong>1. ������� ����������������� ����������</strong><br>
"555hf.tv" ���������� ������������ ���� ������ �� ��������, ���������� ��������� ���������� ����������������� ����������. ���������������� ���������� ����� ���� �������� "��������.TV" ��� ������-���� ������������ ����������� ������������. �������� ���������� ������ ����������������� ���������� ������ ��������� �� �������� �� ������ <a href="http://www.555hf.tv/reg/">http://www.555hf.tv/reg/</a>
<br><br><strong>2. �������� �����</strong><br>
"��������.TV" - ������, �������������� ������������ ��� ������ ������������������� ���������-������������ ����������� ������� ������ ��� ��������� �������� - ����������� � ����������� �������� - ���������.
<br><br>������ ��������.TV ��������������� �������������, ������� ������ � ���� ��������, � ������������� ����������� ����������� ��� ������ ���-�����������, �� ������ ����������������� ����������. 
<br><br><strong>3. ���������� ����������������� ���������� � ����</strong><br>
�� �������� � ���� ����� ��������� ������������� �������� � �� ��������� � ����� ������� ������������� ������ "� �������� �������", ���������� ��� ������� ��. ������ "��������.TV" �� ������������� ������ �������������, ������������ ��� ��������� ������������� ����� ���-������������ �����, ��� ������������� �� ������ <a href="http://www.555hf.tv/">http://www.555hf.tv/</a>
<br><br><strong>4. ������������� ������������ �� �����������, ������ � ������������</strong><br>
4.1. ������������ ������ ������ ��������� �����������:
<br>a) ��������� ��������������� �����;
<br>�) �������� �������� � ��������� ��, �����, ��������� � ��. 3 ��. 
<br>4.2. ��� ���� ����� ��������������� �������� "��������.TV", ������������ ����������� ������������ ���������, ������ � ������ ���������� � ���� �� ��������, ������������ � ��������������� �����, � ������������ ��� ���������� � ���������� ���������. 
<br>4.3. �� ���������� �������� ����������� ������������ �������� ����� � ������ ��� ������� � ������������� ������� �������� ������� "��������.TV". ������������  ����� ��������������� �� ������������ ������ ������ � ������, � ����� �� ���, ��� ����� ������� �� "��������.TV" ��� ������� � ������� ������������. "��������.TV" ����� ����� ��������� ������������� ������������ ������� �/��� ������ �� �� ���������. ������������ ����������� � ���, ��� �� ������ ���������� ��������� "��������.TV" � ����� ������ ����������������� (�� ������������ �������������) ������� �  ������� � ������� ������������ �/��� � ����� ��������� ������������, � ����� � ���, ��� ������������ �������������� ������������ ���������� ������ ��� ����� ������� (������ "�����") �� ��������� ������ ������ ������ � �������� "��������.TV". 
<br>4.4. ��������� ���������� �� �������� ������������� ��� ���� ����� �������������������� ������������� "��������.TV". 
<br><br><strong>5. ��������� ������������������� ������������</strong><br>
������������ �������� � ���������, ��� �� ����� ������ ��������������� �� ������������� ���� ����������, ������, �������, ��������, ������, �����, ����������, �������, �����  � ������ ���������� (����� "���������"), �������� �������������� ��� ���������� ��� ����������� � ������� ������� � ������� ������� "��������.TV". ��������� ����� �� ��������� ������������, ������, ��� ���������� � ��������������, ����������� �� ��������-����� "��������.TV", � ����� �������� ������� www.555hf.tv ����������� �������� "��������". 
<br>������������ ����������� �� ������������ ������ "��������.TV" ���: 
<br>a) ��������, ��������, �������� ��� ������ ������� ������� ������������� ����������, ������� �������� �����������, ������������, �����������, ������������� ��������������, ���������������, ����������� ��������� �����, ����������������� ��������� �/��� ������������� ����� �� ��������, �����������, ��������, ����������� ���������; 
<br>�) ��������� ���� ������������������ ��� �/��� ���������� �� ����� � ����� �����; 
<br>�) ��������� ���� ����������; 
<br>�) ������ ���� �� ������� �������� ��� ������������� ����������� �/��� ���������� ��� ����������� �� �� ����, � ��� ����� �� ����������� "��������.TV", �� ����������� �������, �� ��������� "��������.TV", � ����� �������� � ����������� ������������ ������� � ������������� �����-���� ��������� ��� ��������; 
<br>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� ����������, ������� ������������ �� ����� ����� ������ ��������� �� ������ ��� �������� �����-���� ����������� ����������; 
<br>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� ����������, ������� ����������� �����-���� ������, �������� �����, ������������ �����, �������� ��� ������ ����� ������������� �/��� ��������� � ������� � ��� ����� ������� �������; 
<br>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� �� ����������� ����������� ������� ��������� ����������, �����; 
<br>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� �����-���� ����������, ���������� ������ ��� ������ ������������ ����, ����� ��� ���������, ��������������� ��� ���������, ����������� ���� ����������� ���������������� ������ ������������� ��� ��������������������� ������������ ��� ��������, ��� ������������� �������������������� �������, � ����� �������� ������ � ������������ ����������� ��������� � ��������� ��� �� ���������, ������, ������ � ������ �������� ��� ��������� �������������������� ������� � ������� "��������.TV",  ������ ������� �������� � ���������, � ����� ���������� ������ �� ������������� ����������; 
<br>�) ��������� ��� ���������� ��������� �����-���� ���������� �������, ��������������� ��� ������������� �������; 
<br><br><strong>6. �������������� �������������</strong><br>
������������ ����������� �� ��������������, �� ��������� � �� ����������, �� ��������� � �� �������������, � ����� �� ������������ ��� �����-���� ������������ ����� �����-���� ��������� ������� "��������.TV", ����� ��� �������, ����� ����� ���������� ���� ������������ "��������.TV". "��������.TV" �� ����� ������� ��������������� �� �� ����� ��������� ����� ������������� � �������� ������. 
<br><br><strong>7. ����������� �����������</strong><br>
������������ �������� � ���, ��� "��������.TV" ��������� �� ����� ����� ���������� �������� ������ ������������ � ������� ����� ������� ��� ��������� ��. 
<br>��� ������������� ��������� ������������� ���������� �� "��������.TV" ��������� �� ����� ����� �������� ���������� � ��������� ����������� ������������� "��������.TV" �� ���� �� ���� ���. 
<br>"��������.TV" ��������� �� ����� ����� �������� ������������� ���� ���������� �������������� ����� "��������.TV", ������������ �������� �� ���� ������������. 
<br><br><strong>8. ����� ������������� "��������.TV"</strong><br>
������������ �������� � ����������� � ���, ��� ������ "��������.TV", ��� ��������� � ��� ����������� ��������� �������� ���������� �������, ��������� �������, ���������, �������� �� ���������������� ������������� � ������� ���������������� ����������� � �������������� ��������. 
<br><br><strong>9. ����� ����������</strong><br>
9.1. ���� ���� �� ����������� �������������� ����������� ����� ������������� � "��������.TV", ��� ���������, �������, �������, ����� ���� ���������������, ������ ������������ "��������.TV" �� ������ ����������� ����� support@555hf.tv 
<br>9.2. �� �������� ���������� ����������� ��������� ����� ������������� � "��������.TV" � �������������� ������������� ������������� ������� "��������.TV". 
<br>9.3. ������������ � "��������.TV" ����������� �� ��, ��� ��� ��������� ����� �� ������ �� ����� ����������� �� ������ ����������� �����. 
<br>9.4. ��������� ����� ������-���� ��������� �� ���������������� ��� �� ���������� ��������������� ���������� �� ������ ������������������ ��� �������������� ���� ��������� ����������. 
<br>9.5. ����������� �� ������� "��������.TV" � ������ ��������� ������������� ��������� �� �� ������ "��������.TV" ����� ����������� ��������������� �������� � ������ ����� ��������� �������. 
<br><br><strong>10. �������������� ������������</strong><br>
10.1. ������������ � "��������.TV" ��������� ������� � ����� ������ ������� � ������� �������� ������������. 
<br>10.2. ����������� ������������� ����� ������ ������� � ������� �������� ����� �� ������������. 
<br>10.3. ��� ����� ������ ������� ������������, ��� ���������� ����� �� ��������� ������ ��� ����� e-mail, ������� �� �������� ��� �����������, ����� ����������� �������� ����� ������ ������� � ������� �������� � ����� � �������. 
<br>10.4. � ������ ����������� ������ �������������������� ������������� ������� � ������� �������� ������������ ������ � ������� ������ ��� ��������� �� ���� "��������.TV". 
<br><br><strong>11. �������� � �������� ����� "��������.TV"</strong><br>
"��������.TV" ����� ����� ����������� ���������������� ������ � ����������-���������� ��������� "��������.TV" � ��������� ���������������� ������ "��������.TV", ��������� �� ���� ������������ "��������.TV" �� ���� ���� �� ������ ����� � ��������� ������ �� ���������. 
<br>� ������ ����������� ����-�������� �������������, � ����� ������ ��� ����� � ����������-���������� ���������� ������� ���, �������������� � "��������.TV" u/��� �������� ������� ���, ������������ �� ������������ ��� ����������� ���������������� "��������.TV", �������� ������������ ������ "��������.TV" ��� ���������������� ����������� ������������. 
<br><br><strong>12. ������� ������������ ���������</strong><br>
��� ���������� ������, ��������� ����� ������������� � "��������.TV" � ���������� ������������� "��������.TV", ����������� ��������� ������������� �������: 
<br>������������, ���������, ��� ��� ����� � �������� �������� ��-�� �������� "��������.TV", �������� ���������� �� ����������� ����� support@555hf.tv ���������. 
<br>� ������� 5 (����) ������� ���� �� ��� ��������� ��������� "��������.TV" ������ �������� ���� ������� �� ��������� � ��������� �������������� �������� � ������� ���� ����� �� ������ ����������� �����, ���������� � ���������. 
<br>� ������ �� ���������� ���������� ����� ����� �������������� ������� ���� �������� ������������ � ������������ � ���������������� �����������. 
<br>�� ��������������� ��������� ��������� ��� ���������, �� ����������� ���������������� ������������ �� ������ ��������������� �� ��� ����������� ������. 
<br><br><strong>13. ��������� � ���������� � ��</strong><br>
��������� � ���������� � �� �������� ����� ������ ���� ����� �� ������������� �� ������ ��� �����, ��� �������� ����� �������� ������� ���������� � ����. 
<br>������������ ������ ���������� �������������� �������� ���� ��������� � ��������� ��, ������������ "��������.TV", ��� �������� ����� ������������� �� ����� "��������.TV". 
<br><br><strong>14. ������� � ���������������� ���������� ���������</strong><br>
� ������ �������� ����������-�������� ����� ������� ������ ���������� ���������, ������������� ������� ��� � ����� ���������������� "��������.TV", "��������.TV" ��������� �� ����� ����� ����� ��������� � ���������������� "��������.TV", ������������ �� ���������� ��������� � ������������ � ������ �������.

</div><BR/><input type="checkbox" id="rulesCheck" name="rulesCheck" value="1"/><label for="rulesCheck"> � �������� � ���������</label>'."\n";

			$result .= '			<div class="clear"></div><br />'."\n";
			$result .= '			<div class="friends_line"></div>'."\n";

			$result .= '			<div class="reg_left">'."\n";
			$result .= '				<div id="sled_right_title">���������� ������� �����, ������� �� ������ �� �������� !</div>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="captcha"/><p class="sled_input_title">������� �����:</p></div>'."\n";
			$result .= '			</div>'."\n";
#			print_r($_SESSION['captcha']);
			$result .= '			<div class="reg_right"><br />'."\n";
			$result .= '				<img src="/class/captcha.php" alt="" />'."\n";
			$result .= '			</div>'."\n";
			$result .= '			<div class="clear"></div><br />'."\n";
			$result .= '			<div class="friends_line"></div>'."\n";
			$result .= '			<center><input type="image" src="/images/zareg.gif" id="reg" onClick="regUser(); return false;"/></center>'."\n";
			$result .= '		</form>'."\n";
			$result .= '		<div class="clear"></div>'."\n";
			$result .= '	</div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";

			return $result;
		}


		static function templateLoginData($listCountry, $listCity, $listWho, $listFish, $userFish, $idCity, $err="") {
			$result  = '';
			$result .= '	<div id="login_data">'."\n";
			if ($err != "")
				$result .= '<div align="center"><font color="red">'.$err.'<b></b></font></div>';
			$result .= '		<form id="formRegUser" method="POST" enctype="multipart/form-data">'."\n";

			$result .= '			<div class="reg_left">'."\n";
			$result .= '				<div id="sled_right_title">���� �������� ������...</div>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="firstname" value="'.$_SESSION['AUTH']['firstname'].'" /><p class="sled_input_title"><span class="red_star">&lowast;</span> ���:</p></div>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="lastname" value="'.$_SESSION['AUTH']['lastname'].'" /><p class="sled_input_title"><span class="red_star">&lowast;</span> �������:</p></div>'."\n";


			list($byear, $bmonth, $bday) = explode("-", $_SESSION['AUTH']['birthday']);
			$result .= '				<div class="sled_select"><p class="sled_input_title"><span class="red_star">&lowast;</span> ���� ��������:</p>'."\n";
			$result .= '					<select name="birthday">'."\n";

			for ($day = 1; $day<=31; $day++)
				$result .= '						<option value="'.(strlen($day)<2? "0".$day: $day).'" '.($day == $bday? "SELECTED": "").'>'.(strlen($day)<2? "0".$day: $day).'</option>'."\n";


			$result .= '					</select>'."\n";	
			$result .= '					<select name="birthmonth">'."\n";

			for ($month = 1; $month<=12; $month++)
				$result .= '						<option value="'.(strlen($month)<2? "0".$month: $month).'" '.($month == $bmonth? "SELECTED": "").'>'.(strlen($month)<2? "0".$month: $month).'</option>'."\n";

			$result .= '					</select>'."\n";			
			$result .= '					<select name="birthyear">'."\n";

			for ($year = 1920; $year<=2010; $year++)
			$result .= '						<option value="'.$year.'" '.($year == $byear? "SELECTED": "").'>'.$year.'</option>'."\n";
			$result .= '					</select>'."\n";
			$result .= '				</div>'."\n";

			$result .= '				<div class="sled_input"><input type="hidden" id="city" name="city" value="'.$_SESSION['AUTH']['id_city'].'"><input type="text" class="sled_text" name="field_city" value="'.stripslashes($idCity['name']).'" id="field_city" onkeyup="if(this.value.length>=3) searchCity(this.value);" /><p class="sled_input_title"><span class="red_star">&lowast;</span> �����:</p><ul id="ulCity"></ul></div>'."\n";
			$result .= '			</div>'."\n";
			
			$result .= '			<div class="reg_right">'."\n";
			$result .= '				<div id="sled_right_title">...</div>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="email" value="'.$_SESSION['AUTH']['email'].'" /><p class="sled_input_title"><span class="red_star">&lowast;</span> E-mail:</p></div>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="password" /><p class="sled_input_title"><span class="red_star">&lowast;</span> ������:</p></div>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="password_repeat" /><p class="sled_input_title"><span class="red_star">&lowast;</span> ��������� ������:</p></div>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="maidenname" value="'.$_SESSION['AUTH']['maidenname'].'" /><p class="sled_input_title"><span class="red_star">&lowast;</span> ������� ������� ������:</p></div>'."\n";
			$result .= '				<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="red_star">&lowast;</span> ���������� �� ������, ���� �� �����-���� �������� ������������<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ���� ������������, �� ������� � ��� ������� ������� ����� ������.'."\n";
			$result .= '			</div>'."\n";

			$result .= '			<div class="clear"></div><br />'."\n";
			$result .= '			<div class="friends_line"></div>'."\n";

			$result .= '			<div class="reg_left">'."\n";
			$result .= '				<div id="sled_right_title">����� ������ ����� �� �������������?</div>'."\n";
			$result .= '			</div><div class="clear"></div><br />'."\n";
			
			if (!empty($listFish) and count($listFish)>0) {
				$columnsCount = ceil(count($listFish)/4);

				$result .= '			<div class="reg_mini_column">'."\n";
				foreach ($listFish as $key=>$fish) {
					if ($key % $columnsCount == 0 and $key!=0) {
						$result .= '			</div>'."\n";
						$result .= '			<div class="reg_mini_column">'."\n";
					}

					$result .= '				<input type="checkbox" '.(isset($userFish[$fish['id']])? "CHECKED": "").' id="fish['.$fish['id'].']" name="fish['.$fish['id'].']" value="1" /><label for="fish['.$fish['id'].']">'.$fish['name'].'</label><br />'."\n";
				}
				$result .= '			</div>'."\n";
			}

			$result .= '			<div class="clear"></div><br />'."\n";
			$result .= '			<div class="friends_line"></div>'."\n";
			$result .= '			<center><input type="image" src="/images/zareg.gif" id="reg"/></center>'."\n";
			$result .= '		</form>'."\n";
			$result .= '		<div class="clear"></div>'."\n";
			$result .= '	</div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";



			return $result;
		}



		static function templateVideo($video, $otherProgramm) {
			$result  = '';


			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                        <div class="shadowed-light online-box boxed">'."\n";
			$result .= '                            <div class="border">'."\n";
			$result .= '                                <div class="inner-border">'."\n";

				$result .= '                            	<h3 class="title2line">'."\n";
				$result .= '                                        '.stripslashes($video['name'])."\n";
				$result .= '                                    </h3>'."\n";

$result .= '

 <video
    id=video-555-dan
    class="video-js"
    controls
    preload="auto"
    width="916"
    height="564"
    poster="../images/video/'.$video['id'].'.jpg"
    data-setup="{}"
  >
    <source src="../content/video/'.$video['id'].'hd720.mp4" type="video/mp4" />
    </p>
  </video>

    <script>
            var player = videojs("video-555-dan");
            player.play();
    </script>


'."\n";


				$result .= '                                    <div class="online-descr">'."\n";
				$result .= '                                        <div class="item-video">'."\n";
				$result .= '                                          <h5 class="program-title">'.stripslashes($video['name']).'</h5>'."\n";
				$result .= '                                            <div class="bar-video">'."\n";
#				$ok = file_exists($_SERVER['DOCUMENT_ROOT']."images/video/{$video['id']}sd.mp4") || file_exists($_SERVER['DOCUMENT_ROOT']."images/video/{$video['id']}hd.mp4") || file_exists($_SERVER['DOCUMENT_ROOT']."images/video/{$video['id']}hd720.mp4") || file_exists($_SERVER['DOCUMENT_ROOT']."images/trailer/{$video['id']}hd.mp4");
				$ok = file_exists("/home/content/video/{$video['id']}sd.mp4") || file_exists("/home/content/video/{$video['id']}hd.mp4") || file_exists("/home/content/video/{$video['id']}hd720.mp4") || file_exists("/home/content/trailer/{$video['id']}hd.mp4");
				if ($ok === true)
					$result .= '                                                <p class="date">'.($video['is_preparing']==1? "��������� � �������": date("d.m.Y", $video['datetime'])).'</p>'."\n";
				else
					$result .= '<p class="date">����� ��������� � �������</p>';
				$result .= '                                                <h5 class="titleoneline">'."\n";
				$result .= '                                                    <span>'."\n";
				$result .= '                                                        '.stripslashes($video['nameType'])."\n";
				$result .= '                                                    </span>'."\n";
				$result .= '                                                </h5>'."\n";
				$result .= '                                                <p class="descr-video">'."\n";
				$result .= '                                                    '.stripslashes($video['text'])."\n";
				$result .= '                                                </p>'."\n";
				$result .= '                                            </div>'."\n";
				$result .= '                                          </div>'."\n";
				$result .= '                                          <div class="right-box-view">'."\n";
				$result .= '                                              <div class="button button-dark panel"><p>'."\n";

				if (!isset($fail)) {
					$id_typevideo = split(",", $video['id_typevideo']);
					if (array_search("trailer", $id_typevideo)!==false)
						$result .= '	    <a href="/trailer/'.$video['id'].'" title="�������� �������">�������</a>'."\n";
					$result .= ' <a onClick="addSelection('.$video['id'].')" title="�������� � ��������">� ��������</a>'."\n";
					$result .= '	    <a href="/recommend" title="������������� �������">���������� �����</a>'."\n";
					if (array_search("trailer", $id_typevideo)!==false)
						$result .= '	    <a href="/download/'.$video['id'].'" title="������� �������">������� �������</a>'."\n";
				}
				$result .= '                                              </p></div>'."\n";
				if (!empty($video['tags']) and count($video['tags'])>0) {
					$result .= '           <p><strong>����: </strong>';
					$temp = array();
					foreach ($video['tags'] as $tag) {
						$temp[] = '<a href="#">'.$tag['name'].'</a>';
					}
					$result .= implode(", ", $temp)."</p>";
				}
				$result .= '                                              <p>���������� ����������: <strong>'.$video['view'].'</strong></p>'."\n";
				$result .= '                                              <p><b><a href="http://555hf.tv/forum/forum71/" target="_blank" style="color:#000000">������ �������� ���������� ������ � �����?</a></b></p>'."\n";
				$result .= '                                          </div>'."\n";
				$result .= '                                      </div>'."\n";
#			}
#			else {
#			}


			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";


			return $result;
		}

		static function templateMySelection($selections) {
			$result  = '';

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                        <div class="shadowed-light online-box boxed">'."\n";
			$result .= '                            <div class="border">'."\n";
			$result .= '                                <div class="inner-border">'."\n";

                        if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth']==1 and $_SESSION['AUTH']['datetimepay'] > time()) { // ���� ������������ ������������� � � ���� ����������
                                if (!empty($selections) and count($selections)>0) {
                                        $video = array_shift($selections);

					$result .= '                            	<h3 class="title2line">'."\n";
					$result .= '                                        '.stripslashes($video['name'])."\n";
					$result .= '                                    </h3>'."\n";


					$result .= '                                    <div class="online-descr">'."\n";

                                $result .= '                                  echo "777"'."\n";


			$result .= '<div id="playerBig">'."\n";
			$result .= '    <a href="http://www.adobe.com/go/getflashplayer">'."\n";
			$result .= '	<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>'."\n";
			$result .= '    </a>'."\n";
			$result .= '</div>'."\n";


					$result .= '                                        <div class="item-video">'."\n";
					$result .= '                                          <h5 class="program-title" id="prog2_left_box_p">'.stripslashes($video['name']).'</h5>'."\n";
					$result .= '                                            <div class="bar-video">'."\n";
					$ok = file_exists("/home/content/video/{$video['id']}sd.mp4") || file_exists("/home/content/video/{$video['id']}hd.mp4") || file_exists("/home/content/video/{$video['id']}hd720.mp4") || file_exists("/home/content/images/trailer/{$video['id']}hd.mp4");
					if ($ok === true)
						$result .= '                                                <p class="date" id="dateVideo">'.($video['is_preparing']==1? "��������� � �������": date("d.m.Y", $video['datetime'])).'</p>'."\n";
					else
						$result .= '<p class="date" id="dateVideo">����� ��������� � �������</p>';
					$result .= '                                                <h5 class="titleoneline">'."\n";
					$result .= '                                                    <span id="nameProgramm">'."\n";
					$result .= '                                                        '.stripslashes($video['nameType'])."\n";
					$result .= '                                                    </span>'."\n";
					$result .= '                                                </h5>'."\n";
					$result .= '                                                <p class="descr-video" id="textVideo">'."\n";
					$result .= '                                                    '.stripslashes($video['text'])."\n";
					$result .= '                                                </p>'."\n";
					$result .= '                                            </div>'."\n";
					$result .= '                                          </div>'."\n";
					$result .= '                                          <div class="right-box-view">'."\n";
					$result .= '                                              <div class="button button-dark panel"><p>'."\n";
	
					if (!isset($fail)) {
						$id_typevideo = split(",", $video['id_typevideo']);
						if (array_search("trailer", $id_typevideo)!==false)
							$result .= '	    <a href="/trailer/'.$video['id'].'" title="�������� �������">�������</a>'."\n";
#						$result .= ' <a onClick="addSelection('.$video['id'].')" title="�������� � ��������">� ��������</a>'."\n";
						$result .= '	    <a href="/recommend" title="������������� �������">���������� �����</a>'."\n";
						if (array_search("trailer", $id_typevideo)!==false)
							$result .= '	    <a href="/download/'.$video['id'].'" title="������� �������">������� �������</a>'."\n";
					}
					$result .= '                                              </p></div>'."\n";
					if (!empty($video['tags']) and count($video['tags'])>0) {
						$result .= '           <p><strong>����: </strong>';
						$temp = array();
						foreach ($video['tags'] as $tag) {
							$temp[] = '<a href="#">'.$tag['name'].'</a>';
						}
						$result .= implode(", ", $temp)."</p>";
					}
					$result .= '                                              <p>���������� ����������: <strong>'.$video['view'].'</strong></p>'."\n";
					$result .= '                                              <p><b><a href="http://555hf.tv/forum/forum71/" target="_blank" style="color:#000000">������ �������� ���������� ������ � �����?</a></b></p>'."\n";
					$result .= '                                          </div>'."\n";
					$result .= '                                      </div>'."\n";

#	var flashvars = {\'id\':\'/video/'.$video['id'].'\', \'local\': true, \'quality\': \''.(isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth']==1? $_SESSION['AUTH']['quality']: "sd").'\'};

					$result .= '<script>
	var flashvars = {\'id\':\'/video/'.$video['id'].'\', \'local\': true, \'quality\': \''."sd".'\'};
	var params = {};
	params.bgcolor = "#F2EEE9";
	params.allowFullscreen = true;

	var attributes = {};
	swfobject.embedSWF("/images/player.swf", "playerBig", "100%", "100%", "10.0.0", false, flashvars, params, attributes);

	var start = 0;

	start = 0;
	function qpFinished()
	{
	    ';

	$i = 0;
	foreach ($selections as $video) {
		if ($i!=0)
			$result .= '		else '."\n";

		$result .= '		if (start == '.$i.') {'."\n";
		$result .= '			document.getElementById("nameProgramm").innerHTML = \''.str_replace("'", '"', $video['nameType']).'\';'."\n";
		$result .= '			document.getElementById("dateVideo").innerHTML = \''.date("d.m.Y", $video['datetime']).'\';'."\n";
		$result .= '			document.getElementById("prog2_left_box_p").innerHTML = \''.str_replace("'", '"', $video['name']).'\';'."\n";
		$result .= '			document.getElementById("textVideo").innerHTML = \''.str_replace("'", '"', stripslashes($video['text'])).'\';'."\n";
		$result .= '			document.getElementById("playerBig").startVideo(\'/video/'.$video['id'].'\');'."\n";
		$result .= '			start++;'."\n";
		$result .= '		}'."\n";
		$i++;
	}

	    //document.getElementById("playerBig").startVideo(url);
$result .= '
	}
    </script>';
				}
				else {
					$result .= '                            	<h3 class="title2line">'."\n";
					$result .= '                                       ��������'."\n";
					$result .= '                                    </h3>'."\n";

                                        $result .= '<div class="online-descr">��� ����� ��� ���������</div>';
				}
			}
			else {
                                if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth']==1 and $_SESSION['AUTH']['datetimepay'] < time())
                                        echo '<div style="margin-left: 40px; color: #FF3333; font-weight: bold">�� �� ������ �������� �����, ���� �� �������� ������ � �����</div>';
                                    else
                                        $result .= '<div style="margin-left: 40px; color: #FF3333; font-weight: bold">�������� ���������� ���� �� �� <a href="/account/">���������������</a> ��� <a href="/reg/">�����������������</a></div><BR/><BR/><BR/><BR/><BR/><BR/>';
			}


			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";


			return $result;


			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                        <div class="shadowed-light online-box boxed">'."\n";
			$result .= '                            <div class="border">'."\n";
			$result .= '                                <div class="inner-border">'."\n";

				$result .= '                            	<h3 class="title2line">'."\n";
				$result .= '                                        '.stripslashes($video['name'])."\n";
				$result .= '                                    </h3>'."\n";
				$result .= '                                    <img src="/img/other/online.png" width="916" height="564" alt="" title="" />'."\n";
				$result .= '                                    <div class="online-descr">'."\n";
				$result .= '                                        <div class="item-video">'."\n";
				$result .= '                                          <h5 class="program-title">'.stripslashes($video['name']).'</h5>'."\n";
				$result .= '                                            <div class="bar-video">'."\n";
				$ok = file_exists($_SERVER['DOCUMENT_ROOT']."images/video/{$video['id']}sd.mp4") || file_exists($_SERVER['DOCUMENT_ROOT']."images/video/{$video['id']}hd.mp4") || file_exists($_SERVER['DOCUMENT_ROOT']."images/video/{$video['id']}hd720.mp4") || file_exists($_SERVER['DOCUMENT_ROOT']."images/trailer/{$video['id']}hd.mp4");
				if ($ok === true)
					$result .= '                                                <p class="date">'.($video['is_preparing']==1? "��������� � �������": date("d.m.Y", $video['datetime'])).'</p>'."\n";
				else
					$result .= '<p class="date">����� ��������� � �������</p>';
				$result .= '                                                <h5 class="titleoneline">'."\n";
				$result .= '                                                    <span>'."\n";
				$result .= '                                                        '.stripslashes($video['nameType'])."\n";
				$result .= '                                                    </span>'."\n";
				$result .= '                                                </h5>'."\n";
				$result .= '                                                <p class="descr-video">'."\n";
				$result .= '                                                    '.stripslashes($video['text'])."\n";
				$result .= '                                                </p>'."\n";
				$result .= '                                            </div>'."\n";
				$result .= '                                          </div>'."\n";
				$result .= '                                          <div class="right-box-view">'."\n";
				$result .= '                                              <div class="button button-dark panel"><p>'."\n";

				if (!isset($fail)) {
					$id_typevideo = split(",", $video['id_typevideo']);
					if (array_search("trailer", $id_typevideo)!==false)
						$result .= '	    <a href="/trailer/'.$video['id'].'" title="�������� �������">�������</a>'."\n";
					$result .= ' <a onClick="addSelection('.$video['id'].')" title="�������� � ��������">� ��������</a>'."\n";
					$result .= '	    <a href="/recommend" title="������������� �������">���������� �����</a>'."\n";
					if (array_search("trailer", $id_typevideo)!==false)
						$result .= '	    <a href="/download/'.$video['id'].'" title="������� �������">������� �������</a>'."\n";
				}
				$result .= '                                              </p></div>'."\n";
				if (!empty($video['tags']) and count($video['tags'])>0) {
					$result .= '           <p><strong>����: </strong>';
					$temp = array();
					foreach ($video['tags'] as $tag) {
						$temp[] = '<a href="#">'.$tag['name'].'</a>';
					}
					$result .= implode(", ", $temp)."</p>";
				}
				$result .= '                                              <p>���������� ����������: <strong>'.$video['view'].'</strong></p>'."\n";
				$result .= '                                              <p><b><a href="http://555hf.tv/forum/forum71/" target="_blank" style="color:#000000">������ �������� ���������� ������ � �����?</a></b></p>'."\n";
				$result .= '                                          </div>'."\n";
				$result .= '                                      </div>'."\n";
#			}
#			else {
#			}


			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";


			return $result;


			$result .= '	<div id="prog2_container">'."\n";
			$result .= '	<div id="prog2_video">'."\n";

if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth']==1 and $_SESSION['AUTH']['datetimepay'] > time()) { // ���� ������������ ������������� � � ���� ����������
$sel = array_shift($selections);
			$result .= '<div class="pl" id="playerBig">'."\n";
			$result .= '    <a href="http://www.adobe.com/go/getflashplayer">'."\n";
			$result .= '	<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>'."\n";
			$result .= '    </a>'."\n";
			$result .= '</div>'."\n";
#print_r($selections);
//			������� �������� quality = sd | hd | hd720
#	var flashvars = {\'id\':\'/video/'.$video['id'].'\', \'quality\': '.(isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth']==1? $_SESSION['AUTH']['quality']: "hd").'};
$result .= '
    <script type="text/javascript">
	var flashvars = {\'id\':\'/video/'.$sel['id'].'\', \'local\': true, \'quality\': \''.(isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth']==1? $_SESSION['AUTH']['quality']: "sd").'\'};
	var params = {};
	params.bgcolor = "#F2EEE9";
	params.allowFullscreen = true;

	var attributes = {};
	swfobject.embedSWF("/images/player.swf", "playerBig", "100%", "100%", "10.0.0", false, flashvars, params, attributes);

	var start = 0;

	function qpFinished()
	{
	    ';

	$i = 0;
	foreach ($selections as $video) {
		if ($i!=0)
		$result .= '		else '."\n";
		$result .= '		if (start == '.$i.') {'."\n";
		$result .= '			document.getElementById("nameProgramm").innerHTML = \''.str_replace("'", '"', $video['nameType']).'\';'."\n";
		$result .= '			document.getElementById("dateVideo").innerHTML = \''.date("d/m/Y", $video['datetime']).'\';'."\n";
		$result .= '			document.getElementById("prog2_left_box_p").innerHTML = \''.str_replace("'", '"', $video['name']).'\';'."\n";
		$result .= '			document.getElementById("textVideo").innerHTML = \''.str_replace("'", '"', stripslashes($video['text'])).'\';'."\n";
		$result .= '			document.getElementById("playerBig").startVideo(\'/video/'.$video['id'].'\');'."\n";
		$result .= '			start++;'."\n";
		$result .= '		}'."\n";
		$i++;
	}

	    //document.getElementById("playerBig").startVideo(url);
$result .= '
	}
    </script>';


			$result .= '	    <div class="clear"></div>'."\n";
			$result .= '	</div>'."\n";

			$result .= '	<div id="prog2_left_box">'."\n";
			$result .= '	    <div id="prog2_left_box_top"><span id="nameProgramm">'.str_replace("'", '"', $sel['nameType']).'</span> <p><span id="dateVideo">'.date("d/m/Y", $sel['datetime']).'</span></p></div>'."\n";
			$result .= '		<p id="prog2_left_box_p">'.stripslashes($sel['name']).'</p><br />'."\n";
			$result .= '		<span id="textVideo">'.stripslashes($sel['text']).'</span><br /><br />'."\n";
			$result .= '	    <div id="prog2_left_box_bottom"></div>'."\n";
			$result .= '	</div>'."\n";

			$result .= '	<div class="clear"></div>'."\n";

#$result .= '
#    <script type="text/javascript">
#	qpFinished();
#    </script>';
}
else {
    if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth']==1 and $_SESSION['AUTH']['datetimepay'] < time())
        echo '<div style="margin-left: 40px; color: #FF3333; font-weight: bold">�� �� ������ �������� �����, ���� �� �������� ������ � �����</div>';
    else
        $result .= '<div style="margin-left: 40px; color: #FF3333; font-weight: bold">�������� ���������� ���� �� �� <a href="/account/">���������������</a> ��� <a href="/reg/">�����������������</a></div><BR/><BR/><BR/><BR/><BR/><BR/>';
	$result .= '    </div>'."\n";
}

			$result .= '    </div>'."\n";
			$result .= '    <div class="clear"></div>'."\n";
			$result .= '    <div class="empty"></div>'."\n";
			$result .= '</div>'."\n";

			return $result;
		}


		static function templateTrailer($video, $otherProgramm) {
			$result  = '';

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                        <div class="shadowed-light online-box boxed">'."\n";
			$result .= '                            <div class="border">'."\n";
			$result .= '                                <div class="inner-border">'."\n";

				$result .= '                            	<h3 class="title2line">'."\n";
				$result .= '                                        '.stripslashes($video['name'])."\n";
				$result .= '                                    </h3>'."\n";



$result .= '

 <video
    id=my-555-dan
    class="video-js"
    controls
    preload="auto"
    width="916"
    height="564"
    poster="../images/video/'.$video['id'].'.jpg"
    data-setup="{}"
  >

    <source src="../content/trailer/'.$video['id'].'hd1080.mp4" type="video/mp4" />

    </p>
  </video>

    <script>
            var player = videojs("my-555-dan");
            player.play();
    </script>


'."\n";

#
#    <source src="../content/trailer/'.$video['id'].'hd1080.webm" type="video/webm" />


				$result .= '                                    <div class="online-descr">'."\n";
				$result .= '                                        <div class="item-video">'."\n";
				$result .= '                                          <h5 class="program-title">'.stripslashes($video['name']).'</h5>'."\n";
				$result .= '                                            <div class="bar-video">'."\n";
				$ok = file_exists("/home/content/video/{$video['id']}sd.mp4") || file_exists("/home/content/video/{$video['id']}hd.mp4") || file_exists("/home/content/video/{$video['id']}hd720.mp4") || file_exists("/home/content/trailer/{$video['id']}hd.mp4");

				if ($ok === true)
					$result .= '                                                <p class="date">'.($video['is_preparing']==1? "��������� � �������": date("d.m.Y", $video['datetime'])).'</p>'."\n";
				else
					$result .= '<p class="date">����� ��������� � �������</p>';
				$result .= '                                                <h5 class="titleoneline">'."\n";
				$result .= '                                                    <span>'."\n";
				$result .= '                                                        '.stripslashes($video['nameType'])."\n";
				$result .= '                                                    </span>'."\n";
				$result .= '                                                </h5>'."\n";
				$result .= '                                                <p class="descr-video">'."\n";
				$result .= '                                                    '.stripslashes($video['text'])."\n";
				$result .= '                                                </p>'."\n";
				$result .= '                                            </div>'."\n";
				$result .= '                                          </div>'."\n";
				$result .= '                                          <div class="right-box-view">'."\n";
				$result .= '                                              <div class="button button-dark panel"><p>'."\n";

				if (!isset($fail)) {
					$id_typevideo = split(",", $video['id_typevideo']);
#					if (array_search("trailer", $id_typevideo)!==false)
						$result .= '	    <a href="/video/'.$video['id'].'" title="�������� ���������">�������� ���������</a>'."\n";
					$result .= ' <a onClick="addSelection('.$video['id'].')" title="�������� � ��������">� ��������</a>'."\n";
					$result .= '	    <a href="/recommend" title="������������� �������">���������� �����</a>'."\n";
					if (array_search("trailer", $id_typevideo)!==false)
						$result .= '	    <a href="/download/'.$video['id'].'" title="������� �������">������� �������</a>'."\n";
				}
				$result .= '                                              </p></div>'."\n";

				if (!empty($video['tags']) and count($video['tags'])>0) {
					$result .= '           <p><strong>����: </strong>';
					$temp = array();
					foreach ($video['tags'] as $tag) {
						$temp[] = '<a href="#">'.$tag['name'].'</a>';
					}
					$result .= implode(", ", $temp)."</p>";
				}
				$result .= '                                              <p>���������� ����������: <strong>'.$video['view'].'</strong></p>'."\n";
				$result .= '                                              <p><b><a href="http://555hf.tv/forum/forum71/" target="_blank" style="color:#000000">������ �������� ���������� ������ � �����?</a></b></p>'."\n";
				$result .= '                                          </div>'."\n";
				$result .= '                                      </div>'."\n";
#			}
#			else {
#			}


			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

return $result;

			$result .= '	<div id="prog2_container">'."\n";
			$result .= '	<div id="prog2_video">'."\n";

			$ok = file_exists($_SERVER['DOCUMENT_ROOT']."images/trailer/{$video['id']}sd.mp4") || file_exists($_SERVER['DOCUMENT_ROOT']."images/trailer/{$video['id']}hd.mp4") || file_exists($_SERVER['DOCUMENT_ROOT']."images/trailer/{$video['id']}hd720.mp4");

		    if ($ok === true) {

			$result .= '<div class="pl" id="playerBig">'."\n";
			$result .= '    <a href="http://www.adobe.com/go/getflashplayer">'."\n";
			$result .= '	<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>'."\n";
			$result .= '    </a>'."\n";
			$result .= '</div>'."\n";
//			������� �������� quality = sd | hd | hd720
#	var flashvars = {\'id\':\'/video/'.$video['id'].'\', \'quality\': '.(isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth']==1? $_SESSION['AUTH']['quality']: "hd").'};
$result .= '
    <script type="text/javascript">
	var flashvars = {\'showcase\': true, \'local\': true, \'id\':\'/trailer/'.$video['id'].'\', \'quality\': \''.(isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth']==1? $_SESSION['AUTH']['quality']: "sd").'\'};
	var params = {};
	params.bgcolor = "#F2EEE9";
	params.allowFullscreen = true;

	var attributes = {};
	swfobject.embedSWF("/images/player.swf", "playerBig", "100%", "100%", "10.0.0", false, flashvars, params, attributes);
    </script>';


			$result .= '	    <div class="clear"></div>'."\n";
			$result .= '	</div>'."\n";
#	swfobject.embedSWF("/images/playerrtmp.swf", "playerBig", "100%", "100%", "10.0.0", false, flashvars, params, attributes);

}
else {
    $result .= '<div style="margin-left: 10px"><h1>����� ��������� � �������</h1></div><BR/><BR/>';
}


			$result .= '	<div id="prog2_left_box">'."\n";
			$result .= '	    <div id="prog2_left_box_top"><span>'.$video['nameType'].'</span> <p>'.date("d.m.Y", $video['datetime']).'</p></div>'."\n";
			$result .= '		<p id="prog2_left_box_p">'.$video['name'].'.</p><br />'."\n";
			$result .= '		'.stripslashes($video['text']).'<br />'."\n";
#			$result .= '		<a href="/programm/'.$video['id_typeprogramm'].'">��������� � ���������</a>'."\n";

			if (!empty($video['tags']) and count($video['tags'])>0) {
				$result .= '		����: ';
				$temp = array();
				foreach ($video['tags'] as $tag) {
					$temp[] = '<a href="/trailer/'.$video['id'].'">'.$tag['name'].'</a>';
				}
				$result .= implode(", ", $temp)."<BR/>";
			}

			$result .= '		<BR/>���������� ����������: '.$video['view']."\n";
			$result .= '	    <div id="prog2_left_box_bottom"></div>'."\n";
			$result .= '	</div>'."\n";
	
			$result .= '	<div id="prog2_right_buttons">'."\n";

			$ok2 = file_exists($_SERVER['DOCUMENT_ROOT']."images/video/{$video['id']}sd.mp4") || file_exists($_SERVER['DOCUMENT_ROOT']."images/video/{$video['id']}hd.mp4") || file_exists($_SERVER['DOCUMENT_ROOT']."images/video/{$video['id']}hd720.mp4") || file_exists($_SERVER['DOCUMENT_ROOT']."images/video/{$video['id']}hd1080.mp4");

			if ($ok2 === true)
				$result .= '	    <a href="/video/'.$video['id'].'" title="�������� ������ ���������"><img src="/images/prog2_but1.gif" alt="" /></a>'."\n";
			else
				$result .= '	<div align="center">����� �����������. �������� �����.</div>'."\n";
			$result .= '	    <a href="/recommend" title="������������� �������"><img src="/images/recomend.png" alt="" /></a>'."\n";
			$result .= '	    <a onClick="addSelection('.$video['id'].')" title="�������� � ��������"><img src="/images/prog2_but3.gif" alt="" /></a>'."\n";
			$result .= '	    <a href="/download/'.$video['id'].'" title="������� �������"><img src="/images/prog2_but4.gif" alt="" /></a>'."\n";
			$result .= '	</div>'."\n";
	
			$result .= '	<div class="clear"></div>'."\n";

			$result .= '    </div>'."\n";
			$result .= '    <div class="clear"></div>'."\n";
			$result .= '    <div class="empty"></div>'."\n";
			$result .= '</div>'."\n";

			return $result;
		}

		static function templateSelectionVideo($video, $otherProgramm) {
			$result  = '';
			$result .= '	<div id="prog2_container">'."\n";
			$result .= '	<div id="prog2_video">'."\n";


$result .= '

 <video
    id=SelectionVideo-555-dan
    class="video-js"
    controls
    preload="auto"
    width="926"
    height="573"
    poster="../images/fullHD3.swf
    data-setup="{}"
  >
    <source src="../content/video/'.$video['id'].'hd720.mp4" type="video/mp4" />
    </p>
  </video>

    <script>
            var player = videojs("SelectionVideo-555-dan");
            player.play();
    </script>


'."\n";


			$result .= '	    <div class="clear"></div>'."\n";
			$result .= '	</div>'."\n";

			$result .= '	<div id="prog2_left_box">'."\n";
			$result .= '	    <div id="prog2_left_box_top"><span>'.$video['name'].'</span> <p>'.date("d/m/Y", $video['datetime']).'</p></div>'."\n";
#			$result .= '		<p id="prog2_left_box_p">'.$video['name'].'.</p><br />'."\n";
			$result .= '		'.stripslashes($video['text']).'<br /><br />'."\n";
#			$result .= '		<a href="/programm/'.$video['id_typeprogramm'].'">��������� � ���������</a>'."\n";
			$result .= '	    <div id="prog2_left_box_bottom"></div>'."\n";
			$result .= '	</div>'."\n";
	

			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="friends_line"></div>'."\n";


			$result .= '    </div>'."\n";
			$result .= '    <div class="clear"></div>'."\n";
			$result .= '    <div class="empty"></div>'."\n";
			$result .= '</div>'."\n";

			return $result;
		}


		static function templateViewShopVideo($video) {
			$result  = '';

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                        <div class="shadowed-light online-box boxed">'."\n";
			$result .= '                            <div class="border">'."\n";
			$result .= '                                <div class="inner-border">'."\n";

				$result .= '                            	<h3 class="title2line">'."\n";
				$result .= '                                        '.stripslashes($video['name'])."\n";
				$result .= '                                    </h3>'."\n";



				$result .= '                                    <div class="online-descr">'."\n";


$result .= '

 <video
    id=ViewShopVideo-555-dan
    class="video-js"
    controls
    preload="auto"
    width="916"
    height="564"
    poster="../images/shop/'.$video['id'].'.jpg"
    data-setup="{}"
  >
    <source src="../content/shop/'.$video['id'].'hd720.mp4" type="video/mp4" />
    </p>
  </video>

    <script>
            var player = videojs("ViewShopVideo-555-dan");
            player.play();
    </script>


'."\n";



				$result .= '                                        <div class="item-video">'."\n";
				$result .= '                                          <h5 class="program-title">'.stripslashes($video['name']).'</h5>'."\n";
				$result .= '                                            <div class="bar-video">'."\n";
				$ok = file_exists("/home/content/shop/{$video['id']}sd.mp4") || file_exists("/home/content/shop/{$video['id']}hd.mp4") || file_exists("/home/content/shop/{$video['id']}hd720.mp4") || file_exists("/home/content/shop/{$video['id']}hd1080.mp4");

				$result .= '                                                <div style="position: absolute; margin-left: 800px">'."\n";
				$result .= '                                                           <div class="button button-dark panel"> 
                                                              <p><a href="'.$video['url'].'" title="������" target="_blank">������</a></p> 
                                                          </div></div> ';
				$result .= '                                                <div class="descr-video">'."\n";

				$result .= '                                                    '.stripslashes($video['text'])."\n";
				$result .= '                                                </div>'."\n";

				$result .= '                                            </div>'."\n";
				$result .= '                                          </div>'."\n";
				$result .= '                                          <div class="right-box-view">'."\n";

				$result .= '                                          </div>'."\n";
				$result .= '                                      </div>'."\n";
#			}
#			else {
#			}


			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}




		static function templateShopVideo($video, $otherProgramm) {
			$result  = '';

			$result .= '	<div id="prog2_container">'."\n";
			$result .= '	<div id="prog2_video">'."\n";
		

	$result .= '    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="926" height="573" id="flvPlayer4CS3" align="middle">'."\n";
			$result .= '    <param name="allowScriptAccess" value="sameDomain" />'."\n";
			$result .= '    <param name="allowFullScreen" value="true" />'."\n";
			$result .= '	<PARAM NAME=FlashVars VALUE="id='.$video['id'].'&type=video&"/>'."\n";
			$result .= '    <param name="movie" value="/images/fullHD3.swf" /><param name="quality" value="high" />
<param name="bgcolor" value="#edece7" /><embed src="/images/fullHD3.swf" flashvars="id='.$video['id'].'&type=shop&" quality="high" 
bgcolor="#edece7" width="926" height="573" name="flvPlayer4CS3" align="middle" allowScriptAccess="sameDomain" allowFullScreen="true" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'."\n";
			$result .= '    </object><BR/><BR/>'."\n";



$result .= '

 <video
    id=ShopVideo-555-dan
    class="video-js"
    controls
    preload="auto"
    width="926"
    height="573"
    poster="../images/shop/'.$video['id'].'.jpg"
    data-setup="{}"
  >
    <source src="../content/shop/'.$video['id'].'hd720.mp4" type="video/mp4" />
    </p>
  </video>

    <script>
            var player = videojs("ShopVideo-555-dan");
            player.play();
    </script>


'."\n";

			$result .= '	    <div class="clear"></div>'."\n";
			$result .= '	</div>'."\n";

			$result .= '	<div id="prog2_left_box">'."\n";
			$result .= '	    <div id="prog2_left_box_top"><span>12123123123'.$video['name'].'</span> <p>'.$video['price'].' ���.</p></div>'."\n";
#			$result .= '		<p id="prog2_left_box_p">'.$video['name'].'.</p><br />'."\n";
			$result .= '		'.stripslashes($video['text']).'<br /><br />'."\n";
#			$result .= '		<a href="/programm/'.$video['id_typeprogramm'].'">��������� � ���������</a>'."\n";
			$result .= '	    <div id="prog2_left_box_bottom"></div>'."\n";
			$result .= '	</div>'."\n";
	
	
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="friends_line"></div>'."\n";


			$result .= '    </div>'."\n";
			$result .= '    <div class="clear"></div>'."\n";
			$result .= '    <div class="empty"></div>'."\n";
			$result .= '</div>'."\n";

			return $result;
		}



		static function templateProgramm($infoProgramm, $oherVideo, $listProgramm, $listPhotos, $page, $count, $all, $lastVideoProgramm, $err) {
			global $pagename;

			$result  = "";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '            	    <div class="boxed mar-b10 view-school">'."\n";
			$result .= '                            <div class="left-big-block">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                            <div>'."\n";
			$result .= '                                              <div class="jornal-list w-577">'."\n";
			$result .= '                                                <div class="mar-b-20 boxed">'."\n";


			if (!empty($oherVideo) and count($oherVideo)>0) {
				foreach ($oherVideo as $key=>$video) {
					$result .= '                                                  <div class="item-video">'."\n";
					$result .= '                                                      <h5 class="program-title">'.stripslashes($video['name']).'</h5>'."\n";
					$result .= '                                                      <div>'."\n";
					$result .= '                                                        <div class="prw-video">'."\n";
					if (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth']==1 && $_SESSION['AUTH']['datetimepay']>time()) {
						$result .= '                                                            <a href="/video/'.$video['id'].'">'."\n";
					}
					else if ($video['id_typevideo'] != "") {
						$id_typevideo = split(",", $video['id_typevideo']);
						if (!empty($id_typevideo) and in_array("trailer", $id_typevideo)!==false)
							$result .= '                                                            <a href="/trailer/'.$video['id'].'">'."\n";
						else
							$result .= '                                                            <a href="/video/'.$video['id'].'">'."\n";
					}
					$result .= '                                                                <i class="shadow-video"></i>'."\n";
					$result .= '                                                                <span class="play-btn"></span>'."\n";
					$result .= '                                                                <img height="120" width="196" alt="" title="" src="/images/video/'.$video['id'].'.jpg">'."\n";
					$result .= '                                                            </a>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                        <div class="bar-video">'."\n";
					$result .= '                                                    	<p class="date">'.date("d.m.Y", $video['datetime']).'</p>'."\n";
					$result .= '                                                    	<h5 class="titleoneline">'."\n";
					$result .= '                                                                <a href="/programm/'.$video['id_typeprogramm'].'">'."\n";
					$result .= '                                                                    '.stripslashes($video['nameType'])."\n";
					$result .= '                                                                </a>'."\n";
					$result .= '                                                            </h5>'."\n";
					$result .= '                                                            <p class="descr-video">'."\n";
					$result .= '                                                        	'.substr(strip_tags(stripslashes($video['text'])), 0, 250).'...'."\n";
					$result .= '                                                            </p>'."\n";
					$result .= '                                                           <div class="button button-dark panel"><p>'."\n";
					if ($video['id_typevideo'] != "") {
						$id_typevideo = split(",", $video['id_typevideo']);
						if (!empty($id_typevideo) and in_array("trailer", $id_typevideo)!==false)
							$result .= '					<a href="/trailer/'.$video['id'].'" title="�������">�������</a>'."\n";
					}
					$result .= '					<a href="/video/'.$video['id'].'" title="��������">��������</a>'."\n";
					$result .= ' <a onClick="addSelection('.$video['id'].')" title="�������� � ��������">� ��������</a>'."\n";
					$result .= '                                                          </p></div>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                      </div>'."\n";
					$result .= '                                                  </div><BR/>'."\n";
				}
			}
			else {
				$result .= '<div align="center">��������� �������� �����������</div>';
			}



			$result .= '                                                  </div>'."\n";
			if ($all > $count) {
				$result .= '                                                <div class="pager">'."\n";
				$result .= '                                                  <div class="page">'."\n";


$result .=pager_num($all,$count, $page, 'programm/'.$pagename[1]);
				$result .= '                                               </div>'."\n";
				$result .= '                                               </div>'."\n";
			}


			$result .= '                                              </div>'."\n";
			$result .= '                                          </div>'."\n";
			$result .= '                                      </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                            <div class="left-menu big-menu">'."\n";

#			$result .= viewTemplate::selection_basket();

			if (!empty($listProgramm) and count($listProgramm)>0) {
				$result .= '                                <div class="shadowed-dark big-menu">'."\n";
				$result .= '                                    <div class="border">'."\n";
				$result .= '                                        <div class="inner-border">'."\n";
				$result .= '                                    	<h3 class="title2line">'."\n";
				$result .= '                                                ���������'."\n";
				$result .= '                                            </h3>'."\n";
				$result .= '                                            <ul>'."\n";

				foreach ($listProgramm as $key=>$p) {
					$result .= '                                                <li>'."\n";
					$result .= '                                                    <a href="/programm/'.$p['id'].'">'."\n";
					$result .= '                                                        '.stripslashes($p['name'])."\n";
					$result .= '                                                  </a>'."\n";
					$result .= '                                                </li>'."\n";
				}
				
				$result .= '                                            </ul>'."\n";
				$result .= '                                        </div>'."\n";
				$result .= '                                    </div>'."\n";
				$result .= '                                </div>'."\n";
			}

			$result .= '                                <form method="post" id="formProgramm">'."\n";
			$result .= '                                <div class="shadowed-light mar-b10">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border playlist-left">'."\n";
			$result .= '                                    	<div class="com">'."\n";
			$result .= '                                        	<h3 class="title2line">'."\n";
			$result .= '                                                    ���� ������ � ���������'."\n";
			$result .= '                                                </h3>'."\n";

			if ($err != "") $result .= $err;

			$result .= '                                                <div class="rows-input">'."\n";
			$result .= '                                                    <label for="name">���� ���</label>'."\n";
			$result .= '                                                    <input type="text" id="name" name="name" value="'.(isset($_POST['name'])? $_POST['name']: (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth']==1? $_SESSION['AUTH']['lastname']." ".$_SESSION['AUTH']['firstname']: "")).'">'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="rows-input">'."\n";
			$result .= '                                                    <label for="mail">Email</label>'."\n";
			$result .= '                                                    <input type="text" id="mail" name="email" value="'.(isset($_POST['email'])? $_POST['email']: (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth']==1? $_SESSION['AUTH']['email']: "")).'" >'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="rows-input">'."\n";
			$result .= '                                                    <label for="com">����� ���������</label>'."\n";
			$result .= '                                                    <textarea id="com" name="text">'.@$_POST['text'].'</textarea>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="boxed captcha">'."\n";
			$result .= '                                                    <div class="text-c">'."\n";
			$result .= '                                                        <img height="98" width="228" title="" alt="" src="/class/captcha.php">'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                    <div>'."\n";
			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <input type="text" id="captcha" name="captcha">'."\n";
			$result .= '                                                            <a onClick="document.getElementById(\'formProgramm\').submit()" class="button button-dark">'."\n";
			$result .= '                                                                <span>����������</span>'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                       </div>'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                                </form>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";
			return $result;
		}

		
		static function templateProgrammAll($listProgramm, $listSchool, $listBanners) {
			global $STATIC;
			$result  = "";

			$result .= '	                             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                        <div class="shadowed-light online-box boxed">'."\n";
			$result .= '                            <div class="border">'."\n";
			$result .= '                                <div class="inner-border">'."\n";
			$result .= '                            	<h3 class="title2line">'."\n";
			$result .= '                                        ���� ��������� '."\n";
			$result .= '                                    </h3>'."\n";
			$result .= '                                    <div class="our-programs boxed">'."\n";

			if (!empty($listProgramm) and count($listProgramm)>0) {
				foreach ($listProgramm as $p) {
					$result .= '                                	<div class="item-program">'."\n";
					$result .= '                                    	<a href="/programm/'.$p['id'].'">'."\n";
					$result .= '                                    	    <img src="/images/programm/'.$p['id'].'b.png" width="216" height="156" alt="" title="'.$p['name'].'" />'."\n";
					$result .= '                                            </a>'."\n";
					$result .= '                                        </div>'."\n";
				}
			}

			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '                        <div class="boxed mar-b10 autror-reg">'."\n";
			$result .= '                    	<div class="two-colums-left">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                          <h3 class="title2line">'."\n";
			$result .= '                                              �� ����������... '."\n";
			$result .= '                                          </h3>'."\n";
			$result .= '                                          <p>���������� �� ��������� �� ���� �� 30 ������������ ����� ���������� � ������� �D �� �����, �������, ������������ � ������ � �� �������.</p>'."\n";
			$result .= '                                          <p>555hf.tv - ��� ����������� ��������, ����� ������ ������� ��� ������� ������ ��� ��� ����, ����� ��������� ��� �������� ������, � ����� �����.</p>'."\n";
			$result .= '					  <p class="text-c">'."\n";
			$result .= '                                              <img src="/img/common/flags.png" width="357" height="31" alt="" title="" />'."\n";
			$result .= '                                          </p>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                            <div class="two-colums-right">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                    	<h3 class="title2line">'."\n";
			$result .= '                                                  ��� ������������'."\n";
			$result .= '                                              </h3>'."\n";
			$result .= '                                              <p><strong>���� �� ��� �� ����������������, �� �����������������.</strong></p>'."\n";
			$result .= '                                              <p>��� ����, ����� �� ����� �������� ��� ��������� 555hf.tv ��� ���������� ������ ���������� �����, ��� ���������� 500 ���/���.</p>'."\n";
			$result .= '					      <div class="text-c">'."\n";
			$result .= '                                                  <a class="button button-dark mar-t10 w-40" href="/reg">'."\n";
			$result .= '                                                     <span>������������������</span>'."\n";
			$result .= '                                                  </a>'."\n";
			$result .= '                                                  <a class="button button-dark mar-t10 w-40" href="/about">'."\n";
			$result .= '                                                     <span>��� � �����</span>'."\n";
			$result .= '                                                  </a>'."\n";
			$result .= '                                              </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '                        <div class="boxed equal-columns columns-3 mar-b10">'."\n";
			$result .= '                        <div class="right-back">'."\n";
			$result .= '                            <div class="content-back">'."\n";
			$result .= '                                <div class="left-back box-main-rating">'."\n";
			$result .= '                                    <div class="left-bar">'."\n";
			$result .= '                                	<div class="shadowed-light">'."\n";
			$result .= '                                            <div class="border">'."\n";
			$result .= '                                            <div class="inner-border">'."\n";
			$result .= '                                              <h3 class="title2line">'."\n";
			$result .= '                                                  ���������... '."\n";
			$result .= '                                              </h3>'."\n";

			if (!empty($listBanners) and count($listBanners)>0) {
				foreach ($listBanners as $banner) {
					if ($banner['url'] != "") 
						$result .= '                            	<a href="'.$banner['url'].'" '.(strpos($banner['url'], "555hf.tv")!==false? "": "target=\"_blank\"").'><img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" /></a>'."\n";
					else
						$result .= '                            	<img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" />'."\n";
					$result .= '                                <BR/>'."\n";
				}
			}



#			$result .= '					      <a href="/shop">'."\n";
#			$result .= '                                                <img src="/img/other/13.png" width="263" height="120" alt="" title="" />'."\n";
#			$result .= '                                              </a>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                       </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                    <div class="center-bar">'."\n";
			$result .= '                                	<div class="shadowed-light">'."\n";
			$result .= '                                            <div class="border">'."\n";
			$result .= '                                            <div class="inner-border">'."\n";
			$result .= '                                              <h3 class="title2line">'."\n";
			$result .= '                                                  ������ 555hf.tv'."\n";
			$result .= '                                              </h3>'."\n";
			$result .= '					      <ul>'."\n";
			if (!empty($listSchool) and count($listSchool)>0) {
				foreach ($listSchool as $school) {
					$result .= '                                                <li class="boxed mar-b25">'."\n";
					$result .= '                                            	<span>'."\n";
					$result .= '                                                	<img src="/images/articles/'.$school['id'].'n.jpg" width="160" alt="" title="" />'."\n";
					$result .= '                                                    </span>'."\n";
					$result .= '                                                    <p><a href="/blog/'.$school['id'].'">'.strip_tags(stripslashes($school['name'])).'</a><br />'."\n";
					$result .= '                                                    '.substr(strip_tags(stripslashes($school['text'])), 0, 100).'...</p>'."\n";
					$result .= '                                                </li>'."\n";
break; // ����� ��� ����
				}
			}

			$result .= '                                              </ul>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                       </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                    <div class="right-bar">'."\n";
			$result .= '                                	<div class="shadowed-light">'."\n";
			$result .= '                                            <div class="border">'."\n";
			$result .= '                                            <div class="inner-border">'."\n";
			$result .= '                                              <h3 class="title2line">'."\n";
			$result .= '                                                  ����� ������... '."\n";
			$result .= '                                              </h3>'."\n";
			$result .= '<div align="center">';
			$result .= '					      <a href="/video/'.$STATIC['id_video_month'].'">'."\n";
                        $result .= '                                                <img src="/images/video/'.$STATIC['id_video_month'].'.png" width="265" height="170" alt="" title="" />'."\n";
#			$result .= '                                                <img src="/images/video/'.$STATIC['id_video_month'].'.png" width="241" height="157" alt="" title="" />'."\n";
#			$result .= '                                                <img src="/images/video/'.$STATIC['id_video_month'].'.png" width="196" height="120" alt="" title="" />'."\n";
			$result .= '                                              </a>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                       </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '                    </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}


		static function selection_basket() {
			$result = "";

			$result .= '<div id="my_selection"></div>'."\n";
			$result .= '<div id="my_basket"></div>';
			$result .= '<script>listBasket();listSelection();</script>';

			return $result;
		}



		static function templateCabinet($listProgramm, $otherData) {
			global $STATIC;

			$result  = "";
			$result .= '	<div id="third_left">'."\n";

			$result .= '<div class="cabinetLeft">'."\n";
			$result .= '<div class="caption">�������</div>'."\n";
			$result .= '<p><B>������������:</B> '.$_SESSION['AUTH']['login']."</p>\n";
			$result .= '<p><B>������ �����:</B> '.$_SESSION['AUTH']['money']." ���.</p>\n";
			$datetimepay = $_SESSION['AUTH']['datetimepay']-time();
			if ($datetimepay < 0) $datetimepay = 0; else $datetimepay = floor($datetimepay/60/60/24);
			$countMonth = floor($_SESSION['AUTH']['money']/$STATIC['abonplata']);
			if ($countMonth > 0) {
			    $startDate	= date("Y-m-01 00:00:00", strtotime("NOW +1 month"));
			    $endDate	= date("Y-m-t 23:59:59", strtotime("{$startDate} +".($countMonth-1)."month"));
			    $datetimepay += floor((strtotime($endDate)-strtotime($startDate))/60/60/24);
			}
			$result .= '<p><B>�������� ����:</B> '.$datetimepay."</p>\n";
			$result .= '<p><B>������:</B> '.($datetimepay>0? "�������": "�� �������")."</p>\n";
			$result .= '<p class="p10"><a href="/view/">�������� 555hf.tv</a></p>'."\n";
			$result .= '<p class="p10"></p>'."\n";
			
			$result .= '</div>'."\n";

#			$result .= viewTemplate::selection_basket();

			if (!empty($listProgramm) and count($listProgramm)>0) {
				$result .= '		<div id="second_other_prog">'."\n";
				$result .= '			<div id="second_other_prog_top">���������:</div>'."\n";

				foreach ($listProgramm as $key=>$p) {
					$result .= '			<a href="/programm/'.$p['id'].'">'.$p['name'].'</a>';
					if ($key != count($listProgramm)-1)
						$result .= '					<div class="second_other_prog_razdel"></div>'."\n";
				}
				
				$result .= '			<div id="second_other_prog_bottom"></div>'."\n";
				$result .= '		</div>'."\n";
				$result .= '		<div class="clear"></div>'."\n";
			}
		
			$result .= '		</div>'."\n";
	
			$result .= '	<div id="third_right">'."\n";
			$result .= '		<div id="second_left">'."\n";
			$result .= '			<div id="third_right_top">'."\n";
			$result .= '				<div class="first" id="third_podborki_active"><a href="/view" class="third_vse_video">�����</a></div>'."\n";
                        $result .= '                            <div class="inside"><a href="/online" class="third_prog">������ �������</a></div>'."\n";
                        $result .= '                            <div class="inside"><a href="/view/programm" class="third_podborki">��������</a></div>'."\n";
			$result .= '				<div class="inside"><a href="/view/story" class="third_syuzhet">������</a></div>'."\n";
			$result .= '				<div class="last"><a href="/view/shop" class="third_telemagazin">������� ������</a></div>'."\n";
			$result .= '			</div>'."\n";
			$result .= '<div class="cabinetCenter">';
			$result .= '<div style="position: relative; float: right;"><a href="/login2/edit/">�������� �������</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onClick="changePass()">�������� ������</a></div>';
			$result .= '<div class="caption">�������</div>';
			$result .= '<div class="hr"></div>';
			$result .= '<p><B>���:</B> '.$_SESSION['AUTH']['firstname']." ".$_SESSION['AUTH']['lastname']."</p>\n";
			$result .= '<p><B>Email:</B> '.$_SESSION['AUTH']['email']."</p>\n";
			$result .= '<p><B>�����:</B> '.$otherData['city']."</p>\n";
			$result .= '<p class="p30"></p>'."\n";

			$result .= '<div class="caption">�������� ��������� �����</div>';
			$result .= '<div class="hr"></div>';

			$result .= '<p>� ����������� �� �������� ������ ����������� � ��������� �� ������ �������, � ����� �������� �������� ���� ��������� �� ���������</p>'."\n";
			$result .= '<form id="qualityForm" onSubmit="return false;" enctype="multipart/form-data">'."\n";
			$result .= '<p><input type="radio" name="quality" value="hd720" id="hd720" '.($_SESSION['AUTH']['quality'] == "hd720"? "CHECKED": "").'> <label for="hd720">720 HD - ������� �������� (��������� �������� ��������� 2.5 ����/���)</label></p>'."\n";
			$result .= '<p><input type="radio" name="quality" value="hd" id="hd" '.($_SESSION['AUTH']['quality'] == "hd"? "CHECKED": "").'> <label for="hd">HD - ������� �������� (��������� �������� ��������� 1 ����/���)</label></p>'."\n";
			$result .= '<p><input type="radio" name="quality" value="sd" id="sd" '.($_SESSION['AUTH']['quality'] == "sd"? "CHECKED": "").'> <label for="sd">SD - ������ �������� (��������� �������� ��������� 512 ����/���)</label></p>'."\n";
			$result .= '<p><input type="image" src="/images/save.gif" onClick="saveQuality()"></p></form>'."\n";
			$result .= '<p class="p30"></p>'."\n";

			$result .= '<div class="caption">������</div>';
			$result .= '<div class="hr"></div>';
			$result .= '<p>���� � ��� ��� ����������� ����������� ��� �����, �� ������ ��������������� ����������� ������� ���������, ������ � ��� ���� ���������, ���� �� �� ��������, ��� ���� ������������ ��������� ������ ��������� �����, � ����� ���������� ������� ��� ������ ����������� �, ����������, ��� ������.</p>'."\n";
			$result .= '<p><a href="">�������� ��������� �� �����: '.$STATIC['abonplata'].' ���.</a></p>'."\n";
			$result .= '<p class="p30"></p>'."\n";

			$result .= '<div class="caption">������� ������</div>';
			$result .= '<div class="hr"></div>';
			$result .= '<p class="oplata"><a href="#">������ ��������</a></p>'."\n";
			$result .= '<p class="oplata"><a href="#">������ ���������� ������� ����� ��������� ������� CyberPlat</a></p>'."\n";
			$result .= '<p class="oplata"><a href="#">������ ����� ��������� ������� WebMoney</a></p>'."\n";
			$result .= '<p class="oplata"><a href="#">������ ����� ��������� ������� ������.������</a></p>'."\n";
			$result .= '<p class="oplata"><a href="#">������ ����� ��������� ������� RBK money</a></p>'."\n";
			$result .= '<p class="oplata"><a href="#">������ ����� ��������� ������� MoneyMail</a></p>'."\n";
			$result .= '<p class="p30"></p>'."\n";

			$result .= '</div>';

			$result .= '			<div class="clear"></div>'."\n";
			$result .= '		<div id="second_left_bottom"></div></div>'."\n";
			$result .= '	</div>'."\n";
	
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";

			return $result;
		}



		static function templateView($listProgramm, $listVideo, $listBanners, $page, $count, $all) {
		    global $pmaxnum;
			$result  = "";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '            	    <div class="boxed mar-b10">'."\n";
			$result .= '                            <div class="left-menu big-menu">'."\n";

#			$result .= viewTemplate::selection_basket();

			if (!empty($listProgramm) and count($listProgramm)>0) {
				$result .= '                                <div class="shadowed-dark big-menu">'."\n";
				$result .= '                                    <div class="border">'."\n";
				$result .= '                                        <div class="inner-border">'."\n";
				$result .= '                                    	<h3 class="title2line">'."\n";
				$result .= '                                                ���������'."\n";
				$result .= '                                            </h3>'."\n";
				$result .= '                                            <ul>'."\n";

				foreach ($listProgramm as $key=>$p) {
					$result .= '                                                <li>'."\n";
					$result .= '                                                    <a href="/programm/'.$p['id'].'">'."\n";
					$result .= '                                                        '.stripslashes($p['name'])."\n";
					$result .= '                                                  </a>'."\n";
					$result .= '                                                </li>'."\n";
				}
				
				$result .= '                                            </ul>'."\n";
				$result .= '                                        </div>'."\n";
				$result .= '                                    </div>'."\n";
				$result .= '                                </div>'."\n";
			}

			$result .= '                                <div class="banners-video">'."\n";
			if (!empty($listBanners) and count($listBanners)>0) {
				foreach ($listBanners as $banner) {
					$result .= '                        	<div class="mar-b10">'."\n";
					if ($banner['url'] != "") 
						$result .= '                            	<a href="'.$banner['url'].'" '.(strpos($banner['url'], "555hf.tv")!==false? "": "target=\"_blank\"").'><img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" /></a>'."\n";
					else
						$result .= '                            	<img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" />'."\n";
					$result .= '                                </div>'."\n";
				}
			}
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                            <div class="video-roz">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                    	<h3 class="title2line">'."\n";
			$result .= '                                                ��� ����� �� 555hf.tv'."\n";
			$result .= '                                            </h3>'."\n";
			$result .= '                                            <div>'."\n";
			$result .= '                                               <div class="tabs-bar">'."\n";
			$result .= '                                                    <ul class="tabs-video boxed">'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light select" href="/view">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>��� �����'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view/new">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>����� �����'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                         <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view/advice">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view/story">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view/shop">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>�����������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                    </ul>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                              <div class="jornal-list">'."\n";
			$result .= '                                                <div class="mar-b-20 boxed">'."\n";

			if (!empty($listVideo) and count($listVideo)>0) {
				foreach ($listVideo as $video) {
					$result .= '                                                  <div class="item-video">'."\n";
					$result .= '                                                      <h5 class="program-title">'.strip_tags(stripslashes($video['name'])).'</h5>'."\n";
					$result .= '                                                      <div>'."\n";
					$result .= '                                                        <div class="prw-video">'."\n";
					$result .= '                                                                <a href="/video/'.$video['id'].'"><i class="shadow-video"></i>'."\n";
					$result .= '                                                                <span class="play-btn"></span>'."\n";
					$result .= '                                                                <img height="120" width="196" alt="'.strip_tags(stripslashes($video['name'])).'" title="'.strip_tags(stripslashes($video['name'])).'" src="/images/video/'.$video['id'].'.jpg"></a>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                        <div class="bar-video">'."\n";
					$result .= '                                                    	<p class="date">'.($video['is_preparing']==1? "��������� � �������": date("d.m.Y", $video['datetime'])).'</p>'."\n";
					$result .= '                                                    	<h5 class="titleoneline">'."\n";
					$result .= '                                                                <a href="/programm/'.$video['id_typeprogramm'].'">'."\n";
					$result .= '                                                                    '.stripslashes($video['nameType'])."\n";
					$result .= '                                                                </a>'."\n";
					$result .= '                                                            </h5>'."\n";
					$result .= '                                                            <p class="descr-video">'."\n";
					$result .= '                                                        	'.substr(strip_tags(stripslashes($video['text'])), 0, 130).'...'."\n";
					$result .= '                                                            </p>'."\n";
					$result .= '                                                           <div class="button button-dark panel">'."\n";
					$result .= '                                                              <p>'."\n";
					if ($video['id_typevideo'] != "") {
						$id_typevideo = split(",", $video['id_typevideo']);
						if (!empty($id_typevideo) and in_array("trailer", $id_typevideo)!==false)
							$result .= '					<a href="/trailer/'.$video['id'].'" title="�������">�������</a>'."\n";
					}
					$result .= '					<a href="/video/'.$video['id'].'" title="��������">��������</a>'."\n";
					$result .= ' <a onClick="addSelection('.$video['id'].')" title="�������� � ��������">� ��������</a>'."\n";

					$result .= '</p>'."\n";
					$result .= '                                                          </div>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                      </div>'."\n";
					$result .= '                                                  </div>'."\n";
				}
			}

			$result .= '                                                  </div>'."\n";

			if ($all > $count) {
				$result .= '                                                <div class="pager">'."\n";
				$result .= '                                                  <div class="page">'."\n";
/*
                                if ($page != 0)
                                        $result .= '<a href="/view/'.($page-1).'">����������</a> '."\n";
                                else
                                        $result .= '<a>����������</a> '."\n";
                                for ($i = 0; $i < ceil($all/$count); $i++)
					if ($i == $page) 
                                            $result .= '<span>'.($i+1).'</span> '."\n";
					else
                                            $result .= '<a href="/view/'.$i.'">'.($i+1).'</a> '."\n";

                                if ($page+1 < ceil($all/$count))
                                        $result .= '<a href="/view/'.($page+1).'">���������</a> '."\n";
                                else
                                        $result .= '<a>���������</a> '."\n";
*/
				$result .=pager_num($all,$count, $page);
				$result .= '                                               </div>'."\n";
				$result .= '                                               </div>'."\n";
			}

			$result .= '                                              </div>'."\n";
			$result .= '                                          </div>'."\n";
			$result .= '                                      </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}

		static function templateSelection($listProgramm, $listVideo) {
			$result  = "";
			$result .= '	<div id="third_left">'."\n";

#			$result .= viewTemplate::selection_basket();

			if (!empty($listProgramm) and count($listProgramm)>0) {
				$result .= '		<div id="second_other_prog">'."\n";
				$result .= '			<div id="second_other_prog_top">���������:</div>'."\n";

				foreach ($listProgramm as $key=>$p) {
					$result .= '			<a href="/programm/'.$p['id'].'">'.$p['name'].'</a>';
					if ($key != count($listProgramm)-1)
						$result .= '					<div class="second_other_prog_razdel"></div>'."\n";
				}
				
				$result .= '			<div id="second_other_prog_bottom"></div>'."\n";
				$result .= '		</div>'."\n";
				$result .= '		<div class="clear"></div>'."\n";
			}
		
			$result .= '		<div class="line"></div>'."\n";
			#$result .= '				<div class="count_video_new"><p>145</p></div>'."\n";
			$result .= '				<div class="count_video_new"><p><img style="margin-left:8px; margin-top:10px;" src="/images/count.png"></p></div>'."\n";
			$result .= '		<a href="/"><img src="/images/banner-web.gif" alt="" /></a><BR/>'."\n";
			if (!isset($_SESSION['AUTH']['auth']) || (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth'] !== 1)) {
				$result .= '		<div id="tv_buttons">'."\n";
				$result .= '			<a href="/account/"><img src="/images/voyti.png" alt="" /></a>'."\n";
				$result .= '			<a href="/reg"><img src="/images/podlyuch.png" alt="" /></a>'."\n";
				$result .= '			<div class="clear"></div>'."\n";
				$result .= '		</div>'."\n";
			}
		
			$result .= '		<div class="line"></div>'."\n";

			$result .= '		<a href="/viewtv" title="�������� ���� ��������� �� ����� ����������"><img src="/images/televizor.png" alt="" /></a>'."\n";
			$result .= '		<div class="line"></div>'."\n";
			$result .= '		<a href="/recommend" title="���������� �������"><img src="/images/rekomend.png" alt="" /></a>'."\n";
			$result .= '		<div class="line"></div>'."\n";
#			$result .= '		<a href="/test" title="���� ������"><img src="/images/test2.jpg" alt="" /></a>'."\n";
			$result .= '		<a onClick="messageBox(\'������ ����� �������� 1 �������\')" title="���� ������"><img src="/images/test2.jpg" alt="" /></a>'."\n";
			$result .= '		<div class="line"></div>'."\n";
			$result .= '		<a href="/contest" title="�������"><img src="/images/konk.jpg" alt="" /></a>'."\n";
			$result .= '		</div>'."\n";
	
			$result .= '	<div id="third_right">'."\n";
			$result .= '		<div id="second_left">'."\n";

			if (!empty($listVideo) and count($listVideo)>0) {
				foreach ($listVideo as $video) {
					$result .= '			<div class="second_box">'."\n";
					$result .= '				<div class="second_box_top"><p><strong>'.$video['name'].'</strong></p><span>'.($video['is_preparing']==1? "��������� � �������": date("d.m.Y", $video['datetime'])).'</span></div>'."\n";
					$result .= '				<div class="second_box_foto"><img src="/images/selection/'.$video['id'].'.png" alt="" /></div>'."\n";
					$result .= '				<div class="second_box_mini">'."\n";
#					$result .= '					<p>'."\n";
					$result .= '					<div style="float: right; position: relative;">['.($video['time'] / 60 > 1? floor($video['time'] / 60)." ��� ": "").($video['time'] % 60 > 0? ($video['time'] % 60)." ���": "").']</div>'."\n";
//					$result .= '					<span><B>'.str_replace("<BR/>", " ", $video['name']).'</B></span>'."\n";
					$result .= '					<span>'.substr(strip_tags(stripslashes($video['text'])), 0, 130).'...</span><br />'."\n";
					$result .= '					<div class="clear"></div>'."\n";
//					$result .= '					<a href="/programm/'.$video['id_typeprogramm'].'" class="second_box_a">��������� � ���������</a>'."\n";
					$result .= '					<BR/><a href="/selection/'.$video['id'].'" title="��������"><img src="/images/prog2_smotr.gif" alt="" class="second_box_button" /></a>'."\n";
					$result .= '				</div>'."\n";
					$result .= '				<div class="clear"></div>'."\n";
					$result .= '			<div class="second_box_bottom"></div></div>'."\n";
					$result .= '			<div class="prog2_line"></div>'."\n";
				}
			}
			else
			    $result .= '<div style="text-align: center">�������� �������� �����������</div>';

			$result .= '			<div class="clear"></div>'."\n";
			$result .= '		<div id="second_left_bottom"></div></div>'."\n";
			$result .= '	</div>'."\n";
	
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";

			return $result;
		}


		static function templateShop($listProgramm, $goods) {
			$result  = "";
			$result .= '	<div id="third_left">'."\n";

#		        $result .= viewTemplate::selection_basket();

			if (!empty($listProgramm) and count($listProgramm)>0) {
				$result .= '		<div id="second_other_prog">'."\n";
				$result .= '			<div id="second_other_prog_top">���������:</div>'."\n";

				foreach ($listProgramm as $key=>$p) {
					$result .= '			<a href="/programm/'.$p['id'].'">'.$p['name'].'</a>';
					if ($key != count($listProgramm)-1)
						$result .= '					<div class="second_other_prog_razdel"></div>'."\n";
				}
				
				$result .= '			<div id="second_other_prog_bottom"></div>'."\n";
				$result .= '		</div>'."\n";
				$result .= '		<div class="clear"></div>'."\n";
			}
		
			$result .= '		<div class="line"></div>'."\n";
			#$result .= '				<div class="count_video_new"><p>145</p></div>'."\n";
			$result .= '				<div class="count_video_new"><p><img style="margin-left:8px; margin-top:10px;" src="/images/count.png"></p></div>'."\n";
			$result .= '		<a href="/"><img src="/images/banner-web.gif" alt="" /></a><BR/>'."\n";
			if (!isset($_SESSION['AUTH']['auth']) || (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth'] !== 1)) {
				$result .= '		<div id="tv_buttons">'."\n";
				$result .= '			<a href="/account/"><img src="/images/voyti.png" alt="" /></a>'."\n";
				$result .= '			<a href="/reg"><img src="/images/podlyuch.png" alt="" /></a>'."\n";
				$result .= '			<div class="clear"></div>'."\n";
				$result .= '		</div>'."\n";
			}
		
			$result .= '		<div class="line"></div>'."\n";

		
			$result .= '		<a href="/viewtv" title="�������� ���� ��������� �� ����� ����������"><img src="/images/televizor.png" alt="" /></a>'."\n";
			$result .= '		<div class="line"></div>'."\n";
			$result .= '		<a href="/recommend" title="���������� �������"><img src="/images/rekomend.png" alt="" /></a>'."\n";
			$result .= '		<div class="line"></div>'."\n";
#			$result .= '		<a href="/test" title="���� ������"><img src="/images/test2.jpg" alt="" /></a>'."\n";
			$result .= '		<a onClick="messageBox(\'������ ����� �������� 1 �������\')" title="���� ������"><img src="/images/test2.jpg" alt="" /></a>'."\n";
			$result .= '		<div class="line"></div>'."\n";
			$result .= '		<a href="/contest" title="�������"><img src="/images/konk.jpg" alt="" /></a>'."\n";
			$result .= '		</div>'."\n";
	
			$result .= '	<div id="third_right">'."\n";
			$result .= '		<div id="second_left">'."\n";

			if (!empty($goods) and count($goods)>0) {
				foreach ($goods as $video) {
					$result .= '			<div class="second_box">'."\n";
					$result .= '				<div class="second_box_top"><p><strong>'.$video['name'].'</strong></p><span>'.$video['price'].' ���.</span></div>'."\n";
					$result .= '				<div class="second_box_foto"><img src="/images/shop/'.$video['id'].'.png" alt="" /></div>'."\n";
					$result .= '				<div class="second_box_mini">'."\n";
#					$result .= '					<p>'."\n";
#					$result .= '					<div style="float: right; position: relative;">['.($video['time'] / 60 > 0? ceil($video['time'] / 60)." ��� ": "").($video['time'] % 60 > 0? ($video['time'] % 60)." ���": "").']</div>'."\n";
#					$result .= '					<span><B>'.str_replace("<BR/>", " ", $video['name']).'</B></span>'."\n";
					$result .= '					<p>'.substr(strip_tags(stripslashes($video['text'])), 0, 130).'...</p><br />'."\n";
					$result .= '					<div class="clear"></div>'."\n";
					$result .= '					<a onClick="addBasket('.$video['id'].')" class="second_box_a">� �������</a>'."\n";
					$result .= '					<a href="/shop/'.$video['id'].'" title="��������"><img src="/images/prog2_smotr.gif" alt="" class="second_box_button" /></a>'."\n";
					$result .= '				</div>'."\n";
					$result .= '				<div class="clear"></div>'."\n";
					$result .= '			<div class="second_box_bottom"></div></div>'."\n";
					$result .= '			<div class="prog2_line"></div>'."\n";
				}
			}
			else
			    $result .= '<div style="text-align: center">����� �������� �����������</div>';

			$result .= '			<div class="clear"></div>'."\n";
			$result .= '		<div id="second_left_bottom"></div></div>'."\n";
			$result .= '	</div>'."\n";
	
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";

			return $result;
		}


		static function templateShopCalc($listProgramm) {
			$result  = "";
			$result .= '	<div id="third_left">'."\n";

#		        $result .= viewTemplate::selection_basket();

			if (!empty($listProgramm) and count($listProgramm)>0) {
				$result .= '		<div id="second_other_prog">'."\n";
				$result .= '			<div id="second_other_prog_top">���������:</div>'."\n";

				foreach ($listProgramm as $key=>$p) {
					$result .= '			<a href="/programm/'.$p['id'].'">'.$p['name'].'</a>';
					if ($key != count($listProgramm)-1)
						$result .= '					<div class="second_other_prog_razdel"></div>'."\n";
				}
				
				$result .= '			<div id="second_other_prog_bottom"></div>'."\n";
				$result .= '		</div>'."\n";
				$result .= '		<div class="clear"></div>'."\n";
			}
		
			$result .= '		<div class="line"></div>'."\n";
			#$result .= '				<div class="count_video_new"><p>145</p></div>'."\n";
			$result .= '				<div class="count_video_new"><p><img style="margin-left:8px; margin-top:10px;" src="/images/count.png"></p></div>'."\n";
			$result .= '		<a href="/"><img src="/images/banner-web.gif" alt="" /></a><BR/>'."\n";
			if (!isset($_SESSION['AUTH']['auth']) || (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth'] !== 1)) {
				$result .= '		<div id="tv_buttons">'."\n";
				$result .= '			<a href="/account/"><img src="/images/voyti.png" alt="" /></a>'."\n";
				$result .= '			<a href="/reg"><img src="/images/podlyuch.png" alt="" /></a>'."\n";
				$result .= '			<div class="clear"></div>'."\n";
				$result .= '		</div>'."\n";
			}
		
			$result .= '		<div class="line"></div>'."\n";

		
			$result .= '		<a href="/viewtv" title="�������� ���� ��������� �� ����� ����������"><img src="/images/televizor.png" alt="" /></a>'."\n";
			$result .= '		<div class="line"></div>'."\n";
			$result .= '		<a href="/recommend" title="���������� �������"><img src="/images/rekomend.png" alt="" /></a>'."\n";
			$result .= '		<div class="line"></div>'."\n";
#			$result .= '		<a href="/test" title="���� ������"><img src="/images/test2.jpg" alt="" /></a>'."\n";
			$result .= '		<a onClick="messageBox(\'������ ����� �������� 1 �������\')" title="���� ������"><img src="/images/test2.jpg" alt="" /></a>'."\n";
			$result .= '		<div class="line"></div>'."\n";
			$result .= '		<a href="/contest" title="�������"><img src="/images/konk.jpg" alt="" /></a>'."\n";
			$result .= '		</div>'."\n";
	
			$result .= '	<div id="third_right">'."\n";
			$result .= '		<div id="second_left">'."\n";

			$result .= '<table border="0" cellpadding="3" cellspacing="3" width="100%">';
			$result .= '<tr><td align="right">������� � ���:</td><td><input type="text" name="fio" value="'.(isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth']==1? $_SESSION['AUTH']['lastname']." ".$_SESSION['AUTH']['firstname']: "").'"></td></tr>';
			$result .= '<tr><td align="right">����� ��������:</td><td><input type="text" name="address" value=""></td></tr>';
			$result .= '<tr valign="top"><td align="right">������ ��������:</td><td>';
			    $result .= '<input type="radio" name="dostavka" value="�������� ���������" id="post" CHECKED> <label for="post">�������� ���������</label><BR/>';
			    $result .= '<input type="radio" name="dostavka" value="�������� � ������" id="kurier"> <label for="kurier">�������� � ������</label><BR/>';
			    $result .= '<input type="radio" name="dostavka" value="�������� ��������" id="express"> <label for="express">�������� ��������</label>';
			$result .= '</td></tr>';
			$result .= '</table>';

			$result .= '			<div class="clear"></div>'."\n";
			$result .= '		<div id="second_left_bottom"></div></div>'."\n";
			$result .= '	</div>'."\n";
	
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";

			return $result;
		}


		static function templateViewStory($listProgramm, $listVideo, $listBanners, $page, $count, $all) {
			$result  = "";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '            	    <div class="boxed mar-b10">'."\n";
			$result .= '                            <div class="left-menu big-menu">'."\n";

#			$result .= viewTemplate::selection_basket();

			if (!empty($listProgramm) and count($listProgramm)>0) {
				$result .= '                                <div class="shadowed-dark big-menu">'."\n";
				$result .= '                                    <div class="border">'."\n";
				$result .= '                                        <div class="inner-border">'."\n";
				$result .= '                                    	<h3 class="title2line">'."\n";
				$result .= '                                                ���������'."\n";
				$result .= '                                            </h3>'."\n";
				$result .= '                                            <ul>'."\n";

				foreach ($listProgramm as $key=>$p) {
					$result .= '                                                <li>'."\n";
					$result .= '                                                    <a href="/programm/'.$p['id'].'">'."\n";
					$result .= '                                                        '.stripslashes($p['name'])."\n";
					$result .= '                                                  </a>'."\n";
					$result .= '                                                </li>'."\n";
				}
				
				$result .= '                                            </ul>'."\n";
				$result .= '                                        </div>'."\n";
				$result .= '                                    </div>'."\n";
				$result .= '                                </div>'."\n";
			}

			$result .= '                                <div class="banners-video">'."\n";
			if (!empty($listBanners) and count($listBanners)>0) {
				foreach ($listBanners as $banner) {
					$result .= '                        	<div class="mar-b10">'."\n";
					if ($banner['url'] != "") 
						$result .= '                            	<a href="'.$banner['url'].'" '.(strpos($banner['url'], "555hf.tv")!==false? "": "target=\"_blank\"").'><img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" /></a>'."\n";
					else
						$result .= '                            	<img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" />'."\n";
					$result .= '                                </div>'."\n";
				}
			}
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                            <div class="video-roz">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                    	<h3 class="title2line">'."\n";
			$result .= '                                               ������ �� 555hf.tv'."\n";
			$result .= '                                            </h3>'."\n";
			$result .= '                                            <div>'."\n";
			$result .= '                                               <div class="tabs-bar">'."\n";
			$result .= '                                                    <ul class="tabs-video boxed">'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>��� �����'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view/new">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>����� �����'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                         <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view/advice">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light select" href="/view/story">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view/shop">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>�����������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                    </ul>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                              <div class="jornal-list">'."\n";
			$result .= '                                                <div class="mar-b-20 boxed">'."\n";

			if (!empty($listVideo) and count($listVideo)>0) {
				foreach ($listVideo as $video) {
					$result .= '                                                  <div class="item-video">'."\n";
					$result .= '                                                      <h5 class="program-title">'.strip_tags(stripslashes($video['name'])).'</h5>'."\n";
					$result .= '                                                      <div>'."\n";
					$result .= '                                                        <div class="prw-video">'."\n";
					$result .= '                                                                <a href="/video/'.$video['id'].'"><i class="shadow-video"></i>'."\n";
					$result .= '                                                                <span class="play-btn"></span>'."\n";
					$result .= '                                                                <img height="120" width="196" alt="'.strip_tags(stripslashes($video['name'])).'" title="'.strip_tags(stripslashes($video['name'])).'" src="/images/video/'.$video['id'].'.jpg"></a>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                        <div class="bar-video">'."\n";
					$result .= '                                                    	<p class="date">'.($video['is_preparing']==1? "��������� � �������": date("d.m.Y", $video['datetime'])).'</p>'."\n";
					$result .= '                                                    	<h5 class="titleoneline">'."\n";
					$result .= '                                                                <a href="/programm/'.$video['id_typeprogramm'].'">'."\n";
					$result .= '                                                                    '.stripslashes($video['nameType'])."\n";
					$result .= '                                                                </a>'."\n";
					$result .= '                                                            </h5>'."\n";
					$result .= '                                                            <p class="descr-video">'."\n";
					$result .= '                                                        	'.substr(strip_tags(stripslashes($video['text'])), 0, 130).'...'."\n";
					$result .= '                                                            </p>'."\n";
					$result .= '                                                           <div class="button button-dark panel">'."\n";
					$result .= '                                                              <p>'."\n";
					if ($video['id_typevideo'] != "") {
						$id_typevideo = split(",", $video['id_typevideo']);
						if (!empty($id_typevideo) and in_array("trailer", $id_typevideo)!==false)
							$result .= '					<a href="/trailer/'.$video['id'].'" title="�������">�������</a>'."\n";
					}
					$result .= '					<a href="/video/'.$video['id'].'" title="��������">��������</a>'."\n";
					$result .= ' <a onClick="addSelection('.$video['id'].')" title="�������� � ��������">� ��������</a>'."\n";

					$result .= '</p>'."\n";
					$result .= '                                                          </div>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                      </div>'."\n";
					$result .= '                                                  </div>'."\n";
				}
			}

			$result .= '                                                  </div>'."\n";

			if ($all > $count) {
				$result .= '                                                <div class="pager">'."\n";
				$result .= '                                                  <div class="page">'."\n";
/*
                                if ($page != 0)
                                        $result .= '<a href="/view/story/'.($page-1).'">����������</a> '."\n";
                                else
                                        $result .= '<a>����������</a> '."\n";
                                for ($i = 0; $i < ceil($all/$count); $i++)
					if ($i == $page) 
                                            $result .= '<span>'.($i+1).'</span> '."\n";
					else
                                            $result .= '<a href="/view/story/'.$i.'">'.($i+1).'</a> '."\n";

                                if ($page+1 < ceil($all/$count))
                                        $result .= '<a href="/view/story/'.($page+1).'">���������</a> '."\n";
                                else
                                        $result .= '<a>���������</a> '."\n";
*/
                                $result .=pager_num($all,$count, $page, "view/story");
				$result .= '                                               </div>'."\n";
				$result .= '                                               </div>'."\n";
			}
			$result .= '                                              </div>'."\n";
			$result .= '                                          </div>'."\n";
			$result .= '                                      </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}

		static function templateViewAdvice($listProgramm, $listVideo, $listBanners, $page, $count, $all) {
			$result  = "";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '            	    <div class="boxed mar-b10">'."\n";
			$result .= '                            <div class="left-menu big-menu">'."\n";

#			$result .= viewTemplate::selection_basket();

			if (!empty($listProgramm) and count($listProgramm)>0) {
				$result .= '                                <div class="shadowed-dark big-menu">'."\n";
				$result .= '                                    <div class="border">'."\n";
				$result .= '                                        <div class="inner-border">'."\n";
				$result .= '                                    	<h3 class="title2line">'."\n";
				$result .= '                                                ���������'."\n";
				$result .= '                                            </h3>'."\n";
				$result .= '                                            <ul>'."\n";

				foreach ($listProgramm as $key=>$p) {
					$result .= '                                                <li>'."\n";
					$result .= '                                                    <a href="/programm/'.$p['id'].'">'."\n";
					$result .= '                                                        '.stripslashes($p['name'])."\n";
					$result .= '                                                  </a>'."\n";
					$result .= '                                                </li>'."\n";
				}
				
				$result .= '                                            </ul>'."\n";
				$result .= '                                        </div>'."\n";
				$result .= '                                    </div>'."\n";
				$result .= '                                </div>'."\n";
			}

			$result .= '                                <div class="banners-video">'."\n";
			if (!empty($listBanners) and count($listBanners)>0) {
				foreach ($listBanners as $banner) {
					$result .= '                        	<div class="mar-b10">'."\n";
					if ($banner['url'] != "") 
						$result .= '                            	<a href="'.$banner['url'].'" '.(strpos($banner['url'], "555hf.tv")!==false? "": "target=\"_blank\"").'><img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" /></a>'."\n";
					else
						$result .= '                            	<img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" />'."\n";
					$result .= '                                </div>'."\n";
				}
			}
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                            <div class="video-roz">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                    	<h3 class="title2line">'."\n";
			$result .= '                                                ������ �� 555hf.tv'."\n";
			$result .= '                                            </h3>'."\n";
			$result .= '                                            <div>'."\n";
			$result .= '                                               <div class="tabs-bar">'."\n";
			$result .= '                                                    <ul class="tabs-video boxed">'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>��� �����'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view/new">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>����� �����'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                         <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light select" href="/view/advice">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view/story">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view/shop">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>�����������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                    </ul>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                              <div class="jornal-list">'."\n";
			$result .= '                                                <div class="mar-b-20 boxed">'."\n";

			if (!empty($listVideo) and count($listVideo)>0) {
				foreach ($listVideo as $video) {
					$result .= '                                                  <div class="item-video">'."\n";
					$result .= '                                                      <h5 class="program-title">'.strip_tags(stripslashes($video['name'])).'</h5>'."\n";
					$result .= '                                                      <div>'."\n";
					$result .= '                                                        <div class="prw-video">'."\n";
					$result .= '                                                                <a href="/video/'.$video['id'].'"><i class="shadow-video"></i>'."\n";
					$result .= '                                                                <span class="play-btn"></span>'."\n";
					$result .= '                                                                <img height="120" width="196" alt="'.strip_tags(stripslashes($video['name'])).'" title="'.strip_tags(stripslashes($video['name'])).'" src="/images/video/'.$video['id'].'.jpg"></a>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                        <div class="bar-video">'."\n";
					$result .= '                                                    	<p class="date">'.($video['is_preparing']==1? "��������� � �������": date("d.m.Y", $video['datetime'])).'</p>'."\n";
					$result .= '                                                    	<h5 class="titleoneline">'."\n";
					$result .= '                                                                <a href="/programm/'.$video['id_typeprogramm'].'">'."\n";
					$result .= '                                                                    '.stripslashes($video['nameType'])."\n";
					$result .= '                                                                </a>'."\n";
					$result .= '                                                            </h5>'."\n";
					$result .= '                                                            <p class="descr-video">'."\n";
					$result .= '                                                        	'.substr(strip_tags(stripslashes($video['text'])), 0, 130).'...'."\n";
					$result .= '                                                            </p>'."\n";
					$result .= '                                                           <div class="button button-dark panel">'."\n";
					$result .= '                                                              <p>'."\n";
					if ($video['id_typevideo'] != "") {
						$id_typevideo = split(",", $video['id_typevideo']);
						if (!empty($id_typevideo) and in_array("trailer", $id_typevideo)!==false)
							$result .= '					<a href="/trailer/'.$video['id'].'" title="�������">�������</a>'."\n";
					}
					$result .= '					<a href="/video/'.$video['id'].'" title="��������">��������</a>'."\n";
					$result .= ' <a onClick="addSelection('.$video['id'].')" title="�������� � ��������">� ��������</a>'."\n";

					$result .= '</p>'."\n";
					$result .= '                                                          </div>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                      </div>'."\n";
					$result .= '                                                  </div>'."\n";
				}
			}

			$result .= '                                                  </div>'."\n";

			if ($all > $count) {
				$result .= '                                                <div class="pager">'."\n";
				$result .= '                                                  <div class="page">'."\n";
/*
                                if ($page != 0)
                                        $result .= '<a href="/view/advice/'.($page-1).'">����������</a> '."\n";
                                else
                                        $result .= '<a>����������</a> '."\n";

                                for ($i = 0; $i < ceil($all/$count); $i++)
					if ($i == $page) 
                                            $result .= '<span>'.($i+1).'</span> '."\n";
					else
                                            $result .= '<a href="/view/advice/'.$i.'">'.($i+1).'</a> '."\n";

                                if ($page+1 < ceil($all/$count))
                                        $result .= '<a href="/view/advice/'.($page+1).'">���������</a> '."\n";
                                else
                                        $result .= '<a>���������</a> '."\n";
*/
                                $result .=pager_num($all,$count, $page, "view/advice");
				$result .= '                                               </div>'."\n";
				$result .= '                                               </div>'."\n";
			}
			$result .= '                                              </div>'."\n";
			$result .= '                                          </div>'."\n";
			$result .= '                                      </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}


		static function templateViewNewVideo($listProgramm, $listVideo, $listBanners, $page, $count, $all) {
			$result  = "";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '            	    <div class="boxed mar-b10">'."\n";
			$result .= '                            <div class="left-menu big-menu">'."\n";

#			$result .= viewTemplate::selection_basket();

			if (!empty($listProgramm) and count($listProgramm)>0) {
				$result .= '                                <div class="shadowed-dark big-menu">'."\n";
				$result .= '                                    <div class="border">'."\n";
				$result .= '                                        <div class="inner-border">'."\n";
				$result .= '                                    	<h3 class="title2line">'."\n";
				$result .= '                                                ���������'."\n";
				$result .= '                                            </h3>'."\n";
				$result .= '                                            <ul>'."\n";

				foreach ($listProgramm as $key=>$p) {
					$result .= '                                                <li>'."\n";
					$result .= '                                                    <a href="/programm/'.$p['id'].'">'."\n";
					$result .= '                                                        '.stripslashes($p['name'])."\n";
					$result .= '                                                  </a>'."\n";
					$result .= '                                                </li>'."\n";
				}
				
				$result .= '                                            </ul>'."\n";
				$result .= '                                        </div>'."\n";
				$result .= '                                    </div>'."\n";
				$result .= '                                </div>'."\n";
			}

			$result .= '                                <div class="banners-video">'."\n";
			if (!empty($listBanners) and count($listBanners)>0) {
				foreach ($listBanners as $banner) {
					$result .= '                        	<div class="mar-b10">'."\n";
					if ($banner['url'] != "") 
						$result .= '                            	<a href="'.$banner['url'].'" '.(strpos($banner['url'], "555hf.tv")!==false? "": "target=\"_blank\"").'><img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" /></a>'."\n";
					else
						$result .= '                            	<img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" />'."\n";
					$result .= '                                </div>'."\n";
				}
			}
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                            <div class="video-roz">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                    	<h3 class="title2line">'."\n";
			$result .= '                                                ����� ����� �� 555hf.tv'."\n";
			$result .= '                                            </h3>'."\n";
			$result .= '                                            <div>'."\n";
			$result .= '                                               <div class="tabs-bar">'."\n";
			$result .= '                                                    <ul class="tabs-video boxed">'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>��� �����'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light select" href="/view/new">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>����� �����'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                         <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view/advice">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view/story">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view/shop">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>�����������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                    </ul>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                              <div class="jornal-list">'."\n";
			$result .= '                                                <div class="mar-b-20 boxed">'."\n";

			if (!empty($listVideo) and count($listVideo)>0) {
				foreach ($listVideo as $video) {
					$result .= '                                                  <div class="item-video">'."\n";
					$result .= '                                                      <h5 class="program-title">'.strip_tags(stripslashes($video['name'])).'</h5>'."\n";
					$result .= '                                                      <div>'."\n";
					$result .= '                                                        <div class="prw-video">'."\n";
					$result .= '                                                                <a href="/video/'.$video['id'].'"><i class="shadow-video"></i>'."\n";
					$result .= '                                                                <span class="play-btn"></span>'."\n";
					$result .= '                                                                <img height="120" width="196" alt="'.strip_tags(stripslashes($video['name'])).'" title="'.strip_tags(stripslashes($video['name'])).'" src="/images/video/'.$video['id'].'.jpg"></a>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                        <div class="bar-video">'."\n";
					$result .= '                                                    	<p class="date">'.($video['is_preparing']==1? "��������� � �������": date("d.m.Y", $video['datetime'])).'</p>'."\n";
					$result .= '                                                    	<h5 class="titleoneline">'."\n";
					$result .= '                                                                <a href="/programm/'.$video['id_typeprogramm'].'">'."\n";
					$result .= '                                                                    '.stripslashes($video['nameType'])."\n";
					$result .= '                                                                </a>'."\n";
					$result .= '                                                            </h5>'."\n";
					$result .= '                                                            <p class="descr-video">'."\n";
					$result .= '                                                        	'.substr(strip_tags(stripslashes($video['text'])), 0, 130).'...'."\n";
					$result .= '                                                            </p>'."\n";
					$result .= '                                                           <div class="button button-dark panel">'."\n";
					$result .= '                                                              <p>'."\n";
					if ($video['id_typevideo'] != "") {
						$id_typevideo = split(",", $video['id_typevideo']);
						if (!empty($id_typevideo) and in_array("trailer", $id_typevideo)!==false)
							$result .= '					<a href="/trailer/'.$video['id'].'" title="�������">�������</a>'."\n";
					}
					$result .= '					<a href="/video/'.$video['id'].'" title="��������">��������</a>'."\n";
					$result .= ' <a onClick="addSelection('.$video['id'].')" title="�������� � ��������">� ��������</a>'."\n";

					$result .= '</p>'."\n";
					$result .= '                                                          </div>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                      </div>'."\n";
					$result .= '                                                  </div>'."\n";
				}
			}

			$result .= '                                                  </div>'."\n";

			if ($all > $count) {
				$result .= '                                                <div class="pager">'."\n";
				$result .= '                                                  <div class="page">'."\n";
/*
                                if ($page != 0)
                                        $result .= '<a href="/view/new/'.($page-1).'">����������</a> '."\n";
                                else
                                        $result .= '<a>����������</a> '."\n";

                                for ($i = 0; $i < ceil($all/$count); $i++)
					if ($i == $page) 
                                            $result .= '<span>'.($i+1).'</span> '."\n";
					else
                                            $result .= '<a href="/view/new/'.$i.'">'.($i+1).'</a> '."\n";

                                if ($page+1 < ceil($all/$count))
                                        $result .= '<a href="/view/new/'.($page+1).'">���������</a> '."\n";
                                else
                                        $result .= '<a>���������</a> '."\n";
*/
                                $result .=pager_num($all,$count, $page, "view/new");
				$result .= '                                               </div>'."\n";
				$result .= '                                               </div>'."\n";
			}
			$result .= '                                              </div>'."\n";
			$result .= '                                          </div>'."\n";
			$result .= '                                      </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}


		static function templateViewProgramm($listProgramm, $listBanners) {
			$result  = "";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '            	    <div class="boxed mar-b10">'."\n";
			$result .= '                            <div class="left-menu big-menu">'."\n";

#			$result .= viewTemplate::selection_basket();

			if (!empty($listProgramm) and count($listProgramm)>0) {
				$result .= '                                <div class="shadowed-dark big-menu">'."\n";
				$result .= '                                    <div class="border">'."\n";
				$result .= '                                        <div class="inner-border">'."\n";
				$result .= '                                    	<h3 class="title2line">'."\n";
				$result .= '                                                ���������'."\n";
				$result .= '                                            </h3>'."\n";
				$result .= '                                            <ul>'."\n";

				foreach ($listProgramm as $key=>$p) {
					$result .= '                                                <li>'."\n";
					$result .= '                                                    <a href="/programm/'.$p['id'].'">'."\n";
					$result .= '                                                        '.stripslashes($p['name'])."\n";
					$result .= '                                                  </a>'."\n";
					$result .= '                                                </li>'."\n";
				}
				
				$result .= '                                            </ul>'."\n";
				$result .= '                                        </div>'."\n";
				$result .= '                                    </div>'."\n";
				$result .= '                                </div>'."\n";
			}

			$result .= '                                <div class="banners-video">'."\n";
			if (!empty($listBanners) and count($listBanners)>0) {
				foreach ($listBanners as $banner) {
					$result .= '                        	<div class="mar-b10">'."\n";
					if ($banner['url'] != "") 
						$result .= '                            	<a href="'.$banner['url'].'" '.(strpos($banner['url'], "555hf.tv")!==false? "": "target=\"_blank\"").'><img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" /></a>'."\n";
					else
						$result .= '                            	<img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" />'."\n";
					$result .= '                                </div>'."\n";
				}
			}
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                            <div class="video-roz">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                    	<h3 class="title2line">'."\n";
			$result .= '                                                ������ �� 555hf.tv'."\n";
			$result .= '                                            </h3>'."\n";
			$result .= '                                            <div>'."\n";
			$result .= '                                               <div class="tabs-bar">'."\n";
			$result .= '                                                    <ul class="tabs-video boxed">'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>��� �����'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
                        $result .= '                                                            <a class="corner-top-5 round border-light" href="/view/new">'."\n";
                        $result .= '                                                                <i class="tl"></i><i class="tr"></i>����� �����'."\n";
                        $result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                         <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light select" href="/view/advice">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view/story">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view/shop">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>�����������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                    </ul>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                              <div class="jornal-list">'."\n";
			$result .= '                                                <div class="mar-b-20 boxed">'."\n";

			if (!empty($listProgramm) and count($listProgramm)>0) {
				foreach ($listProgramm as $video) {
					$result .= '                                                  <div class="item-video">'."\n";
#					$result .= '                                                      <h5 class="program-title">'.strip_tags(stripslashes($video['name'])).'</h5>'."\n";
					$result .= '                                                      <div>'."\n";
					$result .= '                                                        <div class="prw-video">'."\n";
					$result .= '                                                                <a href="/video/'.$video['id'].'"><i class="shadow-video"></i>'."\n";
					$result .= '                                                                <span class="play-btn"></span>'."\n";
					$result .= '                                                                <img height="120" width="196" alt="'.strip_tags(stripslashes($video['name'])).'" title="'.strip_tags(stripslashes($video['name'])).'" src="/images/programm/'.$video['id'].'b.png"></a>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                        <div class="bar-video">'."\n";
					$result .= '                                                    	<p class="date">'.$video['time'].'</p>'."\n";
					$result .= '                                                    	<h5 class="titleoneline">'."\n";
					$result .= '                                                                <a href="/programm/'.$video['id_typeprogramm'].'">'."\n";
					$result .= '                                                                    '.stripslashes($video['name'])."\n";
					$result .= '                                                                </a>'."\n";
					$result .= '                                                            </h5>'."\n";
					$result .= '                                                            <p class="descr-video">'."\n";
					$result .= '                                                        	'.substr(strip_tags(stripslashes($video['text'])), 0, 230).'...'."\n";
					$result .= '                                                            </p>'."\n";
					$result .= '                                                           <div class="button button-dark panel">'."\n";
					$result .= '                                                              <p>'."\n";
					$result .= '					<a href="/programm/'.$video['id'].'" title="��������">��������</a>'."\n";
					$result .= '</p>'."\n";
					$result .= '                                                          </div>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                      </div>'."\n";
					$result .= '                                                  </div>'."\n";
				}
			}


			$result .= '                                                  </div>'."\n";

			if ($all > $count) {
				$result .= '                                                <div class="pager">'."\n";
				$result .= '                                                  <div class="page">'."\n";
/*
                                if ($page != 0)
                                        $result .= '<a href="/view/'.($page-1).'">����������</a> '."\n";
                                else
                                        $result .= '<a>����������</a> '."\n";

                                for ($i = 0; $i < ceil($all/$count); $i++)
					if ($i == $page) 
                                            $result .= '<span>'.($i+1).'</span> '."\n";
					else
                                            $result .= '<a href="/view/'.$i.'">'.($i+1).'</a> '."\n";

                                if ($page+1 < ceil($all/$count))
                                        $result .= '<a href="/view/'.($page+1).'">���������</a> '."\n";
                                else
                                        $result .= '<a>���������</a> '."\n";
*/
$result .=pager_num($all,$count, $page);
				$result .= '                                               </div>'."\n";
				$result .= '                                               </div>'."\n";
			}
			$result .= '                                              </div>'."\n";
			$result .= '                                          </div>'."\n";
			$result .= '                                      </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;

/*
			$result .= '	<div id="third_left">'."\n";

			$result .= viewTemplate::selection_basket();

			if (!empty($listProgramm) and count($listProgramm)>0) {
				$result .= '		<div id="second_other_prog">'."\n";
				$result .= '			<div id="second_other_prog_top">���������:</div>'."\n";

				foreach ($listProgramm as $key=>$p) {
					$result .= '			<a href="/programm/'.$p['id'].'">'.$p['name'].'</a>';
					if ($key != count($listProgramm)-1)
						$result .= '					<div class="second_other_prog_razdel"></div>'."\n";
				}
				
				$result .= '			<div id="second_other_prog_bottom"></div>'."\n";
				$result .= '		</div>'."\n";
				$result .= '		<div class="clear"></div>'."\n";
			}
		
			$result .= '		<div class="line"></div>'."\n";
			#$result .= '				<div class="count_video_new"><p>145</p></div>'."\n";
			$result .= '				<div class="count_video_new"><p><img style="margin-left:8px; margin-top:10px;" src="/images/count.png"></p></div>'."\n";
			$result .= '		<a href="/"><img src="/images/banner-web.gif" alt="" /></a><BR/>'."\n";
			if (!isset($_SESSION['AUTH']['auth']) || (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth'] !== 1)) {
				$result .= '		<div id="tv_buttons" style="margin-left: -2px">'."\n";
				$result .= '			<a href="/account/"><img src="/images/voyti.png" alt="" /></a>'."\n";
				$result .= '			<a href="/reg"><img src="/images/podlyuch.png" alt="" /></a>'."\n";
				$result .= '			<div class="clear"></div>'."\n";
				$result .= '		</div>'."\n";
			}
		
			$result .= '		<div class="line"></div>'."\n";

		
			$result .= '		<a href="/viewtv" title="�������� ���� ��������� �� ����� ����������"><img src="/images/televizor.png" alt="" /></a>'."\n";
			$result .= '		<div class="line"></div>'."\n";
			$result .= '		<a href="/recommend" title="���������� �������"><img src="/images/rekomend.png" alt="" /></a>'."\n";
			$result .= '		<div class="line"></div>'."\n";
#			$result .= '		<a href="/test" title="���� ������"><img src="/images/test2.jpg" alt="" /></a>'."\n";
			$result .= '		<a onClick="messageBox(\'������ ����� �������� 1 �������\')" title="���� ������"><img src="/images/test2.jpg" alt="" /></a>'."\n";
			$result .= '		<div class="line"></div>'."\n";
			$result .= '		<a href="/contest" title="�������"><img src="/images/konk.jpg" alt="" /></a>'."\n";
			$result .= '		</div>'."\n";
	
			$result .= '	<div id="third_right">'."\n";
			$result .= '		<div id="second_left">'."\n";
			$result .= '			<div id="third_right_top">'."\n";
			$result .= '				<div class="first"><a href="/view" class="third_vse_video">��� ����� �����</a></div>'."\n";
                        $result .= '                            <div class="inside"><a href="/online" class="third_prog">������ �������</a></div>'."\n";
                        $result .= '                            <div class="inside" id="third_podborki_active"><a href="/view/programm" class="third_podborki">��������</a></div>'."\n";
			$result .= '				<div class="inside"><a href="/view/story" class="third_syuzhet">������</a></div>'."\n";
			$result .= '				<div class="last"><a href="/view/shop" class="third_telemagazin">�����������</a></div>'."\n";
			$result .= '			</div>'."\n";

			if (!empty($listProgramm) and count($listProgramm)>0) {
				foreach ($listProgramm as $programm) {
					$result .= '			<div class="second_box">'."\n";
#					$result .= '				<div class="second_box_top"><p><strong>'.$programm['name'].'</strong></p><span>'.($video['time'] / 60 > 0? ceil($video['time'] / 60)." ������ ": "").($video['time'] % 60 > 0? ($video['time'] % 60)." �������": "").'</span></div>'."\n";
#					$result .= '				<div class="second_box_top"><p><strong>'.$programm['name'].'</strong></p><span>['.($programm['time'] / 60 > 0? ceil($programm['time'] / 60)." ��� ": "").($programm['time'] % 60 > 0? ($programm['time'] % 60)." ���": "").']</span></div>'."\n";
					$result .= '				<div class="second_box_top"><p><strong>'.$programm['name'].'</strong></p><span>['.$programm['time'].']</span></div>'."\n";
					$result .= '				<div class="second_box_foto"><img src="/images/programm/'.$programm['id'].'b.png" alt="" /></div>'."\n";
					$result .= '				<div class="second_box_mini2">'."\n";
//					$result .= '					<p><span>'.$video['name'].'</span></p>'."\n";
					$result .= '					<p>'.substr(strip_tags(stripslashes($programm['text'])), 0, 230).'...</p><br />'."\n";
					$result .= '					<div class="clear"></div>'."\n";
					$result .= '					<a href="/programm/'.$programm['id'].'" title="��������"><img src="/images/prog2_smotr.gif" alt="" class="second_box_button" /></a>'."\n";
					$result .= '				</div>'."\n";
					$result .= '				<div class="clear"></div>'."\n";
					$result .= '			<div class="second_box_bottom"></div></div>'."\n";
					$result .= '			<div class="prog2_line"></div>'."\n";
				}
			}
			
#			$result .= '<p id="game_pages"><span>��������:</span>   <a href="#">&lt;</a> ������  |  <a href="#">1</a>  |  <a href="#">2</a>  |  3  |  <a href="#">4</a>  |  <a href="#">5</a>  |  ��������� <a href="#">&gt;</a></p>'."\n";
			$result .= '			<div class="clear"></div>'."\n";
			$result .= '		<div id="second_left_bottom"></div></div>'."\n";
			$result .= '	</div>'."\n";
	
			$result .= '	<div class="clear"></div>'."\n";
	
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";

			return $result;
*/
		}

		static function templateViewShop($listProgramm, $listBanners) {
			$result  = "";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '            	    <div class="boxed mar-b10">'."\n";
			$result .= '                            <div class="left-menu big-menu">'."\n";

#			$result .= viewTemplate::selection_basket();

			$result .= '                                <div class="banners-video">'."\n";
			if (!empty($listBanners) and count($listBanners)>0) {
				foreach ($listBanners as $banner) {
					$result .= '                        	<div class="mar-b10">'."\n";
					if ($banner['url'] != "") 
						$result .= '                            	<a href="'.$banner['url'].'" '.(strpos($banner['url'], "555hf.tv")!==false? "": "target=\"_blank\"").'><img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" /></a>'."\n";
					else
						$result .= '                            	<img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" />'."\n";
					$result .= '                                </div>'."\n";
				}
			}
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                            <div class="video-roz">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                    	<h3 class="title2line">'."\n";
			$result .= '                                                ������ �� 555hf.tv'."\n";
			$result .= '                                            </h3>'."\n";
			$result .= '                                            <div>'."\n";
			$result .= '                                               <div class="tabs-bar">'."\n";
			$result .= '                                                    <ul class="tabs-video boxed">'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>��� �����'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
                        $result .= '                                                            <a class="corner-top-5 round border-light" href="/view/new">'."\n";
                        $result .= '                                                                <i class="tl"></i><i class="tr"></i>����� �����'."\n";
                        $result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                         <li>'."\n";
#			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view/programm">'."\n";
#			$result .= '                                                                <i class="tl"></i><i class="tr"></i>��������'."\n";
#			$result .= '                                                            </a>'."\n";
                        $result .= '                                                      	<a class="corner-top-5 round border-light" href="/view/advice">'."\n";
                        $result .= '                                                          		<i class="tl"></i><i class="tr"></i>������'."\n";
                        $result .= '                                                      	</a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light" href="/view/story">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light select" href="/view/shop">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>�����������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                    </ul>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                              <div class="jornal-list">'."\n";
			$result .= '                                                <div class="mar-b-20 boxed">'."\n";

			if (!empty($listProgramm) and count($listProgramm)>0) {
				foreach ($listProgramm as $video) {
					$result .= '                                                  <div class="item-video">'."\n";
#					$result .= '                                                      <h5 class="program-title">'.strip_tags(stripslashes($video['name'])).'</h5>'."\n";
					$result .= '                                                      <div>'."\n";
					$result .= '                                                        <div class="prw-video">'."\n";
					$result .= '                                                                <a href="/view/shop/'.$video['id'].'"><i class="shadow-video"></i>'."\n";
					$result .= '                                                                <span class="play-btn"></span>'."\n";
					$result .= '                                                                <img height="120" width="196" alt="'.strip_tags(stripslashes($video['name'])).'" title="'.strip_tags(stripslashes($video['name'])).'" src="/images/shop/'.$video['id'].'.jpg"></a>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                        <div class="bar-video">'."\n";
#					$result .= '                                                    	<p class="date">'.($video['is_preparing']==1? "��������� � �������": date("d.m.Y", $video['datetime'])).'</p>'."\n";
					$result .= '                                                    	<h5 class="titleoneline">'."\n";
					$result .= '                                                                <a href="/view/shop/'.$video['id'].'">'."\n";
					$result .= '                                                                    '.strip_tags(stripslashes($video['name']))."\n";
					$result .= '                                                                </a>'."\n";
					$result .= '                                                            </h5>'."\n";
					$result .= '                                                            <p class="descr-video">'."\n";
					$result .= '                                                        	'.substr(strip_tags(stripslashes($video['text'])), 0, 130).'...'."\n";
					$result .= '                                                            </p>'."\n";
					$result .= '                                                           <div class="button button-dark panel">'."\n";
					$result .= '                                                              <p>'."\n";
					$result .= '					<a href="/view/shop/'.$video['id'].'" title="��������">��������</a>'."\n";
					$result .= '</p>'."\n";
					$result .= '                                                          </div>'."\n";
					$result .= '                                                        </div>'."\n";
					$result .= '                                                      </div>'."\n";
					$result .= '                                                  </div>'."\n";
				}
			}
			else {
					$result .= '                                                  <P align="center">����� �������� �����������</P>'."\n";
			}

			$result .= '                                                  </div>'."\n";

			if ($all > $count) {
				$result .= '                                                <div class="pager">'."\n";
				$result .= '                                                  <div class="page">'."\n";
/*
                                if ($page != 0)
                                        $result .= '<a href="/view/'.($page-1).'">����������</a> '."\n";
                                else
                                        $result .= '<a>����������</a> '."\n";

                                for ($i = 0; $i < ceil($all/$count); $i++)
					if ($i == $page) 
                                            $result .= '<span>'.($i+1).'</span> '."\n";
					else
                                            $result .= '<a href="/view/'.$i.'">'.($i+1).'</a> '."\n";

                                if ($page+1 < ceil($all/$count))
                                        $result .= '<a href="/view/'.($page+1).'">���������</a> '."\n";
                                else
                                        $result .= '<a>���������</a> '."\n";
*/
$result .=pager_num($all,$count, $page);
				$result .= '                                               </div>'."\n";
				$result .= '                                               </div>'."\n";
			}
			$result .= '                                              </div>'."\n";
			$result .= '                                          </div>'."\n";
			$result .= '                                      </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

/*
			$result  = "";
			$result .= '	<div id="third_left">'."\n";

			$result .= viewTemplate::selection_basket();

			if (!empty($listProgramm) and count($listProgramm)>0) {
				$result .= '		<div id="second_other_prog">'."\n";
				$result .= '			<div id="second_other_prog_top">���������:</div>'."\n";

				foreach ($listProgramm as $key=>$p) {
					$result .= '			<a href="/programm/'.$p['id'].'">'.$p['name'].'</a>';
					if ($key != count($listProgramm)-1)
						$result .= '					<div class="second_other_prog_razdel"></div>'."\n";
				}
				
				$result .= '			<div id="second_other_prog_bottom"></div>'."\n";
				$result .= '		</div>'."\n";
				$result .= '		<div class="clear"></div>'."\n";
			}
		
			$result .= '		<div class="line"></div>'."\n";
			#$result .= '				<div class="count_video_new"><p>145</p></div>'."\n";
			$result .= '				<div class="count_video_new"><p><img style="margin-left:8px; margin-top:10px;" src="/images/count.png"></p></div>'."\n";
			$result .= '		<a href="/"><img src="/images/banner-web.gif" alt="" /></a><BR/>'."\n";
			if (!isset($_SESSION['AUTH']['auth']) || (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth'] !== 1)) {
				$result .= '		<div id="tv_buttons">'."\n";
				$result .= '			<a href="/account/"><img src="/images/voyti.png" alt="" /></a>'."\n";
				$result .= '			<a href="/reg"><img src="/images/podlyuch.png" alt="" /></a>'."\n";
				$result .= '			<div class="clear"></div>'."\n";
				$result .= '		</div>'."\n";
			}
		
			$result .= '		<div class="line"></div>'."\n";

		
			$result .= '		<a href="/viewtv" title="�������� ���� ��������� �� ����� ����������"><img src="/images/televizor.png" alt="" /></a>'."\n";
			$result .= '		<div class="line"></div>'."\n";
			$result .= '		<a href="/recommend" title="���������� �������"><img src="/images/rekomend.png" alt="" /></a>'."\n";
			$result .= '		<div class="line"></div>'."\n";
#			$result .= '		<a href="/test" title="���� ������"><img src="/images/test2.jpg" alt="" /></a>'."\n";
			$result .= '		<a onClick="messageBox(\'������ ����� �������� 1 �������\')" title="���� ������"><img src="/images/test2.jpg" alt="" /></a>'."\n";
			$result .= '		<div class="line"></div>'."\n";
			$result .= '		<a href="/contest" title="�������"><img src="/images/konk.jpg" alt="" /></a>'."\n";
			$result .= '		</div>'."\n";
	
			$result .= '	<div id="third_right">'."\n";
			$result .= '		<div id="second_left">'."\n";
			$result .= '			<div id="third_right_top">'."\n";
			$result .= '				<div class="first"><a href="/view" class="third_vse_video">��� ����� �����</a></div>'."\n";
                        $result .= '                            <div class="inside"><a href="/online" class="third_prog">������ �������</a></div>'."\n";
                        $result .= '                            <div class="inside"><a href="/view/programm" class="third_podborki">��������</a></div>'."\n";
			$result .= '				<div class="inside"><a href="/view/story" class="third_syuzhet">������</a></div>'."\n";
			$result .= '				<div class="last" id="third_podborki_active"><a href="/view/shop" class="third_telemagazin">�����������</a></div>'."\n";
			$result .= '			</div>'."\n";

			if (!empty($listProgramm) and count($listProgramm)>0) {
				foreach ($listProgramm as $programm) {
					$result .= '			<div class="second_box">'."\n";
#					$result .= '				<div class="second_box_top"><p><strong>'.$programm['name'].'</strong></p><span>'.($video['time'] / 60 > 0? ceil($video['time'] / 60)." ������ ": "").($video['time'] % 60 > 0? ($video['time'] % 60)." �������": "").'</span></div>'."\n";
					$result .= '				<div class="second_box_top"><p><strong>'.$programm['name'].'</strong></p><span>['.($programm['time'] / 60 > 1? floor($programm['time'] / 60)." ��� ": "").($programm['time'] % 60 > 0? ($programm['time'] % 60)." ���": "").']</span></div>'."\n";
					$result .= '				<div class="second_box_foto"><img src="/images/programm/'.$programm['id'].'b.png" alt="" /></div>'."\n";
					$result .= '				<div class="second_box_mini2">'."\n";
//					$result .= '					<p><span>'.$video['name'].'</span></p>'."\n";
					$result .= '					<p>'.substr(strip_tags(stripslashes($programm['text'])), 0, 230).'...</p><br />'."\n";
					$result .= '					<div class="clear"></div>'."\n";
					$result .= '					<a href="/programm/'.$programm['id'].'" title="��������"><img src="/images/prog2_smotr.gif" alt="" class="second_box_button" /></a>'."\n";
					$result .= '				</div>'."\n";
					$result .= '				<div class="clear"></div>'."\n";
					$result .= '			<div class="second_box_bottom"></div></div>'."\n";
					$result .= '			<div class="prog2_line"></div>'."\n";
				}
			}

			else
			    $result .= '<div style="text-align: center">����� �������� �����������</div>';


#			$result .= '<p id="game_pages"><span>��������:</span>   <a href="#">&lt;</a> ������  |  <a href="#">1</a>  |  <a href="#">2</a>  |  3  |  <a href="#">4</a>  |  <a href="#">5</a>  |  ��������� <a href="#">&gt;</a></p>'."\n";
			$result .= '			<div class="clear"></div>'."\n";
			$result .= '		<div id="second_left_bottom"></div></div>'."\n";
			$result .= '	</div>'."\n";
	
			$result .= '	<div class="clear"></div>'."\n";
	
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";
*/
			return $result;
		}


		static function templateViewSelection($listProgramm, $listBanners) {
			$result  = "";
			$result .= '	<div id="third_left">'."\n";

#			$result .= viewTemplate::selection_basket();

			if (!empty($listProgramm) and count($listProgramm)>0) {
				$result .= '		<div id="second_other_prog">'."\n";
				$result .= '			<div id="second_other_prog_top">���������:</div>'."\n";

				foreach ($listProgramm as $key=>$p) {
					$result .= '			<a href="/programm/'.$p['id'].'">'.$p['name'].'</a>';
					if ($key != count($listProgramm)-1)
						$result .= '					<div class="second_other_prog_razdel"></div>'."\n";
				}
				
				$result .= '			<div id="second_other_prog_bottom"></div>'."\n";
				$result .= '		</div>'."\n";
				$result .= '		<div class="clear"></div>'."\n";
			}
		
			$result .= '		<div class="line"></div>'."\n";
			#$result .= '				<div class="count_video_new"><p>145</p></div>'."\n";
			$result .= '				<div class="count_video_new"><p><img style="margin-left:8px; margin-top:10px;" src="/images/count.png"></p></div>'."\n";
			$result .= '		<a href="/"><img src="/images/banner-web.gif" alt="" /></a><BR/>'."\n";
			if (!isset($_SESSION['AUTH']['auth']) || (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth'] !== 1)) {
				$result .= '		<div id="tv_buttons">'."\n";
				$result .= '			<a href="/account/"><img src="/images/voyti.png" alt="" /></a>'."\n";
				$result .= '			<a href="/reg"><img src="/images/podlyuch.png" alt="" /></a>'."\n";
				$result .= '			<div class="clear"></div>'."\n";
				$result .= '		</div>'."\n";
			}
		
			$result .= '		<div class="line"></div>'."\n";

		
			$result .= '		<a href="/viewtv" title="�������� ���� ��������� �� ����� ����������"><img src="/images/televizor.png" alt="" /></a>'."\n";
			$result .= '		<div class="line"></div>'."\n";
			$result .= '		<a href="/recommend" title="���������� �������"><img src="/images/rekomend.png" alt="" /></a>'."\n";
			$result .= '		<div class="line"></div>'."\n";
#			$result .= '		<a href="/test" title="���� ������"><img src="/images/test2.jpg" alt="" /></a>'."\n";
			$result .= '		<a onClick="messageBox(\'������ ����� �������� 1 �������\')" title="���� ������"><img src="/images/test2.jpg" alt="" /></a>'."\n";
			$result .= '		<div class="line"></div>'."\n";
			$result .= '		<a href="/contest" title="�������"><img src="/images/konk.jpg" alt="" /></a>'."\n";
			$result .= '		</div>'."\n";
	
			$result .= '	<div id="third_right">'."\n";
			$result .= '		<div id="second_left">'."\n";
			$result .= '			<div id="third_right_top">'."\n";
			$result .= '				<div class="first"><a href="/view" class="third_vse_video">��� ����� �����</a></div>'."\n";
                        $result .= '                            <div class="inside"><a href="/online" class="third_prog">������ �������</a></div>'."\n";
                        $result .= '                            <div class="inside"><a href="/view/programm" class="third_podborki">��������</a></div>'."\n";
			$result .= '				<div class="inside"><a href="/view/story" class="third_syuzhet">������</a></div>'."\n";
			$result .= '				<div class="last"><a href="/view/shop" class="third_telemagazin">�����������</a></div>'."\n";
			$result .= '			</div>'."\n";

			if (!empty($listProgramm) and count($listProgramm)>0) {
				foreach ($listProgramm as $programm) {
					$result .= '			<div class="second_box">'."\n";
#					$result .= '				<div class="second_box_top"><p><strong>'.$programm['name'].'</strong></p><span>'.($video['time'] / 60 > 0? ceil($video['time'] / 60)." ������ ": "").($video['time'] % 60 > 0? ($video['time'] % 60)." �������": "").'</span></div>'."\n";
					$result .= '				<div class="second_box_top"><p><strong>'.$programm['name'].'</strong></p><span>['.($programm['time'] / 60 > 1? floor($programm['time'] / 60)." ��� ": "").($programm['time'] % 60 > 0? ($programm['time'] % 60)." ���": "").']</span></div>'."\n";
					$result .= '				<div class="second_box_foto"><img src="/images/programm/'.$programm['id'].'b.png" alt="" /></div>'."\n";
					$result .= '				<div class="second_box_mini2">'."\n";
//					$result .= '					<p><span>'.$video['name'].'</span></p>'."\n";
					$result .= '					<p>'.substr(strip_tags(stripslashes($programm['text'])), 0, 230).'...</p><br />'."\n";
					$result .= '					<div class="clear"></div>'."\n";
					$result .= '					<a href="/programm/'.$programm['id'].'" title="��������"><img src="/images/prog2_smotr.gif" alt="" class="second_box_button" /></a>'."\n";
					$result .= '				</div>'."\n";
					$result .= '				<div class="clear"></div>'."\n";
					$result .= '			<div class="second_box_bottom"></div></div>'."\n";
					$result .= '			<div class="prog2_line"></div>'."\n";
				}
			}
			else
			    $result .= '<div style="text-align: center">�������� �������� �����������</div>';


#			$result .= '<p id="game_pages"><span>��������:</span>   <a href="#">&lt;</a> ������  |  <a href="#">1</a>  |  <a href="#">2</a>  |  3  |  <a href="#">4</a>  |  <a href="#">5</a>  |  ��������� <a href="#">&gt;</a></p>'."\n";
			$result .= '			<div class="clear"></div>'."\n";
			$result .= '		<div id="second_left_bottom"></div></div>'."\n";
			$result .= '	</div>'."\n";
	
			$result .= '	<div class="clear"></div>'."\n";
	
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";

			return $result;
		}



		static function templateRecommend($err) {
			$result  = "";
			$result .= '		<form method="post" id="formRecommend">'."\n";
			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '		      <h2 class="page-title">���������� � ��� �������</h2>'."\n";
			$result .= '                      <p>��� ������ ����� ����� �������� 555huntfishing.tv, ��� ������ ����� �� ����� ������� ��� ���.</p>'."\n";
			$result .= '                      <div class="text-c mar-b20">'."\n";
			$result .= '                        <img src="/img/other/friends_img.png" width="884" height="146" alt="" title="" />'."\n";
			$result .= '                      </div>'."\n";
			$result .= '            	    <div class="boxed mar-b10 autror-reg">'."\n";
			$result .= '                    	<div class="two-colums-left">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                    	<strong class="mar-b10 boxed">���� ��� �������� ��, ��� �� ������ �� 555huntfishing.tv �����, ��� - ���� ����������� ������ ������ �����������!</strong>  '."\n";
			$result .= '                                            <div class="hr2"></div>'."\n";
			$result .= '                                    	<ul class="desimal">'."\n";
			$result .= '                                                <li>���, ��� ��� ����� �������, ��� ���� ��� ������ ����������� ����� ������� ���� ������, � �� � ���� ������� �� ������ 6-� ����������� ���� ������� <strong>������� ��� ������ � ������������� �����</strong>.</li>'."\n";
			$result .= '                                                <li>����� ��������� �������� � ��������� �� �� ������������ ����� �����, ����� ������� ����� ����� �����������, � ��� ������. ��� � ��� ����� <strong>������ ������� ����� � ����� �����</strong>!</li>'."\n";
			$result .= '                                            </ul>'."\n";
			$result .= '                                            <p><strong>�������, ��� ������ ����� �������������� �� �����, ��� ������ ����� �� �������!</strong></p>'."\n";
			$result .= '                                            <p class="text-c">'."\n";
			$result .= '                                        	<a class="button button-dark mar-t10" onClick="document.getElementById(\'formRecommend\').submit()">'."\n";
			$result .= '                                                    <span>��������� ������</span>'."\n";
			$result .= '                                                </a>'."\n";
			$result .= '                                            </p>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                            <div class="two-colums-right">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                        	<strong class="mar-b10 boxed">E-mail ������</strong>'."\n";
			$result .= '                                                <p>����������� ������, ������� �� � ��� ���������� ������������� ������������� ��� �������� 1-�� ������ � ������������ ��������� �����!</p>'."\n";
			$result .= '                                                <div class="hr2"></div>'."\n";
			$result .= '                                                <div>'."\n";
			$result .= '                                                        <div class="boxed">'."\n";
			$result .= '                                                            <div class="rows-input">'."\n";
			$result .= '                                                                <label for="friend1"><em>* </em>���� 1:</label>'."\n";
			$result .= '                                                                <input type="text" id="friend1" name="friendEmail[]">'."\n";
			$result .= '                                            	        </div>'."\n";
			$result .= '                                                            <div class="rows-input">'."\n";
			$result .= '                                                                <label for="friend2"><em>* </em>���� 2:</label>'."\n";
			$result .= '                                                                <input type="text" id="friend2" name="friendEmail[]">'."\n";
			$result .= '                                            	        </div>'."\n";
			$result .= '                                                            <div class="rows-input">'."\n";
			$result .= '                                                                <label for="friend3"><em>* </em>���� 3:</label>'."\n";
			$result .= '                                                                <input type="text" id="friend3" name="friendEmail[]">'."\n";
			$result .= '                                            	        </div>'."\n";
			$result .= '                                                            <div class="rows-input">'."\n";
			$result .= '                                                                <label for="friend4"><em>* </em>���� 4:</label>'."\n";
			$result .= '                                                                <input type="text" id="friend4" name="friendEmail[]">'."\n";
			$result .= '                                            	        </div>'."\n";
			$result .= '                                                            <div class="rows-input">'."\n";
			$result .= '                                                                <label for="friend5"><em>* </em>���� 5:</label>'."\n";
			$result .= '                                                                <input type="text" id="friend5" name="friendEmail[]">'."\n";
			$result .= '                                            	        </div>'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div></form>'."\n";

			if (!isset($_SESSION['AUTH']['auth']) or (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth']!=1)) {
#				$result .= '<script>$.modal("<div style=\'margin: 10px\'>����� ��������� ������ �������, ��� ���������� ����������������</div>", {maxHeight: 40});</script>'."\n";
				$result .= '<script>$.modal(\'<div class="blackout" style="display:block;" id="rememberDIV"><div class="back-blackout"></div><div class="pay-box"><a class="close-window" onClick="$.modal.close();"></a><h3 class="title2line">���������� � ��� �������</h3><p>����� ��������� ������ �������, ��� ���������� ����������������</div></div></div>\');</script>'."\n";
			}

			return $result;
		}

		static function templateFootstep($listSled, $listCity, $listFish, $err) {
			$result  = "";
			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '		      <h2 class="page-title">��������� ������� - �������!</h2>'."\n";
			$result .= '                      <p>� ���� ������� �� ������ �������� ���� �����, ��� ��������� ���� ������� ����� ������� ...</p>'."\n";
			$result .= '            	    <div class="boxed mar-b10 autror-reg">'."\n";
			$result .= '                    	<div class="two-colums-left">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";

			if (!empty($listSled) and count($listSled)>0) {
				foreach ($listSled as $key=>$sled) {
					$result .= '                                    	<div class="user-comment" id="sled'.$sled['id'].'">'."\n";
					$result .= '                                                <div class="right-bar-com">'."\n";
					$result .= '                                                    <strong>'.$sled['fio'].'</strong> '.date("Y", strtotime($sled['birthday'])).'�. '.$sled['cityname'].(isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth'] == 1 && $_SESSION['AUTH']['is_admin'] == "yes"? ' <img src="/images/del.png" title="�������" onClick="delFootStep('.$sled['id'].');">': '')."\n";
					$result .= '                                                    <p class="comment-text">'."\n";
					$result .= '                                                        '.stripslashes($sled['text'])."\n";
					$result .= '                                                    </p>'."\n";
					$result .= '                                                </div>'."\n";
					$result .= '                                            </div>'."\n";
				}
			}
			else {
				$result .= "<strong>����� �� �������� ���� ����. ���� ������!!!</strong>";
			}


			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                            <div class="two-colums-right">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                        	<strong class="mar-b10 boxed">�������� ����������� ��������� ����!</strong>'."\n";
			$result .= '                                                <p>������ ���� ���� � ���������� ������� ������</p>'."\n";
			$result .= '                                                <div class="hr2"></div>'."\n";

			if ($err != "") $result .= "<font color=\"red\">{$err}</font><BR/><BR/>";

			$result .= '			<form method="post" id="formSled">'."\n";
			if (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth'] == 1) {
			    $_POST['fio'] = $_SESSION['AUTH']['lastname']." ".$_SESSION['AUTH']['firstname'];

			    $birth = split("-", $_SESSION['AUTH']['birthday']);
			    $_POST['birthday'] = $birth[2];
			    $_POST['birthmonth'] = $birth[1];
			    $_POST['birthyear'] = $birth[0];

			    $_POST['id_city'] = $_SESSION['AUTH']['id_city'];

			    $_POST['email'] = $_SESSION['AUTH']['email'];
			}

			$result .= '                                                <div>'."\n";
			$result .= '                                                        <div class="boxed">'."\n";
			$result .= '                                                            <div class="rows-input">'."\n";
			$result .= '                                                        <label for="name"><em>* </em>���</label>'."\n";
			$result .= '                                                        <input type="text" id="fio" name="fio" value="'.(isset($_POST['fio'])? $_POST['fio']: "").'">'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                    <div class="rows-input">'."\n";
			$result .= '                                                        <p class="as-label"><em>* </em>���� ��������</p>'."\n";

			$result .= '					<span><select name="birthday">'."\n";
			for ($day = 1; $day<=31; $day++)
				$result .= '						<option value="'.(strlen($day)<2? "0".$day: $day).'" '.(isset($_POST['birthday']) && $_POST['birthday'] == $day? "SELECTED": "") .'>'.(strlen($day)<2? "0".$day: $day).'</option>'."\n";
			$result .= '					</select></span>'."\n";	
			$result .= '					<span><select name="birthmonth">'."\n";
			for ($month = 1; $month<=12; $month++)
				$result .= '						<option value="'.(strlen($month)<2? "0".$month: $month).'" '.(isset($_POST['birthmonth']) && $_POST['birthmonth'] == $month? "SELECTED": "") .'>'.(strlen($month)<2? "0".$month: $month).'</option>'."\n";
			$result .= '					</select></span>'."\n";			
			$result .= '					<span><select name="birthyear">'."\n";
			for ($year = 1920; $year<=2010; $year++)
			$result .= '						<option value="'.$year.'" '.(isset($_POST['birthyear']) && $_POST['birthyear'] == $year? "SELECTED": (!isset($_POST['birthyear']) && $year == 1980? "SELECTED": "")) .'>'.$year.'</option>'."\n";
			$result .= '					</select></span>'."\n";

			$result .= '                                                    </div>'."\n";
			$result .= '                                                    <div class="rows-input">'."\n";
			$result .= '                                                        <label for="city"><em>* </em>�����</label>'."\n";
			$result .= '					<select class="sled_gorod" name="id_city" id="city">'."\n";
			if (!empty($listCity) and count($listCity)>0) {
				$result .= viewTemplate::templateCity($listCity, 0);
			}
			$result .= '					</select>'."\n";			

			$result .= '                                                  </div>'."\n";
			$result .= '                                                  <div class="rows-input">'."\n";
			$result .= '                                                	<p class="as-label"><em>* </em>�������� ������ �����:</p>'."\n";
			$result .= '					<select class="sled_gorod" name="id_fish">'."\n";
			if (!empty($listFish) and count($listFish)>0) {
				foreach ($listFish as $key=>$fish) {
					$result .= '				<option value="'.$fish['id'].'" '.(isset($_POST['id_fish']) && $_POST['id_fish']==$fish['id']? "SELECTED": "").'>'.$fish['name'].'</option>'."\n";
				}
			}
			$result .= '                                                       </select>'."\n";
			$result .= '                                                  </div>'."\n";
			$result .= '                                                  <div class="rows-input">'."\n";
			$result .= '                                                        <label for="email"><em>* </em>Email</label>'."\n";
			$result .= '                                                        <input type="text" id="email" name="email" value="'.(isset($_POST['email'])? $_POST['email']: "").'">'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                    <div class="rows-input">'."\n";
			$result .= '                                                        <label for="about-me"><em>* </em>���� ��������� �������:</label>'."\n";
			$result .= '                                                        <textarea id="about-me" name="text">'.(isset($_POST['text'])? $_POST['text']: "").'</textarea>'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                    <div class="boxed captcha">'."\n";
			$result .= '                                                        <h5>���������� ������� �����, ������� �� ������ �� ��������!</h5>'."\n";
			$result .= '                                                        <div class="hr2"></div>'."\n";
			$result .= '                                                        <div class="float-l">'."\n";
			$result .= '                                                    	<img src="/class/captcha.php" width="228" height="98" alt="" title="" />'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="text-c">'."\n";
			$result .= '                                                    	<div class="rows-input">'."\n";
			$result .= '                                                                <input id="captcha" type="text" name="captcha" />'."\n";
			$result .= '                                                    	</div>'."\n";
			$result .= '                                                            <a class="button button-dark" onClick="document.getElementById(\'formSled\').submit()">'."\n";
			$result .= '                                                                <span>����������</span>'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                       </div>'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                 </div>'."\n";
			$result .= '                                                 </form>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}


		static function templateWantSee($info, $listCity, $listFish, $err) {
			$result  = "";

			$result .= '			<form method="post" id="formWS">'."\n";
			$result .= '             <div class="main-back">'."\n";
			$result .= '		      <h2 class="page-title">'.$info['name'].'</h2>'."\n";
			$result .= '            	    <div class="boxed mar-b10 autror-reg">'."\n";
			$result .= '                    	<div class="two-colums-left">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                          <div class="mar-b-20">'."\n";
			$result .= '                                            <div class="want-see">'."\n";
			$result .= '                                        	<span>'."\n";
			$result .= '                                            	<img src="../img/other/10.png" width="198" height="107" alt="" title="" />'."\n";
			$result .= '                                                </span>'."\n";
			$result .= '                                                <p>�� ����� ����� �� - ���� �������, ����� �������� �� ���������, ������� ��� ������������� ����� ���������. ��� ����� � ���������� ������ ������.</p>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                            <div class="want-see">'."\n";
			$result .= '                                        	<span>'."\n";
			$result .= '                                            	<img src="../img/other/10.png" width="198" height="107" alt="" title="" />'."\n";
			$result .= '                                                </span>'."\n";
			$result .= '                                                <p>���� �� ������ � ��������� ����� ������� ����� � �����-�� ���������� ������� ����� ��� ��������, ��� �������, �� �������� ������������ ��� ���� � �� ����������� ����� �� � ��������� �����.</p>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                          </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                            <div class="two-colums-right">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                                <div>'."\n";
			if ($err != "") $result .= "<font color=\"red\">{$err}</font><BR/><BR/>";

			$result .= '                                                  <div class="boxed">'."\n";
			$result .= '                                                  <div class="rows-input">'."\n";
			$result .= '                                                	<p class="as-label"><em>* </em>�������� ������ �����:</p>'."\n";
			$result .= '					<select name="fish">'."\n";
			if (!empty($listFish) and count($listFish)>0) {
				foreach ($listFish as $key=>$fish) {
					$result .= '				<option value="'.$fish['name'].'" '.(isset($_POST['id_fish']) && $_POST['id_fish']==$fish['id']? "SELECTED": "").'>'.$fish['name'].'</option>'."\n";
				}
			}
			$result .= '					</select>			'."\n";
			$result .= '                                                  </div>'."\n";
			$result .= '                                                  <div class="rows-input">'."\n";
			$result .= '                                                        <label for="mail"><em>* </em>E-mail</label>'."\n";
			$result .= '                                                        <input type="text" id="mail" name="email" value="'.(isset($_POST['email'])? $_POST['email']: "").'">'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                    <div class="rows-input">'."\n";
			$result .= '                                                        <label for="about-me"><em>* </em>���� �������:</label>'."\n";
			$result .= '                                                        <textarea id="about-me" name="text">'.(isset($_POST['text'])? $_POST['text']: "").'</textarea>'."\n";
			$result .= '                                                    </div>'."\n";
$result .= '                  <div class="text-c">'."\n";
$result .= '                      <img height="98" width="228" title="" alt="" src="/class/captcha.php">'."\n";
$result .= '                  </div>'."\n";

			$result .= '                                                    <div class="boxed">'."\n";
$result .= '                          <input type="text" id="captcha" name="captcha"><br><br>'."\n";

			$result .= '                                                        <a class="button button-dark" onClick="document.getElementById(\'formWS\').submit()">'."\n";
			$result .= '                                                            <span>���������</span>'."\n";
			$result .= '                                                        </a>'."\n";
			$result .= '                                                       </div>'."\n";
			$result .= '                                                    </div>'."\n";

			$result .= '                                                 </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
#			$result .= '                </div>'."\n";
			$result .= '                </form>'."\n";


			return $result;
		}

		static function templateTest($listTest) {
			$result  = "";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                        <div class="shadowed-light boxed">'."\n";
			$result .= '                            <div class="border">'."\n";
			$result .= '                                <div class="inner-border pad-20">'."\n";
			$result .= '                            	<h3 class="title2line">'."\n";
			$result .= '                                        ������������'."\n";
			$result .= '                                    </h3>'."\n";

			$result .= '		<p><strong>��������� ������!</strong><br />������������ ��� <strong>���������� on-line</strong> ����� ��� ����������� <strong>������ ����� ����������</strong>...</p>'."\n";


			$result .= '		<p>������������ 6 ��������� �����:<br /><br />'."\n";
			if (!empty($listTest) and count($listTest)>0) {
				foreach ($listTest as $key=>$test) {
#					$result .= '		'.($key+1).'. <a href="/test/'.$test['id'].'#test">'.$test['name'].'</a><br />'."\n";
					$result .= '		'.($key+1).'. <a onClick="$.jGrowl(\'������ �������� ����������\');">'.$test['name'].'</a><br />'."\n";
				}
			}


			$result .= '		<p><strong>��������� ������� �� ������:</strong><br /><br />'."\n";
			$result .= '		������ ������������ ����� ��  ������� ����� ������������, ��� � ���� ������� �������� ��� �������� ����������� ����. <strong>����, ������� ����� ����� ������������ �� ������� ��������.</strong><br /><br />'."\n";
			$result .= '		��� ��������� <strong>����������� ����������</strong>, ���������� ����� ����������� �����: 30, 60 ����� ��������������  ���������� �������� ������������.<br /><br />'."\n";
			$result .= '		���������� �������� �� ������� <strong>��� ����� �������</strong>.<br /><br />'."\n";
			$result .= '		<strong>�� ���������� ������� ����� ������</strong>, ������� ����� ����� ��������, ����������� ��������. ����������� � ������ �������� ������ � ��� �������, ����� �� �� �������, ����� �� �������� ������ ����������. ��������� ����� ���������� �� ���� ����������� � ����� �����. <br /><br />'."\n";
			$result .= '		���������������� ������� ����� ��������� �������� <strong>����������� �� ��� �������</strong>.<br /><br />'."\n";
			$result .= '		����� ������� � ������ ������ ����� ��������� <strong>�����, ������, ����� ��� �����</strong>. <br /><br />'."\n";
			$result .= '		<strong>��������� � ���, ��� �� ������ ������</strong>, ������ ��� ���������� � �������.<br /><br />'."\n";
			$result .= '		��� ��������� ������������ ��� ����� <strong>������������ �� ��������� �������� ������</strong> (� �����������). </p>'."\n";

			$result .= '		<p><strong>�����!</strong></p>'."\n";

			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}


		static function templateSearch($info) {
			$result  = "";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                        <div class="shadowed-light boxed">'."\n";
			$result .= '                            <div class="border">'."\n";
			$result .= '                                <div class="inner-border pad-20">'."\n";
			$result .= '                            	<h3 class="title2line">'."\n";
			$result .= '                                        �����'."\n";
			$result .= '                                    </h3>'."\n";
			if (!isset($_POST['searchtext']) or (isset($_POST['searchtext']) and $_POST['searchtext'] == "")) {
				$result .= '�� �� ����� ������ ��� ������';
			}
			else {
				if (!empty($info) and count($info)>0) {
					if (isset($info['programm'])) {
						$result .= '                                    <h5>���������</h5>'."\n";
						$result .= '                                    <div class="hr2"></div>'."\n";

						foreach ($info['programm'] as $key=>$page) {
							$result .= '                                    <p class="">'.($key+1).'. <strong>'.stripslashes($page['name']).'</strong>. '.substr(strip_tags(stripslashes($page['text'])), 0, 255).'...<a href="/programm/'.$page['id'].'">�����</a></p>'."\n";
						}
					}

					if (isset($info['page'])) {
						$result .= '                                    <h5>������</h5>'."\n";
						$result .= '                                    <div class="hr2"></div>'."\n";

						foreach ($info['page'] as $key=>$page) {
							$result .= '                                    <p class="">'.($key+1).'. <strong>'.stripslashes($page['name']).'</strong>. '.substr(strip_tags(stripslashes($page['text'])), 0, 255).'...<a href="/'.$page['mark'].'">�����</a></p>'."\n";
						}
					}

					if (isset($info['video'])) {
						$result .= '                                    <h5>B����</h5>'."\n";
						$result .= '                                    <div class="hr2"></div>'."\n";

						foreach ($info['video'] as $video) {
							$result .= '                                    <div class="search-rez">'."\n";
							$result .= '                                      <div class="item-video">'."\n";
							$result .= '                                          <a href="/video/'.$video['id'].'"><h5 class="program-title">'.stripslashes($video['name']).'</h5></a>'."\n";
							$result .= '                                          <div>'."\n";
							$result .= '                                            <div class="prw-video">'."\n";
							$result .= '                                                <a href="/programm/'.$video['id_typeprogramm'].'">'."\n";
							$result .= '                                                    <i class="shadow-video"></i>'."\n";
							$result .= '                                                    <span class="play-btn"></span>'."\n";
							$result .= '                                                    <img height="120" width="196" src="/images/video/'.$video['id'].'.jpg" title="" alt="">'."\n";
							$result .= '                                                </a>'."\n";
							$result .= '                                            </div>'."\n";
							$result .= '                                            <div class="bar-video">'."\n";
							$result .= '                                                <p class="date">16 ������� 2010</p>'."\n";
							$result .= '                                                <h5 class="titleoneline">'."\n";
							$result .= '                                                    <a href="#">'."\n";
							$result .= '                                                        '.stripslashes($video['nameType'])."\n";
							$result .= '                                                    </a>'."\n";
							$result .= '                                                </h5>'."\n";
							$result .= '                                                <p class="descr-video">'."\n";
							$result .= '                                                    '.substr(strip_tags(stripslashes($video['text'])), 0, 130)."\n";
							$result .= '                                                </p>'."\n";
							$result .= '                                                <div class="button button-dark panel"><p>'."\n";
							if ($video['id_typevideo'] != "") {
								$id_typevideo = split(",", $video['id_typevideo']);
								if (!empty($id_typevideo) and in_array("trailer", $id_typevideo)!==false)
									$result .= '					<a href="/trailer/'.$video['id'].'" title="�������">�������</a>'."\n";
							}
							$result .= '					<a href="/video/'.$video['id'].'" title="��������">��������</a>'."\n";
							$result .= ' <a onClick="addSelection('.$video['id'].')" title="�������� � ��������" style="cursor: pointer;">� ��������</a>'."\n";
							$result .= '                                              </p></div>'."\n";
							$result .= '                                            </div>'."\n";
							$result .= '                                          </div>'."\n";
							$result .= '                                      </div>'."\n";
							$result .= '                                      </div>'."\n";
						}
					}
				}
			}

			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}

		static function templateTestQuestion($question, $answer) {
			$result  = "";

			$result .= '	<div id="test_container"><a name="test"></a>'."\n";
			$result .= '	<form method="post">'."\n";
			if (!empty($answer) and count($answer)>0) {
				$result .= "<strong>{$question['name']}</strong><BR/><BR/>";
				foreach ($answer as $key=>$test) {
					$result .= '		<input type="radio" name="answer" value="'.$test['id'].'" id="answer'.$test['id'].'" '.($key==0? "CHECKED": "").'>&nbsp;<label for="answer'.$test['id'].'">'.$test['name'].'</label><br />'."\n";
				}
			}
			$result .= '	<BR/><input type="hidden" name="id_question" value="'.($question['position']+1).'">'."\n";
			$result .= '	<BR/><input type="hidden" name="next_question" value="'.($question['position']+1).'">'."\n";
			$result .= '	<input type="submit" value="�����" class="test_input">'."\n";

			$result .= '	</form>'."\n";
			$result .= '	<BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/></div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";
			return $result;
		}

		static function templateTestResult($allQuestions, $id) {
			$result  = "";

			$result .= '	<div id="test_container">'."\n";
			if (!empty($allQuestions) and count($allQuestions)>0) {
				$result .= '<table border="1" cellspacing="4" cellpadding="4">'."\n";
				foreach ($allQuestions as $question) {
					$result .= '<tr valing="top">'."\n";
					$result .= '<td rowspan="'.count($question['answer']).'" width="20">'.($question['answer'][$_SESSION["TEST{$id}"][$question['id']]]['true']==1? "V": "X")."</td>\n";
					$result .= '<td rowspan="'.count($question['answer']).'">'.$question['name']."</td>\n";
					$cur = 0;
					foreach ($question['answer'] as $key=>$answer) {
						if ($cur!=0) $result .= '<tr>'."\n";
						$result .= '<td>'."\n";

						$result .= ($answer['true'] == 1? "V": "X")."<BR/>\n";
						$result .= '</td>'."\n";

						$result .= '<td>'."\n";
						$result .= ($answer['true'] == 1 && $_SESSION["TEST{$id}"][$question['id']] == $key? "<font color=\"green\">".$answer['name']."</font>": ($answer['true'] == 0 && $_SESSION["TEST{$id}"][$question['id']] == $key? "<font color=\"red\">".$answer['name']."</font>": $answer['name']))."<BR/>\n";
						$result .= '</td>'."\n";
						if ($cur!=0) $result .= '</tr>'."\n";
						$cur++;
					}
					$result .= '</tr>'."\n";

					$result .= '<tr height="10"><td></td></tr>'."\n";
				}
				$result .= '</table>'."\n";
			}
			$result .= '	<BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/></div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";
			return $result;
		}

		static function templateOther($info) {
			$result  = "";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                        <div class="shadowed-light static boxed">'."\n";
			$result .= '                            <div class="border">'."\n";
			$result .= '                                <div class="inner-border w-910">'."\n";
			$result .= '                            	<h3 class="title2line">'."\n";
			$result .= '                                        '.stripslashes($info['name'])."\n";
			$result .= '                                    </h3>'."\n";
			$result .= stripslashes($info['text']);
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}

		static function unsubscribe($text) {
			$result  = "";

			$result .= '<div id="static">'."\n";
			$result .= '		<h1>'.$info['name'].'</h1>'."\n";
			$result .= '	<div class="long_line"></div>'."\n";
			$result .= $text;
			$result .= '	</div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";
			return $result;
		}

		static function templateHelp($info) {
			$result  = "";

			$result .= '<div id="static">'."\n";
			$result .= '		<h1>'.$info['name'].'</h1>'."\n";
			$result .= '	<div class="long_line"></div>'."\n";
			$result .= stripslashes($info['text']);
			
			$result .= '<div class="pl" id="playerBig">'."\n";
			$result .= '    <a href="http://www.adobe.com/go/getflashplayer">'."\n";
			$result .= '	<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>'."\n";
			$result .= '    </a>'."\n";
			$result .= '</div>'."\n";

$result .= '
    <script type="text/javascript">
	var flashvars = {\'id\':\'/video/911911\'};
	var params = {};
	params.bgcolor = "#F2EEE9";
	params.allowFullscreen = true;

	var attributes = {};
	swfobject.embedSWF("/images/playerrtmp.swf", "playerBig", "100%", "100%", "10.0.0", false, flashvars, params, attributes);
	
	function qpInitialized()
	{
	//	alert(\'Player Initialized\')
	}

	function qpFinished(url)
	{
	
	    //document.getElementById("playerBig").startVideo(url);
	}

    </script>';

			$result .= '	</div>'."\n";
			

			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";
			return $result;
		}

		static function templateOnline($info, $selections) {
			$result  = "";

			$result .= '                <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                        <div class="shadowed-light online-box boxed">'."\n";
			$result .= '                            <div class="border">'."\n";
			$result .= '                                <div class="inner-border">'."\n";
			$result .= '                            	<h3 class="title2line">'."\n";
			$result .= '                                        Online �������'."\n";
			$result .= '                                    </h3>'."\n";
			$result .= '                                            <div class="form-left-pad">'."\n";
			$result .= '                                        	<div class="rows-input">'."\n";



// dan online

$result .= '

 <video
    id=video-555-dan
    class="video-js"
    controls
    preload="auto"
    width="610"
    height="344"
    poster="../images/video/10002.jpg"
    data-setup="{}"
  >
    <source src="../content/video/10002hd1080.mp4" type="video/mp4" />
    </p>
  </video>

    <script>
            var player = videojs("video-555-dan");
            player.play();
    </script>


'."\n";





			$result .= '                                		</div>'."\n";
			$result .= '                           			</div>'."\n";

			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";
			return $result;
		}

/*
		static function templateOnline($info) {
			$result  = "";

			$result .= '<div id="static">'."\n";
			$result .= '		<h1>'.$info['name'].'</h1>'."\n";
			$result .= '	<div class="long_line"></div>'."\n";
			$result .= stripslashes($info['text']);
			
			$result .= '<div class="pl" id="playerBig">'."\n";
			$result .= '    <a href="http://www.adobe.com/go/getflashplayer">'."\n";
			$result .= '	<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>'."\n";
			$result .= '    </a>'."\n";
			$result .= '</div>'."\n";
$result .= '
    <script type="text/javascript">
	var flashvars = {\'id\':\'/video/100000\'};
	var params = {};
	params.bgcolor = "#F2EEE9";
	params.allowFullscreen = true;

	var attributes = {};
	swfobject.embedSWF("/images/player.swf", "playerBig", "100%", "100%", "10.0.0", false, flashvars, params, attributes);
	
	function qpInitialized()
	{
	//	alert(\'Player Initialized\')
	}

	function qpFinished(url)
	{
	
	    //document.getElementById("playerBig").startVideo(url);
	}

    </script>';
			$result .= '	<div class="clear"></div><br /><br /><div align="center"><h1>��������� �������</h1></div>'."\n";

			$result .= '	</div>'."\n";

			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";
			return $result;
		}

*/

		static function templateOnline2($info) {
			$result  = "";

			$result .= '<div id="static">'."\n";
			$result .= '		<h1>'.$info['name'].'</h1>'."\n";
			$result .= '	<div class="long_line"></div>'."\n";
			$result .= stripslashes($info['text']);
			
			$result .= '<div class="pl" id="playerBig">'."\n";
			$result .= '    <a href="http://www.adobe.com/go/getflashplayer">'."\n";
			$result .= '	<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>'."\n";
			$result .= '    </a>'."\n";
			$result .= '</div>'."\n";
$result .= '
    <script type="text/javascript">
	var flashvars = {\'id\':\'/video/112\', \'online\': \'true\', \'autostart\': \'true\'};
	var params = {};
	params.bgcolor = "#F2EEE9";
	params.allowFullscreen = true;

	var attributes = {};
	swfobject.embedSWF("/images/player.swf", "playerBig", "100%", "100%", "10.0.0", false, flashvars, params, attributes);
	

	function qpFinished(url)
	{
	
	    //document.getElementById("playerBig").startVideo(url);
	}

    </script>';
			$result .= '	<div class="clear"></div><br /><br /><div align="center"><h1>��������� �������</h1></div>'."\n";

			$result .= '	</div>'."\n";

			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";
			return $result;
		}



		static function template404() {
			$result  = "";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                        <div class="shadowed-light static boxed">'."\n";
			$result .= '                            <div class="border">'."\n";
			$result .= '                                <div class="inner-border w-910">'."\n";
			$result .= '                            	<h3 class="title2line">'."\n";
			$result .= '                                        �������� �� �������'."\n";
			$result .= '                                    </h3>'."\n";
			$result .= '�������������� �������';
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}

		static function templateSchool($listSchool) {
			$result  = "";

			$result .= '<div id="login_left">'."\n";
			$result .= '		<h1>���������� ���</h1>'."\n";
			$result .= '	<div class="long_line"></div>'."\n";
			if (!empty($listSchool) and count($listSchool)>0) {
				foreach ($listSchool as $key=>$school) {
					$result .= ($key+1).". <a href='/fishschool/{$school['id']}'>{$school['name']}</a><BR/>\n";
				}
			}

			$result .= '	</div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";
			return $result;
		}

		static function templateSchoolStory($listStory) {
			$result  = "";


			$result .= '<div id="static">'."\n";
			$result .= '		<h1>���������� ���</h1>'."\n";
			$result .= '	<div class="long_line"></div>'."\n";
			if (!empty($listStory) and count($listStory)>0) {
				foreach ($listStory as $key=>$story) {
					if (file_exists("images/school/{$story['id']}.png")) $result .= "<img src='/images/school/{$story['id']}.png' border='0' align='left' style='margin-right: 10px'/>";
					$result .= "<h2>{$story['name']}</h2>\n";
					$result .= substr(strip_tags(stripslashes($story['text'])), 0, 500)."... <a href='/fishschool/{$story['pid']}/{$story['id']}'>���������</a>\n";
					$result .= "<div style='clear: both; height: 20px'></div>";
					$result .= '	<div class="long_line"></div>'."\n";
					$result .= "<div style='clear: both'></div>";
				}
			}

			$result .= '	</div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";
			return $result;
		}

		static function templateSchoolStoryView($info) {
			$result  = "";

			$result .= '<div id="static">'."\n";
			$result .= '		<h1>'.$info['name'].'</h1>'."\n";
			$result .= '	<div class="long_line"></div>'."\n";
			$result .= stripslashes($info['text']);
			$result .= '	</div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";
			return $result;
		}

		static function templateNews($listNews) {
			$result  = "";

			$result .= '<div id="login_left">'."\n";
			$result .= '	<div class="long_line"></div>'."\n";
			if (!empty($listNews) and count($listNews)>0) {
				foreach ($listNews as $key=>$news) {
					if (file_exists("images/news/{$news['id']}.png")) $result .= "<img src='/images/news/{$news['id']}.png' border='0' align='left' />";
					$result .= "<h2>{$news['caption']}</h2>\n";
					$result .= "<a href='/news/{$news['id']}'>".stripslashes($news['small_text'])."</a>\n";
					$result .= "<div style='clear: both'></div>";
				}
			}

			$result .= '	</div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";
			return $result;
		}

		static function templateNewsInfo($info) {
			$result  = "";

			$result .= '<div id="login_left">'."\n";
			$result .= '		<h1>'.$info['caption'].'</h1>'."\n";
			$result .= '	<div class="long_line"></div>'."\n";
			$result .= stripslashes($info['text']);
			$result .= '	</div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";
			return $result;
		}

		static function templateLogin() {
			$result  = "";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '            	    <div class="boxed mar-b10 autror-reg">'."\n";
			$result .= '                    	<div class="two-colums-left">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                            <h3 class="title2line">����</h3>'."\n";
			$result .= '                                            <div class="form-left-pad">'."\n";
			$result .= '						<form id="formLoginUser" onSubmit="return false;" enctype="multipart/form-data">'."\n";
			$result .= '                                        	<div class="rows-input">'."\n";
			$result .= '                                            	<label for="login">����� (��� e-mail, ��������� ��� �����������)</label>'."\n";
			$result .= '                                            	<input id="login" type="text" name="email" value="'.$_COOKIE["authLogin"].'" />'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="rows-input">'."\n";
			$result .= '                                            	<label for="password">������</label>'."\n";
			$result .= '                                            	<input id="password" type="password" name="password" value="'.$_COOKIE["authPass"].'" />'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="rows-input">'."\n";
			$result .= '                                            	<span class="float-r">'."\n";
			$result .= '                                                	<a onClick="viewRememberPassword()" style="cursor: pointer">������ ������?</a>'."\n";
			$result .= '                                                    </span>'."\n";
			$result .= '                                            	<input id="remember-me" type="checkbox" name="remember" value="1" '.(@$_COOKIE["authLogin"] != "" &&@$_COOKIE["authPass"]!=""? "CHECKED": "").' />'."\n";
			$result .= '                                            	<label class="inline-label" for="remember-me">��������� ����</label>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <a class="button button-dark" onClick="authUser(); return false;" style="cursor: pointer">'."\n";
			$result .= '                                                    <span>�����</span>'."\n";
			$result .= '                                                </a>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '						</form>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";

			$result .= '                            <div class="two-colums-right">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                            <h3 class="title2line">�����������</h3>'."\n";
			$result .= '                                            <div class="form-left-pad">'."\n";
			$result .= '                                        	<div class="rows-input">'."\n";
			$result .= '                                            	<p><strong>���� �� ��� �� ����������������, �� �����������������.</strong></p> <p>��������� ����������� �� ��������� ������ �� ���� ������������ �����, ����������� ���������� �� ����������� ����� �� e-mail � ������ ������...</p> <p>��� ����, ����� �� ����� �������� ��� ��������� 555hf.tv ��� ���������� ������ ���������� �����, ��� ���������� 500 ���/���.</p>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <a class="button button-dark" href="/reg">'."\n";
			$result .= '                                                    <span>������������������</span>'."\n";
			$result .= '                                                </a>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}






















        static function templateForum($forums, $listBanners) {
            $result  = "";

            $result .= '             <div class="main-back">'."\n";
            $result .= '            	<div class="main-container">'."\n";
            $result .= '            	    <div class="boxed mar-b10">'."\n";
            $result .= '                            <div class="left-menu big-menu">'."\n";
            $result .= '                                <div class="shadowed-light mar-b10">'."\n";
            $result .= '                                    <div class="border">'."\n";
            $result .= '                                        <div class="inner-border playlist-left">'."\n";
            $result .= '                                    	<div class="playlist-left">'."\n";
            $result .= '                                        	<h3 class="title2line">'."\n";
            $result .= '                                                    �������� �������!'."\n";
            $result .= '                                                </h3>'."\n";
            $result .= '                                        	<div class="playlist-list boxed">'."\n";
            $result .= '                                            	<p><strong>����� ���������� �� ����� 555huntfishing.tv.</strong></p>'."\n";
            $result .= '                                                    <p>����� �� ������ ������ ����� �����������, ���� ����� ������ ����������, ���������� ���� ��� �������� � ������ ������� ���������� � �������� ������.</p>'."\n";
	    if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth'] == 1)
            	$result .= '			<h5>�� ������ ��:</span> '.$_SESSION['AUTH']['lastname']." ".$_SESSION['AUTH']['firstname'].'</h5>'."\n";
	    else {
        	$result .= '			<p>����� �������� �� ������ �� ������ ���� <a href="/reg">������������������</a> �������������.</p>'."\n";
                $result .= '                                                    <a class="button button-dark" href="/account">'."\n";
	        $result .= '                                                	<span>�����</span>'."\n";
    	        $result .= '                                                    </a>'."\n";
	    }
            $result .= '                                                    <h5>����� ��� �� �������� ������</h5>'."\n";
            $result .= '                                                    <div class="hr2"></div>'."\n";
            $result .= '			<form action="/forum/search" method="post" id="formSearchForum">'."\n";
            $result .= '                                                    <div class="search-by-word">'."\n";
            $result .= '                                                        <a class="button button-dark float-r" onClick="document.getElementById(\'formSearchForum\').submit()">'."\n";
            $result .= '                                                            <span>�����</span>'."\n";
            $result .= '                                                        </a>'."\n";
            $result .= '                                                        <span>'."\n";
            $result .= '                                                            <input type="text" name="searchText" />'."\n";
            $result .= '                                                        </span>'."\n";
            $result .= '                                                    </div>'."\n";
            $result .= '			</form>'."\n";

            $result .= '                                                </div>'."\n";
            $result .= '                                            </div>'."\n";
            $result .= '                                        </div>'."\n";
            $result .= '                                    </div>'."\n";
            $result .= '                                </div>'."\n";
            $result .= '                                <div class="banners-video">'."\n";

			if (!empty($listBanners) and count($listBanners)>0) {
				foreach ($listBanners as $banner) {
					$result .= '                        	<div class="mar-b10">'."\n";
					if ($banner['url'] != "") 
						$result .= '                            	<a href="'.$banner['url'].'" '.(strpos($banner['url'], "555hf.tv")!==false? "": "target=\"_blank\"").'><img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" /></a>'."\n";
					else
						$result .= '                            	<img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" />'."\n";
					$result .= '                                </div>'."\n";
				}
			}

            $result .= '                                </div>'."\n";
            $result .= '                            </div>'."\n";

            $result .= '                            <div class="video-roz">'."\n";
            $result .= '                        	<div class="shadowed-light">'."\n";
            $result .= '                                    <div class="border">'."\n";
            $result .= '                                        <div class="inner-border">'."\n";
            $result .= '                                    	<h3 class="title2line">'."\n";
            $result .= '                                                �������� ����'."\n";
            $result .= '                                            </h3>'."\n";
            $result .= '                                            <div>'."\n";
            $result .= '                                                <div class="mar-b-20 boxed">'."\n";

            foreach ($forums as $forum) {
                $result .= '                                                  <div class="item-video">'."\n";
                $result .= '                                                      <a href="/forum/'.$forum['id'].'"><h5 class="program-title">'.$forum['name'].'</h5></a>'."\n";
                $result .= '                                                      <div class="mar-b10 boxed">'."\n";
                $result .= '                                                        <div class="prw-forum">'."\n";
                $result .= '                                                            <a href="/forum/'.$forum['id'].'">'."\n";
                $result .= '                                                                <img src="/images/forum/'.(file_exists("./images/forum/".$forum['id'].".png") ? $forum['id'] : "no").'.png" width="82" height="74" alt="'.$forum['name'].'" title="'.$forum['name'].'">'."\n";
#                $result .= '                                                                <img src="/images/forum/'.$forum['id'].'.png" width="82" height="74" alt="'.$forum['name'].'" title="'.$forum['name'].'">'."\n";
                $result .= '                                                            </a>'."\n";
                $result .= '                                                        </div>'."\n";
                $result .= '                                                        <div class="bar-forum">'."\n";
                $result .= '                                                            <div class="text">'."\n";
                $result .= '                                                        	<p><a href="/forum/'.$forum['id'].'">'.strip_tags(stripslashes($forum['text'])).'</a></p>'."\n";
                $result .= '                                                            </div>'."\n";
                $result .= '                                                            <div class="static-topic">'."\n";
                $result .= '                                                        	<p>����������:</p>'."\n";
                $result .= '                                                                <p class="st">���: <strong>'.$forum['count_topic'].'</strong><br />'."\n";
                $result .= '                                                                �������: <strong>'.$forum['count_post'].'</strong><br />'."\n";
                $result .= '                                                                ����������: <strong>'.$forum['count_view'].'</strong>'."\n";
                $result .= '                                                                </p>'."\n";
                $result .= '                                                            </div>'."\n";
                $result .= '                                                            <div class="static-topic">'."\n";
                $result .= '                                                        	<p>��������� �����:</p>'."\n";
                if ($forum['last_topic_id'] == 0) 
                    $result .= '<p>��� ���������</p>';
                else {
                    $result .= '                                                                <p class="st">�����: <strong>'.$forum['last_post_user'].'</strong><br />'."\n";
                    $result .= '                                                                '.date("d.m.Y", $forum['last_post_date']).'<br />'."\n";
                    $result .= '                                                                ����: <a href="/forum/'.$forum['id'].'/'.$forum['last_topic_id'].'">'.(strlen($forum['last_topic_name'])>30? substr($forum['last_topic_name'], 0, 35)."...": $forum['last_topic_name']).'</a>'."\n";
                    $result .= '                                                                </p>'."\n";
                }
                $result .= '                                                            </div>'."\n";
                $result .= '                                                        </div>'."\n";
                $result .= '                                                      </div>'."\n";
	        $result .= '                                                  </div>'."\n";
		$result .= '                                                  <div class="hr2"></div>'."\n";
	    }

            $result .= '                                                  </div>'."\n";
            $result .= '                                          </div>'."\n";
            $result .= '                                      </div>'."\n";
            $result .= '                                    </div>'."\n";
            $result .= '                                </div>'."\n";
            $result .= '                            </div>'."\n";
            $result .= '                        </div>'."\n";
            $result .= '            	</div>'."\n";

            return $result;
        }



        static function templateTopic($infoForum, $topics, $listBanners) {
            $result  = "";

            $result .= '            <div class="main-back">'."\n";
            $result .= '            	<div class="main-container">'."\n";
            $result .= '            	    <div class="boxed mar-b10">'."\n";
            $result .= '                            <div class="left-menu big-menu">'."\n";
            $result .= '                                <div class="shadowed-light mar-b10">'."\n";
            $result .= '                                    <div class="border">'."\n";
            $result .= '                                        <div class="inner-border playlist-left">'."\n";
            $result .= '                                    	<div class="playlist-left">'."\n";
            $result .= '                                        	<h3 class="title2line">'."\n";
            $result .= '                                                    �������� �������!'."\n";
            $result .= '                                                </h3>'."\n";
            $result .= '                                        	<div class="playlist-list boxed">'."\n";
            $result .= '                                            	<p><strong>����� ���������� �� ����� 555huntfishing.tv.</strong></p>'."\n";
            $result .= '                                                    <p>����� �� ������ ������ ����� �����������, ���� ����� ������ ����������, ���������� ���� ��� �������� � ������ ������� ���������� � �������� ������.</p>'."\n";

	    if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth'] == 1)
            	$result .= '			<h5>�� ������ ��:</span> '.$_SESSION['AUTH']['lastname']." ".$_SESSION['AUTH']['firstname'].'</h5>'."\n";
	    else {
        	$result .= '			<p>����� �������� �� ������ �� ������ ���� <a href="/reg">������������������</a> �������������.</p>'."\n";
                $result .= '                                                    <a class="button button-dark" href="/account">'."\n";
	        $result .= '                                                	<span>�����</span>'."\n";
    	        $result .= '                                                    </a>'."\n";
	    }

            $result .= '                                                    <h5>����� ��� �� �������� ������</h5>'."\n";
            $result .= '                                                    <div class="hr2"></div>'."\n";
            $result .= '			<form action="/forum/search" method="post" id="formSearchForum">'."\n";
            $result .= '                                                    <div class="search-by-word">'."\n";
            $result .= '                                                        <a class="button button-dark float-r" onClick="document.getElementById(\'formSearchForum\').submit()">'."\n";
            $result .= '                                                            <span>�����</span>'."\n";
            $result .= '                                                        </a>'."\n";
            $result .= '                                                        <span>'."\n";
            $result .= '                                                            <input type="text" name="searchText" />'."\n";
            $result .= '                                                        </span>'."\n";
            $result .= '                                                    </div>'."\n";
            $result .= '			</form>'."\n";

            $result .= '                                                </div>'."\n";
            $result .= '                                            </div>'."\n";
            $result .= '                                        </div>'."\n";
            $result .= '                                    </div>'."\n";
            $result .= '                                </div>'."\n";
            $result .= '                                <div class="banners-video">'."\n";
			if (!empty($listBanners) and count($listBanners)>0) {
				foreach ($listBanners as $banner) {
					$result .= '                        	<div class="mar-b10">'."\n";
					if ($banner['url'] != "") 
						$result .= '                            	<a href="'.$banner['url'].'" '.(strpos($banner['url'], "555hf.tv")!==false? "": "target=\"_blank\"").'><img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" /></a>'."\n";
					else
						$result .= '                            	<img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" />'."\n";
					$result .= '                                </div>'."\n";
				}
			}
            $result .= '                                </div>'."\n";
            $result .= '                            </div>'."\n";
            $result .= '                            <div class="video-roz">'."\n";
            $result .= '                        	<div class="shadowed-light">'."\n";
            $result .= '                                    <div class="border">'."\n";
            $result .= '                                        <div class="inner-border">'."\n";
            $result .= '                                    	<a class="button button-dark float-r" href="/forum/'.$infoForum['id'].'/add">'."\n";
            $result .= '                                                <span>����� ����</span>'."\n";
            $result .= '                                            </a>'."\n";
            $result .= '                                    	<h3 class="title2line">'."\n";
            $result .= '                                                �������� ����'."\n";
            $result .= '                                            </h3>'."\n";
            $result .= '                                            <p><a href="/forum">�����</a> -&gt; '.stripslashes($infoForum['name']).'</p>'."\n";

            $result .= '                                            <div class="hr2"></div>'."\n";
            $result .= '                                            <div>'."\n";
            $result .= '                                                <div class="mar-b-20 boxed">'."\n";


            if (!empty($topics) and count($topics)>0) {
                foreach ($topics as $topic) {
                    $result .= '                                                  <div class="item-video">'."\n";

#                    if (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth'] == 1 && $_SESSION['AUTH']['is_admin'] == "yes") {
#                        $result .= '<div style="postion: relative; float: right; margin-right: 5px; margin-top: 9px; cursor: pointer;"><img src="/images/del.png" title="�������" onClick="delTopic('.$topic['id'].');"></div>';
#                    }

                    $result .= '                                                      <a href="/forum/'.$topic['id_forum'].'/'.$topic['id'].'"><h5 class="program-title">'.stripslashes($topic['name']).'</h5></a>'."\n";
                    if (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth'] == 1 && $_SESSION['AUTH']['is_admin'] == "yes") {
                        $result .= '<img src="/images/del.png" title="�������" onClick="delTopic('.$topic['id'].');">';
                    }
                    $result .= '                                                      <div class="mar-b10 boxed">'."\n";
                    $result .= '                                                        <div class="prw-forum">'."\n";
                    $result .= '                                                            <a href="/forum/'.$topic['id_forum'].'/'.$topic['id'].'">'."\n";
                    $result .= '                                                                <img src="/images/forum/'.$topic['id_forum'].'.png"" width="82" height="74" alt="" title="">'."\n";
                    $result .= '                                                            </a>'."\n";
                    $result .= '                                                        </div>'."\n";
                    $result .= '                                                        <div class="bar-forum">'."\n";
                    $result .= '                                                            <div class="text">'."\n";
                    $result .= '                                                        	<p><a href="/forum/'.$topic['id_forum'].'/'.$topic['id'].'">'.substr(strip_tags(stripslashes($topic['hint'])), 0, 100).'</a></p>'."\n";
                    $result .= '                                                            </div>'."\n";
                    $result .= '                                                            <div class="static-topic">'."\n";
                    $result .= '                                                        	<p>�������: <strong>'.date("d.m.Y", $topic['datetime']).'</strong></p>'."\n";
                    $result .= '                                                                <p class="st">�����: <strong>'.$topic['autor'].'</strong><br />'."\n";
                    $result .= '                                                                �������: <strong>'.$topic['count_post'].'</strong><br />'."\n";
                    $result .= '                                                                ����������: <strong>'.$topic['count_view'].'</strong>'."\n";
                    $result .= '                                                                </p>'."\n";
                    $result .= '                                                            </div>'."\n";
                    $result .= '                                                            <div class="static-topic">'."\n";
                    $result .= '                                                        	<p>��������� �����:</p>'."\n";
                    $result .= '                                                                <p class="st">�����: <strong>'.$topic['last_post_user'].'</strong><br />'."\n";
                    $result .= '                                                                '.date("d.m.Y", $topic['last_post_date']).''."\n";
                    $result .= '                                                                </p>'."\n";
                    $result .= '                                                            </div>'."\n";
                    $result .= '                                                        </div>'."\n";
                    $result .= '                                                      </div>'."\n";
                    $result .= '                                                  </div>'."\n";
                }
            }
            else {
                    $result .= '	<div class="item-video">��� ��������� ���.</div>'."\n";
            }


            $result .= '                                                </div>'."\n";
/*
            $result .= '                                                  <div class="pager">'."\n";
            $result .= '                                                      <div class="page">'."\n";
            $result .= '                                                       <a href="#">����������</a>'."\n";
            $result .= '                                                       <a href="#">1</a>'."\n";
            $result .= '                                                       <span>'."\n";
            $result .= '                                                           <strong>2</strong>'."\n";
            $result .= '                                                       </span>'."\n";
            $result .= '                                                       <a href="#">3</a>'."\n";
            $result .= '                                                       ...'."\n";
            $result .= '                                                       <a href="#">45</a>'."\n";
            $result .= '                                                       <a href="#">���������</a>'."\n";
            $result .= '                                                   </div>'."\n";
            $result .= '                                          </div>'."\n";
*/
            $result .= '                                      </div>'."\n";
            $result .= '                                    </div>'."\n";
            $result .= '                                </div>'."\n";
            $result .= '                            </div>'."\n";
            $result .= '                        </div>'."\n";
            $result .= '            	</div>'."\n";
            $result .= '                </div>'."\n";

            return $result;
        }



        static function templateNewTopic($infoForum, $listBanners, $err) {
            $result  = "";

            $result .= '            <div class="main-back">'."\n";
            $result .= '            	<div class="main-container">'."\n";
            $result .= '            	    <div class="boxed mar-b10">'."\n";
            $result .= '                            <div class="left-menu big-menu">'."\n";
            $result .= '                                <div class="shadowed-light mar-b10">'."\n";
            $result .= '                                    <div class="border">'."\n";
            $result .= '                                        <div class="inner-border playlist-left">'."\n";
            $result .= '                                    	<div class="playlist-left">'."\n";
            $result .= '                                        	<h3 class="title2line">'."\n";
            $result .= '                                                    �������� �������!'."\n";
            $result .= '                                                </h3>'."\n";
            $result .= '                                        	<div class="playlist-list boxed">'."\n";
            $result .= '                                            	<p><strong>����� ���������� �� ����� 555huntfishing.tv.</strong></p>'."\n";
            $result .= '                                                    <p>����� �� ������ ������ ����� �����������, ���� ����� ������ ����������, ���������� ���� ��� �������� � ������ ������� ���������� � �������� ������.</p>'."\n";

	    if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth'] == 1)
            	$result .= '			<h5>�� ������ ��:</span> '.$_SESSION['AUTH']['lastname']." ".$_SESSION['AUTH']['firstname'].'</h5>'."\n";
	    else {
        	$result .= '			<p>����� �������� �� ������ �� ������ ���� <a href="/reg">������������������</a> �������������.</p>'."\n";
                $result .= '                                                    <a class="button button-dark" href="/account">'."\n";
	        $result .= '                                                	<span>�����</span>'."\n";
    	        $result .= '                                                    </a>'."\n";
	    }

            $result .= '                                                    <h5>����� ��� �� �������� ������</h5>'."\n";
            $result .= '                                                    <div class="hr2"></div>'."\n";
            $result .= '			<form action="/forum/search" method="post" id="formSearchForum">'."\n";
            $result .= '                                                    <div class="search-by-word">'."\n";
            $result .= '                                                        <a class="button button-dark float-r" onClick="document.getElementById(\'formSearchForum\').submit()">'."\n";
            $result .= '                                                            <span>�����</span>'."\n";
            $result .= '                                                        </a>'."\n";
            $result .= '                                                        <span>'."\n";
            $result .= '                                                            <input type="text" name="searchText" />'."\n";
            $result .= '                                                        </span>'."\n";
            $result .= '                                                    </div>'."\n";
            $result .= '			</form>'."\n";

            $result .= '                                                </div>'."\n";
            $result .= '                                            </div>'."\n";
            $result .= '                                        </div>'."\n";
            $result .= '                                    </div>'."\n";
            $result .= '                                </div>'."\n";
            $result .= '                                <div class="banners-video">'."\n";
			if (!empty($listBanners) and count($listBanners)>0) {
				foreach ($listBanners as $banner) {
					$result .= '                        	<div class="mar-b10">'."\n";
					if ($banner['url'] != "") 
						$result .= '                            	<a href="'.$banner['url'].'" '.(strpos($banner['url'], "555hf.tv")!==false? "": "target=\"_blank\"").'><img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" /></a>'."\n";
					else
						$result .= '                            	<img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" />'."\n";
					$result .= '                                </div>'."\n";
				}
			}
            $result .= '                                </div>'."\n";
            $result .= '                            </div>'."\n";
            $result .= '                            <div class="video-roz">'."\n";
            $result .= '                        	<div class="shadowed-light">'."\n";
            $result .= '                                    <div class="border">'."\n";
            $result .= '                                        <div class="inner-border">'."\n";
            $result .= '                                    	<h3 class="title2line">'."\n";
            $result .= '                                                ������� ����� ����'."\n";
            $result .= '                                            </h3>'."\n";

	    if ($err != "") {
		$result .= "<div class=\"center\"><font color=\"red\">{$err}</font></div><BR/>\n";
	    }

            if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth']==1) {
                $result .= "<form method=\"POST\" id=\"formForumAddPost\">\n";
                $result .= '                                            <div class="rows-input">'."\n";
                $result .= '                                                <label for="title"><em>* </em>���������:</label>'."\n";
                $result .= '                                                <input type="text" id="title" name="captionTopic" value="'.$_POST['captionTopic'].'">'."\n";
                $result .= '                                            </div>'."\n";
                $result .= '                                            <div class="rows-input">'."\n";
                $result .= '                                                <label for="descr"><em>* </em>��������:</label>'."\n";
                $result .= '                                                <input type="text" id="desc" name="hintTopic" value="'.$_POST['hintTopic'].'">'."\n";
                $result .= '                                            </div>'."\n";
                $result .= '                                            <div class="rows-input">'."\n";
                $result .= '                                                <label for="text">����� ���������</label>'."\n";
                $result .= '                                                <textarea id="text" name="textTopic">'.$_POST['textTopic'].'</textarea>'."\n";
                $result .= '                                            </div>'."\n";
                $result .= '                                            <a class="button button-dark" onClick="document.getElementById(\'formForumAddPost\').submit()">'."\n";
                $result .= '                                                <span>�������</span>'."\n";
                $result .= '                                            </a>'."\n";
                $result .= "</form>\n";
            }

            $result .= '                                      </div>'."\n";
            $result .= '                                    </div>'."\n";
            $result .= '                                </div>'."\n";
            $result .= '                            </div>'."\n";
            $result .= '                        </div>'."\n";
            $result .= '            	</div>'."\n";

            return $result;
        }


        static function templatePost($forum, $topic, $posts, $listBanners, $err) {
            $result  = "";

            $result .= '            <div class="main-back">'."\n";
            $result .= '            	<div class="main-container">'."\n";
            $result .= '            	    <div class="boxed mar-b10">'."\n";
            $result .= '                            <div class="left-menu big-menu">'."\n";
            $result .= '                                <div class="shadowed-light mar-b10">'."\n";
            $result .= '                                    <div class="border">'."\n";
            $result .= '                                        <div class="inner-border playlist-left">'."\n";
            $result .= '                                    	<div class="playlist-left">'."\n";
            $result .= '                                        	<h3 class="title2line">'."\n";
            $result .= '                                                    �������� �������!'."\n";
            $result .= '                                                </h3>'."\n";
            $result .= '                                        	<div class="playlist-list boxed">'."\n";
            $result .= '                                            	<p><strong>����� ���������� �� ����� 555huntfishing.tv.</strong></p>'."\n";
            $result .= '                                                    <p>����� �� ������ ������ ����� �����������, ���� ����� ������ ����������, ���������� ���� ��� �������� � ������ ������� ���������� � �������� ������.</p>'."\n";

	    if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth'] == 1)
            	$result .= '			<h5>�� ������ ��:</span> '.$_SESSION['AUTH']['lastname']." ".$_SESSION['AUTH']['firstname'].'</h5>'."\n";
	    else {
        	$result .= '			<p>����� �������� �� ������ �� ������ ���� <a href="/reg">������������������</a> �������������.</p>'."\n";
                $result .= '                                                    <a class="button button-dark" href="/account">'."\n";
	        $result .= '                                                	<span>�����</span>'."\n";
    	        $result .= '                                                    </a>'."\n";
	    }

            $result .= '                                                    <h5>����� ��� �� �������� ������</h5>'."\n";
            $result .= '                                                    <div class="hr2"></div>'."\n";
            $result .= '			<form action="/forum/search" method="post" id="formSearchForum">'."\n";
            $result .= '                                                    <div class="search-by-word">'."\n";
            $result .= '                                                        <a class="button button-dark float-r" onClick="document.getElementById(\'formSearchForum\').submit()">'."\n";
            $result .= '                                                            <span>�����</span>'."\n";
            $result .= '                                                        </a>'."\n";
            $result .= '                                                        <span>'."\n";
            $result .= '                                                            <input type="text" name="searchText" />'."\n";
            $result .= '                                                        </span>'."\n";
            $result .= '                                                    </div>'."\n";
            $result .= '			</form>'."\n";

            $result .= '                                                </div>'."\n";
            $result .= '                                            </div>'."\n";
            $result .= '                                        </div>'."\n";
            $result .= '                                    </div>'."\n";
            $result .= '                                </div>'."\n";
            $result .= '                                <div class="banners-video">'."\n";
			if (!empty($listBanners) and count($listBanners)>0) {
				foreach ($listBanners as $banner) {
					$result .= '                        	<div class="mar-b10">'."\n";
					if ($banner['url'] != "") 
						$result .= '                            	<a href="'.$banner['url'].'" '.(strpos($banner['url'], "555hf.tv")!==false? "": "target=\"_blank\"").'><img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" /></a>'."\n";
					else
						$result .= '                            	<img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" />'."\n";
					$result .= '                                </div>'."\n";
				}
			}
            $result .= '                                </div>'."\n";
            $result .= '                            </div>'."\n";
            $result .= '                            <div class="video-roz">'."\n";
            $result .= '                        	<div class="shadowed-light">'."\n";
            $result .= '                                    <div class="border">'."\n";
            $result .= '                                        <div class="inner-border">'."\n";
            $result .= '                                    	<a class="button button-dark float-r" href="/forum/'.$forum['id'].'/add">'."\n";
            $result .= '                                                <span>����� ����</span>'."\n";
            $result .= '                                            </a>'."\n";
            $result .= '                                    	<h3 class="title2line">'."\n";
            $result .= '                                                �������� ����'."\n";
            $result .= '                                            </h3>'."\n";
            $result .= '                                            <p><a href="/forum">�����</a> -&gt; <a href="/forum/'.$forum['id'].'">'.stripslashes($forum['name']).'</a> -&gt; '.stripslashes($topic['name']).'</p>'."\n";
            $result .= '                                            <div class="hr2"></div>'."\n";
            $result .= '                                            <div>'."\n";
            $result .= '                                                <div class="mar-b-20 boxed">'."\n";
            $result .= '                                                  <div class="item-video boxed">'."\n";
            $result .= '                                                      <h5 class="program-title">'.stripslashes($topic['name']).'</h5>'."\n";
#            if (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth'] == 1 && $_SESSION['AUTH']['id'] == $posts[0]['id_user']) {
#                $result .= '<div style="postion: relative; float: right; margin-right: -5px; margin-top: 9px; cursor: pointer;"><img src="/images/edit.png" title="��������" onClick="editPost('.$posts[0]['id'].');"></div>';
#            }

            $result .= '                                                      <div>'."\n";
            $result .= '                                                        <div class="prw-forum">'."\n";
            $result .= '                                                            <a href="/profile/'.$posts[0]['id_user'].'">'."\n";
            $result .= '                                                                <img src="/images/users/'.(file_exists($_SERVER['DOCUMENT_ROOT'].'images/users/'.$posts[0]['id_user'].'.jpg')===true? $posts[0]['id_user']: "nophoto").'.jpg" width="82" height="74" alt="" title="">'."\n";
            $result .= '                                                            </a>'."\n";
            $result .= '                                                        </div>'."\n";
            $result .= '                                                        <div class="bar-forum">'."\n";
            $result .= '						    <p class="info-topic"><strong>�������: </strong>'.date("d.m.Y H:i:s", $posts[0]['datetime']).' <strong>�������������: </strong><a href="/profile/'.$posts[0]['id_user'].'">'.$posts[0]['autor'].'</a></p>'."\n";
            $result .= '                                                        	<p>'.stripslashes($posts[0]['text'])."</p>\n";
            $result .= '                                                        </div>'."\n";
            $result .= '                                                      </div>'."\n";
            $result .= '                                                  </div>'."\n";

            if (!empty($posts) and count($posts)>1) {
                $result .= '                                                  <div class="item-video boxed">'."\n";
                $result .= '                                                      <h5 class="program-title">������ �������������</h5>'."\n";
                foreach ($posts as $key => $post) {
                    if ($key != 0) {
                        $result .= '                                                      <div class="boxed mar-b10">'."\n";
                        $result .= '                                                        <div class="prw-forum">'."\n";
                        $result .= '                                                            <a href="/profile/'.$post['id_user'].'">'."\n";
                        $result .= '                                                                <img src="/images/users/'.(file_exists($_SERVER['DOCUMENT_ROOT'].'images/users/'.$post['id_user'].'.jpg')===true? $post['id_user']: "nophoto").'.jpg" width="82" height="74" alt="" title="">'."\n";
                        $result .= '                                                            </a>'."\n";
                        $result .= '                                                        </div>'."\n";
                        $result .= '                                                        <div class="bar-forum">'."\n";
                        $result .= '						    <p class="info-topic"><strong>�������: </strong>'.date("d.m.Y H:i:s", $post['datetime']).' <strong>�������������: </strong><a href="/profile/'.$post['id_user'].'">'.$post['autor'].'</a></p>'."\n";
                        $result .= '                                                        	<p>'.stripslashes($post['text']).'</p>'."\n";
                        $result .= '                                                        </div>'."\n";
                        $result .= '                                                      </div>'."\n";

				if (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth'] == 1 && $_SESSION['AUTH']['id'] == $post['id_user']) {
					$result .= '<div style="postion: relative; float: right; margin-right: -5px; margin-top: 9px; cursor: pointer;"><img src="/images/edit.png" title="��������" onClick="editPost('.$post['id'].');">&nbsp;<img src="/images/del.png" title="�������" onClick="delPost('.$post['id'].');"></div>';
				}
				elseif (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth'] == 1 && $_SESSION['AUTH']['is_admin'] == "yes")
					$result .= '<div style="postion: relative; float: right; margin-right: -5px; margin-top: 9px; cursor: pointer;"><img src="/images/del.png" title="�������" onClick="delPost('.$post['id'].');"></div>';

                    }
                }

                $result .= '                                                  </div>'."\n";
            }

	    if ($err != "") 
		$result .= '<div align="center"><font color="red"><b>'.$err.'</b></font></div>';


            if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth']==1) {
                $result .= '		<form method="POST" id="formForumReply">'."\n";
                $result .= '			<div class="rows-input"><textarea id="about-me" name="textPost"></textarea></div>'."\n";
                $result .= '                                    	<a class="button button-dark" onClick="document.getElementById(\'formForumReply\').submit()">'."\n";
                $result .= '                                                <span>��������</span>'."\n";
                $result .= '                                            </a>'."\n";
                $result .= '		<p></p>'."\n";
                $result .= '		</form>'."\n";
            }

            $result .= '                                                  </div>'."\n";
/*
            $result .= '                                                  <div class="pager">'."\n";
            $result .= '                                                      <div class="page">'."\n";
            $result .= '                                                       <a href="#">����������</a>'."\n";
            $result .= '                                                       <a href="#">1</a>'."\n";
            $result .= '                                                       <span>'."\n";
            $result .= '                                                           <strong>2</strong>'."\n";
            $result .= '                                                       </span>'."\n";
            $result .= '                                                       <a href="#">3</a>'."\n";
            $result .= '                                                       ...'."\n";
            $result .= '                                                       <a href="#">45</a>'."\n";
            $result .= '                                                       <a href="#">���������</a>'."\n";
            $result .= '                                                   </div>'."\n";
            $result .= '                                                  </div>'."\n";
*/

            $result .= '                                          </div>'."\n";
            $result .= '                                      </div>'."\n";
            $result .= '                                    </div>'."\n";
            $result .= '                                </div>'."\n";
            $result .= '                            </div>'."\n";
            $result .= '                        </div>'."\n";
            $result .= '            	</div>'."\n";

            return $result;
        }


        static function templateForumSearch($posts, $listBanners) {
            $result  = "";

            $result .= '            <div class="main-back">'."\n";
            $result .= '            	<div class="main-container">'."\n";
            $result .= '            	    <div class="boxed mar-b10">'."\n";
            $result .= '                            <div class="left-menu big-menu">'."\n";
            $result .= '                                <div class="shadowed-light mar-b10">'."\n";
            $result .= '                                    <div class="border">'."\n";
            $result .= '                                        <div class="inner-border playlist-left">'."\n";
            $result .= '                                    	<div class="playlist-left">'."\n";
            $result .= '                                        	<h3 class="title2line">'."\n";
            $result .= '                                                    �������� �������!'."\n";
            $result .= '                                                </h3>'."\n";
            $result .= '                                        	<div class="playlist-list boxed">'."\n";
            $result .= '                                            	<p><strong>����� ���������� �� ����� 555huntfishing.tv.</strong></p>'."\n";
            $result .= '                                                    <p>����� �� ������ ������ ����� �����������, ���� ����� ������ ����������, ���������� ���� ��� �������� � ������ ������� ���������� � �������� ������.</p>'."\n";

	    if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth'] == 1)
            	$result .= '			<h5>�� ������ ��:</span> '.$_SESSION['AUTH']['lastname']." ".$_SESSION['AUTH']['firstname'].'</h5>'."\n";
	    else {
        	$result .= '			<p>����� �������� �� ������ �� ������ ���� <a href="/reg">������������������</a> �������������.</p>'."\n";
                $result .= '                                                    <a class="button button-dark" href="/account">'."\n";
	        $result .= '                                                	<span>�����</span>'."\n";
    	        $result .= '                                                    </a>'."\n";
	    }

            $result .= '                                                    <h5>����� ��� �� �������� ������</h5>'."\n";
            $result .= '                                                    <div class="hr2"></div>'."\n";
            $result .= '			<form action="/forum/search" method="post" id="formSearchForum">'."\n";
            $result .= '                                                    <div class="search-by-word">'."\n";
            $result .= '                                                        <a class="button button-dark float-r" onClick="document.getElementById(\'formSearchForum\').submit()">'."\n";
            $result .= '                                                            <span>�����</span>'."\n";
            $result .= '                                                        </a>'."\n";
            $result .= '                                                        <span>'."\n";
            $result .= '                                                            <input type="text" name="searchText" />'."\n";
            $result .= '                                                        </span>'."\n";
            $result .= '                                                    </div>'."\n";
            $result .= '			</form>'."\n";

            $result .= '                                                </div>'."\n";
            $result .= '                                            </div>'."\n";
            $result .= '                                        </div>'."\n";
            $result .= '                                    </div>'."\n";
            $result .= '                                </div>'."\n";
            $result .= '                                <div class="banners-video">'."\n";
			if (!empty($listBanners) and count($listBanners)>0) {
				foreach ($listBanners as $banner) {
					$result .= '                        	<div class="mar-b10">'."\n";
					if ($banner['url'] != "") 
						$result .= '                            	<a href="'.$banner['url'].'" '.(strpos($banner['url'], "555hf.tv")!==false? "": "target=\"_blank\"").'><img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" /></a>'."\n";
					else
						$result .= '                            	<img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" />'."\n";
					$result .= '                                </div>'."\n";
				}
			}
            $result .= '                                </div>'."\n";
            $result .= '                            </div>'."\n";
            $result .= '                            <div class="video-roz">'."\n";
            $result .= '                        	<div class="shadowed-light">'."\n";
            $result .= '                                    <div class="border">'."\n";
            $result .= '                                        <div class="inner-border">'."\n";
            $result .= '                                    	<h3 class="title2line">'."\n";
            $result .= '                                               �����'."\n";
            $result .= '                                            </h3>'."\n";

            $result .= '                                            <div>'."\n";
            $result .= '                                                <div class="mar-b-20 boxed">'."\n";


            if (!empty($posts) and count($posts)>0) {
                foreach ($posts as $topic) {
                    $result .= '                                                  <div class="item-video">'."\n";
                    $result .= '                                                      <a href="/forum/'.$topic['id_forum'].'/'.$topic['id'].'"><h5 class="program-title">'.stripslashes($topic['name']).'</h5></a>'."\n";
                    $result .= '                                                      <div class="mar-b10 boxed">'."\n";
                    $result .= '                                                        <div class="prw-forum">'."\n";
                    $result .= '                                                            <a href="/forum/'.$topic['id_forum'].'/'.$topic['id'].'">'."\n";
                    $result .= '                                                                <img src="/images/forum/'.$topic['id_forum'].'.png"" width="82" height="74" alt="" title="">'."\n";
                    $result .= '                                                            </a>'."\n";
                    $result .= '                                                        </div>'."\n";
                    $result .= '                                                        <div class="bar-forum">'."\n";
                    $result .= '                                                            <div class="text">'."\n";
                    $result .= '                                                        	<p><a href="/forum/'.$topic['id_forum'].'/'.$topic['id'].'">'.substr(strip_tags(stripslashes($topic['hint'])), 0, 100).'</a></p>'."\n";
                    $result .= '                                                            </div>'."\n";
                    $result .= '                                                            <div class="static-topic">'."\n";
                    $result .= '                                                        	<p>�������: <strong>'.date("d.m.Y", $topic['datetime']).'</strong></p>'."\n";
                    $result .= '                                                                <p class="st">�����: <strong>'.$topic['autor'].'</strong><br />'."\n";
                    $result .= '                                                                �������: <strong>'.$topic['count_post'].'</strong><br />'."\n";
                    $result .= '                                                                ����������: <strong>'.$topic['count_view'].'</strong>'."\n";
                    $result .= '                                                                </p>'."\n";
                    $result .= '                                                            </div>'."\n";
                    $result .= '                                                            <div class="static-topic">'."\n";
                    $result .= '                                                        	<p>��������� �����:</p>'."\n";
                    $result .= '                                                                <p class="st">�����: <strong>'.$topic['last_post_user'].'</strong><br />'."\n";
                    $result .= '                                                                '.date("d.m.Y", $topic['last_post_date']).''."\n";
                    $result .= '                                                                </p>'."\n";
                    $result .= '                                                            </div>'."\n";
                    $result .= '                                                        </div>'."\n";
                    $result .= '                                                      </div>'."\n";
                    $result .= '                                                  </div>'."\n";
                }
            }
            else {
                    $result .= '	<div class="item-video">��� ��������� ���.</div>'."\n";
            }


            $result .= '                                                </div>'."\n";
/*
            $result .= '                                                  <div class="pager">'."\n";
            $result .= '                                                      <div class="page">'."\n";
            $result .= '                                                       <a href="#">����������</a>'."\n";
            $result .= '                                                       <a href="#">1</a>'."\n";
            $result .= '                                                       <span>'."\n";
            $result .= '                                                           <strong>2</strong>'."\n";
            $result .= '                                                       </span>'."\n";
            $result .= '                                                       <a href="#">3</a>'."\n";
            $result .= '                                                       ...'."\n";
            $result .= '                                                       <a href="#">45</a>'."\n";
            $result .= '                                                       <a href="#">���������</a>'."\n";
            $result .= '                                                   </div>'."\n";
            $result .= '                                          </div>'."\n";
*/
            $result .= '                                      </div>'."\n";
            $result .= '                                    </div>'."\n";
            $result .= '                                </div>'."\n";
            $result .= '                            </div>'."\n";
            $result .= '                        </div>'."\n";
            $result .= '            	</div>'."\n";
            $result .= '                </div>'."\n";


return $result;

            $result .= '<div id="prog2_container">'."\n";
            $result .= '		<div id="forum_left">'."\n";
            $result .= '			<p class="forum_title">�������� �������!<br /><br /></p>'."\n";
            $result .= '			<p class="forum_gray_text"><strong>����� ���������� �� ����� 555huntfishing.tv.</strong> ����� �� ������ ������ ����� �����������, ���� ����� ������ ����������, ���������� ���� ��� �������� � ������ <strong>������� ���������� � �������� ������.</strong></p>'."\n";

            $result .= '			<div class="forum_line"></div>'."\n";

	    if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth'] == 1)
            	$result .= '			<p class="forum_title"><span class="forum_brown_text">�� ������ ��:</span> '.$_SESSION['AUTH']['lastname']." ".$_SESSION['AUTH']['firstname'].'</p>'."\n";
	    else {
    		$result .= '			<span class="forum_brown_text">����� �������� �� ������ �� ������ ���� <strong>������������������ �������������.</strong><br /><br /></span>'."\n";
            	$result .= '			<div class="forum_line"></div>'."\n";
            	$result .= '			<a href="#" title="������������������"><img class="forum_button1" src="/images/zareg.gif" alt="" /></a>'."\n";
            	$result .= '			<a href="#" title="�����"><img class="forum_button1" src="/images/login_enter.gif" alt="" /></a>'."\n";
	    }

            $result .= '			<div class="clear"></div>'."\n";

            $result .= '			<div class="forum_line"></div>'."\n";
            $result .= '			<div class="wood_panel_mini">����� ��� �� �������� ������</div>'."\n";
            $result .= '			<form action="/forum/search" method="post" id="forum_find">'."\n";
            $result .= '				<input type="text" class="forum_find_field" name="searchText" />'."\n";
            $result .= '				<input type="image" class="forum_find_img" src="/images/find4.gif"  />'."\n";
            $result .= '			</form>'."\n";

            $result .= '			<div class="forum_line"></div>'."\n";
#            $result .= '			<a href="/test/" title="���� ������"><img src="/images/test2.jpg" alt="" /></a>'."\n";
            $result .= '			<a onClick="messageBox(\'������ ����� �������� 1 �������\')" title="���� ������"><img src="/images/test2.jpg" alt="" /></a>'."\n";
            $result .= '			<div class="forum_line"></div>'."\n";
            $result .= '			<a href="/contest/" title="�������"><img src="/images/konk.jpg" alt="" /></a>'."\n";
            $result .= '			<div class="forum_line"></div>'."\n";
            $result .= '			<a href="/footstep/" title="������ ���� ����"><img src="/images/ostav_sled.jpg" alt="" /></a>'."\n";
            $result .= '		</div>'."\n";

            $result .= '	<div id="forum_right">'."\n";


	    if (!empty($posts) and count($posts)>0) {
		foreach ($posts as $post) {
	            $result .= '		<div class="forum_post">'."\n";
	            $result .= '			<div class="forum_post_top">'."\n";
	            $result .= '				<p class="forum_post_top_title"><a href="/forum/'.$post['id_forum'].'/'.$post['id'].'">'.$post['name'].'</a></p>'."\n";
	            $result .= '				<p class="forum_post_top_data">�������: <strong>'.date("d.m.Y", $post['last_post_date']).'</strong></p>'."\n";
	            $result .= '				<p class="forum_post_top_last">��������� �����:</p>'."\n";
	            $result .= '			</div>'."\n";

	            $result .= '			<div class="forum_post_foto"><img src="/images/users/'.(file_exists($_SERVER['DOCUMENT_ROOT'].'images/users/'.$post['id_user_author'].'.jpg')===true? $post['id_user_author']: "nophoto").'.jpg" alt="" /></div>'."\n";
	            $result .= '			<div class="forum_post_text">'.substr(strip_tags($post['text']), 0, 150).'...</div>'."\n";
	            $result .= '			<div class="forum_post_box1">'."\n";
	            $result .= '				�����: <strong>'.$post['autor'].'</strong><br /><br />'."\n";
	            $result .= '				�������: <strong>'.$post['count_post'].'</strong><br />'."\n";
	            $result .= '				����������: <strong>'.$post['count_view'].'</strong><br />'."\n";
	            $result .= '			</div>'."\n";
	            $result .= '			<div class="forum_post_box2">'."\n";
	            $result .= '				�����: <strong>'.$post['last_post_user'].'</strong><br /><br />'."\n";
	            $result .= '				<strong>'.date("d.m.Y", $post['last_post_date']).'</strong><br />'."\n";
#	            $result .= '				����: <strong>'.strip.'</strong>'."\n";
	            $result .= '			</div>'."\n";
	            $result .= '			<div class="clear"></div>'."\n";
	            $result .= '		<div class="forum_post_bottom"></div></div>'."\n";
	            $result .= '		<div class="friends_line"></div>'."\n";
		}
	    }

            $result .= '	</div>'."\n";
            $result .= '	</div>'."\n";
            $result .= '	<div class="clear"></div>'."\n";
            $result .= '	<div class="empty"></div>'."\n";
            $result .= '</div>'."\n";

            return $result;
        }





        static function templatePost2($forum, $topic, $posts, $err) {
            $result  = "";

            $result .= "<div class=\"captionPost\">"."\n";
            $result .= "<a href=\"/forum\">�������</a> -> <a href=\"/forum/{$forum['id']}\">{$forum['name']}</a> -> ".stripslashes($topic['name'])."\n";
            $result .= "</div>"."\n";

            foreach ($posts as $post) {
                $result .= "<div class=\"viewPost\">"."\n";
					$result .= "<div class=\"viewPostUserInfo\">"."\n";
                        $result .= "<div class=\"name\"><a href=\"/user/{$post['id_user']}\">{$post['autor']}</a></div>".(file_exists("images/users/foto_{$post['id_user']}.jpg")?"<img src=\"/images/users/foto_{$post['id_user']}.jpg\"/ border=\"0\">": "<img src=\"/images/users/nofoto{$post['sex']}.png\"/ border=\"0\">")."\n";
                	$result .= "</div>"."\n";
					$result .= "<div class=\"viewPostMessage\">"."\n";
						$result .= "<div class=\"viewPostMessageDate\">"."\n";
							$result .= date("d.m.Y H:i:s", $post['datetime'])."<BR/>";
                		$result .= "</div>"."\n";
						$result .= $post['text'];
                	$result .= "</div>"."\n";
                	$result .= "<div class=\"clear\"></div>"."\n";
                $result .= "</div>"."\n";
            }

            $result .= "<div class=\"viewPostAdd\">"."\n";
            $result .= "<div class=\"caption\">�������� �����</div>\n";

            $result .= "<div class=\"formAddComment\">\n";
                if ($err != "") {
                   $result .= "<div class=\"center\"><font color=\"red\">{$err}</font></div>\n";
                }

				if (isset($_SESSION['USER']['auth']) and $_SESSION['USER']['auth']==1) {
					$result .= "<form method=\"POST\">\n";
                	$result .= "<div class=\"center\"><textarea name=\"textPost\"></textarea></div>\n";
                	$result .= "<div class=\"center\"><input type=\"submit\" value=\"��������\" name=\"addPost\" /></div>\n";
            		$result .= "</form>\n";
				}
				else {
            		$result .= "<div class=\"formAddComment\"><div class=\"center\">����� �������� �� ������, ��� ���������� <a href=\"/reg\" class=\"a\">������������������</a> ��� <a href=\"/account/\" class=\"a\">����������������</a></div></div>\n";
				}
            $result .= "</div>\n";

            $result .= "</div>"."\n";

            return $result;
        }

		static function accountSelection() {
			$result = "";
			$num = 1;
			foreach ($_SESSION['selection'] as $sel) {
				$result .= '<div>'."\n";
				$result .= '<span class="selectionNumber">'.$num.'.</span>'."\n";
					$result .= '<span class="selectionNameProgramm">'.$sel['nameType'].'</span>'."\n";
					$result .= '<span class="selectionNameVideo">'.$sel['name'].'</span>'."\n";
					$result .= '<span class="selectionTimeVideo">'.($sel['time'] / 60 > 1? floor($sel['time'] / 60)." ��� ": "").($sel['time'] % 60 > 0? ($sel['time'] % 60)." ���": "����� �� �������").'<span>'."\n";
					$result .= '<span class="selectionButtons">'."\n";
						$result .= '<img src="/images/lk/lk_up.png" border="0" title="����������� �����" onClick="upSelection('.$sel['id'].')" style="cursor: pointer">';
						$result .= '<img src="/images/lk/lk_down.png" border="0" title="����������� ����" onClick="downSelection('.$sel['id'].')" style="cursor: pointer">';
						$result .= '<img src="/images/lk/lk_del.png" border="0" title="������� �� ��������" onClick="delSelection('.$sel['id'].')" style="cursor: pointer">';
					$result .= '</span>'."\n";
				$result .= '</div>'."\n";
				
				$num++;
			}
			return $result;
		}
        
		static function templateAccountMenu() {
			$result = '	<div style="margin: 6px 0 0 80px;" class="lk_text"><a href="/account/">�������</a></div>'."\n";
			$result .= '	<div style="margin: 6px 0 0 281px;" class="lk_text"><a href="/account/edit">�������</a></div>'."\n";
			$result .= '	<div style="margin: 6px 0 0 460px;" class="lk_text"><a href="/account/pay">������</a></div>'."\n";
			$result .= '	<div style="margin: 6px 0 0 600px;" class="lk_text"><a href="/account/selection">��� ��������</a></div>'."\n";
			$result .= '	<div style="margin: 6px 0 0 782px;" class="lk_text"><a href="/account/basket">��� �������</a></div></div><div class="lk_bg"></div>'."\n";
			return $result;
		}

		static function templateAccount($otherData) {
			$result  = "";

			$result .= '<div id="static">'."\n";
			$result .= '		<h1>������ �������</h1>'."\n";
			$result .= '	<div class="long_line"></div>'."\n";
			$result .= '	<div class="lk_bgtop"><div style="margin: 6px 0 0 80px;" class="lk_text"><a href="/account/">�������</a></div>'."\n";

			$result .= viewTemplate::templateAccountMenu();

			$datetimepay = $_SESSION['AUTH']['datetimepay']-time();
			if ($datetimepay < 0) $datetimepay = 0; else $datetimepay = floor($datetimepay/60/60/24);
			$countMonth = floor($_SESSION['AUTH']['money']/$STATIC['abonplata']);
			if ($countMonth > 0) {
			    $startDate	= date("Y-m-01 00:00:00", strtotime("NOW +1 month"));
			    $endDate	= date("Y-m-t 23:59:59", strtotime("{$startDate} +".($countMonth-1)."month"));
			    $datetimepay += floor((strtotime($endDate)-strtotime($startDate))/60/60/24);
			}

			$result .= '	<div style="margin: 20px 0 0 20px;" class="lk_text4"><b>������������:</b> '.$_SESSION['AUTH']['login']."\n";
			$result .= '	<br><br><b>������ �����:</b> '.$_SESSION['AUTH']['money'].' ���.<br><br><b>�������� ����:</b> '.$datetimepay.'<br><br><b>������:</b> '.($datetimepay>0? "<font color=\"green\">�������</font>": "<font color=\"red\">�� �������</font>").'<br><br><br><a href="/view/">�������� 555huntfishing.TV</a></u></div>'."\n";
			$result .= '	<div class="lk_bg"><div class="lk_prof"><div style="margin: 0 0 0 108px;" class="lk_text2"><a href="/account/edit">�������� �������</a> &nbsp; <a onClick="changePass()">�������� ������</a></div>'."\n";

			$result .= '	<div style="margin: 13px 0 0 12px;" class="lk">�������</div><div style="margin: 50px 0 0 15px;" class="lk_text4"><b>���:</b> '.$_SESSION['AUTH']['lastname']." ".$_SESSION['AUTH']['firstname'].'<br><br><b>Email:</b> <a href="mailto:'.$_SESSION['AUTH']['email'].'">'.$_SESSION['AUTH']['email'].'</a><br><br><b>�����:</b> '.$otherData['city'].'</div>'."\n";
			$result .= '	<div class="lk_ava"><img style="margin: 21px 0 0 17px;" src="/images/users/'.(file_exists("images/users/".$_SESSION['AUTH']['id'].'.jpg')? $_SESSION['AUTH']['id']: "nophoto").'.jpg" alt="" /></div></div> <div class="lk_pay"><div style="margin: 13px 0 0 12px;" class="lk">������</div>'."\n";

			$result .= '	<div style="margin: 60px 0 0 20px;" class="lk_text"><a onClick="receipt()">������ ���������� ���������</a><br><br><a onClick="messenger(\''.$_SESSION['AUTH']['lastname']." ".$_SESSION['AUTH']['firstname'].'\', \''.$otherData['city'].'\')">������ �������� (�� ������)</a>'."\n";
			$result .= '	<br><br><a onClick="activepay()">������ ����� ������ ���������<br>(webmoney, ��������� �����)</a></div>'."\n";
			$result .= '	<img style="margin: 166px 0 0 220px;" src="/images/lk/apay.png"></div>'."\n";

			$result .= '	<div class="lk_q"><div style="margin: -13px 0 0 28px;" class="lk">�������� ��������� �����</div>'."\n";
			$result .= '	<div style="margin: 20px 0 0 28px;" class="lk_text3">� ����������� �� �������� ������ ����������� � ��������� �� ������ �������<br>� ����� �������� �������� ���� ��������� �� ���������.'."\n";
#			$result .= '	<br><br><img style="margin-right: 6px;" src="/images/lk/lk_round.png"> HD1080 (�������� ����� �������� ����� 2 ������)'."\n";
			$result .= '	<br><img style="margin-right: 6px; cursor: pointer;" id="qualityHD1080" src="/images/lk/lk_round'.($_SESSION['AUTH']['quality'] == "hd1080"? "_2": "").'.png" onClick="changeQuality(this, \'hd1080\')" > 1080HD - ������� �������� (��������� �������� ��������� 5 ����/���)'."\n";
			$result .= '	<br><img style="margin-right: 6px; cursor: pointer;" id="qualityHD720" src="/images/lk/lk_round'.($_SESSION['AUTH']['quality'] == "hd720"? "_2": "").'.png" onClick="changeQuality(this, \'hd720\')" > 720HD - ������� �������� (��������� �������� ��������� 2.5 ����/���)'."\n";
			$result .= '	<br><img style="margin-right: 6px; cursor: pointer;" id="qualityHD" src="/images/lk/lk_round'.($_SESSION['AUTH']['quality'] == "hd"? "_2": "").'.png" onClick="changeQuality(this, \'hd\')" > HD - ������� �������� (��������� �������� ��������� 1 ����/���)'."\n";
			$result .= '	<br><img style="margin-right: 6px; cursor: pointer;" id="qualitySD" src="/images/lk/lk_round'.($_SESSION['AUTH']['quality'] == "sd"? "_2": "").'.png" onClick="changeQuality(this, \'sd\')" > SD - ������ �������� (��������� �������� ��������� 512 ����/���)</div>'."\n";
			$result .= '	<img style="margin: 175px 0 0 18px; cursor: pointer;" src="/images/lk/lk_save.png" onClick="saveQuality()"><input type="hidden" id="quality" value="'.$_SESSION['AUTH']['quality'].'"></div>'."\n";

#			if (isset($_SESSION['basket']) && !empty($_SESSION['basket']) and count($_SESSION['basket'])>0) {
				$result .= '	<div class="lk_b"><div style="margin: -13px 0 0 20px;" class="lk">�������</div><div class="lk" style="margin-left: 210px; margin-top: -17px;"><a href="/shop">������� � �������</a></div>'."\n";
				$result .= '<div id="basket"></div>';
				$result .= '<script>accountBasket()</script>';
				$result .= '	<a href="/shop/calc"><img style="margin: 175px 0 0 16px;" src="/images/lk/lk_order.png" border="0"></a></div>'."\n";
#			}

#			if (isset($_SESSION['selection']) && !empty($_SESSION['selection']) and count($_SESSION['selection'])>0) {
				$result .= '	<div class="lk_s"><div style="margin: -13px 0 0 24px;" class="lk">��� ��������</div><div class="lk" style="margin-left: 410px; margin-top: -17px;"><a href="/view">��������� ��������</a></div>'."\n";
				$result .= '<div id="selection"></div>';
				$result .= '<script>accountSelection()</script>';
				$result .= '	<a href="/myselection"><img style="margin: 191px 0 0 18px;" src="/images/lk/lk_look.png" border="0"></a></div>'."\n";
#			}
			$result .= '	</div>'."\n";



			$result .= '	<div class="lk_bgbottom"></div>'."\n";
			$result .= '	</div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";
			return $result;
		}

		static function templateAccountEdit($listCountry, $listCity, $listWho, $listFish, $userFish, $idCity) {
			$result  = "";

			$result .= '<div id="static">'."\n";
			$result .= '		<h1>������ �������</h1>'."\n";
			$result .= '	<div class="long_line"></div>'."\n";
			$result .= '	<div class="lk_bgtop2">'."\n";

			$result .= viewTemplate::templateAccountMenu();

			$result .= '	<div class="lk_bg">&nbsp;<div style="margin: 20px 0 0 20px;">'."\n";
			$result .= '		<form id="formRegUser" method="POST" enctype="multipart/form-data" onSubmit="return false;">'."\n";

			$result .= '			<div class="reg_left">'."\n";
			$result .= '				<div id="sled_right_title">���� �������� ������...</div>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="firstname" value="'.$_SESSION['AUTH']['firstname'].'" /><p class="sled_input_title"><span class="red_star">&lowast;</span> ���:</p></div>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="lastname" value="'.$_SESSION['AUTH']['lastname'].'" /><p class="sled_input_title"><span class="red_star">&lowast;</span> �������:</p></div>'."\n";


			list($byear, $bmonth, $bday) = explode("-", $_SESSION['AUTH']['birthday']);
			$result .= '				<div class="sled_select"><p class="sled_input_title"><span class="red_star">&lowast;</span> ���� ��������:</p>'."\n";
			$result .= '					<select name="birthday">'."\n";

			for ($day = 1; $day<=31; $day++)
				$result .= '						<option value="'.(strlen($day)<2? "0".$day: $day).'" '.($day == $bday? "SELECTED": "").'>'.(strlen($day)<2? "0".$day: $day).'</option>'."\n";


			$result .= '					</select>'."\n";	
			$result .= '					<select name="birthmonth">'."\n";

			for ($month = 1; $month<=12; $month++)
				$result .= '						<option value="'.(strlen($month)<2? "0".$month: $month).'" '.($month == $bmonth? "SELECTED": "").'>'.(strlen($month)<2? "0".$month: $month).'</option>'."\n";

			$result .= '					</select>'."\n";			
			$result .= '					<select name="birthyear">'."\n";

			for ($year = 1920; $year<=2010; $year++)
			$result .= '						<option value="'.$year.'" '.($year == $byear? "SELECTED": "").'>'.$year.'</option>'."\n";
			$result .= '					</select>'."\n";
			$result .= '				</div>'."\n";

			$result .= '				<div class="sled_input"><input type="hidden" id="city" name="city" value="'.$_SESSION['AUTH']['id_city'].'"><input type="text" class="sled_text" name="field_city" value="'.stripslashes($idCity['name']).'" id="field_city" onkeyup="if(this.value.length>=3) searchCity(this.value);" /><p class="sled_input_title"><span class="red_star">&lowast;</span> �����:</p><ul id="ulCity"></ul></div>'."\n";
			$result .= '			</div>'."\n";
			
			$result .= '			<div class="reg_right">'."\n";
			$result .= '				<div id="sled_right_title">...</div>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="get_messages" value="yes" '.($_SESSION['AUTH']['get_messages']? "CHECKED": "").' /><p class="sled_input_title"><span class="red_star">&lowast;</span> �������� ����������� �� Email � ����� ����������:</p></div>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="email" value="'.$_SESSION['AUTH']['email'].'" /><p class="sled_input_title"><span class="red_star">&lowast;</span> E-mail:</p></div>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="address" value="'.$_SESSION['AUTH']['address'].'" /><p class="sled_input_title"><span class="red_star">&lowast;</span> ����� ����������:</p></div><br>'."\n";
			$result .= '				<div class="sled_input"><input type="file" class="sled_text" name="photo" value="" /><p class="sled_input_title"><span class="red_star">&lowast;</span> ������:</p></div><br>'."\n";
			$result .= '				<div class="sled_input"><input type="text" class="sled_text" name="maidenname" value="'.$_SESSION['AUTH']['maidenname'].'" /><p class="sled_input_title"><span class="red_star">&lowast;</span> ������� ������� ������:</p></div>'."\n";
			$result .= '				<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="red_star">&lowast;</span> ���������� �� ������, ���� �� �����-���� �������� ������������<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ���� ������������, �� ������� � ��� ������� ������� ����� ������.'."\n";
			$result .= '			</div>'."\n";

			$result .= '			<div class="clear"></div><br />'."\n";
			$result .= '			<div class="friends_line"></div>'."\n";

			$result .= '			<div class="reg_left">'."\n";
#			$result .= '				<div id="sled_right_title">����� ������ ����� �� �������������?</div>'."\n";
			$result .= '			</div><div class="clear"></div><br />'."\n";
			
/*			if (!empty($listFish) and count($listFish)>0) {
				$columnsCount = ceil(count($listFish)/4);

				$result .= '			<div class="reg_mini_column">'."\n";
				foreach ($listFish as $key=>$fish) {
					if ($key % $columnsCount == 0 and $key!=0) {
						$result .= '			</div>'."\n";
						$result .= '			<div class="reg_mini_column">'."\n";
					}

					$result .= '				<input type="checkbox" '.(isset($userFish[$fish['id']])? "CHECKED": "").' id="fish['.$fish['id'].']" name="fish['.$fish['id'].']" value="1" /><label for="fish['.$fish['id'].']">'.$fish['name'].'</label><br />'."\n";
				}
				$result .= '			</div>'."\n";
			}

			$result .= '			<div class="clear"></div><br />'."\n";
			$result .= '			<div class="friends_line"></div>'."\n";
*/
			$result .= '			<center><input type="image" src="/images/lk/lk_save.png" id="reg" onClick="saveAccountData()"/></center>'."\n";
			$result .= '		</form>'."\n";
			$result .= '		<div class="clear"></div>'."\n";
			$result .= '	</div></div>'."\n";

			$result .= '	<div class="lk_bgbottom"></div>'."\n";
			$result .= '	</div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";
			return $result;
		}


		static function templateAccountSelection() {
			$result  = "";

			$result .= '<div id="static">'."\n";
			$result .= '		<h1>������ �������</h1>'."\n";
			$result .= '	<div class="long_line"></div>'."\n";
			$result .= '	<div class="lk_bgtop4"><div style="margin: 6px 0 0 80px;" class="lk_text"><a href="/account/">�������</a></div>'."\n";

			$result .= viewTemplate::templateAccountMenu();

			$result .= '	<div class="lk_bg">&nbsp;<div style="margin: 20px 0 0 20px;">';
				$result .= '<div id="selection"></div>';
				$result .= '<script>accountSelection()</script>';
			$result .= '	<BR/><BR/><BR/><BR/><BR/><BR/></div></div>'."\n";



			$result .= '	<div class="lk_bgbottom"></div>'."\n";
			$result .= '	</div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";
			return $result;
		}

		static function templateAccountBasket() {
			$result  = "";

			$result .= '<div id="static">'."\n";
			$result .= '		<h1>������ �������</h1>'."\n";
			$result .= '	<div class="long_line"></div>'."\n";
			$result .= '	<div class="lk_bgtop5"><div style="margin: 6px 0 0 80px;" class="lk_text"><a href="/account/">�������</a></div>'."\n";

			$result .= viewTemplate::templateAccountMenu();

			$result .= '	<div class="lk_bg">&nbsp;<div style="margin: 20px 0 0 20px;">';
				$result .= '<div id="basket"></div>';
				$result .= '<script>accountBasket()</script>';
			$result .= '	<BR/><BR/><BR/><BR/><BR/><BR/></div></div>'."\n";



			$result .= '	<div class="lk_bgbottom"></div>'."\n";
			$result .= '	</div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";
			return $result;
		}

		static function templateAccountPay() {
			$result  = "";

			$result .= '<div id="static">'."\n";
			$result .= '		<h1>������ �������</h1>'."\n";
			$result .= '	<div class="long_line"></div>'."\n";
			$result .= '	<div class="lk_bgtop3"><div style="margin: 6px 0 0 80px;" class="lk_text"><a href="/account/">�������</a></div>'."\n";

			$result .= viewTemplate::templateAccountMenu();

			$result .= '	<div class="lk_bg">&nbsp;<div style="margin: 20px 0 0 20px;">� ����������';
			$result .= '	<BR/><BR/><BR/><BR/><BR/><BR/></div></div>'."\n";



			$result .= '	<div class="lk_bgbottom"></div>'."\n";
			$result .= '	</div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '	<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";
			return $result;
		}



		static function templateRegHeader() {
			$result = "";
			$result .= '    <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '		      <h2 class="page-title">����������� �� 555hf.tv</h2>'."\n";
                        $result .= '                      <p>��������� �������� ������� www.555hf.tv ������������� ��� ��������� �����, ��������� �������� 18 ���. ���� �� �� �������� ���������� ��������, ������ ��� �������� ��� ������.</p>'."\n";
			$result .= '                      <p>������, ��� �� ������� �������� ���� ��������� � ������������ ��� ����������� �����, ��� ���������� ������� ������� �������� � ��������� ��������� ���� ����� ����.</p>'."\n";
			$result .= '	<form id="formRegUser" enctype="multipart/form-data">'."\n";

			return $result;
		}

		static function templateRegHeaderKLUB() {
			$result = "";
			$result .= '    <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '	<form id="formRegUser" enctype="multipart/form-data">'."\n";

			return $result;
		}

		static function templateRegHeader2() {
			$result = "";

			$result .= '    <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '		      <h2 class="page-title">����������� �� 555hf.tv</h2>'."\n";
                        $result .= '                      <p>��������� �������� ������� www.555hf.tv ������������� ��� ��������� �����, ��������� �������� 18 ���. ���� �� �� �������� ���������� ��������, ������ ��� �������� ��� ������.</p>'."\n";
			$result .= '                      <p>������, ��� �� ������� �������� ���� ��������� � ������������ ��� ����������� �����, ��� ���������� ������� ������� �������� � ��������� �������� ���� ����� ����.</p>'."\n";
			$result .= '	<form id="formRegUser" enctype="multipart/form-data">'."\n";

			return $result;
		}

		static function templateRegFooter() {
			$result = "";
			$result .= '    </form>'."\n";
			$result .= '             		</div>'."\n";
			$result .= '                </div>'."\n";
			return $result;
		}


		static function templateRegStep01() {
			$result = "";
			$result .= '	              			<div class="boxed mar-b10 autror-reg">'."\n";
			$result .= '                    	<div class="two-colums-left">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                            <h3 class="title2line">������� ��������</h3>'."\n";
			$result .= '                                        	<h5>������������� �����������</h5>'."\n";
			$result .= '                                                <div class="hr2"></div>'."\n";
			$result .= '                                                <ul class="desimal">'."\n";
			$result .= '                                            	<li>�������� �������� � ���� ���������: SD (720 � 576 Pix), HD (1280 � 720 Pix), FullHD (1920 � 1080 Pix) �� ������ ������������</li>'."\n";
			$result .= '                                                    <li>�������� ��� �������� ��� �������</li>'."\n";
			$result .= '                                                    <li>���������� ����-���� - ������������ �������� ����� ������� ��� ��������� � ����� ������� �����</li>'."\n";
			$result .= '                                                    <li>�������� ������ ������ �� ���� �������������� ���������� 555hf.tv</li>'."\n";
			$result .= '                                                    <li>����������� � ������, ��������� �����������, ��������� ����� ����</li>'."\n";
			$result .= '                                                    <li>�������� ��-���� �������</li>'."\n";
			$result .= '                                                    <li>��������� ����� ������, ������ � ��������� ����������� � �555 ������</li>'."\n";
			$result .= '                                                    <li>����������� � ��������� 555hf.tv � �������� ������ �����</li>'."\n";
			$result .= '                                                    <li>����������� � ��������� ������ ������� �� �����, ������ �����, ��������� �����, ��������� ���������� ���������� �������������</li>'."\n";
			$result .= '                                                    <li>�������� ��������� ������ ������� 555hf.tv</li>'."\n";
			$result .= '                                                    <li>��������� ������ �� ������ ���������� ��� ������������ ������������ ��������</li>'."\n";
			$result .= '                                                </ul>'."\n";
			$result .= '                                                <div>������ �������� �������������� ����� ������� ������ �������� <b>ONPAY</b></div>'."\n";

			$result .= '                                                <div>'."\n";
			$result .= '                                                    <h5>���������� ��������</h5>'."\n";
			$result .= '                                                    <div class="hr2"></div>'."\n";
			$result .= '                                                    <div class="boxed">'."\n";
			$result .= '                                                        <div class="sbscr-chekbox">'."\n";
			$result .= '                                                            <div class="rows-input">'."\n";
			$result .= '                                                                <input type="checkbox" id="country[0]" name="country[]" value="1"  onClick="checkCountry(0)" '.(isset($_SESSION['REG']['country']) && $_SESSION['REG']['country']==1? "CHECKED": "").'>'."\n";
			$result .= '                                                                <label for="country[0]" class="inline-label">���������� ���������</label>'."\n";
			$result .= '                                                            </div>'."\n";
			$result .= '                                                            <div class="rows-input">'."\n";
			$result .= '                                                                <input type="checkbox" id="country[1]" name="country[]" value="2"  onClick="checkCountry(1)" '.(isset($_SESSION['REG']['country']) && $_SESSION['REG']['country']==2? "CHECKED": "").'>'."\n";
			$result .= '                                                                <label for="country[1]" class="inline-label">�������</label>'."\n";
			$result .= '                                                            </div>'."\n";
			$result .= '                                                            <div class="rows-input">'."\n";
			$result .= '                                                                <input type="checkbox" id="country[2]" name="country[]" value="3"  onClick="checkCountry(2)" '.(isset($_SESSION['REG']['country']) && $_SESSION['REG']['country']==3? "CHECKED": "").'>'."\n";
			$result .= '                                                                <label for="country[2]" class="inline-label">����������</label>'."\n";
			$result .= '                                                            </div>'."\n";
			$result .= '                                                            <div class="rows-input">'."\n";
			$result .= '                                                                <input type="checkbox" id="country[3]" name="country[]" value="4"  onClick="checkCountry(3)" '.(isset($_SESSION['REG']['country']) && $_SESSION['REG']['country']==4? "CHECKED": "").'>'."\n";
			$result .= '                                                                <label for="country[3]" class="inline-label">�����</label>'."\n";
			$result .= '                                                            </div>'."\n";
			$result .= '                                                            <div class="rows-input">'."\n";
			$result .= '                                                                <input type="checkbox" id="country[4]" name="country[]" value="5"  onClick="checkCountry(4)" '.(isset($_SESSION['REG']['country']) && $_SESSION['REG']['country']==5? "CHECKED": "").'>'."\n";
			$result .= '                                                                <label for="country[4]" class="inline-label">������</label>'."\n";
			$result .= '                                                            </div>'."\n";
			$result .= '                                                            <div class="rows-input">'."\n";
			$result .= '                                                                <input type="checkbox" id="country[5]" name="country[]" value="6"  onClick="checkCountry(5)" '.(isset($_SESSION['REG']['country']) && $_SESSION['REG']['country']==6? "CHECKED": "").'>'."\n";
			$result .= '                                                                <label for="country[5]" class="inline-label">�������</label>'."\n";
			$result .= '                                                            </div>'."\n";
			$result .= '                                                            <div class="rows-input">'."\n";
			$result .= '                                                                <input type="checkbox" id="country[6]" name="country[]" value="0"  onClick="checkCountry(6)" '.(isset($_SESSION['REG']['country']) && $_SESSION['REG']['country']==0? "CHECKED": "").'>'."\n";
			$result .= '                                                                <label for="country[6]" class="inline-label">������ ������</label>'."\n";
			$result .= '                                                            </div>'."\n";
			$result .= '                                                        </div>'."\n";

			$result .= '                                                        <div>'."\n";
			$result .= '                                                            <div class="rows-input">'."\n";
			$result .= '                                                                <input id="timepay[0]" name="timepay[]" type="checkbox" value="1" onClick="checkTime(0)" '.(isset($_SESSION['REG']['timepay']) && $_SESSION['REG']['timepay']==1? "CHECKED": "").'>'."\n";
			$result .= '                                                                <label for="timepay[0]" class="inline-label">1 �����</label>'."\n";
			$result .= '                                                            </div>'."\n";
			$result .= '                                                            <div class="rows-input">'."\n";
			$result .= '                                                                <input id="timepay[1]" name="timepay[]" type="checkbox" value="2" onClick="checkTime(1)" '.(isset($_SESSION['REG']['timepay']) && $_SESSION['REG']['timepay']==2? "CHECKED": "").'>'."\n";
			$result .= '                                                                <label for="timepay[1]" class="inline-label">2 ������</label>'."\n";
			$result .= '                                                            </div>'."\n";
			$result .= '                                                            <div class="rows-input">'."\n";
			$result .= '                                                                <input id="timepay[2]" name="timepay[]" type="checkbox" value="3" onClick="checkTime(2)" '.(isset($_SESSION['REG']['timepay']) && $_SESSION['REG']['timepay']==3? "CHECKED": "").'>'."\n";
			$result .= '                                                                <label for="timepay[2]" class="inline-label">3 ������</label>'."\n";
			$result .= '                                                            </div>'."\n";
			$result .= '                                                            <div class="rows-input">'."\n";
			$result .= '                                                                <input id="timepay[3]" name="timepay[]" type="checkbox" value="6" onClick="checkTime(3)" '.(isset($_SESSION['REG']['timepay']) && $_SESSION['REG']['timepay']==6? "CHECKED": "").'>'."\n";
			$result .= '                                                                <label for="timepay[3]" class="inline-label">6 �������</label>'."\n";
			$result .= '                                                            </div>'."\n";
			$result .= '                                                            <div class="rows-input">'."\n";
			$result .= '                                                                <input id="timepay[4]" name="timepay[]" type="checkbox" value="12" onClick="checkTime(4)" '.(isset($_SESSION['REG']['timepay']) && $_SESSION['REG']['timepay']==12? "CHECKED": "").'>'."\n";
			$result .= '                                                                <label for="timepay[4]" class="inline-label">12 �������</label>'."\n";
			$result .= '                                                            </div>'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                    <div>'."\n";
			$result .= '                                                        <h5>���������</h5>'."\n";
			$result .= '                                                        <div class="hr2"></div>'."\n";
			$result .= '                                                        <h1 class="big-font" id="sumTime">'.(isset($_SESSION['REG']['timepay'])? ($_SESSION['REG']['timepay']==1? 500: ($_SESSION['REG']['timepay']==2? 900: ($_SESSION['REG']['timepay']==3? 1300: ($_SESSION['REG']['timepay']==6? 2500: ($_SESSION['REG']['timepay']==12? 5000: 0))))): 0).'<span>���.</span></h1>'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                     <div>'."\n";
			$result .= '                                                        <h5>���������������� ���������� ��� ������� ��������</h5>'."\n";
			$result .= '                                                        <div class="hr2"></div>'."\n";
			$result .= '                                                        <div class="text-scroll">'."\n";

			$result .= '<p><strong>���������������� ����������.</strong></p>';

$result .= '<p>��������� ���������������� ���������� (����� ����������������� ���������� ��� ��ѻ) ��������� ����� �������������� ������� www.555hf.tv (����� �555hf.tv�) � ���������� �����, ��������� 18 ���, (����� ��������������), ���������� ������� �������������������� � ������������ �� �������� 3 � 4 ��, � ���������� ��������� �� ����������� WEB - ������ � ���� �������� (����� ������) � ������� <a href="http://www.555hf.tv">http://www.555hf.tv</a></p>

<p><strong>1. ������� ����������������� ����������</strong></p>
<p>555hf.tv ���������� ������������ ���� ������ �� ��������, ���������� ��������� ���������� ����������������� ����������. ���������������� ���������� ����� ���� �������� �555hf.tv� ��� ������-���� ������������ ����������� ������������.</p>

<p><strong>2. �������� �����</strong></p>
<p>555hf.tv - ������, �������������� ������������ ��� ������ c������������������ ���������-������������ ����������� ������� ������ ��� ��������� �������� �����������. </p>
<p>������ 555hf.tv ��������������� �������������, ������� ������ � ���� ��������, � ������������� ����������� ����������� ��� ������ c ���-�����������, �� ������ ����������������� ����������. </p>

<p><strong>3. ���������� ����������������� ���������� � ����</strong></p>
<p>�� �������� � ���� ����� ��������� ������������� �������� � �� ��������� � ����� ������� ������������� ������ �� �������� ��������, ���������� ��� ������� ��. </p>

<p><strong>4. ������������� ������������ �� �����������, ������ � ������������</strong></p>
<p>4.1. ������������ ������ ������ ��������� �����������:</p>
<p>a) ��������� ��������������� �����;</p>
<p>�) �������� �������� � ��������� ��, �����, ��������� � ��. 3 ��. </p>
<p>4.2. ��� ���� ����� ��������������� �������� 555hf.tv, ������������ ����������� ������������ ���������, ������ � ������ ���������� � ���� �� ��������, ������������ � ��������������� �����, � ������������ ��� ���������� � ���������� ���������. </p>
<p>4.3. �� ���������� �������� ����������� ������������ �������� ����� � ������ ��� ������� � ������������� ������� �������� ������� 555hf.tv. ������������ ����� ��������������� �� ������������ ������ ������ � ������, � ����� �� ���, ��� ����� ������� �� 555hf.tv ��� ������� � ������� ������������. 555hf.tv ����� ����� ��������� ������������� ������������ ������� �/��� ������ �� �� ���������. ������������ ����������� � ���, ��� �� ������ ���������� ��������� 555hf.tv � ����� ������ ����������������� (�� ������������ �������������) ������� � ������� � ������� ������������ �/��� � ����� ��������� ������������, � ����� � ���, ��� ������������ �������������� ������������ ���������� ������ ��� ����� ������� (������ ������) �� ��������� ������ ������ ������ � �������� 555hf.tv. </p>
<p>4.4. ��������� ���������� �� �������� ������������� ��� ���� ����� �������������������� ������������� 555hf.tv. </p>

<p><strong>5. ��������� ������������������� ������������</strong></p>
<p>������������ �������� � ���������, ��� �� ����� ������ ��������������� �� ������������� ���� ����������, ������, �������, ��������, ������, �����, ����������, �������, ����� � ������ ���������� (����� �����������), �������� �������������� ��� ���������� ��� ����������� � ������� ������� � ������� ������� 555hf.tv. ��������� ����� �� ��������� ������������, ������, ��� ���������� � ��������������, ����������� �� �������� ����� 555hf.tv, � ����� �������� ������� 555hf.tv ���������������� � ������������ � ����������������� �� � ����������� ������������� �������. </p>
<p>������������ ����������� �� ������������ ������ 555hf.tv ���: </p>
<p>a) ��������, ��������, �������� ��� ������ ������� ������� ������������� ����������, ������� �������� �����������, ������������, �����������, ������������� ��������������, ���������������, ����������� ��������� �����, ����������������� ��������� �/��� ������������� ����� �� ��������, �����������, ��������, ����������� ���������; </p>
<p>�) ��������� ���� ������������������ ��� �/��� ���������� �� ����� � ����� �����; </p>
<p>�) ��������� ���� ����������; </p>
<p>�) ������ ���� �� ������� �������� ��� ������������� ����������� �/��� ���������� ��� ����������� �� �� ����, � ��� ����� �� ����������� 555hf.tv, �� ����������� �������, �� ��������� 555hf.tv, � ����� �������� � ����������� ������������ ������� � ������������� �����-���� ��������� ��� ��������; </p>
<p>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� ����������, ������� ������������ �� ����� ����� ������ ��������� �� ������ ��� �������� �����-���� ����������� ����������; </p>
<p>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� ����������, ������� ����������� �����-���� ������, �������� �����, ������������ �����, �������� ��� ������ ����� ������������� �/��� ��������� � ������� � ��� ����� ������� �������; </p>
<p>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� �� ����������� ����������� ������� ��������� ����������, �����; </p>
<p>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� �����-���� ����������, ���������� ������ ��� ������ ������������ ����, ����� ��� ���������, ��������������� ��� ���������, ����������� ���� ����������� ���������������� ������ ������������� ��� ��������������������� ������������ ��� ��������, ��� ������������� �������������������� �������, � ����� �������� ������ � ������������ ����������� ��������� � ��������� ��� �� ���������, ������, ������ � ������ �������� ��� ��������� �������������������� ������� � ������� 555hf.tv, ������ ������� �������� � ���������, � ����� ���������� ������ �� ������������� ����������; </p>
<p>�) ��������� ��� ���������� ��������� �����-���� ���������� �������, ��������������� ��� ������������� �������; </p>

<p><strong>6. �������������� �������������</strong></p>
<p>������������ ����������� �� ��������������, �� ��������� � �� ����������, �� ��������� � �� �������������, � ����� �� ������������ ��� �����-���� ������������ ����� �����-���� ��������� ������� 555hf.tv, ����� ��� �������, ����� ����� ���������� ���� ������������ 555hf.tv. 555hf.tv �� ����� ������� ��������������� �� �� ����� ��������� ����� ������������� � �������� ������. </p>

<p><strong>7. ����������� �����������</strong></p>
<p>������������ �������� � ���, ��� 555hf.tv ��������� �� ����� ����� ���������� �������� ������ ������������ � ������� ����� ������� ��� ��������� ��. ��� ������������� ��������� ������������� ���������� �� 555hf.tv ��������� �� ����� ����� �������� ���������� � ��������� ����������� ������������� 555hf.tv �� ���� �� ���� ���. </p>
<p>��� ������������� ��������� ������������� ���������� �� 555hf.tv ��������� �� ����� ����� �������� ���������� � ��������� ����������� ������������� 555hf.tv �� ���� �� ���� ���.</p>
<p>555hf.tv ��������� �� ����� ����� �������� ������������� ���� ���������� �������������� ����� 555hf.tv, ������������ �������� �� ���� ������������. </p>

<p><strong>8. ����� ������������� 555hf.tv</strong></p>
<p>������������ �������� � ����������� � ���, ��� ������ 555hf.tv, ��� ��������� � ��� ����������� ��������� �������� ���������� �������, ��������� �������, ���������, �������� �� ���������������� ������������� � ������� ���������������� ����������� � �������������� ��������. </p>

<p><strong>9. ����� ����������</strong></p>
<p>9.1. ���� ���� �� ����������� �������������� ����������� ����� ������������� � 555hf.tv, ��� ���������, �������, �������, ����� ���� ���������������, ������ ������������ 555hf.tv �� ������ ����������� ����� <a href="mailto:info@555hf.tv">info@555hf.tv</a> </p>
<p>9.2. �� �������� ���������� ����������� ��������� ����� ������������� � 555hf.tv � �������������� ������������� ������������� ������� 555hf.tv. </p>
<p>9.3. ������������ � 555hf.tv ����������� �� ��, ��� ��� ��������� ����� �� ��-���� �� ����� ����������� �� ������ ����������� �����. </p>
<p>9.4. ��������� ����� ������-���� ��������� �� ���������������� ��� �� ���������� ��������������� ���������� �� ������ ������������������ ��� �������������� ���� ��������� ����������. </p>
<p>9.5. ����������� �� ������� 555hf.tv � ������ ��������� ������������� ��������� �� �� ������ 555hf.tv ����� ����������� ��������������� �������� � ������ ����� ��������� �������. </p>

<p><strong>10. �������������� ������������</strong></p>
<p>10.1. ������������ � 555hf.tv ��������� ������� � ����� ������ ������� � ������� �������� ������������. </p>
<p>10.2. ����������� ������������� ����� ������ ������� � ������� �������� ����� �� ������������. </p>
<p>10.3. ��� ����� ������ ������� ������������, ��� ���������� ����� �� ��������� ������ ��� ����� e-mail, ������� �� �������� ��� �����������, ����� ����������� �������� ����� ������ ������� � ������� �������� � ����� � �������. </p>
<p>10.4. � ������ ����������� ������ �������������������� ������������� ������� � ������� �������� ������������ ������ � ������� ������ ��� ��������� �� ���� 555hf.tv. </p>

<p><strong>11. �������� � �������� ����� 555hf.tv</strong></p>
<p>555hf.tv ����� ����� ����������� ���������������� ������ � ����������-���������� ��������� 555hf.tv � ��������� ���������������� ������ 555hf.tv, ��������� �� ���� ������������ 555hf.tv �� ���� ���� �� ������ ����� � ��������� ������ �� ���������. </p>
<p>� ������ ����������� ����-�������� �������������, � ����� ������ ��� ����� � ����������-���������� ���������� ������� ���, �������������� � 555hf.tv u/��� �������� ������� ���, ������������ �� ������������ ��� ����������� ���������������� 555hf.tv, �������� ������������ ������ 555hf.tv ��� ���������������� ����������� ������������. </p>

<p><strong>12. ������� ������������ ���������</strong></p>
<p>��� ���������� ������, ��������� ����� ������������� � 555hf.tv � ���������� ������������� 555hf.tv, ����������� ��������� ������������� �������: </p>
<p>������������, ���������, ��� ��� ����� � �������� �������� ��-�� �������� 555hf.tv, �������� ���������� �� ����������� ����� <a href="mailto:info@555hf.tv">info@555hf.tv</a> ���������. </p>
<p>� ������� 5 (����) ������� ���� �� ��� ��������� ��������� 555hf.tv ������ �������� ���� ������� �� ��������� � ��������� �������������� �������� � ������� ���� ����� �� ������ ����������� �����, ���������� � ���������. </p>
<p>� ������ �� ���������� ���������� ����� ����� �������������� ������� ���� �������� ������������ � ������������ � ���������������� �����������. </p>
<p>�� ��������������� ��������� ��������� ��� ���������, �� ����������� ���������������� ������������ �� ������ ��������������� �� ��� ����������� ������.</p>

<p><strong>13. ��������� � ���������� � ��</strong></p>
<p>��������� � ���������� � �� �������� ����� ������ ���� ����� �� ������������� �� ������ ��� �����, ��� �������� ����� �������� ������� ���������� � ����. </p>
<p>������������ ������ ���������� �������������� �������� ���� ��������� � ��������� ��, ������������ 555hf.tv, ��� �������� ����� ������������� �� ����� 555hf.tv. </p>

<p><strong>14. ������� � ���������������� ���������� ���������</strong></p>
<p>� ������ �������� ����������-�������� ����� ������� ������ ���������� ���������, ������������� ������� ��� � ����� ���������������� 555hf.tv, 555hf.tv ��������� �� ����� ����� ����� ��������� � ���������������� 555hf.tv, ������������ �� ���������� ��������� � ������������ � ������ �������.</p>
';

/*
			$result .= '                                                    	<p><strong>���������������� ����������.</strong></p>';
			$result .= '                                                    	<p>��������� ���������������� ���������� (����� ����������������� ���������� ��� ��ѻ) ��������� ����� �������������� ������� www.555hf.tv (����� �555hf.tv�) � ���������� ����� (����� ��������������), ���������� ������� �������������������� � ������������ �� �������� 3 � 4 ��, � ���������� ������-��� �� ����������� WEB-������ � ���� �������� (����� ������) � ������� <a href="http://www.555hf.tv">http://www.555hf.tv</a></p>'."\n";

			$result .= '                                                    	<p><strong>1. ������� ����������������� ����������</strong></p>';
			$result .= '                                                    	<p>555hf.tv ���������� ������������ ���� ������ �� ��������, ���������� ������-��� ���������� ����������������� ����������. ���������������� ���������� ����� ���� �������� ��555hf.tv�� ��� ������-���� ������������ ����������� ������������.</p>';

			$result .= '                                                    	<p><strong>2. �������� �����</strong></p>';
			$result .= '                                                    	<p>555hf.tv - ������, �������������� ������������ ��� ������ c��������������-���� ���������-������������ ����������� ������� ������ ��� ��������� �����-���  �����������.
												</p><p>������ 555hf.tv ��������������� �������������, ������� ������ � ���� �����-���, � ������������� ����������� ����������� ��� ������ ���-�����������, �� ������ ����������������� ����������. </p>';

			$result .= '                                                    	<p><strong>3. ���������� ����������������� ���������� � ����</strong></p>';
			$result .= '                                                    	<p>�� �������� � ���� ����� ��������� ������������� �������� � �� ��������� � ����� ������� ������������� ������ �� �������� ��������, ���������� ��� ������� ��. </p>';

			$result .= '                                                    	<p><strong>4. ������������� ������������ �� �����������, ������ � ������������</strong></p>';
			$result .= '                                                    	<p>4.1. ������������ ������ ������ ��������� �����������:</p>';
			$result .= '                                                    	<p>a) ��������� ��������������� �����;</p>';
			$result .= '                                                    	<p>�) �������� �������� � ��������� ��, �����, ��������� � ��. 3 ��. </p>';
			$result .= '                                                    	<p>4.2. ��� ���� ����� ��������������� �������� 555hf.tv, ������������ ����������� ������������ ���������, ������ � ������ ���������� � ���� �� ��������, ������������ � ��������������� �����, � ������������ ��� ���������� � ��-�������� ���������. </p>';
			$result .= '                                                    	<p>4.3. �� ���������� �������� ����������� ������������ �������� ����� � ������ ��� ������� � ������������� ������� �������� ������� 555hf.tv. ������������  ����� ��������������� �� ������������ ������ ������ � ������, � ����� �� ���, ��� ����� ������� �� 555hf.tv ��� ������� � ������� ������������. 555hf.tv ����� ����� ��������� ������������� ������������ ������� �/��� ������ �� �� ����-�����. ������������ ����������� � ���, ��� �� ������ ���������� ��������� 555hf.tv � ����� ������ ����������������� (�� ������������ �������������) ������� �  ������� � ������� ������������ �/��� � ����� ��������� ���������-���, � ����� � ���, ��� ������������ �������������� ������������ ���������� ������ ��� ����� ������� (������ ������) �� ��������� ������ ������ ������ � �������� 555hf.tv. </p>';
			$result .= '                                                    	<p>4.4. ��������� ���������� �� �������� ������������� ��� ���� ����� ��������-������������ ������������� 555hf.tv. </p>';

			$result .= '                                                    	<p><strong>5. ��������� ������������������� ������������</strong></p>';
			$result .= '                                                    	<p>������������ �������� � ���������, ��� �� ����� ������ ��������������� �� ��-����������� ���� ����������, ������, �������, ��������, ������, �����, ����-������, �������, �����  � ������ ���������� (����� �����������), �������� �������������� ��� ���������� ��� ����������� � ������� ������� � ������� ������� 555hf.tv. ��������� ����� �� ��������� ������������, ������, ��� ��-�������� � ��������������, ����������� �� ��������-����� 555hf.tv, � ����� �������� ������� 555huntfishing.tv ���������������� � ������������ � ��������-��������� �� � ����������� ������������� �������. </p>
												<p>������������ ����������� �� ������������ ������ 555hf.tv ���: </p>';
			$result .= '                                                    	<p>a) ��������, ��������, �������� ��� ������ ������� ������� ������������� ����-������, ������� �������� �����������, ������������, �����������, ������-������� ��������������, ���������������, ����������� ��������� �����, ���-�������������� ��������� �/��� ������������� ����� �� ��������, ���������-��, ��������, ����������� ���������; </p>';
			$result .= '                                                    	<p>�) ��������� ���� ������������������ ��� �/��� ���������� �� ����� � ����� �����; </p>';
			$result .= '                                                    	<p>�) ��������� ���� ����������; </p>';
			$result .= '                                                    	<p>�) ������ ���� �� ������� �������� ��� ������������� ����������� �/��� ����-������ ��� ����������� �� �� ����, � ��� ����� �� ����������� 555hf.tv, �� ����-������� �������, �� ��������� 555hf.tv, � ����� �������� � ����������� ������-������ ������� � ������������� �����-���� ��������� ��� ��������; </p>';
			$result .= '                                                    	<p>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� ����-������, ������� ������������ �� ����� ����� ������ ��������� �� ������ ��� �������� �����-���� ����������� ����������; </p>';
			$result .= '                                                    	<p>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� ����-������, ������� ����������� �����-���� ������, �������� �����, ������������ �����, �������� ��� ������ ����� ������������� �/��� ��������� � ������� � ��� ����� ������� �������; </p>';
			$result .= '                                                    	<p>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� �� ����������� ����������� ������� ��������� ����������, �����; </p>';
			$result .= '                                                    	<p>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� ��-���-���� ����������, ���������� ������ ��� ������ ������������ ����, ����� ��� ���������, ��������������� ��� ���������, ����������� ���� ����������� ���������������� ������ ������������� ��� ��������������������� �������-����� ��� ��������, ��� ������������� �������������������� �������, � ����� �������� ������ � ������������ ����������� ��������� � ��������� ��� �� ���������, ������, ������ � ������ �������� ��� ��������� ����������������-���� ������� � ������� 555hf.tv,  ������ ������� �������� � ���������, � ����� ���������� ������ �� ������������� ����������; </p>';
			$result .= '                                                    	<p>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� ��-���-���� ����������, ���������� ������ ��� ������ ������������ ����, ����� ��� ���������, ��������������� ��� ���������, ����������� ���� ����������� ���������������� ������ ������������� ��� ��������������������� �������-����� ��� ��������, ��� ������������� �������������������� �������, � ����� �������� ������ � ������������ ����������� ��������� � ��������� ��� �� ���������, ������, ������ � ������ �������� ��� ��������� ����������������-���� ������� � ������� 555hf.tv,  ������ ������� �������� � ���������, � ����� ���������� ������ �� ������������� ����������; </p>';

			$result .= '                                                    	<p><strong>6. �������������� �������������</strong></p>';
			$result .= '                                                    	<p>������������ ����������� �� ��������������, �� ��������� � �� ����������, �� ��������� � �� �������������, � ����� �� ������������ ��� �����-���� ������-������ ����� �����-���� ��������� ������� 555hf.tv, ����� ��� �������, ����� ��-��� ���������� ���� ������������ 555hf.tv. 555hf.tv �� ����� ������� �������-�������� �� �� ����� ��������� ����� ������������� � �������� ������. </p>';

			$result .= '                                                    	<p><strong>7. ����������� �����������</strong></p>';
			$result .= '                                                    	<p>������������ �������� � ���, ��� 555hf.tv ��������� �� ����� ����� ���������� �������� ������ ������������ � ������� ����� ������� ��� ��������� ��. ��� ������������� ��������� ������������� ���������� �� 555hf.tv ��������� �� ����� ����� �������� ���������� � ��������� ����������� ������������� 555hf.tv �� ���� �� ���� ���. </p>';
			$result .= '                                                    	<p>555hf.tv ��������� �� ����� ����� �������� ������������� ���� ���������� ���-����������� ����� 555hf.tv, ������������ �������� �� ���� ������������. </p>';

			$result .= '                                                    	<p><strong>8. ����� ������������� 555hf.tv</strong></p>';
			$result .= '                                                    	<p>������������ �������� � ����������� � ���, ��� ������ ���������.TV�, ��� ����-����� � ��� ����������� ��������� �������� ���������� �������, ��������� �������, ���������, �������� �� ���������������� ������������� � ������� ��-�������������� ����������� � �������������� ��������. </p>';

			$result .= '                                                    	<p><strong>9. ����� ����������</strong></p>';
			$result .= '                                                    	<p>9.1. ���� ���� �� ����������� �������������� ����������� ����� ����������-��� � 555hf.tv, ��� ���������, �������, �������, ����� ���� ���������������, ������ ������������ 555hf.tv �� ������ ����������� ����� <a href="mailto:info@555hf.tv">info@555hf.tv</a> </p>';
			$result .= '                                                    	<p>9.2. �� �������� ���������� ����������� ��������� ����� ������������� � 555hf.tv � �������������� ������������� ������������� ������� 555hf.tv. </p>';
			$result .= '                                                    	<p>9.3. ������������ � 555hf.tv ����������� �� ��, ��� ��� ��������� ����� �� ��-���� �� ����� ����������� �� ������ ����������� �����. </p>';
			$result .= '                                                    	<p>9.4. ��������� ����� ������-���� ��������� �� ���������������� ��� �� ���-������� ��������������� ���������� �� ������ ������������������ ��� ����-���������� ���� ��������� ����������. </p>';
			$result .= '                                                    	<p>9.5. ����������� �� ������� 555hf.tv � ������ ��������� ������������� ������-��� �� �� ������ 555hf.tv ����� ����������� ��������������� �������� � ����-�� ����� ��������� �������. </p>';

			$result .= '                                                    	<p><strong>10. �������������� ������������</strong></p>';
			$result .= '                                                    	<p>10.1. ������������ � 555hf.tv ��������� ������� � ����� ������ ������� � �����-�� �������� ������������. </p>';
			$result .= '                                                    	<p>10.2. ����������� ������������� ����� ������ ������� � ������� �������� ��-��� �� ������������. </p>';
			$result .= '                                                    	<p>10.3. ��� ����� ������ ������� ������������, ��� ���������� ����� �� ��������� ������ ��� ����� e-mail, ������� �� �������� ��� �����������, ����� ������-����� �������� ����� ������ ������� � ������� �������� � ����� � �������. </p>';
			$result .= '                                                    	<p>10.4. � ������ ����������� ������ �������������������� ������������� ������� � ������� �������� ������������ ������ � ������� ������ ��� ��������� �� ���� 555hf.tv. </p>';

			$result .= '                                                    	<p><strong>11. �������� � �������� ����� 555hf.tv</strong></p>';
			$result .= '                                                    	<p>555hf.tv ����� ����� ����������� ���������������� ������ � ����������-���������� ��������� 555hf.tv � ��������� ���������������� ������ 555hf.tv, ��������� �� ���� ������������ 555hf.tv �� ���� ���� �� ������ ����� � �������-�� ������ �� ���������. </p>';
			$result .= '                                                    	<p>� ������ ����������� ����-�������� �������������, � ����� ������ ��� ����� � ����������-���������� ���������� ������� ���, �������������� � 555hf.tv u/��� �������� ������� ���, ������������ �� ������������ ��� ����������� ���������������� 555hf.tv, �������� ������������ ������ 555hf.tv ��� ������-���������� ����������� ������������. </p>';

			$result .= '                                                    	<p><strong>12. ������� ������������ ���������</strong></p>';
			$result .= '                                                    	<p>��� ���������� ������, ��������� ����� ������������� � 555hf.tv � ���������� ������������� 555hf.tv, ����������� ��������� ������������� �������: 
</p><p>������������, ���������, ��� ��� ����� � �������� �������� ��-�� �������� 555hf.tv, �������� ���������� �� ����������� ����� <a href="mailto:info@555hf.tv">info@555hf.tv</a> ���������. 
</p><p>� ������� 5 (����) ������� ���� �� ��� ��������� ��������� 555hf.tv ������ ��-������ ���� ������� �� ��������� � ��������� �������������� �������� � ��-����� ���� ����� �� ������ ����������� �����, ���������� � ���������. 
</p><p>� ������ �� ���������� ���������� ����� ����� �������������� ������� ���� �������� ������������ � ������������ � ���������������� �����������. 
</p><p>�� ��������������� ��������� ��������� ��� ���������, �� ����������� ����-������������ ������������ �� ������ ��������������� �� ��� ����������� ���-���.</p>';

			$result .= '                                                    	<p><strong>13. ��������� � ���������� � ��</strong></p>';
			$result .= '                                                    	<p>��������� � ���������� � �� �������� ����� ������ ���� ����� �� ����������-��� �� ������ ��� �����, ��� �������� ����� �������� ������� ���������� � ��-��. </p>';
			$result .= '                                                    	<p>������������ ������ ���������� �������������� �������� ���� ��������� � ��-������� ��, ������������ 555hf.tv, ��� �������� ����� ������������� �� ����� 555hf.tv. </p>';

			$result .= '                                                    	<p><strong>14. ������� � ���������������� ���������� ���������</strong></p>';
			$result .= '                                                    	<p>� ������ �������� ����������-�������� ����� ������� ������ ���������� ����-�����, ������������� ������� ��� � ����� ���������������� 555hf.tv, 555hf.tv ��������� �� ����� ����� ����� ��������� � ���������������� 555hf.tv, ��-���������� �� ���������� ��������� � ������������ � ������ �������.</p>';
*/

			$result .= '                                                        </div>'."\n";

			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <input type="checkbox" id="rulesCheck" name="rulesCheck" value="1">'."\n";
			$result .= '                                                            <label for="rulesCheck" class="inline-label">� ��������</label>'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                    <div class="boxed captcha">'."\n";
			$result .= '                                                        <h5>���������� ������� �����, ������� �� ������ �� ��������!</h5>'."\n";
			$result .= '                                                        <div class="hr2"></div>'."\n";
			$result .= '                                                        <div class="float-l">'."\n";
			$result .= '                                                    	<img src="/class/captcha.php" width="228" height="98" alt="" title="" />'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="text-c">'."\n";
			$result .= '                                                    	<div class="rows-input">'."\n";
			$result .= '                                                                <input id="captcha" name="captcha" type="text" />'."\n";
			$result .= '                                                    	</div>'."\n";
			$result .= '                                                            <a class="button button-dark" onClick="regUserStep0();">'."\n";
			$result .= '                                                                <span>����������</span>'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                       </div>'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                 </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                            <div class="two-colums-right">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                            <h3 class="title2line">��������� ��������</h3>'."\n";
			$result .= '                                        	<h5>�����������</h5>'."\n";
			$result .= '                                                <div class="hr2"></div>'."\n";
			$result .= '                                                <ul class="desimal">'."\n";
			$result .= '                                            	<li>�������� ��-���� ������� � ��������: SD (720 � 576 Pix)</li>'."\n";
			$result .= '                                            	<li>�������� ��� �������� � ���� ���������: SD (720 � 576 Pix), HD (1280 � 720 Pix), FullHD (1920 � 1080 Pix) �� ������ ������������ 120 ������</li>'."\n";
			$result .= '                                            	<li>����������� � ������, ��������� �����������</li>'."\n";
			$result .= '                                            	<li>������ � ��������� ����������� � �555 ������</li>'."\n";
			$result .= '                                            	<li>�������� ��������� ������ ������� 555hf.tv</li>'."\n";
			$result .= '                                                </ul>'."\n";
			$result .= '                                                <div>'."\n";
			$result .= '                                                    <h5>���������� ���������� ��������</h5>'."\n";
			$result .= '                                                    <div class="hr2"></div>'."\n";
			$result .= '                                                    <div class="boxed">'."\n";
			$result .= '                                                	<div class="rows-input">'."\n";
			$result .= '                                                            <label for="login"><em>* </em>����� (��������� �����, �����, �����, @)</label>'."\n";
			$result .= '                                                            <input type="text" id="login" name="login" value="'.(isset($_SESSION['REG']['login'])? $_SESSION['REG']['login']: "").'">'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                		<div class="rows-input">'."\n";
			$result .= '                                                            <label for="firstname"><em>* </em>��� (���������)</label>'."\n";
			$result .= '                                                            <input type="text" id="firstname" name="firstname" value="'.(isset($_SESSION['REG']['firstname'])? $_SESSION['REG']['firstname']: "").'">'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <label for="lastname"><em>* </em>������� (���������)</label>'."\n";
			$result .= '                                                            <input type="text" id="lastname" name="lastname" value="'.(isset($_SESSION['REG']['lastname'])? $_SESSION['REG']['lastname']: "").'">'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                    	<p class="as-label"><em>* </em>���</p>'."\n";
			$result .= '                                                            <input type="radio" name="sex" value="m" id="m" '.(isset($_SESSION['REG']['sex']) && $_SESSION['REG']['sex']=="m"? "CHECKED": "").'>'."\n";
			$result .= '                                                            <label for="m">�������</label>'."\n";
			$result .= '                                                            <input type="radio" id="f" name="sex" '.(isset($_SESSION['REG']['sex']) && $_SESSION['REG']['sex']=="f"? "CHECKED": "").'>'."\n";
			$result .= '                                                            <label for="f">�������</label>'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <label for="email"><em>* </em>��� �mail</label>'."\n";
			$result .= '                                                            <input type="text" id="email" name="email" value="'.(isset($_SESSION['REG']['email'])? $_SESSION['REG']['email']: "").'">'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <label for="password"><em>* </em>������</label>'."\n";
			$result .= '                                                            <input type="password" id="password" name="pass1">'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <label for="confirm"><em>* </em>������������� ������</label>'."\n";
			$result .= '                                                            <input type="password" id="confirm" name="pass2">'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <label for="phone"><em>* </em>�������</label>'."\n";
			$result .= '                                                            <input type="text" id="phone" name="phone" value="'.(isset($_SESSION['REG']['phone'])? $_SESSION['REG']['phone']: "").'">'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <label for="signature"><em>* </em>�������</label>'."\n";
			$result .= '                                                            <input type="text" id="signature" name="signature" value="'.(isset($_SESSION['REG']['signature'])? $_SESSION['REG']['signature']: "").'" >'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                     <div>'."\n";
			$result .= '                                                        <h5>���������������� ���������� ��� ���������� ��������</h5>'."\n";
			$result .= '                                                        <div class="hr2"></div>'."\n";
			$result .= '                                                        <div class="text-scroll">'."\n";

			$result .= '<p><strong>���������������� ����������..</strong></p>';
$result .= '<p>��������� ���������������� ���������� (����� ����������������� ���������� ��� ��ѻ) ��������� ����� �������������� ������� www.555hf.tv (����� �555hf.tv�) � ���������� �����, ��������� 18 ���, (����� ��������������), ���������� ������� �������������������� � ������������ �� �������� 3 � 4 ��, � ���������� ��������� �� ����������� WEB - ������ � ���� �������� (����� ������) � ������� <a href="http://www.555hf.tv">http://www.555hf.tv</a></p>
<p><strong>1. ������� ����������������� ����������</strong></p>
<p>555hf.tv ���������� ������������ ���� ������ �� ��������, ���������� ��������� ���������� ����������������� ����������. ���������������� ���������� ����� ���� �������� �555hf.tv� ��� ������-���� ������������ ����������� ������������.</p>
<p><strong>2. �������� �����</strong></p>
<p>555hf.tv - ������, �������������� ������������ ��� ������ c������������������ ���������-������������ ����������� ������� ������ ��� ��������� �������� �����������. </p>
<p>������ 555hf.tv ��������������� �������������, ������� ������ � ���� ��������, � ������������� ����������� ����������� ��� ������ c ���-�����������, �� ������ ����������������� ����������. </p>
<p><strong>3. ���������� ����������������� ���������� � ����</strong></p>
<p>�� �������� � ���� ����� ��������� ������������� �������� � �� ��������� � ����� ������� ������������� ������ �� �������� ��������, ���������� ��� ������� ��. </p>
<p><strong>4. ������������� ������������ �� �����������, ������ � ������������</strong></p>
<p>4.1. ������������ ������ ������ ��������� �����������:</p>
<p>a) ��������� ��������������� �����;</p>
<p>�) �������� �������� � ��������� ��, �����, ��������� � ��. 3 ��. </p>
<p>4.2. ��� ���� ����� ��������������� �������� 555hf.tv, ������������ ����������� ������������ ���������, ������ � ������ ���������� � ���� �� ��������, ������������ � ��������������� �����, � ������������ ��� ���������� � ���������� ���������. </p>
<p>4.3. �� ���������� �������� ����������� ������������ �������� ����� � ������ ��� ������� � ������������� ������� �������� ������� 555hf.tv. ������������ ����� ��������������� �� ������������ ������ ������ � ������, � ����� �� ���, ��� ����� ������� �� 555hf.tv ��� ������� � ������� ������������. 555hf.tv ����� ����� ��������� ������������� ������������ ������� �/��� ������ �� �� ���������. ������������ ����������� � ���, ��� �� ������ ���������� ��������� 555hf.tv � ����� ������ ����������������� (�� ������������ �������������) ������� � ������� � ������� ������������ �/��� � ����� ��������� ������������, � ����� � ���, ��� ������������ �������������� ������������ ���������� ������ ��� ����� ������� (������ ������) �� ��������� ������ ������ ������ � �������� 555hf.tv. </p>
<p>4.4. ��������� ���������� �� �������� ������������� ��� ���� ����� �������������������� ������������� 555hf.tv. </p>
<p><strong>5. ��������� ������������������� ������������</strong></p>
<p>������������ �������� � ���������, ��� �� ����� ������ ��������������� �� ������������� ���� ����������, ������, �������, ��������, ������, �����, ����������, �������, ����� � ������ ���������� (����� �����������), �������� �������������� ��� ���������� ��� ����������� � ������� ������� � ������� ������� 555hf.tv. ��������� ����� �� ��������� ������������, ������, ��� ���������� � ��������������, ����������� �� �������� ����� 555hf.tv, � ����� �������� ������� 555hf.tv ���������������� � ������������ � ����������������� �� � ����������� ������������� �������. </p>
<p>������������ ����������� �� ������������ ������ 555hf.tv ���: </p>
<p>a) ��������, ��������, �������� ��� ������ ������� ������� ������������� ����������, ������� �������� �����������, ������������, �����������, ������������� ��������������, ���������������, ����������� ��������� �����, ����������������� ��������� �/��� ������������� ����� �� ��������, �����������, ��������, ����������� ���������; </p>
<p>�) ��������� ���� ������������������ ��� �/��� ���������� �� ����� � ����� �����; </p>
<p>�) ��������� ���� ����������; </p>
<p>�) ������ ���� �� ������� �������� ��� ������������� ����������� �/��� ���������� ��� ����������� �� �� ����, � ��� ����� �� ����������� 555hf.tv, �� ����������� �������, �� ��������� 555hf.tv, � ����� �������� � ����������� ������������ ������� � ������������� �����-���� ��������� ��� ��������; </p>
<p>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� ����������, ������� ������������ �� ����� ����� ������ ��������� �� ������ ��� �������� �����-���� ����������� ����������; </p>
<p>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� ����������, ������� ����������� �����-���� ������, �������� �����, ������������ �����, �������� ��� ������ ����� ������������� �/��� ��������� � ������� � ��� ����� ������� �������; </p>
<p>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� �� ����������� ����������� ������� ��������� ����������, �����; </p>
<p>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� �����-���� ����������, ���������� ������ ��� ������ ������������ ����, ����� ��� ���������, ��������������� ��� ���������, ����������� ���� ����������� ���������������� ������ ������������� ��� ��������������������� ������������ ��� ��������, ��� ������������� �������������������� �������, � ����� �������� ������ � ������������ ����������� ��������� � ��������� ��� �� ���������, ������, ������ � ������ �������� ��� ��������� �������������������� ������� � ������� 555hf.tv, ������ ������� �������� � ���������, � ����� ���������� ������ �� ������������� ����������; </p>
<p>�) ��������� ��� ���������� ��������� �����-���� ���������� �������, ��������������� ��� ������������� �������; </p>
<p><strong>6. �������������� �������������</strong></p>
<p>������������ ����������� �� ��������������, �� ��������� � �� ����������, �� ��������� � �� �������������, � ����� �� ������������ ��� �����-���� ������������ ����� �����-���� ��������� ������� 555hf.tv, ����� ��� �������, ����� ����� ���������� ���� ������������ 555hf.tv. 555hf.tv �� ����� ������� ��������������� �� �� ����� ��������� ����� ������������� � �������� ������. </p>
<p><strong>7. ����������� �����������</strong></p>
<p>������������ �������� � ���, ��� 555hf.tv ��������� �� ����� ����� ���������� �������� ������ ������������ � ������� ����� ������� ��� ��������� ��. ��� ������������� ��������� ������������� ���������� �� 555hf.tv ��������� �� ����� ����� �������� ���������� � ��������� ����������� ������������� 555hf.tv �� ���� �� ���� ���. </p>
<p>��� ������������� ��������� ������������� ���������� �� 555hf.tv ��������� �� ����� ����� �������� ���������� � ��������� ����������� ������������� 555hf.tv �� ���� �� ���� ���.</p>
<p>555hf.tv ��������� �� ����� ����� �������� ������������� ���� ���������� �������������� ����� 555hf.tv, ������������ �������� �� ���� ������������. </p>
<p><strong>8. ����� ������������� 555hf.tv</strong></p>
<p>������������ �������� � ����������� � ���, ��� ������ 555hf.tv, ��� ��������� � ��� ����������� ��������� �������� ���������� �������, ��������� �������, ���������, �������� �� ���������������� ������������� � ������� ���������������� ����������� � �������������� ��������. </p>
<p><strong>9. ����� ����������</strong></p>
<p>9.1. ���� ���� �� ����������� �������������� ����������� ����� ������������� � 555hf.tv, ��� ���������, �������, �������, ����� ���� ���������������, ������ ������������ 555hf.tv �� ������ ����������� ����� <a href="mailto:info@555hf.tv">info@555hf.tv</a> </p>
<p>9.2. �� �������� ���������� ����������� ��������� ����� ������������� � 555hf.tv � �������������� ������������� ������������� ������� 555hf.tv. </p>
<p>9.3. ������������ � 555hf.tv ����������� �� ��, ��� ��� ��������� ����� �� ��-���� �� ����� ����������� �� ������ ����������� �����. </p>
<p>9.4. ��������� ����� ������-���� ��������� �� ���������������� ��� �� ���������� ��������������� ���������� �� ������ ������������������ ��� �������������� ���� ��������� ����������. </p>
<p>9.5. ����������� �� ������� 555hf.tv � ������ ��������� ������������� ��������� �� �� ������ 555hf.tv ����� ����������� ��������������� �������� � ������ ����� ��������� �������. </p>
<p><strong>10. �������������� ������������</strong></p>
<p>10.1. ������������ � 555hf.tv ��������� ������� � ����� ������ ������� � ������� �������� ������������. </p>
<p>10.2. ����������� ������������� ����� ������ ������� � ������� �������� ����� �� ������������. </p>
<p>10.3. ��� ����� ������ ������� ������������, ��� ���������� ����� �� ��������� ������ ��� ����� e-mail, ������� �� �������� ��� �����������, ����� ����������� �������� ����� ������ ������� � ������� �������� � ����� � �������. </p>
<p>10.4. � ������ ����������� ������ �������������������� ������������� ������� � ������� �������� ������������ ������ � ������� ������ ��� ��������� �� ���� 555hf.tv. </p>
<p><strong>11. �������� � �������� ����� 555hf.tv</strong></p>
<p>555hf.tv ����� ����� ����������� ���������������� ������ � ����������-���������� ��������� 555hf.tv � ��������� ���������������� ������ 555hf.tv, ��������� �� ���� ������������ 555hf.tv �� ���� ���� �� ������ ����� � ��������� ������ �� ���������. </p>
<p>� ������ ����������� ����-�������� �������������, � ����� ������ ��� ����� � ����������-���������� ���������� ������� ���, �������������� � 555hf.tv u/��� �������� ������� ���, ������������ �� ������������ ��� ����������� ���������������� 555hf.tv, �������� ������������ ������ 555hf.tv ��� ���������������� ����������� ������������. </p>
<p><strong>12. ������� ������������ ���������</strong></p>
<p>��� ���������� ������, ��������� ����� ������������� � 555hf.tv � ���������� ������������� 555hf.tv, ����������� ��������� ������������� �������: </p>
<p>������������, ���������, ��� ��� ����� � �������� �������� ��-�� �������� 555hf.tv, �������� ���������� �� ����������� ����� <a href="mailto:info@555hf.tv">info@555hf.tv</a> ���������. </p>
<p>� ������� 5 (����) ������� ���� �� ��� ��������� ��������� 555hf.tv ������ �������� ���� ������� �� ��������� � ��������� �������������� �������� � ������� ���� ����� �� ������ ����������� �����, ���������� � ���������. </p>
<p>� ������ �� ���������� ���������� ����� ����� �������������� ������� ���� �������� ������������ � ������������ � ���������������� �����������. </p>
<p>�� ��������������� ��������� ��������� ��� ���������, �� ����������� ���������������� ������������ �� ������ ��������������� �� ��� ����������� ������.</p>
<p><strong>13. ��������� � ���������� � ��</strong></p>
<p>��������� � ���������� � �� �������� ����� ������ ���� ����� �� ������������� �� ������ ��� �����, ��� �������� ����� �������� ������� ���������� � ����. </p>
<p>������������ ������ ���������� �������������� �������� ���� ��������� � ��������� ��, ������������ 555hf.tv, ��� �������� ����� ������������� �� ����� 555hf.tv. </p>
<p><strong>14. ������� � ���������������� ���������� ���������</strong></p>
<p>� ������ �������� ����������-�������� ����� ������� ������ ���������� ���������, ������������� ������� ��� � ����� ���������������� 555hf.tv, 555hf.tv ��������� �� ����� ����� ����� ��������� � ���������������� 555hf.tv, ������������ �� ���������� ��������� � ������������ � ������ �������.</p>';


/*
			$result .= '                                                    	<p><strong>���������������� ����������.</strong></p>';
			$result .= '                                                    	<p>��������� ���������������� ���������� (����� ����������������� ���������� ��� ��ѻ) ��������� ����� �������������� ������� www.555hf.tv (����� �555hf.tv�) � ���������� ����� (����� ��������������), ���������� ������� �������������������� � ������������ �� �������� 3 � 4 ��, � ���������� ������-��� �� ����������� WEB-������ � ���� �������� (����� ������) � ������� <a href="http://www.555hf.tv">http://www.555hf.tv</a></p>'."\n";

			$result .= '                                                    	<p><strong>1. ������� ����������������� ����������</strong></p>';
			$result .= '                                                    	<p>555hf.tv ���������� ������������ ���� ������ �� ��������, ���������� ������-��� ���������� ����������������� ����������. ���������������� ���������� ����� ���� �������� ��555hf.tv�� ��� ������-���� ������������ ����������� ������������.</p>';

			$result .= '                                                    	<p><strong>2. �������� �����</strong></p>';
			$result .= '                                                    	<p>555hf.tv - ������, �������������� ������������ ��� ������ c��������������-���� ���������-������������ ����������� ������� ������ ��� ��������� �����-���  �����������.
												</p><p>������ 555hf.tv ��������������� �������������, ������� ������ � ���� �����-���, � ������������� ����������� ����������� ��� ������ ���-�����������, �� ������ ����������������� ����������. </p>';

			$result .= '                                                    	<p><strong>3. ���������� ����������������� ���������� � ����</strong></p>';
			$result .= '                                                    	<p>�� �������� � ���� ����� ��������� ������������� �������� � �� ��������� � ����� ������� ������������� ������ �� �������� ��������, ���������� ��� ������� ��. </p>';

			$result .= '                                                    	<p><strong>4. ������������� ������������ �� �����������, ������ � ������������</strong></p>';
			$result .= '                                                    	<p>4.1. ������������ ������ ������ ��������� �����������:</p>';
			$result .= '                                                    	<p>a) ��������� ��������������� �����;</p>';
			$result .= '                                                    	<p>�) �������� �������� � ��������� ��, �����, ��������� � ��. 3 ��. </p>';
			$result .= '                                                    	<p>4.2. ��� ���� ����� ��������������� �������� 555hf.tv, ������������ ����������� ������������ ���������, ������ � ������ ���������� � ���� �� ��������, ������������ � ��������������� �����, � ������������ ��� ���������� � ��-�������� ���������. </p>';
			$result .= '                                                    	<p>4.3. �� ���������� �������� ����������� ������������ �������� ����� � ������ ��� ������� � ������������� ������� �������� ������� 555hf.tv. ������������  ����� ��������������� �� ������������ ������ ������ � ������, � ����� �� ���, ��� ����� ������� �� 555hf.tv ��� ������� � ������� ������������. 555hf.tv ����� ����� ��������� ������������� ������������ ������� �/��� ������ �� �� ����-�����. ������������ ����������� � ���, ��� �� ������ ���������� ��������� 555hf.tv � ����� ������ ����������������� (�� ������������ �������������) ������� �  ������� � ������� ������������ �/��� � ����� ��������� ���������-���, � ����� � ���, ��� ������������ �������������� ������������ ���������� ������ ��� ����� ������� (������ ������) �� ��������� ������ ������ ������ � �������� 555hf.tv. </p>';
			$result .= '                                                    	<p>4.4. ��������� ���������� �� �������� ������������� ��� ���� ����� ��������-������������ ������������� 555hf.tv. </p>';

			$result .= '                                                    	<p><strong>5. ��������� ������������������� ������������</strong></p>';
			$result .= '                                                    	<p>������������ �������� � ���������, ��� �� ����� ������ ��������������� �� ��-����������� ���� ����������, ������, �������, ��������, ������, �����, ����-������, �������, �����  � ������ ���������� (����� �����������), �������� �������������� ��� ���������� ��� ����������� � ������� ������� � ������� ������� 555hf.tv. ��������� ����� �� ��������� ������������, ������, ��� ��-�������� � ��������������, ����������� �� ��������-����� 555hf.tv, � ����� �������� ������� 555huntfishing.tv ���������������� � ������������ � ��������-��������� �� � ����������� ������������� �������. </p>
												<p>������������ ����������� �� ������������ ������ 555hf.tv ���: </p>';
			$result .= '                                                    	<p>a) ��������, ��������, �������� ��� ������ ������� ������� ������������� ����-������, ������� �������� �����������, ������������, �����������, ������-������� ��������������, ���������������, ����������� ��������� �����, ���-�������������� ��������� �/��� ������������� ����� �� ��������, ���������-��, ��������, ����������� ���������; </p>';
			$result .= '                                                    	<p>�) ��������� ���� ������������������ ��� �/��� ���������� �� ����� � ����� �����; </p>';
			$result .= '                                                    	<p>�) ��������� ���� ����������; </p>';
			$result .= '                                                    	<p>�) ������ ���� �� ������� �������� ��� ������������� ����������� �/��� ����-������ ��� ����������� �� �� ����, � ��� ����� �� ����������� 555hf.tv, �� ����-������� �������, �� ��������� 555hf.tv, � ����� �������� � ����������� ������-������ ������� � ������������� �����-���� ��������� ��� ��������; </p>';
			$result .= '                                                    	<p>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� ����-������, ������� ������������ �� ����� ����� ������ ��������� �� ������ ��� �������� �����-���� ����������� ����������; </p>';
			$result .= '                                                    	<p>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� ����-������, ������� ����������� �����-���� ������, �������� �����, ������������ �����, �������� ��� ������ ����� ������������� �/��� ��������� � ������� � ��� ����� ������� �������; </p>';
			$result .= '                                                    	<p>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� �� ����������� ����������� ������� ��������� ����������, �����; </p>';
			$result .= '                                                    	<p>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� ��-���-���� ����������, ���������� ������ ��� ������ ������������ ����, ����� ��� ���������, ��������������� ��� ���������, ����������� ���� ����������� ���������������� ������ ������������� ��� ��������������������� �������-����� ��� ��������, ��� ������������� �������������������� �������, � ����� �������� ������ � ������������ ����������� ��������� � ��������� ��� �� ���������, ������, ������ � ������ �������� ��� ��������� ����������������-���� ������� � ������� 555hf.tv,  ������ ������� �������� � ���������, � ����� ���������� ������ �� ������������� ����������; </p>';
			$result .= '                                                    	<p>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� ��-���-���� ����������, ���������� ������ ��� ������ ������������ ����, ����� ��� ���������, ��������������� ��� ���������, ����������� ���� ����������� ���������������� ������ ������������� ��� ��������������������� �������-����� ��� ��������, ��� ������������� �������������������� �������, � ����� �������� ������ � ������������ ����������� ��������� � ��������� ��� �� ���������, ������, ������ � ������ �������� ��� ��������� ����������������-���� ������� � ������� 555hf.tv,  ������ ������� �������� � ���������, � ����� ���������� ������ �� ������������� ����������; </p>';

			$result .= '                                                    	<p><strong>6. �������������� �������������</strong></p>';
			$result .= '                                                    	<p>������������ ����������� �� ��������������, �� ��������� � �� ����������, �� ��������� � �� �������������, � ����� �� ������������ ��� �����-���� ������-������ ����� �����-���� ��������� ������� 555hf.tv, ����� ��� �������, ����� ��-��� ���������� ���� ������������ 555hf.tv. 555hf.tv �� ����� ������� �������-�������� �� �� ����� ��������� ����� ������������� � �������� ������. </p>';

			$result .= '                                                    	<p><strong>7. ����������� �����������</strong></p>';
			$result .= '                                                    	<p>������������ �������� � ���, ��� 555hf.tv ��������� �� ����� ����� ���������� �������� ������ ������������ � ������� ����� ������� ��� ��������� ��. ��� ������������� ��������� ������������� ���������� �� 555hf.tv ��������� �� ����� ����� �������� ���������� � ��������� ����������� ������������� 555hf.tv �� ���� �� ���� ���. </p>';
			$result .= '                                                    	<p>555hf.tv ��������� �� ����� ����� �������� ������������� ���� ���������� ���-����������� ����� 555hf.tv, ������������ �������� �� ���� ������������. </p>';

			$result .= '                                                    	<p><strong>8. ����� ������������� 555hf.tv</strong></p>';
			$result .= '                                                    	<p>������������ �������� � ����������� � ���, ��� ������ ���������.TV�, ��� ����-����� � ��� ����������� ��������� �������� ���������� �������, ��������� �������, ���������, �������� �� ���������������� ������������� � ������� ��-�������������� ����������� � �������������� ��������. </p>';

			$result .= '                                                    	<p><strong>9. ����� ����������</strong></p>';
			$result .= '                                                    	<p>9.1. ���� ���� �� ����������� �������������� ����������� ����� ����������-��� � 555hf.tv, ��� ���������, �������, �������, ����� ���� ���������������, ������ ������������ 555hf.tv �� ������ ����������� ����� <a href="mailto:info@555hf.tv">info@555hf.tv</a> </p>';
			$result .= '                                                    	<p>9.2. �� �������� ���������� ����������� ��������� ����� ������������� � 555hf.tv � �������������� ������������� ������������� ������� 555hf.tv. </p>';
			$result .= '                                                    	<p>9.3. ������������ � 555hf.tv ����������� �� ��, ��� ��� ��������� ����� �� ��-���� �� ����� ����������� �� ������ ����������� �����. </p>';
			$result .= '                                                    	<p>9.4. ��������� ����� ������-���� ��������� �� ���������������� ��� �� ���-������� ��������������� ���������� �� ������ ������������������ ��� ����-���������� ���� ��������� ����������. </p>';
			$result .= '                                                    	<p>9.5. ����������� �� ������� 555hf.tv � ������ ��������� ������������� ������-��� �� �� ������ 555hf.tv ����� ����������� ��������������� �������� � ����-�� ����� ��������� �������. </p>';

			$result .= '                                                    	<p><strong>10. �������������� ������������</strong></p>';
			$result .= '                                                    	<p>10.1. ������������ � 555hf.tv ��������� ������� � ����� ������ ������� � �����-�� �������� ������������. </p>';
			$result .= '                                                    	<p>10.2. ����������� ������������� ����� ������ ������� � ������� �������� ��-��� �� ������������. </p>';
			$result .= '                                                    	<p>10.3. ��� ����� ������ ������� ������������, ��� ���������� ����� �� ��������� ������ ��� ����� e-mail, ������� �� �������� ��� �����������, ����� ������-����� �������� ����� ������ ������� � ������� �������� � ����� � �������. </p>';
			$result .= '                                                    	<p>10.4. � ������ ����������� ������ �������������������� ������������� ������� � ������� �������� ������������ ������ � ������� ������ ��� ��������� �� ���� 555hf.tv. </p>';

			$result .= '                                                    	<p><strong>11. �������� � �������� ����� 555hf.tv</strong></p>';
			$result .= '                                                    	<p>555hf.tv ����� ����� ����������� ���������������� ������ � ����������-���������� ��������� 555hf.tv � ��������� ���������������� ������ 555hf.tv, ��������� �� ���� ������������ 555hf.tv �� ���� ���� �� ������ ����� � �������-�� ������ �� ���������. </p>';
			$result .= '                                                    	<p>� ������ ����������� ����-�������� �������������, � ����� ������ ��� ����� � ����������-���������� ���������� ������� ���, �������������� � 555hf.tv u/��� �������� ������� ���, ������������ �� ������������ ��� ����������� ���������������� 555hf.tv, �������� ������������ ������ 555hf.tv ��� ������-���������� ����������� ������������. </p>';

			$result .= '                                                    	<p><strong>12. ������� ������������ ���������</strong></p>';
			$result .= '                                                    	<p>��� ���������� ������, ��������� ����� ������������� � 555hf.tv � ���������� ������������� 555hf.tv, ����������� ��������� ������������� �������: 
</p><p>������������, ���������, ��� ��� ����� � �������� �������� ��-�� �������� 555hf.tv, �������� ���������� �� ����������� ����� <a href="mailto:info@555hf.tv">info@555hf.tv</a> ���������. 
</p><p>� ������� 5 (����) ������� ���� �� ��� ��������� ��������� 555hf.tv ������ ��-������ ���� ������� �� ��������� � ��������� �������������� �������� � ��-����� ���� ����� �� ������ ����������� �����, ���������� � ���������. 
</p><p>� ������ �� ���������� ���������� ����� ����� �������������� ������� ���� �������� ������������ � ������������ � ���������������� �����������. 
</p><p>�� ��������������� ��������� ��������� ��� ���������, �� ����������� ����-������������ ������������ �� ������ ��������������� �� ��� ����������� ���-���.</p>';

			$result .= '                                                    	<p><strong>13. ��������� � ���������� � ��</strong></p>';
			$result .= '                                                    	<p>��������� � ���������� � �� �������� ����� ������ ���� ����� �� ����������-��� �� ������ ��� �����, ��� �������� ����� �������� ������� ���������� � ��-��. </p>';
			$result .= '                                                    	<p>������������ ������ ���������� �������������� �������� ���� ��������� � ��-������� ��, ������������ 555hf.tv, ��� �������� ����� ������������� �� ����� 555hf.tv. </p>';

			$result .= '                                                    	<p><strong>14. ������� � ���������������� ���������� ���������</strong></p>';
			$result .= '                                                    	<p>� ������ �������� ����������-�������� ����� ������� ������ ���������� ����-�����, ������������� ������� ��� � ����� ���������������� 555hf.tv, 555hf.tv ��������� �� ����� ����� ����� ��������� � ���������������� 555hf.tv, ��-���������� �� ���������� ��������� � ������������ � ������ �������.</p>';
*/	
			$result .= '                                                        </div>'."\n";

			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <input type="checkbox" id="rulesCheckFree" name="rulesCheckFree" value="1">'."\n";
			$result .= '                                                            <label for="rulesCheckFree" class="inline-label">� ��������</label>'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                    <div class="boxed captcha">'."\n";
			$result .= '                                                        <h5>���������� ������� �����, ������� �� ������ �� ��������!</h5>'."\n";
			$result .= '                                                        <div class="hr2"></div>'."\n";
			$result .= '                                                        <div class="float-l">'."\n";
			$result .= '                                                    	<img src="/class/captcha.php" width="228" height="98" alt="" title="" />'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="text-c">'."\n";
			$result .= '                                                    	<div class="rows-input">'."\n";
			$result .= '                                                                <input id="captcha" type="text" name="captchafree"/>'."\n";
			$result .= '                                                    	</div>'."\n";
			$result .= '                                                            <a class="button button-dark" onClick="regUserStepFree(); return false;">'."\n";
			$result .= '                                                                <span>����������</span>'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                       </div>'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                 </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";

			return $result;
		}

		static function templateRegKLUB($type) {

$fio = '<div class="rows-input">'."\n";
$fio .= '<label for="lastname"><em>* </em>������� (���������)</label>'."\n";
$fio .= '<input type="text" id="lastname" name="lastname" value="'.(isset($_SESSION['REG']['lastname'])? $_SESSION['REG']['lastname']: "").'">'."\n";
$fio .= '</div>'."\n";
$fio .= '<div class="rows-input">'."\n";
$fio .= '<label for="firstname"><em>* </em>��� (���������)</label>'."\n";
$fio .= '<input type="text" id="firstname" name="firstname" value="'.(isset($_SESSION['REG']['firstname'])? $_SESSION['REG']['firstname']: "").'">'."\n";
$fio .= '</div>'."\n";
$fio .= '<div class="rows-input">'."\n";
$fio .= '<label for="middlename"><em>* </em>�������� (���������)</label>'."\n";
$fio .= '<input type="text" id="middlename" name="middlename" value="'.(isset($_SESSION['REG']['middlename'])? $_SESSION['REG']['middlename']: "").'">'."\n";
$fio .= '</div>'."\n";

$address = '<div class="rows-input">'."\n";
$address .= '<label for="city"><em>* </em>���������� ����� (���������)</label>'."\n";
$address .= '<input type="text" id="city" name="city" value="'.(isset($_SESSION['REG']['city'])? $_SESSION['REG']['city']: "").'">'."\n";
$address .= '</div>'."\n";
$address .= '<div class="rows-input">'."\n";
$address .= '<label for="region"><em>* </em>������ (���������)</label>'."\n";
$address .= '<input type="text" id="region" name="region" value="'.(isset($_SESSION['REG']['region'])? $_SESSION['REG']['region']: "").'">'."\n";
$address .= '</div>'."\n";

$address1 = '����� ����� ����������� ��� ����������������� ����������'."\n";
$address1 .= '<div class="rows-input">'."\n";
$address1 .= '<label for="address"><em>* </em>�������� ������</label>'."\n";
$address1 .= '<select id="region1" name="region1">'."\n";
include_once('arr_reg.php');
foreach($arr_reg as $c=>$region1)
    $address1 .= '<option value="'.$c.'">'.$region1.'</option>'."\n";
$address1 .= '</select>'."\n";
$address1 .= '</div>'."\n";
$address1 .= '<div class="rows-input">'."\n";
$address1 .= '<label for="address"><em>* </em>����� (���������)</label>'."\n";
$address1 .= '<input type="text" id="address" name="address" value="'.(isset($_SESSION['REG']['address'])? $_SESSION['REG']['address']: "").'">'."\n";
$address1 .= '</div>'."\n";

$contacts = '<div class="rows-input">'."\n";
$contacts .= '<label for="email"><em>* </em>Email</label>'."\n";
$contacts .= '<input type="text" id="email" name="email" value="'.(isset($_SESSION['REG']['email'])? $_SESSION['REG']['email']: "").'">'."\n";
$contacts .= '</div>'."\n";
$contacts .= '<div class="rows-input">'."\n";
$contacts .= '<label for="phone"><em>* </em>���������� �������</label>'."\n";
$contacts .= '<input type="text" id="phone" name="phone" value="'.(isset($_SESSION['REG']['phone'])? $_SESSION['REG']['phone']: "").'">'."\n";
$contacts .= '</div>'."\n";

$contacts1 = '<div class="rows-input">'."\n";
$contacts1 .= '<label for="email"><em>* </em>Email</label>'."\n";
$contacts1 .= '<input type="text" id="email" name="email" value="'.(isset($_SESSION['REG']['email'])? $_SESSION['REG']['email']: "").'">'."\n";
$contacts1 .= '</div>'."\n";
$contacts1 .= '���������� ��������: <div class="rows-input">'."\n";
$contacts1 .= '<label for="phone3"><em> </em>��������</label>'."\n";
$contacts1 .= '<input type="text" id="phone3" name="phone3" value="'.(isset($_SESSION['REG']['phone3'])? $_SESSION['REG']['phone3']: "").'">'."\n";
$contacts1 .= '</div>'."\n";
$contacts1 .= '<div class="rows-input">'."\n";
$contacts1 .= '<label for="phone1"><em>* </em>���������</label>'."\n";
$contacts1 .= '<input type="text" id="phone1" name="phone1" value="'.(isset($_SESSION['REG']['phone1'])? $_SESSION['REG']['phone1']: "").'">'."\n";
$contacts1 .= '</div>'."\n";
$contacts1 .= '<div class="rows-input">'."\n";
$contacts1 .= '<label for="phone2"><em> </em>���������</label>'."\n";
$contacts1 .= '<input type="text" id="phone2" name="phone2" value="'.(isset($_SESSION['REG']['phone2'])? $_SESSION['REG']['phone2']: "").'">'."\n";
$contacts1 .= '</div>'."\n";



$gun = '<div class="rows-input">'."\n";
$gun .= '<label for="gun_type"><em> </em>�� ��������� ����� ���� ������</label>'."\n";
$gun .= '<input type="text" id="gun_type" name="gun_type" value="'.(isset($_SESSION['REG']['gun_type'])? $_SESSION['REG']['gun_type']: "").'">'."\n";
$gun .= '</div>'."\n";
$gun .= '<div class="rows-input">'."\n";
$gun .= '<label for="gun_size"><em> </em>������</label>'."\n";
$gun .= '<input type="text" id="gun_size" name="gun_size" value="'.(isset($_SESSION['REG']['gun_size'])? $_SESSION['REG']['gun_size']: "").'">'."\n";
$gun .= '</div>'."\n";
$gun .= '<div class="rows-input">'."\n";
$gun .= '<label for="gun_quality"><em> </em>��� ����������� ������� ����������</label>'."\n";
$gun .= '<input type="text" id="gun_quality" name="gun_quality" value="'.(isset($_SESSION['REG']['gun_quality'])? $_SESSION['REG']['gun_quality']: "").'">'."\n";
$gun .= '</div>'."\n";

$capcha = '<div class="boxed captcha">'."\n";
$capcha .= '<h5>���������� ������� �����, ������� �� ������ �� ��������!</h5>'."\n";
$capcha .= '<div class="hr2"></div>'."\n";
$capcha .= '<div class="float-l">'."\n";
$capcha .= '<img src="/class/captcha.php" width="228" height="98" alt="" title="" />'."\n";
$capcha .= '<div class="rows-input">'."\n";
$capcha .= '<input id="captcha" type="text" name="captchafree"/>'."\n";
$capcha .= '</div>'."\n";
$capcha .= '<a class="button button-dark" onClick="regUserKLUB('.$type.'); return false;">'."\n";
$capcha .= '<span>����������</span>'."\n";
$capcha .= '</a>'."\n";
$capcha .= '</div>'."\n";
$capcha .= '</div>'."\n";

$trip='<div class="b1 b2">
<p align="right"><b>���������� ����� �555hf.ru�</b></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><b>������ - ������ �� �������</b></p>
<p>&nbsp;</p>
<p><span>'.
$fio.
'</span></p>
<p><span>'.
$address.
'</span></p>'.
'<div class="rows-input">
<label for="date_in"><em>* </em>����������� ���� ������� (��.��.����)</label>
<input type="text" id="date_in" name="date_in" value="'.(isset($_SESSION['REG']['date_in'])? $_SESSION['REG']['date_in']: "").'">
</div>'.
'<div class="rows-input">
<label for="date_out"><em>* </em>����������� ���� ����������� (��.��.����)</label>
<input type="text" id="date_out" name="date_out" value="'.(isset($_SESSION['REG']['date_out'])? $_SESSION['REG']['date_out']: "").'">
</div>'.
'<p><span>'.$contacts.'</span></p><p>&nbsp;</p>'.
'<div class="rows-input">
<label for="comment">����������� (���������)</label>
<input type="text" id="comment" name="comment" value="'.(isset($_SESSION['REG']['comment'])? $_SESSION['REG']['comment']: "").'">
</div>'.
'<p>&nbsp;</p>'.
'<p><span>*��������� � �� ������� ����������� ������� �� �������� ������������. </span></p>'.
$capcha.
'</div>';


			$arr=array("nameklub"=>array("����� �555hf.ru�","��������� ��������� ������", 
"����ϻ (���������� �������������� ������ ����������������)",
"������� ������.����� �������",
"������� ������.������� �������",
"������� ������.���",
"������� ������.��������",
"������� ������.���������",
"������� ������.����������"
),
				    "anketa"=>array(
//anketa1
'<div class="b1 b2">
<p align="right"><b>���������� ����� �555hf.ru�</b></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><b>���������   -  ������</b></p>
<p align="center"><b>���  ���������� � ����� ����� �555hf.ru�</b></p>
<p>&nbsp;</p>
<p><span>�, '.
$fio.
'</span></p>
<p><span>'.
$address.
'</span></p>
<p><span>������� � ����� ����� ��� ����������� ������� � ���������� ������������, �������������� ������:</span></p>'.
'<div class="rows-input"><input type="checkbox" id="hunting" name="hunting" value="1">
<label for="hunting" class="inline-label">������������ ������ �� �����;</label></div>'.
'<div class="rows-input"><input type="checkbox" id="fishing" name="fishing" value="1">
<label for="fishing" class="inline-label">������������ ������ �� �������;</label></div>'.
'<div class="rows-input"><input type="checkbox" id="extrim1" name="extrim1" value="1">
<label for="extrim1" class="inline-label">������� - ����������� � ����������;</label></div>'.
'<div class="rows-input"><input type="checkbox" id="sea1" name="sea1" value="1">
<label for="sea1" class="inline-label">������� �����������.</label></div><br>'.
'<p><span> �������� ��� ���������:</span></p>'.
'<div class="rows-input"><input type="checkbox" id="tradishional" name="tradishional" value="1">
<label for="tradishional" class="inline-label">������������ ����� (��������, � ����� � ��.);</label></div>'.
'<div class="rows-input"><input type="checkbox" id="trofeynaya" name="trofeynaya" value="1">
<label for="trofeynaya" class="inline-label">��������� �����;</label></div>'.
'<div class="rows-input"><input type="checkbox" id="sportivnaya" name="sportivnaya" value="1">
<label for="sportivnaya" class="inline-label">���������� ���������  �������;</label></div>'.
'<div class="rows-input"><input type="checkbox" id="extrim" name="extrim" value="1">
<label for="extrim" class="inline-label">�������  ����������� � ����������.</label></div><br>'.
'<p><span>���������� ������������� � ����������� ����� � ������� ��������� ������� �����  � ��� ������ (������ �������):</span></p>'.
'<div class="rows-input">
<input type="radio" name="argee" value="1" id="y" CHECKED><label for="y">��</label>
<input type="radio" id="n" name="argee" value="0"><label for="n">���</label></div><br>'.
'<p><span>���������� ����������� � ������������� ������������ � �����������:</span></p>'.
'<div class="rows-input"><input type="checkbox" id="splav" name="splav" value="1">
<label for="splav" class="inline-label">����� �� ������ ����� (�������, �����);</label></div>'.
'<div class="rows-input"><input type="checkbox" id="nauch" name="nauch" value="1">
<label for="nauch" class="inline-label">������-�������������� ���������� � ������ ��������� �������;</label></div>'.
'<div class="rows-input"><input type="checkbox" id="auto" name="auto" value="1">
<label for="auto" class="inline-label">�������������, �����, ������ ����������� �������;</label></div>'.
'<div class="rows-input"><input type="checkbox" id="sea" name="sea" value="1">
<label for="sea" class="inline-label">������� �����������.</label></div><br>'.
'<p><span>'.$contacts.'</span></p><p>&nbsp;</p>'.
#<p><span>�___�___________<wbr>__201_�.                             _______________(<wbr>�������)</span></p>
'<p>&nbsp;</p>'.
'<p><span>*��������� � �� ������� ����������� ������� �� �������� ������������. </span></p>'.
$capcha.
'</div>',
//anketa2
'<div class="b1 b2">
<p align="right"><b>������������<br>��������� ��������� ������<br>��������� ������� �����������</b></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><b>���������</b></p>
<p>&nbsp;</p>
<p><span>�, '.
$fio.
'</span></p>'.
#�����������
'<p><span>'.
$address.
'</span></p>
<p><span>
����� ������� ���� � ����� �������������� ������������ ����������� ���������� C�������� ������. � ������� ����������� ����������, ����� � ����������� ����� ����������� ������ � �������� �� ���������.</span></p>'.
'<br><p align="center"><b>������</b></p>
<p>&nbsp;</p>'.
'<p><span>���� ������ ���������� � �����������:</span></p>'.
'<div class="rows-input"><input type="checkbox" id="consult" name="consult" value="1">
<label for="consult" class="inline-label">��������� ������������ � ������ � ������������ ������ � ������������;</label></div>'.
'<div class="rows-input"><input type="checkbox" id="metr300" name="metr300" value="1">
<label for="metr300" class="inline-label">��������� ���������� �������� �� 300 ������;</label></div>'.
'<div class="rows-input"><input type="checkbox" id="metr300plus" name="metr300plus" value="1">
<label for="metr300plus" class="inline-label">�������������� �������� ������������ (������������ ����������) �������� ����� 300 ������;</label></div>'.
'<div class="rows-input"><input type="checkbox" id="group" name="group" value="1">
<label for="group" class="inline-label">�������� ������������ �������� � ������� (�������� ������);</label></div>'.
'<div class="rows-input"><input type="checkbox" id="soversh" name="soversh" value="1">
<label for="soversh" class="inline-label">����������������� ������ ����������� ����������;</label></div>'.
'<div class="rows-input"><input type="checkbox" id="sorevn" name="sorevn" value="1">
<label for="sorevn" class="inline-label">������� � �������������.</label></div><br>'.
'<p><span>'.$gun.'</span></p><br>'.
'<p><span>'.$contacts.'</span></p>
<p>&nbsp;</p>'.
#<p><span>�___�___________<wbr>__201_�.                             _______________(<wbr>�������)</span></p>
'<p>&nbsp;</p>'.
'<p><span>*��������� � �� ������� ����������� ������� �� �������� ������������. </span></p>'.
$capcha.
'</div>',
//anketa3
'<div class="b1 b2">'.
$fio.

'<em>* </em>���:
<div class="rows-input"><input type="radio" name="gender" value="1" id="m" CHECKED><label for="m">���</label>
<input type="radio" id="w" name="gender" value="0"><label for="w">���</label></div>'.

'<div class="rows-input">
<label for="birth"><em>* </em>����� �������� (���������)</label>
<input type="text" id="birth" name="birth" value="'.(isset($_SESSION['REG']['birth'])? $_SESSION['REG']['birth']: "").'">
</div>'.

'<div class="rows-input">
<label for="birthday"><em>* </em>���� �������� (��.��.����)</label>
<input type="text" id="birthday" name="birthday" value="'.(isset($_SESSION['REG']['birthday'])? $_SESSION['REG']['birthday']: "").'">
</div>'.

'<div class="rows-input">
<label for="citizenship"><em> </em>����������� (���������)</label>
<input type="text" id="citizenship" name="citizenship" value="'.(isset($_SESSION['REG']['citizenship'])? $_SESSION['REG']['citizenship']: "").'">
</div>'.

'<div class="rows-input">
<label for="education"><em> </em>����������� (���������)</label>
<input type="text" id="education" name="education" value="'.(isset($_SESSION['REG']['education'])? $_SESSION['REG']['education']: "").'">
</div>'.

'<div class="rows-input">
<label for="work"><em> </em>����� ������ (���������)</label>
<input type="text" id="work" name="work" value="'.(isset($_SESSION['REG']['work'])? $_SESSION['REG']['work']: "").'">
</div>'.

'<div class="rows-input">
<label for="work1"><em> </em>��������� (���������)</label>
<input type="text" id="work1" name="work1" value="'.(isset($_SESSION['REG']['work1'])? $_SESSION['REG']['work1']: "").'">
</div>'.

'<div class="rows-input">
<label for="official"><em> </em>�������� � �������� � ������������ ������������ (� �.�. � ������������ �������) (���������)</label>
<input type="text" id="official" name="official" value="'.(isset($_SESSION['REG']['official'])? $_SESSION['REG']['official']: "").'">
</div>'.


'
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><b>���������</b></p>
<p align="center">����� ������� ���� � ����� ������������ ������</p>
<p align="center"><b>����������� �������������� ������ ����������������</b></p>
<p align="center">���� � ������ ������ ��������, �������� ��������� ����� ������.</p>
<p>&nbsp;</p>
<p><span>'.
$address1.
'</span></p>'.
'<p><span>'.$contacts1.'</span></p><p>&nbsp;</p>'.

'�������: 
<div class="rows-input">
<label for="docser"><em>* </em>�����</label>
<input type="text" id="docser" name="docser" value="'.(isset($_SESSION['REG']['docser'])? $_SESSION['REG']['docser']: "").'">
</div>'.
'<div class="rows-input">
<label for="docno"><em>* </em>�����</label>
<input type="text" id="docno" name="docno" value="'.(isset($_SESSION['REG']['docno'])? $_SESSION['REG']['docno']: "").'">
</div>'.
'<div class="rows-input">
<label for="docdate"><em>* </em>����� (��.��.����)</label>
<input type="text" id="docdate" name="docdate" value="'.(isset($_SESSION['REG']['docdate'])? $_SESSION['REG']['docdate']: "").'">
</div>'.
'<div class="rows-input">
<label for="docwho"><em>* </em>��� ����� (������������ ������) (���������)</label>
<input type="text" id="docwho" name="docwho" value="'.(isset($_SESSION['REG']['docwho'])? $_SESSION['REG']['docwho']: "").'">
</div>'.


'<p>&nbsp;</p>'.
'<p><span>*��������� � �� ������� ����������� ������� �� �������� ������������. </span></p>'.
$capcha.
'</div>',
//anketa4 - ������� ����� �������
$trip,
//anketa5 - ������� ����� �������
$trip,
//anketa6 - ������� ������� �������
$trip,
//anketa7 - ������� ���
$trip,
//anketa8 - ������� ��������
$trip,
//anketa9 - ������� ���������
$trip
));
			$result = "";
			$result .= '	              			<div class="boxed mar-b10 autror-reg">'."\n";
                        $result .= '                                <div class="shadowed-light">'."\n";
                        $result .= '                                    <div class="border">'."\n";
                        $result .= '                                        <div class="inner-border">'."\n";
                        $result .= $arr['anketa'][$type];
                        $result .= '                                        </div>'."\n";
                        $result .= '                                    </div>'."\n";
                        $result .= '                                </div>'."\n";
			$result .= '                        </div>'."\n";

			return $result;
		}

		static function templateRegStep0() {
			$result = "";
			$result .= '		<!-- ������� �������� ����������� -->'."\n";
			$result .= '	<div class="reg_text"><p><img src="/images/register.jpg" width="279" height="274" hspace="5" vspace="5" align="left" />'."\n";
			$result .= '		<div id="sled_top_title">����� ����������� ������������� ��������...</div>1. ������ ������ �� ���� �������������� ���������� 555huntfishing.TV<br />
2. �������� ���������� ����� ��������� �� ������� ��������<br />
3. ������-������� � �������� �������� � �������� ����������.<br />
4. ����������� ������ ������������� �������� � ����������� ��������� �� � ������ ������������� ��� ����� � 4-� ������ ���������.<br />
5. ����������� ����������� ��������� - �.�. �� ������ �������������� ��������� ��� ���� �������� �� ������ ���������� �������� �� ����� � ������ �� ��������.<br />
6. ����������� ������������ ����� ��������, ��������� ������� � ���������� � ���������� ����������� � ��� ������.<br />
7. ����������� ������� � ��������� �� ������ ����� ���������� 555huntfishing.TV<br />
8. ����������� ������� � ���� � ����� ���������� � ����������� ������� ������, �������, ���������� � ������ ������ ��������� �����.<br />
9. ����������� ��������� ������� � ��������� ������ ������� �� ����� ����������, ���������, ������� � ����������� �������, ������� ��������� ����� ���������� �� �������� �����������.<br /><br />'."\n";

#			$result .= '	<div id="sled_top_title">����� ����������� ������������� ��������...</div>'."\n";
#			$result .= '	��������� ���������������� ���������� (����� "���������������� ����������" ��� "��") ��������� ����� �������������� ������� www.555huntfishing.tv (����� "��������.TV") � ���������� ����� (����� "������������"), ���������� ������� �������������������� � ������������ �� �������� 3 � 4 ���������� ��, � ���������� ��������� �� ����������� WEB-������ � ���� �������� (����� "����") � ������� http://www.555huntfishing.tv <br />'."\n";
#			$result .= '            <br />'."\n";
#			$result .= '            <strong>1. ������� ����������������� ����������</strong> <br />'."\n";
#			$result .= '"��������.TV" ���������� ������������ ���� ������ �� ��������, ���������� ��������� ���������� ����������������� ����������. ���������������� ���������� ����� ���� �������� "��������.TV" ��� ������-���� ������������ ����������� ������������. �������� ���������� ������ ����������������� ���������� ������ ��������� �� �������� �� ������ <a href="http://www.555huntfishing.tv/reg/">http://www.555huntfishing.tv/reg/ </a><br />'."\n";
#			$result .= '<br />'."\n";
#			$result .= '<strong>2. �������� ����� </strong><br />'."\n";
#			$result .= '"��������.TV" - ������, �������������� ������������ ��� ������ ������������������� ���������-������������ ����������� ������� ������ ��� ��������� �������� - ����������� � ����������� �������� - ���������. </p>'."\n";
#			$result .= ' ������ ��������.TV ��������������� �������������, ������� ������ � ���� ��������, � ������������� ����������� ����������� ��� ������ ���-�����������, �� ������ ����������������� ����������. <br />'."\n";
#			$result .= ' <br />'."\n";
#			$result .= ' <strong>3. ���������� ����������������� ���������� � ���� </strong><br />'."\n";
#			$result .= '�� �������� � ���� ����� ��������� ������������� �������� � �� ��������� � ����� ������� ������������� ������ "� �������� �������", ���������� ��� ������� ��. ������ "��������.TV" �� ������������� ������ �������������, ������������ ��� ��������� ������������� ����� ���-������������ �����, ��� ������������� �� ������ <a href="http://www.555huntfishing.tv/">http://www.555huntfishing.tv/ </a> </div>'."\n";
			$result .= '	</div><div class="friends_line"></div>'."\n";
			$result .= '	<div class="podpiska">'."\n";
			$result .= '	    <div id="sled_right_title">���������� ��������</div>'."\n";
			$result .= '	    <div id="mesto">'."\n";

			$result .= '		<strong>������ ����������:</strong>'."\n";
			$result .= '		<p><input id="country[0]" name="country[]" type="checkbox" value="1" onClick="checkCountry(0)" '.(isset($_SESSION['REG']['country']) && $_SESSION['REG']['country']==1? "CHECKED": "").' /> <label for="country[0]">���������� ���������</label></p>'."\n";
			$result .= '		<p><input id="country[1]" name="country[]" type="checkbox" value="2" onClick="checkCountry(1)" '.(isset($_SESSION['REG']['country']) && $_SESSION['REG']['country']==2? "CHECKED": "").' /> <label for="country[1]">�������</label></p>'."\n";
			$result .= '		<p><input id="country[2]" name="country[]" type="checkbox" value="3" onClick="checkCountry(2)" '.(isset($_SESSION['REG']['country']) && $_SESSION['REG']['country']==3? "CHECKED": "").' /> <label for="country[2]">����������</label></p>'."\n";
			$result .= '		<p><input id="country[3]" name="country[]" type="checkbox" value="4" onClick="checkCountry(3)" '.(isset($_SESSION['REG']['country']) && $_SESSION['REG']['country']==4? "CHECKED": "").' /> <label for="country[3]">�����</label></p>'."\n";
			$result .= '		<p><input id="country[4]" name="country[]" type="checkbox" value="5" onClick="checkCountry(4)" '.(isset($_SESSION['REG']['country']) && $_SESSION['REG']['country']==5? "CHECKED": "").' /> <label for="country[4]">������</label></p>'."\n";
			$result .= '		<p><input id="country[5]" name="country[]" type="checkbox" value="6" onClick="checkCountry(5)" '.(isset($_SESSION['REG']['country']) && $_SESSION['REG']['country']==6? "CHECKED": "").' /> <label for="country[5]">�������</label></p>'."\n";
			$result .= '		<p><input id="country[6]" name="country[]" type="checkbox" value="0" onClick="checkCountry(6)" '.(isset($_SESSION['REG']['country']) && $_SESSION['REG']['country']==0? "CHECKED": "").' /> <label for="country[6]">������ ������</label></p>'."\n";
			$result .= '	    </div>'."\n";
			$result .= '	    <div id="oplata">'."\n";
			$result .= '		<strong>������ ��������:</strong>'."\n";
			$result .= '		<p><input id="timepay[0]" name="timepay[]" type="checkbox" value="1" onClick="checkTime(0)" '.(isset($_SESSION['REG']['timepay']) && $_SESSION['REG']['timepay']==1? "CHECKED": "").' /> <label for="timepay[0]">1 �����</label></p>'."\n";
			$result .= '		<p><input id="timepay[1]" name="timepay[]" type="checkbox" value="2" onClick="checkTime(1)" '.(isset($_SESSION['REG']['timepay']) && $_SESSION['REG']['timepay']==2? "CHECKED": "").' /> <label for="timepay[1]">2 ������</label></p>'."\n";
			$result .= '		<p><input id="timepay[2]" name="timepay[]" type="checkbox" value="3" onClick="checkTime(2)" '.(isset($_SESSION['REG']['timepay']) && $_SESSION['REG']['timepay']==3? "CHECKED": "").' /> <label for="timepay[2]">3 ������</label></p>'."\n";
			$result .= '		<p><input id="timepay[3]" name="timepay[]" type="checkbox" value="6" onClick="checkTime(3)" '.(isset($_SESSION['REG']['timepay']) && $_SESSION['REG']['timepay']==6? "CHECKED": "").' /> <label for="timepay[3]">6 �������</label></p>'."\n";
			$result .= '		<p><input id="timepay[4]" name="timepay[]" type="checkbox" value="12" onClick="checkTime(4)" '.(isset($_SESSION['REG']['timepay']) && $_SESSION['REG']['timepay']==12? "CHECKED": "").' /> <label for="timepay[4]">12 �������</label></p>'."\n";
			$result .= '	    </div>'."\n";

			$result .= '	    <div id="sum">'."\n";
			$result .= '		<strong>���������:</strong>'."\n";
			$result .= '		<p id="sumTime">'.(isset($_SESSION['REG']['timepay'])? ($_SESSION['REG']['timepay']<=3? $_SESSION['REG']['timepay']*150: ($_SESSION['REG']['timepay']==6? 750: ($_SESSION['REG']['timepay']==12? 1500: 0))): 0).' �.</p>'."\n";
			$result .= '	    </div>'."\n";
			$result .= '	</div>'."\n";
			$result .= '	    <div class="clear"></div><br />'."\n";
			$result .= '	    <div class="friends_line"></div>'."\n";
			$result .= '	    <div class="reg_left">'."\n";
			$result .= '		<div id="sled_right_title">���������������� ����������</div>'."\n";
			$result .= '	    </div><div class="clear"></div><br /><div id="rulesText2">
						��������� ���������������� ���������� (����� "���������������� ����������" ��� "��") ��������� ����� �������������� ������� www.555huntfishing.tv (����� "555huntfishing.TV") � ���������� ����� (����� "������������"), ���������� ������� �������������������� � ������������ �� �������� 3 � 4 ���������� ��, � ���������� ��������� �� ����������� WEB-������ � ���� �������� (����� "����") � ������� http://www.555huntfishing.tv
						<br><br>
						<strong>1. ������� ����������������� ����������</strong><br>
						"555huntfishing.TV" ���������� ������������ ���� ������ �� ��������, ���������� ��������� ���������� ����������������� ����������. ���������������� ���������� ����� ���� �������� "555huntfishing.TV" ��� ������-���� ������������ ����������� ������������. �������� ���������� ������ ����������������� ���������� ������ ��������� �� �������� �� ������ <a href="http://www.555huntfishing.tv/reg/">http://www.555huntfishing.tv/reg/</a>
						
						<br><br><strong>2. �������� �����</strong><br>
						"555huntfishing.TV" - ������, �������������� ������������ ��� ������ ������������������� ���������-������������ ����������� ������� ������ ��� ��������� �������� - ����������� � ����������� �������� - ���������.
						<br><br>������ 555huntfishing.TV ��������������� �������������, ������� ������ � ���� ��������, � ������������� ����������� ����������� ��� ������ ���-�����������, �� ������ ����������������� ����������. 
						<br><br><strong>3. ���������� ����������������� ���������� � ����</strong><br>
						�� �������� � ���� ����� ��������� ������������� �������� � �� ��������� � ����� ������� ������������� ������ "� �������� �������", ���������� ��� ������� ��. ������ "555huntfishing.TV" �� ������������� ������ �������������, ������������ ��� ��������� ������������� ����� ���-������������ �����, ��� ������������� �� ������ <a href="http://www.555huntfishing.tv/">http://www.555huntfishing.tv/</a>
						<br><br><strong>4. ������������� ������������ �� �����������, ������ � ������������</strong><br>
						4.1. ������������ ������ ������ ��������� �����������:
						<br>a) ��������� ��������������� �����;
						<br>�) �������� �������� � ��������� ��, �����, ��������� � ��. 3 ��. 
						<br>4.2. ��� ���� ����� ��������������� �������� "555huntfishing.TV", ������������ ����������� ������������ ���������, ������ � ������ ���������� � ���� �� ��������, ������������ � ��������������� �����, � ������������ ��� ���������� � ���������� ���������. 
						<br>4.3. �� ���������� �������� ����������� ������������ �������� ����� � ������ ��� ������� � ������������� ������� �������� ������� "555huntfishing.TV". ������������  ����� ��������������� �� ������������ ������ ������ � ������, � ����� �� ���, ��� ����� ������� �� "555huntfishing.TV" ��� ������� � ������� ������������. "555huntfishing.TV" ����� ����� ��������� ������������� ������������ ������� �/��� ������ �� �� ���������. ������������ ����������� � ���, ��� �� ������ ���������� ��������� "555huntfishing.TV" � ����� ������ ����������������� (�� ������������ �������������) ������� �  ������� � ������� ������������ �/��� � ����� ��������� ������������, � ����� � ���, ��� ������������ �������������� ������������ ���������� ������ ��� ����� ������� (������ "�����") �� ��������� ������ ������ ������ � �������� "555huntfishing.TV". 
						<br>4.4. ��������� ���������� �� �������� ������������� ��� ���� ����� �������������������� ������������� "555huntfishing.TV". 
						
						<br><br><strong>5. ��������� ������������������� ������������</strong><br>
						������������ �������� � ���������, ��� �� ����� ������ ��������������� �� ������������� ���� ����������, ������, �������, ��������, ������, �����, ����������, �������, �����  � ������ ���������� (����� "���������"), �������� �������������� ��� ���������� ��� ����������� � ������� ������� � ������� ������� "555huntfishing.TV". ��������� ����� �� ��������� ������������, ������, ��� ���������� � ��������������, ����������� �� ��������-����� "555huntfishing.TV", � ����� �������� ������� www.555huntfishing.tv ����������� �������� "��������". 
						<br>������������ ����������� �� ������������ ������ "555huntfishing.TV" ���: 
						<br>a) ��������, ��������, �������� ��� ������ ������� ������� ������������� ����������, ������� �������� �����������, ������������, �����������, ������������� ��������������, ���������������, ����������� ��������� �����, ����������������� ��������� �/��� ������������� ����� �� ��������, �����������, ��������, ����������� ���������; 
						<br>�) ��������� ���� ������������������ ��� �/��� ���������� �� ����� � ����� �����; 
						<br>�) ��������� ���� ����������; 
						<br>�) ������ ���� �� ������� �������� ��� ������������� ����������� �/��� ���������� ��� ����������� �� �� ����, � ��� ����� �� ����������� "555huntfishing.TV", �� ����������� �������, �� ��������� "555huntfishing.TV", � ����� �������� � ����������� ������������ ������� � ������������� �����-���� ��������� ��� ��������; 
						<br>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� ����������, ������� ������������ �� ����� ����� ������ ��������� �� ������ ��� �������� �����-���� ����������� ����������; 
						<br>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� ����������, ������� ����������� �����-���� ������, �������� �����, ������������ �����, �������� ��� ������ ����� ������������� �/��� ��������� � ������� � ��� ����� ������� �������; 
						<br>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� �� ����������� ����������� ������� ��������� ����������, �����; 
						<br>�) ��������, ��������, �������� ��� ������ ������� ������� ������������� �����-���� ����������, ���������� ������ ��� ������ ������������ ����, ����� ��� ���������, ��������������� ��� ���������, ����������� ���� ����������� ���������������� ������ ������������� ��� ��������������������� ������������ ��� ��������, ��� ������������� �������������������� �������, � ����� �������� ������ � ������������ ����������� ��������� � ��������� ��� �� ���������, ������, ������ � ������ �������� ��� ��������� �������������������� ������� � ������� "555huntfishing.TV",  ������ ������� �������� � ���������, � ����� ���������� ������ �� ������������� ����������; 
						<br>�) ��������� ��� ���������� ��������� �����-���� ���������� �������, ��������������� ��� ������������� �������; 
						<br><br><strong>6. �������������� �������������</strong><br>
						������������ ����������� �� ��������������, �� ��������� � �� ����������, �� ��������� � �� �������������, � ����� �� ������������ ��� �����-���� ������������ ����� �����-���� ��������� ������� "555huntfishing.TV", ����� ��� �������, ����� ����� ���������� ���� ������������ "555huntfishing.TV". "555huntfishing.TV" �� ����� ������� ��������������� �� �� ����� ��������� ����� ������������� � �������� ������. 
						<br><br><strong>7. ����������� �����������</strong><br>
						
						������������ �������� � ���, ��� "555huntfishing.TV" ��������� �� ����� ����� ���������� �������� ������ ������������ � ������� ����� ������� ��� ��������� ��. 
						<br>��� ������������� ��������� ������������� ���������� �� "555huntfishing.TV" ��������� �� ����� ����� �������� ���������� � ��������� ����������� ������������� "555huntfishing.TV" �� ���� �� ���� ���. 
						<br>"555huntfishing.TV" ��������� �� ����� ����� �������� ������������� ���� ���������� �������������� ����� "��������.TV", ������������ �������� �� ���� ������������. 
						<br><br><strong>8. ����� ������������� "555huntfishing.TV"</strong><br>
						������������ �������� � ����������� � ���, ��� ������ "555huntfishing.TV", ��� ��������� � ��� ����������� ��������� �������� ���������� �������, ��������� �������, ���������, �������� �� ���������������� ������������� � ������� ���������������� ����������� � �������������� ��������. 
						<br><br><strong>9. ����� ����������</strong><br>
						9.1. ���� ���� �� ����������� �������������� ����������� ����� ������������� � "555huntfishing.TV", ��� ���������, �������, �������, ����� ���� ���������������, ������ ������������ "555huntfishing.TV" �� ������ ����������� ����� support@555huntfishing.tv 
						<br>9.2. �� �������� ���������� ����������� ��������� ����� ������������� � "555huntfishing.TV" � �������������� ������������� ������������� ������� "555huntfishing.TV". 
						<br>9.3. ������������ � "555huntfishing.TV" ����������� �� ��, ��� ��� ��������� ����� �� ������ �� ����� ����������� �� ������ ����������� �����. 
						<br>9.4. ��������� ����� ������-���� ��������� �� ���������������� ��� �� ���������� ��������������� ���������� �� ������ ������������������ ��� �������������� ���� ��������� ����������. 
						<br>9.5. ����������� �� ������� "555huntfishing.TV" � ������ ��������� ������������� ��������� �� �� ������ "555huntfishing.TV" ����� ����������� ��������������� �������� � ������ ����� ��������� �������. 
						<br><br><strong>10. �������������� ������������</strong><br>
						10.1. ������������ � "555huntfishing.TV" ��������� ������� � ����� ������ ������� � ������� �������� ������������. 
						<br>10.2. ����������� ������������� ����� ������ ������� � ������� �������� ����� �� ������������. 
						
						<br>10.3. ��� ����� ������ ������� ������������, ��� ���������� ����� �� ��������� ������ ��� ����� e-mail, ������� �� �������� ��� �����������, ����� ����������� �������� ����� ������ ������� � ������� �������� � ����� � �������. 
						<br>10.4. � ������ ����������� ������ �������������������� ������������� ������� � ������� �������� ������������ ������ � ������� ������ ��� ��������� �� ���� "555huntfishing.TV". 
						<br><br><strong>11. �������� � �������� ����� "555huntfishing.TV"</strong><br>
						"555huntfishing.TV" ����� ����� ����������� ���������������� ������ � ����������-���������� ��������� "555huntfishing.TV" � ��������� ���������������� ������ "555huntfishing.TV", ��������� �� ���� ������������ "555huntfishing.TV" �� ���� ���� �� ������ ����� � ��������� ������ �� ���������. 
						<br>� ������ ����������� ����-�������� �������������, � ����� ������ ��� ����� � ����������-���������� ���������� ������� ���, �������������� � "555huntfishing.TV" u/��� �������� ������� ���, ������������ �� ������������ ��� ����������� ���������������� "555huntfishing.TV", �������� ������������ ������ "555huntfishing.TV" ��� ���������������� ����������� ������������. 
						<br><br><strong>12. ������� ������������ ���������</strong><br>
						��� ���������� ������, ��������� ����� ������������� � "555huntfishing.TV" � ���������� ������������� "555huntfishing.TV", ����������� ��������� ������������� �������: 
						<br>������������, ���������, ��� ��� ����� � �������� �������� ��-�� �������� "555huntfishing.TV", �������� ���������� �� ����������� ����� support@555huntfishing.tv ���������. 
						<br>� ������� 5 (����) ������� ���� �� ��� ��������� ��������� "555huntfishing.TV" ������ �������� ���� ������� �� ��������� � ��������� �������������� �������� � ������� ���� ����� �� ������ ����������� �����, ���������� � ���������. 
						<br>� ������ �� ���������� ���������� ����� ����� �������������� ������� ���� �������� ������������ � ������������ � ���������������� �����������. 
						<br>�� ��������������� ��������� ��������� ��� ���������, �� ����������� ���������������� ������������ �� ������ ��������������� �� ��� ����������� ������. 
						<br><br><strong>13. ��������� � ���������� � ��</strong><br>
						��������� � ���������� � �� �������� ����� ������ ���� ����� �� ������������� �� ������ ��� �����, ��� �������� ����� �������� ������� ���������� � ����. 
						<br>������������ ������ ���������� �������������� �������� ���� ��������� � ��������� ��, ������������ "555huntfishing.TV", ��� �������� ����� ������������� �� ����� "555huntfishing.TV". 
						
						<br><br><strong>14. ������� � ���������������� ���������� ���������</strong><br>
						� ������ �������� ����������-�������� ����� ������� ������ ���������� ���������, ������������� ������� ��� � ����� ���������������� "555huntfishing.TV", "555huntfishing.TV" ��������� �� ����� ����� ����� ��������� � ���������������� "555huntfishing.TV", ������������ �� ���������� ��������� � ������������ � ������ �������.
						
						
						</div><BR/><input type="checkbox" id="rulesCheck" name="rulesCheck" value="1"/><label for="rulesCheck"> � �������� � ���������</label>'."\n";
			$result .= '	    <div class="clear"></div><br />'."\n";
			$result .= '	    <div class="friends_line"></div>'."\n";


			$result .= '	    <div class="reg_left">'."\n";
			$result .= '		<div id="sled_right_title">���������� ������� �����, ������� �� ������ �� �������� !</div>'."\n";

			$result .= '              <div class="sled_input">'."\n";
			$result .= '                <div class="sled_input_t">'."\n";
			$result .= '                  <input type="text" class="sled_text" name="captcha"/>'."\n";
			$result .= '                  <p class="sled_input_title"><span class="red_star">&lowast;</span> ������� �����:</p>'."\n";
			$result .= '                </div>'."\n";
			$result .= '              </div>'."\n";

			$result .= '	    </div>'."\n";
			$result .= '	    <div class="reg_right"><br />'."\n";
			$result .= '		<img src="/class/captcha.php" alt="" />'."\n";
			$result .= '	    </div>'."\n";
			$result .= '	    <div class="clear"></div><br />'."\n";
			$result .= '	    <div class="friends_line"></div>'."\n";
			$result .= '	    <div class="register-con">'."\n";
			$result .= '		<div id="register-btn"><input type="image" src="/images/zareg.gif" id="reg" onClick="regUserStep0(); return false;"/></div>'."\n";
			$result .= '		<div id="payicon"><img src="/images/pay-mastercard.jpg" /> <img src="/images/pay-visa.jpg" /> <img src="/images/pay-webmoney.jpg" /> <img src="/images/pay-yd.jpg" /></div>'."\n";
			$result .= '		<div id="paytype">�� ������� �������� ��������:<br />������, ��������� �������, �������� ���������:</div>'."\n";
			$result .= '	    </div>'."\n";
			$result .= '	    <div class="friends_line"></div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			return $result;
		}

		static function templateRegStep1() {
			$result = '';

			$result .= '	<!-- ��� ������ ����������� -->'."\n";
			$result .= '	              			<div class="boxed mar-b10 autror-reg">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                                <div>'."\n";
			$result .= '                                                    <h1>��� 1 �� 3</h1>'."\n";
			$result .= '                                                    <div class="boxed">'."\n";
			$result .= '                                                	<div class="rows-input">'."\n";
			$result .= '                                                            <label for="login"><em>* </em>����� (��������� �����, �����, �����, @)</label>'."\n";
			$result .= '                                                            <input type="text" id="login" name="login" value="'.(isset($_SESSION['REG']['login'])? $_SESSION['REG']['login']: "").'">'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                		<div class="rows-input">'."\n";
			$result .= '                                                            <label for="firstname"><em>* </em>��� (���������)</label>'."\n";
			$result .= '                                                            <input type="text" id="firstname" name="firstname" value="'.(isset($_SESSION['REG']['firstname'])? $_SESSION['REG']['firstname']: "").'">'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <label for="lastname"><em>* </em>������� (���������)</label>'."\n";
			$result .= '                                                            <input type="text" id="lastname" name="lastname" value="'.(isset($_SESSION['REG']['lastname'])? $_SESSION['REG']['lastname']: "").'">'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                    	<p class="as-label"><em>* </em>���</p>'."\n";
			$result .= '                                                            <input type="radio" name="sex" value="m" id="m" '.(isset($_SESSION['REG']['sex']) && $_SESSION['REG']['sex']=="m"? "CHECKED": "").'>'."\n";
			$result .= '                                                            <label for="m">�������</label>'."\n";
			$result .= '                                                            <input type="radio" id="f" name="sex" '.(isset($_SESSION['REG']['sex']) && $_SESSION['REG']['sex']=="f"? "CHECKED": "").'>'."\n";
			$result .= '                                                            <label for="f">�������</label>'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <label for="phone"><em>* </em>�������</label>'."\n";
			$result .= '                                                            <input type="text" id="phone" name="phone" value="'.(isset($_SESSION['REG']['phone'])? $_SESSION['REG']['phone']: "").'" >'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <label for="email"><em>* </em>��� �mail</label>'."\n";
			$result .= '                                                            <input type="text" id="email" name="email" value="'.(isset($_SESSION['REG']['email'])? $_SESSION['REG']['email']: "").'">'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <label for="password"><em>* </em>������</label>'."\n";
			$result .= '                                                            <input type="password" id="password" name="pass1">'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <label for="confirm"><em>* </em>������������� ������</label>'."\n";
			$result .= '                                                            <input type="password" id="confirm" name="pass2">'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <p><em class="red">* </em>����, ������������ ��� ����������</p>'."\n";
			$result .= '                                                        <a class="button button-dark mar-t10" onClick="gotoRegUserStep(0)">'."\n";
			$result .= '                                                            <span>�����</span>'."\n";
			$result .= '                                                        </a>'."\n";
			$result .= '                                                        <a class="button button-dark mar-t10" onClick="regUserStep1()">'."\n";
			$result .= '                                                            <span>������</span>'."\n";
			$result .= '                                                        </a>'."\n";

			$result .= '                                                    </div>'."\n";
			$result .= '                                                 </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                        </div>'."\n";

			return $result;
		}

		static function templateRegStep2() {
			$result = '';

			$result .= '	              			<div class="boxed mar-b10 autror-reg">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                                <div>'."\n";
			$result .= '                                                    <h1>��� 2 �� 3</h1>'."\n";
			$result .= '                                                    <div class="boxed">'."\n";
			$result .= '                                                      <div>'."\n";
			$result .= '                                                	<div class="rows-input">'."\n";
			$result .= '                                                            <input name="pay[]" id="online" type="checkbox" value="online" onClick="regPay(\'online\')">'."\n";
			$result .= '                                                            <label for="online" class="inline-label"><strong>������ ����� On - line �������� ONPAY</strong></label>'."\n";
			$result .= '                                                            <!-- �������� (�����������) ������� ������ ���������� ������. -->'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="pad-l20" id="payonline-hidd" style="display: none">'."\n";
			$result .= '                                                    	<img src="../img/common/pay/pay-mastercard.jpg" width="30" height="19" alt="" title="" />'."\n";
			$result .= '                                                            <img src="../img/common/pay/pay-visa.jpg" width="30" height="19" alt="" title="" />'."\n";
			$result .= '                                                            <img src="../img/common/pay/pay-webmoney.jpg" width="51" height="19" alt="" title="" />'."\n";
			$result .= '                                                            <img src="../img/common/pay/pay-yd.jpg" width="48" height="19" alt="" title="" />'."\n";
			$result .= '                                                            <p>��� ���������� ������ ������� �� ������ ��������������� ���������� ������ ��������� ���� � ����������� ��������. ����� ������ ���� ������ 500. </p>'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                      </div>'."\n";
			$result .= '                                                      <div>'."\n";
			$result .= '                                                          <div class="rows-input">'."\n";
			$result .= '                                                            <input name="pay[]" id="nal" type="checkbox" value="nal" DISABLED onClick="regPay(\'nal\')">'."\n";
			$result .= '                                                            <label for="nal" class="inline-label">��������� ������� (� ������)</label>'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="pad-l20" id="paynal-hidd" style="display: none">'."\n";
			$result .= '                                                    	<div class="rows-input">'."\n";
			$result .= '                                                            <label for="adress"><em>* </em>�����, ���, ��������:</label>'."\n";
			$result .= '                                                            <input type="text" id="adress" name="nal_address" value="'.(isset($_SESSION['REG']['nal_address'])? $_SESSION['REG']['nal_address']: "").'">'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <label for="phone"><em>* </em>���������� �������:</label>'."\n";
			$result .= '                                                            <input type="text" id="phone" name="nal_phone" value="'.(isset($_SESSION['REG']['nal_phone'])? $_SESSION['REG']['nal_phone']: "").'" >'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <label for="other"><em>* </em>�������������:</label>'."\n";
			$result .= '                                                            <textarea id="other" name="nal_other">'.(isset($_SESSION['REG']['nal_other'])? $_SESSION['REG']['nal_other']: "").'</textarea>'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <p><em class="red">* </em>����, ������������ ��� ����������</p>'."\n";
			$result .= '                                                        <p>���� �� ���������� � ������ � ����������� ������ �� ����� �� 3000 ������, �� �� ������ ������� ������� ��� ������ ����� 555huntfishing.TV. ����� ������� ����� ��� ��� ����������.'."\n";
			$result .= '                                                        </p>'."\n";
			$result .= '                                                        <p>����� ���������� ����� ������ �������� � ���� ��� ������������� ������ � ��������� ������ � ������� �����. ����������, ��������� ���������� ���� ���������� �������.</p>'."\n";
			$result .= '                                                        <p><strong>��������! ��� ������ ����� �� ����� ����� ��� 3000 ������, ����� ������� ����������.</strong></p>'."\n";
			$result .= '                                                       </div>'."\n";
			$result .= '                                                      </div>'."\n";
			$result .= '                                                      <div>'."\n";
			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <input name="pay[]" id="per" type="checkbox" value="per" DISABLED onClick="regPay(\'per\')" >'."\n";
			$result .= '                                                            <label for="per" class="inline-label">�������� �������</label>'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="pad-l20" id="payper-hidd" style="display: none">'."\n";
			$result .= '                                                        <p>���� � ��� ��� ����������� ����������� ��� �����, �� ������ ��������������� ����������� ������� C��������, ������ � ��� ���� ���������</p>'."\n";
			$result .= '                                                        <p>���� �� - �� ��������, ��� ���� ������������ ��������� ������ ��������� �����, � ����� ���������� ������� ��� ������ ����������� �, ����������, ��� ������.</p>'."\n";
			$result .= '                                                        <p>�� ������ ��������� ������ �� ��� �������� ����. ����� ������� ������ ������ �� �������� ���������, ������� ����� �������� � ����� ����� ��.</p>'."\n";
			$result .= '                                                        <p>���� �� ���������� �� �� ���������� ��, �� ������� ����� ������� � ����� �����, ������ ��������� �������.</p>'."\n";

			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <label for="index"><em>* </em>�������� ������:</label>'."\n";
			$result .= '                                                            <input type="text" id="index" name="per_index" value="'.(isset($_SESSION['REG']['per_index'])? $_SESSION['REG']['per_index']: "").'" >'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <label for="city"><em>* </em>����� / �������</label>'."\n";
			$result .= '                                                            <input type="text" id="city" name="per_city" value="'.(isset($_SESSION['REG']['per_city'])? $_SESSION['REG']['per_city']: "").'" >'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <div class="rows-input">'."\n";
			$result .= '                                                            <label for="house"><em>* </em>�����, ���, ��������</label>'."\n";
			$result .= '                                                            <textarea id="house" name="per_address">'.(isset($_SESSION['REG']['per_address'])? $_SESSION['REG']['per_address']: "").'</textarea>'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <p><em class="red">* </em>����, ������������ ��� ����������</p>'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                      </div>'."\n";
			$result .= '                                                        <a class="button button-dark mar-t10" onClick="gotoRegUserStep(1)">'."\n";
			$result .= '                                                            <span>�����</span>'."\n";
			$result .= '                                                        </a>'."\n";
			$result .= '                                                        <a class="button button-dark mar-t10" onClick="regUserStep2()">'."\n";
			$result .= '                                                            <span>������</span>'."\n";
			$result .= '                                                        </a>'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                 </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                        </div>'."\n";

			return $result;
		}

		static function templateRegStep3() {
			$result = '';
			$result .= '              			<div class="boxed mar-b10 autror-reg">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                                <div>'."\n";
			$result .= '                                                    <h1>��� 3 �� 3</h1>'."\n";
			$result .= '                                                    <div class="boxed">'."\n";
			$result .= '                                                        <div class="pad-l20">'."\n";
			$result .= '                                                            <div class="rows-input step3">'."\n";
			$result .= '                                                        	<h3><strong>'.$_SESSION['REG']['firstname']." ".$_SESSION['REG']['lastname'].'</strong> <a onClick="gotoRegUserStep(1);">�������������</a></h3>'."\n";
			$result .= '                                                        	<p>�� �������� ������ � �������� ���������� 555huntfishing.TV �� '.$_SESSION['REG']['timepay'].' �������.</p>'."\n";
			$result .= '                                                            </div>'."\n";
			$result .= '                                                            <div class="rows-input step3">'."\n";
			$result .= '                                                        	<h3><strong>��� ������: </strong> <a onClick="gotoRegUserStep(1);">�������������</a></h3>'."\n";
			$result .= '                                                        	<p>'.$_SESSION['REG']['pass'].'</p>'."\n";
			$result .= '                                                            </div>'."\n";
			$result .= '                                                            <div class="rows-input step3">'."\n";
			$result .= '                                                        	<h3><strong>��������� ����� ������ - '.($_SESSION['REG']['pay']=="online"? "On-line ������": ($_SESSION['REG']['pay']=="nal"? "��������� ������� (� ������)": "�������� �������")).' </strong> <a onClick="gotoRegUserStep(2);">�������������</a></h3>'."\n";
			$result .= '                                                            </div>'."\n";
			$result .= '                                                            <div class="rows-input step3">'."\n";
			if ($_SESSION['REG']['pay'] == "nal" || $_SESSION['REG']['pay'] == "per") {
				$result .= '                                                        	<h3><strong>��������: </strong> <a onClick="gotoRegUserStep(2);">�������������</a></h3>'."\n";
				$result .= '								<p>'.($_SESSION['REG']['pay'] == "nal"? $_SESSION['REG']['nal_address']: $_SESSION['REG']['per_index'].", ".$_SESSION['REG']['per_city'].", ".$_SESSION['REG']['per_address']).'</p>'."\n";
			}
			if (isset($_SESSION['REG']['phone']) and $_SESSION['REG']['phone']!="")
				$result .= '                                                        	<p>������� ��� �����: <strong>'.$_SESSION['REG']['phone'].'</strong></p>'."\n";
			$result .= '                                                                <p>����� ����������� �����: <strong>'.$_SESSION['REG']['email'].'</strong></p>'."\n";
			$result .= '                                                            </div>'."\n";
			$result .= '                                                        </div>'."\n";
			$result .= '                                                        <a class="button button-dark mar-t10" onClick="gotoRegUserStep(2)">'."\n";
			$result .= '                                                            <span>�����</span>'."\n";
			$result .= '                                                        </a>'."\n";
			$result .= '                                                        <a class="button button-dark mar-t10" onClick="regUserFinish()">'."\n";
			$result .= '                                                            <span>������</span>'."\n";
			$result .= '                                                        </a>'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                 </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                        </div>'."\n";

			return $result;
		}

		static function templateRegFinish($zakaz=0, $sum=0) {
			global $STATIC;
			$result = '';

			$result .= '              			<div class="boxed mar-b10 autror-reg">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                        <div class="text-c">'."\n";

			if ($_SESSION['REG']['pay'] == "online") {
#				$mrh_login = "555huntfishing";
#				$mrh_pass1 = $STATIC['rk_pass'];
#				// ����� ������ // number of order
#				$inv_id = $zakaz; // �������� ������ // order description
#				$inv_desc = "������ � �������� ����� 555huntfishing.tv ������ �� {$_SESSION['REG']['timepay']} �����(��)"; // ����� ������ // sum of order
#				$out_summ = ($_SESSION['REG']['timepay']==1? 500: ($_SESSION['REG']['timepay']==2? 900: ($_SESSION['REG']['timepay']==3? 1300: ($_SESSION['REG']['timepay']==6? 2500: 5000)))); // ��� ������ // code of goods
#				$shp_item = "1"; // ������������ ������ ������� // default payment e-currency
#				$in_curr = "PCR"; // ���� // language
#				$culture = "ru"; // ������������ ������� // generate signature
#				$encoding = "windows-1251";
#				$crc = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:Shp_item=$shp_item"); // ����� ������ ������ // payment form

		                $result .= '<div align="center" style="width:100%;">
            		            <div class="step-pay">
                        	    <p><span id="b">�������� �������</span>: ������ � �������� ����� 555huntfishing.tv ������ �� '.$_SESSION['REG']['timepay'].' �����(��)</p>
                            	    <p><span id="b">����� �������</span>: '.$out_summ.' ������</p>
				    </div></div>';
#				    <script language=JavaScript src=\'https://merchant.roboxchange.com/Handler/MrchSumPreview.ashx?MrchLogin='.$mrh_login.'&OutSum='.$out_summ.'&InvId='.$inv_id.'&IncCurrLabel='.$in_curr.'&Desc='.$inv_desc.'&SignatureValue='.$crc.'&Shp_item='.$shp_item.'&Culture='.$culture.'&Encoding='.$encoding.'\'></script>

				    $onpay_login = '555huntfishing555';
				    $private_code = 'TO4dCz35BDS';
				    $sumformd5 = (float) $sum; //����������� ����� � ����� � ��������� ������
				    $md5check = md5("fix;$sumformd5;RUR;$zakaz;yes;".$private_code);
            //������� ������� ��� �������

				    $url = "http://secure.onpay.ru/pay/".$onpay_login."?"."pay_mode=fix&pay_for={$zakaz}&price={$sum}&currency=RUR&convert=yes&md5={$md5check}&url_success=http://555hf.tv/success&f=7";
            //����� ����� onpay � ��������� �����������
#           $output = '<iframe src="'.$url.'" width="300" height="500" frameborder=no scrolling=no></iframe>
#                        <form method=post action="'.$_SERVER['HTTP_REFERER'].'"><input type="submit" value="���������"></form>';

			            $result .= '<iframe src="'.$url.'" width="550" height="800" frameborder=no scrolling=no></iframe> ';
			



			}
			else if ($_SESSION['REG']['pay'] == "nal") {
				$result .= '<p>�������, ��� �������������� � ���! ��� �������� �������� � ���� � ������� 24 �����. ������� ��� ����� +7 499 7399657</p>';
			}
			else if ($_SESSION['REG']['pay'] == "per") {
				$result = '                                            	<p>����� ����������� ���������, ������� �� <a href="/pay/receipt/'.($_SESSION['REG']['timepay']==1? 500: ($_SESSION['REG']['timepay']==2? 900: ($_SESSION['REG']['timepay']==1? 1300: ($_SESSION['REG']['timepay']==6? 2500: 5000)))).'">������</a></p>'."\n";
				$result = '                                                    <p>��� ���������� ��������� ����� ��������� �� email: <a href="mailto: support@555huntfishing.tv">support@555huntfishing.tv</a></p>'."\n";
			}

			$result .= '                                                </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                        </div>'."\n";

			return $result;
		}

		static function templateAccount2Menu() {
			global $lastVideo;

			$result  = '                            <div class="left-menu">'."\n";
			$result .= '                                <div class="shadowed-dark">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                            <ul>'."\n";
			$result .= '                                                <li><a href="/account">�������</a></li>'."\n";
			$result .= '                                                <li><a href="/account/blog">��� ������</a></li>'."\n";
			$result .= '                                                <li><a href="/account/videos">��� �����</a></li>'."\n";
			$result .= '                                                <li><a href="/account/forum">��� �����'.(isset($_SESSION['noReadMessagesCount']) && $_SESSION['noReadMessagesCount'] > 0? "<span class='noReadMessagesCount'>+{$_SESSION['noReadMessagesCount']}</span>": "").'</a></li>'."\n";
			$result .= '                                                <li><a href="/account/myblog">��� ������'.(((isset($_SESSION['ownComments1']) && $_SESSION['ownComments1'] > 0) || (isset($_SESSION['ownArticles']) && $_SESSION['ownArticles'] > 0)) ? "<span class='noReadMessagesCount'>+".((int) $_SESSION['ownArticles']+(int) $_SESSION['ownComments1'])."</span>": "").'</a></li>'."\n";
			$result .= '                                                <li><a href="/account/photo">��� ����</a></li>'."\n";
			$result .= '                                                <li><a href="/account/friends">��� ���������'.(((isset($_SESSION['newMessages']) && $_SESSION['newMessages'] > 0) || (isset($_SESSION['newFriends']) && $_SESSION['newFriends'] > 0)) ? "<span class='noReadMessagesCount'>+".((int) $_SESSION['newMessages']+(int) $_SESSION['newFriends'])."</span>": "").'</a></li>'."\n";
			$result .= '                                                <li><a href="/account/myfriends">��� ������</a></li>'."\n";
			$result .= '                                                <li><a href="/account/exit">�����</a></li>'."\n";
			$result .= '                                            </ul>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                                <div>'."\n";
			$result .= '                            	<p>'."\n";
			$result .= '                                	�� �������������: ��������� ����� ����� � ������� <a href="/programm/'.$lastVideo[0]['id_typeprogramm'].'">"'.stripslashes($lastVideo[0]['nameType']).'"</a>. <a href="/video/'.$lastVideo[0]['id'].'">������� � ���������</a>'."\n";
			$result .= '                                    </p>'."\n";
			$result .= '                                    <a href="/recommend" class="rec-friends"></a>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";

			return $result;
		}

		static function templateAccount2($otherData) {
			$result  = "";

			$datetimepay = $_SESSION['AUTH']['datetimepay']-time();
			if ($datetimepay < 0) $datetimepay = 0; else $datetimepay = floor($datetimepay/60/60/24);
			$countMonth = floor($_SESSION['AUTH']['money']/$STATIC['abonplata']);
			if ($countMonth > 0) {
			    $startDate	= date("Y-m-01 00:00:00", strtotime("NOW +1 month"));
			    $endDate	= date("Y-m-t 23:59:59", strtotime("{$startDate} +".($countMonth-1)."month"));
			    $datetimepay += floor((strtotime($endDate)-strtotime($startDate))/60/60/24);
			}

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                  <h2 class="page-title">������ �������</h2>'."\n";
			$result .= '            	    <div class="boxed mar-b10">'."\n";
			$result .= viewTemplate::templateAccount2Menu();

			$result .= '                            <div class="video-box cabinet">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                          <div class="main-info">'."\n";
			$result .= '                                    	<h3 class="title2line">'."\n";
			$result .= '                                                �������'."\n";
			$result .= '                                            </h3>'."\n";
			$result .= '                                            <div class="avatar">'."\n";
			$result .= '                                        	<img src="/images/users/'.(file_exists("images/users/".$_SESSION['AUTH']['id'].'.jpg')? $_SESSION['AUTH']['id']: "nophoto").'.jpg" width="150" height="150" alt="" title="" />'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                            <ul class="user-statistic">'."\n";
			$result .= '                                        	<li><strong>Email:</strong> <a href="mailto:'.$_SESSION['AUTH']['email'].'">'.$_SESSION['AUTH']['email'].'</a></li>'."\n";
			$result .= '                                                <li><strong>������������:</strong> '.$_SESSION['AUTH']['lastname']." ".$_SESSION['AUTH']['firstname'].'</li>'."\n";
			$result .= '                                                <li><strong>������ �����:</strong> '.$_SESSION['AUTH']['money'].' ���.</li>'."\n";
			$result .= '                                                <li><strong>�������� ����:</strong> '.$datetimepay.'</li>'."\n";
			$result .= '                                                <li><strong>������:</strong> <i>'.($datetimepay>0? "<font color=\"green\">�������</font>": "<font color=\"red\">�� �������</font>").'</i></li>'."\n";
			$result .= '                                                <li><strong>�����:</strong> '.$otherData['city'].'</li>'."\n";
			$result .= '                                                <li><strong>��� ��������:</strong> '.($_SESSION['AUTH']['is_author']=='no'? "����������������": "�����").'</li>'."\n";
                        if ($_SESSION['AUTH']['is_author']=='no') {
                                $result .= '                            <p><a href="/account/authorship">����� �������</a></p>'."\n";
                        }
			$result .= '                                                <li>'."\n";
			$result .= '                                                    <a class="button button-dark" href="/account/edit">'."\n";
			$result .= '                                                        <span>��������� �������</span>'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </li>'."\n";
			$result .= '                                            </ul>'."\n";
			$result .= '                                            <h3 class="title2line">�������� ��������� �����</h3>'."\n";
			$result .= '                                            <p>'."\n";
			$result .= '                                        	� ����������� �� �������� ������ ����������� � ���������<br /> �� ������ ������� � ����� �������� �������� ���� ��������� �� ���������. '."\n";
			$result .= '                                            </p>'."\n";
			$result .= '                                            <div class="rows-input">'."\n";
			$result .= '                                        	<input type="radio" id="qualityHD1080" name="quality" '.($_SESSION['AUTH']['quality'] == "hd1080"? "CHECKED": "").' onClick="changeQuality(this, \'hd1080\')" />'."\n";
			$result .= '                                                <label for="1080"><strong>FHD</strong> - ������� �������� <span class="font-12">(��������� �������� ��������� 5 ����/���)</span></label>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                            <div class="rows-input">'."\n";
			$result .= '                                        	<input type="radio" id="qualityHD" name="quality" '.($_SESSION['AUTH']['quality'] == "hd"? "CHECKED": "").' onClick="changeQuality(this, \'hd\')" />'."\n";
			$result .= '                                                <label for="hd"><strong>HD</strong> - ������� �������� <span class="font-12">(��������� �������� ��������� 2.5 ����/���)</span></label>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                            <div class="rows-input">'."\n";
			$result .= '                                        	<input type="radio" id="qualitySD" name="quality" '.($_SESSION['AUTH']['quality'] == "sd"? "CHECKED": "").' onClick="changeQuality(this, \'sd\')" />'."\n";
			$result .= '                                                <label for="sd"><strong>SD</strong> - ������� �������� <span class="font-12">(��������� �������� ��������� 1 ����/���)</span></label>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                            <a class="button button-dark" onClick="saveQuality();" style="cursor: pointer"><input type="hidden" id="quality" value="hd">'."\n";
			$result .= '                                                <span>���������</span>'."\n";
			$result .= '                                            </a>'."\n";
			$result .= '                                          </div>'."\n";

			$result .= '                                          <div class="right-profile">'."\n";
			$result .= '                                              <h3 class="title2line">'."\n";
			$result .= '                                                ������'."\n";
			$result .= '                                              </h3>'."\n";
			$result .= '                                                  <ul>'."\n";
			$result .= '                                                      <li><a style="cursor: pointer" onClick="robokassa()">������ ���������(webmoney, ��������� �����)</a></li>'."\n";
			$result .= '                                                  </ul>'."\n";
			$result .= '                                          </div>'."\n";
			$result .= '                                          <div class="clr"></div>'."\n";
			$result .= '                                      </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}

		static function templateAccount2Friends($friends) {
			$result  = "";

			$result .= '		    <div id="static">'."\n";
			$result .= '		    <h1>������ �������</h1>'."\n";
			$result .= '		<div class="long_line"></div>'."\n";
			$result .= viewTemplate::templateAccount2Menu();

			$result .= '		    <div class="cab_right">'."\n";
			$result .= '			<div class="ram_top"></div>'."\n";
			$result .= '			<div class="ram_center_friends">'."\n";
			$result .= '			<div class="friendpage" id="friendpage">'."\n";

			$result .= '			</div>'."\n";
			$result .= '<script>accountFriends(0)</script>';
			$result .= '			</div>'."\n";
			$result .= '			<div class="ram_bottom"></div>'."\n";
			$result .= '		    </div>'."\n";

			$result .= '		</div>'."\n";
			$result .= '		<div class="clear"></div>'."\n";
			$result .= '		<div class="empty"></div>'."\n";
			$result .= '	    </div>'."\n";

			return $result;
		}


		static function templateAccount2Blog($article) {
			$result  = "";

                        $result .= '<script type="text/javascript" src="/class/js/tiny_mce/tiny_mce.js"></script>'."\n";
                        $result .= '<script>'."\n";
                        $result .= '    tinyMCE.init({'."\n";
                        $result .= '    // General options'."\n";
                        $result .= '    mode : "textareas",'."\n";
                        $result .= '    theme : "advanced",'."\n";
                        $result .= '    plugins : "cyberim,safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",'."\n";
                        $result .= '    // Theme options'."\n";
                        $result .= '    theme_advanced_buttons1 : ",undo,redo,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,cut,copy,paste,|,search,replace,|,bullist,numlist,|,sub,sup,",'."\n";
                        $result .= '    theme_advanced_buttons2 : ",outdent,indent,blockquote,|,link,unlink,anchor,image,media,cleanup,|,forecolor,backcolor,|,",'."\n";
                        $result .= '    theme_advanced_buttons3 : "tablecontrols,|,fullscreen",'."\n";
                        $result .= '    theme_advanced_toolbar_location : "top",'."\n";
                        $result .= '    theme_advanced_toolbar_align : "left",'."\n";
                        $result .= '    theme_advanced_statusbar_location : "bottom",'."\n";
                        $result .= '    theme_advanced_resizing : true,'."\n";
                        $result .= '    indentation : "200pt",'."\n";
                        $result .= '    // Example content CSS (should be your site CSS)'."\n";
                        $result .= '    content_css : "css/content.css",'."\n";
                        $result .= '    // Drop lists for link/image/media/template dialogs'."\n";
                        $result .= '    template_external_list_url : "lists/template_list.js",'."\n";
                        $result .= '    external_link_list_url : "lists/link_list.js",'."\n";
                        $result .= '    external_image_list_url : "lists/image_list.js",'."\n";
                        $result .= '    media_external_list_url : "lists/media_list.js",'."\n";
                        $result .= '    height: 400,'."\n";
                        $result .= '    language : "en",'."\n";
                        $result .= '    // Replace values for the template plugin'."\n";
                        $result .= '    template_replace_values : {'."\n";
                        $result .= '        username : "Some User",'."\n";
                        $result .= '        staffid : "991234"'."\n";
                        $result .= '    }'."\n";
                        $result .= '    });'."\n";
                        $result .= '</script> '."\n";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                  <h2 class="page-title">������ �������</h2>'."\n";
			$result .= '            	    <div class="boxed mar-b10">'."\n";

			$result .= viewTemplate::templateAccount2Menu();

			$result .= '                            <div class="video-box cabinet">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                    <form id="formAccountArticle" enctype="multipart/form-data">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                    	<h3 class="title2line">'."\n";
			$result .= '                                              ������'."\n";
			$result .= '                                          </h3>'."\n";
			$result .= '                                          <div class="rows-input">'."\n";
			$result .= '                                              <a href="/profile/'.$_SESSION['AUTH']['id'].'/blog" class="button button-dark mar-t10">'."\n";
			$result .= '                                                  <span>��� ������</span>'."\n";
			$result .= '                                              </a>'."\n";
			$result .= '                                              <a href="/blog" class="button button-dark mar-t10">'."\n";
			$result .= '                                                  <span>555 ������</span>'."\n";
			$result .= '                                              </a>'."\n";
			$result .= '                                          </div>'."\n";
			$result .= '                                            <p>'."\n";
			$result .= '                                        	���������� ������ � ���� ������. ����� �������� ����, �����. '."\n";
			$result .= '                                           </p>'."\n";
			$result .= '                                           <div class="rows-input">'."\n";
			$result .= '                                               <label for="caption"><em>* </em>��������</label>'."\n";
			$result .= '                                               <input type="text" id="caption" name="caption" value="'.(isset($article['name'])? stripslashes($article['name']): "").'" />'."\n";
			$result .= '                                           </div>'."\n";
			$result .= '                                           <div class="rows-input">'."\n";
			$result .= '                                               <label for="category"><em>* </em>���������</label>'."\n";
			$result .= '                                               <select name="category" id="category">'."\n";
                        $result .= '                    <option value="fish" '.(isset($article['theme']) && $article['theme']=="fish"? "SELECTED": "").'>�������</option>'."\n";
                        $result .= '                    <option value="ohota" '.(isset($article['theme']) && $article['theme']=="ohota"? "SELECTED": "").'>�����</option>'."\n";
                        $result .= '                    <option value="waterfish" '.(isset($article['theme']) && $article['theme']=="waterfish"? "SELECTED": "").'>��������� �������</option>'."\n";
			$result .= '                                               </select>'."\n";
			$result .= '                                           </div>'."\n";
			$result .= '                                           <div class="rows-input">'."\n";
			$result .= '                                               <label for="photo"><em>* </em>����</label>'."\n";
			$result .= '                                               <input type="file" id="photo" name="photo" value="" />'."\n";
			$result .= '                                           </div>'."\n";
			$result .= '                                           <div class="rows-input">'."\n";
			$result .= '                                               <label for="tags"><em>* </em>����</label>'."\n";
			$result .= '                                               <input type="text" id="tags" name="tags" value="'.(isset($article['tags'])? stripslashes($article['tags']): "").'" />'."\n";
			$result .= '                                           </div>'."\n";
                        if ($_SESSION['AUTH']['is_author'] == "yes") {
				$result .= '                                           <div class="rows-input">'."\n";
				$result .= '                                               <label for="photoM"><em>* </em>���� �� �������</label>'."\n";
				$result .= '                                               <input type="text" id="photoM" name="photoM" value="'.(isset($article['name'])? stripslashes($article['name']): "").'" />'."\n";
				$result .= '                                           </div>'."\n";

				$result .= '                                           <div class="rows-input">'."\n";
				$result .= '                                               <label for="viewstate"><em>* </em>��� �����</label>'."\n";
                                $result .= '                  <select class="sled_text" name="viewstate" id="viewstate">'."\n";
                                $result .= '                    <option value="simple1" '.(isset($article['viewstate']) && $article['viewstate']=="simple1"? "SELECTED": "").'>�������������</option>'."\n";
                                $result .= '                    <option value="simple2" '.(isset($article['viewstate']) && $article['viewstate']=="simple2"? "SELECTED": "").'>�������</option>'."\n";
                                $result .= '                  </select>'."\n";
				$result .= '                                           </div>'."\n";

				$result .= '                                           <div class="rows-input">'."\n";
				$result .= '                                               <label for="rubrika"><em>* </em>������������ ����������</label>'."\n";
				$result .= '                                               <input type="text" id="rubrika" name="rubrika" value="'.(isset($article['rubrika'])? stripslashes($article['rubrika']): "").'" />'."\n";
				$result .= '                                           </div>'."\n";

				$result .= '                                           <div class="rows-input">'."\n";
				$result .= '                                               <label for="comment"><em>* </em>����� �����������</label>'."\n";
				$result .= '                                               <input type="text" id="comment" name="comment" value="'.(isset($article['comment'])? stripslashes($article['comment']): "").'" />'."\n";
				$result .= '                                           </div>'."\n";
                        }
			$result .= '                                           <div class="rows-input">'."\n";
			$result .= '                                               <label for="anons"><em>* </em>����� ������</label>'."\n";
                        $result .= '                <textarea class="articleText" id="anons" name="anons">'.(isset($article['anons'])? stripslashes($article['anons']): "").'</textarea>'."\n";
			$result .= '                                           </div>'."\n";

			$result .= '                                           <div class="rows-input">'."\n";
			$result .= '                                               <label for="article"><em>* </em>����� ������</label>'."\n";
                        $result .= '                <textarea class="articleText" id="article" name="article">'.(isset($article['text'])? stripslashes($article['text']): "").'</textarea>'."\n";
			$result .= '                                           </div>'."\n";


			$result .= '                                                <a class="button button-dark mar-t10" style="cursor: pointer" onClick="saveArticle('.(isset($article['id'])? $article['id']: 0).')">'."\n";
			$result .= '                                                    <span>���������</span>'."\n";
			$result .= '                                                </a>'."\n";

			$result .= '                                      </div>'."\n";
			$result .= '                                    </div></form>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}

		static function templateAccount2Forum($topics, $activeForum) {
			$result  = '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                  <h2 class="page-title">��� �����</h2>'."\n";
			$result .= '            	    <div class="boxed mar-b10">'."\n";
			$result .= viewTemplate::templateAccount2Menu();

			$result .= '                            <div class="video-box cabinet">'."\n";
			
			$result .= '                        	<div class="shadowed-light">'."\n";
			
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			
			$result .= '<h3 class="title2line">���������� �� ������</h3>';

			$result .= '<B>���������������:</B> '.date("d.m.Y, H:i", $activeForum['user_regdate'])."<BR>";
			$result .= '<B>��������� ���������:</B> '.date("d.m.Y, H:i", $activeForum['user_lastvisit'])."<BR>";
			$result .= '<B>���� � ����� ���������� ���������:</B> '.date("d.m.Y, H:i", $activeForum['user_lastpost_time'])."<BR>";
			$result .= '<B>����� ���������:</B> '.$activeForum['user_posts']." | <a href='/forum/search.php?author_id={$activeForum['user_id']}&sr=posts'>�������� ���� ���������</a> ({$activeForum['postsPerDay']} ��������� � ���� / {$activeForum['percentage']}% ���� ���������)<BR>";
			
				
			$result .= '                        				</div>'."\n";
			$result .= '                        			</div>'."\n";
		
			
			$result .= '                        	</div>'."\n";
			
			$result .= '                        	<div class="shadowed-light mar-t20">'."\n";
			
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			
			$result .= '<h3 class="title2line">��������� ��� �������</h3>';
#var_dump($topics);exit;
			$result .= '����� ���������: '.((count($topics)>0 && !empty($topics))? count($topics) : 0);
			
			if (!empty($topics) && count($topics)>0) {
				$result .= '<table border="0" cellpadding="1" cellspacing="1" width="100%">';
				foreach ($topics as $topic) {
					$result .= '<tr>'."\n";
						$result .= '<td>'.$topic['topic_name'].'</td>'."\n";
						$result .= '<td width="120"><a href="/account/forum/read/'.$topic['id'].'">������� � ������</a></td>'."\n";
					$result .= '</tr>'."\n";
					
					$num++;
				}
				$result .= "</table>";
                                $result .="<br><input type='button' value='�������� ��� ��������� ��� �����������' onClick='delNoReadMessages(".$_SESSION['AUTH']['id'].");'>";
			}
		
			
				
			$result .= '                        				</div>'."\n";
			$result .= '                        			</div>'."\n";
		
			
			$result .= '                        	</div>'."\n";
			
			
			$result .= '                        	<div class="shadowed-light mar-t20">'."\n";
			
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			
			$result .= '<h3 class="title2line">���������</h3>';
			
			$result .= '<div id="myDrafts"></div>';
			$result .= '<script>listDrafts();</script>';

			
			$result .= '                        				</div>'."\n";

			$result .= '                        			</div>'."\n";
		
			
			$result .= '                        	</div>'."\n";
			
			$result .= '                        	<div class="shadowed-light mar-t20">'."\n";
			
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			
			$result .= '<h3 class="title2line">�������� �� ����</h3>';
			
			$result .= '<div id="mySubscribe"></div>';
			$result .= '<script>listSubscribe();</script>';

			
			$result .= '                        				</div>'."\n";

			$result .= '                        			</div>'."\n";
		
			
			$result .= '                        	</div>'."\n";
			
			
			$result .= '                        	</div>'."\n";
			
			
		
			
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}

		static function templateAccount2FriendsNew($friends, $newMessages) {
			$result  = '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                  <h2 class="page-title">��� ���������</h2>'."\n";
			$result .= '            	    <div class="boxed mar-b10">'."\n";
			$result .= viewTemplate::templateAccount2Menu();

			$result .= '                            <div class="video-box cabinet">'."\n";
			
			$result .= '                        	<div class="shadowed-light">'."\n";
			
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			
			$result .= '<h3 class="title2line">������</h3>';
			$result .= '<B>������:</B> '.count($friends['friend'])."<BR>";
			$result .= '<B>������� ������ �������������:</B> '.count($friends['wait']).'.<br> ��� ������������� ��� ������� �������� �� <a href="http://555hf.tv/forum/ucp.php">������</a> � �������� ����������� �������� � �������������<BR>';
			if (count($friends['wait'])>0){
				$result .= '<table border="0" cellpadding="1" cellspacing="1" width="100%">';
#				$result .= '<tr><td>������������</td><td>���������� ������</td><td></td><td></td></tr>';
				foreach ($friends['wait'] as $author) {
					$result .= '<tr>'."\n";
						$result .= '<td>'.$author.'</td>'."\n";
						$result .= '<td><a target="_blank" href="http://555hf.tv/forum/member/'.$author.'/">���������� ������ ������</a></td>'."\n";
#						$result .= '<td>'.'<a href="">������� ����������� �������</a></td>'."\n";
#						$result .= '<td>'.'<a href="">��������� ����������� �������</a></td>'."\n";
					$result .= '</tr>'."\n";
					
				}
				$result .= "</table>";
			    
			}
				
			$result .= '                        				</div>'."\n";
			$result .= '                        			</div>'."\n";
		
			
			$result .= '                        	</div>'."\n";
			
			$result .= '                        	<div class="shadowed-light mar-t20">'."\n";
			
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			
			$result .= '<h3 class="title2line">������������� ������ ���������</h3>';
			$result .= '<b>����� ������������� ���������: </b>'.(isset($newMessages['count'])? $newMessages['count'] : 0);		
			if (isset($newMessages['msg']) and !empty($newMessages['msg'])) {
				$result .= '<table border="0" cellpadding="1" cellspacing="1" width="100%">';
				$result .= '<tr><td>�����������</td><td>����� ������������� ���������</td><td>����� ���������� ���������</td><td></td></tr>';
				foreach ($newMessages['msg'] as $id_author =>$msg) {
					$result .= '<tr>'."\n";
						$result .= '<td>'.$newMessages['author'][$id_author].'</td>'."\n";
						$result .= '<td>'.count($msg).'</td>'."\n";
						$result .= '<td>';
						$temp_time=0;
						foreach($msg as $time)
						    if ($time>$temp_time) $temp_time=$time;
						    $result .= date("d.m.Y H:i:s",$temp_time);
						$result .= '</td>'."\n";
						$result .= '<td width="220">'.'<a href="http://555hf.tv/forum/ucp.php?i=pm&mode=compose&u='.$id_author.'">����������� ������ ���������</a></td>'."\n";
					$result .= '</tr>'."\n";
					
				}
				$result .= "</table>";
			}
		
			
				
			$result .= '                        				</div>'."\n";
			$result .= '                        			</div>'."\n";
		
			
			$result .= '                        	</div>'."\n";
			
			$result .= '                        	</div>'."\n";
			
			
		
			
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}

		static function templateAccount2BlogNew($ownArticles, $ownComments, $ownComments1) {
			$result  = '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                  <h2 class="page-title">��� ������</h2>'."\n";
			$result .= '            	    <div class="boxed mar-b10">'."\n";
			$result .= viewTemplate::templateAccount2Menu();

			$result .= '                            <div class="video-box cabinet">'."\n";

			$result .= '                        	<div class="shadowed-light">'."\n";
			
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			
			$result .= '<h3 class="title2line">������� � <a href="http://555hf.tv/blog">555 ������</a></h3>';
				
			$result .= '                        				</div>'."\n";
			$result .= '                        			</div>'."\n";			
			$result .= '                        	</div>'."\n";

			
			$result .= '                        	<div class="shadowed-light mar-t20">'."\n";
			
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			
			$result .= '<h3 class="title2line">����������� ������ � �������</h3>';
			$result .= '<B>����� �������������� ������:</B> '. ((isset($ownArticles) && !empty($ownArticles) && count($ownArticles)>0) ? count($ownArticles) : 0)."<BR>";
			if (isset($ownArticles) && !empty($ownArticles)){
				$result .= '<table border="0" cellpadding="1" cellspacing="1" width="100%">';
				$result .= '<tr><td>�������� ������</td><td>���� ����������</td><td>����� ������������</td><td>����� ������������</td><td></td></tr>';
				$new=0;
				foreach ($ownArticles as $article) {
				    if ((int)$article['comments'][1]>0)
					$new=1;
					$result .= '<tr>'."\n";
						$result .= '<td>'.$article['name'].'</td>'."\n";
						$result .= '<td>'.date("d.m.Y H:i:s",$article['datetime']).'</td>'."\n";
                                                $result .= '<td>'.((int)$article['comments'][0]+(int)$article['comments'][1]).'</td>'."\n";
						$result .= '<td>'.(int)$article['comments'][1].'</td>'."\n";
						$result .= '<td>'.'<a href="http://555hf.tv/blog/'.$article['id'].'">������� � ������ � ������������</a></td>'."\n";
					$result .= '</tr>'."\n";	
				}
				$result .= "</table>";
                                if ($new==1)
                                    $result .="<br><input type='button' value='�������� ��� ����������� ��� �����������' onClick='delOwnArticles(".$_SESSION['AUTH']['id'].");'>";
			}
				
			$result .= '                        				</div>'."\n";
			$result .= '                        			</div>'."\n";
		
			
			$result .= '                        	</div>'."\n";

			
			$result .= '                        	<div class="shadowed-light mar-t20">'."\n";
			
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			
			$result .= '<h3 class="title2line">���� ����������� � ����� �������</h3>';
			$result .= '<b>����� ������������: </b>'.((isset($ownComments) && !empty($ownComments) && count($ownComments)>0) ? count($ownComments) : 0);		
			if (isset($ownComments) && !empty($ownComments) && count($ownComments)>0) {
				$result .= '<table border="0" cellpadding="1" cellspacing="1" width="100%">';
				$result .= '<tr><td>�������� ������</td><td>����� ������������</td><td></td></tr>';
				foreach ($ownComments as $comment) {
					$result .= '<tr>'."\n";
						$result .= '<td>'.$comment['name'].'</td>'."\n";
						$result .= '<td>'.$comment['kolvo'].'</td>'."\n";
						$result .= '<td>'.'<a href="http://555hf.tv/blog/'.$comment['id_article'].'">������� � ������ � ������������</a></td>'."\n";
					$result .= '</tr>'."\n";
					
				}
				$result .= "</table>";
			}
		
			
				
			$result .= '                        				</div>'."\n";
			$result .= '                        			</div>'."\n";
		
			
			$result .= '                        	</div>'."\n";


			$result .= '                        	<div class="shadowed-light mar-t20">'."\n";
			
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			
			$result .= '<h3 class="title2line">������ �� ���� �����������</h3>';
			$result .= '<b>����� ������������: </b>'.((isset($ownComments1) && !empty($ownComments1) && count($ownComments1)>0) ? count($ownComments1) : 0);		
			if (isset($ownComments1) && !empty($ownComments1) && count($ownComments1)>0) {
				$result .= '<table border="0" cellpadding="1" cellspacing="1" width="100%">';
				$result .= '<tr><td>�������� ������</td><td>����� �������</td><td>�����</td><td></td></tr>';
				$new=0;
				foreach ($ownComments1 as $key => $comment) {
					if ((int) $comment[1]>0)
					    $new=1;
					$result .= '<tr>'."\n";
						$result .= '<td>'.$comment['name'].'</td>'."\n";
						$result .= '<td>'.((int) $comment[0]+(int) $comment[1]).'</td>'."\n";
                                                $result .= '<td>'.(int) $comment[1].'</td>'."\n";
						$result .= '<td>'.'<a href="http://555hf.tv/blog/'.$key.'">������� � ������ � ������������</a></td>'."\n";
					$result .= '</tr>'."\n";
					
				}
				$result .= "</table>";
				if ($new==1)
                            	    $result .="<br><input type='button' value='�������� ��� ������ ��� �����������' onClick='delOwnComments1(".$_SESSION['AUTH']['id'].");'>";
			}
				
			$result .= '                        				</div>'."\n";
			$result .= '                        			</div>'."\n";
		
			
			$result .= '                        	</div>'."\n";

			
			$result .= '                        	</div>'."\n";
			
			
		
			
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}

		static function templateAccount2Edit($listCountry, $listCity, $listWho, $listFish, $userFish, $idCity) {
			$result  = "";

			$result .= '<script type="text/javascript" src="/class/js/tiny_mce/tiny_mce.js"></script>'."\n";
			$result .= '<script>'."\n";
			$result .= '    tinyMCE.init({'."\n";
			$result .= '	// General options'."\n";
			$result .= '	mode : "textareas",'."\n";
			$result .= '	theme : "advanced",'."\n";
			$result .= '	plugins : "cyberim,safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",'."\n";
			$result .= '	// Theme options'."\n";
			$result .= '	theme_advanced_buttons1 : ",undo,redo,|,bold,italic,underline,strikethrough,|,bullist,numlist,|,sub,sup,",'."\n";
			$result .= '	theme_advanced_buttons2 : "",'."\n";
			$result .= '	theme_advanced_toolbar_location : "bottom",'."\n";
			$result .= '	theme_advanced_toolbar_align : "center",'."\n";
			$result .= '	theme_advanced_resizing : true,'."\n";
			$result .= '	indentation : "200pt",'."\n";
			$result .= '	// Example content CSS (should be your site CSS)'."\n";
			$result .= '	content_css : "/style_messages.php",'."\n";
			$result .= '	// Drop lists for link/image/media/template dialogs'."\n";
			$result .= '	template_external_list_url : "lists/template_list.js",'."\n";
			$result .= '	external_link_list_url : "lists/link_list.js",'."\n";
			$result .= '	external_image_list_url : "lists/image_list.js",'."\n";
			$result .= '	media_external_list_url : "lists/media_list.js",'."\n";
			$result .= '	height: 250,'."\n";
			$result .= '	width: "400",'."\n";
			$result .= '	language : "en",'."\n";
			$result .= '	// Replace values for the template plugin'."\n";
			$result .= '	template_replace_values : {'."\n";
			$result .= '	    username : "Some User",'."\n";
			$result .= '	    staffid : "991234"'."\n";
			$result .= '	}'."\n";
			$result .= '    });'."\n";
			$result .= '</script> '."\n";


			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                  <h2 class="page-title">������ �������</h2>'."\n";
			$result .= '            	    <div class="boxed mar-b10">'."\n";
			$result .= viewTemplate::templateAccount2Menu();

			$result .= '                            <div class="video-box cabinet">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                    	<h3 class="title2line">'."\n";
			$result .= '                                                ������������ ������'."\n";
			$result .= '                                            </h3>'."\n";
			$result .= '                                            <div class="settings-box"><form id="formAccountData" enctype="multipart/form-data">'."\n";
			$result .= '                                                <div class="rows-input">'."\n";
			$result .= '                                                    <label for="login"><em>* </em>��� �����</label>'."\n";
			$result .= '                                                    <input type="text" disabled="disabled" id="login" name="login" value="'.$_SESSION['AUTH']['login'].'" />'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="rows-input">'."\n";
			$result .= '                                                    <label for="firstname"><em>* </em>���� ���</label>'."\n";
			$result .= '                                                    <input type="text" id="firstname" name="firstname" value="'.$_SESSION['AUTH']['firstname'].'" />'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="rows-input">'."\n";
			$result .= '                                                    <label for="lastname"><em>* </em>�������</label>'."\n";
			$result .= '                                                    <input type="text" id="lastname" name="lastname" value="'.$_SESSION['AUTH']['lastname'].'" />'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="rows-input">'."\n";
			$result .= '                                            	<p class="as-label"><em>* </em>���� ��������</p>'."\n";
			$result .= '                                                    <span>'."\n";
			$result .= '                                                        <select name="birthday">'."\n";
			list($byear, $bmonth, $bday) = explode("-", $_SESSION['AUTH']['birthday']);
                        for ($day = 1; $day<=31; $day++)
				$result .= '<option value="'.(strlen($day)<2? "0".$day: $day).'" '.($day == $bday? "SELECTED": "").'>'.(strlen($day)<2? "0".$day: $day).'</option>'."\n";
			$result .= '                                                       </select>'."\n";
			$result .= '                                                   </span>'."\n";
			$result .= '                                                   <span>'."\n";
			$result .= '                                                       <select name="birthmonth">'."\n";
                        for ($month = 1; $month<=12; $month++)
				$result .= '<option value="'.(strlen($month)<2? "0".$month: $month).'" '.($month == $bmonth? "SELECTED": "").'>'.(strlen($month)<2? "0".$month: $month).'</option>'."\n";
			$result .= '                                                       </select>'."\n";
			$result .= '                                                   </span>'."\n";
			$result .= '                                                   <span>'."\n";
			$result .= '                                                       <select name="birthyear">'."\n";
			for ($year = 1920; $year<=2010; $year++)
				$result .= '<option value="'.$year.'" '.($year == $byear? "SELECTED": "").'>'.$year.'</option>'."\n";
			$result .= '                                                       </select>'."\n";
			$result .= '                                                   </span>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="rows-input">'."\n";
			$result .= '                                                   <label for="journal-foto"><em>* </em>����</label>'."\n";
			$result .= '                                                   <input type="file" id="journal-foto" name="photo">'."\n";
			$result .= '                                               </div>'."\n";
			$result .= '                                               <div class="rows-input">'."\n";
			$result .= '                                                    <label for="email"><em>* </em>Email</label>'."\n";
			$result .= '                                                    <input type="text" id="email" name="email" value="'.$_SESSION['AUTH']['email'].'">'."\n";
			$result .= '                                                </div>'."\n";
#			$result .= '                                                <div class="rows-input">'."\n";
#			$result .= '                                                    <label for="field_city"><em>* </em>�����</label>'."\n";
#			$result .= '                                                    <input type="hidden" id="city" name="city" value="'.$_SESSION['AUTH']['id_city'].'"/><input type="text" id="field_city" name="field_city" onkeyup="if(this.value.length>=3) searchCity(this.value);" value="'.$idCity['name'].'"><ul id="ulCity"></ul>'."\n";
#			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="rows-input">'."\n";
			$result .= '                                                    <label for="adress"><em>* </em>�����</label>'."\n";
			$result .= '                                                    <input type="text" id="adress" name="address" value="'.$_SESSION['AUTH']['address'].'">'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="rows-input">'."\n";
			$result .= '                                                    <label for="about-me"><em>* </em>� ����</label>'."\n";
			$result .= '                                                    <textarea id="about-me" name="description">'.stripslashes($_SESSION['AUTH']['description']).'</textarea>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="settings-box">'."\n";
			$result .= '                                                    <h3 class="title2line">'."\n";
			$result .= '                                                        ������� ������'."\n";
			$result .= '                                                    </h3>'."\n";
			$result .= '                                                    <div class="rows-input">'."\n";
			$result .= '                                                        <label for="password"><em></em>����� ������</label>'."\n";
			$result .= '                                                        <input type="password" id="password" name="password">'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                    <div class="rows-input">'."\n";
			$result .= '                                                        <label for="mother"><em>* </em>������� ������� ������</label>'."\n";
			$result .= '                                                        <input type="text" id="maidenname" name="maidenname" value="'.$_SESSION['AUTH']['maidenname'].'">'."\n";
			$result .= '                                                        <p class="clarific">���������� �� ������, ���� �� �����-���� �������� ������������ ���� ������������, �� ������� � ��� ������� ������� ����� ������.</p>'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                    <div class="rows-input">'."\n";
			$result .= '                                                        <label for="signature"><em>* </em>�������</label>'."\n";
			$result .= '                                                        <input type="text" id="signature" name="sign" value="'.$_SESSION['AUTH']['sign'].'">'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                    <div class="rows-input">'."\n";
			$result .= '                                                        <input type="checkbox" id="mes" name="get_message" value="yes" '.($_SESSION['AUTH']['get_message']=="yes"? "CHECKED": "").'>'."\n";
			$result .= '                                                        <label for="mes" class="inline-label">�������� ����������� �� Email � ����� ����������</label>'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                    <a class="button button-dark" style="cursor: pointer" onClick="saveAccountData2('.$_SESSION['AUTH']['id'].')" >'."\n";
			$result .= '                                                        <span>��������� ���������</span>'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                      </div></form>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";
			$result .= '                <script type="text/javascript" src="/class/js/jquery.Jcrop.min.js"></script>'."\n";

			return $result;
		}

		static function templateAccount2Videos() {
			$result  = "";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                  <h2 class="page-title">������ �������</h2>'."\n";
			$result .= '            	    <div class="boxed mar-b10">'."\n";
			$result .= viewTemplate::templateAccount2Menu();

			$result .= '                            <div class="video-box cabinet">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                    	<h3 class="title2line">'."\n";
			$result .= '                                                ��� �����������'."\n";
			$result .= '                                            </h3>'."\n";
			$result .= '                                            <h5>'."\n";
			$result .= '                                        	��� ��������:'."\n";
			$result .= '                                                <a href="/view" class="button button-dark float-r mar-b10">'."\n";
			$result .= '                                                  <span>��������� ��������</span>'."\n";
			$result .= '                                              </a>'."\n";
			$result .= '                                            </h5>'."\n";
			$result .= '                                            <div class="hr2"></div>'."\n";


			$result .= '                                          <div class="playlist-list">'."\n";
                        $result .= '                                    	<div id="selection"> '."\n";
                        $result .= '                                    	</div> '."\n";
                        $result .= '                                    	<script>accountSelection()</script> '."\n";

			$result .= '                                          </div>'."\n";
			$result .= '                                      </div>'."\n";

			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                                <div class="shadowed-light mar-t20">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                            <h3 class="title2line">'."\n";
			$result .= '                                                ��������� �����'."\n";
			$result .= '                                            </h3>'."\n";

                        $result .= '                                    <div id="favorites"></div> '."\n";
                        $result .= '                                    <script>accountFavorites()</script> '."\n";

			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";
			return $result;
		}

		static function templateAccount2Basket() {
			$result  = "";
			$result .= '			<div id="static"> '."\n";
			$result .= '		    <h1>������ �������</h1> '."\n";
			$result .= '		<div class="long_line"></div> '."\n";
			$result .= viewTemplate::templateAccount2Menu();
			$result .= '		    <div class="cab_right"> '."\n";
			$result .= '			<div class="ram_top"></div> '."\n";
			$result .= '			<div class="ram_center_lk"> '."\n";
			$result .= '			<div class="backet"> '."\n";
			$result .= '			    <div id="title"><strong>��� �������</strong></div> '."\n";
			$result .= '			    <div id="goods"></div><script>accountBasket()</script> '."\n";
			$result .= '			</div> '."\n";
			$result .= '			</div> '."\n";
			$result .= '			<div class="ram_bottom"></div> '."\n";
			$result .= '		    </div> '."\n";
			$result .= '		</div> '."\n";
			$result .= '		<div class="clear"></div> '."\n";
			$result .= '		<div class="empty"></div> '."\n";
			$result .= '	    </div>'."\n";
			return $result;
		}

		static function templateAccount2Authorship() {
			$result  = "";

			$result .= '<script type="text/javascript" src="/class/js/tiny_mce/tiny_mce.js"></script>'."\n";
			$result .= '<script>'."\n";
			$result .= '    tinyMCE.init({'."\n";
			$result .= '	// General options'."\n";
			$result .= '	mode : "textareas",'."\n";
			$result .= '	theme : "advanced",'."\n";
			$result .= '	plugins : "cyberim,safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",'."\n";
			$result .= '	// Theme options'."\n";
			$result .= '	theme_advanced_buttons1 : ",undo,redo,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,cut,copy,paste,|,search,replace,|,bullist,numlist,|,sub,sup,",'."\n";
			$result .= '	theme_advanced_buttons2 : ",outdent,indent,blockquote,|,link,unlink,anchor,image,media,cleanup,|,forecolor,backcolor,|,",'."\n";
			$result .= '	theme_advanced_buttons3 : "tablecontrols,|,fullscreen",'."\n";
			$result .= '	theme_advanced_toolbar_location : "top",'."\n";
			$result .= '	theme_advanced_toolbar_align : "left",'."\n";
			$result .= '	theme_advanced_statusbar_location : "bottom",'."\n";
			$result .= '	theme_advanced_resizing : true,'."\n";
			$result .= '	indentation : "200pt",'."\n";
			$result .= '	// Example content CSS (should be your site CSS)'."\n";
			$result .= '	content_css : "css/content.css",'."\n";
			$result .= '	// Drop lists for link/image/media/template dialogs'."\n";
			$result .= '	template_external_list_url : "lists/template_list.js",'."\n";
			$result .= '	external_link_list_url : "lists/link_list.js",'."\n";
			$result .= '	external_image_list_url : "lists/image_list.js",'."\n";
			$result .= '	media_external_list_url : "lists/media_list.js",'."\n";
			$result .= '	width: 600,'."\n";
			$result .= '	height: 400,'."\n";
			$result .= '	language : "en",'."\n";
			$result .= '	// Replace values for the template plugin'."\n";
			$result .= '	template_replace_values : {'."\n";
			$result .= '	    username : "Some User",'."\n";
			$result .= '	    staffid : "991234"'."\n";
			$result .= '	}'."\n";
			$result .= '    });'."\n";
			$result .= '</script> '."\n";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                  <h2 class="page-title">������ �������</h2>'."\n";
			$result .= '            	    <div class="boxed mar-b10">'."\n";
			$result .= viewTemplate::templateAccount2Menu();

			$result .= '                            <div class="video-box cabinet">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                    	<h3 class="title2line">'."\n";
			$result .= '                                                ������ �� ���������'."\n";
			$result .= '                                            </h3>'."\n";
			$result .= '                                            <p>'."\n";
			$result .= '                                        	����� ����� ������� ����� - �������� ���� ������ � ����� ����. ���� �� �������� ����������, ���������� ������ ������������� ��������, �� �� ����������� �������� �� �����!'."\n";
			$result .= '                                            </p>'."\n";

                        if ($_SESSION['AUTH']['is_author'] == 'no') {
				$result .= '                                            <div class="editor">'."\n";
				$result .= '                                                    <form id="formAccountArticle" enctype="multipart/form-data"><textarea id="article" name="article"></textarea></form>'."\n";
				$result .= '                                                <a class="button button-dark mar-t10" style="cursor: pointer" onClick="sendArticle()">'."\n";
				$result .= '                                                    <span>����������� �����</span>'."\n";
				$result .= '                                                </a>'."\n";
				$result .= '                                            </div>'."\n";
			}
                        else
                                $result .= '�� ��� ��������� �������';

			$result .= '                                      </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";
			return $result;
		}

		static function templateAccount2Messages() {
			$result  = "";
			$result .= '			<div id="static"> '."\n";
			$result .= '		    <h1>������ �������</h1> '."\n";
			$result .= '		<div class="long_line"></div> '."\n";
			$result .= viewTemplate::templateAccount2Menu();
			$result .= '		<div class="cab_right">'."\n";
			$result .= '			<div class="ram_top"></div>'."\n";
			$result .= '			<div class="ram_center_lk">'."\n";
			$result .= '			<div class="messages">'."\n";
			$result .= '			    <div id="title"><strong>������ ���������</strong></div>'."\n";
			$result .= '<form id="formMessages" enctype="multipart/form-data" method="post" action="/account/messages/reply">'."\n";
			$result .= '				<div id="button"><a href="/account/messages/new"><img src="/images/newlk/new.jpg" /></a> <input type="image" src="/images/newlk/answer.jpg" /> <a onClick="delMessage()"><img src="/images/newlk/delete.jpg" /></a></div>'."\n";

			$result .= '				<div class="newram">'."\n";
			$result .= '				    <div class="new-ram-top"></div>'."\n";
			$result .= '				    <div class="new-ram-body">'."\n";
			$result .= '					<div id="title" style="margin: -13px 0 0 24px;">��������</div>'."\n";
			$result .= '					<div id="folderInbox">'."\n";
			$result .= '					</div>'."\n";
			$result .= '<script>accountMessages("Inbox")</script>'."\n";
			$result .= '				    </div>'."\n";
			$result .= '				    <div class="new-ram-bottom"></div>'."\n";
			$result .= '				</div>'."\n";

			$result .= '				<div class="newram">'."\n";
			$result .= '				    <div class="new-ram-top"></div>'."\n";
			$result .= '				    <div class="new-ram-body">'."\n";
			$result .= '					<div id="title" style="margin: -13px 0 0 24px;">���������</div>'."\n";
			$result .= '					<div id="folderOutbox">'."\n";
			$result .= '					</div>'."\n";
			$result .= '<script>accountMessages("Outbox")</script>'."\n";
			$result .= '				    </div>'."\n";
			$result .= '				    <div class="new-ram-bottom"></div>'."\n";
			$result .= '				</div>'."\n";

			$result .= '				<div class="newram">'."\n";
			$result .= '				    <div class="new-ram-top"></div>'."\n";
			$result .= '				    <div class="new-ram-body">'."\n";
			$result .= '					<div id="title" style="margin: -13px 0 0 24px;">���������</div>'."\n";
			$result .= '					<div id="folderDelete">'."\n";
			$result .= '					</div>'."\n";
			$result .= '<script>accountMessages("Delete")</script>'."\n";
			$result .= '				    </div>'."\n";
			$result .= '				    <div class="new-ram-bottom"></div>'."\n";
			$result .= '				</div>'."\n";
			$result .= '			</form>'."\n";
			$result .= '			</div>'."\n";
			$result .= '			</div>'."\n";
			$result .= '			<div class="ram_bottom"></div>'."\n";
			$result .= '		    </div>'."\n";
			$result .= '		</div>'."\n";
			$result .= '		<div class="clear"></div>'."\n";
			$result .= '		<div class="empty"></div>'."\n";
			$result .= '	    </div>'."\n";
			return $result;
		}

		static function templateAccount2ReadMessages($message) {
			$result  = "";
			$result .= '			<div id="static"> '."\n";
			$result .= '		    <h1>������ �������</h1> '."\n";
			$result .= '		<div class="long_line"></div> '."\n";
			$result .= viewTemplate::templateAccount2Menu();
			$result .= '		    <div class="cab_right"> '."\n";
			$result .= '			<div class="ram_top"></div> '."\n";
			$result .= '			<div class="ram_center_lk"> '."\n";

			$result .= '			<div class="messages">'."\n";
			$result .= '			    <div id="title"><strong>������ ���������</strong></div>'."\n";
			$result .= '				<div class="newram">'."\n";
			$result .= '				    <div class="new-ram-top"></div>'."\n";
			$result .= '				    <div class="new-ram-body">'."\n";
			$result .= '					<div id="title" style="margin: -13px 0 0 24px;">����� ���������</div>'."\n";
			$result .= '				      <div id="selection">'."\n";

			if (!empty($message) and count($message)>0) {
				$result .= '					<div class="sled_input"><p><strong>��������� ��:</strong> <a href="/profile/'.$message['to_user'].'">'.$message['name_user'].'</a></p></div> '."\n";
				$result .= '					<div class="sled_input"><p><strong>���� ���������:</strong> <em>'.stripslashes($message['caption']).'</em></p></div> '."\n";
				$result .= '					    <p><strong>����� ���������:</strong></p>'."\n";
				$result .= stripslashes($message['text'])."<p></p>\n";
				$result .= "<form method=\"post\" action=\"/account/messages/reply\">\n";
				$result .= '<input type="hidden" name="idMsg" value="'.$message['id'].'">'."\n";
				$result .= '					<input type="image" src="/images/newlk/answer.jpg" width="95" height="29">'."\n";
				$result .= "</form>\n";
			}
			else {
				$result .= '������ ��������� �� ����������';
			}

			$result .= '					</div>'."\n";
			$result .= '				    </div>'."\n";
			$result .= '				    <div class="new-ram-bottom"></div>'."\n";
			$result .= '				</div>'."\n";
			$result .= '			</div>'."\n";

			$result .= '			</div> '."\n";
			$result .= '			<div class="ram_bottom"></div> '."\n";
			$result .= '		    </div> '."\n";
			$result .= '		</div> '."\n";
			$result .= '		<div class="clear"></div> '."\n";
			$result .= '		<div class="empty"></div> '."\n";
			$result .= '	    </div>'."\n";
			return $result;
		}

		static function templateAccount2ReplyMessages($message) {
			$result  = "";
			$result .= '			<div id="static"> '."\n";
			$result .= '		    <h1>������ �������</h1> '."\n";
			$result .= '		<div class="long_line"></div> '."\n";
			$result .= viewTemplate::templateAccount2Menu();
			$result .= '		    <div class="cab_right"> '."\n";
			$result .= '			<div class="ram_top"></div> '."\n";
			$result .= '			<div class="ram_center_lk"> '."\n";

			$result .= '<script type="text/javascript" src="/class/js/tiny_mce/tiny_mce.js"></script>'."\n";
			$result .= '<script>'."\n";
			$result .= '    tinyMCE.init({'."\n";
			$result .= '	// General options'."\n";
			$result .= '	mode : "textareas",'."\n";
			$result .= '	theme : "advanced",'."\n";
			$result .= '	plugins : "cyberim,safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",'."\n";
			$result .= '	// Theme options'."\n";
			$result .= '	theme_advanced_buttons1 : ",undo,redo,|,bold,italic,underline,strikethrough,|,bullist,numlist,|,sub,sup,",'."\n";
			$result .= '	theme_advanced_buttons2 : "",'."\n";
			$result .= '	theme_advanced_toolbar_location : "bottom",'."\n";
			$result .= '	theme_advanced_toolbar_align : "center",'."\n";
			$result .= '	theme_advanced_resizing : true,'."\n";
			$result .= '	indentation : "200pt",'."\n";
			$result .= '	// Example content CSS (should be your site CSS)'."\n";
			$result .= '	content_css : "/style_messages.php",'."\n";
			$result .= '	// Drop lists for link/image/media/template dialogs'."\n";
			$result .= '	template_external_list_url : "lists/template_list.js",'."\n";
			$result .= '	external_link_list_url : "lists/link_list.js",'."\n";
			$result .= '	external_image_list_url : "lists/image_list.js",'."\n";
			$result .= '	media_external_list_url : "lists/media_list.js",'."\n";
			$result .= '	height: 150,'."\n";
			$result .= '	language : "en",'."\n";
			$result .= '	// Replace values for the template plugin'."\n";
			$result .= '	template_replace_values : {'."\n";
			$result .= '	    username : "Some User",'."\n";
			$result .= '	    staffid : "991234"'."\n";
			$result .= '	}'."\n";
			$result .= '    });'."\n";
			$result .= '</script> '."\n";

			$result .= '<form id="formMessages" enctype="multipart/form-data" method="post">'."\n";
			$result .= '			<div class="messages">'."\n";
			$result .= '			    <div id="title"><strong>������ ���������</strong></div>'."\n";
			$result .= '				<div class="newram">'."\n";
			$result .= '				    <div class="new-ram-top"></div>'."\n";
			$result .= '				    <div class="new-ram-body">'."\n";
			$result .= '					<div id="title" style="margin: -13px 0 0 24px;">����� ���������</div>'."\n";
			$result .= '					<div id="selection">'."\n";
			if (isset($message['error']))
			    $result .= '					<div class="error">'.$message['error'].'</div>'."\n";

			$result .= '					<div class="sled_input"><input type="text" class="sled_text" name="to" value="'.@$message['to'].'" /><p class="sled_input_title"><span class="red_star">&lowast;</span> ����  (���, �������):</p></div> '."\n";
			$result .= '					<div class="sled_input"><input type="text" class="sled_text" name="caption" value="'.stripslashes(@$message['caption']).'" /><p class="sled_input_title"><span class="red_star">&lowast;</span> ���� ���������:</p></div> '."\n";
			$result .= '					<div id="sled_textarea">'."\n";
			$result .= '					    <p class="sled_input_title">����� ���������:</p>'."\n";
			$result .= '					    <textarea name="text">'.stripslashes(@$message['text']).'</textarea>'."\n";
			$result .= '					</div>'."\n";
			$result .= '					<input type="image" src="/images/newlk/send.jpg">'."\n";
			$result .= '					</div>'."\n";
			$result .= '				    </div>'."\n";
			$result .= '				    <div class="new-ram-bottom"></div>'."\n";
			$result .= '				</div>'."\n";
			$result .= '			</div>'."\n";
			$result .= '</form>'."\n";

			$result .= '			</div> '."\n";
			$result .= '			<div class="ram_bottom"></div> '."\n";
			$result .= '		    </div> '."\n";
			$result .= '		</div> '."\n";
			$result .= '		<div class="clear"></div> '."\n";
			$result .= '		<div class="empty"></div> '."\n";
			$result .= '	    </div>'."\n";
			return $result;
		}

		static function templateAccount2Albums() {
			$result  = '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                  <h2 class="page-title">��� �������</h2>'."\n";
			$result .= '            	    <div class="boxed mar-b10">'."\n";
			$result .= viewTemplate::templateAccount2Menu();
			$result .= '                            <div class="video-box cabinet">'."\n";
			
			$result .= '                        	<div class="shadowed-light">'."\n";			
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			
			$result .= '<h3 class="title2line">�������</h3>';
                        $result .= '    <div id="static"> '."\n";
                        $result .= '            <div class="long_line"></div> '."\n";
                        $result .= '            <div class="cab_right"> '."\n";
                        $result .= '                    <div class="ram_top"></div> '."\n";
                        $result .= '                    <div class="ram_center_album"> '."\n";
                        $result .= '                            <div class="album" id="albums">'."\n";
                        $result .= '                            </div> '."\n";
                        $result .= '                            <script>accountAlbums()</script> '."\n";
                        $result .= '                    </div> '."\n";
                        $result .= '                    <div class="ram_bottom"></div> '."\n";
                        $result .= '            </div> '."\n";
                        $result .= '    </div> '."\n";
                        $result .= '    <div class="clear"></div> '."\n";
                        $result .= '    <div class="empty"></div> '."\n";


			$result .= '                        				</div>'."\n";
			$result .= '                        			</div>'."\n";			
			$result .= '                        	</div>'."\n";			
			$result .= '                        	</div>'."\n";									
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}

		static function templateAccount2AlbumsAdd() {
			$result  = '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                  <h2 class="page-title">��� �������</h2>'."\n";
			$result .= '            	    <div class="boxed mar-b10">'."\n";
			$result .= viewTemplate::templateAccount2Menu();
			$result .= '                            <div class="video-box cabinet">'."\n";
			
			$result .= '                        	<div class="shadowed-light">'."\n";			
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			
			$result .= '<h3 class="title2line">�������</h3>';
			$result .= '		<div class="long_line"></div> '."\n";
			$result .= '		    <div class="cab_right"> '."\n";
			$result .= '			<div class="ram_top"></div> '."\n";
			$result .= '			<div class="ram_center_lk"> '."\n";
			$result .= '			<div class="album">'."\n";
			$result .= '			    <div id="title"><strong>���������� �������</strong></div>'."\n";
			$result .= '<form id="formMessages" enctype="multipart/form-data" method="post">'."\n";
			$result .= '				<div id="newalbum">'."\n";
#			$result .= '				    <div class="sled_input"><input type="text" class="sled_text" name="name" value="" /><p class="sled_input_title"><span class="red_star">&lowast;</span> �������� �������:</p></div> '."\n";
			$result .= '              <div class="sled_input">'."\n";
			$result .= '                <div class="sled_input_t">'."\n";
			$result .= '                  <input type="text" class="sled_text" name="name" value="" />'."\n";
			$result .= '                  <p class="sled_input_title"><span class="red_star">&lowast;</span> �������� �������:</p>'."\n";
			$result .= '                </div>'."\n";
			$result .= '              </div>'."\n";


			$result .= '				    <div id="sled_textarea">'."\n";
			$result .= '					<p class="sled_input_title">�������� �������:</p>'."\n";
			$result .= '					<textarea name="description"></textarea>'."\n";
			$result .= '				    </div>'."\n";
			$result .= '				    <br>'."\n";
			$result .= '				    <p><input type="image" src="/images/newlk/upload.jpg" /></p>'."\n";
			$result .= '				</div>'."\n";
			$result .= '			</form>'."\n";
			$result .= '			</div>'."\n";
			$result .= '			</div> '."\n";
			$result .= '			<div class="ram_bottom"></div> '."\n";
			$result .= '		    </div> '."\n";
			$result .= '		</div> '."\n";
			$result .= '		<div class="clear"></div> '."\n";
			$result .= '		<div class="empty"></div> '."\n";


			$result .= '                        				</div>'."\n";
			$result .= '                        			</div>'."\n";			
			$result .= '                        	</div>'."\n";			
			$result .= '                        	</div>'."\n";									
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}

		static function templateAccount2AlbumsEdit($photos) {
			$result  = '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                  <h2 class="page-title">��� �������</h2>'."\n";
			$result .= '            	    <div class="boxed mar-b10">'."\n";
			$result .= viewTemplate::templateAccount2Menu();
			$result .= '                            <div class="video-box cabinet">'."\n";
			
			$result .= '                        	<div class="shadowed-light">'."\n";			
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
		
			$result .= '<h3 class="title2line">�������</h3>';

			$result .= '		<div class="long_line"></div> '."\n";
			$result .= '		    <div class="cab_right"> '."\n";
			$result .= '			<div class="ram_top"></div> '."\n";
			$result .= '			<div class="ram_center_lk"> '."\n";
			$result .= '			<div class="album">'."\n";
			$result .= '			    <div id="title"><strong>�������������� �������</strong></div>'."\n";
			$result .= '<form id="formMessages" enctype="multipart/form-data" method="post">'."\n";


			$result .= '			<div class="album">'."\n";
			$result .= '				<div id="newalbum">'."\n";
			$result .= '				    <div class="sled_input"><input type="text" class="sled_text" name="name" value="'.stripslashes($photos['name']).'" /><p class="sled_input_title"><span class="red_star">&lowast;</span> �������� �������:</p></div> '."\n";
			$result .= '				    <div id="sled_textarea">'."\n";
			$result .= '					<p class="sled_input_title">�������� �������:</p>'."\n";
			$result .= '					<textarea name="description">'.stripslashes($photos['description']).'</textarea>'."\n";
			$result .= '				    </div>'."\n";

			if (isset($photos['photos']) and !empty($photos['photos']) and count($photos['photos'])>0) {
				$result .= '					<div class="newram">'."\n";
				$result .= '					    <div class="new-ram-top"></div>'."\n";
				$result .= '					    <div class="new-ram-body">'."\n";
				$result .= '						<div id="title" style="margin: -13px 0 0 24px;">������� � ����������</div>'."\n";
				$result .= '						<div id="selection">'."\n";
				foreach ($photos['photos'] as $photo) {
					$result .= '						    <div id="foto"><img src="/images/albums/'.$photo['id'].'.jpg" /></div>'."\n";
					$result .= '              <div class="sled_input">'."\n";
					$result .= '                <div class="sled_input_t">'."\n";
					$result .= '                  <input type="text" class="sled_text" name="descphoto['.$photo['id'].']" value="'.addslashes($photo['description']).'" style="text-align: left" />'."\n";
					$result .= '                  <p class="sled_input_title"><span class="red_star">&lowast;</span> ������� � ����������:</p>'."\n";
					$result .= '                </div>'."\n";
					$result .= '              </div>'."\n";

#					$result .= '						    <div class="sled_input"><input type="text" class="sled_text" name="descphoto['.$photo['id'].']" value="'.addslashes($photo['description']).'" /><p style="margin-left:60px; " class="sled_input_title">������� � ����������:</p></div> </center>'."\n";
				}
				$result .= '						</div>'."\n";
				$result .= '					    </div>'."\n";
				$result .= '					    <div class="new-ram-bottom"></div>'."\n";
				$result .= '					</div>'."\n";
			}

				$result .= '					<div class="newram">'."\n";
				$result .= '					    <div class="new-ram-top"></div>'."\n";
				$result .= '					    <div class="new-ram-body">'."\n";
				$result .= '						<div id="title" style="margin: -13px 0 0 24px;">��������� ����������</div>'."\n";
				$result .= '						<div id="selection">'."\n";
				$result .= '						<font color="red">������������ ������ ������������ ���� � �������� 1000x1000. ������: 1��</font>'."\n";

				$result .= '<script type="text/javascript" src="/class/js/jquery.js"></script>'."\n";
				$result .= '<script type="text/javascript" src="/class/js/swfobjectUpload.js"></script>'."\n";
				$result .= '<script type="text/javascript" src="/class/js/jquery.uploadify.v2.0.2.min.js"></script>'."\n";
				$result .= '<script type="text/javascript">'."\n";
				$result .= '$(document).ready(function() {'."\n";
				$result .= '        $("#uploadify").uploadify({'."\n";
				$result .= "                'uploader'       : '/class/uploadify.swf',\n";
				$result .= "                'script'         : '/class/uploadify.php',\n";
				$result .= "                'cancelImg'      : '/images/cancel.png',\n";
				$result .= "                'folder'         : 'images/albums',\n";
				$result .= "                'queueID'        : 'fileQueue',\n";
				$result .= "                'buttonText'     : 'Load',\n";
				$result .= "                'auto'           : true,\n";
				$result .= "                'multi'          : true,\n";
				$result .= "                'onComplete': function(event, queueID, fileObj, response, data) {\n";
				$result .= "                      $.jGrowl('���� '+fileObj.name+' ��������');},\n";
				$result .= "                'onAllComplete'  : function() {location.href = \"/account/albums/edit/{$photos['id']}\";},\n";
				$result .= "                'scriptData'     : {'PHPSESSID' : '".session_id()."', id_album: {$photos['id']}},\n";
				$result .= '        });'."\n";
				$result .= '});'."\n";
				$result .= '</script>'."\n";

				$result .= '<div id="fileQueue"></div>'."\n";
				$result .= '<input type="file" name="uploadify" id="uploadify" />'."\n";

				$result .= '						</div>'."\n";
				$result .= '					    </div>'."\n";
				$result .= '					    <div class="new-ram-bottom"></div>'."\n";
				$result .= '					</div>'."\n";

			$result .= '				    <br>'."\n";
			$result .= '				    <p><input type="image" name="save" src="/images/newlk/save.jpg" /></p>'."\n";
			$result .= '				</div>'."\n";
			$result .= '			</div>'."\n";

			$result .= '			</form>'."\n";
			$result .= '			</div>'."\n";
			$result .= '			</div> '."\n";
			$result .= '			<div class="ram_bottom"></div> '."\n";
			$result .= '		    </div> '."\n";
			$result .= '		</div> '."\n";
			$result .= '		<div class="clear"></div> '."\n";
			$result .= '		<div class="empty"></div> '."\n";





			$result .= '                        				</div>'."\n";
			$result .= '                        			</div>'."\n";			
			$result .= '                        	</div>'."\n";			
			$result .= '                        	</div>'."\n";									
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}

		static function templateProfileMenu($id) {
			global $lastVideo;
//print_r($lastVideo);
			$result  = "";
			$result .= '		    <div class="cab_left_menu">'."\n";
			$result .= '			<div id="btn2"><div><a href="/profile/'.$id.'">�������</a></div></div>'."\n";
			$result .= '			<div id="btn1"><div><a href="/profile/'.$id.'/blog">������</a></div></div>'."\n";
#			$result .= '			<div id="btn1"><div><a href="/profile/'.$id.'/friends">������</a></div></div>'."\n";
			if ($lastVideo!="") {
				$result .= '			<div id="btm"><div>�� �������������:<br />��������� ����� ����� �<br />������� <a href="/programm/'.$lastVideo[0]['id_typeprogramm'].'">"'.$lastVideo[0]['nameType'].'"</a>.<br /><a href="/video/'.$lastVideo[0]['id'].'">������� � ��������� ></a></div></div>'."\n";
			}
#			$result .= '			<div id="telek"><a href="/recommend"><img src="/images/rekomend.png" width="100%" border="0"></a></div>'."\n";
			$result .= '		    </div>'."\n";
			return $result;
		}

		static function templateProfile($profile, $city, $lv="") {
			global $lastVideo;

			$result  = "";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                  <h2 class="page-title">���������� � ������������ '.$profile['lastname']." ".$profile['firstname'].'</h2>'."\n";
			$result .= '            	    <div class="boxed mar-b10">'."\n";
			$result .= '                            <div class="left-menu">'."\n";
			$result .= '                                <p>'."\n";
			$result .= '                                    �� �������������: ��������� ����� ����� � ������� <a href="/programm/'.$lastVideo[0]['id_typeprogramm'].'">"'.$lastVideo[0]['nameType'].'"</a>. <a href="/video/'.$lastVideo[0]['id'].'">������� � ���������</a>'."\n";
			$result .= '                                </p>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                            <div class="video-box cabinet">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                          <div>'."\n";
			$result .= '                                    	<h3 class="title2line">'."\n";
			$result .= '                                                '.$profile['lastname']." ".$profile['firstname']."\n";
			$result .= '                                            </h3>'."\n";
			$result .= '                                            <div class="avatar">'."\n";
			$result .= '                                        	<img src="/images/users/'.(file_exists($_SERVER['DOCUMENT_ROOT'].'images/users/'.$profile['id'].'.jpg')===true? $profile['id']: "nophoto").'.jpg" width="150" height="150" alt="'.$profile['lastname']." ".$profile['firstname'].'" title="'.$profile['lastname']." ".$profile['firstname'].'" />'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                            <div class="user-statistic">'."\n";
			if ($profile['description']!="") {
				$result .= '                                        	<p>'."\n";
				$result .= '                                            	<strong>���������� � ������������</strong><br />'."\n";
				$result .= '                                                    <span>'.stripslashes($profile['description']).'</span>'."\n";
				$result .= '                                                </p>'."\n";
			}
			$result .= '                                            </div>'."\n";
			$result .= '                                          </div>'."\n";
			$result .= '                                          <div class="clr"></div>'."\n";
			$result .= '                                      </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}

		static function templateProfileViewAlbums($infoAlbum, $profile, $photos) {
			$result  = "";
			$result .= '	    <div id="static">'."\n";
			$result .= '		    <h1>���������� � ������������ '.$profile['lastname']." ".$profile['firstname'].'</h1>'."\n";
			$result .= '		<div class="long_line"></div>'."\n";
			$result .= viewTemplate::templateProfileMenu($profile['id']);

			$result .= '		    <div class="cab_right">'."\n";

			$result .= '			<div class="ram_top"></div> '."\n";
			$result .= '			<div class="ram_center_album">'."\n";
			$result .= "<h1>".stripslashes($infoAlbum['name'])."</h1>";

			$result .= '			<div class="album" id="albums">'."\n";
			if (!empty($photos) and count($photos)>0) {
				foreach ($photos as $photo) {
					$result .= '                            <div class="big_subbox">'."\n";
					$result .= '                                <div class="big_subbox_top"><p>'.substr(stripslashes($photo['description']), 0, 25).'</p></div>'."\n";
					$result .= '                                <div class="big_subbox_foto"><a href="/images/albums/'.$photo['id'].'b.jpg" rel="gallery" title="'.stripslashes($photo['description']).'"><img src="/images/albums/'.$photo['id'].'.jpg"  alt="" /></a></div>'."\n";
					$result .= '                                <div class="big_subbox_bottom"></div>'."\n";
					$result .= '                                <div class="clear"></div>'."\n";
					$result .= '                            </div>'."\n";
				}
			}

			$result .= '	<script type="text/javascript">'."\n";
			$result .= '	    $(document).ready(function() {'."\n";
			$result .= '		$("a[rel=gallery]").fancybox({'."\n";
			$result .= "		    'transitionIn'          : 'none',\n";
			$result .= "		    'transitionOut'         : 'none',\n";
			$result .= "		    'titlePosition'         : 'over'\n";
			$result .= '		});'."\n";
			$result .= '	    });'."\n";
			$result .= '	</script>'."\n";

			$result .= '			</div> '."\n";
			$result .= '			</div> '."\n";
			$result .= '			<div class="ram_bottom"></div> '."\n";


			$result .= '			<div class="ram_bottom"></div>'."\n";
			$result .= '		    </div>'."\n";
			$result .= '		      </div>'."\n";
			$result .= '		<div class="clear"></div>'."\n";
			$result .= '		<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";
			return $result;
		}

		static function templateProfileFriends($profile) {
			$result  = "";
			$result .= '	    <div id="static">'."\n";
			$result .= '		    <h1>���������� � ������������ '.$profile['lastname']." ".$profile['firstname'].'</h1>'."\n";
			$result .= '		<div class="long_line"></div>'."\n";
			$result .= viewTemplate::templateProfileMenu($profile['id']);

			$result .= '		    <div class="cab_right">'."\n";
			$result .= '			<div class="ram_top"></div> '."\n";
			$result .= '			<div class="ram_center_album">'."\n";
			$result .= '			<div class="friendpage" id="friendpage">'."\n";
			$result .= '			</div> '."\n";
			$result .= '			</div> '."\n";
			$result .= '<script>profileFriends('.$profile['id'].', 0)</script>'."\n";
			$result .= '			<div class="ram_bottom"></div> '."\n";


			$result .= '			<div class="ram_bottom"></div>'."\n";
			$result .= '		    </div>'."\n";
			$result .= '		      </div>'."\n";
			$result .= '		<div class="clear"></div>'."\n";
			$result .= '		<div class="empty"></div>'."\n";
			$result .= '</div>'."\n";
			return $result;
		}

		static function templateBlogUsers($users, $prefix, $letter=false) {
			$result .= "";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '            	    <div class="boxed mar-b10 journal">'."\n";
			$result .= '                            <div class="left-big-block">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                    	<div>'."\n";
			$result .= '                                               <div class="tabs-bar">'."\n";
			$result .= '                                                    <ul class="tabs-video boxed">'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light'.($prefix == ""? " select": "").'" href="/blogusers">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>����������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                         <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light'.($prefix == "authors"? " select": "").'" href="/blogusers/authors">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>�� ��������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                    </ul>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                              <div class="jornal-list w-577">'."\n";
			$result .= '                                                <div class="alphabet">'."\n";
			$letters = array("�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�");
			foreach ($letters as $l) 
				$result .= '                                                     <a href="/blogusers/'.($prefix!=""? $prefix."/": "").$l.'">'.$l.'</a>'."\n";
			$result .= '                                                   </div>'."\n";
			$result .= '                                                  <div class="users">'."\n";

			if (!empty($users) and count($users)>0) {
				$result .= '      <div class="mar-b20 boxed">'."\n";
				foreach ($users as $key=>$user) {
					if ($key % 2 == 0 and $key!=0) 
					    $result .= '      </div><div class="mar-b20 boxed">'."\n";

					$result .= '                                                          <div class="item-user">'."\n";
					$result .= '                                                              <span>'."\n";
					$result .= '                                                                   <img src="/images/users/'.(file_exists("images/users/".$user['id'].'.jpg')? $user['id']: "nophoto").'.jpg" width="77" height="77" alt="'.$user['lastname'].' '.$user['firstname'].'" title="'.$user['lastname'].' '.$user['firstname'].'" />'."\n";
					$result .= '                                                              </span>'."\n";
					$result .= '                                                              <h3>'."\n";
					$result .= '                                                                  <a href="/profile/'.$user['id'].'">'.$user['lastname'].' '.$user['firstname'].'</a>'.(strip_tags(stripslashes($user['sign'])) != ""? '<BR/><div style="color: #999999; font-size: 12px">'.strip_tags(stripslashes($user['sign'])).'</div>': "")."\n";
					$result .= '                                                              </h3>'."\n";
					$result .= '                                                          </div>'."\n";
				}
				$result .= '      </div>'."\n";
			}

			$result .= '                                                  </div>'."\n";
			$result .= '                                              </div>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                      </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                            <div class="left-menu big-menu">'."\n";
			$result .= '                                <div class="shadowed-light mar-b10">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border playlist-left">'."\n";
			$result .= '                                    	<div class="playlist-left text-c">'."\n";
			$result .= '                                        	<div class="mar-b10">'."\n";
			$result .= '                                                    <a href="#">'."\n";
			$result .= '                                                        <img src="/img/other/banners/9.png" width="221" height="164" alt="" title="" />'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="mar-b10">'."\n";
			$result .= '                                                    <a href="#">'."\n";
			$result .= '                                                        <img src="/img/other/banners/10.png" width="221" height="164" alt="" title="" />'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="mar-b10">'."\n";
			$result .= '                                                    <a href="#">'."\n";
			$result .= '                                                        <img src="/img/other/banners/11.png" width="221" height="164" alt="" title="" />'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="mar-b10">'."\n";
			$result .= '                                                    <a href="#">'."\n";
			$result .= '                                                        <img src="/img/other/banners/12.png" width="221" height="164" alt="" title="" />'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="mar-b10">'."\n";
			$result .= '                                                    <a href="#">'."\n";
			$result .= '                                                        <img src="/img/other/banners/9.png" width="221" height="164" alt="" title="" />'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div>'."\n";
			$result .= '                                                    <a href="#">'."\n";
			$result .= '                                                        <img src="/img/other/banners/13.png" width="221" height="164" alt="" title="" />'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

/*
			$result .= '<div id="left">'."\n";
			$result .= '	<div id="video">'."\n";
			$result .= '<!--����������� �������-->'."\n";

			$result .= '<div id="z-fon">'."\n";
			$result .= '  <div id="z-top">'."\n";
			$result .= '    <div id="z-bottom">'."\n";
#			if ($letter !== false) 

				$result .= '      <div id="a">'.($letter !== false? $letter: "").'</div>'."\n";

			$result .= '      <div id="ychastniki-txt">��������� �������</div>'."\n";
#			$result .= '      <div id="search">'."\n";
#			$result .= '            <input type="text" name="textfield" id="textfield" />'."\n";
#			$result .= '            <input name="" type="button" value="" style="position:relative; left:220px; background-image:url(/images/search-button.jpg);" />'."\n";
#			$result .= '      </div>'."\n";
			$result .= '      <div id="menu">'."\n";
#			$result .= '        <a class="menu" href="/blogusers/" '.($prefix == ""? 'id="menu_active"': "").'>���</a><a class="menu" href="/blogusers/subscribe/" '.($prefix == "subscribe"? 'id="menu_active"': "").'>�� ��������</a><a class="menu" href="/blogusers/authors" '.($prefix == "authors"? 'id="menu_active"': "").'>�� ��������</a>     '."\n";
			$result .= '        <a class="menu" href="/blogusers/" '.($prefix == ""? 'id="menu_active"': "").'>����������</a><a class="menu" href="/blogusers/authors" '.($prefix == "authors"? 'id="menu_active"': "").'>�� ��������</a>     '."\n";


			$result .= '<br />'."\n";

#			$letters = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

#			foreach ($letters as $l) 
#				$result .= '     <a class="bukva" href="/blogusers/'.($prefix!=""? $prefix."/": "").$l.'" '.($l == $letter? 'id="active"': "").'>'.$l.'</a>'."\n";

			$result .= '       </div>'."\n";
			$result .= '      </div>'."\n";

			$result .= '  </div></div></div>'."\n";
			$result .= '   <div class="clear"></div>'."\n";
			$result .= '	</div>'."\n";
			$result .= '	    <div class="clear"></div>'."\n";
			$result .= '	<div class="clear"></div>'."\n";
			$result .= '</div>'."\n";
			$result .= '    <div id="right_column"><div id="right_column_top"></div>'."\n";
			$result .= '	<div class="line"></div> '."\n";
			#$result .= '		<div class="count_video_new"><p>145</p></div> '."\n";
			$result .= '				<div class="count_video_new"><p><img style="margin-left:8px;" src="/images/count.png"></p></div>'."\n";
			$result .= '	<a href="/"><img src="/images/banner-web.gif" alt=""  width="250"/></a><BR/>'."\n";
			if (!isset($_SESSION['AUTH']['auth']) || (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth'] !== 1)) {
				$result .= '	<div id="tv_buttons"> '."\n";
				$result .= '	    <a href="/account/"><img src="/images/voyti.png" alt="" /></a> '."\n";
				$result .= '	    <a href="/reg"><img src="/images/podlyuch.png" alt="" /></a> '."\n";
				$result .= '	    <div class="clear"></div> '."\n";
				$result .= '	</div> '."\n";
			}
			$result .= '	<div class="line"></div> '."\n";
			$result .= '	<a href="/viewtv" title="�������� ���� ��������� �� ����� ����������"><img src="/images/televizor.png" alt="" /></a> '."\n";
			$result .= '	<div class="line"></div> '."\n";
			$result .= '	<a href="/recommend" title="���������� �������"><img src="/images/rekomend.png" alt="" /></a> '."\n";
			$result .= '	<div class="line"></div> '."\n";
			$result .= '    <div id="right_column_bottom"></div></div>'."\n";
			$result .= '    <div class="clear"></div><div id="badbox" ></div>'."\n";
			$result .= '<div class="clear"></div>'."\n";
			$result .= '    <div id="down"></div>'."\n";
			$result .= '    <div class="clear"></div>'."\n";
			$result .= '    <div class="clear"></div>'."\n";
			$result .= '</div>'."\n";
*/

			return $result;
		}

		static function templateBlogArticle($prefix, $articles, $countAll, $page, $caption, $urlBlog, $listBanners) {
			$result .= "";
			$result .= '<div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '            	    <div class="boxed mar-b10 journal">'."\n";
			$result .= '                            <div class="left-big-block">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                    	<div>'."\n";
			$result .= '                                               <div class="tabs-bar">'."\n";
			$result .= '                                                    <ul class="tabs-video boxed">'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light'.($prefix == ""? " select": "").'" href="/'.$urlBlog.'">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>���'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light'.($prefix == "fishing"? " select": "").'" href="/'.$urlBlog.'/fishing">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>�������'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                         <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light'.($prefix == "underwater"? " select": "").'" href="/'.$urlBlog.'/underwater">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>��������� �����'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                        <li>'."\n";
			$result .= '                                                            <a class="corner-top-5 round border-light'.($prefix == "hunting"? " select": "").'" href="/'.$urlBlog.'/hunting">'."\n";
			$result .= '                                                                <i class="tl"></i><i class="tr"></i>�����'."\n";
			$result .= '                                                            </a>'."\n";
			$result .= '                                                        </li>'."\n";
			$result .= '                                                    </ul>'."\n";
			$result .= '                                                </div>'."\n";

			$result .= '                                              <div class="jornal-list" style="width: 577px">'."\n";
			$result .= '                                                  <a href="/rss/blog/'.$prefix.'" class="rss">RSS</a>'."\n";
			$result .= '                                                  <div class="mar-b-20">'."\n";

                        if (!empty($articles) and count($articles)>0) {
                                foreach ($articles as $article) {
					$result .= '                                                  <div class="journal-item">'."\n";
					$result .= '                                                      <h5 class="titleoneline">'."\n";
					$result .= '                                                        <a href="/'.$urlBlog.'/'.$article['id'].'">'.stripslashes($article['name']).'</a>'."\n";
					$result .= '                                                    </h5>'."\n";

                                        list($date, $time) = explode(" ", date("d.m.Y H:i", $article['datetime']));
                                        if ($date == date("d.m.Y"))
                                                $date = "�������";
                                        else if ($date == date("d.m.Y", strtotime("NOW -1day")))
                                                $date = "�����";

					$result .= '                                                    <p>'.$article['author'].': '.$time.' / '.$date.'</p>'."\n";
					$result .= '                                                    <div class="journal-img">'."\n";
					$result .= '                                                	<img src="/images/articles/'.$article['id'].'.jpg" width="575" height="283" alt="" title="" />'."\n";
					$result .= '                                                    </div>'."\n";
					$result .= '                                                    '.stripslashes($article['anons'])."\n";
					$result .= '                                                    <p>'."\n";
					$result .= '                                                	<a href="/blog/'.$article['id'].'#comment">��������������</a>'."\n";
					$result .= '                                                    </p>'."\n";
					$result .= '                                                    <div class="info">'."\n";
                                        if (!empty($article['tags']) and count($article['tags'])>0) {
                                                foreach ($article['tags'] as $tag)
                                                        $temp[] = '<a href="/clouds/'.$tag['mark'].'">'.$tag['name'].'</a>';
						$result .= '                                                	<p><strong>����: </strong>'.implode(", ", $temp).'</p>'."\n";
                                                unset($temp);
                                        }
		                        if (!empty($article['comments']) and count($article['comments'])>0) {
		                                foreach ($article['comments'] as $comment)
		                                        $sumRepl += $comment['total'];
		                        }
					$result .= '                                                        <p>����� ������: <strong>'.($sumRepl+0).'</strong></p>'."\n";
                                        if (!empty($article['comments']) and count($article['comments'])>0) {
                                                foreach ($article['comments'] as $comment)
                                                        $temp[] = '<a href="/profile/'.$comment['id_user'].'">'.$comment['author'].'</a>';
						$result .= '                                                        <p><strong>��������� ���������:</strong> '.implode(", ", $temp).'</p>'."\n";
                                                unset($temp);
                                        }
					$result .= '                                                    </div>'."\n";
					$result .= '                                                  </div>'."\n";
#					$result .= '                                                  </div>';
					$result .= '<div style="height: 20px"></div>'."\n";
					$sumRepl = 0;
                                }
                        }
                        else
                                $result .= '<div align="center"><BR />��� ������</div>';



                        if (!empty($articles) and count($articles)>0) {
				$result .= '                                                <div class="pager">'."\n";
				$result .= '                                                  <div class="page">'."\n";

                                if ($page != 0)
                                        $result .= '<a href="/'.$urlBlog.'/'.($prefix != ""? $prefix."/": "").'page/'.($page-1).'">����������</a> '."\n";
                                else
                                        $result .= '<a>����������</a> '."\n";

                                for ($i = 0; $i < $countAll; $i++)
					if ($i == $page) 
                                            $result .= '<span>'.($i+1).'</span> '."\n";
					else
                                            $result .= '<a href="/'.$urlBlog.'/'.($prefix != ""? $prefix."/": "").'page/'.$i.'">'.($i+1).'</a> '."\n";

                                if ($page+1 < $countAll)
                                        $result .= '<a href="/'.$urlBlog.'/'.($prefix != ""? $prefix."/": "").'page/'.($page+1).'">���������</a> '."\n";
                                else
                                        $result .= '<a>���������</a> '."\n";

#$result .=pager_num($all,$count, $page);
				$result .= '                                               </div>'."\n";
				$result .= '                                               </div>'."\n";
                        }

			$result .= '                                              </div>'."\n";
			$result .= '                                              </div>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                      </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                            <div class="left-menu big-menu">'."\n";
			$result .= '                                <div class="shadowed-light mar-b10">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border playlist-left">'."\n";
			$result .= '                                    	<div class="playlist-left text-c">'."\n";

			if (!empty($listBanners) and count($listBanners)>0) {
				foreach ($listBanners as $banner) {
					$result .= '                        	<div class="mar-b10">'."\n";
					if ($banner['url'] != "") 
						$result .= '                            	<a href="'.$banner['url'].'" '.(strpos($banner['url'], "555hf.tv")!==false? "": "target=\"_blank\"").'><img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" /></a>'."\n";
					else
						$result .= '                            	<img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" />'."\n";
					$result .= '                                </div>'."\n";
				}
			}

/*
			$result .= '                                        	<div class="mar-b10">'."\n";
			$result .= '                                                    <a href="#">'."\n";
			$result .= '                                                        <img src="/img/other/banners/9.png" width="221" height="164" alt="" title="" />'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="mar-b10">'."\n";
			$result .= '                                                    <a href="#">'."\n";
			$result .= '                                                        <img src="/img/other/banners/10.png" width="221" height="164" alt="" title="" />'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="mar-b10">'."\n";
			$result .= '                                                    <a href="#">'."\n";
			$result .= '                                                        <img src="/img/other/banners/11.png" width="221" height="164" alt="" title="" />'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="mar-b10">'."\n";
			$result .= '                                                    <a href="#">'."\n";
			$result .= '                                                        <img src="/img/other/banners/12.png" width="221" height="164" alt="" title="" />'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div class="mar-b10">'."\n";
			$result .= '                                                    <a href="#">'."\n";
			$result .= '                                                        <img src="/img/other/banners/9.png" width="221" height="164" alt="" title="" />'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                                <div>'."\n";
			$result .= '                                                    <a href="#">'."\n";
			$result .= '                                                        <img src="/img/other/banners/13.png" width="221" height="164" alt="" title="" />'."\n";
			$result .= '                                                    </a>'."\n";
			$result .= '                                                </div>'."\n";
*/

			$result .= '                                            </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}

		static function templateViewArticleComments($comments, $article, $pos=0) {
			$result = "";
				foreach ($comments as $comment) {
#					if ($article['id_user'] == $comment['id_user']) {
						$result .= '    <!-- �����������  -->'."\n";

			                        $result .= '                                                    <div class="user-comment'.($comment['id_prev']!=0? " pad-l20": "").'">'."\n";
			                        $result .= '                                                            <span class="avatar">'."\n";
			                        $result .= '                                                                <img height="43" width="43" title="" alt="" src="/images/users/'.(file_exists("images/users/".$comment['id_user'].'.jpg')? $comment['id_user']: "nophoto").'.jpg">'."\n";
			                        $result .= '                                                            </span>'."\n";
			                        $result .= '                                                            <div class="right-bar-com">'."\n";
						if (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth']==1 && $_SESSION['AUTH']['datetimepay']>time() && $comment['id_user'] == $_SESSION['AUTH']['id']) 
							$result .= ' <a onClick="delComment('.$comment['id'].')">�������</a>'."\n";
						else
							$result .= '                                                                <a onClick="reply('.$comment['id'].', 0)">��������</a>'."\n";
			                        $result .= '                                                                <strong>'.$comment['author'].'</strong>'."\n";
						list($date, $time) = explode(" ", date("d.m.Y H:i", $comment['datetime']));
						if ($date == date("d.m.Y"))
							$date = "�������";
						else if ($date == date("d.m.Y", strtotime("NOW -1day")))
							$date = "�����";
			                        $result .= '                                                                '.$time.' '.$date."\n";
			                        $result .= '                                                                <div class="comment-text">'."\n";
			                        $result .= '                                                                   '.stripslashes($comment['text'])."\n";
			                        $result .= '                                                                </div>'."\n";
			                        $result .= '                                                            </div>'."\n";
			                        $result .= '                                                        </div>'."\n";

						$result .= '    <!-- �����������: �����  -->'."\n";

/*					}
					else if ($comment['is_user_author'] == "yes") {

						$result .= '          <!-- �����������  -->'."\n";
						$result .= '      <div class="comm_block fon" style="margin-left:'.($pos==0? 15: $pos).'px;">'."\n";
						$result .= '        <div class="comm_lt">'."\n";
						$result .= '          <div class="comm_rt">'."\n";
						$result .= '            <div class="comm_lb">'."\n";
						$result .= '              <div class="comm_rb">'."\n";
						$result .= '                <div class="foto"><img src="/images/users/'.(file_exists("images/users/".$comment['id_user'].'.jpg')? $comment['id_user']: "nophoto").'.jpg" width="98" height="98" align="left" style="margin-top: 10px; margin-left: 10px;" /></div>'."\n";
						$result .= '                <div class="comm">'."\n";

						list($date, $time) = explode(" ", date("d.m.Y H:i", $comment['datetime']));
						if ($date == date("d.m.Y"))
							$date = "�������";
						else if ($date == date("d.m.Y", strtotime("NOW -1day")))
							$date = "�����";

						$result .= '                  <div class="profile"><a href="/profile/'.$comment['id_user'].'"><span>'.$comment['author'].'</span></a> <span class="date">'.$time.' '.$date.' <a href="#">������</a></span></div>'."\n";
						$result .= '                  <div class="comm-text">'.stripslashes($comment['text']).'</div>'."\n";
						$result .= '                  <div class="button"><a onClick="reply('.$comment['id'].', 0)">��������</a>'.(isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth']==1 && $_SESSION['AUTH']['datetimepay']>time() && $comment['id_user'] == $_SESSION['AUTH']['id']? ' <a onClick="delComment('.$comment['id'].')">�������</a>': "").'</div>'."\n";
						$result .= '                </div>'."\n";
						$result .= '              </div>'."\n";
						$result .= '            </div>'."\n";
						$result .= '          </div>'."\n";
						$result .= '        </div>'."\n";
						$result .= '      </div>'."\n";
						$result .= '      <!-- �����������: �����  --> <div style="clear: both;"></div>'."\n";
					}
					else {
						$result .= '      <!-- �����������  -->'."\n";
						$result .= '      <div class="comm_block none">'."\n";
						$result .= '        <div class="foto"><img src="/images/users/'.(file_exists("images/users/".$comment['id_user'].'.jpg')? $comment['id_user']: "nophoto").'.jpg" width="98" height="98" align="left" style="margin-top: 7px; margin-left: 6px;" /></div>'."\n";
						$result .= '        <div class="comm">'."\n";

						list($date, $time) = explode(" ", date("d.m.Y H:i", $comment['datetime']));
						if ($date == date("d.m.Y"))
							$date = "�������";
						else if ($date == date("d.m.Y", strtotime("NOW -1day")))
							$date = "�����";

						$result .= '          <div class="profile"> <a href="/profile/'.$comment['id_user'].'"><span>'.$comment['author'].'</span></a> <span class="date">'.$time.' '.$date.' <a href="#">������</a></span></div>'."\n";
						$result .= '          <div class="comm-text">'.stripslashes($comment['text']).'</div>'."\n";
						$result .= '                  <div class="button"><a onClick="reply('.$comment['id'].', 0)">��������</a>'.(isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth']==1 && $_SESSION['AUTH']['datetimepay']>time() && $comment['id_user'] == $_SESSION['AUTH']['id']? ' <a onClick="delComment('.$comment['id'].')">�������</a>': "").'</div>'."\n";

						$result .= '        </div>'."\n";
						$result .= '      </div>'."\n";
						$result .= '      <!-- �����������: �����  --> '."\n";
					}
*/

					if (isset($comment['sub']))
						$result .= viewTemplate::templateViewArticleComments($comment['sub'], $article, $pos+40);
				}
			return $result;
		}

		static function templateViewArticleMyComments($comments, $article, $pos=0) {
			$result = "";
				foreach ($comments as $comment) {
					$result .= ' <div class="comentar" style="margin-left:'.$pos.'px;"> '."\n";
					if ($_SESSION['AUTH']['id'] == $comment['id_user']) {
						$result .= "<script>\n";
						$result .= "function editAuthorComment(id) {\n";
						$result .= "        JsHttpRequest.query(\n";
						$result .= "                '/class/operation.php',\n";
						$result .= "                {\n";
						$result .= "                        'action'        : \"editAuthorComment\",\n";
						$result .= "                        'id'            : id\n";
						$result .= "                },\n";
						$result .= "                function(result, errors) {\n";
						$result .= "        		if (result['result'] == '') {\n";
						$result .= "        			$.modal.close();\n";

						$result .= '        $.modal(\'<div class="blackout" style="display:block;" id="rememberDIV"><div class="back-blackout"></div><div class="pay-box"><a class="close-window"onClick="$.modal.close();"></a><h3 class="title2line">�������������� �����������</h3><div align="center"><form id="formCommentEdit" method="POST" enctype="multipart/form-data"><textarea class="articleText" id="authorCommentTextEdit" name="authorCommentTextEdit">\'+result[\'text\']+\'</textarea><a class="button button-dark mar-t10" onClick="saveAuthorComment(\'+id+\')"><span>�������� �����������</span></a></form></div></div></div>\');';

						$result .= "        			toggleEditor('authorCommentTextEdit');\n";
						$result .= "                	}\n";
						$result .= "                	else {\n";
						$result .= "                        $.jGrowl(result['result']);\n";
						$result .= "                	}\n";
						$result .= "                },\n";
						$result .= "                true\n";
						$result .= "        );\n";
						$result .= "}\n";
						$result .= "function saveAuthorComment(id) {\n";
						$result .= "        JsHttpRequest.query(\n";
						$result .= "                '/class/operation.php',\n";
						$result .= "                {\n";
						$result .= "                        'action'        : \"saveAuthorComment\",\n";
						$result .= "                        'id'            : id,\n";
						$result .= "                        'text'          : document.getElementById(\"formCommentEdit\"),\n";
						$result .= "                },\n";
						$result .= "                function(result, errors) {\n";
						$result .= "                        if (result['result']!='')\n";
						$result .= "                        	$.jGrowl(result['result']);\n";
						$result .= "                        else \n";
						$result .= "                        	window.location.replace( sURL );\n";
						$result .= "                },\n";
						$result .= "                true\n";
						$result .= "        );\n";
						$result .= "}\n";
						$result .= "</script>\n";

						$result .= '    <div style="position: relative;"><div style="position: absolute; right: 35px; top: -3px;"><img src="/images/edi.png" onClick="editAuthorComment('.$comment['id'].');" style="cursor: pointer"/></div></div>'."\n";
					}

		                        $result .= '                                                    <div class="user-comment">'."\n";
		                        $result .= '                                                            <span class="avatar">'."\n";
		                        $result .= '                                                                <img height="43" width="43" title="" alt="" src="/images/users/'.(file_exists("images/users/".$comment['id_user'].'.jpg')? $comment['id_user']: "nophoto").'.jpg">'."\n";
		                        $result .= '                                                            </span>'."\n";
		                        $result .= '                                                            <div class="right-bar-com">'."\n";
		                        $result .= '                                                                <strong>'.$comment['author'].'</strong>'."\n";
					list($date, $time) = explode(" ", date("d.m.Y H:i", $comment['datetime']));
					if ($date == date("d.m.Y"))
						$date = "�������";
					else if ($date == date("d.m.Y", strtotime("NOW -1day")))
						$date = "�����";
		                        $result .= '                                                                '.$time.' '.$date."\n";
		                        $result .= '                                                                <div class="comment-text">'."\n";
		                        $result .= '                                                                    '.stripslashes($comment['text'])."\n";
		                        $result .= '                                                                </div>'."\n";
					$result .= '                  <p>'.(isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth']==1 && $_SESSION['AUTH']['datetimepay']>time() && $comment['id_user'] == $_SESSION['AUTH']['id']? ' <a onClick="delComment('.$comment['id'].')">�������</a>': "").'</p>'."\n";

		                        $result .= '                                                            </div>'."\n";
		                        $result .= '                                                        </div>'."\n";

					if (isset($comment['sub']))
						$result .= viewTemplate::templateViewArticleMyComments($comment['sub'], $article, $pos+40);
				}
			return $result;
		}


		static function templateViewArticle($prefix, $article, $countAll, $page, $caption, $urlBlog, $listBanners) {
			$result .= "";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '            	    <div class="boxed mar-b10 journal journal-view">'."\n";
			$result .= '                            <div class="left-big-block">'."\n";
			$result .= '                        	<div class="shadowed-light">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border">'."\n";
			$result .= '                                    	<div>'."\n";

                    if (!empty($article) and count($article)>0) {
                        if (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth'] == 1 && $_SESSION['AUTH']['is_admin'] == "yes" and $article['is_moder']=="no") {
                                $result .= "<script>\n";
                                $result .= "function moderArticle(id) {\n";
                                $result .= "        JsHttpRequest.query(\n";
                                $result .= "                '/class/operation.php',\n";
                                $result .= "                {\n";
                                $result .= "                        'action'        : \"moderArticle\",\n";
                                $result .= "                        'id'            : id\n";
                                $result .= "                },\n";
                                $result .= "                function(result, errors) {\n";
                                $result .= "                        $.jGrowl('������ ��������������');\n";
                                $result .= "                },\n";
                                $result .= "                true\n";
                                $result .= "        );\n";
                                $result .= "}\n";
                                $result .= "</script>\n";

                                $result .= '<div align="center" style="color: #FF0000; font-weight: bold; font-size: 15px;"> ������ ������ �� ��������������. ��������������: <a onClick="moderArticle('.$article['id'].')">��</a>?</div>';
                                $result .= '    <img src="/images/a_razdel.jpg" width="600" height="9" style="margin-left:10px;" /><br /> <br /> '."\n";
			}

                        if ($article['theme'] == "fish")
                                $theme = "fishing";
                        else if ($article['theme'] == "ohota")
                                $theme = "hunting";
                        else if ($article['theme'] == "waterfish")
                                $theme = "underwater";

			$result .= '                                              <div class="jornal-list" style="width:577px">'."\n";
			$result .= '                                                  <div class="mar-b-20">'."\n";
			$result .= '                                                  <div class="journal-item">'."\n";
			$result .= '                                                      <h5 class="titleoneline">'."\n";
			$result .= '                                                        <a href="#">'."\n";
			$result .= '                                                            '.stripslashes($article['name'])."\n";
			$result .= '                                                        </a>'."\n";
			$result .= '                                                    </h5>'."\n";
			$result .= '                                                    <div class="reiting-box">'."\n";
			$result .= '                                                        <div>������� ������ <strong id="avgrating">'.sprintf("%.1f", $article['avgrating']).'</strong>'."\n";
			$result .= '                                                        <div id="raiting" class="reiting reit-'.sprintf("%d", $article['avgrating']).'">'."\n";

                        $result .= '<div id="raiting_blank"></div>'."\n";
                        $result .= '<div id="raiting_hover"></div>'."\n";
                        $result .= '<div id="raiting_votes"></div>'."\n";

                        $result .= '    </div>'."\n";


                        $result .= '<script>'."\n";
                        $result .= '    $(document).ready(function(){'."\n";
                        $result .= '        total_reiting = '.$article['avgrating'].'; // �������� ������'."\n";
                        $result .= '        count_reiting = '.$article['countrating'].'; // �������� ������'."\n";
                        $result .= '        id_arc = '.$article['id'].'; // id ������'."\n";
                        $result .= '        var star_widht = total_reiting*12.5 ;'."\n";

                        $result .= '        $(\'#raiting_votes\').width(star_widht);'."\n";

                        $result .= '                $(\'#raiting\').hover(function() {'."\n";
                        $result .= '                        $(\'#raiting_votes, #raiting_hover\').toggle();'."\n";
                        $result .= '                },'."\n";
                        $result .= '                function() {'."\n";
                        $result .= '                        $(\'#raiting_votes, #raiting_hover\').toggle();'."\n";
                        $result .= '                });'."\n";

                        $result .= '                var margin_doc = $("#raiting").offset();'."\n";
                        $result .= '                $("#raiting").mousemove(function(e){'."\n";

                        $result .= '                        var widht_votes = e.pageX - margin_doc.left;'."\n";
                        $result .= '                        if (widht_votes == 0) widht_votes =1 ;'."\n";
                        $result .= '                        user_votes = Math.ceil(widht_votes/12.5);'."\n";

                        $result .= '                        $(\'#raiting_hover\').width(user_votes*12.5);'."\n";
                        $result .= '                });'."\n";

                        $result .= '                // ��������'."\n";
                        $result .= '                $(\'#raiting\').click(function(){'."\n";
                        $result .= '                        $.get('."\n";
                        $result .= '                                "/class/rating.php",'."\n";
                        $result .= '                                {id_arc: id_arc, user_votes: user_votes},'."\n";
                        $result .= '                                function(data){'."\n";
                        $result .= '                                        if (data=="") {'."\n";
                        $result .= '                                             $.jGrowl("��� ����� �����", { sticky: true });'."\n";
                        $result .= '                                             $(\'#raiting_votes\').width((total_reiting*count_reiting + user_votes)*12.5/(count_reiting+1));'."\n";
                        $result .= '                                             $(\'#avgrating\').html(Math.round((total_reiting*count_reiting + user_votes)/(count_reiting+1)*10)/10);'."\n";
                        $result .= '                                             $(\'#countrating\').html(count_reiting+1);'."\n";
                        $result .= '                                        }'."\n";
                        $result .= '                                        else {'."\n";
                        $result .= '                                             $.jGrowl(data, { sticky: true });'."\n";
                        $result .= '                                        }'."\n";
                        $result .= '                                }'."\n";
                        $result .= '                        )'."\n";
                        $result .= '                });'."\n";
                        $result .= '});'."\n";
                        $result .= '</script>'."\n";



                        list($date, $time) = explode(" ", date("d.m.Y H:i", $article['datetime']));
                        if ($date == date("d.m.Y"))
                                $date = "�������";
                        else if ($date == date("d.m.Y", strtotime("NOW -1day")))
                                $date = "�����";

			$result .= '                                                        </div>'."\n";
			$result .= '                                                    </div>'."\n";
			$result .= '                                                    <p><span>'.$article['author'].'</a>: '.$time.' / '.$date.'</span><a href="/'.$urlBlog.'/'.$article['id'].'/print" class="print"></a><a href="/rss/blog/'.$theme.'" class="rss"></a></p>'."\n";
			$result .= '                                                    '.stripslashes($article['anons'])."\n";
			$result .= '                                                    </p>'."\n";
			$result .= '                                                    <p>'."\n";
			$result .= '                                                	<a href="/'.$urlBlog.'/'.$article['id'].'#addcomment">��������������</a>'."\n";
			$result .= '                                                    </p>'."\n";
			$result .= '                                                    <div class="info">'."\n";
                        if (!empty($article['tags']) and count($article['tags'])>0) {
                                foreach ($article['tags'] as $tag)
                                        $temp[] = '<a href="/clouds/'.$tag['mark'].'">'.$tag['name'].'</a>';
				$result .= '<p><strong>����: </strong>'.implode(", ", $temp).'</p>'."\n";
                                unset($temp);
                        }

			$result .= '                                                        <p>����� ������: <strong>'.$article['countAll'].'</strong></p>'."\n";

                        if (!empty($article['comments']['other']) and count($article['comments']['other'])>0) {
                                foreach ($article['comments']['other'] as $comment) {
                                        if (!isset($comments[$comment['id_user']]))
                                                $comments[$comment['id_user']] = $comment['author'];
                                }
                        }

                        if (!empty($comments) and count($comments)>0) {
                                foreach ($comments as $id_user=>$author)
                                        $temp[] = '<a href="/profile/'.$id_user.'">'.$author.'</a>';
				$result .= '                                                        <p><strong>��������� ���������:</strong> '.implode(", ", $temp).'</p>'."\n";
                                unset($temp);
                        }

			$result .= '                                                    </div>'."\n";

#                        if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth']==1) { // and $_SESSION['AUTH']['datetimepay']>time()) {
				$result .= '                                                    <div class="journal-img">'."\n";
				$result .= '                                                	<img src="/images/articles/'.$article['id'].'.jpg" width="575" height="283" alt="" title="" />'."\n";
				$result .= '                                                    </div>'."\n";
                                $result .= stripslashes($article['text']);


				$result .= '                                                  </div>'."\n";
				$result .= '                                                </div>'."\n";

	                        if (!empty($article['comments']['author']) and count($article['comments']['author'])>0) {
	                                $result .= "<p></p>".viewTemplate::templateViewArticleMyComments($article['comments']['author'], $article, 20);
	                        }

				$result .= '                                                <div class="comments-box">'."\n";
				$result .= '                                            	<h5 class="titleoneline">'."\n";
				$result .= '                                                        <span>����������� ('.$article['countAll'].')</span>'."\n";
				$result .= '                                                    </h5>'."\n";
				$result .= '                                                    <div>'."\n";

	                        if (!empty($article['comments']['other']) and count($article['comments']['other'])>0) {
	                                if (!empty($article['comments']['other']) and count($article['comments']['other'])>0) {
	                                        $result .= viewTemplate::templateViewArticleComments($article['comments']['other'], $article);
	                                }
#				    $result .= '                                                    </div>'."\n";
#			    	    $result .= '                                                    </div>'."\n";
#			    	    $result .= '                                                    </div>'."\n";
	                        }

				$result .= '                                                    </div>'."\n";

#			}
#                        else {
#                                $result .= '<div style="margin-left: 40px; color: #FF3333; font-weight: bold; text-align: center">����� ������� ������ ����� ������, ��� ���������� <a href="/reg">������������������</a></div>'."\n";
#                        }

			$result .= '<a name="addcomment"></a> '."\n";

                        if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth']==1) { // and $_SESSION['AUTH']['datetimepay'] > time()) {
                                $result .= '<script type="text/javascript" src="/class/js/tiny_mce/tiny_mce.js"></script>'."\n";
                                $result .= '<script>'."\n";
                                $result .= '    tinyMCE.init({'."\n";
                                $result .= '    // General options'."\n";
                                $result .= '    mode : "textareas",'."\n";
                                $result .= '    theme : "simple",'."\n";
                                $result .= '    plugins : "cyberim,safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",'."\n";
                                $result .= '    // Theme options'."\n";
                                $result .= '    theme_advanced_buttons1 : ",undo,redo,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,",'."\n";
				$result .= '    theme_advanced_buttons2 : ",cut,copy,paste,|,search,replace,|,bullist,numlist,|,sub,sup,",'."\n";
#                                $result .= '    theme_advanced_buttons1 : ",undo,redo,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,cut,copy,paste,|,search,replace,|,bullist,numlist,|,sub,sup,",'."\n";
#                                $result .= '    theme_advanced_buttons2 : ",outdent,indent,blockquote,|,link,unlink,anchor,image,media,cleanup,|,forecolor,backcolor,|,",'."\n";
#                                $result .= '    theme_advanced_buttons3 : "tablecontrols,|,fullscreen,code",'."\n";
                                $result .= '    theme_advanced_toolbar_location : "top",'."\n";
                                $result .= '    theme_advanced_toolbar_align : "left",'."\n";
                                $result .= '    theme_advanced_statusbar_location : "bottom",'."\n";
                                $result .= '    theme_advanced_resizing : true,'."\n";
                                $result .= '    indentation : "200pt",'."\n";
                                $result .= '    // Example content CSS (should be your site CSS)'."\n";
                                $result .= '    content_css : "css/content.css",'."\n";
                                $result .= '    // Drop lists for link/image/media/template dialogs'."\n";
                                $result .= '    template_external_list_url : "lists/template_list.js",'."\n";
                                $result .= '    external_link_list_url : "lists/link_list.js",'."\n";
                                $result .= '    external_image_list_url : "lists/image_list.js",'."\n";
                                $result .= '    media_external_list_url : "lists/media_list.js",'."\n";
                                $result .= '    height: 300,'."\n";
                                $result .= '    width: 450,'."\n";
                                $result .= '    language : "en",'."\n";
                                $result .= '    // Replace values for the template plugin'."\n";
                                $result .= '    template_replace_values : {'."\n";
                                $result .= '        username : "Some User",'."\n";
                                $result .= '        staffid : "991234"'."\n";
                                $result .= '    }'."\n";
                                $result .= '    });'."\n";
                                $result .= '</script> '."\n";

                                $result .= '            <form id="formComment" method="POST" enctype="multipart/form-data">'."\n";
                                $result .= '              <p align="center">'."\n";
                                $result .= '                <textarea class="articleText" id="commentText" name="commentText"></textarea>'."\n";
                                $result .= '                <input type="hidden" id="pid" name="pid" value="" />'."\n";
                                $result .= '                <input type="hidden" id="additionText" name="additionText" value="" />'."\n";
				$result .= '                                                        <a class="button button-dark mar-t10" onClick="addComment('.$article['id'].')">'."\n";
				$result .= '                                                            <span>�������� �����������</span>'."\n";
				$result .= '                                                        </a>'."\n";

                                $result .= '              </p>'."\n";
                                $result .= '              </form>'."\n";


				$result .= '                                                </div>'."\n";
				$result .= '                                                </div>'."\n";
				$result .= '                                                </div>'."\n";
				if ($countAll > 0) {
					$result .= '                                                <div class="pager">'."\n";
					$result .= '<div class="page">'."\n";

	                                if ($page != 0)
	                                        $result .= '<a href="/'.$urlBlog.'/'.$article['id'].'/page/'.($page-1).'">����������</a> '."\n";
	                                else
	                                        $result .= '<a>����������</a> '."\n";

	                                for ($i = 0; $i < $countAll; $i++)
						if ($i == $page) 
	                                            $result .= '<span>'.($i+1).'</span> '."\n";
						else
	                                            $result .= '<a href="/'.$urlBlog.'/'.$article['id'].'/page/'.$i.'">'.($i+1).'</a> '."\n";

	                                if ($page+1 < $countAll)
	                                        $result .= '<a href="/'.$urlBlog.'/'.$article['id'].'/page/'.($page+1).'">���������</a> '."\n";
	                                else
	                                        $result .= '<a>���������</a> '."\n";

#$result .=pager_num($all,$count, $page);
					$result .= '                                              </div>'."\n";
					$result .= '                                              </div>'."\n";
#					$result .= '                                              </div>'."\n";
#					$result .= '                                            </div>'."\n";
				}


                        }
                        else {
                                if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth']==1 and $_SESSION['AUTH']['datetimepay'] < time()) {
                                        $result .= '<div style="margin-left: 40px; color: #FF3333; font-weight: bold; text-align: center">�� �� ������ �������������� ���� �� �������� ������</div>';
                                }
                                else
                                        $result .= '<div style="margin-left: 40px; color: #FF3333; font-weight: bold; text-align: center">�� �� ������ �������������� ���� �� �� <a href="/account/">���������������</a> ��� �� <a href="/reg/">�����������������</a></div>';
				$result .= '                                            </div>'."\n";
#				$result .= '                                            </div>'."\n";

				$result .= '                                            </div>'."\n";
			$result .= '                                      </div>'."\n";

                        }

			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                            <div class="left-menu big-menu">'."\n";
			$result .= '                                <div class="shadowed-light mar-b10">'."\n";
			$result .= '                                    <div class="border">'."\n";
			$result .= '                                        <div class="inner-border playlist-left">'."\n";
			$result .= '                                    	<div class="playlist-left text-c">'."\n";
			if (!empty($listBanners) and count($listBanners)>0) {
				foreach ($listBanners as $banner) {
					$result .= '                        	<div class="mar-b10">'."\n";
					if ($banner['url'] != "") 
						$result .= '                            	<a href="'.$banner['url'].'" '.(strpos($banner['url'], "555hf.tv")!==false? "": "target=\"_blank\"").'><img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" /></a>'."\n";
					else
						$result .= '                            	<img src="/images/banners/'.$banner['id'].'.jpg" alt="" title="" />'."\n";
					$result .= '                                </div>'."\n";
				}
			}

			$result .= '                                            </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";
		    }
		    else {
			$result .= '��� ����� ������';
			$result .= "</div></div></div></div></div></div></div></div>";
		    }
/*
			$result .= '<div id="left3"> '."\n";
			$result .= '      <div id="big_box"><div id="big_box_top"></div> '."\n";

			if (!empty($article) and count($article)>0) {
#			$result .= '	<script type="text/javascript" src="/class/js/jquery.cookies.js"></script>'."\n";
			if (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth'] == 1 && $_SESSION['AUTH']['is_admin'] == "yes" and $article['is_moder']=="no") {
				$result .= "<script>\n";
				$result .= "function moderArticle(id) {\n";
				$result .= "        JsHttpRequest.query(\n";
				$result .= "                '/class/operation.php',\n";
				$result .= "                {\n";
				$result .= "                        'action'        : \"moderArticle\",\n";
				$result .= "                        'id'            : id\n";
				$result .= "                },\n";
				$result .= "                function(result, errors) {\n";
				$result .= "                        $.jGrowl('������ ��������������');\n";
				$result .= "                },\n";
				$result .= "                true\n";
				$result .= "        );\n";
				$result .= "}\n";
				$result .= "</script>\n";

				$result .= '<div align="center" style="color: #FF0000; font-weight: bold; font-size: 15px;">������ ������ �� ��������������. ��������������: <a onClick="moderArticle('.$article['id'].')">��</a>?</div>';
				$result .= '    <img src="/images/a_razdel.jpg" width="600" height="9" style="margin-left:10px;" /><br /> <br /> '."\n";
			}

			$result .= '		    <span class="zgl">'.$caption.'</span><br /><br /> '."\n";

			$result .= '    <img src="/images/a_razdel.jpg" width="600" height="9" style="margin-left:10px;" /><br /> <br /> '."\n";

			$result .= '    <div class="edit"> '."\n";
			if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth'] == 1 and $_SESSION['AUTH']['id'] == $article['id_user']) {
				$result .= '    <a href="/account/blog/edit/'.$article['id'].'"><img src="/images/edi.png" /></a> '."\n";
			}
			if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth'] == 1 and ($_SESSION['AUTH']['id'] == $article['id_user'] or $_SESSION['AUTH']['is_author']=="yes")) {
				$result .= '    <a onClick="authorComment('.$article['id'].');"><img src="/images/ico3.jpg" /></a> '."\n";
			}
			$result .= '    <a href="/'.$urlBlog.'/'.$article['id'].'/print"><img src="/images/ico2.jpg" /></a> '."\n";
                        if ($article['theme'] == "fish")
                                $theme = "fishing";
                        else if ($pagename[3] == "ohota")
                                $theme = "hunting";
                        else if ($pagename[3] == "waterfish")
                                $theme = "underwater";
			$result .= '    <a href="/rss/blog/'.$theme.'"><img src="/images/rss.jpg" /></a><br /> '."\n";


#			$result .= '    </div> '."\n";
#			$result .= '    <div style="margin-right:10px;">'."\n";
			$result .= '<div id="raiting_star">'."\n";
			$result .= '<div id="raiting">'."\n";
			$result .= '<div id="raiting_blank"></div>'."\n";
			$result .= '<div id="raiting_hover"></div>'."\n";
			$result .= '<div id="raiting_votes"></div>'."\n";
			$result .= '</div>'."\n";
			$result .= '<div id="raiting_info">  <img src="load.gif" /> </div>'."\n";
#			$result .= '</div>'."\n";

			$result .= '</div> '."\n";
			$result .= '    <div>������� ������ <span id="avgrating">'.sprintf("%.1f", $article['avgrating']).'</span></div> '."\n";
			$result .= '    <div style="color:#999;"><span id="countrating">'.$article['countrating'].'</span> �����(�)</div> '."\n";

			$result .= '</div> '."\n";

			$result .= '<script>'."\n";
			$result .= '    $(document).ready(function(){'."\n";
			$result .= '        total_reiting = '.$article['avgrating'].'; // �������� ������'."\n";
			$result .= '        count_reiting = '.$article['countrating'].'; // �������� ������'."\n";
			$result .= '        id_arc = '.$article['id'].'; // id ������'."\n";
			$result .= '        var star_widht = total_reiting*18 ;'."\n";

			$result .= '        $(\'#raiting_votes\').width(star_widht);'."\n";
			$result .= '        $(\'#raiting_info h5\').append(total_reiting);'."\n";

			$result .= '                $(\'#raiting\').hover(function() {'."\n";
			$result .= '                        $(\'#raiting_votes, #raiting_hover\').toggle();'."\n";
			$result .= '                },'."\n";
			$result .= '                function() {'."\n";
			$result .= '                        $(\'#raiting_votes, #raiting_hover\').toggle();'."\n";
			$result .= '                });'."\n";

			$result .= '                var margin_doc = $("#raiting").offset();'."\n";
			$result .= '                $("#raiting").mousemove(function(e){'."\n";
			$result .= '                        var widht_votes = e.pageX - margin_doc.left;'."\n";
			$result .= '                        if (widht_votes == 0) widht_votes =1 ;'."\n";
			$result .= '                        user_votes = Math.ceil(widht_votes/18);'."\n";
			$result .= '                        $(\'#raiting_hover\').width(user_votes*18);'."\n";
			$result .= '                });'."\n";

			$result .= '                // ��������'."\n";
			$result .= '                $(\'#raiting\').click(function(){'."\n";
#			$result .= '                        $(\'#raiting_info h5, #raiting_info img\').toggle();'."\n";
			$result .= '                        $.get('."\n";
			$result .= '                                "/class/rating.php",'."\n";
			$result .= '                                {id_arc: id_arc, user_votes: user_votes},'."\n";
			$result .= '                                function(data){'."\n";
			$result .= '                                        if (data=="") {'."\n";
			$result .= '                                             $.jGrowl("��� ����� �����", { sticky: true });'."\n";
			$result .= '                                             $(\'#raiting_votes\').width((total_reiting*count_reiting + user_votes)*18/(count_reiting+1));'."\n";
			$result .= '                                             $(\'#avgrating\').html(Math.round((total_reiting*count_reiting + user_votes)/(count_reiting+1)*10)/10);'."\n";
			$result .= '                                             $(\'#countrating\').html(count_reiting+1);'."\n";
#			$result .= '                                             $("#raiting").unbind();'."\n";
#			$result .= '                                             $(\'#raiting_hover\').hide();'."\n";
			$result .= '                                        }'."\n";
			$result .= '                                        else {'."\n";
			$result .= '                                             $.jGrowl(data, { sticky: true });'."\n";
			$result .= '                                        }'."\n";
			$result .= '                                }'."\n";
			$result .= '                        )'."\n";
			$result .= '                });'."\n";
			$result .= '});'."\n";
			$result .= '</script>'."\n";

			$result .= '    <h2 style="margin-left:10px;color:#000;font:22px Tahoma, Geneva, sans-serif;">'.stripslashes($article['name']).'</h2> '."\n";

			list($date, $time) = explode(" ", date("d.m.Y H:i", $article['datetime']));
			if ($date == date("d.m.Y"))
				$date = "�������";
			else if ($date == date("d.m.Y", strtotime("NOW -1day")))
				$date = "�����";

			$result .= '    <span class="snoska"><a href="/profile/'.$article['id'].'" style="color:#999;">'.$article['author'].'</a> :: '.$time.' / '.$date.'</span> '."\n";
			$result .= '   <br /><br /> '."\n";
			$result .= '    <div class="text2">'.stripslashes($article['anons']).'</div> '."\n";
			$result .= '<br /> '."\n";
			$result .= '<a href="/'.$urlBlog.'/'.$article['id'].'#addcomment"><span style="margin-left:15px; font-family: Tahoma, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#000;">��������������</span></a><br /><br /> '."\n";
			$result .= ' <div style="margin-left:15px;"> '."\n";
			if (!empty($article['tags']) and count($article['tags'])>0) {
				foreach ($article['tags'] as $tag)
					$temp[] = '<a href="/clouds/'.$tag['mark'].'">'.$tag['name'].'</a>';
				$result .= '<span style="color:#999;">����:</span> '.implode(", ", $temp).'<br /> '."\n";;
				unset($temp);
			}

			$result .= '<span style="color:#999;">����� ������:</span> <a href="/'.$urlBlog.'/'.$article['id'].'#comment">'.$article['countAll'].'</a><br /> '."\n";

			if (!empty($article['comments']['other']) and count($article['comments']['other'])>0) {
				foreach ($article['comments']['other'] as $comment) {
					if (!isset($comments[$comment['id_user']]))
						$comments[$comment['id_user']] = $comment['author'];
				}
			}

			if (!empty($comments) and count($comments)>0) {
				foreach ($comments as $id_user=>$author)
					$temp[] = '<a href="/profile/'.$id_user.'">'.$author.'</a>';
				$result .= '<span style="color:#999;">��������� ���������:</span> '.implode(", ", $temp).'<br /><br /> '."\n";
				unset($temp);
			}

			$result .= '<br /> '."\n";
			$result .= '</div> '."\n";


			if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth']==1) { // and $_SESSION['AUTH']['datetimepay']>time()) {
				$result .= ' <div style="position: relative"> '."\n";
				$result .= '<div style="position: absolute; left: 5px"><img src="/images/ramkablog.png"></div>';
				$result .= ' <img src="/images/articles/'.$article['id'].'.jpg" width="609" style="margin-left:5px;" /><br /> '."\n";
				$result .= ' </div> '."\n";
				$result .= ' <div class="text2"> '."\n";
				$result .= stripslashes($article['text']);
				$result .= ' </div> '."\n";
				$result .= ' <br /> '."\n";

				if (!empty($article['comments']['author']) and count($article['comments']['author'])>0) {
					$result .= viewTemplate::templateViewArticleMyComments($article['comments']['author'], $article, 20);
				}

				$result .= ' <br /> '."\n";
				$result .= '  <img src="/images/a_razdel.jpg" width="600" height="9" style="margin-left:10px;" /><br /> '."\n";
				$result .= ' <br /> '."\n";
				$result .= '<span style="margin-left:15px; font-family: Tahoma, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#000;">�����������</span><br /><br /> '."\n";
				$result .= '<table width="100%" border="0" cellspacing="0" cellpadding="0"> '."\n";
				$result .= '  <tr> '."\n";
				$result .= '    <td> '."\n";

				if (!empty($article['comments']['other']) and count($article['comments']['other'])>0) {
					if ($page != 0) 
						$result .= '<a href="/'.$urlBlog.'/'.$article['id'].'/page/'.($page-1).'" style="width:19px; height:17px; background-image:url(/images/a_left.jpg); margin-left:40px; display:block; margin-right:10px; float:left;"> </a> '."\n";
					else
						$result .= '<a style="width:19px; height:17px; background-image:url(/images/a_left.jpg); margin-left:40px; display:block; margin-right:10px; float:left;"> </a> '."\n";
					for ($i = 0; $i < $countAll; $i++) 
						$result .= '<a href="/'.$urlBlog.'/'.$article['id'].'/page/'.$i.'" class="num'.($i==$page? "_active": "").'">'.($i+1).'</a> '."\n";
					if ($page+1 < $countAll)
						$result .= '<a href="/'.$urlBlog.'/'.$article['id'].'/page/'.($page+1).'" style="width:19px; height:17px; background-image:url(/images/a_right.jpg); margin-left:10px; display:block; margin-right:40px; float:left"> </a> '."\n";
					else
						$result .= '<a style="width:19px; height:17px; background-image:url(/images/a_right.jpg); margin-left:10px; display:block; margin-right:40px; float:left"> </a> '."\n";
				}

				$result .= '    </td> '."\n";
				$result .= '    <td align="center" valign="top"><a href="#addcomment"><img src="/images/a_comm.jpg" width="185" height="39" /></a></td> '."\n";
				$result .= '  </tr> '."\n";
				$result .= '</table> '."\n";

			$result .= '<a name="comment"></a><BR/> '."\n";

			if (!empty($article['comments']['other']) and count($article['comments']['other'])>0) {
				if (!empty($article['comments']['other']) and count($article['comments']['other'])>0) {
					$result .= viewTemplate::templateViewArticleComments($article['comments']['other'], $article);
				}
			}

			}


			else {
				$result .= '<div style="margin-left: 40px; color: #FF3333; font-weight: bold; text-align: center">����� ������� ������ ����� ������, ��� ���������� <a href="/reg">������������������</a></div>'."\n";
			}

				$result .= ' <br /> '."\n";
				$result .= '  <img src="/images/a_razdel.jpg" width="600" height="9" style="margin-left:10px;" /><br /> '."\n";

				$result .= '<a name="addcomment"></a> '."\n";

			if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth']==1) { // and $_SESSION['AUTH']['datetimepay'] > time()) { 
				$result .= '<script type="text/javascript" src="/class/js/tiny_mce/tiny_mce.js"></script>'."\n";
				$result .= '<script>'."\n";
				$result .= '    tinyMCE.init({'."\n";
				$result .= '	// General options'."\n";
				$result .= '	mode : "textareas",'."\n";
				$result .= '	theme : "advanced",'."\n";
				$result .= '	plugins : "cyberim,safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",'."\n";
				$result .= '	// Theme options'."\n";
				$result .= '	theme_advanced_buttons1 : ",undo,redo,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,cut,copy,paste,|,search,replace,|,bullist,numlist,|,sub,sup,",'."\n";
				$result .= '	theme_advanced_buttons2 : ",outdent,indent,blockquote,|,link,unlink,anchor,image,media,cleanup,|,forecolor,backcolor,|,",'."\n";
				$result .= '	theme_advanced_buttons3 : "tablecontrols,|,fullscreen,code",'."\n";
				$result .= '	theme_advanced_toolbar_location : "top",'."\n";
				$result .= '	theme_advanced_toolbar_align : "left",'."\n";
				$result .= '	theme_advanced_statusbar_location : "bottom",'."\n";
				$result .= '	theme_advanced_resizing : true,'."\n";
				$result .= '	indentation : "200pt",'."\n";
				$result .= '	// Example content CSS (should be your site CSS)'."\n";
				$result .= '	content_css : "css/content.css",'."\n";
				$result .= '	// Drop lists for link/image/media/template dialogs'."\n";
				$result .= '	template_external_list_url : "lists/template_list.js",'."\n";
				$result .= '	external_link_list_url : "lists/link_list.js",'."\n";
				$result .= '	external_image_list_url : "lists/image_list.js",'."\n";
				$result .= '	media_external_list_url : "lists/media_list.js",'."\n";
				$result .= '	height: 300,'."\n";
				$result .= '	language : "en",'."\n";
				$result .= '	// Replace values for the template plugin'."\n";
				$result .= '	template_replace_values : {'."\n";
				$result .= '	    username : "Some User",'."\n";
				$result .= '	    staffid : "991234"'."\n";
				$result .= '	}'."\n";
				$result .= '    });'."\n";
				$result .= '</script> '."\n";

				$result .= '		<form id="formComment" method="POST" enctype="multipart/form-data">'."\n";
				$result .= '              <p align="center">�����������'."\n";
				$result .= '                <textarea class="articleText" id="commentText" name="commentText"></textarea>'."\n";
				$result .= '                <input type="hidden" id="pid" name="pid" value="" />'."\n";
				$result .= '                <input type="hidden" id="additionText" name="additionText" value="" />'."\n";
				$result .= '    	    <a onClick="addComment('.$article['id'].')"><img src="/images/a_comm.jpg" width="185" height="39" /></a></td> '."\n";
				$result .= '              </p>'."\n";
				$result .= '              </form>'."\n";
			}
			else {
				if (isset($_SESSION['AUTH']['auth']) and $_SESSION['AUTH']['auth']==1 and $_SESSION['AUTH']['datetimepay'] < time()) { 
					$result .= '<div style="margin-left: 40px; color: #FF3333; font-weight: bold; text-align: center">�� �� ������ �������������� ���� �� �������� ������</div>';
				}
				else
					$result .= '<div style="margin-left: 40px; color: #FF3333; font-weight: bold; text-align: center">�� �� ������ �������������� ���� �� �� <a href="/account/">���������������</a> ��� �� <a href="/reg/">�����������������</a></div>';
			}
			}
			else
				$result .= '<div align="center"><B>������ �� �������</B></div>';
 
		    
			$result .= '<div class="clear"></div> '."\n";
			$result .= '<div class="clear"></div> '."\n";
			$result .= '<div class="clear"></div> '."\n";
			$result .= '<div id="big_box_bottom"></div></div> '."\n";
			$result .= '    </div> '."\n";
			$result .= '    <div id="right_column"><div id="right_column_top"></div> '."\n";
			$result .= '	<div class="line"></div> '."\n";
			#$result .= '		<div class="count_video_new"><p>145</p></div> '."\n";
			$result .= '				<div class="count_video_new"><p><img style="margin-left:8px;" src="/images/count.png"></p></div>'."\n";
			$result .= '	<a href="/"><img src="/images/banner-web.gif" alt=""  width="250"/></a><BR/> '."\n";
			if (!isset($_SESSION['AUTH']['auth']) || (isset($_SESSION['AUTH']['auth']) && $_SESSION['AUTH']['auth'] !== 1)) {
				$result .= '	<div id="tv_buttons"> '."\n";
				$result .= '	    <a href="/account/"><img src="/images/voyti.png" alt="" /></a> '."\n";
				$result .= '	    <a href="/reg"><img src="/images/podlyuch.png" alt="" /></a> '."\n";
				$result .= '	    <div class="clear"></div> '."\n";
				$result .= '	</div> '."\n";
			}
			$result .= '	<div class="line"></div> '."\n";
			$result .= '	<a href="/viewtv" title="�������� ���� ��������� �� ����� ����������"><img src="/images/televizor.png" alt="" /></a> '."\n";
			$result .= '	<div class="line"></div> '."\n";
			$result .= '	<a href="/recommend" title="���������� �������"><img src="/images/rekomend.png" alt="" /></a> '."\n";
			$result .= '	<div class="line"></div> '."\n";
			$result .= '    <div id="right_column_bottom"></div></div> '."\n";
			$result .= '    <div class="clear"></div> '."\n";
			$result .= '    <div id="badbox" > '."\n";
 
			$result .= '</div><div class="clear"></div> '."\n";
			$result .= '    <div id="down"></div> '."\n";
			$result .= '    <div class="clear"></div> '."\n";
			$result .= '</div> '."\n";
*/

			return $result;
		}


		static function templateViewArticlePrint($prefix, $article, $countAll, $page, $caption, $urlBlog) {
			$result .= "";
			$result .= '	<script type="text/javascript" src="/class/js/jquery.cookies.js"></script>'."\n";

			$result .= '<div id="left3"> '."\n";
			$result .= '      <div id="big_box"><div id="big_box_top"></div> '."\n";
			$result .= '		    <span class="zgl">'.$caption.'</span><br /><br /> '."\n";
			$result .= '    <img src="/images/a_razdel.jpg" width="600" height="9" style="margin-left:10px;" /><br /> <br /> '."\n";
			$result .= '    <span class="edit"> '."\n";
			$result .= '    <div style="margin-left:8px;"> '."\n";
			$result .= '    <img src="/images/ico3.jpg" style="margin-left:10px;"/> '."\n";
			$result .= '    <img src="/images/ico2.jpg" style="margin-left:10px;"/> '."\n";
                        if ($article['theme'] == "fish")
                                $theme = "fishing";
                        else if ($pagename[3] == "ohota")
                                $theme = "hunting";
                        else if ($pagename[3] == "waterfish")
                                $theme = "underwater";
			$result .= '    <img src="/images/rss.jpg" style="margin-left:10px;"/><br /> '."\n";
			$result .= '    </div> '."\n";
			$result .= '    <div style="margin-right:10px;">'."\n";
			$result .= '<div id="raiting_star">'."\n";
			$result .= '<div id="raiting">'."\n";
			$result .= '<div id="raiting_blank"></div>'."\n";
			$result .= '<div id="raiting_hover"></div>'."\n";
			$result .= '<div id="raiting_votes"></div>'."\n";
			$result .= '</div>'."\n";
			$result .= '<div id="raiting_info">  <img src="load.gif" /> </div>'."\n";
			$result .= '</div>'."\n";
			$result .= '</div> '."\n";
			$result .= '    </span> '."\n";

			$result .= '    <span style="margin-left:10px; font-size:22px; color:#000; font-family:Tahoma, Geneva, sans-serif;">'.stripslashes($article['name']).'</span><br /> '."\n";

			$result .= '<script>'."\n";
			$result .= '    $(document).ready(function(){'."\n";
			$result .= '        total_reiting = '.$article['avgrating'].'; // �������� ������'."\n";
			$result .= '        count_reiting = '.$article['countrating'].'; // �������� ������'."\n";
			$result .= '        id_arc = '.$article['id'].'; // id ������'."\n";
			$result .= '        var star_widht = total_reiting*18 ;'."\n";

			$result .= '        $(\'#raiting_votes\').width(star_widht);'."\n";
			$result .= '        $(\'#raiting_info h5\').append(total_reiting);'."\n";


			$result .= '});'."\n";
			$result .= '</script>'."\n";


			list($date, $time) = explode(" ", date("d.m.Y H:i", $article['datetime']));
			if ($date == date("d.m.Y"))
				$date = "�������";
			else if ($date == date("d.m.Y", strtotime("NOW -1day")))
				$date = "�����";

			$result .= '    <span class="snoska"><a href="/profile/'.$article['id'].'" style="color:#999;">'.$article['author'].'</a> :: '.$time.' / '.$date.'</span> '."\n";
			$result .= '    <span style="float:right; margin-right:-89px; ">������� ������ '.sprintf("%.1f", $article['avgrating']).'</span><br /> '."\n";
			$result .= '    <span style="color:#999; float:right; margin-right:20px;">'.$article['countrating'].' �����(�)</span> '."\n";
			$result .= '   <br /><br /> '."\n";
			$result .= '    <div class="text2">'.stripslashes($article['anons']).'</div> '."\n";
			$result .= '<br /> '."\n";
			$result .= ' <div style="margin-left:15px;"> '."\n";
			if (!empty($article['tags']) and count($article['tags'])>0) {
				foreach ($article['tags'] as $tag)
					$temp[] = '<a href="/clouds/'.$tag['mark'].'">'.$tag['name'].'</a>';
				$result .= '<span style="color:#999;">����:</span> '.implode(", ", $temp).'<br /> '."\n";;
				unset($temp);
			}
			$result .= '<span style="color:#999;">����� ������:</span> <a href="/'.$urlBlog.'/'.$article['id'].'#comment">'.(!empty($article['comments']) && count($article['comments'])>0? count($article['comments']): 0).'</a><br /> '."\n";

			if (!empty($article['comments']['other']) and count($article['comments']['other'])>0) {
				foreach ($article['comments']['other'] as $comment) {
					if (!isset($comments[$comment['id_user']]))
						$comments[$comment['id_user']] = $comment['author'];
				}
			}

			if (!empty($comments) and count($comments)>0) {
				foreach ($comments as $id_user=>$author)
					$temp[] = '<a href="/profile/'.$id_user.'">'.$author.'</a>';
				$result .= '<span style="color:#999;">��������� ���������:</span> '.implode(", ", $temp).'<br /><br /> '."\n";
				unset($temp);
			}

			$result .= '<br /> '."\n";
			$result .= '</div> '."\n";

#			$result .= ' <img src="/images/articles/'.$article['id'].'.jpg" width="609" style="margin-left:5px;" /><br /> '."\n";

			if (!empty($article['comments']['other']) and count($article['comments']['other'])>0) {
				$result .= ' <div style="position: relative"> '."\n";
				$result .= '<div style="position: absolute; left: 5px"><img src="/images/ramkablog.png"></div>';
				$result .= ' <img src="/images/articles/'.$article['id'].'.jpg" width="609" style="margin-left:5px;" /><br /> '."\n";
				$result .= ' </div> '."\n";

				$result .= ' <div class="text2"> '."\n";
				$result .= stripslashes($article['text']);
				$result .= ' </div> '."\n";
				$result .= ' <br /> '."\n";

				if (!empty($article['comments']['author']) and count($article['comments']['author'])>0) {
					$result .= viewTemplate::templateViewArticleMyComments($article['comments']['author'], $article);
				}

				$result .= ' <br /> '."\n";
				$result .= '  <img src="/images/a_razdel.jpg" width="600" height="9" style="margin-left:10px;" /><br /> '."\n";
				$result .= ' <br /> '."\n";
				$result .= '<span style="margin-left:15px; font-family: Tahoma, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#000;">�����������</span><br /><br /> '."\n";
				$result .= '<table width="100%" border="0" cellspacing="0" cellpadding="0"> '."\n";
				$result .= '  <tr> '."\n";
				$result .= '    <td> '."\n";

				if (!empty($article['comments']['other']) and count($article['comments']['other'])>0) {
					if ($page != 0) 
						$result .= '<a href="/'.$urlBlog.'/'.$article['id'].'/page/'.($page-1).'" style="width:19px; height:17px; background-image:url(/images/a_left.jpg); margin-left:40px; display:block; margin-right:10px; float:left;"> </a> '."\n";
					else
						$result .= '<a style="width:19px; height:17px; background-image:url(/images/a_left.jpg); margin-left:40px; display:block; margin-right:10px; float:left;"> </a> '."\n";
					for ($i = 0; $i < $countAll; $i++) 
						$result .= '<a href="/'.$urlBlog.'/'.$article['id'].'/page/'.$i.'" class="num'.($i==$page? "_active": "").'">'.($i+1).'</a> '."\n";
					if ($page+1 < $countAll)
						$result .= '<a href="/'.$urlBlog.'/'.$article['id'].'/page/'.($page+1).'" style="width:19px; height:17px; background-image:url(/images/a_right.jpg); margin-left:10px; display:block; margin-right:40px; float:left"> </a> '."\n";
					else
						$result .= '<a style="width:19px; height:17px; background-image:url(/images/a_right.jpg); margin-left:10px; display:block; margin-right:40px; float:left"> </a> '."\n";
				}

				$result .= '    </td> '."\n";
				$result .= '  </tr> '."\n";
				$result .= '</table> '."\n";

				if (!empty($article['comments']['other']) and count($article['comments']['other'])>0) {
					$result .= viewTemplate::templateViewArticleComments($article['comments']['other'], $article);
				}
			}
			else {
				$result .= '<div style="margin-left: 40px; color: #FF3333; font-weight: bold; text-align: center">����� ������� ������ ����� ������, ��� ���������� <a href="/reg">������������������</a></div>'."\n";
			}

 
 
		    
			$result .= '<div class="clear"></div> '."\n";
			$result .= '<div class="clear"></div> '."\n";
			$result .= '<div class="clear"></div> '."\n";

			return $result;
		}

		static function templateClouds($clouds) {
			$result  = "";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                        <div class="shadowed-light static boxed">'."\n";
			$result .= '                            <div class="border">'."\n";
			$result .= '                                <div class="inner-border w-910">'."\n";
			$result .= '                            	<h3 class="title2line">'."\n";
			$result .= '                                        ������ �����'."\n";
			$result .= '                                    </h3>'."\n";
			foreach ($clouds as $key=>$cloud) {
				$result .= "<a href=\"/clouds/{$cloud['mark']}\" class=\"cloud{$cloud['size']}\">{$cloud['name']}</a> ";
			}
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}

		static function templateCloudsArticle($prefix, $articles, $countAll, $page, $caption, $urlBlog, $tag) {
			$result .= "";

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                        <div class="shadowed-light static boxed">'."\n";
			$result .= '                            <div class="border">'."\n";
			$result .= '                                <div class="inner-border w-910">'."\n";


			if (!empty($articles) and count($articles)>0) {
			$result .= '<div id="vkladki"> '."\n";
			$result .= '<div style="padding-top:2px; margin-left:15px;"> '."\n";
			$result .= '<div style="font-size: 12px; margin-top: 4px">��������� ������ �� ����: <B>'.$tag.'</B></div><div style="height: 8px"></div>';
#			$result .= '<a href="/'.$urlBlog.'/" class="vkladki'.($prefix == ""? "_active": "").'">���</a> '."\n";
#			$result .= '<a href="/'.$urlBlog.'/fishing" class="vkladki'.($prefix == "fishing"? "_active": "").'">�������</a> '."\n";
#			$result .= '<a href="/'.$urlBlog.'/hunting" class="vkladki'.($prefix == "hunting"? "_active": "").'">�����</a> '."\n";
#			$result .= '<a href="/'.$urlBlog.'/underwater" class="vkladki'.($prefix == "underwater"? "_active": "").'">��������� �����</a> '."\n";
			$result .= '</div> '."\n";
			$result .= '<div style="clear:both;"> </div> '."\n";
			$result .= '<br /> '."\n";
			$result .= '<div style="width:100%; height:17px;"> '."\n";

#			$result .= '<div style="width:200px; float:left;">��������� �����:<span style="font-family:Tahoma, Geneva, sans-serif; font-weight:bold; font-size:11px; color:#000;">����� �������</span> </div> '."\n";
#			$result .= '<a href="/rss/blog/'.$prefix.'" class="rss"> </a> '."\n";
			$result .= '</div> '."\n";
			$result .= '</div> '."\n";
			$result .= '<div style="clear:both;"> </div> '."\n";

			$result .= '<div class="clear"></div> '."\n";

				foreach ($articles as $article) {
					$result .= '<span class=""><a href="/blog/'.$article['id'].'" style="color:#8b2800; margin-left:10px; font-size:16px; font-family:Tahoma, Geneva, sans-serif;">'.stripslashes($article['name']).'</a></span><br /> '."\n";

					list($date, $time) = explode(" ", date("d.m.Y H:i", $article['datetime']));
					if ($date == date("d.m.Y"))
						$date = "�������";
					else if ($date == date("d.m.Y", strtotime("NOW -1day")))
						$date = "�����";

					$result .= '<span class="snoska"> '.$article['author'].' :: '.$time.' / '.$date.' </span><br /><br /> '."\n";

					$result .= ' <div style="position: relative"> '."\n";
					$result .= '<div style="position: absolute; left: 5px"><img src="/images/ramkablog.png"></div>';
					$result .= ' <img src="/images/articles/'.$article['id'].'.jpg" width="609" style="margin-left:5px;" /><br /> '."\n";
					$result .= ' </div> '."\n";

#					$result .= '<img src="/images/articles/'.$article['id'].'.jpg" width="609" style="margin-left:5px;" /> '."\n";
					$result .= '<div class="text">'.stripslashes($article['anons']).'</div> '."\n";
					$result .= '<br /> '."\n";
					$result .= '<span style="margin-left:15px; font-family: Tahoma, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#000;"><a href="/blog/'.$article['id'].'#addcomment">��������������</a></span><br /><br /> '."\n";
					$result .= ' <div style="margin-left:15px;"> '."\n";
					if (!empty($article['tags']) and count($article['tags'])>0) {
						foreach ($article['tags'] as $tag)
							$temp[] = '<a href="/clouds/'.$tag['mark'].'">'.$tag['name'].'</a>';
						$result .= '<span style="color:#999;">����:</span> '.implode(", ", $temp).'<br /> '."\n";;
						unset($temp);
					}

					$sumRepl = 0;
					if (!empty($article['comments']) and count($article['comments'])>0) {
						foreach ($article['comments'] as $comment) 
							$sumRepl += $comment['total'];
					}
					$result .= '<span style="color:#999;">����� ������:</span> <a href="/blog/'.$article['id'].'#comment">'.$sumRepl.'</a><br /> '."\n";
					if (!empty($article['comments']) and count($article['comments'])>0) {
						foreach ($article['comments'] as $comment)
							$temp[] = '<a href="/profile/'.$comment['id_user'].'">'.$comment['author'].'</a>';
						$result .= '<span style="color:#999;">��������� ���������:</span> '.implode(", ", $temp).'<br /><br /> '."\n";
						unset($temp);
					}
					$result .= ' </div> '."\n";
					$result .= ' <span style="margin-left:15px;"><img src="/images/a_razdel.jpg" width="600" height="9" /></span><br /> '."\n";
				}
			}
			else
				$result .= '<div align="center"><BR />��� ������</div>';


			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";


			return $result;
		}


		static function templateLesson($rowset) {
			$result  = "";

			$cats = array ("1"=>"�������", "2"=>"��������� �����", "3"=>"�����", "4"=>"������");
			$catsClass = array ("1"=>"one", "2"=>"two", "3"=>"three", "4"=>"four");

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                        <div class="shadowed-light lessons boxed">'."\n";
			$result .= '                            <div class="border">'."\n";
			$result .= '                                <div class="inner-border">'."\n";
			$result .= '                            	<h3 class="title2line">'."\n";
			$result .= '                                        ������ ����'."\n";
			$result .= '                                    </h3>'."\n";
			$result .= '				    <div>'."\n";
			$result .= '                                        <div class="boxed equal-columns columns-4">'."\n";
			$result .= '                                            <div class="right-back">'."\n";
			$result .= '                                                <div class="content-back">'."\n";
			$result .= '                                                    <div class="left-back box-main-rating">'."\n";

			foreach ($cats as $key=>$cat) {
				$result .= '                                                        <div class="'.$catsClass[$key].'-bar">'."\n";
				$result .= '                                                            <div class="shadowed-light">'."\n";
				$result .= '                                                                <div class="border">'."\n";
				$result .= '                                                                <div class="inner-border">'."\n";
				$result .= '                                                                  <h3 class="title2line">'."\n";
				$result .= '                                                                      '.$cats[$key]."\n";
				$result .= '                                                                  </h3>'."\n";
				$result .= '                                                                  <div>'."\n";
				if (!empty($rowset[$key]) and count($rowset[$key])>0) {
					foreach ($rowset[$key] as $row) {
						$result .= '                                                                    <a href="/lesson/'.$row['id'].'" class="boxed">'.stripslashes($row['name']).'</a>'."\n";
					}
				}
				else
					$result .= '��� ������';
				$result .= '                                                                  </div>'."\n";
				$result .= '                                                                </div>'."\n";
				$result .= '                                                            </div>'."\n";
				$result .= '                                                           </div>'."\n";
				$result .= '                                                        </div>'."\n";
			}

			$result .= '                                                    </div>'."\n";
			$result .= '                                                </div>'."\n";
			$result .= '                                            </div>'."\n";
			$result .= '                                        </div>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}

		static function templateLessonInfo($lesson) {
			$result  = "";

                        $result .= '             <div class="main-back">'."\n";
                        $result .= '                    <div class="main-container">'."\n";
                        $result .= '                        <div class="shadowed-light static boxed">'."\n";
                        $result .= '                            <div class="border">'."\n";
                        $result .= '                                <div class="inner-border w-910">'."\n";
                        $result .= '                                    <h3 class="title2line">'."\n";
                        $result .= '                                        '.stripslashes($lesson['name'])."\n";
                        $result .= '                                    </h3>'."\n";
                        $result .= stripslashes($lesson['text']);
                        $result .= '                                </div>'."\n";
                        $result .= '                            </div>'."\n";
                        $result .= '                        </div>'."\n";
                        $result .= '                    </div>'."\n";
                        $result .= '                </div>'."\n";


			return $result;
		}


		static function templateProgrammGuide($programm, $date) {
			$result  = "";

			$dates		= array("monday"=>"��", "tuesday"=>"��", "wednesday"=>"��", "thursday"=>"��", "friday"=>"��", "saturday"=>"��", "sunday"=>"��");
			$dateKey	= array("1"=>"monday", "2"=>"tuesday", "3"=>"wednesday", "4"=>"thursday", "5"=>"friday", "6"=>"saturday", "7"=>"sunday");

			$result .= '             <div class="main-back">'."\n";
			$result .= '            	<div class="main-container">'."\n";
			$result .= '                        <div class="shadowed-light program-table boxed mar-b10">'."\n";
			$result .= '                            <div class="border">'."\n";
			$result .= '                                <div class="inner-border">'."\n";
			$result .= '                            	<h3 class="title2line">'."\n";
			$result .= '                                        ��������� �������'."\n";
			$result .= '                                    </h3>'."\n";
			$result .= '                                    <div class="tabs-bar">'."\n";
			$result .= '                                        <ul class="tabs-video boxed">'."\n";

			$beginWeek = date("d.m.Y", strtotime("NOW -".(date("N")-1)."days"));
#echo "<BR><BR>".$beginWeek;
#exit;
			$i=0;
			foreach ($dates as $key=>$d) {
				$result .= '                                            <li>'."\n";
				$result .= '                                                <a href="/programguide/'.date("d.m.Y", strtotime($beginWeek." +{$i}days")).'" class="corner-top-5 round border-light'.($key == $dateKey[date("N", strtotime($date))]? " select": "").'">'."\n";
				$result .= '                                                    <i class="tl"></i><i class="tr"></i>'.$d.', '.date("d", strtotime($beginWeek." +{$i}days"))."\n";
				$result .= '                                                </a>'."\n";
				$result .= '                                            </li>'."\n";

				$i++;
			}
			$result .= '                                        </ul>'."\n";
			$result .= '                                    </div>'."\n";
			$result .= '                                    '."\n";
			$result .= '        			    <div class="head-program">��������� ������� �� '.$date.'</div>'."\n";
			$result .= '                                    <table width="100%" border="1" cellspacing="5">'."\n";

			if (!empty($programm) and count($programm)>0) {
				foreach ($programm as $p) {
					$result .= '                                      <tr>'."\n";
					$result .= '                                        <td class="text-c">'.date("H:i", $p['datetime_begin']).'</td>'."\n";
					$result .= '                                        <td>'.stripslashes("<B>".$p['name']."</B><BR/>".$p['programmname']).'</td>'."\n";
					$result .= '                                      </tr>'."\n";
				}
			}
			else {
				$result .= '                    <tr>'."\n";
				$result .= '                        <td class="name" colspan="2" align="center"><BR/>��������� �� ���������</td>'."\n";
				$result .= '                    </tr>'."\n";
			}

			$result .= '                                    </table>'."\n";

			$result .= '                                </div>'."\n";
			$result .= '                            </div>'."\n";
			$result .= '                        </div>'."\n";
			$result .= '            	</div>'."\n";
			$result .= '                </div>'."\n";

			return $result;
		}

	}


	

?>