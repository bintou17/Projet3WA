<?php

/* WABoBundle:Movies:show.html.twig */
class __TwigTemplate_d03693144dde6c597c4dcbe4ae114c3a9eb0f47f6d1f9218be3f8352e8c1d3a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Movies</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typefilm</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "typeFilm", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                 <td><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movies_like", array("movie_id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "user_id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "</a>
                 </td>


            </tr>
            <tr>
                <th>Synopsis</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "synopsis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Trailer</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "trailer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Languages</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "languages", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Distributeur</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "distributeur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Bo</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Annee</th>
                <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "annee", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Budget</th>
                <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "budget", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "duree", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Daterelease</th>
                <td>";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateRelease", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Notepresse</th>
                <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "notePresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Visible</th>
                <td>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "visible", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cover</th>
                <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cover", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Shop</th>
                <td>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "shop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Slug</th>
                <td>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "slug", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Views</th>
                <td>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "views", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecreated</th>
                <td>";
        // line 93
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreated", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateupdated</th>
                <td>";
        // line 97
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateUpdated", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datedeleted</th>
                <td>";
        // line 101
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDeleted", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ref</th>
                <td>";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ref", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "price", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantity", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Taxe</th>
                <td>";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "taxe", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Shopmode</th>
                <td>";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "shopMode", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Shoptypedvd</th>
                <td>";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "shopTypeDvd", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Shopdate</th>
                <td>";
        // line 129
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "shopDate", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("movies");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movies_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 145
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WABoBundle:Movies:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 145,  267 => 141,  259 => 136,  249 => 129,  242 => 125,  235 => 121,  228 => 117,  221 => 113,  214 => 109,  207 => 105,  200 => 101,  193 => 97,  186 => 93,  179 => 89,  172 => 85,  165 => 81,  158 => 77,  151 => 73,  144 => 69,  137 => 65,  130 => 61,  123 => 57,  116 => 53,  109 => 49,  102 => 45,  95 => 41,  88 => 37,  81 => 33,  74 => 29,  67 => 25,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
