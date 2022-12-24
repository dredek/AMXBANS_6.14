<?php /* Smarty version 2.6.25, created on 2020-06-09 01:51:10
         compiled from layer_banedit_banlist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'layer_banedit_banlist.tpl', 4, false),array('modifier', 'date_format', 'layer_banedit_banlist.tpl', 71, false),array('modifier', 'bbcode2html', 'layer_banedit_banlist.tpl', 73, false),array('function', 'html_options', 'layer_banedit_banlist.tpl', 28, false),)), $this); ?>
<td class="table_list" colspan="10"><div style="display:none;">
		<table width="90%">
			<tr class="htable">
				<td><nobr><b><?php echo ((is_array($_tmp='_EDITBAN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></nobr></td>
			</tr>
			<tr>
				<td colspan="2">
					<table width="100%" class="table_details" border="1">
						<form method="post">
						<input type="hidden" name="site" value="<?php echo $this->_tpl_vars['site']; ?>
" />
						<input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['ban_list']['bid']; ?>
" />
						<input type="hidden" name="details_x" value="1" />
						<input type="hidden" name="ban_length_old" value="<?php echo $this->_tpl_vars['ban_list']['ban_length']; ?>
" />
						<input type="hidden" name="ban_created" value="<?php echo $this->_tpl_vars['ban_list']['ban_created']; ?>
" />
						<tr class="settings_line"><td width="30%"><b><?php echo ((is_array($_tmp='_NICKNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td>
							<td><input type="test" size="40" id="id0" name="player_nick" value="<?php echo $this->_tpl_vars['ban_list']['player_nick']; ?>
" <?php if ($this->_tpl_vars['ban_list']['ban_length'] == -1): ?>disabled<?php endif; ?> /></td>
						</tr>
						<tr class="settings_line"><td><b><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td>
							<td><input type="test" size="40" id="id1" name="player_id" value="<?php echo $this->_tpl_vars['ban_list']['player_id']; ?>
" <?php if ($this->_tpl_vars['ban_list']['ban_length'] == -1): ?>disabled<?php endif; ?> /></td>
						</tr>
						<tr class="settings_line"><td><b><?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td>
							<td><?php if ($this->_supers['session']['ip_view'] == 'yes'): ?>
								<input type="test" size="40" id="id2" name="player_ip" value="<?php echo $this->_tpl_vars['ban_list']['player_ip']; ?>
" <?php if ($this->_tpl_vars['ban_list']['ban_length'] == -1): ?>disabled<?php endif; ?> /><?php else: ?><i><?php echo ((is_array($_tmp='_HIDDEN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i>
								<?php endif; ?>
							</td>
						</tr>
						<tr class="settings_line"><td><b><?php echo ((is_array($_tmp='_BANTYPE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td>
							<td><select id="id3" name="ban_type" width="200" <?php if ($this->_tpl_vars['ban_list']['ban_length'] == -1): ?>disabled<?php endif; ?>><?php echo smarty_function_html_options(array('output' => $this->_tpl_vars['type_output'],'values' => $this->_tpl_vars['type_values'],'selected' => $this->_tpl_vars['ban_list']['ban_type']), $this);?>
</select></td>
						</tr>
						<tr class="settings_line"><td><b><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td>
							<td><input type="test" size="40" id="id4" name="ban_reason" value="<?php echo $this->_tpl_vars['ban_list']['ban_reason']; ?>
" <?php if ($this->_tpl_vars['ban_list']['ban_length'] == -1): ?>disabled<?php endif; ?>/></td>
						</tr>
						<tr class="settings_line"><td><b><?php echo ((is_array($_tmp='_BANLENGHT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td>
							<td><?php if ($this->_supers['session']['bans_unban'] == 'yes' || ( $this->_supers['session']['bans_unban'] == 'own' && $this->_supers['session']['uname'] == $this->_tpl_vars['ban_list']['username'] )): ?>
									<input type="test" size="10" id="id5" name="ban_length" value="<?php if ($this->_tpl_vars['ban_list']['ban_length'] != -1): ?><?php echo $this->_tpl_vars['ban_list']['ban_length']; ?>
<?php endif; ?>"  <?php if ($this->_tpl_vars['ban_list']['ban_length'] == -1): ?>disabled<?php endif; ?>/> <?php echo ((is_array($_tmp='_MINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

									<b><input type="checkbox" 
										onclick="this.form.id0.disabled=this.checked;
												this.form.id1.disabled=this.checked;
												this.form.id2.disabled=this.checked;
												this.form.id3.disabled=this.checked;
												this.form.id4.disabled=this.checked;
												this.form.id5.disabled=this.checked" name="unban"
												/> <?php echo ((is_array($_tmp='_UNBANPLAYER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b>
								<?php else: ?>
									<?php echo $this->_tpl_vars['ban_list']['ban_length']; ?>

								<?php endif; ?> 
							</td>
						</tr>
						<tr class="settings_line"><td><b><?php echo ((is_array($_tmp='_EDITREASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td>
							<td>
								<textarea name="edit_reason" id="edit_reason" cols="50" rows="3" wrap="soft"></textarea>
							</td>
						</tr>
					</table>
					<div class="_right"><input type="submit" class="button" name="edit_ban" onclick="return confirm('<?php echo ((is_array($_tmp='_SAVEEDIT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" value="<?php echo ((is_array($_tmp='_SAVE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /></div>
				</form>
					
					<?php if ($this->_tpl_vars['ban_lists_edits']): ?>
					<br />
					<table width="100%" cellspacing="0" border="1">
						<tr class="htable">
							<td colspan="3"><b><?php echo ((is_array($_tmp='_BANDETAILSEDITS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
						</tr>
						<tr class="settings_line">
							<td width="1%"><b><?php echo ((is_array($_tmp='_DATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
							<td width="1%"><b><?php echo ((is_array($_tmp='_ADMIN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
							<td><b><?php echo ((is_array($_tmp='_EDITREASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
						</tr>
						<?php $_from = $this->_tpl_vars['ban_lists_edits']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ban_details_edits']):
?>
						<tr class="settings_line">
							<td nowrap><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_lists_edits']['edit_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
							<td nowrap><?php echo $this->_tpl_vars['ban_lists_edits']['admin_nick']; ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_lists_edits']['edit_reason'])) ? $this->_run_mod_handler('bbcode2html', true, $_tmp) : smarty_modifier_bbcode2html($_tmp)); ?>
</td>
						</tr>
						<?php endforeach; endif; unset($_from); ?>
					</table>
					<?php endif; ?>
				</td>
			</tr>
		</table>
</div></td>