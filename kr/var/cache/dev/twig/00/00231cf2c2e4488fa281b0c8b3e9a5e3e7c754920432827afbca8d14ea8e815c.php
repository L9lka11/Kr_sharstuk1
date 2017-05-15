<?php

/* BloggerBlogBundle:Page:index.html.twig */
class __TwigTemplate_21246bdf3c9161f895236ea27c28cd9d3f466ef9a304dd88c6ce0cab63013463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:index.html.twig", 2);
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
        $__internal_3d67b00d30cf2cb3fd47739d13a604ac655dd2bca99eba426fda8f30de7652c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d67b00d30cf2cb3fd47739d13a604ac655dd2bca99eba426fda8f30de7652c4->enter($__internal_3d67b00d30cf2cb3fd47739d13a604ac655dd2bca99eba426fda8f30de7652c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $__internal_07f9b94dd47bdb0a08ae3a4f42faeb94c7996b9e3f6d7ac40fa821e30c6ad0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f9b94dd47bdb0a08ae3a4f42faeb94c7996b9e3f6d7ac40fa821e30c6ad0dd->enter($__internal_07f9b94dd47bdb0a08ae3a4f42faeb94c7996b9e3f6d7ac40fa821e30c6ad0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d67b00d30cf2cb3fd47739d13a604ac655dd2bca99eba426fda8f30de7652c4->leave($__internal_3d67b00d30cf2cb3fd47739d13a604ac655dd2bca99eba426fda8f30de7652c4_prof);

        
        $__internal_07f9b94dd47bdb0a08ae3a4f42faeb94c7996b9e3f6d7ac40fa821e30c6ad0dd->leave($__internal_07f9b94dd47bdb0a08ae3a4f42faeb94c7996b9e3f6d7ac40fa821e30c6ad0dd_prof);

    }

    // line 4
    public function block_body_title($context, array $blocks = array())
    {
        $__internal_572195b7b0e99b2cf4ae1853a58d2b921bd97eb1f9f017d382be25a79cf4a38d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_572195b7b0e99b2cf4ae1853a58d2b921bd97eb1f9f017d382be25a79cf4a38d->enter($__internal_572195b7b0e99b2cf4ae1853a58d2b921bd97eb1f9f017d382be25a79cf4a38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_title"));

        $__internal_09039325f760b10889b264693bdf82622ad96f438cf94cea79c39d70294af735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09039325f760b10889b264693bdf82622ad96f438cf94cea79c39d70294af735->enter($__internal_09039325f760b10889b264693bdf82622ad96f438cf94cea79c39d70294af735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_title"));

        echo "Главная";
        
        $__internal_09039325f760b10889b264693bdf82622ad96f438cf94cea79c39d70294af735->leave($__internal_09039325f760b10889b264693bdf82622ad96f438cf94cea79c39d70294af735_prof);

        
        $__internal_572195b7b0e99b2cf4ae1853a58d2b921bd97eb1f9f017d382be25a79cf4a38d->leave($__internal_572195b7b0e99b2cf4ae1853a58d2b921bd97eb1f9f017d382be25a79cf4a38d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_0833a55e452b21729db310bef01a12b519f3548cdc1adb4867fe14d28847096d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0833a55e452b21729db310bef01a12b519f3548cdc1adb4867fe14d28847096d->enter($__internal_0833a55e452b21729db310bef01a12b519f3548cdc1adb4867fe14d28847096d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_463dbfdc3418b35cc6fc1bae643215620e85f958e1a263cecf838d55d8c04a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463dbfdc3418b35cc6fc1bae643215620e85f958e1a263cecf838d55d8c04a87->enter($__internal_463dbfdc3418b35cc6fc1bae643215620e85f958e1a263cecf838d55d8c04a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container \" >
        ";
        // line 8
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 9
            echo "            <a class=\"btn btn-warning center-block but\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_security_logout");
            echo "\">Выход</a>
        ";
        } else {
            // line 11
            echo "            <a class=\"btn btn-success center-block but\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_security_login");
            echo "\">Вход</a>
        ";
        }
        // line 13
        echo "

        ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 16
            echo "            <a class=\"btn btn-success center-block but\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_prepod");
            echo "\">Редактирование заявок</a>
        ";
        } else {
            // line 18
            echo "            <a class=\"btn btn-success center-block but1\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_new");
            echo "\">Подать заявку</a>
        ";
        }
        // line 20
        echo "

    </div>
";
        
        $__internal_463dbfdc3418b35cc6fc1bae643215620e85f958e1a263cecf838d55d8c04a87->leave($__internal_463dbfdc3418b35cc6fc1bae643215620e85f958e1a263cecf838d55d8c04a87_prof);

        
        $__internal_0833a55e452b21729db310bef01a12b519f3548cdc1adb4867fe14d28847096d->leave($__internal_0833a55e452b21729db310bef01a12b519f3548cdc1adb4867fe14d28847096d_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 20,  97 => 18,  91 => 16,  89 => 15,  85 => 13,  79 => 11,  73 => 9,  71 => 8,  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/index.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block body_title %}Главная{% endblock %}

{% block body %}
    <div class=\"container \" >
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <a class=\"btn btn-warning center-block but\" href=\"{{ path('_security_logout') }}\">Выход</a>
        {% else %}
            <a class=\"btn btn-success center-block but\" href=\"{{ path('_security_login') }}\">Вход</a>
        {% endif %}


        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <a class=\"btn btn-success center-block but\" href=\"{{ path('blogger_blog_prepod') }}\">Редактирование заявок</a>
        {% else %}
            <a class=\"btn btn-success center-block but1\" href=\"{{ path('blogger_blog_bidd_new') }}\">Подать заявку</a>
        {% endif %}


    </div>
{% endblock %}", "BloggerBlogBundle:Page:index.html.twig", "D:\\kr\\src\\Blogger\\BlogBundle/Resources/views/Page/index.html.twig");
    }
}
