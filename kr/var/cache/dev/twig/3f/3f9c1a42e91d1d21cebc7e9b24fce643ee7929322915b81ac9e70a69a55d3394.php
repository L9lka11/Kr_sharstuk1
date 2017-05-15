<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5e8398b7b6d706575966b4fadc774e41d6462910f5c66788d6916fdc4331e3d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_371dbbda57b575445bac28e743455ff04daba56ff6d3d206e65aa88ab26d1cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371dbbda57b575445bac28e743455ff04daba56ff6d3d206e65aa88ab26d1cde->enter($__internal_371dbbda57b575445bac28e743455ff04daba56ff6d3d206e65aa88ab26d1cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_27d1d3ac5b64e2e84e428f04f6c4517583b23f74f2bf75aa0a28e0b3f602d28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d1d3ac5b64e2e84e428f04f6c4517583b23f74f2bf75aa0a28e0b3f602d28d->enter($__internal_27d1d3ac5b64e2e84e428f04f6c4517583b23f74f2bf75aa0a28e0b3f602d28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_371dbbda57b575445bac28e743455ff04daba56ff6d3d206e65aa88ab26d1cde->leave($__internal_371dbbda57b575445bac28e743455ff04daba56ff6d3d206e65aa88ab26d1cde_prof);

        
        $__internal_27d1d3ac5b64e2e84e428f04f6c4517583b23f74f2bf75aa0a28e0b3f602d28d->leave($__internal_27d1d3ac5b64e2e84e428f04f6c4517583b23f74f2bf75aa0a28e0b3f602d28d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_554a3828c144094a7aeb12bad170c7fa3de5c0ac194aec5b23327dd3cfd294ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554a3828c144094a7aeb12bad170c7fa3de5c0ac194aec5b23327dd3cfd294ca->enter($__internal_554a3828c144094a7aeb12bad170c7fa3de5c0ac194aec5b23327dd3cfd294ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_90aad320e27d8917945d1db41be67b39aa7b870d0a5c25430b3b25a7246fa821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90aad320e27d8917945d1db41be67b39aa7b870d0a5c25430b3b25a7246fa821->enter($__internal_90aad320e27d8917945d1db41be67b39aa7b870d0a5c25430b3b25a7246fa821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_90aad320e27d8917945d1db41be67b39aa7b870d0a5c25430b3b25a7246fa821->leave($__internal_90aad320e27d8917945d1db41be67b39aa7b870d0a5c25430b3b25a7246fa821_prof);

        
        $__internal_554a3828c144094a7aeb12bad170c7fa3de5c0ac194aec5b23327dd3cfd294ca->leave($__internal_554a3828c144094a7aeb12bad170c7fa3de5c0ac194aec5b23327dd3cfd294ca_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_500f6618c7c79f327db606692f676ff009601e18cfe5a139eeed5848fb9dd740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500f6618c7c79f327db606692f676ff009601e18cfe5a139eeed5848fb9dd740->enter($__internal_500f6618c7c79f327db606692f676ff009601e18cfe5a139eeed5848fb9dd740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_df75b00a9f818f0b0ca20d2e7af4976c5637aaaddcbd3668a6d2cd030df466e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df75b00a9f818f0b0ca20d2e7af4976c5637aaaddcbd3668a6d2cd030df466e9->enter($__internal_df75b00a9f818f0b0ca20d2e7af4976c5637aaaddcbd3668a6d2cd030df466e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df75b00a9f818f0b0ca20d2e7af4976c5637aaaddcbd3668a6d2cd030df466e9->leave($__internal_df75b00a9f818f0b0ca20d2e7af4976c5637aaaddcbd3668a6d2cd030df466e9_prof);

        
        $__internal_500f6618c7c79f327db606692f676ff009601e18cfe5a139eeed5848fb9dd740->leave($__internal_500f6618c7c79f327db606692f676ff009601e18cfe5a139eeed5848fb9dd740_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_77053f32f8ec53589c4004f9702583824b700f3b9bcf1789563aea413d746045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77053f32f8ec53589c4004f9702583824b700f3b9bcf1789563aea413d746045->enter($__internal_77053f32f8ec53589c4004f9702583824b700f3b9bcf1789563aea413d746045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_91c5860db048af72199d66146093a508110f6902b46bc284d80f7a3ae28ccb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c5860db048af72199d66146093a508110f6902b46bc284d80f7a3ae28ccb94->enter($__internal_91c5860db048af72199d66146093a508110f6902b46bc284d80f7a3ae28ccb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_91c5860db048af72199d66146093a508110f6902b46bc284d80f7a3ae28ccb94->leave($__internal_91c5860db048af72199d66146093a508110f6902b46bc284d80f7a3ae28ccb94_prof);

        
        $__internal_77053f32f8ec53589c4004f9702583824b700f3b9bcf1789563aea413d746045->leave($__internal_77053f32f8ec53589c4004f9702583824b700f3b9bcf1789563aea413d746045_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\kr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
