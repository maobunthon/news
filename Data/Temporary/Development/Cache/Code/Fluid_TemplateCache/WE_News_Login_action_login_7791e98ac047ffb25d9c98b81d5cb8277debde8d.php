<?php class FluidCache_WE_News_Login_action_login_7791e98ac047ffb25d9c98b81d5cb8277debde8d extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return 'AdminLayout';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Title
 */
public function section_768e0c1c69573fb588f61f1308a015c11468e05f(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return 'Login';
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['partial'] = 'FlashMessages';
$arguments1['section'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['optional'] = false;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '

	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments7 = array();
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments10 = array();
$arguments10['action'] = 'logout';
$arguments10['method'] = 'post';
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['controller'] = NULL;
$arguments10['package'] = NULL;
$arguments10['subpackage'] = NULL;
$arguments10['object'] = NULL;
$arguments10['section'] = '';
$arguments10['format'] = '';
$arguments10['additionalParams'] = array (
);
$arguments10['absolute'] = false;
$arguments10['addQueryString'] = false;
$arguments10['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments10['fieldNamePrefix'] = NULL;
$arguments10['actionUri'] = NULL;
$arguments10['objectName'] = NULL;
$arguments10['useParentRequest'] = false;
$arguments10['enctype'] = NULL;
$arguments10['name'] = NULL;
$arguments10['onreset'] = NULL;
$arguments10['onsubmit'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
				You login as "';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.name.firstName', $renderingContext);
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = 'UTF-8';
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());

$output12 .= !is_string($value15) && !(is_object($value15) && method_exists($value15, '__toString')) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments13['encoding'], $arguments13['doubleEncode']);

$output12 .= ' ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.name.lastName', $renderingContext);
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = 'UTF-8';
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output12 .= !is_string($value18) && !(is_object($value18) && method_exists($value18, '__toString')) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments16['encoding'], $arguments16['doubleEncode']);

$output12 .= '"
				<br>
				<input type="submit" value="Logout" tabindex="3" />
			';
return $output12;
};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper19->setArguments($arguments10);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output9 .= $viewHelper19->initializeArgumentsAndRender();

$output9 .= '
		';
return $output9;
};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper20->setArguments($arguments7);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output6 .= $viewHelper20->initializeArgumentsAndRender();

$output6 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments21 = array();
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
            <div class="col-md-offset-4 col-md-4">
                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments24 = array();
