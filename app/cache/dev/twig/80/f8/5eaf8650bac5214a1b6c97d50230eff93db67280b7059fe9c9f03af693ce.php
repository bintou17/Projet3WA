<?php

/* LexikPayboxBundle:Macro:paybox.html.twig */
class __TwigTemplate_80f85eaf8650bac5214a1b6c97d50230eff93db67280b7059fe9c9f03af693ce extends Twig_Template
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
    }

    // line 1
    public function getinput($__field__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<input type=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "vars", array()), "block_prefixes", array()), 1, array(), "array"), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "vars", array()), "name", array()), "html", null, true);
            echo "\" ";
            if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "vars", array()), "value", array())))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "vars", array()), "value", array()), "html", null, true);
                echo "\" ";
            }
            echo "/>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 5
    public function getform($__form__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 7
                echo $this->getAttribute($this, "input", array(0 => $context["field"]), "method");
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "LexikPayboxBundle:Macro:paybox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  64 => 6,  53 => 5,  32 => 2,  21 => 1,);
    }
}
