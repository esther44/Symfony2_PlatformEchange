<?php

/* estherPlatformBundle:Advert:byebye-world.html.twig */
class __TwigTemplate_fb4b76800bed471fce7c1a757fb60ced3bfbc2f7705c8d35850ef8071a031983 extends Twig_Template
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
        <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
    </head>
    <body>
        <h1>Hello ";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "pseudo"), "html", null, true);
        echo " !</h1>
        
        <p>
           Je m'appelle <span style=\"color:red\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getContext($context, "prenom"), "html", null, true);
        echo "</span> et j'ai ";
        echo twig_escape_filter($this->env, $this->getContext($context, "age"), "html", null, true);
        echo " ans
        </p>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "estherPlatformBundle:Advert:byebye-world.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 12,  28 => 9,  19 => 2,);
    }
}
