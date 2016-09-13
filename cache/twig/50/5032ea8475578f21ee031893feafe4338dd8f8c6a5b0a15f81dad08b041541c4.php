<?php

/* partials/comments.html.twig */
class __TwigTemplate_7e4900f7dfbf089f636e5efee0662f266542faa37c97d4d3ff4e82dcce16687a extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "enable", array())) {
            // line 2
            echo "
    <h3>";
            // line 3
            echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_COMMENTS.ADD_COMMENT");
            echo "</h3>

    <form name=\"";
            // line 5
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "name", array());
            echo "\"
          action=\"";
            // line 6
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "action", array())) ? (((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "action", array()))) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array())));
            echo "\"
          method=\"";
            // line 7
            echo _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "method", array())), "POST");
            echo "\">

        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 10
                echo "            ";
                $context["value"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                // line 11
                echo "            ";
                if ($this->getAttribute($context["field"], "evaluateDefault", array())) {
                    // line 12
                    echo "                ";
                    $context["value"] = $this->env->getExtension('GravTwigExtension')->evaluateFunc($this->getAttribute($context["field"], "evaluateDefault", array()));
                    // line 13
                    echo "            ";
                }
                // line 14
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "authenticated", array()))) {
                    // line 15
                    echo "                ";
                    if (($this->getAttribute($context["field"], "name", array()) == "name")) {
                        // line 16
                        echo "                    <input type=\"hidden\" name=\"";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "fullname", array());
                        echo "\">
                ";
                    } elseif (($this->getAttribute(                    // line 17
$context["field"], "name", array()) == "email")) {
                        // line 18
                        echo "                    <input type=\"hidden\" name=\"";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "email", array());
                        echo "\">
                ";
                    } else {
                        // line 20
                        echo "                    <div>
                        ";
                        // line 21
                        $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "partials/comments.html.twig", 21)->display($context);
                        // line 22
                        echo "                    </div>                
                ";
                    }
                    // line 24
                    echo "            ";
                } else {
                    // line 25
                    echo "                <div>
                    ";
                    // line 26
                    $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "partials/comments.html.twig", 26)->display($context);
                    // line 27
                    echo "                </div>
            ";
                }
                // line 29
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "
        <div class=\"buttons\">
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 33
                echo "            <button class=\"button\" type=\"";
                echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
                echo "\">";
                echo _twig_default_filter($this->env->getExtension('GravTwigExtension')->translate($this->getAttribute($context["button"], "value", array())), "Submit");
                echo "</button>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </div>

        ";
            // line 37
            echo $this->env->getExtension('GravTwigExtension')->nonceFieldFunc("form", "form-nonce");
            echo "
    </form>

    <div class=\"alert\">";
            // line 40
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array());
            echo "</div>

    ";
            // line 42
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "comments", array()))) {
                // line 43
                echo "
        <h3>";
                // line 44
                echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_COMMENTS.COMMENTS");
                echo "</h3>

        <table>
            ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(array_reverse($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "comments", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 48
                    echo "            <tr>
                <td>
                    ";
                    // line 50
                    echo $this->getAttribute($context["comment"], "text", array());
                    echo "
                    <br />
                    ";
                    // line 52
                    echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_COMMENTS.WRITTEN_ON");
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date", array()));
                    echo " ";
                    echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_COMMENTS.BY");
                    echo " ";
                    echo $this->getAttribute($context["comment"], "author", array());
                    echo "
                </td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "        </table>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 56,  187 => 52,  182 => 50,  178 => 48,  174 => 47,  168 => 44,  165 => 43,  163 => 42,  158 => 40,  152 => 37,  148 => 35,  137 => 33,  133 => 32,  129 => 30,  115 => 29,  111 => 27,  109 => 26,  106 => 25,  103 => 24,  99 => 22,  97 => 21,  94 => 20,  86 => 18,  84 => 17,  77 => 16,  74 => 15,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  42 => 9,  37 => 7,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if grav.twig.enable %}*/
/* */
/*     <h3>{{'PLUGIN_COMMENTS.ADD_COMMENT'|t}}</h3>*/
/* */
/*     <form name="{{ grav.config.plugins.comments.form.name }}"*/
/*           action="{{ grav.config.plugins.comments.form.action ?  base_url ~ grav.config.plugins.comments.form.action : page.url }}"*/
/*           method="{{ grav.config.plugins.comments.form.method|upper|default('POST') }}">*/
/* */
/*         {% for field in grav.config.plugins.comments.form.fields %}*/
/*             {% set value = form.value(field.name) %}*/
/*             {% if field.evaluateDefault %}*/
/*                 {% set value = evaluate(field.evaluateDefault) %}*/
/*             {% endif %}*/
/*             {% if config.plugins.login.enabled and grav.user.authenticated %}*/
/*                 {% if field.name == 'name' %}*/
/*                     <input type="hidden" name="{{field.name}}" value="{{grav.user.fullname}}">*/
/*                 {% elseif field.name == 'email' %}*/
/*                     <input type="hidden" name="{{field.name}}" value="{{grav.user.email}}">*/
/*                 {% else %}*/
/*                     <div>*/
/*                         {% include "forms/fields/#{field.type}/#{field.type}.html.twig" %}*/
/*                     </div>                */
/*                 {% endif %}*/
/*             {% else %}*/
/*                 <div>*/
/*                     {% include "forms/fields/#{field.type}/#{field.type}.html.twig" %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*         <div class="buttons">*/
/*         {% for button in grav.config.plugins.comments.form.buttons %}*/
/*             <button class="button" type="{{ button.type|default('submit') }}">{{ button.value|t|default('Submit') }}</button>*/
/*         {% endfor %}*/
/*         </div>*/
/* */
/*         {{ nonce_field('form', 'form-nonce') }}*/
/*     </form>*/
/* */
/*     <div class="alert">{{ form.message }}</div>*/
/* */
/*     {% if grav.twig.comments|length %}*/
/* */
/*         <h3>{{'PLUGIN_COMMENTS.COMMENTS'|t}}</h3>*/
/* */
/*         <table>*/
/*             {% for comment in grav.twig.comments|array_reverse %}*/
/*             <tr>*/
/*                 <td>*/
/*                     {{comment.text}}*/
/*                     <br />*/
/*                     {{'PLUGIN_COMMENTS.WRITTEN_ON'|t}} {{comment.date|e}} {{'PLUGIN_COMMENTS.BY'|t}} {{comment.author}}*/
/*                 </td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     {% endif %}*/
/* {% endif %}*/
/* */
