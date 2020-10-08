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

/* field.html.twig */
class __TwigTemplate_f393b77a3386ee3a50c2ddc9a4431f7f62dbc09e879dd47b2962eba9639fdaec extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 44, "import" => 69, "if" => 71, "for" => 74, "macro" => 56];
        $filters = ["escape" => 73, "merge" => 58];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'import', 'if', 'for', 'macro'],
                ['escape', 'merge'],
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
        // line 44
        $context["title_classes"] = [0 => "label", 1 => (((        // line 46
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : ("")), 2 => (((        // line 47
($context["label_display"] ?? null) == "inline")) ? ("is-pulled-left") : (""))];
        // line 50
        $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method");
        // line 52
        $context["item_classes"] = (($context["item_classes"]) ?? ([]));
        // line 54
        $context["use_item_wrapper"] = (((isset($context["use_item_wrapper"]) || array_key_exists("use_item_wrapper", $context))) ? (($context["use_item_wrapper"] ?? null)) : (true));
        // line 55
        echo "
";
        // line 69
        $context["helpers"] = $this;
        // line 70
        echo "
";
        // line 71
        if (($context["label_hidden"] ?? null)) {
            // line 72
            echo "  ";
            if (($context["multiple"] ?? null)) {
                // line 73
                echo "    <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
                echo ">
      ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 75
                    echo "        ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["helpers"]->getrender_item($context["item"], ($context["item_classes"] ?? null), ($context["use_item_wrapper"] ?? null)));
                    echo "
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "    </div>
  ";
            } else {
                // line 79
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 80
                    echo "      <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["helpers"]->getrender_item($context["item"], ($context["item_classes"] ?? null), ($context["use_item_wrapper"] ?? null)));
                    echo "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "  ";
            }
        } else {
            // line 84
            echo "  <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
            echo ">
    <div";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</div>
    ";
            // line 86
            if ((($context["multiple"] ?? null) && ($context["use_item_wrapper"] ?? null))) {
                // line 87
                echo "      <div>
    ";
            }
            // line 89
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 90
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["helpers"]->getrender_item($context["item"], ($context["item_classes"] ?? null), ($context["use_item_wrapper"] ?? null)));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "    ";
            if ((($context["multiple"] ?? null) && ($context["use_item_wrapper"] ?? null))) {
                // line 93
                echo "      </div>
    ";
            }
            // line 95
            echo "  </div>
";
        }
    }

    // line 56
    public function getrender_item($__item__ = null, $__item_classes__ = null, $__use_item_wrapper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "item_classes" => $__item_classes__,
            "use_item_wrapper" => $__use_item_wrapper__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 57
            echo "  ";
            // line 58
            $context["item"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item"] ?? null)), ["attributes" => $this->getAttribute($this->getAttribute(            // line 59
($context["item"] ?? null), "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")]);
            // line 62
            echo "  ";
            if (($context["use_item_wrapper"] ?? null)) {
                // line 63
                echo "    <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["item"] ?? null), "attributes", [])), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["item"] ?? null), "content", [])), "html", null, true);
                echo "</div>
  ";
            } else {
                // line 65
                echo "    ";
                $context["renderables"] = $this->loadTemplate("@bulma/macros/renderables.html.twig", "field.html.twig", 65)->unwrap();
                // line 66
                echo "    ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["renderables"]->getmerge_attributes($this->getAttribute(($context["item"] ?? null), "attributes", []), ($context["item"] ?? null), "content"));
                echo "
  ";
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
        return "field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 66,  194 => 65,  186 => 63,  183 => 62,  181 => 59,  180 => 58,  178 => 57,  164 => 56,  158 => 95,  154 => 93,  151 => 92,  142 => 90,  137 => 89,  133 => 87,  131 => 86,  125 => 85,  120 => 84,  116 => 82,  105 => 80,  100 => 79,  96 => 77,  87 => 75,  83 => 74,  78 => 73,  75 => 72,  73 => 71,  70 => 70,  68 => 69,  65 => 55,  63 => 54,  61 => 52,  59 => 50,  57 => 47,  56 => 46,  55 => 44,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "field.html.twig", "themes/bulma/templates/field/field.html.twig");
    }
}
