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
        $__internal_e40949e14721f61175a8e6034a84825885967650ffed79a44b8c0c67ca56241c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e40949e14721f61175a8e6034a84825885967650ffed79a44b8c0c67ca56241c->enter($__internal_e40949e14721f61175a8e6034a84825885967650ffed79a44b8c0c67ca56241c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:admin.html.twig"));

        $__internal_0446458e0e98758074bd5956f648aa7797f8509c00471c1495efba083e75686b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0446458e0e98758074bd5956f648aa7797f8509c00471c1495efba083e75686b->enter($__internal_0446458e0e98758074bd5956f648aa7797f8509c00471c1495efba083e75686b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e40949e14721f61175a8e6034a84825885967650ffed79a44b8c0c67ca56241c->leave($__internal_e40949e14721f61175a8e6034a84825885967650ffed79a44b8c0c67ca56241c_prof);

        
        $__internal_0446458e0e98758074bd5956f648aa7797f8509c00471c1495efba083e75686b->leave($__internal_0446458e0e98758074bd5956f648aa7797f8509c00471c1495efba083e75686b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4721b0a14d37f85f6cef3dc876612fa4a94f7518e4218102c8d11278d68683c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4721b0a14d37f85f6cef3dc876612fa4a94f7518e4218102c8d11278d68683c->enter($__internal_d4721b0a14d37f85f6cef3dc876612fa4a94f7518e4218102c8d11278d68683c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73fd70f4576e9c7d45d7adbbd58bc2b4aec1d6e87a01c3c28abf24d8fb22814b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73fd70f4576e9c7d45d7adbbd58bc2b4aec1d6e87a01c3c28abf24d8fb22814b->enter($__internal_73fd70f4576e9c7d45d7adbbd58bc2b4aec1d6e87a01c3c28abf24d8fb22814b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "Aquesta vista és la que veurà el administrador un cop s'hagi loguejat";
        
        $__internal_73fd70f4576e9c7d45d7adbbd58bc2b4aec1d6e87a01c3c28abf24d8fb22814b->leave($__internal_73fd70f4576e9c7d45d7adbbd58bc2b4aec1d6e87a01c3c28abf24d8fb22814b_prof);

        
        $__internal_d4721b0a14d37f85f6cef3dc876612fa4a94f7518e4218102c8d11278d68683c->leave($__internal_d4721b0a14d37f85f6cef3dc876612fa4a94f7518e4218102c8d11278d68683c_prof);

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
