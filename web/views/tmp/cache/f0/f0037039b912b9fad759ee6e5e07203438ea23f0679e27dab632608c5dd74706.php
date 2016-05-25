<?php

/* Index\login.twig */
class __TwigTemplate_8f12d14faf808493c80fdc5b6f4d00058237c5a15d9da07a9ec519bde82f20b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout/default/layout.twig", "Index\\login.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/default/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
            Page Header
            <small>Optional description</small>
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>
            <li class=\"active\">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class=\"content\">
          <div class=\"box\">
                <div class=\"box-header\">
                  <h3 class=\"box-title\">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table id=\"example1\" class=\"table table-bordered table-striped\">
                    <thead>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      
                      <tr>
                        <td>Misc</td>
                        <td>Links</td>
                        <td>Text only</td>
                        <td>-</td>
                        <td>X</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>Lynx</td>
                        <td>Text only</td>
                        <td>-</td>
                        <td>X</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>IE Mobile</td>
                        <td>Windows Mobile 6</td>
                        <td>-</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>PSP browser</td>
                        <td>PSP</td>
                        <td>-</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Other browsers</td>
                        <td>All others</td>
                        <td>-</td>
                        <td>-</td>
                        <td>U</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
           
          <!-- Your Page Content Here -->

        </section><!-- /.content -->
        ";
    }

    public function getTemplateName()
    {
        return "Index\\login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'layout/default/layout.twig' %}*/
/* {% block content %}*/
/* <!-- Content Header (Page header) -->*/
/*         <section class="content-header">*/
/*           <h1>*/
/*             Page Header*/
/*             <small>Optional description</small>*/
/*           </h1>*/
/*           <ol class="breadcrumb">*/
/*             <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>*/
/*             <li class="active">Here</li>*/
/*           </ol>*/
/*         </section>*/
/* */
/*         <!-- Main content -->*/
/*         <section class="content">*/
/*           <div class="box">*/
/*                 <div class="box-header">*/
/*                   <h3 class="box-title">Data Table With Full Features</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body">*/
/*                   <table id="example1" class="table table-bordered table-striped">*/
/*                     <thead>*/
/*                       <tr>*/
/*                         <th>Rendering engine</th>*/
/*                         <th>Browser</th>*/
/*                         <th>Platform(s)</th>*/
/*                         <th>Engine version</th>*/
/*                         <th>CSS grade</th>*/
/*                       </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                       */
/*                       */
/*                       <tr>*/
/*                         <td>Misc</td>*/
/*                         <td>Links</td>*/
/*                         <td>Text only</td>*/
/*                         <td>-</td>*/
/*                         <td>X</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Misc</td>*/
/*                         <td>Lynx</td>*/
/*                         <td>Text only</td>*/
/*                         <td>-</td>*/
/*                         <td>X</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Misc</td>*/
/*                         <td>IE Mobile</td>*/
/*                         <td>Windows Mobile 6</td>*/
/*                         <td>-</td>*/
/*                         <td>C</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Misc</td>*/
/*                         <td>PSP browser</td>*/
/*                         <td>PSP</td>*/
/*                         <td>-</td>*/
/*                         <td>C</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Other browsers</td>*/
/*                         <td>All others</td>*/
/*                         <td>-</td>*/
/*                         <td>-</td>*/
/*                         <td>U</td>*/
/*                       </tr>*/
/*                     </tbody>*/
/*                     <tfoot>*/
/*                       <tr>*/
/*                         <th>Rendering engine</th>*/
/*                         <th>Browser</th>*/
/*                         <th>Platform(s)</th>*/
/*                         <th>Engine version</th>*/
/*                         <th>CSS grade</th>*/
/*                       </tr>*/
/*                     </tfoot>*/
/*                   </table>*/
/*                 </div><!-- /.box-body -->*/
/*               </div><!-- /.box -->*/
/*            */
/*           <!-- Your Page Content Here -->*/
/* */
/*         </section><!-- /.content -->*/
/*         {% endblock %}*/
