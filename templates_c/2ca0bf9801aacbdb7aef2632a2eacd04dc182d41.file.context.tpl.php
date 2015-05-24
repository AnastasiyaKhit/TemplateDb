<?php /* Smarty version Smarty-3.1.21, created on 2015-05-25 01:35:27
         compiled from ".\templates\context.tpl" */ ?>
<?php /*%%SmartyHeaderCode:236645562441fb213d1-73266221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ca0bf9801aacbdb7aef2632a2eacd04dc182d41' => 
    array (
      0 => '.\\templates\\context.tpl',
      1 => 1432502734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '236645562441fb213d1-73266221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5562441fbc5c39_02405659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5562441fbc5c39_02405659')) {function content_5562441fbc5c39_02405659($_smarty_tpl) {?>    <div id="wrapper">
        
        <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <div id="page-wrapper">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-clock-o fa-fw"></i> Лента новостей
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    
                    <ul class="timeline">
                        
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['position']=='left') {?>
                            <li>
                                <div class='<?php echo $_smarty_tpl->tpl_vars['item']->value['class_type'];?>
' ><i class='<?php echo $_smarty_tpl->tpl_vars['item']->value['type_image'];?>
'></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o"></i> Дата публикации <?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p><?php echo $_smarty_tpl->tpl_vars['item']->value['summary'];?>
<a href='<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
'>Подробнее...</a></p>
                                    </div>
                                </div>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['position']=='right') {?>
                            <li class="timeline-inverted">
                                <div class='<?php echo $_smarty_tpl->tpl_vars['item']->value['class_type'];?>
'><i class='<?php echo $_smarty_tpl->tpl_vars['item']->value['type_image'];?>
'></i></div>
                                <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h4>
                                </div>
                                    <div class="timeline-body">
                                        <p><small class="text-muted"><i class="fa fa-clock-o"></i> Дата публикации <?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</small></p>
                                        <p><?php echo $_smarty_tpl->tpl_vars['item']->value['summary'];?>
<a href='<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
'>Подробнее...</a></p>                       
                                    </div>
                                </div>
                            </li>
                        <?php }?>
                    <?php } ?>
                        
                    </ul>
                    
                </div>
            </div>
        </div>
    </div><?php }} ?>
