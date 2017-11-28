<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fee62585540ce725c825280fd172dab572483e1cce81da574ac92688b6bbedfe extends Twig_Template
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
        $__internal_18e5d97d10f53aaec560b5078f83962ec0718158e2c4d8184747507f84d2e1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e5d97d10f53aaec560b5078f83962ec0718158e2c4d8184747507f84d2e1d4->enter($__internal_18e5d97d10f53aaec560b5078f83962ec0718158e2c4d8184747507f84d2e1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18e5d97d10f53aaec560b5078f83962ec0718158e2c4d8184747507f84d2e1d4->leave($__internal_18e5d97d10f53aaec560b5078f83962ec0718158e2c4d8184747507f84d2e1d4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d722cc385d22383f9297d19524c158834b175b6af31b82933b7e0ab5d1bf7add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d722cc385d22383f9297d19524c158834b175b6af31b82933b7e0ab5d1bf7add->enter($__internal_d722cc385d22383f9297d19524c158834b175b6af31b82933b7e0ab5d1bf7add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d722cc385d22383f9297d19524c158834b175b6af31b82933b7e0ab5d1bf7add->leave($__internal_d722cc385d22383f9297d19524c158834b175b6af31b82933b7e0ab5d1bf7add_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_99cc036a4da94969602c454f0af219cb3d5e77dc55186f470bed5f7f460cf410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99cc036a4da94969602c454f0af219cb3d5e77dc55186f470bed5f7f460cf410->enter($__internal_99cc036a4da94969602c454f0af219cb3d5e77dc55186f470bed5f7f460cf410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_99cc036a4da94969602c454f0af219cb3d5e77dc55186f470bed5f7f460cf410->leave($__internal_99cc036a4da94969602c454f0af219cb3d5e77dc55186f470bed5f7f460cf410_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a984bdab59856dc20a315d3f9d6dbc1561f8595c8f8d5fbc162ba50ba8f2159c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a984bdab59856dc20a315d3f9d6dbc1561f8595c8f8d5fbc162ba50ba8f2159c->enter($__internal_a984bdab59856dc20a315d3f9d6dbc1561f8595c8f8d5fbc162ba50ba8f2159c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a984bdab59856dc20a315d3f9d6dbc1561f8595c8f8d5fbc162ba50ba8f2159c->leave($__internal_a984bdab59856dc20a315d3f9d6dbc1561f8595c8f8d5fbc162ba50ba8f2159c_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
";
    }
}
