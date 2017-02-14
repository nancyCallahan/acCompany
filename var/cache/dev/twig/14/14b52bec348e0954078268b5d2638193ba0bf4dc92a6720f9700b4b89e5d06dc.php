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
        $__internal_4a8c6fa390e380e2decb610cc519a7849fa8cda809e24454fba0f84e5b328c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8c6fa390e380e2decb610cc519a7849fa8cda809e24454fba0f84e5b328c04->enter($__internal_4a8c6fa390e380e2decb610cc519a7849fa8cda809e24454fba0f84e5b328c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:mostraUnaPersona.html.twig"));

        $__internal_8d5abff3e49afb0b7602071d0cd1cd46c70387093e5ee752eed93568798d5691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5abff3e49afb0b7602071d0cd1cd46c70387093e5ee752eed93568798d5691->enter($__internal_8d5abff3e49afb0b7602071d0cd1cd46c70387093e5ee752eed93568798d5691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:mostraUnaPersona.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a8c6fa390e380e2decb610cc519a7849fa8cda809e24454fba0f84e5b328c04->leave($__internal_4a8c6fa390e380e2decb610cc519a7849fa8cda809e24454fba0f84e5b328c04_prof);

        
        $__internal_8d5abff3e49afb0b7602071d0cd1cd46c70387093e5ee752eed93568798d5691->leave($__internal_8d5abff3e49afb0b7602071d0cd1cd46c70387093e5ee752eed93568798d5691_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a6b38e6d466fa8376d33144268bcee12070294cbfc6b5a5b28471a089083d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6b38e6d466fa8376d33144268bcee12070294cbfc6b5a5b28471a089083d61->enter($__internal_2a6b38e6d466fa8376d33144268bcee12070294cbfc6b5a5b28471a089083d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fc592b3f86ada4fce434684a2ef3903ffe90170c1444f7bc857a4d65eba1629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc592b3f86ada4fce434684a2ef3903ffe90170c1444f7bc857a4d65eba1629->enter($__internal_1fc592b3f86ada4fce434684a2ef3903ffe90170c1444f7bc857a4d65eba1629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<table>
    \t<tr>
\t\t  \t<td><strong>Id</strong></td>
\t\t  \t<td><strong>Nif</strong></td>
\t\t  \t<td><strong>Nom</strong></td>
\t\t  \t<td><strong>Cognom</strong></td>
\t\t  \t<td><strong>Tipus</strong></td>
\t\t  \t<td><strong>Hores</strong></td>
\t\t</tr>
\t\t<tr>
        \t<td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "id", array()), "html", null, true);
        echo "</td>
        \t<td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "Nif", array()), "html", null, true);
        echo "</td>
        \t<td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "Nom", array()), "html", null, true);
        echo "</td>
        \t<td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "Cognom", array()), "html", null, true);
        echo "</td>
        \t<td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "Tipus", array()), "html", null, true);
        echo "</td>
        \t<td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "hores", array()), "html", null, true);
        echo "</td>
        </tr>
\t</table>
";
        
        $__internal_1fc592b3f86ada4fce434684a2ef3903ffe90170c1444f7bc857a4d65eba1629->leave($__internal_1fc592b3f86ada4fce434684a2ef3903ffe90170c1444f7bc857a4d65eba1629_prof);

        
        $__internal_2a6b38e6d466fa8376d33144268bcee12070294cbfc6b5a5b28471a089083d61->leave($__internal_2a6b38e6d466fa8376d33144268bcee12070294cbfc6b5a5b28471a089083d61_prof);

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
        return array (  81 => 18,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  49 => 3,  40 => 2,  11 => 1,);
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
\t\t  \t<td><strong>Cognom</strong></td>
\t\t  \t<td><strong>Tipus</strong></td>
\t\t  \t<td><strong>Hores</strong></td>
\t\t</tr>
\t\t<tr>
        \t<td>{{persona.id}}</td>
        \t<td>{{persona.Nif}}</td>
        \t<td>{{persona.Nom}}</td>
        \t<td>{{persona.Cognom}}</td>
        \t<td>{{persona.Tipus}}</td>
        \t<td>{{persona.hores}}</td>
        </tr>
\t</table>
{% endblock %}
", "GestorDeProjecteBundle:Default:mostraUnaPersona.html.twig", "C:\\xampp\\htdocs\\acCompany\\src\\GestorDeProjecteBundle/Resources/views/Default/mostraUnaPersona.html.twig");
    }
}
