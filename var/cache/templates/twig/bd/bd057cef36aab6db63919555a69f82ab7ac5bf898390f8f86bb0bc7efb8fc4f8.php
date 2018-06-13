<?php

/* __string_template__728c00ff7d1abf2ad69f205cbae4262f1581883003c93bc9d5e3951ab0a68914 */
class __TwigTemplate_2644164ed4933d7b235c1f52f016375386d69ea95c4e6982aed818cc288dd72a extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "call_requests");
    }

    public function getTemplateName()
    {
        return "__string_template__728c00ff7d1abf2ad69f205cbae4262f1581883003c93bc9d5e3951ab0a68914";
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
/* {{ __("call_requests") }}*/
