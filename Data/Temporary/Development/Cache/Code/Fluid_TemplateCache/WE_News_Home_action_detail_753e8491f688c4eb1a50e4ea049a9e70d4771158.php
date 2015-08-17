<?php class FluidCache_WE_News_Home_action_detail_753e8491f688c4eb1a50e4ea049a9e70d4771158 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
		<hr>
		<div class="row">
			<div class="col-md-3" style="margin-bottom: 10px">
				<img width="100%" src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
			</div>
			<div class="col-md-9">
				<label>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.title', $renderingContext);
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = 'UTF-8';
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= !is_string($value3) && !(is_object($value3) && method_exists($value3, '__toString')) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments1['encoding'], $arguments1['doubleEncode']);

$output0 .= '</label>
				<p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments4 = array();
$arguments4['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.content', $renderingContext);
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = 'UTF-8';
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output0 .= !is_string($value6) && !(is_object($value6) && method_exists($value6, '__toString')) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments4['encoding'], $arguments4['doubleEncode']);

$output0 .= '"</p>
				<div class="row pull-right" style="padding-right: 15px;">
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments7 = array();
$arguments7['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.categories', $renderingContext);
$arguments7['as'] = 'category';
$arguments7['key'] = '';
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
						<span class="label label-default">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.name', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = 'UTF-8';
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output9 .= !is_string($value12) && !(is_object($value12) && method_exists($value12, '__toString')) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments10['encoding'], $arguments10['doubleEncode']);

$output9 .= '</span>
					';
return $output9;
};

$output0 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
				</div>
				<div class="row pull-left"  style="padding-left: 15px;">
					<span class="label label-default">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.user.name', $renderingContext);
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = 'UTF-8';
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());

$output0 .= !is_string($value15) && !(is_object($value15) && method_exists($value15, '__toString')) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments13['encoding'], $arguments13['doubleEncode']);

$output0 .= '</span>
				</div>
			</div>
		</div>

	<hr>
';

return $output0;
}
/**
 * section Category
 */
