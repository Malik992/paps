<?php

/* @PAPSLivraison/Front/service.html.twig */
class __TwigTemplate_6a0ed012d60eeee95e815ea5668ac405d3e8451261e39c5188bf4cd2d74b765e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@PAPSLivraison/Front/service.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PAPSLivraison/Front/service.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PAPSLivraison/Front/service.html.twig"));

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
        echo "<header id=\"gtco-header\" class=\"gtco-cover gtco-cover-xs gtco-inner\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Papsweb1.jpg"), "html", null, true);
        echo "');background-size: 100% auto;background-repeat: no-repeat;\" role=\"banner\">
\t\t\t<div class=\"gtco-container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-md-offset-0 text-left\">
\t\t\t\t\t\t<div class=\"display-t\">
\t\t\t\t\t\t\t<div class=\"display-tc\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 nav-text\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"no-margin\">Nos services</h1>
\t\t\t\t\t\t\t\t\t\t<p>Paps vous propose des livraisons de colis, de documents et express.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>


\t\t<div class=\"gtco-section gtco-products\">
\t\t\t<div class=\"gtco-container\">
\t\t\t\t<div class=\"row row-pb-sm\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
\t\t\t\t\t\t<h2>Une livraison efficace avec nos services</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-pb-md bgrd\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<div class=\"gtco-item two-row bg-img animate-box\" style=\"background-image: url('";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/express.png"), "html", null, true);
        echo "');background-size: 150px;background-repeat: no-repeat;\">

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 col-sm-4\">
\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 service-wrap\">
\t\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t\t<h4 id=\"express\"> Express</h4>
\t\t\t\t\t\t\t<p>Vous avez des colis urgents à expédier sur Dakar ou les autres 
\t\t\t\t\t\t\trégions et vous souhaiter les faire livrer le plus rapidement possible 
\t\t\t\t\t\t\tet de manière exigeante? <br> Renseignez directement vos informations à 
\t\t\t\t\t\t\ttravers le site ou l'application mobile  et Paps prend en charge votre 
\t\t\t\t\t\t\tcourse. Vous serez notifié selon votre choix par téléphone ou email dès
\t\t\t\t\t\t\t lors que votre course a démarré.<br>

\t\t\t\t\t\tMais encore mieux: vous avez besoin de faire un achat
\t\t\t\t\t\t rapide ? Là encore, Paps les prend 
\t\t\t\t\t\t en charge et vous les livre chez vous ou à votre bureau.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<br>
                <div class=\"row row-pb-md bgrd\" >
\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<div class=\"gtco-item two-row bg-img animate-box\" style=\"background-image: url('";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/document.png"), "html", null, true);
        echo "');background-size: 150px;background-repeat: no-repeat;\">

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 col-sm-4\">
\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 service-wrap\">
\t\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t\t<h4 id=\"colis\"> Document et Colis</h4>

\t\t\t\t\t\t\t<p>Vous êtes une entreprise et vous disposez d'une quantité importante de 
\t\t\t\t\t\t\tcourriers ou de colis à expédier? Paps met à votre disposition une partie de sa
\t\t\t\t\t\t\t flotte de coursiers pour vos besoins de logistique.<br>

\t\t\t\t\t\t\tNous nous chargeons également de répondre à tous vos besoins de préparations
\t\t\t\t\t\t\t de documents ou colis (emballage et stockage) avant l'envoi. Avec Paps,
\t\t\t\t\t\t\t  bénéficiez d'un service rigoureux qui fera tout le nécessaire pour prendre 
\t\t\t\t\t\t\t  en charge vos envois de courriers récurrents à Dakar et dans les autres
\t\t\t\t\t\t\t   régions.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
          <div class=\"gtco-client\">
\t\t\t\t<div class=\"gtco-container\">
\t\t\t\t\t<div class=\"row row-pb-sm\">
\t\t\t\t\t\t\t<img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Papsweb7.jpg"), "html", null, true);
        echo "\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t  </div>
\t\t <div class=\"gtco-client\">
                    <div class=\"gtco-container\">
\t\t\t\t\t<div class=\"row row-pb-sm\">
                    <div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
                        <h2>Nos offres aux entreprises</h2>
                        <p>Plus de 50 entreprises nous font confiance à travers le sénégal</p>
                    </div>
                </div>
                        <div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-2 col-md-offset-1 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/index.jpg"), "html", null, true);
        echo "\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/dhl-paris.jpg"), "html", null, true);
        echo "\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/boafric.jpg"), "html", null, true);
        echo "\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/diamonbankk.jpg"), "html", null, true);
        echo "\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/auchann.jpg"), "html", null, true);
        echo "\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
                        </div>
                     </div>
        </div>
