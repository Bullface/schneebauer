<?php

/* modular.html.twig */
class __TwigTemplate_187aef3a7c1cc74e4c09bf04414f8dc704e58c8d5785b1216a87e443e1a084c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 6
            echo "        ";
            if (($this->getAttribute($context["module"], "menu", array()) == "before_article")) {
                // line 7
                echo "            ";
                echo $this->getAttribute($context["module"], "content", array());
                echo "
        ";
            }
            // line 9
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
\t\t\t<section id=\"one\" class=\"wrapper major-pad\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<section class=\"spotlight\">
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<h2>";
        // line 16
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subheader", array());
        echo "</h2>
\t\t\t\t\t\t\t<p>";
        // line 17
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "text", array());
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"image\"><img src=\"";
        // line 19
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array()), array(), "array"), "url", array());
        echo "\" alt=\"\" /></span>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</section>

";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 25
            echo "
        ";
            // line 26
            if (($this->getAttribute($context["module"], "menu", array()) != "before_article")) {
                // line 27
                echo "\t\t \t";
                echo $this->getAttribute($context["module"], "content", array());
                echo "

        ";
            }
            // line 30
            echo "

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t
";
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 33,  95 => 30,  88 => 27,  86 => 26,  83 => 25,  79 => 24,  71 => 19,  66 => 17,  62 => 16,  55 => 11,  48 => 9,  42 => 7,  39 => 6,  35 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* {{ page.content }}*/
/* {% for module in page.collection() %}*/
/*         {% if module.menu == 'before_article' %}*/
/*             {{ module.content }}*/
/*         {% endif %}*/
/* */
/*         {% endfor %}*/
/* */
/* 			<section id="one" class="wrapper major-pad">*/
/* 				<div class="inner">*/
/* 					<section class="spotlight">*/
/* 						<div class="content">*/
/* 							<h2>{{page.header.subheader}}</h2>*/
/* 							<p>{{page.header.text}}</p>*/
/* 						</div>*/
/* 						<span class="image"><img src="{{ page.media[page.header.image].url }}" alt="" /></span>*/
/* 					</section>*/
/* 				</div>*/
/* 			</section>*/
/* */
/* {% for module in page.collection() %}*/
/* */
/*         {% if module.menu != 'before_article' %}*/
/* 		 	{{ module.content }}*/
/* */
/*         {% endif %}*/
/* */
/* */
/*         {% endfor %}*/
/* 			*/
/* {% endblock %}*/
