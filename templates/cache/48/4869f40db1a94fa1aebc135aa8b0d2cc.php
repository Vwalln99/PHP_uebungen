<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/category_delete.html */
class __TwigTemplate_1e491a2aeae8e70ea2161fe88b81fdd4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/category_delete.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        return; yield '';
    }

    // line 3
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["description"] ?? null), "html", null, true);
        return; yield '';
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "<main class=\"container mx-auto p-10 flex flex-col items-center\">
    <form method=\"post\" action=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/category_delete/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\">
        <p class=\"text-blue-600 text-2xl mb-4\">You sure you want to delete this category?</p>
        <button type=\"submit\" class=\"bg-pink-600 text-white p-3 rounded-md w-1/3\">Yes</button>
        <button type=\"submit\" formaction=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/categories\" class=\"bg-blue-500 text-white p-3 rounded-md w-1/3\">No</button>
    </form>
</main>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/category_delete.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  86 => 10,  80 => 7,  74 => 6,  71 => 5,  67 => 4,  58 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'admin/layout.html'%}
{% block title %} {{ title }}{% endblock %}
{% block description %} {{ description }}{% endblock %}
{%block content%}
<main class=\"container mx-auto p-10 flex flex-col items-center\">
    <form method=\"post\" action=\"{{doc_root}}admin/category_delete/{{id}}\">
        <input type=\"hidden\" name=\"id\" value=\"{{id}}\">
        <p class=\"text-blue-600 text-2xl mb-4\">You sure you want to delete this category?</p>
        <button type=\"submit\" class=\"bg-pink-600 text-white p-3 rounded-md w-1/3\">Yes</button>
        <button type=\"submit\" formaction=\"{{doc_root}}admin/categories\" class=\"bg-blue-500 text-white p-3 rounded-md w-1/3\">No</button>
    </form>
</main>
{%endblock%}", "admin/category_delete.html", "C:\\xampp\\htdocs\\templates\\admin\\category_delete.html");
    }
}