\t\t <div class=\"gtco-client\">
                    <div class=\"gtco-container\">
                        <div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-2 col-md-offset-1 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/ouicarry.png"), "html", null, true);
        echo "\" alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/baloon.jpg"), "html", null, true);
        echo "\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brvm.jpg"), "html", null, true);
        echo "\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div  class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/abco.jpg"), "html", null, true);
        echo "\" width=\"500\"  alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div   class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/tex.png"), "html", null, true);
        echo "\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
                        </div>
                     </div>
        </div>
 <div class=\"gtco-section gtco-testimonial gtco-gray\">
            <div class=\"gtco-container\">

                <div class=\"row row-pb-sm\">
                    <div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
                        <h2>Ils aiment ce que nous faisons</h2>
                        <p>Paps offre des solutions pour les clients.</p>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 animate-box\">
                        <div class=\"gtco-testimony gtco-left\">
                            <div><img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/po.png"), "html", null, true);
        echo "\"  alt=\"Free Website template by GetTemplates.co\"></div>
                            <blockquote>
                                <p>&ldquo;« Les services de Paps nous ont permis de fluidifier et d'accélérer la 
\t\t\t\t\t\t\t\tremontée au siège des documents administratifs de nos points de vente disséminés
\t\t\t\t\t\t\t\t dans Dakar et en région. Les équipes de Paps sont dans une volonté permanente de 
\t\t\t\t\t\t\t\t progrès et d'efficacité.» &rdquo; <cite class=\"author\">&mdash;Robin Gauter
\t\t\t\t\t\t\t\tDirecteur Administratif et financier
\t\t\t\t\t\t\t\tAuchan Retail Sénégal </cite></p>
                            </blockquote>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-sm-6 animate-box\">
                        <div class=\"gtco-testimony gtco-left\">
                            <div><img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/po1.png"), "html", null, true);
        echo "\" alt=\"Free Website template by GetTemplates.co\"></div>
                            <blockquote>
                                <p>&ldquo;« Deux points: équipe efficace et suivi vraiment très bien en temps réel. 
\t\t\t\t\t\t\t\t Nous sommes informé de ce qui a été fait, de ce qui est à faire, plus la peine 
\t\t\t\t\t\t\t\t d’appeler à chaque instant le prestataire pour avoir du feedback et planifier nos
\t\t\t\t\t\t\t\t  relances » &rdquo;
                                    <cite class=\"author\">&mdash; Géraldine Johnson
\t\t\t\t\t\t\t\t\t\tAssistante de direction
\t\t\t\t\t\t\t\t\t\tNexus</cite></p>
                            </blockquote>
                        </div>
                    </div>


                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 animate-box\">
                        <div class=\"gtco-testimony gtco-left\">
                            <div><img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/po2.png"), "html", null, true);
        echo "\" alt=\"Free Website template by GetTemplates.co\"></div>
                            <blockquote>
                                <p>&ldquo; 
\t\t\t\t\t\t\t« Comparé à notre ancien prestataire Paps est nettement meilleur, au niveau 
\t\t\t\t\t\t\tde la rapidité, la manière dont sont reçues nos décharges, et le suivi des 
\t\t\t\t\t\t\texpeditions.Je suis rassuré vraiment pour mes clients » &rdquo;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<cite class=\"author\">&mdash;Mohamed Sissoko
\t\t\t\t\t\t\tComptabilité client / chargée recouvrement
\t\t\t\t\t\t\tSenac S. A.
\t\t\t\t\t\t\tEiffage</cite>
                                </p>
                            </blockquote>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-sm-6 animate-box\">
                        <div class=\"gtco-testimony gtco-left\">
                            <div><img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/po4.png"), "html", null, true);
        echo "\" alt=\"Free Website template by GetTemplates.co\"></div>
                            <blockquote>
                                <p>&ldquo;« Nous travaillons depuis quelques mois avec Paps sur 
