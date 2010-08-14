<?php
use_helper('Video');
use_javascript("/sfVideoPlugin/js/flowplayer-3.1.4.min.js");
include_javascripts();
if (!isset($player)) $player = 'player';
?>

<div>

    <!-- this A tag is where your Flowplayer will be placed. it can be anywhere -->
    <a href="<?php echo video_path('flv'.'/'.$file) ?>"
      style="display:block;width:<?php echo sfConfig::get('app_sfvideo_width')?>;height:<?php echo sfConfig::get('app_sfvideo_height')?>"
      id="<?php echo $player ?>">
    </a>
    <!-- this will install flowplayer inside previous A- tag. -->

    <script>
        autoplay = "<?php echo sfConfig::get('app_sfvideo_autoplay') ?>";
        autobuffering = "<?php echo sfConfig::get('app_sfvideo_autoplay') ?>";

        //Configuration
        autoplay = (autoplay == "on") ? true : false ;
        autobuffering = (autobuffering == "on") ? true : false;

        flowplayer("<?php echo $player ?>", "<?php echo video_path('swf/flowplayer-3.1.5.swf') ?>", {
          clip: { autoPlay: autoplay, autoBuffering: autobuffering }
        });
    </script>
</div>
