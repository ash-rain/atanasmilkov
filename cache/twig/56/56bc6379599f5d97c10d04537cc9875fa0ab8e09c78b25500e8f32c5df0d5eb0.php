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

/* contact.html.twig */
class __TwigTemplate_1596012ea221f6745936f4a2964a6f7aa0fb143f5e7577be20dc2ff98492759b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "contact.html.twig", 1);
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
            <div class=\"contact-grid\">
                <div>
                    <div style=\"margin-bottom: 2rem; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.1);\">
                        <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/atanas-milkov.jpg"), "html", null, true);
        echo "\" alt=\"Адвокат Атанас Милков\" style=\"width: 100%; height: 280px; object-fit: cover;\">
                    </div>
                    <h2 style=\"margin-bottom: 1rem; position: relative; display: inline-block; padding-bottom: 12px;\">Свържете се с нас</h2>
                    <p style=\"color: var(--color-text-light); margin-bottom: 2rem;\">Ако имате нужда от правна консултация или искате да обсъдите Вашия случай, не се колебайте да се свържете с нас по удобен за Вас начин.</p>

                    <div class=\"contact-info\">
                        <div class=\"contact-info__item reveal\">
                            <div class=\"contact-info__icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z\"/></svg>
                            </div>
                            <div>
                                <div class=\"contact-info__label\">Адрес</div>
                                <div class=\"contact-info__value\">гр. Стара Загора, ул. Цар Калоян 53А, ет. 1, оф. 2</div>
                            </div>
                        </div>

                        <div class=\"contact-info__item reveal\">
                            <div class=\"contact-info__icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z\"/></svg>
                            </div>
                            <div>
                                <div class=\"contact-info__label\">Телефон</div>
                                <div class=\"contact-info__value\"><a href=\"tel:+359898625633\">0898 625 633</a></div>
                            </div>
                        </div>

                        <div class=\"contact-info__item reveal\">
                            <div class=\"contact-info__icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z\"/></svg>
                            </div>
                            <div>
                                <div class=\"contact-info__label\">Имейл</div>
                                <div class=\"contact-info__value\"><a href=\"mailto:info@atanasmilkov.com\">info@atanasmilkov.com</a></div>
                            </div>
                        </div>

                        <div class=\"contact-info__item reveal\">
                            <div class=\"contact-info__icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z\"/></svg>
                            </div>
                            <div>
                                <div class=\"contact-info__label\">Работно време</div>
                                <div class=\"contact-info__value\">Понеделник - Петък: 09:00 - 18:00</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"contact-form reveal\">
                    <h3>Изпратете запитване</h3>
                    <form action=\"#\" method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"name\">Вашето име</label>
                            <input type=\"text\" id=\"name\" name=\"name\" placeholder=\"Въведете Вашето име\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\">Имейл адрес</label>
                            <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Въведете Вашия имейл\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"phone\">Телефон</label>
                            <input type=\"tel\" id=\"phone\" name=\"phone\" placeholder=\"Въведете Вашия телефон\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"subject\">Тема</label>
                            <input type=\"text\" id=\"subject\" name=\"subject\" placeholder=\"По какъв въпрос ни пишете\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"message\">Съобщение</label>
                            <textarea id=\"message\" name=\"message\" placeholder=\"Опишете накратко Вашия случай...\" required></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn btn--primary\" style=\"width:100%;justify-content:center;\">
                            <svg viewBox=\"0 0 24 24\"><path d=\"M2.01 21L23 12 2.01 3 2 10l15 2-15 2z\"/></svg>
                            Изпратете
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps Embed -->
    <section style=\"margin-top: -2rem;\">
        <iframe
            src=\"https://www.google.com/maps?q=%D1%83%D0%BB.+%D0%A6%D0%B0%D1%80+%D0%9A%D0%B0%D0%BB%D0%BE%D1%8F%D0%BD+53%D0%90,+%D0%A1%D1%82%D0%B0%D1%80%D0%B0+%D0%97%D0%B0%D0%B3%D0%BE%D1%80%D0%B0&output=embed\"
            width=\"100%\"
            height=\"400\"
            style=\"border:0; display:block;\"
            allowfullscreen=\"\"
            loading=\"lazy\"
            referrerpolicy=\"no-referrer-when-downgrade\">
        </iframe>
    </section>
