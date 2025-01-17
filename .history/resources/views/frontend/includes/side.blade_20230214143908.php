<link rel='stylesheet' href='https://daneden.github.io/animate.css/animate.min.css'>
<style>
    
.nav {
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
  background: #118dff ;
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
  background: #118dff ;
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
<ul class="nav">
    <li>
    <a href="/">
      <i class="fa fa-home"></i>
      <div class="animated slideInLeft">Home</div>
    </a>
    </li>
  </ul>
  <script src='https://use.fontawesome.com/cece742d74.js'></script>