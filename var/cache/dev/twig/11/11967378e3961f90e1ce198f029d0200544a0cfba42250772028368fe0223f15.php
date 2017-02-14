<?php

/* @WebProfiler/Profiler/table.html.twig */
class __TwigTemplate_9f945a5a190d99b05697391d85c9a98351e13ebb2a34e4df4e9214f363b46d67 extends Twig_Template
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
        $__internal_3ea342cd7e2efdd7ef8cf858378d806e1148c53abb6b5ca709907487d64b8acc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea342cd7e2efdd7ef8cf858378d806e1148c53abb6b5ca709907487d64b8acc->enter($__internal_3ea342cd7e2efdd7ef8cf858378d806e1148c53abb6b5ca709907487d64b8acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/table.html.twig"));

        $__internal_dcc8841f37724d3f4e377c3d57ee366a53e420f33982a1f0cdcbac3dbad10747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc8841f37724d3f4e377c3d57ee366a53e420f33982a1f0cdcbac3dbad10747->enter($__internal_dcc8841f37724d3f4e377c3d57ee366a53e420f33982a1f0cdcbac3dbad10747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/table.html.twig"));

        // line 1
        echo "<table class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : ("")), "html", null, true);
        echo "\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")), 0, array(), "array")) : ("Key")), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")), 1, array(), "array")) : ("Value")), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th scope=\"row\">";
            // line 11
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                <td>";
            // line 12
            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), $context["key"], array(), "array")));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
        
        $__internal_3ea342cd7e2efdd7ef8cf858378d806e1148c53abb6b5ca709907487d64b8acc->leave($__internal_3ea342cd7e2efdd7ef8cf858378d806e1148c53abb6b5ca709907487d64b8acc_prof);

        
        $__internal_dcc8841f37724d3f4e377c3d57ee366a53e420f33982a1f0cdcbac3dbad10747->leave($__internal_dcc8841f37724d3f4e377c3d57ee366a53e420f33982a1f0cdcbac3dbad10747_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  54 => 12,  50 => 11,  47 => 10,  43 => 9,  36 => 5,  32 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"{{ class|default('') }}\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">{{ labels is defined ? labels[0] : 'Key' }}</th>
            <th scope=\"col\">{{ labels is defined ? labels[1] : 'Value' }}</th>
        </tr>
    </thead>
    <tbody>
        {% for key in data|keys|sort %}
            <tr>
                <th scope=\"row\">{{ key }}</th>
                <td>{{ profiler_dump(data[key]) }}</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "@WebProfiler/Profiler/table.html.twig", "C:\\xampp\\htdocs\\acCompany\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\table.html.twig");
    }
}
