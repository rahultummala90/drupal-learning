<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* modules/contrib/simple_gmap/templates/simple-gmap-output.html.twig */
class __TwigTemplate_497942e8e44466d98fb6ba0d693546bf extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        if (($context["include_map"] ?? null)) {
            // line 32
            yield "  ";
            $context["new_map_type"] = 0;
            // line 33
            yield "  ";
            if ((($context["map_type"] ?? null) == "k")) {
                // line 34
                yield "    ";
                $context["new_map_type"] = 1;
                // line 35
                yield "  ";
            }
            // line 36
            yield "  <iframe width=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["iframe_width"] ?? null), "html", null, true);
            yield "\" height=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["iframe_height"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["iframe_title"] ?? null), "html", null, true);
            yield "\" style=\"border:0\" src=\"https://www.google.com/maps/embed?origin=mfe&amp;pb=!1m4!2m1!1s";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url_suffix"] ?? null), "html", null, true);
            yield "!5e";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["new_map_type"] ?? null), "html", null, true);
            yield "!6i";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["zoom"] ?? null), "html", null, true);
            yield "!5m1!1s";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["langcode"] ?? null), "html", null, true);
            yield "\"></iframe>
";
        }
        // line 38
        if (($context["include_static_map"] ?? null)) {
            // line 39
            yield "  <div class=\"simple-gmap-static-map\">
    <img alt=\"";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["alt_text"] ?? null), "html", null, true);
            yield "\" src=\"https://maps.googleapis.com/maps/api/staticmap?size=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["iframe_width"] ?? null), "html", null, true);
            yield "x";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["iframe_height"] ?? null), "html", null, true);
            yield "&amp;scale=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["static_scale"] ?? null), "html", null, true);
            yield "&amp;zoom=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["zoom"] ?? null), "html", null, true);
            yield "&amp;language=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["langcode"] ?? null), "html", null, true);
            yield "&amp;maptype=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["static_map_type"] ?? null), "html", null, true);
            yield "&amp;markers=color:red|";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url_suffix"] ?? null), "html", null, true);
            yield "&amp;sensor=false&amp;key=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["apikey"] ?? null), "html", null, true);
            yield "\" />
  </div>
";
        }
        // line 43
        if (($context["include_link"] ?? null)) {
            // line 44
            yield "  <p class=\"simple-gmap-link\"><a href=\"https://www.google.com/maps?q=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url_suffix"] ?? null), "html", null, true);
            yield "&amp;hl=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["langcode"] ?? null), "html", null, true);
            yield "&amp;t=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["map_type"] ?? null), "html", null, true);
            yield "&amp;z=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["zoom"] ?? null), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_text"] ?? null), "html", null, true);
            yield "</a></p>
";
        }
        // line 46
        if (($context["include_text"] ?? null)) {
            // line 47
            yield "  <p class=\"simple-gmap-address\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["address_text"] ?? null), "html", null, true);
            yield "</p>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["include_map", "map_type", "iframe_width", "iframe_height", "iframe_title", "url_suffix", "zoom", "langcode", "include_static_map", "alt_text", "static_scale", "static_map_type", "apikey", "include_link", "link_text", "include_text", "address_text"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/simple_gmap/templates/simple-gmap-output.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  121 => 47,  119 => 46,  105 => 44,  103 => 43,  81 => 40,  78 => 39,  76 => 38,  58 => 36,  55 => 35,  52 => 34,  49 => 33,  46 => 32,  44 => 31,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/simple_gmap/templates/simple-gmap-output.html.twig", "/opt/drupal/web/modules/contrib/simple_gmap/templates/simple-gmap-output.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 31, "set" => 32);
        static $filters = array("escape" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                [],
                $this->source
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
}
