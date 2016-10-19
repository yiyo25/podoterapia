<?php

/* Paciente\index.twig */
class __TwigTemplate_9fda4f6c124b0532d827a6199d588eb2633123ea72ac5c142ce94aa1c138be9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/default/layout.twig", "Paciente\\index.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "  <section class=\"content-header\">
    <h1>
      Data Tables
      <small>advanced tables</small>
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
      <li><a href=\"#\">Tables</a></li>
      <li class=\"active\">Data tables</li>
    </ol>
  </section>
  <section class=\"content\">
    <div class=\"row\">
      <div class=\"col-xs-12\">
        <div class=\"box\">
          <div class=\"box-header\">
            <h3 class=\"box-title\">Data Table With Full Features </h3>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "SERVER_NAME", array()), "html", null, true);
        echo "paciente/insertar.html\" class=\"btn btn-primary pull-right\">Nuevo</a>
          </div><!-- /.box-header -->
          <div class=\"box-body\">

            <table id=\"example1\" class=\"table table-bordered table-striped\">

              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Dni</th>
                  <th>Edad</th>
                  <th>Diagnostico</th>
                </tr>
              </thead>
              <tbody>
                 ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pacAll"]) ? $context["pacAll"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pac"]) {
            // line 37
            echo "                    <tr>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["pac"], "pa_nombre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["pac"], "pa_apellidos", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["pac"], "pa_dni", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["pac"], "pa_edad", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["pac"], "pa_diagnostico", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "              </tbody>
            </table>

          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
";
    }

    public function getTemplateName()
    {
        return "Paciente\\index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 45,  92 => 42,  88 => 41,  84 => 40,  80 => 39,  76 => 38,  73 => 37,  69 => 36,  50 => 20,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'layout/default/layout.twig' %}*/
/* {% block content %}*/
/*   <section class="content-header">*/
/*     <h1>*/
/*       Data Tables*/
/*       <small>advanced tables</small>*/
/*     </h1>*/
/*     <ol class="breadcrumb">*/
/*       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*       <li><a href="#">Tables</a></li>*/
/*       <li class="active">Data tables</li>*/
/*     </ol>*/
/*   </section>*/
/*   <section class="content">*/
/*     <div class="row">*/
/*       <div class="col-xs-12">*/
/*         <div class="box">*/
/*           <div class="box-header">*/
/*             <h3 class="box-title">Data Table With Full Features </h3>*/
/*             <a href="{{app.SERVER_NAME}}paciente/insertar.html" class="btn btn-primary pull-right">Nuevo</a>*/
/*           </div><!-- /.box-header -->*/
/*           <div class="box-body">*/
/* */
/*             <table id="example1" class="table table-bordered table-striped">*/
/* */
/*               <thead>*/
/*                 <tr>*/
/*                   <th>Nombre</th>*/
/*                   <th>Apellidos</th>*/
/*                   <th>Dni</th>*/
/*                   <th>Edad</th>*/
/*                   <th>Diagnostico</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                  {% for pac in pacAll %}*/
/*                     <tr>*/
/*                     <td>{{ pac.pa_nombre }}</td>*/
/*                     <td>{{ pac.pa_apellidos }}</td>*/
/*                     <td>{{ pac.pa_dni }}</td>*/
/*                     <td>{{ pac.pa_edad }}</td>*/
/*                     <td>{{ pac.pa_diagnostico }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*               </tbody>*/
/*             </table>*/
/* */
/*           </div><!-- /.box-body -->*/
/*         </div><!-- /.box -->*/
/*       </div><!-- /.col -->*/
/*     </div><!-- /.row -->*/
/*   </section><!-- /.content -->*/
/* {% endblock %}*/
