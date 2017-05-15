<?php

/* BloggerBlogBundle:Security:login.html.twig */
class __TwigTemplate_145dc48c67d2de7ee630c7be1121351bb545fc89fa7e1c0969635d7179900042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9db9dc016ec8cb27003f75c67d0c19beb3e482bf915d86956087110d12df930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9db9dc016ec8cb27003f75c67d0c19beb3e482bf915d86956087110d12df930->enter($__internal_e9db9dc016ec8cb27003f75c67d0c19beb3e482bf915d86956087110d12df930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Security:login.html.twig"));

        $__internal_6f577afd9a5b542715c76d1278efcae3249b9fa2c85398049156260a74aea30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f577afd9a5b542715c76d1278efcae3249b9fa2c85398049156260a74aea30e->enter($__internal_6f577afd9a5b542715c76d1278efcae3249b9fa2c85398049156260a74aea30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9db9dc016ec8cb27003f75c67d0c19beb3e482bf915d86956087110d12df930->leave($__internal_e9db9dc016ec8cb27003f75c67d0c19beb3e482bf915d86956087110d12df930_prof);

        
        $__internal_6f577afd9a5b542715c76d1278efcae3249b9fa2c85398049156260a74aea30e->leave($__internal_6f577afd9a5b542715c76d1278efcae3249b9fa2c85398049156260a74aea30e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0dabb8e76e8a6f5d3fcb13e142409813b65dce9b057376be6b4c9db4b23e9f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0dabb8e76e8a6f5d3fcb13e142409813b65dce9b057376be6b4c9db4b23e9f8->enter($__internal_f0dabb8e76e8a6f5d3fcb13e142409813b65dce9b057376be6b4c9db4b23e9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3b1d24bbbe04219506ec6849eac3c75d599444488df4ee50e1443cc5af5fae4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1d24bbbe04219506ec6849eac3c75d599444488df4ee50e1443cc5af5fae4a->enter($__internal_3b1d24bbbe04219506ec6849eac3c75d599444488df4ee50e1443cc5af5fae4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Вход";
        
        $__internal_3b1d24bbbe04219506ec6849eac3c75d599444488df4ee50e1443cc5af5fae4a->leave($__internal_3b1d24bbbe04219506ec6849eac3c75d599444488df4ee50e1443cc5af5fae4a_prof);

        
        $__internal_f0dabb8e76e8a6f5d3fcb13e142409813b65dce9b057376be6b4c9db4b23e9f8->leave($__internal_f0dabb8e76e8a6f5d3fcb13e142409813b65dce9b057376be6b4c9db4b23e9f8_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_fda0b6410f03780762bbe8d82ad42664520e8858fc3d45066107b16952f4e87a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda0b6410f03780762bbe8d82ad42664520e8858fc3d45066107b16952f4e87a->enter($__internal_fda0b6410f03780762bbe8d82ad42664520e8858fc3d45066107b16952f4e87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d82ab73d01398b2a656828784b082fd3e542c5eebc669f4c4b42aa8fb35061af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82ab73d01398b2a656828784b082fd3e542c5eebc669f4c4b42aa8fb35061af->enter($__internal_d82ab73d01398b2a656828784b082fd3e542c5eebc669f4c4b42aa8fb35061af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class=\"container\">
        ";
        // line 9
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 9, $this->getSourceContext()); })())) {
            // line 10
            echo "            <hr>
            <div class=\"alert alert-success\">
                Проверьте введённые данные
            </div>
        ";
        }
        // line 15
        echo "        <hr>
        <form action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_security_check");
        echo "\" method=\"POST\">
            <div class=\"form-group\">
                <label for=\"username\">Логин:</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Пароль:</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
            </div>
            <input type=\"submit\" class=\"btn btn-success\" name=\"login\" value=\"Отправить\" />
        </form>
        <div>
            <hr>
            <h3><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_homepage");
        echo "\" class=\"\">На главную</a></h3>
        </div>
    </div>

";
        
        $__internal_d82ab73d01398b2a656828784b082fd3e542c5eebc669f4c4b42aa8fb35061af->leave($__internal_d82ab73d01398b2a656828784b082fd3e542c5eebc669f4c4b42aa8fb35061af_prof);

        
        $__internal_fda0b6410f03780762bbe8d82ad42664520e8858fc3d45066107b16952f4e87a->leave($__internal_fda0b6410f03780762bbe8d82ad42664520e8858fc3d45066107b16952f4e87a_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 29,  90 => 19,  84 => 16,  81 => 15,  74 => 10,  72 => 9,  68 => 7,  59 => 6,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}Вход{% endblock%}


{% block body %}

    <div class=\"container\">
        {% if error %}
            <hr>
            <div class=\"alert alert-success\">
                Проверьте введённые данные
            </div>
        {% endif %}
        <hr>
        <form action=\"{{ path('_security_check') }}\" method=\"POST\">
            <div class=\"form-group\">
                <label for=\"username\">Логин:</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\">
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Пароль:</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
            </div>
            <input type=\"submit\" class=\"btn btn-success\" name=\"login\" value=\"Отправить\" />
        </form>
        <div>
            <hr>
            <h3><a href=\"{{ path('blogger_blog_homepage') }}\" class=\"\">На главную</a></h3>
        </div>
    </div>

{% endblock %}", "BloggerBlogBundle:Security:login.html.twig", "D:\\kr\\src\\Blogger\\BlogBundle/Resources/views/Security/login.html.twig");
    }
}
