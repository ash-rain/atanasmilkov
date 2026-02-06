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

/* services.html.twig */
class __TwigTemplate_7865309c8b8f62086adb765dc7ed7f3312b2a4f69cf9759af3c154b054599dd3 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "services.html.twig", 1);
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

    <section class=\"section section--light\">
        <div class=\"container\">
            ";
        // line 17
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 18
            echo "            <div class=\"section__header\">
                <p class=\"section__subtitle\" style=\"color: var(--color-text-light);\">";
            // line 19
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "</p>
            </div>
            ";
        }
        // line 22
        echo "
            <div class=\"services-grid\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 25
            echo "                <div class=\"service-card reveal\">
                    <div class=\"service-card__icon\">
                        ";
            // line 27
            if ($this->getAttribute($this->getAttribute($context["service"], "header", []), "icon", [])) {
                // line 28
                echo "                            ";
                echo $this->getAttribute($this->getAttribute($context["service"], "header", []), "icon", []);
                echo "
                        ";
            } else {
                // line 30
                echo "                        <svg viewBox=\"0 0 24 24\"><path d=\"M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z\"/></svg>
                        ";
            }
            // line 32
            echo "                    </div>
                    <h3 class=\"service-card__title\">
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "title", []), "html", null, true);
            echo "</a>
                    </h3>
                    <p class=\"service-card__excerpt\">";
            // line 36
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["service"], "header", [], "any", false, true), "excerpt", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["service"], "header", [], "any", false, true), "excerpt", []), Grav\Common\Utils::truncate(strip_tags($this->getAttribute($context["service"], "summary", [])), 150))) : (Grav\Common\Utils::truncate(strip_tags($this->getAttribute($context["service"], "summary", [])), 150))), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "url", []), "html", null, true);
            echo "\" class=\"service-card__link\">
                        Научете повече
                        <svg viewBox=\"0 0 24 24\"><path d=\"M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z\"/></svg>
                    </a>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class=\"cta-banner\">
        <div class=\"container\">
            <h2>Нуждаете се от правна консултация?</h2>
            <p>Свържете се с нас за да обсъдим Вашия случай и да намерим най-доброто решение.</p>
            <a href=\"tel:+359898625633\" class=\"btn btn--primary\">
                <svg viewBox=\"0 0 24 24\"><path d=\"M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z\"/></svg>
                Обадете се: 0898 625 633
            </a>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  116 => 37,  112 => 36,  105 => 34,  101 => 32,  97 => 30,  91 => 28,  89 => 27,  85 => 25,  81 => 24,  77 => 22,  71 => 19,  68 => 18,  66 => 17,  56 => 10,  51 => 8,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
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

    <section class=\"section section--light\">
        <div class=\"container\">
            {% if page.content %}
            <div class=\"section__header\">
                <p class=\"section__subtitle\" style=\"color: var(--color-text-light);\">{{ page.content|striptags }}</p>
            </div>
            {% endif %}

            <div class=\"services-grid\">
                {% for service in page.children %}
                <div class=\"service-card reveal\">
                    <div class=\"service-card__icon\">
                        {% if service.header.icon %}
                            {{ service.header.icon|raw }}
                        {% else %}
                        <svg viewBox=\"0 0 24 24\"><path d=\"M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z\"/></svg>
                        {% endif %}
                    </div>
                    <h3 class=\"service-card__title\">
                        <a href=\"{{ service.url }}\">{{ service.title }}</a>
                    </h3>
                    <p class=\"service-card__excerpt\">{{ service.header.excerpt|default(service.summary|striptags|truncate(150)) }}</p>
                    <a href=\"{{ service.url }}\" class=\"service-card__link\">
                        Научете повече
                        <svg viewBox=\"0 0 24 24\"><path d=\"M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z\"/></svg>
                    </a>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class=\"cta-banner\">
        <div class=\"container\">
            <h2>Нуждаете се от правна консултация?</h2>
            <p>Свържете се с нас за да обсъдим Вашия случай и да намерим най-доброто решение.</p>
            <a href=\"tel:+359898625633\" class=\"btn btn--primary\">
                <svg viewBox=\"0 0 24 24\"><path d=\"M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z\"/></svg>
                Обадете се: 0898 625 633
            </a>
        </div>
    </section>
{% endblock %}
", "services.html.twig", "/Users/boyan/Documents/_DEV/atanasmilkov/user/themes/advocate/templates/services.html.twig");
    }
}
