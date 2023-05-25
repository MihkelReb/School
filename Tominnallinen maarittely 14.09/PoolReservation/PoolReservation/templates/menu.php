		<?php 
			
			//$_SESSION['userid'] = "";
			$_GET['page'] = "";
			$page = $_GET['page'];
		
			//$subpage = $_GET['sub'];
			if(basename ( $_SERVER['PHP_SELF'] ) == "index.php"){
			$page = "frontpage";
			
			}
		?>
		
		<div id="menu">
			<ul class="mainmenu">
				<li class="<?php if ($page == 'frontpage'){ echo('cp_frontpage');}else{echo('p_frontpage');}?>"><a href="./index.php?page=frontpage">Frontpage</a></li>
				<?php if(isset($_SESSION['userid'])){ ?>
					
				<li class="<?php if ($page == 'reservations'){ echo('cp_frontpage');}else{echo('p_frontpage');}?>"><a href="./reservations.php?page=reservations">Reservations</a></li>

				<?php } ?>
				<li class="registerlink"><a href="./admin/index.php">Admin</a></li>
				<li class="registerlink"><a href="./register.php">Register</a></li>
				<?php if(isset($_SESSION['userid'])){
					
					echo("<li class=\"registerlink\"><a href=\"./logout.php\">Log out</a></li>");
					echo("<li class=\"login_info registerlink\">Welcome ".$_SESSION['username']."</li>");
				}else{
					echo("<li class=\"registerlink\"><a href=\"./reservations.php?page=reservations\">Login</a></li>");
				}
				?>
				
				
			</ul>	
<!--			
			<ul class="submenu">
				<?php if($page == 'frontpage'){
				?>
					<li class="<?php if ($subpage == 'frontpage'){ echo('sub_cp_frontpage');}else{echo('sub_p_frontpage');}?>"><a href="./index.php?page=frontpage&subpage=foo">Link 1</a></li>
					<li class="<?php if ($subpage == 'frontpage'){ echo('sub_cp_frontpage');}else{echo('sub_p_frontpage');}?>"><a href="./index.php?page=frontpage&subpage=fuu">Link 2</a></li>
				<?php
				}
				?>
			</ul>
-->
		</div>
		
		
