	<div id="page">
		
		<h1>Minimal Flowplayer setup</h1>
	
		<p>View commented source code to get familiar with Flowplayer installation.</p>
		
		<!-- this A tag is where your Flowplayer will be placed. it can be anywhere -->
		<a href="<?php echo $link ?>" style="display:block;width:520px;height:330px" id="player">
		</a>
	
		<!-- this will install flowplayer inside previous A- tag. -->
		<script>
			flowplayer("player", "/sfVideoPlugin/swf/flowplayer-3.1.5.swf");
		</script>

		<p>		
			If you are running these examples <strong>locally</strong> and not on some webserver you must edit your 
			<a href="http://www.macromedia.com/support/documentation/en/flashplayer/help/settings_manager04.html">
				Flash security settings</a>. 
		</p>

	</div>
	
	
</body></html>