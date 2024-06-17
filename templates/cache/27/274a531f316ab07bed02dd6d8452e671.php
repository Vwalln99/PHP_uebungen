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

/* admin/article.html */
class __TwigTemplate_51bf05d04d8567b75cfde432185ddc40 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/article.html", 1);
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
        yield "<main class=\"p-10\">
    <h2 class=\"text-3xl text-blue-500 mb-8 text-center\">";
        // line 6
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 6)) ? ("Edit ") : ("New "));
        yield "Article</h2>
    ";
        // line 7
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 7)) {
            // line 8
            yield "        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 8), "html", null, true);
            yield "</p>
    ";
        }
        // line 10
        yield "    <form action=\"article/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 10), "html", null, true);
        yield "\" method=\"POST\" enctype=\"multipart/form-data\" class=\"grid gap-6 mb-6 md:grid-cols-2 md:w-full\">
        <div>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"title\">Title</label>
            <input type=\"text\" id=\"title\" name=\"title\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 13), "html", null, true);
        yield "\" class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\">
            <span class=\"text-red-500\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "title", [], "any", false, false, false, 14), "html", null, true);
        yield "</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"summary\">Summary</label>
            <textarea id=\"summary\" name=\"summary\" class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "summary", [], "any", false, false, false, 16), "html", null, true);
        yield "</textarea>
            <span class=\"text-red-500\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "summary", [], "any", false, false, false, 17), "html", null, true);
        yield "</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"content\">Content</label>
            <textarea id=\"content\" rows=\"10\" name=\"content\" class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 19), "html", null, true);
        yield "</textarea>
            <span class=\"text-red-500\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 20), "html", null, true);
        yield "</span>
        </div>
        <div>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"category\">Category</label>
            <select id=\"category\" name=\"category\" class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">
                <option value=\"\">Select category</option>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 27
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 27), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 27) == CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "category_id", [], "any", false, false, false, 27))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "            </select>
            <span class=\"text-red-500\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "category", [], "any", false, false, false, 30), "html", null, true);
        yield "</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"user_id\">User</label>
            <select id=\"user_id\" name=\"user\" class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">
                <option value=\"\">Select user</option>
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 35
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 35) == CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "user_id", [], "any", false, false, false, 35))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "forename", [], "any", false, false, false, 35), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "surname", [], "any", false, false, false, 35), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "            </select>
            <span class=\"text-red-500\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "user", [], "any", false, false, false, 38), "html", null, true);
        yield "</span>
            ";
        // line 39
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_file", [], "any", false, false, false, 39)) {
            // line 40
            yield "                <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"image_file\">Image</label>
                <input type=\"file\" id=\"image_file\" accept=\"image/jpeg, image/png\" name=\"image_file\" class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\">
                <span class=\"text-red-500\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "image_file", [], "any", false, false, false, 42), "html", null, true);
            yield "</span>
            ";
        } else {
            // line 44
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "uploads/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_file", [], "any", false, false, false, 44), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_alt", [], "any", false, false, false, 44), "html", null, true);
            yield "\" class=\"w-full h-auto\" />
                <span>Alt Text: ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_alt", [], "any", false, false, false, 45), "html", null, true);
            yield "</span>
                <a href=\"alt-text-edit.php?id=";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 46), "html", null, true);
            yield "\" class=\"text-blue-500\">Edit Alt Text</a>
                <a href=\"img-delete.php?id=";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 47), "html", null, true);
            yield "\" class=\"text-red-500\">Delete Image</a>
            ";
        }
        // line 49
        yield "            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"image_alt\">Image Alt</label>
            <input type=\"text\" id=\"image_alt\" name=\"image_alt\" value=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_alt", [], "any", false, false, false, 50), "html", null, true);
        yield "\" class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\">
            <span class=\"text-red-500\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "image_alt", [], "any", false, false, false, 51), "html", null, true);
        yield "</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"published\">Published</label>
            <input type=\"checkbox\" id=\"published\" name=\"published\" ";
        // line 53
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "published", [], "any", false, false, false, 53)) ? ("checked") : (""));
        yield " class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500\">
        </div>
        <button type=\"submit\" class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\">Save</button>
    </form>
    
    <script>
        tinymce.init({
            selector: '#content',
            menubar: false,
            toolbar: \"bold italic underline link\",
            plugins: 'link',
            link_title: false
        });
    </script>
