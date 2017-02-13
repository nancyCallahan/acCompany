<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_382cdab45175afd0f2aa95868cfcc9b7e1a5cde337e80b32e6e159eb7567ec55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382cdab45175afd0f2aa95868cfcc9b7e1a5cde337e80b32e6e159eb7567ec55->enter($__internal_382cdab45175afd0f2aa95868cfcc9b7e1a5cde337e80b32e6e159eb7567ec55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ff9b7868c411f3a68e048ebc6139c4bf81468e1dc846c5d965c4e480bbf6e23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff9b7868c411f3a68e048ebc6139c4bf81468e1dc846c5d965c4e480bbf6e23e->enter($__internal_ff9b7868c411f3a68e048ebc6139c4bf81468e1dc846c5d965c4e480bbf6e23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382cdab45175afd0f2aa95868cfcc9b7e1a5cde337e80b32e6e159eb7567ec55->leave($__internal_382cdab45175afd0f2aa95868cfcc9b7e1a5cde337e80b32e6e159eb7567ec55_prof);

        
        $__internal_ff9b7868c411f3a68e048ebc6139c4bf81468e1dc846c5d965c4e480bbf6e23e->leave($__internal_ff9b7868c411f3a68e048ebc6139c4bf81468e1dc846c5d965c4e480bbf6e23e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_def17869e900c2ea1098e4c4ae783b407b51174b50f78804eb39025912ebcd1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def17869e900c2ea1098e4c4ae783b407b51174b50f78804eb39025912ebcd1a->enter($__internal_def17869e900c2ea1098e4c4ae783b407b51174b50f78804eb39025912ebcd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c76a09779d3551fc57ca7d094908ccd2081d7ae48abf9fcea763809547a3fbcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76a09779d3551fc57ca7d094908ccd2081d7ae48abf9fcea763809547a3fbcc->enter($__internal_c76a09779d3551fc57ca7d094908ccd2081d7ae48abf9fcea763809547a3fbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c76a09779d3551fc57ca7d094908ccd2081d7ae48abf9fcea763809547a3fbcc->leave($__internal_c76a09779d3551fc57ca7d094908ccd2081d7ae48abf9fcea763809547a3fbcc_prof);

        
        $__internal_def17869e900c2ea1098e4c4ae783b407b51174b50f78804eb39025912ebcd1a->leave($__internal_def17869e900c2ea1098e4c4ae783b407b51174b50f78804eb39025912ebcd1a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac0f5888abac45f7a9091b4457d0f27423b9830b9d9ebea3d081a382efde06d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac0f5888abac45f7a9091b4457d0f27423b9830b9d9ebea3d081a382efde06d3->enter($__internal_ac0f5888abac45f7a9091b4457d0f27423b9830b9d9ebea3d081a382efde06d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b2b64c1ceb9a5b62b2b6defb8de825efd81efeeeb4f496d80d62baf1733a8722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b64c1ceb9a5b62b2b6defb8de825efd81efeeeb4f496d80d62baf1733a8722->enter($__internal_b2b64c1ceb9a5b62b2b6defb8de825efd81efeeeb4f496d80d62baf1733a8722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b2b64c1ceb9a5b62b2b6defb8de825efd81efeeeb4f496d80d62baf1733a8722->leave($__internal_b2b64c1ceb9a5b62b2b6defb8de825efd81efeeeb4f496d80d62baf1733a8722_prof);

        
        $__internal_ac0f5888abac45f7a9091b4457d0f27423b9830b9d9ebea3d081a382efde06d3->leave($__internal_ac0f5888abac45f7a9091b4457d0f27423b9830b9d9ebea3d081a382efde06d3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_98aa52d5ea2bcfe1fffef54b048142bc1b15cc8123f11543cc0523b8bc0f9f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98aa52d5ea2bcfe1fffef54b048142bc1b15cc8123f11543cc0523b8bc0f9f30->enter($__internal_98aa52d5ea2bcfe1fffef54b048142bc1b15cc8123f11543cc0523b8bc0f9f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e506a17e6dcef127f3a9b83cbffdd1ce76dec949ff9315eccfc9fa339b0439b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e506a17e6dcef127f3a9b83cbffdd1ce76dec949ff9315eccfc9fa339b0439b0->enter($__internal_e506a17e6dcef127f3a9b83cbffdd1ce76dec949ff9315eccfc9fa339b0439b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e506a17e6dcef127f3a9b83cbffdd1ce76dec949ff9315eccfc9fa339b0439b0->leave($__internal_e506a17e6dcef127f3a9b83cbffdd1ce76dec949ff9315eccfc9fa339b0439b0_prof);

        
        $__internal_98aa52d5ea2bcfe1fffef54b048142bc1b15cc8123f11543cc0523b8bc0f9f30->leave($__internal_98aa52d5ea2bcfe1fffef54b048142bc1b15cc8123f11543cc0523b8bc0f9f30_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\acCompany\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
