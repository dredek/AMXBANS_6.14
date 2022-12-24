<?php /* Smarty version 2.6.25, created on 2020-06-10 03:12:05
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'login.tpl', 8, false),array('modifier', 'date2word', 'login.tpl', 14, false),)), $this); ?>
<table width="50%" border="1" cellpadding="2">
	<tr class="table_head">
		<td>&nbsp;</td>
	</tr>
	<tr class="table_list">
		<td>
			<form name="loginform" action="login.php" method="post">
				<fieldset><legend><span class='title'><?php echo ((is_array($_tmp='_LOGIN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span></legend>
			<table width='20%'>
				<tr><td class='enter' class="fat"><?php echo ((is_array($_tmp='_USERNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</span></td> <td class='enter'><input type="text" name="user"></td><td><input type='checkbox' value='yes' name='remember'></input> <?php echo ((is_array($_tmp='_REMEMBERME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td></tr>
				<tr><td class='enter' class="fat"><?php echo ((is_array($_tmp='_PASSWORD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</span></td> <td class='enter'><input type="password" name="pass""></td><td><button type="submit" name="action" id="action2" value="Login"><?php echo ((is_array($_tmp='_LOGIN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</button></td></tr>
				<?php if ($this->_tpl_vars['msg']): ?><span class='errored'><?php echo ((is_array($_tmp=$this->_tpl_vars['msg'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span><br /><?php endif; ?>
				<?php if ($this->_tpl_vars['try']): ?><span class='errored'><?php echo ((is_array($_tmp='_LOGINTRY')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <?php echo $this->_tpl_vars['try']; ?>
/3</span><br /><?php endif; ?>
				<?php if ($this->_tpl_vars['block_left']): ?><span class='errored'><?php echo ((is_array($_tmp=$this->_tpl_vars['block_left'])) ? $this->_run_mod_handler('date2word', true, $_tmp, true) : smarty_modifier_date2word($_tmp, true)); ?>
 <?php echo ((is_array($_tmp='_REMAINING')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span><br /><?php endif; ?>
			</table>
				</fieldset>
			</form>
		</td>
	</tr>
</table>