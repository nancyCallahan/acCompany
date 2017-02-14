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
        $__internal_2b7b9899bc1afc042563b6a7da2dfea6fa5278199222def3080437b101a53265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b7b9899bc1afc042563b6a7da2dfea6fa5278199222def3080437b101a53265->enter($__internal_2b7b9899bc1afc042563b6a7da2dfea6fa5278199222def3080437b101a53265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_219297474c415018852ca0ded49b96d1dc93628a2ff9c2aece84f09bb78b06fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219297474c415018852ca0ded49b96d1dc93628a2ff9c2aece84f09bb78b06fe->enter($__internal_219297474c415018852ca0ded49b96d1dc93628a2ff9c2aece84f09bb78b06fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b7b9899bc1afc042563b6a7da2dfea6fa5278199222def3080437b101a53265->leave($__internal_2b7b9899bc1afc042563b6a7da2dfea6fa5278199222def3080437b101a53265_prof);

        
        $__internal_219297474c415018852ca0ded49b96d1dc93628a2ff9c2aece84f09bb78b06fe->leave($__internal_219297474c415018852ca0ded49b96d1dc93628a2ff9c2aece84f09bb78b06fe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_84bec1514ae2010b38fa0526bbfad570591989e7696273f98913993e8b271880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84bec1514ae2010b38fa0526bbfad570591989e7696273f98913993e8b271880->enter($__internal_84bec1514ae2010b38fa0526bbfad570591989e7696273f98913993e8b271880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_98e58a74b14c2b51a30d5eee9137d682bef9f645ac7d1c50bf6bcece559d10df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e58a74b14c2b51a30d5eee9137d682bef9f645ac7d1c50bf6bcece559d10df->enter($__internal_98e58a74b14c2b51a30d5eee9137d682bef9f645ac7d1c50bf6bcece559d10df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_98e58a74b14c2b51a30d5eee9137d682bef9f645ac7d1c50bf6bcece559d10df->leave($__internal_98e58a74b14c2b51a30d5eee9137d682bef9f645ac7d1c50bf6bcece559d10df_prof);

        
        $__internal_84bec1514ae2010b38fa0526bbfad570591989e7696273f98913993e8b271880->leave($__internal_84bec1514ae2010b38fa0526bbfad570591989e7696273f98913993e8b271880_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a383ef63f57724681872891e159d823e0ebdd94ceae0461c037f300044a5554c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a383ef63f57724681872891e159d823e0ebdd94ceae0461c037f300044a5554c->enter($__internal_a383ef63f57724681872891e159d823e0ebdd94ceae0461c037f300044a5554c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_555f39eae581ade80980d59d3fcc87cde7411accf1ed4e88005788b37fa026de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555f39eae581ade80980d59d3fcc87cde7411accf1ed4e88005788b37fa026de->enter($__internal_555f39eae581ade80980d59d3fcc87cde7411accf1ed4e88005788b37fa026de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_555f39eae581ade80980d59d3fcc87cde7411accf1ed4e88005788b37fa026de->leave($__internal_555f39eae581ade80980d59d3fcc87cde7411accf1ed4e88005788b37fa026de_prof);

        
        $__internal_a383ef63f57724681872891e159d823e0ebdd94ceae0461c037f300044a5554c->leave($__internal_a383ef63f57724681872891e159d823e0ebdd94ceae0461c037f300044a5554c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ace7fff624f279969e895d4c171e2ace4268c85ad4ec0c207b415a01da033a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ace7fff624f279969e895d4c171e2ace4268c85ad4ec0c207b415a01da033a0->enter($__internal_6ace7fff624f279969e895d4c171e2ace4268c85ad4ec0c207b415a01da033a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2c27c1b7f62c84d49a2951b15b25968c83e5104d20c17451753cffcccf4b09b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c27c1b7f62c84d49a2951b15b25968c83e5104d20c17451753cffcccf4b09b0->enter($__internal_2c27c1b7f62c84d49a2951b15b25968c83e5104d20c17451753cffcccf4b09b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2c27c1b7f62c84d49a2951b15b25968c83e5104d20c17451753cffcccf4b09b0->leave($__internal_2c27c1b7f62c84d49a2951b15b25968c83e5104d20c17451753cffcccf4b09b0_prof);

        
        $__internal_6ace7fff624f279969e895d4c171e2ace4268c85ad4ec0c207b415a01da033a0->leave($__internal_6ace7fff624f279969e895d4c171e2ace4268c85ad4ec0c207b415a01da033a0_prof);

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
