<?php

/* @BloggerBlog/Bidd/edit.html.twig */
class __TwigTemplate_5af11c6a8b69b77cc19bf00ad806e30870e336077100b8497588167eb5738bbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@BloggerBlog/Bidd/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a16f5c28eca8ed20127da68439a327c5b725b7b6dcedb0c71a2ef01655ef6387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a16f5c28eca8ed20127da68439a327c5b725b7b6dcedb0c71a2ef01655ef6387->enter($__internal_a16f5c28eca8ed20127da68439a327c5b725b7b6dcedb0c71a2ef01655ef6387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Bidd/edit.html.twig"));

        $__internal_aaa70ab8f17c852b2faa26595e70bd57b08a2cac4d86e596696ff486670f00a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa70ab8f17c852b2faa26595e70bd57b08a2cac4d86e596696ff486670f00a3->enter($__internal_aaa70ab8f17c852b2faa26595e70bd57b08a2cac4d86e596696ff486670f00a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Bidd/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a16f5c28eca8ed20127da68439a327c5b725b7b6dcedb0c71a2ef01655ef6387->leave($__internal_a16f5c28eca8ed20127da68439a327c5b725b7b6dcedb0c71a2ef01655ef6387_prof);

        
        $__internal_aaa70ab8f17c852b2faa26595e70bd57b08a2cac4d86e596696ff486670f00a3->leave($__internal_aaa70ab8f17c852b2faa26595e70bd57b08a2cac4d86e596696ff486670f00a3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bf8aa3b5a64cde9919998cd8b852195dc4b146f05c1f49b60ebd3d61680f6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf8aa3b5a64cde9919998cd8b852195dc4b146f05c1f49b60ebd3d61680f6f8->enter($__internal_9bf8aa3b5a64cde9919998cd8b852195dc4b146f05c1f49b60ebd3d61680f6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f34d947f82c541e2a88787acd6c0605c303c9befedb79ea508bb4cdf21dccf1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34d947f82c541e2a88787acd6c0605c303c9befedb79ea508bb4cdf21dccf1a->enter($__internal_f34d947f82c541e2a88787acd6c0605c303c9befedb79ea508bb4cdf21dccf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <h1>Редактирование заявки</h1>
        <hr>
        ";
        // line 7
        if ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "            <div class=\"alert alert-success\">
                ";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 12
        echo "
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 13, $this->getSourceContext()); })()), 'form_start');
        echo "
        <div class=\"form-group\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 15, $this->getSourceContext()); })()), 'errors');
        echo "
            <label for=\"title\">ФИО:</label>
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 17, $this->getSourceContext()); })()), "fio", array()), 'widget', array("attr" => array("class" => "form-control form-field", "id" => "blogger_blogbundle_bidd_fio", "placeholder" => "Введите фио")));
        echo "
        </div>
        <div class=\"form-group\">
            <label for=\"blogger_blogbundle_bidd_mark1\">Оценка по 1-му предмету:</label>
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 21, $this->getSourceContext()); })()), "mark1", array()), 'widget', array("attr" => array("class" => "form-control form-field", "id" => "blogger_blogbundle_bidd_mark1", "placeholder" => "Введите оценку", "min" => "0", "max" => "100")));
        echo "
        </div>
        <div class=\"form-group\">
            <label for=\"blogger_blogbundle_bidd_mark2\">Оценка по 2-му предмету:</label>
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 25, $this->getSourceContext()); })()), "mark2", array()), 'widget', array("attr" => array("class" => "form-control form-field", "id" => "blogger_blogbundle_bidd_mark2", "placeholder" => "Введите оценку", "min" => "0", "max" => "100")));
        echo "
        </div>
        <div class=\"form-group\">
            <label for=\"blogger_blogbundle_bidd_mark3\">Оценка по 3-му предмету:</label>
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 29, $this->getSourceContext()); })()), "mark3", array()), 'widget', array("attr" => array("class" => "form-control form-field", "id" => "blogger_blogbundle_bidd_mark3", "placeholder" => "Введите оценку", "min" => "0", "max" => "100")));
        echo "
        </div>
        <div class=\"form-group\">
            <label for=\"blogger_blogbundle_bidd_check1\">Специальность:</label>
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 33, $this->getSourceContext()); })()), "specialty", array()), 'widget', array("attr" => array("class" => "form-control form-field", "id" => "blogger_blogbundle_bidd_check1")));
        echo "
        </div>
        <div class=\"form-group\">
            <label for=\"blogger_blogbundle_bidd_check1\">Подтверждение оценок:</label>
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 37, $this->getSourceContext()); })()), "check1", array()), 'widget', array("attr" => array("id" => "blogger_blogbundle_bidd_check1")));
        echo "
        </div>
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 39, $this->getSourceContext()); })()), 'rest');
        echo "
            ";
        // line 41
        echo "            <input class=\"btn btn-warning\" type=\"submit\" value=\"Редактировать\">
        ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 42, $this->getSourceContext()); })()), 'form_end');
        echo "

        <div>
            <br>
            ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 46, $this->getSourceContext()); })()), 'form_start');
        echo "
            <input class=\"btn btn-danger\" type=\"submit\" value=\"Удалить\">
            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 48, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>

        <h3><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_index");
        echo "\">Назад к заявкам</a></h3>
    </div>
