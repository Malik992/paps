<?php

/* @PAPSLivraison/Front/inscoursier.html.twig */
class __TwigTemplate_1bb21c6a2bb7186bbefe7c89da2db874d3a0d2a667d2a740d8bacaad74a65b13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@PAPSLivraison/Front/inscoursier.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PAPSLivraison/Front/inscoursier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PAPSLivraison/Front/inscoursier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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
        echo "<script src=\"https://www.gstatic.com/firebasejs/5.4.0/firebase.js\"></script>

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
    var nomComplet = document.getElementById('nomComplet').value;
    var tel = document.getElementById('tel').value;
    var adress = document.getElementById('adress').value;
    var numPermis = document.getElementById('numPermis').value;

    var mid = firebase.database().ref().child('papsers').push().key;

    var data = {
        msg_id: mid,
        msg_nomComplet: nomComplet,
        msg_tel: tel,
        msg_adress: adress,
        msg_numPermis: numPermis,
\t\tcreatedAt: Date.now()
    }

    var updates = {};
    updates['/papsers/souscriptions/'+mid]=data;
    firebase.database().ref().update(updates);
    alert('Vous venez de postuler pour devenir Papser. Nous vous contactons !!');
    reload_page();

}

function reload_page() {
    window.location='http://localhost/papsprojet/web/app_dev.php/inscoursier';
}

</script>
";
        // line 60
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 64
        echo "<header id=\"gtco-header\" class=\"gtco-cover gtco-cover-xs gtco-inner\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Papsweb1d.jpg"), "html", null, true);
        echo "');background-size: 100% auto;background-repeat: no-repeat;\"  role=\"banner\">
\t\t\t<div class=\"gtco-container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-md-offset-0 text-left\">
\t\t\t\t\t\t<div class=\"display-t\">
\t\t\t\t\t\t\t<div class=\"display-tc\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 nav-text\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"no-margin\">Nos Papseurs</h1>
\t\t\t\t\t\t\t\t\t\t<p>Joignez-vous à une communauté de soutien des pilotes indépendants <br>et profiter des horaires flexibles et des salaires compétitifs.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t<!-- END #gtco-header -->

\t\t<div class=\"gtco-services gtco-section\">
\t\t\t<div class=\"gtco-container\">
\t\t\t\t<div class=\"row row-pb-sm\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
\t\t\t\t\t\t<h2>Bienvenue à l'academie de Paps.</h2>
\t\t\t\t\t\t<p>Nous disposons d'une academie pour la formation des Papseurs.</p>
\t\t\t\t\t\t<p><button type=\"button\" class=\"btn btn-special\" data-toggle=\"modal\" data-target=\"#exampleModal\">S'inscrire</button></p>
                        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
      ";
        // line 101
        echo "\t\t\t<h2>Inscrivez vous</h2>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12\">
\t\t\t\t\t <form id=\"alert\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"name\" id=\"lab\" >Nom et prénom </label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"nomComplet\" name=\"nomComplet\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"tel\" id=\"lab\">Numéro téléphone</label>
\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"tel\" name=\"tel\" required>
\t\t\t\t\t\t\t</div>
              \t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"adress\" id=\"lab\">Adresse</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"adress\" name=\"adress\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"number\" id=\"lab\">Numéro de permis</label>
\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"numPermis\" name=\"numPermis\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t  \t\t\t\t<button type=\"button\" class=\"btn btn-default submit\" onClick=\"Message()\" ><i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>Envoyer</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
            <hr class=\"colorgraph\">
\t\t</form>
      </div>
     
    </div>
  </div>
</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-pb-md\">

\t\t\t\t\t<div class=\"col-md-4 col-sm-4 service-wrap\">
\t\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t\t<h3><i class=\"fa fa-handshake-o\"></i> Rencontre </h3>
\t\t\t\t\t\t\t<p>Rencontrer le candidat en personne permet de valider
\t\t\t\t\t\t\t ses compétences. Le ton de la discussion permet également d’observer 
\t\t\t\t\t\t\t  et de juger la personne par rapport à nos critères.  </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-4 service-wrap\">
\t\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t\t<h3><i class=\"fa fa-comments-o\"></i> Discussions</h3>
\t\t\t\t\t\t\t<p>L’échange permet de déterminer si le postulant a le 
\t\t\t\t\t\t\t savoir requis pour le poste. C’est lors de ce face-à-face qu’il est possible de 
\t\t\t\t\t\t\t lui poser des questions et de s’intéresser à son savoir-faire et son savoir-être.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-4 service-wrap\">
\t\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t\t<h3><i class=\"fa fa-thumbs-o-up\"></i> Validation</h3>
\t\t\t\t\t\t\t<p>Si l'entretien a réussi, Paps vous contacte pour venir voir l'environnement
\t\t\t\t\t\t\t de l'entreprise.</p>
\t\t\t\t\t\t\t<br><br><br><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix visible-md-block visible-sm-block\"></div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- END .gtco-services -->


