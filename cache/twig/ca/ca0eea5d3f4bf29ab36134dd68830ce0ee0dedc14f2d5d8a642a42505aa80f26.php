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

/* home.html.twig */
class __TwigTemplate_b719e172a7d989109abe9fbd588c57a54cf01718ef416a1d32079a67fac97d0e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <!-- HERO SECTION -->
    <section class=\"hero\">
        <div class=\"container\">
            <div class=\"hero__content\">
                <div class=\"hero__badge\">
                    <svg viewBox=\"0 0 24 24\"><path d=\"M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z\"/></svg>
                    Правна защита и консултации
                </div>
                <h1 class=\"hero__title\">
                    Адвокат <span>Атанас Милков</span>
                </h1>
                <p class=\"hero__subtitle\">Адвокатска кантора, гр. Стара Загора</p>
                <p class=\"hero__description\">
                    Професионална правна помощ и защита на Вашите права. Дългогодишен опит в областта на гражданското, търговското и административното право.
                </p>
                <div class=\"hero__actions\">
                    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "/contact\" class=\"btn btn--primary\">
                        <svg viewBox=\"0 0 24 24\"><path d=\"M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z\"/></svg>
                        Свържете се
                    </a>
                    <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "/services\" class=\"btn btn--outline\">
                        Правни услуги
                        <svg viewBox=\"0 0 24 24\"><path d=\"M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z\"/></svg>
                    </a>
                </div>

                <div class=\"hero__stats\">
                    <div class=\"hero__stat\">
                        <div class=\"hero__stat-number\">16+</div>
                        <div class=\"hero__stat-label\">Години опит</div>
                    </div>
                    <div class=\"hero__stat\">
                        <div class=\"hero__stat-number\">8</div>
                        <div class=\"hero__stat-label\">Области на право</div>
                    </div>
                    <div class=\"hero__stat\">
                        <div class=\"hero__stat-number\">1000+</div>
                        <div class=\"hero__stat-label\">Успешни дела</div>
                    </div>
                    <div class=\"hero__stat\">
                        <div class=\"hero__stat-number\">100%</div>
                        <div class=\"hero__stat-label\">Отдаденост</div>
                    </div>
                </div>
            </div>

            <div class=\"hero__visual\">
                <div class=\"hero__photo\">
                    <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/atanas-milkov.jpg"), "html", null, true);
        echo "\" alt=\"Адвокат Атанас Милков\">
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section class=\"section section--light\" id=\"services\">
        <div class=\"container\">
            <div class=\"section__header\">
                <h2>Правни услуги</h2>
                <p class=\"section__subtitle\">Предоставяме широк спектър от юридически услуги с внимание към всеки детайл</p>
            </div>

            <div class=\"services-grid\">
                ";
        // line 67
        $context["services"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/services"], "method"), "children", []);
        // line 68
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 69
            echo "                <div class=\"service-card reveal\">
                    <div class=\"service-card__icon\">
                        ";
            // line 71
            if ($this->getAttribute($this->getAttribute($context["service"], "header", []), "icon", [])) {
                // line 72
                echo "                            ";
                echo $this->getAttribute($this->getAttribute($context["service"], "header", []), "icon", []);
                echo "
                        ";
            } else {
                // line 74
                echo "                        <svg viewBox=\"0 0 24 24\"><path d=\"M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z\"/></svg>
                        ";
            }
            // line 76
            echo "                    </div>
                    <h3 class=\"service-card__title\">
                        <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "title", []), "html", null, true);
            echo "</a>
                    </h3>
                    <p class=\"service-card__excerpt\">";
            // line 80
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["service"], "header", [], "any", false, true), "excerpt", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["service"], "header", [], "any", false, true), "excerpt", []), Grav\Common\Utils::truncate(strip_tags($this->getAttribute($context["service"], "summary", [])), 120))) : (Grav\Common\Utils::truncate(strip_tags($this->getAttribute($context["service"], "summary", [])), 120))), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 81
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
        // line 87
        echo "            </div>
        </div>
    </section>

    <!-- ABOUT PREVIEW SECTION -->
    <section class=\"section\" id=\"about\">
        <div class=\"container\">
            <div class=\"about-grid\">
                <div class=\"about__image-wrapper reveal\">
                    <div class=\"about__image\">
                        <img src=\"";
        // line 97
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
                    <h2>За адвокат Атанас Милков</h2>
                    <p>Адвокатската кантора на Атанас Милков предлага първокласни правни консултации и процесуално представителство в гр. Стара Загора и в цялата страна.</p>
                    <p>С дългогодишен и богат опит в различни области на правото, ние се стремим да защитим Вашите права и интереси с професионализъм и всеотдайност. Всеки случай получава индивидуално внимание и задълбочен анализ.</p>

                    <div class=\"about__features\">
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Индивидуален подход</span>
                        </div>
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Конфиденциалност</span>
                        </div>
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Богат опит</span>
                        </div>
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Национален обхват</span>
                        </div>
                    </div>

                    <a href=\"";
        // line 138
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "/about\" class=\"btn btn--dark\" style=\"margin-top: 2rem;\">
                        Научете повече
                        <svg viewBox=\"0 0 24 24\"><path d=\"M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z\"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US STRIP -->
    <section class=\"section section--dark\">
        <div class=\"container\">
            <div class=\"section__header\">
                <h2>Защо да ни изберете</h2>
            </div>
            <div class=\"features-strip\">
                <div class=\"feature-item reveal\">
                    <div class=\"feature-item__icon\">
                        <svg viewBox=\"0 0 24 24\"><path d=\"M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z\"/></svg>
                    </div>
                    <h4 class=\"feature-item__title\">Професионализъм</h4>
                    <p class=\"feature-item__text\">Задълбочен анализ и професионално отношение към всеки правен казус</p>
                </div>
                <div class=\"feature-item reveal\">
                    <div class=\"feature-item__icon\">
                        <svg viewBox=\"0 0 24 24\"><path d=\"M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z\"/></svg>
                    </div>
                    <h4 class=\"feature-item__title\">Персонален подход</h4>
                    <p class=\"feature-item__text\">Всеки клиент получава индивидуално внимание и съобразена стратегия</p>
                </div>
                <div class=\"feature-item reveal\">
                    <div class=\"feature-item__icon\">
                        <svg viewBox=\"0 0 24 24\"><path d=\"M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z\"/></svg>
                    </div>
                    <h4 class=\"feature-item__title\">Бързина</h4>
                    <p class=\"feature-item__text\">Ефективно и навременно решаване на Вашите правни проблеми</p>
                </div>
                <div class=\"feature-item reveal\">
                    <div class=\"feature-item__icon\">
                        <svg viewBox=\"0 0 24 24\"><path d=\"M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z\"/></svg>
                    </div>
                    <h4 class=\"feature-item__title\">Резултат</h4>
                    <p class=\"feature-item__text\">Доказан опит с успешно приключени над 1000 дела и казуси</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG PREVIEW -->
    <section class=\"section\" id=\"blog\">
        <div class=\"container\">
            <div class=\"section__header\">
                <h2>Полезна информация</h2>
                <p class=\"section__subtitle\">Актуални статии и правни съвети от нашия блог</p>
            </div>

            <div class=\"blog-grid\">
                ";
        // line 195
        $context["blog_posts"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/blog"], "method"), "children", []), "order", [0 => "date", 1 => "desc"], "method");
        // line 196
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["blog_posts"] ?? null), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 197
            echo "                <div class=\"blog-card reveal\">
                    <div class=\"blog-card__image blog-card__image--placeholder\">
                        ";
            // line 199
            if ($this->getAttribute($this->getAttribute($context["post"], "header", []), "category", [])) {
                // line 200
                echo "                        <span class=\"blog-card__category\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "header", []), "category", []), "html", null, true);
                echo "</span>
                        ";
            }
            // line 202
            echo "                        <svg viewBox=\"0 0 24 24\"><path d=\"M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z\"/></svg>
                    </div>
                    <div class=\"blog-card__body\">
                        <div class=\"blog-card__meta\">
                            <span>";
            // line 206
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", []), "d.m.Y"), "html", null, true);
            echo "</span>
                        </div>
                        <h3 class=\"blog-card__title\">
                            <a href=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", []), "html", null, true);
            echo "</a>
                        </h3>
                        <p class=\"blog-card__excerpt\">";
            // line 211
            echo twig_escape_filter($this->env, Grav\Common\Utils::truncate(strip_tags($this->getAttribute($context["post"], "summary", [])), 120), "html", null, true);
            echo "</p>
                        <a href=\"";
            // line 212
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
        // line 219
        echo "            </div>

            <div class=\"text-center\" style=\"margin-top: 2.5rem;\">
                <a href=\"";
        // line 222
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "/blog\" class=\"btn btn--dark\">
                    Всички статии
                    <svg viewBox=\"0 0 24 24\"><path d=\"M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z\"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA BANNER -->
    <section class=\"cta-banner\">
        <div class=\"container\">
            <h2>Нуждаете се от правна консултация?</h2>
            <p>Свържете се с нас за безплатна първоначална консултация. Ще обсъдим Вашия случай и ще намерим най-доброто решение.</p>
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
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 222,  337 => 219,  324 => 212,  320 => 211,  313 => 209,  307 => 206,  301 => 202,  295 => 200,  293 => 199,  289 => 197,  284 => 196,  282 => 195,  222 => 138,  178 => 97,  166 => 87,  154 => 81,  150 => 80,  143 => 78,  139 => 76,  135 => 74,  129 => 72,  127 => 71,  123 => 69,  118 => 68,  116 => 67,  98 => 52,  67 => 24,  60 => 20,  42 => 4,  39 => 3,  29 => 1,);
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
    <!-- HERO SECTION -->
    <section class=\"hero\">
        <div class=\"container\">
            <div class=\"hero__content\">
                <div class=\"hero__badge\">
                    <svg viewBox=\"0 0 24 24\"><path d=\"M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z\"/></svg>
                    Правна защита и консултации
                </div>
                <h1 class=\"hero__title\">
                    Адвокат <span>Атанас Милков</span>
                </h1>
                <p class=\"hero__subtitle\">Адвокатска кантора, гр. Стара Загора</p>
                <p class=\"hero__description\">
                    Професионална правна помощ и защита на Вашите права. Дългогодишен опит в областта на гражданското, търговското и административното право.
                </p>
                <div class=\"hero__actions\">
                    <a href=\"{{ base_url_absolute }}/contact\" class=\"btn btn--primary\">
                        <svg viewBox=\"0 0 24 24\"><path d=\"M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z\"/></svg>
                        Свържете се
                    </a>
                    <a href=\"{{ base_url_absolute }}/services\" class=\"btn btn--outline\">
                        Правни услуги
                        <svg viewBox=\"0 0 24 24\"><path d=\"M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z\"/></svg>
                    </a>
                </div>

                <div class=\"hero__stats\">
                    <div class=\"hero__stat\">
                        <div class=\"hero__stat-number\">16+</div>
                        <div class=\"hero__stat-label\">Години опит</div>
                    </div>
                    <div class=\"hero__stat\">
                        <div class=\"hero__stat-number\">8</div>
                        <div class=\"hero__stat-label\">Области на право</div>
                    </div>
                    <div class=\"hero__stat\">
                        <div class=\"hero__stat-number\">1000+</div>
                        <div class=\"hero__stat-label\">Успешни дела</div>
                    </div>
                    <div class=\"hero__stat\">
                        <div class=\"hero__stat-number\">100%</div>
                        <div class=\"hero__stat-label\">Отдаденост</div>
                    </div>
                </div>
            </div>

            <div class=\"hero__visual\">
                <div class=\"hero__photo\">
                    <img src=\"{{ url('theme://images/atanas-milkov.jpg') }}\" alt=\"Адвокат Атанас Милков\">
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section class=\"section section--light\" id=\"services\">
        <div class=\"container\">
            <div class=\"section__header\">
                <h2>Правни услуги</h2>
                <p class=\"section__subtitle\">Предоставяме широк спектър от юридически услуги с внимание към всеки детайл</p>
            </div>

            <div class=\"services-grid\">
                {% set services = page.find('/services').children %}
                {% for service in services %}
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
                    <p class=\"service-card__excerpt\">{{ service.header.excerpt|default(service.summary|striptags|truncate(120)) }}</p>
                    <a href=\"{{ service.url }}\" class=\"service-card__link\">
                        Научете повече
                        <svg viewBox=\"0 0 24 24\"><path d=\"M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z\"/></svg>
                    </a>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>

    <!-- ABOUT PREVIEW SECTION -->
    <section class=\"section\" id=\"about\">
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
                    <h2>За адвокат Атанас Милков</h2>
                    <p>Адвокатската кантора на Атанас Милков предлага първокласни правни консултации и процесуално представителство в гр. Стара Загора и в цялата страна.</p>
                    <p>С дългогодишен и богат опит в различни области на правото, ние се стремим да защитим Вашите права и интереси с професионализъм и всеотдайност. Всеки случай получава индивидуално внимание и задълбочен анализ.</p>

                    <div class=\"about__features\">
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Индивидуален подход</span>
                        </div>
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Конфиденциалност</span>
                        </div>
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Богат опит</span>
                        </div>
                        <div class=\"about__feature\">
                            <div class=\"about__feature-icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z\"/></svg>
                            </div>
                            <span>Национален обхват</span>
                        </div>
                    </div>

                    <a href=\"{{ base_url_absolute }}/about\" class=\"btn btn--dark\" style=\"margin-top: 2rem;\">
                        Научете повече
                        <svg viewBox=\"0 0 24 24\"><path d=\"M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z\"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US STRIP -->
    <section class=\"section section--dark\">
        <div class=\"container\">
            <div class=\"section__header\">
                <h2>Защо да ни изберете</h2>
            </div>
            <div class=\"features-strip\">
                <div class=\"feature-item reveal\">
                    <div class=\"feature-item__icon\">
                        <svg viewBox=\"0 0 24 24\"><path d=\"M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z\"/></svg>
                    </div>
                    <h4 class=\"feature-item__title\">Професионализъм</h4>
                    <p class=\"feature-item__text\">Задълбочен анализ и професионално отношение към всеки правен казус</p>
                </div>
                <div class=\"feature-item reveal\">
                    <div class=\"feature-item__icon\">
                        <svg viewBox=\"0 0 24 24\"><path d=\"M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z\"/></svg>
                    </div>
                    <h4 class=\"feature-item__title\">Персонален подход</h4>
                    <p class=\"feature-item__text\">Всеки клиент получава индивидуално внимание и съобразена стратегия</p>
                </div>
                <div class=\"feature-item reveal\">
                    <div class=\"feature-item__icon\">
                        <svg viewBox=\"0 0 24 24\"><path d=\"M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z\"/></svg>
                    </div>
                    <h4 class=\"feature-item__title\">Бързина</h4>
                    <p class=\"feature-item__text\">Ефективно и навременно решаване на Вашите правни проблеми</p>
                </div>
                <div class=\"feature-item reveal\">
                    <div class=\"feature-item__icon\">
                        <svg viewBox=\"0 0 24 24\"><path d=\"M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z\"/></svg>
                    </div>
                    <h4 class=\"feature-item__title\">Резултат</h4>
                    <p class=\"feature-item__text\">Доказан опит с успешно приключени над 1000 дела и казуси</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG PREVIEW -->
    <section class=\"section\" id=\"blog\">
        <div class=\"container\">
            <div class=\"section__header\">
                <h2>Полезна информация</h2>
                <p class=\"section__subtitle\">Актуални статии и правни съвети от нашия блог</p>
            </div>

            <div class=\"blog-grid\">
                {% set blog_posts = page.find('/blog').children.order('date', 'desc') %}
                {% for post in blog_posts|slice(0,3) %}
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
                        </div>
                        <h3 class=\"blog-card__title\">
                            <a href=\"{{ post.url }}\">{{ post.title }}</a>
                        </h3>
                        <p class=\"blog-card__excerpt\">{{ post.summary|striptags|truncate(120) }}</p>
                        <a href=\"{{ post.url }}\" class=\"blog-card__link\">
                            Прочетете повече
                            <svg viewBox=\"0 0 24 24\"><path d=\"M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z\"/></svg>
                        </a>
                    </div>
                </div>
                {% endfor %}
            </div>

            <div class=\"text-center\" style=\"margin-top: 2.5rem;\">
                <a href=\"{{ base_url_absolute }}/blog\" class=\"btn btn--dark\">
                    Всички статии
                    <svg viewBox=\"0 0 24 24\"><path d=\"M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z\"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA BANNER -->
    <section class=\"cta-banner\">
        <div class=\"container\">
            <h2>Нуждаете се от правна консултация?</h2>
            <p>Свържете се с нас за безплатна първоначална консултация. Ще обсъдим Вашия случай и ще намерим най-доброто решение.</p>
            <a href=\"tel:+359898625633\" class=\"btn btn--primary\">
                <svg viewBox=\"0 0 24 24\"><path d=\"M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z\"/></svg>
                Обадете се: 0898 625 633
            </a>
        </div>
    </section>
{% endblock %}
", "home.html.twig", "/Users/boyan/Documents/_DEV/atanasmilkov/user/themes/advocate/templates/home.html.twig");
    }
}
