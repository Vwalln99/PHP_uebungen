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

/* article.html */
class __TwigTemplate_ff17dca8adbf565e81b63dd236806daa extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "article.html", 1);
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
        yield "<main class=\"flex flex-wrap container mx-auto\">
    <section>
        ";
        // line 7
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_file", [], "any", false, false, false, 7)) {
            // line 8
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "uploads/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_file", [], "any", false, false, false, 8), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "alt_text", [], "any", false, false, false, 8), "html", null, true);
            yield "\">
                ";
        } else {
            // line 10
            yield "                <img alt=\"No image \" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "uploads/placeholder.jpg\">
                ";
        }
        // line 12
        yield "    </section>
    <section>
        <h1 class=\"text-4xl text-blue-500 mb-4 mt-8\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 14), "html", null, true);
        yield "</h1>
        <div class=\"text-gray-500 mb-3\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "created", [], "any", false, false, false, 15), "d.M.Y"), "html", null, true);
        yield "</div>
        <div class=\"text-gray-500\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 16), "html", null, true);
        yield "</div>
        <p class=\"credit-text-xs mt-5 mb-5\">
            Posted in <a class=\"text-pink-400\" href=\"category/";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "category_id", [], "any", false, false, false, 18), "html", null, true);
        yield "\">
                ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "category", [], "any", false, false, false, 19), "html", null, true);
        yield "
            </a>
            by <a class=\"text-pink-400\" href=\"user/";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "user_id", [], "any", false, false, false, 21), "html", null, true);
        yield "\">
               ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 22), "html", null, true);
        yield "</a>
        </p>
    </section>
    ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 25) != 0)) {
            // line 26
            yield "    <section class=\"comments\">
        <h2 class=\"text-2xl text-blue-500 mb-4 mt-8\">Comments</h2>
        ";
            // line 28
            if (($context["comments"] ?? null)) {
                // line 29
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["comments"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 30
                    yield "        <div class=\"comment\">
            <div class=\"text-gray-500\">";
                    // line 31
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "created", [], "any", false, false, false, 31), "d M. Y"), "html", null, true);
                    yield "</div>
            <div class=\"text-gray-500 mb-5\">";
                    // line 32
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 32), "html", null, true);
                    yield "</div>
            ";
                    // line 33
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user_id", [], "any", false, false, false, 33) == CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 33))) {
                        // line 34
                        yield "            <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                        yield "add_comment/";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 34), "html", null, true);
                        yield "/?user_id=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 34), "html", null, true);
                        yield "/&comment_id=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 34), "html", null, true);
                        yield "\">Edit</a>
            ";
                    }
                    // line 36
                    yield "            <p class=\"credit text-xs mt-5 mb-5\">
                Posted by <a class=\"text-pink-400\" href=\"";
                    // line 37
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                    yield "user/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user_id", [], "any", false, false, false, 37), "html", null, true);
                    yield "\">
                ";
                    // line 38
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 38), "html", null, true);
                    yield "</a>
            </p>
        <hr/>
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                yield "        ";
            } else {
                // line 44
                yield "        <p>No comments yet.</p>
        ";
            }
            // line 46
            yield "    </section>
    <section>
    <form action=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "add_comment/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 48), "html", null, true);
            yield "/?user_id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 48), "html", null, true);
            yield "\" id=\"comment-form\" method=\"post\">
        <label for=\"comment\"></label>
        <textarea id=\"comment\" class=\"w-full p-2 mb-5 border\" name=\"comment\" rows=\"5\" placeholder=\"Add a comment\"></textarea>
        <button class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md\" type=\"submit\">Add Comment</button>
    </form>
    </section>
    ";
        }
        // line 55
        yield "</main>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "article.html";
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
        return array (  210 => 55,  196 => 48,  192 => 46,  188 => 44,  185 => 43,  174 => 38,  168 => 37,  165 => 36,  153 => 34,  151 => 33,  147 => 32,  143 => 31,  140 => 30,  135 => 29,  133 => 28,  129 => 26,  127 => 25,  121 => 22,  117 => 21,  112 => 19,  108 => 18,  103 => 16,  99 => 15,  95 => 14,  91 => 12,  85 => 10,  75 => 8,  73 => 7,  69 => 5,  65 => 4,  57 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'layout.html'%}
{%block title%}{{category.name}}{%endblock%}
{%block description%}{{category.description}}{%endblock%}
{%block content%}
<main class=\"flex flex-wrap container mx-auto\">
    <section>
        {%if article.image_file%}
                <img src=\"{{doc_root}}uploads/{{article.image_file}}\" alt=\"{{article.alt_text}}\">
                {%else%}
                <img alt=\"No image \" src=\"{{doc_root}}uploads/placeholder.jpg\">
                {%endif%}
    </section>
    <section>
        <h1 class=\"text-4xl text-blue-500 mb-4 mt-8\">{{article.title}}</h1>
        <div class=\"text-gray-500 mb-3\">{{article.created|date('d.M.Y')}}</div>
        <div class=\"text-gray-500\">{{article.content}}</div>
        <p class=\"credit-text-xs mt-5 mb-5\">
            Posted in <a class=\"text-pink-400\" href=\"category/{{article.category_id}}\">
                {{article.category}}
            </a>
            by <a class=\"text-pink-400\" href=\"user/{{article.user_id}}\">
               {{article.author}}</a>
        </p>
    </section>
    {% if (session.id != 0) %}
    <section class=\"comments\">
        <h2 class=\"text-2xl text-blue-500 mb-4 mt-8\">Comments</h2>
        {% if comments %}
        {% for comment in comments %}
        <div class=\"comment\">
            <div class=\"text-gray-500\">{{comment.created|date('d M. Y')}}</div>
            <div class=\"text-gray-500 mb-5\">{{comment.comment}}</div>
            {% if (comment.user_id == session.id) %}
            <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md\" href=\"{{doc_root}}add_comment/{{article.id}}/?user_id={{session.id}}/&comment_id={{comment.id}}\">Edit</a>
            {% endif %}
            <p class=\"credit text-xs mt-5 mb-5\">
                Posted by <a class=\"text-pink-400\" href=\"{{doc_root}}user/{{comment.user_id}}\">
                {{comment.author}}</a>
            </p>
        <hr/>
        </div>
        {% endfor %}
        {% else %}
        <p>No comments yet.</p>
        {% endif %}
    </section>
    <section>
    <form action=\"{{doc_root}}add_comment/{{article.id}}/?user_id={{session.id}}\" id=\"comment-form\" method=\"post\">
        <label for=\"comment\"></label>
        <textarea id=\"comment\" class=\"w-full p-2 mb-5 border\" name=\"comment\" rows=\"5\" placeholder=\"Add a comment\"></textarea>
        <button class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md\" type=\"submit\">Add Comment</button>
    </form>
    </section>
    {% endif %}
</main>
{% endblock %}", "article.html", "C:\\xampp\\htdocs\\templates\\article.html");
    }
}
