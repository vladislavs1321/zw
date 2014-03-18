<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_08d8db6ed24f7b6ec6eeb55654970ccd5bf3ef7320ea534aac4d7c223c5cc434 extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 328,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  698 => 201,  677 => 199,  675 => 198,  671 => 196,  665 => 194,  661 => 191,  655 => 189,  651 => 280,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  608 => 223,  603 => 194,  596 => 189,  588 => 179,  584 => 174,  569 => 168,  566 => 167,  563 => 166,  521 => 154,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 129,  419 => 164,  416 => 163,  378 => 117,  367 => 339,  357 => 125,  350 => 327,  330 => 105,  297 => 77,  598 => 188,  594 => 187,  586 => 184,  575 => 170,  573 => 179,  558 => 172,  554 => 171,  545 => 169,  529 => 164,  524 => 162,  517 => 161,  485 => 143,  478 => 127,  473 => 140,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  418 => 113,  404 => 126,  401 => 86,  394 => 136,  382 => 127,  334 => 120,  320 => 115,  317 => 101,  307 => 82,  195 => 54,  392 => 120,  389 => 103,  377 => 99,  349 => 90,  332 => 85,  324 => 82,  287 => 68,  282 => 66,  276 => 64,  234 => 48,  231 => 47,  218 => 59,  12 => 34,  710 => 213,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  666 => 200,  660 => 198,  652 => 193,  649 => 273,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 185,  593 => 188,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  536 => 166,  533 => 156,  530 => 168,  527 => 167,  522 => 165,  507 => 157,  495 => 138,  477 => 127,  470 => 139,  464 => 147,  459 => 145,  450 => 141,  425 => 175,  411 => 129,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  385 => 116,  371 => 182,  352 => 123,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 119,  266 => 66,  244 => 65,  205 => 38,  200 => 55,  188 => 49,  178 => 28,  118 => 49,  306 => 286,  303 => 140,  300 => 78,  286 => 80,  280 => 131,  274 => 68,  263 => 55,  236 => 109,  216 => 42,  70 => 26,  170 => 55,  194 => 53,  181 => 29,  161 => 71,  694 => 412,  685 => 406,  680 => 200,  678 => 202,  668 => 195,  663 => 199,  658 => 190,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 190,  599 => 192,  592 => 351,  585 => 347,  581 => 182,  579 => 342,  577 => 341,  571 => 338,  567 => 175,  557 => 163,  542 => 321,  538 => 319,  526 => 310,  518 => 153,  514 => 152,  509 => 150,  504 => 148,  492 => 137,  486 => 292,  481 => 128,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  439 => 100,  429 => 255,  422 => 134,  420 => 127,  415 => 112,  396 => 141,  383 => 101,  366 => 210,  361 => 208,  335 => 86,  331 => 187,  326 => 83,  304 => 79,  291 => 75,  272 => 158,  267 => 156,  242 => 59,  186 => 51,  152 => 63,  114 => 44,  104 => 37,  76 => 28,  321 => 91,  318 => 80,  316 => 89,  288 => 81,  284 => 72,  279 => 70,  275 => 73,  256 => 61,  250 => 60,  232 => 136,  222 => 81,  215 => 78,  191 => 69,  153 => 62,  150 => 101,  110 => 42,  553 => 162,  550 => 161,  548 => 170,  541 => 168,  537 => 178,  531 => 312,  525 => 166,  520 => 170,  516 => 169,  513 => 160,  511 => 159,  506 => 149,  502 => 140,  499 => 139,  496 => 161,  489 => 136,  483 => 129,  479 => 153,  475 => 152,  462 => 108,  448 => 133,  443 => 132,  424 => 88,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  399 => 124,  391 => 117,  388 => 132,  386 => 119,  375 => 106,  372 => 105,  354 => 92,  348 => 100,  346 => 102,  342 => 88,  325 => 93,  313 => 90,  310 => 80,  308 => 287,  302 => 73,  296 => 77,  292 => 135,  255 => 71,  237 => 64,  184 => 30,  155 => 38,  146 => 99,  126 => 48,  124 => 52,  270 => 67,  253 => 148,  233 => 62,  212 => 74,  210 => 75,  206 => 58,  198 => 35,  192 => 53,  185 => 86,  180 => 49,  175 => 33,  172 => 22,  167 => 48,  160 => 59,  137 => 59,  90 => 37,  65 => 22,  129 => 49,  97 => 39,  84 => 27,  77 => 25,  358 => 106,  351 => 121,  347 => 134,  343 => 115,  338 => 130,  327 => 104,  323 => 116,  319 => 92,  315 => 79,  301 => 80,  299 => 72,  293 => 70,  289 => 74,  281 => 75,  277 => 78,  271 => 59,  265 => 126,  262 => 105,  260 => 63,  257 => 149,  251 => 67,  248 => 116,  239 => 97,  228 => 52,  225 => 58,  213 => 126,  211 => 81,  202 => 68,  197 => 54,  174 => 47,  165 => 281,  148 => 35,  134 => 59,  127 => 32,  113 => 40,  53 => 17,  34 => 18,  100 => 36,  81 => 26,  58 => 18,  20 => 1,  23 => 13,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 258,  430 => 130,  427 => 89,  423 => 166,  413 => 130,  409 => 98,  407 => 127,  402 => 130,  398 => 129,  393 => 114,  387 => 122,  384 => 130,  381 => 118,  379 => 126,  374 => 123,  368 => 96,  365 => 179,  362 => 178,  360 => 126,  355 => 329,  341 => 114,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 173,  294 => 83,  285 => 111,  283 => 79,  278 => 74,  268 => 58,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 49,  214 => 99,  177 => 48,  169 => 69,  140 => 97,  132 => 57,  128 => 47,  107 => 143,  61 => 23,  273 => 96,  269 => 75,  254 => 102,  243 => 89,  240 => 65,  238 => 57,  235 => 56,  230 => 61,  227 => 46,  224 => 51,  221 => 67,  219 => 101,  217 => 79,  208 => 124,  204 => 57,  179 => 72,  159 => 186,  143 => 98,  135 => 55,  119 => 93,  102 => 33,  71 => 13,  67 => 22,  63 => 21,  59 => 22,  87 => 33,  21 => 2,  38 => 6,  31 => 8,  26 => 3,  25 => 12,  28 => 6,  94 => 39,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  24 => 3,  201 => 56,  196 => 65,  183 => 50,  171 => 102,  166 => 100,  163 => 188,  158 => 75,  156 => 68,  151 => 61,  142 => 58,  138 => 49,  136 => 155,  121 => 51,  117 => 50,  105 => 41,  91 => 34,  62 => 21,  49 => 17,  19 => 1,  93 => 38,  88 => 33,  78 => 18,  46 => 13,  44 => 11,  27 => 7,  79 => 29,  72 => 27,  69 => 26,  47 => 15,  40 => 11,  37 => 6,  22 => 2,  246 => 66,  157 => 104,  145 => 59,  139 => 57,  131 => 153,  123 => 95,  120 => 46,  115 => 47,  111 => 40,  108 => 47,  101 => 43,  98 => 34,  96 => 35,  83 => 35,  74 => 56,  66 => 25,  55 => 38,  52 => 23,  50 => 16,  43 => 14,  41 => 13,  35 => 9,  32 => 7,  29 => 3,  209 => 96,  203 => 37,  199 => 67,  193 => 33,  189 => 32,  187 => 87,  182 => 85,  176 => 82,  173 => 71,  168 => 44,  164 => 72,  162 => 40,  154 => 103,  149 => 62,  147 => 52,  144 => 51,  141 => 67,  133 => 154,  130 => 57,  125 => 46,  122 => 45,  116 => 92,  112 => 47,  109 => 45,  106 => 44,  103 => 38,  99 => 91,  95 => 39,  92 => 28,  86 => 36,  82 => 33,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 14,  42 => 11,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
