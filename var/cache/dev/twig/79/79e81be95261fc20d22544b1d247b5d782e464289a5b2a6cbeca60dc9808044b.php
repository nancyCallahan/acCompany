<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_be4d1cec9070807712a715a9780d24ad57ccc6b94a94437daf23cc99cf8bb023 extends Twig_Template
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
        $__internal_a71f117f030f7ff84493b2d2686785c2420a8acbdbd81a1a7490debd253fc101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a71f117f030f7ff84493b2d2686785c2420a8acbdbd81a1a7490debd253fc101->enter($__internal_a71f117f030f7ff84493b2d2686785c2420a8acbdbd81a1a7490debd253fc101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4161aa1f3f2395de42d3bf9bb711a90f30fbc84887f396b5ea94c1263eebdd4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4161aa1f3f2395de42d3bf9bb711a90f30fbc84887f396b5ea94c1263eebdd4c->enter($__internal_4161aa1f3f2395de42d3bf9bb711a90f30fbc84887f396b5ea94c1263eebdd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a71f117f030f7ff84493b2d2686785c2420a8acbdbd81a1a7490debd253fc101->leave($__internal_a71f117f030f7ff84493b2d2686785c2420a8acbdbd81a1a7490debd253fc101_prof);

        
        $__internal_4161aa1f3f2395de42d3bf9bb711a90f30fbc84887f396b5ea94c1263eebdd4c->leave($__internal_4161aa1f3f2395de42d3bf9bb711a90f30fbc84887f396b5ea94c1263eebdd4c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7927f0e212fa2c8853e31722c28400d812562a9c2aff05d115c03028d078248e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7927f0e212fa2c8853e31722c28400d812562a9c2aff05d115c03028d078248e->enter($__internal_7927f0e212fa2c8853e31722c28400d812562a9c2aff05d115c03028d078248e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bd2707781638feb7b0f6d36a3ad0a438d92baa54e9b51bc7b772c9aa9af50700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2707781638feb7b0f6d36a3ad0a438d92baa54e9b51bc7b772c9aa9af50700->enter($__internal_bd2707781638feb7b0f6d36a3ad0a438d92baa54e9b51bc7b772c9aa9af50700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bd2707781638feb7b0f6d36a3ad0a438d92baa54e9b51bc7b772c9aa9af50700->leave($__internal_bd2707781638feb7b0f6d36a3ad0a438d92baa54e9b51bc7b772c9aa9af50700_prof);

        
        $__internal_7927f0e212fa2c8853e31722c28400d812562a9c2aff05d115c03028d078248e->leave($__internal_7927f0e212fa2c8853e31722c28400d812562a9c2aff05d115c03028d078248e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd9cf133520efcfc13cb275f1d55189100a4a5f003fae851441ee102fc8ab99b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd9cf133520efcfc13cb275f1d55189100a4a5f003fae851441ee102fc8ab99b->enter($__internal_fd9cf133520efcfc13cb275f1d55189100a4a5f003fae851441ee102fc8ab99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_78ef81b1177c2dfc012028f45138980979903cf9b41de1e8275ca6722244b0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ef81b1177c2dfc012028f45138980979903cf9b41de1e8275ca6722244b0a2->enter($__internal_78ef81b1177c2dfc012028f45138980979903cf9b41de1e8275ca6722244b0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_78ef81b1177c2dfc012028f45138980979903cf9b41de1e8275ca6722244b0a2->leave($__internal_78ef81b1177c2dfc012028f45138980979903cf9b41de1e8275ca6722244b0a2_prof);

        
        $__internal_fd9cf133520efcfc13cb275f1d55189100a4a5f003fae851441ee102fc8ab99b->leave($__internal_fd9cf133520efcfc13cb275f1d55189100a4a5f003fae851441ee102fc8ab99b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_243c96a8fa928d40d12ac95f62c3319094dccb2a539e55e20438052dd8468d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_243c96a8fa928d40d12ac95f62c3319094dccb2a539e55e20438052dd8468d68->enter($__internal_243c96a8fa928d40d12ac95f62c3319094dccb2a539e55e20438052dd8468d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70ad2b12f7fcc0ff652c5c34ef2f1725deccdd3dbd6ff50a29078c063bdff98b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ad2b12f7fcc0ff652c5c34ef2f1725deccdd3dbd6ff50a29078c063bdff98b->enter($__internal_70ad2b12f7fcc0ff652c5c34ef2f1725deccdd3dbd6ff50a29078c063bdff98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_70ad2b12f7fcc0ff652c5c34ef2f1725deccdd3dbd6ff50a29078c063bdff98b->leave($__internal_70ad2b12f7fcc0ff652c5c34ef2f1725deccdd3dbd6ff50a29078c063bdff98b_prof);

        
        $__internal_243c96a8fa928d40d12ac95f62c3319094dccb2a539e55e20438052dd8468d68->leave($__internal_243c96a8fa928d40d12ac95f62c3319094dccb2a539e55e20438052dd8468d68_prof);

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
