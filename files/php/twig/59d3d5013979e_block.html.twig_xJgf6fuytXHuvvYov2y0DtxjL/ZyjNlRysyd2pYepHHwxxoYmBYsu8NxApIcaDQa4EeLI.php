<?php

/* sites/bro.eatsoverkeyboard.com/themes/zurb_foundation/templates/block.html.twig */
class __TwigTemplate_3a083a8be5b9589781b0bd877c2e537799d2dc4e576c65b75f2307ce488de51c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 45, "block" => 59);
        $filters = array("length" => 55);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block'),
                array('length'),
                array()
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

        // line 45
        if (($this->getAttribute(($context["block"] ?? null), "delta", array()) != "main")) {
            // line 46
            echo "<section";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">
  ";
        }
        // line 48
        echo "
  ";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 50
        if (($context["label"] ?? null)) {
            // line 51
            echo "    <h2 ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 53
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

  ";
        // line 55
        if (twig_length_filter($this->env, ($context["content_attributes"] ?? null))) {
            // line 56
            echo "  <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_attributes"] ?? null), "html", null, true));
            echo ">
    ";
        }
        // line 58
        echo "
    ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "
    ";
        // line 63
        if (twig_length_filter($this->env, ($context["content_attributes"] ?? null))) {
            // line 64
            echo "  </div>
  ";
        }
        // line 66
        echo "
  ";
        // line 67
        if (($this->getAttribute(($context["block"] ?? null), "delta", array()) != "main")) {
            // line 68
            echo "</section>
";
        }
    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
        // line 60
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "sites/bro.eatsoverkeyboard.com/themes/zurb_foundation/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 60,  108 => 59,  102 => 68,  100 => 67,  97 => 66,  93 => 64,  91 => 63,  88 => 62,  86 => 59,  83 => 58,  77 => 56,  75 => 55,  69 => 53,  61 => 51,  59 => 50,  55 => 49,  52 => 48,  46 => 46,  44 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "sites/bro.eatsoverkeyboard.com/themes/zurb_foundation/templates/block.html.twig", "/var/www/drupal8/sites/bro.eatsoverkeyboard.com/themes/zurb_foundation/templates/block.html.twig");
    }
}
