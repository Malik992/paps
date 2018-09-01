<?php

/* PAPSLivraisonBundle:Front:add_client.html.twig */
class __TwigTemplate_35083241e0567bf3babed5703ea03decfee03ef50ad6bf7e1d7a30eeb524cff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo " <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
      <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\" crossorigin=\"anonymous\">
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" integrity=\"sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
     <link href=\"https://fonts.googleapis.com/css?family=Raleway:100,300,400,700\" rel=\"stylesheet\">
";
        // line 9
        echo "    <!-- Animate.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
    <!-- Icomoon Icon Fonts-->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\">
    <!-- Themify Icons-->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/themify-icons.css"), "html", null, true);
        echo "\">
    <!-- Bootstrap  -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap0.css"), "html", null, true);
        echo "\">

    <!-- Magnific Popup -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">

    <!-- Owl Carousel  -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">

    <!-- Theme style  -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
 <!-- Modernizr JS -->
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FOR IE9 below -->
";
    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        echo "Paps";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "<div class=\"container\">
<div class=\"row\">
                    <div class=\"col-sm-2 col-xs-12\">
                        <div id=\"gtco-logo\">
                            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/paps.png"), "html", null, true);
        echo "\" alt=\"Free HTML5 Website Template by GetTemplates.co\"></a>
                        </div>
                    </div>
</div>
<div class=\"row\">
                    
    <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">
\t\t<div class=\"row\">
        </div>
\t\t\t<h2>Inscrivez vous<small> vous étes parmis nous</small></h2>
\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12\">
\t\t\t\t\t ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
                        
\t\t\t\t</div>
\t\t\t</div>

\t\t\t                <div class=\"col-xs-12 col-md-4\" style=\"margin-left:150px\"><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connect");
        echo "\" class=\"btn btn-success btn-block \">Sign In</a></div>
<br><br>
</div>
</div>
</div>
";
    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        // line 62
        echo "          <!-- jQuery -->
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Easing -->
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Waypoints -->
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Carousel -->
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Magnific Popup -->
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/magnific-popup-options.js"), "html", null, true);
        echo "\"></script>
    <!-- Main -->
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/main.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "PAPSLivraisonBundle:Front:add_client.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  190 => 76,  185 => 74,  181 => 73,  176 => 71,  171 => 69,  166 => 67,  161 => 65,  156 => 63,  153 => 62,  150 => 61,  140 => 55,  132 => 50,  115 => 38,  109 => 34,  106 => 33,  100 => 31,  93 => 28,  88 => 26,  82 => 23,  78 => 22,  72 => 19,  66 => 16,  61 => 14,  56 => 12,  51 => 10,  48 => 9,  40 => 2,  37 => 1,  33 => 61,  31 => 33,  25 => 31,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PAPSLivraisonBundle:Front:add_client.html.twig", "/var/www/html/papsprojet/src/PAPS/LivraisonBundle/Resources/views/Front/add_client.html.twig");
    }
}
