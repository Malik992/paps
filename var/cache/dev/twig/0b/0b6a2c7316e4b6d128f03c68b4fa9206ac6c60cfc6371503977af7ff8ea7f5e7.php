<?php

/* PAPSLivraisonBundle:Front:index.html.twig */
class __TwigTemplate_2d355dcf78a762a1f09c24c6e256a1f868f1f76da42de016c80216a1dee45379 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PAPSLivraisonBundle:Front:index.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAPSLivraisonBundle:Front:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAPSLivraisonBundle:Front:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.fancybox.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.transitions.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/line-icon.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/device-mockups.min.css"), "html", null, true);
        echo "\">
<script src=\"https://www.gstatic.com/firebasejs/5.4.0/firebase.js\"></script>
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

<script>

  // Initialize Firebase

  var config = {

    apiKey: \"AIzaSyBYFGdCUsdCEBeEzNG4FFI0756H3lScKTI\",

    authDomain: \"paps-internal.firebaseapp.com\",

    databaseURL: \"https://paps-internal.firebaseio.com\",

    projectId: \"paps-internal\",

    storageBucket: \"paps-internal.appspot.com\",

    messagingSenderId: \"407081980027\"

  };

  firebase.initializeApp(config);

</script>
<script>
    var databaseRef = firebase.database().ref('papsers/');
function Message() {
    var email = document.getElementById('email').value;

    var mid = firebase.database().ref().child('papsers').push().key;

    var data = {
        msg_id: mid,
        msg_email: email,
 
\t\tcreatedAt: Date.now()
    }

    var updates = {};
    updates['/papsers/landingPage/'+mid]=data;
    firebase.database().ref().update(updates);
    alert('Votre mail a été bien envoyé!!');
    reload_page();

}
function Message1() {
    var email = document.getElementById('email').value;

    var mid = firebase.database().ref().child('papsers').push().key;

    var data = {
        msg_id: mid,
        msg_email: email,
 
\t\tcreatedAt: Date.now()
    }

    var updates = {};
    updates['/papsers/landingPage/'+mid]=data;
    firebase.database().ref().update(updates);
    alert('Votre mail a été bien envoyé!!');
    reload_page();

}

function reload_page() {
    window.location='http://localhost/papsprojet/web/app_dev.php/accueil';
}

</script>

";
        // line 88
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 92
        echo "<section class=\"banner\" role=\"banner\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mapp.png"), "html", null, true);
        echo "');background-size: 100% 100%;
    background-repeat: no-repeat;position:relative\">
<div class=\"overlay\" style=\"position:absolute;background-color:rgba(60, 57, 162, 0.8);\"></div>
  <div id=\"banner\" class=\"container\">
    <div class=\"col-md-5 col-sm-12  device\"  style=\"background-image: url('";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/iphone.png"), "html", null, true);
        echo "');background-size: 60% auto;
    background-repeat: no-repeat;\"> 
    <img class=\"banner-img img-responsivee\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/shot1.png"), "html", null, true);
        echo "\">
      </div>
     
          <div class=\"col-md-7 col-sm-12 textheader\">
                  <div class=\"banner-text\">
                    <h1>La meilleure experience de <span>livraison</span> en Afrique</h1>
                    <p>Bénéficiez de courses gratuites ce <b> 07 Septembre 2018 </b> partout à Dakar en téléchargeant l'application Paps dont le lien vous sera envoyé par mail.</p>
                  </div> 
          </div>
          <div class=\"col-md-7 col-sm-12  subscribe-form textheader\">

                  <form  name=\"subscribeform\" id=\"subscribeform\" id=\"alert\">
                <input type=\"text\" name=\"email\" placeholder=\"Entrez votre adresse email\" id=\"email\" required />
                <button type=\"button\" onClick=\"Message()\"  class=\"btn btn-white lp\">Envoyer</button>
              </form>
          </div>
          <div class=\"col-md-7 col-sm-12\">
                           <div class=\"banner-btn bouton\">
                            <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/apple-store-btn.png"), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/google-store-btn.png"), "html", null, true);
        echo "\" \tstyle=\"margin-left:20px\">
                          </div>
          </div>
  </div>
