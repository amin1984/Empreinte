<?php

/* QuizQzBundle:Response:index.html.twig */
class __TwigTemplate_64b78d5e4556a00ab62bacad0573f75ae781874a33fb8f732d86cbe80d598cf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Response list</h1>

    <table id=\"datatable\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
        <thead>
            <tr>
                
                <th>Call</th>
                <th>Content</th>
                <th>Attachement</th>
                <th>Question</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "callId", array()), "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "attachement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "questionId", array()), "id", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    
                    <li>
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("response_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("response_new");
        echo "\">
                Create a new entry
            </a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("question");
        echo "\">
                Back to the list of questions
            </a>
        </li>
    </ul>
     <script type=\"text/javascript\">
        
        \$(document).ready(function() {
            \$('#datatable').dataTable();
        } );

    </script>  
    ";
    }

    public function getTemplateName()
    {
        return "QuizQzBundle:Response:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  101 => 39,  94 => 34,  82 => 28,  74 => 23,  70 => 22,  66 => 21,  62 => 20,  59 => 19,  55 => 18,  39 => 4,  36 => 3,  11 => 1,);
    }
}