";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  56 => 10,  51 => 8,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
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
            <div class=\"contact-grid\">
                <div>
                    <div style=\"margin-bottom: 2rem; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.1);\">
                        <img src=\"{{ url('theme://images/atanas-milkov.jpg') }}\" alt=\"Адвокат Атанас Милков\" style=\"width: 100%; height: 280px; object-fit: cover;\">
                    </div>
                    <h2 style=\"margin-bottom: 1rem; position: relative; display: inline-block; padding-bottom: 12px;\">Свържете се с нас</h2>
                    <p style=\"color: var(--color-text-light); margin-bottom: 2rem;\">Ако имате нужда от правна консултация или искате да обсъдите Вашия случай, не се колебайте да се свържете с нас по удобен за Вас начин.</p>

                    <div class=\"contact-info\">
                        <div class=\"contact-info__item reveal\">
                            <div class=\"contact-info__icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z\"/></svg>
                            </div>
                            <div>
                                <div class=\"contact-info__label\">Адрес</div>
                                <div class=\"contact-info__value\">гр. Стара Загора, ул. Цар Калоян 53А, ет. 1, оф. 2</div>
                            </div>
                        </div>

                        <div class=\"contact-info__item reveal\">
                            <div class=\"contact-info__icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z\"/></svg>
                            </div>
                            <div>
                                <div class=\"contact-info__label\">Телефон</div>
                                <div class=\"contact-info__value\"><a href=\"tel:+359898625633\">0898 625 633</a></div>
                            </div>
                        </div>

                        <div class=\"contact-info__item reveal\">
                            <div class=\"contact-info__icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z\"/></svg>
                            </div>
                            <div>
                                <div class=\"contact-info__label\">Имейл</div>
                                <div class=\"contact-info__value\"><a href=\"mailto:info@atanasmilkov.com\">info@atanasmilkov.com</a></div>
                            </div>
                        </div>

                        <div class=\"contact-info__item reveal\">
                            <div class=\"contact-info__icon\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z\"/></svg>
                            </div>
                            <div>
                                <div class=\"contact-info__label\">Работно време</div>
                                <div class=\"contact-info__value\">Понеделник - Петък: 09:00 - 18:00</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"contact-form reveal\">
                    <h3>Изпратете запитване</h3>
                    <form action=\"#\" method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"name\">Вашето име</label>
                            <input type=\"text\" id=\"name\" name=\"name\" placeholder=\"Въведете Вашето име\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\">Имейл адрес</label>
                            <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Въведете Вашия имейл\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"phone\">Телефон</label>
                            <input type=\"tel\" id=\"phone\" name=\"phone\" placeholder=\"Въведете Вашия телефон\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"subject\">Тема</label>
                            <input type=\"text\" id=\"subject\" name=\"subject\" placeholder=\"По какъв въпрос ни пишете\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"message\">Съобщение</label>
                            <textarea id=\"message\" name=\"message\" placeholder=\"Опишете накратко Вашия случай...\" required></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn btn--primary\" style=\"width:100%;justify-content:center;\">
                            <svg viewBox=\"0 0 24 24\"><path d=\"M2.01 21L23 12 2.01 3 2 10l15 2-15 2z\"/></svg>
                            Изпратете
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps Embed -->
    <section style=\"margin-top: -2rem;\">
        <iframe
            src=\"https://www.google.com/maps?q=%D1%83%D0%BB.+%D0%A6%D0%B0%D1%80+%D0%9A%D0%B0%D0%BB%D0%BE%D1%8F%D0%BD+53%D0%90,+%D0%A1%D1%82%D0%B0%D1%80%D0%B0+%D0%97%D0%B0%D0%B3%D0%BE%D1%80%D0%B0&output=embed\"
            width=\"100%\"
            height=\"400\"
            style=\"border:0; display:block;\"
            allowfullscreen=\"\"
            loading=\"lazy\"
            referrerpolicy=\"no-referrer-when-downgrade\">
        </iframe>
    </section>
{% endblock %}
", "contact.html.twig", "/Users/boyan/Documents/_DEV/atanasmilkov/user/themes/advocate/templates/contact.html.twig");
    }
}
