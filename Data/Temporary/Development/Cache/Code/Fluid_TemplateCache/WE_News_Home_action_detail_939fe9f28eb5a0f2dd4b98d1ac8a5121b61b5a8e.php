<?php class FluidCache_WE_News_Home_action_detail_939fe9f28eb5a0f2dd4b98d1ac8a5121b61b5a8e extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section Category
 */
public function section_a3c686e711e4720f99b4562bb3dbaae7ab658cf2(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output19 = '';

$output19 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments20 = array();
$arguments20['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategory', $renderingContext);
$arguments20['as'] = 'list';
$arguments20['key'] = '';
$arguments20['reverse'] = false;
$arguments20['iteration'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments23 = array();
$arguments23['action'] = 'filter';
$arguments23['controller'] = 'Home';
// Rendering Array
$array24 = array();
$array24['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'list.identity', $renderingContext);
$arguments23['arguments'] = $array24;
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['package'] = NULL;
$arguments23['subpackage'] = NULL;
$arguments23['section'] = '';
$arguments23['format'] = '';
$arguments23['additionalParams'] = array (
);
$arguments23['addQueryString'] = false;
$arguments23['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments23['useParentRequest'] = false;
$arguments23['absolute'] = true;
$arguments23['class'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$arguments23['name'] = NULL;
$arguments23['rel'] = NULL;
$arguments23['rev'] = NULL;
$arguments23['target'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments26 = array();
$arguments26['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'list.name', $renderingContext);
$arguments26['keepQuotes'] = false;
$arguments26['encoding'] = 'UTF-8';
$arguments26['doubleEncode'] = true;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$value28 = ($arguments26['value'] !== NULL ? $arguments26['value'] : $renderChildrenClosure27());
return !is_string($value28) && !(is_object($value28) && method_exists($value28, '__toString')) ? $value28 : htmlspecialchars($value28, ($arguments26['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments26['encoding'], $arguments26['doubleEncode']);
};
$viewHelper29 = $self->getViewHelper('$viewHelper29', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper29->setArguments($arguments23);
$viewHelper29->setRenderingContext($renderingContext);
$viewHelper29->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output22 .= $viewHelper29->initializeArgumentsAndRender();

$output22 .= '
	';
return $output22;
};

$output19 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
';

return $output19;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output30 = '';

$output30 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments31 = array();
$arguments31['name'] = 'Default';
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper33->setArguments($arguments31);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure32);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output30 .= $viewHelper33->initializeArgumentsAndRender();

$output30 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments34 = array();
$arguments34['name'] = 'Title';
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return 'Show By Category';
};

$output30 .= '';

$output30 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments36 = array();
$arguments36['name'] = 'Content';
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '


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
$arguments39 = array();
$arguments39['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments39['as'] = 'myNews';
$arguments39['key'] = '';
$arguments39['reverse'] = false;
$arguments39['iteration'] = NULL;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
		<hr>
		<div class="row">
			<div class="col-md-3" style="margin-bottom: 10px">
				<img width="100%" src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
			</div>
			<div class="col-md-9">
				<label>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments42 = array();
$arguments42['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.title', $renderingContext);
$arguments42['keepQuotes'] = false;
$arguments42['encoding'] = 'UTF-8';
$arguments42['doubleEncode'] = true;
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$value44 = ($arguments42['value'] !== NULL ? $arguments42['value'] : $renderChildrenClosure43());

$output41 .= !is_string($value44) && !(is_object($value44) && method_exists($value44, '__toString')) ? $value44 : htmlspecialchars($value44, ($arguments42['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments42['encoding'], $arguments42['doubleEncode']);

$output41 .= '</label>
				<p>';
// Rendering ViewHelper WE\News\ViewHelpers\GetSubStringViewHelper
$arguments45 = array();
$arguments45['str'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.content', $renderingContext);
$arguments45['start'] = '0';
$arguments45['end'] = '190';
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'WE\News\ViewHelpers\GetSubStringViewHelper');
$viewHelper47->setArguments($arguments45);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure46);
// End of ViewHelper WE\News\ViewHelpers\GetSubStringViewHelper

$output41 .= $viewHelper47->initializeArgumentsAndRender();

$output41 .= '</p>
				<div class="row pull-right" style="padding-right: 15px;">
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments48 = array();
$arguments48['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.categories', $renderingContext);
$arguments48['as'] = 'category';
$arguments48['key'] = '';
$arguments48['reverse'] = false;
$arguments48['iteration'] = NULL;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
						<span class="label label-default">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments51 = array();
$arguments51['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.name', $renderingContext);
$arguments51['keepQuotes'] = false;
$arguments51['encoding'] = 'UTF-8';
$arguments51['doubleEncode'] = true;
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$value53 = ($arguments51['value'] !== NULL ? $arguments51['value'] : $renderChildrenClosure52());

$output50 .= !is_string($value53) && !(is_object($value53) && method_exists($value53, '__toString')) ? $value53 : htmlspecialchars($value53, ($arguments51['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments51['encoding'], $arguments51['doubleEncode']);

$output50 .= '</span>
					';
return $output50;
};

$output41 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output41 .= '
				</div>
				<div class="row pull-left"  style="padding-left: 15px;">
					<span class="label label-default">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments54 = array();
$arguments54['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.user.name', $renderingContext);
$arguments54['keepQuotes'] = false;
$arguments54['encoding'] = 'UTF-8';
$arguments54['doubleEncode'] = true;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$value56 = ($arguments54['value'] !== NULL ? $arguments54['value'] : $renderChildrenClosure55());

$output41 .= !is_string($value56) && !(is_object($value56) && method_exists($value56, '__toString')) ? $value56 : htmlspecialchars($value56, ($arguments54['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments54['encoding'], $arguments54['doubleEncode']);

$output41 .= '</span>
				</div>
			</div>
		</div>
	';
return $output41;
};

$output38 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '

	<hr>
';
return $output38;
};

$output30 .= '';

$output30 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments57 = array();
$arguments57['name'] = 'Category';
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments60 = array();
$arguments60['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategory', $renderingContext);
$arguments60['as'] = 'list';
$arguments60['key'] = '';
$arguments60['reverse'] = false;
$arguments60['iteration'] = NULL;
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments63 = array();
$arguments63['action'] = 'filter';
$arguments63['controller'] = 'Home';
// Rendering Array
$array64 = array();
$array64['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'list.identity', $renderingContext);
$arguments63['arguments'] = $array64;
$arguments63['additionalAttributes'] = NULL;
$arguments63['data'] = NULL;
$arguments63['package'] = NULL;
$arguments63['subpackage'] = NULL;
$arguments63['section'] = '';
$arguments63['format'] = '';
$arguments63['additionalParams'] = array (
);
$arguments63['addQueryString'] = false;
$arguments63['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments63['useParentRequest'] = false;
$arguments63['absolute'] = true;
$arguments63['class'] = NULL;
$arguments63['dir'] = NULL;
$arguments63['id'] = NULL;
$arguments63['lang'] = NULL;
$arguments63['style'] = NULL;
$arguments63['title'] = NULL;
$arguments63['accesskey'] = NULL;
$arguments63['tabindex'] = NULL;
$arguments63['onclick'] = NULL;
$arguments63['name'] = NULL;
$arguments63['rel'] = NULL;
$arguments63['rev'] = NULL;
$arguments63['target'] = NULL;
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments66 = array();
$arguments66['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'list.name', $renderingContext);
$arguments66['keepQuotes'] = false;
$arguments66['encoding'] = 'UTF-8';
$arguments66['doubleEncode'] = true;
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$value68 = ($arguments66['value'] !== NULL ? $arguments66['value'] : $renderChildrenClosure67());
return !is_string($value68) && !(is_object($value68) && method_exists($value68, '__toString')) ? $value68 : htmlspecialchars($value68, ($arguments66['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments66['encoding'], $arguments66['doubleEncode']);
};
$viewHelper69 = $self->getViewHelper('$viewHelper69', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper69->setArguments($arguments63);
$viewHelper69->setRenderingContext($renderingContext);
$viewHelper69->setRenderChildrenClosure($renderChildrenClosure65);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output62 .= $viewHelper69->initializeArgumentsAndRender();

$output62 .= '
	';
return $output62;
};

$output59 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
';
return $output59;
};

$output30 .= '';

$output30 .= '
';

return $output30;
}


}
#0             23474     