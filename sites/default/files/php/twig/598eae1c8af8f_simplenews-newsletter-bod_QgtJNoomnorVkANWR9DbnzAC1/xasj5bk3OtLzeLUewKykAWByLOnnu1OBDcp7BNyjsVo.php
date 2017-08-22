<?php

/* modules/simplenews/templates/simplenews-newsletter-body.html.twig */
class __TwigTemplate_aa7743e330918ffe09fa8b5ee93d9c467c8687eb1d6fb7bff240c1ba6eb0bdfc extends Twig_Template
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
        $tags = array("if" => 45);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 41
        echo "
<h2>";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h2>
";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["build"]) ? $context["build"] : null), "html", null, true));
        echo "

";
        // line 45
        if ( !(isset($context["opt_out_hidden"]) ? $context["opt_out_hidden"] : null)) {
            // line 46
            echo "    ";
            if (((isset($context["format"]) ? $context["format"] : null) == "html")) {
                // line 47
                echo "        <p class=\"newsletter-footer\"><a
                    href=\"[simplenews-subscriber:unsubscribe-url]\">";
                // line 48
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["unsubscribe_text"]) ? $context["unsubscribe_text"] : null), "html", null, true));
                echo "</a>
        </p>
    ";
            } else {
                // line 51
                echo "        -- ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["unsubscribe_text"]) ? $context["unsubscribe_text"] : null), "html", null, true));
                echo " : [simplenews-subscriber:unsubscribe-url]
    ";
            }
        }
        // line 54
        echo "
";
        // line 55
        if (((isset($context["key"]) ? $context["key"] : null) == "test")) {
            // line 56
            echo "    - - - ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["test_message"]) ? $context["test_message"] : null), "html", null, true));
            echo " - - -
";
        }
    }

    public function getTemplateName()
    {
        return "modules/simplenews/templates/simplenews-newsletter-body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 56,  79 => 55,  76 => 54,  69 => 51,  63 => 48,  60 => 47,  57 => 46,  55 => 45,  50 => 43,  46 => 42,  43 => 41,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to format the simplenews newsletter body.
 *
 * Copy this file in your theme directory to create a custom themed body.
 * Rename it to override it. Available templates:
 *   simplenews-newsletter-body--[newsletter_id].html.twig
 *   simplenews-newsletter-body--[view mode].html.twig
 *   simplenews-newsletter-body--[newsletter_id]--[view mode].html.twig
 * See README.txt for more details.
 *
 * Available variables:
 * - build: Render array. Use {{ build }} to print it.
 * - node: object(Drupal\\node\\Entity\\Node)
 *   The node entity with limited access to object properties and methods.
 *   * Methods: Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
 *     and a few common methods such as \"id\" and \"label\" are available.
 *     {{ node.getTitle }} : the Node title ( == {{ title }} )
 *     Calling other methods (such as node.delete) will result in an exception.
 *   * Properties: field values can be accessed as follows:
 *     {{ node.body.value | raw }} : text of body field
 * - newsletter: object(Drupal\\simplenews\\Entity\\Newsletter)
 *     {{ newsletter.from_name }}: string
 *     {{ newsletter.subject }}: string
 * - title: Node title
 * - view_mode: The active display view mode of the node
 * - key: email key [node|test]
 * - format: newsletter format [plain|html]
 * - simplenews_subscriber: object(Drupal\\simplenews\\Entity\\Subscriber)
 *   The subscriber for which the newsletter is built.
 *     {{ simplenews_subscriber.getMail  }}: string: subscriber's email address
 *   Note that depending on the used caching strategy, the generated body might
 *   be used for multiple subscribers. If you created personalized newsletters
 *   and can't use tokens for that, make sure to disable caching or write a
 *   custom caching strategy implemention.
 *
 * @see template_preprocess_simplenews_newsletter_body()
 */
#}

<h2>{{ title }}</h2>
{{ build }}

{% if not opt_out_hidden %}
    {% if format == 'html' %}
        <p class=\"newsletter-footer\"><a
                    href=\"[simplenews-subscriber:unsubscribe-url]\">{{ unsubscribe_text }}</a>
        </p>
    {% else %}
        -- {{ unsubscribe_text }} : [simplenews-subscriber:unsubscribe-url]
    {% endif %}
{% endif %}

{% if key == 'test' %}
    - - - {{ test_message }} - - -
{% endif %}
";
    }
}
