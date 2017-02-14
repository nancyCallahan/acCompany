<?php

/* GestorDeProjecteBundle:Default:personaNoBaixa.html.twig */
class __TwigTemplate_b730f1598c712fdec55cee784655df4393d349b841049d9efda3b978e6c543cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestorDeProjecteBundle:Default:index.html.twig ", "GestorDeProjecteBundle:Default:personaNoBaixa.html.twig", 1);
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
        $__internal_ac72acb3ac0235f13c0bfa080e4a7131fbfc53111834d5cb5421f8be2093f02b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac72acb3ac0235f13c0bfa080e4a7131fbfc53111834d5cb5421f8be2093f02b->enter($__internal_ac72acb3ac0235f13c0bfa080e4a7131fbfc53111834d5cb5421f8be2093f02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:personaNoBaixa.html.twig"));

        $__internal_605642e2e7ba6f0b6a490b7908673dacfeb98541a86eb4abbc422ce8d84291cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605642e2e7ba6f0b6a490b7908673dacfeb98541a86eb4abbc422ce8d84291cd->enter($__internal_605642e2e7ba6f0b6a490b7908673dacfeb98541a86eb4abbc422ce8d84291cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:personaNoBaixa.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac72acb3ac0235f13c0bfa080e4a7131fbfc53111834d5cb5421f8be2093f02b->leave($__internal_ac72acb3ac0235f13c0bfa080e4a7131fbfc53111834d5cb5421f8be2093f02b_prof);

        
        $__internal_605642e2e7ba6f0b6a490b7908673dacfeb98541a86eb4abbc422ce8d84291cd->leave($__internal_605642e2e7ba6f0b6a490b7908673dacfeb98541a86eb4abbc422ce8d84291cd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f58a9001c5b86a1b90efe743e7b2746f0586a6d801d2c545204cc16d3d2aa63e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f58a9001c5b86a1b90efe743e7b2746f0586a6d801d2c545204cc16d3d2aa63e->enter($__internal_f58a9001c5b86a1b90efe743e7b2746f0586a6d801d2c545204cc16d3d2aa63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d5c6be5f6d57f484177382458eb215d49ec14bb1fa56099554848d89dffabbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5c6be5f6d57f484177382458eb215d49ec14bb1fa56099554848d89dffabbb->enter($__internal_8d5c6be5f6d57f484177382458eb215d49ec14bb1fa56099554848d89dffabbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo twig_escape_filter($this->env, (isset($context["nPila"]) ? $context["nPila"] : $this->getContext($context, "nPila")), "html", null, true);
        
        $__internal_8d5c6be5f6d57f484177382458eb215d49ec14bb1fa56099554848d89dffabbb->leave($__internal_8d5c6be5f6d57f484177382458eb215d49ec14bb1fa56099554848d89dffabbb_prof);

        
        $__internal_f58a9001c5b86a1b90efe743e7b2746f0586a6d801d2c545204cc16d3d2aa63e->leave($__internal_f58a9001c5b86a1b90efe743e7b2746f0586a6d801d2c545204cc16d3d2aa63e_prof);

    }

    public function getTemplateName()
    {
        return "GestorDeProjecteBundle:Default:personaNoBaixa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  11 => 1,);
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
{% block body %}{{ nPila }}{% endblock %}
\t", "GestorDeProjecteBundle:Default:personaNoBaixa.html.twig", "C:\\xampp\\htdocs\\acCompany\\src\\GestorDeProjecteBundle/Resources/views/Default/personaNoBaixa.html.twig");
    }
}
