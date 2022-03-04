<?php
return array (
  'vendor' => 'Opoink',
  'module' => 'Bmodule',
  'version' => '1.0.0',
  'controllers' => 
  array (
    'admin_index_index_index' => '\\Opoink\\Bmodule\\Controller\\Admin\\Index\\Index\\Index',
    'admin_adminuser_index_index' => '\\Opoink\\Bmodule\\Controller\\Admin\\Adminuser\\Index\\Index',
    0 => 
    array (
      'pattern' => '/opoink/bmodule/admin/vue/component/:componentname',
      'class' => 'Opoink\\Bmodule\\Controller\\Opoink\\Bmodule\\Admin\\Vue\\Component\\ComponentName',
      'page_name' => 'Opoink\\Bmodule\\Admin\\Vue\\Component\\ComponentName',
      'method' => 'GET',
    ),
  ),
)
?>