<?php /* Smarty version Smarty-3.0.7, created on 2011-02-25 12:25:57
         compiled from "/Users/Samuel/Sites/menuar/plugin/oauth/example/server/core/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6972446654d672f55b558e6-30180218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e38ce1da0ce31a310e2239dc41c2df28249e9d4c' => 
    array (
      0 => '/Users/Samuel/Sites/menuar/plugin/oauth/example/server/core/templates/index.tpl',
      1 => 1298607905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6972446654d672f55b558e6-30180218',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('inc/header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1>OAuth server</h1>
Go to:

<ul>
  <li><a href="/logon">Logon</a></li>
  <li><a href="/register">Register your consumer</a></li>
</ul>

Afterwards, make an OAuth test request to <strong>http://<?php echo $_SERVER['name'];?>
/hello</strong> to test your connection.</p>

<?php $_template = new Smarty_Internal_Template('inc/footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
