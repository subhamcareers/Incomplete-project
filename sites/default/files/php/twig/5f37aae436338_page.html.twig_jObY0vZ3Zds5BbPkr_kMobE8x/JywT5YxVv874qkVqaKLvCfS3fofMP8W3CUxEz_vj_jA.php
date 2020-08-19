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

/* themes/zinble/templates/layouts/page.html.twig */
class __TwigTemplate_02abc3f18d757a06bf7e847f92cf4a3312efaa5f64f7105aa0b60b5d7cfe1cbf extends \Twig\Template
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
        $tags = array("if" => 58);
        $filters = array("escape" => 56, "t" => 59);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
        // line 54
        echo "
<header id=\"navbar-head\" role=\"banner\" class=\"header_wrapper \">
  <div id=\"header_top\" class=\"";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 56, $this->source), "html", null, true);
        echo "\">
    <ul class=\"contact_details\">
      ";
        // line 58
        if (($context["slogan"] ?? null)) {
            // line 59
            echo "        <li class=\"slogan\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(($context["slogan"] ?? null), 59, $this->source)));
            echo "</li>
      ";
        }
        // line 61
        echo "      ";
        if (($context["phone_number"] ?? null)) {
            // line 62
            echo "        <li class=\"phone\"><i class=\"fa fa-phone\"></i><a href=\"tel:";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone_number"] ?? null), 62, $this->source), "html", null, true);
            echo "\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone_number"] ?? null), 62, $this->source), "html", null, true);
            echo "</a></li>
      ";
        }
        // line 64
        echo "      ";
        if (($context["email"] ?? null)) {
            // line 65
            echo "        <li class=\"mail\"><i class=\"fa fa-envelope\"></i><a href=\"mailto:";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 65, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 65, $this->source), "html", null, true);
            echo "</a></li>
      ";
        }
        // line 67
        echo "    </ul>

    <ul class=\"social\">
      ";
        // line 70
        if (($context["facebook"] ?? null)) {
            // line 71
            echo "        <li class=\"facebook\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 71, $this->source), "html", null, true);
            echo "\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
      ";
        }
        // line 73
        echo "      ";
        if (($context["linkedin"] ?? null)) {
            // line 74
            echo "        <li class=\"linkedin\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 74, $this->source), "html", null, true);
            echo "\" title=\"Google+\"><i class=\"fa fa-linkedin\"></i></a></li>
      ";
        }
        // line 76
        echo "      ";
        if (($context["google_plus"] ?? null)) {
            // line 77
            echo "        <li class=\"googleplus\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus"] ?? null), 77, $this->source), "html", null, true);
            echo "\" title=\"Google+\"><i class=\"fa fa-google-plus\"></i></a></li>
      ";
        }
        // line 79
        echo "      ";
        if (($context["twitter"] ?? null)) {
            // line 80
            echo "        <li class=\"twitter\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 80, $this->source), "html", null, true);
            echo "\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
      ";
        }
        // line 82
        echo "    </ul>
  </div>

  <div id=\"header_bottom\" class=\"";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 85, $this->source), "html", null, true);
        echo "\">
    <div class=\"logo\">
      ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 87)) {
            // line 88
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 90
        echo "    </div>
    <div class=\"menu_wrapper\">
      ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 92)) {
            // line 93
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 95
        echo "    </div>
  </div>
</header>

<!--- Start banner -->
<section class=\"banner-wrapper\">
  <div class=\"banner-layer ";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 101, $this->source), "html", null, true);
        echo "\">
    ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 102)) {
            // line 103
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 105
        echo "  </div>
</section>
<!---End banner -->

<!--- Start content top -->
";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 110)) {
            // line 111
            echo "  <section class=\"content-top\">
    <div class=\"";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 112, $this->source), "html", null, true);
            echo "\">
      ";
            // line 113
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "
    </div>
  </section>
";
        }
        // line 117
        echo "<!---End content Top -->

<div class=\"content ";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 119, $this->source), "html", null, true);
        echo "\">
  <div class=\"row layout\">
    <!--- Start Left Sidebar -->
    ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 122)) {
            // line 123
            echo "      <aside class = \"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 123, $this->source), "html", null, true);
            echo " sidebar-first\">
        ";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 127
        echo "    <!---End Left Sidebar -->
    <!--- Start content -->
    ";
        // line 129
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 129)) {
            // line 130
            echo "    <main class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 130, $this->source), "html", null, true);
            echo " content-middle\">
      ";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
            echo "
    </main>
    ";
        }
        // line 134
        echo "    <!---End content -->
    <!--- Start Right Sidebar -->
    ";
        // line 136
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 136)) {
            // line 137
            echo "      <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 137, $this->source), "html", null, true);
            echo " sidebar-second\">
        ";
            // line 138
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 141
        echo "    <!---End Right Sidebar -->
  </div>
</div>

<!--- Start content Bottom -->
";
        // line 146
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 146)) {
            // line 147
            echo "<div class=\"content-bottom\">
  <div class=\"page-bottom ";
            // line 148
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 148, $this->source), "html", null, true);
            echo "\">
    ";
            // line 149
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
            echo "
  </div>
</div>
";
        }
        // line 153
        echo "<!---End content Bottom -->
