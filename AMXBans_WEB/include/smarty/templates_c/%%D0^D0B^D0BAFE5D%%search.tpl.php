<?php /* Smarty version 2.6.25, created on 2020-06-09 11:18:04
         compiled from search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'search.tpl', 6, false),array('modifier', 'date_format', 'search.tpl', 44, false),array('modifier', 'date2word', 'search.tpl', 154, false),array('function', 'html_options', 'search.tpl', 104, false),)), $this); ?>
<div class="main">
	<div class="post">
		<table frame="box" rules="groups" summary=""> 
			<thead> 
				<tr>
					<th style="width:150px;"><?php echo ((is_array($_tmp='_SEARCH')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th>&nbsp;</th>
					<th style="width:50px;">&nbsp;</th>
				</tr>
			</thead> 
			<tbody> 
				<tr>
					<form method="post" style="display:inline;">
						<td class="fat"><?php echo ((is_array($_tmp='_NICKNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
						<td><input type="text" size="40" name="nick" style="width:200px;" /></td> 
						<td><input type="submit" name="submit" class="button" value="<?php echo ((is_array($_tmp='_SEARCH')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /></td>
					</form>
				</tr> 
				<tr>
					<form method="post" style="display:inline;">
						<td class="fat"><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
						<td><input type="text" name="steamid" size="40" style="width:200px;"/></td> 
						<td><input type="submit" class="button" name="submit" value="<?php echo ((is_array($_tmp='_SEARCH')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /></td> 
					</form>
				</tr> 
				<tr>
					<form method="post" style="display:inline;">
						<td class="fat"><?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
						<td><input type="text" name="ip" size="40" style="width:200px;"/></td> 
						<td><input type="submit" class="button" name="submit" value="<?php echo ((is_array($_tmp='_SEARCH')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"/></td>
					</form>
				</tr> 
				<tr> 
					<form method="post" style="display:inline;">
						<td class="fat"><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
						<td><input type="text" name="reason" size="40" style="width:200px;"/></td> 
						<td><input type="submit" name="submit" class="button" value="<?php echo ((is_array($_tmp='_SEARCH')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"/></td>
					</form>
				</tr> 
				<tr> 
					<form method="post" name="searchdate" style="display:inline;">
						<td class="fat"><?php echo ((is_array($_tmp='_DATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
						<td>
							<input type="text" name="date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>
" style="width:200px;" />
							&nbsp;<script language="javascript" src="calendar1.js"></script>
							<a href="javascript:cal1.popup();">
								<img src="images/calendar.png" width="16" height="16" border="0" alt="<?php echo ((is_array($_tmp='_PICK_DATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='_PICK_DATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"/>
							</a>
						</td> 
						<td><input type="submit" class="button" value="<?php echo ((is_array($_tmp='_SEARCH')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"/></td> 
					</form>
					<script language="javascript" type="text/javascript">
					<!--
						var cal1 = new calendar1(document.forms['searchdate'].elements['date']);
						cal1.year_scroll = true;
						cal1.time_comp = false;
					-->
					</script>
				</tr> 
				<tr> 
					<form method="post" style="display:inline;">
						<td class="fat"><?php echo ((is_array($_tmp='_PLAYERSWITH')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
						<td>
							<select name='timesbanned'> 
								<option value='2'>2</option> 
								<option value='3'>3</option> 
								<option value='4'>4</option> 
								<option value='5'>5</option> 
								<option value='6'>6</option> 
								<option value='7'>7</option> 
								<option value='8'>8</option> 
								<option value='9'>9</option> 
								<option value='10'>10</option> 
							</select>
							<?php echo ((is_array($_tmp='_MOREBANSHIS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

						</td> 
						<td><input type="submit" class="button" name="submit" value="<?php echo ((is_array($_tmp='_SEARCH')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"/></td> 
					</form>
				</tr> 
				<tr> 
					<td class="fat"><?php echo ((is_array($_tmp='_ADMIN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
					<td>
						<form method="post" name="form_admin" style="display:inline;">
							<select name="admin" size="1">
								<optgroup label="<?php echo ((is_array($_tmp='_AMXADMINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
">
									<?php $_from = $this->_tpl_vars['amxadmins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['amxadmins']):
?>
										<option value="<?php echo $this->_tpl_vars['amxadmins']['steam']; ?>
"><?php echo $this->_tpl_vars['amxadmins']['nick']; ?>
</option>
									<?php endforeach; endif; unset($_from); ?>
								</optgroup>
								<optgroup label="<?php echo ((is_array($_tmp='_OTHER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <?php echo ((is_array($_tmp='_ADMINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
">
									<?php $_from = $this->_tpl_vars['admins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admins']):
?>
										<option value="<?php echo $this->_tpl_vars['admins']['steam']; ?>
"><?php echo $this->_tpl_vars['admins']['nick']; ?>
</option>
									<?php endforeach; endif; unset($_from); ?>
								</optgroup>
							</select>
						</form>
					</td> 
					<td><form method="post"><input type="button" class="button" onclick="form_admin.submit();" value="<?php echo ((is_array($_tmp='_SEARCH')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"/></form></td> 
				</tr> 
				<tr> 
					<td class="fat"><?php echo ((is_array($_tmp='_SERVER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
					<td>
						<form method="post" name="form_server" style="display:inline;">
							<?php echo smarty_function_html_options(array('name' => 'server','options' => ((is_array($_tmp=$this->_tpl_vars['servers'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp))), $this);?>

						</form> 
					</td> 
					<td><form method="post"><input type="button" class="button" onclick="form_server.submit();" value="<?php echo ((is_array($_tmp='_SEARCH')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"/></form></td> 
				</tr> 
			</tbody> 
		</table> 
		<div class="clearer">&nbsp;</div>
	</div>

	<div class="clearer">&nbsp;</div>
</div>
<br /><br />
<div class="main">
	<div class="post">
<?php if ($this->_tpl_vars['msg']): ?><center class="admin_msg"><?php echo ((is_array($_tmp=$this->_tpl_vars['msg'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</center><br /><?php endif; ?>
<?php if ($this->_tpl_vars['search_done'] == 1): ?>
		<table frame="box" rules="groups" summary="">
			<thead> 
				<tr>
					<th style="width:150px;"><?php echo ((is_array($_tmp='_SEARCHRESULT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th>&nbsp;</th>
					<th style="width:50px;">&nbsp;</th>
				</tr>
			</thead>
		</table>
		<br />
		<span style="font-weight:bold;color:red"><?php echo ((is_array($_tmp='_ACTIVEBANS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 (<?php echo $this->_tpl_vars['ban_list_aktiv_count']; ?>
)</span>
		<table frame="box" rules="groups" summary="">
			<thead>
				<tr>
					<th><?php echo ((is_array($_tmp='_DATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th><?php echo ((is_array($_tmp='_PLAYER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th><?php echo ((is_array($_tmp='_ADMIN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th><?php echo ((is_array($_tmp='_LENGHT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
<td class="fat">Stan</td>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php $_from = $this->_tpl_vars['ban_list_aktiv']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ban_list_aktiv']):
?>
				<form name="details" method="POST" action="ban_list.php">
				<tr class="list" style="cursor:pointer;" onClick="NewToggleLayer('layer_<?php echo $this->_tpl_vars['ban_list_aktiv']['bid']; ?>
');">
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list_aktiv']['ban_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>
</td>
					<td><?php echo $this->_tpl_vars['ban_list_aktiv']['player_nick']; ?>
</td>
					<td><?php if ($this->_tpl_vars['ban_list_aktiv']['player_id'] <> 'STEAM_ID_LAN'): ?><?php echo $this->_tpl_vars['ban_list_aktiv']['player_id']; ?>
<?php else: ?><?php echo ((is_array($_tmp='_NOTAVAILABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?></td>
					<td><?php echo $this->_tpl_vars['ban_list_aktiv']['admin_nick']; ?>
</td>
					<td><?php echo $this->_tpl_vars['ban_list_aktiv']['ban_reason']; ?>
</td>
					<td nowrap><?php if ($this->_tpl_vars['ban_list_aktiv']['ban_length'] > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list_aktiv']['ban_length']*60)) ? $this->_run_mod_handler('date2word', true, $_tmp, true) : smarty_modifier_date2word($_tmp, true)); ?>
<?php else: ?><?php echo ((is_array($_tmp='_PERMANENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?></td>
<td><?php if ($this->_tpl_vars['ban_list_aktiv']['ban_end'] < time() && $this->_tpl_vars['ban_list_aktiv']['ban_length'] > 0): ?><img src="images/zielony.png" alt="Ban wygasl"><?php elseif ($this->_tpl_vars['ban_list_aktiv']['ban_length'] < 0): ?><img src="images/pomarancz.png" alt="Ban usuniety"><?php else: ?><img src="images/czerwony.png" alt="Ban aktywny"><?php endif; ?></td>
					<td><a href="ban_list.php?bid=<?php echo $this->_tpl_vars['ban_list_aktiv']['bid']; ?>
"><img src="images/page.png" border="0" title="<?php echo ((is_array($_tmp='_DETAILS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"/></a></td>
				</tr>
				<tr id="layer_<?php echo $this->_tpl_vars['ban_list_aktiv']['bid']; ?>
" style="display: none">
					<td class="server-info" colspan="10"><div style="display: none">
							<input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['ban_list_aktiv']['bid']; ?>
" />
							<table frame="box" rules="groups" summary="">
								<tr><td width="15%"><b><?php echo ((is_array($_tmp='_NICKNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php echo $this->_tpl_vars['ban_list_aktiv']['player_nick']; ?>
</td></tr>
							<?php if ($this->_tpl_vars['ban_list_aktiv']['player_id'] <> 'STEAM_ID_LAN'): ?>
								<tr><td><b><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php echo $this->_tpl_vars['ban_list_aktiv']['player_id']; ?>
</td></tr>
								<tr><td><b><?php echo ((is_array($_tmp='_STEAMCOMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><a href="http://steamcommunity.com/profiles/<?php echo $this->_tpl_vars['ban_list_aktiv']['player_comid']; ?>
" target="_blank"><?php echo $this->_tpl_vars['ban_list_aktiv']['player_comid']; ?>
</a></td></tr>
							<?php endif; ?>
								<tr><td><b><?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td>
									<?php if ($this->_supers['session']['ip_view'] == 'yes'): ?>
										<?php if ($this->_tpl_vars['ban_list_aktiv']['player_ip']): ?><?php echo $this->_tpl_vars['ban_list_aktiv']['player_ip']; ?>
<?php else: ?><i><?php echo ((is_array($_tmp='_NOTAVAILABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i><?php endif; ?>
									<?php else: ?><i><?php echo ((is_array($_tmp='_HIDDEN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i>
									<?php endif; ?></td></tr>
								<tr><td><b><?php echo ((is_array($_tmp='_BANTYPE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php if ($this->_tpl_vars['ban_list_aktiv']['ban_type'] == 'S'): ?><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

									<?php elseif ($this->_tpl_vars['ban_list_aktiv']['ban_type'] == 'SI'): ?><?php echo ((is_array($_tmp="_STEAMID&IP")) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

									<?php else: ?><?php echo ((is_array($_tmp='_NOTAVAILABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?>
								</td></tr>
								<tr><td><b><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php echo $this->_tpl_vars['ban_list_aktiv']['ban_reason']; ?>
</td></tr>
								<tr><td><b><?php echo ((is_array($_tmp='_INVOKED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list_aktiv']['ban_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td></tr>
								<tr><td><b><?php echo ((is_array($_tmp='_BANLENGHT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php if ($this->_tpl_vars['ban_list_aktiv']['ban_length'] == 0): ?><?php echo ((is_array($_tmp='_PERMANENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['ban_list_aktiv']['ban_length']; ?>
 <?php echo ((is_array($_tmp='_MINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?></td></tr>
								<tr><td><b><?php echo ((is_array($_tmp='_EXPIRES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td>
									<?php if ($this->_tpl_vars['ban_list_aktiv']['ban_length'] == 0): ?><i><?php echo ((is_array($_tmp='_NOTAPPLICABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list_aktiv']['ban_end'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>

										<?php if ($this->_tpl_vars['ban_list_aktiv']['ban_end'] < time()): ?> (<?php echo ((is_array($_tmp='_ALREADYEXP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
)<?php endif; ?>
									<?php endif; ?>
								</td></tr>
								<tr><td><b><?php echo ((is_array($_tmp='_BANBY')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php echo $this->_tpl_vars['ban_list_aktiv']['admin_nick']; ?>
</td></tr>
								<tr><td><b><?php echo ((is_array($_tmp='_BANON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php if ($this->_tpl_vars['ban_list_aktiv']['server_name'] == 'website'): ?><?php echo ((is_array($_tmp='_WEB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['ban_list_aktiv']['server_name']; ?>
<?php endif; ?></td></tr>
								<tr><td><b><?php echo ((is_array($_tmp='_TOTALEXPBANS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php echo $this->_tpl_vars['ban_list_aktiv']['bancount']; ?>
</td></tr>
							</table>
					</div></td>
					
				</tr></form>
			<?php endforeach; endif; unset($_from); ?>
		</table>
		<br /><br />
		<span style="font-weight:bold;color:green"><?php echo ((is_array($_tmp='_EXPIREDBANS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
  (<?php echo $this->_tpl_vars['ban_list_exp_count']; ?>
)</span>
		<table frame="box" rules="groups" summary="">
			<thead>
					<th><?php echo ((is_array($_tmp='_DATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th><?php echo ((is_array($_tmp='_PLAYER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th><?php echo ((is_array($_tmp='_ADMIN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th><?php echo ((is_array($_tmp='_LENGHT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
<td class="fat">Stan</td>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php $_from = $this->_tpl_vars['ban_list_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ban_list_exp']):
?>
				<form name="details" method="POST" action="ban_list.php">
				<tr class="list"  style="cursor:pointer;" onClick="NewToggleLayer('layer_<?php echo $this->_tpl_vars['ban_list_exp']['bid']; ?>
');">
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list_exp']['ban_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>
</td>
					<td><?php echo $this->_tpl_vars['ban_list_exp']['player_nick']; ?>
</td>
					<td><?php if ($this->_tpl_vars['ban_list_exp']['player_id'] <> 'STEAM_ID_LAN'): ?><?php echo $this->_tpl_vars['ban_list_exp']['player_id']; ?>
<?php else: ?><?php echo ((is_array($_tmp='_NOTAVAILABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?></td>
					<td><?php echo $this->_tpl_vars['ban_list_exp']['admin_nick']; ?>
</td>
					<td><?php echo $this->_tpl_vars['ban_list_exp']['ban_reason']; ?>
</td>
					<td nowrap><?php if ($this->_tpl_vars['ban_list_exp']['ban_length'] > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list_exp']['ban_length']*60)) ? $this->_run_mod_handler('date2word', true, $_tmp, true) : smarty_modifier_date2word($_tmp, true)); ?>
<?php else: ?><?php echo ((is_array($_tmp='_PERMANENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?></td>
					<td><?php if ($this->_tpl_vars['ban_list_exp']['ban_length'] < 0): ?><img src="images/pomarancz.png" alt="Ban usuniety"><?php else: ?><img src="images/zielony.png" alt="Ban wygasl"><?php endif; ?></td><td><a href="ban_list.php?bid=<?php echo $this->_tpl_vars['ban_list_exp']['bid']; ?>
"><img src="images/page.png" border="0" title="<?php echo ((is_array($_tmp='_DETAILS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"/></a></td>
				</tr>
				<tr id="layer_<?php echo $this->_tpl_vars['ban_list_exp']['bid']; ?>
" style="display: none">
					<td class="server-info" colspan="10"><div style="display: none">
							<input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['ban_list_exp']['bid']; ?>
" />
							<table frame="box" rules="groups" summary="">
								<tr><td width="15%"><b><?php echo ((is_array($_tmp='_NICKNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php echo $this->_tpl_vars['ban_list_exp']['player_nick']; ?>
</td></tr>
								<?php if ($this->_tpl_vars['ban_list_exp']['player_id'] <> 'STEAM_ID_LAN'): ?>
									<tr><td><b><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php echo $this->_tpl_vars['ban_list_exp']['player_id']; ?>
</td></tr>
									<tr><td><b><?php echo ((is_array($_tmp='_STEAMCOMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><a href="http://steamcommunity.com/profiles/<?php echo $this->_tpl_vars['ban_list_exp']['player_comid']; ?>
" target="_blank"><?php echo $this->_tpl_vars['ban_list_exp']['player_comid']; ?>
</a></td></tr>
								<?php endif; ?>
								<tr><td><b><?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php if ($this->_supers['session']['ip_view'] == 'yes'): ?><?php echo $this->_tpl_vars['ban_list_exp']['player_ip']; ?>
<?php else: ?><i><?php echo ((is_array($_tmp='_HIDDEN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i><?php endif; ?></td></tr>
								<tr><td><b><?php echo ((is_array($_tmp='_BANTYPE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php if ($this->_tpl_vars['ban_list_exp']['ban_type'] == 'S'): ?><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

									<?php elseif ($this->_tpl_vars['ban_list_exp']['ban_type'] == 'SI'): ?><?php echo ((is_array($_tmp="_STEAMID&IP")) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

									<?php else: ?><?php echo ((is_array($_tmp='_NOTAVAILABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?>
								</td></tr>
								<tr><td><b><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php echo $this->_tpl_vars['ban_list_exp']['ban_reason']; ?>
</td></tr>
								<tr><td><b><?php echo ((is_array($_tmp='_INVOKED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list_exp']['ban_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td></tr>
								<tr><td><b><?php echo ((is_array($_tmp='_BANLENGHT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php if ($this->_tpl_vars['ban_list_exp']['ban_length'] == 0): ?><?php echo ((is_array($_tmp='_PERMANENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['ban_list_exp']['ban_length']; ?>
 <?php echo ((is_array($_tmp='_MINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?></td></tr>
								<tr><td><b><?php echo ((is_array($_tmp='_EXPIRES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td>
									<?php if ($this->_tpl_vars['ban_list_exp']['ban_length'] == 0): ?><i><?php echo ((is_array($_tmp='_NOTAPPLICABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list_exp']['ban_end'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>

										<?php if ($this->_tpl_vars['ban_list_exp']['ban_end'] < time()): ?> (<?php echo ((is_array($_tmp='_ALREADYEXP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
)<?php endif; ?>
									<?php endif; ?>
								</td></tr>
								<tr><td><b><?php echo ((is_array($_tmp='_BANBY')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php echo $this->_tpl_vars['ban_list_exp']['admin_nick']; ?>
</td></tr>
								<tr><td><b><?php echo ((is_array($_tmp='_BANON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php if ($this->_tpl_vars['ban_list_exp']['server_name'] == 'website'): ?><?php echo ((is_array($_tmp='_WEB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['ban_list_exp']['server_name']; ?>
<?php endif; ?></td></tr>
								<tr><td><b><?php echo ((is_array($_tmp='_TOTALEXPBANS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></td><td><?php echo $this->_tpl_vars['ban_list_exp']['bancount']; ?>
</td></tr>
							</table>
					</div></td>
				</tr></form>
			<?php endforeach; endif; unset($_from); ?>
		</table>
		<?php endif; ?>
	</td></tr>
</table></fieldset>
</div></div>