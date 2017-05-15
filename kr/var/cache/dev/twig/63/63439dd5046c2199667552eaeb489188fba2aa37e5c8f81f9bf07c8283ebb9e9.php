<?php

/* @BloggerBlog/Bidd/show.html.twig */
class __TwigTemplate_70b6c909990e15c3eb69776fcffebee223a4da6a993ab03559205c53a64b5819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@BloggerBlog/Bidd/show.html.twig", 1);
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
        $__internal_35c996bb81e18317c53f37122cae0969ee659e622a0cd1376370f46a5fc500df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c996bb81e18317c53f37122cae0969ee659e622a0cd1376370f46a5fc500df->enter($__internal_35c996bb81e18317c53f37122cae0969ee659e622a0cd1376370f46a5fc500df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Bidd/show.html.twig"));

        $__internal_556f3cb904bfc9a9ff34ec47e4195e92ec73b63586edeac3d19a41321243aff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556f3cb904bfc9a9ff34ec47e4195e92ec73b63586edeac3d19a41321243aff4->enter($__internal_556f3cb904bfc9a9ff34ec47e4195e92ec73b63586edeac3d19a41321243aff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Bidd/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35c996bb81e18317c53f37122cae0969ee659e622a0cd1376370f46a5fc500df->leave($__internal_35c996bb81e18317c53f37122cae0969ee659e622a0cd1376370f46a5fc500df_prof);

        
        $__internal_556f3cb904bfc9a9ff34ec47e4195e92ec73b63586edeac3d19a41321243aff4->leave($__internal_556f3cb904bfc9a9ff34ec47e4195e92ec73b63586edeac3d19a41321243aff4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_33cb349e90465c9eb978a6641f57bc0121d95b40bb9b5d16aebc6e2607ff7b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33cb349e90465c9eb978a6641f57bc0121d95b40bb9b5d16aebc6e2607ff7b32->enter($__internal_33cb349e90465c9eb978a6641f57bc0121d95b40bb9b5d16aebc6e2607ff7b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4cb044c3e7d54235f8389abed7a662091a81dd96aee03bf03fc3ee1f96b034b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4cb044c3e7d54235f8389abed7a662091a81dd96aee03bf03fc3ee1f96b034b->enter($__internal_f4cb044c3e7d54235f8389abed7a662091a81dd96aee03bf03fc3ee1f96b034b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <h1>Заявка</h1>

        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bidd"]) || array_key_exists("bidd", $context) ? $context["bidd"] : (function () { throw new Twig_Error_Runtime('Variable "bidd" does not exist.', 11, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>ФИО</th>
                    <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bidd"]) || array_key_exists("bidd", $context) ? $context["bidd"] : (function () { throw new Twig_Error_Runtime('Variable "bidd" does not exist.', 15, $this->getSourceContext()); })()), "fio", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Оценка 1</th>
                    <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bidd"]) || array_key_exists("bidd", $context) ? $context["bidd"] : (function () { throw new Twig_Error_Runtime('Variable "bidd" does not exist.', 19, $this->getSourceContext()); })()), "mark1", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Оценка 2</th>
                    <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bidd"]) || array_key_exists("bidd", $context) ? $context["bidd"] : (function () { throw new Twig_Error_Runtime('Variable "bidd" does not exist.', 23, $this->getSourceContext()); })()), "mark2", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Оценка 3</th>
                    <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bidd"]) || array_key_exists("bidd", $context) ? $context["bidd"] : (function () { throw new Twig_Error_Runtime('Variable "bidd" does not exist.', 27, $this->getSourceContext()); })()), "mark3", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Специальность</th>
                    <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bidd"]) || array_key_exists("bidd", $context) ? $context["bidd"] : (function () { throw new Twig_Error_Runtime('Variable "bidd" does not exist.', 31, $this->getSourceContext()); })()), "specialty", array()), "title", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Подтверждённость оценок</th>
                    ";
        // line 35
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bidd"]) || array_key_exists("bidd", $context) ? $context["bidd"] : (function () { throw new Twig_Error_Runtime('Variable "bidd" does not exist.', 35, $this->getSourceContext()); })()), "check1", array()) == true)) {
            // line 36
            echo "                        <td>Да</td>
                    ";
        } else {
            // line 38
            echo "                        <td>Нет</td>
                    ";
        }
        // line 40
        echo "                </tr>
            </tbody>
        </table>

        <hr>

        ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 46, $this->getSourceContext()); })()), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Удалить\">
        <a class=\"btn btn-success\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bidd"]) || array_key_exists("bidd", $context) ? $context["bidd"] : (function () { throw new Twig_Error_Runtime('Variable "bidd" does not exist.', 48, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Редактировать</a>
        ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 49, $this->getSourceContext()); })()), 'form_end');
        echo "


        <hr>
        <h3><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_index");
        echo "\">Назад к списку заявок</a></h3>

    </div>
";
        
        $__internal_f4cb044c3e7d54235f8389abed7a662091a81dd96aee03bf03fc3ee1f96b034b->leave($__internal_f4cb044c3e7d54235f8389abed7a662091a81dd96aee03bf03fc3ee1f96b034b_prof);

        
        $__internal_33cb349e90465c9eb978a6641f57bc0121d95b40bb9b5d16aebc6e2607ff7b32->leave($__internal_33cb349e90465c9eb978a6641f57bc0121d95b40bb9b5d16aebc6e2607ff7b32_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Bidd/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 53,  127 => 49,  123 => 48,  118 => 46,  110 => 40,  106 => 38,  102 => 36,  100 => 35,  93 => 31,  86 => 27,  79 => 23,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <h1>Заявка</h1>

        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>{{ bidd.id }}</td>
                </tr>
                <tr>
                    <th>ФИО</th>
                    <td>{{ bidd.fio }}</td>
                </tr>
                <tr>
                    <th>Оценка 1</th>
                    <td>{{ bidd.mark1 }}</td>
                </tr>
                <tr>
                    <th>Оценка 2</th>
                    <td>{{ bidd.mark2 }}</td>
                </tr>
                <tr>
                    <th>Оценка 3</th>
                    <td>{{ bidd.mark3 }}</td>
                </tr>
                <tr>
                    <th>Специальность</th>
                    <td>{{ bidd.specialty.title }}</td>
                </tr>
                <tr>
                    <th>Подтверждённость оценок</th>
                    {% if bidd.check1 == true %}
                        <td>Да</td>
                    {% else %}
                        <td>Нет</td>
                    {% endif %}
                </tr>
            </tbody>
        </table>

        <hr>

        {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Удалить\">
        <a class=\"btn btn-success\" href=\"{{ path('blogger_blog_bidd_edit', { 'id': bidd.id }) }}\">Редактировать</a>
        {{ form_end(delete_form) }}


        <hr>
        <h3><a href=\"{{ path('blogger_blog_bidd_index') }}\">Назад к списку заявок</a></h3>

    </div>
{% endblock %}
", "@BloggerBlog/Bidd/show.html.twig", "D:\\kr\\src\\Blogger\\BlogBundle\\Resources\\views\\Bidd\\show.html.twig");
    }
}
