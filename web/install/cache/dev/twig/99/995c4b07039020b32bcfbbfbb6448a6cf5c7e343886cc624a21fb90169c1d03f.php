<?php

/* @Twig/Exception/exception.html.twig */
class __TwigTemplate_0793c00ef986c4deefc0ce4eb81a116b3e347795b20775a969bdc482dc65119a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40ed5d953bf2f118648c7b3d60c8e702a00f7113c48f317f1b29deae6f06f4de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ed5d953bf2f118648c7b3d60c8e702a00f7113c48f317f1b29deae6f06f4de->enter($__internal_40ed5d953bf2f118648c7b3d60c8e702a00f7113c48f317f1b29deae6f06f4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));

        $__internal_0e9f7ca4287e88d2fa870d8e19663c48488ce6c5cc98184ea03b227d9756239e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9f7ca4287e88d2fa870d8e19663c48488ce6c5cc98184ea03b227d9756239e->enter($__internal_0e9f7ca4287e88d2fa870d8e19663c48488ce6c5cc98184ea03b227d9756239e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));

        // line 1
        echo "<div class=\"block-exception\">
    <div class=\"block-exception-detected clear-fix\">
        <div class=\"support\">
            <a href=\"http://symfony.com/support\">Need support?</a>
        </div>
        <div class=\"illustration-exception\">
            ";
        // line 7
        echo twig_include($this->env, $context, "@Twig/Exception/exception.svg");
        echo "
        </div>
        <div class=\"text-exception\">
            <div class=\"open-quote\">“</div>

            <h1>";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFileFromText(nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["exception"] ?? null), "message", array()), "html", null, true)));
        echo "</h1>

            <div>
                <strong>";
        // line 15
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo " - ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass(twig_get_attribute($this->env, $this->getSourceContext(), ($context["exception"] ?? null), "class", array()));
        echo "
            </div>

            ";
        // line 18
        $context["previous_count"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["exception"] ?? null), "allPrevious", array()));
        // line 19
        echo "            ";
        if (($context["previous_count"] ?? null)) {
            // line 20
            echo "                <div class=\"linked\"><span><strong>";
            echo twig_escape_filter($this->env, ($context["previous_count"] ?? null), "html", null, true);
            echo "</strong> linked Exception";
            echo (((($context["previous_count"] ?? null) > 1)) ? ("s") : (""));
            echo ":</span>
                    <ul>
                        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["exception"] ?? null), "allPrevious", array()));
            foreach ($context['_seq'] as $context["i"] => $context["previous"]) {
                // line 23
                echo "                            <li>
                                ";
                // line 24
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass(twig_get_attribute($this->env, $this->getSourceContext(), $context["previous"], "class", array()));
                echo " <a href=\"#traces-link-";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "\" onclick=\"toggle('traces-";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "', 'traces'); switchIcons('icon-traces-";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "-open', 'icon-traces-";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "-close');\">&#187;</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['previous'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    </ul>
                </div>
            ";
        }
        // line 30
        echo "
            <div class=\"close-quote\">”</div>
        </div>
    </div>
</div>

";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["exception"] ?? null), "toarray", array()));
        foreach ($context['_seq'] as $context["position"] => $context["e"]) {
            // line 37
            echo "    ";
            $this->loadTemplate("@Twig/Exception/traces.html.twig", "@Twig/Exception/exception.html.twig", 37)->display(array("exception" => $context["e"], "position" => $context["position"], "count" => ($context["previous_count"] ?? null)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['position'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
";
        // line 40
        if (($context["logger"] ?? null)) {
            // line 41
            echo "    <div class=\"block\">
        <div class=\"logs clear-fix\">
            ";
            // line 43
            ob_start();
            // line 44
            echo "            <h2>
                Logs&nbsp;
                <a href=\"#\" onclick=\"toggle('logs'); switchIcons('icon-logs-open', 'icon-logs-close'); return false;\">
                    <img class=\"toggle\" id=\"icon-logs-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: none\" />
                    <img class=\"toggle\" id=\"icon-logs-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: inline\" />
                </a>
            </h2>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 52
            echo "
            ";
            // line 53
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["logger"] ?? null), "counterrors", array())) {
                // line 54
                echo "                <div class=\"error-count\">
                    <span>
                        ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["logger"] ?? null), "counterrors", array()), "html", null, true);
                echo " error";
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["logger"] ?? null), "counterrors", array()) > 1)) ? ("s") : (""));
                echo "
                    </span>
                </div>
            ";
            }
            // line 60
            echo "        </div>

        <div id=\"logs\">
            ";
            // line 63
            $this->loadTemplate("@Twig/Exception/logs.html.twig", "@Twig/Exception/exception.html.twig", 63)->display(array("logs" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["logger"] ?? null), "logs", array())));
            // line 64
            echo "        </div>
    </div>
