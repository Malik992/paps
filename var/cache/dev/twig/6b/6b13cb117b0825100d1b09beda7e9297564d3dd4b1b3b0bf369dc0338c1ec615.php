<?php

/* @PAPSLivraison/Front/about.html.twig */
class __TwigTemplate_bb0da3795f39bfed908b1038d14e40ddfd4715df204255e59267c6cf26538e7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@PAPSLivraison/Front/about.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PAPSLivraison/Front/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PAPSLivraison/Front/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<header id=\"gtco-header\" class=\"gtco-cover gtco-cover-xs gtco-inner\" role=\"banner\">
\t\t\t<div class=\"gtco-container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-md-offset-0 text-left\">
\t\t\t\t\t\t<div class=\"display-t\">
\t\t\t\t\t\t\t<div class=\"display-tc\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"no-margin\">A propos des nous</h1>
\t\t\t\t\t\t\t\t\t\t<p>Notre équipe est composée principalement de jeunes personnes aussi dynamiques qu'ambitionnées dans leur travail.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t<!-- END #gtco-header -->

\t\t

\t\t<div class=\"gtco-services gtco-section\">
\t\t\t<div class=\"gtco-container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
\t\t\t\t\t\t<h2>Notre équipe</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"owl-carousel owl-carousel-carousel\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bamba-2-crunch.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<h2>M. Bamba Lo</h2>
\t\t\t\t\t\t\t\t\t<p class=\"role\">CEO</p>
\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\" https://twitter.com/Khadim_L\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\" https://www.linkedin.com/in/bamba-l%C3%B4-54972031/\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/rokhaya-crunch.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<h2>Rokhaya Sy</h2>
\t\t\t\t\t\t\t\t\t<p class=\"role\">COO</p>
\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\" https://www.linkedin.com/in/rokhaya-sy-548a0149/\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/moustapha-2-crunch.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<h2>Ahmadou Moustapha Diao</h2>
\t\t\t\t\t\t\t\t\t<p class=\"role\">Responsable de Compte</p>
\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\" https://www.linkedin.com/in/moustapha-ahmadou-diao-923b93103/\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mareme-crunch.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<h2>Marème leye</h2>
\t\t\t\t\t\t\t\t\t<p class=\"role\">Founder</p>
\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://www.linkedin.com/in/mareme-leye-b04262165\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<br><br>
                                         </div>
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"owl-carousel owl-carousel-carousel\">

                              <div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mor-crunch.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t<h2>Mor Ndiaye</h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"role\">Dispatch Leader</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://twitter.com/DjimbyMor\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\" https://www.linkedin.com/in/mor-djimby-ndiaye-4a301bab/\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/madiodio.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t<h2>Madiodio Gaye</h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"role\">Product Manager</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\" https://twitter.com/Madiodio_Gaye \" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/richard.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t<h2>Richard Ndong</h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"role\">Auditeur Interne</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://twitter.com/RXCH4RD?s=09\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\" https://www.linkedin.com/in/richard-alain-ndong-2a49ab134\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/safietou-crunch.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t<h2>Safiatou Tagotto</h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"role\">Chargée des opérations</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://www.linkedin.com/in/safiatou-tagotto-436916168/\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t        <div class=\"owl-carousel owl-carousel-carousel\">
\t\t\t\t\t\t\t   <div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/arame-edited-crunch.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t<h2>Ndeye Arame Camara</h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"role\">Comptable</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://twitter.com/CamaraArame\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/aliou.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t<h2>Aliou Fall</h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"role\">Responsable commercial</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://twitter.com/ogballer90_al\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://www.linkedin.com/in/alioune-fall-646118ab/\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- END .gtco-services -->

\t\t<div class=\"gtco-section gtco-products\">
            <div class=\"gtco-container\">
                <div class=\"row row-pb-sm\">
                    <div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
