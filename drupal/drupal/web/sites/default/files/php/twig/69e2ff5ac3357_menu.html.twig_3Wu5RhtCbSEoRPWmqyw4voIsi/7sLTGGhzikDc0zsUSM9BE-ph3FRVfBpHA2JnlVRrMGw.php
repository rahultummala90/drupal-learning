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

/* themes/contrib/solo/templates/navigation/menu.html.twig */
class __TwigTemplate_66880a399ce3a1277d4236373a8678b4 extends Template
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
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 27
        yield "<div class=\"solo-clear solo-menu navigation-default";
        yield ((($context["keyboard_enabled"] ?? null)) ? (" solo-keyboard-enabled") : (""));
        yield "\">
    ";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null), ($context["aria_id"] ?? null)], 28, $context, $this->getSourceContext()));
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "keyboard_enabled", "items", "attributes", "menu_name", "aria_id", "loop"]);        yield from [];
    }

    // line 24
    public function macro_svg_icon($__icon_value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "icon_value" => $__icon_value__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 25
            yield "    ";
            yield from             $this->loadTemplate("@solo/partials/svg/_svg-menu-arrow.html.twig", "themes/contrib/solo/templates/navigation/menu.html.twig", 25)->unwrap()->yield($context);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 30
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, $__aria_id__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "aria_id" => $__aria_id__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 31
            yield "    ";
            $context["menu_level"] = (($context["menu_level"] ?? null) + 1);
            // line 32
            yield "    ";
            $context["menu_classes"] = ["navigation__menubar", "navigation__default", ("navigation__menubar-" . \Drupal\Component\Utility\Html::getClass(            // line 35
($context["menu_name"] ?? null)))];
            // line 37
            $context["submenu_classes"] = [("sub__menu sub__menu-" . \Drupal\Component\Utility\Html::getClass(            // line 38
($context["menu_name"] ?? null)))];
            // line 40
            $context["menubar_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["id" => (            // line 41
($context["menu_name"] ?? null) . \Drupal\Component\Utility\Html::getUniqueId("__menubar")), "role" => "menubar"]);
            // line 44
            $context["submenu_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["id" => (            // line 45
($context["menu_name"] ?? null) . \Drupal\Component\Utility\Html::getUniqueId("__submenu")), "role" => "menu", "tabindex" => "-1", "aria-hidden" => "true"]);
            // line 50
            if (($context["items"] ?? null)) {
                // line 51
                yield "    ";
                if ((($context["menu_level"] ?? null) == 1)) {
                    // line 52
                    yield "        <ul ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["menu_classes"] ?? null)], "method", false, false, true, 52), "removeAttribute", ["region"], "method", false, false, true, 52), "html", null, true);
                    yield "
            ";
                    // line 53
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menubar_attributes"] ?? null), "html", null, true);
                    yield ">
        ";
                } else {
                    // line 55
                    yield "            <ul ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["menu_classes"] ?? null)], "method", false, false, true, 55), "addClass", [($context["submenu_classes"] ?? null)], "method", false, false, true, 55), "html", null, true);
                    yield "
                ";
                    // line 56
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["submenu_attributes"] ?? null), "html", null, true);
                    yield ">
            ";
                }
                // line 58
                yield "            ";
                // line 59
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 60
                    yield "
            ";
                    // line 62
                    yield "            ";
                    $context["system_path"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 62), "isRouted", [], "method", false, false, true, 62)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 62), "getInternalPath", [], "method", false, false, true, 62)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 62), "toString", [], "method", false, false, true, 62)));
                    // line 63
                    yield "            ";
                    if ((($context["system_path"] ?? null) == "")) {
                        // line 64
                        yield "              ";
                        $context["system_path"] = "<front>";
                        // line 65
                        yield "            ";
                    }
                    // line 66
                    yield "
            ";
                    // line 68
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 68), "isRouted", [], "any", false, false, true, 68) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 68), "routeName", [], "any", false, false, true, 68) == "<nolink>"))) {
                        // line 69
                        yield "                ";
                        $context["link_type"] = "nolink";
                        // line 70
                        yield "            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 70), "isRouted", [], "any", false, false, true, 70) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 70), "routeName", [], "any", false, false, true, 70) == "<button>"))) {
                        // line 71
                        yield "                ";
                        $context["link_type"] = "button";
                        // line 72
                        yield "            ";
                    } else {
                        // line 73
                        yield "                ";
                        $context["link_type"] = "link";
                        // line 74
                        yield "            ";
                    }
                    // line 75
                    yield "
            ";
                    // line 77
                    yield "            ";
                    $context["is_external"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 77), "isExternal", [], "method", false, false, true, 77);
                    // line 78
                    yield "            ";
                    $context["url_string"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 78), "toString", [], "method", false, false, true, 78);
                    // line 79
                    yield "            ";
                    $context["is_linkable"] = ((($context["link_type"] ?? null) != "nolink") && (($context["url_string"] ?? null) != ""));
                    // line 80
                    yield "
            ";
                    // line 81
                    $macros["macros"] = $this;
                    // line 82
                    yield "            ";
                    $context["aria_id"] = \Drupal\Component\Utility\Html::getUniqueId(((($context["menu_name"] ?? null) . "-sub__menu-") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 82)));
                    // line 83
                    yield "            ";
                    $context["dropdown_toggler_class"] = (((($context["menu_level"] ?? null) == 1)) ? ("dropdown-toggler-parent") : ("dropdown-toggler-child"));
                    // line 84
                    yield "            ";
                    $context["rendered_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 84));
                    // line 85
                    yield "
            ";
                    // line 86
                    $context["item_classes"] = [("btn-animate nav__menu-item nav__menu-item-" . \Drupal\Component\Utility\Html::getClass(                    // line 87
($context["menu_name"] ?? null))), (((                    // line 88
$context["item"] && (($context["menu_level"] ?? null) == 1))) ? ("nav__menubar-item") : ("")), (((                    // line 89
$context["item"] && (($context["menu_level"] ?? null) > 1))) ? ("nav__submenu-item") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 90
$context["item"], "is_expanded", [], "any", false, false, true, 90)) ? ("has-sub__menu") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,                     // line 91
$context["item"], "is_expanded", [], "any", false, false, true, 91) && ($context["is_linkable"] ?? null))) ? ("link-and-button") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,                     // line 92
$context["item"], "is_expanded", [], "any", false, false, true, 92) &&  !($context["is_linkable"] ?? null))) ? ("button-only") : ("")), ((( !CoreExtension::getAttribute($this->env, $this->source,                     // line 93
$context["item"], "is_expanded", [], "any", false, false, true, 93) && ($context["is_linkable"] ?? null))) ? ("link-only") : ("")), ((( !CoreExtension::getAttribute($this->env, $this->source,                     // line 94
$context["item"], "is_expanded", [], "any", false, false, true, 94) && (($context["link_type"] ?? null) == "nolink"))) ? ("no-link") : ("")), ((( !CoreExtension::getAttribute($this->env, $this->source,                     // line 95
$context["item"], "is_expanded", [], "any", false, false, true, 95) && (($context["link_type"] ?? null) == "button"))) ? ("keyboard-button") : ("")), ((( !CoreExtension::getAttribute($this->env, $this->source,                     // line 96
$context["item"], "is_expanded", [], "any", false, false, true, 96) && ($context["is_external"] ?? null))) ? ("external-link") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 97
$context["item"], "in_active_trail", [], "any", false, false, true, 97)) ? ("is-active") : (""))];
                    // line 100
                    yield "
            ";
                    // line 101
                    $context["dorpdown_toggler_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["data-drupal-selector" =>                     // line 102
($context["aria_id"] ?? null), "role" => "menuitem", "aria-controls" =>                     // line 104
($context["aria_id"] ?? null), "aria-haspopup" => "true", "aria-expanded" => "false", "tabindex" => "-1", "type" => "button", "data-menu-item-id" => CoreExtension::getAttribute($this->env, $this->source,                     // line 109
$context["loop"], "index", [], "any", false, false, true, 109)]);
                    // line 111
                    yield "
            ";
                    // line 113
                    yield "            ";
                    $context["additional_classes"] = "";
                    // line 114
                    yield "            ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 114) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 114), "getOption", ["attributes"], "method", false, false, true, 114)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 114), "getOption", ["attributes"], "method", false, false, true, 114), "class", [], "any", false, false, true, 114))) {
                        // line 115
                        yield "                ";
                        $context["additional_classes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 115), "getOption", ["attributes"], "method", false, false, true, 115), "class", [], "any", false, false, true, 115);
                        // line 116
                        yield "            ";
                    }
                    // line 117
                    yield "            ";
                    $context["class_list"] = ((is_iterable(($context["additional_classes"] ?? null))) ? (Twig\Extension\CoreExtension::join(($context["additional_classes"] ?? null), " ")) : (($context["additional_classes"] ?? null)));
                    // line 118
                    yield "
            ";
                    // line 120
                    yield "            ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 120)) {
                        // line 121
                        yield "            <li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 121), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 121), "html", null, true);
                        yield " role='none' data-menu-parent=\"true\" data-link-type=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_type"] ?? null), "html", null, true);
                        yield "\">
            ";
                        // line 122
                        if (($context["is_linkable"] ?? null)) {
                            // line 123
                            yield "                ";
                            // line 124
                            yield "                ";
                            $context["c_link_classes"] = [("nav__menu-link nav__menu-link-" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null))), "url-added"];
                            // line 125
                            yield "                ";
                            if (($context["class_list"] ?? null)) {
                                // line 126
                                yield "                    ";
                                $context["c_link_classes"] = Twig\Extension\CoreExtension::merge(($context["c_link_classes"] ?? null), [($context["class_list"] ?? null)]);
                                // line 127
                                yield "                ";
                            }
                            // line 128
                            yield "                <a href=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 128), "html", null, true);
                            yield "\" class=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["c_link_classes"] ?? null), " "), "html", null, true);
                            yield "\"";
                            // line 129
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 129) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 129), "getOption", ["attributes"], "method", false, false, true, 129)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 129), "getOption", ["attributes"], "method", false, false, true, 129), "title", [], "any", false, false, true, 129))) {
                                yield " title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 129), "getOption", ["attributes"], "method", false, false, true, 129), "title", [], "any", false, false, true, 129), "html", null, true);
                                yield "\" ";
                            }
                            // line 130
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 130) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 130), "getOption", ["attributes"], "method", false, false, true, 130)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 130), "getOption", ["attributes"], "method", false, false, true, 130), "target", [], "any", false, false, true, 130))) {
                                yield " target=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 130), "getOption", ["attributes"], "method", false, false, true, 130), "target", [], "any", false, false, true, 130), "html", null, true);
                                yield "\" ";
                            }
                            // line 131
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 131) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 131), "getOption", ["attributes"], "method", false, false, true, 131)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 131), "getOption", ["attributes"], "method", false, false, true, 131), "rel", [], "any", false, false, true, 131))) {
                                yield " rel=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 131), "getOption", ["attributes"], "method", false, false, true, 131), "rel", [], "any", false, false, true, 131), "html", null, true);
                                yield "\" ";
                            }
                            // line 132
                            if (($context["is_external"] ?? null)) {
                                yield " target=\"_blank\" rel=\"noopener\"";
                            }
                            // line 133
                            yield "tabindex=\"-1\" data-drupal-link-system-path=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["system_path"] ?? null), "html", null, true);
                            yield "\" role='menuitem'";
                            // line 134
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 134) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 134)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 134), "toString", [], "method", false, false, true, 134) == $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>")))) {
                                yield " aria-current=\"page\"";
                            }
                            yield ">
                    <span class=\"menu__url-title-enabled\">";
                            // line 135
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 135), "html", null, true);
                            yield "</span>
                </a>
                <button class=\"en-link dropdown-toggler ";
                            // line 137
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dropdown_toggler_class"] ?? null), "html", null, true);
                            yield "\" ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dorpdown_toggler_attributes"] ?? null), "html", null, true);
                            yield ">
                    <span class=\"visually-hidden\">";
                            // line 138
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("@title sub-navigation", ["@title" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 138)]));
                            yield "</span>
                    <span class=\"toggler-icon dropdown-arrow\">";
                            // line 139
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["macros"], "macro_svg_icon", ["M6 9l6 6 6-6"], 139, $context, $this->getSourceContext()));
                            yield "</span>
                </button>
            ";
                        } else {
                            // line 142
                            yield "                ";
                            // line 143
                            yield "                ";
                            $context["button_classes"] = ["ds-link", "dropdown-toggler", "nav__menu-button", ("nav__menu-button-" . \Drupal\Component\Utility\Html::getClass(                            // line 147
($context["menu_name"] ?? null))),                             // line 148
($context["dropdown_toggler_class"] ?? null)];
                            // line 150
                            yield "                ";
                            if (($context["class_list"] ?? null)) {
                                // line 151
                                yield "                  ";
                                $context["button_classes"] = Twig\Extension\CoreExtension::merge(($context["button_classes"] ?? null), [($context["class_list"] ?? null)]);
                                // line 152
                                yield "                ";
                            }
                            // line 153
                            yield "                <button class=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["button_classes"] ?? null), " "), "html", null, true);
                            yield "\" ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dorpdown_toggler_attributes"] ?? null), "html", null, true);
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 153) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 153), "getOption", ["attributes"], "method", false, false, true, 153)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 153), "getOption", ["attributes"], "method", false, false, true, 153), "title", [], "any", false, false, true, 153))) {
                                yield " title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 153), "getOption", ["attributes"], "method", false, false, true, 153), "title", [], "any", false, false, true, 153), "html", null, true);
                                yield "\" ";
                            }
                            yield "data-link-type=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_type"] ?? null), "html", null, true);
                            yield "\">
                    <span class=\"menu__url-title-disabled\">";
                            // line 154
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 154), "html", null, true);
                            yield "</span>
                    <span class=\"visually-hidden\">";
                            // line 155
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("@title sub-navigation", ["@title" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 155)]));
                            yield "</span>
                    <span class=\"toggler-icon dropdown-arrow\">";
                            // line 156
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["macros"], "macro_svg_icon", ["M6 9l6 6 6-6"], 156, $context, $this->getSourceContext()));
                            yield "</span>
                </button>
            ";
                        }
                        // line 159
                        yield "
            ";
                    } else {
                        // line 160
                        yield " ";
                        // line 161
                        yield "              ";
                        $context["link_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 162
                            yield "                <span class=\"menu__url-title\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 162), "html", null, true);
                            yield "</span>
              ";
                            yield from [];
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 164
                        yield "            <li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 164), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 164), "html", null, true);
                        yield " role='none' data-link-type=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_type"] ?? null), "html", null, true);
                        yield "\">
                ";
                        // line 165
                        if ((($context["link_type"] ?? null) == "nolink")) {
                            // line 166
                            yield "                    ";
                            // line 167
                            yield "                    <span class=\"nav__menu-nolink nav__menu-nolink-";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null)), "html", null, true);
                            yield " ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["class_list"] ?? null), "html", null, true);
                            yield "\"
                          role=\"menuitem\"
                          tabindex=\"-1\"";
                            // line 170
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 170) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 170), "getOption", ["attributes"], "method", false, false, true, 170)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 170), "getOption", ["attributes"], "method", false, false, true, 170), "title", [], "any", false, false, true, 170))) {
                                yield " title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 170), "getOption", ["attributes"], "method", false, false, true, 170), "title", [], "any", false, false, true, 170), "html", null, true);
                                yield "\" ";
                            }
                            yield ">
                        ";
                            // line 171
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_title"] ?? null), "html", null, true);
                            yield "
                    </span>
                ";
                        } elseif ((                        // line 173
($context["link_type"] ?? null) == "button")) {
                            // line 174
                            yield "                    ";
                            // line 175
                            yield "                    <button class=\"nav__menu-button nav__menu-button-";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null)), "html", null, true);
                            yield " ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["class_list"] ?? null), "html", null, true);
                            yield "\"
                            role=\"menuitem\"
                            tabindex=\"-1\"
                            type=\"button\"";
                            // line 179
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 179) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 179), "getOption", ["attributes"], "method", false, false, true, 179)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 179), "getOption", ["attributes"], "method", false, false, true, 179), "title", [], "any", false, false, true, 179))) {
                                yield " title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 179), "getOption", ["attributes"], "method", false, false, true, 179), "title", [], "any", false, false, true, 179), "html", null, true);
                                yield "\" ";
                            }
                            yield ">
                        ";
                            // line 180
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_title"] ?? null), "html", null, true);
                            yield "
                    </button>
                ";
                        } else {
                            // line 183
                            yield "                    ";
                            // line 184
                            yield "                    ";
                            $context["link_classes"] = [("nav__menu-link nav__menu-link-" . \Drupal\Component\Utility\Html::getClass(                            // line 185
($context["menu_name"] ?? null)))];
                            // line 187
                            yield "                    ";
                            if (($context["class_list"] ?? null)) {
                                // line 188
                                yield "                        ";
                                $context["link_classes"] = Twig\Extension\CoreExtension::merge(($context["link_classes"] ?? null), [($context["class_list"] ?? null)]);
                                // line 189
                                yield "                    ";
                            }
                            // line 190
                            yield "
                    ";
                            // line 192
                            yield "                    ";
                            if (($context["is_external"] ?? null)) {
                                // line 193
                                yield "                        <a href=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 193), "html", null, true);
                                yield "\" class=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["link_classes"] ?? null), " "), "html", null, true);
                                yield "\"
                           role=\"menuitem\"
                           tabindex=\"-1\"
                           target=\"_blank\"
                           rel=\"noopener\"
                           data-drupal-link-system-path=\"";
                                // line 198
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["system_path"] ?? null), "html", null, true);
                                yield "\"";
                                // line 199
                                if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 199) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 199), "getOption", ["attributes"], "method", false, false, true, 199)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 199), "getOption", ["attributes"], "method", false, false, true, 199), "title", [], "any", false, false, true, 199))) {
                                    yield " title=\"";
                                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 199), "getOption", ["attributes"], "method", false, false, true, 199), "title", [], "any", false, false, true, 199), "html", null, true);
                                    yield "\" ";
                                }
                                yield ">
                            ";
                                // line 200
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_title"] ?? null), "html", null, true);
                                yield "
                            <span class=\"visually-hidden\">";
                                // line 201
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("(opens in new tab)"));
                                yield "</span>
                        </a>
                    ";
                            } else {
                                // line 204
                                yield "                        ";
                                // line 205
                                yield "                        ";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(                                // line 206
($context["link_title"] ?? null), CoreExtension::getAttribute($this->env, $this->source,                                 // line 207
$context["item"], "url", [], "any", false, false, true, 207), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                                 // line 208
$context["item"], "attributes", [], "any", false, false, true, 208), "removeClass", [($context["item_classes"] ?? null)], "method", false, false, true, 208), "addClass", [($context["link_classes"] ?? null)], "method", false, false, true, 208), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                                 // line 209
$context["item"], "attributes", [], "any", false, false, true, 209), "setAttribute", ["role", "menuitem"], "method", false, false, true, 209), "setAttribute", ["tabindex", "-1"], "method", false, false, true, 209), "setAttribute", ["data-drupal-link-system-path",                                 // line 210
($context["system_path"] ?? null)], "method", false, false, true, 209), "setAttribute", [((((CoreExtension::getAttribute($this->env, $this->source,                                 // line 211
$context["item"], "in_active_trail", [], "any", false, false, true, 211) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 211)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 211), "toString", [], "method", false, false, true, 211) == $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>")))) ? ("aria-current") : ("data-inactive")), ((((CoreExtension::getAttribute($this->env, $this->source,                                 // line 212
$context["item"], "in_active_trail", [], "any", false, false, true, 212) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 212)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 212), "toString", [], "method", false, false, true, 212) == $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>")))) ? ("page") : ("true"))], "method", false, false, true, 210)), "html", null, true);
                                yield "
                    ";
                            }
                            // line 214
                            yield "                ";
                        }
                        // line 215
                        yield "            ";
                    }
                    // line 216
                    yield "                ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 216)) {
                        // line 217
                        yield "                    ";
                        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["id", ($context["aria_id"] ?? null)], "method", false, false, true, 217), "setAttribute", ["tabindex", "-1"], "method", false, false, true, 217);
                        // line 218
                        yield "                    ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 218), ($context["attributes"] ?? null), ($context["menu_level"] ?? null), ($context["menu_name"] ?? null)], 218, $context, $this->getSourceContext()));
                        yield "
                ";
                    }
                    // line 220
                    yield "            </li>
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
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 222
                yield "        ";
                // line 223
                yield "    </ul>
