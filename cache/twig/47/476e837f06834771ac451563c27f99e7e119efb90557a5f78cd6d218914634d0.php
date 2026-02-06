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

/* partials/header.html.twig */
class __TwigTemplate_dced858f4d55bdb24f670fbed8e466836687f2965c77659c7a09869a8855d057 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!-- Top Bar -->
<div class=\"top-bar\">
    <div class=\"container\">
        <div class=\"top-bar__contact\">
            <a href=\"tel:+359898625633\">
                <svg viewBox=\"0 0 24 24\" width=\"14\" height=\"14\" fill=\"currentColor\"><path d=\"M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z\"/></svg>
                0898 625 633
            </a>
            <a href=\"mailto:info@atanasmilkov.com\">
                <svg viewBox=\"0 0 24 24\" width=\"14\" height=\"14\" fill=\"currentColor\"><path d=\"M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z\"/></svg>
                info@atanasmilkov.com
            </a>
            <span>
                <svg viewBox=\"0 0 24 24\" width=\"14\" height=\"14\" fill=\"currentColor\"><path d=\"M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z\"/></svg>
                Пон - Пет: 09:00 - 18:00
            </span>
        </div>
        <div class=\"top-bar__social\">
            <a href=\"#\" aria-label=\"Facebook\">
                <svg viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"currentColor\"><path d=\"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\"/></svg>
            </a>
            <a href=\"#\" aria-label=\"LinkedIn\">
                <svg viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"currentColor\"><path d=\"M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2zM4 2a2 2 0 1 1 0 4 2 2 0 0 1 0-4z\"/></svg>
            </a>
        </div>
    </div>
</div>

<!-- Main Header -->
<header class=\"site-header\">
    <div class=\"container\">
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "\" class=\"site-logo\">
            <div class=\"site-logo__icon\">
                <svg viewBox=\"0 0 24 24\"><path d=\"M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 2.18l7 3.12v5.7c0 4.83-3.23 9.36-7 10.57-3.77-1.21-7-5.74-7-10.57V6.3l7-3.12zM11 7v2h2V7h-2zm0 4v6h2v-6h-2z\"/></svg>
            </div>
            <div class=\"site-logo__text\">
                <span class=\"site-logo__name\">Атанас Милков</span>
                <span class=\"site-logo__title\">Адвокат</span>
            </div>
        </a>

        <button class=\"menu-toggle\" aria-label=\"Меню\">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class=\"main-nav\">
            <ul class=\"main-nav__list\">
                <li class=\"main-nav__item\">
                    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "\" class=\"main-nav__link\">Начало</a>
                </li>
                <li class=\"main-nav__item\">
                    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "/about\" class=\"main-nav__link\">За мен</a>
                </li>
                <li class=\"main-nav__item main-nav__item--has-dropdown\">
                    <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "/services\" class=\"main-nav__link\">Услуги</a>
                    <ul class=\"main-nav__dropdown\">
                        <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "/services/administrativno-pravo\">Административно право</a></li>
                        <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "/services/veshtno-pravo\">Вещно право</a></li>
                        <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "/services/grazhdansko-pravo\">Гражданско право</a></li>
                        <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "/services/nakazatelno-pravo\">Наказателно право</a></li>
                        <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "/services/obligatsionno-pravo\">Облигационно право</a></li>
                        <li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "/services/semeyno-i-nasledstveno-pravo\">Семейно и наследствено право</a></li>
                        <li><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "/services/trudovo-pravo\">Трудово право</a></li>
                        <li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "/services/targovsko-pravo\">Търговско право</a></li>
                        <li><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "/services/izpalnitelno-proizvodstvo\">Изпълнително производство</a></li>
                    </ul>
                </li>
                <li class=\"main-nav__item\">
                    <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "/blog\" class=\"main-nav__link\">Блог</a>
                </li>
                <li class=\"main-nav__item\">
                    <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "/contact\" class=\"main-nav__link\">Контакти</a>
                </li>
            </ul>
            <a href=\"tel:+359898625633\" class=\"header-cta\">
                <svg viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"currentColor\"><path d=\"M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z\"/></svg>
                Обади се
            </a>
        </nav>
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 74,  141 => 71,  134 => 67,  130 => 66,  126 => 65,  122 => 64,  118 => 63,  114 => 62,  110 => 61,  106 => 60,  102 => 59,  97 => 57,  91 => 54,  85 => 51,  63 => 32,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- Top Bar -->
<div class=\"top-bar\">
    <div class=\"container\">
        <div class=\"top-bar__contact\">
            <a href=\"tel:+359898625633\">
                <svg viewBox=\"0 0 24 24\" width=\"14\" height=\"14\" fill=\"currentColor\"><path d=\"M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z\"/></svg>
                0898 625 633
            </a>
            <a href=\"mailto:info@atanasmilkov.com\">
                <svg viewBox=\"0 0 24 24\" width=\"14\" height=\"14\" fill=\"currentColor\"><path d=\"M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z\"/></svg>
                info@atanasmilkov.com
            </a>
            <span>
                <svg viewBox=\"0 0 24 24\" width=\"14\" height=\"14\" fill=\"currentColor\"><path d=\"M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z\"/></svg>
                Пон - Пет: 09:00 - 18:00
            </span>
        </div>
        <div class=\"top-bar__social\">
            <a href=\"#\" aria-label=\"Facebook\">
                <svg viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"currentColor\"><path d=\"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\"/></svg>
            </a>
            <a href=\"#\" aria-label=\"LinkedIn\">
                <svg viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"currentColor\"><path d=\"M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2zM4 2a2 2 0 1 1 0 4 2 2 0 0 1 0-4z\"/></svg>
            </a>
        </div>
    </div>
