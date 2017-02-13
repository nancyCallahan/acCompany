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
        $__internal_6f666e62b666ecc1aa5674d37f7e26f7543200be64c29790734551b2c517c178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f666e62b666ecc1aa5674d37f7e26f7543200be64c29790734551b2c517c178->enter($__internal_6f666e62b666ecc1aa5674d37f7e26f7543200be64c29790734551b2c517c178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9b39ef6d3d2781997258550e69983f3943125aa3b67b42f314515d73b14ed1fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b39ef6d3d2781997258550e69983f3943125aa3b67b42f314515d73b14ed1fe->enter($__internal_9b39ef6d3d2781997258550e69983f3943125aa3b67b42f314515d73b14ed1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f666e62b666ecc1aa5674d37f7e26f7543200be64c29790734551b2c517c178->leave($__internal_6f666e62b666ecc1aa5674d37f7e26f7543200be64c29790734551b2c517c178_prof);

        
        $__internal_9b39ef6d3d2781997258550e69983f3943125aa3b67b42f314515d73b14ed1fe->leave($__internal_9b39ef6d3d2781997258550e69983f3943125aa3b67b42f314515d73b14ed1fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_12eee73d78e671d7869a46a969de9c2dc1e8705984df4231518dc5bbda5a59ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12eee73d78e671d7869a46a969de9c2dc1e8705984df4231518dc5bbda5a59ce->enter($__internal_12eee73d78e671d7869a46a969de9c2dc1e8705984df4231518dc5bbda5a59ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_57d6831d5326ab494145f2903aee49b34e52611b835671a4c7c0b6c2e8c5e799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d6831d5326ab494145f2903aee49b34e52611b835671a4c7c0b6c2e8c5e799->enter($__internal_57d6831d5326ab494145f2903aee49b34e52611b835671a4c7c0b6c2e8c5e799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_57d6831d5326ab494145f2903aee49b34e52611b835671a4c7c0b6c2e8c5e799->leave($__internal_57d6831d5326ab494145f2903aee49b34e52611b835671a4c7c0b6c2e8c5e799_prof);

        
        $__internal_12eee73d78e671d7869a46a969de9c2dc1e8705984df4231518dc5bbda5a59ce->leave($__internal_12eee73d78e671d7869a46a969de9c2dc1e8705984df4231518dc5bbda5a59ce_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1a3ed28ffdf1d1f40b5feb6056b523dcbe03d92be779df4ae9c59f5580bec11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1a3ed28ffdf1d1f40b5feb6056b523dcbe03d92be779df4ae9c59f5580bec11->enter($__internal_c1a3ed28ffdf1d1f40b5feb6056b523dcbe03d92be779df4ae9c59f5580bec11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9e788079b01f929895665c25dee4b0979e8e1ae5ca213a9860752960fb15bc25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e788079b01f929895665c25dee4b0979e8e1ae5ca213a9860752960fb15bc25->enter($__internal_9e788079b01f929895665c25dee4b0979e8e1ae5ca213a9860752960fb15bc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9e788079b01f929895665c25dee4b0979e8e1ae5ca213a9860752960fb15bc25->leave($__internal_9e788079b01f929895665c25dee4b0979e8e1ae5ca213a9860752960fb15bc25_prof);

        
        $__internal_c1a3ed28ffdf1d1f40b5feb6056b523dcbe03d92be779df4ae9c59f5580bec11->leave($__internal_c1a3ed28ffdf1d1f40b5feb6056b523dcbe03d92be779df4ae9c59f5580bec11_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e16b3cb06c7bfbca0d5a14e5610a87a1c2786e605c4a8833a353b4a5471fc467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e16b3cb06c7bfbca0d5a14e5610a87a1c2786e605c4a8833a353b4a5471fc467->enter($__internal_e16b3cb06c7bfbca0d5a14e5610a87a1c2786e605c4a8833a353b4a5471fc467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1a3e73cfa8bc7d1dfd189f78bc40e38480e9fa96610adaa87778bd0ac79fa7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a3e73cfa8bc7d1dfd189f78bc40e38480e9fa96610adaa87778bd0ac79fa7f->enter($__internal_f1a3e73cfa8bc7d1dfd189f78bc40e38480e9fa96610adaa87778bd0ac79fa7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f1a3e73cfa8bc7d1dfd189f78bc40e38480e9fa96610adaa87778bd0ac79fa7f->leave($__internal_f1a3e73cfa8bc7d1dfd189f78bc40e38480e9fa96610adaa87778bd0ac79fa7f_prof);

        
        $__internal_e16b3cb06c7bfbca0d5a14e5610a87a1c2786e605c4a8833a353b4a5471fc467->leave($__internal_e16b3cb06c7bfbca0d5a14e5610a87a1c2786e605c4a8833a353b4a5471fc467_prof);

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
