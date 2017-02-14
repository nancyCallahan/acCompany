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
        $__internal_79ee70985ea0e1b85490983cdc97ab16ba7de729a4564667dd7db03f49df5ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ee70985ea0e1b85490983cdc97ab16ba7de729a4564667dd7db03f49df5ebf->enter($__internal_79ee70985ea0e1b85490983cdc97ab16ba7de729a4564667dd7db03f49df5ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e1d022af9ee16ce41913007c49f92921bbc240624da4c351b6b9f7cedbaed49e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d022af9ee16ce41913007c49f92921bbc240624da4c351b6b9f7cedbaed49e->enter($__internal_e1d022af9ee16ce41913007c49f92921bbc240624da4c351b6b9f7cedbaed49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79ee70985ea0e1b85490983cdc97ab16ba7de729a4564667dd7db03f49df5ebf->leave($__internal_79ee70985ea0e1b85490983cdc97ab16ba7de729a4564667dd7db03f49df5ebf_prof);

        
        $__internal_e1d022af9ee16ce41913007c49f92921bbc240624da4c351b6b9f7cedbaed49e->leave($__internal_e1d022af9ee16ce41913007c49f92921bbc240624da4c351b6b9f7cedbaed49e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d59e6d60f27a2f87be2b3238eb4972e8606fabe752364141a1e946e14613bb38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59e6d60f27a2f87be2b3238eb4972e8606fabe752364141a1e946e14613bb38->enter($__internal_d59e6d60f27a2f87be2b3238eb4972e8606fabe752364141a1e946e14613bb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dc1d57af2bf5cbf4307cbc80f3cad32e654d804b1254a6dbfc82803542c313ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1d57af2bf5cbf4307cbc80f3cad32e654d804b1254a6dbfc82803542c313ca->enter($__internal_dc1d57af2bf5cbf4307cbc80f3cad32e654d804b1254a6dbfc82803542c313ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dc1d57af2bf5cbf4307cbc80f3cad32e654d804b1254a6dbfc82803542c313ca->leave($__internal_dc1d57af2bf5cbf4307cbc80f3cad32e654d804b1254a6dbfc82803542c313ca_prof);

        
        $__internal_d59e6d60f27a2f87be2b3238eb4972e8606fabe752364141a1e946e14613bb38->leave($__internal_d59e6d60f27a2f87be2b3238eb4972e8606fabe752364141a1e946e14613bb38_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_834fb6a09ced8e042fe58311752de14ff9995e12dd45e0fdc2cce66288eebea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_834fb6a09ced8e042fe58311752de14ff9995e12dd45e0fdc2cce66288eebea4->enter($__internal_834fb6a09ced8e042fe58311752de14ff9995e12dd45e0fdc2cce66288eebea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_86559bc8f5ff9d376a021013c6bbd922de57178604bb43439af469d098e6d4af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86559bc8f5ff9d376a021013c6bbd922de57178604bb43439af469d098e6d4af->enter($__internal_86559bc8f5ff9d376a021013c6bbd922de57178604bb43439af469d098e6d4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_86559bc8f5ff9d376a021013c6bbd922de57178604bb43439af469d098e6d4af->leave($__internal_86559bc8f5ff9d376a021013c6bbd922de57178604bb43439af469d098e6d4af_prof);

        
        $__internal_834fb6a09ced8e042fe58311752de14ff9995e12dd45e0fdc2cce66288eebea4->leave($__internal_834fb6a09ced8e042fe58311752de14ff9995e12dd45e0fdc2cce66288eebea4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_06ce24cba4ebf31e962646af0409aec784b923ac120935b34cde2d07aa8a01da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ce24cba4ebf31e962646af0409aec784b923ac120935b34cde2d07aa8a01da->enter($__internal_06ce24cba4ebf31e962646af0409aec784b923ac120935b34cde2d07aa8a01da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c7e7352cf0e86bee35629dbac030a01be2114e38f3aebf36f27ee17f96d6eaf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e7352cf0e86bee35629dbac030a01be2114e38f3aebf36f27ee17f96d6eaf1->enter($__internal_c7e7352cf0e86bee35629dbac030a01be2114e38f3aebf36f27ee17f96d6eaf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c7e7352cf0e86bee35629dbac030a01be2114e38f3aebf36f27ee17f96d6eaf1->leave($__internal_c7e7352cf0e86bee35629dbac030a01be2114e38f3aebf36f27ee17f96d6eaf1_prof);

        
        $__internal_06ce24cba4ebf31e962646af0409aec784b923ac120935b34cde2d07aa8a01da->leave($__internal_06ce24cba4ebf31e962646af0409aec784b923ac120935b34cde2d07aa8a01da_prof);

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
