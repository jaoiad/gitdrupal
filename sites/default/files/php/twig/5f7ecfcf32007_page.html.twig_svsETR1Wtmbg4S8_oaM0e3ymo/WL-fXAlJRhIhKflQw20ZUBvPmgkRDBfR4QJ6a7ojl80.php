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

/* themes/bulma/templates/system/page.html.twig */
class __TwigTemplate_ea3cb1b3663e914ddb7a13e3ddfaf68c02a39c36f980a094a129b7d5a4a15ed8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'navbar_branding' => [$this, 'block_navbar_branding'],
            'navbar_social' => [$this, 'block_navbar_social'],
            'primary_menu' => [$this, 'block_primary_menu'],
            'header' => [$this, 'block_header'],
            'header_and_search' => [$this, 'block_header_and_search'],
            'tabs' => [$this, 'block_tabs'],
            'secondary_menu' => [$this, 'block_secondary_menu'],
            'tiles' => [$this, 'block_tiles'],
            'main' => [$this, 'block_main'],
            'main_content' => [$this, 'block_main_content'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'bottom' => [$this, 'block_bottom'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 56, "if" => 57, "set" => 200];
        $filters = ["escape" => 64, "merge" => 200, "without" => 228];
        $functions = ["create_attribute" => 201];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'set'],
                ['escape', 'merge', 'without'],
                ['create_attribute']
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
        // line 56
        $this->displayBlock('navbar', $context, $blocks);
        // line 91
        $this->displayBlock('header', $context, $blocks);
        // line 125
        $this->displayBlock('secondary_menu', $context, $blocks);
        // line 135
        $this->displayBlock('tiles', $context, $blocks);
        // line 186
        $this->displayBlock('main', $context, $blocks);
        // line 257
        $this->displayBlock('bottom', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 56
    public function block_navbar($context, array $blocks = [])
    {
        // line 57
        if ((($this->getAttribute(($context["page"] ?? null), "navbar_branding", []) || $this->getAttribute(($context["page"] ?? null), "navbar_social", [])) || $this->getAttribute(($context["page"] ?? null), "primary_menu", []))) {
            // line 59
            echo "<nav class=\"navbar has-shadow\">
  <div class=\"container\">
    <div class=\"navbar-brand\">
      ";
            // line 62
            $this->displayBlock('navbar_branding', $context, $blocks);
            // line 67
            echo "      <div id=\"js-navbar-burger\" class=\"navbar-burger burger\" data-target=\"navbar-menu\">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div id=\"js-navbar-menu\" class=\"navbar-menu\">
      ";
            // line 74
            $this->displayBlock('navbar_social', $context, $blocks);
            // line 81
            echo "      ";
            $this->displayBlock('primary_menu', $context, $blocks);
            // line 86
            echo "    </div>
  </div>
</nav>
";
        }
    }

    // line 62
    public function block_navbar_branding($context, array $blocks = [])
    {
        // line 63
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navbar_branding", [])) {
            // line 64
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar_branding", [])), "html", null, true);
            echo "
      ";
        }
        // line 66
        echo "      ";
    }

    // line 74
    public function block_navbar_social($context, array $blocks = [])
    {
        // line 75
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navbar_social", [])) {
            // line 76
            echo "      <div class=\"navbar-start\">
      ";
            // line 77
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar_social", [])), "html", null, true);
            echo "
      </div>
      ";
        }
        // line 80
        echo "      ";
    }

    // line 81
    public function block_primary_menu($context, array $blocks = [])
    {
        // line 82
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 83
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
      ";
        }
        // line 85
        echo "      ";
    }

    // line 91
    public function block_header($context, array $blocks = [])
    {
        // line 92
        echo "<section class=\"hero is-primary\">
  ";
        // line 93
        $this->displayBlock('header_and_search', $context, $blocks);
        // line 113
        echo "  ";
        $this->displayBlock('tabs', $context, $blocks);
        // line 123
        echo "</section>
";
    }

    // line 93
    public function block_header_and_search($context, array $blocks = [])
    {
        // line 94
        echo "  ";
        if (($this->getAttribute(($context["page"] ?? null), "header", []) || $this->getAttribute(($context["page"] ?? null), "header_search", []))) {
            // line 95
            echo "  ";
            // line 96
            echo "  <div class=\"hero-body is-primary\">
    <div class=\"container\">
      <div class=\"columns is-vcentered\">
        <div class=\"column\">
          ";
            // line 100
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
          ";
            // line 101
            if ((($context["is_front"] ?? null) && ($context["site_slogan"] ?? null))) {
                // line 102
                echo "            <h1 class=\"title\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
                echo "</h1>
          ";
            }
            // line 104
            echo "        </div>
        <div class=\"column is-narrow\">
          ";
            // line 106
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_search", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 112
        echo "  ";
    }

    // line 113
    public function block_tabs($context, array $blocks = [])
    {
        // line 114
        echo "  ";
        // line 115
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "header_tabs", [])) {
            // line 116
            echo "    <div class=\"hero-footer\">
      <div class=\"container\">
        ";
            // line 118
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_tabs", [])), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 122
        echo "  ";
    }

    // line 125
    public function block_secondary_menu($context, array $blocks = [])
    {
        // line 127
        if ($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])) {
            // line 128
            echo "<nav class=\"nav has-shadow\">
  <div class=\"container\">
    ";
            // line 130
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
            echo "
  </div>
</nav>
";
        }
    }

    // line 135
    public function block_tiles($context, array $blocks = [])
    {
        // line 137
        if ($this->getAttribute(($context["page"] ?? null), "tile_one", [])) {
            // line 138
            echo "<div class=\"blocks tiles\">
  <div class=\"container\">
    <div class=\"tile is-ancestor\">
      <div class=\"tile is-vertical is-8\">
        <div class=\"tile\">
          ";
            // line 143
            if (($this->getAttribute(($context["page"] ?? null), "tile_one", []) || $this->getAttribute(($context["page"] ?? null), "tile_two", []))) {
                // line 144
                echo "            <div class=\"tile is-parent is-vertical\">
              <div class=\"tile is-child notification is-primary\">
                ";
                // line 146
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "tile_one", [])), "html", null, true);
                echo "
              </div>
              <div class=\"tile is-child notification is-warning\">
                ";
                // line 149
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "tile_two", [])), "html", null, true);
                echo "
              </div>
            </div>
          ";
            }
            // line 153
            echo "
          ";
            // line 154
            if ($this->getAttribute(($context["page"] ?? null), "tile_three", [])) {
                // line 155
                echo "            <div class=\"tile is-parent\">
              <div class=\"tile is-child notification is-info\">
                ";
                // line 157
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "tile_three", [])), "html", null, true);
                echo "
              </div>
            </div>
          ";
            }
            // line 161
            echo "
        </div>

        ";
            // line 164
            if ($this->getAttribute(($context["page"] ?? null), "tile_four", [])) {
                // line 165
                echo "          <div class=\"tile is-parent\">
            <div class=\"tile is-child notification is-danger\">
              ";
                // line 167
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "tile_four", [])), "html", null, true);
                echo "
            </div>
          </div>
        ";
            }
            // line 171
            echo "
      </div>

      ";
            // line 174
            if ($this->getAttribute(($context["page"] ?? null), "tile_five", [])) {
                // line 175
                echo "        <div class=\"tile is-parent\">
          <div class=\"tile is-child notification is-success\">
            ";
                // line 177
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "tile_five", [])), "html", null, true);
                echo "
          </div>
        </div>
      ";
            }
            // line 181
            echo "    </div>
  </div>
