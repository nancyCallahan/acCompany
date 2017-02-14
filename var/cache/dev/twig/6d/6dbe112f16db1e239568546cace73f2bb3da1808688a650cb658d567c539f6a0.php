<?php

/* GestorDeProjecteBundle:Default:formulariAltaPersona.html.twig */
class __TwigTemplate_b4178c7fb227136d60261eb2392a1dae1ef3792d7bf00dee2f36749cc98d1d48 extends Twig_Template
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
        $__internal_00087b37ae4927d4229300634b5b1ea7515fad0544873d187a99ac9a877d1a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00087b37ae4927d4229300634b5b1ea7515fad0544873d187a99ac9a877d1a59->enter($__internal_00087b37ae4927d4229300634b5b1ea7515fad0544873d187a99ac9a877d1a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:formulariAltaPersona.html.twig"));

        $__internal_9f5241ace2590c7719f2e3a0f694d8abd48727ebb8d7c282d6a102b0ea0d3f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5241ace2590c7719f2e3a0f694d8abd48727ebb8d7c282d6a102b0ea0d3f40->enter($__internal_9f5241ace2590c7719f2e3a0f694d8abd48727ebb8d7c282d6a102b0ea0d3f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:formulariAltaPersona.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_00087b37ae4927d4229300634b5b1ea7515fad0544873d187a99ac9a877d1a59->leave($__internal_00087b37ae4927d4229300634b5b1ea7515fad0544873d187a99ac9a877d1a59_prof);

        
        $__internal_9f5241ace2590c7719f2e3a0f694d8abd48727ebb8d7c282d6a102b0ea0d3f40->leave($__internal_9f5241ace2590c7719f2e3a0f694d8abd48727ebb8d7c282d6a102b0ea0d3f40_prof);

    }

    public function getTemplateName()
    {
        return "GestorDeProjecteBundle:Default:formulariAltaPersona.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{form(form)}}", "GestorDeProjecteBundle:Default:formulariAltaPersona.html.twig", "C:\\xampp\\htdocs\\acCompany\\src\\GestorDeProjecteBundle/Resources/views/Default/formulariAltaPersona.html.twig");
    }
}
