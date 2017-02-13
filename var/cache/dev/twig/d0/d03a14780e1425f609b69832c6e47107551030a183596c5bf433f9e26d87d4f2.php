<?php

/* GestorDeProjecteBundle:Default:trebHores.html.twig */
class __TwigTemplate_d2da694d7fbeabd6c889e72796622d9553f427818d74b7ee4cd7484d16f4b41f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestorDeProjecteBundle:Default:index.html.twig ", "GestorDeProjecteBundle:Default:trebHores.html.twig", 1);
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
        $__internal_f6af09fb14ab752ed84c43f3da69b81a60f39e9efc90956dac2ccd5335205365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6af09fb14ab752ed84c43f3da69b81a60f39e9efc90956dac2ccd5335205365->enter($__internal_f6af09fb14ab752ed84c43f3da69b81a60f39e9efc90956dac2ccd5335205365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:trebHores.html.twig"));

        $__internal_6bd2ee6c3134a123c853987134dba6c952641a3e5bb2fc122208dc8300cfcecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd2ee6c3134a123c853987134dba6c952641a3e5bb2fc122208dc8300cfcecd->enter($__internal_6bd2ee6c3134a123c853987134dba6c952641a3e5bb2fc122208dc8300cfcecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:trebHores.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6af09fb14ab752ed84c43f3da69b81a60f39e9efc90956dac2ccd5335205365->leave($__internal_f6af09fb14ab752ed84c43f3da69b81a60f39e9efc90956dac2ccd5335205365_prof);

        
        $__internal_6bd2ee6c3134a123c853987134dba6c952641a3e5bb2fc122208dc8300cfcecd->leave($__internal_6bd2ee6c3134a123c853987134dba6c952641a3e5bb2fc122208dc8300cfcecd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d98b31dd4a8b2ed7125d4ca8686fe9a2e78ce00849a90526205e85c9a4eb8712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d98b31dd4a8b2ed7125d4ca8686fe9a2e78ce00849a90526205e85c9a4eb8712->enter($__internal_d98b31dd4a8b2ed7125d4ca8686fe9a2e78ce00849a90526205e85c9a4eb8712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f8a12d75fc468649ced29c6be05dbc3ecdf66b178821d0e1b806ea1da436b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8a12d75fc468649ced29c6be05dbc3ecdf66b178821d0e1b806ea1da436b67->enter($__internal_5f8a12d75fc468649ced29c6be05dbc3ecdf66b178821d0e1b806ea1da436b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "Aquesta vista és la que veurà el treballador quan hagi treballat ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " hores.";
        
        $__internal_5f8a12d75fc468649ced29c6be05dbc3ecdf66b178821d0e1b806ea1da436b67->leave($__internal_5f8a12d75fc468649ced29c6be05dbc3ecdf66b178821d0e1b806ea1da436b67_prof);

        
        $__internal_d98b31dd4a8b2ed7125d4ca8686fe9a2e78ce00849a90526205e85c9a4eb8712->leave($__internal_d98b31dd4a8b2ed7125d4ca8686fe9a2e78ce00849a90526205e85c9a4eb8712_prof);

    }

    public function getTemplateName()
    {
        return "GestorDeProjecteBundle:Default:trebHores.html.twig";
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
{% block body %}Aquesta vista és la que veurà el treballador quan hagi treballat {{ id }} hores.{% endblock %}", "GestorDeProjecteBundle:Default:trebHores.html.twig", "C:\\xampp\\htdocs\\acCompany\\src\\GestorDeProjecteBundle/Resources/views/Default/trebHores.html.twig");
    }
}
