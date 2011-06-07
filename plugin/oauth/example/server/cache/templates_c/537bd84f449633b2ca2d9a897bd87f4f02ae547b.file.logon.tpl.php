<?php /* Smarty version Smarty-3.0.7, created on 2011-02-25 12:26:18
         compiled from "/Users/Samuel/Sites/menuar/plugin/oauth/example/server/core/templates/logon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:508234954d672f6a043ef8-56835322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '537bd84f449633b2ca2d9a897bd87f4f02ae547b' => 
    array (
      0 => '/Users/Samuel/Sites/menuar/plugin/oauth/example/server/core/templates/logon.tpl',
      1 => 1263321363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '508234954d672f6a043ef8-56835322',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('inc/header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1>Login</h1>

<form method="post">
    <input type="hidden" name="goto" value="<?php echo $_REQUEST['goto'];?>
" />

    <label for="username">User name</label><br />
    <input type="text" name="username" id="username" />
    
    <br /><br />

    <label for="password">Password</label><br />
    <input type="text" name="password" id="password" />

    <br /><br />
    
    <input type="submit" value="Login" />
</form>

<?php $_template = new Smarty_Internal_Template('inc/footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
