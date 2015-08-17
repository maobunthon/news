<?php class FluidCache_WE_News_News_action_new_98d9987dfcc67f33e9b05be8f141834209d0ee16 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return 'New news';
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<div class="col-md-offset-2 col-md-8">
		<p>Just fill out the following form to post a new news:</p>
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['action'] = 'create';
$arguments1['objectName'] = 'newNews';
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['controller'] = NULL;
$arguments1['package'] = NULL;
$arguments1['subpackage'] = NULL;
$arguments1['object'] = NULL;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['fieldNamePrefix'] = NULL;
$arguments1['actionUri'] = NULL;
$arguments1['useParentRequest'] = false;
$arguments1['enctype'] = NULL;
$arguments1['method'] = NULL;
$arguments1['name'] = NULL;
$arguments1['onreset'] = NULL;
$arguments1['onsubmit'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
			<label for="name">Title</label>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments4 = array();
$arguments4['property'] = 'title';
$arguments4['id'] = 'name';
$arguments4['class'] = 'form-control';
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['required'] = false;
$arguments4['type'] = 'text';
$arguments4['name'] = NULL;
$arguments4['value'] = NULL;
$arguments4['disabled'] = NULL;
$arguments4['maxlength'] = NULL;
$arguments4['readonly'] = NULL;
$arguments4['size'] = NULL;
$arguments4['placeholder'] = NULL;
$arguments4['autofocus'] = NULL;
$arguments4['errorClass'] = 'f3-form-error';
$arguments4['dir'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper6->initializeArgumentsAndRender();

$output3 .= '
			<label for="name">Image</label>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments7 = array();
$arguments7['property'] = 'image';
$arguments7['id'] = 'name';
$arguments7['class'] = 'form-control';
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['required'] = false;
$arguments7['type'] = 'text';
$arguments7['name'] = NULL;
$arguments7['value'] = NULL;
$arguments7['disabled'] = NULL;
$arguments7['maxlength'] = NULL;
$arguments7['readonly'] = NULL;
$arguments7['size'] = NULL;
$arguments7['placeholder'] = NULL;
$arguments7['autofocus'] = NULL;
$arguments7['errorClass'] = 'f3-form-error';
$arguments7['dir'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper9->initializeArgumentsAndRender();

$output3 .= '
			<label for="name">content</label>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextareaViewHelper
$arguments10 = array();
$arguments10['property'] = 'content';
$arguments10['id'] = 'name';
$arguments10['class'] = 'form-control';
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['name'] = NULL;
$arguments10['value'] = NULL;
$arguments10['rows'] = NULL;
$arguments10['cols'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['placeholder'] = NULL;
$arguments10['autofocus'] = NULL;
$arguments10['errorClass'] = 'f3-form-error';
$arguments10['required'] = false;
$arguments10['dir'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextareaViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextareaViewHelper

$output3 .= $viewHelper12->initializeArgumentsAndRender();

$output3 .= '
			<label for="category">Category:</label><br>

			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments13 = array();
$arguments13['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategories', $renderingContext);
$arguments13['as'] = 'category';
$arguments13['key'] = '';
$arguments13['reverse'] = false;
$arguments13['iteration'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
				<label>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.name', $renderingContext);
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = 'UTF-8';
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output15 .= !is_string($value18) && !(is_object($value18) && method_exists($value18, '__toString')) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments16['encoding'], $arguments16['doubleEncode']);

$output15 .= '</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\CheckboxViewHelper
$arguments19 = array();
$arguments19['property'] = 'categories';
$arguments19['id'] = 'category';
$arguments19['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.identity', $renderingContext);
// Rendering Boolean node
$arguments19['multiple'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['checked'] = NULL;
$arguments19['name'] = NULL;
$arguments19['disabled'] = NULL;
$arguments19['errorClass'] = 'f3-form-error';
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\CheckboxViewHelper');
$viewHelper21->setArguments($arguments19);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\CheckboxViewHelper

$output15 .= $viewHelper21->initializeArgumentsAndRender();

$output15 .= '
				<br>
			';
return $output15;
};

$output3 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output3 .= '
			<br>
			<label for="name">Status</label>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\CheckboxViewHelper
$arguments22 = array();
$arguments22['value'] = '1';
$arguments22['property'] = 'status';
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['checked'] = NULL;
$arguments22['multiple'] = NULL;
$arguments22['name'] = NULL;
$arguments22['disabled'] = NULL;
$arguments22['errorClass'] = 'f3-form-error';
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\CheckboxViewHelper');
$viewHelper24->setArguments($arguments22);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\CheckboxViewHelper

$output3 .= $viewHelper24->initializeArgumentsAndRender();

$output3 .= '

			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments25 = array();
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments26 = array();
$arguments26['date'] = 'now';
$arguments26['format'] = 'Y-m-d\\TH:i:sP';
$arguments26['forceLocale'] = NULL;
$arguments26['localeFormatType'] = NULL;
$arguments26['localeFormatLength'] = NULL;
$arguments26['cldrFormat'] = NULL;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper28->setArguments($arguments26);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments25['value'] = $viewHelper28->initializeArgumentsAndRender();
$arguments25['property'] = 'date';
$arguments25['id'] = 'date';
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['name'] = NULL;
$arguments25['class'] = NULL;
$arguments25['dir'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper30->setArguments($arguments25);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\HiddenViewHelper

$output3 .= $viewHelper30->initializeArgumentsAndRender();

$output3 .= '
			<br>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments31 = array();
$arguments31['value'] = 'Create';
$arguments31['class'] = 'btn btn-success';
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['name'] = NULL;
$arguments31['property'] = NULL;
$arguments31['disabled'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper33->setArguments($arguments31);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure32);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output3 .= $viewHelper33->initializeArgumentsAndRender();

$output3 .= '
		';
return $output3;
};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper34->setArguments($arguments1);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper34->initializeArgumentsAndRender();

$output0 .= '
	</div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output35 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments36 = array();
$arguments36['name'] = 'AdminLayout';
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper38->setArguments($arguments36);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output35 .= $viewHelper38->initializeArgumentsAndRender();

$output35 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments39 = array();
$arguments39['name'] = 'Title';
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return 'New news';
};

$output35 .= '';

$output35 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments41 = array();
$arguments41['name'] = 'Content';
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
	<div class="col-md-offset-2 col-md-8">
		<p>Just fill out the following form to post a new news:</p>
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments44 = array();
$arguments44['action'] = 'create';
$arguments44['objectName'] = 'newNews';
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
$arguments44['useParentRequest'] = false;
$arguments44['enctype'] = NULL;
$arguments44['method'] = NULL;
$arguments44['name'] = NULL;
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
			<label for="name">Title</label>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments47 = array();
$arguments47['property'] = 'title';
$arguments47['id'] = 'name';
$arguments47['class'] = 'form-control';
$arguments47['additionalAttributes'] = NULL;
$arguments47['data'] = NULL;
$arguments47['required'] = false;
$arguments47['type'] = 'text';
$arguments47['name'] = NULL;
$arguments47['value'] = NULL;
$arguments47['disabled'] = NULL;
$arguments47['maxlength'] = NULL;
$arguments47['readonly'] = NULL;
$arguments47['size'] = NULL;
$arguments47['placeholder'] = NULL;
$arguments47['autofocus'] = NULL;
$arguments47['errorClass'] = 'f3-form-error';
$arguments47['dir'] = NULL;
$arguments47['lang'] = NULL;
$arguments47['style'] = NULL;
$arguments47['title'] = NULL;
$arguments47['accesskey'] = NULL;
$arguments47['tabindex'] = NULL;
$arguments47['onclick'] = NULL;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper49->setArguments($arguments47);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure48);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output46 .= $viewHelper49->initializeArgumentsAndRender();

$output46 .= '
			<label for="name">Image</label>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments50 = array();
$arguments50['property'] = 'image';
$arguments50['id'] = 'name';
$arguments50['class'] = 'form-control';
$arguments50['additionalAttributes'] = NULL;
$arguments50['data'] = NULL;
$arguments50['required'] = false;
$arguments50['type'] = 'text';
$arguments50['name'] = NULL;
$arguments50['value'] = NULL;
$arguments50['disabled'] = NULL;
$arguments50['maxlength'] = NULL;
$arguments50['readonly'] = NULL;
$arguments50['size'] = NULL;
$arguments50['placeholder'] = NULL;
$arguments50['autofocus'] = NULL;
$arguments50['errorClass'] = 'f3-form-error';
$arguments50['dir'] = NULL;
$arguments50['lang'] = NULL;
$arguments50['style'] = NULL;
$arguments50['title'] = NULL;
$arguments50['accesskey'] = NULL;
$arguments50['tabindex'] = NULL;
$arguments50['onclick'] = NULL;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper52->setArguments($arguments50);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output46 .= $viewHelper52->initializeArgumentsAndRender();

$output46 .= '
			<label for="name">content</label>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextareaViewHelper
$arguments53 = array();
$arguments53['property'] = 'content';
$arguments53['id'] = 'name';
$arguments53['class'] = 'form-control';
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['name'] = NULL;
$arguments53['value'] = NULL;
$arguments53['rows'] = NULL;
$arguments53['cols'] = NULL;
$arguments53['disabled'] = NULL;
$arguments53['placeholder'] = NULL;
$arguments53['autofocus'] = NULL;
$arguments53['errorClass'] = 'f3-form-error';
$arguments53['required'] = false;
$arguments53['dir'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextareaViewHelper');
$viewHelper55->setArguments($arguments53);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextareaViewHelper

$output46 .= $viewHelper55->initializeArgumentsAndRender();

$output46 .= '
			<label for="category">Category:</label><br>

			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments56 = array();
$arguments56['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategories', $renderingContext);
$arguments56['as'] = 'category';
$arguments56['key'] = '';
$arguments56['reverse'] = false;
$arguments56['iteration'] = NULL;
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
				<label>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments59 = array();
$arguments59['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.name', $renderingContext);
$arguments59['keepQuotes'] = false;
$arguments59['encoding'] = 'UTF-8';
$arguments59['doubleEncode'] = true;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$value61 = ($arguments59['value'] !== NULL ? $arguments59['value'] : $renderChildrenClosure60());

$output58 .= !is_string($value61) && !(is_object($value61) && method_exists($value61, '__toString')) ? $value61 : htmlspecialchars($value61, ($arguments59['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments59['encoding'], $arguments59['doubleEncode']);

$output58 .= '</label>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\CheckboxViewHelper
$arguments62 = array();
$arguments62['property'] = 'categories';
$arguments62['id'] = 'category';
$arguments62['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.identity', $renderingContext);
// Rendering Boolean node
$arguments62['multiple'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
$arguments62['checked'] = NULL;
$arguments62['name'] = NULL;
$arguments62['disabled'] = NULL;
$arguments62['errorClass'] = 'f3-form-error';
$arguments62['class'] = NULL;
$arguments62['dir'] = NULL;
$arguments62['lang'] = NULL;
$arguments62['style'] = NULL;
$arguments62['title'] = NULL;
$arguments62['accesskey'] = NULL;
$arguments62['tabindex'] = NULL;
$arguments62['onclick'] = NULL;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper64 = $self->getViewHelper('$viewHelper64', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\CheckboxViewHelper');
$viewHelper64->setArguments($arguments62);
$viewHelper64->setRenderingContext($renderingContext);
$viewHelper64->setRenderChildrenClosure($renderChildrenClosure63);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\CheckboxViewHelper

$output58 .= $viewHelper64->initializeArgumentsAndRender();

$output58 .= '
				<br>
			';
return $output58;
};

$output46 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output46 .= '
			<br>
			<label for="name">Status</label>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\CheckboxViewHelper
$arguments65 = array();
$arguments65['value'] = '1';
$arguments65['property'] = 'status';
$arguments65['additionalAttributes'] = NULL;
$arguments65['data'] = NULL;
$arguments65['checked'] = NULL;
$arguments65['multiple'] = NULL;
$arguments65['name'] = NULL;
$arguments65['disabled'] = NULL;
$arguments65['errorClass'] = 'f3-form-error';
$arguments65['class'] = NULL;
$arguments65['dir'] = NULL;
$arguments65['id'] = NULL;
$arguments65['lang'] = NULL;
$arguments65['style'] = NULL;
$arguments65['title'] = NULL;
$arguments65['accesskey'] = NULL;
$arguments65['tabindex'] = NULL;
$arguments65['onclick'] = NULL;
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper67 = $self->getViewHelper('$viewHelper67', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\CheckboxViewHelper');
$viewHelper67->setArguments($arguments65);
$viewHelper67->setRenderingContext($renderingContext);
$viewHelper67->setRenderChildrenClosure($renderChildrenClosure66);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\CheckboxViewHelper

$output46 .= $viewHelper67->initializeArgumentsAndRender();

$output46 .= '

			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments68 = array();
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments69 = array();
$arguments69['date'] = 'now';
$arguments69['format'] = 'Y-m-d\\TH:i:sP';
$arguments69['forceLocale'] = NULL;
$arguments69['localeFormatType'] = NULL;
$arguments69['localeFormatLength'] = NULL;
$arguments69['cldrFormat'] = NULL;
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper71 = $self->getViewHelper('$viewHelper71', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper71->setArguments($arguments69);
$viewHelper71->setRenderingContext($renderingContext);
$viewHelper71->setRenderChildrenClosure($renderChildrenClosure70);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments68['value'] = $viewHelper71->initializeArgumentsAndRender();
$arguments68['property'] = 'date';
$arguments68['id'] = 'date';
$arguments68['additionalAttributes'] = NULL;
$arguments68['data'] = NULL;
$arguments68['name'] = NULL;
$arguments68['class'] = NULL;
$arguments68['dir'] = NULL;
$arguments68['lang'] = NULL;
$arguments68['style'] = NULL;
$arguments68['title'] = NULL;
$arguments68['accesskey'] = NULL;
$arguments68['tabindex'] = NULL;
$arguments68['onclick'] = NULL;
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper73 = $self->getViewHelper('$viewHelper73', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper73->setArguments($arguments68);
$viewHelper73->setRenderingContext($renderingContext);
$viewHelper73->setRenderChildrenClosure($renderChildrenClosure72);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\HiddenViewHelper

$output46 .= $viewHelper73->initializeArgumentsAndRender();

$output46 .= '
			<br>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments74 = array();
$arguments74['value'] = 'Create';
$arguments74['class'] = 'btn btn-success';
$arguments74['additionalAttributes'] = NULL;
$arguments74['data'] = NULL;
$arguments74['name'] = NULL;
$arguments74['property'] = NULL;
$arguments74['disabled'] = NULL;
$arguments74['dir'] = NULL;
$arguments74['id'] = NULL;
$arguments74['lang'] = NULL;
$arguments74['style'] = NULL;
$arguments74['title'] = NULL;
$arguments74['accesskey'] = NULL;
$arguments74['tabindex'] = NULL;
$arguments74['onclick'] = NULL;
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper76 = $self->getViewHelper('$viewHelper76', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper76->setArguments($arguments74);
$viewHelper76->setRenderingContext($renderingContext);
$viewHelper76->setRenderChildrenClosure($renderChildrenClosure75);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output46 .= $viewHelper76->initializeArgumentsAndRender();

$output46 .= '
		';
return $output46;
};
$viewHelper77 = $self->getViewHelper('$viewHelper77', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper77->setArguments($arguments44);
$viewHelper77->setRenderingContext($renderingContext);
$viewHelper77->setRenderChildrenClosure($renderChildrenClosure45);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output43 .= $viewHelper77->initializeArgumentsAndRender();

$output43 .= '
	</div>
';
return $output43;
};

$output35 .= '';

$output35 .= '
';

return $output35;
}


}
#0             28946     