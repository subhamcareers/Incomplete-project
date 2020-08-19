<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/material_base/templates/layout/page.html.twig */
class __TwigTemplate_fffefa300ef9f2211f69e597adff8d0a7f30ac0f532d2d26d15a96eb93d8ad0e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 70);
        $filters = array("escape" => 49);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
        $macros = $this->macros;
        // line 46
        echo "<div id=\"page\" class=\"layout-container\">

  <div id=\"navbar\">
    ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "
    <!--
    ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "
    ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "
    -->
  </div>

  <div id=\"drawer-overlay\"></div>
  <div id=\"drawer\">
    ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "drawer", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "
  </div>

  <header id=\"header\" role=\"banner\">
    <div id=\"header-content\">
      ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
    </div>
    <div id=\"header-bg\">
      ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_bg", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "
    </div>
  </header>

  ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "actions", [], "any", false, false, true, 70)) {
            // line 71
            echo "    <div id=\"actions\">
      ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "actions", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 75
        echo "
  <div id=\"content\">
    ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_main", [], "any", false, false, true, 77)) {
            // line 78
            echo "      <div id=\"before-main\">
        ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_main", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 82
        echo "
    <main role=\"main\" id=\"main\" class=\"container\">
      <div id=\"main-content\" tabindex=\"-1\">";
        // line 85
        echo "
        <div class=\"card-holder\">
          ";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "
          ";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo "
          ";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
        echo "

          <div class=\"layout-content\">
            ";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "
          </div>";
        // line 94
        echo "
        </div>";
        // line 96
        echo "
        ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_secondary", [], "any", false, false, true, 97)) {
            // line 98
            echo "          <div id=\"content-secondary\">
            ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_secondary", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 102
        echo "      </div>";
        // line 103
        echo "
      ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 104)) {
            // line 105
            echo "        <aside id=\"sidebar-first\" class=\"sidebar layout-sidebar-first\" role=\"complementary\">
          ";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 109
        echo "
      ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 110)) {
            // line 111
            echo "        <aside id=\"sidebar-second\" class=\"sidebar layout-sidebar-second\" role=\"complementary\">
          ";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 115
        echo "
    </main>";
        // line 117
        echo "
    ";
        // line 118
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "after_main", [], "any", false, false, true, 118)) {
            // line 119
            echo "      <div id=\"after-main\">
        ";
            // line 120
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "after_main", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 123
        echo "
  </div>";
        // line 125
        echo "
  <footer id=\"footer\" role=\"contentinfo\">
    ";
        // line 127
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
        echo "
    <div id=\"footer-content\">
      ";
        // line 129
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_content", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        echo "
    </div>
  </footer>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/material_base/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 129,  229 => 127,  225 => 125,  222 => 123,  216 => 120,  213 => 119,  211 => 118,  208 => 117,  205 => 115,  199 => 112,  196 => 111,  194 => 110,  191 => 109,  185 => 106,  182 => 105,  180 => 104,  177 => 103,  175 => 102,  169 => 99,  166 => 98,  164 => 97,  161 => 96,  158 => 94,  154 => 92,  148 => 89,  144 => 88,  140 => 87,  136 => 85,  132 => 82,  126 => 79,  123 => 78,  121 => 77,  117 => 75,  111 => 72,  108 => 71,  106 => 70,  99 => 66,  93 => 63,  85 => 58,  76 => 52,  72 => 51,  67 => 49,  62 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_base/templates/layout/page.html.twig", "D:\\Xampp\\htdocs\\dp\\drupal-9.0.3\\themes\\material_base\\templates\\layout\\page.html.twig");
    }
}
