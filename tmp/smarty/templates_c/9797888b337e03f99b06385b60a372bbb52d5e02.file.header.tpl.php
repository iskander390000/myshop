<?php /* Smarty version Smarty-3.1.7, created on 2021-11-11 15:51:43
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11220618d104b5eeeb5-51469611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1636642298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11220618d104b5eeeb5-51469611',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_618d104b64029',
  'variables' => 
  array (
    'pageTitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618d104b64029')) {function content_618d104b64029($_smarty_tpl) {?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="/templates/default/css/main.css" type="text/css" />
    </head> 
<body>
    <div id="header">
        <h1>
            my shop - интернет магазин
        </h1>
    </div>
    
    <?php echo $_smarty_tpl->getSubTemplate ('leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    
    
    <div id="centerColumn">
       centerColumn 
       

        
        
        
        <?php }} ?>