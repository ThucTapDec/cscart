<?php

/* __string_template__fe10b5d051a8675d764c7e3d913ced8208036b3295f1a3d5ee316691c4ddaaf1 */
class __TwigTemplate_88f9592f183d9663cc4ab7da28bc61f4571f8dfc571780c53a530cbed3d8538c extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header");
        echo "

 <h1>";
        // line 3
        echo $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : null), "name", array());
        echo "</h1> ";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "discount_coupon_code");
        echo ": <b>";
        echo (isset($context["coupon"]) ? $context["coupon"] : null);
        echo "</b> ";
        echo $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : null), "short_description", array());
        echo "<br/> ";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "more_info");
        echo ": <a href=\"";
        echo (isset($context["url"]) ? $context["url"] : null);
        echo "\">";
        echo $this->env->getExtension('tygh.core')->punyDecodeFilter((isset($context["url"]) ? $context["url"] : null));
        echo "</a>
";
        // line 4
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__fe10b5d051a8675d764c7e3d913ced8208036b3295f1a3d5ee316691c4ddaaf1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ snippet("header") }}*/
/* */
/*  <h1>{{ promotion.name }}</h1> {{ __("discount_coupon_code") }}: <b>{{ coupon }}</b> {{ promotion.short_description }}<br/> {{ __("more_info") }}: <a href="{{ url }}">{{ url|puny_decode }}</a>*/
/* {{ snippet("footer") }}*/
