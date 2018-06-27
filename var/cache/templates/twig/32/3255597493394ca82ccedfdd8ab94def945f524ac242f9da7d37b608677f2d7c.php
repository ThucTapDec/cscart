<?php

/* __string_template__70ae5fd7c63f0d9e66b8b2c05ad979bb36c76da782c9192b3b7ce7f19d2e0dcc */
class __TwigTemplate_81a4c2e4e5639d8dab8df93ec00f3c8749e591bcc0e604641c3b97932bdb4d8f extends Twig_Template
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

  ";
        // line 3
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hello");
        echo ",<br /><br />

";
        // line 5
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_new_post_notification");
        echo "&nbsp;<b>";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, (isset($context["object_name"]) ? $context["object_name"] : null));
        echo "</b>:&nbsp;";
        echo $this->getAttribute((isset($context["object_data"]) ? $context["object_data"] : null), "description", array());
        echo "
<br /><br />
<b>";
        // line 7
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "person_name");
        echo "</b>:&nbsp;";
        echo $this->getAttribute((isset($context["post_data"]) ? $context["post_data"] : null), "name", array());
        echo "<br />
";
        // line 8
        if ($this->getAttribute((isset($context["post_data"]) ? $context["post_data"] : null), "rating_value", array())) {
            // line 9
            echo "<b>";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "rating");
            echo "</b>:&nbsp;";
            if (($this->getAttribute((isset($context["post_data"]) ? $context["post_data"] : null), "rating_value", array()) == "5")) {
                echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "excellent");
            } elseif (($this->getAttribute((isset($context["post_data"]) ? $context["post_data"] : null), "rating_value", array()) == "4")) {
                echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "very_good");
            } elseif (($this->getAttribute((isset($context["post_data"]) ? $context["post_data"] : null), "rating_value", array()) == "3")) {
                echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "average");
            } elseif (($this->getAttribute((isset($context["post_data"]) ? $context["post_data"] : null), "rating_value", array()) == "2")) {
                echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "fair");
            } elseif (($this->getAttribute((isset($context["post_data"]) ? $context["post_data"] : null), "rating_value", array()) == "1")) {
                echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "poor");
            }
            // line 10
            echo "<br />
";
        }
        // line 12
        echo "
";
        // line 13
        if ($this->getAttribute((isset($context["post_data"]) ? $context["post_data"] : null), "message", array())) {
            // line 14
            echo "<b>";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "message");
            echo "</b>:<br />
";
            // line 15
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["post_data"]) ? $context["post_data"] : null), "message", array()), "html", null, true));
            echo "
<br /><br />
";
        }
        // line 18
        echo "
";
        // line 19
        if (($this->getAttribute((isset($context["post_data"]) ? $context["post_data"] : null), "status", array()) == "N")) {
            // line 20
            echo "<b>";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_approval_notice");
            echo "</b>
<br />
";
        }
        // line 23
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "view");
        echo ":<br />
<a href=\"";
        // line 24
        echo (isset($context["url"]) ? $context["url"] : null);
        echo "\">";
        echo $this->env->getExtension('tygh.core')->punyDecodeFilter((isset($context["url"]) ? $context["url"] : null));
        echo "</a>
";
        // line 25
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__70ae5fd7c63f0d9e66b8b2c05ad979bb36c76da782c9192b3b7ce7f19d2e0dcc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  97 => 24,  93 => 23,  86 => 20,  84 => 19,  81 => 18,  75 => 15,  70 => 14,  68 => 13,  65 => 12,  61 => 10,  46 => 9,  44 => 8,  38 => 7,  29 => 5,  24 => 3,  19 => 1,);
    }
}
/* {{ snippet("header") }}*/
/* */
/*   {{ __("hello") }},<br /><br />*/
/* */
/* {{ __("text_new_post_notification") }}&nbsp;<b>{{ __(object_name) }}</b>:&nbsp;{{ object_data.description }}*/
/* <br /><br />*/
/* <b>{{ __("person_name") }}</b>:&nbsp;{{ post_data.name }}<br />*/
/* {% if post_data.rating_value %}*/
/* <b>{{ __("rating") }}</b>:&nbsp;{% if post_data.rating_value == "5" %}{{ __("excellent") }}{% elseif post_data.rating_value == "4" %}{{ __("very_good") }}{% elseif post_data.rating_value == "3" %}{{ __("average") }}{% elseif post_data.rating_value == "2" %}{{ __("fair") }}{% elseif post_data.rating_value == "1" %}{{ __("poor") }}{% endif %}*/
/* <br />*/
/* {% endif %}*/
/* */
/* {% if post_data.message %}*/
/* <b>{{ __("message") }}</b>:<br />*/
/* {{ post_data.message|nl2br }}*/
/* <br /><br />*/
/* {% endif %}*/
/* */
/* {% if post_data.status == 'N' %}*/
/* <b>{{ __("text_approval_notice") }}</b>*/
/* <br />*/
/* {% endif %}*/
/* {{ __("view") }}:<br />*/
/* <a href="{{ url }}">{{ url|puny_decode }}</a>*/
/* {{ snippet("footer") }}*/
