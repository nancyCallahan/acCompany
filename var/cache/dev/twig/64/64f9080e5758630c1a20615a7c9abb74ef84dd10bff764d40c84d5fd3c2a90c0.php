<?php

/* GestorDeProjecteBundle:Default:admin.html.twig */
class __TwigTemplate_4b8a5f1641d254d429f4148dfb771ca47f07458002dc107b2c8c4912ee6b0ff1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestorDeProjecteBundle:Default:index.html.twig ", "GestorDeProjecteBundle:Default:admin.html.twig", 1);
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
        $__internal_c0de06a6ee57e0b87347c2cf574ac01a6fc01573591154abbf670e4e585c2d24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0de06a6ee57e0b87347c2cf574ac01a6fc01573591154abbf670e4e585c2d24->enter($__internal_c0de06a6ee57e0b87347c2cf574ac01a6fc01573591154abbf670e4e585c2d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:admin.html.twig"));

        $__internal_1f28d9446703a449abe8cd4f87b9d4b77de1dfa86380fa037b417f326b74a8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f28d9446703a449abe8cd4f87b9d4b77de1dfa86380fa037b417f326b74a8b1->enter($__internal_1f28d9446703a449abe8cd4f87b9d4b77de1dfa86380fa037b417f326b74a8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0de06a6ee57e0b87347c2cf574ac01a6fc01573591154abbf670e4e585c2d24->leave($__internal_c0de06a6ee57e0b87347c2cf574ac01a6fc01573591154abbf670e4e585c2d24_prof);

        
        $__internal_1f28d9446703a449abe8cd4f87b9d4b77de1dfa86380fa037b417f326b74a8b1->leave($__internal_1f28d9446703a449abe8cd4f87b9d4b77de1dfa86380fa037b417f326b74a8b1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bbd5d219fd23ad91146fbafd22e4912a7c80e36a5f7d9f3b923995b835b73b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bbd5d219fd23ad91146fbafd22e4912a7c80e36a5f7d9f3b923995b835b73b6->enter($__internal_6bbd5d219fd23ad91146fbafd22e4912a7c80e36a5f7d9f3b923995b835b73b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5fa42ad6d5e1edd0ba547d5258d841c41f367243856ad06869c02271db3f2549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa42ad6d5e1edd0ba547d5258d841c41f367243856ad06869c02271db3f2549->enter($__internal_5fa42ad6d5e1edd0ba547d5258d841c41f367243856ad06869c02271db3f2549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "Aquesta vista és la que veurà el administrador un cop s'hagi loguejat";
        
        $__internal_5fa42ad6d5e1edd0ba547d5258d841c41f367243856ad06869c02271db3f2549->leave($__internal_5fa42ad6d5e1edd0ba547d5258d841c41f367243856ad06869c02271db3f2549_prof);

        
        $__internal_6bbd5d219fd23ad91146fbafd22e4912a7c80e36a5f7d9f3b923995b835b73b6->leave($__internal_6bbd5d219fd23ad91146fbafd22e4912a7c80e36a5f7d9f3b923995b835b73b6_prof);

    }

    public function getTemplateName()
    {
        return "GestorDeProjecteBundle:Default:admin.html.twig";
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
{% block body %}Aquesta vista és la que veurà el administrador un cop s'hagi loguejat{% endblock %}", "GestorDeProjecteBundle:Default:admin.html.twig", "C:\\xampp\\htdocs\\acCompany\\src\\GestorDeProjecteBundle/Resources/views/Default/admin.html.twig");
    }
}
