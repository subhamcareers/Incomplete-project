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

/* modules/poll/templates/poll-results.html.twig */
class __TwigTemplate_ac789cc755111134c14f274539084ac0d6caa4e2a9d41995673a9086577eed76 extends \Twig\Template
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
        $tags = array("if" => 22, "trans" => 31);
        $filters = array("escape" => 23);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
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
        // line 21
        echo "<div class=\"poll\">
  ";
        // line 22
        if (($context["show_question"] ?? null)) {
            // line 23
            echo "    <h3 class=\"poll-question\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["question"] ?? null), 23, $this->source), "html", null, true);
            echo "</h3>
  ";
        } else {
            // line 25
            echo "    <h3 class=\"poll-results-title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["results_title"] ?? null), 25, $this->source), "html", null, true);
            echo "</h3>
  ";
        }
        // line 27
        echo "  <dl>
    ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["results"] ?? null), 28, $this->source), "html", null, true);
        echo "
  </dl>
  <div class=\"total\">
    ";
        // line 31
        echo t("Total votes: @votes", array("@votes" => ($context["votes"] ?? null), ));
        // line 32
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/poll/templates/poll-results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 32,  88 => 31,  82 => 28,  79 => 27,  73 => 25,  67 => 23,  65 => 22,  62 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/poll/templates/poll-results.html.twig", "D:\\Xampp\\htdocs\\dp\\drupal-9.0.3\\modules\\poll\\templates\\poll-results.html.twig");
    }
}