\t\t\t\t\t<img class=\"gtco-item two-row bg-img animate-box\" style=\"background-image: url('";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/1492678157-about-icons-04-svg.svg"), "html", null, true);
        echo "');background-size: 150px;background-repeat: no-repeat;\">

                        <h2>septembre 2016</h2>
                        <p>Création</p>
                    </div>
                </div>
                <div class=\"row row-pb-md\">
                    <div class=\"col-md-4 col-sm-4\">
                        <img class=\"gtco-item two-row bg-img animate-box\" style=\"background-image: url('";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/1492678176-about-icons-01-svg.svg"), "html", null, true);
        echo "');background-size: 160px;background-repeat: no-repeat;\">
                        
                        <h3 id=\"cooll\">&nbsp;&nbsp;&nbsp; 26</h3>
                        <p><center>Employés</center></p>

                    </div>
                    <div class=\"col-md-4 col-sm-4\">
                        <img class=\"gtco-item two-row bg-img animate-box\" style=\"background-image: url('";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/1492678197-about-icons-03-svg.svg"), "html", null, true);
        echo "');background-size: 160px;background-repeat: no-repeat;\">
                           
                        
                         <h3 id=\"cooll\">2 000 euros</h3>
                         <p><center>Investissement</center></p>
                         
                    </div>
                    <div class=\"col-md-4 col-sm-4\">
                        <img class=\"gtco-item two-row bg-img animate-box\" style=\"background-image: url('";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/1492678213-about-icons-02-svg.svg"), "html", null, true);
        echo "');background-size: 160px;background-repeat: no-repeat;\">
                          
                      
                         <h3 id=\"cooll\">&nbsp;&nbsp;&nbsp;10</h3>
                        <p><center>Villes.</center></p>

                    </div>
                </div>
            </div>
        </div>
\t\t <div class=\"gtco-client\">
                    <div class=\"gtco-container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
\t\t\t\t\t\t<h2>Nos partenaires</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
                        <div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-2 col-md-offset-1 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/index.jpeg"), "html", null, true);
        echo "\" id=\"parteners\"  alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/dhl-paris-14961564679.jpg"), "html", null, true);
        echo "\" id=\"parteners\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/index.png"), "html", null, true);
        echo "\" id=\"parteners\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/total-tunisie.png"), "html", null, true);
        echo "\" id=\"parteners\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/tn-14501942-logoeiffage.jpg"), "html", null, true);
        echo "\"  id=\"parteners\"  alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
                        </div>
                     </div>
        </div>
\t\t\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PAPSLivraison/Front/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 223,  318 => 220,  312 => 217,  306 => 214,  300 => 211,  278 => 192,  267 => 184,  257 => 177,  246 => 169,  224 => 150,  212 => 141,  195 => 127,  181 => 116,  166 => 104,  152 => 93,  129 => 73,  114 => 61,  100 => 50,  86 => 39,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block body %}
<header id=\"gtco-header\" class=\"gtco-cover gtco-cover-xs gtco-inner\" role=\"banner\">
\t\t\t<div class=\"gtco-container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-md-offset-0 text-left\">
\t\t\t\t\t\t<div class=\"display-t\">
\t\t\t\t\t\t\t<div class=\"display-tc\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"no-margin\">A propos des nous</h1>
\t\t\t\t\t\t\t\t\t\t<p>Notre équipe est composée principalement de jeunes personnes aussi dynamiques qu'ambitionnées dans leur travail.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t<!-- END #gtco-header -->

\t\t

\t\t<div class=\"gtco-services gtco-section\">
\t\t\t<div class=\"gtco-container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
\t\t\t\t\t\t<h2>Notre équipe</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"owl-carousel owl-carousel-carousel\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/bamba-2-crunch.png')}}\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<h2>M. Bamba Lo</h2>
\t\t\t\t\t\t\t\t\t<p class=\"role\">CEO</p>
\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\" https://twitter.com/Khadim_L\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\" https://www.linkedin.com/in/bamba-l%C3%B4-54972031/\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/rokhaya-crunch.png')}}\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<h2>Rokhaya Sy</h2>
\t\t\t\t\t\t\t\t\t<p class=\"role\">COO</p>
\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\" https://www.linkedin.com/in/rokhaya-sy-548a0149/\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/moustapha-2-crunch.png')}}\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<h2>Ahmadou Moustapha Diao</h2>
\t\t\t\t\t\t\t\t\t<p class=\"role\">Responsable de Compte</p>
\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\" https://www.linkedin.com/in/moustapha-ahmadou-diao-923b93103/\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/mareme-crunch.png')}}\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<h2>Marème leye</h2>
\t\t\t\t\t\t\t\t\t<p class=\"role\">Founder</p>
\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://www.linkedin.com/in/mareme-leye-b04262165\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<br><br>
                                         </div>
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"owl-carousel owl-carousel-carousel\">

                              <div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/mor-crunch.png')}}\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t<h2>Mor Ndiaye</h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"role\">Dispatch Leader</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://twitter.com/DjimbyMor\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\" https://www.linkedin.com/in/mor-djimby-ndiaye-4a301bab/\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/madiodio.jpg')}}\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t<h2>Madiodio Gaye</h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"role\">Product Manager</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\" https://twitter.com/Madiodio_Gaye \" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/richard.jpg')}}\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t<h2>Richard Ndong</h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"role\">Auditeur Interne</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://twitter.com/RXCH4RD?s=09\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\" https://www.linkedin.com/in/richard-alain-ndong-2a49ab134\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/safietou-crunch.png')}}\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t<h2>Safiatou Tagotto</h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"role\">Chargée des opérations</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://www.linkedin.com/in/safiatou-tagotto-436916168/\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t        <div class=\"owl-carousel owl-carousel-carousel\">
