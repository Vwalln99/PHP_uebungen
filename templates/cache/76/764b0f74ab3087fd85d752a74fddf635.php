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

/* index.html */
class __TwigTemplate_ded684a1cadcaec6eead4124057bd8ea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        return; yield '';
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "<main class=\"flex flex-wrap p-8\" id=\"content\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 6
            yield "        <article class=\"w-full p-4 flex justify-between flex-col sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4\">
            <a href=\"article/";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 7), "html", null, true);
            yield "\">
                ";
            // line 8
            if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 8)) {
                // line 9
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                yield "uploads/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 9), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_alt", [], "any", false, false, false, 9), "html", null, true);
                yield "\">
                ";
            } else {
                // line 11
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                yield "uploads/placeholder.jpg\" alt=\"No image available\">
                ";
            }
            // line 13
            yield "                <h2 class=\"text-blue-500 text-2xl pt-3 pb-1.5\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 13), "html", null, true);
            yield "</h2>
                <p class=\"text-gray-500 pb-2.5\"> ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "summary", [], "any", false, false, false, 14), "html", null, true);
            yield "</p>
            </a>
            <p class=\"credit-text-xs\">
                Posted in <a class=\"text-pink-400\" href=\"category/";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category_id", [], "any", false, false, false, 17), "html", null, true);
            yield "\">
                    ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 18), "html", null, true);
            yield "
                </a>
                by <a class=\"text-pink-400\" href=\"user/";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "user_id", [], "any", false, false, false, 20), "html", null, true);
            yield "\">
                    ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 21), "html", null, true);
            yield "</a>
            </p>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "</main>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index.html";
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
        return array (  126 => 25,  116 => 21,  112 => 20,  107 => 18,  103 => 17,  97 => 14,  92 => 13,  86 => 11,  76 => 9,  74 => 8,  70 => 7,  67 => 6,  63 => 5,  60 => 4,  56 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{%block title%}{{title}}{%endblock%}
{%block content%}
<main class=\"flex flex-wrap p-8\" id=\"content\">
    {%for article in articles%}
        <article class=\"w-full p-4 flex justify-between flex-col sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4\">
            <a href=\"article/{{article.id}}\">
                {%if article.image_file%}
                <img src=\"{{doc_root}}uploads/{{article.image_file}}\" alt=\"{{article.image_alt}}\">
                {%else%}
                <img src=\"{{doc_root}}uploads/placeholder.jpg\" alt=\"No image available\">
                {%endif%}
                <h2 class=\"text-blue-500 text-2xl pt-3 pb-1.5\">{{article.title}}</h2>
                <p class=\"text-gray-500 pb-2.5\"> {{article.summary}}</p>
            </a>
            <p class=\"credit-text-xs\">
                Posted in <a class=\"text-pink-400\" href=\"category/{{ article.category_id}}\">
                    {{article.category}}
                </a>
                by <a class=\"text-pink-400\" href=\"user/{{article.user_id}}\">
                    {{article.author}}</a>
            </p>
        </article>
    {%endfor%}
</main>
{%endblock%}", "index.html", "C:\\xampp\\htdocs\\templates\\index.html");
    }
}
