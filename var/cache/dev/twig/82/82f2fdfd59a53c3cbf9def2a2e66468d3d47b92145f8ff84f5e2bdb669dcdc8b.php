<?php

/* ::base.html.twig */
class __TwigTemplate_1b1d4a8c855e8715b6d3dbf79ed1f87f5aa957181b02d81de932740ae0f98d0f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 46
        echo " <body>
 ";
        // line 47
        $this->displayBlock('page', $context, $blocks);
        // line 152
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 169
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Paps";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <!-- Icomoon Icon Fonts-->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\">
    <!-- Themify Icons-->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/themify-icons.css"), "html", null, true);
        echo "\">
    <!-- Bootstrap  -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap0.css"), "html", null, true);
        echo "\">

    <!-- Magnific Popup -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">

    <!-- Owl Carousel  -->
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">

    <!-- Theme style  -->
    <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
 <!-- Modernizr JS -->
    <!-- FOR IE9 below -->
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_page($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        // line 48
        echo "            <div class=\"gtco-loader\"></div>

            <div id=\"page\">
                ";
        // line 51
        $this->displayBlock('header', $context, $blocks);
        // line 79
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "                ";
        $this->displayBlock('footer', $context, $blocks);
        // line 145
        echo "
            </div>

            <div class=\"gototop js-top\">
                <a href=\"#\" class=\"js-gotop\"><i class=\"fa fa-arrow-up\"></i></a>
            </div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 52
        echo "                <nav class=\"gtco-nav\" role=\"navigation\">
            <div class=\"gtco-container\">

                <div class=\"row\">
                    <div class=\"col-sm-2 col-xs-12\">
                        <div id=\"gtco-logo\">
                            <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/paps.png"), "html", null, true);
        echo "\" alt=\"Free HTML5 Website Template by GetTemplates.co\"></a>
                        </div>
                    </div>
                    <div class=\"col-xs-10 text-right menu-1\">
                   <ul>
                            <li><a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">ACCUEIL</a></li>
                            <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service");
        echo "\">SERVICES</a></li>
                            <li class=\"dropdown-item\"><a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscoursier");
        echo "\">DEVENIR PAPSER</a></li>

                            <li><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">A PROPOS</a></li>
                            <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">NOS CONTACT</a></li>

                            <li>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li><a href=\"https://monespace.paps.sn\" target=\"_blank\">ACCEDER A MON COMPTE</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 80
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 82
        echo "                <footer id=\"gtco-footer\" class=\"gtco-section\" role=\"contentinfo\">
            <div class=\"gtco-container\">
                <div class=\"row row-pb-md\">
                    <div class=\"col-md-8 col-md-offset-2 gtco-cta text-center\">
                        <h3>Parlons business</h3>
                        <p><a href=\"";
        // line 87
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
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service");
        echo "\">Services</a></li>
                                

                                </ul>
                            </div>
                            <div class=\"col-md-6\">
                                <ul class=\"gtco-list-link\">Coursiers
                                    <li><a href=\"";
        // line 108
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
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">Paps</a></li>
                                </ul>
                            </div>
                             <div class=\"col-md-6\">
                                <ul class=\"gtco-list-link\">Paps Appli
                                    <li><a href=\"https://play.google.com/store/apps/details?id=com.customer.paps\"><img src=\"";
        // line 123
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 152
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 153
        echo "          <!-- jQuery -->
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Easing -->
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Waypoints -->
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Carousel -->
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Magnific Popup -->
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/magnific-popup-options.js"), "html", null, true);
        echo "\"></script>
    <!-- Main -->
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js0/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  430 => 167,  425 => 165,  421 => 164,  416 => 162,  411 => 160,  406 => 158,  401 => 156,  396 => 154,  393 => 153,  384 => 152,  352 => 123,  344 => 118,  331 => 108,  321 => 101,  304 => 87,  297 => 82,  288 => 81,  278 => 80,  269 => 79,  248 => 68,  244 => 67,  239 => 65,  235 => 64,  231 => 63,  221 => 58,  213 => 52,  204 => 51,  188 => 145,  185 => 81,  182 => 79,  180 => 51,  175 => 48,  166 => 47,  152 => 42,  146 => 39,  142 => 38,  136 => 35,  130 => 32,  125 => 30,  120 => 28,  115 => 26,  106 => 19,  97 => 18,  79 => 17,  67 => 169,  64 => 152,  62 => 47,  59 => 46,  57 => 18,  53 => 17,  49 => 16,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
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
      <link rel=\"shortcut icon\" href=\"{{ asset ('images/paps.png') }}\">
        <title>{% block title %}Paps{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
      <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\" crossorigin=\"anonymous\">
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" integrity=\"sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
     <link href=\"https://fonts.googleapis.com/css?family=Raleway:100,300,400,700\" rel=\"stylesheet\">
    <!-- Animate.css -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css')}}\">
    <!-- Icomoon Icon Fonts-->
    <link rel=\"stylesheet\" href=\"{{ asset('css/icomoon.css')}}\">
    <!-- Themify Icons-->
    <link rel=\"stylesheet\" href=\"{{ asset('css/themify-icons.css')}}\">
    <!-- Bootstrap  -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap0.css')}}\">

    <!-- Magnific Popup -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.css')}}\">

    <!-- Owl Carousel  -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.theme.default.min.css')}}\">

    <!-- Theme style  -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css')}}\">
 <!-- Modernizr JS -->
    <!-- FOR IE9 below -->
      {% endblock %}
 <body>
 {% block page %}
            <div class=\"gtco-loader\"></div>

            <div id=\"page\">
                {% block header %}
                <nav class=\"gtco-nav\" role=\"navigation\">
            <div class=\"gtco-container\">

                <div class=\"row\">
                    <div class=\"col-sm-2 col-xs-12\">
                        <div id=\"gtco-logo\">
                            <a href=\"{{ path ('accueil')}}\"><img src=\"{{ asset ('images/paps.png') }}\" alt=\"Free HTML5 Website Template by GetTemplates.co\"></a>
                        </div>
                    </div>
                    <div class=\"col-xs-10 text-right menu-1\">
                   <ul>
                            <li><a href=\"{{ path ('accueil')}}\">ACCUEIL</a></li>
                            <li><a href=\"{{ path ('service')}}\">SERVICES</a></li>
                            <li class=\"dropdown-item\"><a href=\"{{ path ('inscoursier')}}\">DEVENIR PAPSER</a></li>

                            <li><a href=\"{{ path ('about')}}\">A PROPOS</a></li>
                            <li><a href=\"{{ path ('contact')}}\">NOS CONTACT</a></li>

                            <li>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li><a href=\"https://monespace.paps.sn\" target=\"_blank\">ACCEDER A MON COMPTE</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
                {% endblock %}
                {% block body %}
                {% endblock %}
                {% block footer %}
                <footer id=\"gtco-footer\" class=\"gtco-section\" role=\"contentinfo\">
            <div class=\"gtco-container\">
                <div class=\"row row-pb-md\">
                    <div class=\"col-md-8 col-md-offset-2 gtco-cta text-center\">
                        <h3>Parlons business</h3>
                        <p><a href=\"{{ path ('contact')}}\" class=\"btn btn-white btn-outline\">Nous contactez</a></p>
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
                                    <li><a href=\"{{ path ('service')}}\">Services</a></li>
                                

                                </ul>
                            </div>
                            <div class=\"col-md-6\">
                                <ul class=\"gtco-list-link\">Coursiers
                                    <li><a href=\"{{ path ('inscoursier')}}\">Devenir coursier</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 gtco-footer-link\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <ul class=\"gtco-list-link\">A propos
                                    <li><a href=\"{{ path ('about')}}\">Paps</a></li>
                                </ul>
                            </div>
                             <div class=\"col-md-6\">
                                <ul class=\"gtco-list-link\">Paps Appli
                                    <li><a href=\"https://play.google.com/store/apps/details?id=com.customer.paps\"><img src=\"{{ asset ('images/google-play-badge_large.png') }}\" width=\"150px\" alt=\" Téléchargez Paps sans plus tarder\" ></a></li>

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
                {% endblock %}

            </div>

            <div class=\"gototop js-top\">
                <a href=\"#\" class=\"js-gotop\"><i class=\"fa fa-arrow-up\"></i></a>
            </div>
 {% endblock %}
        {% block javascripts %}
          <!-- jQuery -->
    <script src=\"{{ asset('js0/jquery.min.js')}}\"></script>
    <!-- jQuery Easing -->
    <script src=\"{{ asset('js0/jquery.easing.1.3.js')}}\"></script>
    <!-- Bootstrap -->
    <script src=\"{{ asset('js0/bootstrap.min.js')}}\"></script>
    <!-- Waypoints -->
    <script src=\"{{ asset('js0/jquery.waypoints.min.js')}}\"></script>
    <!-- Carousel -->
    <script src=\"{{ asset('js0/owl.carousel.min.js')}}\"></script>
    <!-- Magnific Popup -->
    <script src=\"{{ asset('js0/jquery.magnific-popup.min.js')}}\"></script>
    <script src=\"{{ asset('js0/magnific-popup-options.js')}}\"></script>
    <!-- Main -->
    <script src=\"{{ asset('js0/main.js')}}\"></script>
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/papsprojet/app/Resources/views/base.html.twig");
    }
}
