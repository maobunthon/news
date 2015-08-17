<?php class FluidCache_WE_News_Home_action_filter_8a98abb4e6487d8e0d99da6a834da6657e2aa45e extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\DebugViewHelper
$arguments1 = array();
$arguments1['title'] = NULL;
$arguments1['typeOnly'] = false;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\Fluid\ViewHelpers\DebugViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\DebugViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments4 = array();
$arguments4['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments4['as'] = 'myNews';
$arguments4['key'] = '';
$arguments4['reverse'] = false;
$arguments4['iteration'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
		<hr>
		<div class="row">
			<div class="col-md-3" style="margin-bottom: 10px">
				<img width="100%" src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
			</div>
			<div class="col-md-9">
				<label>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments7 = array();
$arguments7['action'] = 'detail';
$arguments7['controller'] = 'Home';
// Rendering Array
$array8 = array();
$array8['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews', $renderingContext);
$arguments7['arguments'] = $array8;
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['package'] = NULL;
$arguments7['subpackage'] = NULL;
$arguments7['section'] = '';
$arguments7['format'] = '';
$arguments7['additionalParams'] = array (
);
$arguments7['addQueryString'] = false;
$arguments7['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments7['useParentRequest'] = false;
$arguments7['absolute'] = true;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['name'] = NULL;
$arguments7['rel'] = NULL;
$arguments7['rev'] = NULL;
$arguments7['target'] = NULL;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.title', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = 'UTF-8';
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());
return !is_string($value12) && !(is_object($value12) && method_exists($value12, '__toString')) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments10['encoding'], $arguments10['doubleEncode']);
};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper13->setArguments($arguments7);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output6 .= $viewHelper13->initializeArgumentsAndRender();

$output6 .= '</label>
				<p>';
// Rendering ViewHelper WE\News\ViewHelpers\GetSubStringViewHelper
$arguments14 = array();
$arguments14['str'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.content', $renderingContext);
$arguments14['start'] = '0';
$arguments14['end'] = '190';
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'WE\News\ViewHelpers\GetSubStringViewHelper');
$viewHelper16->setArguments($arguments14);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper WE\News\ViewHelpers\GetSubStringViewHelper

$output6 .= $viewHelper16->initializeArgumentsAndRender();

$output6 .= '</p>
				<div class="row pull-right" style="padding-right: 15px;">
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments17 = array();
$arguments17['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.categories', $renderingContext);
$arguments17['as'] = 'category';
$arguments17['key'] = '';
$arguments17['reverse'] = false;
$arguments17['iteration'] = NULL;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
						<span class="label label-default">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments20 = array();
$arguments20['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.name', $renderingContext);
$arguments20['keepQuotes'] = false;
$arguments20['encoding'] = 'UTF-8';
$arguments20['doubleEncode'] = true;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$value22 = ($arguments20['value'] !== NULL ? $arguments20['value'] : $renderChildrenClosure21());

