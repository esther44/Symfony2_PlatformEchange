<?php

/* estherPlatformBundle:Default:index.html.twig */
class __TwigTemplate_c8ff14cd3d66227bf211899bee822ab32b7ad3aab24e0c8988e04e3e6d4e7446 extends Twig_Template
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
<html>
  <body>
    Hello ";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "estherPlatformBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 5,  19 => 2,);
    }
}