</main>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/article.html";
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
        return array (  222 => 53,  217 => 51,  213 => 50,  210 => 49,  205 => 47,  201 => 46,  197 => 45,  188 => 44,  183 => 42,  179 => 40,  177 => 39,  173 => 38,  170 => 37,  155 => 35,  151 => 34,  144 => 30,  141 => 29,  128 => 27,  124 => 26,  115 => 20,  111 => 19,  106 => 17,  102 => 16,  97 => 14,  93 => 13,  86 => 10,  80 => 8,  78 => 7,  74 => 6,  71 => 5,  67 => 4,  58 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}
{% block title %} {{ title }}{% endblock %}
{% block description %} {{ description }}{% endblock %}
{% block content %}
<main class=\"p-10\">
    <h2 class=\"text-3xl text-blue-500 mb-8 text-center\">{{ article.id ? 'Edit ' : 'New ' }}Article</h2>
    {% if errors.issue %}
        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">{{ errors.issue }}</p>
    {% endif %}
    <form action=\"article/{{ article.id }}\" method=\"POST\" enctype=\"multipart/form-data\" class=\"grid gap-6 mb-6 md:grid-cols-2 md:w-full\">
        <div>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"title\">Title</label>
            <input type=\"text\" id=\"title\" name=\"title\" value=\"{{ article.title }}\" class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\">
            <span class=\"text-red-500\">{{ errors.title }}</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"summary\">Summary</label>
            <textarea id=\"summary\" name=\"summary\" class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">{{ article.summary }}</textarea>
            <span class=\"text-red-500\">{{ errors.summary }}</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"content\">Content</label>
            <textarea id=\"content\" rows=\"10\" name=\"content\" class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">{{ article.content }}</textarea>
            <span class=\"text-red-500\">{{ errors.content }}</span>
        </div>
        <div>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"category\">Category</label>
            <select id=\"category\" name=\"category\" class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">
                <option value=\"\">Select category</option>
                {% for category in categories %}
                    <option value=\"{{ category.id }}\" {{ category.id == article.category_id ? 'selected' : '' }}>{{ category.name }}</option>
                {% endfor %}
            </select>
            <span class=\"text-red-500\">{{ errors.category }}</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"user_id\">User</label>
            <select id=\"user_id\" name=\"user\" class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">
                <option value=\"\">Select user</option>
                {% for user in users %}
                    <option value=\"{{ user.id }}\" {{ user.id == article.user_id ? 'selected' : '' }}>{{ user.forename }} {{ user.surname }}</option>
                {% endfor %}
            </select>
            <span class=\"text-red-500\">{{ errors.user }}</span>
            {% if not article.image_file %}
                <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"image_file\">Image</label>
                <input type=\"file\" id=\"image_file\" accept=\"image/jpeg, image/png\" name=\"image_file\" class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\">
                <span class=\"text-red-500\">{{ errors.image_file }}</span>
            {% else %}
                <img src=\"{{ doc_root }}uploads/{{ article.image_file }}\" alt=\"{{ article.image_alt }}\" class=\"w-full h-auto\" />
                <span>Alt Text: {{ article.image_alt }}</span>
                <a href=\"alt-text-edit.php?id={{ article.id }}\" class=\"text-blue-500\">Edit Alt Text</a>
                <a href=\"img-delete.php?id={{ article.id }}\" class=\"text-red-500\">Delete Image</a>
            {% endif %}
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"image_alt\">Image Alt</label>
            <input type=\"text\" id=\"image_alt\" name=\"image_alt\" value=\"{{ article.image_alt }}\" class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\">
            <span class=\"text-red-500\">{{ errors.image_alt }}</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"published\">Published</label>
            <input type=\"checkbox\" id=\"published\" name=\"published\" {{ article.published ? 'checked' : '' }} class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500\">
        </div>
        <button type=\"submit\" class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\">Save</button>
    </form>
    
    <script>
        tinymce.init({
            selector: '#content',
            menubar: false,
            toolbar: \"bold italic underline link\",
            plugins: 'link',
            link_title: false
        });
    </script>
</main>
{% endblock %}
", "admin/article.html", "C:\\xampp\\htdocs\\templates\\admin\\article.html");
    }
}
