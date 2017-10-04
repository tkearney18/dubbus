<?php

/* sites/bro.eatsoverkeyboard.com/themes/dubbus/templates/page.html.twig */
class __TwigTemplate_1e11dd1a028e684ea9d88edfc841f0021892c0672dcaabc9cd6110dc8b7063ba extends Twig_Template
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
        $tags = array("if" => 68, "spaceless" => 159);
        $filters = array("t" => 80);
        $functions = array("path" => 110);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'spaceless'),
                array('t'),
                array('path')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 57
        echo "
<div class=\"off-canvas-wrap\" data-offcanvas>
  <div class=\"inner-wrap\">
    <aside class=\"left-off-canvas-menu\" role=\"complementary\">
      ";
        // line 61
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_off_canvas", array()), "html", null, true));
        echo "
    </aside>

    <aside class=\"right-off-canvas-menu\" role=\"complementary\">
      ";
        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_off_canvas", array()), "html", null, true));
        echo "
    </aside>

      ";
        // line 68
        if ($this->getAttribute(($context["page"] ?? null), "meta_header", array())) {
            // line 69
            echo "        ";
            if (($context["meta_header_grid"] ?? null)) {
                // line 70
                echo "          <div class=\"row\">
            <div class=\"large-12 columns\">
        ";
            }
            // line 73
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "meta_header", array()), "html", null, true));
            echo "
        ";
            // line 74
            if (($context["meta_header_grid"] ?? null)) {
                // line 75
                echo "            </div>
          </div>
        ";
            }
            // line 78
            echo "      ";
        }
        // line 79
        echo "
      <header class=\"row\" role=\"banner\" aria-label=\"";
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header")));
        echo "\">
        ";
        // line 81
        if ((($context["linked_site_name"] ?? null) || ($context["linked_logo"] ?? null))) {
            // line 82
            echo "          <div class=\"large-2 columns\">
            ";
            // line 83
            if (($context["linked_logo"] ?? null)) {
                // line 84
                echo "              ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linked_logo"] ?? null), "html", null, true));
                echo "
            ";
            }
            // line 86
            echo "          </div>
          <div class=\"left large-4 columns\">
            ";
            // line 88
            if (($context["is_front"] ?? null)) {
                // line 89
                echo "              <h1 id=\"site-name\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linked_site_name"] ?? null), "html", null, true));
                echo "</h1>
            ";
            } else {
                // line 91
                echo "              <div id=\"site-name\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linked_site_name"] ?? null), "html", null, true));
                echo "</div>
            ";
            }
            // line 93
            echo "          </div>
        ";
        }
        // line 95
        echo "      </header>

      ";
        // line 97
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 98
            echo "        <div class=\"row\">
          <div class=\"large-12 columns\">
            ";
            // line 100
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 104
        echo "
      <div class=\"row\">
        ";
        // line 106
        if (($context["show_account_info"] ?? null)) {
            // line 107
            echo "          <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["site_slogan"] ?? null)) ? ("large-6") : ("large-4 columns large-offset-8"))));
            echo " columns hide-for-small\">
            <p>
              ";
            // line 109
            if (($context["logged_in"] ?? null)) {
                // line 110
                echo "                <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.page")));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("My Account")));
                echo "</a>
                <a href=\"";
                // line 111
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.logout")));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Logout")));
                echo "</a>
              ";
            } else {
                // line 113
                echo "                <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.login")));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Login")));
                echo "</a>
                <a href=\"";
                // line 114
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.register")));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Sign Up")));
                echo "</a>
              ";
            }
            // line 116
            echo "            </p>
          </div>
        ";
        }
        // line 119
        echo "        ";
        if (($context["site_slogan"] ?? null)) {
            // line 120
            echo "          <div class=\"large-6 columns hide-for-small\">
            ";
            // line 121
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 124
        echo "        ";
        if (($context["show_account_info"] ?? null)) {
            // line 125
            echo "          <div class=\"show-for-small\">
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 128
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.login")));
            echo "\" class=\"radius button\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Login")));
            echo "</a>
              </p>
            </div>
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 133
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.register")));
            echo "\" class=\"radius success button\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Sign Up")));
            echo "</a>
              </p>
            </div>
          </div>
        ";
        }
        // line 138
        echo "      </div>

      ";
        // line 140
        if ((($context["messages"] ?? null) &&  !($context["zurb_foundation_messages_modal"] ?? null))) {
            // line 141
            echo "      <div class=\"l-messages row\">
        <div class=\"large-12 columns\">
          ";
            // line 143
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["messages"] ?? null), "html", null, true));
            echo "
        </div>
      </div>
      ";
        }
        // line 147
        echo "
      ";
        // line 148
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 149
            echo "      <div class=\"l-help row\">
        <div class=\"large-12 columns\">
          ";
            // line 151
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
        </div>
      </div>
      ";
        }
        // line 155
        echo "
      <div>
        <main id=\"main\" class=\"";
        // line 157
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_grid"] ?? null), "html", null, true));
        echo "\" role=\"main\">
          ";
        // line 158
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 159
            echo "            ";
            ob_start();
            // line 160
            echo "              ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 162
            echo "          ";
        }
        // line 163
        echo "          <a id=\"main-content\"></a>
          ";
        // line 164
        if (($context["breadcrumb"] ?? null)) {
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["breadcrumb"] ?? null), "html", null, true));
            echo " ";
        }
        // line 165
        echo "          <section>
            ";
        // line 166
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
          </section>
        </main>
        ";
        // line 169
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 170
            echo "          <div id=\"sidebar-first\" class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_grid"] ?? null), "html", null, true));
            echo " columns sidebar \">
            ";
            // line 171
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 174
        echo "      </div>
      ";
        // line 175
        if (($this->getAttribute(($context["page"] ?? null), "bottom_left", array()) && $this->getAttribute(($context["page"] ?? null), "bottom_right", array()))) {
            // line 176
            echo "        <div class=\"row\">
          ";
            // line 177
            if ($this->getAttribute(($context["page"] ?? null), "bottom_left", array())) {
                // line 178
                echo "            <div id=\"bottom_left\" class=\"large-6 columns\">
              ";
                // line 179
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_left", array()), "html", null, true));
                echo "
            </div>
            ";
            }
            // line 182
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "bottom_right", array())) {
                // line 183
                echo "            <div id=\"bottom_right\">
              ";
                // line 184
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_right", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 187
            echo "        </div>
      ";
        }
        // line 189
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 190
            echo "        <footer class=\"row\">
          ";
            // line 191
            if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
                // line 192
                echo "            <div id=\"footer\" class=\"large-12 columns\">
              ";
                // line 193
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 196
            echo "        </footer>
      ";
        }
        // line 198
        echo "
    <a class=\"exit-off-canvas\"></a>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sites/bro.eatsoverkeyboard.com/themes/dubbus/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 198,  371 => 196,  365 => 193,  362 => 192,  360 => 191,  357 => 190,  354 => 189,  350 => 187,  344 => 184,  341 => 183,  338 => 182,  332 => 179,  329 => 178,  327 => 177,  324 => 176,  322 => 175,  319 => 174,  313 => 171,  308 => 170,  306 => 169,  300 => 166,  297 => 165,  291 => 164,  288 => 163,  285 => 162,  279 => 160,  276 => 159,  274 => 158,  270 => 157,  266 => 155,  259 => 151,  255 => 149,  253 => 148,  250 => 147,  243 => 143,  239 => 141,  237 => 140,  233 => 138,  223 => 133,  213 => 128,  208 => 125,  205 => 124,  199 => 121,  196 => 120,  193 => 119,  188 => 116,  181 => 114,  174 => 113,  167 => 111,  160 => 110,  158 => 109,  152 => 107,  150 => 106,  146 => 104,  139 => 100,  135 => 98,  133 => 97,  129 => 95,  125 => 93,  119 => 91,  113 => 89,  111 => 88,  107 => 86,  101 => 84,  99 => 83,  96 => 82,  94 => 81,  90 => 80,  87 => 79,  84 => 78,  79 => 75,  77 => 74,  72 => 73,  67 => 70,  64 => 69,  62 => 68,  56 => 65,  49 => 61,  43 => 57,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "sites/bro.eatsoverkeyboard.com/themes/dubbus/templates/page.html.twig", "/var/www/drupal8/sites/bro.eatsoverkeyboard.com/themes/dubbus/templates/page.html.twig");
    }
}
