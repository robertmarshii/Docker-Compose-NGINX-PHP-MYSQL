<?php /* Smarty version 2.6.31, created on 2020-12-11 16:17:16
         compiled from CRM/ACL/Form/WordPress/Permissions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/ACL/Form/WordPress/Permissions.tpl', 1, false),array('block', 'ts', 'CRM/ACL/Form/WordPress/Permissions.tpl', 12, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="help">
  <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use this form to Grant access to CiviCRM components and other CiviCRM permissions to WordPress roles.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
  <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><strong>NOTE: Super Admin</strong> and <strong>Administrator</strong> roles will have all permissions in CiviCRM.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
</div>

<div class="crm-block crm-form-block crm-export-form-block">

  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>

  <table>

    <tr>
      <td class="label">&nbsp;</td>
      <?php $this->assign('num', 0); ?>
      <?php $_from = $this->_tpl_vars['roles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['role_name'] => $this->_tpl_vars['role_value']):
?>
        <td align="center"><strong><?php echo $this->_tpl_vars['role_value']; ?>
</strong></td>
        <?php $this->assign('num', $this->_tpl_vars['num']+1); ?>
      <?php endforeach; endif; unset($_from); ?>
    </tr>

    <?php $this->assign('x', 0); ?>
    <?php $_from = $this->_tpl_vars['table']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['perm_name'] => $this->_tpl_vars['row']):
?>
      <?php if ($this->_tpl_vars['x'] % 2 == 1): ?>
        <tr style="background-color: #E6E6DC;">
      <?php else: ?>
        <tr style="background-color: #FFFFFF;">
      <?php endif; ?>

      <td style="height: 2.6em;">
        <?php echo $this->_tpl_vars['row']['label']; ?>

        <?php if ($this->_tpl_vars['row']['desc']): ?>
          <br/><span class="description"><?php echo $this->_tpl_vars['row']['desc']; ?>
</span>
        <?php endif; ?>
      </td>

      <?php $_from = $this->_tpl_vars['row']['roles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['role_name']):
?>
        <td align="center" style="padding-top: 0.6em;">
          <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['role_name']][$this->_tpl_vars['perm_name']]['html']; ?>

        </td>
      <?php endforeach; endif; unset($_from); ?>

      </tr>
      <?php $this->assign('x', $this->_tpl_vars['x']+1); ?>
    <?php endforeach; endif; unset($_from); ?>

  </table>

  <div class="crm-submit-buttons">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>

</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>