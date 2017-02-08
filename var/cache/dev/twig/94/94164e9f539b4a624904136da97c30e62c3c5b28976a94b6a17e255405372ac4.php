<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_36cb82f75196bf9e4aab021893c45f899aca6e790c49083d9bb97811da40c120 extends Twig_Template
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
        $__internal_f47cd52c18e2ed6a21ce606019f6d939a6b091b3db729895708437e47030c92f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f47cd52c18e2ed6a21ce606019f6d939a6b091b3db729895708437e47030c92f->enter($__internal_f47cd52c18e2ed6a21ce606019f6d939a6b091b3db729895708437e47030c92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_13dc83b54c8c85b4c3176df5002791c9d133dd81b8a16a7c508a2e84cbb5a6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13dc83b54c8c85b4c3176df5002791c9d133dd81b8a16a7c508a2e84cbb5a6a4->enter($__internal_13dc83b54c8c85b4c3176df5002791c9d133dd81b8a16a7c508a2e84cbb5a6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f47cd52c18e2ed6a21ce606019f6d939a6b091b3db729895708437e47030c92f->leave($__internal_f47cd52c18e2ed6a21ce606019f6d939a6b091b3db729895708437e47030c92f_prof);

        
        $__internal_13dc83b54c8c85b4c3176df5002791c9d133dd81b8a16a7c508a2e84cbb5a6a4->leave($__internal_13dc83b54c8c85b4c3176df5002791c9d133dd81b8a16a7c508a2e84cbb5a6a4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4af073aed712c006644492bef05f3bbbe990a8d18858066aa519dc6a1c431540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4af073aed712c006644492bef05f3bbbe990a8d18858066aa519dc6a1c431540->enter($__internal_4af073aed712c006644492bef05f3bbbe990a8d18858066aa519dc6a1c431540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e38516c8d67f794f7da8e4253c5b6f799478cbf4a14c68c9d9ba1a91f94e7974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38516c8d67f794f7da8e4253c5b6f799478cbf4a14c68c9d9ba1a91f94e7974->enter($__internal_e38516c8d67f794f7da8e4253c5b6f799478cbf4a14c68c9d9ba1a91f94e7974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e38516c8d67f794f7da8e4253c5b6f799478cbf4a14c68c9d9ba1a91f94e7974->leave($__internal_e38516c8d67f794f7da8e4253c5b6f799478cbf4a14c68c9d9ba1a91f94e7974_prof);

        
        $__internal_4af073aed712c006644492bef05f3bbbe990a8d18858066aa519dc6a1c431540->leave($__internal_4af073aed712c006644492bef05f3bbbe990a8d18858066aa519dc6a1c431540_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a4f21b809eba37f331abfaa9b5468b9864ac518fd7de09519b73f543f51fdd9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f21b809eba37f331abfaa9b5468b9864ac518fd7de09519b73f543f51fdd9b->enter($__internal_a4f21b809eba37f331abfaa9b5468b9864ac518fd7de09519b73f543f51fdd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9ed6d881f272fa1ca10cac1c4120ff5ba183cab6da926fc481e9714669143b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed6d881f272fa1ca10cac1c4120ff5ba183cab6da926fc481e9714669143b31->enter($__internal_9ed6d881f272fa1ca10cac1c4120ff5ba183cab6da926fc481e9714669143b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ed6d881f272fa1ca10cac1c4120ff5ba183cab6da926fc481e9714669143b31->leave($__internal_9ed6d881f272fa1ca10cac1c4120ff5ba183cab6da926fc481e9714669143b31_prof);

        
        $__internal_a4f21b809eba37f331abfaa9b5468b9864ac518fd7de09519b73f543f51fdd9b->leave($__internal_a4f21b809eba37f331abfaa9b5468b9864ac518fd7de09519b73f543f51fdd9b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8a9a9403c207e221fb94393cb90db6e7a36edc831c7e773076e290099314ae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a9a9403c207e221fb94393cb90db6e7a36edc831c7e773076e290099314ae0->enter($__internal_c8a9a9403c207e221fb94393cb90db6e7a36edc831c7e773076e290099314ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_70c2464183c8be0e434e1d563d08c66b57d9d1faf3502daca075b4f30ad40a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c2464183c8be0e434e1d563d08c66b57d9d1faf3502daca075b4f30ad40a4d->enter($__internal_70c2464183c8be0e434e1d563d08c66b57d9d1faf3502daca075b4f30ad40a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_70c2464183c8be0e434e1d563d08c66b57d9d1faf3502daca075b4f30ad40a4d->leave($__internal_70c2464183c8be0e434e1d563d08c66b57d9d1faf3502daca075b4f30ad40a4d_prof);

        
        $__internal_c8a9a9403c207e221fb94393cb90db6e7a36edc831c7e773076e290099314ae0->leave($__internal_c8a9a9403c207e221fb94393cb90db6e7a36edc831c7e773076e290099314ae0_prof);

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
