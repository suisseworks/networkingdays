<link href="<?php echo Yii::app()->theme->baseUrl; ?>/stylesheets/application.css" media="screen" rel="stylesheet" type="text/css" />

<!--
 application.js es parte del tema del bootsztrap, pero hace que el CTreeView de yii no funcione....
 Si se deshabilita, no funcionnan los gráficos y los movimientos que trae el tema de bootzstrap.
 Hay que averiguar como resolver el conflicto
 Tampco sirve el menú...del uusiario arriba a la derecha :(

-->


<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>


<script src="<?php //echoYii::app()->theme->baseUrl; ?>/javascripts/application.js" type="text/javascript"></script>



<!--<link rel="stylesheet" type="text/css" href="--><?php ////echo Yii::app()->request->baseUrl; ?><!--/css/main.css" />-->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/misc.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
