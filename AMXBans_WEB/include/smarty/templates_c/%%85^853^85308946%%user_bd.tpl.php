<?php /* Smarty version 2.6.25, created on 2020-06-09 01:51:15
         compiled from user_bd.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'user_bd.tpl', 6, false),array('modifier', 'date_format', 'user_bd.tpl', 68, false),array('modifier', 'date2word', 'user_bd.tpl', 78, false),array('modifier', 'file_size', 'user_bd.tpl', 171, false),array('modifier', 'bbcode2html', 'user_bd.tpl', 172, false),)), $this); ?>
<div class="main">
	<div class="post">
		<table frame="box" rules="groups" summary=""> 
			<thead> 
				<tr>
					<th style="width:150px;"><?php echo ((is_array($_tmp='_BANDETAILS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th class="_right">
						<form method="POST" style="display:inline;">
						<?php if ($this->_supers['session']['bans_edit'] == 'yes' || ( $this->_supers['session']['bans_edit'] == 'own' && $this->_supers['session']['uname'] == $this->_tpl_vars['ban_detail']['username'] )): ?>
							<img src="images/page_edit.png" border="0" onclick="NewToggleLayer('banedit_<?php echo $this->_tpl_vars['ban_detail']['bid']; ?>
')" title="<?php echo ((is_array($_tmp='_TIP_EDIT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" style="cursor:pointer;border:0;" />
						<?php endif; ?>
						<?php if ($this->_supers['session']['bans_delete'] == 'yes' || ( $this->_supers['session']['bans_delete'] == 'own' && $this->_supers['session']['uname'] == $this->_tpl_vars['ban_detail']['username'] )): ?>
							<input name="del_ban" type="image" src="images/page_delete.png" onclick="return confirm('<?php echo ((is_array($_tmp='_DELBAN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php echo ((is_array($_tmp='_DATALOSS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" border="0" title="<?php echo ((is_array($_tmp='_TIP_DEL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" />
							<input type="hidden" name="site" value="<?php echo $this->_tpl_vars['site']; ?>
" />
							<input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['ban_detail']['bid']; ?>
" />
							<input type="hidden" name="details_x" value="1" />
						<?php endif; ?>
						</form>
					</th> 
				</tr>
			</thead> 
			<tbody> 
				<tr>
					<td class="fat"><?php echo ((is_array($_tmp='_NICKNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><?php echo $this->_tpl_vars['ban_detail']['player_nick']; ?>
</td>
				</tr>
				<?php if (! in_array ( $this->_tpl_vars['ban_detail']['player_id'] , array ( 'STEAM_ID_LAN' , 'VALVE_ID_LAN' , '' ) )): ?>
					<tr>
						<td class="fat"><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><?php echo $this->_tpl_vars['ban_detail']['player_id']; ?>
</td>
					</tr>
					<tr>
						<td class="fat"><?php echo ((is_array($_tmp='_STEAMCOMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td>
							<a target="_blank" href="http://steamcommunity.com/profiles/<?php echo $this->_tpl_vars['ban_detail']['player_comid']; ?>
"><?php echo $this->_tpl_vars['ban_detail']['player_comid']; ?>
</a>
						</td>
					</tr>
				<?php endif; ?>
				<tr>
					<td class="fat"><?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
					<td>
					<?php if ($this->_supers['session']['ip_view'] == 'yes'): ?>
						<?php if ($this->_tpl_vars['ban_detail']['player_ip']): ?>
							<?php echo $this->_tpl_vars['ban_detail']['player_ip']; ?>

						<?php else: ?>
							<i><?php echo ((is_array($_tmp='_NOTAVAILABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i>
						<?php endif; ?>
					<?php else: ?>
						<span style='font-style:italic;font-weight:bold'><?php echo ((is_array($_tmp='_HIDDEN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span>
					<?php endif; ?>
					</td> 
				</tr>
				<tr>
					<td class="fat"><?php echo ((is_array($_tmp='_BANTYPE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
					<td>
						<?php if ($this->_tpl_vars['ban_detail']['ban_type'] == 'S'): ?>
							<?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

						<?php elseif ($this->_tpl_vars['ban_detail']['ban_type'] == 'SI'): ?>
							<?php echo ((is_array($_tmp="_STEAMID&IP")) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

						<?php else: ?>
							<?php echo ((is_array($_tmp='_NOTAVAILABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

						<?php endif; ?>
					</td>
				</tr>
				<tr>
					<td class="fat"><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><?php echo $this->_tpl_vars['ban_detail']['ban_reason']; ?>
</td>
				</tr>
				<tr>
					<td class="fat"><?php echo ((is_array($_tmp='_INVOKED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_detail']['ban_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y - %T") : smarty_modifier_date_format($_tmp, "%d.%m.%Y - %T")); ?>
</td>
				</tr>
				<tr>
					<td class="fat"><?php echo ((is_array($_tmp='_BANLENGHT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
					<td>
						<?php if ($this->_tpl_vars['ban_detail']['ban_length'] == 0): ?>
							<?php echo ((is_array($_tmp='_PERMANENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

						<?php elseif ($this->_tpl_vars['ban_detail']['ban_length'] == -1): ?>
							<?php echo ((is_array($_tmp='_UNBANNED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

						<?php else: ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['ban_detail']['ban_length']*60)) ? $this->_run_mod_handler('date2word', true, $_tmp, true) : smarty_modifier_date2word($_tmp, true)); ?>
 (<?php echo $this->_tpl_vars['ban_detail']['ban_length']; ?>
 <?php echo ((is_array($_tmp='_MINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
)
						<?php endif; ?>
					</td>
				</tr>
				<tr>
					<td class="fat"><?php echo ((is_array($_tmp='_EXPIRES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
					<td>
						<?php if ($this->_tpl_vars['ban_detail']['ban_length'] <= 0): ?>
							<i><?php echo ((is_array($_tmp='_NOTAPPLICABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i>
						<?php else: ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['ban_detail']['ban_end'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y - %T") : smarty_modifier_date_format($_tmp, "%d.%m.%Y - %T")); ?>

							<?php if ($this->_tpl_vars['ban_detail']['ban_end'] < time()): ?>
								(<?php echo ((is_array($_tmp='_ALREADYEXP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
)
							<?php else: ?>
								<i>(<?php echo ((is_array($_tmp=$this->_tpl_vars['ban_detail']['ban_end']-time())) ? $this->_run_mod_handler('date2word', true, $_tmp) : smarty_modifier_date2word($_tmp)); ?>
 <?php echo ((is_array($_tmp='_REMAINING')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
)</i>
							<?php endif; ?>
						<?php endif; ?>
					</td>
				</tr>
				<tr>
					<td class="fat"><?php echo ((is_array($_tmp='_BANBY')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><?php echo $this->_tpl_vars['ban_detail']['admin_nick']; ?>
<?php if ($this->_tpl_vars['ban_detail']['nickname']): ?> <i>(<?php echo $this->_tpl_vars['ban_detail']['nickname']; ?>
)</i><?php endif; ?></td>
				</tr>
				<tr>
					<td class="fat"><?php echo ((is_array($_tmp='_ADMINID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
					<td>
					<?php if ($this->_supers['session']['ip_view'] == 'yes'): ?>
						<?php if ($this->_tpl_vars['ban_detail']['admin_id']): ?>
							<?php echo $this->_tpl_vars['ban_detail']['admin_id']; ?>

						<?php else: ?>
							<i><?php echo ((is_array($_tmp='_NOTAVAILABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i>
						<?php endif; ?>
					<?php else: ?>
						<span style='font-style:italic;font-weight:bold'><?php echo ((is_array($_tmp='_HIDDEN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span>
					<?php endif; ?>
					</td> 
				</tr>
				<tr>
					<td class="fat"><?php echo ((is_array($_tmp='_BANON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td><td><?php if ($this->_tpl_vars['ban_detail']['server_name'] == 'website'): ?><?php echo ((is_array($_tmp='_WEB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['ban_detail']['server_name']; ?>
<?php endif; ?></td>
				</tr>
				<tr id="banedit_<?php echo $this->_tpl_vars['ban_detail']['bid']; ?>
" style="display:none;">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layer_banedit.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</tr>
				<?php if ($this->_tpl_vars['banedit_error'] != ""): ?><br /><div class="_center"><span class="error"><?php echo ((is_array($_tmp='_ERROR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
: <?php $_from = $this->_tpl_vars['banedit_error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['banedit_error']):
?><?php echo ((is_array($_tmp=$this->_tpl_vars['banedit_error'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endforeach; endif; unset($_from); ?></span></div><br /><?php endif; ?>
			</tbody> 
		</table> 
		<div class="clearer">&nbsp;</div>
	</div>

	<?php if ($this->_tpl_vars['activ_count'] > 0 || $this->_tpl_vars['exp_count'] > 0): ?>
	<div class="post">
		<div class="clearer">&nbsp;</div>
		<table width="90%" cellspacing="0">
			<tr class="htable" style="cursor:pointer;" onClick="NewToggleLayer('layer_banhistory');" class="list">
				<td class="table_details_head" colspan="3"><b><?php echo ((is_array($_tmp='_BANHISTORY')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 (<?php echo $this->_tpl_vars['activ_count']+$this->_tpl_vars['exp_count']; ?>
)</b></td>
			</tr>
			<tr id="layer_banhistory" style="display: none">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layer_banhistory.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</tr>
		</table>
	</div>
	<?php endif; ?>
	
<?php if ($this->_tpl_vars['vars']['use_demo'] == 1): ?>
		<?php if ($this->_tpl_vars['upload_error'] != ""): ?><div class="_center"><span class="error"><?php echo ((is_array($_tmp='_ERROR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
: <?php $_from = $this->_tpl_vars['upload_error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['upload_error']):
?><?php echo ((is_array($_tmp=$this->_tpl_vars['upload_error'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endforeach; endif; unset($_from); ?></span></div><br /><?php endif; ?>
		<?php if ($this->_tpl_vars['msg_demo']): ?><div class="_center"><span class="success"><?php echo ((is_array($_tmp=$this->_tpl_vars['msg_demo'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span></div><br /><?php endif; ?>
	<div class="spacer">&nbsp;</div>
	<div class="post">
		<table frame="box" rules="groups" summary=""> 
			<thead> 
				<tr>
					<th colspan="8"><?php echo ((is_array($_tmp='_BL_FILES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
				</tr>
				<tr>
					<th style="width:130px;"><?php echo ((is_array($_tmp='_DATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th style="width:100px;"><?php echo ((is_array($_tmp='_FILE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th style="width:50px;"><?php echo ((is_array($_tmp='_SIZE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th><?php echo ((is_array($_tmp='_COMMENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th style="width:100px;"><?php echo ((is_array($_tmp='_BY')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th style="width:150px;"><?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th style="width:20px;"><?php echo ((is_array($_tmp='_DOWNLOADS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th style="width:80px;">&nbsp;</th> 
				</tr>
			</thead> 
			<tbody> 
				<?php $_from = $this->_tpl_vars['demos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['demos']):
?>
					<form method="post">
						<input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['ban_detail']['bid']; ?>
" />
						<input type="hidden" name="site" value="<?php echo $this->_tpl_vars['site']; ?>
" />
						<input type="hidden" name="did" value="<?php echo $this->_tpl_vars['demos']['id']; ?>
" />
						<input type="hidden" name="details_x" value="1" />
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['demos']['upload_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y - %T") : smarty_modifier_date_format($_tmp, "%d.%m.%Y - %T")); ?>
</td> 
							<td><?php echo $this->_tpl_vars['demos']['demo_real']; ?>
</td> 
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['demos']['file_size'])) ? $this->_run_mod_handler('file_size', true, $_tmp) : smarty_modifier_file_size($_tmp)); ?>
</td> 
							<td><?php if ($this->_tpl_vars['demos']['comment']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['demos']['comment'])) ? $this->_run_mod_handler('bbcode2html', true, $_tmp) : smarty_modifier_bbcode2html($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp='_NOCOMMENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?></td> 
							<td><?php echo $this->_tpl_vars['demos']['name']; ?>
</td> 
							<td><?php if ($this->_supers['session']['ip_view'] == 'yes'): ?><?php echo $this->_tpl_vars['demos']['addr']; ?>
<?php endif; ?></td> 
							<td class="_center"><?php echo $this->_tpl_vars['demos']['down_count']; ?>
</td> 
							<td class="_right">
								<form method="POST" style="display:inline;">
									<a href="mailto:<?php echo $this->_tpl_vars['demos']['email']; ?>
"><img src="images/email_go.png" border="0" title="<?php echo ((is_array($_tmp='_TIP_SENDMAIL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /></a>
									<input name="down_demo" type="image" src="images/disk.png" border="0" title="<?php echo ((is_array($_tmp='_TIP_DOWNLOAD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" />
									<?php if ($this->_supers['session']['bans_edit'] == 'yes' || ( $this->_supers['session']['bans_edit'] == 'own' && $this->_supers['session']['uname'] == $this->_tpl_vars['ban_detail']['username'] )): ?>
										<img src="images/page_edit.png" border="0" onClick="NewToggleLayer('demedit_<?php echo $this->_tpl_vars['demos']['id']; ?>
');" title="<?php echo ((is_array($_tmp='_TIP_EDIT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" style="cursor:pointer;"/>
									<?php endif; ?>
									<input name="del_demo" type="image" src="images/page_delete.png" border="0" onclick="return confirm('<?php echo ((is_array($_tmp='_DELDEMO')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php echo ((is_array($_tmp='_DATALOSS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" title="<?php echo ((is_array($_tmp='_TIP_DEL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" />
									<input type="hidden" name="site" value="<?php echo $this->_tpl_vars['site']; ?>
" />
									<input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['ban_detail']['bid']; ?>
" />
									<input type="hidden" name="details_x" value="1" />
								</form>
							</td> 
						</tr>
						<tr id="demedit_<?php echo $this->_tpl_vars['demos']['id']; ?>
" style="display: none">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layer_demedit.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						</tr>
					</form>
				<?php endforeach; else: ?>
					<td class="_center" colspan="8"><?php echo ((is_array($_tmp='_NOFILES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
				<?php endif; unset($_from); ?>
			</tbody> 
		</table> 
		<div class="clearer">&nbsp;</div>
	</div>
	<?php if ($this->_tpl_vars['vars']['comment_all'] == '1' || $this->_supers['session']['loggedin'] == 'true'): ?>
		<div class="post _center">
			<form method="post" action="">
				<input type="button" class="button" name="newfile" value="<?php echo ((is_array($_tmp='_NEWFILE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" onclick="$('#add_file').slideToggle('slow');"/><br/><br/>
			</form>
		</div>

		<div id="add_file" class="post" style="display:none;">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layer_demadd.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
	<?php endif; ?>
<?php endif; ?>

	<?php if ($this->_tpl_vars['vars']['use_comment'] == 1): ?>
		<?php if ($this->_tpl_vars['comment_error'] != ""): ?><div class="_center"><span class="error"><?php echo ((is_array($_tmp='_ERROR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
: <?php $_from = $this->_tpl_vars['comment_error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment_error']):
?><?php echo ((is_array($_tmp=$this->_tpl_vars['comment_error'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endforeach; endif; unset($_from); ?></span></div><br /><?php endif; ?>
		<?php if ($this->_tpl_vars['msg_comment']): ?><div class="_center"><span class="success"><?php echo ((is_array($_tmp=$this->_tpl_vars['msg_comment'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span></div><br /><?php endif; ?>
		<div class="spacer">&nbsp;</div>
	<div class="post">
		<table frame="box" rules="groups">
			<thead>
				<tr>
					<th colspan="5"><?php echo ((is_array($_tmp='_BL_COMMENTS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
				</tr>
				<tr>
					<th style="width:130px;"><?php echo ((is_array($_tmp='_DATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th><?php echo ((is_array($_tmp='_COMMENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th style="width:100px;"><?php echo ((is_array($_tmp='_BY')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th style="width:150px;"><?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th style="width:80px;">&nbsp;</th> 
				</tr>
			</thead>
		</table>
		<?php $_from = $this->_tpl_vars['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comments']):
?>
			<form method="POST">
				<input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['ban_detail']['bid']; ?>
" />
				<input type="hidden" name="site" value="<?php echo $this->_tpl_vars['site']; ?>
" />
				<input type="hidden" name="cid" value="<?php echo $this->_tpl_vars['comments']['id']; ?>
" />
				<input type="hidden" name="details_x" value="1" />
					<table frame="box" rules="groups" summary=""> 
						<tbody> 
							<!-- Comment List -->
							<tr> 
								<td style="width:130px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['comments']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y - %T") : smarty_modifier_date_format($_tmp, "%d.%m.%Y - %T")); ?>
</td> 
								<td><?php echo ((is_array($_tmp=$this->_tpl_vars['comments']['comment'])) ? $this->_run_mod_handler('bbcode2html', true, $_tmp) : smarty_modifier_bbcode2html($_tmp)); ?>
</td> 
								<td style="width:100px;"><?php echo $this->_tpl_vars['comments']['name']; ?>
</td> 
								<td style="width:150px;"><?php if ($this->_supers['session']['ip_view'] == 'yes'): ?><?php echo $this->_tpl_vars['comments']['addr']; ?>
<?php else: ?><span style='font-style:italic;font-weight:bold'><?php echo ((is_array($_tmp='_HIDDEN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span><?php endif; ?></td> 
								<td class="_right" style="width:80px;">
									<?php if ($this->_supers['session']['bans_edit'] == 'yes'): ?>
										<img src="images/page_edit.png" border="0" style="cursor:pointer;" onClick="NewToggleLayer('comedit_<?php echo $this->_tpl_vars['comments']['id']; ?>
');" />
										<input name="del_comment" type="image" src="images/cross.png" border="0" onclick="return confirm('<?php echo ((is_array($_tmp='_DELCOMMENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php echo ((is_array($_tmp='_DATALOSS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" title="<?php echo ((is_array($_tmp='_DELETE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" />
									<?php endif; ?>
								</td>
							<!-- Comment List -->
			</form>
		<?php endforeach; else: ?>
								<div class="_center"><?php echo ((is_array($_tmp='_NOCOMMENTS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div> 
							</tr>
		<?php endif; unset($_from); ?>
						</tbody> 
					</table> 
				<div class="clearer">&nbsp;</div>
	</div>
		<?php if ($this->_tpl_vars['vars']['comment_all'] == '1' || $this->_supers['session']['loggedin'] == 'true'): ?>
			<div class="post _center">
				<form method="post" action="">
					<input type="button" class="button" name="newcomment" value="<?php echo ((is_array($_tmp='_NEWCOMMENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" onclick="$('#add_comment').slideToggle('slow');"/><br/><br/>
				</form>
			</div>
			<div id="add_comment" class="post" style="display:none;">
				<tr id="comadd_<?php echo $this->_tpl_vars['ban_detail']['bid']; ?>
" <?php if ($this->_tpl_vars['comment_layer'] != '1'): ?>style="display: none"<?php endif; ?>>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layer_comadd.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</tr>
			</div>
			<tr id="comedit_<?php echo $this->_tpl_vars['comments']['id']; ?>
" style="display: none">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layer_comedit.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</tr>
		<?php endif; ?>
<?php endif; ?>
	<div class="clearer">&nbsp;</div>
</div>