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

/* core/modules/views/templates/views-view-rss.html.twig */
class __TwigTemplate_f5f45871b6fd799b402b3a8467c4481ae84d1412229f8c5b1706280477a76f23 extends \Twig\Template
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
        $tags = array();
        $filters = array("escape" => 21);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 20
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<rss version=\"2.0\" xml:base=\"";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 21, $this->source), "html", null, true);
        echo "\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["namespaces"] ?? null), 21, $this->source), "html", null, true);
        echo ">
  <channel>
    <title>";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 23, $this->source), "html", null, true);
        echo "</title>
    <link>";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 24, $this->source), "html", null, true);
        echo "</link>
    <description>";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 25, $this->source), "html", null, true);
        echo "</description>
    <language>";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["langcode"] ?? null), 26, $this->source), "html", null, true);
        echo "</language>
    ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["channel_elements"] ?? null), 27, $this->source), "html", null, true);
        echo "
    ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 28, $this->source), "html", null, true);
        echo "
  </channel>
</rss>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view-rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  65 => 21,  62 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/views/templates/views-view-rss.html.twig", "D:\\Xampp\\htdocs\\dp\\drupal-9.0.3\\core\\modules\\views\\templates\\views-view-rss.html.twig");
    }
}
