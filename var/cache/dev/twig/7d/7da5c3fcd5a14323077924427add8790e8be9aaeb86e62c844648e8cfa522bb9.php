<?php

/* PAPSLivraisonBundle:Front:contact.html.twig */
class __TwigTemplate_e300a28fdcbb02e72c08459d663530e40069dc58b409840feb0b8983ba3634dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PAPSLivraisonBundle:Front:contact.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAPSLivraisonBundle:Front:contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAPSLivraisonBundle:Front:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
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
    var databaseRef = firebase.database().ref('Message/');
function Message() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var number = document.getElementById('number').value;
    var text = document.getElementById('text').value;

    var mid = firebase.database().ref().child('Message').push().key;

    var data = {
        msg_id: mid,
        msg_name: name,
        msg_email: email,
        msg_number: number,
        msg_text: text
    }

    var updates = {};
    updates['/messages/'+mid]=data;
    firebase.database().ref().update(updates);
    alert('Votre message a été bien envoyé. Paps vous remércie !!');
    reload_page();

}

function reload_page() {
    window.location='http://localhost/papsprojet/web/app_dev.php/contact';
}

</script>
";
        // line 61
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 65
        echo "
<div class=\"gtco-section\">
\t\t\t<div class=\"gtco-container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
\t\t\t\t\t\t<h2>Se faire contacter</h2>
\t\t\t\t\t\t<p> </p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t     <form role=\"form\" id=\"form\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"name\" id=\"lab\" >Nom et prénom </label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"email\" id=\"lab\">Email Address</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t     <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"tel\" id=\"lab\">Numéro téléphone</label>
\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"number\" name=\"numero\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"message\" id=\"lab\">Message</label>
\t\t\t\t\t\t\t\t\t<textarea id=\"text\" cols=\"30\" rows=\"10\" class=\"form-control\" name=\"text\" required></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default submit\" onClick=\"Message()\" ><i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>Envoyer</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
                        
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5 col-md-push-1\">
\t\t\t\t\t\t<div class=\"gtco-contact-info\">
\t\t\t\t\t\t\t<h3>Nos adresse</h3>
\t\t\t\t\t\t\t<p id=\"lab\">Nos locaux sont à Dakar (Sénégal), derrière EMG</p>
\t\t\t\t\t\t\t<ul id=\"labb\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t<li id=\"lab\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker fa-lg\" aria-hidden=\"true\"></i> &nbsp;&nbsp;&nbsp; Imm. Transfret Rond point EMGxFront de terre.</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li id=\"lab\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone fa-lg\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp; +221-33-825-85-56 / +221-77-675-05-98 <br> / +221-78-120-30-20</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li id=\"lab\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o fa-lg\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;www.hello@paps.sn</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li id=\"lab\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-globe fa-lg\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;Hello@paps-app.com</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gtco-contact-info\">
                            <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/livreurAnimé.png"), "html", null, true);
        echo "\" width=\"300\" alt=\"Free Website template by GetTemplates.co\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PAPSLivraisonBundle:Front:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 118,  130 => 65,  121 => 64,  109 => 61,  50 => 4,  41 => 3,  11 => 1,);
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
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
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
    var databaseRef = firebase.database().ref('Message/');
function Message() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var number = document.getElementById('number').value;
    var text = document.getElementById('text').value;

    var mid = firebase.database().ref().child('Message').push().key;

    var data = {
        msg_id: mid,
        msg_name: name,
        msg_email: email,
        msg_number: number,
        msg_text: text
    }

    var updates = {};
    updates['/messages/'+mid]=data;
    firebase.database().ref().update(updates);
    alert('Votre message a été bien envoyé. Paps vous remércie !!');
    reload_page();

}

function reload_page() {
    window.location='http://localhost/papsprojet/web/app_dev.php/contact';
}

</script>
{{ parent()}}
{% endblock %}

{% block body %}

<div class=\"gtco-section\">
\t\t\t<div class=\"gtco-container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 gtco-heading text-center\">
\t\t\t\t\t\t<h2>Se faire contacter</h2>
\t\t\t\t\t\t<p> </p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t     <form role=\"form\" id=\"form\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"name\" id=\"lab\" >Nom et prénom </label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"email\" id=\"lab\">Email Address</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t     <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"tel\" id=\"lab\">Numéro téléphone</label>
\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"number\" name=\"numero\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"message\" id=\"lab\">Message</label>
\t\t\t\t\t\t\t\t\t<textarea id=\"text\" cols=\"30\" rows=\"10\" class=\"form-control\" name=\"text\" required></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default submit\" onClick=\"Message()\" ><i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>Envoyer</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
                        
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5 col-md-push-1\">
\t\t\t\t\t\t<div class=\"gtco-contact-info\">
\t\t\t\t\t\t\t<h3>Nos adresse</h3>
\t\t\t\t\t\t\t<p id=\"lab\">Nos locaux sont à Dakar (Sénégal), derrière EMG</p>
\t\t\t\t\t\t\t<ul id=\"labb\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t<li id=\"lab\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker fa-lg\" aria-hidden=\"true\"></i> &nbsp;&nbsp;&nbsp; Imm. Transfret Rond point EMGxFront de terre.</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li id=\"lab\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone fa-lg\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp; +221-33-825-85-56 / +221-77-675-05-98 <br> / +221-78-120-30-20</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li id=\"lab\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o fa-lg\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;www.hello@paps.sn</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li id=\"lab\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-globe fa-lg\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;Hello@paps-app.com</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gtco-contact-info\">
                            <img src=\"{{ asset ('images/livreurAnimé.png')}}\" width=\"300\" alt=\"Free Website template by GetTemplates.co\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

{% endblock %}", "PAPSLivraisonBundle:Front:contact.html.twig", "/var/www/html/papsprojet/src/PAPS/LivraisonBundle/Resources/views/Front/contact.html.twig");
    }
}
