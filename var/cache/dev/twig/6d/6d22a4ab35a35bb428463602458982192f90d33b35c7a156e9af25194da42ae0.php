<?php

/* GestorDeProjecteBundle:Default:consConsuProj.html.twig */
class __TwigTemplate_d27679e2eb1c0b4d4834a54288cdd01ec0e1670861f7573f6b7d9021f59fede3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestorDeProjecteBundle:Default:index.html.twig ", "GestorDeProjecteBundle:Default:consConsuProj.html.twig", 1);
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
        $__internal_617e1988cbfb7250d8ea4041775ae10afef910cea5a3220d8a4b979ba9d7f870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617e1988cbfb7250d8ea4041775ae10afef910cea5a3220d8a4b979ba9d7f870->enter($__internal_617e1988cbfb7250d8ea4041775ae10afef910cea5a3220d8a4b979ba9d7f870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:consConsuProj.html.twig"));

        $__internal_50babcea01c9be07d9ed91d54ddff41cb923ca5a0b543a28bfcde1eb464427e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50babcea01c9be07d9ed91d54ddff41cb923ca5a0b543a28bfcde1eb464427e5->enter($__internal_50babcea01c9be07d9ed91d54ddff41cb923ca5a0b543a28bfcde1eb464427e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:consConsuProj.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_617e1988cbfb7250d8ea4041775ae10afef910cea5a3220d8a4b979ba9d7f870->leave($__internal_617e1988cbfb7250d8ea4041775ae10afef910cea5a3220d8a4b979ba9d7f870_prof);

        
        $__internal_50babcea01c9be07d9ed91d54ddff41cb923ca5a0b543a28bfcde1eb464427e5->leave($__internal_50babcea01c9be07d9ed91d54ddff41cb923ca5a0b543a28bfcde1eb464427e5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c1c9171a34fb3afd7017dc2f31f11c8af25658bedda74c1185304fea15a3041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c1c9171a34fb3afd7017dc2f31f11c8af25658bedda74c1185304fea15a3041->enter($__internal_9c1c9171a34fb3afd7017dc2f31f11c8af25658bedda74c1185304fea15a3041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_878e13aa5e187264901c0a6d1c5f2e18cb27fa7512757eff684f9509d29204a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878e13aa5e187264901c0a6d1c5f2e18cb27fa7512757eff684f9509d29204a5->enter($__internal_878e13aa5e187264901c0a6d1c5f2e18cb27fa7512757eff684f9509d29204a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "Aquesta vista és la que veurà el consultor un cop cliqui consultar un projecte";
        
        $__internal_878e13aa5e187264901c0a6d1c5f2e18cb27fa7512757eff684f9509d29204a5->leave($__internal_878e13aa5e187264901c0a6d1c5f2e18cb27fa7512757eff684f9509d29204a5_prof);

        
        $__internal_9c1c9171a34fb3afd7017dc2f31f11c8af25658bedda74c1185304fea15a3041->leave($__internal_9c1c9171a34fb3afd7017dc2f31f11c8af25658bedda74c1185304fea15a3041_prof);

    }

    public function getTemplateName()
    {
        return "GestorDeProjecteBundle:Default:consConsuProj.html.twig";
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
{% block body %}Aquesta vista és la que veurà el consultor un cop cliqui consultar un projecte{% endblock %}", "GestorDeProjecteBundle:Default:consConsuProj.html.twig", "C:\\xampp\\htdocs\\acCompany\\src\\GestorDeProjecteBundle/Resources/views/Default/consConsuProj.html.twig");
    }
}
