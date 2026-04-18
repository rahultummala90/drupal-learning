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

/* themes/contrib/solo/templates/form/input.html.twig */
class __TwigTemplate_72f5e68f0440b41e1fb9b153771fa3e5 extends Template
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
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "
";
        // line 14
        if (($context["input_group"] ?? null)) {
            // line 15
            yield "  <div class=\"input-group solo-form-group\">
";
        }
        // line 17
        yield "
";
        // line 18
        if (($context["prefix"] ?? null)) {
            // line 19
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true);
            yield "
";
        }
        // line 21
        yield "
";
        // line 22
        yield from $this->unwrap()->yieldBlock('input', $context, $blocks);
        // line 25
        yield "
";
        // line 26
        if (($context["suffix"] ?? null)) {
            // line 27
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true);
            yield "
";
        }
        // line 29
        yield "
";
        // line 30
        if (($context["input_group"] ?? null)) {
            // line 31
            yield "  </div>
";
        }
        // line 33
        yield "
";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["input_group", "prefix", "suffix", "children", "attributes"]);        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "  <input";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["solo-input"], "method", false, false, true, 23), "html", null, true);
        yield " />
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/solo/templates/form/input.html.twig";
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
        return array (  108 => 23,  101 => 22,  93 => 34,  90 => 33,  86 => 31,  84 => 30,  81 => 29,  75 => 27,  73 => 26,  70 => 25,  68 => 22,  65 => 21,  59 => 19,  57 => 18,  54 => 17,  50 => 15,  48 => 14,  45 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/solo/templates/form/input.html.twig", "/opt/drupal/web/themes/contrib/solo/templates/form/input.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14, "block" => 22);
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
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