\t\t\t\t\t\t\t\tdifférents types de prestations, tous liés à la logistique du 
\t\t\t\t\t\t\t\tdernier Km. C’est une startup innovante avec laquelle nous avons 
\t\t\t\t\t\t\t\tbeaucoup de plaisir à travailler.»&rdquo; <cite class=\"author\">&mdash;M. Babacar Diagne
\t\t\t\t\t\t\t\tResponsable Coord. Supply Chain
\t\t\t\t\t\t\t\tOrange-Sonatel</cite></p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PAPSLivraison/Front/service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 202,  279 => 185,  258 => 167,  241 => 153,  220 => 135,  214 => 132,  208 => 129,  202 => 126,  196 => 123,  184 => 114,  178 => 111,  172 => 108,  166 => 105,  160 => 102,  142 => 87,  111 => 59,  82 => 33,  49 => 4,  40 => 3,  11 => 1,);
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
<header id=\"gtco-header\" class=\"gtco-cover gtco-cover-xs gtco-inner\" style=\"background-image: url('{{ asset ('images/Papsweb1.jpg')}}');background-size: 100% auto;background-repeat: no-repeat;\" role=\"banner\">
\t\t\t<div class=\"gtco-container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-md-offset-0 text-left\">
\t\t\t\t\t\t<div class=\"display-t\">
\t\t\t\t\t\t\t<div class=\"display-tc\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 nav-text\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"no-margin\">Nos services</h1>
\t\t\t\t\t\t\t\t\t\t<p>Paps vous propose des livraisons de colis, de documents et express.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>


\t\t<div class=\"gtco-section gtco-products\">
\t\t\t<div class=\"gtco-container\">
\t\t\t\t<div class=\"row row-pb-sm\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
\t\t\t\t\t\t<h2>Une livraison efficace avec nos services</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-pb-md bgrd\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<div class=\"gtco-item two-row bg-img animate-box\" style=\"background-image: url('{{ asset ('images/express.png')}}');background-size: 150px;background-repeat: no-repeat;\">

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 col-sm-4\">
\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 service-wrap\">
\t\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t\t<h4 id=\"express\"> Express</h4>
\t\t\t\t\t\t\t<p>Vous avez des colis urgents à expédier sur Dakar ou les autres 
\t\t\t\t\t\t\trégions et vous souhaiter les faire livrer le plus rapidement possible 
\t\t\t\t\t\t\tet de manière exigeante? <br> Renseignez directement vos informations à 
\t\t\t\t\t\t\ttravers le site ou l'application mobile  et Paps prend en charge votre 
\t\t\t\t\t\t\tcourse. Vous serez notifié selon votre choix par téléphone ou email dès
\t\t\t\t\t\t\t lors que votre course a démarré.<br>

\t\t\t\t\t\tMais encore mieux: vous avez besoin de faire un achat
\t\t\t\t\t\t rapide ? Là encore, Paps les prend 
\t\t\t\t\t\t en charge et vous les livre chez vous ou à votre bureau.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<br>
                <div class=\"row row-pb-md bgrd\" >
\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<div class=\"gtco-item two-row bg-img animate-box\" style=\"background-image: url('{{ asset ('images/document.png')}}');background-size: 150px;background-repeat: no-repeat;\">

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 col-sm-4\">
\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 service-wrap\">
\t\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t\t<h4 id=\"colis\"> Document et Colis</h4>

\t\t\t\t\t\t\t<p>Vous êtes une entreprise et vous disposez d'une quantité importante de 
\t\t\t\t\t\t\tcourriers ou de colis à expédier? Paps met à votre disposition une partie de sa
\t\t\t\t\t\t\t flotte de coursiers pour vos besoins de logistique.<br>

\t\t\t\t\t\t\tNous nous chargeons également de répondre à tous vos besoins de préparations
\t\t\t\t\t\t\t de documents ou colis (emballage et stockage) avant l'envoi. Avec Paps,
\t\t\t\t\t\t\t  bénéficiez d'un service rigoureux qui fera tout le nécessaire pour prendre 
\t\t\t\t\t\t\t  en charge vos envois de courriers récurrents à Dakar et dans les autres
\t\t\t\t\t\t\t   régions.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
          <div class=\"gtco-client\">
\t\t\t\t<div class=\"gtco-container\">
\t\t\t\t\t<div class=\"row row-pb-sm\">
\t\t\t\t\t\t\t<img src=\"{{ asset ('images/Papsweb7.jpg')}}\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t  </div>
\t\t <div class=\"gtco-client\">
                    <div class=\"gtco-container\">
\t\t\t\t\t<div class=\"row row-pb-sm\">
                    <div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
                        <h2>Nos offres aux entreprises</h2>
                        <p>Plus de 50 entreprises nous font confiance à travers le sénégal</p>
                    </div>
                </div>
                        <div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-2 col-md-offset-1 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset ('images/index.jpg')}}\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset ('images/dhl-paris.jpg')}}\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset ('images/boafric.jpg')}}\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset ('images/diamonbankk.jpg')}}\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset ('images/auchann.jpg')}}\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
                        </div>
                     </div>
        </div>
