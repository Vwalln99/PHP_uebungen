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

/* admin/category.html */
class __TwigTemplate_7fdac41f4768535bd3deece22942116c extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/category.html", 1);
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
        yield "<main class=\"container w-auto mx-auto md:w-1/2 flex justify-center flex-col items-center p-5\">
    <form class=\"w-full grid\" action=\"category.php?id=";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\" method=\"POST\">
        <h2 class=\"text-3xl text-blue-500 mb-8\">";
        // line 7
        yield ((($context["id"] ?? null)) ? ("Edit") : ("New"));
        yield " Category</h2>
        ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 8)) {
            // line 9
            yield "            <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 9), "html", null, true);
            yield "</p>
        ";
        }
        // line 11
        yield "        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"name\">Name</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\" type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        yield "\">
            <span class=\"text-red-500\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 14), "html", null, true);
        yield "</span>
        </div>
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"description\">Description</label>
            <textarea class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\" id=\"description\" name=\"description\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 18), "html", null, true);
        yield "</textarea>
            <span class=\"text-red-500\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "description", [], "any", false, false, false, 19), "html", null, true);
        yield "</span>
        </div>
        <div class=\"p-4\">
            <input class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\" type=\"checkbox\" id=\"navigation\" name=\"navigation\" ";
        // line 22
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "navigation", [], "any", false, false, false, 22)) ? ("checked") : (""));
        yield ">
            <label class=\"ms-2 text-sm font-medium text-gray-900\" for=\"navigation\">Navigation</label>
        </div>
        <button type=\"submit\" class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\">Save</button>
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
        return "admin/category.html";
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
        return array (  115 => 22,  109 => 19,  105 => 18,  98 => 14,  94 => 13,  90 => 11,  84 => 9,  82 => 8,  78 => 7,  74 => 6,  71 => 5,  67 => 4,  58 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}
{% block title %} {{ title }}{% endblock %}
{% block description %} {{ description }}{% endblock %}
{% block content %}
<main class=\"container w-auto mx-auto md:w-1/2 flex justify-center flex-col items-center p-5\">
    <form class=\"w-full grid\" action=\"category.php?id={{ id }}\" method=\"POST\">
        <h2 class=\"text-3xl text-blue-500 mb-8\">{{ id ? 'Edit': 'New' }} Category</h2>
        {% if errors.issue %}
            <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">{{ errors.issue }}</p>
        {% endif %}
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"name\">Name</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\" type=\"text\" id=\"name\" name=\"name\" value=\"{{ category.name }}\">
            <span class=\"text-red-500\">{{ errors.name }}</span>
        </div>
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"description\">Description</label>
            <textarea class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\" id=\"description\" name=\"description\">{{ category.description }}</textarea>
            <span class=\"text-red-500\">{{ errors.description }}</span>
        </div>
        <div class=\"p-4\">
            <input class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\" type=\"checkbox\" id=\"navigation\" name=\"navigation\" {{ category.navigation ? 'checked' : '' }}>
            <label class=\"ms-2 text-sm font-medium text-gray-900\" for=\"navigation\">Navigation</label>
        </div>
        <button type=\"submit\" class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\">Save</button>
    </form>
</main>
{% endblock %}
", "admin/category.html", "C:\\xampp\\htdocs\\templates\\admin\\category.html");
    }
}
