<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-26 09:54:45
         compiled from "..\views\taberna\list.html" */ ?>
<?php /*%%SmartyHeaderCode:2767056cb210b3b1d83-03548644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd63a040f6407603bdc346e92cf52a557e3e0737e' => 
    array (
      0 => '..\\views\\taberna\\list.html',
      1 => 1456374732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2767056cb210b3b1d83-03548644',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56cb210b40f995_17364969',
  'variables' => 
  array (
    'seccions' => 0,
    'seccion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cb210b40f995_17364969')) {function content_56cb210b40f995_17364969($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("taberna/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <section class="container-fluid">
           
            <!-- Right side column. Contains the navbar and content of the page -->
            <article class="row">


                <!-- Main content -->
                <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    Secciones

                                </header>
                                <!--Lista Secciones-->
                                <div class="panel-body table-responsive listaSecciones">
                                    <div class="box-tools m-b-15">
                                        <div class="input-group">
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div><a href="/youth/agrSecciones/">Crear sección</a></div> 
                                    <table class="table table-hover">
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>PADRE</th>
                                            <th>PUBLICA</th>
                                            <th>FECHA</th>
                                            <th>FECHA ACTUALIZACION</th>
                                            <th>EDITAR</th>
                                            <th>CREAR CONTENIDO</th>
                                            <th>CREAR Multimedia</th>
                                            <th>EDITAR CONTENIDO</th>
                                        </tr>
                                        <?php  $_smarty_tpl->tpl_vars['seccion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['seccion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['seccions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['seccion']->key => $_smarty_tpl->tpl_vars['seccion']->value) {
$_smarty_tpl->tpl_vars['seccion']->_loop = true;
?>
                                        <tr>
                                            
                                                <td><?php echo $_smarty_tpl->tpl_vars['seccion']->value['id'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['seccion']->value['nombre'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['seccion']->value['nombrePadre'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['seccion']->value['produccionVisible'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['seccion']->value['fecha'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['seccion']->value['fechaActualizacion'];?>
</td>
                                                <td><span class="glyphicon glyphicon-pencil" data-seccion="<?php echo $_smarty_tpl->tpl_vars['seccion']->value['id'];?>
"></span></td>
                                                <td><span class="glyphicon glyphicon-blackboard" data-seccion="<?php echo $_smarty_tpl->tpl_vars['seccion']->value['id'];?>
"></span></td>
                                                <td><span class="glyphicon glyphicon-film" data-seccion="<?php echo $_smarty_tpl->tpl_vars['seccion']->value['id'];?>
"></span></td>
                                                <td><span class="glyphicon glyphicon-list-alt" data-seccion="<?php echo $_smarty_tpl->tpl_vars['seccion']->value['id'];?>
"></span></td>
                                                <form name="listaSeccion-<?php echo $_smarty_tpl->tpl_vars['seccion']->value['id'];?>
" id="listaSeccion-<?php echo $_smarty_tpl->tpl_vars['seccion']->value['id'];?>
" method="POST"><input type="hidden" name="idSeccion" id="idSeccion" value="<?php echo $_smarty_tpl->tpl_vars['seccion']->value['id'];?>
"/></form>
                                        </tr>
                                        <?php } ?>
                                    </table>
                                </div><!-- /.box-body -->
                                <!--Fin de lista secciones-->
                                <!--Edicion de secciones-->
                                <div class="panel-body table-responsive edicion">
                                </div>
                                <!--Fin Edicion de secciones-->

                                <div class="panel-body table-responsive CreaContenido">
                                </div>
                            </div><!-- /.box -->
                        </div>

                        
                </article>
                </section><!-- /.content -->
                 <?php echo $_smarty_tpl->getSubTemplate ("taberna/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
