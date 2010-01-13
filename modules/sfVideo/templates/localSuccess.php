<?php use_helper('Video') ?>

<div id="page">

    <h1>sfVideoPlugin example - powered by Flowplayer</h1>

    <p>View commented source code to get familiar with Flowplayer installation.</p>

    <!-- this A tag is where your Flowplayer will be placed. it can be anywhere -->
    <a href="<?php echo video_path('flv'.'/'.$file) ?>" style="display:block;width:520px;height:330px" id="player">
    </a>

    <!-- this will install flowplayer inside previous A- tag. -->
    <script>
        flowplayer("player", "<?php echo video_path('swf/flowplayer-3.1.5.swf') ?>");
    </script>

</div>
