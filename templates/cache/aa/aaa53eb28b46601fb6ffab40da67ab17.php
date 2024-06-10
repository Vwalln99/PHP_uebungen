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

/* admin/article_delete.html */
class __TwigTemplate_28c7fb2ae58a0c16303cf50382804675 extends Template
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
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "admin/article_delete.html", 1);
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
        yield "admin/article_delete.php?id=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\">
        <p class=\"text-blue-600 text-2xl mb-4\">You sure you want to delete this article?</p>
        <button type=\"submit\" formaction=\"articles.php\" class=\"bg-pink-600 text-white p-3 rounded-md w-1/3\">Yes</button>
        <button type=\"submit\" formaction=\"articles.php\" class=\"bg-blue-500 text-white p-3 rounded-md w-1/3\">No</button>
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
        return "admin/article_delete.html";
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
        return array (  80 => 7,  74 => 6,  71 => 5,  67 => 4,  58 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'layout.html'%}
{% block title %} {{ title }}{% endblock %}
{% block description %} {{ description }}{% endblock %}
{%block content%}
<main class=\"container mx-auto p-10 flex flex-col items-center\">
    <form method=\"post\" action=\"{{doc_root}}admin/article_delete.php?id={{id}}\">
        <input type=\"hidden\" name=\"id\" value=\"{{id}}\">
        <p class=\"text-blue-600 text-2xl mb-4\">You sure you want to delete this article?</p>
        <button type=\"submit\" formaction=\"articles.php\" class=\"bg-pink-600 text-white p-3 rounded-md w-1/3\">Yes</button>
        <button type=\"submit\" formaction=\"articles.php\" class=\"bg-blue-500 text-white p-3 rounded-md w-1/3\">No</button>
    </form>
</main>
{%endblock%}", "admin/article_delete.html", "C:\\xampp\\htdocs\\templates\\admin\\article_delete.html");
    }
}
