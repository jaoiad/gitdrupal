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

/* modules/d8f6_basic/templates/layout/page.html.twig */
class __TwigTemplate_0bf83ef88503e7b3d32b928c9177e03429516fa9bc4cc349173535f890a6378b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 73, "if" => 77];
        $filters = ["escape" => 49];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
        // line 46
        echo "<div class=\"l-main\">
  <div class=\"row\">
    <header class=\"small-12 columns small-order-2 medium-order-1 header__wrapper\" role=\"banner\">
      ";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
    </header>
    <div class=\"small-12 columns small-order-1 medium-order-2 menu-bar__wrapper\">
      <div class=\"title-bar\" data-responsive-toggle=\"menu-search-wrapper\" data-hide-for=\"medium\">
        <button class=\"menu-icon\" type=\"button\" data-toggle></button>
        <div class=\"title-bar-title\">Menu</div>
      </div>
      <div class=\"top-bar\" id=\"menu-search-wrapper\">
        <div class=\"top-bar-left main-menu__wrapper\">
          ";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "menus", [])), "html", null, true);
        echo "
        </div>
        <div class=\"top-bar-right search__wrapper\">
          ";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"small-12 columns show-for-medium breadcrumb__wrapper\">
      ";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
    </div>
    <div class=\"small-12 columns site-help__wrapper\">
      ";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
    </div>
    ";
        // line 73
        $context["content_class"] = (($this->getAttribute(($context["page"] ?? null), "sidebar", [])) ? ("medium-8") : ("medium-12"));
        // line 74
        echo "    <div class=\"small-12 ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_class"] ?? null)), "html", null, true);
        echo " columns content__main\">
      ";
        // line 75
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
    </div>
    ";
        // line 77
        if ($this->getAttribute(($context["page"] ?? null), "sidebar", [])) {
            // line 78
            echo "      <aside class=\"small-12 medium-4 columns content__sidebar\" role=\"complementary\">
        ";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 82
        echo "    <footer class=\"small-12 columns content__footer\" role=\"contentinfo\">
      <hr />
      ";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
    </footer>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/d8f6_basic/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 84,  122 => 82,  116 => 79,  113 => 78,  111 => 77,  106 => 75,  101 => 74,  99 => 73,  94 => 71,  88 => 68,  78 => 61,  72 => 58,  60 => 49,  55 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/d8f6_basic/templates/layout/page.html.twig", "C:\\wamp64\\www\\drupal\\drupal-8.9.5\\drupal-8.9.5\\modules\\d8f6_basic\\templates\\layout\\page.html.twig");
    }
}
