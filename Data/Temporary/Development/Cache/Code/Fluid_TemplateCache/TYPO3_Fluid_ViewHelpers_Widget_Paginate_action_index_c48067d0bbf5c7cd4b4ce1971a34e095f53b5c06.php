<?php class FluidCache_TYPO3_Fluid_ViewHelpers_Widget_Paginate_action_index_c48067d0bbf5c7cd4b4ce1971a34e095f53b5c06 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section paginator
 */
public function section_31b8d545b1939b065e8931304bab52b99d8b4567(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext), 1);
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
		<div class="page-navigation">
			<ul class="typo3-widget-paginator">
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.previousPage', $renderingContext));
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
					<li class="previous">
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments7 = array();
// Rendering Boolean node
$arguments7['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.previousPage', $renderingContext), 1);
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
							';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments10 = array();
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
								';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments13 = array();
$arguments13['action'] = 'index';
// Rendering Array
$array14 = array();
$array14['currentPage'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.previousPage', $renderingContext);
$arguments13['arguments'] = $array14;
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['section'] = '';
$arguments13['format'] = '';
$arguments13['ajax'] = false;
$arguments13['includeWidgetContext'] = false;
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['name'] = NULL;
$arguments13['rel'] = NULL;
$arguments13['rev'] = NULL;
$arguments13['target'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return 'previous';
};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper16->setArguments($arguments13);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output12 .= $viewHelper16->initializeArgumentsAndRender();

$output12 .= '
							';
return $output12;
};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper17->setArguments($arguments10);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output9 .= $viewHelper17->initializeArgumentsAndRender();

$output9 .= '
							';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments18 = array();
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
								';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments21 = array();
$arguments21['action'] = 'index';
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['arguments'] = array (
);
$arguments21['section'] = '';
$arguments21['format'] = '';
$arguments21['ajax'] = false;
$arguments21['includeWidgetContext'] = false;
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['name'] = NULL;
$arguments21['rel'] = NULL;
$arguments21['rev'] = NULL;
$arguments21['target'] = NULL;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return 'previous';
};
$viewHelper23 = $self->getViewHelper('$viewHelper23', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper23->setArguments($arguments21);
$viewHelper23->setRenderingContext($renderingContext);
$viewHelper23->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output20 .= $viewHelper23->initializeArgumentsAndRender();

$output20 .= '
							';
return $output20;
};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper24->setArguments($arguments18);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output9 .= $viewHelper24->initializeArgumentsAndRender();

$output9 .= '
						';
return $output9;
};
$arguments7['__thenClosure'] = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
								';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments26 = array();
$arguments26['action'] = 'index';
// Rendering Array
$array27 = array();
$array27['currentPage'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.previousPage', $renderingContext);
$arguments26['arguments'] = $array27;
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['section'] = '';
$arguments26['format'] = '';
$arguments26['ajax'] = false;
$arguments26['includeWidgetContext'] = false;
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$arguments26['name'] = NULL;
$arguments26['rel'] = NULL;
$arguments26['rev'] = NULL;
$arguments26['target'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return 'previous';
};
$viewHelper29 = $self->getViewHelper('$viewHelper29', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper29->setArguments($arguments26);
$viewHelper29->setRenderingContext($renderingContext);
$viewHelper29->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output25 .= $viewHelper29->initializeArgumentsAndRender();

$output25 .= '
							';
return $output25;
};
$arguments7['__elseClosure'] = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
								';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments31 = array();
$arguments31['action'] = 'index';
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['arguments'] = array (
);
$arguments31['section'] = '';
$arguments31['format'] = '';
$arguments31['ajax'] = false;
$arguments31['includeWidgetContext'] = false;
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
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return 'previous';
};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper33->setArguments($arguments31);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure32);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output30 .= $viewHelper33->initializeArgumentsAndRender();

$output30 .= '
							';
return $output30;
};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper34->setArguments($arguments7);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output6 .= $viewHelper34->initializeArgumentsAndRender();

$output6 .= '
					</li>
				';
return $output6;
};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper35->setArguments($arguments4);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper35->initializeArgumentsAndRender();

$output3 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments36 = array();
// Rendering Boolean node
$arguments36['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.displayRangeStart', $renderingContext), 1);
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
					<li class="first">
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments39 = array();
$arguments39['action'] = 'index';
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['arguments'] = array (
);
$arguments39['section'] = '';
$arguments39['format'] = '';
$arguments39['ajax'] = false;
$arguments39['includeWidgetContext'] = false;
$arguments39['class'] = NULL;
$arguments39['dir'] = NULL;
$arguments39['id'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['title'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$arguments39['name'] = NULL;
$arguments39['rel'] = NULL;
$arguments39['rev'] = NULL;
$arguments39['target'] = NULL;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return '1';
};
$viewHelper41 = $self->getViewHelper('$viewHelper41', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper41->setArguments($arguments39);
$viewHelper41->setRenderingContext($renderingContext);
$viewHelper41->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output38 .= $viewHelper41->initializeArgumentsAndRender();

$output38 .= '
					</li>
				';
return $output38;
};
$viewHelper42 = $self->getViewHelper('$viewHelper42', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper42->setArguments($arguments36);
$viewHelper42->setRenderingContext($renderingContext);
$viewHelper42->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper42->initializeArgumentsAndRender();

$output3 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments43 = array();
// Rendering Boolean node
$arguments43['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.hasLessPages', $renderingContext));
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return '
					<li>...</li>
				';
};
$viewHelper45 = $self->getViewHelper('$viewHelper45', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper45->setArguments($arguments43);
$viewHelper45->setRenderingContext($renderingContext);
$viewHelper45->setRenderChildrenClosure($renderChildrenClosure44);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper45->initializeArgumentsAndRender();

$output3 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments46 = array();
$arguments46['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.pages', $renderingContext);
$arguments46['as'] = 'page';
$arguments46['key'] = '';
$arguments46['reverse'] = false;
$arguments46['iteration'] = NULL;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments49 = array();
// Rendering Boolean node
$arguments49['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.isCurrent', $renderingContext));
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments52 = array();
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
							<li class="current">
								';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments55 = array();
