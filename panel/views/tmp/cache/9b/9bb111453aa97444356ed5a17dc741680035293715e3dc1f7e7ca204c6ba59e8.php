<?php

/* login/index.twig */
class __TwigTemplate_c50cac7e03fbee649df396ce5aa67644eb6e4219925ac488acd8474934e10e76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
<style>
\t@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);

body {
  background: #456;
  font-family: 'Open Sans', sans-serif;
}

.login {
  width: 400px;
  margin: 16px auto;
  font-size: 16px;
}

/* Reset top and bottom margins from certain elements */
.login-header,
.login p {
  margin-top: 0;
  margin-bottom: 0;
}

/* The triangle form is achieved by a CSS hack */
.login-triangle {
  width: 0;
  margin-right: auto;
  margin-left: auto;
  border: 12px solid transparent;
  border-bottom-color: #28d;
}

.login-header {
  background: #28d;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
}

.login-container {
  background: #ebebeb;
  padding: 12px;
}

/* Every row inside .login-container is defined with p tags */
.login p {
  padding: 12px;
}

.login input {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 16px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}

.login input[type=\"email\"],
.login input[type=\"password\"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}

/* Text fields' focus effect */
.login input[type=\"email\"]:focus,
.login input[type=\"password\"]:focus {
  border-color: #888;
}

.login input[type=\"submit\"] {
  background: #28d;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
}

.login input[type=\"submit\"]:hover {
  background: #17c;
}

/* Buttons' focus effect */
.login input[type=\"submit\"]:focus {
  border-color: #05a;
}

</style>
</head>
<div class=\"login\">
  <div class=\"login-triangle\"></div>
  
  <h2 class=\"login-header\">Log in</h2>

  <form class=\"login-container\" action='' method=\"POST\">
    <p><input type=\"email\" placeholder=\"Email\"></p>
    <p><input type=\"password\" placeholder=\"Password\"></p>
    <p><input type=\"submit\" value=\"Log in\"></p>
  </form>
</div>
</html>";
    }

    public function getTemplateName()
    {
        return "login/index.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <html>*/
/* <head>*/
/* <style>*/
/* 	@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);*/
/* */
/* body {*/
/*   background: #456;*/
/*   font-family: 'Open Sans', sans-serif;*/
/* }*/
/* */
/* .login {*/
/*   width: 400px;*/
/*   margin: 16px auto;*/
/*   font-size: 16px;*/
/* }*/
/* */
/* /* Reset top and bottom margins from certain elements *//* */
/* .login-header,*/
/* .login p {*/
/*   margin-top: 0;*/
/*   margin-bottom: 0;*/
/* }*/
/* */
/* /* The triangle form is achieved by a CSS hack *//* */
/* .login-triangle {*/
/*   width: 0;*/
/*   margin-right: auto;*/
/*   margin-left: auto;*/
/*   border: 12px solid transparent;*/
/*   border-bottom-color: #28d;*/
/* }*/
/* */
/* .login-header {*/
/*   background: #28d;*/
/*   padding: 20px;*/
/*   font-size: 1.4em;*/
/*   font-weight: normal;*/
/*   text-align: center;*/
/*   text-transform: uppercase;*/
/*   color: #fff;*/
/* }*/
/* */
/* .login-container {*/
/*   background: #ebebeb;*/
/*   padding: 12px;*/
/* }*/
/* */
/* /* Every row inside .login-container is defined with p tags *//* */
/* .login p {*/
/*   padding: 12px;*/
/* }*/
/* */
/* .login input {*/
/*   box-sizing: border-box;*/
/*   display: block;*/
/*   width: 100%;*/
/*   border-width: 1px;*/
/*   border-style: solid;*/
/*   padding: 16px;*/
/*   outline: 0;*/
/*   font-family: inherit;*/
/*   font-size: 0.95em;*/
/* }*/
/* */
/* .login input[type="email"],*/
/* .login input[type="password"] {*/
/*   background: #fff;*/
/*   border-color: #bbb;*/
/*   color: #555;*/
/* }*/
/* */
/* /* Text fields' focus effect *//* */
/* .login input[type="email"]:focus,*/
/* .login input[type="password"]:focus {*/
/*   border-color: #888;*/
/* }*/
/* */
/* .login input[type="submit"] {*/
/*   background: #28d;*/
/*   border-color: transparent;*/
/*   color: #fff;*/
/*   cursor: pointer;*/
/* }*/
/* */
/* .login input[type="submit"]:hover {*/
/*   background: #17c;*/
/* }*/
/* */
/* /* Buttons' focus effect *//* */
/* .login input[type="submit"]:focus {*/
/*   border-color: #05a;*/
/* }*/
/* */
/* </style>*/
/* </head>*/
/* <div class="login">*/
/*   <div class="login-triangle"></div>*/
/*   */
/*   <h2 class="login-header">Log in</h2>*/
/* */
/*   <form class="login-container" action='' method="POST">*/
/*     <p><input type="email" placeholder="Email"></p>*/
/*     <p><input type="password" placeholder="Password"></p>*/
/*     <p><input type="submit" value="Log in"></p>*/
/*   </form>*/
/* </div>*/
/* </html>*/
