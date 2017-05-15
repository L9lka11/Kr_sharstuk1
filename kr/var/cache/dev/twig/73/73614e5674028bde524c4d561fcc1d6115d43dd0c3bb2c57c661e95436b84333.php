<?php

/* @BloggerBlog/Bidd/index.html.twig */
class __TwigTemplate_02e647f8f9c81674d19f0f006d67e32ac6b423b3f57b2bf6fa64d72bb55aa6a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@BloggerBlog/Bidd/index.html.twig", 1);
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
        $__internal_3168872ba40d193936f2099bebee89def5885b7039e8cd5f8e37a81fdc19c001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3168872ba40d193936f2099bebee89def5885b7039e8cd5f8e37a81fdc19c001->enter($__internal_3168872ba40d193936f2099bebee89def5885b7039e8cd5f8e37a81fdc19c001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Bidd/index.html.twig"));

        $__internal_1f5c87bbcc526d42c1a967f080307ac51557beadf4b96a33bbdfaa1255c0c652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5c87bbcc526d42c1a967f080307ac51557beadf4b96a33bbdfaa1255c0c652->enter($__internal_1f5c87bbcc526d42c1a967f080307ac51557beadf4b96a33bbdfaa1255c0c652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Bidd/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3168872ba40d193936f2099bebee89def5885b7039e8cd5f8e37a81fdc19c001->leave($__internal_3168872ba40d193936f2099bebee89def5885b7039e8cd5f8e37a81fdc19c001_prof);

        
        $__internal_1f5c87bbcc526d42c1a967f080307ac51557beadf4b96a33bbdfaa1255c0c652->leave($__internal_1f5c87bbcc526d42c1a967f080307ac51557beadf4b96a33bbdfaa1255c0c652_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_691895f37754e1874497f24147aadcc8c2d4b309e8813c77f5a9fcdf3432f3d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_691895f37754e1874497f24147aadcc8c2d4b309e8813c77f5a9fcdf3432f3d9->enter($__internal_691895f37754e1874497f24147aadcc8c2d4b309e8813c77f5a9fcdf3432f3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_854eee4b14a171db077c466c5b31025b56854dc2eb46d257d03382184a2fbe12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854eee4b14a171db077c466c5b31025b56854dc2eb46d257d03382184a2fbe12->enter($__internal_854eee4b14a171db077c466c5b31025b56854dc2eb46d257d03382184a2fbe12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <h1>Заявки</h1>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>ФИО</th>
                    <th>Оценка 1</th>
                    <th>Оценка 2</th>
                    <th>Оценка 3</th>
                    <th>Специальность</th>
                    <th>Подтверждение</th>
                    <th>Редактирование</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bidds"]) || array_key_exists("bidds", $context) ? $context["bidds"] : (function () { throw new Twig_Error_Runtime('Variable "bidds" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bidd"]) {
            // line 22
            echo "                <tr>
                    <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "fio", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "mark1", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "mark2", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "mark3", array()), "html", null, true);
            echo "</td>
                    ";
            // line 28
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "check1", array())) {
                // line 29
                echo "                        <td>Да</td>
                        ";
            } else {
                // line 31
                echo "                        <td>Нет</td>
                    ";
            }
            // line 33
            echo "                    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "specialty", array()), "title", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "id", array()))), "html", null, true);
            echo "\">Просмотреть</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "id", array()))), "html", null, true);
            echo "\">Редактировать</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bidd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </tbody>
        </table>
        <hr>
        <h3><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_prepod");
        echo "\">Назад в панель преподавателя</a></h3>
    </div>
";
        
        $__internal_854eee4b14a171db077c466c5b31025b56854dc2eb46d257d03382184a2fbe12->leave($__internal_854eee4b14a171db077c466c5b31025b56854dc2eb46d257d03382184a2fbe12_prof);

        
        $__internal_691895f37754e1874497f24147aadcc8c2d4b309e8813c77f5a9fcdf3432f3d9->leave($__internal_691895f37754e1874497f24147aadcc8c2d4b309e8813c77f5a9fcdf3432f3d9_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Bidd/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 49,  133 => 46,  121 => 40,  115 => 37,  107 => 33,  103 => 31,  99 => 29,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  75 => 23,  72 => 22,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <h1>Заявки</h1>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>ФИО</th>
                    <th>Оценка 1</th>
                    <th>Оценка 2</th>
                    <th>Оценка 3</th>
                    <th>Специальность</th>
                    <th>Подтверждение</th>
                    <th>Редактирование</th>
                </tr>
            </thead>
            <tbody>
            {% for bidd in bidds %}
                <tr>
                    <td><a href=\"{{ path('blogger_blog_bidd_show', { 'id': bidd.id }) }}\">{{ bidd.id }}</a></td>
                    <td>{{ bidd.fio }}</td>
                    <td>{{ bidd.mark1 }}</td>
                    <td>{{ bidd.mark2 }}</td>
                    <td>{{ bidd.mark3 }}</td>
                    {% if bidd.check1 %}
                        <td>Да</td>
                        {% else %}
                        <td>Нет</td>
                    {% endif %}
                    <td>{{ bidd.specialty.title }}</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"{{ path('blogger_blog_bidd_show', { 'id': bidd.id }) }}\">Просмотреть</a>
                            </li>
                            <li>
                                <a href=\"{{ path('blogger_blog_bidd_edit', { 'id': bidd.id }) }}\">Редактировать</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        <hr>
        <h3><a href=\"{{ path('blogger_blog_prepod') }}\">Назад в панель преподавателя</a></h3>
    </div>
{% endblock %}
", "@BloggerBlog/Bidd/index.html.twig", "D:\\kr\\src\\Blogger\\BlogBundle\\Resources\\views\\Bidd\\index.html.twig");
    }
}
