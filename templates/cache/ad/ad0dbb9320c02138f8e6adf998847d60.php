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

/* admin/articles.html */
class __TwigTemplate_6b79737ee2f6b5e04cf8899d29b83e64 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/articles.html", 1);
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
        yield "<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
        <h1 class=\"text-4xl text-blue-500 mb-8\">Articles</h1>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/article\">Add new article</a></button>
    </header>
    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10 text-center\">
        <thead class=\"text-xl text-white uppercase bg-gray-50 dark:bg-gray-700\">
            <tr>
                <th class=\"px-6 py-3\">Image</th>
                <th class=\"px-6 py-3\">Title</th>
                <th class=\"px-6 py-3\">Created</th>
                <th class=\"px-6 py-3\">Category</th>
                <th class=\"px-6 py-3\">Published</th>
                <th class=\"px-6 py-3\">Edit</th>
                <th class=\"px-6 py-3\">Delete</th>
                <th class=\"px-6 py-3\">Comment</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            yield " <!--twig syntax foreach schleife--> 
                <tr class=\"bg-white border-b dark:bg-gray-800\">
                    <td>
                        <img src=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "uploads/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 27), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_alt", [], "any", false, false, false, 27), "html", null, true);
            yield "\">
                    </td>
                    <td class=\"px-6 py-4 font-medium text-white whitespace-nowrap\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                    <td class=\"px-6 py-4 font-medium text-white whitespace-normal\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "created", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                    <td class=\"px-6 py-4 font-medium text-white whitespace-normal\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                    <td class=\"px-6 py-4 font-medium text-white whitespace-normal\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "published", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                    <td class=\"px-6 py-4 font-medium text-white whitespace-normal\"><a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "admin/article/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 33), "html", null, true);
            yield "\">Edit</a></td>
                    <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-normal\"><a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "admin/article_delete/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 34), "html", null, true);
            yield "\">Delete</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "        </tbody>
    </table>
</main>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/articles.html";
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
        return array (  145 => 37,  134 => 34,  128 => 33,  124 => 32,  120 => 31,  116 => 30,  112 => 29,  103 => 27,  95 => 24,  76 => 8,  71 => 5,  67 => 4,  58 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'admin/layout.html'%}
{% block title %} {{ title }}{% endblock %}
{% block description %} {{ description }}{% endblock %}
{%block content%}
<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
        <h1 class=\"text-4xl text-blue-500 mb-8\">Articles</h1>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a href=\"{{doc_root}}admin/article\">Add new article</a></button>
    </header>
    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10 text-center\">
        <thead class=\"text-xl text-white uppercase bg-gray-50 dark:bg-gray-700\">
            <tr>
                <th class=\"px-6 py-3\">Image</th>
                <th class=\"px-6 py-3\">Title</th>
                <th class=\"px-6 py-3\">Created</th>
                <th class=\"px-6 py-3\">Category</th>
                <th class=\"px-6 py-3\">Published</th>
                <th class=\"px-6 py-3\">Edit</th>
                <th class=\"px-6 py-3\">Delete</th>
                <th class=\"px-6 py-3\">Comment</th>
            </tr>
        </thead>
        <tbody>
            {% for article in articles%} <!--twig syntax foreach schleife--> 
                <tr class=\"bg-white border-b dark:bg-gray-800\">
                    <td>
                        <img src=\"{{doc_root}}uploads/{{article.image_file}}\" alt=\"{{article.image_alt}}\">
                    </td>
                    <td class=\"px-6 py-4 font-medium text-white whitespace-nowrap\">{{article.title}}</td>
                    <td class=\"px-6 py-4 font-medium text-white whitespace-normal\">{{article.created}}</td>
                    <td class=\"px-6 py-4 font-medium text-white whitespace-normal\">{{article.category}}</td>
                    <td class=\"px-6 py-4 font-medium text-white whitespace-normal\">{{article.published}}</td>
                    <td class=\"px-6 py-4 font-medium text-white whitespace-normal\"><a href=\"{{doc_root}}admin/article/{{article.id}}\">Edit</a></td>
                    <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-normal\"><a href=\"{{doc_root}}admin/article_delete/{{article.id}}\">Delete</a></td>
                </tr>
            {%endfor%}
        </tbody>
    </table>
</main>
{%endblock%}", "admin/articles.html", "C:\\xampp\\htdocs\\templates\\admin\\articles.html");
    }
}