</section>
<!-- overview section -->
<section id=\"overview\" class=\"section overview\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-4 col-sm-12 \"> 
      <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/b2c92329aa2b9fc6bbedea1f8ca27faa.svg"), "html", null, true);
        echo "\" style=\"margin-left:50px\" >
        <div class=\"overview-content\">
          <h4> <br>L'application</h4>
          <p>Paps dispose une application très sophistiqué disponible sur Google Play. Téléchargée, faites vos commandes en ligne et Paps se charge de la tâche.</p>
        </div>
      </div>
      <div class=\"col-md-4 col-sm-12 \"> 
     <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/f722a7451a8706adc582d3ed844bb848.svg"), "html", null, true);
        echo "\" style=\"margin-left:50px\">

        <div class=\"overview-content\">
          <h4><br>La livraison</h4>
          <p>Appuyez sur un bouton et un chauffeur viendra à vous en moins d'une heure pour vous livrer potre commande.
Paps est une entreprise de logistique urbaine et dispose des livreurs motivés à vos services.</p>
        </div>
      </div>
      <div class=\"col-md-4 col-sm-12 \"> 
       <img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/d0a66979124d6554385b2f8a5a835586.svg"), "html", null, true);
        echo "\" style=\"margin-left:50px\">
        <div class=\"overview-content\">
          <h4><br>La sécurité</h4>
          <p>Chaque livraison Paps est couvert par une police d'assurance à partir du moment où vos biens sont entre nos mains. Nos livreurs apportent votre commande jusqu'à chez vous en toute sécurité. </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- overview section --> 
<!-- feature section 1 -->
<section id=\"features\" class=\"section features1\">
  <div class=\"container\">
    <div class=\"row features1-content-space\">
      <div class=\"col-md-4 col-sm-12\">
        <div class=\"features1-content left\"> <i class=\"fa fa-id-badge fa-2x\" aria-hidden=\"true\"></i>

          <h4>Commande</h4>
          <p>Vous pouvez passer vos commandes sur l'application. Et vous pouvez suivre la commande en cours de réalisation. </p>
        </div>
        <div class=\"features1-content left\"> <i class=\"fa fa-comments-o fa-2x\"></i>
          <h4>Chat</h4>
          <p>Un espace chat pour parler avec un de nos agents sur l'état de votre commande ou si vous voulez annuler la commande. Ainsi vous aurez des réponses instantanées.</p>
        </div>
      </div>
      <div class=\"col-md-4 col-sm-12 middle\" style=\"bottom: -70px;\" > 
      <img class=\"img-responsive1\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slider1.png"), "html", null, true);
        echo "\" > </div>
      <div class=\"col-md-4 col-sm-12\" style=\"bottom: -40px;\">
        <div class=\"features1-content right\"> 
       <i class=\"fa fa-credit-card fa-2x\" aria-hidden=\"true\"></i>

          <h4>Paiement</h4>
          <p>Le paiement se fera à la livraison. Des codes promos seront disponibles pour des réductions de tarifs.</p>
        </div>
        <div class=\"features1-content right\"> 
        <i class=\" \tfa fa-group fa-2x\" aria-hidden=\"true\"></i>

          <h4>parainage</h4>
          <p>Vous pouvez envoyer un code parainage par message via les réseaux sociaux et bénéficiez tous les deux d'une course gratuite. </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- feature section 1 --> 
