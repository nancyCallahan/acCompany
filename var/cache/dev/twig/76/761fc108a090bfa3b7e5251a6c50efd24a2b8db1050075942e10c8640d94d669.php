<?php

/* GestorDeProjecteBundle:Default:mostraAltaPersona.html.twig */
class __TwigTemplate_350cb0ed83e099fbd6790af602e57c6a02cab2215e4a14c1d974808d32dff87d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestorDeProjecteBundle:Default:index.html.twig ", "GestorDeProjecteBundle:Default:mostraAltaPersona.html.twig", 1);
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
        $__internal_b60ab4e695bc999b0305435b2465903de3e9f36a07357520b653dc913936b078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b60ab4e695bc999b0305435b2465903de3e9f36a07357520b653dc913936b078->enter($__internal_b60ab4e695bc999b0305435b2465903de3e9f36a07357520b653dc913936b078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:mostraAltaPersona.html.twig"));

        $__internal_b8401d5c8040f7532a44637b937efaa2f3248416f00e1224bc5b121fd1186580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8401d5c8040f7532a44637b937efaa2f3248416f00e1224bc5b121fd1186580->enter($__internal_b8401d5c8040f7532a44637b937efaa2f3248416f00e1224bc5b121fd1186580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:mostraAltaPersona.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b60ab4e695bc999b0305435b2465903de3e9f36a07357520b653dc913936b078->leave($__internal_b60ab4e695bc999b0305435b2465903de3e9f36a07357520b653dc913936b078_prof);

        
        $__internal_b8401d5c8040f7532a44637b937efaa2f3248416f00e1224bc5b121fd1186580->leave($__internal_b8401d5c8040f7532a44637b937efaa2f3248416f00e1224bc5b121fd1186580_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc4aeef067c79816868b8cb9f46d4c45efd16aa7652e910028b60e1ea4fba85c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4aeef067c79816868b8cb9f46d4c45efd16aa7652e910028b60e1ea4fba85c->enter($__internal_fc4aeef067c79816868b8cb9f46d4c45efd16aa7652e910028b60e1ea4fba85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd7aa800f0fe0fb26bc4919040f305eb00acff29511c4ddd7b128756a047274a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7aa800f0fe0fb26bc4919040f305eb00acff29511c4ddd7b128756a047274a->enter($__internal_fd7aa800f0fe0fb26bc4919040f305eb00acff29511c4ddd7b128756a047274a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<table>
    \t<tr>
\t\t  \t<td><strong>Id</strong></td>
\t\t  \t<td><strong>Nif</strong></td>
\t\t  \t<td><strong>Nom</strong></td>
\t\t  \t<td><strong>Tipus</strong></td>
\t\t  \t<td><strong>Hores</strong></td>
\t\t</tr>
\t
    \t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["persones"]) ? $context["persones"] : $this->getContext($context, "persones")));
        foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
            // line 13
            echo "    \t\t<tr>
        \t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "id", array()), "html", null, true);
            echo "</td>
        \t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "Nif", array()), "html", null, true);
            echo "</td>
        \t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "Nom", array()), "html", null, true);
            echo "</td>
        \t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "Cognom", array()), "html", null, true);
            echo "</td>
        \t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "hores", array()), "html", null, true);
            echo "</td>
        \t</tr>
    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t
\t</table>
";
        
        $__internal_fd7aa800f0fe0fb26bc4919040f305eb00acff29511c4ddd7b128756a047274a->leave($__internal_fd7aa800f0fe0fb26bc4919040f305eb00acff29511c4ddd7b128756a047274a_prof);

        
        $__internal_fc4aeef067c79816868b8cb9f46d4c45efd16aa7652e910028b60e1ea4fba85c->leave($__internal_fc4aeef067c79816868b8cb9f46d4c45efd16aa7652e910028b60e1ea4fba85c_prof);

    }

    public function getTemplateName()
    {
        return "GestorDeProjecteBundle:Default:mostraAltaPersona.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 21,  83 => 18,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  64 => 13,  60 => 12,  49 => 3,  40 => 2,  11 => 1,);
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
\t
    \t{% for persona in persones %}
    \t\t<tr>
        \t\t<td>{{persona.id}}</td>
        \t\t<td>{{persona.Nif}}</td>
        \t\t<td>{{persona.Nom}}</td>
        \t\t<td>{{persona.Cognom}}</td>
        \t\t<td>{{persona.hores}}</td>
        \t</tr>
    \t{% endfor %}
\t
\t</table>
{% endblock %}
", "GestorDeProjecteBundle:Default:mostraAltaPersona.html.twig", "C:\\xampp\\htdocs\\acCompany\\src\\GestorDeProjecteBundle/Resources/views/Default/mostraAltaPersona.html.twig");
    }
}
