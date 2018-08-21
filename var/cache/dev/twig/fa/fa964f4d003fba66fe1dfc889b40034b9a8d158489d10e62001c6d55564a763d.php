<?php

/* @PAPSLivraison/Front/accueil.html.twig */
class __TwigTemplate_46034ee8346b73acd0004c8c90e2437a79516a7896d86225db63fd5813ec69c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@PAPSLivraison/Front/accueil.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PAPSLivraison/Front/accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PAPSLivraison/Front/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<header id=\"gtco-header\" class=\"gtco-cover\" role=\"banner\">
            <div class=\"gtco-container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-md-offset-0 text-left\">
                        <div class=\"display-t\">
                            <div class=\"display-tc\">
                                <div class=\"row\">
                                    <div class=\"col-md-5 text-center header-img\">
                                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/img1.png"), "html", null, true);
        echo "\" alt=\"Free HTML5 Website Template by GetTemplates.co\">
                                    </div>
                                    <div class=\"col-md-7 copy\">
                                        <h1>Paps, votre livraison passe en vitesse supérieure.</h1>
                                        <p>Service de logistique urbaine pour les entreprises et les commerçants.</p>
                                        <p><a href=\"  http://localhost:3000/\" target=\"_blank\" class=\"btn btn-white\">Commencez maintenant</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END .gtco-client -->

        <div class=\"gtco-section gtco-products\">
            <div class=\"gtco-container\">
                <div class=\"row row-pb-sm\">
                    <div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
                        <h2>Nos offres</h2>
                        <p>Paps dispose plusieurs services qu'on peut offrir aux entreprises.</p>
                    </div>
                </div>
                <div class=\"row row-pb-md\">
                    <div class=\"col-md-4 col-sm-4\">
                        <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service");
        echo "\" class=\"gtco-item two-row bg-img animate-box\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/express.png"), "html", null, true);
        echo "');background-size: 200px;background-repeat: no-repeat;\">
                        </a>
                        <h3 id=\"cool\">Livraison express</h3>
                        <p><center>Paps peut se charger de vos course dans le plus bref délais.</center></p>

                    </div>
                    <div class=\"col-md-4 col-sm-4\">
                        <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service");
        echo "\" class=\"gtco-item two-row bg-img animate-box\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/document.png"), "html", null, true);
        echo "');background-size: 200px;background-repeat: no-repeat;\">
                           
                        </a>
                         <h3 id=\"cool\">Livraison document</h3>
                         <p><center>Nous nous engageons avec vous à préparer, stocker et transmettre tous type de documents.</center></p>
                         
                    </div>
                    <div class=\"col-md-4 col-sm-4\">
                        <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service");
        echo "\" class=\"gtco-item two-row bg-img animate-box\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/colis.png"), "html", null, true);
        echo "');background-size: 200px;background-repeat: no-repeat;\">
                          
                        </a>
                         <h3 id=\"cool\">Livraison de colis</h3>
                        <p><center>Paps s'engage à livrer vos colis de manière efficace.</center></p>

                    </div>
                </div>
                
            </div>
        </div>
        <!-- END .gtco-products -->
        <div class=\"gtco-services gtco-section\">
            <div class=\"gtco-container\">
            <div class=\"row row-pb-sm\">
                    <div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
                        <h2>Nos avantages</h2>
                    </div>
                </div>
                <div class=\"row row-pb-sm\">
                    <div class=\"row mdev\">
                        <div class=\"col-md-4 col-sm-4 service-wrap\">
                            <div class=\"service\">
                                <h3><i class=\"fa fa-calendar-check-o\"></i> La livraison</h3>
                                <p>Appuyez sur un bouton et un chauffeur viendra à vous en moins d'une heure pour vous livrer potre commande. <br> Paps est une entreprise de logistique urbaine et dispose des livreurs motivés à vos services.</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-4 service-wrap\">
                            <div class=\"service animate-change\">
                                <h3><i class=\"fa fa-dollar\"></i> Le coût</h3>
                                <p>Gérer toutes vos livraisons d'un endroit où vous pouvez voir les dépenses, les outils de reporting d'accès et économiser sur les coûts logistiques. Vous pouvez faire vos paiements par Orange Money, Carte Bancaire, ou par
                                    espèce.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-4 service-wrap\">
                            <div class=\"service\">
                                <h3><i class=\"fa fa-unlock-alt\"></i> La sécurité</h3>
                                <p>Chaque livraison Paps est couvert par une police d'assurance à partir du moment où vos biens sont entre nos mains. Nos livreurs apportent votre commande jusqu'à chez vous en toute sécurité. </p>
                            </div>
                        </div>

                    </div>
                    
                   
                </div>
                
            </div>
                <div class=\"row\">
                 <div class=\"row row-pb-sm\">
                    <div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
                        <h2>Simplifiez votre vie.</h2>
                        <p>Paps permet également de faire des expéditions en régions. En somme, nous permettons de gagner du temps tout en apportant la transparence nécessaire à sécuriser vos expeditions et collecte.</p>
                    </div>
                </div>
                    <div class=\"col-sm-12  gtco-heading text-center\"> 
                        <iframe width=\"1200\" height=\"550\" src=\"//www.youtube.com/embed/0ciyNxMcLkE?autoplay=0&showinfo=0&controls=0\" frameborder=\"0\" allowfullscreen></iframe>
                        </p>
                    </div>
                    <div class=\"col-sm-12 gto-heading text-center\">
                    <div class=\"row\">
                    <div class=\"col-md-12 text-center\">
                        <p><a href=\"  http://localhost:3000/\" target=\"_blank\" class=\"btn btn-special\">Commencer maintenant</a></p>
                    </div>
                </div>
                    </div>
                </div>
        </div>
        <!-- END .gtco-services -->