$output19 .= !is_string($value22) && !(is_object($value22) && method_exists($value22, '__toString')) ? $value22 : htmlspecialchars($value22, ($arguments20['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments20['encoding'], $arguments20['doubleEncode']);

$output19 .= '</span>
					';
return $output19;
};

$output6 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output6 .= '
				</div>
				<div class="row pull-left"  style="padding-left: 15px;">
					<span class="label label-default">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments23 = array();
$arguments23['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.user.name', $renderingContext);
$arguments23['keepQuotes'] = false;
$arguments23['encoding'] = 'UTF-8';
$arguments23['doubleEncode'] = true;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$value25 = ($arguments23['value'] !== NULL ? $arguments23['value'] : $renderChildrenClosure24());

$output6 .= !is_string($value25) && !(is_object($value25) && method_exists($value25, '__toString')) ? $value25 : htmlspecialchars($value25, ($arguments23['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments23['encoding'], $arguments23['doubleEncode']);

$output6 .= '</span>
				</div>
			</div>
		</div>
	';
return $output6;
};

$output0 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * section Category
 */
public function section_a3c686e711e4720f99b4562bb3dbaae7ab658cf2(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output26 = '';

$output26 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments27 = array();
$arguments27['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategory', $renderingContext);
$arguments27['as'] = 'list';
$arguments27['key'] = '';
$arguments27['reverse'] = false;
$arguments27['iteration'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments30 = array();
$arguments30['action'] = 'filter';
$arguments30['controller'] = 'Home';
// Rendering Array
$array31 = array();
$array31['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'list.identity', $renderingContext);
$arguments30['arguments'] = $array31;
$arguments30['additionalAttributes'] = NULL;
$arguments30['data'] = NULL;
$arguments30['package'] = NULL;
$arguments30['subpackage'] = NULL;
$arguments30['section'] = '';
$arguments30['format'] = '';
$arguments30['additionalParams'] = array (
);
$arguments30['addQueryString'] = false;
$arguments30['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments30['useParentRequest'] = false;
$arguments30['absolute'] = true;
$arguments30['class'] = NULL;
$arguments30['dir'] = NULL;
$arguments30['id'] = NULL;
$arguments30['lang'] = NULL;
$arguments30['style'] = NULL;
$arguments30['title'] = NULL;
$arguments30['accesskey'] = NULL;
$arguments30['tabindex'] = NULL;
$arguments30['onclick'] = NULL;
$arguments30['name'] = NULL;
$arguments30['rel'] = NULL;
$arguments30['rev'] = NULL;
$arguments30['target'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments33 = array();
$arguments33['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'list.name', $renderingContext);
$arguments33['keepQuotes'] = false;
$arguments33['encoding'] = 'UTF-8';
$arguments33['doubleEncode'] = true;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$value35 = ($arguments33['value'] !== NULL ? $arguments33['value'] : $renderChildrenClosure34());
return !is_string($value35) && !(is_object($value35) && method_exists($value35, '__toString')) ? $value35 : htmlspecialchars($value35, ($arguments33['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments33['encoding'], $arguments33['doubleEncode']);
};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper36->setArguments($arguments30);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure32);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output29 .= $viewHelper36->initializeArgumentsAndRender();

$output29 .= '
	';
return $output29;
};

$output26 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
';

return $output26;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output37 = '';

$output37 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments38 = array();
$arguments38['name'] = 'Default';
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper40->setArguments($arguments38);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output37 .= $viewHelper40->initializeArgumentsAndRender();

$output37 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments41 = array();
$arguments41['name'] = 'Title';
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return 'Show By Category';
};

$output37 .= '';

$output37 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments43 = array();
$arguments43['name'] = 'Content';
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '


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
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\DebugViewHelper
$arguments46 = array();
$arguments46['title'] = NULL;
$arguments46['typeOnly'] = false;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\Fluid\ViewHelpers\DebugViewHelper');
$viewHelper48->setArguments($arguments46);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\DebugViewHelper

$output45 .= $viewHelper48->initializeArgumentsAndRender();

$output45 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments49 = array();
$arguments49['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments49['as'] = 'myNews';
$arguments49['key'] = '';
$arguments49['reverse'] = false;
$arguments49['iteration'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
		<hr>
		<div class="row">
			<div class="col-md-3" style="margin-bottom: 10px">
				<img width="100%" src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
			</div>
			<div class="col-md-9">
				<label>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments52 = array();
$arguments52['action'] = 'detail';
$arguments52['controller'] = 'Home';
// Rendering Array
$array53 = array();
$array53['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews', $renderingContext);
$arguments52['arguments'] = $array53;
$arguments52['additionalAttributes'] = NULL;
$arguments52['data'] = NULL;
$arguments52['package'] = NULL;
$arguments52['subpackage'] = NULL;
$arguments52['section'] = '';
$arguments52['format'] = '';
$arguments52['additionalParams'] = array (
);
$arguments52['addQueryString'] = false;
$arguments52['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments52['useParentRequest'] = false;
$arguments52['absolute'] = true;
$arguments52['class'] = NULL;
$arguments52['dir'] = NULL;
$arguments52['id'] = NULL;
$arguments52['lang'] = NULL;
$arguments52['style'] = NULL;
$arguments52['title'] = NULL;
$arguments52['accesskey'] = NULL;
$arguments52['tabindex'] = NULL;
$arguments52['onclick'] = NULL;
$arguments52['name'] = NULL;
$arguments52['rel'] = NULL;
$arguments52['rev'] = NULL;
$arguments52['target'] = NULL;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments55 = array();
$arguments55['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.title', $renderingContext);
$arguments55['keepQuotes'] = false;
$arguments55['encoding'] = 'UTF-8';
$arguments55['doubleEncode'] = true;
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$value57 = ($arguments55['value'] !== NULL ? $arguments55['value'] : $renderChildrenClosure56());
return !is_string($value57) && !(is_object($value57) && method_exists($value57, '__toString')) ? $value57 : htmlspecialchars($value57, ($arguments55['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments55['encoding'], $arguments55['doubleEncode']);
};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper58->setArguments($arguments52);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output51 .= $viewHelper58->initializeArgumentsAndRender();

$output51 .= '</label>
				<p>';
// Rendering ViewHelper WE\News\ViewHelpers\GetSubStringViewHelper
$arguments59 = array();
$arguments59['str'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.content', $renderingContext);
$arguments59['start'] = '0';
$arguments59['end'] = '190';
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper61 = $self->getViewHelper('$viewHelper61', $renderingContext, 'WE\News\ViewHelpers\GetSubStringViewHelper');
$viewHelper61->setArguments($arguments59);
$viewHelper61->setRenderingContext($renderingContext);
$viewHelper61->setRenderChildrenClosure($renderChildrenClosure60);
// End of ViewHelper WE\News\ViewHelpers\GetSubStringViewHelper

$output51 .= $viewHelper61->initializeArgumentsAndRender();

$output51 .= '</p>
				<div class="row pull-right" style="padding-right: 15px;">
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments62 = array();
$arguments62['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.categories', $renderingContext);
$arguments62['as'] = 'category';
$arguments62['key'] = '';
$arguments62['reverse'] = false;
$arguments62['iteration'] = NULL;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
						<span class="label label-default">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments65 = array();
$arguments65['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.name', $renderingContext);
$arguments65['keepQuotes'] = false;
$arguments65['encoding'] = 'UTF-8';
$arguments65['doubleEncode'] = true;
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$value67 = ($arguments65['value'] !== NULL ? $arguments65['value'] : $renderChildrenClosure66());

$output64 .= !is_string($value67) && !(is_object($value67) && method_exists($value67, '__toString')) ? $value67 : htmlspecialchars($value67, ($arguments65['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments65['encoding'], $arguments65['doubleEncode']);

$output64 .= '</span>
					';
return $output64;
};

$output51 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output51 .= '
				</div>
				<div class="row pull-left"  style="padding-left: 15px;">
					<span class="label label-default">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments68 = array();
$arguments68['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.user.name', $renderingContext);
$arguments68['keepQuotes'] = false;
$arguments68['encoding'] = 'UTF-8';
$arguments68['doubleEncode'] = true;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$value70 = ($arguments68['value'] !== NULL ? $arguments68['value'] : $renderChildrenClosure69());

$output51 .= !is_string($value70) && !(is_object($value70) && method_exists($value70, '__toString')) ? $value70 : htmlspecialchars($value70, ($arguments68['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments68['encoding'], $arguments68['doubleEncode']);

$output51 .= '</span>
				</div>
			</div>
		</div>
	';
return $output51;
};

$output45 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output45 .= '

';
return $output45;
};

$output37 .= '';

$output37 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments71 = array();
$arguments71['name'] = 'Category';
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments74 = array();
$arguments74['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategory', $renderingContext);
$arguments74['as'] = 'list';
$arguments74['key'] = '';
$arguments74['reverse'] = false;
$arguments74['iteration'] = NULL;
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments77 = array();
$arguments77['action'] = 'filter';
$arguments77['controller'] = 'Home';
// Rendering Array
$array78 = array();
$array78['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'list.identity', $renderingContext);
$arguments77['arguments'] = $array78;
$arguments77['additionalAttributes'] = NULL;
$arguments77['data'] = NULL;
$arguments77['package'] = NULL;
$arguments77['subpackage'] = NULL;
$arguments77['section'] = '';
$arguments77['format'] = '';
$arguments77['additionalParams'] = array (
);
$arguments77['addQueryString'] = false;
$arguments77['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments77['useParentRequest'] = false;
$arguments77['absolute'] = true;
$arguments77['class'] = NULL;
$arguments77['dir'] = NULL;
$arguments77['id'] = NULL;
$arguments77['lang'] = NULL;
$arguments77['style'] = NULL;
$arguments77['title'] = NULL;
$arguments77['accesskey'] = NULL;
$arguments77['tabindex'] = NULL;
$arguments77['onclick'] = NULL;
$arguments77['name'] = NULL;
$arguments77['rel'] = NULL;
$arguments77['rev'] = NULL;
$arguments77['target'] = NULL;
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments80 = array();
$arguments80['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'list.name', $renderingContext);
$arguments80['keepQuotes'] = false;
$arguments80['encoding'] = 'UTF-8';
$arguments80['doubleEncode'] = true;
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$value82 = ($arguments80['value'] !== NULL ? $arguments80['value'] : $renderChildrenClosure81());
return !is_string($value82) && !(is_object($value82) && method_exists($value82, '__toString')) ? $value82 : htmlspecialchars($value82, ($arguments80['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments80['encoding'], $arguments80['doubleEncode']);
};
$viewHelper83 = $self->getViewHelper('$viewHelper83', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper83->setArguments($arguments77);
$viewHelper83->setRenderingContext($renderingContext);
$viewHelper83->setRenderChildrenClosure($renderChildrenClosure79);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output76 .= $viewHelper83->initializeArgumentsAndRender();

$output76 .= '
	';
return $output76;
};

$output73 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
';
return $output73;
};

$output37 .= '';

$output37 .= '
';

return $output37;
}


}
#0             28489     