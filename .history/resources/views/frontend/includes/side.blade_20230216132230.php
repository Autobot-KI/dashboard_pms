<link rel='stylesheet' href='https://daneden.github.io/animate.css/animate.min.css'>
<style>
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

@import url("https://fonts.googleapis.com/css?family=Lato:400,400i,700");

/** Reset */
html
.container {
	display: flex;
	flex-direction:column;
	height: 100%;
	.content {
		display: flex;
		align-content: center;
		height: 100%;
		.sidebar {
			user-select: none;			
			width: 50px;
			background: #000000;
			transition: width 0.5s ease-in;
			box-shadow: 2px 0 2px 2px rgba(0,0,0,0.21);
			display: flex;
			align-items: center;
			.menu, li {
				list-style: none;
			}
			
			.menu {				
				li {
					display: flex;
					align-items: center;
					margin: 0 0 5px 0;
					padding: 10px 10px 10px 15px;
					color: #EEEEEE;
					border-left: 5px solid #000000;
					&.selected, &:hover {
						background: #1E88E5;
						border-left-color: #E0E0E0;
						color: #FFFF;
					}
					.icon {
						margin-right: 20px;
						max-width: 30px;
						font-size: 1.2em;
						display: flex;
						i {
							width: 20px;
						}
					}
				}
			}
			
			&:hover {
				width: 150px;
				cursor: pointer;
			}
		}
	}
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