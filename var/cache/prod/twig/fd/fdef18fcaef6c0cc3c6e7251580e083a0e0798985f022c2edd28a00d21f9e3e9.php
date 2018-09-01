<?php

/* ::base.html.twig */
class __TwigTemplate_d9f20e8e0a0d1aa39e1e2766b99057aeb4d58ab6bbb9e0124514bb1351300314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'page' => array($this, 'block_page'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
         <meta property=\"og:title\" content=\"\" />
    <meta property=\"og:image\" content=\"\" />
    <meta property=\"og:url\" content=\"\" />
    <meta property=\"og:site_name\" content=\"\" />
    <meta property=\"og:description\" content=\"\" />
    <meta name=\"twitter:title\" content=\"\" />
    <meta name=\"twitter:image\" content=\"\" />
    <meta name=\"twitter:url\" content=\"\" />
    <meta name=\"twitter:card\" content=\"\" />
      <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/paps.png"), "html", null, true);
        echo "\">
        <title>";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo " <body>
 ";
        // line 40
        $this->displayBlock('page', $context, $blocks);
        // line 145
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 171
        echo "    </body>
</html>
";
    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        echo "Paps";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
      <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\" crossorigin=\"anonymous\">
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" integrity=\"sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
     <link href=\"https://fonts.googleapis.com/css?family=Raleway:100,300,400,700\" rel=\"stylesheet\">
    <!-- Animate.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
    <!-- Bootstrap  -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap0.css"), "html", null, true);
        echo "\">

    <!-- Magnific Popup -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">

    <!-- Owl Carousel  -->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style  -->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
      ";
    }

    // line 40
    public function block_page($context, array $blocks = array())
    {
        // line 41
        echo "            <div class=\"gtco-loader\"></div>

            <div id=\"page\">
                ";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 72
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "                ";
        $this->displayBlock('footer', $context, $blocks);
        // line 138
        echo "
            </div>

            <div class=\"gototop js-top\">
                <a href=\"#\" class=\"js-gotop\"><i class=\"fa fa-arrow-up\"></i></a>
            </div>
 ";
    }

    // line 44
    public function block_header($context, array $blocks = array())
    {
        // line 45
        echo "                <nav class=\"gtco-nav\" role=\"navigation\">
            <div class=\"gtco-container\">

                <div class=\"row\">
                    <div class=\"col-sm-2 col-xs-12\">
                        <div id=\"gtco-logo\">
                            <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/paps.png"), "html", null, true);
        echo "\" alt=\"Free HTML5 Website Template by GetTemplates.co\"></a>
                        </div>
                    </div>
                    <div class=\"col-xs-10 text-right menu-1\">
                   <ul>
                            <li><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">ACCUEIL</a></li>
                            <li><a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service");
        echo "\">SERVICES</a></li>
                            <li class=\"dropdown-item\"><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscoursier");
        echo "\">DEVENIR PAPSEUR</a></li>

                            <li><a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">A PROPOS</a></li>
                            <li><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">NOS CONTACTS</a></li>

                            <li>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li><a href=\"https://monespace.paps.sn\" target=\"_blank\">ACCEDER A MON COMPTE</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
                ";
    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        // line 73
        echo "                ";
    }

    // line 74
    public function block_footer($context, array $blocks = array())
    {
        // line 75
        echo "                <footer id=\"gtco-footer\" class=\"gtco-section\" role=\"contentinfo\">
            <div class=\"gtco-container\">
                <div class=\"row row-pb-md\">
                    <div class=\"col-md-8 col-md-offset-2 gtco-cta text-center\">
                        <h3>Parlons business</h3>
                        <p><a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\" class=\"btn btn-white btn-outline\">Nous contactez</a></p>
                    </div>
                </div>
                <div class=\"row row-pb-md\">
                    <div class=\"col-md-4 gtco-widget gtco-footer-paragraph\" >
                        <h3>Paps</h3>
                        <p style=\"color:#fff\">Votre livraison passe en vitesse supérieur.</p>
                        <p id=\"labi\"><i class=\"fa fa-facebook-square\"></i>&nbsp;&nbsp;<a href=\"https://www.facebook.com/Papsapp/\">Facebook</a> &nbsp;<i class=\"fa fa-linkedin-square\"></i>&nbsp;&nbsp;<a href=\"https://www.linkedin.com/search/results/index/?keywords=paps&origin=GLOBAL_SEARCH_HEADER\">Linkedin</a>&nbsp;</p>
                        <p id=\"labi\"><i class=\"fa fa-google-plus-official\"></i>&nbsp;&nbsp;Hello@paps-app.com</p>
                    </div>
                    <div class=\"col-md-4 gtco-footer-link\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <ul class=\"gtco-list-link\">Solutions
                                    <li><a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service");
        echo "\">Services</a></li>
                                

                                </ul>
                            </div>
                            <div class=\"col-md-6\">
                                <ul class=\"gtco-list-link\">Coursiers
                                    <li><a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscoursier");
        echo "\">Devenir coursier</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 gtco-footer-link\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <ul class=\"gtco-list-link\">A propos
                                    <li><a href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">Paps</a></li>
                                </ul>
                            </div>
                             <div class=\"col-md-6\">
                                <ul class=\"gtco-list-link\">Paps Appli
                                    <li><a href=\"https://play.google.com/store/apps/details?id=com.customer.paps\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/google-play-badge_large.png"), "html", null, true);
        echo "\" width=\"150px\" alt=\" Téléchargez Paps sans plus tarder\" ></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"gtco-copyright\">
                <div class=\"gtco-container\">
                    <div class=\"row\" id=\"lab\">
                        <div class=\"col-md-6 text-left\">
                            <p><small>&copy; 2018 Copyright </small></p>
                        </div>
                        <div class=\"col-md-6 text-right\">
                            <p style=\"margin-left:30px\"><small>Developed By Malikdev &nbsp;&nbsp;&nbsp;       </small> </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
                ";
    }

    // line 145
    public function block_javascripts($context, array $blocks = array())
    {
        // line 146
        echo "          <!-- jQuery -->
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Easing -->
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Waypoints -->
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Carousel -->
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Magnific Popup -->
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/magnific-popup-options.js"), "html", null, true);
        echo "\"></script>
    <!-- Main -->
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/main.js"), "html", null, true);
        echo "\"></script>

    <!-- google analytics -->
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-99831555-1', 'auto');
  ga('send', 'pageview');
 </script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 160,  322 => 158,  318 => 157,  313 => 155,  308 => 153,  303 => 151,  298 => 149,  293 => 147,  290 => 146,  287 => 145,  261 => 116,  253 => 111,  240 => 101,  230 => 94,  213 => 80,  206 => 75,  203 => 74,  199 => 73,  196 => 72,  181 => 61,  177 => 60,  172 => 58,  168 => 57,  164 => 56,  154 => 51,  146 => 45,  143 => 44,  133 => 138,  130 => 74,  127 => 72,  125 => 44,  120 => 41,  117 => 40,  111 => 37,  106 => 35,  102 => 34,  96 => 31,  90 => 28,  85 => 26,  76 => 19,  73 => 18,  67 => 17,  61 => 171,  58 => 145,  56 => 40,  53 => 39,  51 => 18,  47 => 17,  43 => 16,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "/var/www/html/papsprojet/app/Resources/views/base.html.twig");
    }
}