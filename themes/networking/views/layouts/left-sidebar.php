<div class="sidebar-background">
  <div class="primary-sidebar-background"></div>
</div>
<div class="primary-sidebar"> 
  
  <!-- Main nav -->
  <ul class="nav navbar-collapse collapse navbar-collapse-primary ">
    <li id="sidebar-menu-inicio" > <span class="glow"></span> <a href="<?php echo Yii::app()->request->baseUrl; ?>/dash/inicio"> <i class="icon-bullhorn icon-2x"></i> <span>Inicio</span> </a> </li>
    <li id="sidebar-menu-dashboard" > <span class="glow"></span> <a href="<?php echo Yii::app()->request->baseUrl; ?>/site"> <i class="icon-dashboard icon-2x"></i> <span>Dashboard</span> </a> </li>
    <li id="sidebar-menu-circulo" > <span class="glow"></span> <a href="<?php echo Yii::app()->request->baseUrl . "/dash/circulo/" . Yii::app()->user->id; ?>" > <i class="icon-circle-blank  icon-2x"></i> <span>Mi Círculo</span> </a> </li>
    <li id="sidebar-menu-acciones" class="dark-nav "> <span class="glow"></span> <a class="accordion-toggle collapsed " data-toggle="collapse" href="#yJ6h3Npe7C"> <i class="icon-briefcase icon-2x"></i> <span> Acciones <i class="icon-caret-down"></i> </span> </a>
          <ul id="yJ6h3Npe7C" class="collapse">
              <li id="sidebar-menu-referir" class=""> <a href="<?php echo Yii::app()->request->baseUrl . "/dash/referir/"  ?>"> <i class="icon-thumbs-up"></i> Referir </a> </li>
              <li class=""> <a href="<?php echo Yii::app()->request->baseUrl . "/dash/invitar/" . Yii::app()->user->id; ?>"> <i class="icon-envelope"></i> Invitar </a> </li>

              <!--
              <li class=""> <a href="pages/ui_lab/grid.html"> <i class="icon-th-large"></i> Grid </a> </li>
              <li class=""> <a href="pages/ui_lab/tables.html"> <i class="icon-table"></i> Tables </a> </li>
              <li class=""> <a href="pages/ui_lab/widgets.html"> <i class="icon-plus-sign-alt"></i> Widgets </a> </li>
              -->
          </ul>
      </li>
      <li id="sidebar-menu-mensajes" class=""> <span class="glow"></span> <a href="<?php echo Yii::app()->request->baseUrl . "/afiliado/mensajes/" . Yii::app()->user->id; ?>"> <i class="icon-envelope icon-2x"></i> <span>Mensajes</span> </a> </li>
      <li class=""> <span class="glow"></span> <a href="<?php echo Yii::app()->request->baseUrl . '/dash/calendario/' ?>"> <i class="icon-calendar icon-2x"></i> <span>Calendario</span> </a> </li>
      <li class=""> <span class="glow"></span> <a href="<?php echo Yii::app()->request->baseUrl . "/afiliado/cuenta/" . Yii::app()->user->id; ?>"> <i class="icon-money icon-2x"></i> <span>Mi Cuenta</span> </a> </li>

  </ul>




    <div class="hidden-sm hidden-xs">
        <div class="text-center" style="margin-top: 60px">
            <div class="easy-pie-chart-percent" style="display: inline-block" data-percent="89"><span>89%</span></div>
            <div style="padding-top: 20px"><b>CPU Usage</b></div>
        </div>

        <hr class="divider" style="margin-top: 60px">

        <div class="sparkline-box side">

            <div class="sparkline-row">
                <h4 class="gray"><span>Orders</span> 847</h4>
                <div class="sparkline big" data-color="gray"><!--29,11,19,12,27,11,14,12,27,27,8,18--></div>
            </div>

            <hr class="divider">
            <div class="sparkline-row">
                <h4 class="dark-green"><span>Income</span> $43.330</h4>
                <div class="sparkline big" data-color="darkGreen"><!--10,24,11,14,17,9,27,10,13,15,26,24--></div>
            </div>

            <hr class="divider">
            <div class="sparkline-row">
                <h4 class="blue"><span>Reviews</span> 223</h4>
                <div class="sparkline big" data-color="blue"><!--26,3,24,26,7,27,4,25,29,23,5,26--></div>
            </div>

            <hr class="divider">
        </div>
    </div>


</div>
