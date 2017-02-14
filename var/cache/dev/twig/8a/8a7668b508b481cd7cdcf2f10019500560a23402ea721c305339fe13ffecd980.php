<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eead566be21e5a1f4cf6fef4744ff7e2341152406359e9ebc9763e34ca91c81b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93bd5cdcc4c569154d262caf38030af4e7433709337663b7982c795727d2ecdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93bd5cdcc4c569154d262caf38030af4e7433709337663b7982c795727d2ecdb->enter($__internal_93bd5cdcc4c569154d262caf38030af4e7433709337663b7982c795727d2ecdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6fd99bedf9c3a14569cb098d60da841ec80ac9ac708c0d725e5222968af91435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd99bedf9c3a14569cb098d60da841ec80ac9ac708c0d725e5222968af91435->enter($__internal_6fd99bedf9c3a14569cb098d60da841ec80ac9ac708c0d725e5222968af91435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93bd5cdcc4c569154d262caf38030af4e7433709337663b7982c795727d2ecdb->leave($__internal_93bd5cdcc4c569154d262caf38030af4e7433709337663b7982c795727d2ecdb_prof);

        
        $__internal_6fd99bedf9c3a14569cb098d60da841ec80ac9ac708c0d725e5222968af91435->leave($__internal_6fd99bedf9c3a14569cb098d60da841ec80ac9ac708c0d725e5222968af91435_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a2a51a84c3aa1f92dff32208dbc4a55501402c85f6db41780c8fbb92ce374bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2a51a84c3aa1f92dff32208dbc4a55501402c85f6db41780c8fbb92ce374bd->enter($__internal_2a2a51a84c3aa1f92dff32208dbc4a55501402c85f6db41780c8fbb92ce374bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9289f1eabf49bba0988b6a01880cdd9a1e68d3a58d5cd742339ea32fd93d2c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9289f1eabf49bba0988b6a01880cdd9a1e68d3a58d5cd742339ea32fd93d2c02->enter($__internal_9289f1eabf49bba0988b6a01880cdd9a1e68d3a58d5cd742339ea32fd93d2c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_9289f1eabf49bba0988b6a01880cdd9a1e68d3a58d5cd742339ea32fd93d2c02->leave($__internal_9289f1eabf49bba0988b6a01880cdd9a1e68d3a58d5cd742339ea32fd93d2c02_prof);

        
        $__internal_2a2a51a84c3aa1f92dff32208dbc4a55501402c85f6db41780c8fbb92ce374bd->leave($__internal_2a2a51a84c3aa1f92dff32208dbc4a55501402c85f6db41780c8fbb92ce374bd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_552e3814d020c8b0c27e71badb5ae85bf6024af24a0e60c224050fd2fe82f524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552e3814d020c8b0c27e71badb5ae85bf6024af24a0e60c224050fd2fe82f524->enter($__internal_552e3814d020c8b0c27e71badb5ae85bf6024af24a0e60c224050fd2fe82f524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a0a42b3272a36d8cb6a10b2fb9473bbf40c1076baa750e3c75890518a2ddb49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0a42b3272a36d8cb6a10b2fb9473bbf40c1076baa750e3c75890518a2ddb49->enter($__internal_3a0a42b3272a36d8cb6a10b2fb9473bbf40c1076baa750e3c75890518a2ddb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3a0a42b3272a36d8cb6a10b2fb9473bbf40c1076baa750e3c75890518a2ddb49->leave($__internal_3a0a42b3272a36d8cb6a10b2fb9473bbf40c1076baa750e3c75890518a2ddb49_prof);

        
        $__internal_552e3814d020c8b0c27e71badb5ae85bf6024af24a0e60c224050fd2fe82f524->leave($__internal_552e3814d020c8b0c27e71badb5ae85bf6024af24a0e60c224050fd2fe82f524_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_62f4294f75f7e73322886a523ed3ea081fb5eca2f462b929e00f7622b1e61aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62f4294f75f7e73322886a523ed3ea081fb5eca2f462b929e00f7622b1e61aa2->enter($__internal_62f4294f75f7e73322886a523ed3ea081fb5eca2f462b929e00f7622b1e61aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02d3b63893c2df8b8464ce241ff85bf8ddeedd2aaacb20199b3e263840478f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d3b63893c2df8b8464ce241ff85bf8ddeedd2aaacb20199b3e263840478f1b->enter($__internal_02d3b63893c2df8b8464ce241ff85bf8ddeedd2aaacb20199b3e263840478f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_02d3b63893c2df8b8464ce241ff85bf8ddeedd2aaacb20199b3e263840478f1b->leave($__internal_02d3b63893c2df8b8464ce241ff85bf8ddeedd2aaacb20199b3e263840478f1b_prof);

        
        $__internal_62f4294f75f7e73322886a523ed3ea081fb5eca2f462b929e00f7622b1e61aa2->leave($__internal_62f4294f75f7e73322886a523ed3ea081fb5eca2f462b929e00f7622b1e61aa2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\acCompany\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
