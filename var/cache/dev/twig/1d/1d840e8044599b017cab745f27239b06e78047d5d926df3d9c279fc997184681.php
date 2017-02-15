<?php

/* GestorDeProjecteBundle:Default:personaNoBaixa.html.twig */
class __TwigTemplate_b730f1598c712fdec55cee784655df4393d349b841049d9efda3b978e6c543cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestorDeProjecteBundle:Default:index.html.twig ", "GestorDeProjecteBundle:Default:personaNoBaixa.html.twig", 1);
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
        $__internal_462191d6a5644ccd27cae2fd9ba09f9c7d62e020fbd2048b5b48f32bd8203e10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_462191d6a5644ccd27cae2fd9ba09f9c7d62e020fbd2048b5b48f32bd8203e10->enter($__internal_462191d6a5644ccd27cae2fd9ba09f9c7d62e020fbd2048b5b48f32bd8203e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:personaNoBaixa.html.twig"));

        $__internal_998bb3d2dd84f75bfe881239b0c9b8317fb8f76f414180e1723188543e8ef4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998bb3d2dd84f75bfe881239b0c9b8317fb8f76f414180e1723188543e8ef4d6->enter($__internal_998bb3d2dd84f75bfe881239b0c9b8317fb8f76f414180e1723188543e8ef4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:personaNoBaixa.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_462191d6a5644ccd27cae2fd9ba09f9c7d62e020fbd2048b5b48f32bd8203e10->leave($__internal_462191d6a5644ccd27cae2fd9ba09f9c7d62e020fbd2048b5b48f32bd8203e10_prof);

        
        $__internal_998bb3d2dd84f75bfe881239b0c9b8317fb8f76f414180e1723188543e8ef4d6->leave($__internal_998bb3d2dd84f75bfe881239b0c9b8317fb8f76f414180e1723188543e8ef4d6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_add69ff3bf8dd8e204feddb5f457d9c2eb274ffaed093fc7d07ef38f60f345f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add69ff3bf8dd8e204feddb5f457d9c2eb274ffaed093fc7d07ef38f60f345f3->enter($__internal_add69ff3bf8dd8e204feddb5f457d9c2eb274ffaed093fc7d07ef38f60f345f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_437923c9e58a830b98fd76676c6404ed36ad5b229e623be0f37d3df62bcee829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437923c9e58a830b98fd76676c6404ed36ad5b229e623be0f37d3df62bcee829->enter($__internal_437923c9e58a830b98fd76676c6404ed36ad5b229e623be0f37d3df62bcee829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo twig_escape_filter($this->env, (isset($context["nPila"]) ? $context["nPila"] : $this->getContext($context, "nPila")), "html", null, true);
        
        $__internal_437923c9e58a830b98fd76676c6404ed36ad5b229e623be0f37d3df62bcee829->leave($__internal_437923c9e58a830b98fd76676c6404ed36ad5b229e623be0f37d3df62bcee829_prof);

        
        $__internal_add69ff3bf8dd8e204feddb5f457d9c2eb274ffaed093fc7d07ef38f60f345f3->leave($__internal_add69ff3bf8dd8e204feddb5f457d9c2eb274ffaed093fc7d07ef38f60f345f3_prof);

    }

    public function getTemplateName()
    {
        return "GestorDeProjecteBundle:Default:personaNoBaixa.html.twig";
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
{% block body %}{{ nPila }}{% endblock %}
\t", "GestorDeProjecteBundle:Default:personaNoBaixa.html.twig", "C:\\xampp\\htdocs\\acCompany\\src\\GestorDeProjecteBundle/Resources/views/Default/personaNoBaixa.html.twig");
    }
}
