<?php
/* Smarty version 4.3.0, created on 2023-04-24 20:39:59
  from 'D:\Studia\Semestr IV\Aplikacje Webowe\htdocs\php_01_widok_kontroler\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6446ccffa82df6_45314559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2403f9fa26822cfe90b9f20fc1c33a0a75c4e00' => 
    array (
      0 => 'D:\\Studia\\Semestr IV\\Aplikacje Webowe\\htdocs\\php_01_widok_kontroler\\app\\calc.html',
      1 => 1682361595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6446ccffa82df6_45314559 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19113477266446ccffa5bba4_94652545', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4571673956446ccffa5cd01_97702593', 'footer');
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20019894026446ccffa5d686_41636051', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'header'} */
class Block_19113477266446ccffa5bba4_94652545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_19113477266446ccffa5bba4_94652545',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_4571673956446ccffa5cd01_97702593 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_4571673956446ccffa5cd01_97702593',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_20019894026446ccffa5d686_41636051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20019894026446ccffa5d686_41636051',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Wrapper-->
<div id="wrapper">

	<!-- Nav -->
	<nav id="nav" class="navMenu">
		<a href="#" class="icon solid fa-home"><span>Home</span></a>
		<a href="#calculate" class="icon solid fa-envelope"><span>Calculator</span></a>
		<?php if ($_smarty_tpl->tpl_vars['role']->value == 'admin') {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/inna_chroniona.php" class="icon solid fa-user-secret"><span>Chroniona</span></a>
		<?php }?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/logout.php" class="icon solid fa-fingerprint"><span>Wyloguj</span></a>
	</nav>

	<!-- Main -->
	<div id="main">


		<!-- Meme -->
		<article id="home" class="panel intro">
			<header>
				<h1>Kalkulator odsetek</h1>
				<p>Bartlomiej Nimiec</p>
			</header>
			<a href="https://github.com/Bartolomeo2077" class="jumplink pic">
				<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/me.jpg" alt="" />
			</a>
		</article>

		<!-- Kalkulator -->
		<article id="calculate" class="panel">
			<header>
				<h2>Twoj Kredyt~</h2>
			</header>
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php#calculate" method="post">
				<div>
					<div class="col">
						<div class="col-6 col-12-medium">
							<input type="text" name="Kwota" autocomplete="off" placeholder="Podaj Kwote" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Kwota;?>
"/>
						</div>
						<div class="col-6 col-12-medium">
							<input type="text" name="Miesiace" autocomplete="off" placeholder="Podaj Miesiace" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Miesiace;?>
"/>
						</div>
						<div class="col-12">
							<input type="text" name="Oprocentowanie" autocomplete="off" placeholder="Podaj Oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Oprocentowanie;?>
"/>
						</div>
						<div class="col-6">
							<input type="submit" value="Oblicz!" />
							<?php if (($_smarty_tpl->tpl_vars['role']->value == 'admin')) {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
#calculate"><input class="button" type="button" value="Reset"/></a>
							<?php }?>
						</div>
					</div>
				</div>
			</form>
			<div>
				<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
					<h2>Wystąpiły błędy: </h2>
					<div id="msgFound">
					<ol>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ol>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
					<h4>Informacje: </h4>
					<ol class="inf">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ol>
				<?php }?>

				<?php if ((isset($_smarty_tpl->tpl_vars['result']->value->result))) {?>
					<h2>Wynik:</h2>
					<div id="msg">
						<?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>

					</div>
				<?php }?>

			</div>
		</article>
	</div>
</div>

<!-- skrypt -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
