<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_39a586061736587286c44e67c3b13141969ee101a76afb1d9b6f7bb2cdee03b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0a7432764c34289a62e171cafc7b0489f3a3c8ec832cc201e05674f43e95602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0a7432764c34289a62e171cafc7b0489f3a3c8ec832cc201e05674f43e95602->enter($__internal_f0a7432764c34289a62e171cafc7b0489f3a3c8ec832cc201e05674f43e95602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_8d1f75126e5a6df36d721a21fa7c95e20d478ac47f8bd2e33c6f39bdec90fd17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1f75126e5a6df36d721a21fa7c95e20d478ac47f8bd2e33c6f39bdec90fd17->enter($__internal_8d1f75126e5a6df36d721a21fa7c95e20d478ac47f8bd2e33c6f39bdec90fd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_f0a7432764c34289a62e171cafc7b0489f3a3c8ec832cc201e05674f43e95602->leave($__internal_f0a7432764c34289a62e171cafc7b0489f3a3c8ec832cc201e05674f43e95602_prof);

        
        $__internal_8d1f75126e5a6df36d721a21fa7c95e20d478ac47f8bd2e33c6f39bdec90fd17->leave($__internal_8d1f75126e5a6df36d721a21fa7c95e20d478ac47f8bd2e33c6f39bdec90fd17_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\xampp\\htdocs\\acCompany\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
