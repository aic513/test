<?php /* Smarty version 2.6.25-dev, created on 2016-05-05 12:47:08
         compiled from show_all.tpl */ ?>
<ul>
    <?php $_from = $this->_tpl_vars['add']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['add'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['add']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['Id'] => $this->_tpl_vars['i']):
        $this->_foreach['add']['iteration']++;
?>              <li><div align='left'>
            <a href='<?php echo $_SERVER['SCRIPT_NAME']; ?>
?click_id=<?php echo $this->_tpl_vars['i']['id']; ?>
'> <?php echo $this->_tpl_vars['i']['title']; ?>

            </a>
            | Цена: <?php echo $this->_tpl_vars['i']['price']; ?>
 | Продавец: <?php echo $this->_tpl_vars['i']['seller_name']; ?>
 | 
            <a href='<?php echo $_SERVER['SCRIPT_NAME']; ?>
?del_ad=<?php echo $this->_tpl_vars['i']['id']; ?>
'>Удалить</a><br></li>
    <?php endforeach; else: ?> объявления отсутствуют
    <?php endif; unset($_from); ?>
</ul>