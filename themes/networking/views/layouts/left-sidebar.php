<div class="sidebar-background">
  <div class="primary-sidebar-background"></div>
</div>
<div class="primary-sidebar"> 
  
  <!-- Main nav -->
  <ul class="nav navbar-collapse collapse navbar-collapse-primary">
    <li id="sidebar-menu-dashboard" > <span class="glow"></span> <a href="<?php echo Yii::app()->request->baseUrl; ?>/site"> <i class="icon-dashboard icon-2x"></i> <span>Dashboard</span> </a> </li>
      <li id="sidebar-menu-acciones" class="dark-nav "> <span class="glow"></span> <a class="accordion-toggle collapsed " data-toggle="collapse" href="#yJ6h3Npe7C"> <i class="icon-briefcase icon-2x"></i> <span> Acciones <i class="icon-caret-down"></i> </span> </a>
          <ul id="yJ6h3Npe7C" class="collapse">
              <li id="sidebar-menu-referir" class=""> <a href="<?php echo Yii::app()->request->baseUrl . "/dash/referir/" . Yii::app()->user->id; ?>"> <i class="icon-thumbs-up"></i> Referir </a> </li>
              <li class=""> <a href="pages/ui_lab/buttons.html"> <i class="icon-hand-up"></i> Editar Referencias </a> </li>
              <li class=""> <a href="<?php echo Yii::app()->request->baseUrl . "/dash/invitar/" . Yii::app()->user->id; ?>"> <i class="icon-beaker"></i> Invitar </a> </li>

              <!--
              <li class=""> <a href="pages/ui_lab/grid.html"> <i class="icon-th-large"></i> Grid </a> </li>
              <li class=""> <a href="pages/ui_lab/tables.html"> <i class="icon-table"></i> Tables </a> </li>
              <li class=""> <a href="pages/ui_lab/widgets.html"> <i class="icon-plus-sign-alt"></i> Widgets </a> </li>
              -->
          </ul>
      </li>
      <li id="sidebar-menu-mensajes" class=""> <span class="glow"></span> <a href="<?php echo Yii::app()->request->baseUrl . "/dash/mensajes/" . Yii::app()->user->id; ?>"> <i class="icon-envelope icon-2x"></i> <span>Mensajes</span> </a> </li>
      <li class=""> <span class="glow"></span> <a href="pages/charts/charts.html"> <i class="icon-calendar icon-2x"></i> <span>Calendario</span> </a> </li>
      <li class=""> <span class="glow"></span> <a href="pages/charts/charts.html"> <i class="icon-book icon-2x"></i> <span>Blog</span> </a> </li>
      <li class=""> <span class="glow"></span> <a href="pages/charts/charts.html"> <i class="icon-money icon-2x"></i> <span>Cuenta</span> </a> </li>
      <li id="sidebar-menu-perfil"> <span class="glow"></span> <a href="<?php echo Yii::app()->request->baseUrl . "/afiliado/perfil/" . Yii::app()->user->id; ?>"> <i class="icon-edit icon-2x"></i> <span>Mi Perfil</span> </a> </li>
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
        <div class="sparkline big" data-color="gray"><!--16,7,23,13,12,11,15,4,19,18,4,24--></div>
      </div>
      <hr class="divider">
      <div class="sparkline-row">
        <h4 class="dark-green"><span>Income</span> $43.330</h4>
        <div class="sparkline big" data-color="darkGreen"><!--6,3,24,25,27,29,14,26,20,8,12,20--></div>
      </div>
      <hr class="divider">
      <div class="sparkline-row">
        <h4 class="blue"><span>Reviews</span> 223</h4>
        <div class="sparkline big" data-color="blue"><!--11,19,20,20,5,18,11,6,16,20,26,11--></div>
      </div>
      <hr class="divider">
    </div>
  </div>
</div>
