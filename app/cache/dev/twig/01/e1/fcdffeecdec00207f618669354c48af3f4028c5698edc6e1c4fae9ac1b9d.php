<?php

/* WABoBundle:Layout:header.html.twig */
class __TwigTemplate_01e1fcdffeecdec00207f618669354c48af3f4028c5698edc6e1c4fae9ac1b9d extends Twig_Template
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
        echo "<div id=\"main-navbar\" class=\"navbar navbar-inverse\" role=\"navigation\">
<!-- Main menu toggle -->
<button type=\"button\" id=\"main-menu-toggle\"><i class=\"navbar-icon fa fa-bars icon\"></i><span class=\"hide-menu-text\">HIDE MENU</span></button>

<div class=\"navbar-inner\">
<!-- Main navbar header -->
<div class=\"navbar-header\">

    <!-- Logo -->
    <a href=\"index.html\" class=\"navbar-brand\">
        <div><img alt=\"CinemAdmin\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/pixel-admin/main-navbar-logo.png"), "html", null, true);
        echo "\"></div>
        CinemAdmin
    </a>

    <!-- Main navbar toggle -->
    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#main-navbar-collapse\"><i class=\"navbar-icon fa fa-bars\"></i></button>

</div> <!-- / .navbar-header -->

<div id=\"main-navbar-collapse\" class=\"collapse navbar-collapse main-navbar-collapse\">
<div>
<ul class=\"nav navbar-nav\"> <!-- debut/ .navbar-nav -->
    <li class=\"active\"><a href=\"#\"><i class=\"glyphicon glyphicon-home\"></i> Home</a></li>
    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("actors");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> Acteurs</a></li>
    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("directors");
        echo "\"><i class=\"glyphicon glyphicon-facetime-video\"></i> Réalisateurs</a></li>
    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("movies");
        echo "\"><i class=\"glyphicon glyphicon-film\"></i> Films</a></li>
    <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("categories");
        echo "\"><i class=\"glyphicon glyphicon-th-list\"></i> Catégories</a></li>
    <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("cinema");
        echo "\"><i class=\"glyphicon glyphicon-road\"></i> Cinémas</a></li>
    
    <li class=\"dropdown\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"glyphicon glyphicon-plus\"></i> Plus <b class=\"caret\"></b></a>
    <ul class=\"dropdown-menu\">
        <li><a href=\"#\"><i class=\"glyphicon glyphicon-calendar\"></i> Séances</a></li>
        <li><a href=\"#\"><i class=\"glyphicon glyphicon-tags\"></i> Tags</a></li>
        <li><a href=\"#\"><i class=\"glyphicon glyphicon-comment\"></i> Commentaires</a></li>
        <li><a href=\"#\"><span class=\"label label-default\"><strong>New!</strong></span> API Allociné</a></li>
    </ul>
   </li>
</ul> <!-- / .navbar-nav -->

<div class=\"right clearfix\">
<ul class=\"nav navbar-nav pull-right right-navbar-nav\">

<!-- 3. \$NAVBAR_ICON_BUTTONS =======================================================================

\t\t\t\t\t\t\tNavbar Icon Buttons

\t\t\t\t\t\t\tNOTE: .nav-icon-btn triggers a dropdown menu on desktop screens only. On small screens .nav-icon-btn acts like a hyperlink.

\t\t\t\t\t\t\tClasses:
\t\t\t\t\t\t\t* 'nav-icon-btn-info'
\t\t\t\t\t\t\t* 'nav-icon-btn-success'
\t\t\t\t\t\t\t* 'nav-icon-btn-warning'
\t\t\t\t\t\t\t* 'nav-icon-btn-danger'
-->

    <!-- Panier vide -->

    ";
        // line 61
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "panier"), "method"))) {
            // line 62
            echo "   
    <li class=\"nav-icon-btn nav-icon-btn-danger dropdown\">
        <a href=\"#notifications\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            <span class=\"label\">";
            // line 65
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "panier"), "method")), "html", null, true);
            echo "</span>
            <i class=\"nav-icon fa fa-bullhorn\"></i>
            <span class=\"small-screen-text\">Notifications</span>
        </a>
      <div class=\"dropdown-menu widget-notifications no-padding\" style=\"width: 300px\">
        <div class=\"notifications-list\" id=\"main-navbar-notifications\">

        </div> <!-- / .notifications-list -->
        

        <a href=\"#\" class=\"notifications-link\">Commander</a>
    

    </div> <!-- / .dropdown-menu -->
   </li>
   
   ";
        } else {
            // line 81
            echo " <!-- le panier n'est pas vide -->
    <li class=\"nav-icon-btn nav-icon-btn-danger dropdown\">
        <a href=\"#notifications\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            <span class=\"label\">";
            // line 84
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "panier"), "method")), "html", null, true);
            echo "</span>
            <i class=\"nav-icon fa fa-bullhorn\"></i>
            <span class=\"small-screen-text\">Notifications</span>
        </a>
      <div class=\"dropdown-menu widget-notifications no-padding\" style=\"width: 300px\">
        <div class=\"notifications-list\" id=\"main-navbar-notifications\">

            
            ";
            // line 92
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "panier"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                // line 93
                echo "            <div class=\"notification\">
                <div class=\"notification-title text-warning\"> Film : ";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "title", array(), "array"), "html", null, true);
                echo "</div>
            
    
            </div> <!-- / .notification -->
             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "    
    </div> <!-- / .notifications-list -->
        

        <a href=\"";
            // line 103
            echo $this->env->getExtension('routing')->getPath("movies_showCart");
            echo "\" class=\"notifications-link\">Commander</a>
    

    </div> <!-- / .dropdown-menu -->
   </li>


