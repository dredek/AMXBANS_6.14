<?php /* Smarty version 2.6.25, created on 2020-06-11 17:29:41
         compiled from admin_ban_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'admin_ban_add.tpl', 2, false),array('function', 'html_options', 'admin_ban_add.tpl', 31, false),)), $this); ?>
<?php if ($this->_tpl_vars['msg'] <> ""): ?>
	<div class="success"><?php echo ((is_array($_tmp=($this->_tpl_vars['msg']))) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
<?php endif; ?>
<div class="main">
	<div class="post">
	<?php if ($this->_supers['session']['bans_add'] == 'yes'): ?>
	<form method="post">
		<table frame="box" rules="groups" summary=""> 
			<thead> 
				<tr>
					<th style="width:200px;"><?php echo ((is_array($_tmp='_ADDBAN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</th> 
					<th>&nbsp;</th>
				</tr>
			</thead> 
			<tbody> 
				<tr class="settings_line"> 
					<td class="fat"><?php echo ((is_array($_tmp='_NICKNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
					<td><input type="text" size="40" name="name" <?php if ($this->_tpl_vars['inputs']['name'] != ""): ?>value="<?php echo $this->_tpl_vars['inputs']['name']; ?>
"<?php endif; ?>/></td> 
				</tr> 
				<tr class="settings_line"> 
					<td class="fat"><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
					<td><input type="text" size="40" name="steamid" /></td> 
				</tr> 
				<tr class="settings_line"> 
					<td class="fat"><?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
					<td><input type="text" size="40" name="ip" <?php if ($this->_tpl_vars['inputs']['ip'] != ""): ?>value="<?php echo $this->_tpl_vars['inputs']['ip']; ?>
"<?php endif; ?>/></td>  
				</tr> 
				<tr class="settings_line"> 
					<td class="fat"><?php echo ((is_array($_tmp='_BANTYPE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
					<td>
						<select name="ban_type"><?php echo smarty_function_html_options(array('output' => $this->_tpl_vars['banby_output'],'values' => $this->_tpl_vars['banby_values'],'selected' => $this->_tpl_vars['inputs']['type']), $this);?>
</select>
					</td> 
				</tr> 
				<tr class="settings_line"> 
					<td class="fat"><?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
					<td>
						<select name="ban_reason"><?php echo smarty_function_html_options(array('output' => $this->_tpl_vars['reasons'],'values' => $this->_tpl_vars['reasons'],'selected' => $this->_tpl_vars['inputs']['reason']), $this);?>
</select>
							<?php echo ((is_array($_tmp='_OR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <br /><input type="checkbox" name="reasoncheck" <?php if ($this->_tpl_vars['inputs']['reason_custom'] == 1): ?>checked<?php endif; ?>/>
							<?php echo ((is_array($_tmp='_REASON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
: <input type="text" size="30" name="user_reason" <?php if ($this->_tpl_vars['inputs']['reason_custom'] == 1): ?>value="<?php echo $this->_tpl_vars['inputs']['reason']; ?>
"<?php endif; ?>/>
					</td> 
				</tr> 
				<tr class="settings_line"> 
					<td class="fat"><?php echo ((is_array($_tmp='_BANLENGHT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td> 
					<td>
						<input type="text" size="8" name="ban_length" <?php if ($this->_tpl_vars['inputs']['length'] > 0): ?>value="<?php echo $this->_tpl_vars['inputs']['length']; ?>
"<?php endif; ?>/> <?php echo ((is_array($_tmp='_MINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 
							<?php echo ((is_array($_tmp='_OR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <br /><input type="checkbox" name="perm" <?php if ($this->_tpl_vars['inputs']['length'] == 0): ?>checked<?php endif; ?>/> <?php echo ((is_array($_tmp='_PERMANENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

					</td> 
				</tr> 
			</tbody> 
		</table>
		<div class="_right"><input type="submit" class="button" name="save" value="<?php echo ((is_array($_tmp='_ADD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /></div> 
	</form>
		<?php else: ?>
			<?php echo ((is_array($_tmp='_NOACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 !!
		<?php endif; ?>
		</td>
		<div class="clearer">&nbsp;</div>
	</div>

	<div class="clearer">&nbsp;</div>
</div>