<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9a5db22b768910612b3be71b41b954972a3ebdb4e6cbfb9cc1bf1d941f6ac3bf extends Twig_Template
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
        $__internal_5fefc2bdbb917bcc467e277057a64091638ac4d6c8445f762327a2b375b4685c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fefc2bdbb917bcc467e277057a64091638ac4d6c8445f762327a2b375b4685c->enter($__internal_5fefc2bdbb917bcc467e277057a64091638ac4d6c8445f762327a2b375b4685c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_881ea08cf62c54bdf49d096060828f03286f0dbe5a042d5aeb48d7566f7e7ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881ea08cf62c54bdf49d096060828f03286f0dbe5a042d5aeb48d7566f7e7ede->enter($__internal_881ea08cf62c54bdf49d096060828f03286f0dbe5a042d5aeb48d7566f7e7ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fefc2bdbb917bcc467e277057a64091638ac4d6c8445f762327a2b375b4685c->leave($__internal_5fefc2bdbb917bcc467e277057a64091638ac4d6c8445f762327a2b375b4685c_prof);

        
        $__internal_881ea08cf62c54bdf49d096060828f03286f0dbe5a042d5aeb48d7566f7e7ede->leave($__internal_881ea08cf62c54bdf49d096060828f03286f0dbe5a042d5aeb48d7566f7e7ede_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_11f6180280b63ac0131950f8838287d841bf25ed7bd60b3402e609b366c7eb58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f6180280b63ac0131950f8838287d841bf25ed7bd60b3402e609b366c7eb58->enter($__internal_11f6180280b63ac0131950f8838287d841bf25ed7bd60b3402e609b366c7eb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b7b4090ca806ace89cf8a7af93326008395cebca1160e729c0ca45c0c856061d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b4090ca806ace89cf8a7af93326008395cebca1160e729c0ca45c0c856061d->enter($__internal_b7b4090ca806ace89cf8a7af93326008395cebca1160e729c0ca45c0c856061d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b7b4090ca806ace89cf8a7af93326008395cebca1160e729c0ca45c0c856061d->leave($__internal_b7b4090ca806ace89cf8a7af93326008395cebca1160e729c0ca45c0c856061d_prof);

        
        $__internal_11f6180280b63ac0131950f8838287d841bf25ed7bd60b3402e609b366c7eb58->leave($__internal_11f6180280b63ac0131950f8838287d841bf25ed7bd60b3402e609b366c7eb58_prof);

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
