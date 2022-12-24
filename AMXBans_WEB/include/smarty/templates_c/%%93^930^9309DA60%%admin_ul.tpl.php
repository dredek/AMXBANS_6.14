<?php /* Smarty version 2.6.25, created on 2020-08-22 03:13:45
         compiled from admin_ul.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'admin_ul.tpl', 3, false),array('function', 'html_options', 'admin_ul.tpl', 27, false),)), $this); ?>
	<?php if ($this->_tpl_vars['msg']): ?>
		<div class="notice">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['msg'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

		</div>
	<?php endif; ?>
	<div class="main"><div class="post">
		<td id="main" valign="top" >
		<?php if ($this->_supers['session']['amxadmins_view'] == 'yes'): ?>
			<span class="title"><?php echo ((is_array($_tmp='_ADMINLEVELSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span>
			<table width="60%" align="center"><tr><td>
				<?php $_from = $this->_tpl_vars['levels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['levels']):
?>
				<form method="POST">
				<input type="hidden" name="lid" value="<?php echo $this->_tpl_vars['levels']['level']; ?>
"></input>
				<fieldset><legend><span class="title"><?php echo ((is_array($_tmp='_LEVEL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 #<?php echo $this->_tpl_vars['levels']['level']; ?>
</span></legend>
				<table style="border:1px;" width="100%">
					<tr class="htabletop">
						<td><b><?php echo ((is_array($_tmp='_LEVEL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td><td colspan="6" align="center"><b><?php echo ((is_array($_tmp='_BANS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td><td colspan="2"><b><?php echo ((is_array($_tmp='_AMXADMINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td><td>&nbsp</td>
							
					</tr>
					<tr class="htablebottom">
						<td>&nbsp</td>
						<td><?php echo ((is_array($_tmp='_ADD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><?php echo ((is_array($_tmp='_EDIT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><?php echo ((is_array($_tmp='_DELETE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><?php echo ((is_array($_tmp='_LEVELUNBAN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><?php echo ((is_array($_tmp='_LEVELIMPORT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><?php echo ((is_array($_tmp='_LEVELEXPORT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp='_LEVELVIEW')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><?php echo ((is_array($_tmp='_EDIT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td>&nbsp</td>
					</tr>
					<tr>
						<td rowspan="4" style="<?php if ($this->_tpl_vars['levels']['level'] == $this->_supers['session']['level']): ?>background-color:#00aa00;<?php endif; ?>text-align:center;"><b><?php echo $this->_tpl_vars['levels']['level']; ?>
</b></td>
						<td><?php echo smarty_function_html_options(array('name' => 'bans_add','values' => $this->_tpl_vars['choose1'],'output' => ((is_array($_tmp=$this->_tpl_vars['output1'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['levels']['bans_add']), $this);?>
</td>
						<td><?php echo smarty_function_html_options(array('name' => 'bans_edit','values' => $this->_tpl_vars['choose2'],'output' => ((is_array($_tmp=$this->_tpl_vars['output2'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['levels']['bans_edit']), $this);?>
</td>
						<td><?php echo smarty_function_html_options(array('name' => 'bans_delete','values' => $this->_tpl_vars['choose2'],'output' => ((is_array($_tmp=$this->_tpl_vars['output2'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['levels']['bans_delete']), $this);?>
</td>
						<td><?php echo smarty_function_html_options(array('name' => 'bans_unban','values' => $this->_tpl_vars['choose2'],'output' => ((is_array($_tmp=$this->_tpl_vars['output2'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['levels']['bans_unban']), $this);?>
</td>
						<td><?php echo smarty_function_html_options(array('name' => 'bans_import','values' => $this->_tpl_vars['choose1'],'output' => ((is_array($_tmp=$this->_tpl_vars['output1'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['levels']['bans_import']), $this);?>
</td>
						<td><?php echo smarty_function_html_options(array('name' => 'bans_export','values' => $this->_tpl_vars['choose1'],'output' => ((is_array($_tmp=$this->_tpl_vars['output1'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['levels']['bans_export']), $this);?>
</td>
						<td><?php echo smarty_function_html_options(array('name' => 'amxadmins_view','values' => $this->_tpl_vars['choose1'],'output' => ((is_array($_tmp=$this->_tpl_vars['output1'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['levels']['amxadmins_view']), $this);?>
</td>
						<td><?php echo smarty_function_html_options(array('name' => 'amxadmins_edit','values' => $this->_tpl_vars['choose1'],'output' => ((is_array($_tmp=$this->_tpl_vars['output1'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['levels']['amxadmins_edit']), $this);?>
</td>
						<td rowspan="4" <?php if ($this->_tpl_vars['levels']['level'] == $this->_supers['session']['level']): ?>style="background-color: #00aa00;" <?php endif; ?>>
								<input style="margin:0 auto;display:block;" type="submit" class="button" name="save" value="<?php echo ((is_array($_tmp='_SAVE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['permissions_edit'] !== 'yes'): ?>disabled<?php endif; ?> />
								<?php if (( $this->_tpl_vars['levels']['level'] == $this->_tpl_vars['level_max'] && $this->_tpl_vars['levels']['level'] > 1 )): ?>
								<input style="margin:0 auto;display:block;" type="submit" class="button" name="del" value="<?php echo ((is_array($_tmp='_DELETE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp='_DELLEVEL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" <?php if ($this->_supers['session']['permissions_edit'] !== 'yes'): ?>disabled<?php endif; ?> />
								<?php endif; ?>
							</td>
					</tr><tr class="htabletop">
						<td colspan="2"><b><?php echo ((is_array($_tmp='_WEBADMINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td><td colspan="2"><b><?php echo ((is_array($_tmp='_WEBSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td><td colspan="4"><b><?php echo ((is_array($_tmp='_OTHER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
					</tr><tr class="htablebottom">
						<td><?php echo ((is_array($_tmp='_LEVELVIEW')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><?php echo ((is_array($_tmp='_EDIT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp='_LEVELVIEW')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><?php echo ((is_array($_tmp='_EDIT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp='_PERM')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><?php echo ((is_array($_tmp='_DBPRUNE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><?php echo ((is_array($_tmp='_SERVEREDIT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><?php echo ((is_array($_tmp='_VIEWIP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
					</tr><tr align="center">
						<td><?php echo smarty_function_html_options(array('name' => 'webadmins_view','values' => $this->_tpl_vars['choose1'],'output' => ((is_array($_tmp=$this->_tpl_vars['output1'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['levels']['webadmins_view']), $this);?>
</td>
						<td><?php echo smarty_function_html_options(array('name' => 'webadmins_edit','values' => $this->_tpl_vars['choose1'],'output' => ((is_array($_tmp=$this->_tpl_vars['output1'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['levels']['webadmins_edit']), $this);?>
</td>
						<td><?php echo smarty_function_html_options(array('name' => 'websettings_view','values' => $this->_tpl_vars['choose1'],'output' => ((is_array($_tmp=$this->_tpl_vars['output1'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['levels']['websettings_view']), $this);?>
</td>
						<td><?php echo smarty_function_html_options(array('name' => 'websettings_edit','values' => $this->_tpl_vars['choose1'],'output' => ((is_array($_tmp=$this->_tpl_vars['output1'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['levels']['websettings_edit']), $this);?>
</td>
						
						<td><?php echo smarty_function_html_options(array('name' => 'permissions_edit','values' => $this->_tpl_vars['choose1'],'output' => ((is_array($_tmp=$this->_tpl_vars['output1'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['levels']['permissions_edit']), $this);?>
</td>
						<td><?php echo smarty_function_html_options(array('name' => 'prune_db','values' => $this->_tpl_vars['choose1'],'output' => ((is_array($_tmp=$this->_tpl_vars['output1'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['levels']['prune_db']), $this);?>
</td>
						<td><?php echo smarty_function_html_options(array('name' => 'servers_edit','values' => $this->_tpl_vars['choose1'],'output' => ((is_array($_tmp=$this->_tpl_vars['output1'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['levels']['servers_edit']), $this);?>
</td>
						<td><?php echo smarty_function_html_options(array('name' => 'ip_view','values' => $this->_tpl_vars['choose1'],'output' => ((is_array($_tmp=$this->_tpl_vars['output1'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['levels']['ip_view']), $this);?>
</td>
					</tr>
				</table></fieldset>
				<div class="clearer">&nbsp</div>
				</form>
				<?php endforeach; endif; unset($_from); ?>
				<form method="POST">
					<div class="_right">
						<input type="submit" class="button" name="new" value="<?php echo ((is_array($_tmp='_NEWLEVEL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['permissions_edit'] !== 'yes'): ?>disabled<?php endif; ?> />
					</div>
				</form>
			<?php else: ?>
				<?php echo ((is_array($_tmp='_NOACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

			<?php endif; ?>
			</td></tr></table>
		</td>
	</tr>
</table>
</div></div>