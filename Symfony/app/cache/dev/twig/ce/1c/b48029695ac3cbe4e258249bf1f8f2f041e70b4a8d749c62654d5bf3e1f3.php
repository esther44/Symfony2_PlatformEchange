<?php

/* estherPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_ce1cb48029695ac3cbe4e258249bf1f8f2f041e70b4a8d749c62654d5bf3e1f3 extends Twig_Template
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
        // line 2
        echo "
";
        // line 5
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listAdverts"));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 8
            echo "    <li>
      <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esther_platform_view", array("id" => $this->getAttribute($this->getContext($context, "advert"), "id"))), "html", null, true);
            echo "\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "advert"), "title"), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "estherPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  37 => 10,  33 => 9,  30 => 8,  26 => 7,  22 => 5,  19 => 2,  84 => 25,  77 => 23,  69 => 20,  65 => 19,  60 => 17,  56 => 16,  53 => 15,  48 => 14,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
