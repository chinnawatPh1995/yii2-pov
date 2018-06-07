<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use yii\bootstrap\Carousel;
?>
    <?php
        echo Carousel::widget([
            'items' => [
                // the item contains only the image
                '<img src="http://www.hdwallpaperspulse.com/wp-content/uploads/2015/07/08/darkness-full-hd-wallpaper.jpeg"/>',
                // equivalent to the above
                '<img src="http://www.tokkoro.com/picsup/429686-mortal-kombat-wallpaper-full-hd.jpg"/>',
                // the item contains both the image and the caption
                '<img src="http://hdwbay.com/wp-content/uploads/2018/05/top-hd-Full-HD-Wallpaper.jpg"/>',
            ]
        ]);
    ?>
    <div class="container">
        <div class="masonry">
            <div class="item"><img src="https://lh3.googleusercontent.com/Z6QBh_jHNXVbEQyRz9IJXRbS7zMLsmQSp_ntGN4FWpkNANiSlhJV06jis4JX9o4PpSTednt2-d4lTMFuQGLWANNAVvSiyQSfVdnqfP7jed120PbZ_q4yz_HhGhq1vZhHeL4bbcD4iCZJgRvNonGTFtALG7jVDEn2IKnc57_OA57l7odhvBbe25ycU1qWPn-fj1uHFEPwPGEJQz6_5PWWmawnZKpR6Nufi1EKMglC9uCLnhvs8apRWd7xMg3oDcsigdssiBsm35FyhwY8Cl4l9q3qtWbRgMZGD0sOI8-IAz62hY7kkb38ajKzTka249n4hdQ8zqi_3-NWKPi2hsayKP0TaMOirUo63lGwZhw0B-IhmzaQOj4y41fBXN7m9hDk4kXPUdkvA8HXIrJdQL2vFs05ix_JMc_aw62TSWLGCc6BJX3GMCZaHJoFwULNGP826Xwi8sduK592NUcWewG4ew57uGvNYrAiha-4_ogKTMpXYWj1saZzmA-KWNsyT-6KQXH3MG0ZhCroU2yy469Gg-23l0oSxHNpyhYjnSgm5Yw0xZxXgUnO9EGKzIGCHIJPIDOvJOW9wmcesQcNayev3zGxan44Qr9mGQ1QtqWWV1b9UaAB=s1200z"></div>
        </div>
    </div>