<footer class=\"footer_copy ";
        // line 154
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 154, $this->source), "html", null, true);
        echo "\">
  <div class=\"row footer-box\">
    <div class=\"footer1 col-md-3 col-sm-6 col-xs-12\">
      ";
        // line 157
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 157)) {
            // line 158
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 160
        echo "    </div>
    <div class=\"footer2 col-md-3 col-sm-6 col-xs-12\">
      ";
        // line 162
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 162)) {
            // line 163
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 165
        echo "    </div>
    <div class=\"footer3 col-md-3 col-sm-6 col-xs-12\">
      ";
        // line 167
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 167)) {
            // line 168
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 170
        echo "    </div>
    <div class=\"footer4 col-md-3 col-sm-6 col-xs-12\">
      <div class=\"contact-us\">
        <h6 class=\"title\">Contact Info</h6>
        <div class=\"contact-info\">
          ";
        // line 175
        if (($context["address"] ?? null)) {
            // line 176
            echo "            <div class=\"contact-line\"><i class=\"fa fa-map-marker\"></i><span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address"] ?? null), 176, $this->source), "html", null, true);
            echo "</span></div>
          ";
        }
        // line 178
        echo "          ";
        if (($context["phone_number"] ?? null)) {
            // line 179
            echo "            <div class=\"contact-line\"><i class=\"fa fa-phone\"></i><a href=\"tel:";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone_number"] ?? null), 179, $this->source), "html", null, true);
            echo "\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone_number"] ?? null), 179, $this->source), "html", null, true);
            echo "</a></div>
          ";
        }
        // line 181
        echo "          ";
        if (($context["email"] ?? null)) {
            // line 182
            echo "            <div class=\"contact-line\"><i class=\"fa fa-envelope-o\"></i><a href=\"mailto:";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 182, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 182, $this->source), "html", null, true);
            echo "</a></div>
          ";
        }
        // line 184
        echo "        </div>
        ";
        // line 185
        if (($context["google_position"] ?? null)) {
            // line 186
            echo "        <div class=\"map_view\">
          <iframe src=\"https://maps.google.com/maps?q=";
            // line 187
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_position"] ?? null), 187, $this->source), "html", null, true);
            echo "&z=15&output=embed\" width=\"100%\" height=\"270\" frameborder=\"0\" style=\"border:0\"></iframe>
        </div>
        ";
        }
        // line 189
        echo "\t\t\t
      </div>
      ";
        // line 191
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 191)) {
            // line 192
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 194
        echo "    </div>
  </div>
  <div class=\"copy-right\">
    <div class=\"footer-bottom\">
      ";
        // line 198
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 198)) {
            // line 199
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 201
        echo "    </div>
    <ul class=\"social\">
      ";
        // line 203
        if (($context["facebook"] ?? null)) {
            // line 204
            echo "      <li class=\"facebook\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 204, $this->source), "html", null, true);
            echo "\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
      ";
        }
        // line 206
        echo "      ";
        if (($context["linkedin"] ?? null)) {
            // line 207
            echo "      <li class=\"linkedin\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 207, $this->source), "html", null, true);
            echo "\" title=\"Google+\"><i class=\"fa fa-linkedin\"></i></a></li>
      ";
        }
        // line 209
        echo "      ";
        if (($context["google_plus"] ?? null)) {
            // line 210
            echo "      <li class=\"googleplus\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus"] ?? null), 210, $this->source), "html", null, true);
            echo "\" title=\"Google+\"><i class=\"fa fa-google-plus\"></i></a></li>
      ";
        }
        // line 212
        echo "      ";
        if (($context["twitter"] ?? null)) {
            // line 213
            echo "      <li class=\"twitter\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 213, $this->source), "html", null, true);
            echo "\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
      ";
        }
        // line 215
        echo "    </ul>
  </div>
</footer>

";
    }

    public function getTemplateName()
    {
        return "themes/zinble/templates/layouts/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 215,  445 => 213,  442 => 212,  436 => 210,  433 => 209,  427 => 207,  424 => 206,  418 => 204,  416 => 203,  412 => 201,  406 => 199,  404 => 198,  398 => 194,  392 => 192,  390 => 191,  386 => 189,  380 => 187,  377 => 186,  375 => 185,  372 => 184,  364 => 182,  361 => 181,  353 => 179,  350 => 178,  344 => 176,  342 => 175,  335 => 170,  329 => 168,  327 => 167,  323 => 165,  317 => 163,  315 => 162,  311 => 160,  305 => 158,  303 => 157,  297 => 154,  294 => 153,  287 => 149,  283 => 148,  280 => 147,  278 => 146,  271 => 141,  265 => 138,  260 => 137,  258 => 136,  254 => 134,  248 => 131,  243 => 130,  241 => 129,  237 => 127,  231 => 124,  226 => 123,  224 => 122,  218 => 119,  214 => 117,  207 => 113,  203 => 112,  200 => 111,  198 => 110,  191 => 105,  185 => 103,  183 => 102,  179 => 101,  171 => 95,  165 => 93,  163 => 92,  159 => 90,  153 => 88,  151 => 87,  146 => 85,  141 => 82,  135 => 80,  132 => 79,  126 => 77,  123 => 76,  117 => 74,  114 => 73,  108 => 71,  106 => 70,  101 => 67,  93 => 65,  90 => 64,  82 => 62,  79 => 61,  73 => 59,  71 => 58,  66 => 56,  62 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/zinble/templates/layouts/page.html.twig", "D:\\Xampp\\htdocs\\dp\\drupal-9.0.3\\themes\\zinble\\templates\\layouts\\page.html.twig");
    }
}
