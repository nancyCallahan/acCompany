<?php

/* GestorDeProjecteBundle:Default:consConsuTasq.html.twig */
class __TwigTemplate_d18a33290e4c56110efe8abfad84b309971ea88785a8b1c76e55b9c2f3558502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestorDeProjecteBundle:Default:index.html.twig ", "GestorDeProjecteBundle:Default:consConsuTasq.html.twig", 1);
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
        $__internal_f48237f4d92f7581ebd5ac4d9102f3faf259e78d673a7fe88eb91ea5cf73fca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48237f4d92f7581ebd5ac4d9102f3faf259e78d673a7fe88eb91ea5cf73fca0->enter($__internal_f48237f4d92f7581ebd5ac4d9102f3faf259e78d673a7fe88eb91ea5cf73fca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:consConsuTasq.html.twig"));

        $__internal_d68118acf66fe0bd9b767ab056958f884b216bc57006bd7c33b1735dc3bf29e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68118acf66fe0bd9b767ab056958f884b216bc57006bd7c33b1735dc3bf29e3->enter($__internal_d68118acf66fe0bd9b767ab056958f884b216bc57006bd7c33b1735dc3bf29e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:consConsuTasq.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f48237f4d92f7581ebd5ac4d9102f3faf259e78d673a7fe88eb91ea5cf73fca0->leave($__internal_f48237f4d92f7581ebd5ac4d9102f3faf259e78d673a7fe88eb91ea5cf73fca0_prof);

        
        $__internal_d68118acf66fe0bd9b767ab056958f884b216bc57006bd7c33b1735dc3bf29e3->leave($__internal_d68118acf66fe0bd9b767ab056958f884b216bc57006bd7c33b1735dc3bf29e3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaa9a80f61558f1df5970a3d272e21e4f16af2565174664a508c5c11657a679e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa9a80f61558f1df5970a3d272e21e4f16af2565174664a508c5c11657a679e->enter($__internal_aaa9a80f61558f1df5970a3d272e21e4f16af2565174664a508c5c11657a679e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_54022dd597ead748a4e74d78adebbaa4bedc770aad019ab34e444fe831dee07e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54022dd597ead748a4e74d78adebbaa4bedc770aad019ab34e444fe831dee07e->enter($__internal_54022dd597ead748a4e74d78adebbaa4bedc770aad019ab34e444fe831dee07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "Aquesta vista és la que veurà el consultor un cop cliqui consultar una tasca";
        
        $__internal_54022dd597ead748a4e74d78adebbaa4bedc770aad019ab34e444fe831dee07e->leave($__internal_54022dd597ead748a4e74d78adebbaa4bedc770aad019ab34e444fe831dee07e_prof);

        
        $__internal_aaa9a80f61558f1df5970a3d272e21e4f16af2565174664a508c5c11657a679e->leave($__internal_aaa9a80f61558f1df5970a3d272e21e4f16af2565174664a508c5c11657a679e_prof);

    }

    public function getTemplateName()
    {
        return "GestorDeProjecteBundle:Default:consConsuTasq.html.twig";
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
{% block body %}Aquesta vista és la que veurà el consultor un cop cliqui consultar una tasca{% endblock %}", "GestorDeProjecteBundle:Default:consConsuTasq.html.twig", "C:\\xampp\\htdocs\\acCompany\\src\\GestorDeProjecteBundle/Resources/views/Default/consConsuTasq.html.twig");
    }
}
