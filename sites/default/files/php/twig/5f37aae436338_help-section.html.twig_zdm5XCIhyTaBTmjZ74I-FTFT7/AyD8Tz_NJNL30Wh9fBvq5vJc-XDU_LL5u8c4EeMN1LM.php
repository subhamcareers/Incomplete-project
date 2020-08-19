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

/* core/themes/seven/templates/classy/misc/help-section.html.twig */
class __TwigTemplate_6a6bfab4751350b99d252ed6643e8d260ab3028838347a0698446aec50f815fb extends \Twig\Template
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
        $tags = array("if" => 18, "set" => 20, "for" => 27);
        $filters = array("escape" => 16, "length" => 20);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'length'],
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
        // line 15
        echo "<div class=\"clearfix\">
  <h2>";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 16, $this->source), "html", null, true);
        echo "</h2>
  <p>";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 17, $this->source), "html", null, true);
        echo "</p>
  ";
        // line 18
        if (($context["links"] ?? null)) {
            // line 19
            echo "    ";
            // line 20
            echo "    ";
            $context["size"] = (int) floor((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["links"] ?? null), 20, $this->source)) / 4));
            // line 21
            echo "    ";
            if (((($context["size"] ?? null) * 4) < twig_length_filter($this->env, ($context["links"] ?? null)))) {
                // line 22
                echo "      ";
                $context["size"] = (($context["size"] ?? null) + 1);
                // line 23
                echo "    ";
            }
            // line 24
            echo "
    ";
            // line 26
            echo "    ";
            $context["count"] = 0;
            // line 27
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 28
                echo "      ";
                if ((($context["count"] ?? null) == 0)) {
                    // line 29
                    echo "        ";
                    // line 30
                    echo "        <div class=\"layout-column layout-column--quarter\"><ul>
      ";
                }
                // line 32
                echo "      <li>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["link"], 32, $this->source), "html", null, true);
                echo "</li>
      ";
                // line 33
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 34
                echo "      ";
                if ((($context["count"] ?? null) >= ($context["size"] ?? null))) {
                    // line 35
                    echo "        ";
                    // line 36
                    echo "        ";
                    $context["count"] = 0;
                    // line 37
                    echo "        </ul></div>
      ";
                }
                // line 39
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
    ";
            // line 42
            echo "    ";
            if ((($context["count"] ?? null) > 0)) {
                // line 43
                echo "      </ul></div>
    ";
            }
            // line 45
            echo "  ";
        } else {
            // line 46
            echo "    <p>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 46, $this->source), "html", null, true);
            echo "</p>
  ";
        }
        // line 48
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/classy/misc/help-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 48,  147 => 46,  144 => 45,  140 => 43,  137 => 42,  134 => 40,  128 => 39,  124 => 37,  121 => 36,  119 => 35,  116 => 34,  114 => 33,  109 => 32,  105 => 30,  103 => 29,  100 => 28,  95 => 27,  92 => 26,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  75 => 19,  73 => 18,  69 => 17,  65 => 16,  62 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/seven/templates/classy/misc/help-section.html.twig", "D:\\Xampp\\htdocs\\dp\\drupal-9.0.3\\core\\themes\\seven\\templates\\classy\\misc\\help-section.html.twig");
    }
}
