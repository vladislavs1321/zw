<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_e55c68db7c69d6bc705990c25b37435a1db51cc840f6d13cd4c718196afa76c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "editable")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('sonata_admin')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type"));
        // line 17
        if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
        }
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        echo "'}]\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "    ";
    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 29
            echo "            <span class=\"label label-success\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
        ";
        } else {
            // line 31
            echo "            <span class=\"label label-important\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
        ";
        }
        // line 33
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 104,  389 => 103,  377 => 99,  349 => 90,  332 => 85,  324 => 82,  287 => 68,  282 => 66,  276 => 64,  234 => 48,  231 => 47,  218 => 43,  12 => 34,  710 => 213,  704 => 210,  701 => 209,  699 => 208,  693 => 205,  683 => 204,  666 => 200,  660 => 198,  652 => 193,  649 => 192,  632 => 190,  615 => 189,  610 => 187,  605 => 186,  602 => 185,  593 => 180,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  527 => 167,  522 => 165,  507 => 157,  495 => 133,  477 => 127,  470 => 149,  464 => 147,  459 => 145,  450 => 141,  425 => 135,  411 => 126,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  385 => 116,  371 => 113,  352 => 91,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 96,  266 => 74,  244 => 65,  205 => 56,  200 => 55,  188 => 49,  178 => 45,  118 => 49,  306 => 141,  303 => 140,  300 => 139,  286 => 80,  280 => 131,  274 => 77,  263 => 55,  236 => 109,  216 => 42,  70 => 29,  170 => 55,  194 => 53,  181 => 80,  161 => 71,  694 => 412,  685 => 406,  680 => 403,  678 => 202,  668 => 395,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 184,  592 => 351,  585 => 347,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 330,  542 => 321,  538 => 319,  526 => 310,  518 => 307,  514 => 306,  509 => 158,  504 => 156,  492 => 295,  486 => 292,  481 => 290,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  439 => 260,  429 => 255,  422 => 134,  420 => 127,  415 => 247,  396 => 234,  383 => 101,  366 => 210,  361 => 208,  335 => 86,  331 => 187,  326 => 83,  304 => 86,  291 => 169,  272 => 158,  267 => 156,  242 => 113,  186 => 38,  152 => 63,  114 => 50,  104 => 43,  76 => 33,  321 => 91,  318 => 80,  316 => 89,  288 => 81,  284 => 67,  279 => 65,  275 => 103,  256 => 121,  250 => 93,  232 => 136,  222 => 81,  215 => 78,  191 => 69,  153 => 49,  150 => 58,  110 => 41,  553 => 186,  550 => 326,  548 => 173,  541 => 180,  537 => 178,  531 => 312,  525 => 166,  520 => 170,  516 => 169,  513 => 160,  511 => 167,  506 => 166,  502 => 155,  499 => 154,  496 => 161,  489 => 131,  483 => 129,  479 => 153,  475 => 152,  462 => 146,  448 => 140,  443 => 138,  424 => 254,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  399 => 116,  391 => 117,  388 => 112,  386 => 111,  375 => 106,  372 => 105,  354 => 92,  348 => 100,  346 => 102,  342 => 88,  325 => 93,  313 => 90,  310 => 89,  308 => 88,  302 => 73,  296 => 82,  292 => 135,  255 => 74,  237 => 86,  184 => 47,  155 => 53,  146 => 47,  126 => 25,  124 => 49,  270 => 4,  253 => 148,  233 => 62,  212 => 74,  210 => 75,  206 => 71,  198 => 66,  192 => 88,  185 => 86,  180 => 36,  175 => 33,  172 => 51,  167 => 48,  160 => 59,  137 => 59,  90 => 38,  65 => 29,  129 => 56,  97 => 41,  84 => 36,  77 => 33,  358 => 106,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 92,  319 => 92,  315 => 79,  301 => 117,  299 => 72,  293 => 70,  289 => 112,  281 => 105,  277 => 78,  271 => 59,  265 => 126,  262 => 105,  260 => 70,  257 => 149,  251 => 67,  248 => 116,  239 => 97,  228 => 83,  225 => 58,  213 => 126,  211 => 81,  202 => 68,  197 => 54,  174 => 64,  165 => 52,  148 => 64,  134 => 59,  127 => 32,  113 => 42,  53 => 18,  34 => 18,  23 => 12,  100 => 43,  81 => 36,  58 => 23,  20 => 11,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 134,  435 => 258,  430 => 130,  427 => 136,  423 => 142,  413 => 134,  409 => 132,  407 => 242,  402 => 130,  398 => 129,  393 => 114,  387 => 122,  384 => 121,  381 => 115,  379 => 119,  374 => 98,  368 => 96,  365 => 95,  362 => 94,  360 => 109,  355 => 105,  341 => 131,  337 => 87,  322 => 101,  314 => 99,  312 => 143,  309 => 76,  305 => 74,  298 => 173,  294 => 83,  285 => 111,  283 => 79,  278 => 86,  268 => 58,  264 => 2,  258 => 81,  252 => 80,  247 => 66,  241 => 77,  229 => 73,  220 => 57,  214 => 99,  177 => 61,  169 => 74,  140 => 53,  132 => 57,  128 => 47,  107 => 40,  61 => 27,  273 => 96,  269 => 75,  254 => 102,  243 => 89,  240 => 50,  238 => 139,  235 => 63,  230 => 61,  227 => 46,  224 => 45,  221 => 67,  219 => 101,  217 => 79,  208 => 124,  204 => 73,  179 => 107,  159 => 51,  143 => 26,  135 => 45,  119 => 44,  102 => 43,  71 => 31,  67 => 19,  63 => 25,  59 => 27,  87 => 38,  21 => 12,  38 => 19,  31 => 16,  26 => 15,  25 => 13,  28 => 17,  94 => 40,  89 => 34,  85 => 36,  75 => 31,  68 => 27,  56 => 26,  24 => 14,  201 => 72,  196 => 65,  183 => 37,  171 => 102,  166 => 100,  163 => 60,  158 => 75,  156 => 68,  151 => 63,  142 => 61,  138 => 46,  136 => 58,  121 => 51,  117 => 49,  105 => 44,  91 => 39,  62 => 28,  49 => 17,  19 => 11,  93 => 39,  88 => 37,  78 => 26,  46 => 22,  44 => 19,  27 => 14,  79 => 34,  72 => 30,  69 => 31,  47 => 20,  40 => 20,  37 => 19,  22 => 12,  246 => 51,  157 => 58,  145 => 53,  139 => 51,  131 => 48,  123 => 52,  120 => 48,  115 => 47,  111 => 41,  108 => 45,  101 => 37,  98 => 36,  96 => 40,  83 => 32,  74 => 29,  66 => 26,  55 => 12,  52 => 23,  50 => 21,  43 => 20,  41 => 20,  35 => 20,  32 => 16,  29 => 15,  209 => 96,  203 => 39,  199 => 67,  193 => 73,  189 => 61,  187 => 87,  182 => 85,  176 => 82,  173 => 42,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 62,  147 => 69,  144 => 33,  141 => 67,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 43,  112 => 109,  109 => 45,  106 => 45,  103 => 38,  99 => 41,  95 => 40,  92 => 35,  86 => 33,  82 => 35,  80 => 31,  73 => 32,  64 => 25,  60 => 24,  57 => 23,  54 => 22,  51 => 23,  48 => 22,  45 => 21,  42 => 18,  39 => 17,  36 => 16,  33 => 15,  30 => 2,);
    }
}
