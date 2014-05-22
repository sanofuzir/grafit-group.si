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
        echo twig_jsonencode_filter($this->env->getExtension('routing')->getPath("jms_translation_update_message", array("config" => (isset($context["selectedConfig"]) ? $context["selectedConfig"] : null), "domain" => (isset($context["selectedDomain"]) ? $context["selectedDomain"] : null), "locale" => (isset($context["selectedLocale"]) ? $context["selectedLocale"] : null))));
        echo ";
        
            \$('#config select').change(function() {
                \$(this).parent().submit();
            });
            
            ";
        // line 14
        if (((isset($context["isWriteable"]) ? $context["isWriteable"] : null) === true)) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["configs"]) ? $context["configs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 62
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["config"]) ? $context["config"] : null), "html", null, true);
            echo "\"";
            if (((isset($context["config"]) ? $context["config"] : null) == (isset($context["selectedConfig"]) ? $context["selectedConfig"] : null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["config"]) ? $context["config"] : null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["domains"]) ? $context["domains"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 68
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["domain"]) ? $context["domain"] : null), "html", null, true);
            echo "\"";
            if (((isset($context["domain"]) ? $context["domain"] : null) == (isset($context["selectedDomain"]) ? $context["selectedDomain"] : null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["domain"]) ? $context["domain"] : null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 74
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : null), "html", null, true);
            echo "\"";
            if (((isset($context["locale"]) ? $context["locale"] : null) == (isset($context["selectedLocale"]) ? $context["selectedLocale"] : null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : null), "html", null, true);
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
        if (((isset($context["isWriteable"]) ? $context["isWriteable"] : null) === false)) {
            // line 80
            echo "    <div class=\"alert-message error\">
        The translation file \"<strong>";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : null), "html", null, true);
            echo "</strong>\" is not writable.
    </div>
    ";
        }
        // line 84
        echo "    
    ";
        // line 85
        if (("xliff" != (isset($context["format"]) ? $context["format"] : null))) {
            // line 86
            echo "    <div class=\"alert-message warning\">
        Due to limitations of the different loaders/dumpers, some features are unfortunately limited to the XLIFF format. 
        
        <br /><br />
        
        However, you can easily convert your existing translation files to the XLIFF format by running:<br />
        <code>php app/console translation:extract ";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["selectedLocale"]) ? $context["selectedLocale"] : null), "html", null, true);
            echo " --config=";
            echo twig_escape_filter($this->env, (isset($context["selectedConfig"]) ? $context["selectedConfig"] : null), "html", null, true);
            echo " --output-format=xliff</code>
    </div>
    ";
        }
        // line 95
        echo "
    <h2>Available Messages</h2>
    
    ";
        // line 98
        if ((!twig_test_empty((isset($context["newMessages"]) ? $context["newMessages"] : null)))) {
            // line 99
            echo "    <h3>New Messages</h3>
    ";
            // line 100
            $this->env->loadTemplate("JMSTranslationBundle:Translate:messages.html.twig")->display(array_merge($context, array("messages" => (isset($context["newMessages"]) ? $context["newMessages"] : null))));
            // line 101
            echo "    ";
        }
        // line 102
        echo "    
    ";
        // line 103
        if ((!twig_test_empty((isset($context["existingMessages"]) ? $context["existingMessages"] : null)))) {
            // line 104
            echo "    <h3>Existing Messages</h3>
    ";
            // line 105
            $this->env->loadTemplate("JMSTranslationBundle:Translate:messages.html.twig")->display(array_merge($context, array("messages" => (isset($context["existingMessages"]) ? $context["existingMessages"] : null))));
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
        return array (  237 => 106,  232 => 104,  222 => 100,  212 => 95,  194 => 85,  180 => 79,  23 => 1,  20 => 1,  124 => 51,  81 => 24,  84 => 29,  165 => 35,  114 => 48,  90 => 29,  118 => 41,  34 => 7,  76 => 5,  65 => 22,  113 => 37,  83 => 24,  198 => 76,  191 => 84,  185 => 81,  175 => 76,  153 => 59,  148 => 58,  139 => 55,  134 => 54,  129 => 53,  104 => 29,  97 => 57,  74 => 27,  77 => 25,  58 => 18,  53 => 11,  127 => 64,  70 => 14,  281 => 91,  276 => 8,  270 => 105,  234 => 98,  226 => 92,  223 => 91,  206 => 88,  197 => 86,  184 => 78,  160 => 74,  152 => 66,  100 => 58,  96 => 31,  37 => 7,  52 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 80,  177 => 70,  169 => 60,  140 => 56,  132 => 67,  128 => 39,  111 => 37,  107 => 37,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 107,  238 => 103,  235 => 105,  230 => 103,  227 => 102,  224 => 101,  221 => 77,  219 => 99,  217 => 98,  208 => 68,  204 => 92,  179 => 69,  159 => 61,  143 => 56,  135 => 54,  131 => 53,  119 => 31,  108 => 61,  102 => 44,  71 => 27,  67 => 20,  63 => 21,  59 => 22,  47 => 10,  38 => 8,  94 => 27,  89 => 28,  85 => 22,  79 => 27,  75 => 23,  68 => 22,  56 => 18,  50 => 10,  29 => 3,  87 => 21,  72 => 21,  55 => 18,  21 => 1,  26 => 12,  98 => 35,  93 => 29,  88 => 6,  78 => 21,  46 => 14,  27 => 5,  40 => 8,  44 => 9,  35 => 8,  31 => 4,  43 => 12,  41 => 8,  28 => 4,  201 => 87,  196 => 86,  183 => 82,  171 => 37,  166 => 62,  163 => 63,  158 => 61,  156 => 73,  151 => 70,  142 => 41,  138 => 54,  136 => 68,  123 => 43,  121 => 50,  117 => 44,  115 => 43,  105 => 38,  101 => 33,  91 => 53,  69 => 24,  66 => 22,  62 => 19,  49 => 14,  24 => 7,  32 => 4,  25 => 3,  22 => 3,  19 => 2,  209 => 82,  203 => 77,  199 => 67,  193 => 73,  189 => 73,  187 => 84,  182 => 80,  176 => 75,  173 => 67,  168 => 72,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 57,  144 => 63,  141 => 56,  133 => 47,  130 => 41,  125 => 44,  122 => 37,  116 => 49,  112 => 62,  109 => 36,  106 => 30,  103 => 59,  99 => 34,  95 => 25,  92 => 24,  86 => 25,  82 => 9,  80 => 25,  73 => 24,  64 => 20,  60 => 22,  57 => 19,  54 => 15,  51 => 15,  48 => 12,  45 => 9,  42 => 9,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
