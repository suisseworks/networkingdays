<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;


Yii::app()->clientScript->registerScript(
    'indexInit',
    '$("#linkingresar").addClass("active");
     $("body").addClass("fondo3");

    '
);

?>



<style>
    .tit {
        font-size: 2.5em;
        line-height: 1em;
    }
    .texto {
        font-size: 16px;
        color: #4d4d4d;
        text-align: justify;

    }

img { 
  max-width: 100%;
}


}

#logo {
        -webkit-transition: -webkit-transform 3s ease-in-out 0.5s;

    }


#logo:hover {
        -webkit-transform: perspective(500px) rotate3d(0,1,0,360deg);
    }

</style>


<script>
    $(function() {
        $( ".draggable" ).draggable();
    });

</script>




<div class="row">
      <div class="col-md-12">
      	<div class="col-md-6">
            <div class="draggable ui-widget-content sombratransparente ">
	      	    <img   id="logo" class="element-animation borde1  " src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo2.png"  />
            </div>
        </div>

          <br>
        <div class="col-md-6">
			<div class="box draggable ">
              <div class="box-header">
                <span class="title">Bienvenidos</span>
              </div>
              <div class="box-content padded">
                  <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/login"> <button class="btn btn-lg btn-blue">Ingresar</button></a>
                  <a href="<?php echo Yii::app()->request->baseUrl; ?>/afiliado/registrar"> <button class="btn btn-lg btn-green">Registrarse</button></a>
              </div>
            </div>
        </div>
      </div>
    </div>

    <br><br>
    
    
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="video-container draggable" style="border: 1px solid black;">
                    <iframe width="640" height="480" src="//www.youtube.com/embed/4MUeCwp9cf4" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">

                    <div class="box draggable">

                        <div class="box-header padded">
                            <h1 class="tit">Descubre el Poder detrás de las Referencias</h1>
                        </div>
                        <div class="box-content padded">
                            <p class="texto">
                                Por siglos, la mejor manera de tener nuevos Clientes ha sido la <strong>Recomendación
                                boca a boca </strong> que se da espontáneamente cuando alguien le pregunta a
                                un Cliente Satisfecho si sabe de alguien que ofrezca ese mismo
                                Producto o Servicio.
                                <br><br>
                                Ese constituye el primer inconveniente de las referencias de este
                                tipo: Son REACTIVAS, si no le preguntan, no hay referencia.
                                <br><br>
                                El segundo problema con este tipo de Referencia es que depende
                                del azar pues no siempre el Referidor va a tener en mente a quien
                                le provechó de ese Producto o Servicio y, en el peor de los casos, no
                                tendrá a mano los datos de contacto para hacer la Recomendación.
                                <br><br>
                                <strong>Los Círculos de NetworkingDays</strong> son la solución a estos problemas pues los
                                Integrantes de un Círculo estarán siempre en la búsqueda de nuevas oportunidades
                                para el resto de los Integrantes de manera PROACTIVA y con el apoyo de las más modernas
                                tecnologías de información para poder así garantizar el éxito de una gran cantidad de Recomendaciones.
                            </p>

                        </div>

                    </div>


            </div>
        </div>
    </div>

    <br><br>