";
        }
        // line 111
        echo "



    <li class=\"nav-icon-btn nav-icon-btn-success dropdown\">
        <a href=\"#messages\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"label\">10</span>
        <i class=\"nav-icon fa fa-envelope\"></i>
        <span class=\"small-screen-text\">Income messages</span>
    </a>

    <!-- MESSAGES -->
    <div class=\"dropdown-menu widget-messages-alt no-padding\" style=\"width: 300px;\">
        <div class=\"messages-list\" id=\"main-navbar-messages\">

            <div class=\"message\">
                <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/demo/avatars/2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"message-avatar\">
                <a href=\"#\" class=\"message-subject\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                <div class=\"message-description\">
                    from <a href=\"#\">Robert Jang</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

            <div class=\"message\">
                <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/demo/avatars/3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"message-avatar\">
                <a href=\"#\" class=\"message-subject\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                <div class=\"message-description\">
                    from <a href=\"#\">Michelle Bortz</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

            <div class=\"message\">
                <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/demo/avatars/4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"message-avatar\">
                <a href=\"#\" class=\"message-subject\">Lorem ipsum dolor sit amet.</a>
                <div class=\"message-description\">
                    from <a href=\"#\">Timothy Owens</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

            <div class=\"message\">
                <img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/demo/avatars/5.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"message-avatar\">
                <a href=\"#\" class=\"message-subject\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                <div class=\"message-description\">
                    from <a href=\"#\">Denise Steiner</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

            <div class=\"message\">
                <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/demo/avatars/2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"message-avatar\">
                <a href=\"#\" class=\"message-subject\">Lorem ipsum dolor sit amet.</a>
                <div class=\"message-description\">
                    from <a href=\"#\">Robert Jang</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

            <div class=\"message\">
                <img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/demo/avatars/2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"message-avatar\">
                <a href=\"#\" class=\"message-subject\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                <div class=\"message-description\">
                    from <a href=\"#\">Robert Jang</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

            <div class=\"message\">
                <img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/demo/avatars/3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"message-avatar\">
                <a href=\"#\" class=\"message-subject\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                <div class=\"message-description\">
                    from <a href=\"#\">Michelle Bortz</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

            <div class=\"message\">
                <img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/demo/avatars/4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"message-avatar\">
                <a href=\"#\" class=\"message-subject\">Lorem ipsum dolor sit amet.</a>
                <div class=\"message-description\">
                    from <a href=\"#\">Timothy Owens</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

            <div class=\"message\">
                <img src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/demo/avatars/5.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"message-avatar\">
                <a href=\"#\" class=\"message-subject\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                <div class=\"message-description\">
                    from <a href=\"#\">Denise Steiner</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

            <div class=\"message\">
                <img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/demo/avatars/2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"message-avatar\">
                <a href=\"#\" class=\"message-subject\">Lorem ipsum dolor sit amet.</a>
                <div class=\"message-description\">
                    from <a href=\"#\">Robert Jang</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

        </div> <!-- / .messages-list -->
        <a href=\"#\" class=\"messages-link\">MORE MESSAGES</a>
    </div> <!-- / .dropdown-menu -->
</li>
<!-- /3. \$END_NAVBAR_ICON_BUTTONS -->




<!-- Affichage du bouton recherche 
<li>
    <form class=\"navbar-form pull-left\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
    </form>ss
</li>
-->



<!-- Affichage de la personne connectée avec son image -->
<li class=\"dropdown\">
    <a href=\"#\" class=\"dropdown-toggle user-menu\" data-toggle=\"dropdown\">
        <img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/demo/avatars/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
        <span>John Doe</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li><a href=\"#\"><span class=\"label label-warning pull-right\">New</span>Profile</a></li>
        <li><a href=\"#\"><span class=\"badge badge-primary pull-right\">New</span>Account</a></li>
        <li><a href=\"#\"><i class=\"dropdown-icon fa fa-cog\"></i>&nbsp;&nbsp;Settings</a></li>
        <li class=\"divider\"></li>
        <li><a href=\"";
        // line 256
        echo $this->env->getExtension('routing')->getPath("wa_logout");
        echo "\"><i class=\"dropdown-icon fa fa-power-off\"></i>&nbsp;&nbsp;Log Out</a></li>
    </ul>
</li>


</ul> <!-- / .navbar-nav -->
</div> <!-- / .right -->
</div>
</div> <!-- / #main-navbar-collapse -->
</div> <!-- / .navbar-inner -->
</div><!-- / #main-navbar -->
";
    }

    public function getTemplateName()
    {
        return "WABoBundle:Layout:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 256,  345 => 248,  311 => 217,  298 => 207,  285 => 197,  272 => 187,  259 => 177,  246 => 167,  233 => 157,  220 => 147,  207 => 137,  194 => 127,  176 => 111,  165 => 103,  159 => 99,  148 => 94,  145 => 93,  141 => 92,  130 => 84,  125 => 81,  105 => 65,  100 => 62,  98 => 61,  63 => 29,  59 => 28,  55 => 27,  51 => 26,  47 => 25,  31 => 12,  19 => 2,);
    }
}
