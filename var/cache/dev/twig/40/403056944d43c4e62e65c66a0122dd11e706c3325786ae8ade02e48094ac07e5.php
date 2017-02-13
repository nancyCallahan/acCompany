<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0407d5f2dbe15f52dc2a268045508202bec27dad657e8d8ad357a809b0cb6f3a extends Twig_Template
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
        $__internal_626a80e484ec3f12eb2ea2ea2b57b4f7d0de2917dd303092c273ebf8b02dba6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626a80e484ec3f12eb2ea2ea2b57b4f7d0de2917dd303092c273ebf8b02dba6d->enter($__internal_626a80e484ec3f12eb2ea2ea2b57b4f7d0de2917dd303092c273ebf8b02dba6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_913fcae248305135e4f0b60316d53f405f42104b005d2a47c19e84da83df72f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913fcae248305135e4f0b60316d53f405f42104b005d2a47c19e84da83df72f8->enter($__internal_913fcae248305135e4f0b60316d53f405f42104b005d2a47c19e84da83df72f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_626a80e484ec3f12eb2ea2ea2b57b4f7d0de2917dd303092c273ebf8b02dba6d->leave($__internal_626a80e484ec3f12eb2ea2ea2b57b4f7d0de2917dd303092c273ebf8b02dba6d_prof);

        
        $__internal_913fcae248305135e4f0b60316d53f405f42104b005d2a47c19e84da83df72f8->leave($__internal_913fcae248305135e4f0b60316d53f405f42104b005d2a47c19e84da83df72f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6a82b81875271453e3b9c392353043df839471368b1897e6144760926cb6b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a82b81875271453e3b9c392353043df839471368b1897e6144760926cb6b77->enter($__internal_d6a82b81875271453e3b9c392353043df839471368b1897e6144760926cb6b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5db3ac5eec10034ca1f7423bf57baba3f46cca14823ff12a3efcde2dddc6da63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db3ac5eec10034ca1f7423bf57baba3f46cca14823ff12a3efcde2dddc6da63->enter($__internal_5db3ac5eec10034ca1f7423bf57baba3f46cca14823ff12a3efcde2dddc6da63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5db3ac5eec10034ca1f7423bf57baba3f46cca14823ff12a3efcde2dddc6da63->leave($__internal_5db3ac5eec10034ca1f7423bf57baba3f46cca14823ff12a3efcde2dddc6da63_prof);

        
        $__internal_d6a82b81875271453e3b9c392353043df839471368b1897e6144760926cb6b77->leave($__internal_d6a82b81875271453e3b9c392353043df839471368b1897e6144760926cb6b77_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a401bad40a4e107036ac00fc1c6b9b5779f7707f7c3c9205314fe427fc5165a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a401bad40a4e107036ac00fc1c6b9b5779f7707f7c3c9205314fe427fc5165a1->enter($__internal_a401bad40a4e107036ac00fc1c6b9b5779f7707f7c3c9205314fe427fc5165a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7dc3509caaf2b3bc3c9912c373418d8aa79f73fe838a67b1e1a6fa261d475cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc3509caaf2b3bc3c9912c373418d8aa79f73fe838a67b1e1a6fa261d475cac->enter($__internal_7dc3509caaf2b3bc3c9912c373418d8aa79f73fe838a67b1e1a6fa261d475cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7dc3509caaf2b3bc3c9912c373418d8aa79f73fe838a67b1e1a6fa261d475cac->leave($__internal_7dc3509caaf2b3bc3c9912c373418d8aa79f73fe838a67b1e1a6fa261d475cac_prof);

        
        $__internal_a401bad40a4e107036ac00fc1c6b9b5779f7707f7c3c9205314fe427fc5165a1->leave($__internal_a401bad40a4e107036ac00fc1c6b9b5779f7707f7c3c9205314fe427fc5165a1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2258725ea90fcf70d9546c468306a57cdf6e17c7500e2e84a9d8fec6d37a9d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2258725ea90fcf70d9546c468306a57cdf6e17c7500e2e84a9d8fec6d37a9d94->enter($__internal_2258725ea90fcf70d9546c468306a57cdf6e17c7500e2e84a9d8fec6d37a9d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_41b711618da9b944dee02a9a52779992ae67f6ea55311341b989917f518779b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b711618da9b944dee02a9a52779992ae67f6ea55311341b989917f518779b7->enter($__internal_41b711618da9b944dee02a9a52779992ae67f6ea55311341b989917f518779b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_41b711618da9b944dee02a9a52779992ae67f6ea55311341b989917f518779b7->leave($__internal_41b711618da9b944dee02a9a52779992ae67f6ea55311341b989917f518779b7_prof);

        
        $__internal_2258725ea90fcf70d9546c468306a57cdf6e17c7500e2e84a9d8fec6d37a9d94->leave($__internal_2258725ea90fcf70d9546c468306a57cdf6e17c7500e2e84a9d8fec6d37a9d94_prof);

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
