<?php

/* PAPSLivraisonBundle:Front:abonner.html.twig */
class __TwigTemplate_2ce66993507e0093616d61d6080d25ebf8402e7adbd8c9e1f73ef67968dce7ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PAPSLivraisonBundle:Front:abonner.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Welcome to the Front:postuler page</h1>
";
    }

    public function getTemplateName()
    {
        return "PAPSLivraisonBundle:Front:abonner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PAPSLivraisonBundle:Front:abonner.html.twig", "/var/www/html/papsprojet/src/PAPS/LivraisonBundle/Resources/views/Front/abonner.html.twig");
    }
}
