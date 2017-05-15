<?php

/* ::base.html.twig */
class __TwigTemplate_4e833a7fe4690efe8782547558dddc4ecb143d1804fd3612ebad32b7503d6f49 extends Twig_Template
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
        $__internal_3f5c999ad2cbd57128735bc886291937d3d43a96cebabd2ef3c027d41e00045f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5c999ad2cbd57128735bc886291937d3d43a96cebabd2ef3c027d41e00045f->enter($__internal_3f5c999ad2cbd57128735bc886291937d3d43a96cebabd2ef3c027d41e00045f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a2c3220cc2d757a3be56b8a6563b990edbe7e74bf62c4d7495d0e25a412f8e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c3220cc2d757a3be56b8a6563b990edbe7e74bf62c4d7495d0e25a412f8e45->enter($__internal_a2c3220cc2d757a3be56b8a6563b990edbe7e74bf62c4d7495d0e25a412f8e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3f5c999ad2cbd57128735bc886291937d3d43a96cebabd2ef3c027d41e00045f->leave($__internal_3f5c999ad2cbd57128735bc886291937d3d43a96cebabd2ef3c027d41e00045f_prof);

        
        $__internal_a2c3220cc2d757a3be56b8a6563b990edbe7e74bf62c4d7495d0e25a412f8e45->leave($__internal_a2c3220cc2d757a3be56b8a6563b990edbe7e74bf62c4d7495d0e25a412f8e45_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e451d725dcaaa7f1a805c19d157b860522f3daca6efd6e8c29046478185e15e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e451d725dcaaa7f1a805c19d157b860522f3daca6efd6e8c29046478185e15e->enter($__internal_1e451d725dcaaa7f1a805c19d157b860522f3daca6efd6e8c29046478185e15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b85ff758591f9ab36e5306cea77aec4a560751b725ddbe8c05fc62d4b5a26b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b85ff758591f9ab36e5306cea77aec4a560751b725ddbe8c05fc62d4b5a26b9->enter($__internal_2b85ff758591f9ab36e5306cea77aec4a560751b725ddbe8c05fc62d4b5a26b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Сайт";
        
        $__internal_2b85ff758591f9ab36e5306cea77aec4a560751b725ddbe8c05fc62d4b5a26b9->leave($__internal_2b85ff758591f9ab36e5306cea77aec4a560751b725ddbe8c05fc62d4b5a26b9_prof);

        
        $__internal_1e451d725dcaaa7f1a805c19d157b860522f3daca6efd6e8c29046478185e15e->leave($__internal_1e451d725dcaaa7f1a805c19d157b860522f3daca6efd6e8c29046478185e15e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f3b7943a78543ecb68d73af5c269e8fcb30e0c9b7e0f81419aed97f0649a27b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f3b7943a78543ecb68d73af5c269e8fcb30e0c9b7e0f81419aed97f0649a27b->enter($__internal_9f3b7943a78543ecb68d73af5c269e8fcb30e0c9b7e0f81419aed97f0649a27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_07b8d9d8a75194b2c6f8d0c0770c37fceeec1331decd7ac6a189cbc951c828a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b8d9d8a75194b2c6f8d0c0770c37fceeec1331decd7ac6a189cbc951c828a9->enter($__internal_07b8d9d8a75194b2c6f8d0c0770c37fceeec1331decd7ac6a189cbc951c828a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_07b8d9d8a75194b2c6f8d0c0770c37fceeec1331decd7ac6a189cbc951c828a9->leave($__internal_07b8d9d8a75194b2c6f8d0c0770c37fceeec1331decd7ac6a189cbc951c828a9_prof);

        
        $__internal_9f3b7943a78543ecb68d73af5c269e8fcb30e0c9b7e0f81419aed97f0649a27b->leave($__internal_9f3b7943a78543ecb68d73af5c269e8fcb30e0c9b7e0f81419aed97f0649a27b_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd42ebe6a0c84ca1ef5c13a346d666d459cd1665401b3c420e84f945667adf83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd42ebe6a0c84ca1ef5c13a346d666d459cd1665401b3c420e84f945667adf83->enter($__internal_cd42ebe6a0c84ca1ef5c13a346d666d459cd1665401b3c420e84f945667adf83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dcdcf176ef61880bffaeeaa4dda768221b440062bdab15a40e7acc8f044f464a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcdcf176ef61880bffaeeaa4dda768221b440062bdab15a40e7acc8f044f464a->enter($__internal_dcdcf176ef61880bffaeeaa4dda768221b440062bdab15a40e7acc8f044f464a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "        ";
        
        $__internal_dcdcf176ef61880bffaeeaa4dda768221b440062bdab15a40e7acc8f044f464a->leave($__internal_dcdcf176ef61880bffaeeaa4dda768221b440062bdab15a40e7acc8f044f464a_prof);

        
        $__internal_cd42ebe6a0c84ca1ef5c13a346d666d459cd1665401b3c420e84f945667adf83->leave($__internal_cd42ebe6a0c84ca1ef5c13a346d666d459cd1665401b3c420e84f945667adf83_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aec9c14c8f9203b52b7a3ae365c7d52953e3dff1815e47f164123735893b419c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec9c14c8f9203b52b7a3ae365c7d52953e3dff1815e47f164123735893b419c->enter($__internal_aec9c14c8f9203b52b7a3ae365c7d52953e3dff1815e47f164123735893b419c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e7063332e6d3b0d69dd9f70683a5eb1b5154f0410b590f6b44d3d12c05b43d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7063332e6d3b0d69dd9f70683a5eb1b5154f0410b590f6b44d3d12c05b43d08->enter($__internal_e7063332e6d3b0d69dd9f70683a5eb1b5154f0410b590f6b44d3d12c05b43d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_e7063332e6d3b0d69dd9f70683a5eb1b5154f0410b590f6b44d3d12c05b43d08->leave($__internal_e7063332e6d3b0d69dd9f70683a5eb1b5154f0410b590f6b44d3d12c05b43d08_prof);

        
        $__internal_aec9c14c8f9203b52b7a3ae365c7d52953e3dff1815e47f164123735893b419c->leave($__internal_aec9c14c8f9203b52b7a3ae365c7d52953e3dff1815e47f164123735893b419c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "D:\\kr\\app/Resources\\views/base.html.twig");
    }
}
