<?php

/* WABoBundle:Movies:index.html.twig */
class __TwigTemplate_326df233afcaf09109198bd6248fb8b0a6cc8f83e7aa30720a76ea69c3fa7bb9 extends Twig_Template
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
        <div class=\"breadcrumb-label text-light-gray\"> Où êtes-vous? </div>
        <li><a href=\"#\">Home</a></li>
        <li class=\"active\"><a href=\"#\">Films/a></li>
    </ul>

   <div class=\"page-header\">
        <div class=\"row\">
            <!-- Page header, center on small screens -->
            <h1 class=\"col-xs-12 col-sm-6 text-center text-left-sm\">
                <i class=\"fa fa-video-camera\"></i>
                &nbsp;&nbsp;Les Films
                <span class=\"label label-danger\">";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies"))), "html", null, true);
        echo "</span>
            </h1>
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



<!--1:BEGIN ROW -->
 <div class=\"row\">
    <div class=\"col-md-12\"></div>

    <div class =\"row well\">
       <div class=\"pull-right col-xs-12 col-sm-auto\"><a href=\"#\" class=\"btn btn-primary btn-labeled\" style=\"width: 100%;\"><span class=\"btn-label icon fa fa-plus\"></span>Créer un réalisateur</a></div>
    </div>


    <div class=\"table-light\">



        <table class=\"records_list  table table-striped\">

             <thead>
             <tr>
                 <th>Achat</th>
                 <th><i class=\"fa fa-arrow-circle-down\"></i>
                     <a translationcount=\"\" class=\"asc\" href=\"#\" title=\"Nom\">Titre</a>
                 </th>
                 <th>Distributeur</th>
                 <th>Actions</th>
             </tr>
            </thead>

            <tbody>

            ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 72
            echo "            <tr>
                <td>
                     <a class=\"btn btn-primary btn-sm\"
                        href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movies_addCart", array("id" => $this->getAttribute($context["movie"], "id", array()))), "html", null, true);
            echo "\">
                        <i class=\"fa-shopping-cart\"></i> Ajouter au panier
                    </a>
               </td>

                <td>
                  <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movies_show", array("id" => $this->getAttribute($context["movie"], "id", array()))), "html", null, true);
            echo "\">
                      ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "title", array()), "html", null, true);
            echo " 
                  </a>
                </td>

                <td class=\"smalltext\">
                  ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "distributeur", array()), "html", null, true);
            echo "

                </td>

                <td>
                    <a class=\"btn btn-primary btn-sm\"
                        href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movies_show", array("id" => $this->getAttribute($context["movie"], "id", array()))), "html", null, true);
            echo "\">
                        <i class=\"glyphicon glyphicon-search\"></i> voir
                    </a>
                    
                </td>

            </tr>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "           </tbody>

       </table>


</div>



</div><!-- 1-END ROW ========================= -->

";
    }

    public function getTemplateName()
    {
        return "WABoBundle:Movies:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 101,  154 => 93,  145 => 87,  137 => 82,  133 => 81,  124 => 75,  119 => 72,  115 => 71,  59 => 18,  43 => 4,  40 => 3,  14 => 2,);
    }
}