$arguments55['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments55['keepQuotes'] = false;
$arguments55['encoding'] = 'UTF-8';
$arguments55['doubleEncode'] = true;
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$value57 = ($arguments55['value'] !== NULL ? $arguments55['value'] : $renderChildrenClosure56());

$output54 .= !is_string($value57) && !(is_object($value57) && method_exists($value57, '__toString')) ? $value57 : htmlspecialchars($value57, ($arguments55['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments55['encoding'], $arguments55['doubleEncode']);

$output54 .= '
							</li>
						';
return $output54;
};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper58->setArguments($arguments52);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output51 .= $viewHelper58->initializeArgumentsAndRender();

$output51 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments59 = array();
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
							<li>
								';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments62 = array();
// Rendering Boolean node
$arguments62['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext), 1);
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
									';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments65 = array();
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments68 = array();
$arguments68['action'] = 'index';
// Rendering Array
$array69 = array();
$array69['currentPage'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments68['arguments'] = $array69;
$arguments68['additionalAttributes'] = NULL;
$arguments68['data'] = NULL;
$arguments68['section'] = '';
$arguments68['format'] = '';
$arguments68['ajax'] = false;
$arguments68['includeWidgetContext'] = false;
$arguments68['class'] = NULL;
$arguments68['dir'] = NULL;
$arguments68['id'] = NULL;
$arguments68['lang'] = NULL;
$arguments68['style'] = NULL;
$arguments68['title'] = NULL;
$arguments68['accesskey'] = NULL;
$arguments68['tabindex'] = NULL;
$arguments68['onclick'] = NULL;
$arguments68['name'] = NULL;
$arguments68['rel'] = NULL;
$arguments68['rev'] = NULL;
$arguments68['target'] = NULL;
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments71 = array();
$arguments71['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments71['keepQuotes'] = false;
$arguments71['encoding'] = 'UTF-8';
$arguments71['doubleEncode'] = true;
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$value73 = ($arguments71['value'] !== NULL ? $arguments71['value'] : $renderChildrenClosure72());
return !is_string($value73) && !(is_object($value73) && method_exists($value73, '__toString')) ? $value73 : htmlspecialchars($value73, ($arguments71['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments71['encoding'], $arguments71['doubleEncode']);
};
$viewHelper74 = $self->getViewHelper('$viewHelper74', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper74->setArguments($arguments68);
$viewHelper74->setRenderingContext($renderingContext);
$viewHelper74->setRenderChildrenClosure($renderChildrenClosure70);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output67 .= $viewHelper74->initializeArgumentsAndRender();

$output67 .= '
									';
return $output67;
};
$viewHelper75 = $self->getViewHelper('$viewHelper75', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper75->setArguments($arguments65);
$viewHelper75->setRenderingContext($renderingContext);
$viewHelper75->setRenderChildrenClosure($renderChildrenClosure66);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output64 .= $viewHelper75->initializeArgumentsAndRender();

$output64 .= '
									';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments76 = array();
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments79 = array();
$arguments79['action'] = 'index';
$arguments79['additionalAttributes'] = NULL;
$arguments79['data'] = NULL;
$arguments79['arguments'] = array (
);
$arguments79['section'] = '';
$arguments79['format'] = '';
$arguments79['ajax'] = false;
$arguments79['includeWidgetContext'] = false;
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
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments81 = array();
$arguments81['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments81['keepQuotes'] = false;
$arguments81['encoding'] = 'UTF-8';
$arguments81['doubleEncode'] = true;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$value83 = ($arguments81['value'] !== NULL ? $arguments81['value'] : $renderChildrenClosure82());
return !is_string($value83) && !(is_object($value83) && method_exists($value83, '__toString')) ? $value83 : htmlspecialchars($value83, ($arguments81['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments81['encoding'], $arguments81['doubleEncode']);
};
$viewHelper84 = $self->getViewHelper('$viewHelper84', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper84->setArguments($arguments79);
$viewHelper84->setRenderingContext($renderingContext);
$viewHelper84->setRenderChildrenClosure($renderChildrenClosure80);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output78 .= $viewHelper84->initializeArgumentsAndRender();

$output78 .= '
									';
return $output78;
};
$viewHelper85 = $self->getViewHelper('$viewHelper85', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper85->setArguments($arguments76);
$viewHelper85->setRenderingContext($renderingContext);
$viewHelper85->setRenderChildrenClosure($renderChildrenClosure77);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output64 .= $viewHelper85->initializeArgumentsAndRender();

$output64 .= '
								';
return $output64;
};
$arguments62['__thenClosure'] = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments87 = array();
$arguments87['action'] = 'index';
// Rendering Array
$array88 = array();
$array88['currentPage'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments87['arguments'] = $array88;
$arguments87['additionalAttributes'] = NULL;
$arguments87['data'] = NULL;
$arguments87['section'] = '';
$arguments87['format'] = '';
$arguments87['ajax'] = false;
$arguments87['includeWidgetContext'] = false;
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
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments90 = array();
$arguments90['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments90['keepQuotes'] = false;
$arguments90['encoding'] = 'UTF-8';
$arguments90['doubleEncode'] = true;
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$value92 = ($arguments90['value'] !== NULL ? $arguments90['value'] : $renderChildrenClosure91());
return !is_string($value92) && !(is_object($value92) && method_exists($value92, '__toString')) ? $value92 : htmlspecialchars($value92, ($arguments90['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments90['encoding'], $arguments90['doubleEncode']);
};
$viewHelper93 = $self->getViewHelper('$viewHelper93', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper93->setArguments($arguments87);
$viewHelper93->setRenderingContext($renderingContext);
$viewHelper93->setRenderChildrenClosure($renderChildrenClosure89);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output86 .= $viewHelper93->initializeArgumentsAndRender();

$output86 .= '
									';
return $output86;
};
$arguments62['__elseClosure'] = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments95 = array();
$arguments95['action'] = 'index';
$arguments95['additionalAttributes'] = NULL;
$arguments95['data'] = NULL;
$arguments95['arguments'] = array (
);
$arguments95['section'] = '';
$arguments95['format'] = '';
$arguments95['ajax'] = false;
$arguments95['includeWidgetContext'] = false;
$arguments95['class'] = NULL;
$arguments95['dir'] = NULL;
$arguments95['id'] = NULL;
$arguments95['lang'] = NULL;
$arguments95['style'] = NULL;
$arguments95['title'] = NULL;
$arguments95['accesskey'] = NULL;
$arguments95['tabindex'] = NULL;
$arguments95['onclick'] = NULL;
$arguments95['name'] = NULL;
$arguments95['rel'] = NULL;
$arguments95['rev'] = NULL;
$arguments95['target'] = NULL;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments97 = array();
$arguments97['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments97['keepQuotes'] = false;
$arguments97['encoding'] = 'UTF-8';
$arguments97['doubleEncode'] = true;
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$value99 = ($arguments97['value'] !== NULL ? $arguments97['value'] : $renderChildrenClosure98());
return !is_string($value99) && !(is_object($value99) && method_exists($value99, '__toString')) ? $value99 : htmlspecialchars($value99, ($arguments97['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments97['encoding'], $arguments97['doubleEncode']);
};
$viewHelper100 = $self->getViewHelper('$viewHelper100', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper100->setArguments($arguments95);
$viewHelper100->setRenderingContext($renderingContext);
$viewHelper100->setRenderChildrenClosure($renderChildrenClosure96);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output94 .= $viewHelper100->initializeArgumentsAndRender();

$output94 .= '
									';
return $output94;
};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper101->setArguments($arguments62);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure63);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output61 .= $viewHelper101->initializeArgumentsAndRender();

$output61 .= '
							</li>
						';
return $output61;
};
$viewHelper102 = $self->getViewHelper('$viewHelper102', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper102->setArguments($arguments59);
$viewHelper102->setRenderingContext($renderingContext);
$viewHelper102->setRenderChildrenClosure($renderChildrenClosure60);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output51 .= $viewHelper102->initializeArgumentsAndRender();

$output51 .= '
					';
return $output51;
};
$arguments49['__thenClosure'] = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
							<li class="current">
								';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments104 = array();
$arguments104['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments104['keepQuotes'] = false;
$arguments104['encoding'] = 'UTF-8';
$arguments104['doubleEncode'] = true;
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$value106 = ($arguments104['value'] !== NULL ? $arguments104['value'] : $renderChildrenClosure105());

$output103 .= !is_string($value106) && !(is_object($value106) && method_exists($value106, '__toString')) ? $value106 : htmlspecialchars($value106, ($arguments104['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments104['encoding'], $arguments104['doubleEncode']);

$output103 .= '
							</li>
						';
return $output103;
};
$arguments49['__elseClosure'] = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
							<li>
								';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments108 = array();
// Rendering Boolean node
$arguments108['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext), 1);
$arguments108['then'] = NULL;
$arguments108['else'] = NULL;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
									';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments111 = array();
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments114 = array();
$arguments114['action'] = 'index';
// Rendering Array
$array115 = array();
$array115['currentPage'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments114['arguments'] = $array115;
$arguments114['additionalAttributes'] = NULL;
$arguments114['data'] = NULL;
$arguments114['section'] = '';
$arguments114['format'] = '';
$arguments114['ajax'] = false;
$arguments114['includeWidgetContext'] = false;
$arguments114['class'] = NULL;
$arguments114['dir'] = NULL;
$arguments114['id'] = NULL;
$arguments114['lang'] = NULL;
$arguments114['style'] = NULL;
$arguments114['title'] = NULL;
$arguments114['accesskey'] = NULL;
$arguments114['tabindex'] = NULL;
$arguments114['onclick'] = NULL;
$arguments114['name'] = NULL;
$arguments114['rel'] = NULL;
$arguments114['rev'] = NULL;
$arguments114['target'] = NULL;
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments117 = array();
$arguments117['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments117['keepQuotes'] = false;
$arguments117['encoding'] = 'UTF-8';
$arguments117['doubleEncode'] = true;
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$value119 = ($arguments117['value'] !== NULL ? $arguments117['value'] : $renderChildrenClosure118());
return !is_string($value119) && !(is_object($value119) && method_exists($value119, '__toString')) ? $value119 : htmlspecialchars($value119, ($arguments117['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments117['encoding'], $arguments117['doubleEncode']);
};
$viewHelper120 = $self->getViewHelper('$viewHelper120', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper120->setArguments($arguments114);
$viewHelper120->setRenderingContext($renderingContext);
$viewHelper120->setRenderChildrenClosure($renderChildrenClosure116);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output113 .= $viewHelper120->initializeArgumentsAndRender();

$output113 .= '
									';
return $output113;
};
$viewHelper121 = $self->getViewHelper('$viewHelper121', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper121->setArguments($arguments111);
$viewHelper121->setRenderingContext($renderingContext);
$viewHelper121->setRenderChildrenClosure($renderChildrenClosure112);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output110 .= $viewHelper121->initializeArgumentsAndRender();

$output110 .= '
									';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments122 = array();
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments125 = array();
$arguments125['action'] = 'index';
$arguments125['additionalAttributes'] = NULL;
$arguments125['data'] = NULL;
$arguments125['arguments'] = array (
);
$arguments125['section'] = '';
$arguments125['format'] = '';
$arguments125['ajax'] = false;
$arguments125['includeWidgetContext'] = false;
$arguments125['class'] = NULL;
$arguments125['dir'] = NULL;
$arguments125['id'] = NULL;
$arguments125['lang'] = NULL;
$arguments125['style'] = NULL;
$arguments125['title'] = NULL;
$arguments125['accesskey'] = NULL;
$arguments125['tabindex'] = NULL;
$arguments125['onclick'] = NULL;
$arguments125['name'] = NULL;
$arguments125['rel'] = NULL;
$arguments125['rev'] = NULL;
$arguments125['target'] = NULL;
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments127 = array();
$arguments127['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments127['keepQuotes'] = false;
$arguments127['encoding'] = 'UTF-8';
$arguments127['doubleEncode'] = true;
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$value129 = ($arguments127['value'] !== NULL ? $arguments127['value'] : $renderChildrenClosure128());
return !is_string($value129) && !(is_object($value129) && method_exists($value129, '__toString')) ? $value129 : htmlspecialchars($value129, ($arguments127['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments127['encoding'], $arguments127['doubleEncode']);
};
$viewHelper130 = $self->getViewHelper('$viewHelper130', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper130->setArguments($arguments125);
$viewHelper130->setRenderingContext($renderingContext);
$viewHelper130->setRenderChildrenClosure($renderChildrenClosure126);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output124 .= $viewHelper130->initializeArgumentsAndRender();

$output124 .= '
									';
return $output124;
};
$viewHelper131 = $self->getViewHelper('$viewHelper131', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper131->setArguments($arguments122);
$viewHelper131->setRenderingContext($renderingContext);
$viewHelper131->setRenderChildrenClosure($renderChildrenClosure123);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output110 .= $viewHelper131->initializeArgumentsAndRender();

$output110 .= '
								';
return $output110;
};
$arguments108['__thenClosure'] = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments133 = array();
$arguments133['action'] = 'index';
// Rendering Array
$array134 = array();
$array134['currentPage'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments133['arguments'] = $array134;
$arguments133['additionalAttributes'] = NULL;
$arguments133['data'] = NULL;
$arguments133['section'] = '';
$arguments133['format'] = '';
$arguments133['ajax'] = false;
$arguments133['includeWidgetContext'] = false;
$arguments133['class'] = NULL;
$arguments133['dir'] = NULL;
$arguments133['id'] = NULL;
$arguments133['lang'] = NULL;
$arguments133['style'] = NULL;
$arguments133['title'] = NULL;
$arguments133['accesskey'] = NULL;
$arguments133['tabindex'] = NULL;
$arguments133['onclick'] = NULL;
$arguments133['name'] = NULL;
$arguments133['rel'] = NULL;
$arguments133['rev'] = NULL;
$arguments133['target'] = NULL;
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments136 = array();
$arguments136['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments136['keepQuotes'] = false;
$arguments136['encoding'] = 'UTF-8';
$arguments136['doubleEncode'] = true;
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$value138 = ($arguments136['value'] !== NULL ? $arguments136['value'] : $renderChildrenClosure137());
return !is_string($value138) && !(is_object($value138) && method_exists($value138, '__toString')) ? $value138 : htmlspecialchars($value138, ($arguments136['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments136['encoding'], $arguments136['doubleEncode']);
};
$viewHelper139 = $self->getViewHelper('$viewHelper139', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper139->setArguments($arguments133);
$viewHelper139->setRenderingContext($renderingContext);
$viewHelper139->setRenderChildrenClosure($renderChildrenClosure135);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output132 .= $viewHelper139->initializeArgumentsAndRender();

$output132 .= '
									';
return $output132;
};
$arguments108['__elseClosure'] = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments141 = array();
$arguments141['action'] = 'index';
$arguments141['additionalAttributes'] = NULL;
$arguments141['data'] = NULL;
$arguments141['arguments'] = array (
);
$arguments141['section'] = '';
$arguments141['format'] = '';
$arguments141['ajax'] = false;
$arguments141['includeWidgetContext'] = false;
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
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments143 = array();
$arguments143['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments143['keepQuotes'] = false;
$arguments143['encoding'] = 'UTF-8';
$arguments143['doubleEncode'] = true;
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$value145 = ($arguments143['value'] !== NULL ? $arguments143['value'] : $renderChildrenClosure144());
return !is_string($value145) && !(is_object($value145) && method_exists($value145, '__toString')) ? $value145 : htmlspecialchars($value145, ($arguments143['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments143['encoding'], $arguments143['doubleEncode']);
};
$viewHelper146 = $self->getViewHelper('$viewHelper146', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper146->setArguments($arguments141);
$viewHelper146->setRenderingContext($renderingContext);
$viewHelper146->setRenderChildrenClosure($renderChildrenClosure142);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output140 .= $viewHelper146->initializeArgumentsAndRender();

$output140 .= '
									';
return $output140;
};
$viewHelper147 = $self->getViewHelper('$viewHelper147', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper147->setArguments($arguments108);
$viewHelper147->setRenderingContext($renderingContext);
$viewHelper147->setRenderChildrenClosure($renderChildrenClosure109);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output107 .= $viewHelper147->initializeArgumentsAndRender();

$output107 .= '
							</li>
						';
return $output107;
};
$viewHelper148 = $self->getViewHelper('$viewHelper148', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper148->setArguments($arguments49);
$viewHelper148->setRenderingContext($renderingContext);
$viewHelper148->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output48 .= $viewHelper148->initializeArgumentsAndRender();

$output48 .= '
				';
return $output48;
};

$output3 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output3 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments149 = array();
// Rendering Boolean node
$arguments149['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.hasMorePages', $renderingContext));
$arguments149['then'] = NULL;
$arguments149['else'] = NULL;
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return '
					<li>...</li>
				';
};
$viewHelper151 = $self->getViewHelper('$viewHelper151', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper151->setArguments($arguments149);
$viewHelper151->setRenderingContext($renderingContext);
$viewHelper151->setRenderChildrenClosure($renderChildrenClosure150);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper151->initializeArgumentsAndRender();

$output3 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments152 = array();
// Rendering Boolean node
$arguments152['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.displayRangeEnd', $renderingContext), \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext));
$arguments152['then'] = NULL;
$arguments152['else'] = NULL;
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
					<li class="last">
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments155 = array();
$arguments155['action'] = 'index';
// Rendering Array
$array156 = array();
$array156['currentPage'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments155['arguments'] = $array156;
$arguments155['additionalAttributes'] = NULL;
$arguments155['data'] = NULL;
$arguments155['section'] = '';
$arguments155['format'] = '';
$arguments155['ajax'] = false;
$arguments155['includeWidgetContext'] = false;
$arguments155['class'] = NULL;
$arguments155['dir'] = NULL;
$arguments155['id'] = NULL;
$arguments155['lang'] = NULL;
$arguments155['style'] = NULL;
$arguments155['title'] = NULL;
$arguments155['accesskey'] = NULL;
$arguments155['tabindex'] = NULL;
$arguments155['onclick'] = NULL;
$arguments155['name'] = NULL;
$arguments155['rel'] = NULL;
$arguments155['rev'] = NULL;
$arguments155['target'] = NULL;
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments158 = array();
$arguments158['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments158['keepQuotes'] = false;
$arguments158['encoding'] = 'UTF-8';
$arguments158['doubleEncode'] = true;
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$value160 = ($arguments158['value'] !== NULL ? $arguments158['value'] : $renderChildrenClosure159());
return !is_string($value160) && !(is_object($value160) && method_exists($value160, '__toString')) ? $value160 : htmlspecialchars($value160, ($arguments158['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments158['encoding'], $arguments158['doubleEncode']);
};
$viewHelper161 = $self->getViewHelper('$viewHelper161', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper161->setArguments($arguments155);
$viewHelper161->setRenderingContext($renderingContext);
$viewHelper161->setRenderChildrenClosure($renderChildrenClosure157);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output154 .= $viewHelper161->initializeArgumentsAndRender();

$output154 .= '
					</li>
				';
return $output154;
};
$viewHelper162 = $self->getViewHelper('$viewHelper162', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper162->setArguments($arguments152);
$viewHelper162->setRenderingContext($renderingContext);
$viewHelper162->setRenderChildrenClosure($renderChildrenClosure153);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper162->initializeArgumentsAndRender();

$output3 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments163 = array();
// Rendering Boolean node
$arguments163['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.nextPage', $renderingContext));
$arguments163['then'] = NULL;
$arguments163['else'] = NULL;
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$output165 = '';

$output165 .= '
					<li class="next">
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments166 = array();
$arguments166['action'] = 'index';
// Rendering Array
$array167 = array();
$array167['currentPage'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.nextPage', $renderingContext);
$arguments166['arguments'] = $array167;
$arguments166['additionalAttributes'] = NULL;
$arguments166['data'] = NULL;
$arguments166['section'] = '';
$arguments166['format'] = '';
$arguments166['ajax'] = false;
$arguments166['includeWidgetContext'] = false;
$arguments166['class'] = NULL;
$arguments166['dir'] = NULL;
$arguments166['id'] = NULL;
$arguments166['lang'] = NULL;
$arguments166['style'] = NULL;
$arguments166['title'] = NULL;
$arguments166['accesskey'] = NULL;
$arguments166['tabindex'] = NULL;
$arguments166['onclick'] = NULL;
$arguments166['name'] = NULL;
$arguments166['rel'] = NULL;
$arguments166['rev'] = NULL;
$arguments166['target'] = NULL;
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return 'next';
};
$viewHelper169 = $self->getViewHelper('$viewHelper169', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper169->setArguments($arguments166);
$viewHelper169->setRenderingContext($renderingContext);
$viewHelper169->setRenderChildrenClosure($renderChildrenClosure168);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output165 .= $viewHelper169->initializeArgumentsAndRender();

$output165 .= '
					</li>
				';
return $output165;
};
$viewHelper170 = $self->getViewHelper('$viewHelper170', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper170->setArguments($arguments163);
$viewHelper170->setRenderingContext($renderingContext);
$viewHelper170->setRenderChildrenClosure($renderChildrenClosure164);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper170->initializeArgumentsAndRender();

$output3 .= '
			</ul>
		</div>
	';
return $output3;
};
$viewHelper171 = $self->getViewHelper('$viewHelper171', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper171->setArguments($arguments1);
$viewHelper171->setRenderingContext($renderingContext);
$viewHelper171->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper171->initializeArgumentsAndRender();

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output172 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments173 = array();
// Rendering Boolean node
$arguments173['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'configuration.insertAbove', $renderingContext));
$arguments173['then'] = NULL;
$arguments173['else'] = NULL;
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments176 = array();
$arguments176['section'] = 'paginator';
// Rendering Array
$array177 = array();
$array177['pagination'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination', $renderingContext);
$arguments176['arguments'] = $array177;
$arguments176['partial'] = NULL;
$arguments176['optional'] = false;
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper179 = $self->getViewHelper('$viewHelper179', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper179->setArguments($arguments176);
$viewHelper179->setRenderingContext($renderingContext);
$viewHelper179->setRenderChildrenClosure($renderChildrenClosure178);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output175 .= $viewHelper179->initializeArgumentsAndRender();

$output175 .= '
';
return $output175;
};
$viewHelper180 = $self->getViewHelper('$viewHelper180', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper180->setArguments($arguments173);
$viewHelper180->setRenderingContext($renderingContext);
$viewHelper180->setRenderChildrenClosure($renderChildrenClosure174);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output172 .= $viewHelper180->initializeArgumentsAndRender();

$output172 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderChildrenViewHelper
$arguments181 = array();
$arguments181['arguments'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'contentArguments', $renderingContext);
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper183 = $self->getViewHelper('$viewHelper183', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderChildrenViewHelper');
$viewHelper183->setArguments($arguments181);
$viewHelper183->setRenderingContext($renderingContext);
$viewHelper183->setRenderChildrenClosure($renderChildrenClosure182);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderChildrenViewHelper

$output172 .= $viewHelper183->initializeArgumentsAndRender();

$output172 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments184 = array();
// Rendering Boolean node
$arguments184['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'configuration.insertBelow', $renderingContext));
$arguments184['then'] = NULL;
$arguments184['else'] = NULL;
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments187 = array();
$arguments187['section'] = 'paginator';
// Rendering Array
$array188 = array();
$array188['pagination'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination', $renderingContext);
$arguments187['arguments'] = $array188;
$arguments187['partial'] = NULL;
$arguments187['optional'] = false;
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper190 = $self->getViewHelper('$viewHelper190', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper190->setArguments($arguments187);
$viewHelper190->setRenderingContext($renderingContext);
$viewHelper190->setRenderChildrenClosure($renderChildrenClosure189);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output186 .= $viewHelper190->initializeArgumentsAndRender();

$output186 .= '
';
return $output186;
};
$viewHelper191 = $self->getViewHelper('$viewHelper191', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper191->setArguments($arguments184);
$viewHelper191->setRenderingContext($renderingContext);
$viewHelper191->setRenderChildrenClosure($renderChildrenClosure185);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output172 .= $viewHelper191->initializeArgumentsAndRender();

$output172 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments192 = array();
$arguments192['name'] = 'paginator';
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$output194 = '';

$output194 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments195 = array();
// Rendering Boolean node
$arguments195['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext), 1);
$arguments195['then'] = NULL;
$arguments195['else'] = NULL;
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
		<div class="page-navigation">
			<ul class="typo3-widget-paginator">
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments198 = array();
// Rendering Boolean node
$arguments198['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.previousPage', $renderingContext));
$arguments198['then'] = NULL;
$arguments198['else'] = NULL;
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$output200 = '';

$output200 .= '
					<li class="previous">
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments201 = array();
// Rendering Boolean node
$arguments201['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.previousPage', $renderingContext), 1);
$arguments201['then'] = NULL;
$arguments201['else'] = NULL;
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
							';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments204 = array();
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
								';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments207 = array();
$arguments207['action'] = 'index';
// Rendering Array
$array208 = array();
$array208['currentPage'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.previousPage', $renderingContext);
$arguments207['arguments'] = $array208;
$arguments207['additionalAttributes'] = NULL;
$arguments207['data'] = NULL;
$arguments207['section'] = '';
$arguments207['format'] = '';
$arguments207['ajax'] = false;
$arguments207['includeWidgetContext'] = false;
$arguments207['class'] = NULL;
$arguments207['dir'] = NULL;
$arguments207['id'] = NULL;
$arguments207['lang'] = NULL;
$arguments207['style'] = NULL;
$arguments207['title'] = NULL;
$arguments207['accesskey'] = NULL;
$arguments207['tabindex'] = NULL;
$arguments207['onclick'] = NULL;
$arguments207['name'] = NULL;
$arguments207['rel'] = NULL;
$arguments207['rev'] = NULL;
$arguments207['target'] = NULL;
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return 'previous';
};
$viewHelper210 = $self->getViewHelper('$viewHelper210', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper210->setArguments($arguments207);
$viewHelper210->setRenderingContext($renderingContext);
$viewHelper210->setRenderChildrenClosure($renderChildrenClosure209);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output206 .= $viewHelper210->initializeArgumentsAndRender();

$output206 .= '
							';
return $output206;
};
$viewHelper211 = $self->getViewHelper('$viewHelper211', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper211->setArguments($arguments204);
$viewHelper211->setRenderingContext($renderingContext);
$viewHelper211->setRenderChildrenClosure($renderChildrenClosure205);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output203 .= $viewHelper211->initializeArgumentsAndRender();

$output203 .= '
							';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments212 = array();
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$output214 = '';

$output214 .= '
								';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments215 = array();
$arguments215['action'] = 'index';
$arguments215['additionalAttributes'] = NULL;
$arguments215['data'] = NULL;
$arguments215['arguments'] = array (
);
$arguments215['section'] = '';
$arguments215['format'] = '';
$arguments215['ajax'] = false;
$arguments215['includeWidgetContext'] = false;
$arguments215['class'] = NULL;
$arguments215['dir'] = NULL;
$arguments215['id'] = NULL;
$arguments215['lang'] = NULL;
$arguments215['style'] = NULL;
$arguments215['title'] = NULL;
$arguments215['accesskey'] = NULL;
$arguments215['tabindex'] = NULL;
$arguments215['onclick'] = NULL;
$arguments215['name'] = NULL;
$arguments215['rel'] = NULL;
$arguments215['rev'] = NULL;
$arguments215['target'] = NULL;
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return 'previous';
};
$viewHelper217 = $self->getViewHelper('$viewHelper217', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper217->setArguments($arguments215);
$viewHelper217->setRenderingContext($renderingContext);
$viewHelper217->setRenderChildrenClosure($renderChildrenClosure216);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output214 .= $viewHelper217->initializeArgumentsAndRender();

$output214 .= '
							';
return $output214;
};
$viewHelper218 = $self->getViewHelper('$viewHelper218', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper218->setArguments($arguments212);
$viewHelper218->setRenderingContext($renderingContext);
$viewHelper218->setRenderChildrenClosure($renderChildrenClosure213);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output203 .= $viewHelper218->initializeArgumentsAndRender();

$output203 .= '
						';
return $output203;
};
$arguments201['__thenClosure'] = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
								';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments220 = array();
$arguments220['action'] = 'index';
// Rendering Array
$array221 = array();
$array221['currentPage'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.previousPage', $renderingContext);
$arguments220['arguments'] = $array221;
$arguments220['additionalAttributes'] = NULL;
$arguments220['data'] = NULL;
$arguments220['section'] = '';
$arguments220['format'] = '';
$arguments220['ajax'] = false;
$arguments220['includeWidgetContext'] = false;
$arguments220['class'] = NULL;
$arguments220['dir'] = NULL;
$arguments220['id'] = NULL;
$arguments220['lang'] = NULL;
$arguments220['style'] = NULL;
$arguments220['title'] = NULL;
$arguments220['accesskey'] = NULL;
$arguments220['tabindex'] = NULL;
$arguments220['onclick'] = NULL;
$arguments220['name'] = NULL;
$arguments220['rel'] = NULL;
$arguments220['rev'] = NULL;
$arguments220['target'] = NULL;
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return 'previous';
};
$viewHelper223 = $self->getViewHelper('$viewHelper223', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper223->setArguments($arguments220);
$viewHelper223->setRenderingContext($renderingContext);
$viewHelper223->setRenderChildrenClosure($renderChildrenClosure222);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output219 .= $viewHelper223->initializeArgumentsAndRender();

$output219 .= '
							';
return $output219;
};
$arguments201['__elseClosure'] = function() use ($renderingContext, $self) {
$output224 = '';

$output224 .= '
								';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments225 = array();
$arguments225['action'] = 'index';
$arguments225['additionalAttributes'] = NULL;
$arguments225['data'] = NULL;
$arguments225['arguments'] = array (
);
$arguments225['section'] = '';
$arguments225['format'] = '';
$arguments225['ajax'] = false;
$arguments225['includeWidgetContext'] = false;
$arguments225['class'] = NULL;
$arguments225['dir'] = NULL;
$arguments225['id'] = NULL;
$arguments225['lang'] = NULL;
$arguments225['style'] = NULL;
$arguments225['title'] = NULL;
$arguments225['accesskey'] = NULL;
$arguments225['tabindex'] = NULL;
$arguments225['onclick'] = NULL;
$arguments225['name'] = NULL;
$arguments225['rel'] = NULL;
$arguments225['rev'] = NULL;
$arguments225['target'] = NULL;
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return 'previous';
};
$viewHelper227 = $self->getViewHelper('$viewHelper227', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper227->setArguments($arguments225);
$viewHelper227->setRenderingContext($renderingContext);
$viewHelper227->setRenderChildrenClosure($renderChildrenClosure226);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output224 .= $viewHelper227->initializeArgumentsAndRender();

$output224 .= '
							';
return $output224;
};
$viewHelper228 = $self->getViewHelper('$viewHelper228', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper228->setArguments($arguments201);
$viewHelper228->setRenderingContext($renderingContext);
$viewHelper228->setRenderChildrenClosure($renderChildrenClosure202);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output200 .= $viewHelper228->initializeArgumentsAndRender();

$output200 .= '
					</li>
				';
return $output200;
};
$viewHelper229 = $self->getViewHelper('$viewHelper229', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper229->setArguments($arguments198);
$viewHelper229->setRenderingContext($renderingContext);
$viewHelper229->setRenderChildrenClosure($renderChildrenClosure199);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output197 .= $viewHelper229->initializeArgumentsAndRender();

$output197 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments230 = array();
// Rendering Boolean node
$arguments230['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.displayRangeStart', $renderingContext), 1);
$arguments230['then'] = NULL;
$arguments230['else'] = NULL;
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
					<li class="first">
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments233 = array();
$arguments233['action'] = 'index';
$arguments233['additionalAttributes'] = NULL;
$arguments233['data'] = NULL;
$arguments233['arguments'] = array (
);
$arguments233['section'] = '';
$arguments233['format'] = '';
$arguments233['ajax'] = false;
$arguments233['includeWidgetContext'] = false;
$arguments233['class'] = NULL;
$arguments233['dir'] = NULL;
$arguments233['id'] = NULL;
$arguments233['lang'] = NULL;
$arguments233['style'] = NULL;
$arguments233['title'] = NULL;
$arguments233['accesskey'] = NULL;
$arguments233['tabindex'] = NULL;
$arguments233['onclick'] = NULL;
$arguments233['name'] = NULL;
$arguments233['rel'] = NULL;
$arguments233['rev'] = NULL;
$arguments233['target'] = NULL;
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return '1';
};
$viewHelper235 = $self->getViewHelper('$viewHelper235', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper235->setArguments($arguments233);
$viewHelper235->setRenderingContext($renderingContext);
$viewHelper235->setRenderChildrenClosure($renderChildrenClosure234);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output232 .= $viewHelper235->initializeArgumentsAndRender();

$output232 .= '
					</li>
				';
return $output232;
};
$viewHelper236 = $self->getViewHelper('$viewHelper236', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper236->setArguments($arguments230);
$viewHelper236->setRenderingContext($renderingContext);
$viewHelper236->setRenderChildrenClosure($renderChildrenClosure231);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output197 .= $viewHelper236->initializeArgumentsAndRender();

$output197 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments237 = array();
// Rendering Boolean node
$arguments237['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.hasLessPages', $renderingContext));
$arguments237['then'] = NULL;
$arguments237['else'] = NULL;
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return '
					<li>...</li>
				';
};
$viewHelper239 = $self->getViewHelper('$viewHelper239', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper239->setArguments($arguments237);
$viewHelper239->setRenderingContext($renderingContext);
$viewHelper239->setRenderChildrenClosure($renderChildrenClosure238);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output197 .= $viewHelper239->initializeArgumentsAndRender();

$output197 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments240 = array();
$arguments240['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.pages', $renderingContext);
$arguments240['as'] = 'page';
$arguments240['key'] = '';
$arguments240['reverse'] = false;
$arguments240['iteration'] = NULL;
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$output242 = '';

$output242 .= '
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments243 = array();
// Rendering Boolean node
$arguments243['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.isCurrent', $renderingContext));
$arguments243['then'] = NULL;
$arguments243['else'] = NULL;
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
$output245 = '';

$output245 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments246 = array();
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
$output248 = '';

$output248 .= '
							<li class="current">
								';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments249 = array();
$arguments249['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments249['keepQuotes'] = false;
$arguments249['encoding'] = 'UTF-8';
$arguments249['doubleEncode'] = true;
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return NULL;
};
$value251 = ($arguments249['value'] !== NULL ? $arguments249['value'] : $renderChildrenClosure250());

$output248 .= !is_string($value251) && !(is_object($value251) && method_exists($value251, '__toString')) ? $value251 : htmlspecialchars($value251, ($arguments249['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments249['encoding'], $arguments249['doubleEncode']);

$output248 .= '
							</li>
						';
return $output248;
};
$viewHelper252 = $self->getViewHelper('$viewHelper252', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper252->setArguments($arguments246);
$viewHelper252->setRenderingContext($renderingContext);
$viewHelper252->setRenderChildrenClosure($renderChildrenClosure247);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output245 .= $viewHelper252->initializeArgumentsAndRender();

$output245 .= '
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments253 = array();
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$output255 = '';

$output255 .= '
							<li>
								';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments256 = array();
// Rendering Boolean node
$arguments256['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext), 1);
$arguments256['then'] = NULL;
$arguments256['else'] = NULL;
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
									';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments259 = array();
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$output261 = '';

$output261 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments262 = array();
$arguments262['action'] = 'index';
// Rendering Array
$array263 = array();
$array263['currentPage'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments262['arguments'] = $array263;
$arguments262['additionalAttributes'] = NULL;
$arguments262['data'] = NULL;
$arguments262['section'] = '';
$arguments262['format'] = '';
$arguments262['ajax'] = false;
$arguments262['includeWidgetContext'] = false;
$arguments262['class'] = NULL;
$arguments262['dir'] = NULL;
$arguments262['id'] = NULL;
$arguments262['lang'] = NULL;
$arguments262['style'] = NULL;
$arguments262['title'] = NULL;
$arguments262['accesskey'] = NULL;
$arguments262['tabindex'] = NULL;
$arguments262['onclick'] = NULL;
$arguments262['name'] = NULL;
$arguments262['rel'] = NULL;
$arguments262['rev'] = NULL;
$arguments262['target'] = NULL;
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments265 = array();
$arguments265['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments265['keepQuotes'] = false;
$arguments265['encoding'] = 'UTF-8';
$arguments265['doubleEncode'] = true;
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
return NULL;
};
$value267 = ($arguments265['value'] !== NULL ? $arguments265['value'] : $renderChildrenClosure266());
return !is_string($value267) && !(is_object($value267) && method_exists($value267, '__toString')) ? $value267 : htmlspecialchars($value267, ($arguments265['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments265['encoding'], $arguments265['doubleEncode']);
};
$viewHelper268 = $self->getViewHelper('$viewHelper268', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper268->setArguments($arguments262);
$viewHelper268->setRenderingContext($renderingContext);
$viewHelper268->setRenderChildrenClosure($renderChildrenClosure264);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output261 .= $viewHelper268->initializeArgumentsAndRender();

$output261 .= '
									';
return $output261;
};
$viewHelper269 = $self->getViewHelper('$viewHelper269', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper269->setArguments($arguments259);
$viewHelper269->setRenderingContext($renderingContext);
$viewHelper269->setRenderChildrenClosure($renderChildrenClosure260);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output258 .= $viewHelper269->initializeArgumentsAndRender();

$output258 .= '
									';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments270 = array();
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments273 = array();
$arguments273['action'] = 'index';
$arguments273['additionalAttributes'] = NULL;
$arguments273['data'] = NULL;
$arguments273['arguments'] = array (
);
$arguments273['section'] = '';
$arguments273['format'] = '';
$arguments273['ajax'] = false;
$arguments273['includeWidgetContext'] = false;
$arguments273['class'] = NULL;
$arguments273['dir'] = NULL;
$arguments273['id'] = NULL;
$arguments273['lang'] = NULL;
$arguments273['style'] = NULL;
$arguments273['title'] = NULL;
$arguments273['accesskey'] = NULL;
$arguments273['tabindex'] = NULL;
$arguments273['onclick'] = NULL;
$arguments273['name'] = NULL;
$arguments273['rel'] = NULL;
$arguments273['rev'] = NULL;
$arguments273['target'] = NULL;
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments275 = array();
$arguments275['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments275['keepQuotes'] = false;
$arguments275['encoding'] = 'UTF-8';
$arguments275['doubleEncode'] = true;
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return NULL;
};
$value277 = ($arguments275['value'] !== NULL ? $arguments275['value'] : $renderChildrenClosure276());
return !is_string($value277) && !(is_object($value277) && method_exists($value277, '__toString')) ? $value277 : htmlspecialchars($value277, ($arguments275['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments275['encoding'], $arguments275['doubleEncode']);
};
$viewHelper278 = $self->getViewHelper('$viewHelper278', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper278->setArguments($arguments273);
$viewHelper278->setRenderingContext($renderingContext);
$viewHelper278->setRenderChildrenClosure($renderChildrenClosure274);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output272 .= $viewHelper278->initializeArgumentsAndRender();

$output272 .= '
									';
return $output272;
};
$viewHelper279 = $self->getViewHelper('$viewHelper279', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper279->setArguments($arguments270);
$viewHelper279->setRenderingContext($renderingContext);
$viewHelper279->setRenderChildrenClosure($renderChildrenClosure271);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output258 .= $viewHelper279->initializeArgumentsAndRender();

$output258 .= '
								';
return $output258;
};
$arguments256['__thenClosure'] = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments281 = array();
$arguments281['action'] = 'index';
// Rendering Array
$array282 = array();
$array282['currentPage'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments281['arguments'] = $array282;
$arguments281['additionalAttributes'] = NULL;
$arguments281['data'] = NULL;
$arguments281['section'] = '';
$arguments281['format'] = '';
$arguments281['ajax'] = false;
$arguments281['includeWidgetContext'] = false;
$arguments281['class'] = NULL;
$arguments281['dir'] = NULL;
$arguments281['id'] = NULL;
$arguments281['lang'] = NULL;
$arguments281['style'] = NULL;
$arguments281['title'] = NULL;
$arguments281['accesskey'] = NULL;
$arguments281['tabindex'] = NULL;
$arguments281['onclick'] = NULL;
$arguments281['name'] = NULL;
$arguments281['rel'] = NULL;
$arguments281['rev'] = NULL;
$arguments281['target'] = NULL;
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments284 = array();
$arguments284['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments284['keepQuotes'] = false;
$arguments284['encoding'] = 'UTF-8';
$arguments284['doubleEncode'] = true;
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
return NULL;
};
$value286 = ($arguments284['value'] !== NULL ? $arguments284['value'] : $renderChildrenClosure285());
return !is_string($value286) && !(is_object($value286) && method_exists($value286, '__toString')) ? $value286 : htmlspecialchars($value286, ($arguments284['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments284['encoding'], $arguments284['doubleEncode']);
};
$viewHelper287 = $self->getViewHelper('$viewHelper287', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper287->setArguments($arguments281);
$viewHelper287->setRenderingContext($renderingContext);
$viewHelper287->setRenderChildrenClosure($renderChildrenClosure283);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output280 .= $viewHelper287->initializeArgumentsAndRender();

$output280 .= '
									';
return $output280;
};
$arguments256['__elseClosure'] = function() use ($renderingContext, $self) {
$output288 = '';

$output288 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments289 = array();
$arguments289['action'] = 'index';
$arguments289['additionalAttributes'] = NULL;
$arguments289['data'] = NULL;
$arguments289['arguments'] = array (
);
$arguments289['section'] = '';
$arguments289['format'] = '';
$arguments289['ajax'] = false;
$arguments289['includeWidgetContext'] = false;
$arguments289['class'] = NULL;
$arguments289['dir'] = NULL;
$arguments289['id'] = NULL;
$arguments289['lang'] = NULL;
$arguments289['style'] = NULL;
$arguments289['title'] = NULL;
$arguments289['accesskey'] = NULL;
$arguments289['tabindex'] = NULL;
$arguments289['onclick'] = NULL;
$arguments289['name'] = NULL;
$arguments289['rel'] = NULL;
$arguments289['rev'] = NULL;
$arguments289['target'] = NULL;
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments291 = array();
$arguments291['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments291['keepQuotes'] = false;
$arguments291['encoding'] = 'UTF-8';
$arguments291['doubleEncode'] = true;
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
return NULL;
};
$value293 = ($arguments291['value'] !== NULL ? $arguments291['value'] : $renderChildrenClosure292());
return !is_string($value293) && !(is_object($value293) && method_exists($value293, '__toString')) ? $value293 : htmlspecialchars($value293, ($arguments291['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments291['encoding'], $arguments291['doubleEncode']);
};
$viewHelper294 = $self->getViewHelper('$viewHelper294', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper294->setArguments($arguments289);
$viewHelper294->setRenderingContext($renderingContext);
$viewHelper294->setRenderChildrenClosure($renderChildrenClosure290);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output288 .= $viewHelper294->initializeArgumentsAndRender();

$output288 .= '
									';
return $output288;
};
$viewHelper295 = $self->getViewHelper('$viewHelper295', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper295->setArguments($arguments256);
$viewHelper295->setRenderingContext($renderingContext);
$viewHelper295->setRenderChildrenClosure($renderChildrenClosure257);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output255 .= $viewHelper295->initializeArgumentsAndRender();

$output255 .= '
							</li>
						';
return $output255;
};
$viewHelper296 = $self->getViewHelper('$viewHelper296', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper296->setArguments($arguments253);
$viewHelper296->setRenderingContext($renderingContext);
$viewHelper296->setRenderChildrenClosure($renderChildrenClosure254);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output245 .= $viewHelper296->initializeArgumentsAndRender();

$output245 .= '
					';
return $output245;
};
$arguments243['__thenClosure'] = function() use ($renderingContext, $self) {
$output297 = '';

$output297 .= '
							<li class="current">
								';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments298 = array();
$arguments298['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments298['keepQuotes'] = false;
$arguments298['encoding'] = 'UTF-8';
$arguments298['doubleEncode'] = true;
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
return NULL;
};
$value300 = ($arguments298['value'] !== NULL ? $arguments298['value'] : $renderChildrenClosure299());

$output297 .= !is_string($value300) && !(is_object($value300) && method_exists($value300, '__toString')) ? $value300 : htmlspecialchars($value300, ($arguments298['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments298['encoding'], $arguments298['doubleEncode']);

$output297 .= '
							</li>
						';
return $output297;
};
$arguments243['__elseClosure'] = function() use ($renderingContext, $self) {
$output301 = '';

$output301 .= '
							<li>
								';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments302 = array();
// Rendering Boolean node
$arguments302['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext), 1);
$arguments302['then'] = NULL;
$arguments302['else'] = NULL;
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
$output304 = '';

$output304 .= '
									';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments305 = array();
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$output307 = '';

$output307 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments308 = array();
$arguments308['action'] = 'index';
// Rendering Array
$array309 = array();
$array309['currentPage'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments308['arguments'] = $array309;
$arguments308['additionalAttributes'] = NULL;
$arguments308['data'] = NULL;
$arguments308['section'] = '';
$arguments308['format'] = '';
$arguments308['ajax'] = false;
$arguments308['includeWidgetContext'] = false;
$arguments308['class'] = NULL;
$arguments308['dir'] = NULL;
$arguments308['id'] = NULL;
$arguments308['lang'] = NULL;
$arguments308['style'] = NULL;
$arguments308['title'] = NULL;
$arguments308['accesskey'] = NULL;
$arguments308['tabindex'] = NULL;
$arguments308['onclick'] = NULL;
$arguments308['name'] = NULL;
$arguments308['rel'] = NULL;
$arguments308['rev'] = NULL;
$arguments308['target'] = NULL;
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments311 = array();
$arguments311['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments311['keepQuotes'] = false;
$arguments311['encoding'] = 'UTF-8';
$arguments311['doubleEncode'] = true;
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
return NULL;
};
$value313 = ($arguments311['value'] !== NULL ? $arguments311['value'] : $renderChildrenClosure312());
return !is_string($value313) && !(is_object($value313) && method_exists($value313, '__toString')) ? $value313 : htmlspecialchars($value313, ($arguments311['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments311['encoding'], $arguments311['doubleEncode']);
};
$viewHelper314 = $self->getViewHelper('$viewHelper314', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper314->setArguments($arguments308);
$viewHelper314->setRenderingContext($renderingContext);
$viewHelper314->setRenderChildrenClosure($renderChildrenClosure310);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output307 .= $viewHelper314->initializeArgumentsAndRender();

$output307 .= '
									';
return $output307;
};
$viewHelper315 = $self->getViewHelper('$viewHelper315', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper315->setArguments($arguments305);
$viewHelper315->setRenderingContext($renderingContext);
$viewHelper315->setRenderChildrenClosure($renderChildrenClosure306);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output304 .= $viewHelper315->initializeArgumentsAndRender();

$output304 .= '
									';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments316 = array();
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
$output318 = '';

$output318 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments319 = array();
$arguments319['action'] = 'index';
$arguments319['additionalAttributes'] = NULL;
$arguments319['data'] = NULL;
$arguments319['arguments'] = array (
);
$arguments319['section'] = '';
$arguments319['format'] = '';
$arguments319['ajax'] = false;
$arguments319['includeWidgetContext'] = false;
$arguments319['class'] = NULL;
$arguments319['dir'] = NULL;
$arguments319['id'] = NULL;
$arguments319['lang'] = NULL;
$arguments319['style'] = NULL;
$arguments319['title'] = NULL;
$arguments319['accesskey'] = NULL;
$arguments319['tabindex'] = NULL;
$arguments319['onclick'] = NULL;
$arguments319['name'] = NULL;
$arguments319['rel'] = NULL;
$arguments319['rev'] = NULL;
$arguments319['target'] = NULL;
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments321 = array();
$arguments321['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments321['keepQuotes'] = false;
$arguments321['encoding'] = 'UTF-8';
$arguments321['doubleEncode'] = true;
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
return NULL;
};
$value323 = ($arguments321['value'] !== NULL ? $arguments321['value'] : $renderChildrenClosure322());
return !is_string($value323) && !(is_object($value323) && method_exists($value323, '__toString')) ? $value323 : htmlspecialchars($value323, ($arguments321['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments321['encoding'], $arguments321['doubleEncode']);
};
$viewHelper324 = $self->getViewHelper('$viewHelper324', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper324->setArguments($arguments319);
$viewHelper324->setRenderingContext($renderingContext);
$viewHelper324->setRenderChildrenClosure($renderChildrenClosure320);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output318 .= $viewHelper324->initializeArgumentsAndRender();

$output318 .= '
									';
return $output318;
};
$viewHelper325 = $self->getViewHelper('$viewHelper325', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper325->setArguments($arguments316);
$viewHelper325->setRenderingContext($renderingContext);
$viewHelper325->setRenderChildrenClosure($renderChildrenClosure317);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output304 .= $viewHelper325->initializeArgumentsAndRender();

$output304 .= '
								';
return $output304;
};
$arguments302['__thenClosure'] = function() use ($renderingContext, $self) {
$output326 = '';

$output326 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments327 = array();
$arguments327['action'] = 'index';
// Rendering Array
$array328 = array();
$array328['currentPage'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments327['arguments'] = $array328;
$arguments327['additionalAttributes'] = NULL;
$arguments327['data'] = NULL;
$arguments327['section'] = '';
$arguments327['format'] = '';
$arguments327['ajax'] = false;
$arguments327['includeWidgetContext'] = false;
$arguments327['class'] = NULL;
$arguments327['dir'] = NULL;
$arguments327['id'] = NULL;
$arguments327['lang'] = NULL;
$arguments327['style'] = NULL;
$arguments327['title'] = NULL;
$arguments327['accesskey'] = NULL;
$arguments327['tabindex'] = NULL;
$arguments327['onclick'] = NULL;
$arguments327['name'] = NULL;
$arguments327['rel'] = NULL;
$arguments327['rev'] = NULL;
$arguments327['target'] = NULL;
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments330 = array();
$arguments330['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments330['keepQuotes'] = false;
$arguments330['encoding'] = 'UTF-8';
$arguments330['doubleEncode'] = true;
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
return NULL;
};
$value332 = ($arguments330['value'] !== NULL ? $arguments330['value'] : $renderChildrenClosure331());
return !is_string($value332) && !(is_object($value332) && method_exists($value332, '__toString')) ? $value332 : htmlspecialchars($value332, ($arguments330['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments330['encoding'], $arguments330['doubleEncode']);
};
$viewHelper333 = $self->getViewHelper('$viewHelper333', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper333->setArguments($arguments327);
$viewHelper333->setRenderingContext($renderingContext);
$viewHelper333->setRenderChildrenClosure($renderChildrenClosure329);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output326 .= $viewHelper333->initializeArgumentsAndRender();

$output326 .= '
									';
return $output326;
};
$arguments302['__elseClosure'] = function() use ($renderingContext, $self) {
$output334 = '';

$output334 .= '
										';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments335 = array();
$arguments335['action'] = 'index';
$arguments335['additionalAttributes'] = NULL;
$arguments335['data'] = NULL;
$arguments335['arguments'] = array (
);
$arguments335['section'] = '';
$arguments335['format'] = '';
$arguments335['ajax'] = false;
$arguments335['includeWidgetContext'] = false;
$arguments335['class'] = NULL;
$arguments335['dir'] = NULL;
$arguments335['id'] = NULL;
$arguments335['lang'] = NULL;
$arguments335['style'] = NULL;
$arguments335['title'] = NULL;
$arguments335['accesskey'] = NULL;
$arguments335['tabindex'] = NULL;
$arguments335['onclick'] = NULL;
$arguments335['name'] = NULL;
$arguments335['rel'] = NULL;
$arguments335['rev'] = NULL;
$arguments335['target'] = NULL;
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments337 = array();
$arguments337['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'page.number', $renderingContext);
$arguments337['keepQuotes'] = false;
$arguments337['encoding'] = 'UTF-8';
$arguments337['doubleEncode'] = true;
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
return NULL;
};
$value339 = ($arguments337['value'] !== NULL ? $arguments337['value'] : $renderChildrenClosure338());
return !is_string($value339) && !(is_object($value339) && method_exists($value339, '__toString')) ? $value339 : htmlspecialchars($value339, ($arguments337['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments337['encoding'], $arguments337['doubleEncode']);
};
$viewHelper340 = $self->getViewHelper('$viewHelper340', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper340->setArguments($arguments335);
$viewHelper340->setRenderingContext($renderingContext);
$viewHelper340->setRenderChildrenClosure($renderChildrenClosure336);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output334 .= $viewHelper340->initializeArgumentsAndRender();

$output334 .= '
									';
return $output334;
};
$viewHelper341 = $self->getViewHelper('$viewHelper341', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper341->setArguments($arguments302);
$viewHelper341->setRenderingContext($renderingContext);
$viewHelper341->setRenderChildrenClosure($renderChildrenClosure303);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output301 .= $viewHelper341->initializeArgumentsAndRender();

$output301 .= '
							</li>
						';
return $output301;
};
$viewHelper342 = $self->getViewHelper('$viewHelper342', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper342->setArguments($arguments243);
$viewHelper342->setRenderingContext($renderingContext);
$viewHelper342->setRenderChildrenClosure($renderChildrenClosure244);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output242 .= $viewHelper342->initializeArgumentsAndRender();

$output242 .= '
				';
return $output242;
};

$output197 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output197 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments343 = array();
// Rendering Boolean node
$arguments343['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.hasMorePages', $renderingContext));
$arguments343['then'] = NULL;
$arguments343['else'] = NULL;
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
return '
					<li>...</li>
				';
};
$viewHelper345 = $self->getViewHelper('$viewHelper345', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper345->setArguments($arguments343);
$viewHelper345->setRenderingContext($renderingContext);
$viewHelper345->setRenderChildrenClosure($renderChildrenClosure344);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output197 .= $viewHelper345->initializeArgumentsAndRender();

$output197 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments346 = array();
// Rendering Boolean node
$arguments346['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.displayRangeEnd', $renderingContext), \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext));
$arguments346['then'] = NULL;
$arguments346['else'] = NULL;
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= '
					<li class="last">
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments349 = array();
$arguments349['action'] = 'index';
// Rendering Array
$array350 = array();
$array350['currentPage'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments349['arguments'] = $array350;
$arguments349['additionalAttributes'] = NULL;
$arguments349['data'] = NULL;
$arguments349['section'] = '';
$arguments349['format'] = '';
$arguments349['ajax'] = false;
$arguments349['includeWidgetContext'] = false;
$arguments349['class'] = NULL;
$arguments349['dir'] = NULL;
$arguments349['id'] = NULL;
$arguments349['lang'] = NULL;
$arguments349['style'] = NULL;
$arguments349['title'] = NULL;
$arguments349['accesskey'] = NULL;
$arguments349['tabindex'] = NULL;
$arguments349['onclick'] = NULL;
$arguments349['name'] = NULL;
$arguments349['rel'] = NULL;
$arguments349['rev'] = NULL;
$arguments349['target'] = NULL;
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments352 = array();
$arguments352['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments352['keepQuotes'] = false;
$arguments352['encoding'] = 'UTF-8';
$arguments352['doubleEncode'] = true;
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
return NULL;
};
$value354 = ($arguments352['value'] !== NULL ? $arguments352['value'] : $renderChildrenClosure353());
return !is_string($value354) && !(is_object($value354) && method_exists($value354, '__toString')) ? $value354 : htmlspecialchars($value354, ($arguments352['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments352['encoding'], $arguments352['doubleEncode']);
};
$viewHelper355 = $self->getViewHelper('$viewHelper355', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper355->setArguments($arguments349);
$viewHelper355->setRenderingContext($renderingContext);
$viewHelper355->setRenderChildrenClosure($renderChildrenClosure351);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output348 .= $viewHelper355->initializeArgumentsAndRender();

$output348 .= '
					</li>
				';
return $output348;
};
$viewHelper356 = $self->getViewHelper('$viewHelper356', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper356->setArguments($arguments346);
$viewHelper356->setRenderingContext($renderingContext);
$viewHelper356->setRenderChildrenClosure($renderChildrenClosure347);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output197 .= $viewHelper356->initializeArgumentsAndRender();

$output197 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments357 = array();
// Rendering Boolean node
$arguments357['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.nextPage', $renderingContext));
$arguments357['then'] = NULL;
$arguments357['else'] = NULL;
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$output359 = '';

$output359 .= '
					<li class="next">
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments360 = array();
$arguments360['action'] = 'index';
// Rendering Array
$array361 = array();
$array361['currentPage'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.nextPage', $renderingContext);
$arguments360['arguments'] = $array361;
$arguments360['additionalAttributes'] = NULL;
$arguments360['data'] = NULL;
$arguments360['section'] = '';
$arguments360['format'] = '';
$arguments360['ajax'] = false;
$arguments360['includeWidgetContext'] = false;
$arguments360['class'] = NULL;
$arguments360['dir'] = NULL;
$arguments360['id'] = NULL;
$arguments360['lang'] = NULL;
$arguments360['style'] = NULL;
$arguments360['title'] = NULL;
$arguments360['accesskey'] = NULL;
$arguments360['tabindex'] = NULL;
$arguments360['onclick'] = NULL;
$arguments360['name'] = NULL;
$arguments360['rel'] = NULL;
$arguments360['rev'] = NULL;
$arguments360['target'] = NULL;
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
return 'next';
};
$viewHelper363 = $self->getViewHelper('$viewHelper363', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper363->setArguments($arguments360);
$viewHelper363->setRenderingContext($renderingContext);
$viewHelper363->setRenderChildrenClosure($renderChildrenClosure362);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Widget\LinkViewHelper

$output359 .= $viewHelper363->initializeArgumentsAndRender();

$output359 .= '
					</li>
				';
return $output359;
};
$viewHelper364 = $self->getViewHelper('$viewHelper364', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper364->setArguments($arguments357);
$viewHelper364->setRenderingContext($renderingContext);
$viewHelper364->setRenderChildrenClosure($renderChildrenClosure358);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output197 .= $viewHelper364->initializeArgumentsAndRender();

$output197 .= '
			</ul>
		</div>
	';
return $output197;
};
$viewHelper365 = $self->getViewHelper('$viewHelper365', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper365->setArguments($arguments195);
$viewHelper365->setRenderingContext($renderingContext);
$viewHelper365->setRenderChildrenClosure($renderChildrenClosure196);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output194 .= $viewHelper365->initializeArgumentsAndRender();

$output194 .= '
';
return $output194;
};

$output172 .= '';

$output172 .= '
';

return $output172;
}


}
#0             105031    