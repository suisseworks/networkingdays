
<div id="breadcrumbs">
    <div class="breadcrumb-button blue" onclick="window.location.href='<?php echo Yii::app()->request->baseUrl; ?>' "> <span class="breadcrumb-label"><i class="icon-home"></i> Inicio</span> <span class="breadcrumb-arrow"><span></span></span> </div>

    <?php
    foreach($this->links as $crumb) {
        if(isset($crumb[1])) {

            echo '<div class="breadcrumb-button" onclick="window.location.href=' . "'" . Yii::app()->request->baseUrl . $crumb[1]  . "'" . '"> <span class="breadcrumb-label"> <i class="icon-edit"></i> ' . $crumb[0] . '</span> <span class="breadcrumb-arrow"><span></span></span> </div>';

        } else {
            echo '<div class="breadcrumb-button"> <span class="breadcrumb-label"> <i class="icon-edit"></i> ' . $crumb[0] . '</span> <span class="breadcrumb-arrow"><span></span></span> </div>';
        }
        if(next($this->links)) {
            echo $this->delimiter;
        }
    }
    ?>

<!--    <div class="breadcrumb-button"> <span class="breadcrumb-label"> <i class="icon-edit"></i> Form Elements </span> <span class="breadcrumb-arrow"><span></span></span> </div>-->
</div>


