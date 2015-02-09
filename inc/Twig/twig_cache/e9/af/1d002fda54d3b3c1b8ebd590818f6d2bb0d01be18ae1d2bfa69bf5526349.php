<?php

/* includes/comments.twig */
class __TwigTemplate_e9af1d002fda54d3b3c1b8ebd590818f6d2bb0d01be18ae1d2bfa69bf5526349 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "post_password_required", array()) == false) && $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "comments_open", array()))) {
            // line 2
            echo "    <h3>Comments</h3>
    ";
            // line 3
            $context["comments"] = $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_comments", array(0 => array("post_id" => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_ID", array()), "status" => "approve")), "method");
            // line 4
            echo "    <section id=\"comments\">
        ";
            // line 5
            if ((!twig_test_empty((isset($context["comments"]) ? $context["comments"] : null)))) {
                // line 6
                echo "            <ol class=\"media-list\">
                ";
                // line 7
                echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_list_comments", array(0 => array("walker" => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "returnObject", array(0 => "twiggy_Walker_Comment"), "method")), 1 => (isset($context["comments"]) ? $context["comments"] : null)), "method");
                echo "
            </ol>
            ";
                // line 9
                if ((($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_comment_pages_count", array()) > 1) && $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_option", array(0 => "page_comments"), "method"))) {
                    // line 10
                    echo "                <nav>
                    <ul class=\"pager\">
                        ";
                    // line 12
                    if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_previous_comments_link", array())) {
                        // line 13
                        echo "                            <li class=\"previous\">";
                        echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "previous_comments_link", array(0 => "Older comments"), "method");
                        echo "</li>
                        ";
                    }
                    // line 15
                    echo "                        ";
                    if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_next_comments_link", array())) {
                        // line 16
                        echo "                            <li class=\"next\">";
                        echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "next_comments_link", array(0 => "Newer comments"), "method");
                        echo "</li>
                        ";
                    }
                    // line 18
                    echo "                    </ul>
                </nav>
            ";
                }
                // line 21
                echo "            ";
                if ((($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "comments_open", array()) == false) && $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "post_type_supports", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_type", array()), 1 => "comments"), "method"))) {
                    // line 22
                    echo "            <div class=\"alert alert-warning\">
                Comments Are Closed
            </div>
            ";
                }
                // line 26
                echo "        ";
            } elseif ((($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "comments_open", array()) == false) && $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "post_type_supports", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_type", array()), 1 => "comments"), "method"))) {
                // line 27
                echo "            <div class=\"alert alert-warning\">
                Comments Are Closed
            </div>
        ";
            } else {
                // line 31
                echo "            <h4>No Comments!</h4>
        ";
            }
            // line 33
            echo "    </section>
    <section id=\"respond\" class=\"well\">
        ";
            // line 35
            if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "comments_open", array())) {
                // line 36
                echo "            <h3>";
                echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "comment_form_title", array(0 => "Leave a Reply", 1 => "Leave a Reply to"), "method");
                echo "</h3>
            <p class=\"cancel-comment-reply\">";
                // line 37
                echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "cancel_comment_reply_link", array());
                echo "</p>
            ";
                // line 38
                if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_option", array(0 => "comment_registration"), "method") && ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_user_logged_in", array()) == false))) {
                    // line 39
                    echo "                <p>You must be <a href=\"";
                    echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_login_url", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_permalink", array(), "method")), "method");
                    echo "\">logged in</a> to post a comment.</p>
            ";
                } else {
                    // line 41
                    echo "                <form action=\"";
                    echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_option", array(0 => "siteurl"), "method");
                    echo "/wp-comments-post.php\" method=\"post\" id=\"commentform\">
                ";
                    // line 42
                    if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_user_logged_in", array())) {
                        // line 43
                        echo "                    ";
                        $context["userinfo"] = $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_get_current_user", array());
                        // line 44
                        echo "                    <p>
                        Logged in as <a href=\"";
                        // line 45
                        echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_option", array(0 => "siteurl"), "method");
                        echo "/wp-admin/profile.php\">";
                        echo $this->getAttribute((isset($context["userinfo"]) ? $context["userinfo"] : null), "display_name", array());
                        echo "</a> |
                        <a href=\"";
                        // line 46
                        echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_logout_url", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_permalink", array(), "method")), "method");
                        echo "\" title=\"Log out of this account\">Log Out</a>
                    </p>
                ";
                    } else {
                        // line 49
                        echo "                    ";
                        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_option", array(0 => "require_name_email"), "method") == true)) {
                            // line 50
                            echo "                        <div class=\"form-group\">
                            <label for=\"author\">Name required</label>
                            <input type=\"text\" class=\"form-control\" name=\"author\" id=\"author\" size=\"22\" aria-required=\"true\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\">Email (will not be published) required</label>
                            <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" size=\"22\" aria-required=\"true\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"url\">Website</label>
                            <input type=\"url\" class=\"form-control\" name=\"url\" id=\"url\" size=\"22\">
                        </div>
                    ";
                        } else {
                            // line 63
                            echo "                        <div class=\"form-group\">
                            <label for=\"author\">Name</label>
                            <input type=\"text\" class=\"form-control\" name=\"author\" id=\"author\" size=\"22\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\">Email (will not be published)</label>
                            <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" size=\"22\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"url\">Website</label>
                            <input type=\"url\" class=\"form-control\" name=\"url\" id=\"url\" size=\"22\">
                        </div>
                    ";
                        }
                        // line 76
                        echo "                ";
                    }
                    // line 77
                    echo "                    <div class=\"form-group\">
                        <label for=\"comment\">Comment</label>
                        <textarea name=\"comment\" id=\"comment\" class=\"form-control\" rows=\"5\" aria-required=\"true\"></textarea>
                    </div>
                    <p><input name=\"submit\" class=\"btn btn-primary\" type=\"submit\" id=\"submit\" value=\"Submit Comment\"></p>
                ";
                    // line 82
                    echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "comment_id_fields", array());
                    echo "
                ";
                    // line 83
                    echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "do_action", array(0 => "comment_form", 1 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_ID", array())), "method");
                    echo "
                </form>
            ";
                }
                // line 86
                echo "        ";
            }
            // line 87
            echo "    </section>
";
        }
    }

    public function getTemplateName()
    {
        return "includes/comments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 87,  190 => 86,  184 => 83,  180 => 82,  173 => 77,  170 => 76,  155 => 63,  140 => 50,  137 => 49,  131 => 46,  125 => 45,  122 => 44,  119 => 43,  117 => 42,  112 => 41,  106 => 39,  104 => 38,  100 => 37,  95 => 36,  93 => 35,  89 => 33,  85 => 31,  79 => 27,  76 => 26,  70 => 22,  67 => 21,  62 => 18,  56 => 16,  53 => 15,  47 => 13,  45 => 12,  41 => 10,  39 => 9,  34 => 7,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
