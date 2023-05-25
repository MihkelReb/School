		<? $page = $_GET['page'];
			$subpage = $_GET['sub'];
		?>
		
		<div id="menu">
			<ul class="mainmenu">
				<li class="<? if ($page == 'frontpage'){ echo('cp_frontpage');}else{echo('p_frontpage');}?>"><a href="../index.php?page=frontpage">Frontpage</a></li>
				<li class="<? if ($page == 'tables'){ echo('cp_frontpage');}else{echo('p_frontpage');}?>"><a href="./tables.php?page=tables">Tables</a></li>

				<li class="<? if ($page == 'users'){ echo('cp_frontpage');}else{echo('p_frontpage');}?>"><a href="./users.php?page=users">Users</a></li>
				
				<?php if($_SESSION['userid']){
					echo("<li class=\"whitetext\"> Your are an admin: " . $_SESSION['username'] . "</li>");
					echo("<li class=\"registerlink\"><a href=\"./logout.php\">Log out</a></li>");
				}else{
					echo("<li class=\"registerlink\"><a href=\"./index.php\">Login</a></li>");
				}
				?>
			</ul>
						
			<ul class="submenu">
				<? if($page == 'frontpage'){
				?>
					<li class="<? if ($subpage == 'frontpage'){ echo('sub_cp_frontpage');}else{echo('sub_p_frontpage');}?>"><a href="./index.php?page=frontpage&subpage=foo">Link 1</a></li>
					<li class="<? if ($subpage == 'frontpage'){ echo('sub_cp_frontpage');}else{echo('sub_p_frontpage');}?>"><a href="./index.php?page=frontpage&subpage=fuu">Link 2</a></li>
				<?
				}
				?>
			</ul>

		</div>
		
		
