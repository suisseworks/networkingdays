<?php
$this->breadcrumbs=array(
    array('Inicio', null)
    //array('Perfil', "afiliado/perfil")
);
?>

<script>
    setActiveMenu('#sidebar-menu-inicio');


</script>



<div class="container">
<div class="row ">
    <!-- NOTIFICACIONES -->

    <div class="col-md-3">

            <!--big normal buttons-->
            <div class="action-nav-normal">
                <div class="row action-nav-row">
                    <div class="col-sm-6 action-nav-button"> <a href="#" title="New Project"> <i class="icon-file-alt"></i> <span>Crear Contenido</span> </a> <span class="triangle-button red"><i class="icon-plus"></i></span> </div>
                    <div class="col-sm-6 action-nav-button"> <a href="#" title="Messages"> <i class="icon-comments-alt"></i> <span>Mis Mensajes</span> </a> <span class="label label-black">14</span> </div>
                </div>
                <div class="row action-nav-row">
                    <div class="col-sm-6 action-nav-button"> <a href="#" title="Files"> <i class="icon-folder-open-alt"></i> <span>Mis Archivos</span> </a> </div>
                    <div class="col-sm-6 action-nav-button"> <a href="#" title="Users"> <i class="icon-user"></i> <span>Chat</span> </a> <span class="triangle-button green"><span class="inner">+3</span></span> </div>
                </div>
                <div class="row action-nav-row">
                    <div class="col-sm-6 action-nav-button"> <a href="#" title="Friends"> <i class="icon-thumbs-up"></i> <span>Referir</span> </a> </div>
                    <div class="col-sm-6 action-nav-button"> <a href="#" title="Followers"> <i class="icon-envelope"></i> <span>Invitar</span> </a> <span class="triangle-button blue"><span class="inner">+8</span></span> </div>
                </div>
            </div>

            <!-- CALENDARIO -->
            <div class="box" style="overflow: scroll;">
                <div class="box-header">
                    <div class="title">Full calendar</div>
                </div>
                <div class="box-content">
                    <div id="calendar"></div>
                </div>
            </div>

    </div>



    <!-- CONTENIDO/MURO -->

    <div class="col-md-6">
        <div class="box">
            <div class="box-header"> <span class="title">MURO</span>
                <ul class="box-toolbar">
                    <li class="toolbar-link"> <a href="#" data-toggle="dropdown"><i class="icon-cog"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-plus-sign"></i> add</a></li>
                            <li><a href="#"><i class="icon-remove-sign"></i> remove</a></li>
                            <li><a href="#"><i class="icon-pencil"></i> edit</a></li>
                        </ul>
                    </li>
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
        </div>





    <!-- SPOT LIGHT -->

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
                   <!-- <div class="news-time"> <span>11</span> feb </div> -->
                    <div class="news-content">
                        <div class="news-title"><a href="#">Ruby on Rails 4.0</a></div>
                        <div class="news-text"> Rails 4.0 is still unfinished, but it is shaping up to become a great release ... </div>
                    </div>
                </div>
                <div class="box-section news with-icons">
                    <div class="avatar purple"><i class="icon-mobile-phone icon-2x"></i></div>
                   <!-- <div class="news-time"> <span>04</span> mar </div> -->
                    <div class="news-content">
                        <div class="news-title"><a href="#">All about SCSS</a></div>
                        <div class="news-text"> Sass makes CSS fun again. Sass is an extension of CSS3, adding nested rules ... </div>
                    </div>
                </div>
        </div>
    </div>

</div> <!-- row -->
</div> <!-- container -->