\t\t<div class=\"gtco-section gtco-products\">
\t\t\t<div class=\"gtco-container\">
\t\t\t\t<div class=\"row row-pb-sm\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
\t\t\t\t\t\t<h2>Devenir papseur</h2>
\t\t\t\t\t\t<p>Suite à votre entretien, Paps propose une fonction idéale aux candidats.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-pb-md\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<div class=\"gtco-item two-row bg-img animate-box img-rounded \" style=\"background-image: url('";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/DSC_0121.JPG"), "html", null, true);
        echo "')\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/img_2.jpg"), "html", null, true);
        echo "\" class=\"hidden\" alt=\"Free HTML5 Website Template by GetTemplates.co\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<div class=\"gtco-item two-row bg-img animate-box img-rounded\" style=\"background-image: url('";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/DSC_0114.JPG"), "html", null, true);
        echo "')\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/img_3.jpg"), "html", null, true);
        echo "\" class=\"hidden\" alt=\"Free HTML5 Website Template by GetTemplates.co\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<div class=\"gtco-item two-row bg-img animate-box img-rounded\" style=\"background-image: url('";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/DSC_0125.JPG"), "html", null, true);
        echo "')\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/img_4.jpg"), "html", null, true);
        echo "\" class=\"hidden\" alt=\"Free HTML5 Website Template by GetTemplates.co\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<!-- END .gtco-products -->

\t\t<div class=\"gtco-section gtco-testimonial gtco-gray\">
\t\t\t<div class=\"gtco-container\">

\t\t\t\t<div class=\"row row-pb-sm\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
\t\t\t\t\t\t<h2>Ils aiment ce que l'on fait</h2>
\t\t\t\t\t\t<p>Paps, met à disposition des personnes motivées et ambitieuses.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-sm-6 animate-box\">
\t\t\t\t\t\t<div class=\"gtco-testimony gtco-left\">
\t\t\t\t\t\t\t<div><img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/person_1.jpg"), "html", null, true);
        echo "\" alt=\"Free Website template by GetTemplates.co\"></div>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>&ldquo;Travailler chez Paps est un réel plaisir.Nous travaillons quotidiennement avec une diversité de clients d'horizons très divers. C'est une vraie source de motivation au quotidien.&rdquo; <cite class=\"author\">&mdash; Moustapha</cite></p>
\t\t\t\t\t\t\t</blockquote>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 col-sm-6 animate-box\">
\t\t\t\t\t\t<div class=\"gtco-testimony gtco-left\">
\t\t\t\t\t\t\t<div><img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/person_2.jpg"), "html", null, true);
        echo "\" alt=\"Free Website template by GetTemplates.co\"></div>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>&ldquo;Rejoindre Paps c'est évoluer dans un écosystème privilégié pour apprendre, développer ses compétences et sa carrière.Tous les salariès sont impliqués au coeur du projet et peuvent mesurer l'impact de leur travail.&rdquo; <cite class=\"author\">&mdash; Marème</cite></p>
\t\t\t\t\t\t\t</blockquote>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-sm-6 animate-box\">
\t\t\t\t\t\t<div class=\"gtco-testimony gtco-left\">
\t\t\t\t\t\t\t<div><img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/person_3.jpg"), "html", null, true);
        echo "\" alt=\"Free Website template by GetTemplates.co\"></div>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>&ldquo;L'équipe tech est à la pointe de l'innovation ! Nous utilisons des langages de pointe pour construire notre plateforme technologique.Nous participons régulièrement aux événements les plus attendus de la scène tech.&rdquo; <cite class=\"author\">&mdash; Malik</cite></p>
\t\t\t\t\t\t\t</blockquote>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 col-sm-6 animate-box\">
\t\t\t\t\t\t<div class=\"gtco-testimony gtco-left\">
\t\t\t\t\t\t\t<div><img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/person_4.jpg"), "html", null, true);
        echo "\" alt=\"Free Website template by GetTemplates.co\"></div>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>&ldquo;L'équipe des opérations est animée par un esprit entrepreneurial et la prise d'initiatives est fortement encouragée.Il y a une vraie émulation entre collaborateurs et une volonté partagée de réussir tous ensemble.&rdquo; <cite class=\"author\">&mdash; Mor</cite></p>
