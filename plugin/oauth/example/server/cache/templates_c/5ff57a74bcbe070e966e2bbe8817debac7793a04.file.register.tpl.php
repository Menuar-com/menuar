<?php /* Smarty version Smarty-3.0.7, created on 2011-02-25 12:29:59
         compiled from "/Users/Samuel/Sites/menuar/plugin/oauth/example/server/core/templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18671359594d673047d112b4-40463588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ff57a74bcbe070e966e2bbe8817debac7793a04' => 
    array (
      0 => '/Users/Samuel/Sites/menuar/plugin/oauth/example/server/core/templates/register.tpl',
      1 => 1263321363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18671359594d673047d112b4-40463588',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/Users/Samuel/Sites/menuar/plugin/oauth/example/server/core/smarty/libs/plugins/modifier.escape.php';
?><?php $_template = new Smarty_Internal_Template('inc/header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1>Register server</h1>

<p>Register a server which is gonna act as an identity client.</p>

<form method="post">

    <fieldset>
	<legend>About You</legend>
	
	<p>
	    <label for="requester_name">Your name</label><br/>
	    <input class="text" id="requester_name"  name="requester_name" type="text" value="<?php echo smarty_modifier_escape((($tmp = @$_smarty_tpl->getVariable('consumer')->value['requester_name'])===null||$tmp==='' ? $_REQUEST['requester_name'] : $tmp));?>
" />
	</p>
	
	<p>
	    <label for="requester_email">Your email address</label><br/>
	    <input class="text" id="requester_email"  name="requester_email" type="text" value="<?php echo smarty_modifier_escape((($tmp = @$_smarty_tpl->getVariable('consumer')->value['requester_email'])===null||$tmp==='' ? $_REQUEST['requester_email'] : $tmp));?>
" />
	</p>
    </fieldset>
    
    <fieldset>
	<legend>Location Of Your Application Or Site</legend>
	
	<p>
	    <label for="application_uri">URL of your application or site</label><br/>
	    <input id="application_uri" class="text" name="application_uri" type="text" value="<?php echo smarty_modifier_escape((($tmp = @$_smarty_tpl->getVariable('consumer')->value['application_uri'])===null||$tmp==='' ? $_REQUEST['application_uri'] : $tmp));?>
" />
	</p>
	
	<p>
	    <label for="callback_uri">Callback URL</label><br/>
	    <input id="callback_uri" class="text" name="callback_uri" type="text" value="<?php echo smarty_modifier_escape((($tmp = @$_smarty_tpl->getVariable('consumer')->value['callback_uri'])===null||$tmp==='' ? $_REQUEST['callback_uri'] : $tmp));?>
" />
	</p>
    </fieldset>

    <br />
    <input type="submit" value="Register server" />
</form>

<?php $_template = new Smarty_Internal_Template('inc/footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
