<link rel='stylesheet' href='https://daneden.github.io/animate.css/animate.min.css'>
<style>
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

@import url("https://fonts.googleapis.com/css?family=Lato:400,400i,700");

/** Reset */
html,
body {
	margin: 0;
	padding: 0;
	height: 100%;
	font-family: Lato, sans-serif;
	background: #f8f9fb;
}

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
<ul class="nav">
    <li>
        <a href="/">
            <i class="fa fa-home"></i>
            <div class="animated slideInLeft">Home</div>
        </a>
    </li>
    <li>
      <a href="/">
          <i class="fa fa-adjust"></i>
          <div class="animated slideInLeft">Revenue</div>
      </a>
  </li>
  <li>
    <a href="/">
        <i class="fa fa-male"></i>
        <div class="animated slideInLeft">Visit</div>
    </a>
</li>
<li>
  <a href="/">
      <i class="fa fa-shopping-basket"></i>
      <div class="animated slideInLeft">Basket Size</div>
  </a>
</li>
</ul>
<script src='https://use.fontawesome.com/cece742d74.js'></script>