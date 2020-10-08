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

/* themes/d8theming-16/page--front.html.twig */
class __TwigTemplate_9b87731f9f9660963d94255212874271727c12897c3c1912ed1fbf8e07f14a86 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 1, "if" => 13];
        $filters = ["escape" => 9];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
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
        // line 1
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/header.html.twig"), "themes/d8theming-16/page--front.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"container\">
  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 6
        echo "
    <div class=\"layout-content\">
      <div class=\"article-list\">
        ";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        </div>
    </div>";
        // line 12
        echo "
    ";
        // line 13
        if ($this->getAttribute(($context["page"] ?? null), "sidebar", [])) {
            // line 14
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 18
        echo "
  </main>

  ";
        // line 21
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 22
            echo "    <footer role=\"contentinfo\">
      ";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 26
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/d8theming-16/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 26,  96 => 23,  93 => 22,  91 => 21,  86 => 18,  80 => 15,  77 => 14,  75 => 13,  72 => 12,  67 => 9,  62 => 6,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/d8theming-16/page--front.html.twig", "C:\\wamp64\\www\\drupal\\drupal-8.9.5\\drupal-8.9.5\\themes\\d8theming-16\\page--front.html.twig");
    }
}
