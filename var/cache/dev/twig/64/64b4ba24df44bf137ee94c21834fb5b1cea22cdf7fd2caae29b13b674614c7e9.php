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
        $__internal_bc66db968dcc4422c4f9e3aa6c0b42b3f1f0ffb81570cea8a9a34cb53ad4189d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc66db968dcc4422c4f9e3aa6c0b42b3f1f0ffb81570cea8a9a34cb53ad4189d->enter($__internal_bc66db968dcc4422c4f9e3aa6c0b42b3f1f0ffb81570cea8a9a34cb53ad4189d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3502f304ee5d2bdc593352f6baa7e6e327dcb44c823f12866bd981a418bc5e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3502f304ee5d2bdc593352f6baa7e6e327dcb44c823f12866bd981a418bc5e81->enter($__internal_3502f304ee5d2bdc593352f6baa7e6e327dcb44c823f12866bd981a418bc5e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc66db968dcc4422c4f9e3aa6c0b42b3f1f0ffb81570cea8a9a34cb53ad4189d->leave($__internal_bc66db968dcc4422c4f9e3aa6c0b42b3f1f0ffb81570cea8a9a34cb53ad4189d_prof);

        
        $__internal_3502f304ee5d2bdc593352f6baa7e6e327dcb44c823f12866bd981a418bc5e81->leave($__internal_3502f304ee5d2bdc593352f6baa7e6e327dcb44c823f12866bd981a418bc5e81_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2314180fdc59d9979fe3b8868621b7a478a3b58d6609b0c353111eb3056e4c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2314180fdc59d9979fe3b8868621b7a478a3b58d6609b0c353111eb3056e4c99->enter($__internal_2314180fdc59d9979fe3b8868621b7a478a3b58d6609b0c353111eb3056e4c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3f18f1c36b5d35fc2bf05604a3049cc5cd0f60ec7fab063b803e7ed032fbf816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f18f1c36b5d35fc2bf05604a3049cc5cd0f60ec7fab063b803e7ed032fbf816->enter($__internal_3f18f1c36b5d35fc2bf05604a3049cc5cd0f60ec7fab063b803e7ed032fbf816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3f18f1c36b5d35fc2bf05604a3049cc5cd0f60ec7fab063b803e7ed032fbf816->leave($__internal_3f18f1c36b5d35fc2bf05604a3049cc5cd0f60ec7fab063b803e7ed032fbf816_prof);

        
        $__internal_2314180fdc59d9979fe3b8868621b7a478a3b58d6609b0c353111eb3056e4c99->leave($__internal_2314180fdc59d9979fe3b8868621b7a478a3b58d6609b0c353111eb3056e4c99_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_02cd50c6f9e0bd0a8f30c4c3bd844e0b0e12e7d63c9cfa992bdd86c0fc177a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02cd50c6f9e0bd0a8f30c4c3bd844e0b0e12e7d63c9cfa992bdd86c0fc177a4c->enter($__internal_02cd50c6f9e0bd0a8f30c4c3bd844e0b0e12e7d63c9cfa992bdd86c0fc177a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fd3f2efa8c9009aa20fb37460e409aa0933f2f44bf104956fffd561d321456f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3f2efa8c9009aa20fb37460e409aa0933f2f44bf104956fffd561d321456f8->enter($__internal_fd3f2efa8c9009aa20fb37460e409aa0933f2f44bf104956fffd561d321456f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fd3f2efa8c9009aa20fb37460e409aa0933f2f44bf104956fffd561d321456f8->leave($__internal_fd3f2efa8c9009aa20fb37460e409aa0933f2f44bf104956fffd561d321456f8_prof);

        
        $__internal_02cd50c6f9e0bd0a8f30c4c3bd844e0b0e12e7d63c9cfa992bdd86c0fc177a4c->leave($__internal_02cd50c6f9e0bd0a8f30c4c3bd844e0b0e12e7d63c9cfa992bdd86c0fc177a4c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f59789348709393b48366b6b73069b38f74c97666528655f4a01c9bf14972673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59789348709393b48366b6b73069b38f74c97666528655f4a01c9bf14972673->enter($__internal_f59789348709393b48366b6b73069b38f74c97666528655f4a01c9bf14972673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cef64a8076934ed0ec4d08abd6c05f3a81363706ef24ab66bf382784cb3b0198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef64a8076934ed0ec4d08abd6c05f3a81363706ef24ab66bf382784cb3b0198->enter($__internal_cef64a8076934ed0ec4d08abd6c05f3a81363706ef24ab66bf382784cb3b0198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cef64a8076934ed0ec4d08abd6c05f3a81363706ef24ab66bf382784cb3b0198->leave($__internal_cef64a8076934ed0ec4d08abd6c05f3a81363706ef24ab66bf382784cb3b0198_prof);

        
        $__internal_f59789348709393b48366b6b73069b38f74c97666528655f4a01c9bf14972673->leave($__internal_f59789348709393b48366b6b73069b38f74c97666528655f4a01c9bf14972673_prof);

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
