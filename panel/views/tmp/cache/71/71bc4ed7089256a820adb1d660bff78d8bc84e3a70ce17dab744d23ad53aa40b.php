<?php

/* login.twig */
class __TwigTemplate_2214303f116d9418f91bce6d329b0f19b4e6a583ee7a77ca3a04b58820405f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "login.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'loading' => array($this, 'block_loading'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
    }

    // line 4
    public function block_loading($context, array $blocks = array())
    {
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div id=\"wrapper\">
        <div id=\"main\">
            <div class=\"container\" id=\"main-container\">
                <div class=\"login\">
                    <div class=\"login-header\">
                        <div class=\"main-logo\"><span>Gestión de Servicios TI</span></div>
                    </div>
                    <div class=\"mini-form\">
                        <form action=\"\" method=\"post\" name=\"login\">
                            <input name=\"user\" placeholder=\"Usuario\" type=\"text\" />
                            <input name=\"pass\" placeholder=\"Contraseña\" type=\"password\" />
                            <button class=\"btn btn-tenax pull-right\">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  41 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.twig' %}*/
/* */
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block loading %}{% endblock %}*/
/* {% block content %}*/
/*     <div id="wrapper">*/
/*         <div id="main">*/
/*             <div class="container" id="main-container">*/
/*                 <div class="login">*/
/*                     <div class="login-header">*/
/*                         <div class="main-logo"><span>Gestión de Servicios TI</span></div>*/
/*                     </div>*/
/*                     <div class="mini-form">*/
/*                         <form action="" method="post" name="login">*/
/*                             <input name="user" placeholder="Usuario" type="text" />*/
/*                             <input name="pass" placeholder="Contraseña" type="password" />*/
/*                             <button class="btn btn-tenax pull-right">Ingresar</button>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
