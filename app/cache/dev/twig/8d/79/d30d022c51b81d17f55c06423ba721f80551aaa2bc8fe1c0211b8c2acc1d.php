<?php

/* SonataAdminBundle:CRUD:base_history.html.twig */
class __TwigTemplate_8d79d30d022c51b81d17f55c06423ba721f80551aaa2bc8fe1c0211b8c2acc1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
    <div class=\"span5\">
        <table class=\"table\" id=\"revisions\">
            <thead>
                <tr>
                    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 37
            echo "                    <tr>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "history_revision_timestamp"), "method"));
            $template->display($context);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "username"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history_view_revision", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => array("revision" => $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"))), "method"), "html", null, true);
            echo "\" class=\"revision-link\" rel=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a></td>
                    </tr>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>
        </table>
    </div>
    <div id=\"revision-detail\" class=\"span7 revision-detail\">

    </div>

    <script>
        jQuery(document).ready(function() {

            jQuery('a.revision-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                jQuery('#revision-detail').html('');
                jQuery('table#revisions tbody tr').removeClass('current');
                jQuery(this).parent('').removeClass('current');

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  710 => 213,  704 => 210,  701 => 209,  699 => 208,  693 => 205,  683 => 204,  666 => 200,  660 => 198,  652 => 193,  649 => 192,  632 => 190,  615 => 189,  610 => 187,  605 => 186,  602 => 185,  593 => 180,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  527 => 167,  522 => 165,  507 => 157,  495 => 133,  477 => 127,  470 => 149,  464 => 147,  459 => 145,  450 => 141,  425 => 135,  411 => 126,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  385 => 116,  371 => 113,  352 => 104,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 96,  266 => 74,  244 => 65,  205 => 56,  200 => 55,  188 => 49,  178 => 45,  118 => 46,  306 => 141,  303 => 140,  300 => 139,  286 => 80,  280 => 131,  274 => 77,  263 => 125,  236 => 109,  216 => 100,  70 => 33,  170 => 55,  194 => 53,  181 => 80,  161 => 71,  694 => 412,  685 => 406,  680 => 403,  678 => 202,  668 => 395,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 184,  592 => 351,  585 => 347,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 330,  542 => 321,  538 => 319,  526 => 310,  518 => 307,  514 => 306,  509 => 158,  504 => 156,  492 => 295,  486 => 292,  481 => 290,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  439 => 260,  429 => 255,  422 => 134,  420 => 127,  415 => 247,  396 => 234,  383 => 224,  366 => 210,  361 => 208,  335 => 188,  331 => 187,  326 => 94,  304 => 86,  291 => 169,  272 => 158,  267 => 156,  242 => 113,  186 => 82,  152 => 38,  114 => 71,  104 => 18,  76 => 28,  321 => 91,  318 => 90,  316 => 89,  288 => 81,  284 => 106,  279 => 78,  275 => 103,  256 => 121,  250 => 93,  232 => 136,  222 => 81,  215 => 78,  191 => 69,  153 => 49,  150 => 48,  110 => 25,  553 => 186,  550 => 326,  548 => 173,  541 => 180,  537 => 178,  531 => 312,  525 => 166,  520 => 170,  516 => 169,  513 => 160,  511 => 167,  506 => 166,  502 => 155,  499 => 154,  496 => 161,  489 => 131,  483 => 129,  479 => 153,  475 => 152,  462 => 146,  448 => 140,  443 => 138,  424 => 254,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  399 => 116,  391 => 117,  388 => 112,  386 => 111,  375 => 106,  372 => 105,  354 => 102,  348 => 100,  346 => 102,  342 => 97,  325 => 93,  313 => 90,  310 => 89,  308 => 88,  302 => 84,  296 => 82,  292 => 135,  255 => 74,  237 => 86,  184 => 47,  155 => 53,  146 => 47,  126 => 55,  124 => 31,  270 => 4,  253 => 148,  233 => 62,  212 => 74,  210 => 75,  206 => 71,  198 => 66,  192 => 88,  185 => 86,  180 => 62,  175 => 43,  172 => 51,  167 => 48,  160 => 76,  137 => 59,  90 => 18,  65 => 30,  129 => 57,  97 => 33,  84 => 29,  77 => 13,  358 => 106,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 92,  319 => 92,  315 => 123,  301 => 117,  299 => 112,  293 => 109,  289 => 112,  281 => 105,  277 => 78,  271 => 76,  265 => 126,  262 => 105,  260 => 70,  257 => 149,  251 => 67,  248 => 116,  239 => 97,  228 => 83,  225 => 58,  213 => 126,  211 => 81,  202 => 68,  197 => 54,  174 => 64,  165 => 52,  148 => 64,  134 => 59,  127 => 32,  113 => 41,  53 => 22,  34 => 13,  100 => 36,  81 => 15,  58 => 23,  20 => 1,  23 => 11,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 134,  435 => 258,  430 => 130,  427 => 136,  423 => 142,  413 => 134,  409 => 132,  407 => 242,  402 => 130,  398 => 129,  393 => 114,  387 => 122,  384 => 121,  381 => 115,  379 => 119,  374 => 114,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 105,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 143,  309 => 117,  305 => 115,  298 => 173,  294 => 83,  285 => 111,  283 => 79,  278 => 86,  268 => 127,  264 => 2,  258 => 81,  252 => 80,  247 => 66,  241 => 77,  229 => 73,  220 => 57,  214 => 99,  177 => 61,  169 => 74,  140 => 55,  132 => 44,  128 => 58,  107 => 40,  61 => 28,  273 => 96,  269 => 75,  254 => 102,  243 => 89,  240 => 64,  238 => 139,  235 => 63,  230 => 61,  227 => 134,  224 => 103,  221 => 67,  219 => 101,  217 => 79,  208 => 124,  204 => 73,  179 => 107,  159 => 51,  143 => 48,  135 => 45,  119 => 40,  102 => 39,  71 => 32,  67 => 31,  63 => 30,  59 => 29,  87 => 17,  21 => 12,  38 => 18,  31 => 15,  26 => 12,  25 => 12,  28 => 14,  94 => 16,  89 => 17,  85 => 31,  75 => 21,  68 => 30,  56 => 21,  24 => 13,  201 => 72,  196 => 65,  183 => 82,  171 => 102,  166 => 100,  163 => 45,  158 => 75,  156 => 68,  151 => 63,  142 => 61,  138 => 46,  136 => 58,  121 => 29,  117 => 51,  105 => 26,  91 => 38,  62 => 24,  49 => 23,  19 => 11,  93 => 68,  88 => 37,  78 => 36,  46 => 19,  44 => 20,  27 => 14,  79 => 35,  72 => 198,  69 => 31,  47 => 18,  40 => 18,  37 => 20,  22 => 12,  246 => 99,  157 => 41,  145 => 60,  139 => 59,  131 => 43,  123 => 48,  120 => 47,  115 => 45,  111 => 41,  108 => 42,  101 => 40,  98 => 38,  96 => 31,  83 => 15,  74 => 26,  66 => 30,  55 => 25,  52 => 24,  50 => 23,  43 => 26,  41 => 19,  35 => 17,  32 => 15,  29 => 15,  209 => 96,  203 => 93,  199 => 67,  193 => 73,  189 => 61,  187 => 87,  182 => 85,  176 => 82,  173 => 42,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 62,  147 => 69,  144 => 33,  141 => 67,  133 => 55,  130 => 57,  125 => 42,  122 => 44,  116 => 39,  112 => 38,  109 => 37,  106 => 36,  103 => 41,  99 => 23,  95 => 37,  92 => 19,  86 => 43,  82 => 36,  80 => 14,  73 => 27,  64 => 25,  60 => 16,  57 => 26,  54 => 26,  51 => 14,  48 => 40,  45 => 18,  42 => 17,  39 => 21,  36 => 18,  33 => 16,  30 => 15,);
    }
}
