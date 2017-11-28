<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f9978b3e87c30d3cc59f24619696861e4b080b49f423062d57d878be379c5eda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c417121aeba2aae6a86e69a4b7167fff0d30ca705a227b82577755d0c1537985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c417121aeba2aae6a86e69a4b7167fff0d30ca705a227b82577755d0c1537985->enter($__internal_c417121aeba2aae6a86e69a4b7167fff0d30ca705a227b82577755d0c1537985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c417121aeba2aae6a86e69a4b7167fff0d30ca705a227b82577755d0c1537985->leave($__internal_c417121aeba2aae6a86e69a4b7167fff0d30ca705a227b82577755d0c1537985_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e67645ecd4378afe4499049731dbb6e95c95a67658e5f4d72aca19c590260aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67645ecd4378afe4499049731dbb6e95c95a67658e5f4d72aca19c590260aed->enter($__internal_e67645ecd4378afe4499049731dbb6e95c95a67658e5f4d72aca19c590260aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e67645ecd4378afe4499049731dbb6e95c95a67658e5f4d72aca19c590260aed->leave($__internal_e67645ecd4378afe4499049731dbb6e95c95a67658e5f4d72aca19c590260aed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f93f819798cbcc7a006c062224c423aa7c008e57b177399ec0720fae2900d7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93f819798cbcc7a006c062224c423aa7c008e57b177399ec0720fae2900d7bc->enter($__internal_f93f819798cbcc7a006c062224c423aa7c008e57b177399ec0720fae2900d7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f93f819798cbcc7a006c062224c423aa7c008e57b177399ec0720fae2900d7bc->leave($__internal_f93f819798cbcc7a006c062224c423aa7c008e57b177399ec0720fae2900d7bc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dafabdd1fe1b06286fe25bdb759706ba6895eda3c3801336f3016cf18cac5aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dafabdd1fe1b06286fe25bdb759706ba6895eda3c3801336f3016cf18cac5aa0->enter($__internal_dafabdd1fe1b06286fe25bdb759706ba6895eda3c3801336f3016cf18cac5aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dafabdd1fe1b06286fe25bdb759706ba6895eda3c3801336f3016cf18cac5aa0->leave($__internal_dafabdd1fe1b06286fe25bdb759706ba6895eda3c3801336f3016cf18cac5aa0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
