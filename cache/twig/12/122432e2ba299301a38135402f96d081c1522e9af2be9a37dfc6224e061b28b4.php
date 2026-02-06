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

/* about.html.twig */
class __TwigTemplate_d195d3446722002eb0072f9cd24f6c59e455ec974b6fd55a3df541d23fb54fb0 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "about.html.twig", 1);
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

    <section class=\"section\">
        <div class=\"container\">
            <div class=\"about-grid\">
                <div class=\"about__image-wrapper reveal\">
                    <div class=\"about__image\">
                        <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/atanas-milkov.jpg"), "html", null, true);
        echo "\" alt=\"Адвокат Атанас Милков\">
                        <div class=\"about__image-accent\"></div>
                    </div>
                    <div class=\"about__experience-badge\">
                        <div class=\"number\">25+</div>
                        <div class=\"label\">години опит</div>
                    </div>
                </div>

                <div class=\"about__content reveal\">
                    ";
        // line 30
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "

                    <div class=\"about__features\" style=\"margin-top: 2rem;\">
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Гражданско право</span>
                        </div>
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Наказателно право</span>
                        </div>
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Търговско право</span>
                        </div>
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Семейно право</span>
                        </div>
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Вещно право</span>
                        </div>
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Административно право</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class=\"cta-banner\">
        <div class=\"container\">
            <h2>Нуждаете се от правна помощ?</h2>
            <p>Свържете се с адвокат Атанас Милков за професионална консултация по Вашия случай.</p>
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
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 30,  69 => 20,  56 => 10,  51 => 8,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
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

    <section class=\"section\">
        <div class=\"container\">
            <div class=\"about-grid\">
                <div class=\"about__image-wrapper reveal\">
                    <div class=\"about__image\">
                        <img src=\"{{ url('theme://images/atanas-milkov.jpg') }}\" alt=\"Адвокат Атанас Милков\">
                        <div class=\"about__image-accent\"></div>
                    </div>
                    <div class=\"about__experience-badge\">
                        <div class=\"number\">25+</div>
                        <div class=\"label\">години опит</div>
                    </div>
                </div>

                <div class=\"about__content reveal\">
                    {{ page.content|raw }}

                    <div class=\"about__features\" style=\"margin-top: 2rem;\">
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Гражданско право</span>
                        </div>
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Наказателно право</span>
                        </div>
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Търговско право</span>
                        </div>
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Семейно право</span>
                        </div>
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Вещно право</span>
                        </div>
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Административно право</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class=\"cta-banner\">
        <div class=\"container\">
            <h2>Нуждаете се от правна помощ?</h2>
            <p>Свържете се с адвокат Атанас Милков за професионална консултация по Вашия случай.</p>
            <a href=\"tel:+359898625633\" class=\"btn btn--primary\">
                <svg viewBox=\"0 0 24 24\"><path d=\"M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z\"/></svg>
                Обадете се: 0898 625 633
            </a>
        </div>
    </section>
{% endblock %}
", "about.html.twig", "/Users/boyan/Documents/_DEV/atanasmilkov/user/themes/advocate/templates/about.html.twig");
    }
}
