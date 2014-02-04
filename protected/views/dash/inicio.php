<?php
$this->breadcrumbs=array(
    array('Inicio', null)
    //array('Perfil', "afiliado/perfil")
);
?>



<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<script>
    setActiveMenu('#sidebar-menu-inicio');

    $(function() {
        $( "#dialog_agregar_post2" ).dialog({

            maxWidth:600,
            maxHeight: 500,
            width: 500,
            modal: true,

            autoOpen: false,
            show: {
                effect: "explode",
                duration: 500
            },
            hide: {
                effect: "explode",
                duration: 500
            },

            buttons: [
                {
                    text: "Ok",
                    click: function() {
                        var post = $('#postnuevo').val();



                        //$( this ).dialog( "close" );
                    }
                },
                {
                    text: "Cancel",
                    click: function() {
                        $( this ).dialog( "close" );
                    }
                }
            ]



        });



        $("#agregar_post_muro, #crear_contenido" ).click(function() {
            $( "#dialog_agregar_post" ).dialog( "open" );
        });




        $("#enviar").click(function(event){

            console.log('hola');

            $.ajax({
                type: "POST",
                url: "<?php echo Yii::app()->request->baseUrl; ?>/dash/publicar",
                data: 'el texto'
            });



        })






    });


</script>


<!-- AGREGAR POST AL MURO -->

<div id="dialog_agregar_post" title="Publicar en el muro">

        <label for="">Mensaje</label>

        <textarea name="postnuevo" id="postnuevo" cols="65" rows="10"></textarea>
        <button id="enviar" type="submit">Enviar</button>










</div>



<div class="container">



    <div class="row ">
    <!-- NOTIFICACIONES -->

    <div class="col-md-12">

            <!--big normal buttons-->
            <div class="action-nav-normal">
                <div class="row action-nav-row">
                    <div class="col-sm-1 action-nav-button"> <a id="crear_contenido" href="#" title="New Project"> <i class="icon-file-alt"></i> <span>Crear Contenido</span> </a> <span class="triangle-button red"><i class="icon-plus"></i></span> </div>
                    <div class="col-sm-1 action-nav-button"> <a href="#" title="Messages"> <i class="icon-comments-alt"></i> <span>Mis Mensajes</span> </a> <span class="label label-black">14</span> </div>
                    <div class="col-sm-1 action-nav-button"> <a href="#" title="Files"> <i class="icon-folder-open-alt"></i> <span>Mis Archivos</span> </a> </div>
                    <div class="col-sm-1 action-nav-button"> <a href="#" title="Users"> <i class="icon-user"></i> <span>Chat</span> </a> <span class="triangle-button green"><span class="inner">+3</span></span> </div>
                    <div class="col-sm-1 action-nav-button"> <a href="#" title="Friends"> <i class="icon-thumbs-up"></i> <span>Referir</span> </a> </div>
                    <div class="col-sm-1 action-nav-button"> <a href="#" title="Followers"> <i class="icon-envelope"></i> <span>Invitar</span> </a> <span class="triangle-button blue"><span class="inner">+8</span></span> </div>
                </div>
            </div>
    </div>

</div>


<div class="row ">

    <!-- CONTENIDO/MURO -->

    <div class="col-md-8">
        <div class="box">
            <div class="box-header"> <span class="title">MURO</span>
                <ul class="box-toolbar">
                    <li> <i class="icon-refresh"></i> </li>
                    <li class="toolbar-link"> <a href="#" data-toggle="dropdown"><i class="icon-cog"></i></a>
                        <ul class="dropdown-menu">
                            <li><a id="agregar_post_muro" href="#"><i class="icon-plus-sign"></i> Agregar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="box-content scrollable" style="height: 552px; overflow-y: auto">

                <?php foreach( $muro as $post) { ?>
                    <div class="box-section news with-icons">
                        <div class="avatar green"><i class="icon-lightbulb icon-2x"></i></div>
                        <div class="news-time"> <span>11</span> feb </div>
                        <div class="news-content">
                            <div class="news-title"><h2><a href="#"><?php echo $post['asunto'] ?> </a></h2></div>
                            <div class="news-text">  <?php echo $post['mensaje'];  ?> </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        </div>





    <!-- SPOT LIGHT -->

    <div class="col-md-4" style="float: right;">
        <div class="box">
            <div class="box-header"> <span class="title">SPOT LIGHT</span>
                <ul class="box-toolbar">
                    <li><span class="label label-blue"></span></li>
                </ul>
            </div>
            <div class="box-content scrollable" style="height: 552px; overflow-y: auto">

               <?php foreach( $spotlight as $spot) { ?>
                    <div class="box-section news with-icons">
                        <div class="avatar green"><i class="icon-lightbulb icon-2x"></i></div>
                       <!-- <div class="news-time"> <span>11</span> feb </div> -->
                        <div class="news-content">
                            <div class="news-title"><a href="#"><?php echo $spot['titular'] ?> </a></div>
                            <div class="news-text">
                                <img style="float: left; margin-right: 5px;" width="50px;" height="50px;" src="<?php echo Yii::app()->myhelper->myAvatarURL($spot->afiliado) ?>" >
                                <?php echo $spot['mensaje'] ?>  </div>
                        </div>
                    </div>
               <?php } ?>

        </div>
    </div>

</div> <!-- row -->





</div> <!-- container -->
