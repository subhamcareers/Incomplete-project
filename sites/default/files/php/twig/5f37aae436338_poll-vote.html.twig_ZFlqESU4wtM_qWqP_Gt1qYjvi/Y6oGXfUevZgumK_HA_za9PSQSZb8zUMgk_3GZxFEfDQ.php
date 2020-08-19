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

/* modules/poll/templates/poll-vote.html.twig */
class __TwigTemplate_cf5b151a18fec665988d86a94701d96f24a63d64ffc4c6e1b79b51d1c2f0b44d extends \Twig\Template
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
        $tags = array("if" => 8);
        $filters = array("escape" => 5, "without" => 16);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without'],
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
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "messages", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "
<div class=\"poll\">
  <div class=\"vote-form\">
    ";
        // line 8
        if (($context["show_question"] ?? null)) {
            // line 9
            echo "      <h3 class=\"poll-question\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["question"] ?? null), 9, $this->source), "html", null, true);
            echo "</h3>
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "choice", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "

    ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "actions", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
  </div>
";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 16, $this->source), "actions", "choice", "messages", "question"), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/poll/templates/poll-vote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 16,  84 => 14,  79 => 12,  76 => 11,  70 => 9,  68 => 8,  62 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/poll/templates/poll-vote.html.twig", "D:\\Xampp\\htdocs\\dp\\drupal-9.0.3\\modules\\poll\\templates\\poll-vote.html.twig");
    }
}
