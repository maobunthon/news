<?php class FluidCache_WE_News_Home_action_filter_7c2116b88ee0db9c8c1afe8e27d4b6e0384e37d8 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Title
 */
public function section_768e0c1c69573fb588f61f1308a015c11468e05f(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return 'Show By Category';
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '


	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
				<div class="carousel-caption">
					<h3>...</h3>
					<p>...</p>
				</div>
			</div>
			<div class="item">
				<img src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
				<div class="carousel-caption">
					<h3>...</h3>
					<p>...</p>
				</div>
			</div>
			<div class="item">
				<img src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
				<div class="carousel-caption">
					<h3>...</h3>
					<p>...</p>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<br>
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments1 = array();
$arguments1['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments1['as'] = 'myNews';
$arguments1['key'] = '';
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
		<hr>
		<div class="row">
			<div class="col-md-3" style="margin-bottom: 10px">
				<img width="100%" src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
			</div>
			<div class="col-md-9">
				<label>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments4 = array();
$arguments4['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.title', $renderingContext);
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = 'UTF-8';
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output3 .= !is_string($value6) && !(is_object($value6) && method_exists($value6, '__toString')) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments4['encoding'], $arguments4['doubleEncode']);

$output3 .= '</label>
				<p>';
// Rendering ViewHelper WE\News\ViewHelpers\GetSubStringViewHelper
$arguments7 = array();
$arguments7['str'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.content', $renderingContext);
$arguments7['start'] = '0';
$arguments7['end'] = '190';
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'WE\News\ViewHelpers\GetSubStringViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper WE\News\ViewHelpers\GetSubStringViewHelper

$output3 .= $viewHelper9->initializeArgumentsAndRender();

$output3 .= '</p>
				<div class="row pull-right" style="padding-right: 15px;">
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments10 = array();
$arguments10['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.categories', $renderingContext);
$arguments10['as'] = 'category';
$arguments10['key'] = '';
$arguments10['reverse'] = false;
$arguments10['iteration'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
						<span class="label label-default">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.name', $renderingContext);
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = 'UTF-8';
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());

$output12 .= !is_string($value15) && !(is_object($value15) && method_exists($value15, '__toString')) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments13['encoding'], $arguments13['doubleEncode']);

$output12 .= '</span>
					';
return $output12;
};

$output3 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output3 .= '
				</div>
				<div class="row pull-left"  style="padding-left: 15px;">
					<span class="label label-default">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.user.name', $renderingContext);
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = 'UTF-8';
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output3 .= !is_string($value18) && !(is_object($value18) && method_exists($value18, '__toString')) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments16['encoding'], $arguments16['doubleEncode']);

$output3 .= '</span>
				</div>
			</div>
		</div>
	';
return $output3;
};

$output0 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

	<hr>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output19 = '';

$output19 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments20 = array();
$arguments20['name'] = 'Default';
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper22->setArguments($arguments20);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output19 .= $viewHelper22->initializeArgumentsAndRender();

$output19 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments23 = array();
$arguments23['name'] = 'Title';
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return 'Show By Category';
};

$output19 .= '';

$output19 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments25 = array();
$arguments25['name'] = 'Content';
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '


	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
				<div class="carousel-caption">
					<h3>...</h3>
					<p>...</p>
				</div>
			</div>
			<div class="item">
				<img src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
				<div class="carousel-caption">
					<h3>...</h3>
					<p>...</p>
				</div>
			</div>
			<div class="item">
				<img src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
				<div class="carousel-caption">
					<h3>...</h3>
					<p>...</p>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<br>
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments28 = array();
$arguments28['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments28['as'] = 'myNews';
$arguments28['key'] = '';
$arguments28['reverse'] = false;
$arguments28['iteration'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
		<hr>
		<div class="row">
			<div class="col-md-3" style="margin-bottom: 10px">
				<img width="100%" src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
			</div>
			<div class="col-md-9">
				<label>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments31 = array();
$arguments31['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.title', $renderingContext);
$arguments31['keepQuotes'] = false;
$arguments31['encoding'] = 'UTF-8';
$arguments31['doubleEncode'] = true;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$value33 = ($arguments31['value'] !== NULL ? $arguments31['value'] : $renderChildrenClosure32());

$output30 .= !is_string($value33) && !(is_object($value33) && method_exists($value33, '__toString')) ? $value33 : htmlspecialchars($value33, ($arguments31['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments31['encoding'], $arguments31['doubleEncode']);

$output30 .= '</label>
				<p>';
// Rendering ViewHelper WE\News\ViewHelpers\GetSubStringViewHelper
$arguments34 = array();
$arguments34['str'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.content', $renderingContext);
$arguments34['start'] = '0';
$arguments34['end'] = '190';
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'WE\News\ViewHelpers\GetSubStringViewHelper');
$viewHelper36->setArguments($arguments34);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper WE\News\ViewHelpers\GetSubStringViewHelper

$output30 .= $viewHelper36->initializeArgumentsAndRender();

$output30 .= '</p>
				<div class="row pull-right" style="padding-right: 15px;">
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments37 = array();
$arguments37['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.categories', $renderingContext);
$arguments37['as'] = 'category';
$arguments37['key'] = '';
$arguments37['reverse'] = false;
$arguments37['iteration'] = NULL;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
						<span class="label label-default">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments40 = array();
$arguments40['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.name', $renderingContext);
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = 'UTF-8';
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());

$output39 .= !is_string($value42) && !(is_object($value42) && method_exists($value42, '__toString')) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments40['encoding'], $arguments40['doubleEncode']);

$output39 .= '</span>
					';
return $output39;
};

$output30 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output30 .= '
				</div>
				<div class="row pull-left"  style="padding-left: 15px;">
					<span class="label label-default">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments43 = array();
$arguments43['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.user.name', $renderingContext);
$arguments43['keepQuotes'] = false;
$arguments43['encoding'] = 'UTF-8';
$arguments43['doubleEncode'] = true;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$value45 = ($arguments43['value'] !== NULL ? $arguments43['value'] : $renderChildrenClosure44());

$output30 .= !is_string($value45) && !(is_object($value45) && method_exists($value45, '__toString')) ? $value45 : htmlspecialchars($value45, ($arguments43['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments43['encoding'], $arguments43['doubleEncode']);

$output30 .= '</span>
				</div>
			</div>
		</div>
	';
return $output30;
};

$output27 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '

	<hr>
';
return $output27;
};

$output19 .= '';

$output19 .= '
';

return $output19;
}


}
#0             16452     