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
        $__internal_6b3b8619a6d21478ed5cacab451f269c0bef035888e8224d3a26d7044fc811af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3b8619a6d21478ed5cacab451f269c0bef035888e8224d3a26d7044fc811af->enter($__internal_6b3b8619a6d21478ed5cacab451f269c0bef035888e8224d3a26d7044fc811af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_60fbba516ebc0d8a958153c69ca959c3e98932bbb14370d7ad8aa5b7186dd41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60fbba516ebc0d8a958153c69ca959c3e98932bbb14370d7ad8aa5b7186dd41d->enter($__internal_60fbba516ebc0d8a958153c69ca959c3e98932bbb14370d7ad8aa5b7186dd41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b3b8619a6d21478ed5cacab451f269c0bef035888e8224d3a26d7044fc811af->leave($__internal_6b3b8619a6d21478ed5cacab451f269c0bef035888e8224d3a26d7044fc811af_prof);

        
        $__internal_60fbba516ebc0d8a958153c69ca959c3e98932bbb14370d7ad8aa5b7186dd41d->leave($__internal_60fbba516ebc0d8a958153c69ca959c3e98932bbb14370d7ad8aa5b7186dd41d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_73c7760ad98e17f3bba21caefcbb870d44142fa0b45ead16997f04197ddb965f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c7760ad98e17f3bba21caefcbb870d44142fa0b45ead16997f04197ddb965f->enter($__internal_73c7760ad98e17f3bba21caefcbb870d44142fa0b45ead16997f04197ddb965f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_36d31a8b0bfe6eaf996cf54baf3d680cb7dfd5c1a503208a3eb7342613b3a74a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d31a8b0bfe6eaf996cf54baf3d680cb7dfd5c1a503208a3eb7342613b3a74a->enter($__internal_36d31a8b0bfe6eaf996cf54baf3d680cb7dfd5c1a503208a3eb7342613b3a74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_36d31a8b0bfe6eaf996cf54baf3d680cb7dfd5c1a503208a3eb7342613b3a74a->leave($__internal_36d31a8b0bfe6eaf996cf54baf3d680cb7dfd5c1a503208a3eb7342613b3a74a_prof);

        
        $__internal_73c7760ad98e17f3bba21caefcbb870d44142fa0b45ead16997f04197ddb965f->leave($__internal_73c7760ad98e17f3bba21caefcbb870d44142fa0b45ead16997f04197ddb965f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a7b385acfcb6b3d2e2b245f46271ff58544934f74f61422c7bd8eab995c96e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a7b385acfcb6b3d2e2b245f46271ff58544934f74f61422c7bd8eab995c96e5->enter($__internal_3a7b385acfcb6b3d2e2b245f46271ff58544934f74f61422c7bd8eab995c96e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c5f9da9046ea45daa2f365c5ce0c4267f1d243d38fe93c271af8a4eff8b215a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f9da9046ea45daa2f365c5ce0c4267f1d243d38fe93c271af8a4eff8b215a8->enter($__internal_c5f9da9046ea45daa2f365c5ce0c4267f1d243d38fe93c271af8a4eff8b215a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c5f9da9046ea45daa2f365c5ce0c4267f1d243d38fe93c271af8a4eff8b215a8->leave($__internal_c5f9da9046ea45daa2f365c5ce0c4267f1d243d38fe93c271af8a4eff8b215a8_prof);

        
        $__internal_3a7b385acfcb6b3d2e2b245f46271ff58544934f74f61422c7bd8eab995c96e5->leave($__internal_3a7b385acfcb6b3d2e2b245f46271ff58544934f74f61422c7bd8eab995c96e5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87ef4af08ff4369829a0202b5f4e32fab2af2aba4ba4c4bd31d1c998462372d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ef4af08ff4369829a0202b5f4e32fab2af2aba4ba4c4bd31d1c998462372d4->enter($__internal_87ef4af08ff4369829a0202b5f4e32fab2af2aba4ba4c4bd31d1c998462372d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d459c27ccde72ece9ef3d776a15de2678c8b949f9b4dc4a608d5ee0b7a09f30f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d459c27ccde72ece9ef3d776a15de2678c8b949f9b4dc4a608d5ee0b7a09f30f->enter($__internal_d459c27ccde72ece9ef3d776a15de2678c8b949f9b4dc4a608d5ee0b7a09f30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d459c27ccde72ece9ef3d776a15de2678c8b949f9b4dc4a608d5ee0b7a09f30f->leave($__internal_d459c27ccde72ece9ef3d776a15de2678c8b949f9b4dc4a608d5ee0b7a09f30f_prof);

        
        $__internal_87ef4af08ff4369829a0202b5f4e32fab2af2aba4ba4c4bd31d1c998462372d4->leave($__internal_87ef4af08ff4369829a0202b5f4e32fab2af2aba4ba4c4bd31d1c998462372d4_prof);

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
