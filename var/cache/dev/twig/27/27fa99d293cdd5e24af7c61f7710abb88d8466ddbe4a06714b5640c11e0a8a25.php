<?php

/* GestorDeProjecteBundle:Default:cons.html.twig */
class __TwigTemplate_e7e2374f48ffa1a439056c37d1b3d0d578bc1ca8b97bfadc38f865fcfa363589 extends Twig_Template
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
        $__internal_981b76e5844c73a8e3ae5eecd9432dbfa8222cae42761437830d4330aeb37d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_981b76e5844c73a8e3ae5eecd9432dbfa8222cae42761437830d4330aeb37d09->enter($__internal_981b76e5844c73a8e3ae5eecd9432dbfa8222cae42761437830d4330aeb37d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:cons.html.twig"));

        $__internal_5b6e52b924f7e1191d4bc5861f36c269e657c6edccb70779cb6b6b270252cb86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6e52b924f7e1191d4bc5861f36c269e657c6edccb70779cb6b6b270252cb86->enter($__internal_5b6e52b924f7e1191d4bc5861f36c269e657c6edccb70779cb6b6b270252cb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:cons.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_981b76e5844c73a8e3ae5eecd9432dbfa8222cae42761437830d4330aeb37d09->leave($__internal_981b76e5844c73a8e3ae5eecd9432dbfa8222cae42761437830d4330aeb37d09_prof);

        
        $__internal_5b6e52b924f7e1191d4bc5861f36c269e657c6edccb70779cb6b6b270252cb86->leave($__internal_5b6e52b924f7e1191d4bc5861f36c269e657c6edccb70779cb6b6b270252cb86_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_892aad8f786fa6ef107ea027ce12875a9fd5aebf329d9536bd95322a5b2a85d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892aad8f786fa6ef107ea027ce12875a9fd5aebf329d9536bd95322a5b2a85d6->enter($__internal_892aad8f786fa6ef107ea027ce12875a9fd5aebf329d9536bd95322a5b2a85d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2580487c9d92661def81bba8bc3adc7850ac891fa2d8f5a7719393d28a64b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2580487c9d92661def81bba8bc3adc7850ac891fa2d8f5a7719393d28a64b8a->enter($__internal_e2580487c9d92661def81bba8bc3adc7850ac891fa2d8f5a7719393d28a64b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "Aquesta vista és la que veurà el consultor un cop s'hagi loguejat";
        
        $__internal_e2580487c9d92661def81bba8bc3adc7850ac891fa2d8f5a7719393d28a64b8a->leave($__internal_e2580487c9d92661def81bba8bc3adc7850ac891fa2d8f5a7719393d28a64b8a_prof);

        
        $__internal_892aad8f786fa6ef107ea027ce12875a9fd5aebf329d9536bd95322a5b2a85d6->leave($__internal_892aad8f786fa6ef107ea027ce12875a9fd5aebf329d9536bd95322a5b2a85d6_prof);

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
