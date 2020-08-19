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

/* core/modules/field_ui/templates/field-ui-table.html.twig */
class __TwigTemplate_d7234e0eeb2602ca1e7e912a58cd897e5e27d32d148ada6316f70daceba6a2fc extends \Twig\Template
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
        $tags = array("include" => 46);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
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
        // line 45
        echo "<div id=\"field-display-overview-wrapper\">
  ";
        // line 46
        $this->loadTemplate("table.html.twig", "core/modules/field_ui/templates/field-ui-table.html.twig", 46)->display($context);
        // line 47
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/field_ui/templates/field-ui-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 47,  65 => 46,  62 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/field_ui/templates/field-ui-table.html.twig", "D:\\Xampp\\htdocs\\dp\\drupal-9.0.3\\core\\modules\\field_ui\\templates\\field-ui-table.html.twig");
    }
}
