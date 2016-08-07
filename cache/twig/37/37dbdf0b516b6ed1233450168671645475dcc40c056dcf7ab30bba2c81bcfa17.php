<?php

/* modular/posts.html.twig */
class __TwigTemplate_f954676d9951c21ca0602ba8c636e81b700ca5f1579e8a81f4cc74cc8797f1b7 extends Twig_Template
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
        echo "                   <section id=\"three\" class=\"wrapper style2\">
                <div class=\"inner\">
                    <h2>";
        // line 3
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
                    <div class=\"posts\">

                    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "                    <section class=\"post\">

                            <span class=\"image\"><img src=\"";
            // line 9
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["item"], "image", array()), array(), "array"), "url", array());
            echo "\" alt=\"\" /></span>
                            <div class=\"content\">
                        <h3>";
            // line 11
            echo $this->getAttribute($context["item"], "title", array());
            echo "</h3>
                        <p>";
            // line 12
            echo $this->getAttribute($context["item"], "text", array());
            echo "</p>
                        <ul class=\"actions\">
                                    <li><a href=\"#\" class=\"button\">More</a></li>
                                </ul>
                                </div>
                    </section>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                    </div>
                </div>
            </section>";
    }

    public function getTemplateName()
    {
        return "modular/posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  46 => 12,  42 => 11,  37 => 9,  33 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
/*                    <section id="three" class="wrapper style2">*/
/*                 <div class="inner">*/
/*                     <h2>{{page.title}}</h2>*/
/*                     <div class="posts">*/
/* */
/*                     {% for item in page.header.features %}*/
/*                     <section class="post">*/
/* */
/*                             <span class="image"><img src="{{ page.media[item.image].url }}" alt="" /></span>*/
/*                             <div class="content">*/
/*                         <h3>{{ item.title }}</h3>*/
/*                         <p>{{ item.text }}</p>*/
/*                         <ul class="actions">*/
/*                                     <li><a href="#" class="button">More</a></li>*/
/*                                 </ul>*/
/*                                 </div>*/
/*                     </section>*/
/*                     {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
