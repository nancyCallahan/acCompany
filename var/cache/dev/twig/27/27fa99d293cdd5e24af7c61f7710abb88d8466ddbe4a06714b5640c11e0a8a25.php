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
        $__internal_dc3adaa83bd9fea0ba4197b989337f6a3f56346ee06d1e31c5e2c0e4bba691f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc3adaa83bd9fea0ba4197b989337f6a3f56346ee06d1e31c5e2c0e4bba691f3->enter($__internal_dc3adaa83bd9fea0ba4197b989337f6a3f56346ee06d1e31c5e2c0e4bba691f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:cons.html.twig"));

        $__internal_9f161beb9a196347c58d6fd7f73458230c78488bb0aa1d7c0333c4f651434569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f161beb9a196347c58d6fd7f73458230c78488bb0aa1d7c0333c4f651434569->enter($__internal_9f161beb9a196347c58d6fd7f73458230c78488bb0aa1d7c0333c4f651434569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:cons.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc3adaa83bd9fea0ba4197b989337f6a3f56346ee06d1e31c5e2c0e4bba691f3->leave($__internal_dc3adaa83bd9fea0ba4197b989337f6a3f56346ee06d1e31c5e2c0e4bba691f3_prof);

        
        $__internal_9f161beb9a196347c58d6fd7f73458230c78488bb0aa1d7c0333c4f651434569->leave($__internal_9f161beb9a196347c58d6fd7f73458230c78488bb0aa1d7c0333c4f651434569_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_874dfb713055b5eca2dce05685469e5b93053f3b936f783d971b19fd51b792ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_874dfb713055b5eca2dce05685469e5b93053f3b936f783d971b19fd51b792ee->enter($__internal_874dfb713055b5eca2dce05685469e5b93053f3b936f783d971b19fd51b792ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b2e7037ffcd13578cd607c4ce17d70258b8dc7115ae7701fffe4fe3e0455d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2e7037ffcd13578cd607c4ce17d70258b8dc7115ae7701fffe4fe3e0455d47->enter($__internal_6b2e7037ffcd13578cd607c4ce17d70258b8dc7115ae7701fffe4fe3e0455d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "Aquesta vista és la que veurà el consultor un cop s'hagi loguejat";
        
        $__internal_6b2e7037ffcd13578cd607c4ce17d70258b8dc7115ae7701fffe4fe3e0455d47->leave($__internal_6b2e7037ffcd13578cd607c4ce17d70258b8dc7115ae7701fffe4fe3e0455d47_prof);

        
        $__internal_874dfb713055b5eca2dce05685469e5b93053f3b936f783d971b19fd51b792ee->leave($__internal_874dfb713055b5eca2dce05685469e5b93053f3b936f783d971b19fd51b792ee_prof);

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
