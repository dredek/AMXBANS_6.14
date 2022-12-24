<?php /* Smarty version 2.6.25, created on 2020-06-10 13:20:07
         compiled from layer_banhistory.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'layer_banhistory.tpl', 6, false),array('modifier', 'date_format', 'layer_banhistory.tpl', 19, false),)), $this); ?>
<td class="table_list" colspan=10><div style="display: none">
	<?php if ($this->_tpl_vars['activ_count'] > 0): ?>	
			<table width="90%" cellspacing="0">
				<form method="POST">
					<tr>
						<td class="htable" colspan="6"><span style="font-weight:bold;color:red"><?php echo ((is_array($_tmp='_ACTIVEBANS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
  (<?php echo $this->_tpl_vars['activ_count']; ?>
)</span></td>
					</tr>
					<tr class="htable">
						<td class="fat" width="2%"><?php echo ((is_array($_tmp='_DATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td class="fat" width="24%"><?php echo ((is_array($_tmp='_PLAYER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td class="fat" width="24%"><?php echo ((is_array($_tmp='_ADMIN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td class="fat" width="24%"><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td class="fat" width="24%"><?php echo ((is_array($_tmp='_LENGHT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td>&nbsp;</td>
					</tr>
				</form>
				<?php $_from = $this->_tpl_vars['ban_details_activ']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ban_details_activ']):
?>
					<tr style="cursor:pointer;" onClick="NewToggleLayer('layer_<?php echo $this->_tpl_vars['ban_details_activ']['bid']; ?>
');" class="list">
						<td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_details_activ']['ban_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>
</td>
						<td align="center"><?php echo $this->_tpl_vars['ban_details_activ']['player_nick']; ?>
</td>
						<td align="center"><?php echo $this->_tpl_vars['ban_details_activ']['admin_nick']; ?>
</td>
						<td align="center"><?php echo $this->_tpl_vars['ban_details_activ']['ban_reason']; ?>
</td>
						<td align="center"><?php if ($this->_tpl_vars['ban_details_activ']['ban_length'] > 0): ?><?php echo $this->_tpl_vars['ban_details_activ']['ban_length']; ?>
 <?php echo ((is_array($_tmp='_MINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp='_PERMANENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?></td>
						<td>&nbsp;</td>
					</tr>
					<tr id="layer_<?php echo $this->_tpl_vars['ban_details_activ']['bid']; ?>
" style="display: none">
						<td class="table_list" colspan=10>
							<center>
								<form method="POST">
								<input type="hidden" name="site" value="<?php echo $this->_tpl_vars['site']; ?>
" />
								<input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['ban_details_activ']['bid']; ?>
" />
								<table width="90%" class="table_details" cellspacing="0">
									<tr class="htable">
										<td class="fat" width="20%"><b><?php echo ((is_array($_tmp='_BANDETAILS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td>
										<td align="right">
											<input name="details" type="image" src="images/page.png" border="0" title="<?php echo ((is_array($_tmp='_DETAILS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"/>
										</td>
									</tr>
									<tr><td><b><?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php if ($this->_supers['session']['ip_view'] == 'yes'): ?><?php echo $this->_tpl_vars['ban_details_activ']['player_ip']; ?>
<?php else: ?><i><?php echo ((is_array($_tmp='_HIDDEN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i><?php endif; ?></td></tr>
									<tr><td><b><?php echo ((is_array($_tmp='_BANTYPE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php if ($this->_tpl_vars['ban_details_activ']['ban_type'] == 'S'): ?><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

										<?php elseif ($this->_tpl_vars['ban_details_activ']['ban_type'] == 'SI'): ?><?php echo ((is_array($_tmp="_STEAMID&IP")) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

										<?php else: ?><?php echo ((is_array($_tmp='_NOTAVAILABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?>
									</td></tr>
									<tr><td><b><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php echo $this->_tpl_vars['ban_details_activ']['ban_reason']; ?>
</td></tr>
									<tr><td><b><?php echo ((is_array($_tmp='_INVOKED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_details_activ']['ban_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d. %b %Y - %T") : smarty_modifier_date_format($_tmp, "%d. %b %Y - %T")); ?>
</td></tr>
									<tr><td><b><?php echo ((is_array($_tmp='_BANLENGHT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php if ($this->_tpl_vars['ban_details_activ']['ban_length'] == 0): ?><?php echo ((is_array($_tmp='_PERMANENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['ban_details_activ']['ban_length']; ?>
 <?php echo ((is_array($_tmp='_MINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?></td></tr>
									<tr><td><b><?php echo ((is_array($_tmp='_BANBY')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php echo $this->_tpl_vars['ban_details_activ']['admin_nick']; ?>
</td></tr>
									<tr><td><b><?php echo ((is_array($_tmp='_BANON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php if ($this->_tpl_vars['ban_details_activ']['server_name'] == 'website'): ?><?php echo ((is_array($_tmp='_WEB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['ban_details_activ']['server_name']; ?>
<?php endif; ?></td></tr>
								</table>
								<br />
								</form>
							</center>
						</td>
					</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
	<?php endif; ?>	
	<?php if ($this->_tpl_vars['exp_count'] > 0): ?>	
			<table width="90%" cellspacing="0">
				<form method="POST">
					<tr>
						<td colspan="6"><span style="font-weight:bold;color:green"><?php echo ((is_array($_tmp='_EXPIREDBANS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
  (<?php echo $this->_tpl_vars['exp_count']; ?>
)</span></td>
					</tr>
					<tr class="htable">
						<td class="fat" width="2%"><?php echo ((is_array($_tmp='_DATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td class="fat" width="24%"><?php echo ((is_array($_tmp='_PLAYER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td class="fat" width="24%"><?php echo ((is_array($_tmp='_ADMIN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td class="fat" width="24%"><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td class="fat" width="24%"><?php echo ((is_array($_tmp='_LENGHT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td>&nbsp;</td>
					</tr>
				</form>
				<?php $_from = $this->_tpl_vars['ban_details_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ban_details_exp']):
?>
					<tr class="list"  style="cursor:pointer;" onClick="NewToggleLayer('layer_<?php echo $this->_tpl_vars['ban_details_exp']['bid']; ?>
');" >
						<td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_details_exp']['ban_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>
</td>
						<td align="center"><?php echo $this->_tpl_vars['ban_details_exp']['player_nick']; ?>
</td>
						<td align="center"><?php echo $this->_tpl_vars['ban_details_exp']['admin_nick']; ?>
</td>
						<td align="center"><?php echo $this->_tpl_vars['ban_details_exp']['ban_reason']; ?>
</td>
						<td align="center"><?php if ($this->_tpl_vars['ban_details_exp']['ban_length'] > 0): ?><?php echo $this->_tpl_vars['ban_details_exp']['ban_length']; ?>
 <?php echo ((is_array($_tmp='_MINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp='_PERMANENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?></td>
						<td>&nbsp;</td>
					</tr>
					<tr id="layer_<?php echo $this->_tpl_vars['ban_details_exp']['bid']; ?>
" style="display: none">
						<td colspan=10>
							<div style="display: none">
								<form method="POST">
								<input type="hidden" name="site" value="<?php echo $this->_tpl_vars['site']; ?>
" />
								<input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['ban_details_exp']['bid']; ?>
" />
								<table width="90%" class="table_details" cellspacing="0">
									<tr class="htable">
										<td class="fat" width="20%"><?php echo ((is_array($_tmp='_BANDETAILS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
										<td align="right">
											<input name="details" type="image" src="images/page.png" border="0" title="<?php echo ((is_array($_tmp='_DETAILS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"/>
										</td>
									</tr>
									<tr><td><b><?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php if ($this->_supers['session']['ip_view'] == 'yes'): ?><?php echo $this->_tpl_vars['ban_details_exp']['player_ip']; ?>
<?php else: ?><i><?php echo ((is_array($_tmp='_HIDDEN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i><?php endif; ?></td></tr>
									<tr><td><b><?php echo ((is_array($_tmp='_BANTYPE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php if ($this->_tpl_vars['ban_details_exp']['ban_type'] == 'S'): ?><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

										<?php elseif ($this->_tpl_vars['ban_details_exp']['ban_type'] == 'SI'): ?><?php echo ((is_array($_tmp="_STEAMID&IP")) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

										<?php else: ?><?php echo ((is_array($_tmp='_NOTAVAILABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?>
									</td></tr>
									<tr><td><b><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php echo $this->_tpl_vars['ban_details_exp']['ban_reason']; ?>
</td></tr>
									<tr><td><b><?php echo ((is_array($_tmp='_INVOKED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_details_exp']['ban_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d. %b %Y - %T") : smarty_modifier_date_format($_tmp, "%d. %b %Y - %T")); ?>
</td></tr>
									<tr><td><b><?php echo ((is_array($_tmp='_BANLENGHT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php if ($this->_tpl_vars['ban_details_exp']['ban_length'] == 0): ?><?php echo ((is_array($_tmp='_PERMANENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['ban_details_exp']['ban_length']; ?>
 <?php echo ((is_array($_tmp='_MINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?></td></tr>
									<tr><td><b><?php echo ((is_array($_tmp='_BANBY')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php echo $this->_tpl_vars['ban_details_exp']['admin_nick']; ?>
</td></tr>
									<tr><td><b><?php echo ((is_array($_tmp='_BANON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php if ($this->_tpl_vars['ban_details_exp']['server_name'] == 'website'): ?><?php echo ((is_array($_tmp='_WEB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['ban_details_exp']['server_name']; ?>
<?php endif; ?></td></tr>
								</table>
								<br />
								</form>
							</div>
						</td>
					</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
	<?php endif; ?>
</td>