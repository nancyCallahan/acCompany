<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fbf598c7f12aa7a0d654c73192cbd1a9866931e5c470aea81040e1555b77d73a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28a4ce74dda0f571e6eb2d186c1ae6df0391601e4df42609b37709d2533567d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a4ce74dda0f571e6eb2d186c1ae6df0391601e4df42609b37709d2533567d5->enter($__internal_28a4ce74dda0f571e6eb2d186c1ae6df0391601e4df42609b37709d2533567d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e6d426ca93417db70490b59b4e5be3114feaa235ad400dda7d401ee798be0a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d426ca93417db70490b59b4e5be3114feaa235ad400dda7d401ee798be0a33->enter($__internal_e6d426ca93417db70490b59b4e5be3114feaa235ad400dda7d401ee798be0a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28a4ce74dda0f571e6eb2d186c1ae6df0391601e4df42609b37709d2533567d5->leave($__internal_28a4ce74dda0f571e6eb2d186c1ae6df0391601e4df42609b37709d2533567d5_prof);

        
        $__internal_e6d426ca93417db70490b59b4e5be3114feaa235ad400dda7d401ee798be0a33->leave($__internal_e6d426ca93417db70490b59b4e5be3114feaa235ad400dda7d401ee798be0a33_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cf21b98ad350cde6654bf3b223c3024a86cd67a42b9bd056e86a79ae6476ff4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf21b98ad350cde6654bf3b223c3024a86cd67a42b9bd056e86a79ae6476ff4b->enter($__internal_cf21b98ad350cde6654bf3b223c3024a86cd67a42b9bd056e86a79ae6476ff4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d12c8f454718659503163c31d0c25236fbe345c4a57b85f0789e21fe9a0e4fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12c8f454718659503163c31d0c25236fbe345c4a57b85f0789e21fe9a0e4fcc->enter($__internal_d12c8f454718659503163c31d0c25236fbe345c4a57b85f0789e21fe9a0e4fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d12c8f454718659503163c31d0c25236fbe345c4a57b85f0789e21fe9a0e4fcc->leave($__internal_d12c8f454718659503163c31d0c25236fbe345c4a57b85f0789e21fe9a0e4fcc_prof);

        
        $__internal_cf21b98ad350cde6654bf3b223c3024a86cd67a42b9bd056e86a79ae6476ff4b->leave($__internal_cf21b98ad350cde6654bf3b223c3024a86cd67a42b9bd056e86a79ae6476ff4b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\acCompany\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
