<?php

/* base.html.twig */
class __TwigTemplate_d4d0a9b3227fa79198035a537de49b076fed2d5e5c4774488a428f50c409be25 extends Twig_Template
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
        $__internal_7a4b67012f92878ec4faf1b212ef90d5443a4905b1446e38d2b0a7b2c4daf883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a4b67012f92878ec4faf1b212ef90d5443a4905b1446e38d2b0a7b2c4daf883->enter($__internal_7a4b67012f92878ec4faf1b212ef90d5443a4905b1446e38d2b0a7b2c4daf883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f28b51cda15828133b3d0ad2840f2e94afaef47007685bf5c00f02358e0d803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f28b51cda15828133b3d0ad2840f2e94afaef47007685bf5c00f02358e0d803->enter($__internal_6f28b51cda15828133b3d0ad2840f2e94afaef47007685bf5c00f02358e0d803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
    <body>
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "    </body>
    ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "</html>
";
        
        $__internal_7a4b67012f92878ec4faf1b212ef90d5443a4905b1446e38d2b0a7b2c4daf883->leave($__internal_7a4b67012f92878ec4faf1b212ef90d5443a4905b1446e38d2b0a7b2c4daf883_prof);

        
        $__internal_6f28b51cda15828133b3d0ad2840f2e94afaef47007685bf5c00f02358e0d803->leave($__internal_6f28b51cda15828133b3d0ad2840f2e94afaef47007685bf5c00f02358e0d803_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2219f9258ed52adf9cfc05eb43ed66def1d29b11523728a0e4cdc385ecee65c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2219f9258ed52adf9cfc05eb43ed66def1d29b11523728a0e4cdc385ecee65c->enter($__internal_d2219f9258ed52adf9cfc05eb43ed66def1d29b11523728a0e4cdc385ecee65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af770f82efd2ea537b5a01249c74d1e94248a7ec2e536a3fe9a021979e744ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af770f82efd2ea537b5a01249c74d1e94248a7ec2e536a3fe9a021979e744ea9->enter($__internal_af770f82efd2ea537b5a01249c74d1e94248a7ec2e536a3fe9a021979e744ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Сайт";
        
        $__internal_af770f82efd2ea537b5a01249c74d1e94248a7ec2e536a3fe9a021979e744ea9->leave($__internal_af770f82efd2ea537b5a01249c74d1e94248a7ec2e536a3fe9a021979e744ea9_prof);

        
        $__internal_d2219f9258ed52adf9cfc05eb43ed66def1d29b11523728a0e4cdc385ecee65c->leave($__internal_d2219f9258ed52adf9cfc05eb43ed66def1d29b11523728a0e4cdc385ecee65c_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dae67ae2ed6f180a55605e6143bdedf92d32dda279691783318cd4d1b16b43b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae67ae2ed6f180a55605e6143bdedf92d32dda279691783318cd4d1b16b43b1->enter($__internal_dae67ae2ed6f180a55605e6143bdedf92d32dda279691783318cd4d1b16b43b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3abc0ad135b8936305a2b946bd677fe1f8c46135e8998ec68af01b6125455c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3abc0ad135b8936305a2b946bd677fe1f8c46135e8998ec68af01b6125455c43->enter($__internal_3abc0ad135b8936305a2b946bd677fe1f8c46135e8998ec68af01b6125455c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_3abc0ad135b8936305a2b946bd677fe1f8c46135e8998ec68af01b6125455c43->leave($__internal_3abc0ad135b8936305a2b946bd677fe1f8c46135e8998ec68af01b6125455c43_prof);

        
        $__internal_dae67ae2ed6f180a55605e6143bdedf92d32dda279691783318cd4d1b16b43b1->leave($__internal_dae67ae2ed6f180a55605e6143bdedf92d32dda279691783318cd4d1b16b43b1_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_418d74260925d2cc5e47f842b7698c89e20815326e0693149b3d86307215f1f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_418d74260925d2cc5e47f842b7698c89e20815326e0693149b3d86307215f1f7->enter($__internal_418d74260925d2cc5e47f842b7698c89e20815326e0693149b3d86307215f1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39fad9a3e414b4be2ba70ce96f44bd60c1cfab0a3c3c4435f9205d6c454a4b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39fad9a3e414b4be2ba70ce96f44bd60c1cfab0a3c3c4435f9205d6c454a4b57->enter($__internal_39fad9a3e414b4be2ba70ce96f44bd60c1cfab0a3c3c4435f9205d6c454a4b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "        ";
        
        $__internal_39fad9a3e414b4be2ba70ce96f44bd60c1cfab0a3c3c4435f9205d6c454a4b57->leave($__internal_39fad9a3e414b4be2ba70ce96f44bd60c1cfab0a3c3c4435f9205d6c454a4b57_prof);

        
        $__internal_418d74260925d2cc5e47f842b7698c89e20815326e0693149b3d86307215f1f7->leave($__internal_418d74260925d2cc5e47f842b7698c89e20815326e0693149b3d86307215f1f7_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_771d7503f72a842723563784fc66079c3490c4f48e500c808d75eb95eb9ac380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_771d7503f72a842723563784fc66079c3490c4f48e500c808d75eb95eb9ac380->enter($__internal_771d7503f72a842723563784fc66079c3490c4f48e500c808d75eb95eb9ac380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0451959439db08cd35d2abed274379cf25ee67b69ed16a637ed3037f211f55db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0451959439db08cd35d2abed274379cf25ee67b69ed16a637ed3037f211f55db->enter($__internal_0451959439db08cd35d2abed274379cf25ee67b69ed16a637ed3037f211f55db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_0451959439db08cd35d2abed274379cf25ee67b69ed16a637ed3037f211f55db->leave($__internal_0451959439db08cd35d2abed274379cf25ee67b69ed16a637ed3037f211f55db_prof);

        
        $__internal_771d7503f72a842723563784fc66079c3490c4f48e500c808d75eb95eb9ac380->leave($__internal_771d7503f72a842723563784fc66079c3490c4f48e500c808d75eb95eb9ac380_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 29,  151 => 26,  142 => 25,  132 => 23,  123 => 22,  111 => 16,  107 => 15,  102 => 14,  93 => 13,  75 => 8,  64 => 31,  62 => 25,  59 => 24,  57 => 22,  51 => 19,  48 => 18,  46 => 13,  38 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{% block title %}Сайт{% endblock %}</title>

    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    {% block stylesheets %}
        <link href=\"{{ asset('css/bootstrap.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"{{ asset('css/style.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"{{ asset('css/font-awesome.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    {% endblock %}

    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
    <body>
        {% block body %}
        {% endblock %}
    </body>
    {% block javascripts %}
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    {% endblock %}
</html>
", "base.html.twig", "D:\\kr\\app\\Resources\\views\\base.html.twig");
    }
}