<div class=\"container\" id=\"carousel\">
    <div id=\"carouselExample\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"5000\">
        <div class=\"carousel-inner row w-100 mx-auto\" role=\"listbox\" id=\"img-saveurs\">
            <div class=\"carousel-item col-md-3  active\">
               <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <div class=\"thumb\">
                      <img class=\"img-fluid mx-auto d-block img-rounded \" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/shot1.png"), "html", null, true);
        echo "\">
                    </div>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
               <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <div  class=\"thumb\">
                     <img class=\"img-fluid mx-auto d-block img-rounded \" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/shot2.png"), "html", null, true);
        echo "\" >
                    </div>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
               <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <div class=\"thumb\">
                     <img class=\"img-fluid mx-auto d-block img-rounded \" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/shot3.png"), "html", null, true);
        echo "\" >
                    </div>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
                <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <div title=\"image 5\" class=\"thumb\">
                     <img class=\"img-fluid mx-auto d-block img-rounded \" src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/shot4.png"), "html", null, true);
        echo "\" >
                    </div>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
              <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <div class=\"thumb\">
                      <img class=\"img-fluid mx-auto d-block img-rounded \" src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/shot5.png"), "html", null, true);
        echo "\" >
                    </div>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
               <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <div  class=\"thumb\">
                     <img class=\"img-fluid mx-auto d-block img-rounded \" src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/shot2.png"), "html", null, true);
        echo "\" >
                    </div>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
               <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <div class=\"thumb\">
                      <img class=\"img-fluid mx-auto d-block img-rounded \" src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/shot1.png"), "html", null, true);
        echo "\"  >
                    </div>
                  </div>
                </div>
            </div>
    </div>
    </div>
    </div>
    
<!--subscribe section -->
<section id=\"download\" class=\"section subscribe\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
   <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 text-center subscribe-form\">
      <h2>Télécharger gratuitement l'application <span>maintenant!</span></h2>
        <p>Pour bénéficier des livraisons gratuites , envoyez vite votre mail. </p>
        <h3 class=\"subscribe-title\">Nous vous contacterons sur votre boite mail.</h3>
        <!-- subscribe form -->
        <form  name=\"subscribeform\" id=\"subscribeform\" id=\"alert\">
          <input type=\"text\" name=\"email\" placeholder=\"Entrez votre adresse email\" id=\"email\" required />
          <button type=\"button\" onClick=\"Message1()\"  class=\"btn btn-white lp\">Envoyer</button>
        </form>
        <!-- subscribe message -->
        <div id=\"mesaj\"></div>
        <!-- subscribe message --> 
      </div>
      <!-- subscribe form --> 
    </div>
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 text-center\">
        <div  class=\"banner-btn\"> 
        <br><br>
        <img src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/apple-store-btn.png"), "html", null, true);
        echo "\">
         <img src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/google-store-btn.png"), "html", null, true);
        echo "\" style=\"margin-left:20px\">
         </div>
      </div>
    </div>
  </div>
</section>
<!--subscribe section --> 
 <nav class=\"gtco-nav\" role=\"navigation\">
            <div class=\"gtco-container\">

                <div class=\"row\">
                    <div class=\"col-sm-2 col-xs-12\">
                        <div id=\"gtco-logo\">
                            <a href=\"";
        // line 296
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/paps.png"), "html", null, true);
        echo "\" alt=\"Free HTML5 Website Template by GetTemplates.co\"></a>
                        </div>
                    </div>
                    <div class=\"col-xs-10 text-right menu-1\">
                   <ul>
                            <li><a href=\"";
        // line 301
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">ACCUEIL</a></li>
                            <li><a href=\"";
        // line 302
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service");
        echo "\">SERVICES</a></li>
                            <li class=\"dropdown-item\"><a href=\"";
        // line 303
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscoursier");
        echo "\">DEVENIR PAPSER</a></li>

                            <li><a href=\"";
        // line 305
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">A PROPOS</a></li>
                            <li><a href=\"";
        // line 306
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

    // line 317
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 318
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 319
        echo "<script>

