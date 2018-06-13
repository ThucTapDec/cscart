<?php

/* __string_template__a787af1cd845ccbac1f9b98c2145e7d63c1aabceb4f6ef5a647056b78c84fe46 */
class __TwigTemplate_1a603bc5e5f1daa133eb0bcbc2a1d53c6f42ad620befdc5c6d3652f66006ea17 extends Twig_Template
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
        echo "<p style=\"text-align: center; font-family: Helvetica, Arial, sans-serif;\"><strong style=\"font-weight:600;\">";
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "display_subtotal", array());
        echo "</strong></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__a787af1cd845ccbac1f9b98c2145e7d63c1aabceb4f6ef5a647056b78c84fe46";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <p style="text-align: center; font-family: Helvetica, Arial, sans-serif;"><strong style="font-weight:600;">{{ p.display_subtotal }}</strong></p>*/