</div>
";
        }
    }

    // line 186
    public function block_main($context, array $blocks = [])
    {
        // line 188
        echo "<section class=\"section\">
  <main role=\"main\" class=\"container\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 191
        echo "
    ";
        // line 192
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
    ";
        // line 193
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "

    <div class=\"columns is-centered\">
      ";
        // line 196
        $this->displayBlock('main_content', $context, $blocks);
        // line 213
        echo "      ";
        $this->displayBlock('sidebar_first', $context, $blocks);
        // line 233
        echo "      ";
        $this->displayBlock('sidebar_second', $context, $blocks);
        // line 252
        echo "    </div>

  </main>
</section>
";
    }

    // line 196
    public function block_main_content($context, array $blocks = [])
    {
        // line 197
        echo "      ";
        // line 198
        echo "      ";
        if ( !$this->getAttribute(($context["page"] ?? null), "content_attributes", [])) {
            // line 199
            echo "      ";
            // line 200
            $context["page"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), ["content_attributes" => $this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(), "addClass", [0 => [0 => "main-content", 1 => "column"]], "method")]);
            // line 207
            echo "      ";
        }
        // line 208
        echo "      ";
        // line 209
        echo "      <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_attributes", [])), "html", null, true);
        echo ">
        ";
        // line 210
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
      </div>
      ";
    }

    // line 213
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 214
        echo "      ";
        // line 215
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 216
            echo "      ";
            // line 217
            echo "        ";
            if ( !$this->getAttribute(($context["page"] ?? null), "sidebar_first_attributes", [])) {
                // line 218
                echo "        ";
                // line 219
                $context["page"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), ["sidebar_first_attributes" => $this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(), "addClass", [0 => [0 => "sidebar-first", 1 => "column", 2 => "is-2"]], "method")]);
                // line 227
                echo "        ";
            }
            // line 228
            echo "        <aside";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first_attributes", [])), "role"), "html", null, true);
            echo " role=\"complementary\">
          ";
            // line 229
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 232
        echo "      ";
    }

    // line 233
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 234
        echo "      ";
        // line 235
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 236
            echo "        ";
            if ( !$this->getAttribute(($context["page"] ?? null), "sidebar_second_attributes", [])) {
                // line 237
                echo "        ";
                // line 238
                $context["page"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), ["sidebar_second_attributes" => $this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(), "addClass", [0 => [0 => "sidebar-second", 1 => "column", 2 => "is-2"]], "method")]);
                // line 246
                echo "        ";
            }
            // line 247
            echo "        <aside";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second_attributes", [])), "role"), "html", null, true);
            echo " role=\"complementary\">
          ";
            // line 248
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 251
        echo "      ";
    }

    // line 257
    public function block_bottom($context, array $blocks = [])
    {
        // line 259
        if ($this->getAttribute(($context["page"] ?? null), "bottom", [])) {
            // line 260
            echo "<section class=\"hero is-info\">
  <div class=\"container\">
    ";
            // line 262
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom", [])), "html", null, true);
            echo "
  </div>
</section>
";
        }
    }

    // line 268
    public function block_footer($context, array $blocks = [])
    {
        // line 269
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 270
            echo "  <footer role=\"contentinfo\" class=\"footer\">
    <div class=\"container\">
      ";
            // line 272
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
    </div>
  </footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/system/page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  525 => 272,  521 => 270,  519 => 269,  516 => 268,  507 => 262,  503 => 260,  501 => 259,  498 => 257,  494 => 251,  488 => 248,  483 => 247,  480 => 246,  478 => 238,  476 => 237,  473 => 236,  470 => 235,  468 => 234,  465 => 233,  461 => 232,  455 => 229,  450 => 228,  447 => 227,  445 => 219,  443 => 218,  440 => 217,  438 => 216,  435 => 215,  433 => 214,  430 => 213,  423 => 210,  418 => 209,  416 => 208,  413 => 207,  411 => 200,  409 => 199,  406 => 198,  404 => 197,  401 => 196,  393 => 252,  390 => 233,  387 => 213,  385 => 196,  379 => 193,  375 => 192,  372 => 191,  368 => 188,  365 => 186,  357 => 181,  350 => 177,  346 => 175,  344 => 174,  339 => 171,  332 => 167,  328 => 165,  326 => 164,  321 => 161,  314 => 157,  310 => 155,  308 => 154,  305 => 153,  298 => 149,  292 => 146,  288 => 144,  286 => 143,  279 => 138,  277 => 137,  274 => 135,  265 => 130,  261 => 128,  259 => 127,  256 => 125,  252 => 122,  245 => 118,  241 => 116,  238 => 115,  236 => 114,  233 => 113,  229 => 112,  220 => 106,  216 => 104,  210 => 102,  208 => 101,  204 => 100,  198 => 96,  196 => 95,  193 => 94,  190 => 93,  185 => 123,  182 => 113,  180 => 93,  177 => 92,  174 => 91,  170 => 85,  164 => 83,  161 => 82,  158 => 81,  154 => 80,  148 => 77,  145 => 76,  142 => 75,  139 => 74,  135 => 66,  129 => 64,  126 => 63,  123 => 62,  115 => 86,  112 => 81,  110 => 74,  101 => 67,  99 => 62,  94 => 59,  92 => 57,  89 => 56,  85 => 268,  82 => 267,  80 => 257,  78 => 186,  76 => 135,  74 => 125,  72 => 91,  70 => 56,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bulma/templates/system/page.html.twig", "C:\\wamp64\\www\\drupal-8.9.5\\themes\\bulma\\templates\\system\\page.html.twig");
    }
}