public function section_a3c686e711e4720f99b4562bb3dbaae7ab658cf2(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output16 = '';

$output16 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments17 = array();
$arguments17['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategory', $renderingContext);
$arguments17['as'] = 'list';
$arguments17['key'] = '';
$arguments17['reverse'] = false;
$arguments17['iteration'] = NULL;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments20 = array();
$arguments20['action'] = 'filter';
$arguments20['controller'] = 'Home';
// Rendering Array
$array21 = array();
$array21['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'list.identity', $renderingContext);
$arguments20['arguments'] = $array21;
$arguments20['additionalAttributes'] = NULL;
$arguments20['data'] = NULL;
$arguments20['package'] = NULL;
$arguments20['subpackage'] = NULL;
$arguments20['section'] = '';
$arguments20['format'] = '';
$arguments20['additionalParams'] = array (
);
$arguments20['addQueryString'] = false;
$arguments20['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments20['useParentRequest'] = false;
$arguments20['absolute'] = true;
$arguments20['class'] = NULL;
$arguments20['dir'] = NULL;
$arguments20['id'] = NULL;
$arguments20['lang'] = NULL;
$arguments20['style'] = NULL;
$arguments20['title'] = NULL;
$arguments20['accesskey'] = NULL;
$arguments20['tabindex'] = NULL;
$arguments20['onclick'] = NULL;
$arguments20['name'] = NULL;
$arguments20['rel'] = NULL;
$arguments20['rev'] = NULL;
$arguments20['target'] = NULL;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments23 = array();
$arguments23['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'list.name', $renderingContext);
$arguments23['keepQuotes'] = false;
$arguments23['encoding'] = 'UTF-8';
$arguments23['doubleEncode'] = true;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$value25 = ($arguments23['value'] !== NULL ? $arguments23['value'] : $renderChildrenClosure24());
return !is_string($value25) && !(is_object($value25) && method_exists($value25, '__toString')) ? $value25 : htmlspecialchars($value25, ($arguments23['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments23['encoding'], $arguments23['doubleEncode']);
};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper26->setArguments($arguments20);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output19 .= $viewHelper26->initializeArgumentsAndRender();

$output19 .= '
	';
return $output19;
};

$output16 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
';

return $output16;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output27 = '';

$output27 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments28 = array();
$arguments28['name'] = 'Default';
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper30->setArguments($arguments28);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output27 .= $viewHelper30->initializeArgumentsAndRender();

$output27 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments31 = array();
$arguments31['name'] = 'Title';
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return 'Show By Category';
};

$output27 .= '';

$output27 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments33 = array();
$arguments33['name'] = 'Content';
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '


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
		<hr>
		<div class="row">
			<div class="col-md-3" style="margin-bottom: 10px">
				<img width="100%" src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
			</div>
			<div class="col-md-9">
				<label>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments36 = array();
$arguments36['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.title', $renderingContext);
$arguments36['keepQuotes'] = false;
$arguments36['encoding'] = 'UTF-8';
$arguments36['doubleEncode'] = true;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$value38 = ($arguments36['value'] !== NULL ? $arguments36['value'] : $renderChildrenClosure37());

$output35 .= !is_string($value38) && !(is_object($value38) && method_exists($value38, '__toString')) ? $value38 : htmlspecialchars($value38, ($arguments36['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments36['encoding'], $arguments36['doubleEncode']);

$output35 .= '</label>
				<p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments39 = array();
$arguments39['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.content', $renderingContext);
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = 'UTF-8';
$arguments39['doubleEncode'] = true;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$value41 = ($arguments39['value'] !== NULL ? $arguments39['value'] : $renderChildrenClosure40());

$output35 .= !is_string($value41) && !(is_object($value41) && method_exists($value41, '__toString')) ? $value41 : htmlspecialchars($value41, ($arguments39['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments39['encoding'], $arguments39['doubleEncode']);

$output35 .= '"</p>
				<div class="row pull-right" style="padding-right: 15px;">
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments42 = array();
$arguments42['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.categories', $renderingContext);
$arguments42['as'] = 'category';
$arguments42['key'] = '';
$arguments42['reverse'] = false;
$arguments42['iteration'] = NULL;
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
						<span class="label label-default">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments45 = array();
$arguments45['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.name', $renderingContext);
$arguments45['keepQuotes'] = false;
$arguments45['encoding'] = 'UTF-8';
$arguments45['doubleEncode'] = true;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$value47 = ($arguments45['value'] !== NULL ? $arguments45['value'] : $renderChildrenClosure46());

$output44 .= !is_string($value47) && !(is_object($value47) && method_exists($value47, '__toString')) ? $value47 : htmlspecialchars($value47, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments45['encoding'], $arguments45['doubleEncode']);

$output44 .= '</span>
					';
return $output44;
};

$output35 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output35 .= '
				</div>
				<div class="row pull-left"  style="padding-left: 15px;">
					<span class="label label-default">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments48 = array();
$arguments48['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news.user.name', $renderingContext);
$arguments48['keepQuotes'] = false;
$arguments48['encoding'] = 'UTF-8';
$arguments48['doubleEncode'] = true;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$value50 = ($arguments48['value'] !== NULL ? $arguments48['value'] : $renderChildrenClosure49());

$output35 .= !is_string($value50) && !(is_object($value50) && method_exists($value50, '__toString')) ? $value50 : htmlspecialchars($value50, ($arguments48['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments48['encoding'], $arguments48['doubleEncode']);

$output35 .= '</span>
				</div>
			</div>
		</div>

	<hr>
';
return $output35;
};

$output27 .= '';

$output27 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments51 = array();
$arguments51['name'] = 'Category';
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments54 = array();
$arguments54['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategory', $renderingContext);
$arguments54['as'] = 'list';
$arguments54['key'] = '';
$arguments54['reverse'] = false;
$arguments54['iteration'] = NULL;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments57 = array();
$arguments57['action'] = 'filter';
$arguments57['controller'] = 'Home';
// Rendering Array
$array58 = array();
$array58['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'list.identity', $renderingContext);
$arguments57['arguments'] = $array58;
$arguments57['additionalAttributes'] = NULL;
$arguments57['data'] = NULL;
$arguments57['package'] = NULL;
$arguments57['subpackage'] = NULL;
$arguments57['section'] = '';
$arguments57['format'] = '';
$arguments57['additionalParams'] = array (
);
$arguments57['addQueryString'] = false;
$arguments57['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments57['useParentRequest'] = false;
$arguments57['absolute'] = true;
$arguments57['class'] = NULL;
$arguments57['dir'] = NULL;
$arguments57['id'] = NULL;
$arguments57['lang'] = NULL;
$arguments57['style'] = NULL;
$arguments57['title'] = NULL;
$arguments57['accesskey'] = NULL;
$arguments57['tabindex'] = NULL;
$arguments57['onclick'] = NULL;
$arguments57['name'] = NULL;
$arguments57['rel'] = NULL;
$arguments57['rev'] = NULL;
$arguments57['target'] = NULL;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments60 = array();
$arguments60['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'list.name', $renderingContext);
$arguments60['keepQuotes'] = false;
$arguments60['encoding'] = 'UTF-8';
$arguments60['doubleEncode'] = true;
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$value62 = ($arguments60['value'] !== NULL ? $arguments60['value'] : $renderChildrenClosure61());
return !is_string($value62) && !(is_object($value62) && method_exists($value62, '__toString')) ? $value62 : htmlspecialchars($value62, ($arguments60['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments60['encoding'], $arguments60['doubleEncode']);
};
$viewHelper63 = $self->getViewHelper('$viewHelper63', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper63->setArguments($arguments57);
$viewHelper63->setRenderingContext($renderingContext);
$viewHelper63->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output56 .= $viewHelper63->initializeArgumentsAndRender();

$output56 .= '
	';
return $output56;
};

$output53 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
';
return $output53;
};

$output27 .= '';

$output27 .= '
';

return $output27;
}


}
#0             22165     