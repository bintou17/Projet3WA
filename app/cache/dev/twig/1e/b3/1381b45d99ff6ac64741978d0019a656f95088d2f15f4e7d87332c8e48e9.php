<?php

/* WABoBundle::layoutDisconnect.html.twig */
class __TwigTemplate_1eb31381b45d99ff6ac64741978d0019a656f95088d2f15f4e7d87332c8e48e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'classbody' => array($this, 'block_classbody'),
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

    // line 6
    public function block_classbody($context, array $blocks = array())
    {
        echo "  theme-default page-signin-alt ";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        // line 10
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css \" >
    <!-- Open Sans font from Google CDN -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin\" rel=\"stylesheet\" type=\"text/css\">

    ";
        // line 15
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/pixel-admin.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/widgets.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/rtl.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/themes.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- editer \$SUMMERNOTE_WYSIWYG_EDITOR Summernote WYSIWYG-editor -->
     <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.min.css\" >
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
        // line 47
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
        // line 58
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
<!--/\$SUMMERNOTE_WYSIWYG_EDITOR Summernote WYSIWYG-editor -->
<!--Le formulaire -->

<!-- Javascript pour le formulaire login -->
     <script type=\"text/javascript\">
         window.PixelAdmin.start([
             function () {
                 \$(\"#signin-form_id\").validate({ focusInvalid: true, errorPlacement: function () {} });

                 // Validate username
                 \$(\"#username_id\").rules(\"add\", {
                     required: true,
                     minlength: 3
                 });

                 // Validate password
                 \$(\"#password_id\").rules(\"add\", {
                     required: true,
                     minlength: 6
                 });
             }
         ]);
     </script>
<!-- / Javascript -->


";
    }

    // line 134
    public function block_body($context, array $blocks = array())
    {
        // line 135
        echo "    <script>var init = [];</script>
    <!-- Demo script -->
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/demo/demo.js"), "html", null, true);
        echo "\"></script> <!-- / Demo script -->

   <div id=\"main-wrapper\"> ";
        // line 140
        echo "
    ";
        // line 141
        $this->displayBlock('header', $context, $blocks);
        // line 144
        echo "
    ";
        // line 145
        $this->displayBlock('sidebar', $context, $blocks);
        // line 148
        echo "
    <div id=\"content-wrapper\">
        ";
        // line 150
        $this->displayBlock('content', $context, $blocks);
        // line 153
        echo "
        ";
        // line 154
        $this->displayBlock('footer', $context, $blocks);
        // line 157
        echo "    </div> ";
        // line 158
        echo "
    <div id=\"main-menu-bg\"></div>

    </div>";
        // line 162
        echo "




";
    }

    // line 141
    public function block_header($context, array $blocks = array())
    {
        // line 142
        echo "
    ";
    }

    // line 145
    public function block_sidebar($context, array $blocks = array())
    {
        // line 146
        echo "
    ";
    }

    // line 150
    public function block_content($context, array $blocks = array())
    {
        // line 151
        echo "
        ";
    }

    // line 154
    public function block_footer($context, array $blocks = array())
    {
        // line 155
        echo "            ";
        echo twig_include($this->env, $context, "WABoBundle:Layout:footer.html.twig");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "WABoBundle::layoutDisconnect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 155,  271 => 154,  266 => 151,  263 => 150,  258 => 146,  255 => 145,  250 => 142,  247 => 141,  238 => 162,  233 => 158,  231 => 157,  229 => 154,  226 => 153,  224 => 150,  220 => 148,  218 => 145,  215 => 144,  213 => 141,  210 => 140,  205 => 137,  201 => 135,  198 => 134,  121 => 58,  108 => 47,  88 => 28,  85 => 27,  74 => 18,  70 => 17,  66 => 16,  61 => 15,  55 => 10,  53 => 9,  50 => 8,  44 => 6,  36 => 5,);
    }
}
