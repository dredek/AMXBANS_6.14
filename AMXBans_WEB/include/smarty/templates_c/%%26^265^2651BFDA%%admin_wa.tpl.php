<?php /* Smarty version 2.6.25, created on 2020-06-14 02:25:59
         compiled from admin_wa.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'admin_wa.tpl', 4, false),array('modifier', 'date_format', 'admin_wa.tpl', 45, false),array('function', 'html_options', 'admin_wa.tpl', 36, false),)), $this); ?>
<?php if ($this->_tpl_vars['msg']): ?>
	<div class="notice">
		<?php $_from = $this->_tpl_vars['msg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['msg']):
?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['msg'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

		<?php endforeach; endif; unset($_from); ?>
	</div>
<?php endif; ?>
<div class="main"><div class="post">
		<td id="main" valign="top" >
		<?php if ($this->_supers['session']['amxadmins_view'] == 'yes'): ?>
			<span class="title"><?php echo ((is_array($_tmp='_WEBADMINSSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span>
			<table width="95%" align="center"><tr><td>
				<table border="1" width="100%">
					<tr class="htabletop"><td colspan="5"><b><?php echo ((is_array($_tmp='_WEBADMINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td></tr>
					<tr class="htablebottom">
						<td><?php echo ((is_array($_tmp='_NAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td align="center" width="1%"><?php echo ((is_array($_tmp='_LEVEL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%"><?php echo ((is_array($_tmp='_EMAIL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<td align="center" width="1%"><?php echo ((is_array($_tmp='_LASTLOGIN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%"><b>&nbsp;</b></td>
					</tr>
					<?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['users']):
?>
						<form method="POST" name="<?php echo $this->_tpl_vars['users']['uid']; ?>
">
							<input type="hidden" name="uid" value="<?php echo $this->_tpl_vars['users']['uid']; ?>
" />
							<input type="hidden" name="newpw" id="newpw<?php echo $this->_tpl_vars['users']['uid']; ?>
" value="" />
							<tr class="settings_line">
								<td align="center">
									<?php if ($this->_supers['session']['webadmins_edit'] == 'yes'): ?>
										<input type="text" name="name" value="<?php echo $this->_tpl_vars['users']['name']; ?>
"/>
									<?php else: ?>
										<input type="hidden" name="name" value="<?php echo $this->_tpl_vars['users']['name']; ?>
"/>
										<b><?php echo $this->_tpl_vars['users']['name']; ?>
</b>
									<?php endif; ?>
								</td>
								<td align="center" width="1%">
									<?php if ($this->_supers['session']['webadmins_edit'] == 'yes'): ?>
										<?php echo smarty_function_html_options(array('name' => 'level','values' => $this->_tpl_vars['levels'],'output' => $this->_tpl_vars['levels'],'selected' => $this->_tpl_vars['users']['level']), $this);?>

									<?php else: ?>
										<input type="hidden" name="level" value="<?php echo $this->_tpl_vars['users']['level']; ?>
"/>
										<?php echo $this->_tpl_vars['users']['level']; ?>

									<?php endif; ?>
								</td>
								<td align="center"><input type="text" size="40" name="email" value="<?php echo $this->_tpl_vars['users']['email']; ?>
" <?php if (! ( $this->_supers['session']['uname'] == $this->_tpl_vars['users']['name'] || $this->_supers['session']['webadmins_edit'] == 'yes' )): ?>disabled<?php endif; ?>/></td>
								<td align="center"><nobr>
									<?php if ($this->_tpl_vars['users']['last_action']): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['users']['last_action'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y - %T") : smarty_modifier_date_format($_tmp, "%d.%m.%Y - %T")); ?>

									<?php else: ?>
										<i><?php echo ((is_array($_tmp='_NEVER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i>
									<?php endif; ?>
								</nobr></td>
								<td align="center"><nobr>
											<input type="submit" class="button" name="save" value="<?php echo ((is_array($_tmp='_SAVE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if (! ( $this->_supers['session']['uname'] == $this->_tpl_vars['users']['name'] || $this->_supers['session']['webadmins_edit'] == 'yes' )): ?>disabled<?php endif; ?> />
											&nbsp;
											<input type="submit" class="button" name="del" value="<?php echo ((is_array($_tmp='_DELETE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp='_DELADMIN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" <?php if ($this->_supers['session']['webadmins_edit'] !== 'yes'): ?>disabled<?php endif; ?> />
											&nbsp;
											<input type="submit" class="button" name="setnewpw" value="<?php echo ((is_array($_tmp='_NEWPASSWORD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" 
												onclick="<?php if ($this->_supers['session']['uname'] == $this->_tpl_vars['users']['name']): ?>alert('<?php echo ((is_array($_tmp='_YOURPASSWORD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');<?php endif; ?>return SetNewPassword('newpw<?php echo $this->_tpl_vars['users']['uid']; ?>
','<?php echo ((is_array($_tmp='_ENTERPASSWORD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
','<?php echo ((is_array($_tmp='_PASSWORD2')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
','<?php echo ((is_array($_tmp='_PASSWORDNOTMATCH')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" 
													<?php if (! ( $this->_supers['session']['uname'] == $this->_tpl_vars['users']['name'] || $this->_supers['session']['webadmins_edit'] == 'yes' )): ?>disabled<?php endif; ?> />
								
								</nobr></td>
							</tr>
						</form>
					<?php endforeach; endif; unset($_from); ?>
				</table>
				<?php if ($this->_supers['session']['webadmins_edit'] == 'yes'): ?>
					<form method="POST">
						<table border="1" width="50%">
							<tr class="htable">
								<td colspan="4"><b><?php echo ((is_array($_tmp='_WEBADMINADD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
							</tr>
							<tr class="settings_line"><td><?php echo ((is_array($_tmp='_NAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td><td align="left"><input type="text" name="name" value="<?php echo $this->_tpl_vars['input']['name']; ?>
" /></td></tr>
							<tr class="settings_line"><td><?php echo ((is_array($_tmp='_EMAIL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td><td align="left"><input type="text" size="40" name="email" value="<?php echo $this->_tpl_vars['input']['email']; ?>
" /></td></tr>
							<tr class="settings_line"><td><?php echo ((is_array($_tmp='_PASSWORD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td><td align="left"><input type="password" name="pw" /></td></tr>
							<tr class="settings_line"><td><?php echo ((is_array($_tmp='_PASSWORD2')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td><td align="left"><input type="password" name="pw2" /></td></tr>
							<tr class="settings_line">
								<td><?php echo ((is_array($_tmp='_LEVEL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
								<td><?php echo smarty_function_html_options(array('name' => 'level','values' => $this->_tpl_vars['levels'],'output' => $this->_tpl_vars['levels'],'selected' => $this->_tpl_vars['input']['level']), $this);?>
</td>
								<td>
									<input type="submit" class="button" name="new" value="<?php echo ((is_array($_tmp='_ADD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['webadmins_edit'] !== 'yes'): ?>disabled<?php endif; ?> />&nbsp;
									<input type="reset" class="button" value="<?php echo ((is_array($_tmp='_CLEAR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
">
								</td>
							</tr>
						</table>
					</form>
				<?php endif; ?>
			<?php else: ?>
				<?php echo ((is_array($_tmp='_NOACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

			<?php endif; ?>
			</td></tr></table>
		</td>
	</tr>
</table>
</div></div>