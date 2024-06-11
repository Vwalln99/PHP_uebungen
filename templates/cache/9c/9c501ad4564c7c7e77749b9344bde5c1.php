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

/* admin/categories.html */
class __TwigTemplate_b7301ecdd76941450be906e4d6a3bf8d extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/categories.html", 1);
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
        ";
        // line 7
        if (($context["error"] ?? null)) {
            // line 8
            yield "            <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error"] ?? null), "html", null, true);
            yield "</p>
        ";
        }
        // line 10
        yield "        ";
        if (($context["success"] ?? null)) {
            // line 11
            yield "            <p class=\"error text-green-500 bg-green-200 p-5 rounded-md\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["success"] ?? null), "html", null, true);
            yield "</p>
        ";
        }
        // line 13
        yield "        <h1 class=\"text-4xl text-blue-500 mb-8\">Categories</h1>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a href=\"category.php\">Add a new category</a></button>
    </header>
    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10\">
        <thead class=\"text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700\">
            <tr>
                <th class=\"px-6 py-3\">Name</th>
                <th class=\"px-6 py-3\">Edit</th>
                <th class=\"px-6 py-3\">Delete</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 26
            yield "                <tr class=\"bg-white border-b dark:bg-gray-800\">
                    <td class=\"px-6 py-4 font-medium text-white whitespace-nowrap\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                    <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a href=\"category.php?id=";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "\">Edit</a></td>
                    <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\"><a href=\"category_delete.php?id=";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 29), "html", null, true);
            yield "\">Delete</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
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
        return "admin/categories.html";
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
        return array (  130 => 32,  121 => 29,  117 => 28,  113 => 27,  110 => 26,  106 => 25,  92 => 13,  86 => 11,  83 => 10,  77 => 8,  75 => 7,  71 => 5,  67 => 4,  58 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'admin/layout.html'%}
{% block title %} {{ title }}{% endblock %}
{% block description %} {{ description }}{% endblock %}
{%block content%}
<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
        {% if error %}
            <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">{{error}}</p>
        {%endif%}
        {%if success%}
            <p class=\"error text-green-500 bg-green-200 p-5 rounded-md\">{{success}}</p>
        {%endif%}
        <h1 class=\"text-4xl text-blue-500 mb-8\">Categories</h1>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a href=\"category.php\">Add a new category</a></button>
    </header>
    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10\">
        <thead class=\"text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700\">
            <tr>
                <th class=\"px-6 py-3\">Name</th>
                <th class=\"px-6 py-3\">Edit</th>
                <th class=\"px-6 py-3\">Delete</th>
            </tr>
        </thead>
        <tbody>
            {%for category in categories%}
                <tr class=\"bg-white border-b dark:bg-gray-800\">
                    <td class=\"px-6 py-4 font-medium text-white whitespace-nowrap\">{{category.name}}</td>
                    <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a href=\"category.php?id={{category.id}}\">Edit</a></td>
                    <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\"><a href=\"category_delete.php?id={{category.id}}\">Delete</a></td>
                </tr>
            {%endfor%}
        </tbody>
    </table>
</main>
{%endblock%}", "admin/categories.html", "C:\\xampp\\htdocs\\templates\\admin\\categories.html");
    }
}
