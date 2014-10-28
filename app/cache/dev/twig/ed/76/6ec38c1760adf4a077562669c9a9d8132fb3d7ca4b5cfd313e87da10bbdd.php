<?php

/* WABoBundle:Security:login.html.twig */
class __TwigTemplate_ed766ec38c1760adf4a077562669c9a9d8132fb3d7ca4b5cfd313e87da10bbdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WABoBundle::layoutDisconnect.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WABoBundle::layoutDisconnect.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "

";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 11
        echo "

    <div class=\"signin-header\">
        <a href=\"index.html\" class=\"logo\">
            <div class=\"demo-logo bg-primary\"><img src=\"assets/demo/logo-big.png\" alt=\"\" style=\"margin-top: -4px;\"></div>&nbsp;
            <strong>Pixel</strong>Admin
        </a> <!-- / .logo -->
        <a href=\"pages-signup-alt.html\" class=\"btn btn-primary\">Sign Up</a>
    </div> <!-- / .header -->

   
    <h1 class=\"form-header\">Sign in to your Account</h1>

  <!-- Form -->
    <form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("wa_login_check");
        echo "\" id=\"signin-form_id\" class=\"panel\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        <div class=\"form-group\">
            <input type=\"text\" name=\"_username\" id=\"username\" class=\"form-control input-lg\" placeholder=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" required=\"required\">
        </div> <!-- / Username -->

        <div class=\"form-group signin-password\">
            <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control input-lg\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" required=\"required\">
            <a href=\"#\" class=\"forgot\">Forgot?</a>
        </div> <!-- / Password -->

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

        <div class=\"form-actions\">
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block btn-lg\">
        </div> <!-- / .form-actions -->
    </form>
    <!-- / Form -->


    <div class=\"signin-with\">
        <div class=\"header\">or sign in with</div>
        <a href=\"#\" class=\"btn btn-lg btn-facebook rounded\"><i class=\"fa fa-facebook\"></i></a>&nbsp;&nbsp;
        <a href=\"#\" class=\"btn btn-lg btn-info rounded\"><i class=\"fa fa-twitter\"></i></a>&nbsp;&nbsp;
        <a href=\"#\" class=\"btn btn-lg btn-danger rounded\"><i class=\"fa fa-google-plus\"></i></a>
    </div>


";
    }

    public function getTemplateName()
    {
        return "WABoBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 40,  83 => 37,  75 => 32,  68 => 28,  63 => 26,  59 => 25,  43 => 11,  37 => 9,  35 => 8,  31 => 6,  28 => 5,);
    }
}
