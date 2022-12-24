<?php /* Smarty version 2.6.25, created on 2020-07-29 19:14:37
         compiled from admin_lg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'admin_lg.tpl', 4, false),array('modifier', 'date_format', 'admin_lg.tpl', 43, false),array('modifier', 'escape', 'admin_lg.tpl', 44, false),array('function', 'html_options', 'admin_lg.tpl', 13, false),)), $this); ?>
<div class="main"><div class="post">
		<td id="main" valign="top">
		<?php if ($this->_supers['session']['amxadmins_view'] == 'yes'): ?>
			<span class="title"><?php echo ((is_array($_tmp='_LOGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span>
			<table width="95%"><tr><td>
				<tr>
				<td>
					<table border="1" width="50%">
						<tr class="htable">
							<td colspan="3"><b><?php echo ((is_array($_tmp='_FILTER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
						</tr>
						<form method="POST" name="sort">
							<tr class="settings_line" colspan="3"><td><?php echo ((is_array($_tmp='_USER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><?php echo smarty_function_html_options(array('name' => 'username','options' => $this->_tpl_vars['usernames'],'selected' => $this->_tpl_vars['username_checked']), $this);?>
</td></tr>
							<tr class="settings_line" colspan="3">
									<td><?php echo ((is_array($_tmp='_ACTION')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><?php echo smarty_function_html_options(array('name' => 'action','options' => $this->_tpl_vars['actions'],'selected' => $this->_tpl_vars['action_checked']), $this);?>
</td>
									<td colspan="3"><input type="submit" class="button" name="sort" value="<?php echo ((is_array($_tmp='_GO')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /></td>
							</tr>
						</form>
					</table><br />
					<table class="admin_list" border="1" width="50%">
						<tr class="htable">
							<td colspan="3"><b><?php echo ((is_array($_tmp='_DELETE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
						</tr>
						<form method="POST" name="clear">
							<tr class="settings_line"><td><?php echo ((is_array($_tmp='_ALL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td width="1%"><input type="submit" class="button" name="delall" onclick="return confirm('<?php echo ((is_array($_tmp='_DELLOGSALL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php echo ((is_array($_tmp='_DATALOSS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" value="<?php echo ((is_array($_tmp='_DELETE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /></td></tr>
							<tr class="settings_line"><td><?php echo ((is_array($_tmp='_OLDERTHEN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <input type="text" size="3" name="days" > <?php echo ((is_array($_tmp='_DAYS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><input size="1" type="submit" class="button" name="delolder" onclick="return confirm('<?php echo ((is_array($_tmp='_DELLOGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php echo ((is_array($_tmp='_DATALOSS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" value="<?php echo ((is_array($_tmp='_DELETE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /></td></tr>	
						</form>
					</table>
					<br />
					<table border="1" width="100%">
						<tr class="htabletop">
							<td colspan="5"><b><?php echo ((is_array($_tmp='_ACTIONLOGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
						</tr>
						<tr class="htablebottom">
							<td width="1%"><nobr><?php echo ((is_array($_tmp='_INVOKED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</nobr></td>
							<td width="1%" align="center"><?php echo ((is_array($_tmp='_USER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
							<td width="1%" align="center"><?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
							<td width="1%" align="center"><nobr><?php echo ((is_array($_tmp='_ACTION')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</nobr></td>
							<td><?php echo ((is_array($_tmp='_REMARKS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						</tr>
						<?php $_from = $this->_tpl_vars['logs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['logs']):
?>
							<tr class="list">
								<td width="1%"><nobr><?php echo ((is_array($_tmp=$this->_tpl_vars['logs']['timestamp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y - %T") : smarty_modifier_date_format($_tmp, "%d.%m.%Y - %T")); ?>
</nobr></td>
								<td width="1%" align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['logs']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
								<td width="1%" align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['logs']['ip'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
								<td width="1%" align="center"><nobr><?php echo ((is_array($_tmp=$this->_tpl_vars['logs']['action'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</nobr></td>
								<td><?php echo ((is_array($_tmp=$this->_tpl_vars['logs']['remarks'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
							</tr>
						<?php endforeach; endif; unset($_from); ?>
					</table>
					<br />
				

				</td>
				</tr>
			</table>

			
			<br />
				<center><div class="admin_msg"><?php if ($this->_tpl_vars['msg']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['msg'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?></div></center>
		<?php else: ?>
			<?php echo ((is_array($_tmp='_NOACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

		<?php endif; ?>
		</td>
	</tr>
</table>
</div></div>