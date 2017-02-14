<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_45dce907d27a40e6934735514931f4cfa806c6c8455173bf727c6611838b4700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_444193973bf574f56a898f98fec299cef0d9809b09345c9322805b2827442f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_444193973bf574f56a898f98fec299cef0d9809b09345c9322805b2827442f1f->enter($__internal_444193973bf574f56a898f98fec299cef0d9809b09345c9322805b2827442f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c7236ebd2af2483e33d06cc3595d97803aa60821ed895e81a0527d3f2c16f8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7236ebd2af2483e33d06cc3595d97803aa60821ed895e81a0527d3f2c16f8ad->enter($__internal_c7236ebd2af2483e33d06cc3595d97803aa60821ed895e81a0527d3f2c16f8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_444193973bf574f56a898f98fec299cef0d9809b09345c9322805b2827442f1f->leave($__internal_444193973bf574f56a898f98fec299cef0d9809b09345c9322805b2827442f1f_prof);

        
        $__internal_c7236ebd2af2483e33d06cc3595d97803aa60821ed895e81a0527d3f2c16f8ad->leave($__internal_c7236ebd2af2483e33d06cc3595d97803aa60821ed895e81a0527d3f2c16f8ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2dcde1e4f9b8427ed736165fe44a649d4d3a567b9bb48cd123635c00e9e14b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dcde1e4f9b8427ed736165fe44a649d4d3a567b9bb48cd123635c00e9e14b2c->enter($__internal_2dcde1e4f9b8427ed736165fe44a649d4d3a567b9bb48cd123635c00e9e14b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a993ef6ebff80f190028c4bb359167c8a78192a7cb47f3630e249100c14ddc91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a993ef6ebff80f190028c4bb359167c8a78192a7cb47f3630e249100c14ddc91->enter($__internal_a993ef6ebff80f190028c4bb359167c8a78192a7cb47f3630e249100c14ddc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a993ef6ebff80f190028c4bb359167c8a78192a7cb47f3630e249100c14ddc91->leave($__internal_a993ef6ebff80f190028c4bb359167c8a78192a7cb47f3630e249100c14ddc91_prof);

        
        $__internal_2dcde1e4f9b8427ed736165fe44a649d4d3a567b9bb48cd123635c00e9e14b2c->leave($__internal_2dcde1e4f9b8427ed736165fe44a649d4d3a567b9bb48cd123635c00e9e14b2c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_226d31244704423c47cedf3c274429b75443e0a7a78238627b40142c6c66af6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_226d31244704423c47cedf3c274429b75443e0a7a78238627b40142c6c66af6d->enter($__internal_226d31244704423c47cedf3c274429b75443e0a7a78238627b40142c6c66af6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d9b71ca6c5dbb9aa3a28a21c37dbc88fe8382390b07408620ae869e8036e332a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b71ca6c5dbb9aa3a28a21c37dbc88fe8382390b07408620ae869e8036e332a->enter($__internal_d9b71ca6c5dbb9aa3a28a21c37dbc88fe8382390b07408620ae869e8036e332a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d9b71ca6c5dbb9aa3a28a21c37dbc88fe8382390b07408620ae869e8036e332a->leave($__internal_d9b71ca6c5dbb9aa3a28a21c37dbc88fe8382390b07408620ae869e8036e332a_prof);

        
        $__internal_226d31244704423c47cedf3c274429b75443e0a7a78238627b40142c6c66af6d->leave($__internal_226d31244704423c47cedf3c274429b75443e0a7a78238627b40142c6c66af6d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5009ae335fec605df79e8f77c79f913d8a4a8fc1380f4b1568e7416ecdb2b8f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5009ae335fec605df79e8f77c79f913d8a4a8fc1380f4b1568e7416ecdb2b8f7->enter($__internal_5009ae335fec605df79e8f77c79f913d8a4a8fc1380f4b1568e7416ecdb2b8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_80aa0133b4528417ec0561a0e0503b27fda2f5922185abc4ef658e378acdd940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80aa0133b4528417ec0561a0e0503b27fda2f5922185abc4ef658e378acdd940->enter($__internal_80aa0133b4528417ec0561a0e0503b27fda2f5922185abc4ef658e378acdd940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_80aa0133b4528417ec0561a0e0503b27fda2f5922185abc4ef658e378acdd940->leave($__internal_80aa0133b4528417ec0561a0e0503b27fda2f5922185abc4ef658e378acdd940_prof);

        
        $__internal_5009ae335fec605df79e8f77c79f913d8a4a8fc1380f4b1568e7416ecdb2b8f7->leave($__internal_5009ae335fec605df79e8f77c79f913d8a4a8fc1380f4b1568e7416ecdb2b8f7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\acCompany\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