";
        }
        // line 67
        echo "
";
        // line 68
        if (($context["currentContent"] ?? null)) {
            // line 69
            echo "    <div class=\"block\">
        ";
            // line 70
            ob_start();
            // line 71
            echo "        <h2>
            Content of the Output&nbsp;
            <a href=\"#\" onclick=\"toggle('output-content'); switchIcons('icon-content-open', 'icon-content-close'); return false;\">
                <img class=\"toggle\" id=\"icon-content-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: none\" />
                <img class=\"toggle\" id=\"icon-content-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: inline\" />
            </a>
        </h2>
        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 79
            echo "
        <div id=\"output-content\" style=\"display: none\">
            ";
            // line 81
            echo twig_escape_filter($this->env, ($context["currentContent"] ?? null), "html", null, true);
            echo "
        </div>

        <div style=\"clear: both\"></div>
    </div>
";
        }
        // line 87
        echo "
";
        // line 88
        $this->loadTemplate("@Twig/Exception/traces_text.html.twig", "@Twig/Exception/exception.html.twig", 88)->display(array("exception" => ($context["exception"] ?? null)));
        // line 89
        echo "
<script type=\"text/javascript\">//<![CDATA[
    function toggle(id, clazz) {
        var el = document.getElementById(id),
            current = el.style.display,
            i;

        if (clazz) {
            var tags = document.getElementsByTagName('*');
            for (i = tags.length - 1; i >= 0; i--) {
                if (tags[i].className === clazz) {
                    tags[i].style.display = 'none';
                }
            }
        }

        el.style.display = current === 'none' ? 'block' : 'none';
    }

    function switchIcons(id1, id2) {
        var icon1, icon2, display1, display2;

        icon1 = document.getElementById(id1);
        icon2 = document.getElementById(id2);

        display1 = icon1.style.display;
        display2 = icon2.style.display;

        icon1.style.display = display2;
        icon2.style.display = display1;
    }
