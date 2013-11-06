	<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>In Kazakhstan</title>
        <meta name="description" content="Kazakhstan in Instagram"/>
        <meta name="keywords" content="kazakhstan, instagram, insta, казахстан, Актау, Алматы, Астана, инстаграм, реальное время "/>
        <meta name="author" content="Nikita Bayev"/>
        <link rel="shortcut icon" href="/favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/script.css?42"/>
		<script type='text/javascript' src='js/jquery.min.js'></script>

	</head>
	<body>
		<header  data-spy="affix" data-offset-top="1">
			<div class="menu">
				<ul> 
				    <li><h1><a class="hide" style="height:20px;">Kazakhstan in Instagram</a></h1>
				        <ul>
					            <li><a href="/" title="">Kazakhstan</a></li>
				                <li><a href="/aktau" title="">Aktau</a></li>
				                <li><a href="/aktobe" title="">Aktobe</a></li>
				                <li><a href="/almaty" title="">Almaty</a></li>
				                <li><a href="/astana" title="">Astana</a></li>
				                <li><a href="/atyrau" title="">Atyrau</a></li>
				                <li><a href="/kokshetau" title="">Kokshetau</a></li>
				                <li><a href="/karagandy" title="">Karagandy</a></li>
				                <li><a href="/kostanay" title="">Kostanay</a></li>
				                <li><a href="/oskemen" title="">Oskemen</a></li>
				                <li><a href="/pavlodar" title="">Pavlodar</a></li>
				                <li><a href="/semey" title="">Semey</a></li>
				                <li><a href="/taraz" title="">Taraz</a></li>
				                <li><a href="/oral" title="">Oral</a></li>
				                <li><a href="/shymkent" title="">Shymkent</a></li>
				                <li><a href="/wtf">W T F?</a></li>
				            </ul>
				    </li>
			   </ul> 
			</div>

				<div class="social">
						<span style="top:-3px;"><div class="fb-like" data-href="http://insta.drugoi.kz" data-send="false" data-layout="button_count" data-width="110" data-show-faces="false"></div></span>						
						<span style="width:80px !important;"><a href="http://twitter.com/share" class="twitter-share-button" data-lang="en" data-url="http://insta.drugoi.kz" data-text="Kazakhstan in Instagram" data-related="bayevn" data-lang="en" target="_blank">Tweet</a></span>
						<span style="width:62px;"><div class="g-plusone" data-href="http://insta.drugoi.kz" data-size="medium"></div></span>
						<script>
							window.vkAsyncInit = function() {
							  VK.init({apiId: 3260133, onlyWidgets: true});
							  VK.Widgets.Like('vk_like', {pageUrl: 'http://insta.drugoi.kz', type: 'mini'});
							}
						</script>
						<span><div id="vk_like"></div></span>
				</div>
					
		</header>
        
        <div id="insta" class="container"></div>
        <div id="loadmore" class="loadmore">Load more photos</div>
        
        <script src="js/spin.min.js"></script>
        <script src="js/jquery.instagram.js"></script>

        <script>
			function show()
			{$.ajax({url:"insta.html",cache:false,success:function(html){$("#insta").html(html);}});}
			$(document).ready(function(){show();});
		</script>
		<script src="js/social.min.js"></script>
		<script src="js/affix.js"></script>
	</body>
</html>
