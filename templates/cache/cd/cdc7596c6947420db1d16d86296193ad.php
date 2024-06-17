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

/* category.html */
class __TwigTemplate_7fe680bbd4aee1159f0ab037eec88ad3 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "category.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 2), "html", null, true);
        return; yield '';
    }

    // line 3
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 3), "html", null, true);
        return; yield '';
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "<aside class=\"flex, justify-center items-center flex-col p-8\">
    <h1 class=\"text-4xl text-blue-500 mb-8\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        yield "</h1>
    <p class=\"text-gray-500\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 7), "html", null, true);
        yield "</p>
</aside>
<main class=\"flex flex-wrap p-8\" id=\"content\">
   ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 11
            yield "        <article class=\"w-full p-4 flex justify-between flex-col sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4\">
            <a href=\"article/";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 12), "html", null, true);
            yield "\">
                ";
            // line 13
            if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 13)) {
                // line 14
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                yield "uploads/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 14), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "alt_text", [], "any", false, false, false, 14), "html", null, true);
                yield "\">
                ";
            } else {
                // line 16
                yield "                <img alt=\"No image \" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                yield "uploads/placeholder.jpg\">
                ";
            }
            // line 18
            yield "                <h2 class=\"text-blue-500 text-2xl pt-3 pb-1.5\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 18), "html", null, true);
            yield "</h2>
                <p class=\"text-gray-500 pb-2.5\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "summary", [], "any", false, false, false, 19), "html", null, true);
            yield "</p>
            </a>
            <p class=\"credit-text-xs\">
                Posted in <a class=\"text-pink-400\" href=\"category/";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category_id", [], "any", false, false, false, 22), "html", null, true);
            yield "\">
                    ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 23), "html", null, true);
            yield "
                </a>
                by <a class=\"text-pink-400\" href=\"user/";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 25), "html", null, true);
            yield "\">
                    ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 26), "html", null, true);
            yield "</a>
            </p>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "</main>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "category.html";
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
        return array (  145 => 30,  135 => 26,  131 => 25,  126 => 23,  122 => 22,  116 => 19,  111 => 18,  105 => 16,  95 => 14,  93 => 13,  89 => 12,  86 => 11,  82 => 10,  76 => 7,  72 => 6,  69 => 5,  65 => 4,  57 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'layout.html'%}
{%block title%}{{category.name}}{%endblock%}
{%block description%}{{category.description}}{%endblock%}
{%block content%}
<aside class=\"flex, justify-center items-center flex-col p-8\">
    <h1 class=\"text-4xl text-blue-500 mb-8\">{{category.name}}</h1>
    <p class=\"text-gray-500\">{{category.description}}</p>
</aside>
<main class=\"flex flex-wrap p-8\" id=\"content\">
   {%for article in articles%}
        <article class=\"w-full p-4 flex justify-between flex-col sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4\">
            <a href=\"article/{{article.id}}\">
                {%if article.image_file%}
                <img src=\"{{doc_root}}uploads/{{article.image_file}}\" alt=\"{{article.alt_text}}\">
                {%else%}
                <img alt=\"No image \" src=\"{{doc_root}}uploads/placeholder.jpg\">
                {%endif%}
                <h2 class=\"text-blue-500 text-2xl pt-3 pb-1.5\">{{article.title}}</h2>
                <p class=\"text-gray-500 pb-2.5\">{{article.summary}}</p>
            </a>
            <p class=\"credit-text-xs\">
                Posted in <a class=\"text-pink-400\" href=\"category/{{article.category_id}}\">
                    {{article.category}}
                </a>
                by <a class=\"text-pink-400\" href=\"user/{{user.id}}\">
                    {{article.author}}</a>
            </p>
        </article>
    {%endfor%}
</main>
{%endblock%}
", "category.html", "C:\\xampp\\htdocs\\templates\\category.html");
    }
}
