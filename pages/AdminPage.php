<?php 
$xMPPicture = get_option('xMPPic');
$xMPPictureB = substr($xMPPicture,0,1);
$xMPSize = substr($xMPPicture,2,1);
?>
<Style type="text/css">
.xMpMain{
float:left;
display:inline;
overflow:hidden;
width:640px;
}
.xMPDiv{
float:left;
display:inline;
overflow:hidden;
width:160px;
height:200px;
text-align:center;
}
.xMPDivB{
float:left;
display:inline;
overflow:hidden;
width: 640px;
}
</style>
<form method="post" action="">
<h2>Mood Personalizer</h2>

<p><h4>Current Emoticon: </h4>
<img src="<?php bloginfo('url'); ?>/wp-content/plugins/mood-personalizer/images/<?php echo get_option('xMPPic');?>" alt="Mood Personalizer mood image"/>
</p>

<p><h4>Select A Size:</h4>
<input type="radio" name="xMPPictureSize" value="1" <?php if($xMPSize=="1"){echo "checked";}?> /> Small </br>
<input type="radio" name="xMPPictureSize" value="2" <?php if($xMPSize=="2"){echo "checked";}?> /> Medium </br>
<input type="radio" name="xMPPictureSize" value="3" <?php if($xMPSize=="3"){echo "checked";}?> /> Big </br>
<input type="radio" name="xMPPictureSize" value="4" <?php if($xMPSize=="4"){echo "checked";}?> /> Very Big </br>
</p>
<p><h4>Choose Another Mood:</h4>
<div class="xMpMain">
<div class="xMPDiv">
<img src="<?php bloginfo('url'); ?>/wp-content/plugins/mood-personalizer/images/1.2.jpg" alt="Mood Personalizer mood image" align="none"/>
<input type="radio" name="xMPPic" value="1.2.jpg" label="aaa" <?php if($xMPPictureB=="1"){echo "checked";}?> /> In Love
</div>
<div class="xMPDiv">
<img src="<?php bloginfo('url'); ?>/wp-content/plugins/mood-personalizer/images/2.2.jpg" alt="Mood Personalizer mood image"/>
<input type="radio" name="xMPPic" value="2.2.jpg" <?php if($xMPPictureB=="2"){echo "checked";}?> /> Evil
</div>
<div class="xMPDiv">
<img src="<?php bloginfo('url'); ?>/wp-content/plugins/mood-personalizer/images/3.2.jpg" alt="Mood Personalizer mood image"/>
<input type="radio" name="xMPPic" value="3.2.jpg" <?php if($xMPPictureB=="3"){echo "checked";}?> /> Sleepy
</div>
<div class="xMPDiv">
<img src="<?php bloginfo('url'); ?>/wp-content/plugins/mood-personalizer/images/4.2.jpg" alt="Mood Personalizer mood image"/>
<input type="radio" name="xMPPic" value="4.2.jpg" <?php if($xMPPictureB=="4"){echo "checked";}?> /> Stupid
</div>
<div class="xMPDiv">
<img src="<?php bloginfo('url'); ?>/wp-content/plugins/mood-personalizer/images/5.2.jpg" alt="Mood Personalizer mood image"/>
<input type="radio" name="xMPPic" value="5.2.jpg" <?php if($xMPPictureB=="5"){echo "checked";}?> /> Smiling
</div>
<div class="xMPDiv">
<img src="<?php bloginfo('url'); ?>/wp-content/plugins/mood-personalizer/images/6.2.jpg" alt="Mood Personalizer mood image"/>
<input type="radio" name="xMPPic" value="6.2.jpg" <?php if($xMPPictureB=="6"){echo "checked";}?> /> Furious
</div>
<div class="xMPDiv">
<img src="<?php bloginfo('url'); ?>/wp-content/plugins/mood-personalizer/images/7.2.jpg" alt="Mood Personalizer mood image"/>
<input type="radio" name="xMPPic" value="7.2.jpg" <?php if($xMPPictureB=="7"){echo "checked";}?> /> Happy
</div>
<div class="xMPDiv">
<img src="<?php bloginfo('url'); ?>/wp-content/plugins/mood-personalizer/images/8.2.jpg" alt="Mood Personalizer mood image"/>
<input type="radio" name="xMPPic" value="8.2.jpg" <?php if($xMPPictureB=="8"){echo "checked";}?> /> Scared
</div>
<div class="xMPDiv">
<img src="<?php bloginfo('url'); ?>/wp-content/plugins/mood-personalizer/images/9.2.jpg" alt="Mood Personalizer mood image"/>
<input type="radio" name="xMPPic" value="9.2.jpg" <?php if($xMPPictureB=="9"){echo "checked";}?> /> Bored
</div>
<div class="xMPDiv">
<img src="<?php bloginfo('url'); ?>/wp-content/plugins/mood-personalizer/images/10.2.jpg" alt="Mood Personalizer mood image"/>
<input type="radio" name="xMPPic" value="10.2.jpg" <?php if($xMPPictureB=="10"){echo "checked";}?> /> Crying
</div>
<div class="xMPDiv">
<img src="<?php bloginfo('url'); ?>/wp-content/plugins/mood-personalizer/images/11.2.jpg" alt="Mood Personalizer mood image"/>
<input type="radio" name="xMPPic" value="11.2.jpg" <?php if($xMPPictureB=="11"){echo "checked";}?> /> Misterious
</div>
<div class="xMPDiv">
<img src="<?php bloginfo('url'); ?>/wp-content/plugins/mood-personalizer/images/12.2.jpg" alt="Mood Personalizer mood image"/>
<input type="radio" name="xMPPic" value="12.2.jpg" <?php if($xMPPictureB=="12"){echo "checked";}?> /> Surprized
</div>
</div>
</p>
<p>
<div class="xMPDivB">
<input type="hidden" name="xMPHidd" value="xMPHidd" />
<input type="submit" value="Update"/>
</div>
</p>
</form>