<?php

/* WABoBundle:Movies:cart.html.twig */
class __TwigTemplate_2ea6701724c71bc6d07785a408a84a04fac87c7978f7181f982dd55026231d13 extends Twig_Template
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
<div class=\"page-header\">
            <h1><i class=\"fa fa-file-text-o page-header-icon\"></i>&nbsp;&nbsp;Invoice Page</h1>
            <a href=\"pages-invoice-print.html\" class=\"pull-right btn btn-primary\" style=\"display: block;\" target=\"_blank\"><i class=\"fa fa-print\"></i>&nbsp;&nbsp;Print version</a>
</div> <!-- / .page-header -->






<!--1:BEGIN ROW -->
 <div class=\"row\">
    <div class=\"panel invoice\">
        <div class=\"invoice-header\">
            <h3>
                <div class=\"invoice-logo demo-logo\">
                    <img src=\"\" alt=\"\" style=\"\">
                </div>
                <div>
                    <small>
                        <strong>Pixel</strong>Admin
                    </small>
                <br>
                 INVOICE #244
                </div>
                </h3>
                <address>
                    PixelAdmin Ltd.<br>
                    Los Angeles, Hoover Street, 32<br>
                    90080 CA, USA
                </address>
                <div class=\"invoice-date\">
                    <small><strong>Date</strong></small><br>
                    ";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "
                </div>
        </div> <!-- / .invoice-header -->
        <div class=\"invoice-info\">
            <div class=\"invoice-recipient\">
                <strong>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</strong><br>
                New York, Pass Avenue, 109<br>
                10012 NY, USA
            </div> <!-- / .invoice-recipient -->
                <div class=\"invoice-total\">TOTAL:
                <span>
                    ";
        // line 49
        $context["sum"] = 0;
        // line 50
        echo "
                    ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "panier"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 52
            echo "
                    ";
            // line 53
            $context["sum"] = ((isset($context["sum"]) ? $context["sum"] : $this->getContext($context, "sum")) + ($this->getAttribute($context["total"], "price", array()) * $this->getAttribute($context["total"], "quantity", array())));
            // line 54
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    ";
        echo twig_escape_filter($this->env, (isset($context["sum"]) ? $context["sum"] : $this->getContext($context, "sum")), "html", null, true);
        echo " € 
                </span>
            </div> <!-- / .invoice-total -->
        </div> <!-- / .invoice-info -->
            <hr>
         <div class=\"invoice-table\">
                <table>
                    <thead>
                        <tr>
                            <th>
                                Films
                            </th>
                            <th>
                                Prix
                            </th>
                            <th>
                                 Quantité
                            </th>
                            <th>
                                Prix Ligne
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        ";
        // line 84
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "panier"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 85
            echo "                        <tr>
                        <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "title", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "price", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movies_minus", array("id" => $this->getAttribute($context["movie"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-primary removeqtycard\">
                                    <i class=\"fa fa-minus\"></i>
                                </a>
                                <b>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "quantity", array()), "html", null, true);
            echo "</b>
                                <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movies_plus", array("id" => $this->getAttribute($context["movie"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-primary addqtycard\">
                                    <i class=\"fa fa-plus\"></i>
                                </a>
                            </td>
                        <td>";
            // line 97
            echo twig_escape_filter($this->env, ($this->getAttribute($context["movie"], "quantity", array()) * $this->getAttribute($context["movie"], "price", array())), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"removecard\" href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movies_delCart", array("id" => $this->getAttribute($context["movie"], "id", array()))), "html", null, true);
            echo "\">
                                    <span class=\"fa fa-trash-o\"></span>
                                </a>

                            </td>
                        </tr>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "


                    </tbody>
                </table>
            </div> <!-- / .invoice-table -->
        </div>

     ";
        // line 114
        $context["paybox"] = $this->env->loadTemplate("LexikPayboxBundle:Macro:paybox.html.twig");
        // line 115
        echo "
     <form action=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" method=\"post\">
         ";
        // line 117
        echo $context["paybox"]->getform((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
         <input type=\"submit\" />
     </form>














</div><!-- 1-END ROW ========================= -->




";
    }

    public function getTemplateName()
    {
        return "WABoBundle:Movies:cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 117,  215 => 116,  212 => 115,  210 => 114,  200 => 106,  187 => 99,  182 => 97,  175 => 93,  171 => 92,  165 => 89,  160 => 87,  156 => 86,  153 => 85,  149 => 84,  117 => 56,  110 => 54,  108 => 53,  105 => 52,  101 => 51,  98 => 50,  96 => 49,  87 => 43,  79 => 38,  43 => 4,  40 => 3,  14 => 2,);
    }
}
