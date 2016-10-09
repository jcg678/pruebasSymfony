<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_18f4f81cf1a1b8a8d7a2db9cc063485d59fe2777d3b3fba2ec201b433f61051b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e105c5d89315703fd1ecc493d0b0e318945a8e672d88254a6d05e58fc2fb64e4 = $this->env->getExtension("native_profiler");
        $__internal_e105c5d89315703fd1ecc493d0b0e318945a8e672d88254a6d05e58fc2fb64e4->enter($__internal_e105c5d89315703fd1ecc493d0b0e318945a8e672d88254a6d05e58fc2fb64e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e105c5d89315703fd1ecc493d0b0e318945a8e672d88254a6d05e58fc2fb64e4->leave($__internal_e105c5d89315703fd1ecc493d0b0e318945a8e672d88254a6d05e58fc2fb64e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_52cc8d774964c0d11cabaa90c3d6873cd39996e045d6de8cb0a1521991e11c1a = $this->env->getExtension("native_profiler");
        $__internal_52cc8d774964c0d11cabaa90c3d6873cd39996e045d6de8cb0a1521991e11c1a->enter($__internal_52cc8d774964c0d11cabaa90c3d6873cd39996e045d6de8cb0a1521991e11c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_52cc8d774964c0d11cabaa90c3d6873cd39996e045d6de8cb0a1521991e11c1a->leave($__internal_52cc8d774964c0d11cabaa90c3d6873cd39996e045d6de8cb0a1521991e11c1a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5364108e8ab7ceb5009f3cb106c8138da4560af461d5a76e029d2b847726ac0f = $this->env->getExtension("native_profiler");
        $__internal_5364108e8ab7ceb5009f3cb106c8138da4560af461d5a76e029d2b847726ac0f->enter($__internal_5364108e8ab7ceb5009f3cb106c8138da4560af461d5a76e029d2b847726ac0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5364108e8ab7ceb5009f3cb106c8138da4560af461d5a76e029d2b847726ac0f->leave($__internal_5364108e8ab7ceb5009f3cb106c8138da4560af461d5a76e029d2b847726ac0f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c02ad36595a5288ec11302b85e179d1a324c9d83a7f37bec321823033c70febd = $this->env->getExtension("native_profiler");
        $__internal_c02ad36595a5288ec11302b85e179d1a324c9d83a7f37bec321823033c70febd->enter($__internal_c02ad36595a5288ec11302b85e179d1a324c9d83a7f37bec321823033c70febd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c02ad36595a5288ec11302b85e179d1a324c9d83a7f37bec321823033c70febd->leave($__internal_c02ad36595a5288ec11302b85e179d1a324c9d83a7f37bec321823033c70febd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
