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
        $__internal_71b7ab71e795170e281f86f8475f1c6f61c404313a968afad95a87a4d0555c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71b7ab71e795170e281f86f8475f1c6f61c404313a968afad95a87a4d0555c43->enter($__internal_71b7ab71e795170e281f86f8475f1c6f61c404313a968afad95a87a4d0555c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5f6e2317a0efb024910397c21cd61e813da32ddb4f413fbd70a813c9812c7f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6e2317a0efb024910397c21cd61e813da32ddb4f413fbd70a813c9812c7f4b->enter($__internal_5f6e2317a0efb024910397c21cd61e813da32ddb4f413fbd70a813c9812c7f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71b7ab71e795170e281f86f8475f1c6f61c404313a968afad95a87a4d0555c43->leave($__internal_71b7ab71e795170e281f86f8475f1c6f61c404313a968afad95a87a4d0555c43_prof);

        
        $__internal_5f6e2317a0efb024910397c21cd61e813da32ddb4f413fbd70a813c9812c7f4b->leave($__internal_5f6e2317a0efb024910397c21cd61e813da32ddb4f413fbd70a813c9812c7f4b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2b0d80dc75eede25f4f95a0310f4a0a933d91efb5b89235d68dd8696a8c0e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b0d80dc75eede25f4f95a0310f4a0a933d91efb5b89235d68dd8696a8c0e86->enter($__internal_d2b0d80dc75eede25f4f95a0310f4a0a933d91efb5b89235d68dd8696a8c0e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_86c34f4bedc32afab00c18f540d257fc339bf597567c24fbf8d84096eefcbae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c34f4bedc32afab00c18f540d257fc339bf597567c24fbf8d84096eefcbae4->enter($__internal_86c34f4bedc32afab00c18f540d257fc339bf597567c24fbf8d84096eefcbae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_86c34f4bedc32afab00c18f540d257fc339bf597567c24fbf8d84096eefcbae4->leave($__internal_86c34f4bedc32afab00c18f540d257fc339bf597567c24fbf8d84096eefcbae4_prof);

        
        $__internal_d2b0d80dc75eede25f4f95a0310f4a0a933d91efb5b89235d68dd8696a8c0e86->leave($__internal_d2b0d80dc75eede25f4f95a0310f4a0a933d91efb5b89235d68dd8696a8c0e86_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6375f68577326a98141cf523e57781b041c51db30b857951987aa0a54066211a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6375f68577326a98141cf523e57781b041c51db30b857951987aa0a54066211a->enter($__internal_6375f68577326a98141cf523e57781b041c51db30b857951987aa0a54066211a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8c5eb66049dbd8090094f9060719cebb03dd4d936960ae0043b70e729a764503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5eb66049dbd8090094f9060719cebb03dd4d936960ae0043b70e729a764503->enter($__internal_8c5eb66049dbd8090094f9060719cebb03dd4d936960ae0043b70e729a764503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8c5eb66049dbd8090094f9060719cebb03dd4d936960ae0043b70e729a764503->leave($__internal_8c5eb66049dbd8090094f9060719cebb03dd4d936960ae0043b70e729a764503_prof);

        
        $__internal_6375f68577326a98141cf523e57781b041c51db30b857951987aa0a54066211a->leave($__internal_6375f68577326a98141cf523e57781b041c51db30b857951987aa0a54066211a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52e9994688f720326df0f6321547fe265f32c4d643d46a097592f7a01c0ed593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e9994688f720326df0f6321547fe265f32c4d643d46a097592f7a01c0ed593->enter($__internal_52e9994688f720326df0f6321547fe265f32c4d643d46a097592f7a01c0ed593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_27e06bc5d53ba2e034ee099eddabc929da9dc04d3c86b18e1b882dc87fc3619b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e06bc5d53ba2e034ee099eddabc929da9dc04d3c86b18e1b882dc87fc3619b->enter($__internal_27e06bc5d53ba2e034ee099eddabc929da9dc04d3c86b18e1b882dc87fc3619b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_27e06bc5d53ba2e034ee099eddabc929da9dc04d3c86b18e1b882dc87fc3619b->leave($__internal_27e06bc5d53ba2e034ee099eddabc929da9dc04d3c86b18e1b882dc87fc3619b_prof);

        
        $__internal_52e9994688f720326df0f6321547fe265f32c4d643d46a097592f7a01c0ed593->leave($__internal_52e9994688f720326df0f6321547fe265f32c4d643d46a097592f7a01c0ed593_prof);

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
