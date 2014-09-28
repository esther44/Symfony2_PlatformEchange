<?php

/* ::base.html.twig */
class __TwigTemplate_784d5a5e9d21b5c6e78718a98039da042893d64ce31d3b20215e5a3b255b5c2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 11,  59 => 6,  23 => 1,  115 => 40,  112 => 39,  110 => 38,  107 => 37,  101 => 33,  88 => 30,  82 => 26,  74 => 22,  72 => 21,  34 => 5,  113 => 40,  104 => 37,  100 => 36,  91 => 34,  87 => 33,  77 => 25,  73 => 23,  62 => 16,  60 => 20,  53 => 5,  47 => 12,  45 => 11,  95 => 34,  89 => 30,  84 => 27,  75 => 24,  67 => 18,  63 => 21,  54 => 19,  50 => 16,  102 => 33,  96 => 35,  92 => 31,  85 => 23,  78 => 24,  68 => 12,  65 => 17,  20 => 1,  58 => 14,  49 => 12,  33 => 6,  36 => 9,  46 => 12,  40 => 11,  37 => 7,  57 => 19,  52 => 14,  38 => 7,  71 => 23,  64 => 10,  55 => 15,  48 => 9,  30 => 7,  39 => 10,  29 => 5,  26 => 9,  51 => 37,  44 => 11,  42 => 10,  35 => 7,  31 => 4,  43 => 11,  41 => 10,  28 => 3,  24 => 2,  32 => 4,  25 => 35,  22 => 2,  19 => 1,);
    }
}
