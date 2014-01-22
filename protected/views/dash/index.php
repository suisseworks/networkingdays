<?php

$this->breadcrumbs=array(
    array('Dashboard', null)
    //array('Perfil', "afiliado/perfil")
);
?>


<script>
    setActiveMenu('#sidebar-menu-dashboard');

    $(document).ready(function()
    {

    $('#headerbienvenida').removeClass('hidden');

    })

</script>





<div class="col-md-3">
    <div class="box">
        <div class="box-header"> <span class="title">Notificaciones</span>
            <ul class="box-toolbar">
                <li><span class="label label-blue"></span></li>
            </ul>
        </div>
        <div class="box-content scrollable" style="height: 552px; overflow-y: auto">

            <!-- find me in partials/news_with_icons -->

         <?php foreach( array_reverse($afiliado->mensajesRecibidos) as $mensaje) { ?>

            <div class="box-section news with-icons">
                <div class="avatar blue"><i class="icon-ok icon-2x"></i></div>
                <div class="news-time"> <span><?php echo date("d",strtotime($mensaje['fecha'])); ?></span>
                                        <?php echo Yii::app()->myhelper->nombreMes($mensaje['fecha']);    ?> </div>
                <div class="news-content">
                    <div class="news-title"><a href="#"><?php echo $mensaje['asunto'];?></a></div>
                    <div class="news-text">
                        <?php echo $mensaje['mensaje'];?>
                    </div>
                </div>
            </div>

            <?php } ?>

           <!--
            <div class="box-section news with-icons">
                <div class="avatar green"><i class="icon-lightbulb icon-2x"></i></div>
                <div class="news-time"> <span>11</span> feb </div>
                <div class="news-content">
                    <div class="news-title"><a href="#">Ruby on Rails 4.0</a></div>
                    <div class="news-text"> Rails 4.0 is still unfinished, but it is shaping up to become a great release ... </div>
                </div>
            </div>
            <div class="box-section news with-icons">
                <div class="avatar purple"><i class="icon-mobile-phone icon-2x"></i></div>
                <div class="news-time"> <span>04</span> mar </div>
                <div class="news-content">
                    <div class="news-title"><a href="#">All about SCSS</a></div>
                    <div class="news-text"> Sass makes CSS fun again. Sass is an extension of CSS3, adding nested rules ... </div>
                </div>
            </div>
            <div class="box-section news with-icons">
                <div class="avatar cyan"><i class="icon-ok icon-2x"></i></div>
                <div class="news-time"> <span>22</span> dec </div>
                <div class="news-content">
                    <div class="news-title"><a href="#">Twitter Bootstrap v3.0 is coming!</a></div>
                    <div class="news-text"> With 2.2.2 out the door, our attention has shifted almost entirely to the next major update to the project ... </div>
                </div>
            </div>



            <div class="box-section news with-icons">
                <div class="avatar blue"><i class="icon-ok icon-2x"></i></div>
                <div class="news-time"> <span>06</span> jan </div>
                <div class="news-content">
                    <div class="news-title"><a href="#">Twitter Bootstrap v3.0 is coming!</a></div>
                    <div class="news-text"> With 2.2.2 out the door, our attention has shifted almost entirely to the next major update to the project ... </div>
                </div>
            </div>
            <div class="box-section news with-icons">
                <div class="avatar green"><i class="icon-lightbulb icon-2x"></i></div>
                <div class="news-time"> <span>11</span> feb </div>
                <div class="news-content">
                    <div class="news-title"><a href="#">Ruby on Rails 4.0</a></div>
                    <div class="news-text"> Rails 4.0 is still unfinished, but it is shaping up to become a great release ... </div>
                </div>
            </div>
            <div class="box-section news with-icons">
                <div class="avatar purple"><i class="icon-mobile-phone icon-2x"></i></div>
                <div class="news-time"> <span>04</span> mar </div>
                <div class="news-content">
                    <div class="news-title"><a href="#">All about SCSS</a></div>
                    <div class="news-text"> Sass makes CSS fun again. Sass is an extension of CSS3, adding nested rules ... </div>
                </div>
            </div>
            <div class="box-section news with-icons">
                <div class="avatar cyan"><i class="icon-ok icon-2x"></i></div>
                <div class="news-time"> <span>22</span> dec </div>
                <div class="news-content">
                    <div class="news-title"><a href="#">Twitter Bootstrap v3.0 is coming!</a></div>
                    <div class="news-text"> With 2.2.2 out the door, our attention has shifted almost entirely to the next major update to the project ... </div>
                </div>
            </div>



            <div class="box-section news with-icons">
                <div class="avatar blue"><i class="icon-ok icon-2x"></i></div>
                <div class="news-time"> <span>06</span> jan </div>
                <div class="news-content">
                    <div class="news-title"><a href="#">Twitter Bootstrap v3.0 is coming!</a></div>
                    <div class="news-text"> With 2.2.2 out the door, our attention has shifted almost entirely to the next major update to the project ... </div>
                </div>
            </div>
            <div class="box-section news with-icons">
                <div class="avatar green"><i class="icon-lightbulb icon-2x"></i></div>
                <div class="news-time"> <span>11</span> feb </div>
                <div class="news-content">
                    <div class="news-title"><a href="#">Ruby on Rails 4.0</a></div>
                    <div class="news-text"> Rails 4.0 is still unfinished, but it is shaping up to become a great release ... </div>
                </div>
            </div>
            <div class="box-section news with-icons">
                <div class="avatar purple"><i class="icon-mobile-phone icon-2x"></i></div>
                <div class="news-time"> <span>04</span> mar </div>
                <div class="news-content">
                    <div class="news-title"><a href="#">All about SCSS</a></div>
                    <div class="news-text"> Sass makes CSS fun again. Sass is an extension of CSS3, adding nested rules ... </div>
                </div>
            </div>
            <div class="box-section news with-icons">
                <div class="avatar cyan"><i class="icon-ok icon-2x"></i></div>
                <div class="news-time"> <span>22</span> dec </div>
                <div class="news-content">
                    <div class="news-title"><a href="#">Twitter Bootstrap v3.0 is coming!</a></div>
                    <div class="news-text"> With 2.2.2 out the door, our attention has shifted almost entirely to the next major update to the project ... </div>
                </div>
            </div>-->
        </div>
    </div>
</div>

<div class="col-md-3" style="float: right;">
    <div class="box">
        <div class="box-header"> <span class="title">SPOT LIGHT</span>
            <ul class="box-toolbar">
                <li><span class="label label-blue"></span></li>
            </ul>
        </div>
        <div class="box-content scrollable" style="height: 552px; overflow-y: auto">
            <div class="box-section news with-icons">
                <div class="avatar green"><i class="icon-lightbulb icon-2x"></i></div>
                <div class="news-time"> <span>11</span> feb </div>
                <div class="news-content">
                    <div class="news-title"><a href="#">Ruby on Rails 4.0</a></div>
                    <div class="news-text"> Rails 4.0 is still unfinished, but it is shaping up to become a great release ... </div>
                </div>
            </div>
            <div class="box-section news with-icons">
                <div class="avatar purple"><i class="icon-mobile-phone icon-2x"></i></div>
                <div class="news-time"> <span>04</span> mar </div>
                <div class="news-content">
                    <div class="news-title"><a href="#">All about SCSS</a></div>
                    <div class="news-text"> Sass makes CSS fun again. Sass is an extension of CSS3, adding nested rules ... </div>
                </div>
            </div>
      </div>
</div>