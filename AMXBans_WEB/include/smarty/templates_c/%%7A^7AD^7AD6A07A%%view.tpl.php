<?php /* Smarty version 2.6.25, created on 2020-06-10 12:52:08
         compiled from view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'view.tpl', 6, false),array('modifier', 'date_format', 'view.tpl', 226, false),)), $this); ?>
<div class="main" id="main-two-columns">
	<div class="left" id="main-left">
		<table frame="box" rules="groups" summary=""> 
			<thead> 
				<tr> 
					<th style="width:20px;"><?php echo ((is_array($_tmp='_MOD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th style="width:20px;"><?php echo ((is_array($_tmp='_OS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th style="width:20px;"><?php echo ((is_array($_tmp='_VAC')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th><?php echo ((is_array($_tmp='_HOSTNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th style="width:50px;"><?php echo ((is_array($_tmp='_PLAYER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th style="width:130px;"><?php echo ((is_array($_tmp='_MAP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
				</tr> 
			</thead> 
			
			<tbody>
				<?php if ($this->_tpl_vars['error']): ?>
					<tr> 
						<td class="_center" colspan="6"><?php echo ((is_array($_tmp=$this->_tpl_vars['error'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
					</tr> 
				<?php else: ?>
					
					<?php $_from = $this->_tpl_vars['server']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['serv']):
?>
						
						<?php if ($this->_tpl_vars['serv']['game']): ?>
							<tr onclick="NewToggleLayer('info_<?php echo $this->_tpl_vars['serv']['sid']; ?>
');" onmouseout="this.className='m_out'" onmouseover="this.className='m_over'"> 
								<td class="_center"><img alt="<?php echo $this->_tpl_vars['serv']['game']; ?>
" title="<?php echo $this->_tpl_vars['serv']['game']; ?>
" src="images/games/<?php echo $this->_tpl_vars['serv']['mod']; ?>
.gif" /></td> 
								<td class="_center"><img alt="<?php echo $this->_tpl_vars['serv']['os']; ?>
" title="<?php echo $this->_tpl_vars['serv']['os']; ?>
" src="images/os/<?php echo $this->_tpl_vars['serv']['os']; ?>
.png" /></td> 
								<td class="_center"><img alt="<?php echo ((is_array($_tmp='_VAC_ALT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='_VAC_ALT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" src="images/acheat/vac.png" /></td> 
								<td><?php echo $this->_tpl_vars['serv']['hostname']; ?>
</td> 
								<td class="_center">
									<?php if ($this->_tpl_vars['serv']['bot_players']): ?>
										<?php echo $this->_tpl_vars['serv']['cur_players']-$this->_tpl_vars['serv']['bot_players']; ?>
 (<?php echo $this->_tpl_vars['serv']['cur_players']; ?>
)
									<?php else: ?>
										<?php echo $this->_tpl_vars['serv']['cur_players']; ?>

									<?php endif; ?> 
									 / <?php echo $this->_tpl_vars['serv']['max_players']; ?>

								</td> 
								<td><?php echo $this->_tpl_vars['serv']['map']; ?>
</td> 
							</tr> 
							<tr id="info_<?php echo $this->_tpl_vars['serv']['sid']; ?>
" style="display: none"> 
								<td class="server-info" colspan="6">
									<div style="display:none">
										<table style="border-left:0px;">
												<tr>
													<td style="vertical-align:top;padding-left:0px;padding-right:0px;">
														<table frame="box" rules="groups" summary="Server Info" style="width:100%;">
															<thead> 
																<tr style="border:0px;"> 
																	<th><?php echo ((is_array($_tmp='_NAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
																	<th style="width:30px;"><?php echo ((is_array($_tmp='_FRAGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
																	<th style="width:90px;"><?php echo ((is_array($_tmp='_ONLINE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
																</tr> 
															</thead> 
															<tbody>
																<?php if ($this->_tpl_vars['serv']['cur_players'] >= 1): ?>
																	<?php $_from = $this->_tpl_vars['serv']['players']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['player']):
?>
																	<tr>
																		<td class="vtop"><?php if ($this->_tpl_vars['player']['name'] != ""): ?> <?php echo $this->_tpl_vars['player']['name']; ?>
<?php else: ?> <?php echo ((is_array($_tmp='_PLAYERCONNECTING')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?></td> 
																		<td class="_center vtop"><?php echo $this->_tpl_vars['player']['frag']; ?>
</td> 
																		<td class="vtop"><?php echo $this->_tpl_vars['player']['time']; ?>
</td>
																	</tr>
																	
																	<?php endforeach; endif; unset($_from); ?>
																<?php else: ?>
																	<tr>
																		<td colspan="3"><?php echo ((is_array($_tmp='_NOPLAYERS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
																	</tr>
																	
																<?php endif; ?>
																<!-- Users Online -->

															</tbody> 
														</table>
													</td>
													<td>
														<table frame="box" rules="groups" summary="Server Info" style="width:100%;">
															<thead> 
																<tr style="border:0px;"> 
																	<th class="_center" colspan="2"><?php echo $this->_tpl_vars['serv']['address']; ?>
</th> 
																</tr> 
															</thead> 
															<tbody>
																<tr>
																	<td class="_center" colspan="2">
																		<img style="border:1px #000000 solid;" src="images/maps/<?php echo $this->_tpl_vars['serv']['mod']; ?>
/<?php echo $this->_tpl_vars['serv']['mappic']; ?>
.jpg" alt="<?php echo $this->_tpl_vars['serv']['map']; ?>
">
																	</td>
																</tr>
																<tr>
																	<td class="_center">
																		
																				<a href="steam://connect/<?php echo $this->_tpl_vars['serv']['address']; ?>
" title="<?php echo ((is_array($_tmp='_CONNECT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" class="icons-connect icon-steam"></a>
																	</td>
																	<td class="_center">
																		<a href="hlsw://<?php echo $this->_tpl_vars['serv']['address']; ?>
" title="<?php echo ((is_array($_tmp='_ADDHLSW')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
">
																		<span title="<?php echo ((is_array($_tmp='_ADDHLSW')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" class="icons-connect icon-hlsw" ></span>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td class="fat"><?php echo ((is_array($_tmp='_NEXTMAP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
																	<td><?php echo $this->_tpl_vars['serv']['nextmap']; ?>
</td>
																</tr>
																<tr>
																	<td class="fat"><?php echo ((is_array($_tmp='_FRIENDLYFIRE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
																	<td><?php if ($this->_tpl_vars['serv']['friendlyfire'] == 1): ?><?php echo ((is_array($_tmp='_YES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp='_NO')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?></td>
																</tr>
																<tr>
																	<td class="fat"><?php echo ((is_array($_tmp='_TIMELEFT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
																	<td><?php echo $this->_tpl_vars['serv']['timeleft']; ?>
 <?php echo ((is_array($_tmp='_MINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
																</tr>
																<tr>
																	<td class="fat"><?php echo ((is_array($_tmp='_PASSWORD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
																	<td><?php if ($this->_tpl_vars['serv']['password'] == 1): ?><?php echo ((is_array($_tmp='_YES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp='_NO')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?></td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
											</table>
									</div>
								</td> 
							</tr> 
							<!-- Server Online -->
						<?php else: ?>
							<tr class="offline"> 
								<td class="_center"><img alt="<?php echo $this->_tpl_vars['serv']['mod']; ?>
" title="<?php echo $this->_tpl_vars['serv']['mod']; ?>
" src="images/games/<?php echo $this->_tpl_vars['serv']['mod']; ?>
.gif" /></td> 
								<td class="_center"><?php echo ((is_array($_tmp='_NA')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
								<td class="_center"><?php echo ((is_array($_tmp='_NA')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
								<td><?php echo $this->_tpl_vars['serv']['hostname']; ?>
</td> 
								<td colspan="2"><?php echo ((is_array($_tmp='_SERVEROFFLINE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
							</tr> 
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
			</tbody> 
		</table> 
		<div class="clearer">&nbsp;</div>
	</div>

	<div class="right sidebar" id="sidebar">
		<div class="section">
			<div class="section-title">
				<div class="left"><?php echo ((is_array($_tmp='_STATS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
				<div class="right"><span title="<?php echo ((is_array($_tmp='_STATS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" class="icons-stats icon-stats"></span></div>
				
				<div class="clearer">&nbsp;</div>

			</div>
			<div class="section-content">
				<ul class="nice-list">
					<li>
						<div class="left"><?php echo ((is_array($_tmp='_BANSINDB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
						<div class="right"><?php echo $this->_tpl_vars['stats']['total']; ?>
</div>
						<div class="clearer">&nbsp;</div>
					</li>

					<li>
						<div class="left"><?php echo ((is_array($_tmp='_ACTIVEBANS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
						<div class="right"><?php echo $this->_tpl_vars['stats']['active']; ?>
</div>
						<div class="clearer">&nbsp;</div>
					</li>
					
					<li>
						<div class="left"><?php echo ((is_array($_tmp='_PERM_BANS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
						<div class="right"><?php echo $this->_tpl_vars['stats']['permanent']; ?>
</div>
						<div class="clearer">&nbsp;</div>
					</li>

					<li>
						<div class="left"><?php echo ((is_array($_tmp='_TEMP_BANS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
						<div class="right"><?php echo $this->_tpl_vars['stats']['temp']; ?>
</div>
						<div class="clearer">&nbsp;</div>
					</li>
					
					<li>
						<div class="left">&nbsp;</div>
						<div class="right">&nbsp;</div>
						<div class="clearer">&nbsp;</div>
					</li>
					
					<li>
						<div class="left"><?php echo ((is_array($_tmp='_ADMINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
						<div class="right"><?php echo $this->_tpl_vars['stats']['admins']; ?>
</div>
						<div class="clearer">&nbsp;</div>
					</li>
					
					<li>
						<div class="left"><?php echo ((is_array($_tmp='_ACTIVE_SERVERS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
						<div class="right"><?php echo $this->_tpl_vars['stats']['servers']; ?>
</div>
						<div class="clearer">&nbsp;</div>
					</li>
				</ul>
			</div>
		</div>

		<div class="section">
			<div class="section-title">
				<div class="left"><?php echo ((is_array($_tmp='_LATEST_BAN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
				<div class="right"><span title="<?php echo ((is_array($_tmp='_LATEST_BAN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" class="icons-stats icon-clock"></span></div>
				
				<div class="clearer">&nbsp;</div>
			</div>

			<div class="section-content">
				<ul class="nice-list">
					<li>
						<div class="left"><?php echo ((is_array($_tmp='_PLAYER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
						<div class="right"><?php echo $this->_tpl_vars['last_ban']['nickname']; ?>
</div>
						<div class="clearer">&nbsp;</div>
					</li>
					
					<li>
						<div class="left"><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
						<div class="right"><?php if ($this->_tpl_vars['last_ban']['steamid'] == 'SI'): ?><?php echo ((is_array($_tmp='_NOTAVAILABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['last_ban']['steamid']; ?>
<?php endif; ?></div>
						<div class="clearer">&nbsp;</div>
					</li>
					
					<li>
						<div class="left"><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
						<div class="right"><?php echo $this->_tpl_vars['last_ban']['reason']; ?>
</div>
						<div class="clearer">&nbsp;</div>
					</li>
					
					<li>
						<div class="left"><?php echo ((is_array($_tmp='_DATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
						<div class="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['last_ban']['created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M")); ?>
</div>
						<div class="clearer">&nbsp;</div>
					</li>
					
					<li>
						<div class="left"><?php echo ((is_array($_tmp='_EXPIRES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
						<div class="right"><?php if ($this->_tpl_vars['last_ban']['length'] == 0): ?><?php echo ((is_array($_tmp='_NEVER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php if ($this->_tpl_vars['last_ban']['time'] > $this->_tpl_vars['last_ban']['length']): ?><?php echo ((is_array($_tmp='_ALREADYEXP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['last_ban']['length'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M")); ?>
<?php endif; ?><?php endif; ?></div>
						<div class="clearer">&nbsp;</div>
					</li>

					<li><a href="ban_list.php" class="more"><?php echo ((is_array($_tmp='_BROWSE_ALL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 &#187;</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="clearer">&nbsp;</div>
</div>