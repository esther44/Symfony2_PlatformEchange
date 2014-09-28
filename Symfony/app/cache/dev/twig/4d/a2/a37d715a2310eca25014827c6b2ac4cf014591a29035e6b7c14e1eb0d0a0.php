<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4da2a37d715a2310eca25014827c6b2ac4cf014591a29035e6b7c14e1eb0d0a0 extends Twig_Template
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
        $this->env->loadTemplate("TwigBundle:Exception:exception.xml.twig")->display(array_merge($context, array("exception" => $this->getContext($context, "exception"))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  32 => 9,  25 => 3,  22 => 2,  19 => 1,);
    }
}
