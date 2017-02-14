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
        $__internal_e9429eadd9fe73bf5cdebb67402ef2eb4a9aaf41935dc48cfc77d59fe5665914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9429eadd9fe73bf5cdebb67402ef2eb4a9aaf41935dc48cfc77d59fe5665914->enter($__internal_e9429eadd9fe73bf5cdebb67402ef2eb4a9aaf41935dc48cfc77d59fe5665914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_f39bc202b736831de78716adbbd7cc162297073e012517ef36470b4775c8da31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39bc202b736831de78716adbbd7cc162297073e012517ef36470b4775c8da31->enter($__internal_f39bc202b736831de78716adbbd7cc162297073e012517ef36470b4775c8da31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_e9429eadd9fe73bf5cdebb67402ef2eb4a9aaf41935dc48cfc77d59fe5665914->leave($__internal_e9429eadd9fe73bf5cdebb67402ef2eb4a9aaf41935dc48cfc77d59fe5665914_prof);

        
        $__internal_f39bc202b736831de78716adbbd7cc162297073e012517ef36470b4775c8da31->leave($__internal_f39bc202b736831de78716adbbd7cc162297073e012517ef36470b4775c8da31_prof);

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
