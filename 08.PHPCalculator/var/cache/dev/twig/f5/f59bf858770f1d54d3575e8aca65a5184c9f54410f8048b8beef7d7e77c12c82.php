<?php

/* base.html.twig */
class __TwigTemplate_544659c859f3771e39a718caa2477844d6d81e28ca64c2320194cb75cdc2ee67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46b98d10af9bb768cd2015edc6ac23789c2b34b26b55f8d69335d82369bea43a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b98d10af9bb768cd2015edc6ac23789c2b34b26b55f8d69335d82369bea43a->enter($__internal_46b98d10af9bb768cd2015edc6ac23789c2b34b26b55f8d69335d82369bea43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_46b98d10af9bb768cd2015edc6ac23789c2b34b26b55f8d69335d82369bea43a->leave($__internal_46b98d10af9bb768cd2015edc6ac23789c2b34b26b55f8d69335d82369bea43a_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8659ade07bfcab2eca610e37981b3fea96f459a11e319366d8c5b56d29d0afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8659ade07bfcab2eca610e37981b3fea96f459a11e319366d8c5b56d29d0afd->enter($__internal_d8659ade07bfcab2eca610e37981b3fea96f459a11e319366d8c5b56d29d0afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_d8659ade07bfcab2eca610e37981b3fea96f459a11e319366d8c5b56d29d0afd->leave($__internal_d8659ade07bfcab2eca610e37981b3fea96f459a11e319366d8c5b56d29d0afd_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_44997fe7615a87fb588a2095735293774eee0f37e52d3224950105b20fec733a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44997fe7615a87fb588a2095735293774eee0f37e52d3224950105b20fec733a->enter($__internal_44997fe7615a87fb588a2095735293774eee0f37e52d3224950105b20fec733a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_44997fe7615a87fb588a2095735293774eee0f37e52d3224950105b20fec733a->leave($__internal_44997fe7615a87fb588a2095735293774eee0f37e52d3224950105b20fec733a_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_9a6d2c5a7dad525c43a50d87b695129d65d84c449768b20bb3e7d14b8be9ab82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6d2c5a7dad525c43a50d87b695129d65d84c449768b20bb3e7d14b8be9ab82->enter($__internal_9a6d2c5a7dad525c43a50d87b695129d65d84c449768b20bb3e7d14b8be9ab82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_9a6d2c5a7dad525c43a50d87b695129d65d84c449768b20bb3e7d14b8be9ab82->leave($__internal_9a6d2c5a7dad525c43a50d87b695129d65d84c449768b20bb3e7d14b8be9ab82_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_2cf8f1cfb48e3397b85d859a2bdbf88f9bf0f61fdaf3521f76940965364490db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf8f1cfb48e3397b85d859a2bdbf88f9bf0f61fdaf3521f76940965364490db->enter($__internal_2cf8f1cfb48e3397b85d859a2bdbf88f9bf0f61fdaf3521f76940965364490db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_2cf8f1cfb48e3397b85d859a2bdbf88f9bf0f61fdaf3521f76940965364490db->leave($__internal_2cf8f1cfb48e3397b85d859a2bdbf88f9bf0f61fdaf3521f76940965364490db_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff8cea5ad86e2e66c168a94c69cf7350c4cfe538e09dc4c940110b76569021ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8cea5ad86e2e66c168a94c69cf7350c4cfe538e09dc4c940110b76569021ab->enter($__internal_ff8cea5ad86e2e66c168a94c69cf7350c4cfe538e09dc4c940110b76569021ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_ff8cea5ad86e2e66c168a94c69cf7350c4cfe538e09dc4c940110b76569021ab->leave($__internal_ff8cea5ad86e2e66c168a94c69cf7350c4cfe538e09dc4c940110b76569021ab_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_d9baf114e3a85a0c7e74a632849dba7bb07fa63593756e037ef11ca23e7a4397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9baf114e3a85a0c7e74a632849dba7bb07fa63593756e037ef11ca23e7a4397->enter($__internal_d9baf114e3a85a0c7e74a632849dba7bb07fa63593756e037ef11ca23e7a4397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_d9baf114e3a85a0c7e74a632849dba7bb07fa63593756e037ef11ca23e7a4397->leave($__internal_d9baf114e3a85a0c7e74a632849dba7bb07fa63593756e037ef11ca23e7a4397_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d7e11184cbba85394473f88ff4dde36f088e2f6c9d05846ab8c942efa8376bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e11184cbba85394473f88ff4dde36f088e2f6c9d05846ab8c942efa8376bdb->enter($__internal_d7e11184cbba85394473f88ff4dde36f088e2f6c9d05846ab8c942efa8376bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d7e11184cbba85394473f88ff4dde36f088e2f6c9d05846ab8c942efa8376bdb->leave($__internal_d7e11184cbba85394473f88ff4dde36f088e2f6c9d05846ab8c942efa8376bdb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
