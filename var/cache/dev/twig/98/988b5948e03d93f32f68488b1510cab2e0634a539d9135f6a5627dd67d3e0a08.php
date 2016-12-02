<?php

/* AppBundle:pruebas:index.html.twig */
class __TwigTemplate_cfb0c29a5fca23d34beb000ccc942072111429e661556c5b76d05286e4a03153 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AppBundle:pruebas:index.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4f8b8942186773d906a1329a45fd74dcec974d79ab418192ae5be8264f1f864 = $this->env->getExtension("native_profiler");
        $__internal_c4f8b8942186773d906a1329a45fd74dcec974d79ab418192ae5be8264f1f864->enter($__internal_c4f8b8942186773d906a1329a45fd74dcec974d79ab418192ae5be8264f1f864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pruebas:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4f8b8942186773d906a1329a45fd74dcec974d79ab418192ae5be8264f1f864->leave($__internal_c4f8b8942186773d906a1329a45fd74dcec974d79ab418192ae5be8264f1f864_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_8817c3f9aa4916ce2065d6092952e0b25b5b79c8a6a5de38c242a6cde57162cc = $this->env->getExtension("native_profiler");
        $__internal_8817c3f9aa4916ce2065d6092952e0b25b5b79c8a6a5de38c242a6cde57162cc->enter($__internal_8817c3f9aa4916ce2065d6092952e0b25b5b79c8a6a5de38c242a6cde57162cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "
    ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : $this->getContext($context, "texto")), "html", null, true);
        echo "
    <hr>
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fruta"]) ? $context["fruta"] : $this->getContext($context, "fruta")), "manzana", array()), "html", null, true);
        echo "
    ";
        // line 7
        if ((is_string($__internal_c032d4ba0fd5b4dbd6921dc3c567dfc9f5cb576df06ae85b29404aab4d5ecc6b = $this->getAttribute((isset($context["fruta"]) ? $context["fruta"] : $this->getContext($context, "fruta")), "pera", array())) && is_string($__internal_1a420fa9d69628cbfb0e87e9f6732486e0141916d6b01bdc669356b8525efab1 = "r") && ('' === $__internal_1a420fa9d69628cbfb0e87e9f6732486e0141916d6b01bdc669356b8525efab1 || 0 === strpos($__internal_c032d4ba0fd5b4dbd6921dc3c567dfc9f5cb576df06ae85b29404aab4d5ecc6b, $__internal_1a420fa9d69628cbfb0e87e9f6732486e0141916d6b01bdc669356b8525efab1)))) {
            // line 8
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fruta"]) ? $context["fruta"] : $this->getContext($context, "fruta")), "manzana", array()), "html", null, true);
            echo "
    ";
        }
        // line 10
        echo "    ";
        if ((is_string($__internal_b0df86be4ae047ae2c635bf3ff610262989e395b1f03a6c3a2c8f01650e3200a = $this->getAttribute((isset($context["fruta"]) ? $context["fruta"] : $this->getContext($context, "fruta")), "pera", array())) && is_string($__internal_2ff5f2cbebffdc8919dcd98dae8bd59dbf19574f2502d5db843a4e0582ca15aa = "a") && ('' === $__internal_2ff5f2cbebffdc8919dcd98dae8bd59dbf19574f2502d5db843a4e0582ca15aa || $__internal_2ff5f2cbebffdc8919dcd98dae8bd59dbf19574f2502d5db843a4e0582ca15aa === substr($__internal_b0df86be4ae047ae2c635bf3ff610262989e395b1f03a6c3a2c8f01650e3200a, -strlen($__internal_2ff5f2cbebffdc8919dcd98dae8bd59dbf19574f2502d5db843a4e0582ca15aa))))) {
            // line 11
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fruta"]) ? $context["fruta"] : $this->getContext($context, "fruta")), "manzana", array()), "html", null, true);
            echo "
        ";
        }
        // line 13
        echo "    ";
        // line 14
        echo "   
    ";
        // line 15
        $context["variable"] = "Hola Twig";
        // line 16
        echo "    <hr>
    ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["variable"]) ? $context["variable"] : $this->getContext($context, "variable")), "html", null, true);
        echo "
    <hr>
    ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos"))) > 0)) {
            // line 20
            echo "        <ul>
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 22
                echo "         <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "producto", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        </ul>
    ";
        }
        // line 26
        echo "    ";
        $context["fecha"] = twig_date_converter($this->env, "-7 Days", "Europe/Madrid");
        // line 27
        echo "    ";
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")));
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "AppBundle:pruebas:partial.html.twig");
        echo "
    ";
        // line 29
        echo twig_escape_filter($this->env, max(array(0 => 34, 1 => 45, 2 => 123, 3 => 3)), "html", null, true);
        echo "<br>
    ";
        // line 30
        echo twig_escape_filter($this->env, min(array(0 => 34, 1 => 45, 2 => 123, 3 => 3)), "html", null, true);
        echo "<br>
    ";
        // line 31
        echo twig_escape_filter($this->env, twig_random($this->env, 1000), "html", null, true);
        echo "<br>
    ";
        // line 32
        echo twig_escape_filter($this->env, twig_random($this->env, array(0 => "manzana", 1 => "pera", 2 => "otro")), "html", null, true);
        echo "
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 25, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 34
            echo "    ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "<br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8817c3f9aa4916ce2065d6092952e0b25b5b79c8a6a5de38c242a6cde57162cc->leave($__internal_8817c3f9aa4916ce2065d6092952e0b25b5b79c8a6a5de38c242a6cde57162cc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:pruebas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 34,  138 => 33,  134 => 32,  130 => 31,  126 => 30,  122 => 29,  118 => 28,  113 => 27,  110 => 26,  106 => 24,  95 => 22,  91 => 21,  88 => 20,  86 => 19,  81 => 17,  78 => 16,  76 => 15,  73 => 14,  71 => 13,  65 => 11,  62 => 10,  56 => 8,  54 => 7,  50 => 6,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block container %}*/
/*     {{parent()}}*/
/*     {{texto}}*/
/*     <hr>*/
/*     {{fruta.manzana}}*/
/*     {% if fruta.pera starts with "r" %}*/
/*         {{fruta.manzana}}*/
/*     {% endif %}*/
/*     {% if fruta.pera ends with "a" %}*/
/*     {{fruta.manzana}}*/
/*         {% endif %}*/
/*     {# comentarios de codigo #}*/
/*    */
/*     {% set variable = "Hola Twig"%}*/
/*     <hr>*/
/*     {{variable}}*/
/*     <hr>*/
/*     {% if productos|length > 0  %}*/
/*         <ul>*/
/*         {% for producto in productos %}*/
/*          <li>{{ producto.producto }}-{{producto.precio}}</li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*     {% endif %}*/
/*     {% set fecha = date("-7 Days","Europe/Madrid") %}*/
/*     {{ dump (fecha) }}*/
/*     {{include ('AppBundle:pruebas:partial.html.twig')}}*/
/*     {{ max([34,45,123,3])}}<br>*/
/*     {{ min([34,45,123,3])}}<br>*/
/*     {{ random(1000)}}<br>*/
/*     {{random(["manzana","pera","otro"]) }}*/
/*     {% for i in range(0,25,5) %}*/
/*     {{i}}<br>*/
/*     {% endfor %}*/
/* {% endblock %}*/
