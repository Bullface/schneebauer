<?php

/* modular/banner.html.twig */
class __TwigTemplate_f032887aaacce4504c5bea3a43f94029f56f33856ee4b4e4bb35b78fbfae127b extends Twig_Template
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
        // line 1
        echo "            <section id=\"banner\">
                    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "                        <article>
                            <img src=\"";
            // line 4
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["item"], "image", array()), array(), "array"), "url", array());
            echo "\" alt=\"\" />
                            <div class=\"inner\">
                                <h2><a href=\"#\">";
            // line 6
            echo $this->getAttribute($context["item"], "title", array());
            echo "</a></h2>
                            </div>
                        </article>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            </section>";
    }

    public function getTemplateName()
    {
        return "modular/banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  34 => 6,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/*             <section id="banner">*/
/*                     {% for item in page.header.items %}*/
/*                         <article>*/
/*                             <img src="{{ page.media[item.image].url }}" alt="" />*/
/*                             <div class="inner">*/
/*                                 <h2><a href="#">{{ item.title }}</a></h2>*/
/*                             </div>*/
/*                         </article>*/
/*                     {% endfor %}*/
/*             </section>*/
