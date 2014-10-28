<?php

/* WABoBundle:Layout:sidebar.html.twig */
class __TwigTemplate_6834f7323ba7638289b7442bf007ca47c49d8519489f943515c74e5a8049c124 extends Twig_Template
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
        // line 2
        echo "<!-- 4. \$MAIN_MENU =================================================================================

\t\tMain menu

\t\tNotes:
\t\t* to make the menu item active, add a class 'active' to the <li>
\t\t  example: <li class=\"active\">...</li>
\t\t* multilevel submenu example:
\t\t\t<li class=\"mm-dropdown\">
\t\t\t  <a href=\"#\"><span class=\"mm-text\">Submenu item text 1</span></a>
\t\t\t  <ul>
\t\t\t\t<li>...</li>
\t\t\t\t<li class=\"mm-dropdown\">
\t\t\t\t  <a href=\"#\"><span class=\"mm-text\">Submenu item text 2</span></a>
\t\t\t\t  <ul>
\t\t\t\t\t<li>...</li>
\t\t\t\t\t...
\t\t\t\t  </ul>
\t\t\t\t</li>
\t\t\t\t...
\t\t\t  </ul>
\t\t\t</li>
-->
<div id=\"main-menu\" role=\"navigation\">
<div id=\"main-menu-inner\">
<div class=\"menu-content top\" id=\"menu-content-demo\">
    <!-- Menu custom content demo
         CSS:        styles/pixel-admin-less/demo.less or styles/pixel-admin-scss/_demo.scss
         Javascript: html/assets/demo/demo.js
     -->
    <div>
        <div class=\"text-bg\"><span class=\"text-slim\">Bienvenue,</span> <span class=\"text-semibold\">John</span></div>

        <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/demo/avatars/1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"\">
        <div class=\"btn-group\">
            <a href=\"#\" class=\"btn btn-xs btn-primary btn-outline dark\"><i class=\"fa fa-envelope\"></i></a>
            <a href=\"#\" class=\"btn btn-xs btn-primary btn-outline dark\"><i class=\"fa fa-user\"></i></a>
            <a href=\"#\" class=\"btn btn-xs btn-primary btn-outline dark\"><i class=\"fa fa-cog\"></i></a>
            <a href=\"#\" class=\"btn btn-xs btn-danger btn-outline dark\"><i class=\"fa fa-power-off\"></i></a>
        </div>
        <a href=\"#\" class=\"close\">&times;</a>
    </div>
</div>

<!-- debut de la barre laterale gauche -->
<ul class=\"navigation\">
     <li><a href=\"#\"><i class=\"menu-icon fa fa-home\"></i> 
         <span class=\"mm-text mmc-dropdown-delay animated fadeIn\">Home</span></a>
    </li>
    
    <li>
        <a href=\"#\"><i class=\"menu-icon fa fa-bookmark\"></i>
        <span class=\"mm-text mmc-dropdown-delay animated fadeIn\"> Les derniers films</span></a>
    </li>
    
    <li>
        <a href=\"#\"><i class=\"menu-icon fa fa-group\"></i>
        <span class=\"mm-text mmc-dropdown-delay animated fadeIn\"> Les acteurs stars</span></a>
    </li>
    
    <li>
        <a href=\"#\"><i class=\"menu-icon fa fa-camera\"></i>
        <span class=\"mm-text mmc-dropdown-delay animated fadeIn\"> Les réalisateurs</span></a>
    </li>
    
    <li>
        <a href=\"#\"><i class=\"menu-icon fa fa-home\"></i> <span class=\"mm-text mmc-dropdown-delay animated fadeIn\"> Timeline de films</span></a>
                    
    </li>
    
    <li>
        <a href=\"#\"><i class=\"menu-icon fa fa-comments\"></i> <span class=\"mm-text mmc-dropdown-delay animated fadeIn\"> Tous les commentaires</span></a>
                    
    </li>
    
    <li><a href=\"#\"><i class=\"menu-icon fa fa-camera\"></i> <span class=\"mm-text mmc-dropdown-delay animated fadeIn\"> Toutes les photos</span></a>
                    
    </li>
    
    <li>
        <a href=\"#\"><i class=\"menu-icon fa  fa-film\"></i> <span class=\"mm-text mmc-dropdown-delay animated fadeIn\"> Toutes les vidéos</span></a>
    </li>
    
    <li><a href=\"#\"><i class=\"menu-icon fa fa-map-marker\"></i> <span class=\"mm-text mmc-dropdown-delay animated fadeIn\"> Toutes les cinémas</span></a>
                    
    </li>
       
</ul> <!-- / .navigation --> <!-- fin de la barre laterale gauche -->

<div class=\"menu-content\">
    <a href=\"pages-invoice.html\" class=\"btn btn-primary btn-block btn-outline dark\">
                    Créer un film
    </a>
</div>
</div> <!-- / #main-menu-inner -->
</div> <!-- / #main-menu -->
<!-- /4. \$MAIN_MENU -->
";
    }

    public function getTemplateName()
    {
        return "WABoBundle:Layout:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 35,  19 => 2,);
    }
}
