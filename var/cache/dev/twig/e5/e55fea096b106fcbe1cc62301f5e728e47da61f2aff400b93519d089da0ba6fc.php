<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_62938ca9792154be04d8ad3db80d38c70e93edfea284e5879f215bd9ced413f9 extends Twig_Template
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
        $__internal_7a80e31a1ec92056e84bae91f91b119c58effa5f4ff66ab135c512a9b392821a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a80e31a1ec92056e84bae91f91b119c58effa5f4ff66ab135c512a9b392821a->enter($__internal_7a80e31a1ec92056e84bae91f91b119c58effa5f4ff66ab135c512a9b392821a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_605995e4cd5c5ab4fe9f2c9b01920d2dd7cbdd655e946a52d8db5de969aa90e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605995e4cd5c5ab4fe9f2c9b01920d2dd7cbdd655e946a52d8db5de969aa90e8->enter($__internal_605995e4cd5c5ab4fe9f2c9b01920d2dd7cbdd655e946a52d8db5de969aa90e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7a80e31a1ec92056e84bae91f91b119c58effa5f4ff66ab135c512a9b392821a->leave($__internal_7a80e31a1ec92056e84bae91f91b119c58effa5f4ff66ab135c512a9b392821a_prof);

        
        $__internal_605995e4cd5c5ab4fe9f2c9b01920d2dd7cbdd655e946a52d8db5de969aa90e8->leave($__internal_605995e4cd5c5ab4fe9f2c9b01920d2dd7cbdd655e946a52d8db5de969aa90e8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\acCompany\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