\t\t<div class=\"gtco-section gtco-products\">
\t\t\t<div class=\"gtco-container\">
\t\t\t\t<div class=\"row row-pb-sm\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
\t\t\t\t\t\t<h2>Etude de cas</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-pb-md\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<div class=\"gtco-item logo1 bg-img animate-box img-rounded\" id=\"log1\" style=\"background-image: url('";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/index.jpg"), "html", null, true);
        echo "');background-size: 100px;background-repeat: no-repeat;\">

\t\t\t\t\t\t</div>
                        <div class=\"gtco-item logo1 bg-img animate-box img-rounded\" id=\"log2\" style=\"background-image: url('";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/dhl-paris.jpg"), "html", null, true);
        echo "');background-size: 100px;background-repeat: no-repeat;\">

\t\t\t\t\t\t</div>
                        <div class=\"gtco-item logo1 bg-img animate-box img-rounded\"nid=\"log3\"  style=\"background-image: url('";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/auchann.jpg"), "html", null, true);
        echo "');background-size: 100px;background-repeat: no-repeat;\">

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 col-sm-4\" >
\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 service-wrap\" id=\"logo1\">
\t\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t\t<h3> Orange </h3>
\t\t\t\t\t\t\t<p>propos</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t     </div>
                         <div class=\"col-md-12 col-sm-12 service-wrap\" id=\"logo2\">
\t\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t\t<h3> Dhl </h3>
\t\t\t\t\t\t\t<p>propos</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t     </div>
                         <div class=\"col-md-12 col-sm-12 service-wrap\" id=\"logo3\">
\t\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t\t<h3> Auchan </h3>
\t\t\t\t\t\t\t<p>propos</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t     </div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
                
\t\t\t</div>
\t\t</div>
        ";
        // line 170
        echo " <script>
