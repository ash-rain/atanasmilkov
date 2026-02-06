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

/* service.html.twig */
class __TwigTemplate_55e6e129ea3895acbcd8cc19697762be5ed78d44d5687562db772fa379402d8d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "service.html.twig", 1);
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
                <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "/services\">Услуги</a>
                <span class=\"sep\">/</span>
                <span>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "</span>
            </div>
        </div>
    </section>

    <section class=\"service-detail\">
        <div class=\"container\">
            <div class=\"service-detail__content\">
                ";
        // line 20
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
            </div>

            <aside class=\"service-sidebar\">
                <!-- Services Navigation -->
                <div class=\"sidebar-widget\">
                    <h4>Правни услуги</h4>
                    <ul class=\"sidebar-nav\">
                        ";
        // line 28
        $context["services_page"] = $this->getAttribute(($context["page"] ?? null), "parent", []);
        // line 29
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["services_page"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 30
            echo "                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "url", []), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["service"], "slug", []) == $this->getAttribute(($context["page"] ?? null), "slug", []))) {
                echo "class=\"active\"";
            }
            echo ">
                                ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "title", []), "html", null, true);
            echo "
                            </a>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </ul>
                </div>

                <!-- CTA Widget -->
                <div class=\"sidebar-widget sidebar-cta\">
                    <h4>Нуждаете се от помощ?</h4>
                    <p>Свържете се с нас за безплатна първоначална консултация</p>
                    <a href=\"tel:+359898625633\" class=\"phone\">0898 625 633</a>
                    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "/contact\" class=\"btn btn--primary btn--sm\" style=\"width:100%;justify-content:center;\">
                        Пишете ни
                    </a>
                </div>
            </aside>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 44,  111 => 36,  101 => 32,  93 => 31,  90 => 30,  85 => 29,  83 => 28,  72 => 20,  61 => 12,  56 => 10,  51 => 8,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
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
                <a href=\"{{ base_url_absolute }}/services\">Услуги</a>
                <span class=\"sep\">/</span>
                <span>{{ page.title }}</span>
            </div>
        </div>
    </section>

    <section class=\"service-detail\">
        <div class=\"container\">
            <div class=\"service-detail__content\">
                {{ page.content|raw }}
            </div>

            <aside class=\"service-sidebar\">
                <!-- Services Navigation -->
                <div class=\"sidebar-widget\">
                    <h4>Правни услуги</h4>
                    <ul class=\"sidebar-nav\">
                        {% set services_page = page.parent %}
                        {% for service in services_page.children %}
                        <li>
                            <a href=\"{{ service.url }}\" {% if service.slug == page.slug %}class=\"active\"{% endif %}>
                                {{ service.title }}
                            </a>
                        </li>
                        {% endfor %}
                    </ul>
                </div>

                <!-- CTA Widget -->
                <div class=\"sidebar-widget sidebar-cta\">
                    <h4>Нуждаете се от помощ?</h4>
                    <p>Свържете се с нас за безплатна първоначална консултация</p>
                    <a href=\"tel:+359898625633\" class=\"phone\">0898 625 633</a>
                    <a href=\"{{ base_url_absolute }}/contact\" class=\"btn btn--primary btn--sm\" style=\"width:100%;justify-content:center;\">
                        Пишете ни
                    </a>
                </div>
            </aside>
        </div>
    </section>
{% endblock %}
", "service.html.twig", "/Users/boyan/Documents/_DEV/atanasmilkov/user/themes/advocate/templates/service.html.twig");
    }
}
