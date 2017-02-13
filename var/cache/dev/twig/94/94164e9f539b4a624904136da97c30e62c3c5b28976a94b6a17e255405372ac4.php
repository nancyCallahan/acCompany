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
        $__internal_cc9828f0b3adaafbae5e485befc117298721eebaae4f7255dc6e8cccb6eb547f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc9828f0b3adaafbae5e485befc117298721eebaae4f7255dc6e8cccb6eb547f->enter($__internal_cc9828f0b3adaafbae5e485befc117298721eebaae4f7255dc6e8cccb6eb547f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_62367ce4261edb720186bfbc1a97e41bb3700063b8ade469bcfb922888b235cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62367ce4261edb720186bfbc1a97e41bb3700063b8ade469bcfb922888b235cc->enter($__internal_62367ce4261edb720186bfbc1a97e41bb3700063b8ade469bcfb922888b235cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc9828f0b3adaafbae5e485befc117298721eebaae4f7255dc6e8cccb6eb547f->leave($__internal_cc9828f0b3adaafbae5e485befc117298721eebaae4f7255dc6e8cccb6eb547f_prof);

        
        $__internal_62367ce4261edb720186bfbc1a97e41bb3700063b8ade469bcfb922888b235cc->leave($__internal_62367ce4261edb720186bfbc1a97e41bb3700063b8ade469bcfb922888b235cc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb4d845fe09bbc43719cddd677c47eccb867d764718ccd7fbbce4a84924ddd1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4d845fe09bbc43719cddd677c47eccb867d764718ccd7fbbce4a84924ddd1f->enter($__internal_eb4d845fe09bbc43719cddd677c47eccb867d764718ccd7fbbce4a84924ddd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_abd0c8cd5c6dfe00103b01aed5756557ad4763b941afd996f4463c41dc82b575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd0c8cd5c6dfe00103b01aed5756557ad4763b941afd996f4463c41dc82b575->enter($__internal_abd0c8cd5c6dfe00103b01aed5756557ad4763b941afd996f4463c41dc82b575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_abd0c8cd5c6dfe00103b01aed5756557ad4763b941afd996f4463c41dc82b575->leave($__internal_abd0c8cd5c6dfe00103b01aed5756557ad4763b941afd996f4463c41dc82b575_prof);

        
        $__internal_eb4d845fe09bbc43719cddd677c47eccb867d764718ccd7fbbce4a84924ddd1f->leave($__internal_eb4d845fe09bbc43719cddd677c47eccb867d764718ccd7fbbce4a84924ddd1f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0807fa5bb80839795fc9c5d5906534a4dc96a1852fc25ff99f4577b348b3a060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0807fa5bb80839795fc9c5d5906534a4dc96a1852fc25ff99f4577b348b3a060->enter($__internal_0807fa5bb80839795fc9c5d5906534a4dc96a1852fc25ff99f4577b348b3a060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_943d37e020bc6344816aad31defef77e96d1e43455ec52dd3c39a63afaf01c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943d37e020bc6344816aad31defef77e96d1e43455ec52dd3c39a63afaf01c1f->enter($__internal_943d37e020bc6344816aad31defef77e96d1e43455ec52dd3c39a63afaf01c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_943d37e020bc6344816aad31defef77e96d1e43455ec52dd3c39a63afaf01c1f->leave($__internal_943d37e020bc6344816aad31defef77e96d1e43455ec52dd3c39a63afaf01c1f_prof);

        
        $__internal_0807fa5bb80839795fc9c5d5906534a4dc96a1852fc25ff99f4577b348b3a060->leave($__internal_0807fa5bb80839795fc9c5d5906534a4dc96a1852fc25ff99f4577b348b3a060_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60486fa604f063acd0491f73b6b9c36e9b37ac55896967a4d94314757e971c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60486fa604f063acd0491f73b6b9c36e9b37ac55896967a4d94314757e971c5e->enter($__internal_60486fa604f063acd0491f73b6b9c36e9b37ac55896967a4d94314757e971c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3ad9d8b9c43343fc21acc8047030081b9dc79b3388abb28c7b2ca19d7413d4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad9d8b9c43343fc21acc8047030081b9dc79b3388abb28c7b2ca19d7413d4a9->enter($__internal_3ad9d8b9c43343fc21acc8047030081b9dc79b3388abb28c7b2ca19d7413d4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3ad9d8b9c43343fc21acc8047030081b9dc79b3388abb28c7b2ca19d7413d4a9->leave($__internal_3ad9d8b9c43343fc21acc8047030081b9dc79b3388abb28c7b2ca19d7413d4a9_prof);

        
        $__internal_60486fa604f063acd0491f73b6b9c36e9b37ac55896967a4d94314757e971c5e->leave($__internal_60486fa604f063acd0491f73b6b9c36e9b37ac55896967a4d94314757e971c5e_prof);

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