";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/solo/templates/navigation/menu.html.twig";
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
        return array (  573 => 223,  571 => 222,  556 => 220,  550 => 218,  547 => 217,  544 => 216,  541 => 215,  538 => 214,  533 => 212,  532 => 211,  531 => 210,  530 => 209,  529 => 208,  528 => 207,  527 => 206,  525 => 205,  523 => 204,  517 => 201,  513 => 200,  505 => 199,  502 => 198,  491 => 193,  488 => 192,  485 => 190,  482 => 189,  479 => 188,  476 => 187,  474 => 185,  472 => 184,  470 => 183,  464 => 180,  456 => 179,  447 => 175,  445 => 174,  443 => 173,  438 => 171,  430 => 170,  422 => 167,  420 => 166,  418 => 165,  411 => 164,  404 => 162,  401 => 161,  399 => 160,  395 => 159,  389 => 156,  385 => 155,  381 => 154,  367 => 153,  364 => 152,  361 => 151,  358 => 150,  356 => 148,  355 => 147,  353 => 143,  351 => 142,  345 => 139,  341 => 138,  335 => 137,  330 => 135,  324 => 134,  320 => 133,  316 => 132,  310 => 131,  304 => 130,  298 => 129,  292 => 128,  289 => 127,  286 => 126,  283 => 125,  280 => 124,  278 => 123,  276 => 122,  269 => 121,  266 => 120,  263 => 118,  260 => 117,  257 => 116,  254 => 115,  251 => 114,  248 => 113,  245 => 111,  243 => 109,  242 => 104,  241 => 102,  240 => 101,  237 => 100,  235 => 97,  234 => 96,  233 => 95,  232 => 94,  231 => 93,  230 => 92,  229 => 91,  228 => 90,  227 => 89,  226 => 88,  225 => 87,  224 => 86,  221 => 85,  218 => 84,  215 => 83,  212 => 82,  210 => 81,  207 => 80,  204 => 79,  201 => 78,  198 => 77,  195 => 75,  192 => 74,  189 => 73,  186 => 72,  183 => 71,  180 => 70,  177 => 69,  174 => 68,  171 => 66,  168 => 65,  165 => 64,  162 => 63,  159 => 62,  156 => 60,  138 => 59,  136 => 58,  131 => 56,  126 => 55,  121 => 53,  116 => 52,  113 => 51,  111 => 50,  109 => 45,  108 => 44,  106 => 41,  105 => 40,  103 => 38,  102 => 37,  100 => 35,  98 => 32,  95 => 31,  79 => 30,  72 => 25,  60 => 24,  51 => 28,  46 => 27,  44 => 23,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/solo/templates/navigation/menu.html.twig", "/opt/drupal/web/themes/contrib/solo/templates/navigation/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "macro" => 24, "include" => 25, "set" => 31, "if" => 50, "for" => 59);
        static $filters = array("clean_class" => 35, "clean_unique_id" => 41, "escape" => 52, "render" => 84, "join" => 117, "merge" => 126, "t" => 138);
        static $functions = array("create_attribute" => 40, "path" => 134, "link" => 205);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'include', 'set', 'if', 'for'],
                ['clean_class', 'clean_unique_id', 'escape', 'render', 'join', 'merge', 't'],
                ['create_attribute', 'path', 'link'],
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
