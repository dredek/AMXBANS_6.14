<?php /* Smarty version 2.6.25, created on 2020-06-09 01:51:04
         compiled from main_footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'main_footer.tpl', 4, false),)), $this); ?>
<?php if (! $this->_tpl_vars['ajaxlist']): ?>
					<div class="smallfont">
						<span style="float:left"><strong>AMXBans <span style="color: #e90042">#</span> Gm <?php echo $this->_tpl_vars['version_web']; ?>
</strong> by <a href="http://gm-community.net" title="GmStaff, xPaw, Sho0ter" target="_blank">Larte Team</a>.</span>
						<span style="float:right"><strong><?php echo ((is_array($_tmp='_DESIGN_BY')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</strong>: <a href="http://amxx.pl/user/758-misieq/" title="GmStaff">MisieQ</a></span>
					</div>
				</div>
			</div>
		<br /><br />
	</body>
	</html>
<?php endif; ?>