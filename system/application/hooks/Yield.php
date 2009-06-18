<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* Yield  ::  HOOKS
*
* Adds layout support :: Similar to RoR <%= yield =>
* '{yield}' will be replaced with all output generated by the controller/view.
*/
class Yield
{
  function doYield()
  {
    global $OUT;
  
    $CI =& get_instance();
    $output = $CI->output->get_output();
    
    if (isset($CI->layout))
    {
      if (!preg_match('/(.+).php$/', $CI->layout))
      {
        $CI->layout .= '.php';
      }

      $requested = BASEPATH . 'application/views/layouts/' . $CI->layout;
      $default = BASEPATH . 'application/views/layouts/default.php';
      
      if (file_exists($requested))
      {
        $layout = $CI->load->file($requested, true);
        $view = str_replace("{yield}", $output, $layout);
      }
      else
      {
        $layout = $CI->load->file($default, true);
        $view = str_replace("{yield}", $output, $layout);
      }
    }
    else
    {
      $view = $output;
    }
    
    $OUT->_display($view);
  }
}  

?> 