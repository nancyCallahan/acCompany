<?php

/* GestorDeProjecteBundle:Default:mostraUnaPersona.html.twig */
class __TwigTemplate_d1e0f933d3217947d688ee1cb9949e6824d3a7b2d5c008e6e51f37c5cf5949c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestorDeProjecteBundle:Default:index.html.twig ", "GestorDeProjecteBundle:Default:mostraUnaPersona.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GestorDeProjecteBundle:Default:index.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_703a2f7caba1c8d03c531eb92ee47ab7161ada0602d31c5aa74029eab321fb82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703a2f7caba1c8d03c531eb92ee47ab7161ada0602d31c5aa74029eab321fb82->enter($__internal_703a2f7caba1c8d03c531eb92ee47ab7161ada0602d31c5aa74029eab321fb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:mostraUnaPersona.html.twig"));

        $__internal_211e0d2072c757281b37f437592961157f0e10999a01987131f2984847056e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211e0d2072c757281b37f437592961157f0e10999a01987131f2984847056e9e->enter($__internal_211e0d2072c757281b37f437592961157f0e10999a01987131f2984847056e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:mostraUnaPersona.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_703a2f7caba1c8d03c531eb92ee47ab7161ada0602d31c5aa74029eab321fb82->leave($__internal_703a2f7caba1c8d03c531eb92ee47ab7161ada0602d31c5aa74029eab321fb82_prof);

        
        $__internal_211e0d2072c757281b37f437592961157f0e10999a01987131f2984847056e9e->leave($__internal_211e0d2072c757281b37f437592961157f0e10999a01987131f2984847056e9e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bbcde890bab04b0da425388086d4e8386f6799e6a54294ad6e87e6f600442cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bbcde890bab04b0da425388086d4e8386f6799e6a54294ad6e87e6f600442cc->enter($__internal_0bbcde890bab04b0da425388086d4e8386f6799e6a54294ad6e87e6f600442cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04554481f8d19ec34a4c8840fd3abe7a2d4636a9e1e187a341042b7acf4d7276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04554481f8d19ec34a4c8840fd3abe7a2d4636a9e1e187a341042b7acf4d7276->enter($__internal_04554481f8d19ec34a4c8840fd3abe7a2d4636a9e1e187a341042b7acf4d7276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<table>
    \t<tr>
\t\t  \t<td><strong>Id</strong></td>
\t\t  \t<td><strong>Nif</strong></td>
\t\t  \t<td><strong>Nom</strong></td>
\t\t  \t<td><strong>Tipus</strong></td>
\t\t  \t<td><strong>Hores</strong></td>
\t\t</tr>
\t\t<tr>
        \t<td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "id", array()), "html", null, true);
        echo "</td>
        \t<td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "Nif", array()), "html", null, true);
        echo "</td>
        \t<td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "Nom", array()), "html", null, true);
        echo "</td>
        \t<td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "Cognom", array()), "html", null, true);
        echo "</td>
        \t<td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "hores", array()), "html", null, true);
        echo "</td>
        </tr>
\t</table>
";
        
        $__internal_04554481f8d19ec34a4c8840fd3abe7a2d4636a9e1e187a341042b7acf4d7276->leave($__internal_04554481f8d19ec34a4c8840fd3abe7a2d4636a9e1e187a341042b7acf4d7276_prof);

        
        $__internal_0bbcde890bab04b0da425388086d4e8386f6799e6a54294ad6e87e6f600442cc->leave($__internal_0bbcde890bab04b0da425388086d4e8386f6799e6a54294ad6e87e6f600442cc_prof);

    }

    public function getTemplateName()
    {
        return "GestorDeProjecteBundle:Default:mostraUnaPersona.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"GestorDeProjecteBundle:Default:index.html.twig \" %} 
{% block body %}
\t<table>
    \t<tr>
\t\t  \t<td><strong>Id</strong></td>
\t\t  \t<td><strong>Nif</strong></td>
\t\t  \t<td><strong>Nom</strong></td>
\t\t  \t<td><strong>Tipus</strong></td>
\t\t  \t<td><strong>Hores</strong></td>
\t\t</tr>
\t\t<tr>
        \t<td>{{persona.id}}</td>
        \t<td>{{persona.Nif}}</td>
        \t<td>{{persona.Nom}}</td>
        \t<td>{{persona.Cognom}}</td>
        \t<td>{{persona.hores}}</td>
        </tr>
\t</table>
{% endblock %}
", "GestorDeProjecteBundle:Default:mostraUnaPersona.html.twig", "C:\\xampp\\htdocs\\acCompany\\src\\GestorDeProjecteBundle/Resources/views/Default/mostraUnaPersona.html.twig");
    }
}
