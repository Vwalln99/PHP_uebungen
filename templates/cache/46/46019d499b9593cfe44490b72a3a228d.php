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

/* user.html */
class __TwigTemplate_038577526ebc6eed63896949144532a4 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "user.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        return; yield '';
    }

    // line 4
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["description"] ?? null), "html", null, true);
        return; yield '';
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "<main class=\"container mx-auto mt-10 mb-10\">
    <section>
        <h1 class=\"text-3xl text-center\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "forename", [], "any", false, false, false, 9), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>
        <p class=\"text-center text-gray-500\">Joined: ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "joined", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
        ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "profile_pic", [], "any", false, false, false, 11)) {
            // line 12
            yield "        <div class=\"w-1/3 m-auto\">
            <img alt=\"Profile Picture\" class=\"mx-auto\" src=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "uploads/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "profile_pic", [], "any", false, false, false, 13), "html", null, true);
            yield "\">
        </div>
        ";
        } else {
            // line 16
            yield "        <div class=\"w-1/4 m-auto\">
            <img alt=\"No image available\" class=\"mx-auto\" src=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "uploads/placeholder.jpg\">
        </div>
        ";
        }
        // line 20
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 20) == CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 20))) {
            // line 21
            yield "        <div class=\"flex justify-center\">
            <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md m-2\" href=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "edit_user_profile.php\">
                Edit Profile</a>
            <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md m-2\" href=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "edit_article.php\">
                Add Article</a>
            <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md m-2\" href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "edit_profile_pic.php\">
                Edit Profile Picture</a>
        </div>
        ";
        }
        // line 30
        yield "    </section>
    <section class=\"flex flex-wrap p-8\">
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 33
            yield "            <article class=\"w-full p-4 flex justify-between flex-col sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4\">
                <a href=\"article/";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 34), "html", null, true);
            yield "\">
                    <img src=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "uploads/";
            (((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", true, true, false, 35) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 35)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 35), "html", null, true)) : (yield "blank.png"));
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 35), "html", null, true);
            yield "\">
                    <h2 class=\"text-blue-500 text-2xl pt-3 pb-1.5\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 36), "html", null, true);
            yield "</h2>
                    <p class=\"text-gray-500 pb-2.5\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "summary", [], "any", false, false, false, 37), "html", null, true);
            yield "</p>
                </a>
                <p class=\"credit-text-xs\">
                    Posted in <a class=\"text-pink-400\" href=\"category/";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category_id", [], "any", false, false, false, 40), "html", null, true);
            yield "\">
                        ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 41), "html", null, true);
            yield "
                    </a>
                    by <a class=\"text-pink-400\" href=\"user/";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "user_id", [], "any", false, false, false, 43), "html", null, true);
            yield "\">
                        ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 44), "html", null, true);
            yield "
                    </a>
                </p>
                ";
            // line 47
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 47) == CoreExtension::getAttribute($this->env, $this->source, $context["article"], "user_id", [], "any", false, false, false, 47))) {
                // line 48
                yield "                <p class=\"edit mt-4\">
                    <a class=\"text-white bg-pink-600 hover:bg-blue-600 p-2 rounded-md mt-2\" href=\"edit_article/";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 49), "html", null, true);
                yield "\">Edit</a>
                </p>
                ";
            }
            // line 52
            yield "            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "    </section>
</main>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user.html";
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
        return array (  198 => 54,  191 => 52,  185 => 49,  182 => 48,  180 => 47,  174 => 44,  170 => 43,  165 => 41,  161 => 40,  155 => 37,  151 => 36,  143 => 35,  139 => 34,  136 => 33,  132 => 32,  128 => 30,  121 => 26,  116 => 24,  111 => 22,  108 => 21,  105 => 20,  99 => 17,  96 => 16,  88 => 13,  85 => 12,  83 => 11,  79 => 10,  73 => 9,  69 => 7,  65 => 6,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}

{% block title %}{{ title }}{% endblock %}
{% block description %}{{ description }}{% endblock %}

{% block content %}
<main class=\"container mx-auto mt-10 mb-10\">
    <section>
        <h1 class=\"text-3xl text-center\">{{ user.forename }} {{ user.surname }}</h1>
        <p class=\"text-center text-gray-500\">Joined: {{ user.joined}}</p>
        {% if user.profile_pic %}
        <div class=\"w-1/3 m-auto\">
            <img alt=\"Profile Picture\" class=\"mx-auto\" src=\"{{doc_root}}uploads/{{user.profile_pic}}\">
        </div>
        {% else %}
        <div class=\"w-1/4 m-auto\">
            <img alt=\"No image available\" class=\"mx-auto\" src=\"{{doc_root}}uploads/placeholder.jpg\">
        </div>
        {% endif %}
        {% if session.id == user.id %}
        <div class=\"flex justify-center\">
            <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md m-2\" href=\"{{doc_root}}edit_user_profile.php\">
                Edit Profile</a>
            <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md m-2\" href=\"{{doc_root}}edit_article.php\">
                Add Article</a>
            <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md m-2\" href=\"{{doc_root}}edit_profile_pic.php\">
                Edit Profile Picture</a>
        </div>
        {% endif %}
    </section>
    <section class=\"flex flex-wrap p-8\">
        {% for article in articles %}
            <article class=\"w-full p-4 flex justify-between flex-col sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4\">
                <a href=\"article/{{ article.id }}\">
                    <img src=\"{{ doc_root }}uploads/{{ article.image_file ?? 'blank.png' }}\" alt=\"{{ article.image_file }}\">
                    <h2 class=\"text-blue-500 text-2xl pt-3 pb-1.5\">{{ article.title }}</h2>
                    <p class=\"text-gray-500 pb-2.5\">{{ article.summary }}</p>
                </a>
                <p class=\"credit-text-xs\">
                    Posted in <a class=\"text-pink-400\" href=\"category/{{ article.category_id }}\">
                        {{ article.category }}
                    </a>
                    by <a class=\"text-pink-400\" href=\"user/{{ article.user_id }}\">
                        {{ article.author }}
                    </a>
                </p>
                {%if (session.id == article.user_id)%}
                <p class=\"edit mt-4\">
                    <a class=\"text-white bg-pink-600 hover:bg-blue-600 p-2 rounded-md mt-2\" href=\"edit_article/{{article.id}}\">Edit</a>
                </p>
                {%endif%}
            </article>
        {% endfor %}
    </section>
</main>
{% endblock %}
", "user.html", "C:\\xampp\\htdocs\\templates\\user.html");
    }
}
