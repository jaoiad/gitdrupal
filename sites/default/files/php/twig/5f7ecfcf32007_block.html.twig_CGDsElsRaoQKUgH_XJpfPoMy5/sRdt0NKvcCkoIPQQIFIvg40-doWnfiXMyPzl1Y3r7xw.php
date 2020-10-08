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

/* themes/bulma/templates/block/block.html.twig */
class __TwigTemplate_2b165d7ee16612e32dfc2a28e3839349dd9cc0519aaa1f621dba0681c5f97042 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 4, "if" => 12];
        $filters = ["clean_class" => 6, "merge" => 14, "escape" => 46];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'merge', 'escape'],
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

    protected function doGetParent(array $context)
    {
        // line 1
        return "@stable/block/block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 4
        $context["classes"] = (($context["classes"]) ?? ([0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 6
($context["configuration"] ?? null), "provider", [])))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 7
($context["plugin_id"] ?? null)))), 3 => "clearfix"]));
        // line 12
        if ((($context["region"] ?? null) == "footer")) {
            // line 14
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [0 => "column", 1 => "is-narrow"]);
        }
        // line 20
        if (($context["block_panel_style"] ?? null)) {
            // line 21
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [0 => "panel"]);
            // line 23
            $context["title_classes"] = (($context["title_classes"]) ?? ([]));
            // line 26
            $context["title_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["title_classes"] ?? null)), [0 => "panel-heading"]);
        } elseif ( !        // line 30
($context["title_classes"] ?? null)) {
            // line 32
            $context["title_classes"] = [0 => "subtitle", 1 => "is-4", 2 => "is-uppercase"];
        }
        // line 39
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method");
        // line 40
        $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method");
        // line 1
        $this->parent = $this->loadTemplate("@stable/block/block.html.twig", "themes/bulma/templates/block/block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        // line 43
        echo "  ";
        if (($context["block_panel_style"] ?? null)) {
            // line 44
            echo "    <div class=\"panel-block\">
  ";
        }
        // line 46
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
  ";
        // line 47
        if (($context["block_panel_style"] ?? null)) {
            // line 48
            echo "    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/block/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 48,  106 => 47,  101 => 46,  97 => 44,  94 => 43,  91 => 42,  86 => 1,  84 => 40,  82 => 39,  79 => 32,  77 => 30,  75 => 26,  73 => 23,  71 => 21,  69 => 20,  66 => 14,  64 => 12,  62 => 7,  61 => 6,  60 => 4,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bulma/templates/block/block.html.twig", "C:\\wamp64\\www\\drupal\\drupal-8.9.5\\drupal-8.9.5\\themes\\bulma\\templates\\block\\block.html.twig");
    }
}
