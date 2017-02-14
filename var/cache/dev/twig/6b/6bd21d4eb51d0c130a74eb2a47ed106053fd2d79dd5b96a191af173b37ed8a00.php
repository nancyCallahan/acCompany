<?php

/* GestorDeProjecteBundle:Default:mostraUnaPersona.html.twig */
class __TwigTemplate_f4249424f8a77693dcc5b7fb8c4d8d92a39db37c8fd0d770c94b661c8b60d0da extends Twig_Template
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
        $__internal_f3bae2ef49797ac3689a451ed62ebfcce8cbbf925c5494596001bc7ec44845e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3bae2ef49797ac3689a451ed62ebfcce8cbbf925c5494596001bc7ec44845e3->enter($__internal_f3bae2ef49797ac3689a451ed62ebfcce8cbbf925c5494596001bc7ec44845e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:mostraUnaPersona.html.twig"));

        $__internal_bdd485118afe0bad94dcfbd399d48253d6c913d99a0beb62c400fdcf2d24a27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd485118afe0bad94dcfbd399d48253d6c913d99a0beb62c400fdcf2d24a27b->enter($__internal_bdd485118afe0bad94dcfbd399d48253d6c913d99a0beb62c400fdcf2d24a27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:mostraUnaPersona.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3bae2ef49797ac3689a451ed62ebfcce8cbbf925c5494596001bc7ec44845e3->leave($__internal_f3bae2ef49797ac3689a451ed62ebfcce8cbbf925c5494596001bc7ec44845e3_prof);

        
        $__internal_bdd485118afe0bad94dcfbd399d48253d6c913d99a0beb62c400fdcf2d24a27b->leave($__internal_bdd485118afe0bad94dcfbd399d48253d6c913d99a0beb62c400fdcf2d24a27b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a27eaadfd2789a545d84cb1c6eac1f816389035c0672c873cfad5b174050b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a27eaadfd2789a545d84cb1c6eac1f816389035c0672c873cfad5b174050b12->enter($__internal_5a27eaadfd2789a545d84cb1c6eac1f816389035c0672c873cfad5b174050b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_997de73853683fdcd4128749e6bda04d2a7849302cf91421eb7c35192db63ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997de73853683fdcd4128749e6bda04d2a7849302cf91421eb7c35192db63ea2->enter($__internal_997de73853683fdcd4128749e6bda04d2a7849302cf91421eb7c35192db63ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["persona"] ?? $this->getContext($context, "persona")), "id", array()), "html", null, true);
        echo "</td>
        \t<td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["persona"] ?? $this->getContext($context, "persona")), "Nif", array()), "html", null, true);
        echo "</td>
        \t<td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["persona"] ?? $this->getContext($context, "persona")), "Nom", array()), "html", null, true);
        echo "</td>
        \t<td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["persona"] ?? $this->getContext($context, "persona")), "Cognom", array()), "html", null, true);
        echo "</td>
        \t<td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["persona"] ?? $this->getContext($context, "persona")), "hores", array()), "html", null, true);
        echo "</td>
        </tr>
\t</table>
";
        
        $__internal_997de73853683fdcd4128749e6bda04d2a7849302cf91421eb7c35192db63ea2->leave($__internal_997de73853683fdcd4128749e6bda04d2a7849302cf91421eb7c35192db63ea2_prof);

        
        $__internal_5a27eaadfd2789a545d84cb1c6eac1f816389035c0672c873cfad5b174050b12->leave($__internal_5a27eaadfd2789a545d84cb1c6eac1f816389035c0672c873cfad5b174050b12_prof);

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