</div>

<!-- Main Header -->
<header class=\"site-header\">
    <div class=\"container\">
        <a href=\"{{ base_url_absolute }}\" class=\"site-logo\">
            <div class=\"site-logo__icon\">
                <svg viewBox=\"0 0 24 24\"><path d=\"M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 2.18l7 3.12v5.7c0 4.83-3.23 9.36-7 10.57-3.77-1.21-7-5.74-7-10.57V6.3l7-3.12zM11 7v2h2V7h-2zm0 4v6h2v-6h-2z\"/></svg>
            </div>
            <div class=\"site-logo__text\">
                <span class=\"site-logo__name\">Атанас Милков</span>
                <span class=\"site-logo__title\">Адвокат</span>
            </div>
        </a>

        <button class=\"menu-toggle\" aria-label=\"Меню\">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class=\"main-nav\">
            <ul class=\"main-nav__list\">
                <li class=\"main-nav__item\">
                    <a href=\"{{ base_url_absolute }}\" class=\"main-nav__link\">Начало</a>
                </li>
                <li class=\"main-nav__item\">
                    <a href=\"{{ base_url_absolute }}/about\" class=\"main-nav__link\">За мен</a>
                </li>
                <li class=\"main-nav__item main-nav__item--has-dropdown\">
                    <a href=\"{{ base_url_absolute }}/services\" class=\"main-nav__link\">Услуги</a>
                    <ul class=\"main-nav__dropdown\">
                        <li><a href=\"{{ base_url_absolute }}/services/administrativno-pravo\">Административно право</a></li>
                        <li><a href=\"{{ base_url_absolute }}/services/veshtno-pravo\">Вещно право</a></li>
                        <li><a href=\"{{ base_url_absolute }}/services/grazhdansko-pravo\">Гражданско право</a></li>
                        <li><a href=\"{{ base_url_absolute }}/services/nakazatelno-pravo\">Наказателно право</a></li>
                        <li><a href=\"{{ base_url_absolute }}/services/obligatsionno-pravo\">Облигационно право</a></li>
                        <li><a href=\"{{ base_url_absolute }}/services/semeyno-i-nasledstveno-pravo\">Семейно и наследствено право</a></li>
                        <li><a href=\"{{ base_url_absolute }}/services/trudovo-pravo\">Трудово право</a></li>
                        <li><a href=\"{{ base_url_absolute }}/services/targovsko-pravo\">Търговско право</a></li>
                        <li><a href=\"{{ base_url_absolute }}/services/izpalnitelno-proizvodstvo\">Изпълнително производство</a></li>
                    </ul>
                </li>
                <li class=\"main-nav__item\">
                    <a href=\"{{ base_url_absolute }}/blog\" class=\"main-nav__link\">Блог</a>
                </li>
                <li class=\"main-nav__item\">
                    <a href=\"{{ base_url_absolute }}/contact\" class=\"main-nav__link\">Контакти</a>
                </li>
            </ul>
            <a href=\"tel:+359898625633\" class=\"header-cta\">
                <svg viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"currentColor\"><path d=\"M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z\"/></svg>
                Обади се
            </a>
        </nav>
    </div>
</header>
", "partials/header.html.twig", "/Users/boyan/Documents/_DEV/atanasmilkov/user/themes/advocate/templates/partials/header.html.twig");
    }
}
