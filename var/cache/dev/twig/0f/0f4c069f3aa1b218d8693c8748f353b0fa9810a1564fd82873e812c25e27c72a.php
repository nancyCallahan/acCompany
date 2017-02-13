<?php

/* GestorDeProjecteBundle:Default:index.html.twig */
class __TwigTemplate_566bb41798ddd795be80c31d8709162aa9465f08c955fd2cf87bbbdc9720b1f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fc8b50d676111e765689be5f21955fb1f02f75c89dbab3668ae45359005f808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc8b50d676111e765689be5f21955fb1f02f75c89dbab3668ae45359005f808->enter($__internal_3fc8b50d676111e765689be5f21955fb1f02f75c89dbab3668ae45359005f808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:index.html.twig"));

        $__internal_b65cca19f14089ff801f7ae21e4cec7ea205e3b84e8e1988278ce926ebb7411d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65cca19f14089ff801f7ae21e4cec7ea205e3b84e8e1988278ce926ebb7411d->enter($__internal_b65cca19f14089ff801f7ae21e4cec7ea205e3b84e8e1988278ce926ebb7411d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorDeProjecteBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <!-- Latest compiled and minified CSS -->
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

\t<!-- Optional theme -->
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

\t<!-- Latest compiled and minified JavaScript -->
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" /> 
    <title>";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "</head>

<body>

    ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "
    ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "</body>

</html>

";
        
        $__internal_3fc8b50d676111e765689be5f21955fb1f02f75c89dbab3668ae45359005f808->leave($__internal_3fc8b50d676111e765689be5f21955fb1f02f75c89dbab3668ae45359005f808_prof);

        
        $__internal_b65cca19f14089ff801f7ae21e4cec7ea205e3b84e8e1988278ce926ebb7411d->leave($__internal_b65cca19f14089ff801f7ae21e4cec7ea205e3b84e8e1988278ce926ebb7411d_prof);

    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        $__internal_e24a2991308bf38d005cb2edbf1ae05dd377304768f10b41bad7789a782eb230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24a2991308bf38d005cb2edbf1ae05dd377304768f10b41bad7789a782eb230->enter($__internal_e24a2991308bf38d005cb2edbf1ae05dd377304768f10b41bad7789a782eb230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef0da26882c74d40655ba05217973d486294ac1f052aa579b5d6a111611c2d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0da26882c74d40655ba05217973d486294ac1f052aa579b5d6a111611c2d2c->enter($__internal_ef0da26882c74d40655ba05217973d486294ac1f052aa579b5d6a111611c2d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ef0da26882c74d40655ba05217973d486294ac1f052aa579b5d6a111611c2d2c->leave($__internal_ef0da26882c74d40655ba05217973d486294ac1f052aa579b5d6a111611c2d2c_prof);

        
        $__internal_e24a2991308bf38d005cb2edbf1ae05dd377304768f10b41bad7789a782eb230->leave($__internal_e24a2991308bf38d005cb2edbf1ae05dd377304768f10b41bad7789a782eb230_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f6076bb98d70c30ac5d6b1d278cf454c01e354a4746e72dbb033123505811ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f6076bb98d70c30ac5d6b1d278cf454c01e354a4746e72dbb033123505811ac->enter($__internal_1f6076bb98d70c30ac5d6b1d278cf454c01e354a4746e72dbb033123505811ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_78295061ba299b58c74148762a3d3e258be92672f5ac1337d2ddbf4a259aa3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78295061ba299b58c74148762a3d3e258be92672f5ac1337d2ddbf4a259aa3d4->enter($__internal_78295061ba299b58c74148762a3d3e258be92672f5ac1337d2ddbf4a259aa3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_78295061ba299b58c74148762a3d3e258be92672f5ac1337d2ddbf4a259aa3d4->leave($__internal_78295061ba299b58c74148762a3d3e258be92672f5ac1337d2ddbf4a259aa3d4_prof);

        
        $__internal_1f6076bb98d70c30ac5d6b1d278cf454c01e354a4746e72dbb033123505811ac->leave($__internal_1f6076bb98d70c30ac5d6b1d278cf454c01e354a4746e72dbb033123505811ac_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_066b679f927293c170e80e1d2f87207a5ed6cc534f05795652e36b32447a84c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066b679f927293c170e80e1d2f87207a5ed6cc534f05795652e36b32447a84c0->enter($__internal_066b679f927293c170e80e1d2f87207a5ed6cc534f05795652e36b32447a84c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_030f12c77acd7afd193bbde5223c81055dc50713a0c29fe81127e850445ab422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030f12c77acd7afd193bbde5223c81055dc50713a0c29fe81127e850445ab422->enter($__internal_030f12c77acd7afd193bbde5223c81055dc50713a0c29fe81127e850445ab422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "    <div class=\"container\">
\t    <div class=\"row\">
\t    \t<div class=\"col-lg-6 col-lg-offset-3\">
\t    \t\t<img class=\"pull-right\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../web/img/logo2.png"), "html", null, true);
        echo "\">
\t    \t\t
\t    \t</div>
\t    </div>
\t    <div class=\"col-lg-6 col-lg-offset-3 mT15\">
\t    \t\t
\t\t\t<div class=\"cuadrat\">
\t\t\t\t<div class=\"col-lg-6 col-lg-offset-3 cont\">
\t\t\t\t\t<div class=\" text-center mT15\">
\t\t\t\t\t<label>Usuari</label><br>
\t    \t\t\t<input type=\"text\" name=\"user\" class=\"form-control w100 centrarHoritz\" placeholder=\"usuari\">
\t\t\t\t</div>
\t    \t\t<div class=\" text-center mT15 mB15\">
\t\t    \t\t<label>Contrasenya</label><br>
\t\t    \t\t<input type=\"password\" name=\"password\" class=\"form-control w100 centrarHoritz\" placeholder=\"contrasenya\">
\t\t    \t</div>\t 
\t\t    \t<div class=\" text-right mT15 mB15 \">
\t\t    \t
\t\t    \t\t<input type=\"submit\" name=\"submit\" class=\"btn btn-negre \" value=\"login\">
\t\t    \t</div>
\t\t\t\t</div>
\t\t\t\t\t 
\t\t\t</div>
\t    </div>
    </div>

    ";
        
        $__internal_030f12c77acd7afd193bbde5223c81055dc50713a0c29fe81127e850445ab422->leave($__internal_030f12c77acd7afd193bbde5223c81055dc50713a0c29fe81127e850445ab422_prof);

        
        $__internal_066b679f927293c170e80e1d2f87207a5ed6cc534f05795652e36b32447a84c0->leave($__internal_066b679f927293c170e80e1d2f87207a5ed6cc534f05795652e36b32447a84c0_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a679137c5d533683f86527790988f9ca55e85faee65a04892dfffa79728afbe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a679137c5d533683f86527790988f9ca55e85faee65a04892dfffa79728afbe4->enter($__internal_a679137c5d533683f86527790988f9ca55e85faee65a04892dfffa79728afbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ece46654edfd9872dec54af000bb2f44821e68d83bff95f09998d47bf012fb8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece46654edfd9872dec54af000bb2f44821e68d83bff95f09998d47bf012fb8e->enter($__internal_ece46654edfd9872dec54af000bb2f44821e68d83bff95f09998d47bf012fb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ece46654edfd9872dec54af000bb2f44821e68d83bff95f09998d47bf012fb8e->leave($__internal_ece46654edfd9872dec54af000bb2f44821e68d83bff95f09998d47bf012fb8e_prof);

        
        $__internal_a679137c5d533683f86527790988f9ca55e85faee65a04892dfffa79728afbe4->leave($__internal_a679137c5d533683f86527790988f9ca55e85faee65a04892dfffa79728afbe4_prof);

    }

    public function getTemplateName()
    {
        return "GestorDeProjecteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 55,  131 => 27,  126 => 24,  117 => 23,  100 => 18,  83 => 17,  69 => 56,  67 => 55,  64 => 54,  62 => 23,  56 => 19,  54 => 18,  50 => 17,  46 => 16,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <!-- Latest compiled and minified CSS -->
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

\t<!-- Optional theme -->
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

\t<!-- Latest compiled and minified JavaScript -->
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
\t<link href=\"{{ asset('css/style.css') }}\" type=\"text/css\" rel=\"stylesheet\" /> 
    <title>{% block title %}{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
</head>

<body>

    {% block body %}
    <div class=\"container\">
\t    <div class=\"row\">
\t    \t<div class=\"col-lg-6 col-lg-offset-3\">
\t    \t\t<img class=\"pull-right\" src=\"{{asset('../web/img/logo2.png')}}\">
\t    \t\t
\t    \t</div>
\t    </div>
\t    <div class=\"col-lg-6 col-lg-offset-3 mT15\">
\t    \t\t
\t\t\t<div class=\"cuadrat\">
\t\t\t\t<div class=\"col-lg-6 col-lg-offset-3 cont\">
\t\t\t\t\t<div class=\" text-center mT15\">
\t\t\t\t\t<label>Usuari</label><br>
\t    \t\t\t<input type=\"text\" name=\"user\" class=\"form-control w100 centrarHoritz\" placeholder=\"usuari\">
\t\t\t\t</div>
\t    \t\t<div class=\" text-center mT15 mB15\">
\t\t    \t\t<label>Contrasenya</label><br>
\t\t    \t\t<input type=\"password\" name=\"password\" class=\"form-control w100 centrarHoritz\" placeholder=\"contrasenya\">
\t\t    \t</div>\t 
\t\t    \t<div class=\" text-right mT15 mB15 \">
\t\t    \t
\t\t    \t\t<input type=\"submit\" name=\"submit\" class=\"btn btn-negre \" value=\"login\">
\t\t    \t</div>
\t\t\t\t</div>
\t\t\t\t\t 
\t\t\t</div>
\t    </div>
    </div>

    {% endblock %}

    {% block javascripts %}{% endblock %}
</body>

</html>

", "GestorDeProjecteBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\acCompany\\src\\GestorDeProjecteBundle/Resources/views/Default/index.html.twig");
    }
}
