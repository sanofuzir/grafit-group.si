<?php

/* JMSTranslationBundle:Translate:index.html.twig */
class __TwigTemplate_1d6557e34a910a370059805296fde4a2801f18171b69db315ac4bfddb7e69745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JMSTranslationBundle::base.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JMSTranslationBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script language=\"javascript\" type=\"text/javascript\">
        \$(document).ready(function() {
            var updateMessagePath = ";
        // line 8
        echo twig_jsonencode_filter($this->env->getExtension('routing')->getPath("jms_translation_update_message", array("config" => (isset($context["selectedConfig"]) ? $context["selectedConfig"] : $this->getContext($context, "selectedConfig")), "domain" => (isset($context["selectedDomain"]) ? $context["selectedDomain"] : $this->getContext($context, "selectedDomain")), "locale" => (isset($context["selectedLocale"]) ? $context["selectedLocale"] : $this->getContext($context, "selectedLocale")))));
        echo ";
        
            \$('#config select').change(function() {
                \$(this).parent().submit();
            });
            
            ";
        // line 14
        if (((isset($context["isWriteable"]) ? $context["isWriteable"] : $this->getContext($context, "isWriteable")) === true)) {
            // line 15
            echo "            \$('textarea')
                .blur(function() {
                    var self = this;
                    \$.ajax(updateMessagePath + '?id=' + encodeURIComponent(\$(this).data('id')), {
                        type: 'POST',
                        headers: {'X-HTTP-METHOD-OVERRIDE': 'PUT'},
                        data: {'_method': 'PUT', 'message': \$(this).val()},
                        beforeSend: function() {
                            \$(self).parent().closest('td').prev('td').children('.alert-message').remove();
                        },
                        error: function() {
                            \$(self).parent().closest('td').prev('td').append('<span class=\"alert-message label error\">Could not be saved.</span>');
                        },
                        success: function() {
                            \$(self).parent().closest('td').prev('td').append('<span class=\"alert-message label success\">Translation was saved.</span>');
                        },
                        complete: function() {
                            var parent = \$(self).parent();
                            \$(self).data('timeoutId', setTimeout(function() {
                                \$(self).data('timeoutId', undefined);
                                parent.closest('td').prev('td').children('.alert-message').fadeOut(300, function() { \$(this).remove(); });
                            }, 10000));
                        }
                    });
                })
                .focus(function() {
                    this.select();
                    
                    var timeoutId = \$(this).data('timeoutId');
                    if (timeoutId) {
                        clearTimeout(timeoutId);
                        \$(this).data('timeoutId', undefined);
                    }
                    
                    \$(this).parent().children('.alert-message').remove();
                })
            ;
            ";
        }
        // line 53
        echo "        });
    </script>
";
    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        // line 58
        echo "
    <form id=\"config\" action=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("jms_translation_index");
        echo "\" method=\"get\">
        <select name=\"config\" class=\"span3\">
            ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 62
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "html", null, true);
            echo "\"";
            if (((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")) == (isset($context["selectedConfig"]) ? $context["selectedConfig"] : $this->getContext($context, "selectedConfig")))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </select>
    
        <select name=\"domain\" class=\"span3\">
            ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["domains"]) ? $context["domains"] : $this->getContext($context, "domains")));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 68
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "html", null, true);
            echo "\"";
            if (((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")) == (isset($context["selectedDomain"]) ? $context["selectedDomain"] : $this->getContext($context, "selectedDomain")))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </select>
        
        <select name=\"locale\" class=\"span2\">
            ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 74
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo "\"";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == (isset($context["selectedLocale"]) ? $context["selectedLocale"] : $this->getContext($context, "selectedLocale")))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        </select>
    </form>
    
    ";
        // line 79
        if (((isset($context["isWriteable"]) ? $context["isWriteable"] : $this->getContext($context, "isWriteable")) === false)) {
            // line 80
            echo "    <div class=\"alert-message error\">
        The translation file \"<strong>";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
            echo "</strong>\" is not writable.
    </div>
    ";
        }
        // line 84
        echo "    
    ";
        // line 85
        if (("xliff" != (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")))) {
            // line 86
            echo "    <div class=\"alert-message warning\">
        Due to limitations of the different loaders/dumpers, some features are unfortunately limited to the XLIFF format. 
        
        <br /><br />
        
        However, you can easily convert your existing translation files to the XLIFF format by running:<br />
        <code>php app/console translation:extract ";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["selectedLocale"]) ? $context["selectedLocale"] : $this->getContext($context, "selectedLocale")), "html", null, true);
            echo " --config=";
            echo twig_escape_filter($this->env, (isset($context["selectedConfig"]) ? $context["selectedConfig"] : $this->getContext($context, "selectedConfig")), "html", null, true);
            echo " --output-format=xliff</code>
    </div>
    ";
        }
        // line 95
        echo "
    <h2>Available Messages</h2>
    
    ";
        // line 98
        if ((!twig_test_empty((isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages"))))) {
            // line 99
            echo "    <h3>New Messages</h3>
    ";
            // line 100
            $this->env->loadTemplate("JMSTranslationBundle:Translate:messages.html.twig")->display(array_merge($context, array("messages" => (isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")))));
            // line 101
            echo "    ";
        }
        // line 102
        echo "    
    ";
        // line 103
        if ((!twig_test_empty((isset($context["existingMessages"]) ? $context["existingMessages"] : $this->getContext($context, "existingMessages"))))) {
            // line 104
            echo "    <h3>Existing Messages</h3>
    ";
            // line 105
            $this->env->loadTemplate("JMSTranslationBundle:Translate:messages.html.twig")->display(array_merge($context, array("messages" => (isset($context["existingMessages"]) ? $context["existingMessages"] : $this->getContext($context, "existingMessages")))));
            // line 106
            echo "    ";
        }
        // line 107
        echo "
";
    }

    public function getTemplateName()
    {
        return "JMSTranslationBundle:Translate:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 106,  232 => 104,  222 => 100,  212 => 95,  194 => 85,  180 => 79,  23 => 1,  20 => 1,  178 => 69,  155 => 61,  148 => 58,  84 => 29,  165 => 35,  114 => 34,  90 => 29,  118 => 39,  153 => 59,  126 => 51,  77 => 28,  195 => 84,  58 => 18,  34 => 7,  137 => 40,  110 => 30,  100 => 58,  76 => 5,  198 => 76,  191 => 84,  185 => 81,  175 => 76,  167 => 63,  124 => 51,  81 => 24,  65 => 22,  127 => 64,  70 => 24,  289 => 96,  284 => 8,  242 => 103,  234 => 97,  231 => 96,  225 => 95,  205 => 91,  192 => 83,  184 => 78,  160 => 74,  152 => 66,  113 => 37,  104 => 28,  97 => 57,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 110,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 93,  177 => 70,  169 => 60,  140 => 43,  132 => 67,  128 => 53,  107 => 29,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 107,  238 => 85,  235 => 105,  230 => 103,  227 => 102,  224 => 101,  221 => 77,  219 => 99,  217 => 98,  208 => 68,  204 => 92,  179 => 69,  159 => 62,  143 => 42,  135 => 41,  119 => 35,  102 => 34,  71 => 27,  67 => 20,  63 => 21,  59 => 21,  38 => 8,  94 => 27,  89 => 28,  85 => 22,  75 => 23,  68 => 22,  56 => 18,  87 => 21,  21 => 1,  26 => 12,  93 => 29,  88 => 30,  78 => 26,  46 => 14,  27 => 5,  44 => 9,  31 => 4,  28 => 4,  201 => 92,  196 => 86,  183 => 82,  171 => 37,  166 => 71,  163 => 63,  158 => 47,  156 => 73,  151 => 70,  142 => 55,  138 => 54,  136 => 68,  121 => 41,  117 => 50,  105 => 38,  91 => 53,  62 => 19,  49 => 14,  24 => 7,  25 => 3,  19 => 2,  79 => 27,  72 => 21,  69 => 24,  47 => 10,  40 => 8,  37 => 7,  22 => 3,  246 => 108,  157 => 56,  145 => 46,  139 => 45,  131 => 40,  123 => 50,  120 => 49,  115 => 49,  111 => 37,  108 => 61,  101 => 33,  98 => 35,  96 => 31,  83 => 28,  74 => 25,  66 => 22,  55 => 18,  52 => 14,  50 => 10,  43 => 12,  41 => 8,  35 => 8,  32 => 4,  29 => 3,  209 => 92,  203 => 77,  199 => 67,  193 => 73,  189 => 73,  187 => 84,  182 => 80,  176 => 75,  173 => 65,  168 => 65,  164 => 62,  162 => 57,  154 => 60,  149 => 58,  147 => 58,  144 => 63,  141 => 57,  133 => 55,  130 => 52,  125 => 52,  122 => 51,  116 => 35,  112 => 62,  109 => 36,  106 => 35,  103 => 59,  99 => 29,  95 => 25,  92 => 24,  86 => 25,  82 => 9,  80 => 25,  73 => 24,  64 => 20,  60 => 22,  57 => 20,  54 => 15,  51 => 15,  48 => 12,  45 => 9,  42 => 9,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
