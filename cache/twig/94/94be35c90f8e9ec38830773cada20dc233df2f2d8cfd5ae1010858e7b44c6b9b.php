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

/* blog.html.twig */
class __TwigTemplate_0b0b36d23a3582535261bff91fac8e8e5be8484fd11521c1dc96c46722c92312 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <section class=\"page-header\">
        <div class=\"container\">
            <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "</h1>
            <div class=\"breadcrumbs\">
                <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "\">Начало</a>
                <span class=\"sep\">/</span>
                <span>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "</span>
            </div>
        </div>
    </section>

    <section class=\"blog-list section--light\">
        <div class=\"container\">
            <div class=\"blog-grid\">
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "order", [0 => "date", 1 => "desc"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 19
            echo "                <div class=\"blog-card reveal\">
                    <div class=\"blog-card__image blog-card__image--placeholder\">
                        ";
            // line 21
            if ($this->getAttribute($this->getAttribute($context["post"], "header", []), "category", [])) {
                // line 22
                echo "                        <span class=\"blog-card__category\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "header", []), "category", []), "html", null, true);
                echo "</span>
                        ";
            }
            // line 24
            echo "                        <svg viewBox=\"0 0 24 24\"><path d=\"M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z\"/></svg>
                    </div>
                    <div class=\"blog-card__body\">
                        <div class=\"blog-card__meta\">
                            <span>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", []), "d.m.Y"), "html", null, true);
            echo "</span>
                            ";
            // line 29
            if ($this->getAttribute($this->getAttribute($context["post"], "header", []), "category", [])) {
                // line 30
                echo "                            <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "header", []), "category", []), "html", null, true);
                echo "</span>
                            ";
            }
            // line 32
            echo "                        </div>
                        <h3 class=\"blog-card__title\">
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", []), "html", null, true);
            echo "</a>
                        </h3>
                        <p class=\"blog-card__excerpt\">";
            // line 36
            echo twig_escape_filter($this->env, Grav\Common\Utils::truncate(strip_tags($this->getAttribute($context["post"], "summary", [])), 160), "html", null, true);
            echo "</p>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", []), "html", null, true);
            echo "\" class=\"blog-card__link\">
                            Прочетете повече
                            <svg viewBox=\"0 0 24 24\"><path d=\"M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z\"/></svg>
                        </a>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 44,  116 => 37,  112 => 36,  105 => 34,  101 => 32,  95 => 30,  93 => 29,  89 => 28,  83 => 24,  77 => 22,  75 => 21,  71 => 19,  67 => 18,  56 => 10,  51 => 8,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
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
            <h1>{{ page.title }}</h1>
            <div class=\"breadcrumbs\">
                <a href=\"{{ base_url_absolute }}\">Начало</a>
                <span class=\"sep\">/</span>
                <span>{{ page.title }}</span>
            </div>
        </div>
    </section>

    <section class=\"blog-list section--light\">
        <div class=\"container\">
            <div class=\"blog-grid\">
                {% for post in page.children.order('date', 'desc') %}
                <div class=\"blog-card reveal\">
                    <div class=\"blog-card__image blog-card__image--placeholder\">
                        {% if post.header.category %}
                        <span class=\"blog-card__category\">{{ post.header.category }}</span>
                        {% endif %}
                        <svg viewBox=\"0 0 24 24\"><path d=\"M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z\"/></svg>
                    </div>
                    <div class=\"blog-card__body\">
                        <div class=\"blog-card__meta\">
                            <span>{{ post.date|date('d.m.Y') }}</span>
                            {% if post.header.category %}
                            <span>{{ post.header.category }}</span>
                            {% endif %}
                        </div>
                        <h3 class=\"blog-card__title\">
                            <a href=\"{{ post.url }}\">{{ post.title }}</a>
                        </h3>
                        <p class=\"blog-card__excerpt\">{{ post.summary|striptags|truncate(160) }}</p>
                        <a href=\"{{ post.url }}\" class=\"blog-card__link\">
                            Прочетете повече
                            <svg viewBox=\"0 0 24 24\"><path d=\"M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z\"/></svg>
                        </a>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>
{% endblock %}
", "blog.html.twig", "/Users/boyan/Documents/_DEV/atanasmilkov/user/themes/advocate/templates/blog.html.twig");
    }
}
