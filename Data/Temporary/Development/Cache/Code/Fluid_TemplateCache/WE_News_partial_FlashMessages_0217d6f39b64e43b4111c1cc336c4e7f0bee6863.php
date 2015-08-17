<?php class FluidCache_WE_News_partial_FlashMessages_0217d6f39b64e43b4111c1cc336c4e7f0bee6863 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments0 = array();
$arguments0['as'] = 'flashMessages';
$arguments0['additionalAttributes'] = NULL;
$arguments0['data'] = NULL;
$arguments0['severity'] = NULL;
$arguments0['class'] = NULL;
$arguments0['dir'] = NULL;
$arguments0['id'] = NULL;
$arguments0['lang'] = NULL;
$arguments0['style'] = NULL;
$arguments0['title'] = NULL;
$arguments0['accesskey'] = NULL;
$arguments0['tabindex'] = NULL;
$arguments0['onclick'] = NULL;
$renderChildrenClosure1 = function() use ($renderingContext, $self) {
$output2 = '';

$output2 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments3 = array();
$arguments3['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'flashMessages', $renderingContext);
$arguments3['as'] = 'flashMessage';
$arguments3['key'] = '';
$arguments3['reverse'] = false;
$arguments3['iteration'] = NULL;
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments6 = array();
// Rendering Boolean node
// Rendering Array
$array7 = array();
$array7['0'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'flashMessage.severity', $renderingContext);
// Rendering Array
$array8 = array();
$array8['0'] = 'OK';
$arguments6['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array7, $array8);
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return '
			<div data-alert class="alert-box success">
		';
};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper10->setArguments($arguments6);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output5 .= $viewHelper10->initializeArgumentsAndRender();

$output5 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments11 = array();
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array12['0'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'flashMessage.severity', $renderingContext);
// Rendering Array
$array13 = array();
$array13['0'] = 'Notice';
$arguments11['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array12, $array13);
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return '
			<div data-alert class="alert-box secondary">
		';
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper15->setArguments($arguments11);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output5 .= $viewHelper15->initializeArgumentsAndRender();

$output5 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments16 = array();
// Rendering Boolean node
// Rendering Array
$array17 = array();
$array17['0'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'flashMessage.severity', $renderingContext);
// Rendering Array
$array18 = array();
$array18['0'] = 'Warning';
$arguments16['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array17, $array18);
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return '
			<div data-alert class="alert-box alert">
		';
};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper20->setArguments($arguments16);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output5 .= $viewHelper20->initializeArgumentsAndRender();

$output5 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments21 = array();
// Rendering Boolean node
// Rendering Array
$array22 = array();
$array22['0'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'flashMessage.severity', $renderingContext);
// Rendering Array
$array23 = array();
$array23['0'] = 'Error';
$arguments21['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $array22, $array23);
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return '
			<div data-alert class="alert-box alert">
		';
};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper25->setArguments($arguments21);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output5 .= $viewHelper25->initializeArgumentsAndRender();

$output5 .= '
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments26 = array();
// Rendering Boolean node
$arguments26['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'flashMessage.title', $renderingContext));
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
				<h4 class="alert-heading">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments29 = array();
$arguments29['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'flashMessage.title', $renderingContext);
$arguments29['keepQuotes'] = false;
$arguments29['encoding'] = 'UTF-8';
$arguments29['doubleEncode'] = true;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$value31 = ($arguments29['value'] !== NULL ? $arguments29['value'] : $renderChildrenClosure30());

$output28 .= !is_string($value31) && !(is_object($value31) && method_exists($value31, '__toString')) ? $value31 : htmlspecialchars($value31, ($arguments29['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments29['encoding'], $arguments29['doubleEncode']);

$output28 .= '</h4>
			';
return $output28;
};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper32->setArguments($arguments26);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output5 .= $viewHelper32->initializeArgumentsAndRender();

$output5 .= '
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments33 = array();
$arguments33['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'flashMessage', $renderingContext);
$arguments33['keepQuotes'] = false;
$arguments33['encoding'] = 'UTF-8';
$arguments33['doubleEncode'] = true;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$value35 = ($arguments33['value'] !== NULL ? $arguments33['value'] : $renderChildrenClosure34());

$output5 .= !is_string($value35) && !(is_object($value35) && method_exists($value35, '__toString')) ? $value35 : htmlspecialchars($value35, ($arguments33['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments33['encoding'], $arguments33['doubleEncode']);

$output5 .= '
			<a href="#" class="close">&times;</a>
		</div>
	';
return $output5;
};

$output2 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output2 .= '
';
return $output2;
};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper36->setArguments($arguments0);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure1);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FlashMessagesViewHelper

return $viewHelper36->initializeArgumentsAndRender();
}


}
#0             9600      