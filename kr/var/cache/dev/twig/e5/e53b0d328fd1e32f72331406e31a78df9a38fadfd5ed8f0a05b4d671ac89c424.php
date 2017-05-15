<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_e728caebc3b50490e241cfbaaefd94e22f5e1c1146af6378d1d8f4f6bdeedeb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "BloggerBlogBundle::layout.html.twig", 2);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8052563b0bd3a4ea303eb4ef8e89e4a6af731633ca191522da23b351664dabe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8052563b0bd3a4ea303eb4ef8e89e4a6af731633ca191522da23b351664dabe6->enter($__internal_8052563b0bd3a4ea303eb4ef8e89e4a6af731633ca191522da23b351664dabe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $__internal_018e768537a5317b8b4759e6aa1fb387cf0eca8d293bc010385fc11e94716f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018e768537a5317b8b4759e6aa1fb387cf0eca8d293bc010385fc11e94716f86->enter($__internal_018e768537a5317b8b4759e6aa1fb387cf0eca8d293bc010385fc11e94716f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8052563b0bd3a4ea303eb4ef8e89e4a6af731633ca191522da23b351664dabe6->leave($__internal_8052563b0bd3a4ea303eb4ef8e89e4a6af731633ca191522da23b351664dabe6_prof);

        
        $__internal_018e768537a5317b8b4759e6aa1fb387cf0eca8d293bc010385fc11e94716f86->leave($__internal_018e768537a5317b8b4759e6aa1fb387cf0eca8d293bc010385fc11e94716f86_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/layout.html.twig #}
{% extends '::base.html.twig' %}

", "BloggerBlogBundle::layout.html.twig", "D:\\kr\\src\\Blogger\\BlogBundle/Resources/views/layout.html.twig");
    }
}
