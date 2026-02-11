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

/* error.html.twig */
class __TwigTemplate_944c158aa1ded38cf48b32f28fe4162207bd9d614304fdd163c6c097a181b72b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <section class=\"page-header\">
        <div class=\"container\">
            <h1>Страницата не е намерена</h1>
        </div>
    </section>

    <section class=\"section text-center\">
        <div class=\"container\">
            <h2 style=\"font-size: 5rem; color: var(--color-accent); margin-bottom: 1rem;\">404</h2>
            <p style=\"font-size: 1.2rem; color: var(--color-text-light); margin-bottom: 2rem;\">Страницата, която търсите, не съществува или е преместена.</p>
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "\" class=\"btn btn--primary\">
                <svg viewBox=\"0 0 24 24\"><path d=\"M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z\"/></svg>
                Начална страница
            </a>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
    <section class=\"page-header\">
        <div class=\"container\">
            <h1>Страницата не е намерена</h1>
        </div>
    </section>

    <section class=\"section text-center\">
        <div class=\"container\">
            <h2 style=\"font-size: 5rem; color: var(--color-accent); margin-bottom: 1rem;\">404</h2>
            <p style=\"font-size: 1.2rem; color: var(--color-text-light); margin-bottom: 2rem;\">Страницата, която търсите, не съществува или е преместена.</p>
            <a href=\"{{ base_url_absolute }}\" class=\"btn btn--primary\">
                <svg viewBox=\"0 0 24 24\"><path d=\"M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z\"/></svg>
                Начална страница
            </a>
        </div>
    </section>
{% endblock %}
", "error.html.twig", "/Users/boyan/Documents/_DEV/atanasmilkov/user/themes/advocate/templates/error.html.twig");
    }
}
