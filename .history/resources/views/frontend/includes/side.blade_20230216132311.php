<link rel='stylesheet' href='https://daneden.github.io/animate.css/animate.min.css'>
<style>.nav {
  list-style: none;
  padding: 0;
  margin: 0;
  background: #292929;
  display: inline-block;
  height: 100vh;
  position: absolute;
}
.nav li {
  cursor: pointer;
  border-top: 1px solid #757575;
  border-bottom: 1px solid #757575;
  margin-bottom: -1px;
  width: 80px;
  height: 60px;
  line-height: 60px;
  font-size: 18px;
  font-family: "Roboto Slab", serif;
  color: #ffffff;
}
.nav li div,
.nav li i {
  position: absolute;
  text-align: center;
  animation-duration: 0.34s;
}
.nav li div {
  margin-left: 80px;
  text-align: center;
  width: 160px;
}
.nav li i {
  line-height: 60px;
  width: 80px;
  z-index: 9;
  background: #292929;
}
.nav li div {
/*   display: none; */
  z-index: 1;
  background: #ed1c24;
  transform: translateX(-160px);
  -webkit-transform: translateX(-160px);
  -moz-transform: translateX(-160px);
  transition: all 0.2s ease-in-out;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
}

.nav li:hover > div {
  display: inline-block;
  transform: translateX(0);
}
.nav li:hover i {
  background: #ed1c24;
}

.hero {
  height: 50vh;
  text-align: center;
  padding-top: 22%;
  font-family: "Roboto Slab", serif;
  font-size: 28px;
}
.credits {
  position: absolute;
  bottom: 0;
  right: 0;
  padding: 10px;
}
.credits a {
  margin: 10px;
}

</style>
<div class="container">
  <section class="content">
    <nav class="sidebar">
      <ul class="menu">
        <li class="selected">
          <div class="icon"> <i class="fa fa-user" aria-hidden="true"></i> </div>
          <div class="text"> Nathan </div>
        </li>
        <li>
          <div class="icon"> <i class="fa fa-tachometer" aria-hidden="true"></i> </div>
          <div class="text"> Dashboard </div>
        </li>
        <li>
          <div class="icon"> <i class="fa fa-home" aria-hidden="true"></i> </div>
          <div class="text"> Home </div>
        </li>
        <li>
          <div class="icon"> <i class="fa fa-pie-chart" aria-hidden="true"></i> </div>
          <div class="text"> Piechart </div>
        </li>
        <li>
          <div class="icon"> <i class="fa fa-line-chart" aria-hidden="true"></i> </div>
          <div class="text"> Linechart </div>
        </li>
        <li>
          <div class="icon"> <i class="fa fa-list" aria-hidden="true"></i> </div>
          <div class="text"> List </div>
        </li>
        <li>
          <div class="icon"> <i class="fa fa-area-chart" aria-hidden="true"></i> </div>
          <div class="text"> Areachart </div>
        </li>
        <li>
          <div class="icon"> <i class="fa fa-desktop" aria-hidden="true"></i> </div>
          <div class="text"> Desktop </div>
        </li>
        <li>
          <div class="icon"> <i class="fa fa-download" aria-hidden="true"></i> </div>
          <div class="text"> Import </div>
        </li>
      </ul>

      <!--	<ul class="settings">
        <li> <i class="fa fa-gear" aria-hidden="true"></i> </li>
        <li> <i class="fa fa-exclamation-triangle"> </i> </li>
        <li> <i class="fa fa-question-circle" aria-hidden="true"></i> </li>
        <li> <i class="fa fa-power-off"> </i> </li>
      </ul>		-->
    </nav>
    <div class="module-container">
      <section class="module-gist">
      </section>
      <section class="main-view">
      </section>
    </div>
  </section>
</div>
<script src='https://use.fontawesome.com/cece742d74.js'></script>