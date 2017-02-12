<!-- TOP BAR -->
	<div id="top-bar">
		
		<div class="page-full-width cf">

			<ul id="nav" class="fl">
	
				<li class="v-sep"><a href="javascript:void(0);" onclick="javascript:window.open('shortcuts.html','myNewWinsr','width=600,height=110,toolbar=0,menubar=no,status=no,resizable=yes,location=no,directories=no,scrollbars=yes');" class="round button dark ic-info image-left">Atalhos</a></li>
				<li class="v-sep"><a href="#" class="round button dark menu-user image-left">Usuário <strong><?php echo $POSNIC['username'] ?></strong></a>
					<ul>
				
						<li><a href="change_password.php">Alterar Senha</a></li>
						
						<li><a href="logout.php">Sair</a></li>
					</ul> 
				</li>
			<li><a href="update_details.php" class="round button dark menu-settings image-left">Atualizar</a></li>
				<li><a href="logout.php" class="round button dark menu-logoff image-left">Sair</a></li>
				
			</ul> <!-- end nav -->

					
			<form action="#" method="POST" id="search-form" class="fr">
				<fieldset>
					<input type="text" id="search-keyword" class="round button dark ic-search image-right" placeholder="Pesquisar..." />
					<input type="hidden" value="SUBMIT" />
				</fieldset>
			</form>

		</div> <!-- end full-width -->	
	
	</div> <!-- end top-bar -->