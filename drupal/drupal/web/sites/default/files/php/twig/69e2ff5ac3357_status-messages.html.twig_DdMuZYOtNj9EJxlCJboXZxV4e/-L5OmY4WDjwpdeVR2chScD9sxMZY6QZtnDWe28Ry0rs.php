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

/* themes/contrib/solo/templates/misc/status-messages.html.twig */
class __TwigTemplate_77f26d4bafa80dbfcbc3b8045def7115 extends Template
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
        // line 36
        yield "<div data-drupal-messages class=\"messages-list\">
  <div class=\"messages__wrapper layout-container\">
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["message_list"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 39
            yield "      ";
            // line 40
            $context["classes"] = ["solo-clear", "messages-list__item", "messages", ("messages--" .             // line 44
$context["type"])];
            // line 47
            yield "      ";
            // line 53
            yield "      ";
            $context["is_critical"] = CoreExtension::inFilter($context["type"], ["error", "warning"]);
            // line 54
            yield "      ";
            $context["role"] = ((($context["is_critical"] ?? null)) ? ("alert") : ("status"));
            // line 55
            yield "      ";
            $context["aria_live"] = ((($context["is_critical"] ?? null)) ? ("assertive") : ("polite"));
            // line 56
            yield "      ";
            $context["heading_id"] = ((("msg-heading-" . $context["type"]) . "-") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 56));
            // line 57
            yield "
      ";
            // line 59
            yield "      ";
            $context["msg_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "addClass", [            // line 60
($context["classes"] ?? null)], "method", false, false, true, 59), "setAttribute", ["data-drupal-selector", "messages"], "method", false, false, true, 60), "setAttribute", ["role",             // line 62
($context["role"] ?? null)], "method", false, false, true, 61), "setAttribute", ["aria-live",             // line 63
($context["aria_live"] ?? null)], "method", false, false, true, 62), "setAttribute", ["aria-atomic", "true"], "method", false, false, true, 63), "setAttribute", ["aria-relevant", "additions text"], "method", false, false, true, 64);
            // line 67
            yield "
      ";
            // line 69
            yield "      ";
            if ((($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess && in_array($__internal_compile_0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_0[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 69))) {
                // line 70
                yield "        ";
                $context["msg_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["msg_attributes"] ?? null), "setAttribute", ["aria-labelledby", ($context["heading_id"] ?? null)], "method", false, false, true, 70);
                // line 71
                yield "      ";
            }
            // line 72
            yield "
      <div";
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["msg_attributes"] ?? null), "html", null, true);
            yield ">
        <div class=\"messages__container\" data-drupal-selector=\"messages-container\">
          ";
            // line 75
            if ((($__internal_compile_1 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess && in_array($__internal_compile_1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_1[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 75))) {
                // line 76
                yield "            <div class=\"messages__header\">
              <h2 class=\"visually-hidden\" id=\"";
                // line 77
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess && in_array($__internal_compile_2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_2[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 77)), "html", null, true);
                yield "</h2>
              <div class=\"messages__icon\">
                ";
                // line 79
                if (($context["type"] == "error")) {
                    // line 80
                    yield "                  ";
                    yield from                     $this->loadTemplate("@solo/../images/icons/message-error.svg", "themes/contrib/solo/templates/misc/status-messages.html.twig", 80)->unwrap()->yield($context);
                    // line 81
                    yield "                ";
                } elseif (($context["type"] == "warning")) {
                    // line 82
                    yield "                  ";
                    yield from                     $this->loadTemplate("@solo/../images/icons/message-warning.svg", "themes/contrib/solo/templates/misc/status-messages.html.twig", 82)->unwrap()->yield($context);
                    // line 83
                    yield "                ";
                } elseif (($context["type"] == "status")) {
                    // line 84
                    yield "                  ";
                    yield from                     $this->loadTemplate("@solo/../images/icons/message-status.svg", "themes/contrib/solo/templates/misc/status-messages.html.twig", 84)->unwrap()->yield($context);
                    // line 85
                    yield "                ";
                } elseif (($context["type"] == "info")) {
                    // line 86
                    yield "                  ";
                    yield from                     $this->loadTemplate("@solo/../images/icons/message-info.svg", "themes/contrib/solo/templates/misc/status-messages.html.twig", 86)->unwrap()->yield($context);
                    // line 87
                    yield "                ";
                }
                // line 88
                yield "              </div>
            </div>
          ";
            }
            // line 91
            yield "          <div class=\"messages__content\">
            ";
            // line 92
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["messages"]) > 1)) {
                // line 93
                yield "              <ul class=\"messages__list\">
                ";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 95
                    yield "                  <li class=\"messages__item\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["message"], "html", null, true);
                    yield "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                yield "              </ul>
            ";
            } else {
                // line 99
                yield "              ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["messages"]), "html", null, true);
                yield "
            ";
            }
            // line 101
            yield "          </div>
        </div>
      </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["message_list", "loop", "status_headings"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/solo/templates/misc/status-messages.html.twig";
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
        return array (  204 => 105,  187 => 101,  181 => 99,  177 => 97,  168 => 95,  164 => 94,  161 => 93,  159 => 92,  156 => 91,  151 => 88,  148 => 87,  145 => 86,  142 => 85,  139 => 84,  136 => 83,  133 => 82,  130 => 81,  127 => 80,  125 => 79,  118 => 77,  115 => 76,  113 => 75,  108 => 73,  105 => 72,  102 => 71,  99 => 70,  96 => 69,  93 => 67,  91 => 63,  90 => 62,  89 => 60,  87 => 59,  84 => 57,  81 => 56,  78 => 55,  75 => 54,  72 => 53,  70 => 47,  68 => 44,  67 => 40,  65 => 39,  48 => 38,  44 => 36,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/solo/templates/misc/status-messages.html.twig", "/opt/drupal/web/themes/contrib/solo/templates/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 38, "set" => 40, "if" => 69, "include" => 80);
        static $filters = array("escape" => 73, "length" => 92, "first" => 99);
        static $functions = array("create_attribute" => 59);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if', 'include'],
                ['escape', 'length', 'first'],
                ['create_attribute'],
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
