<?php

/* :default:contratt.html.twig */
class __TwigTemplate_ca9ef0d28bc7237c560ab93aad54c21e9a019a43ac5794d5b0c68b8a186c1832 extends Twig_Template
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
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return ":default:contratt.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 40,  76 => 37,  73 => 36,  38 => 3,  35 => 2,  31 => 95,  29 => 36,  26 => 35,  24 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:contratt.html.twig", "/var/www/html/papsprojet/app/Resources/views/default/contratt.html.twig");
    }
}
