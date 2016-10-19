<?php

/* Paciente\insertar.twig */
class __TwigTemplate_c1f6109c431b0433700048fb5f63a23da8cafd2e07b1bae3e6939fe49e4c933c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/default/layout.twig", "Paciente\\insertar.twig", 1);
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
        echo "<section class=\"content-header\">
          <h1>
            ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</small>
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"#\">Forms</a></li>
            <li class=\"active\">General Elements</li>
          </ol>
        </section>
<section class=\"content\">
<!-- general form elements -->
<div class=\"row\">
<!-- left column -->
<div class=\"col-md-6\">
<div class=\"box box-primary\">
<div class=\"box-header with-border\">
  <h3 class=\"box-title\">";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["titleform"]) ? $context["titleform"] : null), "html", null, true);
        echo "</h3>
</div><!-- /.box-header -->
<!-- form start -->
<form role=\"form\" method=\"POST\" action=\"\">
  <div class=\"box-body\">
    <div class=\"form-group\">
      <label for=\"inputName\">Nombres</label>
      <input type=\"text\" class=\"form-control\" id=\"\" name=\"p_nombre\" placeholder=\"Ingrese nombre\">
    </div>
    <div class=\"form-group\">
      <label for=\"inputApellido\">Apellidos</label>
      <input type=\"text\" class=\"form-control\" id=\"\" name=\"p_apellidos\" placeholder=\"Apellidos\">
    </div>
    <div class=\"form-group\">
      <label for=\"inputdni\">DNI</label>
      <input type=\"text\" class=\"form-control\" id=\"\" name=\"p_dni\" placeholder=\"DNI\">
    </div>
    <div class=\"form-group\">
      <label for=\"inputedad\">Edad</label>
      <input type=\"text\" class=\"form-control\" id=\"\" name=\"p_edad\" placeholder=\"Edad\">
    </div>
    <div class=\"form-group\">
      <label for=\"inputfono\">Telefono</label>
      <input type=\"text\" class=\"form-control\" id=\"\" name=\"p_phone\" placeholder=\"Phone\">
    </div>
    <div class=\"form-group\">
      <label for=\"exampleInputPassword1\">Direccion</label>
      <input type=\"text\" class=\"form-control\" id=\"\" name=\"p_dir\" placeholder=\"Direccion\">
    </div>
    <div class=\"form-group\">
      <label for=\"exampleInputPassword1\">Diagnostico</label>
      <input type=\"text\" class=\"form-control\" id=\"\" name=\"p_diag\" placeholder=\"Diagnostico\">
    </div>
    <div class=\"form-group\">
      <label for=\"exampleInputPassword1\">Tratamiento</label>
      <input type=\"text\" class=\"form-control\" id=\"\" name=\"p_tra\" placeholder=\"Trata\">
    </div>
    
  </div><!-- /.box-body -->

  <div class=\"box-footer\">
    <button type=\"submit\" class=\"btn  btn-primary btn-flat\">Submit</button>
  </div>
</form>
</div><!-- /.box -->
</div>
</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "Paciente\\insertar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 20,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'layout/default/layout.twig' %}*/
/* {% block content %}*/
/* <section class="content-header">*/
/*           <h1>*/
/*             {{ title }}</small>*/
/*           </h1>*/
/*           <ol class="breadcrumb">*/
/*             <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*             <li><a href="#">Forms</a></li>*/
/*             <li class="active">General Elements</li>*/
/*           </ol>*/
/*         </section>*/
/* <section class="content">*/
/* <!-- general form elements -->*/
/* <div class="row">*/
/* <!-- left column -->*/
/* <div class="col-md-6">*/
/* <div class="box box-primary">*/
/* <div class="box-header with-border">*/
/*   <h3 class="box-title">{{ titleform }}</h3>*/
/* </div><!-- /.box-header -->*/
/* <!-- form start -->*/
/* <form role="form" method="POST" action="">*/
/*   <div class="box-body">*/
/*     <div class="form-group">*/
/*       <label for="inputName">Nombres</label>*/
/*       <input type="text" class="form-control" id="" name="p_nombre" placeholder="Ingrese nombre">*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="inputApellido">Apellidos</label>*/
/*       <input type="text" class="form-control" id="" name="p_apellidos" placeholder="Apellidos">*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="inputdni">DNI</label>*/
/*       <input type="text" class="form-control" id="" name="p_dni" placeholder="DNI">*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="inputedad">Edad</label>*/
/*       <input type="text" class="form-control" id="" name="p_edad" placeholder="Edad">*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="inputfono">Telefono</label>*/
/*       <input type="text" class="form-control" id="" name="p_phone" placeholder="Phone">*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="exampleInputPassword1">Direccion</label>*/
/*       <input type="text" class="form-control" id="" name="p_dir" placeholder="Direccion">*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="exampleInputPassword1">Diagnostico</label>*/
/*       <input type="text" class="form-control" id="" name="p_diag" placeholder="Diagnostico">*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="exampleInputPassword1">Tratamiento</label>*/
/*       <input type="text" class="form-control" id="" name="p_tra" placeholder="Trata">*/
/*     </div>*/
/*     */
/*   </div><!-- /.box-body -->*/
/* */
/*   <div class="box-footer">*/
/*     <button type="submit" class="btn  btn-primary btn-flat">Submit</button>*/
/*   </div>*/
/* </form>*/
/* </div><!-- /.box -->*/
/* </div>*/
/* </div>*/
/* </section>*/
/* {% endblock %}*/
