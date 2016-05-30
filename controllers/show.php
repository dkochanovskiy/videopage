<?php
error_reporting('E_All');
$title = 'Просмотр';
require_once('../config/db.php');
require_once('../models/rollers.php');
require_once('../views/layout/header.php');
?>
    <div class="col-md-10">
        <div class="show">
                <div id="wrapper">
                    <div class="px-video-container" id="myvid">
                        <div class="px-video-img-captions-container">
                            <video width="640" height="360" controls>
                                <source src="../src/mp4/<?php if(isset($_GET['name'])) {echo $_GET['name']; } ?>" type='video/mp4;  codecs="avc1.42E01E, mp4a.40.2"' />
                                <source src="../src/mp4/<?php if(isset($_GET['name'])) {echo $_GET['name']; } ?>" type='video/webm; codecs="vp8, vorbis"'>
                                <source src="../src/mp4/<?php if(isset($_GET['name'])) {echo $_GET['name']; } ?>" type='video/ogg; codecs="theora, vorbis"'>
                            </video>
                        </div>
                        <div class="px-video-controls"></div>
                    </div>
                </div>
            </div>
            <div class="full_description">
                <?php
                    if(isset($_GET['name']))
                    {
                        $str = $_GET['name'];
                        $str = substr($str,0,-4);
                        echo get_full_description($str);
                    }
                ?>
            </div>
        </div>
<?php
require_once('../views/layout/footer.php');
?>