<?php
error_reporting('E_All');
$title = 'Видеоархив НТМ';
require_once('../config/db.php');
require_once('../models/rollers.php');
require_once('../views/layout/header.php');
?>
<div class="col-md-10">
    <div class="row">
        <?php
            $amount = get_amout_lines();
            for($j = 0 ; $j < $amount; $j++)
            {
                $name = get_name_roller();
                $brief_description = get_brief_description();
                ?>
                <div class="col-md-6">
                    <div class="main-img">
                        <a href="show.php?title=Просмотр&name=<?php
                            echo $name[$j];
                        ?>.mp4">
                            <img src="../src/jpg/<?php
                                if(file_exists('../src/jpg/'.$name[$j].'.jpg'))
                                {
                                    echo $name[$j];
                                }
                                else
                                {
                                    echo 'preview';
                                }
                            ?>.jpg"/>
                        </a>
                        <div class="description">
                            <?php
                                echo $brief_description[$j];
                            ?>
                        </div>
                    </div>
                </div>
            <?php
            }
        ?>
    </div>
</div>
<?php
require_once('../views/layout/footer.php');
?>