$arguments24['action'] = 'authenticate';
$arguments24['method'] = 'post';
$arguments24['name'] = 'loginform';
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['arguments'] = array (
);
$arguments24['controller'] = NULL;
$arguments24['package'] = NULL;
$arguments24['subpackage'] = NULL;
$arguments24['object'] = NULL;
$arguments24['section'] = '';
$arguments24['format'] = '';
$arguments24['additionalParams'] = array (
);
$arguments24['absolute'] = false;
$arguments24['addQueryString'] = false;
$arguments24['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments24['fieldNamePrefix'] = NULL;
$arguments24['actionUri'] = NULL;
$arguments24['objectName'] = NULL;
$arguments24['useParentRequest'] = false;
$arguments24['enctype'] = NULL;
$arguments24['onreset'] = NULL;
$arguments24['onsubmit'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
                    <h2 class="form-signin-heading">Please login</h2>
                    <div class="row">
                        <label for="username">Username</label>
                        <input type="logintext" id="username" class="form-control"
                               name="__authentication[TYPO3][Flow][Security][Authentication][Token][UsernamePassword][username]"
                               value="" tabindex="1" />
                    </div>
                    <div class="row">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control"
                               name="__authentication[TYPO3][Flow][Security][Authentication][Token][UsernamePassword][password]"
                               value="" tabindex="2" />
                    </div>
                    <div class="row">
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments27 = array();
$arguments27['action'] = 'new';
$arguments27['controller'] = 'User';
$arguments27['additionalAttributes'] = NULL;
$arguments27['data'] = NULL;
$arguments27['arguments'] = array (
);
$arguments27['package'] = NULL;
$arguments27['subpackage'] = NULL;
$arguments27['section'] = '';
$arguments27['format'] = '';
$arguments27['additionalParams'] = array (
);
$arguments27['addQueryString'] = false;
$arguments27['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments27['useParentRequest'] = false;
$arguments27['absolute'] = true;
$arguments27['class'] = NULL;
$arguments27['dir'] = NULL;
$arguments27['id'] = NULL;
$arguments27['lang'] = NULL;
$arguments27['style'] = NULL;
$arguments27['title'] = NULL;
$arguments27['accesskey'] = NULL;
$arguments27['tabindex'] = NULL;
$arguments27['onclick'] = NULL;
$arguments27['name'] = NULL;
$arguments27['rel'] = NULL;
$arguments27['rev'] = NULL;
$arguments27['target'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return 'Register';
};
$viewHelper29 = $self->getViewHelper('$viewHelper29', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper29->setArguments($arguments27);
$viewHelper29->setRenderingContext($renderingContext);
$viewHelper29->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output26 .= $viewHelper29->initializeArgumentsAndRender();

$output26 .= '
                        <input type="submit" value="Login" tabindex="3" />
                    </div>
                ';
return $output26;
};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper30->setArguments($arguments24);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output23 .= $viewHelper30->initializeArgumentsAndRender();

$output23 .= '
            </div>
            <div style="clear: both"></div>
		';
return $output23;
};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper31->setArguments($arguments21);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output6 .= $viewHelper31->initializeArgumentsAndRender();

$output6 .= '
	';
return $output6;
};
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments33 = array();
$arguments33['action'] = 'logout';
$arguments33['method'] = 'post';
$arguments33['additionalAttributes'] = NULL;
$arguments33['data'] = NULL;
$arguments33['arguments'] = array (
);
$arguments33['controller'] = NULL;
$arguments33['package'] = NULL;
$arguments33['subpackage'] = NULL;
$arguments33['object'] = NULL;
$arguments33['section'] = '';
$arguments33['format'] = '';
$arguments33['additionalParams'] = array (
);
$arguments33['absolute'] = false;
$arguments33['addQueryString'] = false;
$arguments33['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments33['fieldNamePrefix'] = NULL;
$arguments33['actionUri'] = NULL;
$arguments33['objectName'] = NULL;
$arguments33['useParentRequest'] = false;
$arguments33['enctype'] = NULL;
$arguments33['name'] = NULL;
$arguments33['onreset'] = NULL;
$arguments33['onsubmit'] = NULL;
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
				You login as "';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments36 = array();
$arguments36['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.name.firstName', $renderingContext);
$arguments36['keepQuotes'] = false;
$arguments36['encoding'] = 'UTF-8';
$arguments36['doubleEncode'] = true;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$value38 = ($arguments36['value'] !== NULL ? $arguments36['value'] : $renderChildrenClosure37());

$output35 .= !is_string($value38) && !(is_object($value38) && method_exists($value38, '__toString')) ? $value38 : htmlspecialchars($value38, ($arguments36['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments36['encoding'], $arguments36['doubleEncode']);

$output35 .= ' ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments39 = array();
$arguments39['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.name.lastName', $renderingContext);
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = 'UTF-8';
$arguments39['doubleEncode'] = true;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$value41 = ($arguments39['value'] !== NULL ? $arguments39['value'] : $renderChildrenClosure40());

$output35 .= !is_string($value41) && !(is_object($value41) && method_exists($value41, '__toString')) ? $value41 : htmlspecialchars($value41, ($arguments39['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments39['encoding'], $arguments39['doubleEncode']);

$output35 .= '"
				<br>
				<input type="submit" value="Logout" tabindex="3" />
			';
return $output35;
};
$viewHelper42 = $self->getViewHelper('$viewHelper42', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper42->setArguments($arguments33);
$viewHelper42->setRenderingContext($renderingContext);
$viewHelper42->setRenderChildrenClosure($renderChildrenClosure34);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output32 .= $viewHelper42->initializeArgumentsAndRender();

$output32 .= '
		';
return $output32;
};
$arguments4['__elseClosure'] = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
            <div class="col-md-offset-4 col-md-4">
                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments44 = array();
$arguments44['action'] = 'authenticate';
$arguments44['method'] = 'post';
$arguments44['name'] = 'loginform';
$arguments44['additionalAttributes'] = NULL;
$arguments44['data'] = NULL;
$arguments44['arguments'] = array (
);
$arguments44['controller'] = NULL;
$arguments44['package'] = NULL;
$arguments44['subpackage'] = NULL;
$arguments44['object'] = NULL;
$arguments44['section'] = '';
$arguments44['format'] = '';
$arguments44['additionalParams'] = array (
);
$arguments44['absolute'] = false;
$arguments44['addQueryString'] = false;
$arguments44['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments44['fieldNamePrefix'] = NULL;
$arguments44['actionUri'] = NULL;
$arguments44['objectName'] = NULL;
$arguments44['useParentRequest'] = false;
$arguments44['enctype'] = NULL;
$arguments44['onreset'] = NULL;
$arguments44['onsubmit'] = NULL;
$arguments44['class'] = NULL;
$arguments44['dir'] = NULL;
$arguments44['id'] = NULL;
$arguments44['lang'] = NULL;
$arguments44['style'] = NULL;
$arguments44['title'] = NULL;
$arguments44['accesskey'] = NULL;
$arguments44['tabindex'] = NULL;
$arguments44['onclick'] = NULL;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
                    <h2 class="form-signin-heading">Please login</h2>
                    <div class="row">
                        <label for="username">Username</label>
                        <input type="logintext" id="username" class="form-control"
                               name="__authentication[TYPO3][Flow][Security][Authentication][Token][UsernamePassword][username]"
                               value="" tabindex="1" />
                    </div>
                    <div class="row">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control"
                               name="__authentication[TYPO3][Flow][Security][Authentication][Token][UsernamePassword][password]"
                               value="" tabindex="2" />
                    </div>
                    <div class="row">
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments47 = array();
$arguments47['action'] = 'new';
$arguments47['controller'] = 'User';
$arguments47['additionalAttributes'] = NULL;
$arguments47['data'] = NULL;
$arguments47['arguments'] = array (
);
$arguments47['package'] = NULL;
$arguments47['subpackage'] = NULL;
$arguments47['section'] = '';
$arguments47['format'] = '';
$arguments47['additionalParams'] = array (
);
$arguments47['addQueryString'] = false;
$arguments47['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments47['useParentRequest'] = false;
$arguments47['absolute'] = true;
$arguments47['class'] = NULL;
$arguments47['dir'] = NULL;
$arguments47['id'] = NULL;
$arguments47['lang'] = NULL;
$arguments47['style'] = NULL;
$arguments47['title'] = NULL;
$arguments47['accesskey'] = NULL;
$arguments47['tabindex'] = NULL;
$arguments47['onclick'] = NULL;
$arguments47['name'] = NULL;
$arguments47['rel'] = NULL;
$arguments47['rev'] = NULL;
$arguments47['target'] = NULL;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return 'Register';
};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper49->setArguments($arguments47);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure48);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output46 .= $viewHelper49->initializeArgumentsAndRender();

$output46 .= '
                        <input type="submit" value="Login" tabindex="3" />
                    </div>
                ';
return $output46;
};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper50->setArguments($arguments44);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure45);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output43 .= $viewHelper50->initializeArgumentsAndRender();

$output43 .= '
            </div>
            <div style="clear: both"></div>
		';
return $output43;
};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper');
$viewHelper51->setArguments($arguments4);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper

$output0 .= $viewHelper51->initializeArgumentsAndRender();

$output0 .= '

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output52 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments53 = array();
$arguments53['name'] = 'AdminLayout';
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper55->setArguments($arguments53);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output52 .= $viewHelper55->initializeArgumentsAndRender();

$output52 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments56 = array();
$arguments56['name'] = 'Title';
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return 'Login';
};

$output52 .= '';

$output52 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments58 = array();
$arguments58['name'] = 'Content';
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '

	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments61 = array();
$arguments61['partial'] = 'FlashMessages';
$arguments61['section'] = NULL;
$arguments61['arguments'] = array (
);
$arguments61['optional'] = false;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper63 = $self->getViewHelper('$viewHelper63', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper63->setArguments($arguments61);
$viewHelper63->setRenderingContext($renderingContext);
$viewHelper63->setRenderChildrenClosure($renderChildrenClosure62);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output60 .= $viewHelper63->initializeArgumentsAndRender();

$output60 .= '

	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper
$arguments64 = array();
$arguments64['then'] = NULL;
$arguments64['else'] = NULL;
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments67 = array();
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments70 = array();
$arguments70['action'] = 'logout';
$arguments70['method'] = 'post';
$arguments70['additionalAttributes'] = NULL;
$arguments70['data'] = NULL;
$arguments70['arguments'] = array (
);
$arguments70['controller'] = NULL;
$arguments70['package'] = NULL;
$arguments70['subpackage'] = NULL;
$arguments70['object'] = NULL;
$arguments70['section'] = '';
$arguments70['format'] = '';
$arguments70['additionalParams'] = array (
);
$arguments70['absolute'] = false;
$arguments70['addQueryString'] = false;
$arguments70['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments70['fieldNamePrefix'] = NULL;
$arguments70['actionUri'] = NULL;
$arguments70['objectName'] = NULL;
$arguments70['useParentRequest'] = false;
$arguments70['enctype'] = NULL;
$arguments70['name'] = NULL;
$arguments70['onreset'] = NULL;
$arguments70['onsubmit'] = NULL;
$arguments70['class'] = NULL;
$arguments70['dir'] = NULL;
$arguments70['id'] = NULL;
$arguments70['lang'] = NULL;
$arguments70['style'] = NULL;
$arguments70['title'] = NULL;
$arguments70['accesskey'] = NULL;
$arguments70['tabindex'] = NULL;
$arguments70['onclick'] = NULL;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
				You login as "';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments73 = array();
$arguments73['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.name.firstName', $renderingContext);
$arguments73['keepQuotes'] = false;
$arguments73['encoding'] = 'UTF-8';
$arguments73['doubleEncode'] = true;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$value75 = ($arguments73['value'] !== NULL ? $arguments73['value'] : $renderChildrenClosure74());

$output72 .= !is_string($value75) && !(is_object($value75) && method_exists($value75, '__toString')) ? $value75 : htmlspecialchars($value75, ($arguments73['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments73['encoding'], $arguments73['doubleEncode']);

$output72 .= ' ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments76 = array();
$arguments76['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.name.lastName', $renderingContext);
$arguments76['keepQuotes'] = false;
$arguments76['encoding'] = 'UTF-8';
$arguments76['doubleEncode'] = true;
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$value78 = ($arguments76['value'] !== NULL ? $arguments76['value'] : $renderChildrenClosure77());

$output72 .= !is_string($value78) && !(is_object($value78) && method_exists($value78, '__toString')) ? $value78 : htmlspecialchars($value78, ($arguments76['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments76['encoding'], $arguments76['doubleEncode']);

$output72 .= '"
				<br>
				<input type="submit" value="Logout" tabindex="3" />
			';
return $output72;
};
$viewHelper79 = $self->getViewHelper('$viewHelper79', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper79->setArguments($arguments70);
$viewHelper79->setRenderingContext($renderingContext);
$viewHelper79->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output69 .= $viewHelper79->initializeArgumentsAndRender();

$output69 .= '
		';
return $output69;
};
$viewHelper80 = $self->getViewHelper('$viewHelper80', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper80->setArguments($arguments67);
$viewHelper80->setRenderingContext($renderingContext);
$viewHelper80->setRenderChildrenClosure($renderChildrenClosure68);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output66 .= $viewHelper80->initializeArgumentsAndRender();

$output66 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments81 = array();
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
            <div class="col-md-offset-4 col-md-4">
                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments84 = array();
$arguments84['action'] = 'authenticate';
$arguments84['method'] = 'post';
$arguments84['name'] = 'loginform';
$arguments84['additionalAttributes'] = NULL;
$arguments84['data'] = NULL;
$arguments84['arguments'] = array (
);
$arguments84['controller'] = NULL;
$arguments84['package'] = NULL;
$arguments84['subpackage'] = NULL;
$arguments84['object'] = NULL;
$arguments84['section'] = '';
$arguments84['format'] = '';
$arguments84['additionalParams'] = array (
);
$arguments84['absolute'] = false;
$arguments84['addQueryString'] = false;
$arguments84['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments84['fieldNamePrefix'] = NULL;
$arguments84['actionUri'] = NULL;
$arguments84['objectName'] = NULL;
$arguments84['useParentRequest'] = false;
$arguments84['enctype'] = NULL;
$arguments84['onreset'] = NULL;
$arguments84['onsubmit'] = NULL;
$arguments84['class'] = NULL;
$arguments84['dir'] = NULL;
$arguments84['id'] = NULL;
$arguments84['lang'] = NULL;
$arguments84['style'] = NULL;
$arguments84['title'] = NULL;
$arguments84['accesskey'] = NULL;
$arguments84['tabindex'] = NULL;
$arguments84['onclick'] = NULL;
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
                    <h2 class="form-signin-heading">Please login</h2>
                    <div class="row">
                        <label for="username">Username</label>
                        <input type="logintext" id="username" class="form-control"
                               name="__authentication[TYPO3][Flow][Security][Authentication][Token][UsernamePassword][username]"
                               value="" tabindex="1" />
                    </div>
                    <div class="row">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control"
                               name="__authentication[TYPO3][Flow][Security][Authentication][Token][UsernamePassword][password]"
                               value="" tabindex="2" />
                    </div>
                    <div class="row">
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments87 = array();
$arguments87['action'] = 'new';
$arguments87['controller'] = 'User';
$arguments87['additionalAttributes'] = NULL;
$arguments87['data'] = NULL;
$arguments87['arguments'] = array (
);
$arguments87['package'] = NULL;
$arguments87['subpackage'] = NULL;
$arguments87['section'] = '';
$arguments87['format'] = '';
$arguments87['additionalParams'] = array (
);
$arguments87['addQueryString'] = false;
$arguments87['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments87['useParentRequest'] = false;
$arguments87['absolute'] = true;
$arguments87['class'] = NULL;
$arguments87['dir'] = NULL;
$arguments87['id'] = NULL;
$arguments87['lang'] = NULL;
$arguments87['style'] = NULL;
$arguments87['title'] = NULL;
$arguments87['accesskey'] = NULL;
$arguments87['tabindex'] = NULL;
$arguments87['onclick'] = NULL;
$arguments87['name'] = NULL;
$arguments87['rel'] = NULL;
$arguments87['rev'] = NULL;
$arguments87['target'] = NULL;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return 'Register';
};
$viewHelper89 = $self->getViewHelper('$viewHelper89', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper89->setArguments($arguments87);
$viewHelper89->setRenderingContext($renderingContext);
$viewHelper89->setRenderChildrenClosure($renderChildrenClosure88);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output86 .= $viewHelper89->initializeArgumentsAndRender();

$output86 .= '
                        <input type="submit" value="Login" tabindex="3" />
                    </div>
                ';
return $output86;
};
$viewHelper90 = $self->getViewHelper('$viewHelper90', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper90->setArguments($arguments84);
$viewHelper90->setRenderingContext($renderingContext);
$viewHelper90->setRenderChildrenClosure($renderChildrenClosure85);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output83 .= $viewHelper90->initializeArgumentsAndRender();

$output83 .= '
            </div>
            <div style="clear: both"></div>
		';
return $output83;
};
$viewHelper91 = $self->getViewHelper('$viewHelper91', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper91->setArguments($arguments81);
$viewHelper91->setRenderingContext($renderingContext);
$viewHelper91->setRenderChildrenClosure($renderChildrenClosure82);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output66 .= $viewHelper91->initializeArgumentsAndRender();

$output66 .= '
	';
return $output66;
};
$arguments64['__thenClosure'] = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments93 = array();
$arguments93['action'] = 'logout';
$arguments93['method'] = 'post';
$arguments93['additionalAttributes'] = NULL;
$arguments93['data'] = NULL;
$arguments93['arguments'] = array (
);
$arguments93['controller'] = NULL;
$arguments93['package'] = NULL;
$arguments93['subpackage'] = NULL;
$arguments93['object'] = NULL;
$arguments93['section'] = '';
$arguments93['format'] = '';
$arguments93['additionalParams'] = array (
);
$arguments93['absolute'] = false;
$arguments93['addQueryString'] = false;
$arguments93['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments93['fieldNamePrefix'] = NULL;
$arguments93['actionUri'] = NULL;
$arguments93['objectName'] = NULL;
$arguments93['useParentRequest'] = false;
$arguments93['enctype'] = NULL;
$arguments93['name'] = NULL;
$arguments93['onreset'] = NULL;
$arguments93['onsubmit'] = NULL;
$arguments93['class'] = NULL;
$arguments93['dir'] = NULL;
$arguments93['id'] = NULL;
$arguments93['lang'] = NULL;
$arguments93['style'] = NULL;
$arguments93['title'] = NULL;
$arguments93['accesskey'] = NULL;
$arguments93['tabindex'] = NULL;
$arguments93['onclick'] = NULL;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '
				You login as "';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments96 = array();
$arguments96['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.name.firstName', $renderingContext);
$arguments96['keepQuotes'] = false;
$arguments96['encoding'] = 'UTF-8';
$arguments96['doubleEncode'] = true;
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$value98 = ($arguments96['value'] !== NULL ? $arguments96['value'] : $renderChildrenClosure97());

$output95 .= !is_string($value98) && !(is_object($value98) && method_exists($value98, '__toString')) ? $value98 : htmlspecialchars($value98, ($arguments96['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments96['encoding'], $arguments96['doubleEncode']);

$output95 .= ' ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments99 = array();
$arguments99['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.name.lastName', $renderingContext);
$arguments99['keepQuotes'] = false;
$arguments99['encoding'] = 'UTF-8';
$arguments99['doubleEncode'] = true;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$value101 = ($arguments99['value'] !== NULL ? $arguments99['value'] : $renderChildrenClosure100());

$output95 .= !is_string($value101) && !(is_object($value101) && method_exists($value101, '__toString')) ? $value101 : htmlspecialchars($value101, ($arguments99['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments99['encoding'], $arguments99['doubleEncode']);

$output95 .= '"
				<br>
				<input type="submit" value="Logout" tabindex="3" />
			';
return $output95;
};
$viewHelper102 = $self->getViewHelper('$viewHelper102', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper102->setArguments($arguments93);
$viewHelper102->setRenderingContext($renderingContext);
$viewHelper102->setRenderChildrenClosure($renderChildrenClosure94);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output92 .= $viewHelper102->initializeArgumentsAndRender();

$output92 .= '
		';
return $output92;
};
$arguments64['__elseClosure'] = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
            <div class="col-md-offset-4 col-md-4">
                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments104 = array();
$arguments104['action'] = 'authenticate';
$arguments104['method'] = 'post';
$arguments104['name'] = 'loginform';
$arguments104['additionalAttributes'] = NULL;
$arguments104['data'] = NULL;
$arguments104['arguments'] = array (
);
$arguments104['controller'] = NULL;
$arguments104['package'] = NULL;
$arguments104['subpackage'] = NULL;
$arguments104['object'] = NULL;
$arguments104['section'] = '';
$arguments104['format'] = '';
$arguments104['additionalParams'] = array (
);
$arguments104['absolute'] = false;
$arguments104['addQueryString'] = false;
$arguments104['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments104['fieldNamePrefix'] = NULL;
$arguments104['actionUri'] = NULL;
$arguments104['objectName'] = NULL;
$arguments104['useParentRequest'] = false;
$arguments104['enctype'] = NULL;
$arguments104['onreset'] = NULL;
$arguments104['onsubmit'] = NULL;
$arguments104['class'] = NULL;
$arguments104['dir'] = NULL;
$arguments104['id'] = NULL;
$arguments104['lang'] = NULL;
$arguments104['style'] = NULL;
$arguments104['title'] = NULL;
$arguments104['accesskey'] = NULL;
$arguments104['tabindex'] = NULL;
$arguments104['onclick'] = NULL;
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                    <h2 class="form-signin-heading">Please login</h2>
                    <div class="row">
                        <label for="username">Username</label>
                        <input type="logintext" id="username" class="form-control"
                               name="__authentication[TYPO3][Flow][Security][Authentication][Token][UsernamePassword][username]"
                               value="" tabindex="1" />
                    </div>
                    <div class="row">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control"
                               name="__authentication[TYPO3][Flow][Security][Authentication][Token][UsernamePassword][password]"
                               value="" tabindex="2" />
                    </div>
                    <div class="row">
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments107 = array();
$arguments107['action'] = 'new';
$arguments107['controller'] = 'User';
$arguments107['additionalAttributes'] = NULL;
$arguments107['data'] = NULL;
$arguments107['arguments'] = array (
);
$arguments107['package'] = NULL;
$arguments107['subpackage'] = NULL;
$arguments107['section'] = '';
$arguments107['format'] = '';
$arguments107['additionalParams'] = array (
);
$arguments107['addQueryString'] = false;
$arguments107['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments107['useParentRequest'] = false;
$arguments107['absolute'] = true;
$arguments107['class'] = NULL;
$arguments107['dir'] = NULL;
$arguments107['id'] = NULL;
$arguments107['lang'] = NULL;
$arguments107['style'] = NULL;
$arguments107['title'] = NULL;
$arguments107['accesskey'] = NULL;
$arguments107['tabindex'] = NULL;
$arguments107['onclick'] = NULL;
$arguments107['name'] = NULL;
$arguments107['rel'] = NULL;
$arguments107['rev'] = NULL;
$arguments107['target'] = NULL;
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return 'Register';
};
$viewHelper109 = $self->getViewHelper('$viewHelper109', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper109->setArguments($arguments107);
$viewHelper109->setRenderingContext($renderingContext);
$viewHelper109->setRenderChildrenClosure($renderChildrenClosure108);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output106 .= $viewHelper109->initializeArgumentsAndRender();

$output106 .= '
                        <input type="submit" value="Login" tabindex="3" />
                    </div>
                ';
return $output106;
};
$viewHelper110 = $self->getViewHelper('$viewHelper110', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper110->setArguments($arguments104);
$viewHelper110->setRenderingContext($renderingContext);
$viewHelper110->setRenderChildrenClosure($renderChildrenClosure105);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output103 .= $viewHelper110->initializeArgumentsAndRender();

$output103 .= '
            </div>
            <div style="clear: both"></div>
		';
return $output103;
};
$viewHelper111 = $self->getViewHelper('$viewHelper111', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper');
$viewHelper111->setArguments($arguments64);
$viewHelper111->setRenderingContext($renderingContext);
$viewHelper111->setRenderChildrenClosure($renderChildrenClosure65);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper

$output60 .= $viewHelper111->initializeArgumentsAndRender();

$output60 .= '

';
return $output60;
};

$output52 .= '';

$output52 .= '
';

return $output52;
}


}
#0             40597     