\t\t <div class=\"gtco-client\">
                    <div class=\"gtco-container\">
                        <div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-2 col-md-offset-1 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset ('images/ouicarry.png')}}\" alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset ('images/baloon.jpg')}}\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset ('images/brvm.jpg')}}\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div  class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset ('images/abco.jpg')}}\" width=\"500\"  alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div   class=\"col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset ('images/tex.png')}}\"   alt=\"Free Website Template by GetTemplates.co\" class=\"img-responsiv\">
\t\t\t\t\t\t\t</div>
                        </div>
                     </div>
        </div>
 <div class=\"gtco-section gtco-testimonial gtco-gray\">
            <div class=\"gtco-container\">

                <div class=\"row row-pb-sm\">
                    <div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
                        <h2>Ils aiment ce que nous faisons</h2>
                        <p>Paps offre des solutions pour les clients.</p>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 animate-box\">
                        <div class=\"gtco-testimony gtco-left\">
                            <div><img src=\"{{ asset ('images/po.png')}}\"  alt=\"Free Website template by GetTemplates.co\"></div>
                            <blockquote>
                                <p>&ldquo;« Les services de Paps nous ont permis de fluidifier et d'accélérer la 
\t\t\t\t\t\t\t\tremontée au siège des documents administratifs de nos points de vente disséminés
\t\t\t\t\t\t\t\t dans Dakar et en région. Les équipes de Paps sont dans une volonté permanente de 
\t\t\t\t\t\t\t\t progrès et d'efficacité.» &rdquo; <cite class=\"author\">&mdash;Robin Gauter
\t\t\t\t\t\t\t\tDirecteur Administratif et financier
\t\t\t\t\t\t\t\tAuchan Retail Sénégal </cite></p>
                            </blockquote>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-sm-6 animate-box\">
                        <div class=\"gtco-testimony gtco-left\">
                            <div><img src=\"{{ asset ('images/po1.png')}}\" alt=\"Free Website template by GetTemplates.co\"></div>
                            <blockquote>
                                <p>&ldquo;« Deux points: équipe efficace et suivi vraiment très bien en temps réel. 
\t\t\t\t\t\t\t\t Nous sommes informé de ce qui a été fait, de ce qui est à faire, plus la peine 
\t\t\t\t\t\t\t\t d’appeler à chaque instant le prestataire pour avoir du feedback et planifier nos
\t\t\t\t\t\t\t\t  relances » &rdquo;
                                    <cite class=\"author\">&mdash; Géraldine Johnson
\t\t\t\t\t\t\t\t\t\tAssistante de direction
\t\t\t\t\t\t\t\t\t\tNexus</cite></p>
                            </blockquote>
                        </div>
                    </div>


                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 animate-box\">
                        <div class=\"gtco-testimony gtco-left\">
                            <div><img src=\"{{ asset ('images/po2.png')}}\" alt=\"Free Website template by GetTemplates.co\"></div>
                            <blockquote>
                                <p>&ldquo; 
\t\t\t\t\t\t\t« Comparé à notre ancien prestataire Paps est nettement meilleur, au niveau 
\t\t\t\t\t\t\tde la rapidité, la manière dont sont reçues nos décharges, et le suivi des 
\t\t\t\t\t\t\texpeditions.Je suis rassuré vraiment pour mes clients » &rdquo;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<cite class=\"author\">&mdash;Mohamed Sissoko
\t\t\t\t\t\t\tComptabilité client / chargée recouvrement
\t\t\t\t\t\t\tSenac S. A.
\t\t\t\t\t\t\tEiffage</cite>
                                </p>
                            </blockquote>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-sm-6 animate-box\">
                        <div class=\"gtco-testimony gtco-left\">
                            <div><img src=\"{{ asset ('images/po4.png')}}\" alt=\"Free Website template by GetTemplates.co\"></div>
                            <blockquote>
                                <p>&ldquo;« Nous travaillons depuis quelques mois avec Paps sur 
\t\t\t\t\t\t\t\tdifférents types de prestations, tous liés à la logistique du 
\t\t\t\t\t\t\t\tdernier Km. C’est une startup innovante avec laquelle nous avons 
\t\t\t\t\t\t\t\tbeaucoup de plaisir à travailler.»&rdquo; <cite class=\"author\">&mdash;M. Babacar Diagne
\t\t\t\t\t\t\t\tResponsable Coord. Supply Chain
\t\t\t\t\t\t\t\tOrange-Sonatel</cite></p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{% endblock %}", "@PAPSLivraison/Front/service.html.twig", "/var/www/html/papsprojet/src/PAPS/LivraisonBundle/Resources/views/Front/service.html.twig");
    }
}
