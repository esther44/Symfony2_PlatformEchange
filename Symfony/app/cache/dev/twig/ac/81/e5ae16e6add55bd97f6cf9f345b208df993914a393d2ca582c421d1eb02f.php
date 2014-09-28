<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ac81e5ae16e6add55bd97f6cf9f345b208df993914a393d2ca582c421d1eb02f extends Twig_Template
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
        echo twig_jsonencode_filter($this->getAttribute($this->getContext($context, "exception"), "toarray"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  32 => 9,  25 => 3,  22 => 2,  19 => 1,);
    }
}
