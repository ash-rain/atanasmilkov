<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_75af2af408f257926f4dfa2d956275d4d0c4bbcdf2463156c9affda929042bc5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"bg\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", []), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "description", []), "html", null, true);
        }
        echo "\">

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap\" rel=\"stylesheet\">

    <!-- Theme CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://css/style.css"), "html", null, true);
        echo "\">

    ";
        // line 17
        $this->displayBlock('head', $context, $blocks);
        // line 18
        echo "</head>
<body class=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []), "html", null, true);
        echo "\">

    ";
        // line 21
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 21)->display($context);
        // line 22
        echo "
    <main>
        ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "    </main>

    ";
        // line 27
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 27)->display($context);
        // line 28
        echo "
    <div class=\"menu-overlay\"></div>

    <!-- Theme JS -->
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 33
        $this->displayBlock('bottom', $context, $blocks);
        // line 34
        echo "</body>
</html>
";
    }

    // line 17
    public function block_head($context, array $blocks = [])
    {
    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
    }

    // line 33
    public function block_bottom($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  115 => 24,  110 => 17,  104 => 34,  102 => 33,  98 => 32,  92 => 28,  90 => 27,  86 => 25,  84 => 24,  80 => 22,  78 => 21,  73 => 19,  70 => 18,  68 => 17,  63 => 15,  48 => 7,  40 => 6,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"bg\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% if page.title %}{{ page.title }} | {% endif %}{{ site.title }}</title>
    <meta name=\"description\" content=\"{% if page.header.description %}{{ page.header.description }}{% else %}{{ site.metadata.description }}{% endif %}\">

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap\" rel=\"stylesheet\">

    <!-- Theme CSS -->
    <link rel=\"stylesheet\" href=\"{{ url('theme://css/style.css') }}\">

    {% block head %}{% endblock %}
</head>
<body class=\"{{ page.header.body_classes }}\">

    {% include 'partials/header.html.twig' %}

    <main>
        {% block content %}{% endblock %}
    </main>

    {% include 'partials/footer.html.twig' %}

    <div class=\"menu-overlay\"></div>

    <!-- Theme JS -->
    <script src=\"{{ url('theme://js/main.js') }}\"></script>
    {% block bottom %}{% endblock %}
</body>
</html>
", "partials/base.html.twig", "/Users/boyan/Documents/_DEV/atanasmilkov/user/themes/advocate/templates/partials/base.html.twig");
    }
}
