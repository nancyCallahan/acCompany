<?php

/* GestorDeProjecteBundle:Default:consConsuTreb.html.twig */
class __TwigTemplate_e7eede1ea24e3b7fcfcfca9de33b34246e51e9553c319d9742c5adde7aff1f19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestorDeProjecteBundle:Default:index.html.twig ", "GestorDeProjecteBundle:Default:consConsuTreb.html.twig", 1);
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
        $__internal_659cd59de123f2c4369561716e3a471329e238074291c7358425d0b4c6212794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659cd59de123f2c4369561716e3a471329e238074291c7358425d0b4c6212794->enter($__internal_659cd59de123f2c4369561716e3a471329e238074291c7358425d0b4c6212794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:consConsuTreb.html.twig"));

        $__internal_66bff9f5f249e86089b20cf9546a51fcd61740643b2afbca4483d32c753d59e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66bff9f5f249e86089b20cf9546a51fcd61740643b2afbca4483d32c753d59e4->enter($__internal_66bff9f5f249e86089b20cf9546a51fcd61740643b2afbca4483d32c753d59e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:consConsuTreb.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_659cd59de123f2c4369561716e3a471329e238074291c7358425d0b4c6212794->leave($__internal_659cd59de123f2c4369561716e3a471329e238074291c7358425d0b4c6212794_prof);

        
        $__internal_66bff9f5f249e86089b20cf9546a51fcd61740643b2afbca4483d32c753d59e4->leave($__internal_66bff9f5f249e86089b20cf9546a51fcd61740643b2afbca4483d32c753d59e4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7848c9f992e85768b59981ac48bc0eeaa05fa264ce1a6497fc31bf0588ef293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7848c9f992e85768b59981ac48bc0eeaa05fa264ce1a6497fc31bf0588ef293->enter($__internal_e7848c9f992e85768b59981ac48bc0eeaa05fa264ce1a6497fc31bf0588ef293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de4961d879b6d2a0797dbd4746e5538bf5d8cceffa8537c3ce6c4f581964da8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4961d879b6d2a0797dbd4746e5538bf5d8cceffa8537c3ce6c4f581964da8e->enter($__internal_de4961d879b6d2a0797dbd4746e5538bf5d8cceffa8537c3ce6c4f581964da8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "Aquesta vista és la que veurà el consultor un cop cliqui consultar treballador";
        
        $__internal_de4961d879b6d2a0797dbd4746e5538bf5d8cceffa8537c3ce6c4f581964da8e->leave($__internal_de4961d879b6d2a0797dbd4746e5538bf5d8cceffa8537c3ce6c4f581964da8e_prof);

        
        $__internal_e7848c9f992e85768b59981ac48bc0eeaa05fa264ce1a6497fc31bf0588ef293->leave($__internal_e7848c9f992e85768b59981ac48bc0eeaa05fa264ce1a6497fc31bf0588ef293_prof);

    }

    public function getTemplateName()
    {
        return "GestorDeProjecteBundle:Default:consConsuTreb.html.twig";
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
{% block body %}Aquesta vista és la que veurà el consultor un cop cliqui consultar treballador{% endblock %}", "GestorDeProjecteBundle:Default:consConsuTreb.html.twig", "C:\\xampp\\htdocs\\acCompany\\src\\GestorDeProjecteBundle/Resources/views/Default/consConsuTreb.html.twig");
    }
}
