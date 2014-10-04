<?php

/* estherPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_07ca54b22779c3fe9ae6c1853b9e4855a0a70c0d3121d498ce01fbf486c011db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("estherPlatformBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'estherplatform_body' => array($this, 'block_estherplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "estherPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_estherplatform_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "estherPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esther_platform_view", array("id" => $this->getAttribute($this->getContext($context, "advert"), "id"))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
    }

    public function getTemplateName()
    {
        return "estherPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 21,  47 => 13,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
