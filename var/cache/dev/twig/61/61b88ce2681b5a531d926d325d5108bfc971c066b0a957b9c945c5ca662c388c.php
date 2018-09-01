<?php

/* :default:contratt.html.twig */
class __TwigTemplate_cdcd8ab9818ac5915e170587f656b12e311ee319df11fda1ac0afaebfae33fa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:contratt.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:contratt.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "<body>
";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 95
        echo "</body>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<style>
body {
    font-family: \"Raleway\", Arial, sans-serif;
    font-weight: 400;
    font-size: 16px;
    line-height: 1.7;
    background: #fff;
    color: gray;
}

#page {
    position: relative;
    overflow-x: hidden;
    width: 100%;
    height: 100%;
    -webkit-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
}
#titre{
    margin-left: 400px;
}
#gtco-logo {
    margin-left: 45%;
}
.text {
    color : black;
    padding-left: 100px;
     padding-right: 100px;
}
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo " <div id=\"page\">
<div class=\"row\">
                    <div class=\"col-sm-2 col-xs-12\">
                            <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" style=\"width:60px\">
                      
                    </div>
                    <div class=\"col-sm-8 col-xs-12\">
                        <h3 id=\"titre\"> Contrat de votre commande </h3>
                    </div>
</div>
<div class=\"row\">
       
            <div class=\"col-sm-2 text-truncate text\">
               
                <p> <big>M. / Mme </big> _____________ </p>
                <p><big> Adresse </big> _____________ </p>
                <p>
                
                Paps se charge de prendre des colis sur _________ pour le livrer à __________________, précisément de <br>
                _____________ à __________________.
               <h5> ARTICLE 1 : Obligations de l'expediteur</h5>
               <ul>
                        <li>L’expéditeur s’engage à fournir au voyageur toutes les informations utiles à la bonne
                        exécution de l’acheminement du colis. A ce titre, le client devra fournir au voyageur qui le
                        demande, tout renseignement lui permettant d’avoir, notamment, une bonne connaissance
                        du besoin de l’expéditeur et de l’utilité que le service représente pour lui.</li>
                        <li>L’expéditeur s’engage aussi à collaborer pleinement avec le voyageur en vue du bon
                        déroulement du transport et de la livraison du colis.</li>
                        <li>L’expéditeur s’engage à payer le prix de la prestation pour un montant et dans le(s) délai(s)
                        prévus par le présent contrat.</li>
               </ul>
                <h5>ARTICLE 2 : Delais</h5>
                <ul>
                       <li>Le voyageur s’engage à exécuter sa prestation dans un délai de __________ à compter de la date de
                       signature du présent contrat.</li>
                </ul>
                <h5> ARTICLE 3 : Le paiement</h5>
                
                    Le paiement de la prestation s’effectuera, au choix des 2 parties, par le moyen de paiement suivant :
                    <ul>

                    <li>Paiement cash </li>
                    <li>Paiement par Orange Money</li>
                    </ul>
                    Ainsi, le montant à payer est de : ___________ fr cfa
                
                 </p>

            </div>
            
           


</div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":default:contratt.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  111 => 40,  106 => 37,  97 => 36,  56 => 3,  47 => 2,  37 => 95,  35 => 36,  32 => 35,  30 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block stylesheets %}
<style>
body {
    font-family: \"Raleway\", Arial, sans-serif;
    font-weight: 400;
    font-size: 16px;
    line-height: 1.7;
    background: #fff;
    color: gray;
}

#page {
    position: relative;
    overflow-x: hidden;
    width: 100%;
    height: 100%;
    -webkit-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
}
#titre{
    margin-left: 400px;
}
#gtco-logo {
    margin-left: 45%;
}
.text {
    color : black;
    padding-left: 100px;
     padding-right: 100px;
}
</style>
{% endblock %}
<body>
{% block body %}
 <div id=\"page\">
<div class=\"row\">
                    <div class=\"col-sm-2 col-xs-12\">
                            <img src=\"{{asset ('images/logo.png') }}\" style=\"width:60px\">
                      
                    </div>
                    <div class=\"col-sm-8 col-xs-12\">
                        <h3 id=\"titre\"> Contrat de votre commande </h3>
                    </div>
</div>
<div class=\"row\">
       
            <div class=\"col-sm-2 text-truncate text\">
               
                <p> <big>M. / Mme </big> _____________ </p>
                <p><big> Adresse </big> _____________ </p>
                <p>
                
                Paps se charge de prendre des colis sur _________ pour le livrer à __________________, précisément de <br>
                _____________ à __________________.
               <h5> ARTICLE 1 : Obligations de l'expediteur</h5>
               <ul>
                        <li>L’expéditeur s’engage à fournir au voyageur toutes les informations utiles à la bonne
                        exécution de l’acheminement du colis. A ce titre, le client devra fournir au voyageur qui le
                        demande, tout renseignement lui permettant d’avoir, notamment, une bonne connaissance
                        du besoin de l’expéditeur et de l’utilité que le service représente pour lui.</li>
                        <li>L’expéditeur s’engage aussi à collaborer pleinement avec le voyageur en vue du bon
                        déroulement du transport et de la livraison du colis.</li>
                        <li>L’expéditeur s’engage à payer le prix de la prestation pour un montant et dans le(s) délai(s)
                        prévus par le présent contrat.</li>
               </ul>
                <h5>ARTICLE 2 : Delais</h5>
                <ul>
                       <li>Le voyageur s’engage à exécuter sa prestation dans un délai de __________ à compter de la date de
                       signature du présent contrat.</li>
                </ul>
                <h5> ARTICLE 3 : Le paiement</h5>
                
                    Le paiement de la prestation s’effectuera, au choix des 2 parties, par le moyen de paiement suivant :
                    <ul>

                    <li>Paiement cash </li>
                    <li>Paiement par Orange Money</li>
                    </ul>
                    Ainsi, le montant à payer est de : ___________ fr cfa
                
                 </p>

            </div>
            
           


</div>
</div>


{% endblock %}
</body>", ":default:contratt.html.twig", "/var/www/html/papsprojet/app/Resources/views/default/contratt.html.twig");
    }
}
