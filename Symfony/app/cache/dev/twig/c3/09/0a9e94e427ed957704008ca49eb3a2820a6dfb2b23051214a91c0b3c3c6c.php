<?php

/* estherPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_c3090a9e94e427ed957704008ca49eb3a2820a6dfb2b23051214a91c0b3c3c6c extends Twig_Template
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
<!DOCTYPE html>
<html>
  <head>
    <title>Affichage de l'annonce ";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "</title>
  </head>
  <body>
    <h1>Hello Annonce n°";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo " !</h1>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "estherPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 9,  25 => 6,  19 => 2,);
    }
}
