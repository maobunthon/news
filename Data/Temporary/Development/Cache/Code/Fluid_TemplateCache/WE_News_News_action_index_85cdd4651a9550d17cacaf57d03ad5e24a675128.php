<?php class FluidCache_WE_News_News_action_index_85cdd4651a9550d17cacaf57d03ad5e24a675128 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return 'A list of news';
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<table class="table">
				<thead>
				<tr>
					<th width="400px">Title</th>
					<th width="150px">By</th>
					<th width="150px">On</th>
					<th width="50px">Status</th>
					<th colspan="2" class="text-center">Action</th>
				</tr>
				</thead>
				<tbody>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'newsList', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments4 = array();
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments7 = array();
$arguments7['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'newsList', $renderingContext);
$arguments7['as'] = 'news';
$arguments7['key'] = '';
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
							<tr>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments10 = array();
$arguments10['action'] = 'show';
// Rendering Array
$array11 = array();
$array11['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments10['arguments'] = $array11;
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['controller'] = NULL;
$arguments10['package'] = NULL;
$arguments10['subpackage'] = NULL;
$arguments10['section'] = '';
$arguments10['format'] = '';
$arguments10['additionalParams'] = array (
);
$arguments10['addQueryString'] = false;
$arguments10['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments10['useParentRequest'] = false;
$arguments10['absolute'] = true;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['name'] = NULL;
$arguments10['rel'] = NULL;
$arguments10['rev'] = NULL;
$arguments10['target'] = NULL;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.title', $renderingContext);
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = 'UTF-8';
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());
return !is_string($value15) && !(is_object($value15) && method_exists($value15, '__toString')) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments13['encoding'], $arguments13['doubleEncode']);
};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper16->setArguments($arguments10);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output9 .= $viewHelper16->initializeArgumentsAndRender();

