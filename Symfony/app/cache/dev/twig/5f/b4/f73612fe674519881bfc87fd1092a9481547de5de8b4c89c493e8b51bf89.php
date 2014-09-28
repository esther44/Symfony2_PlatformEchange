<?php

/* WebProfilerBundle:Profiler:bag.html.twig */
class __TwigTemplate_5fb4f73612fe674519881bfc87fd1092a9481547de5de8b4c89c493e8b51bf89 extends Twig_Template
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
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\" style=\"width: 25%\">Key</th>
            <th scope=\"col\" style=\"width: 75%\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute($this->getContext($context, "bag"), "keys")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "</th>
                <td><pre>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('profiler')->dumpValue($this->getAttribute($this->getContext($context, "bag"), "get", array(0 => $this->getContext($context, "key")), "method")), "html", null, true);
            echo "</pre></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:bag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  58 => 17,  49 => 13,  33 => 4,  36 => 5,  46 => 12,  40 => 6,  37 => 5,  57 => 12,  52 => 14,  38 => 6,  71 => 19,  64 => 17,  55 => 15,  48 => 9,  30 => 3,  39 => 10,  29 => 3,  26 => 9,  51 => 14,  44 => 12,  42 => 11,  35 => 9,  31 => 3,  43 => 11,  41 => 10,  28 => 3,  24 => 2,  32 => 4,  25 => 35,  22 => 2,  19 => 1,);
    }
}