\t\t\t\t\t\t\t   <div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/arame-edited-crunch.png')}}\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t<h2>Ndeye Arame Camara</h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"role\">Comptable</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://twitter.com/CamaraArame\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"gtco-staff\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/aliou.png')}}\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t<h2>Aliou Fall</h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"role\">Responsable commercial</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://twitter.com/ogballer90_al\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://www.linkedin.com/in/alioune-fall-646118ab/\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- END .gtco-services -->

\t\t<div class=\"gtco-section gtco-products\">
            <div class=\"gtco-container\">
                <div class=\"row row-pb-sm\">
                    <div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
\t\t\t\t\t<img class=\"gtco-item two-row bg-img animate-box\" style=\"background-image: url('{{ asset ('images/1492678157-about-icons-04-svg.svg')}}');background-size: 150px;background-repeat: no-repeat;\">

                        <h2>septembre 2016</h2>
                        <p>Création</p>
                    </div>
                </div>
                <div class=\"row row-pb-md\">
                    <div class=\"col-md-4 col-sm-4\">
                        <img class=\"gtco-item two-row bg-img animate-box\" style=\"background-image: url('{{ asset ('images/1492678176-about-icons-01-svg.svg')}}');background-size: 160px;background-repeat: no-repeat;\">
                        
                        <h3 id=\"cooll\">&nbsp;&nbsp;&nbsp; 26</h3>
                        <p><center>Employés</center></p>

                    </div>
                    <div class=\"col-md-4 col-sm-4\">
                        <img class=\"gtco-item two-row bg-img animate-box\" style=\"background-image: url('{{ asset ('images/1492678197-about-icons-03-svg.svg')}}');background-size: 160px;background-repeat: no-repeat;\">
                           
                        
                         <h3 id=\"cooll\">2 000 euros</h3>
                         <p><center>Investissement</center></p>
                         
                    </div>
                    <div class=\"col-md-4 col-sm-4\">
                        <img class=\"gtco-item two-row bg-img animate-box\" style=\"background-image: url('{{ asset ('images/1492678213-about-icons-02-svg.svg')}}');background-size: 160px;background-repeat: no-repeat;\">
                          
                      
                         <h3 id=\"cooll\">&nbsp;&nbsp;&nbsp;10</h3>
                        <p><center>Villes.</center></p>

                    </div>
                </div>
            </div>
        </div>
\t\t <div class=\"gtco-client\">
                    <div class=\"gtco-container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
\t\t\t\t\t\t<h2>Nos partenaires</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
                        <div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-2 col-md-offset-1 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset ('images/index.jpeg')}}\" id=\"parteners\"  alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset ('images/dhl-paris-14961564679.jpg')}}\" id=\"parteners\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset ('images/index.png')}}\" id=\"parteners\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset ('images/total-tunisie.png')}}\" id=\"parteners\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset ('images/tn-14501942-logoeiffage.jpg')}}\"  id=\"parteners\"  alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
                        </div>
                     </div>
        </div>
\t\t\t
{% endblock %}", "@PAPSLivraison/Front/about.html.twig", "/var/www/html/papsprojet/src/PAPS/LivraisonBundle/Resources/views/Front/about.html.twig");
    }
}
