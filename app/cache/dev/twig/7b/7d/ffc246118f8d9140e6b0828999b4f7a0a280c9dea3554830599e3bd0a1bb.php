<?php

/* WABoBundle::layout.html.twig */
class __TwigTemplate_7b7dffc246118f8d9140e6b0828999b4f7a0a280c9dea3554830599e3bd0a1bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Backoffice ";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        // line 9
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css \" >
    <!-- Open Sans font from Google CDN -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin\" rel=\"stylesheet\" type=\"text/css\">

    ";
        // line 14
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/pixel-admin.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/widgets.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/rtl.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/themes.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- editer \$SUMMERNOTE_WYSIWYG_EDITOR Summernote WYSIWYG-editor -->
     <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.min.css\" />
     <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/blackboard.min.css\">
     <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.min.css\">

";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "    <!-- NOTIFICATIONS -->
    <!-- Javascript -->
    <script>
        init.push(function () {
            \$('#main-navbar-notifications').slimScroll({ height: 250 });
        });
    </script>
    <!-- / Javascript -->
    <!-- MESSAGES -->

    <!-- Javascript -->
    <script>
        init.push(function () {
            \$('#main-navbar-messages').slimScroll({ height: 250 });
        });
    </script>




    ";
        // line 49
        echo "    <!-- / Javascript -->

    <!-- Get jQuery from Google CDN -->
    <!--[if !IE]> -->
    <script type=\"text/javascript\"> window.jQuery || document.write('<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\">'+\"<\"+\"/script>\"); </script>
    <!-- <![endif]-->
    <!--[if lte IE 9]>
    <script type=\"text/javascript\"> window.jQuery || document.write('<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\">'+\"<\"+\"/script>\"); </script>
    <![endif]-->
    <!-- Pixel Admin's javascripts -->
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/pixel-admin.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        init.push(function () {
            // Javascript code here
        })
        window.PixelAdmin.start(init);



    </script>
 <!-- Mise en oeuvre de \$SUMMERNOTE_WYSIWYG_EDITOR Summernote WYSIWYG-editor-->
     <!-- include codemirror (codemirror.css, codemirror.js, xml.js, formatting.js)-->
    
     
     <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js\"></script>
     <script src=\"//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.min.js\"></script>
     <script src=\"//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.min.js\"></script>

     <!-- Javascript -->
     <script>
         init.push(function () {
             if (! \$('html').hasClass('ie8')) {
                 \$('.summernote').summernote({
                     height: 200,
                     tabsize: 2,
                     codemirror: {
                         theme: 'monokai'
                     }
                 });
             }
             \$('#summernote-boxed').switcher({
                 on_state_content: '<span class=\"fa fa-check\" style=\"font-size:11px;\"></span>',
                 off_state_content: '<span class=\"fa fa-times\" style=\"font-size:11px;\"></span>'
             });
             \$('#summernote-boxed').on(\$('html').hasClass('ie8') ? \"propertychange\" : \"change\", function () {
                 var \$panel = \$(this).parents('.panel');
                 if (\$(this).is(':checked')) {
                     \$panel.find('.panel-body').addClass('no-padding');
                     \$panel.find('.panel-body > *').addClass('no-border');
                 } else {
                     \$panel.find('.panel-body').removeClass('no-padding');
                     \$panel.find('.panel-body > *').removeClass('no-border');
                 }
             });
         });
     </script>


";
    }

    // line 113
    public function block_body($context, array $blocks = array())
    {
        // line 114
        echo "    <script>var init = [];</script>
    <!-- Demo script -->
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/demo/demo.js"), "html", null, true);
        echo "\"></script> <!-- / Demo script -->

   <div id=\"main-wrapper\"> ";
        // line 119
        echo "
    ";
        // line 120
        $this->displayBlock('header', $context, $blocks);
        // line 123
        echo "
    ";
        // line 124
        $this->displayBlock('sidebar', $context, $blocks);
        // line 127
        echo "
    <div id=\"content-wrapper\">
        ";
        // line 129
        $this->displayBlock('content', $context, $blocks);
        // line 132
        echo "
        ";
        // line 133
        $this->displayBlock('footer', $context, $blocks);
        // line 136
        echo "    </div> ";
        // line 137
        echo "
    <div id=\"main-menu-bg\"></div>

    </div>";
        // line 141
        echo "




";
    }

    // line 120
    public function block_header($context, array $blocks = array())
    {
        // line 121
        echo "        ";
        echo twig_include($this->env, $context, "WABoBundle:Layout:header.html.twig");
        echo "
    ";
    }

    // line 124
    public function block_sidebar($context, array $blocks = array())
    {
        // line 125
        echo "        ";
        echo twig_include($this->env, $context, "WABoBundle:Layout:sidebar.html.twig");
        echo "
    ";
    }

    // line 129
    public function block_content($context, array $blocks = array())
    {
        // line 130
        echo "
        ";
    }

    // line 133
    public function block_footer($context, array $blocks = array())
    {
        // line 134
        echo "            ";
        echo twig_include($this->env, $context, "WABoBundle:Layout:footer.html.twig");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "WABoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 134,  247 => 133,  242 => 130,  239 => 129,  232 => 125,  229 => 124,  222 => 121,  219 => 120,  210 => 141,  205 => 137,  203 => 136,  201 => 133,  198 => 132,  196 => 129,  192 => 127,  190 => 124,  187 => 123,  185 => 120,  182 => 119,  177 => 116,  173 => 114,  170 => 113,  116 => 60,  103 => 49,  81 => 28,  78 => 27,  67 => 17,  63 => 16,  59 => 15,  54 => 14,  48 => 9,  46 => 8,  43 => 7,  35 => 5,);
    }
}
