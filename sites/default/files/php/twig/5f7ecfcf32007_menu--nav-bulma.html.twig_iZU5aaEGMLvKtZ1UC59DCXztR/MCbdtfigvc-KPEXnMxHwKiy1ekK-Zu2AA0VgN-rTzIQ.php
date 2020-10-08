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

/* themes/bulma/templates/navigation/menu--nav-bulma.html.twig */
class __TwigTemplate_f8523e4266a7a80bcf71fda08fc75146021afd2ddd7453a28d326f6c62c3b54b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 23, "macro" => 31, "if" => 33, "for" => 34, "set" => 40];
        $filters = ["merge" => 40, "escape" => 61];
        $functions = ["link" => 61];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['merge', 'escape'],
                ['link']
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
        // line 23
        $context["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["link_classes"] ?? null)));
        echo "

";
    }

    // line 31
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__link_classes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "link_classes" => $__link_classes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 32
            echo "  ";
            $context["menus"] = $this;
            // line 33
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 34
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 35
                    echo "      ";
                    // line 39
                    echo "      ";
                    // line 40
                    $context["item_classes"] = twig_array_merge((($context["link_classes"]) ?? ([])), [0 => (($this->getAttribute(                    // line 41
$context["item"], "in_active_trail", [])) ? ("is-in-active-trail") : (""))]);
                    // line 44
                    echo "      ";
                    // line 45
                    echo "      ";
                    if (($this->getAttribute($context["item"], "below", []) && (($context["menu_level"] ?? null) == 0))) {
                        // line 46
                        echo "        <div class=\"navbar-item has-dropdown is-hoverable\">
        ";
                        // line 48
                        $context["item_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_classes"] ?? null)), [0 => "navbar-link"]);
                        // line 52
                        echo "      ";
                    } else {
                        // line 53
                        echo "        ";
                        if ( !($context["link_classes"] ?? null)) {
                            // line 54
                            echo "          ";
                            // line 55
                            $context["item_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_classes"] ?? null)), [0 => "navbar-item"]);
                            // line 59
                            echo "        ";
                        }
                        // line 60
                        echo "      ";
                    }
                    // line 61
                    echo "      ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute(                    // line 62
$context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute(                    // line 63
$context["item"], "url", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(                    // line 64
$context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method"))), "html", null, true);
                    // line 65
                    echo "
      ";
                    // line 66
                    if (($this->getAttribute($context["item"], "below", []) && (($context["menu_level"] ?? null) == 0))) {
                        // line 67
                        echo "        <div class=\"navbar-dropdown\">
        ";
                        // line 68
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["link_classes"] ?? null)));
                        echo "
        </div>
      </div>
      ";
                    }
                    // line 72
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/navigation/menu--nav-bulma.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 73,  147 => 72,  140 => 68,  137 => 67,  135 => 66,  132 => 65,  130 => 64,  129 => 63,  128 => 62,  126 => 61,  123 => 60,  120 => 59,  118 => 55,  116 => 54,  113 => 53,  110 => 52,  108 => 48,  105 => 46,  102 => 45,  100 => 44,  98 => 41,  97 => 40,  95 => 39,  93 => 35,  88 => 34,  85 => 33,  82 => 32,  67 => 31,  60 => 29,  57 => 24,  55 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bulma/templates/navigation/menu--nav-bulma.html.twig", "C:\\wamp64\\www\\drupal\\drupal-8.9.5\\drupal-8.9.5\\themes\\bulma\\templates\\navigation\\menu--nav-bulma.html.twig");
    }
}