\t\t\t\t\t\t\t</blockquote>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PAPSLivraison/Front/inscoursier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 247,  333 => 238,  318 => 226,  306 => 217,  281 => 195,  276 => 193,  269 => 189,  264 => 187,  257 => 183,  252 => 181,  170 => 101,  130 => 64,  121 => 63,  109 => 60,  50 => 3,  41 => 2,  11 => 1,);
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
{% block stylesheets %}
<script src=\"https://www.gstatic.com/firebasejs/5.4.0/firebase.js\"></script>

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
    var nomComplet = document.getElementById('nomComplet').value;
    var tel = document.getElementById('tel').value;
    var adress = document.getElementById('adress').value;
    var numPermis = document.getElementById('numPermis').value;

    var mid = firebase.database().ref().child('papsers').push().key;

    var data = {
        msg_id: mid,
        msg_nomComplet: nomComplet,
        msg_tel: tel,
        msg_adress: adress,
        msg_numPermis: numPermis,
\t\tcreatedAt: Date.now()
    }

    var updates = {};
    updates['/papsers/souscriptions/'+mid]=data;
    firebase.database().ref().update(updates);
    alert('Vous venez de postuler pour devenir Papser. Nous vous contactons !!');
    reload_page();

}

function reload_page() {
    window.location='http://localhost/papsprojet/web/app_dev.php/inscoursier';
}

</script>
{{ parent()}}
{% endblock %}

{% block body %}
<header id=\"gtco-header\" class=\"gtco-cover gtco-cover-xs gtco-inner\" style=\"background-image: url('{{ asset ('images/Papsweb1d.jpg')}}');background-size: 100% auto;background-repeat: no-repeat;\"  role=\"banner\">
\t\t\t<div class=\"gtco-container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-md-offset-0 text-left\">
\t\t\t\t\t\t<div class=\"display-t\">
\t\t\t\t\t\t\t<div class=\"display-tc\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 nav-text\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"no-margin\">Nos Papseurs</h1>
\t\t\t\t\t\t\t\t\t\t<p>Joignez-vous à une communauté de soutien des pilotes indépendants <br>et profiter des horaires flexibles et des salaires compétitifs.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t<!-- END #gtco-header -->

