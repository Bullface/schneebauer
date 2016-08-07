<?php

/* partials/header.html.twig */
class __TwigTemplate_3ae1fe038f83baaadfb75262509eebb0a89aa96a8446738e6ffe3353567dc30f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 18
        echo "
<header id=\"header\" >
    <h1><a href=\" ";
        // line 20
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\">Schneebauer<span>Wohnen
    </span></a></h1>
    <nav id=\"nav\">
        <ul>
            ";
        // line 24
        echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
        echo "
        </ul>
    </nav>
</header>
";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 4
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 5
                    echo "                    <li class=\"";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo "\">
                    <a class=\"submenu fa-angle-down\">";
                    // line 6
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "</a>
                <ul>
                    ";
                    // line 8
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 12
                    echo "
                    <li class=\"";
                    // line 13
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo "\"><a href=\"";
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "</a></li>
        ";
                }
                // line 15
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 16,  91 => 15,  82 => 13,  79 => 12,  72 => 8,  67 => 6,  62 => 5,  59 => 4,  56 => 3,  51 => 2,  39 => 1,  30 => 24,  23 => 20,  19 => 18,);
    }
}
/* {% macro loop(page) %}*/
/*     {% for p in page.children.visible %}*/
/*         {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}*/
/*         {% if p.children.visible.count > 0 %}*/
/*                     <li class="{{ current_page }}">*/
/*                     <a class="submenu fa-angle-down">{{ p.menu }}</a>*/
/*                 <ul>*/
/*                     {{ _self.loop(p) }}*/
/*                 </ul>*/
/*             </li>*/
/*         {% else %}*/
/* */
/*                     <li class="{{ current_page }}"><a href="{{ p.url }}">{{ p.menu }}</a></li>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/* {% endmacro %}*/
/* */
/* <header id="header" >*/
/*     <h1><a href=" {{ base_url }}">Schneebauer<span>Wohnen*/
/*     </span></a></h1>*/
/*     <nav id="nav">*/
/*         <ul>*/
/*             {{ _self.loop(pages) }}*/
/*         </ul>*/
/*     </nav>*/
/* </header>*/
/* */
