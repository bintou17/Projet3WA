<?php

/* WABoBundle:Pages:homePage.html.twig */
class __TwigTemplate_bb71367f83b66ed00aeb9e89eaa77590eefa2418deb9c7c67a54b9f85ff689e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WABoBundle::layout.html.twig");

        $_trait_0 = $this->env->loadTemplate("WABoBundle:Layout:third.html.twig");
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."WABoBundle:Layout:third.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'content' => array($this, 'block_content'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        return "WABoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
  <!-- fil d'ariane -->
  <ul class=\"breadcrumb breadcrumb-page\">
\t\t<div class=\"breadcrumb-label text-light-gray\"> Où êtes-vous? </div>
\t\t<li><a href=\"#\">Home</a></li>
\t\t<li class=\"active\"><a href=\"#\">Réalisateurs</a></li>
  </ul>


   <div class=\"page-header\">
       <div class=\"row\">
            <!-- Page header, center on small screens -->
            <h1 class=\"col-xs-12 col-sm-6 text-center text-left-sm\"><i class=\"fa fa-video-camera\"></i>&nbsp;&nbsp;Les réalisateurs </h1>

            <div class=\"col-xs-12 col-sm-6\">
                <div class=\"row\">
                    <hr class=\"visible-xs no-grid-gutter-h\">
                    <!-- Margin -->
                    <div class=\"visible-xs clearfix form-group-margin\"></div>


                    <!-- Search field -->
                    <form action=\"\" class=\"pull-right col-xs-12 col-sm-8\">
                        <div class=\"input-group no-margin\" >
                            <span class=\"input-group-addon\" style=\"border:none;background: #fff;background: rgba(0,0,0,.05);\"><i class=\"fa fa-search\"></i></span>
                            <input type=\"text\" placeholder=\"Recherche un fim, une catégorie, un tag\" class=\"form-control no-padding-hr\" style=\"border:none;background: #fff;background: rgba(0,0,0,.05);\">
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div> <!-- / .page-header -->








<!--1:begin of row   -->
    <div class=\"row\">
        <div class=\"col-md-12\">

    <!-- panel statistique -->
        </div>
         Je suis dans la page principale
        ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), "html", null, true);
        echo "   
        </div>
    </div><!-- END ROW ========================= -->




";
    }

    public function getTemplateName()
    {
        return "WABoBundle:Pages:homePage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 53,  43 => 4,  40 => 3,  14 => 2,);
    }
}
