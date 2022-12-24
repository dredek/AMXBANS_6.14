<?php /* Smarty version 2.6.25, created on 2020-06-09 13:53:54
         compiled from layer_comedit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'layer_comedit.tpl', 5, false),)), $this); ?>
<td colspan=10>
	<div style="display: none">
		<table width="90%" class="table_details">
			<tr class="htable">
				<td><nobr><b><?php echo ((is_array($_tmp='_EDITCOMMENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></nobr></td>
			</tr>
			<tr><td colspan="2">
					<table width="100%" class="table_details" border="1">
						<form method="post">
						<input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['ban_detail']['bid']; ?>
" />
						<input type="hidden" name="site" value="<?php echo $this->_tpl_vars['site']; ?>
" />
						<input type="hidden" name="cid" value="<?php echo $this->_tpl_vars['comments']['id']; ?>
" />
						<input type="hidden" name="details_x" value="1" />
						<tr>
							<td align="right" width="30%"><i><b><?php echo ((is_array($_tmp='_NAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></i></td>
							<td><input type="test" size="30" name="name" value="<?php echo $this->_tpl_vars['comments']['name']; ?>
" /></td>
						</tr>
						<tr>
							<td align="right" width="30%"><i><b><?php echo ((is_array($_tmp='_EMAIL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></i></td>
							<td><input type="test" size="30" name="email" value="<?php echo $this->_tpl_vars['comments']['email']; ?>
" /></td>
						</tr>
						<tr>
							<td align="right"><i><b><?php echo ((is_array($_tmp='_COMMENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</b></i></td>
							<td>
								<?php $_from = $this->_tpl_vars['bbcodes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bbcodes']):
?>
								<a href="javascript:insertAtCaret('commentce<?php echo $this->_tpl_vars['comments']['id']; ?>
', '<?php echo $this->_tpl_vars['bbcodes']['0']; ?>
 <?php echo $this->_tpl_vars['bbcodes']['1']; ?>
');"><img border="0" src="images/icons/bbcode/<?php echo $this->_tpl_vars['bbcodes']['2']; ?>
" title="<?php echo $this->_tpl_vars['bbcodes']['3']; ?>
" /></a>
								<?php endforeach; endif; unset($_from); ?>
								<br />
								<textarea name="comment" id="commentce<?php echo $this->_tpl_vars['comments']['id']; ?>
" cols="50" rows="3" wrap="soft"><?php echo $this->_tpl_vars['comments']['comment']; ?>
</textarea>
								<br />
								<?php $_from = $this->_tpl_vars['smilies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['smilies']):
?>
								<a href="javascript:insertAtCaret('commentce<?php echo $this->_tpl_vars['comments']['id']; ?>
', ' <?php echo $this->_tpl_vars['smilies']['0']; ?>
 ');"><img border="0" src="images/icons/<?php echo $this->_tpl_vars['smilies']['1']; ?>
" title="<?php echo $this->_tpl_vars['smilies']['2']; ?>
" /></a>
								<?php endforeach; endif; unset($_from); ?>
							</td>
						</tr>
						<tr>
							<td class="table_details" align="center" colspan="2">
								<input type="submit" name="edit_comment" onclick="return confirm('<?php echo ((is_array($_tmp='_SAVEEDIT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" value="<?php echo ((is_array($_tmp='_SAVE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" />
							</td>
						</tr>
						</form>
					</table>
			</td></tr>
		</table>
	</div>
</td>