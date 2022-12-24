<?php /* Smarty version 2.6.25, created on 2020-06-09 01:51:04
         compiled from admin_ms.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'admin_ms.tpl', 3, false),array('modifier', 'getlanguage', 'admin_ms.tpl', 10, false),array('function', 'html_options', 'admin_ms.tpl', 20, false),)), $this); ?>
<?php if ($this->_tpl_vars['msg'] <> ""): ?>
	<div class="notice">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['msg'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

	</div>
<?php endif; ?>
<div class="main"><div class="post">
		<td id="main" valign="top" >
		<?php if ($this->_supers['session']['amxadmins_view'] == 'yes'): ?>
			<span class="title"><?php echo ((is_array($_tmp='_SITESETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span>
			<?php $this->assign('lang', ((is_array($_tmp=$this->_tpl_vars['true'])) ? $this->_run_mod_handler('getlanguage', true, $_tmp) : smarty_modifier_getlanguage($_tmp))); ?>
			<table width="95%" align="center"><tr><td>
				<table border="1" width="100%">
				<form method="POST">
				<table>
					<tr class="htable">
						<td colspan="2"><b><?php echo ((is_array($_tmp='_SYSTEMSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
					</tr>
					<tr class="settings_line">
						<td width="50%"><?php echo ((is_array($_tmp='_DEFAULTLANG')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><?php echo smarty_function_html_options(array('name' => 'language','values' => $this->_tpl_vars['lang'],'output' => $this->_tpl_vars['lang'],'selected' => $this->_tpl_vars['current_lang']), $this);?>
</td>
					</tr>
					<tr class="settings_line">
						<td><?php echo ((is_array($_tmp='_USECAPTURE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><select name="use_capture" width="200"><?php echo smarty_function_html_options(array('output' => ((is_array($_tmp=$this->_tpl_vars['yesno_select'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'values' => $this->_tpl_vars['yesno_values'],'selected' => $this->_tpl_vars['vars']['use_capture']), $this);?>
</select></td>
					</tr>
					<tr class="settings_line">
						<td><?php echo ((is_array($_tmp='_AUTOPRUNE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><select name="auto_prune" width="200" 
							onchange="document.getElementById('max_offences').disabled=(this.value==0);document.getElementById('max_offences_reason').disabled=(this.value==0);">
							<?php echo smarty_function_html_options(array('output' => ((is_array($_tmp=$this->_tpl_vars['yesno_select'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'values' => $this->_tpl_vars['yesno_values'],'selected' => $this->_tpl_vars['vars']['auto_prune']), $this);?>

						</select></td>
					</tr>
				<?php if ($this->_tpl_vars['vars']['auto_prune'] == 1): ?>
					<tr class="settings_line">
						<td><?php echo ((is_array($_tmp='_AUTOPRUNE_MAXOFFENCES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><input type="text" size="5" name="max_offences" id="max_offences" value="<?php echo $this->_tpl_vars['vars']['max_offences']; ?>
" <?php if ($this->_tpl_vars['vars']['auto_prune'] == 0): ?>disabled="disabled"<?php endif; ?>/>
						</td>
					</tr>
					<tr class="settings_line">
						<td><?php echo ((is_array($_tmp='_AUTOPRUNE_MAXOFFENCES_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><input type="text" size="30" name="max_offences_reason" id="max_offences_reason" value="<?php echo $this->_tpl_vars['vars']['max_offences_reason']; ?>
" <?php if ($this->_tpl_vars['vars']['auto_prune'] == 0): ?>disabled="disabled"<?php endif; ?>/>
						</td>
					</tr>
				<?php endif; ?>
					<tr class="settings_line">
						<td><?php echo ((is_array($_tmp='_COOKIENAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><input type="text" size="30" name="cookie" value="<?php echo $this->_tpl_vars['vars']['cookie']; ?>
" /></td>
					</tr>
				</table>
				<br />
				<table class="admin_list" border="1" width="50%" align="center">
					<tr class="htable">
						<td colspan="2"><?php echo ((is_array($_tmp='_VIEWSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
					</tr>
					<tr class="settings_line">
						<td width="50%"><?php echo ((is_array($_tmp='_BANNER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><select name="banner" width="200"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['banners'],'selected' => $this->_tpl_vars['vars']['banner']), $this);?>
</select></td>
					</tr>
					<tr class="settings_line">
						<td width="50%"><?php echo ((is_array($_tmp='_BANNERURL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><input type="text" name="banner_url" size="30" value="<?php echo $this->_tpl_vars['vars']['banner_url']; ?>
"></select></td>
					</tr>
					<tr class="settings_line">
						<td><?php echo ((is_array($_tmp='_DESIGN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><?php echo smarty_function_html_options(array('name' => 'design','options' => $this->_tpl_vars['designs'],'selected' => $this->_tpl_vars['vars']['design']), $this);?>
</td>
					</tr>
					<tr class="settings_line">
						<td><?php echo ((is_array($_tmp='_STARTPAGE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><select name="start_page" width="200"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['start_pages'],'selected' => $this->_tpl_vars['vars']['start_page']), $this);?>
</select></td>
					</tr>
				</table>
				<br />
				<table class="admin_list" border="1" width="50%" align="center">
					<tr class="htable">
						<td colspan="2"><?php echo ((is_array($_tmp='_COMMENTSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
					</tr>
					<tr class="settings_line">
						<td width="50%"><?php echo ((is_array($_tmp='_USECOMMENTSYSTEM')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><select name="use_comment" width="200"><?php echo smarty_function_html_options(array('output' => ((is_array($_tmp=$this->_tpl_vars['yesno_select'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'values' => $this->_tpl_vars['yesno_values'],'selected' => $this->_tpl_vars['vars']['use_comment']), $this);?>
</select></td>
					</tr>
					<?php if ($this->_tpl_vars['vars']['use_comment'] == 1): ?>
					<tr class="settings_line">
						<td width="50%"><?php echo ((is_array($_tmp='_COMMENTUSERALLOWEDWRITE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><select name="comment_all" width="200"><?php echo smarty_function_html_options(array('output' => ((is_array($_tmp=$this->_tpl_vars['yesno_select'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'values' => $this->_tpl_vars['yesno_values'],'selected' => $this->_tpl_vars['vars']['comment_all']), $this);?>
</select></td>
					</tr>
					<?php else: ?>
						<input type="hidden" name="comment_all" value="<?php echo $this->_tpl_vars['vars']['comment_all']; ?>
" />
					<?php endif; ?>
				</table>
				<br />
				<table class="admin_list" border="1" width="50%" align="center">
					<tr class="htable">
						<td colspan="2"><?php echo ((is_array($_tmp='_FILESETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
					</tr>
					<tr class="settings_line">
						<td width="50%"><?php echo ((is_array($_tmp='_USEFILESYSTEM')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><select name="use_demo" width="200"><?php echo smarty_function_html_options(array('output' => ((is_array($_tmp=$this->_tpl_vars['yesno_select'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'values' => $this->_tpl_vars['yesno_values'],'selected' => $this->_tpl_vars['vars']['use_demo']), $this);?>
</select></td>
					</tr>
					<?php if ($this->_tpl_vars['vars']['use_demo'] == 1): ?>
					<tr class="settings_line">
						<td width="50%"><?php echo ((is_array($_tmp='_FILE_USERUPLOADALLOWED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><select name="demo_all" width="200"><?php echo smarty_function_html_options(array('output' => ((is_array($_tmp=$this->_tpl_vars['yesno_select'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'values' => $this->_tpl_vars['yesno_values'],'selected' => $this->_tpl_vars['vars']['demo_all']), $this);?>
</select></td>
					</tr>
					<tr class="settings_line">
						<td><?php echo ((is_array($_tmp='_MAXFILESIZE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><input type="text" size="5" name="max_file_size" value="<?php echo $this->_tpl_vars['vars']['max_file_size']; ?>
" /> MB</td>
					</tr>
					<tr class="settings_line">
						<td><?php echo ((is_array($_tmp='_FILE_ALLOWEDTYPES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><input type="text" size="30" name="file_type" value="<?php echo $this->_tpl_vars['vars']['file_type']; ?>
" /></td>
					</tr>
					<?php else: ?>
						<input type="hidden" name="demo_all" value="<?php echo $this->_tpl_vars['vars']['demo_all']; ?>
" />
						<input type="hidden" name="max_file_size" value="<?php echo $this->_tpl_vars['vars']['max_file_size']; ?>
" />
						<input type="hidden" name="file_type" value="<?php echo $this->_tpl_vars['vars']['file_type']; ?>
" />
					<?php endif; ?>
				</table>
				<br />
				<table border="1" width="50%" align="center">
					<tr class="htable" colspan="20">
						<td colspan="2"><?php echo ((is_array($_tmp='_BANLISTSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
					</tr>
					<tr class="settings_line">
						<td width="50%"><?php echo ((is_array($_tmp='_BANSPERPAGE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><input type="text" size="5" name="bans_per_page" value="<?php echo $this->_tpl_vars['vars']['bans_per_page']; ?>
" /></td>
					</tr>
					<?php if ($this->_tpl_vars['vars']['use_comment'] == 1): ?>
					<tr class="settings_line">
						<td><?php echo ((is_array($_tmp='_SHOWCOMMENTSCOUNT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><select name="show_comment_count" width="200"><?php echo smarty_function_html_options(array('output' => ((is_array($_tmp=$this->_tpl_vars['yesno_select'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'values' => $this->_tpl_vars['yesno_values'],'selected' => $this->_tpl_vars['vars']['show_comment_count']), $this);?>
</select></td>
					</tr>
					<?php else: ?>
						<input type="hidden" name="show_comment_count" value="<?php echo $this->_tpl_vars['vars']['show_comment_count']; ?>
" />
					<?php endif; ?>
					<?php if ($this->_tpl_vars['vars']['use_demo'] == 1): ?>
					<tr class="settings_line">
						<td><?php echo ((is_array($_tmp='_SHOWFILESCOUNT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><select name="show_demo_count" width="200"><?php echo smarty_function_html_options(array('output' => ((is_array($_tmp=$this->_tpl_vars['yesno_select'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'values' => $this->_tpl_vars['yesno_values'],'selected' => $this->_tpl_vars['vars']['show_demo_count']), $this);?>
</select></td>
					</tr>
					<?php else: ?>
						<input type="hidden" name="show_demo_count" value="<?php echo $this->_tpl_vars['vars']['show_demo_count']; ?>
" />
					<?php endif; ?>
					<tr class="settings_line">
						<td><?php echo ((is_array($_tmp='_SHOWKICKCOUNT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><select name="show_kick_count" width="200"><?php echo smarty_function_html_options(array('output' => ((is_array($_tmp=$this->_tpl_vars['yesno_select'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'values' => $this->_tpl_vars['yesno_values'],'selected' => $this->_tpl_vars['vars']['show_kick_count']), $this);?>
</select></td>
					</tr>
				</table>
				<div align="right"><input type="submit" class="button" name="save" value="<?php echo ((is_array($_tmp='_SAVE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp='_SAVESETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" <?php if ($this->_supers['session']['websettings_edit'] !== 'yes'): ?>disabled<?php endif; ?> /></div>
				</form>
			</table>
		<?php else: ?>
			<?php echo ((is_array($_tmp='_NOACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 !!
		<?php endif; ?>
		</td>
	</tr>
</table>
</div></div>