<?php

/* PAPSLivraisonBundle:Front:contact.html.twig */
class __TwigTemplate_49b639d6c3f89793111da88a7c3e0dbd909374a7359820e6a2d4f66f97627f65 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
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
        return array (  155 => 118,  100 => 65,  97 => 64,  91 => 61,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PAPSLivraisonBundle:Front:contact.html.twig", "/var/www/html/papsprojet/src/PAPS/LivraisonBundle/Resources/views/Front/contact.html.twig");
    }
}
