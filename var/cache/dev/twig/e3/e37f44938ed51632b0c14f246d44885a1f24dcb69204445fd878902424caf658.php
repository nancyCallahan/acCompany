<?php

/* GestorDeProjecteBundle:Default:cons.html.twig */
class __TwigTemplate_d937c8d7617ab50fa28ab7cd76afb424c89240b050a8ac96e41d5f69f2dde7f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestorDeProjecteBundle:Default:index.html.twig ", "GestorDeProjecteBundle:Default:cons.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GestorDeProjecteBundle:Default:index.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80989e5bb1e173986c64e6ff2077bfca2bd354ff5d18aa9342fcb11a437f16c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80989e5bb1e173986c64e6ff2077bfca2bd354ff5d18aa9342fcb11a437f16c8->enter($__internal_80989e5bb1e173986c64e6ff2077bfca2bd354ff5d18aa9342fcb11a437f16c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:cons.html.twig"));

        $__internal_f7668379cd251f8be243511d336e22f0e4efdb071345fa17d8c3cab49597796c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7668379cd251f8be243511d336e22f0e4efdb071345fa17d8c3cab49597796c->enter($__internal_f7668379cd251f8be243511d336e22f0e4efdb071345fa17d8c3cab49597796c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:cons.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80989e5bb1e173986c64e6ff2077bfca2bd354ff5d18aa9342fcb11a437f16c8->leave($__internal_80989e5bb1e173986c64e6ff2077bfca2bd354ff5d18aa9342fcb11a437f16c8_prof);

        
        $__internal_f7668379cd251f8be243511d336e22f0e4efdb071345fa17d8c3cab49597796c->leave($__internal_f7668379cd251f8be243511d336e22f0e4efdb071345fa17d8c3cab49597796c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b35c5af6815753525b8713758a99a560912a155a93291edfb3e27508b7028731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b35c5af6815753525b8713758a99a560912a155a93291edfb3e27508b7028731->enter($__internal_b35c5af6815753525b8713758a99a560912a155a93291edfb3e27508b7028731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eebae830806222dd3f78fdf37a68ef528d9b2e76b8685290bc092e3ddb9511ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eebae830806222dd3f78fdf37a68ef528d9b2e76b8685290bc092e3ddb9511ab->enter($__internal_eebae830806222dd3f78fdf37a68ef528d9b2e76b8685290bc092e3ddb9511ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "Aquesta vista és la que veurà el consultor un cop s'hagi loguejat";
        
        $__internal_eebae830806222dd3f78fdf37a68ef528d9b2e76b8685290bc092e3ddb9511ab->leave($__internal_eebae830806222dd3f78fdf37a68ef528d9b2e76b8685290bc092e3ddb9511ab_prof);

        
        $__internal_b35c5af6815753525b8713758a99a560912a155a93291edfb3e27508b7028731->leave($__internal_b35c5af6815753525b8713758a99a560912a155a93291edfb3e27508b7028731_prof);

    }

    public function getTemplateName()
    {
        return "GestorDeProjecteBundle:Default:cons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"GestorDeProjecteBundle:Default:index.html.twig \" %} 
{% block body %}Aquesta vista és la que veurà el consultor un cop s'hagi loguejat{% endblock %}", "GestorDeProjecteBundle:Default:cons.html.twig", "C:\\xampp\\htdocs\\acCompany\\src\\GestorDeProjecteBundle/Resources/views/Default/cons.html.twig");
    }
}
