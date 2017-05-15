<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_03480c688cc7c510e2f89df2fbc168f3f8ab99f352326bda75a7eb717c107531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0073c15f07919a6effe8b9b6b8e275c9236c977ab331ffecda11af1b5250c786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0073c15f07919a6effe8b9b6b8e275c9236c977ab331ffecda11af1b5250c786->enter($__internal_0073c15f07919a6effe8b9b6b8e275c9236c977ab331ffecda11af1b5250c786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c6c73ca61eb1af1f072ead58c803f145ba7c88ddb30e54546ac57e05d8a3f17d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c73ca61eb1af1f072ead58c803f145ba7c88ddb30e54546ac57e05d8a3f17d->enter($__internal_c6c73ca61eb1af1f072ead58c803f145ba7c88ddb30e54546ac57e05d8a3f17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0073c15f07919a6effe8b9b6b8e275c9236c977ab331ffecda11af1b5250c786->leave($__internal_0073c15f07919a6effe8b9b6b8e275c9236c977ab331ffecda11af1b5250c786_prof);

        
        $__internal_c6c73ca61eb1af1f072ead58c803f145ba7c88ddb30e54546ac57e05d8a3f17d->leave($__internal_c6c73ca61eb1af1f072ead58c803f145ba7c88ddb30e54546ac57e05d8a3f17d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ba43f034cc3fdf00a9cdd0cfe699c7de3a1879a1e6dfa178cf90d020d9cc754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba43f034cc3fdf00a9cdd0cfe699c7de3a1879a1e6dfa178cf90d020d9cc754->enter($__internal_8ba43f034cc3fdf00a9cdd0cfe699c7de3a1879a1e6dfa178cf90d020d9cc754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3e60e12b52e4be2ebcde8ebfd2231ba97d1eea20329079ea88b0db989f42bf75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e60e12b52e4be2ebcde8ebfd2231ba97d1eea20329079ea88b0db989f42bf75->enter($__internal_3e60e12b52e4be2ebcde8ebfd2231ba97d1eea20329079ea88b0db989f42bf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3e60e12b52e4be2ebcde8ebfd2231ba97d1eea20329079ea88b0db989f42bf75->leave($__internal_3e60e12b52e4be2ebcde8ebfd2231ba97d1eea20329079ea88b0db989f42bf75_prof);

        
        $__internal_8ba43f034cc3fdf00a9cdd0cfe699c7de3a1879a1e6dfa178cf90d020d9cc754->leave($__internal_8ba43f034cc3fdf00a9cdd0cfe699c7de3a1879a1e6dfa178cf90d020d9cc754_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_34d869a5f36fa94eb3fbc040d9e8707a02d3a2ccebb73e40ab7666df2c75cfde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d869a5f36fa94eb3fbc040d9e8707a02d3a2ccebb73e40ab7666df2c75cfde->enter($__internal_34d869a5f36fa94eb3fbc040d9e8707a02d3a2ccebb73e40ab7666df2c75cfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_92ccf1c2a7b39a27c84ac6ba243467b585ef3aab51db9a2ac37ed6f3392eaf26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ccf1c2a7b39a27c84ac6ba243467b585ef3aab51db9a2ac37ed6f3392eaf26->enter($__internal_92ccf1c2a7b39a27c84ac6ba243467b585ef3aab51db9a2ac37ed6f3392eaf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_92ccf1c2a7b39a27c84ac6ba243467b585ef3aab51db9a2ac37ed6f3392eaf26->leave($__internal_92ccf1c2a7b39a27c84ac6ba243467b585ef3aab51db9a2ac37ed6f3392eaf26_prof);

        
        $__internal_34d869a5f36fa94eb3fbc040d9e8707a02d3a2ccebb73e40ab7666df2c75cfde->leave($__internal_34d869a5f36fa94eb3fbc040d9e8707a02d3a2ccebb73e40ab7666df2c75cfde_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_42ce5ce500ad1e80215c640f676638e2da95fdb14795ddd1586ec16d4dc14733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ce5ce500ad1e80215c640f676638e2da95fdb14795ddd1586ec16d4dc14733->enter($__internal_42ce5ce500ad1e80215c640f676638e2da95fdb14795ddd1586ec16d4dc14733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_13fc50df0c3ce3f4f1687093a0e43eb295c1589dc0832004f8593c670d583d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13fc50df0c3ce3f4f1687093a0e43eb295c1589dc0832004f8593c670d583d8c->enter($__internal_13fc50df0c3ce3f4f1687093a0e43eb295c1589dc0832004f8593c670d583d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_13fc50df0c3ce3f4f1687093a0e43eb295c1589dc0832004f8593c670d583d8c->leave($__internal_13fc50df0c3ce3f4f1687093a0e43eb295c1589dc0832004f8593c670d583d8c_prof);

        
        $__internal_42ce5ce500ad1e80215c640f676638e2da95fdb14795ddd1586ec16d4dc14733->leave($__internal_42ce5ce500ad1e80215c640f676638e2da95fdb14795ddd1586ec16d4dc14733_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\kr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
