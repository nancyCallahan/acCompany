<?php

/* GestorDeProjecteBundle:Default:treb.html.twig */
class __TwigTemplate_a5755d9edaecc8ec06f57b59bd2e91f6afd276d140b8b7c18d6fd07eb1538c8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestorDeProjecteBundle:Default:index.html.twig ", "GestorDeProjecteBundle:Default:treb.html.twig", 1);
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
        $__internal_7dfe61443acdbe5fd9003001db0024cbf64065e089542eacd9c3f38cb61af33c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dfe61443acdbe5fd9003001db0024cbf64065e089542eacd9c3f38cb61af33c->enter($__internal_7dfe61443acdbe5fd9003001db0024cbf64065e089542eacd9c3f38cb61af33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:treb.html.twig"));

        $__internal_07e76f0ff4326b48c9ec11a648b8f5834018cb63935e4d8e99f2f9c9c4a8979d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e76f0ff4326b48c9ec11a648b8f5834018cb63935e4d8e99f2f9c9c4a8979d->enter($__internal_07e76f0ff4326b48c9ec11a648b8f5834018cb63935e4d8e99f2f9c9c4a8979d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:treb.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dfe61443acdbe5fd9003001db0024cbf64065e089542eacd9c3f38cb61af33c->leave($__internal_7dfe61443acdbe5fd9003001db0024cbf64065e089542eacd9c3f38cb61af33c_prof);

        
        $__internal_07e76f0ff4326b48c9ec11a648b8f5834018cb63935e4d8e99f2f9c9c4a8979d->leave($__internal_07e76f0ff4326b48c9ec11a648b8f5834018cb63935e4d8e99f2f9c9c4a8979d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2145a990d823e73e1d3182e30f8628e68ec0c4e4cd081f0fa7d9617965f4a82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2145a990d823e73e1d3182e30f8628e68ec0c4e4cd081f0fa7d9617965f4a82->enter($__internal_d2145a990d823e73e1d3182e30f8628e68ec0c4e4cd081f0fa7d9617965f4a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f99c793ede23b084f8554b31a69360855be91ef18a835d751f520977386e8696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99c793ede23b084f8554b31a69360855be91ef18a835d751f520977386e8696->enter($__internal_f99c793ede23b084f8554b31a69360855be91ef18a835d751f520977386e8696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "Aquesta vista és la que veurà el treballador un cop s'hagi loguejat";
        
        $__internal_f99c793ede23b084f8554b31a69360855be91ef18a835d751f520977386e8696->leave($__internal_f99c793ede23b084f8554b31a69360855be91ef18a835d751f520977386e8696_prof);

        
        $__internal_d2145a990d823e73e1d3182e30f8628e68ec0c4e4cd081f0fa7d9617965f4a82->leave($__internal_d2145a990d823e73e1d3182e30f8628e68ec0c4e4cd081f0fa7d9617965f4a82_prof);

    }

    public function getTemplateName()
    {
        return "GestorDeProjecteBundle:Default:treb.html.twig";
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
{% block body %}Aquesta vista és la que veurà el treballador un cop s'hagi loguejat{% endblock %}", "GestorDeProjecteBundle:Default:treb.html.twig", "C:\\xampp\\htdocs\\acCompany\\src\\GestorDeProjecteBundle/Resources/views/Default/treb.html.twig");
    }
}
