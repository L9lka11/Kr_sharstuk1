<?php

/* BloggerBlogBundle:Prepod:index.html.twig */
class __TwigTemplate_2f5626d8f13957d708c78f4331d7c74bc1cf3b2da7b826c6ec4a8ce4057282a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Prepod:index.html.twig", 2);
        $this->blocks = array(
            'body_title' => array($this, 'block_body_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4870f10f5ade4f8798db882237b21b181043a073f6055625140bfca706eddd35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4870f10f5ade4f8798db882237b21b181043a073f6055625140bfca706eddd35->enter($__internal_4870f10f5ade4f8798db882237b21b181043a073f6055625140bfca706eddd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Prepod:index.html.twig"));

        $__internal_60959947e54a0c08552f0d0c2d0453388d5a0e9268bf35bb3a54a076a30a89f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60959947e54a0c08552f0d0c2d0453388d5a0e9268bf35bb3a54a076a30a89f9->enter($__internal_60959947e54a0c08552f0d0c2d0453388d5a0e9268bf35bb3a54a076a30a89f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Prepod:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4870f10f5ade4f8798db882237b21b181043a073f6055625140bfca706eddd35->leave($__internal_4870f10f5ade4f8798db882237b21b181043a073f6055625140bfca706eddd35_prof);

        
        $__internal_60959947e54a0c08552f0d0c2d0453388d5a0e9268bf35bb3a54a076a30a89f9->leave($__internal_60959947e54a0c08552f0d0c2d0453388d5a0e9268bf35bb3a54a076a30a89f9_prof);

    }

    // line 4
    public function block_body_title($context, array $blocks = array())
    {
        $__internal_c62b1d41d66836149afd90f76c762ff42b999123def7a348ab938c45706a2bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c62b1d41d66836149afd90f76c762ff42b999123def7a348ab938c45706a2bd5->enter($__internal_c62b1d41d66836149afd90f76c762ff42b999123def7a348ab938c45706a2bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_title"));

        $__internal_056f50a8bdf98c414e47750c708b261f4cb6bbe532eb911aa6f2ea014f330ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056f50a8bdf98c414e47750c708b261f4cb6bbe532eb911aa6f2ea014f330ff9->enter($__internal_056f50a8bdf98c414e47750c708b261f4cb6bbe532eb911aa6f2ea014f330ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_title"));

        echo "Пенель преподавателя";
        
        $__internal_056f50a8bdf98c414e47750c708b261f4cb6bbe532eb911aa6f2ea014f330ff9->leave($__internal_056f50a8bdf98c414e47750c708b261f4cb6bbe532eb911aa6f2ea014f330ff9_prof);

        
        $__internal_c62b1d41d66836149afd90f76c762ff42b999123def7a348ab938c45706a2bd5->leave($__internal_c62b1d41d66836149afd90f76c762ff42b999123def7a348ab938c45706a2bd5_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2c74e783a206a1e02df77739edf9ea898217ebf7b5c79db5e3a8616ef111e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c74e783a206a1e02df77739edf9ea898217ebf7b5c79db5e3a8616ef111e2c->enter($__internal_b2c74e783a206a1e02df77739edf9ea898217ebf7b5c79db5e3a8616ef111e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f05416acc222973dde919f81b1cb2038cfb49b2cb2ea9fe1bd4aa70f75e8f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f05416acc222973dde919f81b1cb2038cfb49b2cb2ea9fe1bd4aa70f75e8f3f->enter($__internal_4f05416acc222973dde919f81b1cb2038cfb49b2cb2ea9fe1bd4aa70f75e8f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container\">
        <h1>Панель преподавателя</h1>
        <h3><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_index");
        echo "\">Зявки</a></h3>
        <h3><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_homepage");
        echo "\">На главную</a></h3>
        <h3><a class=\"btn btn-danger\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_security_logout");
        echo "\">Выход</a></h3>
    </div>
";
        
        $__internal_4f05416acc222973dde919f81b1cb2038cfb49b2cb2ea9fe1bd4aa70f75e8f3f->leave($__internal_4f05416acc222973dde919f81b1cb2038cfb49b2cb2ea9fe1bd4aa70f75e8f3f_prof);

        
        $__internal_b2c74e783a206a1e02df77739edf9ea898217ebf7b5c79db5e3a8616ef111e2c->leave($__internal_b2c74e783a206a1e02df77739edf9ea898217ebf7b5c79db5e3a8616ef111e2c_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Prepod:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 11,  76 => 10,  72 => 9,  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/index.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block body_title %}Пенель преподавателя{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Панель преподавателя</h1>
        <h3><a href=\"{{ path('blogger_blog_bidd_index') }}\">Зявки</a></h3>
        <h3><a href=\"{{ path('blogger_blog_homepage') }}\">На главную</a></h3>
        <h3><a class=\"btn btn-danger\" href=\"{{ path('_security_logout') }}\">Выход</a></h3>
    </div>
{% endblock %}", "BloggerBlogBundle:Prepod:index.html.twig", "D:\\kr\\src\\Blogger\\BlogBundle/Resources/views/Prepod/index.html.twig");
    }
}