//]]></script>
";
        
        $__internal_40ed5d953bf2f118648c7b3d60c8e702a00f7113c48f317f1b29deae6f06f4de->leave($__internal_40ed5d953bf2f118648c7b3d60c8e702a00f7113c48f317f1b29deae6f06f4de_prof);

        
        $__internal_0e9f7ca4287e88d2fa870d8e19663c48488ce6c5cc98184ea03b227d9756239e->leave($__internal_0e9f7ca4287e88d2fa870d8e19663c48488ce6c5cc98184ea03b227d9756239e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 89,  205 => 88,  202 => 87,  193 => 81,  189 => 79,  179 => 71,  177 => 70,  174 => 69,  172 => 68,  169 => 67,  164 => 64,  162 => 63,  157 => 60,  148 => 56,  144 => 54,  142 => 53,  139 => 52,  129 => 44,  127 => 43,  123 => 41,  121 => 40,  118 => 39,  111 => 37,  107 => 36,  99 => 30,  94 => 27,  77 => 24,  74 => 23,  70 => 22,  62 => 20,  59 => 19,  57 => 18,  47 => 15,  41 => 12,  33 => 7,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"block-exception\">
    <div class=\"block-exception-detected clear-fix\">
        <div class=\"support\">
            <a href=\"http://symfony.com/support\">Need support?</a>
        </div>
        <div class=\"illustration-exception\">
            {{ include('@Twig/Exception/exception.svg') }}
        </div>
        <div class=\"text-exception\">
            <div class=\"open-quote\">“</div>

            <h1>{{ exception.message|nl2br|format_file_from_text }}</h1>

            <div>
                <strong>{{ status_code }}</strong> {{ status_text }} - {{ exception.class|abbr_class }}
            </div>

            {% set previous_count = exception.allPrevious|length %}
            {% if previous_count %}
                <div class=\"linked\"><span><strong>{{ previous_count }}</strong> linked Exception{{ previous_count > 1 ? 's' : '' }}:</span>
                    <ul>
                        {% for i, previous in exception.allPrevious %}
                            <li>
                                {{ previous.class|abbr_class }} <a href=\"#traces-link-{{ i + 1 }}\" onclick=\"toggle('traces-{{ i + 1 }}', 'traces'); switchIcons('icon-traces-{{ i + 1 }}-open', 'icon-traces-{{ i + 1 }}-close');\">&#187;</a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            {% endif %}

            <div class=\"close-quote\">”</div>
        </div>
    </div>
</div>

{% for position, e in exception.toarray %}
    {% include '@Twig/Exception/traces.html.twig' with { 'exception': e, 'position': position, 'count': previous_count } only %}
{% endfor %}

{% if logger %}
    <div class=\"block\">
        <div class=\"logs clear-fix\">
            {% spaceless %}
            <h2>
                Logs&nbsp;
                <a href=\"#\" onclick=\"toggle('logs'); switchIcons('icon-logs-open', 'icon-logs-close'); return false;\">
                    <img class=\"toggle\" id=\"icon-logs-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: none\" />
                    <img class=\"toggle\" id=\"icon-logs-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: inline\" />
                </a>
            </h2>
            {% endspaceless %}

            {% if logger.counterrors %}
                <div class=\"error-count\">
                    <span>
                        {{ logger.counterrors }} error{{ logger.counterrors > 1 ? 's' : ''}}
                    </span>
                </div>
            {% endif %}
        </div>

        <div id=\"logs\">
            {% include '@Twig/Exception/logs.html.twig' with { 'logs': logger.logs } only %}
        </div>
    </div>
{% endif %}

{% if currentContent %}
    <div class=\"block\">
        {% spaceless %}
        <h2>
            Content of the Output&nbsp;
            <a href=\"#\" onclick=\"toggle('output-content'); switchIcons('icon-content-open', 'icon-content-close'); return false;\">
                <img class=\"toggle\" id=\"icon-content-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: none\" />
                <img class=\"toggle\" id=\"icon-content-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: inline\" />
            </a>
        </h2>
        {% endspaceless %}

        <div id=\"output-content\" style=\"display: none\">
            {{ currentContent }}
        </div>

        <div style=\"clear: both\"></div>
    </div>
{% endif %}

{% include '@Twig/Exception/traces_text.html.twig' with { 'exception': exception } only %}

<script type=\"text/javascript\">//<![CDATA[
    function toggle(id, clazz) {
        var el = document.getElementById(id),
            current = el.style.display,
            i;

        if (clazz) {
            var tags = document.getElementsByTagName('*');
            for (i = tags.length - 1; i >= 0; i--) {
                if (tags[i].className === clazz) {
                    tags[i].style.display = 'none';
                }
            }
        }

        el.style.display = current === 'none' ? 'block' : 'none';
    }

    function switchIcons(id1, id2) {
        var icon1, icon2, display1, display2;

        icon1 = document.getElementById(id1);
        icon2 = document.getElementById(id2);

        display1 = icon1.style.display;
        display2 = icon2.style.display;

        icon1.style.display = display2;
        icon2.style.display = display1;
    }
//]]></script>
", "@Twig/Exception/exception.html.twig", "/home/devraytech/public_html/cms/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.html.twig");
    }
}
