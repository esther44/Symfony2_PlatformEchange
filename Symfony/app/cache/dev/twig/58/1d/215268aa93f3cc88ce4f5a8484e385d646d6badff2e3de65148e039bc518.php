<?php

/* WebProfilerBundle:Profiler:table.html.twig */
class __TwigTemplate_581d215268aa93f3cc88ce4f5a8484e385d646d6badff2e3de65148e039bc518 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getContext($context, "data"))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "</th>
                <td><pre>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('profiler')->dumpValue($this->getAttribute($this->getContext($context, "data"), $this->getContext($context, "key"), array(), "array")), "html", null, true);
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
        return "WebProfilerBundle:Profiler:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 34,  89 => 30,  84 => 27,  75 => 24,  67 => 22,  63 => 21,  54 => 19,  50 => 18,  102 => 33,  96 => 30,  92 => 28,  85 => 23,  78 => 18,  68 => 12,  65 => 11,  20 => 1,  58 => 17,  49 => 13,  33 => 4,  36 => 5,  46 => 12,  40 => 6,  37 => 7,  57 => 20,  52 => 14,  38 => 6,  71 => 23,  64 => 17,  55 => 15,  48 => 9,  30 => 3,  39 => 10,  29 => 3,  26 => 9,  51 => 37,  44 => 11,  42 => 11,  35 => 9,  31 => 4,  43 => 11,  41 => 10,  28 => 3,  24 => 2,  32 => 4,  25 => 35,  22 => 2,  19 => 1,);
    }
}
