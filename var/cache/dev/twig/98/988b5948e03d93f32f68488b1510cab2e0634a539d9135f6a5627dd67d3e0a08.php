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
        $__internal_e77275021dd4438db7b22025790b1d1bb362e36856c827e9397b1836028d003c = $this->env->getExtension("native_profiler");
        $__internal_e77275021dd4438db7b22025790b1d1bb362e36856c827e9397b1836028d003c->enter($__internal_e77275021dd4438db7b22025790b1d1bb362e36856c827e9397b1836028d003c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pruebas:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e77275021dd4438db7b22025790b1d1bb362e36856c827e9397b1836028d003c->leave($__internal_e77275021dd4438db7b22025790b1d1bb362e36856c827e9397b1836028d003c_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_9b761ce939920f203d7a9a4d834c545d6f75b4e8b4e0ae4cc0cef6af7b26fefd = $this->env->getExtension("native_profiler");
        $__internal_9b761ce939920f203d7a9a4d834c545d6f75b4e8b4e0ae4cc0cef6af7b26fefd->enter($__internal_9b761ce939920f203d7a9a4d834c545d6f75b4e8b4e0ae4cc0cef6af7b26fefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        if ((is_string($__internal_5c74acae640731b613286b518517228fa4662fc8d94382b4ebb2abe58c27694a = $this->getAttribute((isset($context["fruta"]) ? $context["fruta"] : $this->getContext($context, "fruta")), "pera", array())) && is_string($__internal_6c41471568a29ce2c07cd1b1b90c2de810bab1efb805ddb2c1db61f8c9b8d9d0 = "r") && ('' === $__internal_6c41471568a29ce2c07cd1b1b90c2de810bab1efb805ddb2c1db61f8c9b8d9d0 || 0 === strpos($__internal_5c74acae640731b613286b518517228fa4662fc8d94382b4ebb2abe58c27694a, $__internal_6c41471568a29ce2c07cd1b1b90c2de810bab1efb805ddb2c1db61f8c9b8d9d0)))) {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fruta"]) ? $context["fruta"] : $this->getContext($context, "fruta")), "manzana", array()), "html", null, true);
            echo "
    ";
        }
        // line 10
        echo "    ";
        if ((is_string($__internal_4d6f51d269cf2daac8c8d7504d43ff18200575dd75057f3c77b6e26f25a4a350 = $this->getAttribute((isset($context["fruta"]) ? $context["fruta"] : $this->getContext($context, "fruta")), "pera", array())) && is_string($__internal_d5f73400412b4fe453f6fe6a78838329494dd9d6dc00b6a5860c8470afe56a65 = "a") && ('' === $__internal_d5f73400412b4fe453f6fe6a78838329494dd9d6dc00b6a5860c8470afe56a65 || $__internal_d5f73400412b4fe453f6fe6a78838329494dd9d6dc00b6a5860c8470afe56a65 === substr($__internal_4d6f51d269cf2daac8c8d7504d43ff18200575dd75057f3c77b6e26f25a4a350, -strlen($__internal_d5f73400412b4fe453f6fe6a78838329494dd9d6dc00b6a5860c8470afe56a65))))) {
            // line 11
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fruta"]) ? $context["fruta"] : $this->getContext($context, "fruta")), "manzana", array()), "html", null, true);
            echo "
    ";
        }
        // line 13
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
            echo "    <ul>
    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 22
                echo "     <li>";
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
            echo "    </ul>
    ";
        }
        
        $__internal_9b761ce939920f203d7a9a4d834c545d6f75b4e8b4e0ae4cc0cef6af7b26fefd->leave($__internal_9b761ce939920f203d7a9a4d834c545d6f75b4e8b4e0ae4cc0cef6af7b26fefd_prof);

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
        return array (  105 => 24,  94 => 22,  90 => 21,  87 => 20,  85 => 19,  80 => 17,  77 => 16,  75 => 15,  71 => 13,  65 => 11,  62 => 10,  56 => 8,  54 => 7,  50 => 6,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block container %}*/
/*     {{parent()}}*/
/*     {{texto}}*/
/*     <hr>*/
/*     {{fruta.manzana}}*/
/*     {% if fruta.pera starts with "r" %}*/
/*     {{fruta.manzana}}*/
/*     {% endif %}*/
/*     {% if fruta.pera ends with "a" %}*/
/*     {{fruta.manzana}}*/
/*     {% endif %}*/
/*     */
/*    */
/*     {% set variable = "Hola Twig"%}*/
/*     <hr>*/
/*     {{variable}}*/
/*     <hr>*/
/*     {% if productos|length > 0  %}*/
/*     <ul>*/
/*     {% for producto in productos %}*/
/*      <li>{{ producto.producto }}-{{producto.precio}}</li>*/
/*     {% endfor %}*/
/*     </ul>*/
/*     {% endif %}*/
/* {% endblock %}*/
