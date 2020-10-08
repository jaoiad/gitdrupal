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

/* @bulma/macros/renderables.html.twig */
class __TwigTemplate_651f3b95323f407addb4fbd7cc5f89fcfd21c286f582214ef8e81b6a039401ee extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["macro" => 1, "if" => 3, "set" => 5, "for" => 6];
        $filters = ["merge" => 15, "without" => 15, "escape" => 24];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['macro', 'if', 'set', 'for'],
                ['merge', 'without', 'escape'],
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
    }

    // line 1
    public function getmerge_attributes($__attributes__ = null, $__item__ = null, $__item_key__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "attributes" => $__attributes__,
            "item" => $__item__,
            "item_key" => $__item_key__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "  ";
            // line 3
            echo "  ";
            if ($this->getAttribute($this->getAttribute(($context["item"] ?? null), ($context["item_key"] ?? null), [], "array", false, true), "#options", [], "array", true, true)) {
                // line 4
                echo "    ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), ($context["item_key"] ?? null), [], "array", false, true), "#options", [], "array", false, true), "attributes", [], "array", true, true)) {
                    // line 5
                    echo "      ";
                    $context["inner_attributes"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), ($context["item_key"] ?? null), [], "array"), "#options", [], "array"), "attributes", [], "array");
                    // line 6
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["inner_attributes"] ?? null));
                    foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                        // line 7
                        echo "        ";
                        if ((($context["property"] ?? null) == "class")) {
                            // line 8
                            echo "          ";
                            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => $context["value"]], "method");
                            // line 9
                            echo "        ";
                        } else {
                            // line 10
                            echo "          ";
                            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "setAttribute", [0 => $context["attribute"], 1 => $context["value"]], "method");
                            // line 11
                            echo "        ";
                        }
                        // line 12
                        echo "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    echo "    ";
                }
                // line 14
                echo "    ";
                // line 15
                $context["item"] = twig_array_merge($this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["item"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["item_key"] ?? null))), [                // line 16
($context["item_key"] ?? null) => twig_array_merge($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["item"] ?? null), ($context["item_key"] ?? null), [], "array")), ["#options" => twig_array_merge($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(                // line 17
($context["item"] ?? null), ($context["item_key"] ?? null), [], "array"), "#options", [], "array")), ["attributes" => $this->getAttribute(                // line 18
($context["attributes"] ?? null), "toArray", [], "method")])])]);
                // line 23
                echo "  ";
            }
            // line 24
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["item"] ?? null), ($context["item_key"] ?? null), [], "array")), "html", null, true);
            echo "
";
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
        return "@bulma/macros/renderables.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 24,  118 => 23,  116 => 18,  115 => 17,  114 => 16,  113 => 15,  111 => 14,  108 => 13,  102 => 12,  99 => 11,  96 => 10,  93 => 9,  90 => 8,  87 => 7,  82 => 6,  79 => 5,  76 => 4,  73 => 3,  71 => 2,  57 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@bulma/macros/renderables.html.twig", "C:\\wamp64\\www\\drupal\\drupal-8.9.5\\drupal-8.9.5\\themes\\bulma\\templates\\macros\\renderables.html.twig");
    }
}