\$('#carousel').on('slide.bs.carousel', function (e) {

    var \$e = \$(e.relatedTarget);
    var idx = \$e.index();
    var itemsPerSlide = 4;
    var totalItems = \$('.carousel-item').length;

    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction==\"left\") {
                \$('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                \$('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});
</script>
    <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.subscribe.js"), "html", null, true);
        echo "\"></script>

";
        // line 344
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PAPSLivraisonBundle:Front:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  562 => 344,  557 => 342,  532 => 319,  523 => 318,  506 => 317,  485 => 306,  481 => 305,  476 => 303,  472 => 302,  468 => 301,  458 => 296,  442 => 283,  438 => 282,  402 => 249,  390 => 240,  378 => 231,  366 => 222,  354 => 213,  342 => 204,  330 => 195,  301 => 169,  272 => 143,  260 => 134,  250 => 127,  237 => 117,  233 => 116,  212 => 98,  207 => 96,  199 => 92,  190 => 91,  178 => 88,  99 => 12,  95 => 11,  91 => 10,  87 => 9,  83 => 8,  79 => 7,  75 => 6,  70 => 5,  61 => 3,  44 => 2,  11 => 1,);
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
{% block header %}{% endblock %}
{% block stylesheets %}
{# === #}
<link rel=\"stylesheet\" href=\"{{ asset ('css/jquery.fancybox.css')}}\">
<link rel=\"stylesheet\" href=\"{{ asset ('css/owl.carousel.css')}}\">
<link rel=\"stylesheet\" href=\"{{ asset ('css/owl.transitions.css')}}\">
<link rel=\"stylesheet\" href=\"{{ asset ('css/main.css')}}\">
<link rel=\"stylesheet\" href=\"{{ asset ('css/responsive.css')}}\">
<link rel=\"stylesheet\" href=\"{{ asset ('css/animate.min.css')}}\">
<link rel=\"stylesheet\" href=\"{{ asset ('css/line-icon.css')}}\">
<link rel=\"stylesheet\" href=\"{{ asset ('css/device-mockups.min.css')}}\">
<script src=\"https://www.gstatic.com/firebasejs/5.4.0/firebase.js\"></script>
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

<script>

  // Initialize Firebase

  var config = {

    apiKey: \"AIzaSyBYFGdCUsdCEBeEzNG4FFI0756H3lScKTI\",

    authDomain: \"paps-internal.firebaseapp.com\",

    databaseURL: \"https://paps-internal.firebaseio.com\",

    projectId: \"paps-internal\",

    storageBucket: \"paps-internal.appspot.com\",

    messagingSenderId: \"407081980027\"

  };

  firebase.initializeApp(config);

</script>
<script>
    var databaseRef = firebase.database().ref('papsers/');
function Message() {
    var email = document.getElementById('email').value;

    var mid = firebase.database().ref().child('papsers').push().key;

    var data = {
        msg_id: mid,
        msg_email: email,
 
\t\tcreatedAt: Date.now()
    }

    var updates = {};
    updates['/papsers/landingPage/'+mid]=data;
    firebase.database().ref().update(updates);
    alert('Votre mail a été bien envoyé!!');
    reload_page();

}
function Message1() {
    var email = document.getElementById('email').value;

    var mid = firebase.database().ref().child('papsers').push().key;

    var data = {
        msg_id: mid,
        msg_email: email,
 
\t\tcreatedAt: Date.now()
    }

    var updates = {};
    updates['/papsers/landingPage/'+mid]=data;
    firebase.database().ref().update(updates);
    alert('Votre mail a été bien envoyé!!');
    reload_page();

}

function reload_page() {
    window.location='http://localhost/papsprojet/web/app_dev.php/accueil';
}

</script>

{{ parent ()}}
{% endblock %}

{% block body %}
<section class=\"banner\" role=\"banner\" style=\"background-image: url('{{ asset ('images/mapp.png')}}');background-size: 100% 100%;
    background-repeat: no-repeat;position:relative\">
<div class=\"overlay\" style=\"position:absolute;background-color:rgba(60, 57, 162, 0.8);\"></div>
  <div id=\"banner\" class=\"container\">
    <div class=\"col-md-5 col-sm-12  device\"  style=\"background-image: url('{{ asset ('images/iphone.png')}}');background-size: 60% auto;
    background-repeat: no-repeat;\"> 
    <img class=\"banner-img img-responsivee\" src=\"{{ asset ('images/shot1.png')}}\">
      </div>
     
          <div class=\"col-md-7 col-sm-12 textheader\">
                  <div class=\"banner-text\">
                    <h1>La meilleure experience de <span>livraison</span> en Afrique</h1>
                    <p>Bénéficiez de courses gratuites ce <b> 07 Septembre 2018 </b> partout à Dakar en téléchargeant l'application Paps dont le lien vous sera envoyé par mail.</p>
                  </div> 
          </div>
          <div class=\"col-md-7 col-sm-12  subscribe-form textheader\">

                  <form  name=\"subscribeform\" id=\"subscribeform\" id=\"alert\">
                <input type=\"text\" name=\"email\" placeholder=\"Entrez votre adresse email\" id=\"email\" required />
                <button type=\"button\" onClick=\"Message()\"  class=\"btn btn-white lp\">Envoyer</button>
              </form>
          </div>
          <div class=\"col-md-7 col-sm-12\">
                           <div class=\"banner-btn bouton\">
                            <img src=\"{{ asset ('images/apple-store-btn.png')}}\">
                            <img src=\"{{ asset ('images/google-store-btn.png')}}\" \tstyle=\"margin-left:20px\">
                          </div>
          </div>
  </div>
</section>
<!-- overview section -->
<section id=\"overview\" class=\"section overview\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-4 col-sm-12 \"> 
      <img src=\"{{ asset ('images/b2c92329aa2b9fc6bbedea1f8ca27faa.svg')}}\" style=\"margin-left:50px\" >
        <div class=\"overview-content\">
          <h4> <br>L'application</h4>
          <p>Paps dispose une application très sophistiqué disponible sur Google Play. Téléchargée, faites vos commandes en ligne et Paps se charge de la tâche.</p>
        </div>
      </div>
      <div class=\"col-md-4 col-sm-12 \"> 
     <img src=\"{{ asset ('images/f722a7451a8706adc582d3ed844bb848.svg')}}\" style=\"margin-left:50px\">

        <div class=\"overview-content\">
          <h4><br>La livraison</h4>
          <p>Appuyez sur un bouton et un chauffeur viendra à vous en moins d'une heure pour vous livrer potre commande.
Paps est une entreprise de logistique urbaine et dispose des livreurs motivés à vos services.</p>
        </div>
      </div>
      <div class=\"col-md-4 col-sm-12 \"> 
       <img src=\"{{ asset ('images/d0a66979124d6554385b2f8a5a835586.svg')}}\" style=\"margin-left:50px\">
        <div class=\"overview-content\">
          <h4><br>La sécurité</h4>
          <p>Chaque livraison Paps est couvert par une police d'assurance à partir du moment où vos biens sont entre nos mains. Nos livreurs apportent votre commande jusqu'à chez vous en toute sécurité. </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- overview section --> 
<!-- feature section 1 -->
<section id=\"features\" class=\"section features1\">
  <div class=\"container\">
    <div class=\"row features1-content-space\">
      <div class=\"col-md-4 col-sm-12\">
        <div class=\"features1-content left\"> <i class=\"fa fa-id-badge fa-2x\" aria-hidden=\"true\"></i>

          <h4>Commande</h4>
          <p>Vous pouvez passer vos commandes sur l'application. Et vous pouvez suivre la commande en cours de réalisation. </p>
        </div>
        <div class=\"features1-content left\"> <i class=\"fa fa-comments-o fa-2x\"></i>
          <h4>Chat</h4>
          <p>Un espace chat pour parler avec un de nos agents sur l'état de votre commande ou si vous voulez annuler la commande. Ainsi vous aurez des réponses instantanées.</p>
        </div>
      </div>
      <div class=\"col-md-4 col-sm-12 middle\" style=\"bottom: -70px;\" > 
      <img class=\"img-responsive1\" src=\"{{ asset ('images/slider1.png')}}\" > </div>
      <div class=\"col-md-4 col-sm-12\" style=\"bottom: -40px;\">
        <div class=\"features1-content right\"> 
       <i class=\"fa fa-credit-card fa-2x\" aria-hidden=\"true\"></i>

          <h4>Paiement</h4>
          <p>Le paiement se fera à la livraison. Des codes promos seront disponibles pour des réductions de tarifs.</p>
        </div>
        <div class=\"features1-content right\"> 
        <i class=\" \tfa fa-group fa-2x\" aria-hidden=\"true\"></i>

          <h4>parainage</h4>
          <p>Vous pouvez envoyer un code parainage par message via les réseaux sociaux et bénéficiez tous les deux d'une course gratuite. </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- feature section 1 --> 
<div class=\"container\" id=\"carousel\">
    <div id=\"carouselExample\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"5000\">
        <div class=\"carousel-inner row w-100 mx-auto\" role=\"listbox\" id=\"img-saveurs\">
            <div class=\"carousel-item col-md-3  active\">
               <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <div class=\"thumb\">
                      <img class=\"img-fluid mx-auto d-block img-rounded \" src=\"{{ asset ('images/shot1.png')}}\">
                    </div>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
               <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <div  class=\"thumb\">
                     <img class=\"img-fluid mx-auto d-block img-rounded \" src=\"{{ asset ('images/shot2.png')}}\" >
                    </div>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
               <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <div class=\"thumb\">
                     <img class=\"img-fluid mx-auto d-block img-rounded \" src=\"{{ asset ('images/shot3.png')}}\" >
                    </div>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
                <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <div title=\"image 5\" class=\"thumb\">
                     <img class=\"img-fluid mx-auto d-block img-rounded \" src=\"{{ asset ('images/shot4.png')}}\" >
                    </div>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
              <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <div class=\"thumb\">
                      <img class=\"img-fluid mx-auto d-block img-rounded \" src=\"{{ asset ('images/shot5.png')}}\" >
                    </div>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
               <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <div  class=\"thumb\">
                     <img class=\"img-fluid mx-auto d-block img-rounded \" src=\"{{ asset ('images/shot2.png')}}\" >
                    </div>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
               <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <div class=\"thumb\">
                      <img class=\"img-fluid mx-auto d-block img-rounded \" src=\"{{ asset ('images/shot1.png')}}\"  >
                    </div>
                  </div>
                </div>
            </div>
    </div>
    </div>
    </div>
    
<!--subscribe section -->
<section id=\"download\" class=\"section subscribe\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
   <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 text-center subscribe-form\">
      <h2>Télécharger gratuitement l'application <span>maintenant!</span></h2>
        <p>Pour bénéficier des livraisons gratuites , envoyez vite votre mail. </p>
        <h3 class=\"subscribe-title\">Nous vous contacterons sur votre boite mail.</h3>
        <!-- subscribe form -->
        <form  name=\"subscribeform\" id=\"subscribeform\" id=\"alert\">
          <input type=\"text\" name=\"email\" placeholder=\"Entrez votre adresse email\" id=\"email\" required />
          <button type=\"button\" onClick=\"Message1()\"  class=\"btn btn-white lp\">Envoyer</button>
        </form>
        <!-- subscribe message -->
        <div id=\"mesaj\"></div>
        <!-- subscribe message --> 
      </div>
      <!-- subscribe form --> 
    </div>
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 text-center\">
        <div  class=\"banner-btn\"> 
        <br><br>
        <img src=\"{{ asset ('images/apple-store-btn.png')}}\">
         <img src=\"{{ asset ('images/google-store-btn.png')}}\" style=\"margin-left:20px\">
         </div>
      </div>
    </div>
  </div>
</section>
<!--subscribe section --> 
 <nav class=\"gtco-nav\" role=\"navigation\">
            <div class=\"gtco-container\">

                <div class=\"row\">
                    <div class=\"col-sm-2 col-xs-12\">
                        <div id=\"gtco-logo\">
                            <a href=\"{{ path ('index')}}\"><img src=\"{{ asset ('images/paps.png') }}\" alt=\"Free HTML5 Website Template by GetTemplates.co\"></a>
                        </div>
                    </div>
                    <div class=\"col-xs-10 text-right menu-1\">
                   <ul>
                            <li><a href=\"{{ path ('index')}}\">ACCUEIL</a></li>
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
{% block footer %}{% endblock %}
{% block javascripts %}
<script>

\$('#carousel').on('slide.bs.carousel', function (e) {

    var \$e = \$(e.relatedTarget);
    var idx = \$e.index();
    var itemsPerSlide = 4;
    var totalItems = \$('.carousel-item').length;

    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction==\"left\") {
                \$('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                \$('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});
</script>
    <script src=\"{{ asset('js/jquery.subscribe.js')}}\"></script>

{{ parent ()}}
{% endblock %}
", "PAPSLivraisonBundle:Front:index.html.twig", "/var/www/html/papsprojet/src/PAPS/LivraisonBundle/Resources/views/Front/index.html.twig");
    }
}
