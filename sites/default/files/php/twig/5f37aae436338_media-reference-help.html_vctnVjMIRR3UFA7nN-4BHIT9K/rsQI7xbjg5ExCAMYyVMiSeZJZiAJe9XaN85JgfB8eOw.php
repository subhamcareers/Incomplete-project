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

/* core/modules/media/templates/media-reference-help.html.twig */
class __TwigTemplate_aeb5dc5b97bba895bbea8061ae1516cc6e7bf3ff8c5d88dd195c071009911357 extends \Twig\Template
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
        $tags = array("set" => 11, "if" => 32, "trans" => 34, "for" => 46);
        $filters = array("escape" => 18);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans', 'for'],
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
        // line 11
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => "js-form-wrapper", 3 => "form-wrapper"];
        // line 18
        echo "<fieldset";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        echo ">
  ";
        // line 20
        $context["legend_span_classes"] = [0 => "fieldset-legend", 1 => ((        // line 22
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((        // line 23
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 26
        echo "  ";
        // line 27
        echo "  <legend";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["legend_attributes"] ?? null), 27, $this->source), "html", null, true);
        echo ">
    <span";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["legend_span_attributes"] ?? null), "addClass", [0 => ($context["legend_span_classes"] ?? null)], "method", false, false, true, 28), 28, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["original_label"] ?? null), 28, $this->source), "html", null, true);
        echo "</span>
  </legend>

  <div class=\"js-form-item form-item\">
    ";
        // line 32
        if (($context["media_add_help"] ?? null)) {
            // line 33
            echo "      <h4";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["header_attributes"] ?? null), "addClass", [0 => "label"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
            echo ">
        ";
            // line 34
            echo t("Create new media", array());
            // line 37
            echo "      </h4><br />
      <div class=\"description\">
        ";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_add_help"] ?? null), 39, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 42
        echo "
    ";
        // line 43
        if (($context["multiple"] ?? null)) {
            // line 44
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["table"] ?? null), 44, $this->source), "html", null, true);
            echo "
    ";
        } else {
            // line 46
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 47
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["element"], 47, $this->source), "html", null, true);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "    ";
        }
        // line 50
        echo "
    <div";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 51), "addClass", [0 => "description"], "method", false, false, true, 51), 51, $this->source), "html", null, true);
        echo ">
      ";
        // line 52
        if ((($context["multiple"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 52))) {
            // line 53
            echo "        <ul>
          <li>";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_list_help"] ?? null), 54, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_list_link"] ?? null), 54, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["allowed_types_help"] ?? null), 54, $this->source), "html", null, true);
            echo "</li>
          <li>";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "</li>
        </ul>
      ";
        } else {
            // line 58
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_list_help"] ?? null), 58, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_list_link"] ?? null), 58, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["allowed_types_help"] ?? null), 58, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 60
        echo "      ";
        if ((($context["multiple"] ?? null) && ($context["button"] ?? null))) {
            // line 61
            echo "        <div class=\"clearfix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button"] ?? null), 61, $this->source), "html", null, true);
            echo "</div>
      ";
        }
        // line 63
        echo "    </div>

  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "core/modules/media/templates/media-reference-help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 63,  175 => 61,  172 => 60,  162 => 58,  156 => 55,  148 => 54,  145 => 53,  143 => 52,  139 => 51,  136 => 50,  133 => 49,  124 => 47,  119 => 46,  113 => 44,  111 => 43,  108 => 42,  102 => 39,  98 => 37,  96 => 34,  91 => 33,  89 => 32,  80 => 28,  75 => 27,  73 => 26,  71 => 23,  70 => 22,  69 => 20,  64 => 18,  62 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/media/templates/media-reference-help.html.twig", "D:\\Xampp\\htdocs\\dp\\drupal-9.0.3\\core\\modules\\media\\templates\\media-reference-help.html.twig");
    }
}
