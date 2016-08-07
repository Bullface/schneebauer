<?php

/* modular/features.html.twig */
class __TwigTemplate_ed63d4a15dfe81b2585274faf689e8a5ab7567bfd92a7654e19416fee600e5b5 extends Twig_Template
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
        echo "<section id=\"two\" class=\"wrapper content-pad\">
                <div class=\"inner\">
                
                    <div class=\"features\">
                    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "                        <section class=\"content\">
                        ";
            // line 7
            if ($this->getAttribute($context["item"], "icon", array())) {
                // line 8
                echo "                            <span class=\"icon-wrapper major\"><span class=\"icon fa-";
                echo $this->getAttribute($context["item"], "icon", array());
                echo "\"></span></span>
                    ";
            }
            // line 10
            echo "                            <header>
                        <h3>";
            // line 11
            echo $this->getAttribute($context["item"], "title", array());
            echo "</h3>
                    </header>
                    <p>";
            // line 13
            echo $this->getAttribute($context["item"], "text", array());
            echo "</p>
                        </section>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                    </div>

        
                </div>
</section>
                   ";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  48 => 13,  43 => 11,  40 => 10,  34 => 8,  32 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <section id="two" class="wrapper content-pad">*/
/*                 <div class="inner">*/
/*                 */
/*                     <div class="features">*/
/*                     {% for item in page.header.features %}*/
/*                         <section class="content">*/
/*                         {% if item.icon %}*/
/*                             <span class="icon-wrapper major"><span class="icon fa-{{ item.icon }}"></span></span>*/
/*                     {% endif %}*/
/*                             <header>*/
/*                         <h3>{{ item.title }}</h3>*/
/*                     </header>*/
/*                     <p>{{ item.text }}</p>*/
/*                         </section>*/
/*                      {% endfor %}*/
/*                     </div>*/
/* */
/*         */
/*                 </div>*/
/* </section>*/
/*                    */
