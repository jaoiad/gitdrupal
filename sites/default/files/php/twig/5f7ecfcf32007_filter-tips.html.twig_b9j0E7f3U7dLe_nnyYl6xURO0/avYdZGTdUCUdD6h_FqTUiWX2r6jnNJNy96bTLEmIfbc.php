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

/* themes/bulma/templates/elements/filter-tips.html.twig */
class __TwigTemplate_9131282d8692022fddc7492d076a8cfe8a7598693cf291f6fd8597509558801b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 20, "for" => 29, "set" => 32];
        $filters = ["t" => 21, "length" => 24, "clean_class" => 34, "escape" => 37, "replace" => 46];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['t', 'length', 'clean_class', 'escape', 'replace'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 19
        echo "<div class=\"help\">
";
        // line 20
        if (($context["multiple"] ?? null)) {
            // line 21
            echo "  <h2>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Text Formats"));
            echo "</h2>
";
        }
        // line 23
        echo "
";
        // line 24
        if (twig_length_filter($this->env, ($context["tips"] ?? null))) {
            // line 25
            echo "  ";
            if (($context["multiple"] ?? null)) {
                // line 26
                echo "    <div class=\"compose-tips\">
  ";
            }
            // line 28
            echo "
  ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tips"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["tip"]) {
                // line 30
                echo "    ";
                if (($context["multiple"] ?? null)) {
                    // line 31
                    echo "      ";
                    // line 32
                    $context["tip_classes"] = [0 => "filter-type", 1 => ("filter-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 34
$context["name"])))];
                    // line 37
                    echo "      <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["tip"], "attributes", []), "addClass", [0 => ($context["tip_classes"] ?? null)], "method")), "html", null, true);
                    echo ">
      <h3>";
                    // line 38
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tip"], "name", [])), "html", null, true);
                    echo "</h3>
    ";
                }
                // line 40
                echo "
    ";
                // line 41
                if (twig_length_filter($this->env, $this->getAttribute($context["tip"], "list", []))) {
                    // line 42
                    echo "      <ul class=\"tips\">
      ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tip"], "list", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 44
                        echo "        ";
                        // line 45
                        $context["item_classes"] = [0 => ((                        // line 46
($context["long"] ?? null)) ? (("filter-" . twig_replace_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "id", [])), ["/" => "-"]))) : (""))];
                        // line 49
                        echo "        <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                        echo ">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "tip", [])), "html", null, true);
                        echo "</li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "      </ul>
    ";
                }
                // line 53
                echo "
    ";
                // line 54
                if (($context["multiple"] ?? null)) {
                    // line 55
                    echo "      </div>
    ";
                }
                // line 57
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['tip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
  ";
            // line 59
            if (($context["multiple"] ?? null)) {
                // line 60
                echo "    </div>
  ";
            }
        }
        // line 63
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/elements/filter-tips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 63,  155 => 60,  153 => 59,  150 => 58,  144 => 57,  140 => 55,  138 => 54,  135 => 53,  131 => 51,  120 => 49,  118 => 46,  117 => 45,  115 => 44,  111 => 43,  108 => 42,  106 => 41,  103 => 40,  98 => 38,  93 => 37,  91 => 34,  90 => 32,  88 => 31,  85 => 30,  81 => 29,  78 => 28,  74 => 26,  71 => 25,  69 => 24,  66 => 23,  60 => 21,  58 => 20,  55 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bulma/templates/elements/filter-tips.html.twig", "C:\\wamp64\\www\\drupal\\drupal-8.9.5\\drupal-8.9.5\\themes\\bulma\\templates\\elements\\filter-tips.html.twig");
    }
}