\$(document).ready(function(){
        \$(\"#logo1\").show();
        \$(\"#logo2\").hide();
        \$(\"#logo3\").hide();
    \$(\"#log2\").hover(function(){
        \$(\"#logo2\").show().delay(5000);
        \$(\"#logo3\").hide().delay(5000);
        \$(\"#logo1\").hide().delay(5000);

    });
     \$(\"#log3\").hover(function(){
        \$(\"#logo3\").show().delay(5000);
        \$(\"#logo1\").hide().delay(5000);
        \$(\"#logo2\").hide().delay(5000);

    });
      \$(\"#log1\").hover(function(){
        \$(\"#logo1\").show().delay(5000);
        \$(\"#logo2\").hide().delay(5000);
        \$(\"#logo3\").hide().delay(5000);

    });
 
});
</script>



        ";
        // line 200
        echo "
        <div class=\"gtco-section gtco-testimonial gtco-gray\">
            <div class=\"gtco-container\">

                <div class=\"row row-pb-sm\">
                    <div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
                        <h2>Il parle de nous</h2>
                        <p>Paps offre des solutions sur mesure uniques pour le transport de marchandises dans les villes en consolidant et rationalisant les plates-formes logistiques existantes.</p>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 animate-box\">
                        <div class=\"gtco-testimony gtco-left\">
                            <div>
                             <a id=\"lab\" target=\"_blank\" href=\"https://sekou.org/magazine/2017/02/08/paps-premiere-startup-africaine-de-livraison-geolocalisee/\">
                            <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/sekou-logo.png"), "html", null, true);
        echo "\" alt=\"Free Website template by GetTemplates.co\">
                            </a>
                            </div>
                            <blockquote>
                                <p>&ldquo;Paps entend réinventer la livraison rapide en Afrique. Pour cela, la startup a développé une application de livraison géolocalisée qui sollicite les livreurs les ... &rdquo; <cite class=\"author\">&mdash;Sekou </cite></p>
                            </blockquote>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-sm-6 animate-box\">
                        <div class=\"gtco-testimony gtco-left\">
                            <div>
                            <a id=\"lab\" target=\"_blank\" href=\"https://www.africalogisticsmagazine.com/fr/content/interview-de-m-bamba-lo-directeur-general-de-paps\">
                            <img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logoalm.png"), "html", null, true);
        echo "\" alt=\"Free Website template by GetTemplates.co\">
                            </a>
                            </div>
                            <blockquote>
                                <p>&ldquo;Bamba LO est un sénégalais de la diaspora qui a décidé de rentrer au Sénégal et de s’installer, il y’a quelques années, après une expérience professionnelle ...&rdquo;
                                    <cite class=\"author\">&mdash; africa logistics magazine</cite></p>
                            </blockquote>
                        </div>
                    </div>


                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 animate-box\">
                        <div class=\"gtco-testimony gtco-left\">
                            <div>
                            <a id=\"lab\" target=\"_blank\" href=\"http://startupbrics.com/africatech-paps-application-livraison-geolocalisee-afrique/#.W3GLfxi2yb-\" >
                            <img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/startups-brics.jpg"), "html", null, true);
        echo "\" alt=\"Free Website template by GetTemplates.co\">
                            </a>
                            </div>
                            <blockquote>
                                <p>&ldquo;Tout est parti d’un constat utilisateur : j’avais à l’époque un centre d’appels qui a été amené à vendre des abonnements téléphoniques. Le taux d’encaissement ....&rdquo;
                                    <cite class=\"author\">&mdash; startupbrics</cite>
                                </p>
                            </blockquote>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-sm-6 animate-box\">
                        <div class=\"gtco-testimony gtco-left\">
                            <div>
                            <a id=\"lab\" target=\"_blank\" href=\"https://www.bbc.com/afrique/region-39673233\">
                            <img src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bbc.jpg"), "html", null, true);
        echo "\" alt=\"Free Website template by GetTemplates.co\">
                            </a>
                            </div>
                            <blockquote>
                                <p>&ldquo;Bamba Lô et son équipe n'en sont pas encore là mais l'expérimentation démarre dans un mois à Dakar. Le fondateur de Paps, l'application de livraison à la demande géolocalisée...&rdquo; <cite class=\"author\">&mdash; BBC</cite></p>
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
        return "@PAPSLivraison/Front/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 261,  327 => 246,  307 => 229,  291 => 216,  273 => 200,  242 => 170,  210 => 140,  204 => 137,  198 => 134,  114 => 55,  101 => 47,  89 => 40,  59 => 13,  49 => 5,  40 => 4,  11 => 1,);
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
<header id=\"gtco-header\" class=\"gtco-cover\" role=\"banner\">
            <div class=\"gtco-container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-md-offset-0 text-left\">
                        <div class=\"display-t\">
                            <div class=\"display-tc\">
                                <div class=\"row\">
                                    <div class=\"col-md-5 text-center header-img\">
                                        <img src=\"{{ asset('images/img1.png')}}\" alt=\"Free HTML5 Website Template by GetTemplates.co\">
                                    </div>
                                    <div class=\"col-md-7 copy\">
                                        <h1>Paps, votre livraison passe en vitesse supérieure.</h1>
                                        <p>Service de logistique urbaine pour les entreprises et les commerçants.</p>
                                        <p><a href=\"  http://localhost:3000/\" target=\"_blank\" class=\"btn btn-white\">Commencez maintenant</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END .gtco-client -->

        <div class=\"gtco-section gtco-products\">
            <div class=\"gtco-container\">
                <div class=\"row row-pb-sm\">
                    <div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
                        <h2>Nos offres</h2>
                        <p>Paps dispose plusieurs services qu'on peut offrir aux entreprises.</p>
                    </div>
                </div>
                <div class=\"row row-pb-md\">
                    <div class=\"col-md-4 col-sm-4\">
                        <a href=\"{{ path ('service')}}\" class=\"gtco-item two-row bg-img animate-box\" style=\"background-image: url('{{ asset ('images/express.png')}}');background-size: 200px;background-repeat: no-repeat;\">
                        </a>
                        <h3 id=\"cool\">Livraison express</h3>
                        <p><center>Paps peut se charger de vos course dans le plus bref délais.</center></p>

                    </div>
                    <div class=\"col-md-4 col-sm-4\">
                        <a href=\"{{ path ('service')}}\" class=\"gtco-item two-row bg-img animate-box\" style=\"background-image: url('{{ asset ('images/document.png')}}');background-size: 200px;background-repeat: no-repeat;\">
                           
                        </a>
                         <h3 id=\"cool\">Livraison document</h3>
                         <p><center>Nous nous engageons avec vous à préparer, stocker et transmettre tous type de documents.</center></p>
                         
                    </div>
                    <div class=\"col-md-4 col-sm-4\">
                        <a href=\"{{ path ('service')}}\" class=\"gtco-item two-row bg-img animate-box\" style=\"background-image: url('{{ asset ('images/colis.png')}}');background-size: 200px;background-repeat: no-repeat;\">
                          
                        </a>
                         <h3 id=\"cool\">Livraison de colis</h3>
                        <p><center>Paps s'engage à livrer vos colis de manière efficace.</center></p>

                    </div>
                </div>
                
            </div>
        </div>
        <!-- END .gtco-products -->
        <div class=\"gtco-services gtco-section\">
            <div class=\"gtco-container\">
            <div class=\"row row-pb-sm\">
                    <div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
                        <h2>Nos avantages</h2>
                    </div>
                </div>
                <div class=\"row row-pb-sm\">
                    <div class=\"row mdev\">
                        <div class=\"col-md-4 col-sm-4 service-wrap\">
                            <div class=\"service\">
                                <h3><i class=\"fa fa-calendar-check-o\"></i> La livraison</h3>
                                <p>Appuyez sur un bouton et un chauffeur viendra à vous en moins d'une heure pour vous livrer potre commande. <br> Paps est une entreprise de logistique urbaine et dispose des livreurs motivés à vos services.</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-4 service-wrap\">
                            <div class=\"service animate-change\">
                                <h3><i class=\"fa fa-dollar\"></i> Le coût</h3>
                                <p>Gérer toutes vos livraisons d'un endroit où vous pouvez voir les dépenses, les outils de reporting d'accès et économiser sur les coûts logistiques. Vous pouvez faire vos paiements par Orange Money, Carte Bancaire, ou par
                                    espèce.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-4 service-wrap\">
                            <div class=\"service\">
                                <h3><i class=\"fa fa-unlock-alt\"></i> La sécurité</h3>
                                <p>Chaque livraison Paps est couvert par une police d'assurance à partir du moment où vos biens sont entre nos mains. Nos livreurs apportent votre commande jusqu'à chez vous en toute sécurité. </p>
                            </div>
                        </div>

                    </div>
                    
                   
                </div>
                
            </div>
                <div class=\"row\">
                 <div class=\"row row-pb-sm\">
                    <div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
                        <h2>Simplifiez votre vie.</h2>
                        <p>Paps permet également de faire des expéditions en régions. En somme, nous permettons de gagner du temps tout en apportant la transparence nécessaire à sécuriser vos expeditions et collecte.</p>
                    </div>
                </div>
                    <div class=\"col-sm-12  gtco-heading text-center\"> 
                        <iframe width=\"1200\" height=\"550\" src=\"//www.youtube.com/embed/0ciyNxMcLkE?autoplay=0&showinfo=0&controls=0\" frameborder=\"0\" allowfullscreen></iframe>
                        </p>
                    </div>
                    <div class=\"col-sm-12 gto-heading text-center\">
                    <div class=\"row\">
                    <div class=\"col-md-12 text-center\">
                        <p><a href=\"  http://localhost:3000/\" target=\"_blank\" class=\"btn btn-special\">Commencer maintenant</a></p>
                    </div>
                </div>
                    </div>
                </div>
        </div>
        <!-- END .gtco-services -->

\t\t<div class=\"gtco-section gtco-products\">
\t\t\t<div class=\"gtco-container\">
\t\t\t\t<div class=\"row row-pb-sm\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
\t\t\t\t\t\t<h2>Etude de cas</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-pb-md\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<div class=\"gtco-item logo1 bg-img animate-box img-rounded\" id=\"log1\" style=\"background-image: url('{{ asset ('images/index.jpg')}}');background-size: 100px;background-repeat: no-repeat;\">

\t\t\t\t\t\t</div>
                        <div class=\"gtco-item logo1 bg-img animate-box img-rounded\" id=\"log2\" style=\"background-image: url('{{ asset ('images/dhl-paris.jpg')}}');background-size: 100px;background-repeat: no-repeat;\">

\t\t\t\t\t\t</div>
                        <div class=\"gtco-item logo1 bg-img animate-box img-rounded\"nid=\"log3\"  style=\"background-image: url('{{ asset ('images/auchann.jpg')}}');background-size: 100px;background-repeat: no-repeat;\">

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 col-sm-4\" >
\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 service-wrap\" id=\"logo1\">
\t\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t\t<h3> Orange </h3>
\t\t\t\t\t\t\t<p>propos</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t     </div>
                         <div class=\"col-md-12 col-sm-12 service-wrap\" id=\"logo2\">
\t\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t\t<h3> Dhl </h3>
\t\t\t\t\t\t\t<p>propos</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t     </div>
                         <div class=\"col-md-12 col-sm-12 service-wrap\" id=\"logo3\">
\t\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t\t<h3> Auchan </h3>
\t\t\t\t\t\t\t<p>propos</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t     </div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
                
\t\t\t</div>
\t\t</div>
        {# ============== #}
 <script>
\$(document).ready(function(){
        \$(\"#logo1\").show();
        \$(\"#logo2\").hide();
        \$(\"#logo3\").hide();
    \$(\"#log2\").hover(function(){
        \$(\"#logo2\").show().delay(5000);
        \$(\"#logo3\").hide().delay(5000);
        \$(\"#logo1\").hide().delay(5000);

    });
     \$(\"#log3\").hover(function(){
        \$(\"#logo3\").show().delay(5000);
        \$(\"#logo1\").hide().delay(5000);
        \$(\"#logo2\").hide().delay(5000);

    });
      \$(\"#log1\").hover(function(){
        \$(\"#logo1\").show().delay(5000);
        \$(\"#logo2\").hide().delay(5000);
        \$(\"#logo3\").hide().delay(5000);

    });
 
});
</script>



        {# ================ #}

        <div class=\"gtco-section gtco-testimonial gtco-gray\">
            <div class=\"gtco-container\">

                <div class=\"row row-pb-sm\">
                    <div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
                        <h2>Il parle de nous</h2>
                        <p>Paps offre des solutions sur mesure uniques pour le transport de marchandises dans les villes en consolidant et rationalisant les plates-formes logistiques existantes.</p>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 animate-box\">
                        <div class=\"gtco-testimony gtco-left\">
                            <div>
                             <a id=\"lab\" target=\"_blank\" href=\"https://sekou.org/magazine/2017/02/08/paps-premiere-startup-africaine-de-livraison-geolocalisee/\">
                            <img src=\"{{ asset ('images/sekou-logo.png')}}\" alt=\"Free Website template by GetTemplates.co\">
                            </a>
                            </div>
                            <blockquote>
                                <p>&ldquo;Paps entend réinventer la livraison rapide en Afrique. Pour cela, la startup a développé une application de livraison géolocalisée qui sollicite les livreurs les ... &rdquo; <cite class=\"author\">&mdash;Sekou </cite></p>
                            </blockquote>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-sm-6 animate-box\">
                        <div class=\"gtco-testimony gtco-left\">
                            <div>
                            <a id=\"lab\" target=\"_blank\" href=\"https://www.africalogisticsmagazine.com/fr/content/interview-de-m-bamba-lo-directeur-general-de-paps\">
                            <img src=\"{{ asset ('images/logoalm.png')}}\" alt=\"Free Website template by GetTemplates.co\">
                            </a>
                            </div>
                            <blockquote>
                                <p>&ldquo;Bamba LO est un sénégalais de la diaspora qui a décidé de rentrer au Sénégal et de s’installer, il y’a quelques années, après une expérience professionnelle ...&rdquo;
                                    <cite class=\"author\">&mdash; africa logistics magazine</cite></p>
                            </blockquote>
                        </div>
                    </div>


                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 animate-box\">
                        <div class=\"gtco-testimony gtco-left\">
                            <div>
                            <a id=\"lab\" target=\"_blank\" href=\"http://startupbrics.com/africatech-paps-application-livraison-geolocalisee-afrique/#.W3GLfxi2yb-\" >
                            <img src=\"{{ asset ('images/startups-brics.jpg')}}\" alt=\"Free Website template by GetTemplates.co\">
                            </a>
                            </div>
                            <blockquote>
                                <p>&ldquo;Tout est parti d’un constat utilisateur : j’avais à l’époque un centre d’appels qui a été amené à vendre des abonnements téléphoniques. Le taux d’encaissement ....&rdquo;
                                    <cite class=\"author\">&mdash; startupbrics</cite>
                                </p>
                            </blockquote>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-sm-6 animate-box\">
                        <div class=\"gtco-testimony gtco-left\">
                            <div>
                            <a id=\"lab\" target=\"_blank\" href=\"https://www.bbc.com/afrique/region-39673233\">
                            <img src=\"{{ asset ('images/bbc.jpg')}}\" alt=\"Free Website template by GetTemplates.co\">
                            </a>
                            </div>
                            <blockquote>
                                <p>&ldquo;Bamba Lô et son équipe n'en sont pas encore là mais l'expérimentation démarre dans un mois à Dakar. Le fondateur de Paps, l'application de livraison à la demande géolocalisée...&rdquo; <cite class=\"author\">&mdash; BBC</cite></p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{% endblock %}", "@PAPSLivraison/Front/accueil.html.twig", "/var/www/html/papsprojet/src/PAPS/LivraisonBundle/Resources/views/Front/accueil.html.twig");
    }
}
