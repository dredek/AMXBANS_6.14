<?php /* Smarty version 2.6.25, created on 2020-06-11 17:29:39
         compiled from admin_in.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'admin_in.tpl', 2, false),)), $this); ?>
<?php if ($this->_tpl_vars['msg'] <> ""): ?>
	<div class="success"><?php echo ((is_array($_tmp=($this->_tpl_vars['msg']))) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
<?php endif; ?>

<div class="main" id="main-two-columns">
	<div class="left" id="main-left">
		<table frame="box" rules="groups" summary=""> 
			<thead> 
				<tr>
					<th colspan="2"><?php echo ((is_array($_tmp='_SERVERSETUP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
				</tr> 
			</thead> 
			<tbody> 
				<tr class="settings_line">
					<td class="fat" style="width:200px;">AMXBans <?php echo ((is_array($_tmp='_WEB_VERSION')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
					<td>
						<span id="version"><?php echo $this->_tpl_vars['php_settings']['version_amxbans_web']; ?>
</span>
					</td>
				</tr>
				<tr class="settings_line">
					<td class="fat" style="width:200px;"><?php echo ((is_array($_tmp='_WEBSERVER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
					<td><?php echo $this->_tpl_vars['php_settings']['server_software']; ?>
</td>
				</tr>
				<tr class="settings_line">
					<td class="fat" style="width:200px;">PHP <?php echo ((is_array($_tmp='_VERSION')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
					<td><?php echo $this->_tpl_vars['php_settings']['version_php']; ?>
</td>
				</tr>
				<tr class="settings_line">
					<td class="fat" style="width:200px;">MySQL <?php echo ((is_array($_tmp='_VERSION')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
					<td><?php echo $this->_tpl_vars['php_settings']['mysql_version']; ?>
 <img alt="" src="images/generic/<?php if ($this->_tpl_vars['php_settings']['mysql_version'] >= 4.1): ?>accept<?php else: ?>exclamation<?php endif; ?>.png" /></td>
				</tr>
				<tr class="settings_line">
					<td class="fat" style="width:200px;">safe_mode</td> 
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['php_settings']['safe_mode'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <img alt="" src="images/generic/accept.png" /></td>
				</tr>
				<tr class="settings_line">
					<td class="fat" style="width:200px;">register_globals</td> 
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['php_settings']['register_globals'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <img src="images/generic/<?php if ($this->_tpl_vars['php_settings']['register_globals'] == '_OFF'): ?>accept<?php else: ?>exclamation<?php endif; ?>.png" /></td>
				</tr>
				<tr class="settings_line">
					<td class="fat" style="width:200px;">magic_quotes_gpc</td> 
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['php_settings']['magic_quotes_gpc'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <img src="images/generic/<?php if ($this->_tpl_vars['php_settings']['magic_quotes_gpc'] == '_OFF'): ?>accept<?php else: ?>exclamation<?php endif; ?>.png" /></td>
				</tr>
				<tr class="settings_line">
					<td class="fat" style="width:200px;">display_errors</td> 
					<td><?php echo $this->_tpl_vars['php_settings']['display_errors']; ?>
</td>
				</tr>
				<tr class="settings_line">
					<td class="fat" style="width:200px;">post_max_size</td> 
					<td><?php echo $this->_tpl_vars['php_settings']['post_max_size']; ?>
</td>
				</tr>
				<tr class="settings_line">
					<td class="fat" style="width:200px;">upload_max_filesize</td> 
					<td><?php echo $this->_tpl_vars['php_settings']['upload_max_filesize']; ?>
</td>
				</tr>
				<tr class="settings_line">
					<td class="fat" style="width:200px;">max_execution_time</td> 
					<td><?php echo $this->_tpl_vars['php_settings']['max_execution_time']; ?>
</td>
				</tr>
			</tbody> 
		</table>

		<div class="spacer">&nbsp;</div>

		<table frame="box" rules="groups" summary=""> 
			<thead> 
				<tr class="settings_line">
					<th colspan="3"><?php echo ((is_array($_tmp='_PHPMODULES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
				</tr> 
			</thead> 
			<tbody> 
				<tr>
					<td class="fat" style="width:200px;">bcmath</td> 
					<td style="width:15px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['php_settings']['bcmath'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
					<td rowspan="2"><img alt="" src="images/generic/<?php if ($this->_tpl_vars['php_settings']['gmp'] == '_YES' || $this->_tpl_vars['php_settings']['bcmath'] == '_YES'): ?>accept<?php else: ?>exclamation<?php endif; ?>.png"/></td>
				</tr>
				<tr>
					<td class="fat" style="width:200px;">gmp</td> 
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['php_settings']['gmp'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
				</tr>
				<tr class="settings_line">
					<td class="fat" style="width:200px;">GD</td> 
					<td colspan="2"<?php echo ((is_array($_tmp=$this->_tpl_vars['php_settings']['gd'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php if ($this->_tpl_vars['php_settings']['version_gd']): ?> (<?php echo $this->_tpl_vars['php_settings']['version_gd']; ?>
)<?php endif; ?> <img alt="" src="images/generic/accept.png"/></td>
				</tr>
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
				<form method="post">
					<ul class="nice-list">
						<li>
							<div class="left"><?php echo ((is_array($_tmp='_DBSIZE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
							<div class="right"><?php echo $this->_tpl_vars['db_size']; ?>
</div>
							<div class="clearer">&nbsp;</div>
						</li>
						<li>
							<div class="left"><?php echo ((is_array($_tmp='_BANSINDB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
							<div class="right"><?php echo $this->_tpl_vars['bans']['count']; ?>
</div>
							<div class="clearer">&nbsp;</div>
						</li>
						<li>
							<div class="left"><?php echo ((is_array($_tmp='_ACTIVEBANS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
							<div class="right"><?php echo $this->_tpl_vars['bans']['activ']; ?>
</div>
							<div class="clearer">&nbsp;</div>
						</li>
						<li>
							<div class="left"><?php echo ((is_array($_tmp='_COMMENTS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
							<div class="right">
								<?php echo $this->_tpl_vars['comment_count']['count']; ?>

								<?php if ($this->_tpl_vars['comment_count']['fail'] != 0): ?> (<?php echo $this->_tpl_vars['comment_count']['fail']; ?>
 <?php echo ((is_array($_tmp='_ERROR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
)
									<img src="images/generic/exclamation.png" />
									<input type="submit" class="button" value="<?php echo ((is_array($_tmp='_REPAIR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" name="comment_repair" <?php if ($this->_supers['session']['websettings_edit'] != 'yes'): ?>disabled<?php endif; ?>/>
								<?php endif; ?></div>
							<div class="clearer">&nbsp;</div>
						</li>
						<li>
							<div class="left"><?php echo ((is_array($_tmp='_BL_FILES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
							<div class="right">
								<?php echo $this->_tpl_vars['file_count']['count']; ?>

								<?php if ($this->_tpl_vars['file_count']['fail'] != 0): ?> (<?php echo $this->_tpl_vars['file_count']['fail']; ?>
 <?php echo ((is_array($_tmp='_ERROR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
)
									<img src="images/generic/exclamation.png" />
									<input type="submit" class="button" value="<?php echo ((is_array($_tmp='_REPAIR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" name="file_repair" <?php if ($this->_supers['session']['websettings_edit'] != 'yes'): ?>disabled<?php endif; ?>/>
								<?php endif; ?>
							</div>
						</li>
					</ul>
				</form>
			</div>
		</div>

		<div class="section">
			<div class="section-title">
				<?php echo ((is_array($_tmp='_OTHERFUNCTIONS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

			</div>
			<div class="section-content">
				<form method="post">
					<ul class="nice-list">
						<li>
							<div class="left"><?php echo ((is_array($_tmp='_CLEARCACHE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
							<div class="right">
								<input type="submit" class="button" name="clear" value="<?php echo ((is_array($_tmp='_DELETE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['websettings_edit'] != 'yes'): ?>disabled<?php endif; ?>/>
							</div>
							<div class="clearer">&nbsp;</div>
						</li>
						<li>
							<div class="left"><?php echo ((is_array($_tmp='_DBOPTIMIZE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
							<div class="right">
								<input type="submit" class="button" name="optimize" value="OK" <?php if ($this->_supers['session']['websettings_edit'] != 'yes'): ?>disabled<?php endif; ?>/>
							</div>
							<div class="clearer">&nbsp;</div>
						</li>
						<li>
							<div class="left"><?php echo ((is_array($_tmp='_PRUNEDB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
							<div class="right">
								<input type="submit" class="button" name="prunedb" value="OK" <?php if ($this->_supers['session']['websettings_edit'] != 'yes'): ?>disabled<?php endif; ?>/>
							</div>
							<div class="clearer">&nbsp;</div>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
	<div class="clearer">&nbsp;</div>
</div>