<?php

/* WABoBundle:Layout:third.html.twig */
class __TwigTemplate_88147b6e308941cf102936d379c6dd5335c5e283fce8a6cbb3e2fa401c4193ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'alpha' => array($this, 'block_alpha'),
            'beta' => array($this, 'block_beta'),
            'zeta' => array($this, 'block_zeta'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('alpha', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('beta', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('zeta', $context, $blocks);
    }

    // line 1
    public function block_alpha($context, array $blocks = array())
    {
        // line 2
        echo "    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque autem commodi cupiditate dignissimos distinctio dolorem eius excepturi, exercitationem explicabo facilis hic ipsam omnis quae, quas quisquam ratione soluta tempore voluptas!
    </p>
";
    }

    // line 7
    public function block_beta($context, array $blocks = array())
    {
        // line 8
        echo "
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi deleniti dolorem esse et expedita, non nostrum obcaecati quaerat quibusdam tenetur! A adipisci culpa dolor harum magnam optio possimus rem sint.
    </p>

";
    }

    // line 15
    public function block_zeta($context, array $blocks = array())
    {
        // line 16
        echo "<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi architecto cumque dicta dignissimos ea earum enim eos et fugit impedit laboriosam placeat provident ratione reprehenderit similique, ullam vero voluptatem?
</p>

";
    }

    public function getTemplateName()
    {
        return "WABoBundle:Layout:third.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  58 => 15,  49 => 8,  46 => 7,  39 => 2,  36 => 1,  32 => 15,  29 => 14,  27 => 7,  24 => 6,  22 => 1,);
    }
}
