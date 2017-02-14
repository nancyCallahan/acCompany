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
        $__internal_0105c6636b2077317b4c9eedb20350abc6c45a5a6407dca70c22d3daa20d9e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0105c6636b2077317b4c9eedb20350abc6c45a5a6407dca70c22d3daa20d9e98->enter($__internal_0105c6636b2077317b4c9eedb20350abc6c45a5a6407dca70c22d3daa20d9e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c3aee46bd2fd49c7f48c52682d59a3d1ac97be5aeece86dde97fe9161607d73b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3aee46bd2fd49c7f48c52682d59a3d1ac97be5aeece86dde97fe9161607d73b->enter($__internal_c3aee46bd2fd49c7f48c52682d59a3d1ac97be5aeece86dde97fe9161607d73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0105c6636b2077317b4c9eedb20350abc6c45a5a6407dca70c22d3daa20d9e98->leave($__internal_0105c6636b2077317b4c9eedb20350abc6c45a5a6407dca70c22d3daa20d9e98_prof);

        
        $__internal_c3aee46bd2fd49c7f48c52682d59a3d1ac97be5aeece86dde97fe9161607d73b->leave($__internal_c3aee46bd2fd49c7f48c52682d59a3d1ac97be5aeece86dde97fe9161607d73b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_14c6bfa1f3c5c0d3415868c976843a786663abf856d2e3167345d69d01d23f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c6bfa1f3c5c0d3415868c976843a786663abf856d2e3167345d69d01d23f29->enter($__internal_14c6bfa1f3c5c0d3415868c976843a786663abf856d2e3167345d69d01d23f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d64c848c018c4aeb30ac39aff40bc52671113d0fdfc75a62d6f0010cc02d8f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64c848c018c4aeb30ac39aff40bc52671113d0fdfc75a62d6f0010cc02d8f3d->enter($__internal_d64c848c018c4aeb30ac39aff40bc52671113d0fdfc75a62d6f0010cc02d8f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d64c848c018c4aeb30ac39aff40bc52671113d0fdfc75a62d6f0010cc02d8f3d->leave($__internal_d64c848c018c4aeb30ac39aff40bc52671113d0fdfc75a62d6f0010cc02d8f3d_prof);

        
        $__internal_14c6bfa1f3c5c0d3415868c976843a786663abf856d2e3167345d69d01d23f29->leave($__internal_14c6bfa1f3c5c0d3415868c976843a786663abf856d2e3167345d69d01d23f29_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9681c476b650ebc88a7c4c1a31d434f5f9d28cdcb586492330ad20851e4a09d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9681c476b650ebc88a7c4c1a31d434f5f9d28cdcb586492330ad20851e4a09d7->enter($__internal_9681c476b650ebc88a7c4c1a31d434f5f9d28cdcb586492330ad20851e4a09d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fdd04cb56ac402b32c4a3185deaf2db771e2c5094a221b88d3e32d6984f5b9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd04cb56ac402b32c4a3185deaf2db771e2c5094a221b88d3e32d6984f5b9ef->enter($__internal_fdd04cb56ac402b32c4a3185deaf2db771e2c5094a221b88d3e32d6984f5b9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fdd04cb56ac402b32c4a3185deaf2db771e2c5094a221b88d3e32d6984f5b9ef->leave($__internal_fdd04cb56ac402b32c4a3185deaf2db771e2c5094a221b88d3e32d6984f5b9ef_prof);

        
        $__internal_9681c476b650ebc88a7c4c1a31d434f5f9d28cdcb586492330ad20851e4a09d7->leave($__internal_9681c476b650ebc88a7c4c1a31d434f5f9d28cdcb586492330ad20851e4a09d7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2fd9353ecb1146e1758ee755a9264312cd9a2d71b13fa7a1ecd223336d96ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2fd9353ecb1146e1758ee755a9264312cd9a2d71b13fa7a1ecd223336d96ab9->enter($__internal_d2fd9353ecb1146e1758ee755a9264312cd9a2d71b13fa7a1ecd223336d96ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c23332aef206a6503c727ee5ca0ace5f274a170c164c7ab43f39fedef2903ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23332aef206a6503c727ee5ca0ace5f274a170c164c7ab43f39fedef2903ce0->enter($__internal_c23332aef206a6503c727ee5ca0ace5f274a170c164c7ab43f39fedef2903ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c23332aef206a6503c727ee5ca0ace5f274a170c164c7ab43f39fedef2903ce0->leave($__internal_c23332aef206a6503c727ee5ca0ace5f274a170c164c7ab43f39fedef2903ce0_prof);

        
        $__internal_d2fd9353ecb1146e1758ee755a9264312cd9a2d71b13fa7a1ecd223336d96ab9->leave($__internal_d2fd9353ecb1146e1758ee755a9264312cd9a2d71b13fa7a1ecd223336d96ab9_prof);

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
