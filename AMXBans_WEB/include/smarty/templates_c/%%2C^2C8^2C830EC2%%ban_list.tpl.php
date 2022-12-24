<?php /* Smarty version 2.6.25, created on 2020-06-09 01:51:10
         compiled from ban_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'ban_list.tpl', 6, false),array('modifier', 'date_format', 'ban_list.tpl', 46, false),array('modifier', 'lower', 'ban_list.tpl', 47, false),array('modifier', 'date2word', 'ban_list.tpl', 52, false),)), $this); ?>
<div class="main">

	<div class="post">
	<span>
		<?php if (isset ( $this->_tpl_vars['check_id'] )): ?>
			<div class='error'><?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 &mdash; <?php echo $this->_tpl_vars['your_ip']; ?>
. <span style='color:red;font-weight:bold;'><a href="http://<?php echo $this->_supers['server']['HTTP_HOST']; ?>
<?php echo $this->_supers['server']['PHP_SELF']; ?>
?bid=<?php echo $this->_tpl_vars['check_id']; ?>
"><?php echo ((is_array($_tmp='_YOUAREBANNED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></span></div>
		<?php else: ?>
			<div class='success'><?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 &mdash; <?php echo $this->_tpl_vars['your_ip']; ?>
. <span style='color:green;font-weight:bold;'><?php echo ((is_array($_tmp='_YOUNOTBANNED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span></div>
		<?php endif; ?>
	</span>
		<table frame="box" rules="groups" summary="">

			<thead>
				<tr>
					<th style="width:18px;">&nbsp;</th>
					<th style="width:80px;"><?php echo ((is_array($_tmp='_DATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th><?php echo ((is_array($_tmp='_PLAYER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th><?php echo ((is_array($_tmp='_ADMIN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th style="width:80px;"><?php echo ((is_array($_tmp='_LENGHT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<?php if ($this->_tpl_vars['ban_page']['show_comments'] == 1 && $this->_tpl_vars['vars']['use_comment'] == 1): ?><th style="width:80px;"><?php echo ((is_array($_tmp='_BL_COMMENTS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th><?php endif; ?>
					<?php if ($this->_tpl_vars['ban_page']['show_demos'] == 1 && $this->_tpl_vars['vars']['use_demo'] == 1): ?><th style="width:45px;"><?php echo ((is_array($_tmp='_BL_FILES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th><?php endif; ?>
					<?php if ($this->_tpl_vars['ban_page']['show_kicks'] == 1): ?><th style="width:45px;"><?php echo ((is_array($_tmp='_BL_KICKS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th><?php endif; ?>
					<th> Stan </th>
				</tr>
			</thead>

			<tbody>
				<!-- No Bans -->
				<?php if ($this->_tpl_vars['error']): ?>
					<tr>
						<td class="_center" colspan="9"><?php echo ((is_array($_tmp='_NO_BANS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
					</tr>
				<?php else: ?>
				<!-- No Bans -->

				<!-- Banlist -->
					<?php $_from = $this->_tpl_vars['ban_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ban_list']):
?>
					<form name="details" method="POST">
						<?php if ($this->_tpl_vars['ban_list']['ban_length'] > 0 && $this->_tpl_vars['ban_list']['ban_end'] < time()): ?>
							<tr onclick="NewToggleLayer('layer_<?php echo $this->_tpl_vars['ban_list']['bid']; ?>
')" style="background: #DBF4D7" class='list'>
						<?php else: ?>
							<tr onclick="NewToggleLayer('layer_<?php echo $this->_tpl_vars['ban_list']['bid']; ?>
')" class="list">
						<?php endif; ?>
						<td class="_center"><img alt="<?php if ($this->_tpl_vars['ban_list']['mod'] == 'html'): ?><?php echo ((is_array($_tmp='_WEB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list']['mod'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?>" title="<?php if ($this->_tpl_vars['ban_list']['mod'] == 'html'): ?><?php echo ((is_array($_tmp='_WEB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list']['mod'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?>" src="images/games/<?php echo $this->_tpl_vars['ban_list']['mod']; ?>
.gif" /></td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list']['ban_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
						<td><img alt="" src="images/country/<?php if ($this->_tpl_vars['ban_list']['cc']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list']['cc'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
<?php else: ?>clear<?php endif; ?>.png" /> <?php echo $this->_tpl_vars['ban_list']['player_nick']; ?>
</td>
						<td><?php echo $this->_tpl_vars['ban_list']['admin_nick']; ?>
</td>
						<td><?php echo $this->_tpl_vars['ban_list']['ban_reason']; ?>
</td>
						<td>
							<?php if ($this->_tpl_vars['ban_list']['ban_length'] > 0): ?>
								<span style="color: green; font-weight: bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list']['ban_length']*60)) ? $this->_run_mod_handler('date2word', true, $_tmp, true) : smarty_modifier_date2word($_tmp, true)); ?>
</span>
							<?php else: ?>
								<span style="color: red; font-weight: bold"><?php echo ((is_array($_tmp='_PERMANENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
						<?php if ($this->_tpl_vars['ban_page']['show_comments'] == 1 && $this->_tpl_vars['vars']['use_comment'] == 1): ?><td class="_center"><?php echo $this->_tpl_vars['ban_list']['comment_count']; ?>
</td><?php endif; ?>
						<?php if ($this->_tpl_vars['ban_page']['show_demos'] == 1 && $this->_tpl_vars['vars']['use_demo'] == 1): ?><td class="_center"><?php echo $this->_tpl_vars['ban_list']['demo_count']; ?>
</td><?php endif; ?>
						<?php if ($this->_tpl_vars['ban_page']['show_kicks'] == 1): ?><td class="_center"><?php echo $this->_tpl_vars['ban_list']['kick_count']; ?>
</td><?php endif; ?>
<td><?php if ($this->_tpl_vars['ban_list']['ban_end'] < time() && $this->_tpl_vars['ban_list']['ban_length'] > 0): ?><img src="images/zielony.png" alt="Ban wygasl"><?php elseif ($this->_tpl_vars['ban_list']['ban_length'] < 0): ?><img src="images/pomarancz.png" alt="Ban usuniety"><?php else: ?><img src="images/czerwony.png" alt="Ban aktywny"><?php endif; ?><?php if (isset ( $this->_tpl_vars['check_id'] ) && $this->_tpl_vars['ban_list']['bid'] == $this->_tpl_vars['check_id']): ?><img src="images/twoj.gif" alt="TO JEST TWOJ BAN!"><?php else: ?><?php endif; ?></td>
					</tr>

					<tr id="layer_<?php echo $this->_tpl_vars['ban_list']['bid']; ?>
" style="display:none;">

						<td class="server-info" colspan="9"><div style="display:none;">
							<input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['ban_list']['bid']; ?>
" />
							<table frame="box" rules="groups" summary="">
								<thead>
									<tr>
										<th style="width:150px;"><?php echo ((is_array($_tmp='_BANDETAILS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>

										<th class="_right">
											<a href="ban_list.php?bid=<?php echo $this->_tpl_vars['ban_list']['bid']; ?>
">
												<img src="images/page.png" border="0" title="<?php echo ((is_array($_tmp='_DETAILS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"/>
											</a>
											<?php if ($this->_supers['session']['bans_delete'] == 'yes' || ( $this->_supers['session']['bans_delete'] == 'own' && $this->_supers['session']['uname'] == $this->_tpl_vars['ban_detail']['username'] )): ?>
											<img src="images/page_edit.png" border="0" onclick="NewToggleLayer('banedit_<?php echo $this->_tpl_vars['ban_list']['bid']; ?>
')" title="<?php echo ((is_array($_tmp='_TIP_EDIT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" style="cursor:pointer;border:0;" />
											<form method="POST" style="display:inline;">
												<input class="img_input" name="del_ban" type="image" src="images/page_delete.png" onclick="return confirm('<?php echo ((is_array($_tmp='_DELBAN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php echo ((is_array($_tmp='_DATALOSS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" border="0" title="<?php echo ((is_array($_tmp='_TIP_DEL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" />
												<input type="hidden" name="site" value="<?php echo $this->_tpl_vars['site']; ?>
" />
												<input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['ban_list']['bid']; ?>
" />
												<input type="hidden" name="details_x" value="1" />
											</form>
											<?php endif; ?>
										</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="fat"><?php echo ((is_array($_tmp='_NICKNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
										<td><?php echo $this->_tpl_vars['ban_list']['player_nick']; ?>
</td>
									</tr>
									<?php if (! in_array ( $this->_tpl_vars['ban_list']['player_id'] , array ( 'STEAM_ID_LAN' , 'VALVE_ID_LAN' , '' ) )): ?>
										<tr>
											<td class="fat"><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
											<td><?php echo $this->_tpl_vars['ban_list']['player_id']; ?>
</td>
										</tr>
										<tr>
											<td class="fat"><?php echo ((is_array($_tmp='_STEAMCOMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
											<td>
												<a target="_blank" href="http://steamcommunity.com/profiles/<?php echo $this->_tpl_vars['ban_list']['player_comid']; ?>
"><?php echo $this->_tpl_vars['ban_list']['player_comid']; ?>
</a>
											</td>
										</tr>
									<?php endif; ?>
									<tr>
										<td class="fat"><?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
										<td>
											<?php if ($this->_supers['session']['ip_view'] == 'yes'): ?>
												<?php if ($this->_tpl_vars['ban_list']['player_ip']): ?>
													<?php echo $this->_tpl_vars['ban_list']['player_ip']; ?>

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
											<?php if ($this->_tpl_vars['ban_list']['ban_type'] == 'S'): ?>
												<?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

											<?php elseif ($this->_tpl_vars['ban_list']['ban_type'] == 'SI'): ?>
												<?php echo ((is_array($_tmp="_STEAMID&IP")) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

											<?php else: ?>
												<?php echo ((is_array($_tmp='_NOTAVAILABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

											<?php endif; ?>
										</td>
									</tr>
									<tr>
										<td class="fat"><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
										<td><?php echo $this->_tpl_vars['ban_list']['ban_reason']; ?>
</td>
									</tr>
									<tr>
										<td class="fat"><?php echo ((is_array($_tmp='_INVOKED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
										<td><?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list']['ban_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y - %T") : smarty_modifier_date_format($_tmp, "%d.%m.%Y - %T")); ?>
</td>
									</tr>
									<tr>
										<td class="fat"><?php echo ((is_array($_tmp='_EXPIRES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
										<td>
											<?php if ($this->_tpl_vars['ban_list']['ban_length'] == 0): ?>
												<span style='font-style:italic;font-weight:bold;color:red'><?php echo ((is_array($_tmp='_NOTAPPLICABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span>
											<?php else: ?>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list']['ban_end'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d %m %Y - %T") : smarty_modifier_date_format($_tmp, "%d %m %Y - %T")); ?>

												<?php if ($this->_tpl_vars['ban_list']['ban_end'] < time()): ?>
													(<?php echo ((is_array($_tmp='_ALREADYEXP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
)
												<?php else: ?>
													<i>(<?php echo ((is_array($_tmp=$this->_tpl_vars['ban_list']['ban_end']-time())) ? $this->_run_mod_handler('date2word', true, $_tmp) : smarty_modifier_date2word($_tmp)); ?>
 <?php echo ((is_array($_tmp='_REMAINING')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
)</i>
												<?php endif; ?>
											<?php endif; ?>
										</td>
									</tr>
									<tr>
										<td class="fat"><?php echo ((is_array($_tmp='_BANBY')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
										<td><?php echo $this->_tpl_vars['ban_list']['admin_nick']; ?>
<?php if ($this->_tpl_vars['ban_list']['nickname']): ?> <i>(<?php echo $this->_tpl_vars['ban_list']['nickname']; ?>
)</i><?php endif; ?></td>
									</tr>
									<tr>
										<td class="fat"><?php echo ((is_array($_tmp='_BANON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
										<td><?php if ($this->_tpl_vars['ban_list']['server_name'] == 'website'): ?><?php echo ((is_array($_tmp='_WEB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['ban_list']['server_name']; ?>
<?php endif; ?></td>
									</tr>
									<tr>
										<td class="fat"><?php echo ((is_array($_tmp='_TOTALEXPBANS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
										<td><?php echo $this->_tpl_vars['ban_list']['bancount']; ?>
</td>
									</tr>
								</tbody>
							</table> </div>
						</td>
					</tr>
					<tr id="banedit_<?php echo $this->_tpl_vars['ban_list']['bid']; ?>
" style="display:none;">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layer_banedit_banlist.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</tr>
					</form>
					<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
				<!-- Banlist -->
			</tbody>
		</table>

		<div class="clearer">&nbsp;</div>

	</div>
	<div class="clearer">&nbsp;</div>
	<div class="paginator" id="paginator"></div>
	<script type="text/javascript">
		paginator = new Paginator(
			"paginator",
			<?php echo $this->_tpl_vars['ban_page']['max_page']; ?>
,
			20,
			<?php echo $this->_tpl_vars['ban_page']['current']; ?>
,
			"?site="
		);
	</script>

</div>