$output9 .= '</td>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments17 = array();
$arguments17['action'] = 'show';
// Rendering Array
$array18 = array();
$array18['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments17['arguments'] = $array18;
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['controller'] = NULL;
$arguments17['package'] = NULL;
$arguments17['subpackage'] = NULL;
$arguments17['section'] = '';
$arguments17['format'] = '';
$arguments17['additionalParams'] = array (
);
$arguments17['addQueryString'] = false;
$arguments17['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments17['useParentRequest'] = false;
$arguments17['absolute'] = true;
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['name'] = NULL;
$arguments17['rel'] = NULL;
$arguments17['rev'] = NULL;
$arguments17['target'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments20 = array();
$arguments20['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.user.name', $renderingContext);
$arguments20['keepQuotes'] = false;
$arguments20['encoding'] = 'UTF-8';
$arguments20['doubleEncode'] = true;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$value22 = ($arguments20['value'] !== NULL ? $arguments20['value'] : $renderChildrenClosure21());
return !is_string($value22) && !(is_object($value22) && method_exists($value22, '__toString')) ? $value22 : htmlspecialchars($value22, ($arguments20['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments20['encoding'], $arguments20['doubleEncode']);
};
$viewHelper23 = $self->getViewHelper('$viewHelper23', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper23->setArguments($arguments17);
$viewHelper23->setRenderingContext($renderingContext);
$viewHelper23->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output9 .= $viewHelper23->initializeArgumentsAndRender();

$output9 .= '</td>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments24 = array();
$arguments24['action'] = 'show';
// Rendering Array
$array25 = array();
$array25['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments24['arguments'] = $array25;
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['controller'] = NULL;
$arguments24['package'] = NULL;
$arguments24['subpackage'] = NULL;
$arguments24['section'] = '';
$arguments24['format'] = '';
$arguments24['additionalParams'] = array (
);
$arguments24['addQueryString'] = false;
$arguments24['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments24['useParentRequest'] = false;
$arguments24['absolute'] = true;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['name'] = NULL;
$arguments24['rel'] = NULL;
$arguments24['rev'] = NULL;
$arguments24['target'] = NULL;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments27 = array();
$arguments27['format'] = 'Y-m-d H:i';
$arguments27['forceLocale'] = NULL;
$arguments27['date'] = NULL;
$arguments27['localeFormatType'] = NULL;
$arguments27['localeFormatLength'] = NULL;
$arguments27['cldrFormat'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.date', $renderingContext);
};
$viewHelper29 = $self->getViewHelper('$viewHelper29', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper29->setArguments($arguments27);
$viewHelper29->setRenderingContext($renderingContext);
$viewHelper29->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
return $viewHelper29->initializeArgumentsAndRender();
};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper30->setArguments($arguments24);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output9 .= $viewHelper30->initializeArgumentsAndRender();

$output9 .= '</td>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments31 = array();
$arguments31['action'] = 'show';
// Rendering Array
$array32 = array();
$array32['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments31['arguments'] = $array32;
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['controller'] = NULL;
$arguments31['package'] = NULL;
$arguments31['subpackage'] = NULL;
$arguments31['section'] = '';
$arguments31['format'] = '';
$arguments31['additionalParams'] = array (
);
$arguments31['addQueryString'] = false;
$arguments31['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments31['useParentRequest'] = false;
$arguments31['absolute'] = true;
$arguments31['class'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$arguments31['name'] = NULL;
$arguments31['rel'] = NULL;
$arguments31['rev'] = NULL;
$arguments31['target'] = NULL;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments34 = array();
$arguments34['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.status', $renderingContext);
$arguments34['keepQuotes'] = false;
$arguments34['encoding'] = 'UTF-8';
$arguments34['doubleEncode'] = true;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$value36 = ($arguments34['value'] !== NULL ? $arguments34['value'] : $renderChildrenClosure35());
return !is_string($value36) && !(is_object($value36) && method_exists($value36, '__toString')) ? $value36 : htmlspecialchars($value36, ($arguments34['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments34['encoding'], $arguments34['doubleEncode']);
};
$viewHelper37 = $self->getViewHelper('$viewHelper37', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper37->setArguments($arguments31);
$viewHelper37->setRenderingContext($renderingContext);
$viewHelper37->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output9 .= $viewHelper37->initializeArgumentsAndRender();

$output9 .= '</td>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments38 = array();
$arguments38['action'] = 'edit';
// Rendering Array
$array39 = array();
$array39['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments38['arguments'] = $array39;
$arguments38['additionalAttributes'] = NULL;
$arguments38['data'] = NULL;
$arguments38['controller'] = NULL;
$arguments38['package'] = NULL;
$arguments38['subpackage'] = NULL;
$arguments38['section'] = '';
$arguments38['format'] = '';
$arguments38['additionalParams'] = array (
);
$arguments38['addQueryString'] = false;
$arguments38['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments38['useParentRequest'] = false;
$arguments38['absolute'] = true;
$arguments38['class'] = NULL;
$arguments38['dir'] = NULL;
$arguments38['id'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['title'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$arguments38['name'] = NULL;
$arguments38['rel'] = NULL;
$arguments38['rev'] = NULL;
$arguments38['target'] = NULL;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper41 = $self->getViewHelper('$viewHelper41', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper41->setArguments($arguments38);
$viewHelper41->setRenderingContext($renderingContext);
$viewHelper41->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output9 .= $viewHelper41->initializeArgumentsAndRender();

$output9 .= '</td>
								<td>
									';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments42 = array();
$arguments42['action'] = 'delete';
// Rendering Array
$array43 = array();
$array43['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments42['arguments'] = $array43;
$arguments42['additionalAttributes'] = NULL;
$arguments42['data'] = NULL;
$arguments42['controller'] = NULL;
$arguments42['package'] = NULL;
$arguments42['subpackage'] = NULL;
$arguments42['object'] = NULL;
$arguments42['section'] = '';
$arguments42['format'] = '';
$arguments42['additionalParams'] = array (
);
$arguments42['absolute'] = false;
$arguments42['addQueryString'] = false;
$arguments42['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments42['fieldNamePrefix'] = NULL;
$arguments42['actionUri'] = NULL;
$arguments42['objectName'] = NULL;
$arguments42['useParentRequest'] = false;
$arguments42['enctype'] = NULL;
$arguments42['method'] = NULL;
$arguments42['name'] = NULL;
$arguments42['onreset'] = NULL;
$arguments42['onsubmit'] = NULL;
$arguments42['class'] = NULL;
$arguments42['dir'] = NULL;
$arguments42['id'] = NULL;
$arguments42['lang'] = NULL;
$arguments42['style'] = NULL;
$arguments42['title'] = NULL;
$arguments42['accesskey'] = NULL;
$arguments42['tabindex'] = NULL;
$arguments42['onclick'] = NULL;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments46 = array();
$arguments46['value'] = 'Delete';
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['name'] = NULL;
$arguments46['property'] = NULL;
$arguments46['disabled'] = NULL;
$arguments46['class'] = NULL;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper48->setArguments($arguments46);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output45 .= $viewHelper48->initializeArgumentsAndRender();

$output45 .= '
									';
return $output45;
};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper49->setArguments($arguments42);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure44);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output9 .= $viewHelper49->initializeArgumentsAndRender();

$output9 .= '
								</td>
							</tr>
						';
return $output9;
};

$output6 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
					';
return $output6;
};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper50->setArguments($arguments4);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output3 .= $viewHelper50->initializeArgumentsAndRender();

$output3 .= '
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments51 = array();
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return '
						<tr>
							<td colspan="5" class="text-center">No news created yet.</td>
						</tr>
					';
};
$viewHelper53 = $self->getViewHelper('$viewHelper53', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper53->setArguments($arguments51);
$viewHelper53->setRenderingContext($renderingContext);
$viewHelper53->setRenderChildrenClosure($renderChildrenClosure52);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output3 .= $viewHelper53->initializeArgumentsAndRender();

$output3 .= '
				';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments55 = array();
$arguments55['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'newsList', $renderingContext);
$arguments55['as'] = 'news';
$arguments55['key'] = '';
$arguments55['reverse'] = false;
$arguments55['iteration'] = NULL;
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
							<tr>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments58 = array();
$arguments58['action'] = 'show';
// Rendering Array
$array59 = array();
$array59['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments58['arguments'] = $array59;
$arguments58['additionalAttributes'] = NULL;
$arguments58['data'] = NULL;
$arguments58['controller'] = NULL;
$arguments58['package'] = NULL;
$arguments58['subpackage'] = NULL;
$arguments58['section'] = '';
$arguments58['format'] = '';
$arguments58['additionalParams'] = array (
);
$arguments58['addQueryString'] = false;
$arguments58['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments58['useParentRequest'] = false;
$arguments58['absolute'] = true;
$arguments58['class'] = NULL;
$arguments58['dir'] = NULL;
$arguments58['id'] = NULL;
$arguments58['lang'] = NULL;
$arguments58['style'] = NULL;
$arguments58['title'] = NULL;
$arguments58['accesskey'] = NULL;
$arguments58['tabindex'] = NULL;
$arguments58['onclick'] = NULL;
$arguments58['name'] = NULL;
$arguments58['rel'] = NULL;
$arguments58['rev'] = NULL;
$arguments58['target'] = NULL;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments61 = array();
$arguments61['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.title', $renderingContext);
$arguments61['keepQuotes'] = false;
$arguments61['encoding'] = 'UTF-8';
$arguments61['doubleEncode'] = true;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$value63 = ($arguments61['value'] !== NULL ? $arguments61['value'] : $renderChildrenClosure62());
return !is_string($value63) && !(is_object($value63) && method_exists($value63, '__toString')) ? $value63 : htmlspecialchars($value63, ($arguments61['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments61['encoding'], $arguments61['doubleEncode']);
};
$viewHelper64 = $self->getViewHelper('$viewHelper64', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper64->setArguments($arguments58);
$viewHelper64->setRenderingContext($renderingContext);
$viewHelper64->setRenderChildrenClosure($renderChildrenClosure60);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output57 .= $viewHelper64->initializeArgumentsAndRender();

$output57 .= '</td>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments65 = array();
$arguments65['action'] = 'show';
// Rendering Array
$array66 = array();
$array66['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments65['arguments'] = $array66;
$arguments65['additionalAttributes'] = NULL;
$arguments65['data'] = NULL;
$arguments65['controller'] = NULL;
$arguments65['package'] = NULL;
$arguments65['subpackage'] = NULL;
$arguments65['section'] = '';
$arguments65['format'] = '';
$arguments65['additionalParams'] = array (
);
$arguments65['addQueryString'] = false;
$arguments65['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments65['useParentRequest'] = false;
$arguments65['absolute'] = true;
$arguments65['class'] = NULL;
$arguments65['dir'] = NULL;
$arguments65['id'] = NULL;
$arguments65['lang'] = NULL;
$arguments65['style'] = NULL;
$arguments65['title'] = NULL;
$arguments65['accesskey'] = NULL;
$arguments65['tabindex'] = NULL;
$arguments65['onclick'] = NULL;
$arguments65['name'] = NULL;
$arguments65['rel'] = NULL;
$arguments65['rev'] = NULL;
$arguments65['target'] = NULL;
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments68 = array();
$arguments68['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.user.name', $renderingContext);
$arguments68['keepQuotes'] = false;
$arguments68['encoding'] = 'UTF-8';
$arguments68['doubleEncode'] = true;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$value70 = ($arguments68['value'] !== NULL ? $arguments68['value'] : $renderChildrenClosure69());
return !is_string($value70) && !(is_object($value70) && method_exists($value70, '__toString')) ? $value70 : htmlspecialchars($value70, ($arguments68['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments68['encoding'], $arguments68['doubleEncode']);
};
$viewHelper71 = $self->getViewHelper('$viewHelper71', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper71->setArguments($arguments65);
$viewHelper71->setRenderingContext($renderingContext);
$viewHelper71->setRenderChildrenClosure($renderChildrenClosure67);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output57 .= $viewHelper71->initializeArgumentsAndRender();

$output57 .= '</td>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments72 = array();
$arguments72['action'] = 'show';
// Rendering Array
$array73 = array();
$array73['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments72['arguments'] = $array73;
$arguments72['additionalAttributes'] = NULL;
$arguments72['data'] = NULL;
$arguments72['controller'] = NULL;
$arguments72['package'] = NULL;
$arguments72['subpackage'] = NULL;
$arguments72['section'] = '';
$arguments72['format'] = '';
$arguments72['additionalParams'] = array (
);
$arguments72['addQueryString'] = false;
$arguments72['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments72['useParentRequest'] = false;
$arguments72['absolute'] = true;
$arguments72['class'] = NULL;
$arguments72['dir'] = NULL;
$arguments72['id'] = NULL;
$arguments72['lang'] = NULL;
$arguments72['style'] = NULL;
$arguments72['title'] = NULL;
$arguments72['accesskey'] = NULL;
$arguments72['tabindex'] = NULL;
$arguments72['onclick'] = NULL;
$arguments72['name'] = NULL;
$arguments72['rel'] = NULL;
$arguments72['rev'] = NULL;
$arguments72['target'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments75 = array();
$arguments75['format'] = 'Y-m-d H:i';
$arguments75['forceLocale'] = NULL;
$arguments75['date'] = NULL;
$arguments75['localeFormatType'] = NULL;
$arguments75['localeFormatLength'] = NULL;
$arguments75['cldrFormat'] = NULL;
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.date', $renderingContext);
};
$viewHelper77 = $self->getViewHelper('$viewHelper77', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper77->setArguments($arguments75);
$viewHelper77->setRenderingContext($renderingContext);
$viewHelper77->setRenderChildrenClosure($renderChildrenClosure76);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
return $viewHelper77->initializeArgumentsAndRender();
};
$viewHelper78 = $self->getViewHelper('$viewHelper78', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper78->setArguments($arguments72);
$viewHelper78->setRenderingContext($renderingContext);
$viewHelper78->setRenderChildrenClosure($renderChildrenClosure74);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output57 .= $viewHelper78->initializeArgumentsAndRender();

$output57 .= '</td>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments79 = array();
$arguments79['action'] = 'show';
// Rendering Array
$array80 = array();
$array80['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments79['arguments'] = $array80;
$arguments79['additionalAttributes'] = NULL;
$arguments79['data'] = NULL;
$arguments79['controller'] = NULL;
$arguments79['package'] = NULL;
$arguments79['subpackage'] = NULL;
$arguments79['section'] = '';
$arguments79['format'] = '';
$arguments79['additionalParams'] = array (
);
$arguments79['addQueryString'] = false;
$arguments79['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments79['useParentRequest'] = false;
$arguments79['absolute'] = true;
$arguments79['class'] = NULL;
$arguments79['dir'] = NULL;
$arguments79['id'] = NULL;
$arguments79['lang'] = NULL;
$arguments79['style'] = NULL;
$arguments79['title'] = NULL;
$arguments79['accesskey'] = NULL;
$arguments79['tabindex'] = NULL;
$arguments79['onclick'] = NULL;
$arguments79['name'] = NULL;
$arguments79['rel'] = NULL;
$arguments79['rev'] = NULL;
$arguments79['target'] = NULL;
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments82 = array();
$arguments82['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.status', $renderingContext);
$arguments82['keepQuotes'] = false;
$arguments82['encoding'] = 'UTF-8';
$arguments82['doubleEncode'] = true;
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$value84 = ($arguments82['value'] !== NULL ? $arguments82['value'] : $renderChildrenClosure83());
return !is_string($value84) && !(is_object($value84) && method_exists($value84, '__toString')) ? $value84 : htmlspecialchars($value84, ($arguments82['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments82['encoding'], $arguments82['doubleEncode']);
};
$viewHelper85 = $self->getViewHelper('$viewHelper85', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper85->setArguments($arguments79);
$viewHelper85->setRenderingContext($renderingContext);
$viewHelper85->setRenderChildrenClosure($renderChildrenClosure81);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output57 .= $viewHelper85->initializeArgumentsAndRender();

$output57 .= '</td>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments86 = array();
$arguments86['action'] = 'edit';
// Rendering Array
$array87 = array();
$array87['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments86['arguments'] = $array87;
$arguments86['additionalAttributes'] = NULL;
$arguments86['data'] = NULL;
$arguments86['controller'] = NULL;
$arguments86['package'] = NULL;
$arguments86['subpackage'] = NULL;
$arguments86['section'] = '';
$arguments86['format'] = '';
$arguments86['additionalParams'] = array (
);
$arguments86['addQueryString'] = false;
$arguments86['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments86['useParentRequest'] = false;
$arguments86['absolute'] = true;
$arguments86['class'] = NULL;
$arguments86['dir'] = NULL;
$arguments86['id'] = NULL;
$arguments86['lang'] = NULL;
$arguments86['style'] = NULL;
$arguments86['title'] = NULL;
$arguments86['accesskey'] = NULL;
$arguments86['tabindex'] = NULL;
$arguments86['onclick'] = NULL;
$arguments86['name'] = NULL;
$arguments86['rel'] = NULL;
$arguments86['rev'] = NULL;
$arguments86['target'] = NULL;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper89 = $self->getViewHelper('$viewHelper89', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper89->setArguments($arguments86);
$viewHelper89->setRenderingContext($renderingContext);
$viewHelper89->setRenderChildrenClosure($renderChildrenClosure88);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output57 .= $viewHelper89->initializeArgumentsAndRender();

$output57 .= '</td>
								<td>
									';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments90 = array();
$arguments90['action'] = 'delete';
// Rendering Array
$array91 = array();
$array91['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments90['arguments'] = $array91;
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['controller'] = NULL;
$arguments90['package'] = NULL;
$arguments90['subpackage'] = NULL;
$arguments90['object'] = NULL;
$arguments90['section'] = '';
$arguments90['format'] = '';
$arguments90['additionalParams'] = array (
);
$arguments90['absolute'] = false;
$arguments90['addQueryString'] = false;
$arguments90['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments90['fieldNamePrefix'] = NULL;
$arguments90['actionUri'] = NULL;
$arguments90['objectName'] = NULL;
$arguments90['useParentRequest'] = false;
$arguments90['enctype'] = NULL;
$arguments90['method'] = NULL;
$arguments90['name'] = NULL;
$arguments90['onreset'] = NULL;
$arguments90['onsubmit'] = NULL;
$arguments90['class'] = NULL;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['title'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments94 = array();
$arguments94['value'] = 'Delete';
$arguments94['additionalAttributes'] = NULL;
$arguments94['data'] = NULL;
$arguments94['name'] = NULL;
$arguments94['property'] = NULL;
$arguments94['disabled'] = NULL;
$arguments94['class'] = NULL;
$arguments94['dir'] = NULL;
$arguments94['id'] = NULL;
$arguments94['lang'] = NULL;
$arguments94['style'] = NULL;
$arguments94['title'] = NULL;
$arguments94['accesskey'] = NULL;
$arguments94['tabindex'] = NULL;
$arguments94['onclick'] = NULL;
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper96 = $self->getViewHelper('$viewHelper96', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper96->setArguments($arguments94);
$viewHelper96->setRenderingContext($renderingContext);
$viewHelper96->setRenderChildrenClosure($renderChildrenClosure95);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output93 .= $viewHelper96->initializeArgumentsAndRender();

$output93 .= '
									';
return $output93;
};
$viewHelper97 = $self->getViewHelper('$viewHelper97', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper97->setArguments($arguments90);
$viewHelper97->setRenderingContext($renderingContext);
$viewHelper97->setRenderChildrenClosure($renderChildrenClosure92);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output57 .= $viewHelper97->initializeArgumentsAndRender();

$output57 .= '
								</td>
							</tr>
						';
return $output57;
};

$output54 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
					';
return $output54;
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
return '
						<tr>
							<td colspan="5" class="text-center">No news created yet.</td>
						</tr>
					';
};
$viewHelper98 = $self->getViewHelper('$viewHelper98', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper98->setArguments($arguments1);
$viewHelper98->setRenderingContext($renderingContext);
$viewHelper98->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper98->initializeArgumentsAndRender();

$output0 .= '

				</tbody>
			</table>
		</div>
		<div class="col-md-2">

		</div>
	</div>

	<p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments99 = array();
$arguments99['action'] = 'new';
$arguments99['additionalAttributes'] = NULL;
$arguments99['data'] = NULL;
$arguments99['arguments'] = array (
);
$arguments99['controller'] = NULL;
$arguments99['package'] = NULL;
$arguments99['subpackage'] = NULL;
$arguments99['section'] = '';
$arguments99['format'] = '';
$arguments99['additionalParams'] = array (
);
$arguments99['addQueryString'] = false;
$arguments99['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments99['useParentRequest'] = false;
$arguments99['absolute'] = true;
$arguments99['class'] = NULL;
$arguments99['dir'] = NULL;
$arguments99['id'] = NULL;
$arguments99['lang'] = NULL;
$arguments99['style'] = NULL;
$arguments99['title'] = NULL;
$arguments99['accesskey'] = NULL;
$arguments99['tabindex'] = NULL;
$arguments99['onclick'] = NULL;
$arguments99['name'] = NULL;
$arguments99['rel'] = NULL;
$arguments99['rev'] = NULL;
$arguments99['target'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return 'Create a new news';
};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper101->setArguments($arguments99);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper101->initializeArgumentsAndRender();

$output0 .= '</p>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output102 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments103 = array();
$arguments103['name'] = 'AdminLayout';
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper105 = $self->getViewHelper('$viewHelper105', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper105->setArguments($arguments103);
$viewHelper105->setRenderingContext($renderingContext);
$viewHelper105->setRenderChildrenClosure($renderChildrenClosure104);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output102 .= $viewHelper105->initializeArgumentsAndRender();

$output102 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments106 = array();
$arguments106['name'] = 'Title';
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return 'A list of news';
};

$output102 .= '';

$output102 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments108 = array();
$arguments108['name'] = 'Content';
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<table class="table">
				<thead>
				<tr>
					<th width="400px">Title</th>
					<th width="150px">By</th>
					<th width="150px">On</th>
					<th width="50px">Status</th>
					<th colspan="2" class="text-center">Action</th>
				</tr>
				</thead>
				<tbody>
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments111 = array();
// Rendering Boolean node
$arguments111['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'newsList', $renderingContext));
$arguments111['then'] = NULL;
$arguments111['else'] = NULL;
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments114 = array();
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments117 = array();
$arguments117['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'newsList', $renderingContext);
$arguments117['as'] = 'news';
$arguments117['key'] = '';
$arguments117['reverse'] = false;
$arguments117['iteration'] = NULL;
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
							<tr>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments120 = array();
$arguments120['action'] = 'show';
// Rendering Array
$array121 = array();
$array121['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments120['arguments'] = $array121;
$arguments120['additionalAttributes'] = NULL;
$arguments120['data'] = NULL;
$arguments120['controller'] = NULL;
$arguments120['package'] = NULL;
$arguments120['subpackage'] = NULL;
$arguments120['section'] = '';
$arguments120['format'] = '';
$arguments120['additionalParams'] = array (
);
$arguments120['addQueryString'] = false;
$arguments120['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments120['useParentRequest'] = false;
$arguments120['absolute'] = true;
$arguments120['class'] = NULL;
$arguments120['dir'] = NULL;
$arguments120['id'] = NULL;
$arguments120['lang'] = NULL;
$arguments120['style'] = NULL;
$arguments120['title'] = NULL;
$arguments120['accesskey'] = NULL;
$arguments120['tabindex'] = NULL;
$arguments120['onclick'] = NULL;
$arguments120['name'] = NULL;
$arguments120['rel'] = NULL;
$arguments120['rev'] = NULL;
$arguments120['target'] = NULL;
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments123 = array();
$arguments123['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.title', $renderingContext);
$arguments123['keepQuotes'] = false;
$arguments123['encoding'] = 'UTF-8';
$arguments123['doubleEncode'] = true;
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$value125 = ($arguments123['value'] !== NULL ? $arguments123['value'] : $renderChildrenClosure124());
return !is_string($value125) && !(is_object($value125) && method_exists($value125, '__toString')) ? $value125 : htmlspecialchars($value125, ($arguments123['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments123['encoding'], $arguments123['doubleEncode']);
};
$viewHelper126 = $self->getViewHelper('$viewHelper126', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper126->setArguments($arguments120);
$viewHelper126->setRenderingContext($renderingContext);
$viewHelper126->setRenderChildrenClosure($renderChildrenClosure122);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output119 .= $viewHelper126->initializeArgumentsAndRender();

$output119 .= '</td>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments127 = array();
$arguments127['action'] = 'show';
// Rendering Array
$array128 = array();
$array128['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments127['arguments'] = $array128;
$arguments127['additionalAttributes'] = NULL;
$arguments127['data'] = NULL;
$arguments127['controller'] = NULL;
$arguments127['package'] = NULL;
$arguments127['subpackage'] = NULL;
$arguments127['section'] = '';
$arguments127['format'] = '';
$arguments127['additionalParams'] = array (
);
$arguments127['addQueryString'] = false;
$arguments127['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments127['useParentRequest'] = false;
$arguments127['absolute'] = true;
$arguments127['class'] = NULL;
$arguments127['dir'] = NULL;
$arguments127['id'] = NULL;
$arguments127['lang'] = NULL;
$arguments127['style'] = NULL;
$arguments127['title'] = NULL;
$arguments127['accesskey'] = NULL;
$arguments127['tabindex'] = NULL;
$arguments127['onclick'] = NULL;
$arguments127['name'] = NULL;
$arguments127['rel'] = NULL;
$arguments127['rev'] = NULL;
$arguments127['target'] = NULL;
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments130 = array();
$arguments130['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.user.name', $renderingContext);
$arguments130['keepQuotes'] = false;
$arguments130['encoding'] = 'UTF-8';
$arguments130['doubleEncode'] = true;
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$value132 = ($arguments130['value'] !== NULL ? $arguments130['value'] : $renderChildrenClosure131());
return !is_string($value132) && !(is_object($value132) && method_exists($value132, '__toString')) ? $value132 : htmlspecialchars($value132, ($arguments130['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments130['encoding'], $arguments130['doubleEncode']);
};
$viewHelper133 = $self->getViewHelper('$viewHelper133', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper133->setArguments($arguments127);
$viewHelper133->setRenderingContext($renderingContext);
$viewHelper133->setRenderChildrenClosure($renderChildrenClosure129);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output119 .= $viewHelper133->initializeArgumentsAndRender();

$output119 .= '</td>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments134 = array();
$arguments134['action'] = 'show';
// Rendering Array
$array135 = array();
$array135['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments134['arguments'] = $array135;
$arguments134['additionalAttributes'] = NULL;
$arguments134['data'] = NULL;
$arguments134['controller'] = NULL;
$arguments134['package'] = NULL;
$arguments134['subpackage'] = NULL;
$arguments134['section'] = '';
$arguments134['format'] = '';
$arguments134['additionalParams'] = array (
);
$arguments134['addQueryString'] = false;
$arguments134['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments134['useParentRequest'] = false;
$arguments134['absolute'] = true;
$arguments134['class'] = NULL;
$arguments134['dir'] = NULL;
$arguments134['id'] = NULL;
$arguments134['lang'] = NULL;
$arguments134['style'] = NULL;
$arguments134['title'] = NULL;
$arguments134['accesskey'] = NULL;
$arguments134['tabindex'] = NULL;
$arguments134['onclick'] = NULL;
$arguments134['name'] = NULL;
$arguments134['rel'] = NULL;
$arguments134['rev'] = NULL;
$arguments134['target'] = NULL;
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments137 = array();
$arguments137['format'] = 'Y-m-d H:i';
$arguments137['forceLocale'] = NULL;
$arguments137['date'] = NULL;
$arguments137['localeFormatType'] = NULL;
$arguments137['localeFormatLength'] = NULL;
$arguments137['cldrFormat'] = NULL;
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.date', $renderingContext);
};
$viewHelper139 = $self->getViewHelper('$viewHelper139', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper139->setArguments($arguments137);
$viewHelper139->setRenderingContext($renderingContext);
$viewHelper139->setRenderChildrenClosure($renderChildrenClosure138);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
return $viewHelper139->initializeArgumentsAndRender();
};
$viewHelper140 = $self->getViewHelper('$viewHelper140', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper140->setArguments($arguments134);
$viewHelper140->setRenderingContext($renderingContext);
$viewHelper140->setRenderChildrenClosure($renderChildrenClosure136);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output119 .= $viewHelper140->initializeArgumentsAndRender();

$output119 .= '</td>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments141 = array();
$arguments141['action'] = 'show';
// Rendering Array
$array142 = array();
$array142['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments141['arguments'] = $array142;
$arguments141['additionalAttributes'] = NULL;
$arguments141['data'] = NULL;
$arguments141['controller'] = NULL;
$arguments141['package'] = NULL;
$arguments141['subpackage'] = NULL;
$arguments141['section'] = '';
$arguments141['format'] = '';
$arguments141['additionalParams'] = array (
);
$arguments141['addQueryString'] = false;
$arguments141['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments141['useParentRequest'] = false;
$arguments141['absolute'] = true;
$arguments141['class'] = NULL;
$arguments141['dir'] = NULL;
$arguments141['id'] = NULL;
$arguments141['lang'] = NULL;
$arguments141['style'] = NULL;
$arguments141['title'] = NULL;
$arguments141['accesskey'] = NULL;
$arguments141['tabindex'] = NULL;
$arguments141['onclick'] = NULL;
$arguments141['name'] = NULL;
$arguments141['rel'] = NULL;
$arguments141['rev'] = NULL;
$arguments141['target'] = NULL;
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments144 = array();
$arguments144['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.status', $renderingContext);
$arguments144['keepQuotes'] = false;
$arguments144['encoding'] = 'UTF-8';
$arguments144['doubleEncode'] = true;
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$value146 = ($arguments144['value'] !== NULL ? $arguments144['value'] : $renderChildrenClosure145());
return !is_string($value146) && !(is_object($value146) && method_exists($value146, '__toString')) ? $value146 : htmlspecialchars($value146, ($arguments144['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments144['encoding'], $arguments144['doubleEncode']);
};
$viewHelper147 = $self->getViewHelper('$viewHelper147', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper147->setArguments($arguments141);
$viewHelper147->setRenderingContext($renderingContext);
$viewHelper147->setRenderChildrenClosure($renderChildrenClosure143);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output119 .= $viewHelper147->initializeArgumentsAndRender();

$output119 .= '</td>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments148 = array();
$arguments148['action'] = 'edit';
// Rendering Array
$array149 = array();
$array149['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments148['arguments'] = $array149;
$arguments148['additionalAttributes'] = NULL;
$arguments148['data'] = NULL;
$arguments148['controller'] = NULL;
$arguments148['package'] = NULL;
$arguments148['subpackage'] = NULL;
$arguments148['section'] = '';
$arguments148['format'] = '';
$arguments148['additionalParams'] = array (
);
$arguments148['addQueryString'] = false;
$arguments148['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments148['useParentRequest'] = false;
$arguments148['absolute'] = true;
$arguments148['class'] = NULL;
$arguments148['dir'] = NULL;
$arguments148['id'] = NULL;
$arguments148['lang'] = NULL;
$arguments148['style'] = NULL;
$arguments148['title'] = NULL;
$arguments148['accesskey'] = NULL;
$arguments148['tabindex'] = NULL;
$arguments148['onclick'] = NULL;
$arguments148['name'] = NULL;
$arguments148['rel'] = NULL;
$arguments148['rev'] = NULL;
$arguments148['target'] = NULL;
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper151 = $self->getViewHelper('$viewHelper151', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper151->setArguments($arguments148);
$viewHelper151->setRenderingContext($renderingContext);
$viewHelper151->setRenderChildrenClosure($renderChildrenClosure150);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output119 .= $viewHelper151->initializeArgumentsAndRender();

$output119 .= '</td>
								<td>
									';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments152 = array();
$arguments152['action'] = 'delete';
// Rendering Array
$array153 = array();
$array153['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments152['arguments'] = $array153;
$arguments152['additionalAttributes'] = NULL;
$arguments152['data'] = NULL;
$arguments152['controller'] = NULL;
$arguments152['package'] = NULL;
$arguments152['subpackage'] = NULL;
$arguments152['object'] = NULL;
$arguments152['section'] = '';
$arguments152['format'] = '';
$arguments152['additionalParams'] = array (
);
$arguments152['absolute'] = false;
$arguments152['addQueryString'] = false;
$arguments152['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments152['fieldNamePrefix'] = NULL;
$arguments152['actionUri'] = NULL;
$arguments152['objectName'] = NULL;
$arguments152['useParentRequest'] = false;
$arguments152['enctype'] = NULL;
$arguments152['method'] = NULL;
$arguments152['name'] = NULL;
$arguments152['onreset'] = NULL;
$arguments152['onsubmit'] = NULL;
$arguments152['class'] = NULL;
$arguments152['dir'] = NULL;
$arguments152['id'] = NULL;
$arguments152['lang'] = NULL;
$arguments152['style'] = NULL;
$arguments152['title'] = NULL;
$arguments152['accesskey'] = NULL;
$arguments152['tabindex'] = NULL;
$arguments152['onclick'] = NULL;
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments156 = array();
$arguments156['value'] = 'Delete';
$arguments156['additionalAttributes'] = NULL;
$arguments156['data'] = NULL;
$arguments156['name'] = NULL;
$arguments156['property'] = NULL;
$arguments156['disabled'] = NULL;
$arguments156['class'] = NULL;
$arguments156['dir'] = NULL;
$arguments156['id'] = NULL;
$arguments156['lang'] = NULL;
$arguments156['style'] = NULL;
$arguments156['title'] = NULL;
$arguments156['accesskey'] = NULL;
$arguments156['tabindex'] = NULL;
$arguments156['onclick'] = NULL;
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper158 = $self->getViewHelper('$viewHelper158', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper158->setArguments($arguments156);
$viewHelper158->setRenderingContext($renderingContext);
$viewHelper158->setRenderChildrenClosure($renderChildrenClosure157);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output155 .= $viewHelper158->initializeArgumentsAndRender();

$output155 .= '
									';
return $output155;
};
$viewHelper159 = $self->getViewHelper('$viewHelper159', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper159->setArguments($arguments152);
$viewHelper159->setRenderingContext($renderingContext);
$viewHelper159->setRenderChildrenClosure($renderChildrenClosure154);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output119 .= $viewHelper159->initializeArgumentsAndRender();

$output119 .= '
								</td>
							</tr>
						';
return $output119;
};

$output116 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '
					';
return $output116;
};
$viewHelper160 = $self->getViewHelper('$viewHelper160', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper160->setArguments($arguments114);
$viewHelper160->setRenderingContext($renderingContext);
$viewHelper160->setRenderChildrenClosure($renderChildrenClosure115);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output113 .= $viewHelper160->initializeArgumentsAndRender();

$output113 .= '
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments161 = array();
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return '
						<tr>
							<td colspan="5" class="text-center">No news created yet.</td>
						</tr>
					';
};
$viewHelper163 = $self->getViewHelper('$viewHelper163', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper163->setArguments($arguments161);
$viewHelper163->setRenderingContext($renderingContext);
$viewHelper163->setRenderChildrenClosure($renderChildrenClosure162);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output113 .= $viewHelper163->initializeArgumentsAndRender();

$output113 .= '
				';
return $output113;
};
$arguments111['__thenClosure'] = function() use ($renderingContext, $self) {
$output164 = '';

$output164 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments165 = array();
$arguments165['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'newsList', $renderingContext);
$arguments165['as'] = 'news';
$arguments165['key'] = '';
$arguments165['reverse'] = false;
$arguments165['iteration'] = NULL;
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
							<tr>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments168 = array();
$arguments168['action'] = 'show';
// Rendering Array
$array169 = array();
$array169['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments168['arguments'] = $array169;
$arguments168['additionalAttributes'] = NULL;
$arguments168['data'] = NULL;
$arguments168['controller'] = NULL;
$arguments168['package'] = NULL;
$arguments168['subpackage'] = NULL;
$arguments168['section'] = '';
$arguments168['format'] = '';
$arguments168['additionalParams'] = array (
);
$arguments168['addQueryString'] = false;
$arguments168['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments168['useParentRequest'] = false;
$arguments168['absolute'] = true;
$arguments168['class'] = NULL;
$arguments168['dir'] = NULL;
$arguments168['id'] = NULL;
$arguments168['lang'] = NULL;
$arguments168['style'] = NULL;
$arguments168['title'] = NULL;
$arguments168['accesskey'] = NULL;
$arguments168['tabindex'] = NULL;
$arguments168['onclick'] = NULL;
$arguments168['name'] = NULL;
$arguments168['rel'] = NULL;
$arguments168['rev'] = NULL;
$arguments168['target'] = NULL;
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments171 = array();
$arguments171['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.title', $renderingContext);
$arguments171['keepQuotes'] = false;
$arguments171['encoding'] = 'UTF-8';
$arguments171['doubleEncode'] = true;
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$value173 = ($arguments171['value'] !== NULL ? $arguments171['value'] : $renderChildrenClosure172());
return !is_string($value173) && !(is_object($value173) && method_exists($value173, '__toString')) ? $value173 : htmlspecialchars($value173, ($arguments171['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments171['encoding'], $arguments171['doubleEncode']);
};
$viewHelper174 = $self->getViewHelper('$viewHelper174', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper174->setArguments($arguments168);
$viewHelper174->setRenderingContext($renderingContext);
$viewHelper174->setRenderChildrenClosure($renderChildrenClosure170);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output167 .= $viewHelper174->initializeArgumentsAndRender();

$output167 .= '</td>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments175 = array();
$arguments175['action'] = 'show';
// Rendering Array
$array176 = array();
$array176['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments175['arguments'] = $array176;
$arguments175['additionalAttributes'] = NULL;
$arguments175['data'] = NULL;
$arguments175['controller'] = NULL;
$arguments175['package'] = NULL;
$arguments175['subpackage'] = NULL;
$arguments175['section'] = '';
$arguments175['format'] = '';
$arguments175['additionalParams'] = array (
);
$arguments175['addQueryString'] = false;
$arguments175['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments175['useParentRequest'] = false;
$arguments175['absolute'] = true;
$arguments175['class'] = NULL;
$arguments175['dir'] = NULL;
$arguments175['id'] = NULL;
$arguments175['lang'] = NULL;
$arguments175['style'] = NULL;
$arguments175['title'] = NULL;
$arguments175['accesskey'] = NULL;
$arguments175['tabindex'] = NULL;
$arguments175['onclick'] = NULL;
$arguments175['name'] = NULL;
$arguments175['rel'] = NULL;
$arguments175['rev'] = NULL;
$arguments175['target'] = NULL;
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments178 = array();
$arguments178['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.user.name', $renderingContext);
$arguments178['keepQuotes'] = false;
$arguments178['encoding'] = 'UTF-8';
$arguments178['doubleEncode'] = true;
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$value180 = ($arguments178['value'] !== NULL ? $arguments178['value'] : $renderChildrenClosure179());
return !is_string($value180) && !(is_object($value180) && method_exists($value180, '__toString')) ? $value180 : htmlspecialchars($value180, ($arguments178['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments178['encoding'], $arguments178['doubleEncode']);
};
$viewHelper181 = $self->getViewHelper('$viewHelper181', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper181->setArguments($arguments175);
$viewHelper181->setRenderingContext($renderingContext);
$viewHelper181->setRenderChildrenClosure($renderChildrenClosure177);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output167 .= $viewHelper181->initializeArgumentsAndRender();

$output167 .= '</td>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments182 = array();
$arguments182['action'] = 'show';
// Rendering Array
$array183 = array();
$array183['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments182['arguments'] = $array183;
$arguments182['additionalAttributes'] = NULL;
$arguments182['data'] = NULL;
$arguments182['controller'] = NULL;
$arguments182['package'] = NULL;
$arguments182['subpackage'] = NULL;
$arguments182['section'] = '';
$arguments182['format'] = '';
$arguments182['additionalParams'] = array (
);
$arguments182['addQueryString'] = false;
$arguments182['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments182['useParentRequest'] = false;
$arguments182['absolute'] = true;
$arguments182['class'] = NULL;
$arguments182['dir'] = NULL;
$arguments182['id'] = NULL;
$arguments182['lang'] = NULL;
$arguments182['style'] = NULL;
$arguments182['title'] = NULL;
$arguments182['accesskey'] = NULL;
$arguments182['tabindex'] = NULL;
$arguments182['onclick'] = NULL;
$arguments182['name'] = NULL;
$arguments182['rel'] = NULL;
$arguments182['rev'] = NULL;
$arguments182['target'] = NULL;
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments185 = array();
$arguments185['format'] = 'Y-m-d H:i';
$arguments185['forceLocale'] = NULL;
$arguments185['date'] = NULL;
$arguments185['localeFormatType'] = NULL;
$arguments185['localeFormatLength'] = NULL;
$arguments185['cldrFormat'] = NULL;
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.date', $renderingContext);
};
$viewHelper187 = $self->getViewHelper('$viewHelper187', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper187->setArguments($arguments185);
$viewHelper187->setRenderingContext($renderingContext);
$viewHelper187->setRenderChildrenClosure($renderChildrenClosure186);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
return $viewHelper187->initializeArgumentsAndRender();
};
$viewHelper188 = $self->getViewHelper('$viewHelper188', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper188->setArguments($arguments182);
$viewHelper188->setRenderingContext($renderingContext);
$viewHelper188->setRenderChildrenClosure($renderChildrenClosure184);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output167 .= $viewHelper188->initializeArgumentsAndRender();

$output167 .= '</td>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments189 = array();
$arguments189['action'] = 'show';
// Rendering Array
$array190 = array();
$array190['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments189['arguments'] = $array190;
$arguments189['additionalAttributes'] = NULL;
$arguments189['data'] = NULL;
$arguments189['controller'] = NULL;
$arguments189['package'] = NULL;
$arguments189['subpackage'] = NULL;
$arguments189['section'] = '';
$arguments189['format'] = '';
$arguments189['additionalParams'] = array (
);
$arguments189['addQueryString'] = false;
$arguments189['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments189['useParentRequest'] = false;
$arguments189['absolute'] = true;
$arguments189['class'] = NULL;
$arguments189['dir'] = NULL;
$arguments189['id'] = NULL;
$arguments189['lang'] = NULL;
$arguments189['style'] = NULL;
$arguments189['title'] = NULL;
$arguments189['accesskey'] = NULL;
$arguments189['tabindex'] = NULL;
$arguments189['onclick'] = NULL;
$arguments189['name'] = NULL;
$arguments189['rel'] = NULL;
$arguments189['rev'] = NULL;
$arguments189['target'] = NULL;
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments192 = array();
$arguments192['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.status', $renderingContext);
$arguments192['keepQuotes'] = false;
$arguments192['encoding'] = 'UTF-8';
$arguments192['doubleEncode'] = true;
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$value194 = ($arguments192['value'] !== NULL ? $arguments192['value'] : $renderChildrenClosure193());
return !is_string($value194) && !(is_object($value194) && method_exists($value194, '__toString')) ? $value194 : htmlspecialchars($value194, ($arguments192['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments192['encoding'], $arguments192['doubleEncode']);
};
$viewHelper195 = $self->getViewHelper('$viewHelper195', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper195->setArguments($arguments189);
$viewHelper195->setRenderingContext($renderingContext);
$viewHelper195->setRenderChildrenClosure($renderChildrenClosure191);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output167 .= $viewHelper195->initializeArgumentsAndRender();

$output167 .= '</td>
								<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments196 = array();
$arguments196['action'] = 'edit';
// Rendering Array
$array197 = array();
$array197['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments196['arguments'] = $array197;
$arguments196['additionalAttributes'] = NULL;
$arguments196['data'] = NULL;
$arguments196['controller'] = NULL;
$arguments196['package'] = NULL;
$arguments196['subpackage'] = NULL;
$arguments196['section'] = '';
$arguments196['format'] = '';
$arguments196['additionalParams'] = array (
);
$arguments196['addQueryString'] = false;
$arguments196['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments196['useParentRequest'] = false;
$arguments196['absolute'] = true;
$arguments196['class'] = NULL;
$arguments196['dir'] = NULL;
$arguments196['id'] = NULL;
$arguments196['lang'] = NULL;
$arguments196['style'] = NULL;
$arguments196['title'] = NULL;
$arguments196['accesskey'] = NULL;
$arguments196['tabindex'] = NULL;
$arguments196['onclick'] = NULL;
$arguments196['name'] = NULL;
$arguments196['rel'] = NULL;
$arguments196['rev'] = NULL;
$arguments196['target'] = NULL;
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper199 = $self->getViewHelper('$viewHelper199', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper199->setArguments($arguments196);
$viewHelper199->setRenderingContext($renderingContext);
$viewHelper199->setRenderChildrenClosure($renderChildrenClosure198);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output167 .= $viewHelper199->initializeArgumentsAndRender();

$output167 .= '</td>
								<td>
									';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments200 = array();
$arguments200['action'] = 'delete';
// Rendering Array
$array201 = array();
$array201['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments200['arguments'] = $array201;
$arguments200['additionalAttributes'] = NULL;
$arguments200['data'] = NULL;
$arguments200['controller'] = NULL;
$arguments200['package'] = NULL;
$arguments200['subpackage'] = NULL;
$arguments200['object'] = NULL;
$arguments200['section'] = '';
$arguments200['format'] = '';
$arguments200['additionalParams'] = array (
);
$arguments200['absolute'] = false;
$arguments200['addQueryString'] = false;
$arguments200['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments200['fieldNamePrefix'] = NULL;
$arguments200['actionUri'] = NULL;
$arguments200['objectName'] = NULL;
$arguments200['useParentRequest'] = false;
$arguments200['enctype'] = NULL;
$arguments200['method'] = NULL;
$arguments200['name'] = NULL;
$arguments200['onreset'] = NULL;
$arguments200['onsubmit'] = NULL;
$arguments200['class'] = NULL;
$arguments200['dir'] = NULL;
$arguments200['id'] = NULL;
$arguments200['lang'] = NULL;
$arguments200['style'] = NULL;
$arguments200['title'] = NULL;
$arguments200['accesskey'] = NULL;
$arguments200['tabindex'] = NULL;
$arguments200['onclick'] = NULL;
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments204 = array();
$arguments204['value'] = 'Delete';
$arguments204['additionalAttributes'] = NULL;
$arguments204['data'] = NULL;
$arguments204['name'] = NULL;
$arguments204['property'] = NULL;
$arguments204['disabled'] = NULL;
$arguments204['class'] = NULL;
$arguments204['dir'] = NULL;
$arguments204['id'] = NULL;
$arguments204['lang'] = NULL;
$arguments204['style'] = NULL;
$arguments204['title'] = NULL;
$arguments204['accesskey'] = NULL;
$arguments204['tabindex'] = NULL;
$arguments204['onclick'] = NULL;
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper206 = $self->getViewHelper('$viewHelper206', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper206->setArguments($arguments204);
$viewHelper206->setRenderingContext($renderingContext);
$viewHelper206->setRenderChildrenClosure($renderChildrenClosure205);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output203 .= $viewHelper206->initializeArgumentsAndRender();

$output203 .= '
									';
return $output203;
};
$viewHelper207 = $self->getViewHelper('$viewHelper207', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper207->setArguments($arguments200);
$viewHelper207->setRenderingContext($renderingContext);
$viewHelper207->setRenderChildrenClosure($renderChildrenClosure202);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output167 .= $viewHelper207->initializeArgumentsAndRender();

$output167 .= '
								</td>
							</tr>
						';
return $output167;
};

$output164 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output164 .= '
					';
return $output164;
};
$arguments111['__elseClosure'] = function() use ($renderingContext, $self) {
return '
						<tr>
							<td colspan="5" class="text-center">No news created yet.</td>
						</tr>
					';
};
$viewHelper208 = $self->getViewHelper('$viewHelper208', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper208->setArguments($arguments111);
$viewHelper208->setRenderingContext($renderingContext);
$viewHelper208->setRenderChildrenClosure($renderChildrenClosure112);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output110 .= $viewHelper208->initializeArgumentsAndRender();

$output110 .= '

				</tbody>
			</table>
		</div>
		<div class="col-md-2">

		</div>
	</div>

	<p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments209 = array();
$arguments209['action'] = 'new';
$arguments209['additionalAttributes'] = NULL;
$arguments209['data'] = NULL;
$arguments209['arguments'] = array (
);
$arguments209['controller'] = NULL;
$arguments209['package'] = NULL;
$arguments209['subpackage'] = NULL;
$arguments209['section'] = '';
$arguments209['format'] = '';
$arguments209['additionalParams'] = array (
);
$arguments209['addQueryString'] = false;
$arguments209['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments209['useParentRequest'] = false;
$arguments209['absolute'] = true;
$arguments209['class'] = NULL;
$arguments209['dir'] = NULL;
$arguments209['id'] = NULL;
$arguments209['lang'] = NULL;
$arguments209['style'] = NULL;
$arguments209['title'] = NULL;
$arguments209['accesskey'] = NULL;
$arguments209['tabindex'] = NULL;
$arguments209['onclick'] = NULL;
$arguments209['name'] = NULL;
$arguments209['rel'] = NULL;
$arguments209['rev'] = NULL;
$arguments209['target'] = NULL;
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return 'Create a new news';
};
$viewHelper211 = $self->getViewHelper('$viewHelper211', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper211->setArguments($arguments209);
$viewHelper211->setRenderingContext($renderingContext);
$viewHelper211->setRenderChildrenClosure($renderChildrenClosure210);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output110 .= $viewHelper211->initializeArgumentsAndRender();

$output110 .= '</p>
';
return $output110;
};

$output102 .= '';

$output102 .= '
';

return $output102;
}


}
#0             76387     