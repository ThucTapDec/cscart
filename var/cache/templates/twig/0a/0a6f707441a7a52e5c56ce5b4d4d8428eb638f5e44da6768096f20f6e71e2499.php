<?php

/* __string_template__3dbef33fe3d431d493d3b059d84a0868dfb30b2232806e0ecef71a1f78691c14 */
class __TwigTemplate_af2cbcc3dcb751ea7778f1713ba39d500077e64f930041f20c2fc87f4bc602f1 extends Twig_Template
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
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "original_price", array());
        echo "</strong></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__3dbef33fe3d431d493d3b059d84a0868dfb30b2232806e0ecef71a1f78691c14";
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
/* <p style="text-align: center; font-family: Helvetica, Arial, sans-serif;"><strong style="font-weight:600;">{{ p.original_price }}</strong></p>*/
