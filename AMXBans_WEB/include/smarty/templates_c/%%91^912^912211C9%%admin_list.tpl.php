<?php /* Smarty version 2.6.25, created on 2020-06-10 13:18:59
         compiled from admin_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'admin_list.tpl', 13, false),array('modifier', 'date_format', 'admin_list.tpl', 37, false),)), $this); ?>
<script src="templates/<?php echo $this->_tpl_vars['design']; ?>
/js/loading.js"></script>
<div class="main">
	<div class="post">
	<div class="admins">
		<div class="_right">
			<h1><a href="#" id="serv">Servers</a></h1>
		</div>

		<table frame="box" rules="groups" summary="">
			<thead> 
				<tr>
					<th style="width:18px;">&nbsp;</th>
					<th><?php echo ((is_array($_tmp='_NICKNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th>ICQ</th> 
					<!-- <th style="width:150px;"><?php echo ((is_array($_tmp='_STEAMIDIPNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> -->
					<th style="width:150px;"><?php echo ((is_array($_tmp='_ACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th style="width:150px;"><?php echo ((is_array($_tmp='_ADMINSINCE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th style="width:150px;"><?php echo ((is_array($_tmp='_ADMINTO')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th>
					<th style="width:18px;">&nbsp;</th>
				</tr>
			</thead> 
			<tbody> 
			<!-- Start Loop -->
			<?php $_from = $this->_tpl_vars['admins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admins']):
?>
				<tr class="list"> 
					<td><a href="http://steamcommunity.com/profiles/<?php echo $this->_tpl_vars['admins']['comid']; ?>
" target="_blank"><img src="images/Steam.png" /></a></td>
					<td><?php echo $this->_tpl_vars['admins']['nickname']; ?>
</td>
					<td>
						<?php if ($this->_tpl_vars['admins']['icq']): ?>
							<?php echo $this->_tpl_vars['admins']['icq']; ?>

						<?php else: ?>
							<i><?php echo ((is_array($_tmp='_NOTAVAILABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i>
						<?php endif; ?>
					</td>
					<!-- <td><?php echo $this->_tpl_vars['admins']['steamid']; ?>
</td> -->
					<td><?php echo $this->_tpl_vars['admins']['access']; ?>
</td> 
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['admins']['created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y - %T") : smarty_modifier_date_format($_tmp, "%d.%m.%Y - %T")); ?>
</td> 
					<td><em>
						<?php if ($this->_tpl_vars['admins']['expired'] == '0'): ?>
							<i><?php echo ((is_array($_tmp='_UNLIMITED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i>
						<?php else: ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['admins']['expired'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y - %T") : smarty_modifier_date_format($_tmp, "%d.%m.%Y - %T")); ?>

						<?php endif; ?>
					</em></td>
					<td><a href="admin_ajax.php?id=<?php echo $this->_tpl_vars['admins']['aid']; ?>
" rel="facebox"><img src="images/page.png" border="0" title="<?php echo ((is_array($_tmp='_DETAILS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"/></a></td> 
				</tr>
			<?php endforeach; endif; unset($_from); ?>
			<!-- Stop Loop -->
		</table> 
	</div>

	<div class="servers" style="display: none">
		<div class="_right">
			<h1><a id="adm" href="#">Admins</a></h1>
		</div>
		<table>
			<?php $_from = $this->_tpl_vars['admin_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['server']):
?>
				<tr onclick="NewToggleLayer('info_<?php echo $this->_tpl_vars['server']['id']; ?>
');" class="list">
					<td style="width:20px;"><img alt="<?php echo $this->_tpl_vars['server']['gametype']; ?>
" title="<?php echo $this->_tpl_vars['server']['gametype']; ?>
" src="images/games/<?php echo $this->_tpl_vars['server']['gametype']; ?>
.gif" /></td>
					<td><?php echo $this->_tpl_vars['server']['hostname']; ?>
</td>
				</tr>
				<tr id="info_<?php echo $this->_tpl_vars['server']['id']; ?>
" style="display: none">
					<td colspan="2">
						<div style="display: none;" align="center">
							<table class="details">
								<?php $_from = $this->_tpl_vars['server']['admins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admin']):
?>
									<tr class="list"> 
										<td style="width:20px;"><a href="http://steamcommunity.com/profiles/<?php echo $this->_tpl_vars['admin']['comid']; ?>
" target="_blank"><img src="images/Steam.png" /></a></td>
										<td style="width:60px;"><?php echo $this->_tpl_vars['admin']['nickname']; ?>
</td>
										<td style="width:30px;">
											<?php if ($this->_tpl_vars['admin']['icq']): ?>
												<?php echo $this->_tpl_vars['admin']['icq']; ?>

											<?php else: ?>
												<i><?php echo ((is_array($_tmp='_NOTAVAILABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i>
											<?php endif; ?>
										</td>
										<!-- <td style="width:150px;"><?php echo $this->_tpl_vars['admin']['steamid']; ?>
</td> -->
										<td style="width:150px;"><?php echo $this->_tpl_vars['admin']['access']; ?>
</td> 
										<td style="width:150px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['admin']['created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y - %T") : smarty_modifier_date_format($_tmp, "%d.%m.%Y - %T")); ?>
</td> 
										<td style="width:150px;"><em>
											<?php if ($this->_tpl_vars['admin']['expired'] == '0'): ?>
												<i><?php echo ((is_array($_tmp='_UNLIMITED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i>
											<?php else: ?>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['admin']['expired'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y - %T") : smarty_modifier_date_format($_tmp, "%d.%m.%Y - %T")); ?>

											<?php endif; ?>
										</em></td>
										<td style="width:18px;"><a href="admin_ajax.php?id=<?php echo $this->_tpl_vars['admin']['aid']; ?>
" rel="facebox"><img src="images/page.png" border="0" title="<?php echo ((is_array($_tmp='_DETAILS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"/></a></td> 
									</tr>
								<?php endforeach; endif; unset($_from); ?>
							</table>
						</div>
					</td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
		</table>
	</div>

	<div class="post _center">
		<form metdod="post">
			<input type="button" class="button" name="showflags" value="<?php echo ((is_array($_tmp='_INFO_ACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" onclick="$('#info_access').slideToggle('slow');"/>
		</form>
	</div>
	<div id="info_access" class="post" style="display:none;">
		<br />
		<table> 
			<tr class="title"> 
				<td><?php echo ((is_array($_tmp='_ACCESSPERMS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
				<td style="width:350px;"><?php echo ((is_array($_tmp='_ACCESSFLAGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
			</tr> 
			<tr class="smallfont">
				<td>
					<?php echo ((is_array($_tmp='_ACCESS_FLAGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

				</td> 
				<td class="vtop">
					<?php echo ((is_array($_tmp='_FLAG_FLAGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

				</td> 
			</tr>
		</table> 
	</div>
	<div class="clearer">&nbsp;</div>
</div>