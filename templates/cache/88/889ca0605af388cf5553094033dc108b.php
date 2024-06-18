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

/* edit_comment.html */
class __TwigTemplate_e74fe2956cd2441622411ed71924a0c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("layout.html", "edit_comment.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "
<main class=\"flex flex-wrap container mx-auto flex-col p-5\">
    <form action=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "add_comment/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "article_id", [], "any", false, false, false, 6), "html", null, true);
        yield "/?comment_id=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "id", [], "any", false, false, false, 6), "html", null, true);
        yield "&edit=1\" method=\"post\">
        <label for=\"comment\"></label>
        <textarea id=\"comment\" class=\"w-full p-2 mb-5 border\" name=\"comment\" rows=\"5\" placeholder=\"Add a comment\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "comment", [], "any", false, false, false, 8), "html", null, true);
        yield "</textarea>
        <button class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md\" type=\"submit\">Change Comment</button>
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
        return "edit_comment.html";
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
        return array (  64 => 8,  55 => 6,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'layout.html' %}

{%block content%}

<main class=\"flex flex-wrap container mx-auto flex-col p-5\">
    <form action=\"{{doc_root}}add_comment/{{comment.article_id}}/?comment_id={{comment.id}}&edit=1\" method=\"post\">
        <label for=\"comment\"></label>
        <textarea id=\"comment\" class=\"w-full p-2 mb-5 border\" name=\"comment\" rows=\"5\" placeholder=\"Add a comment\">{{comment.comment}}</textarea>
        <button class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md\" type=\"submit\">Change Comment</button>
    </form>
</main>

{%endblock%}", "edit_comment.html", "C:\\xampp\\htdocs\\templates\\edit_comment.html");
    }
}