\t\t<div class=\"gtco-services gtco-section\">
\t\t\t<div class=\"gtco-container\">
\t\t\t\t<div class=\"row row-pb-sm\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
\t\t\t\t\t\t<h2>Bienvenue à l'academie de Paps.</h2>
\t\t\t\t\t\t<p>Nous disposons d'une academie pour la formation des Papseurs.</p>
\t\t\t\t\t\t<p><button type=\"button\" class=\"btn btn-special\" data-toggle=\"modal\" data-target=\"#exampleModal\">S'inscrire</button></p>
                        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
      {# ========== #}
\t\t\t<h2>Inscrivez vous</h2>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12\">
\t\t\t\t\t <form id=\"alert\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"name\" id=\"lab\" >Nom et prénom </label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"nomComplet\" name=\"nomComplet\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"tel\" id=\"lab\">Numéro téléphone</label>
\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"tel\" name=\"tel\" required>
\t\t\t\t\t\t\t</div>
              \t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"adress\" id=\"lab\">Adresse</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"adress\" name=\"adress\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"number\" id=\"lab\">Numéro de permis</label>
\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"numPermis\" name=\"numPermis\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t  \t\t\t\t<button type=\"button\" class=\"btn btn-default submit\" onClick=\"Message()\" ><i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>Envoyer</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
            <hr class=\"colorgraph\">
\t\t</form>
      </div>
     
    </div>
  </div>
</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-pb-md\">

\t\t\t\t\t<div class=\"col-md-4 col-sm-4 service-wrap\">
\t\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t\t<h3><i class=\"fa fa-handshake-o\"></i> Rencontre </h3>
\t\t\t\t\t\t\t<p>Rencontrer le candidat en personne permet de valider
\t\t\t\t\t\t\t ses compétences. Le ton de la discussion permet également d’observer 
\t\t\t\t\t\t\t  et de juger la personne par rapport à nos critères.  </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-4 service-wrap\">
\t\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t\t<h3><i class=\"fa fa-comments-o\"></i> Discussions</h3>
\t\t\t\t\t\t\t<p>L’échange permet de déterminer si le postulant a le 
\t\t\t\t\t\t\t savoir requis pour le poste. C’est lors de ce face-à-face qu’il est possible de 
\t\t\t\t\t\t\t lui poser des questions et de s’intéresser à son savoir-faire et son savoir-être.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-4 service-wrap\">
\t\t\t\t\t\t<div class=\"service\">
\t\t\t\t\t\t\t<h3><i class=\"fa fa-thumbs-o-up\"></i> Validation</h3>
\t\t\t\t\t\t\t<p>Si l'entretien a réussi, Paps vous contacte pour venir voir l'environnement
\t\t\t\t\t\t\t de l'entreprise.</p>
\t\t\t\t\t\t\t<br><br><br><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix visible-md-block visible-sm-block\"></div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- END .gtco-services -->


\t\t<div class=\"gtco-section gtco-products\">
\t\t\t<div class=\"gtco-container\">
\t\t\t\t<div class=\"row row-pb-sm\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
\t\t\t\t\t\t<h2>Devenir papseur</h2>
\t\t\t\t\t\t<p>Suite à votre entretien, Paps propose une fonction idéale aux candidats.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-pb-md\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<div class=\"gtco-item two-row bg-img animate-box img-rounded \" style=\"background-image: url('{{ asset ('images/DSC_0121.JPG')}}')\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<img src=\"{{ asset('images/img_2.jpg')}}\" class=\"hidden\" alt=\"Free HTML5 Website Template by GetTemplates.co\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<div class=\"gtco-item two-row bg-img animate-box img-rounded\" style=\"background-image: url('{{ asset ('images/DSC_0114.JPG')}}')\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<img src=\"{{ asset('images/img_3.jpg')}}\" class=\"hidden\" alt=\"Free HTML5 Website Template by GetTemplates.co\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<div class=\"gtco-item two-row bg-img animate-box img-rounded\" style=\"background-image: url('{{ asset ('images/DSC_0125.JPG')}}')\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<img src=\"{{ asset('images/img_4.jpg')}}\" class=\"hidden\" alt=\"Free HTML5 Website Template by GetTemplates.co\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<!-- END .gtco-products -->

\t\t<div class=\"gtco-section gtco-testimonial gtco-gray\">
\t\t\t<div class=\"gtco-container\">

\t\t\t\t<div class=\"row row-pb-sm\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
\t\t\t\t\t\t<h2>Ils aiment ce que l'on fait</h2>
\t\t\t\t\t\t<p>Paps, met à disposition des personnes motivées et ambitieuses.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-sm-6 animate-box\">
\t\t\t\t\t\t<div class=\"gtco-testimony gtco-left\">
\t\t\t\t\t\t\t<div><img src=\"{{ asset ('images/person_1.jpg')}}\" alt=\"Free Website template by GetTemplates.co\"></div>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>&ldquo;Travailler chez Paps est un réel plaisir.Nous travaillons quotidiennement avec une diversité de clients d'horizons très divers. C'est une vraie source de motivation au quotidien.&rdquo; <cite class=\"author\">&mdash; Moustapha</cite></p>
\t\t\t\t\t\t\t</blockquote>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 col-sm-6 animate-box\">
\t\t\t\t\t\t<div class=\"gtco-testimony gtco-left\">
\t\t\t\t\t\t\t<div><img src=\"{{ asset ('images/person_2.jpg')}}\" alt=\"Free Website template by GetTemplates.co\"></div>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>&ldquo;Rejoindre Paps c'est évoluer dans un écosystème privilégié pour apprendre, développer ses compétences et sa carrière.Tous les salariès sont impliqués au coeur du projet et peuvent mesurer l'impact de leur travail.&rdquo; <cite class=\"author\">&mdash; Marème</cite></p>
\t\t\t\t\t\t\t</blockquote>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-sm-6 animate-box\">
\t\t\t\t\t\t<div class=\"gtco-testimony gtco-left\">
\t\t\t\t\t\t\t<div><img src=\"{{ asset ('images/person_3.jpg')}}\" alt=\"Free Website template by GetTemplates.co\"></div>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>&ldquo;L'équipe tech est à la pointe de l'innovation ! Nous utilisons des langages de pointe pour construire notre plateforme technologique.Nous participons régulièrement aux événements les plus attendus de la scène tech.&rdquo; <cite class=\"author\">&mdash; Malik</cite></p>
\t\t\t\t\t\t\t</blockquote>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 col-sm-6 animate-box\">
\t\t\t\t\t\t<div class=\"gtco-testimony gtco-left\">
\t\t\t\t\t\t\t<div><img src=\"{{ asset ('images/person_4.jpg')}}\" alt=\"Free Website template by GetTemplates.co\"></div>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>&ldquo;L'équipe des opérations est animée par un esprit entrepreneurial et la prise d'initiatives est fortement encouragée.Il y a une vraie émulation entre collaborateurs et une volonté partagée de réussir tous ensemble.&rdquo; <cite class=\"author\">&mdash; Mor</cite></p>
\t\t\t\t\t\t\t</blockquote>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
{% endblock %}", "@PAPSLivraison/Front/inscoursier.html.twig", "/var/www/html/papsprojet/src/PAPS/LivraisonBundle/Resources/views/Front/inscoursier.html.twig");
    }
}
