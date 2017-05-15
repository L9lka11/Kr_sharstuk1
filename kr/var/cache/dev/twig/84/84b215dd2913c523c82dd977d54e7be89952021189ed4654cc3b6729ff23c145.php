<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5cf45283c8aa082a23c3dc714cd33383b7738088d9448ed72c821ee832905a83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4911f8117f414641cfef03cd3df2127344a6f6c406a1832cbee3bf2ee284938a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4911f8117f414641cfef03cd3df2127344a6f6c406a1832cbee3bf2ee284938a->enter($__internal_4911f8117f414641cfef03cd3df2127344a6f6c406a1832cbee3bf2ee284938a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_adae9d97591bc2acf19453620d4bc09f29ae15a4050addf78372918493d0644a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adae9d97591bc2acf19453620d4bc09f29ae15a4050addf78372918493d0644a->enter($__internal_adae9d97591bc2acf19453620d4bc09f29ae15a4050addf78372918493d0644a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4911f8117f414641cfef03cd3df2127344a6f6c406a1832cbee3bf2ee284938a->leave($__internal_4911f8117f414641cfef03cd3df2127344a6f6c406a1832cbee3bf2ee284938a_prof);

        
        $__internal_adae9d97591bc2acf19453620d4bc09f29ae15a4050addf78372918493d0644a->leave($__internal_adae9d97591bc2acf19453620d4bc09f29ae15a4050addf78372918493d0644a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9f0c350fa10c490b28ee92cb6b6431294521308425d46e37f192aef571603714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f0c350fa10c490b28ee92cb6b6431294521308425d46e37f192aef571603714->enter($__internal_9f0c350fa10c490b28ee92cb6b6431294521308425d46e37f192aef571603714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8add20645c9797450becf423da1460f7ef3e336a8f1a9e8771e4ca310b25ba6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8add20645c9797450becf423da1460f7ef3e336a8f1a9e8771e4ca310b25ba6c->enter($__internal_8add20645c9797450becf423da1460f7ef3e336a8f1a9e8771e4ca310b25ba6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_8add20645c9797450becf423da1460f7ef3e336a8f1a9e8771e4ca310b25ba6c->leave($__internal_8add20645c9797450becf423da1460f7ef3e336a8f1a9e8771e4ca310b25ba6c_prof);

        
        $__internal_9f0c350fa10c490b28ee92cb6b6431294521308425d46e37f192aef571603714->leave($__internal_9f0c350fa10c490b28ee92cb6b6431294521308425d46e37f192aef571603714_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\kr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
