<?php /* Smarty version Smarty-3.1.21, created on 2015-05-25 00:05:56
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29349556228e7ce5bc4-36882095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91b022c6e496df3f5826dabb455aef115fc11f6f' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1432497952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29349556228e7ce5bc4-36882095',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_556228e7cf3555_35477224',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556228e7cf3555_35477224')) {function content_556228e7cf3555_35477224($_smarty_tpl) {?>        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">News v1.0</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="action/exit.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                        </li>
                        <li>
                            <a href="type1.php"><i class="fa fa-laptop"></i> Технологии</a>
                        </li>
                        <li>
                            <a href="type2.php"><i class="fa  fa-bank"></i> Недвижимость</a>
                        </li>
                        <li>
                            <a href="type3.php"><i class="fa fa-user"></i> Люди</a>
                        </li>
                        <!-----------------------------add button? -->
                    </ul>
                </div>
            </div>
        </nav><?php }} ?>
