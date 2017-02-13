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
        $__internal_9c5fec29049f380246cf4cf30873ae53780ea098930aa3b5d53d7dd4c6ee26b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c5fec29049f380246cf4cf30873ae53780ea098930aa3b5d53d7dd4c6ee26b3->enter($__internal_9c5fec29049f380246cf4cf30873ae53780ea098930aa3b5d53d7dd4c6ee26b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b02132ccc6306d060cb25facb7811cb36ea9efb3d219cd233a05fd0789f369fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02132ccc6306d060cb25facb7811cb36ea9efb3d219cd233a05fd0789f369fd->enter($__internal_b02132ccc6306d060cb25facb7811cb36ea9efb3d219cd233a05fd0789f369fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c5fec29049f380246cf4cf30873ae53780ea098930aa3b5d53d7dd4c6ee26b3->leave($__internal_9c5fec29049f380246cf4cf30873ae53780ea098930aa3b5d53d7dd4c6ee26b3_prof);

        
        $__internal_b02132ccc6306d060cb25facb7811cb36ea9efb3d219cd233a05fd0789f369fd->leave($__internal_b02132ccc6306d060cb25facb7811cb36ea9efb3d219cd233a05fd0789f369fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3b0fda6e34e67620bb40b3d972bf4750909c4977b87e85d97239d4245f3fbb22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b0fda6e34e67620bb40b3d972bf4750909c4977b87e85d97239d4245f3fbb22->enter($__internal_3b0fda6e34e67620bb40b3d972bf4750909c4977b87e85d97239d4245f3fbb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9960905225b7579f9ac7fd238b527308a08130cfdb2e12f6cae68e49e0d69793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9960905225b7579f9ac7fd238b527308a08130cfdb2e12f6cae68e49e0d69793->enter($__internal_9960905225b7579f9ac7fd238b527308a08130cfdb2e12f6cae68e49e0d69793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9960905225b7579f9ac7fd238b527308a08130cfdb2e12f6cae68e49e0d69793->leave($__internal_9960905225b7579f9ac7fd238b527308a08130cfdb2e12f6cae68e49e0d69793_prof);

        
        $__internal_3b0fda6e34e67620bb40b3d972bf4750909c4977b87e85d97239d4245f3fbb22->leave($__internal_3b0fda6e34e67620bb40b3d972bf4750909c4977b87e85d97239d4245f3fbb22_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f4cc682107d1018f2ad69d49ab22303fbc7597a32827f82a0dfd4bc349a945e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4cc682107d1018f2ad69d49ab22303fbc7597a32827f82a0dfd4bc349a945e7->enter($__internal_f4cc682107d1018f2ad69d49ab22303fbc7597a32827f82a0dfd4bc349a945e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_69cebcdaf42370d1558dd433507c17aabcb6c3ae9fbbdd4725e389dec7e72766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69cebcdaf42370d1558dd433507c17aabcb6c3ae9fbbdd4725e389dec7e72766->enter($__internal_69cebcdaf42370d1558dd433507c17aabcb6c3ae9fbbdd4725e389dec7e72766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_69cebcdaf42370d1558dd433507c17aabcb6c3ae9fbbdd4725e389dec7e72766->leave($__internal_69cebcdaf42370d1558dd433507c17aabcb6c3ae9fbbdd4725e389dec7e72766_prof);

        
        $__internal_f4cc682107d1018f2ad69d49ab22303fbc7597a32827f82a0dfd4bc349a945e7->leave($__internal_f4cc682107d1018f2ad69d49ab22303fbc7597a32827f82a0dfd4bc349a945e7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d2aecab29db88ad2e7eeabb37c531c167b8f2e3e51180325407fde9adfbded3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d2aecab29db88ad2e7eeabb37c531c167b8f2e3e51180325407fde9adfbded3->enter($__internal_6d2aecab29db88ad2e7eeabb37c531c167b8f2e3e51180325407fde9adfbded3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_683aca8f8788ca7057b478e3d81a30b31702a803a5bdf6b3e4b53a61705338fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683aca8f8788ca7057b478e3d81a30b31702a803a5bdf6b3e4b53a61705338fe->enter($__internal_683aca8f8788ca7057b478e3d81a30b31702a803a5bdf6b3e4b53a61705338fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_683aca8f8788ca7057b478e3d81a30b31702a803a5bdf6b3e4b53a61705338fe->leave($__internal_683aca8f8788ca7057b478e3d81a30b31702a803a5bdf6b3e4b53a61705338fe_prof);

        
        $__internal_6d2aecab29db88ad2e7eeabb37c531c167b8f2e3e51180325407fde9adfbded3->leave($__internal_6d2aecab29db88ad2e7eeabb37c531c167b8f2e3e51180325407fde9adfbded3_prof);

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
