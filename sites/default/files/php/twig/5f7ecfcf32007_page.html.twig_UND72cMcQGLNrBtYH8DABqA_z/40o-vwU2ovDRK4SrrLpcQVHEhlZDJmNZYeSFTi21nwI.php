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

/* themes/zurb_foundation/templates/page.html.twig */
class __TwigTemplate_edbbb8635000b8240c8069c80d85dc6af241ff02df3c8f81842bfb5f769ed9ab extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 58, "apply" => 132];
        $filters = ["escape" => 50, "t" => 70, "spaceless" => 132, "date" => 175];
        $functions = ["path" => 83];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'apply'],
                ['escape', 't', 'spaceless', 'date'],
                ['path']
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
        echo "
<div class=\"off-canvas-wrapper\">
  <div class=\"inner-wrap off-canvas-wrapper-inner\" id=\"inner-wrap\" data-off-canvas-wrapper>
    <aside id=\"left-off-canvas-menu\" class=\"off-canvas left-off-canvas-menu position-left\" role=\"complementary\" data-off-canvas>
      ";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "left_off_canvas", [])), "html", null, true);
        echo "
    </aside>

    <aside id=\"right-off-canvas-menu\" class=\"off-canvas right-off-canvas-menu position-right\" role=\"complementary\" data-off-canvas>
      ";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "right_off_canvas", [])), "html", null, true);
        echo "
    </aside>

    <div class=\"off-canvas-content\" data-off-canvas-content>
      ";
        // line 58
        if ($this->getAttribute(($context["page"] ?? null), "meta_header", [])) {
            // line 59
            echo "        ";
            if (($context["meta_header_grid"] ?? null)) {
                // line 60
                echo "          <div class=\"row\">
            <div class=\"large-12 columns\">
        ";
            }
            // line 63
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "meta_header", [])), "html", null, true);
            echo "
        ";
            // line 64
            if (($context["meta_header_grid"] ?? null)) {
                // line 65
                echo "            </div>
          </div>
        ";
            }
            // line 68
            echo "      ";
        }
        // line 69
        echo "
      <header class=\"row\" role=\"banner\" aria-label=\"";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header"));
        echo "\">
        ";
        // line 71
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 72
            echo "          <div class=\"large-12 columns\">
            ";
            // line 73
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 76
        echo "      </header>

      <div class=\"row\">
        ";
        // line 79
        if (($context["show_account_info"] ?? null)) {
            // line 80
            echo "          <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["site_slogan"] ?? null)) ? ("large-6") : ("large-4 columns large-offset-8")));
            echo " columns hide-for-small\">
            <p>
              ";
            // line 82
            if (($context["logged_in"] ?? null)) {
                // line 83
                echo "                <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.page"));
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("My Account"));
                echo "</a>
                <a href=\"";
                // line 84
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.logout"));
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Logout"));
                echo "</a>
              ";
            } else {
                // line 86
                echo "                <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.login"));
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Login"));
                echo "</a>
                <a href=\"";
                // line 87
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.register"));
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Sign Up"));
                echo "</a>
              ";
            }
            // line 89
            echo "            </p>
          </div>
        ";
        }
        // line 92
        echo "        ";
        if (($context["site_slogan"] ?? null)) {
            // line 93
            echo "          <div class=\"large-6 columns hide-for-small\">
            ";
            // line 94
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 97
        echo "        ";
        if (($context["show_account_info"] ?? null)) {
            // line 98
            echo "          <div class=\"show-for-small\">
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 101
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.login"));
            echo "\" class=\"radius button\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Login"));
            echo "</a>
              </p>
            </div>
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 106
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.register"));
            echo "\" class=\"radius success button\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Sign Up"));
            echo "</a>
              </p>
            </div>
          </div>
        ";
        }
        // line 111
        echo "      </div>

      ";
        // line 113
        if ((($context["messages"] ?? null) &&  !($context["zurb_foundation_messages_modal"] ?? null))) {
            // line 114
            echo "      <div class=\"l-messages row\">
        <div class=\"large-12 columns\">
          ";
            // line 116
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
            echo "
        </div>
      </div>
      ";
        }
        // line 120
        echo "
      ";
        // line 121
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 122
            echo "      <div class=\"l-help row\">
        <div class=\"large-12 columns\">
          ";
            // line 124
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
        </div>
      </div>
      ";
        }
        // line 128
        echo "
      <div class=\"row\">
        <main id=\"main\" class=\"";
        // line 130
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid"] ?? null)), "html", null, true);
        echo " columns\" role=\"main\">
          ";
        // line 131
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 132
            echo "            ";
            ob_start(function () { return ''; });
            // line 133
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
            ";
            $___internal_98b41e4700c358c81a3301701785e5c918fca79cd57631dc168157413f785cb2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 132
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_spaceless($___internal_98b41e4700c358c81a3301701785e5c918fca79cd57631dc168157413f785cb2_));
            // line 135
            echo "          ";
        }
        // line 136
        echo "          <a id=\"main-content\"></a>
          ";
        // line 137
        if (($context["breadcrumb"] ?? null)) {
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
            echo " ";
        }
        // line 138
        echo "          <section>
            ";
        // line 139
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          </section>
        </main>
        ";
        // line 142
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 143
            echo "          <div id=\"sidebar-first\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid"] ?? null)), "html", null, true);
            echo " columns sidebar \">
            ";
            // line 144
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 147
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 148
            echo "          <div id=\"sidebar-second\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_sec_grid"] ?? null)), "html", null, true);
            echo " columns sidebar\">
            ";
            // line 149
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 152
        echo "      </div>
      ";
        // line 153
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_middle", [])) || $this->getAttribute(($context["page"] ?? null), "footer_last", []))) {
            // line 154
            echo "        <footer class=\"row\">
          ";
            // line 155
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 156
                echo "            <div id=\"footer-first\" class=\"large-4 columns\">
              ";
                // line 157
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 160
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_middle", [])) {
                // line 161
                echo "            <div id=\"footer-middle\" class=\"large-4 columns\">
              ";
                // line 162
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_middle", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 165
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_last", [])) {
                // line 166
                echo "            <div id=\"footer-last\" class=\"large-4 columns\">
              ";
                // line 167
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_last", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 170
            echo "        </footer>
      ";
        }
        // line 172
        echo "      ";
        if (($context["block_copyright_show"] ?? null)) {
            // line 173
            echo "        <div class=\"bottom-bar callout secondary large-12 columns\">
          ";
            // line 174
            if ( !($context["block_copyright_custom_text"] ?? null)) {
                // line 175
                echo "            <p>&copy; ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("All rights reserved."));
                echo "</p>
          ";
            } else {
                // line 177
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_copyright"] ?? null)), "html", null, true);
                echo "
          ";
            }
            // line 179
            echo "        </div>
      ";
        }
        // line 181
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/zurb_foundation/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 181,  379 => 179,  373 => 177,  363 => 175,  361 => 174,  358 => 173,  355 => 172,  351 => 170,  345 => 167,  342 => 166,  339 => 165,  333 => 162,  330 => 161,  327 => 160,  321 => 157,  318 => 156,  316 => 155,  313 => 154,  311 => 153,  308 => 152,  302 => 149,  297 => 148,  294 => 147,  288 => 144,  283 => 143,  281 => 142,  275 => 139,  272 => 138,  266 => 137,  263 => 136,  260 => 135,  258 => 132,  252 => 133,  249 => 132,  247 => 131,  243 => 130,  239 => 128,  232 => 124,  228 => 122,  226 => 121,  223 => 120,  216 => 116,  212 => 114,  210 => 113,  206 => 111,  196 => 106,  186 => 101,  181 => 98,  178 => 97,  172 => 94,  169 => 93,  166 => 92,  161 => 89,  154 => 87,  147 => 86,  140 => 84,  133 => 83,  131 => 82,  125 => 80,  123 => 79,  118 => 76,  112 => 73,  109 => 72,  107 => 71,  103 => 70,  100 => 69,  97 => 68,  92 => 65,  90 => 64,  85 => 63,  80 => 60,  77 => 59,  75 => 58,  68 => 54,  61 => 50,  55 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/zurb_foundation/templates/page.html.twig", "C:\\wamp64\\www\\drupal\\drupal-8.9.5\\drupal-8.9.5\\themes\\zurb_foundation\\templates\\page.html.twig");
    }
}