";
        
        $__internal_f34d947f82c541e2a88787acd6c0605c303c9befedb79ea508bb4cdf21dccf1a->leave($__internal_f34d947f82c541e2a88787acd6c0605c303c9befedb79ea508bb4cdf21dccf1a_prof);

        
        $__internal_9bf8aa3b5a64cde9919998cd8b852195dc4b146f05c1f49b60ebd3d61680f6f8->leave($__internal_9bf8aa3b5a64cde9919998cd8b852195dc4b146f05c1f49b60ebd3d61680f6f8_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Bidd/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 51,  137 => 48,  132 => 46,  125 => 42,  122 => 41,  118 => 39,  113 => 37,  106 => 33,  99 => 29,  92 => 25,  85 => 21,  78 => 17,  73 => 15,  68 => 13,  65 => 12,  59 => 9,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <h1>Редактирование заявки</h1>
        <hr>
        {% if message  %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endif %}

        {{ form_start(edit_form) }}
        <div class=\"form-group\">
            {{ form_errors(edit_form) }}
            <label for=\"title\">ФИО:</label>
            {{ form_widget(edit_form.fio, {'attr': {'class':'form-control form-field', 'id': 'blogger_blogbundle_bidd_fio', 'placeholder': 'Введите фио'}}) }}
        </div>
        <div class=\"form-group\">
            <label for=\"blogger_blogbundle_bidd_mark1\">Оценка по 1-му предмету:</label>
            {{ form_widget(edit_form.mark1, {'attr': {'class':'form-control form-field', 'id': 'blogger_blogbundle_bidd_mark1', 'placeholder': 'Введите оценку', 'min': '0', 'max': '100'}}) }}
        </div>
        <div class=\"form-group\">
            <label for=\"blogger_blogbundle_bidd_mark2\">Оценка по 2-му предмету:</label>
            {{ form_widget(edit_form.mark2, {'attr': {'class':'form-control form-field', 'id': 'blogger_blogbundle_bidd_mark2', 'placeholder': 'Введите оценку', 'min': '0', 'max': '100'}}) }}
        </div>
        <div class=\"form-group\">
            <label for=\"blogger_blogbundle_bidd_mark3\">Оценка по 3-му предмету:</label>
            {{ form_widget(edit_form.mark3, {'attr': {'class':'form-control form-field', 'id': 'blogger_blogbundle_bidd_mark3', 'placeholder': 'Введите оценку', 'min': '0', 'max': '100'}}) }}
        </div>
        <div class=\"form-group\">
            <label for=\"blogger_blogbundle_bidd_check1\">Специальность:</label>
            {{ form_widget(edit_form.specialty, {'attr': {'class':'form-control form-field', 'id': 'blogger_blogbundle_bidd_check1'}}) }}
        </div>
        <div class=\"form-group\">
            <label for=\"blogger_blogbundle_bidd_check1\">Подтверждение оценок:</label>
            {{ form_widget(edit_form.check1, {'attr': {'id': 'blogger_blogbundle_bidd_check1'}}) }}
        </div>
        {{ form_rest(edit_form) }}
            {#{{ form_widget(edit_form) }}#}
            <input class=\"btn btn-warning\" type=\"submit\" value=\"Редактировать\">
        {{ form_end(edit_form) }}

        <div>
            <br>
            {{ form_start(delete_form) }}
            <input class=\"btn btn-danger\" type=\"submit\" value=\"Удалить\">
            {{ form_end(delete_form) }}
        </div>

        <h3><a href=\"{{ path('blogger_blog_bidd_index') }}\">Назад к заявкам</a></h3>
    </div>
{% endblock %}", "@BloggerBlog/Bidd/edit.html.twig", "D:\\kr\\src\\Blogger\\BlogBundle\\Resources\\views\\Bidd\\edit.html.twig");
    }
}
